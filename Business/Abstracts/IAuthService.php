<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 25.01.2020
 * Time: 17:31
 */

namespace Business\Abstracts;


interface IAuthService
{

    public function Login(array $model);
}