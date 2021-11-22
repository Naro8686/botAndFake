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
                'name' => 'allegrolokalnie',
                'label' => 'ALLEGRO',
                'rules' => 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i',
                'value' => env('ALLEGRO_SUBDOMAIN', 'allegrolokalnie')
            ]
        ]
    ],
    'chat' => [
        'title' => 'Chat',
        'icon' => '',
        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'chat_link',
                'label' => 'Link',
                'rules' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
                'value' => env('LINK_CHAT')
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'chat_pays',
                'label' => 'Pays',
                'rules' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
                'value' => env('LINK_PAYS')
            ],
        ]
    ],
    'email' => [
        'title' => 'Emails',
        'icon' => '',
        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'inpost_email',
                'label' => 'Inpost',
                'rules' => 'required|email',
                'value' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'olx_email',
                'label' => 'Olx',
                'rules' => 'required|email',
                'value' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'dpd_email',
                'label' => 'Dpd',
                'rules' => 'required|email',
                'value' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'poczta_email',
                'label' => 'Poczta',
                'rules' => 'required|email',
                'value' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'vinted_email',
                'label' => 'Vinted',
                'rules' => 'required|email',
                'value' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'allegrolokalnie_email',
                'label' => 'Allegrolokalnie',
                'rules' => 'required|email',
                'value' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'default_email',
                'label' => 'Default',
                'rules' => 'required|email',
                'value' => ''
            ],
        ]
    ],
];
