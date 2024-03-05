<?php

namespace App\Models;

use ArrayObject;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\AuthorizableContract;
use Illuminate\Contracts\Auth\AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class File extends Model
{
    public $file_name = "";
    public $file_path = "";
    public $method_list = [];
    public $user_save = "";
    public $created_date_time = "";
    public $modified_date_time = "";
}
