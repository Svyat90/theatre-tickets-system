<?php

return [
    'base' => [
        'fields'         => [
            'id'                => 'ID',
            'image'             => 'Image',
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
    'spectacles'                     => [
        'title'          => 'Spectacles',
        'title_singular' => 'Spectacle',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'author'              => 'Author',
            'author_helper'       => '',
            'producer'              => 'Producer',
            'producer_helper'       => '',
            'description'              => 'Description',
            'description_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'min_age'              => 'Minimum age',
            'min_age_helper'       => '',
            'duration'              => 'Duration',
            'duration_helper'       => '',
            'start_at'              => 'Start At',
            'start_at_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => '',
            'image_grid'              => 'Image (Grid)',
            'image_grid_helper'       => '',
            'image_detail'              => 'Image (Detail)',
            'image_detail_helper'       => '',
            'image_gallery'              => 'Images (Gallery)',
            'image_gallery_helper'       => '',
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
    'tags'                     => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
        ],
    ],
];
