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
        'title'       => trans('administrator.tagTitle'),
        'single'      => trans('administrator.tagTitle'),
        'model'       => 'tag',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'tag_en'     => array(
                'title' => 'Tag',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'tag_en'  => array(
                'title' => 'Tag',
                'type'  => 'text',
            )

        ),

    );
} else {
    return array(
        'title'       => trans('administrator.tagTitle'),
        'single'      => trans('administrator.tagTitle'),
        'model'       => 'tag',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'tag_mn'     => array(
                'title' => 'Таг',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'tag_mn'  => array(
                'title' => 'Таг',
                'type'  => 'text',
            )

        ),


    );
}

