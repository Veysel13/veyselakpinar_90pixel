<?php
namespace App\Business\Functions;


class FtpHelper{

    private $ftp;

    public function __construct($type)
    {
        $this->ftp = new FtpClient($type);

    }

    public function ftp_upload_file($directory = "", $destination_file, $source_file, $new_file = false)
    {
        $this->ftp->connect();
        $this->ftp->login();


        $this->ftp->create_directory($directory);
        if ($directory != "") {

            $this->ftp->change_dir($directory);

        }


        $result =  $this->ftp->put($destination_file, $source_file, $new_file);

        $this->ftp->close();

        return $result;
    }

    public function ftp_delete_file($directory = "", $file)
    {
        $this->ftp->connect();
        $this->ftp->login();

        if ($directory != "") {
            $this->ftp->change_dir($directory);
        }

        $result =  $this->ftp->delete($file);

        $this->ftp->close();

        return $result;
    }

    public function ftp_get_file($directory = "", $file)
    {
        $this->ftp->connect();
        $this->ftp->login();

        $result =  $this->ftp->get($directory,$file);

        $this->ftp->close();

        return $result;
    }


}
