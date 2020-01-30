<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 25.01.2020
 * Time: 16:43
 */

namespace Core\Logs;


class Log{
    protected $levels = [
        0 => 'EMERGENCY',
        1 => 'ALERT',
        2 => 'CRITICAL',
        3 => 'ERROR',
        4 => 'WARNING',
        5 => 'NOTICE',
        6 => 'INFO',
        7 => 'DEBUG',
        8 => 'UNDEFINED',
        9 => 'SELECT'
    ];

    public function write($level = 8, $message, $file = "")
    {
        //$log_text = date('Y-m-d H:i:s') . ' ---> ' . ' User : ' . Session::get("userID") . ' ---> ' . $this->levels[$level] . ': ' . $message .  ' ---> Page : ' . json_encode(get_url());

        $this->save($message, $file);
    }

    private function save($log_text, $filePath = "")
    {
        if($filePath == "") {
            $file_name = 'log-' . date('Y-m-d') . '.txt';
            // $file = fopen('application/logs/' . $file_name, "a");
            $file = fopen($file_name, "a");
        }else{
            $file = fopen($filePath, "a");
        }

        if(fwrite($file, $log_text . "\n") === false) {
            return false;
        }
        fclose($file);
        return true;
    }

}
