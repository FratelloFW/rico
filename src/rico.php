<?php
namespace Rico\Command;


class rico{
    protected function bootstrap(array $argument){
        unset($argument[0]);
        $argument = array_values($argument);
        $this->command_parser($argument);
    }

    private function command_parser(array $argument){
        if(array_key_exists(0, $argument)){
            $operation = explode(':', $argument[0]);
            if(count($operation) === 2){
                $group = $operation[0];
                $function = $operation[1];
            }else{
                Help::ViewHelp();
            }
        }
    }
}