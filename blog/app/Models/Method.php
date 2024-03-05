<?php

namespace App\Models;

use ArrayObject;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\AuthorizableContract;
use Illuminate\Contracts\Auth\AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Method extends Model
{
    public $method_type = "";
    public $path = "";
    public $headers_list = [];
    public $parameters_list = [];
    public $bodys_list = [];
    public $response_list = [];
    private $method_comment = [];
}
