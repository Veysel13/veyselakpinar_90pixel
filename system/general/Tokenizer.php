<?php

namespace System\General;

use Firebase\JWT\JWT;

class Tokenizer
{

    public static function createJWT(array $values)
    {
        $tokenId    = base64_encode(uniqid(mt_rand(), true));
        $issuedAt   = time();
        $notBefore  = $issuedAt + 10;             //Adding 10 seconds
        $expire     = $notBefore + (6*30*24*60*60); // Adding 60 seconds
        $serverName = http_host(); // Retrieve the server name from config file

        /*
         * Create the token as an array
         */
        $data = [
            'iat'  => $issuedAt,         // Issued at: time when the token was generated
            'jti'  => $tokenId,          // Json Token Id: an unique identifier for the token
            'iss'  => $serverName,       // Issuer
            'nbf'  => $notBefore,        // Not before
            'exp'  => $expire,           // Expire
            'data' => [                  // Data related to the signer user
                'user_id'   => $values['id'], // userid from the users table
                'username'  => $values['username'], // User name
                'email'  => $values['email'], // User email

            ]
        ];
        $secret_key = require_once ROOT_DIR.'system/config/config.php';

        return JWT::encode($data, base64_decode($secret_key['jwt']), 'HS256');
    }

}