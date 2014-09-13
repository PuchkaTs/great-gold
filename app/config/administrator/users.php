<?php
/**
 * Model title
 *
 * @type string
 */
return array(
    'title' => trans('administrator.userTitle'),
    'single' => trans('administrator.userTitle'),
    'model' => 'user',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Name',
        ),
        'email' => array(
            'title' => 'Email',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Password',
            'type' => 'text',
        ),
        'roles' => array(
            'type' => 'relationship',
            'title' => 'Role',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        )

    ),
    /**
     * permisssion
     */
    'permission'=> function()
        {
            return Auth::user()->hasRole('super_admin');
        },

);
