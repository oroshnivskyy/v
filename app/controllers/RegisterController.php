<?php
class RegisterController extends Controller{
    public function index(){
        return View::make('users.register');
    }
    
    public function store(){
        $userData = [
            'username' => Input::get('username'),
            'password' => Input::get('old-password')
        ];
        if ((Input::get('new-password')===Input::get('new-password-more')) &&
            Auth::attempt($userData, false, false)) {

            $user = User::where('username','=', $userData['username'])->first();
            $user->password = Hash::make(Input::get('new-password'));
            $user->save();
            return Redirect::to('login');
        } else {
            return Redirect::to('register')
                ->with('register_errors', true);
        }
    }
}
