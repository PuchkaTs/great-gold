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
        'title'       => trans('administrator.projectTitle'),
        'single'      => trans('administrator.projectTitle'),
        'model'       => 'Project',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title_en'     => array(
                'title' => 'Title',
            ),
            'type' => array(
                'type' => 'enum'
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'type' => array(
                'type' => 'enum',
                'title' => 'Type',
                'options' => array('Project', 'News'), //must be an array
            ),
            'tags' => array(
                'type' => 'relationship',
                'title' => 'Tags',
                'name_field' => 'tag_en', //what column or accessor on the other table you want to use to represent this object
            ),
            'title_en'  => array(
                'title' => 'Title',
                'type'  => 'text',
            ),
            'body_en' => array(
                'title' => 'Body_en',
                'type'  => 'wysiwyg',
            ),

        ),

        /**
         * Filters
         */
        'filters' => array(
            'type' => array(
                'type' => 'enum',
                'title' => 'Type',
                'options' => array('Project', 'News'), //must be an array
            ),
            'tags' => array(
                'type' => 'relationship',
                'title' => 'Tags',
                'name_field' => 'tag_en', //what column or accessor on the other table you want to use to represent this object
            ),
            'title_en'  => array(
                'title' => 'Title',
                'type'  => 'text',
            ),
        ),

        'form_width'  => 500,

    );
} else {
    return array(
        'title'       => trans('administrator.projectTitle'),
        'single'      => trans('administrator.projectTitle'),
        'model'       => 'Project',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title_mn'     => array(
                'title' => 'Гарчиг',
            ),
            'type' => array(
                'type' => 'enum'
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'type' => array(
                'type' => 'enum',
                'title' => 'Төрөл',
                'options' => array('Project', 'News'), //must be an array
            ),
            'title_mn'  => array(
                'title' => 'Гарчиг',
                'type'  => 'text',
            ),
            'body_mn' => array(
                'title' => 'Текст',
                'type'  => 'wysiwyg',
            ),

        ),

        /**
         * Filters
         */
        'filters' => array(
            'type' => array(
                'type' => 'enum',
                'title' => 'Төрөл',
                'options' => array('Project', 'News'), //must be an array
            ),
            'tags' => array(
                'type' => 'relationship',
                'title' => 'Таг',
                'name_field' => 'tag_en', //what column or accessor on the other table you want to use to represent this object
            ),
            'title_mn'  => array(
                'title' => 'Гарчиг',
                'type'  => 'text',
            ),
        ),

        'form_width'  => 500,

    );
}

