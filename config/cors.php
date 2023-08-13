<?php

return [
    'paths' => ['api/*'], // APIエンドポイントのパスを指定
    'allowed_methods' => ['*'], // 許可するHTTPメソッド
    'allowed_origins' => ['*'], // 許可するオリジン（ドメイン）
    'allowed_headers' => ['*'], // 許可するリクエストヘッダー
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
