<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	 DB::table('users')->truncate();

        $user = [
            [
                'username' => 'rosh',
                'email' => 'oleg.roshnivsky@gmail.com',
                'password' => Hash::make('123'),
                'is_admin' => true,
                'active' => true
            ],
            [
                'username' => 'maryana',
                'email' => 'maryanka60@gmail.com',
                'password' => Hash::make('123'),
                'is_admin' => true,
                'active' => true
            ]
        ];

        // Uncomment the below to run the seeder
         DB::table('users')->insert($user);
    }

}