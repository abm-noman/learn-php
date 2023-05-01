<?php
class Dir{
    public $directories=[];
    public $files=[];
    function __condtruct($path){
        if(is_readable($path)){
            $entries = scandir($path);
            foreach($entries as $entry){
                if("."!=$entry && ".."!= $entry){
                    if(is_dir($entry)){
                        array_push($this->directories,$entry);
                    }else{
                        array_push($this->files,$entry);
                    }
                }
            }
        }
    }

    function getDirectories(){
        return $this->directories;
    }
    function getFiles(){
        return $this->files;
    }

}

$directory = new Dir(getcwd());
print_r($directory->getDirectories());
print_r($directory->getFiles());



?>