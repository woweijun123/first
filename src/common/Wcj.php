<?php

namespace riven\common;


use Guzzle\Http\Client;
use Guzzle\Http\Message\RequestInterface;

class Wcj
{
    public static function t1()
    {
        echo 'hello world';
    }

    public function get($url): RequestInterface
    {
        $client = new Client();
        return $client->get($url);
    }
}