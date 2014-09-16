<?php

use Acme\Forms\SignInForm;

class SessionController extends \BaseController {


    private $signInForm;

    function __construct(SignInForm $signInForm)
    {
        $this->beforeFilter('guest', ['except' => 'destroy']);
        $this->signInForm = $signInForm;
    }

    /**
     * Display a listing of the resource.
     * GET /session
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /session/create
     *
     * @return Response
     */
    public function create()
    {
//        User::create([
//            'email'     => 'ncst.puje@gmail.com',
//            'password'  => 'secret',
//            'name'      => 'purevdorj'
//        ]);

        if (Auth::check())
        {
            return Redirect::to('admin/contents');
        }

        return View::make('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /session
     *
     * @return Response
     */
    public function store()
    {
        //fetch the form input
        //validate  the form


        $formData = Input::only('email', 'password');

        //if is valid, then try to sign in
        $this->signInForm->validate($formData);

        if (Auth::attempt($formData))
        {
            Flash::message('Welcome back!');

            return Redirect::intended('/admin');
        } else
        {
            Flash::message('Credentials does not match');

            return Redirect::back()->withInput();
        }

    }

    public function destroy()
    {
        Auth::logout();
        Flash::message('You have logged out.');

        return Redirect::to('/');
    }



}