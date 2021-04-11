<?php
namespace CreateUrl;

class Url
{
    public $url = '';
    public $query = '';

    public function __construct()
    {
        // server apache
        if (isset($_SERVER['SCRIPT_URL'])) {
            $this->url = substr($_SERVER['SCRIPT_URL'], 1);
        }
        // localhast xampp
        if (isset($_SERVER['PATH_INFO'])) {
            $this->url = substr($_SERVER['PATH_INFO'], 1);
        }
        if (isset($_SERVER['QUERY_STRING'])) {
            $this->query = $_SERVER['QUERY_STRING'];
        }
    }
    public function new($dir)
    {
        $low_url = strtolower($this->url);
        $low_val = strtolower($value[0]);
        foreach ($dir as $value) {
            if (substr($value[0], strlen($value[0])-2) == '/*') {
                $tempurl = strtolower(substr($value[0], 0, strlen($value[0])-1));
                $urlstart = strtolower(substr($this->url, 0, strlen($tempurl)));
                $urlend = substr($this->url, strlen($tempurl));
                if (($tempurl == $urlstart) && !empty(urlend)) {
                    echo str_replace($tempurl, '', $this->url);
                    echo '<hr>';
                    echo $value[1];
                    exit();
                }
            }
            if (low_val == low_url || $low_val.'/' == $low_url) {
                echo $this->url;
                echo '<hr>';
                echo $value[1];
                echo '<hr>';
                echo $this->query;
                exit();
            }
        }
        // * add new log                                           #  <- تکمیل نشده
        if ($this->error_url == 'default 404') {
            require_once 'CORE/404/404.php';
            exit();
        } else {
            echo $this->error_controller;
            exit();
        }
    }
    public $error_url='default 404';
    public $error_controller='';
    public function error($dir)
    {
        foreach ($dir as $value) {
            $this->error_url = $value[0];
            $this->error_controller = $value[1];
        }
    }
}
