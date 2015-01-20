<?php

class AuthController extends BaseController
{
    protected $layout = 'layouts.login';

    public function login()
    {
        return View::make('auth.login');
    }

    public function postLogin()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email|exists:users',
            'password' => 'required|alphaNum|min:5'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            // Validation failed send them back with errors
            return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
        } else {

            // Login attempt
            if (Auth::attempt(array('email'=>Input::get('email'), 'password' => Input::get('password') ))) {

                // validation successful!
                return Redirect::intended('login');

            } else {

                // password may not be valid send them back to login with error
                return Redirect::to('login')->withErrors(array('login'=>'Password may not be valid'))->withInput(Input::except('password'));

            }

        }
    }
    public function logout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('login'); // redirect the user to the login screen
    }

}
