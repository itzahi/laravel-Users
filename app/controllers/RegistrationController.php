<?php


class RegistrationController extends BaseController {


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registration/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $rules = array('first_name'=>'required','last_name'=>'required', 'username' => 'required', 'email' => 'required|unique:users|email', 'password' => 'required');

        $v = Validator::make($input, $rules);

        if($v->passes())
        {
            $password = $input['password'];
            $password = Hash::make($password);

            $user = new User();
            $user->first_name= $input['first_name'];
            $user->last_name= $input['last_name'];
            $user->username = $input['username'];
            $user->email = $input['email'];
            $user->password = $password;
            $user->save();

            return Redirect::to('login');

        } else {

            return Redirect::to('register')->withInput()->withErrors($v);

        }

    }

}