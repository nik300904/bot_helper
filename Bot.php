<?php

class Bot
{
    function writeLogFile ($string, $clear = false)
    {
        $log_file_name = __DIR__ . "/message.txt";
        if ( $clear == false ) {
            $now = date("Y-m-d H:i:s" . PHP_EOL);
            file_put_contents($log_file_name, $now . "" . print_r($string, true) . "\r\n", FILE_APPEND);
        } else {
            $now = date("Y-m-d H:i:s". PHP_EOL);
            file_put_contents($log_file_name, '');
            file_put_contents($log_file_name, $now . "" . print_r($string, true) . "\r\n", FILE_APPEND);
        }
    }

    function TG_sendMessage($getQuery) {
        $ch = curl_init("https://api.telegram.org/bot". TG_TOKEN ."/sendMessage?" . http_build_query($getQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
    }

    function TG_sendPhoto($arrayQuery) {
        $ch = curl_init('https://api.telegram.org/bot'. TG_TOKEN .'/sendPhoto');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
    }

    function TG_getFile($arrayQuery) {
        $ch = curl_init("https://api.telegram.org/bot". TG_TOKEN ."/getFile?" . http_build_query($arrayQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
    }

    function list_files($path) {
        if ($path[mb_strlen($path) - 1] != '/') {
            $path .= '/';
        }

        $files = array();
        $dh = opendir($path);
        while (false !== ($file = readdir($dh))) {
            if ($file != '.' && $file != '..' && !is_dir($path.$file) && $file[0] != '.') {
                $files[] = $file;
            }
        }

        closedir($dh);
        return $files;
    }
}