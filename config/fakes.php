<?php

return [
    'subdomain' => [
        'olx' => explode(',', env('OLX_SUBDOMAIN', 'olx')),
        'inpost' => explode(',', env('INPOST_SUBDOMAIN', 'inpost')),
        'dpd' => explode(',', env('DBD_SUBDOMAIN', 'dpd')),
        'poczta' => explode(',', env('POCZTA_SUBDOMAIN', 'poczta')),
    ],
    'currency' => env('CURRENCY', '$'),
    'banks' => [
        ['name' => 'millenium', 'logo' => 'images/banks/millenium.svg', 'title' => 'Bank Millennium'],
        ['name' => 'mbank', 'logo' => 'images/banks/method-25-c07f984b77.svg', 'title' => 'mBank - mTransfer'],
        ['name' => 'ipko', 'logo' => 'images/banks/method-31-adb348efce.svg', 'title' => 'Kontynuuj z iPKO (PKO BP'],
        ['name' => 'santander', 'logo' => 'images/banks/method-4-34de38ccfe.svg', 'title' => 'Santander-Przelew24'],
        ['name' => 'ing', 'logo' => 'images/banks/method-112-bc38f69cb5.svg', 'title' => 'Kontynuuj z ING'],
        ['name' => 'pekao', 'logo' => 'images/banks/method-65-915093422a.svg', 'title' => 'Bank PEKAO S.A.'],
        ['name' => 'alior', 'logo' => 'images/banks/method-88-d9ef48ed97.svg', 'title' => 'Kontynuuj z Alior Bank'],
        ['name' => 'inteligo', 'logo' => 'images/banks/method-26-3652d84fb6.svg', 'title' => 'Kontynuuj z Inteligo'],
        ['name' => 'agricole', 'logo' => 'images/banks/method-14-9ebcef8039.svg', 'title' => 'Credit Agricole'],
        ['name' => 'citibank', 'logo' => 'images/banks/method-119-c7b8ae36a3.svg', 'title' => 'Kontynuuj z CitiHandlowy'],
        ['name' => 'getin', 'logo' => 'images/banks/getin.svg', 'title' => 'GetIn Bank'],
        ['name' => 'paribas', 'logo' => 'images/banks/method-223-464c07636f.svg', 'title' => 'BNP Paribas Płacę z Pl@net'],
        ['name' => 'bosbank', 'logo' => 'images/banks/method-48-1da4a66134.svg', 'title' => 'Kontynuuj z BOŚ'],
        ['name' => 'idea', 'logo' => 'images/banks/method-161-babe74dc82.svg', 'title' => 'Kontynuuj z IdeaBank'],
        ['name' => 'pocztowy', 'logo' => 'images/banks/method-141-23f64057f1.svg', 'title' => 'przelew elektrowniczny Pocztowy24'],
        ['name' => 'bankbps', 'logo' => 'images/banks/method-143-f1958ba479.svg', 'title' => 'Banki Spółdzielcze'],
        ['name' => 'vwfs', 'logo' => 'images/banks/method-69-3cb15e90de.svg', 'title' => 'Volkswagen Bank'],
        ['name' => 'noblepay', 'logo' => 'images/banks/method-158-72688346f8.svg', 'title' => 'Noble Pay'],
        ['name' => 'nestbank', 'logo' => 'images/banks/method-222-9084a912e6.svg', 'title' => 'NestPrzelew'],
        ['name' => 'plusbank', 'logo' => 'images/banks/method-50-1ab4b1266c.svg', 'title' => 'Kontynuuj z Plus Bank'],
        ['name' => 'banknowybfg', 'logo' => 'images/banks/method-144-22045d7d51.svg', 'title' => 'Bank Nowy BFG S.A.'],
        ['name' => 'sgb', 'logo' => 'images/banks/logo_sa.png', 'title' => 'SGB BANK'],
        ['name' => 'skycash', 'logo' => 'images/banks/method-87-7a861c7810.svg', 'title' => 'SkyCash'],
        ['name' => 'envelobank', 'logo' => 'images/banks/method-59-b5a9bd42e8.svg', 'title' => 'EnveloBank'],
    ]
];
