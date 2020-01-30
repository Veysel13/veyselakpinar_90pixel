<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 31.07.2019
 * Time: 20:48
 */

namespace Entity;

use Core\DataAccess\MySql\Model;
class User extends Model
{
    protected $table = "users";
}