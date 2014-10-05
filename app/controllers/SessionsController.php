<?php
/**
 * Created by PhpStorm.
 * User: tzahi
 * Date: 10/5/14
 * Time: 4:22 PM
 */

class SessionsController extends BaseController{

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
     * Store a newly created resource in storage.
     * POST /$COLLECTION$
     *
     * @return Response
     */
    public function store()
    {
        $input =Input::all();
        $attempt =Auth::attempt(
        array(
            'email'=> $input['email'],
            'password'=> $input['password']
        ));

        if($attempt)
        {
            return Redirect::intended('/');
        }
        return Redirect::back()->with('invalid cardentials')->withInput();

    }



    /**
     * Remove the specified resource from storage.
     * DELETE /$COLLECTION$/{id}
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();

       return Redirect::home();
    }

} 