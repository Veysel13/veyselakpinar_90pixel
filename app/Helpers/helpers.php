<?php

//recursive fonksıyon alt cocuklarını gezmek için,kategori eklerken kullanıyoruz
function getChildren($category, &$html, $level=1){

    foreach($category->children as $child){

        $html .="<option value=" . $child->id . ">".str_repeat( "&nbsp;", $level*4) . $child->name . "</option>";
        $level++;
        getChildren($child, $html, $level);
        $level--;
    }
}

//kategorileri yazdırmak için,kategori eklerken kullanıyoruz
function kategori(){

    $html="<option value='0'>Ust Kategori</option>";


    $kategoriler=\App\Entity\Category::where('top_category',0)->get();

    foreach($kategoriler as $kategori) {

        $html .= "<option value=" . $kategori->id . ">" . $kategori->name . "</option>";

        getChildren($kategori,$html);

    }


    return $html;



}


