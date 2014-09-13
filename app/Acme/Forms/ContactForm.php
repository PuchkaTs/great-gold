<?php


namespace Acme\Forms;


use Laracasts\Validation\FormValidator;

class ContactForm extends FormValidator {
    protected $rules = [
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'body'=> 'required'
    ];
} 