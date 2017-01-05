<?php

namespace qcloudcos;

class Conf {
    // Cos php sdk version number.
    const VERSION = 'v4.2.1';
    const API_COSAPI_END_POINT = 'http://region.file.myqcloud.com/files/v2/';
    
    public static $APP_ID;
    public static $SECRET_ID;
    public static $SECRET_KEY;
    
    private static $_instance; 
    public static function getInstance() { 
        if(!isset(self::$_instance)) { 
            $c=__CLASS__; 
            self::$_instance=new $c; 
        } 
        return self::$_instance; 
    }

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
