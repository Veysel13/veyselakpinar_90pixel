<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 23.01.2020
 * Time: 21:44
 */
namespace Core\DataAccess\MySql;

use Core\DataAccess\IEntityRepository;
use PDO;
use Exception;
class Model extends SqlQuery implements IEntityRepository {

    private $result,$columnString,$valueString,$STH ;
    protected $array,$col,$query,$b;
    protected $connect;

    private static $instance,$conf;

    public function __construct(){
        try{
            self::$conf=(new config())->settings();
            $this->connect = self::singletion();
        }catch (Exception $ex){
            print_r($ex);
            exit("<p style='font-size: 40px; text-align: center;color: #a26048;margin-top: 30px;'>OOPS! Bağlantıda bir sorun Oluştu.</p>.");
        }
    }

    public static function singletion(){
        if (!isset(self::$instance)){

            self::$instance= new PDO("mysql:host=" .  self::$conf["host"] . ";dbname=" .  self::$conf["dbname"] . ";charset=utf8",  self::$conf["user"],  self::$conf["password"]);
        }
        return  self::$instance;
    }

    function __set($name, $value)
    {
        $this->col[$name]=$value;

    }

    public function Find($id)
    {
        $this->result=$this->connect->prepare("select * from ".$this->table." where id=:id ");
        $this->result->bindParam("id",$id);
        $this->result->execute();
        $this->result=$this->result->fetch(PDO::FETCH_ASSOC);

        return $this->result;
    }

    public function LastId(){

        $this->result=$this->connect->query("select MAX(id) from ".$this->table);
        $data= $this->result=$this->result->fetch(PDO::FETCH_COLUMN);
        return $data;
    }

    public function Gets()
    {

        $this->result=$this->connect->query("select * from ".$this->table.$this->join.$this->where.$this->group.$this->order.$this->limit);
        $this->array=$this->result->fetchAll(PDO::FETCH_ASSOC);
        $this->clearWhere();
        return $this->array;
    }

    public function Delete(){

        $result=$this->connect->exec("delete  from ".$this->table.$this->where);
        $this->clearWhere();
        return $result;

    }

    public function Update(array $updt){


        foreach ($updt as $item => $value) {
            $this->b .= $item . "=" . "'" . $value . "'" . ",";
        }
        $this->b = substr($this->b, 0, -1);
        $this->STH = $this->connect->prepare("UPDATE " . "`" . $this->table . "`" . " SET " . $this->b . $this->where);
        $result=$this->STH->execute(array_values($updt));
        $this->clearWhere();
        return $result;

    }

    public function Insert(array $insert){

        $this->columnString = implode(',', array_keys($insert));
        $this->valueString = implode(',', array_fill(0, count($insert), '?'));

        $this->STH = $this->connect->prepare("INSERT INTO ".$this->table." ($this->columnString) VALUES ($this->valueString)");
        return  $this->STH->execute(array_values($insert));

    }

    public function clearWhere(){
        $this->where=null;
    }

    public function __destruct()
    {
        $this->connect = null;

        $this->clearWhere();

    }
}