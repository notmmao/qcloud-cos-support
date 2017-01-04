<?php

namespace qcloudcos;

class Conf {
    // Cos php sdk version number.
    const VERSION = 'v4.2.1';
    const API_COSAPI_END_POINT = 'http://region.file.myqcloud.com/files/v2/';

    // Please refer to http://console.qcloud.com/cos to fetch your app_id, secret_id and secret_key.
    const APP_ID = '1251246980';
    const SECRET_ID = 'AKIDeCaxMuDXbUL1Qgn4LWWNG6qcFhx5s0pY';
    const SECRET_KEY = 'gCansqdFg9QVTRHxhJk0BDF6mGYkokV7';

    public function __construct()    {
        $cos_options = get_option('cos_options', TRUE);
        self::$APP_ID = esc_attr($cos_options['app_id']);
        self::$SECRET_ID = esc_attr($cos_options['secret_id']);
        self::$SECRET_KEY = esc_attr($cos_options['secret_key']);
        var_dump(self::$APP_ID);
    }

    /**
     * Get the User-Agent string to send to COS server.
     */
    public static function getUserAgent() {
        return 'cos-php-sdk-' . self::VERSION;
    }
}
