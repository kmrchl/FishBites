<?php

return [
    'paths' => ['api/produk', 'api/faq', 'api/artikel'], // Tentukan endpoint API
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'], // Bisa disesuaikan sesuai domain aplikasi mobile
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
