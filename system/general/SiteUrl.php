<?php



/**
 * Getting Request Scheme
 * @return string
 */
if ( ! function_exists('request_scheme')) {
    function request_scheme()
    {
        if (isset($_SERVER['HTTPS']))
            return 'https://';
        else
            return 'http://';
    }
}

/**
 * Getting Http Host
 * @return string
 */
if ( ! function_exists('http_host')) {
    function http_host()
    {
        return $_SERVER['HTTP_HOST'];
    }
}


/**
 * Getting Request URI
 * @return string
 */
if ( ! function_exists('request_uri')) {
    function request_uri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}

/**
 * Getting Full Path of application
 * @return string
 */
if ( ! function_exists('full_path')) {
    function full_path()
    {
        return request_scheme() . http_host() . request_uri();
    }
}

/**
 * Getting Current Url
 * @return string
 */
if ( ! function_exists('current_url')) {
    function current_url()
    {
        return request_scheme() . http_host() . request_uri();
    }
}

/**
 * is ajax request
 * @return true or false
 */
if ( ! function_exists('is_ajax_request')) {
    function is_ajax_request()
    {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        }
        return false;
    }
}

if ( ! function_exists('get_document_root')) {
    function get_document_root()
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }
}



