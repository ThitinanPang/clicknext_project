<?php

namespace App\Models;

use ArrayObject;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\AuthorizableContract;
use Illuminate\Contracts\Auth\AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Workspace extends Model
{
    public $workspace_name = "";
    public $collection_list = [];
    public $user_create = "";
    public $favorite = false;
    public $create_date_time = "";
    public $modified_date_time = "";
    public $workspace_team = [];
}
