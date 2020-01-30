<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 19:03
 */

namespace App\Http\Controllers\Home;


use App\Business\Concrete\CategoryManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $category_db;
    public function __construct()
    {
        $this->category_db=new CategoryManager();
    }

    public function nested()
    {
        return view('nested');
    }

    public function hookurl()
    {
        $model=array(
            "file"=>"/categories/kategoriler-20200127100560.xlsx",
        );

        $this->category_db->FtpConnection($model);

        return redirect('/');
    }

    public function index()
    {
        return view('home');
    }

    public function datatransfer(Request $request)
    {
        $model=array(
            "file"=>$_FILES["file"],
        );
        $this->category_db->FileUpload($model);

        return redirect("/?status=ok");
    }
}
