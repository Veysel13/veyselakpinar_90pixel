<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 21:28
 */

namespace App\Business\Functions;


use function Psy\debug;

class FtpClient
{

    private $ftp;
    private $conn;
    private $server;
    private $username;
    private $password;
    private $ssl;
    private $port;
    const timeout = 90;

    public function __construct($type = "90pixel"){

        $config = require_once  "../config/ftp.php";

        $this->server   = $config["$type"]['server'];
        $this->username = $config["$type"]['username'];
        $this->password = $config["$type"]['password'];
        $this->port     = $config["$type"]['port'];
        $this->ssl      = $config["$type"]['ssl'];


    }

    public function connect(){

        if($this->ssl){
            $this->conn = ftp_ssl_connect($this->server, $this->port, self::timeout);
        }else{
            $this->conn = ftp_connect($this->server, $this->port, self::timeout);
        }
        if ($this->conn) return true;

        return false;
    }

    public function login(){
        $this->ftp = ftp_login($this->conn, $this->username, $this->password);

        if($this->ftp) return true;

        return false;
    }

    public function close(){
        ftp_close($this->conn);
    }

    public function pwd(){
        return ftp_pwd($this->conn);
    }

    public function change_dir($directory = "/"){

        if(ftp_chdir($this->conn, $directory)){
            return true;
        }
        return false;
    }

    public function delete($file){
        if (ftp_delete($this->conn, $file)) {
            return true;
        }
        return false;
    }

    public function create_directory($directory){
        if (ftp_mkdir($this->conn, $directory)){
            return true;
        }
        return false;
    }

    public function ftp_list($directory){
        $list = ftp_nlist($this->conn, $directory);
        return $list;
    }

    public function put($destination_file, $source_file, $new_file = false, $mode = FTP_BINARY){
        if ($new_file){
            ftp_alloc($this->conn, filesize($source_file), $result);
            if (!$result) return false;
        }

        ftp_pasv($this->conn, true);
        $upload = ftp_put($this->conn, $destination_file, $source_file, $mode);

        if($upload) return true;

        return false;
    }

    public function exec($command){
        if (ftp_exec($this->conn, $command)) {
            return true;
        }
        return false;
    }

    public function get($local_file, $server_file, $open = false, $open_mode = "w", $mode = FTP_BINARY){
        if ($open)
            $fp = fopen($local_file,$open_mode);
        else
            $fp = $local_file;

        if (ftp_get($this->conn, $fp, $server_file, $mode, 0)) return true;

        return false;
    }

}
