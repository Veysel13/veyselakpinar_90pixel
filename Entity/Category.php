<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 11:13
 */

namespace Entity;

use Core\DataAccess\MySql\Model;
class Category extends Model
{
    protected $table = "categories";
}