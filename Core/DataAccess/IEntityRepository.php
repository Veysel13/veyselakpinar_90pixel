<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 24.01.2020
 * Time: 11:08
 */

namespace Core\DataAccess;


interface IEntityRepository
{

    public function Gets();
    public function Find($id);
    public function Insert(array $model);
    public function Update(array $model);
    public function Delete();
}