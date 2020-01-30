<?php
namespace Core\Upload;
class ImageManager
{

    function ImageAdd($image){
        $refimgyol="";
        if ($image["name"]!=null)
        {
            $uploads_dir=IMAGE_DIR;
            $tmp_name=$image["tmp_name"];
            $name=$image["name"];
            $benzersizsayi1=rand(20000,32000);
            $benzersizsayi2=rand(20000,32000);
            $refimgyol=$benzersizsayi1.$benzersizsayi2.$name;
            @move_uploaded_file($tmp_name,"$uploads_dir$benzersizsayi1$benzersizsayi2$name");
        }
        return $refimgyol;

    }

    function MultipleImage($image,array $prof_img){

        for($i=0;$i<count($image);$i++){
            if (isset($image["size"][$i]) and $image["size"][$i]>0)
            {
                $uploads_dir=IMAGE_DIR;
                $tmp_name=$image["tmp_name"][$i];
                $name=$image["name"][$i];
                $benzersizsayi1=rand(20000,32000);
                $benzersizsayi2=rand(20000,32000);
                $refimgyol=$benzersizsayi1.$benzersizsayi2.$name;
                @move_uploaded_file($tmp_name,"$uploads_dir$benzersizsayi1$benzersizsayi2$name");
                array_push($prof_img,$refimgyol);
            }
        }

        return $prof_img;

    }


    function ThumpImageAdd($image){

        $refimgyol="";
        if ($image["name"]!=null)
        {
            $uploads_dir=IMAGE_DIR;

            @$tmp_name=$image["tmp_name"];
            @$name=$image["name"];

            $benzersizsayi1=rand(20000,32000);
            $benzersizsayi2=rand(20000,32000);
            $refimgyol=$benzersizsayi1.$benzersizsayi2.$name;

            @move_uploaded_file($tmp_name,"$uploads_dir/$benzersizsayi1$benzersizsayi2$name");
        }

        return $refimgyol;

    }






}



?>