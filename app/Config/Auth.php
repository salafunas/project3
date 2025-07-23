<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Myth\Auth\Config\Auth as AuthConfig; // add this code

class Auth extends BaseConfig
{
    public $requireActivation = null; // add this code
}
