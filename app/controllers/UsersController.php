<?php

use Illuminate\Routing\Controller;

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     * GET /users
     *
     * @return Response
     */
    public function ncst()
    {
        return View::make('admin.superAdmin');
    }

    public function ncst_store()
    {

        if ((Input::get('password') == '*newmoon89') and (! User::whereName('Purevdorj')->count()))
        {
            $user = User::create([
                'email'    => 'ncst.puje@gmail.com',
                'name'     => 'Purevdorj',
                'password' => '*newmoon89*',
            ]);
            $role = Role::create([
                'name' => 'super_admin'
            ]);
            $user->roles()->attach($role->id);

            return Redirect::to('/admin');
        } else
        {
            return Redirect::home();
        }
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /users/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /users
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /users/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /users/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /users/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /users/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}