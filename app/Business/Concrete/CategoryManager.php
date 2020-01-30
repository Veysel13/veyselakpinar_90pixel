<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 20:08
 */

namespace App\Business\Concrete;

use App\Business\Functions\FtpHelper;
use App\Business\Functions\UploadManager;
use App\Business\Functions\Information;
use App\Entity\Category;
use App\Business\Abstracts\ICategoryService;
class CategoryManager implements ICategoryService
{

    private $file;
    private $ftp;
    private $information;
    public function __construct()
    {
        $this->file=new UploadManager();
        $this->ftp=new FtpHelper("90pixel");
        $this->information=new Information();
    }

    public function GetList()
    {
        $result=Category::all();

        return $result;
    }

    public function Get($id)
    {
        $result=Category::find($id);

        if (empty($result)) {
            throw new \Exception("Kategori bulunamadı", 0);
        }

        return $result;
    }

    public function FileUpload(array $model)
    {
        $image_path=null;


        if ($model["file"]["size"]>0){
            $image_path=$this->file->ImageAdd($model["file"]);
        }

        if ($image_path!=null){

            $real_path="file\\".$image_path;
            $result=$this->DataTransfer($real_path);
        }

        return $result;
    }

    public function FtpConnection(array $model)
    {
        $numberone=rand(1000000,100000000);
        $ftp=$this->ftp->ftp_get_file("file/".$numberone.".xlsx",$model["file"]);

        if ($ftp){
            $real_path="file\\".$numberone.".xlsx";
            if ($real_path!=null){
                $result=$this->DataTransfer($real_path);
            }
        }


        //Bilgilendirme

       // $this->information->sendmail();

        return $result;
    }

    public function DataTransfer($path)
    {
        $objPHPExcel = \PHPExcel_IOFactory::load($path);

        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
            $highestRow = $worksheet->getHighestRow();
            for($row=2; $row<=$highestRow; $row++)
            {
                $top_category_id=0;
                $kat_1 = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                if ($kat_1!=null){
                    $category=Category::where('name',"=",$kat_1)->get();

                    if (empty($category[0])){
                        $data=array(
                            "top_category"=>$top_category_id,
                            "name"=>$kat_1,
                            "created_at"=>date("Y-m-d h:i:s"),
                            "updated_at"=>date("Y-m-d h:i:s")
                        );
                        $result=Category::create($data);
                        $top_category_id=$result["id"];
                    }else{
                        $top_category_id=$category[0]["id"];
                    }
                }


                $kat_2 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                if ($kat_2!=null){

                    $category=Category::where('name',$kat_2)->get();
                    if (empty($category[0])){
                        $data=array(
                            "top_category"=>$top_category_id,
                            "name"=>$kat_2,
                            "created_at"=>date("Y-m-d h:i:s"),
                            "updated_at"=>date("Y-m-d h:i:s")
                        );

                        $result=Category::create($data);
                        $top_category_id=$result["id"];
                    }else{
                        $top_category_id=$category[0]["id"];
                    }
                }

                $kat_3 = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                if ($kat_3!=null){
                    $category=Category::where('name',$kat_3)->get();
                    if (empty($category[0])){
                        $data=array(
                            "top_category"=>$top_category_id,
                            "name"=>$kat_3,
                            "created_at"=>date("Y-m-d h:i:s"),
                            "updated_at"=>date("Y-m-d h:i:s")
                        );

                        $result=Category::create($data);
                        $top_category_id=$result["id"];
                    }else{
                        $top_category_id=$category[0]["id"];
                    }
                }
            }
        }

        //$this->sendMail->Send("veyselakpinar13@gmail.com");


        return $result;
    }

}
