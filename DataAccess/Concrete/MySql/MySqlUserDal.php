<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 23.01.2020
 * Time: 22:30
 */
namespace DataAccess\Concrete\MySql;

use DataAccess\Abstracts\IUserDal;
use Entity\User;
use PDO;
class MySqlUserDal extends User implements IUserDal
{


}