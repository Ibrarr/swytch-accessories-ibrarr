<?php

namespace Accessories;

class RetrieveData
{

    public function __construct()
    {
        add_action('init', array($this, 'get_swytch_data'));
    }

    public function get_swytch_data()
    {
        $username = 'swytch';
        $password = '4uZ0tckhYxstiSGP9VGRiGKMJMOp2o8E';
        $URL = 'https://swytchbike.com/wp-json/swytch/v1/dev';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $URL);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
        $response = curl_exec($curl);
        curl_close($curl);

        $obj = json_decode($response);

        usort($obj->data, function ($a, $b) {
            return $a->sold > $b->sold ? -1 : 1;
        });

        $GLOBALS['topFiftyAccessories'] = array_slice($obj->data, 0, 50);
    }
}
