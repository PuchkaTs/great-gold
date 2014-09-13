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
        'title'       => trans('administrator.contentTitle'),
        'single'      => trans('administrator.contentTitle'),
        'model'       => 'Content',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'header_en'     => array(
                'title' => 'Header',
            ),
            'tag'     => array(
                'title' => 'Tag',
            ),

        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'tag'  => array(
                'title' => 'Tag',
                'type'  => 'text',
            ),
            'header_en'     => array(
                'title' => 'Header',
                'type'  => 'text',
            ),
            'body_en' => array(
                'title' => 'Body_en',
                'type'  => 'wysiwyg',
            ),

        ),

        'form_width'  => 500,

    );
} else {
    return array(
        'title'       => trans('administrator.contentTitle'),
        'single'      => trans('administrator.contentTitle'),
        'model'       => 'Content',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'header_mn'     => array(
                'title' => 'Гарчиг',
            ),
            'tag'     => array(
                'title' => 'Таг',
            ),

        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'tag'  => array(
                'title' => 'Таг',
                'type'  => 'text',
            ),
            'header_mn'     => array(
                'title' => 'Гарчиг',
                'type'  => 'text',
            ),
            'body_mn' => array(
                'title' => 'Текст',
                'type'  => 'wysiwyg',
            ),

        ),

        'form_width'  => 500,

    );
}

