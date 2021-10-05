<?php
return [
//    'app' => [
//        'title' => 'General',
//        'desc' => 'All the general settings for application.',
//        'icon' => 'glyphicon glyphicon-sunglasses',
//
//        'elements' => [
//            [
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'app_name', // unique name for field
//                'label' => 'App Name', // you know what label it is
//                'rules' => 'required|min:2|max:50', // validation rule of laravel
//                'class' => 'w-auto px-2', // any class for input
//                'value' => 'CoolApp' // default value if you want
//            ]
//        ]
//    ],
    'currency' => [
        'title' => '',
        'icon' => 'glyphicon glyphicon-euro',
        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'currency',
                'label' => 'Currency',
                'rules' => 'required|min:1|max:5',
                'value' => env('CURRENCY', '$')
            ],
        ]
    ],
    'subdomains' => [
        'title' => 'Subdomains',
        'icon' => 'glyphicon glyphicon-globe',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'olx',
                'label' => 'OLX',
                'rules' => 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i',
                'value' => env('OLX_SUBDOMAIN', 'olx')
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'inpost',
                'label' => 'INPOST',
                'rules' => 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i',
                'value' => env('INPOST_SUBDOMAIN', 'inpost')
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'dpd',
                'label' => 'DPD',
                'rules' => 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i',
                'value' => env('DPD_SUBDOMAIN', 'dpd')
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'poczta',
                'label' => 'POCZTA',
                'rules' => 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i',
                'value' => env('POCZTA_SUBDOMAIN', 'poczta')
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'vinted',
                'label' => 'VINTED',
                'rules' => 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i',
                'value' => env('VINTED_SUBDOMAIN', 'vinted')
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'allegro',
                'label' => 'ALLEGRO',
                'rules' => 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i',
                'value' => env('ALLEGRO_SUBDOMAIN', 'allegrolokalnie')
            ]
        ]
    ],
];