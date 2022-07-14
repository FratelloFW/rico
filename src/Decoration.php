<?php
namespace Rico\Command;

class View{
    public static function say(string $message, string $Decoration = 'normal'){
        if($Decoration == 'err'){
            echo '\033[41m'.$message.'\033[0m';
        }else{
            echo $message;
        }
    }
}