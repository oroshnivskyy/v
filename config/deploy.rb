set :application, "vushuvanka"
set :repository,  "https://github.com/oroshnivskyy/v"
set :scm, :git
set :app_dir, "/home/ubuntu/#{application}"
set :deploy_to, "#{app_dir}/deploy"
set :deploy_via, :remote_cache
set :use_sudo, false
set :copy_exclude, [".git", ".gitignore", ".gitmodules", "Capfile", "config/deploy.rb"]
set :branch, "master"
set :keep_releases, 10

depend :remote, :command, "curl"
depend :remote, :command, "php"

after 'deploy:finalize_update', 'composer:install'

server "ec2", :app
#role :db,  "your primary db-server here", :primary => true # This is where Rails migrations will run
#role :db,  "your slave db-server here"

# if you want to clean up old releases on each deploy uncomment this:
# after "deploy:restart", "deploy:cleanup"


#after :deploy, "apache:reload"
 
namespace :deploy do
 
    task :update do
        transaction do
            update_code
            copy_config
            composer_install
            link_shared
            fix_permissions
        end
    end
     
    task :finalize_update do
        transaction do
            run "chmod -R g+w #{releases_path}/#{release_name}"
            symlink
        end
    end

    task :symlink do
        transaction do
            run "ln -nfs #{release_path}/www #{app_dir}/www"
        end
    end
 
    desc "Link Laravel shared directories."
    task :link_shared do
        transaction do
            #run "ln -nfs #{shared_path}/system #{current_release}/public/system"
        end
    end
 
#    desc "Run Artisan migrate task."
#    task :migrate do
#        run "php #{current_release}/artisan migrate"
#    end
 
    desc "Deploy and execute pending migrations."
    task :migrations do
        update_code
        copy_config
        composer_install
        link_shared
        fix_permissions
        migrate
    end
 
    desc "Set Laravel storage directory world-writable."
    task :fix_permissions do
        transaction do
            run "chmod -R a+w #{current_release}/app/storage"
        end
    end
 
    desc "Install dependencies with Composer"
    task :composer_install do
        transaction do
            run "cd #{current_release};/usr/local/bin/composer install --no-dev --no-progress"
        end
    end
 
    desc "Copy server-specific configuration files."
    task :copy_config do
        transaction do
            #run "cp #{shared_path}/config/* #{current_release}/app/config/"
        end
    end
 
end

namespace :apache do
    desc "Reload apache "
    task :reload, :roles => :app do
        run "sudo service apache2 restart"
    end
end