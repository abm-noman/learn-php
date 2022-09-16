<?php

$filename = "D:\Workspace\PHP\File\data\File3.txt";

file_put_contents($filename,"Tuesday\n", FILE_APPEND);
file_put_contents($filename,"Wednesday\n", FILE_APPEND);

//fclose(fp);