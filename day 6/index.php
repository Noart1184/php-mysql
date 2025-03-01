<?php

// fopen we use to open a file
//$my_file = fopen("ds.txt","w")

//fclose we use it to close a file
//fclose($my_file);

//fread we use it to read a file 
//$my_file_name = "ds.txt";
//$my_file = fopen( $my_file_name, "r");
//$my_size = fillesize($myfilename);
//$my_filedata = fread($my_file, $my_size);

// $file = fopen("ds.txt", "r");
// while(!feof($file)){
//     echo fgets($file). "<br>"
// }

// fclose($file);

// fwrite make us write new text is an existing
// $myfile = fopen("ds.txt", "w");
// $my_text = "Digital School  \n";
// fwrite($my_file, $my_text);

// w+ mode lets us create a new file
// $h = fopen("data.txt", "a+");
// fwrite($h, "/n Add more lines to the file");
// fclose($h)

//file_put_contents is identic to fopen(), fwrite(), fclose()
file_put_contents("test.txt", "Add more text");
echo file_get_contents("test.txt");


?>