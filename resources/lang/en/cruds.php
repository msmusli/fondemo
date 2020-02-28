<?php

return [
    'userManagement'    => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'media'    => [
        'title'          => 'Media Uploads',
        'title_singular' => 'Media management',
    ],
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
       'user'              => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'first_nmae'               => 'First Nmae',
            'first_nmae_helper'        => '',
            'telephone'                => 'Telephone',
            'telephone_helper'         => '',
            'fax'                      => 'Fax',
            'fax_helper'               => '',
            'company'                  => 'Company',
            'company_helper'           => '',
            'companyid'                => 'Companyid',
            'companyid_helper'         => '',
            'address_1'                => 'Address 1',
            'address_1_helper'         => '',
            'address_2'                => 'Address 2',
            'address_2_helper'         => '',
            'city'                     => 'City',
            'city_helper'              => '',
            'post_code'                => 'Post Code',
            'post_code_helper'         => '',
            'country'                  => 'Country',
            'country_helper'           => '',
            'region_state'             => 'Region State',
            'region_state_helper'      => '',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentPage'       => [
        'title'          => 'posts',
        'title_singular' => 'post',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'title'                 => 'Title',
            'title_helper'          => '',
            'category'              => 'Categories',
            'category_helper'       => '',
            'tag'                   => 'Tags',
            'tag_helper'            => '',
            'page_text'             => 'Full Text',
            'page_text_helper'      => '',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => '',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => '',
        ],
    ],
   'grand'          => [
        'title'          => 'Grands',
        'title_singular' => 'Grand',
    ],
    'year'           => [
        'title'          => 'Year',
        'title_singular' => 'Year',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'year'              => 'Year',
            'year_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'ngo'               => 'Ngo',
            'ngo_helper'        => '',
        ],
    ],
    'species'        => [
        'title'          => 'Species',
        'title_singular' => 'Species',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'image'             => 'Image',
            'image_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'ngo'            => [
        'title'          => 'Ngo',
        'title_singular' => 'Ngo',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'videolink'          => 'Videolink',
            'videolink_helper'   => '',
            'donate'             => 'Donate',
            'donate_helper'      => '',
            'species'            => 'Species',
            'species_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'slider'            => [
        'title'          => 'slider',
        'title_singular' => 'slider',
        'fields'         => [
            'id'           => 'ID',
            'id_helper'    => '',
            'title'         => 'Name',
            'title_helper'  => '',
            'image'        => 'Image',
            'image_helper' => '1650 px * 750 px',
            'description'        => 'Description',
            'description_helper' => '',
        ],
    ],
     'gallery'         => [
        'title'          => 'Gallery',
        'title_singular' => 'Gallery',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'gallery'           => 'Gallery',
            'gallery_helper'    => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'exhibiton'       => [
        'title'          => 'Exhibitons',
        'title_singular' => 'Exhibiton',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'gallery'            => 'Gallery',
            'gallery_helper'     => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'digitalBrochure' => [
        'title'          => 'Digital Brochures',
        'title_singular' => 'Digital Brochure',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'pdf'               => 'Pdf',
            'pdf_helper'        => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'advisor'         => [
        'title'          => 'Advisor',
        'title_singular' => 'Advisor',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photp'              => 'Photp',
            'photp_helper'       => '',
            'level'              => 'Level',
            'level_helper'       => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
     'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
            'slug'               => 'Slug',
            'slug_helper'        => '',
        ],
    ],
    'productTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'product'           => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'price'              => 'Price',
            'price_helper'       => '',
            'category'           => 'Categories',
            'category_helper'    => '',
            'tag'                => 'Tags',
            'tag_helper'         => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'exhibitation'       => [
        'title'          => 'Exhibitation',
        'title_singular' => 'Exhibitation',
    ],
    'exhibationCategory' => [
        'title'          => 'Exhibation Category',
        'title_singular' => 'Exhibation Category',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => '',
            'title'                         => 'Title',
            'title_helper'                  => '',
            'description'                   => 'Description',
            'description_helper'            => '',
            'type'                          => 'Type',
            'type_helper'                   => '',
            'e_cat_video'                   => 'E Cat Video',
            'e_cat_video_helper'            => '',
            'e_cat_post_video'              => 'E Cat Post Video',
            'e_cat_post_video_helper'       => '',
            'e_cat_post_description'        => 'E Cat Post Description',
            'e_cat_post_description_helper' => '',
            'created_at'                    => 'Created at',
            'created_at_helper'             => '',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => '',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => '',
            'year'                          => 'Year',
            'year_helper'                   => '',
             'public_date'                   => 'Public Date',
            'public_date_helper'            => '',
        ],
    ],
    'exhibitionPost'     => [
        'title'          => 'Exhibition Post',
        'title_singular' => 'Exhibition Post',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => '',
            'exhibition_category'        => 'Exhibition Category',
            'exhibition_category_helper' => '',
            'name'                       => 'Name',
            'name_helper'                => '',
            'feature_image'              => 'Feature Image',
            'feature_image_helper'       => '',
            'content'                    => 'Content',
            'content_helper'             => '',
            'created_at'                 => 'Created at',
            'created_at_helper'          => '',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => '',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => '',
             'public_date'                => 'Public Date',
            'public_date_helper'         => '',
        ],
    ],
    'exhibitionGallery'  => [
        'title'          => 'Exhibition Gallery',
        'title_singular' => 'Exhibition Gallery',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => '',
            'exhibition_category'        => 'Exhibition Category',
            'exhibition_category_helper' => '',
            'gallery'                    => 'Gallery',
            'gallery_helper'             => '',
            'created_at'                 => 'Created at',
            'created_at_helper'          => '',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => '',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => '',
        ],
    ],
     'page'               => [
        'title'          => 'Page',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'title'                => 'Title',
            'title_helper'         => '',
            'content'              => 'Content',
            'content_helper'       => '',
            'feature_image'        => 'Feature Image',
            'feature_image_helper' => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
        ],
    ],
];
