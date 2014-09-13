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
        'title'       => trans('administrator.menuTitle'),
        'single'      => trans('administrator.menuTitle'),
        'model'       => 'Menu',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'name'     => array(
                'title' => 'Name',
            ),
            'slug'     => array(
                'title' => 'Slug',
            ),
            'position'     => array(
                'title' => 'Position',
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'name'  => array(
                'title' => 'Name',
                'type'  => 'text',
            ),
            'slug'     => array(
                'title' => 'Slug',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Position',
                'type'  => 'number',
            )

        ),

        /**
         * Action permissions
         */
        'action_permissions'=> array(
            'create' => function($model)
                {
                    return Auth::user()->hasRole('super_admin');
                },
            'update' => function($model)
                {
                    return Auth::user()->hasRole('super_admin');
                },
            'delete' => function($model)
                {
                    return Auth::user()->hasRole('super_admin');
                }
        ),
    );
} else {
    return array(
        'title'       => trans('administrator.menuTitle'),
        'single'      => trans('administrator.menuTitle'),
        'model'       => 'Menu',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'name'     => array(
                'title' => 'Нэр',
            ),
            'slug'     => array(
                'title' => 'Зам',
            ),
            'position'     => array(
                'title' => 'Байрлал',
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'name'  => array(
                'title' => 'Нэр',
                'type'  => 'text',
            ),
            'slug'     => array(
                'title' => 'Зам',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Байрлал',
                'type'  => 'number',
            )

        ),

        /**
         * Action permissions
         */
        'action_permissions'=> array(
            'create' => function($model)
                {
                    return Auth::user()->hasRole('super_admin');
                },
            'update' => function($model)
                {
                    return Auth::user()->hasRole('super_admin');
                },
            'delete' => function($model)
                {
                    return Auth::user()->hasRole('super_admin');
                }
        ),

    );
}

