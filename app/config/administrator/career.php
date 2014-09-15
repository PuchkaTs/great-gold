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
        'title'       => trans('administrator.careerTitle'),
        'single'      => trans('administrator.careerTitle'),
        'model'       => 'Career',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'header_en'     => array(
                'title' => 'Header',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'header_en'  => array(
                'title' => 'Header',
                'type'  => 'text',
            ),
            'body_en'     => array(
                'title' => 'Body',
                'type'  => 'wysiwyg',
            )
        )
    );
} else {
    return array(
        'title'       => trans('administrator.careerTitle'),
        'single'      => trans('administrator.careerTitle'),
        'model'       => 'Career',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'header_mn'     => array(
                'title' => 'Header',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'header_mn'  => array(
                'title' => 'Толгой',
                'type'  => 'text',
            ),
            'body_mn'     => array(
                'title' => 'Текст',
                'type'  => 'wysiwyg',
            )

        ),
    );
}

