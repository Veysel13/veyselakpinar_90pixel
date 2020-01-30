<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 11:18
 */

namespace Business\Concrete\Manager;


use Business\Abstracts\ICategoryService;
use Business\ManagerBase\Init;
use Core\Exceptions\ResponseException;
use Core\Language\Lang;
use Core\Upload\ImageManager;
use Core\Information\SendMail;
use DataAccess\Concrete\MySql\MySqlCategoryDal;

class CategoryManager  extends Init implements ICategoryService
{

    private $categoryDal;
    private $uploadManager;
    private $sendMail;
    public function __construct()
    {
        parent::__construct();
        $this->categoryDal=new MySqlCategoryDal();
        $this->uploadManager=new ImageManager();
        $this->sendMail=new SendMail();
    }

    public function GetList()
    {
        $result=$this->categoryDal
            ->where(array("is_active"=>1))
            ->where($this->where)
            ->Gets();

        return $result;
    }

    public function Get($id)
    {
        $result=$this->categoryDal->Find($id);

        if (empty($result)) {
            throw new ResponseException(Lang::get('database.error', $this->lang), 0);
        }

        return $result;
    }

    public function FileUpload(array $model)
    {
        $image_path=null;

        if ($model["file"]["size"]>0){
            $image_path=$this->uploadManager->ImageAdd($model["file"]);
        }

        if ($image_path!=null){

            $real_path=IMAGE_DIR.$image_path;
            $result=$this->DataTransfer($real_path);
        }

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
                    $data=array(
                        "top_category"=>$top_category_id,
                        "name"=>$kat_1,
                        "created_at"=>nowAt()
                    );
                    $result=$this->categoryDal->Insert($data);
                    if (empty($result)) {
                        throw new ResponseException(Lang::get('database.error', $this->lang), 0);
                    }
                    $top_category_id=$this->categoryDal->LastId();
                }


                $kat_2 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                if ($kat_1!=null){
                    $data=array(
                        "top_category"=>$top_category_id,
                        "name"=>$kat_2,
                        "created_at"=>nowAt()
                    );
                    $result=$this->categoryDal->Insert($data);
                    if (empty($result)) {
                        throw new ResponseException(Lang::get('database.error', $this->lang), 0);
                    }
                    $top_category_id=$this->categoryDal->LastId();
                }

                $kat_3 = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                if ($kat_3!=null){
                    $data=array(
                        "top_category"=>$top_category_id,
                        "name"=>$kat_3,
                        "created_at"=>nowAt()
                    );
                    $result=$this->categoryDal->Insert($data);
                    if (empty($result)) {
                        throw new ResponseException(Lang::get('database.error', $this->lang), 0);
                    }
                    $top_category_id=$this->categoryDal->LastId();
                }
            }
        }

        $this->sendMail->Send("veyselakpinar13@gmail.com");


        return $result;
    }
}