<?php
//Open/Close Principle
//Open/Closed Principle (OCP): Software entities (classes, modules, functions, etc.) should be open for extension but closed for modification. This means that you should be able to extend the behavior of a class without changing its code, but you should not need to modify its code to do so.

//bad practice
class FileDisplay{
    function display($file, $fileType){
        if('mp4'==$fileType){
            //Display Video Player
        }
        else if('mp3'==$fileType){ 
            //Display Audio Player
        }
        else if('txt'==$fileType){
            //Display Text File
        }
        else if('jpg'==$fileType){
            //Display Image File
        }
        else{
            //Nothing to Display
        }
    }
}


//Open/Closed Principle

class DisplayFile{
    function display(FileInterface $file){
        $file->display();
    }
}

interface FileInterface{
    function display(); 
}

class ImageFile implements FileInterface{
    public function display(){
        echo "Image File Displayed";
    }
}

class VideoFile implements FileInterface{
    public function display(){
        echo "Video File Displayed";
    }
}

class AudioFile implements FileInterface{
    public function display(){
        echo "Audio File Displayed";
    }
}

$image = new ImageFile("abcd.jpg");

$df = new DisplayFile();
$df->display($image);




?>