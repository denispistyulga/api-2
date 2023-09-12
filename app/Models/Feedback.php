<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected static $instance;

//    private function __construct()
//    {
//        return 123;
//    }

    private function __clone()
    {
    }

//    private function __wakeup()
//    {
//
//    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
                  self::$instance = new self;
      }
        return self::$instance;
    }

    public function doAction()
    {

    }















//    // Свойства класса
//    public $firstName;
//
//    // Метод, который здоровается с пользователем $firstName.
//    public function hello()
//    {
//        echo "hello, " .  $this -> firstName;
//        return $this;
//    }
//
//    // Метод  регистрации пользователя
//    public function register()
//    {
//        echo " >> registered";
//        return $this;
//    }
//
//    // Метод отправки приветственного письма
//    public function mail()
//    {
//        echo " >> email sent";
//    }







}
