<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 21.10.2019
 * Time: 20:48
 */

namespace Business\Concrete\Manager;


use Business\Abstracts\IUserService;
use Business\ManagerBase\Init;
use Core\Exceptions\ResponseException;
use DataAccess\Concrete\MySql\MySqlUserDal;
use Core\Language\Lang;

class UserManager extends Init implements IUserService
{

    private $userDal;
    public function __construct()
    {
        parent::__construct();
        $this->userDal=new MySqlUserDal();
    }

    public function GetList()
    {
        $result=$this->userDal
            ->where(array("is_active"=>1))
            ->where($this->where)
            ->Gets();

        return $result;
    }

    public function Get($id)
    {
        $result=$this->userDal->Find($id);

        if (empty($result)) {
            throw new ResponseException(Lang::get('database.error', $this->lang), 0);
        }

        return $result;
    }

    public function Add(array $model){

        $result=$this->userDal->Insert($model);

        if (empty($result)) {
            throw new ResponseException(Lang::get('database.error', $this->lang), 0);
        }

        return $result;
    }

    public function Update(array $model){

        $data=$this->userDal->Find($model["id"]);

        if (empty($data)) {
            throw new ResponseException(Lang::get('user.notfound', $this->lang), 0);
        }

        $data["username"]=$model["username"];
        $data["password"]=$model["password"];

        $result=$this->userDal->where(array("id"=>$data["id"]))->Update($data);

        if (empty($result)) {
            throw new ResponseException(Lang::get('database.error', $this->lang), 0);
        }

        return $result;
    }

    public function Delete(array $model){

        $data=$this->userDal->Find($model["id"]);

        if (empty($data)) {
            throw new ResponseException(Lang::get('user.notfound', $this->lang), 0);
        }

        $data["is_active"]=0;

        $result=$this->userDal->where(array("id"=>$data["id"]))->Update($data);

        if (empty($result)) {
            throw new ResponseException(Lang::get('database.error', $this->lang), 0);
        }

        return $result;
    }


}