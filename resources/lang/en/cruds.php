<?php

return [
    'base' => [
        'fields'         => [
            'id'                => 'ID',
            'created_at'        => 'Created at',
            'updated_at'        => 'Updated at',
            'deleted_at'        => 'Deleted at',
        ]
    ],
    'user'                         => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'name'                         => 'Name',
            'name_helper'                  => '',
            'email'                        => 'Email',
            'email_helper'                 => '',
            'password'                     => 'Password',
            'password_helper'              => '',
        ],
    ],
    'categories'                     => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => '',
        ],
    ],
    'languages'                     => [
        'title'          => 'Languages',
        'title_singular' => 'Language',
        'fields'         => [
            'locale'              => 'Locale',
            'locale_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => ''
        ],
    ],
];
