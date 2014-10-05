<?php
/**
 * Created by PhpStorm.
 * User: tzahi
 * Date: 10/5/14
 * Time: 2:19 PM
 */

class LoginAuthController extends BaseController {

    public function showLogin()
    {
        if(\Illuminate\Support\Facades\Auth::check())
        {
            return Redirect::to('')->with('success', 'You are already logged in');
        }
        return View::Make('login');
    }


} 