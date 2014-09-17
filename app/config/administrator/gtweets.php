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
        'title'       => trans('administrator.gtweetTitle'),
        'single'      => trans('administrator.gtweetTitle'),
        'model'       => 'Gtweet',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title_en'     => array(
                'title' => 'Title',
            ),
            'status_en'     => array(
                'title' => 'Tweet',
            ),
            'position'     => array(
                'title' => 'Position',
            ),
            'image' => array(
                'title' => 'Image',
                'output' => '<img src="/uploads/tweets/(:value)" height="100" />',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title_en'  => array(
                'title' => 'Title',
                'type'  => 'text',
            ),
            'status_en'  => array(
                'title' => 'Tweet',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Position',
                'type'  => 'number',
            ),
            'image' => array(
                'title' => 'Image 200x200',
                'type' => 'image',
                'location' => public_path() . '/uploads/tweets/',
                'naming' => 'random',
                'length' => 20,
                'size_limit' => 2,
                'sizes' => array(
                    array(200, 200, 'crop', public_path() . '/uploads/tweets/', 100),
                )
            )

        ),


    );
} else {
    return array(
        'title'       => trans('administrator.bannerTitle'),
        'single'      => trans('administrator.bannerTitle'),
        'model'       => 'Gtweet',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title_mn'     => array(
                'title' => 'Нэр',
            ),
            'status_mn'     => array(
                'title' => 'Твит',
            ),
            'position'     => array(
                'title' => 'Байрлал',
            ),
            'image' => array(
                'title' => 'Image',
                'output' => '<img src="/uploads/tweets/(:value)" height="100" />',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title_mn'  => array(
                'title' => 'Нэр',
                'type'  => 'text',
            ),
            'status_mn'  => array(
                'title' => 'Твит',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Байрлал',
                'type'  => 'number',
            ),
            'image' => array(
                    'title' => 'Зураг 200x200',
                    'type' => 'image',
                    'location' => public_path() . '/uploads/tweets/',
                    'naming' => 'random',
                    'length' => 20,
                    'size_limit' => 2,
                    'sizes' => array(
                    array(200, 200, 'crop', public_path() . '/uploads/tweets/', 100)
                )
            )

        ),

    );
}

