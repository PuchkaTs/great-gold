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
        'title'       => trans('administrator.bannerTitle'),
        'single'      => trans('administrator.bannerTitle'),
        'model'       => 'Banner',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'Title',
            ),
            'position'     => array(
                'title' => 'Position',
            ),
            'image' => array(
                'title' => 'Image',
                'output' => '<img src="/uploads/banner/thumbs/(:value)" height="100" />',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Title',
                'type'  => 'text',
            ),
            'description'  => array(
                'title' => 'Description',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Position',
                'type'  => 'number',
            ),
            'menu' => array(
                'type' => 'relationship',
                'title' => 'In menu',
                'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
            ),
            'image' => array(
                'title' => 'Image 900x300',
                'type' => 'image',
                'location' => public_path() . '/uploads/banner/',
                'naming' => 'random',
                'length' => 20,
                'size_limit' => 2,
                'sizes' => array(
//                    array(65, 57, 'crop', public_path() . '/uploads/banner/thumbs/small/', 100),
//                    array(220, 138, 'fit', public_path() . '/uploads/products/thumbs/medium/', 100),
                    array(1200, 400, 'crop', public_path() . '/uploads/banner/', 100),
                    array(300, 100, 'landscape', public_path() . '/uploads/banner/thumbs/', 100)
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
            'menu' => array(
                'type' => 'relationship',
                'title' => 'In menu',
                'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
            )
        ),

    );
} else {
    return array(
        'title'       => trans('administrator.bannerTitle'),
        'single'      => trans('administrator.bannerTitle'),
        'model'       => 'Banner',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'гарчиг',
            ),
            'description'     => array(
                'title' => 'Тайлбар',
            ),
            'position'     => array(
                'title' => 'Байрлал',
            ),
            'image' => array(
                'title' => 'Зураг',
                'output' => '<img src="/uploads/banner/thumbs/(:value)" height="100" />',
            )
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
            'menu' => array(
                'type' => 'relationship',
                'title' => 'Цэс',
                'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
            ),
            'image' => array(
                'title' => 'Зураг 900x300',
                'type' => 'image',
                'location' => public_path() . '/uploads/banner/',
                'naming' => 'random',
                'length' => 20,
                'size_limit' => 2,
                'sizes' => array(
                    array(1200, 400, 'crop', public_path() . '/uploads/banner/', 100),
                    array(300, 100, 'landscape', public_path() . '/uploads/banner/thumbs/', 100)
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
        ),

    );
}

