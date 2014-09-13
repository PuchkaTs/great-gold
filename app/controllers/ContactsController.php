<?php

use Acme\Forms\ContactForm;
use Illuminate\Routing\Controller;

class ContactsController extends Controller {

    private $contactForm;

    function __construct(ContactForm $contactForm)
    {
        $this->contactForm = $contactForm;
    }


    /**
	 * Display a listing of the resource.
	 * GET /contacts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /contacts/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config['center'] = '47.90615, 106.90177';
        $config['zoom'] = '14';
        $config['scrollwheel'] = false;
        Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = '47.90615, 106.90177';
        Gmaps::add_marker($marker);
        $map = Gmaps::create_map();
//        echo "<html><head>".$map['js']."</head><body>".$map['html']."</body></html>";
		return View::make('pages.contact_us')->withMap($map);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /contacts
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::get();

        $this->contactForm->validate($input);

        Message::create($input);

        Flash::message('Thank you! Your message has been successfully sent. We will contact you very soon!');

        return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /contacts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /contacts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /contacts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /contacts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}