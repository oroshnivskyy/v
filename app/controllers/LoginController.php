<?php
class LoginController extends Controller{
    public function index(){
        return View::make('users.login');
    }
    
    public function store(){
        $userData = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        if (Auth::attempt($userData)) {
            return Redirect::to('admin');
        } else {
            return Redirect::to('login')
                ->with('login_errors', true);
        }
    }
}
