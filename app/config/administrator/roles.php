<?php
/**
 * Model title
 *
 * @type string
 */

//dd(App::getLocale());
if (App::getLocale() == 'en')
{
    return array(
        'title'       => trans('administrator.roleTitle'),
        'single'      => trans('administrator.roleTitle'),
        'model'       => 'role',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'name'     => array(
                'title' => 'Name',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'name'  => array(
                'title' => 'Name',
                'type'  => 'text',
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
} else {
    return array(
        'title'       => trans('administrator.roleTitle'),
        'single'      => trans('administrator.roleTitle'),
        'model'       => 'role',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'name'     => array(
                'title' => 'Нэр',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'name'  => array(
                'title' => 'Нэр',
                'type'  => 'text',
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
}

