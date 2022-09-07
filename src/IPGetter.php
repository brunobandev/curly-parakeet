<?php

namespace IPGetter;

class IPGetter
{
    public static function getIPAddress()
    {
        return $_SERVER['REMOTE_ADDRESS'];
    }
}
