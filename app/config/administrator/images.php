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
        'title'       => trans('administrator.imageTitle'),
        'single'      => trans('administrator.imageTitle'),
        'model'       => 'Image',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'description'     => array(
                'title' => 'Description',
            ),
            'position'     => array(
                'title' => 'Position',
            ),
            'image' => array(
                'title' => 'Image',
                'output' => '<img src="/uploads/projects/(:value)" height="100" />',
            ),
            'project' => array(
                'relationship' => 'project',
                'title' => 'Belongs to a project',
                'select' => '(:table).title_en', //what column or accessor on the other table you want to use to represent this object
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'description'  => array(
                'title' => 'Description',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Position',
                'type'  => 'number',
            ),
            'project' => array(
                'type' => 'relationship',
                'title' => 'Belongs to a project',
                'name_field' => 'title_en', //what column or accessor on the other table you want to use to represent this object
            ),
            'image' => array(
                'title' => 'Image 900x450',
                'type' => 'image',
                'location' => public_path() . '/uploads/projects/',
                'naming' => 'random',
                'length' => 20,
                'size_limit' => 2,
                'sizes' => array(
//                    array(65, 57, 'landscape', public_path() . '/uploads/banner/thumbs/small/', 100),
//                    array(220, 138, 'fit', public_path() . '/uploads/products/thumbs/medium/', 100),
                    array(900, 450, 'crop', public_path() . '/uploads/projects/', 100),
                    array(120, 120, 'crop', public_path() . '/uploads/projects/thumbs/', 100),
                    array(300, 200, 'crop', public_path() . '/uploads/projects/300x200/', 100)
                )
            )

        ),

        /**
         * Filters
         */
        'filters' => array(
            'id',
            'name' => array(
                'title' => 'Title',
            ),
            'position' => array(
                'title' => 'Position',
                'type'  => 'number',
            ),
            'project' => array(
                'type' => 'relationship',
                'title' => 'Belongs to a project',
                'name_field' => 'title_en', //what column or accessor on the other table you want to use to represent this object
            )
        ),

    );
} else {
    return array(
        'title'       => trans('administrator.bannerTitle'),
        'single'      => trans('administrator.bannerTitle'),
        'model'       => 'Image',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'description'     => array(
                'title' => 'Тайлбар',
            ),
            'position'     => array(
                'title' => 'Байрлал',
            ),
            'image' => array(
                'title' => 'Зураг',
                'output' => '<img src="/uploads/projects/(:value)" height="100" />',
            ),
            'project' => array(
                'relationship' => 'project',
                'title' => 'Belongs to a project',
                'select' => '(:table).title_mn', //what column or accessor on the other table you want to use to represent this object
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Гарчиг',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Байрлал',
                'type'  => 'number',
            ),
            'project' => array(
                'type' => 'relationship',
                'title' => 'Хамаарах төсөл',
                'name_field' => 'title_mn', //what column or accessor on the other table you want to use to represent this object
            ),
            'image' => array(
                'title' => 'Зураг 900x450',
                'type' => 'image',
                'location' => public_path() . '/uploads/projects/',
                'naming' => 'random',
                'length' => 20,
                'size_limit' => 2,
                'sizes' => array(
                    array(900, 450, 'crop', public_path() . '/uploads/projects/', 100),
                    array(120, 120, 'crop', public_path() . '/uploads/projects/thumbs/', 100),
                    array(300, 200, 'crop', public_path() . '/uploads/projects/300x200/', 100)
                )
            )

        ),

        /**
         * Filters
         */
        'filters' => array(
            'id',
            'name' => array(
                'title' => 'Name',
            ),
            'position' => array(
                'title' => 'Position',
                'type'  => 'number',
            ),
            'project' => array(
                'type' => 'relationship',
                'title' => 'Хамаарах төсөл',
                'name_field' => 'title_mn', //what column or accessor on the other table you want to use to represent this object
            )
        ),

    );
}

