<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 20:10
 */

namespace App\Entity;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table="categories";
    protected $fillable=['name','top_category','created_at','updated_at'];


    public function children(){

        return $this->hasMany('\App\Entity\Category','top_category');
    }

    public function categoryname(){
        return  "test_category";
    }
}
