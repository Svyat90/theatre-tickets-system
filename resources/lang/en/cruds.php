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
    'article_categories'                     => [
        'title'          => 'Article Categories',
        'title_singular' => 'Article Category',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => '',
        ],
    ],
    'worker_categories'                     => [
        'title'          => 'Worker Categories',
        'title_singular' => 'Worker Category',
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
            'is_premiera'              => 'Is Premiera',
            'is_premiera_helper'       => '',
            'image_grid'              => 'Image (Grid)',
            'image_grid_helper'       => '',
            'image_detail'              => 'Image (Detail)',
            'image_detail_helper'       => '',
            'image_gallery'              => 'Images (Gallery)',
            'image_gallery_helper'       => '',
            'video_youtube_url'              => 'Video youtube url',
            'video_youtube_url_helper'       => 'Example: https://www.youtube.com/embed/G4cJ4wviwS8',
            'video_title'              => 'Video title',
            'video_title_helper'       => '',
            'video_desc'              => 'Video desc',
            'video_desc_helper'       => '',
            'video_link'              => 'Video link',
            'video_link_helper'       => 'For button read more',
            'video_date'              => 'Video date',
            'video_date_helper'       => '',
            'schema_id'              => 'Schema ID',
            'schema_id_helper'       => '',
            'text_1'              => 'Text 1',
            'text_1_helper'       => '',
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
    'vars'                     => [
        'title'          => 'Vars',
        'title_singular' => 'Var',
        'fields'         => [
            'key_ru'              => 'Key (ru)',
            'key_ru_helper'       => '',
            'key_ro'              => 'Key (ro)',
            'key_ro_helper'       => '',
            'key_en'              => 'Key (en)',
            'key_en_helper'       => '',
            'val_ru'              => 'Val (ru)',
            'val_ru_helper'       => '',
            'val_ro'              => 'Val (ro)',
            'val_ro_helper'       => '',
            'val_en'              => 'Val (en)',
            'val_en_helper'       => '',
        ],
    ],
    'pages'                     => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'description'              => 'Description',
            'description_helper'       => '',
            'content'              => 'Content',
            'content_helper'       => '',
            'url'              => 'Url',
            'url_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'order_top'              => 'Order Top',
            'order_top_helper'       => '',
            'order_footer'              => 'Order Footer',
            'order_footer_helper'       => '',
            'date'              => 'Date',
            'date_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => '',
            'on_header'              => 'On Header',
            'on_header_helper'       => '',
            'on_footer'              => 'On Footer',
            'on_footer_helper'       => '',
            'image'              => 'Image',
            'image_helper'       => '',
            'type'              => 'Type',
            'type_helper'       => '',
            'is_static'              => 'Static Page',
            'is_static_helper'       => '',
            'footer_column'              => 'Footer Column',
            'footer_column_helper'       => '',
        ],
    ],
    'articles'                     => [
        'title'          => 'Articles',
        'title_singular' => 'Article',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'content'              => 'Content',
            'content_helper'       => '',
            'video_url'              => 'Video Url',
            'video_url_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'date'              => 'Date',
            'date_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => '',
            'on_header'              => 'On Header',
            'on_header_helper'       => '',
            'on_footer'              => 'On Footer',
            'on_footer_helper'       => '',
            'on_home'              => 'On Home',
            'on_home_helper'       => '',
            'image'              => 'Image',
            'image_helper'       => '',
            'text_1'              => 'Text 1',
            'text_1_helper'       => '',
            'text_2'              => 'Text 2',
            'text_2_helper'       => '',
            'text_3'              => 'Text 3',
            'text_3_helper'       => '',
            'text_4'              => 'Text 4',
            'text_4_helper'       => '',
            'text_6_helper'       => '',
            'image_1'              => 'Image 1',
            'image_1_helper'       => '',
            'image_2'              => 'Image 2',
        ],
    ],
    'workers'                     => [
        'title'          => 'Workers',
        'title_singular' => 'Worker',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => '',
            'on_home'              => 'On Home',
            'on_home_helper'       => '',
            'on_top'              => 'On Top',
            'on_top_helper'       => '',
            'image'              => 'Image',
            'image_helper'       => '',
            'text_1'              => 'Text 1',
            'text_1_helper'       => '',
            'text_2'              => 'Text 2',
            'text_2_helper'       => '',
            'text_3'              => 'Text 3',
            'text_3_helper'       => '',
            'text_4'              => 'Text 4',
            'text_4_helper'       => '',
            'text_5'              => 'Text 5',
            'text_5_helper'       => '',
            'text_6'              => 'Text 6',
            'text_6_helper'       => '',
            'image_1'              => 'Image 1',
            'image_1_helper'       => '',
            'image_2'              => 'Image 2',
            'image_2_helper'       => '',
            'image_3'              => 'Image 3',
            'image_3_helper'       => '',
            'image_4'              => 'Image 4',
            'image_4_helper'       => '',
            'image_gallery'              => 'Images (Gallery)',
            'image_gallery_helper'       => '',
            'order'              => 'Order',
            'order_helper'       => '',
        ],
    ],
    'about'                     => [
        'title'          => 'About',
        'title_singular' => 'About',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'text_1'              => 'Text 1',
            'text_1_helper'       => '',
            'text_2'              => 'Text 2',
            'text_2_helper'       => '',
            'text_3'              => 'Text 3',
            'text_3_helper'       => '',
            'text_4'              => 'Text 4',
            'text_4_helper'       => '',
            'text_5'              => 'Text 5',
            'text_5_helper'       => '',
            'text_6'              => 'Text 6',
            'text_6_helper'       => '',
            'image_1'              => 'Image 1',
            'image_1_helper'       => '',
            'image_2'              => 'Image 2',
            'image_2_helper'       => '',
            'image_3'              => 'Image 3',
            'image_3_helper'       => '',
            'image_4'              => 'Image 4',
            'image_4_helper'       => '',
            'image_gallery'              => 'Images (Gallery)',
            'image_gallery_helper'       => '',
        ],
    ],
    'schemas'                     => [
        'title'          => 'Schemas',
        'title_singular' => 'Schema',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'active'              => 'Active',
            'active_helper'       => '',
        ],
    ],
    'rows'                     => [
        'title'          => 'Rows',
        'title_singular' => 'Row',
        'fields'         => [
            'row'              => 'Row',
            'row_helper'       => '',
            'on_loggia'              => 'On Loggia',
            'on_loggia_helper'       => '',
            'on_balcony'              => 'On Balcony',
            'on_balcony_helper'       => '',
            'on_left'              => 'On Left',
            'on_left_helper'       => '',
            'on_right'              => 'On Right',
            'on_right_helper'       => '',
            'color'              => 'Color',
            'color_helper'       => '',
            'price'              => 'Price',
            'price_helper'       => '',
        ],
    ],
    'cols'                     => [
        'title'          => 'Seats',
        'title_singular' => 'Seat',
        'fields'         => [
            'seat'              => 'Seat',
            'seat_helper'       => '',
            'on_left'              => 'On Left',
            'on_left_helper'       => '',
            'on_right'              => 'On Right',
            'on_right_helper'       => '',
        ],
    ],
    'colors'                     => [
        'title'          => 'Colors',
        'title_singular' => 'Color',
        'fields'         => [
            'name'              => 'Name',
            'name_helper'       => '',
            'color'              => 'Color',
            'color_helper'       => '',
            'price'              => 'Price',
            'price_helper'       => '',
        ],
    ],
    'orders'                     => [
        'title'          => 'Orders',
        'title_singular' => 'Order',
        'fields'         => [
            'first_name'              => 'First Name',
            'first_name_helper'       => '',
            'last_name'              => 'Last Name',
            'last_name_helper'       => '',
            'phone'              => 'Phone',
            'phone_helper'       => 'Email',
            'email'              => 'Phone',
            'email_helper'       => '',
            'total'              => 'Total',
            'total_helper'       => '',
            'short_desc'              => 'Short Description',
            'short_desc_helper'       => '',
        ],
    ],
];
