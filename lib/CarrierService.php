<?php

namespace Shopify;

class CarrierService
{
    public static function __callStatic($method, $args)
    {
        throw new \Exception("The CarrierService object has not been completed yet");
    }

    public function __construct()
    {
        throw new \Exception("The CarrierService object has not been completed yet");
    }
}
