<?php

/**
 * Controller for session like: login, logout, update an user
 * User: tzahi
 */
class SessionsController extends BaseController
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function index()
    {
        return View::make('sessions.index');
    }

    /**
     * Show the form for creating a new resource.
     * GET /$COLLECTION$/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }

    /**
     * Store a newly user  in database.
     * POST /$COLLECTION$
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $attempt = Auth::attempt(
            array(
                'email'    => $input['email'],
                'password' => $input['password']
            ));

        if ($attempt)
        {
            return Redirect::intended('/');
        }

        return Redirect::back()->with('invalid cardentials')->withInput();

    }

    public function update($id)
    {
        $user = $this->user->find($id);
        //$method = Request::method();

        if (Auth::check())
        {
            // The user is logged in...

            if (Request::isMethod('post'))
            {
                $input = Input::all();

                $allowedFields = array('username', 'first_name', 'last_name', 'email');

                foreach ($allowedFields as $field)
                {
                    if (Input::get($field) == null)
                    {
                        continue; // or throw exception and notify as false form
                    }

                    $user->$field = Input::get($field);
                }

                // special case for password
                $password = Input::get('password');
                if (!empty($password))
                {
                    $user->password = Hash::make(Input::get('password'));
                }

                $user->save();
            }

            return View::make('sessions.update_user')->with('user', $user);

        }

        return View::make('sessions/create');

    }

    /**
     * logut from the system and return back to the home page.
     * DELETE /$COLLECTION$/{id}
     *
     * @return Response
     */
    public function destroy()
    {

        Auth::logout();

        return View::make('hello');
    }

    /**
     * @return mixed
     */
    public function profile()
    {
        if (Auth::check())
        {
            return View::make('sessions/profile');
        }

        return View::make('hello');
    }

    /**
     * @return mixed
     */
    public function edit()
    {

        if (Request::isMethod('post'))
        {
            $input = Input::all();
            $id = $input['id'];

            return Redirect::intended('user/' . $id);
        }

        return View::make('sessions/edit_user');
    }

} 