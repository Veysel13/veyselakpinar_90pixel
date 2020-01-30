<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 20:08
 */

namespace App\Business\Abstracts;


interface ICategoryService
{

    public function GetList();
    public function Get($id);
    public function FileUpload(array  $model);
    public function FtpConnection(array  $model);
    public function DataTransfer($path);
}
