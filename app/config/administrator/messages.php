<?php
/**
 * Model title
 *
 * @type string
 */
return array(
    'title' => trans('administrator.messageTitle'),
    'single' => trans('administrator.messageTitle'),
    'model' => 'Message',
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
        'phone' => array(
            'title' => 'Phone',
        ),
        'body' => array(
            'title' => 'Message',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'body' => array(
            'title' => 'Name',
            'type' => 'wysiwyg',
        )

    ),

    'action_permissions'=> array(
        'delete' => function($model)
            {
                return Auth::user()->hasRole('super_admin');
            },
        'create' => function($model)
            {
                return Auth::user()->hasRole('super_admin');
            },
        'update' => function($model)
            {
                return Auth::user()->hasRole('super_admin');
            },
    ),

);
