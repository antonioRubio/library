<?php

class UserController extends BaseController
{
    public function login()
    {
        if (Request::isMethod('post')) {
            $rules = array(
                'username' => 'required',
                'password' => 'required'
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->passes()) {
                if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) {
                    return Redirect::route('books.index');
                }
                return Redirect::back()
                    ->withInput()
                    ->withErrors(array('password' => 'Credentials invalid.'));
            } else {
                return Redirect::back()
                    ->withInput()
                    ->withErrors($validator);
            }
        }
        return View::make('user/login');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login');
    }
}