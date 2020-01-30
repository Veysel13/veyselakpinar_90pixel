<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 23.01.2020
 * Time: 22:56
 */
namespace Business\Abstracts;
interface IUserService
{
    public function GetList();
    public function Get($id);
    public function Add(array $model);
    public function Update(array $model);
    public function Delete(array $model);
}