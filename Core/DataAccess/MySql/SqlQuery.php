<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 24.01.2020
 * Time: 14:30
 */

namespace Core\DataAccess\MySql;


class SqlQuery{

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

        if (is_array($where) and $where!=null){

            foreach($where as $item=>$value){
                $this->bwhere.=$item."=".$value." and ";
            }
            $this->bwhere=substr($this->bwhere,0,-5);
        }
        else{
            if ($where!=null)
            {
                $this->bwhere=$where;
            }
        }

        if($this->where !=null  and $where!=null)
            $this->where.=" and $this->bwhere";
        else
        {
            if ($where!=null){
                $this->where.=" where $this->bwhere";
            }
        }

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
            $this->where.=" where ( $this->owhere )";


        return $this;
    }

    public function groupBy($field){

        $this->group=" group by $field";
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