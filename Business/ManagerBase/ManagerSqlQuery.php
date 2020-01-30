<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 24.01.2020
 * Time: 14:30
 */

namespace Business\ManagerBase;


class ManagerSqlQuery{

    protected $group,$where,$orwhere,$join,$bwhere,$owhere,$order,$asc,$limit;

    public function join(array $join){

        $this->join=implode(",",$join);

        return $this;

    }

    public function limit($start, $finish = false)
    {

        if (is_integer($finish)) {

            $this->limit = " limit  $start,$finish  ";
        } else {
            $this->limit = " limit  $start ";
        }


        return $this;
    }

    public function order($strings)
    {
        $this->order = " order by " . $strings." asc";
        return $this;
    }

    public function orderbydescanding($strings)
    {
        $this->order = " order by " . $strings. " desc";
        return $this;
    }

    public function where($where)
    {
        $this->bwhere=null;

        if (is_array($where)){

            foreach($where as $item=>$value){
                $this->bwhere.=$item."=".$value." and ";
            }
            $this->bwhere=substr($this->bwhere,0,-5);
        }
        else{
            $this->bwhere=$where;
        }

        if($this->where !=null )
            $this->where.=" and $this->bwhere";
        else
            $this->where.=" $this->bwhere";

        return $this;
    }

    public function orWhere(array $orwhere){

        $this->owhere=null;
        foreach($orwhere as $dizi)
        {
            foreach ($dizi as $item=>$value){
                $this->owhere.=$item."=".$value." and ";
            }
            $this->owhere=substr($this->owhere,0,-5);
            $this->owhere.=" or ";
        }
        $this->owhere=substr($this->owhere,0,-4);

        if($this->where !=null ){
            $this->owhere=" and ( $this->owhere )";
            $this->where.=$this->owhere;
        }
        else
            $this->where.=" ( $this->owhere )";


        return $this;
    }

    public function clearWhere(){
        $this->where=null;
    }
    public function __destruct()
    {
        $this->clearWhere();
    }
}