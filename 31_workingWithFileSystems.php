<?php
//Working with filesystem

 #scandir() - will list all files and directories within the given path


$dir = scandir(__DIR__);

var_dump($dir); //this will show you ALL the files in the directory.



//a single . refers to the current directory.
//two dots .. refers to the parent directory 

