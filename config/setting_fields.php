<?php
return [
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
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'email_warning',
                'label' => 'Email Warning',
                'rules' => 'sometimes|nullable',
                'value' => 'Предупреждение!'
            ],
        ]
    ],
];
