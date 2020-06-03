<?php
/**
 * @package OnlinePeople
 * @version 1.0
 */
/*
Plugin Name: OnlinePeople
Plugin URI: http://google.com
Description: This a finction count online people.
Author: Quocdat
Version: 1.0
Author URI: http://quocdat.tk
*/

//add_action( 'wp','onlPeople' );
add_shortcode( 'onlpeople','onlPeople' );

function onlPeople(){



    $Iddr = str_replace(':', ".", $_SERVER['REMOTE_ADDR']);
    $time = $_SERVER['REQUEST_TIME'];

    //unlink("C:\\xampp\htdocs\wordpress\wp-content\plugins\OnlinePeople\\1.txt");

    $listFile = scandir(__DIR__.'\OnlinePeople');

    foreach($listFile as $value){
        $n = strpos( $value, '-' );
        $timestampFile = substr($value,0 ,$n);
        $iddrFile = substr($value ,$n+1,-4);

        if($n == '')
            continue;

        if(($time - $timestampFile) > 10 ){
            unlink(__DIR__."\OnlinePeople\\$timestampFile-$iddrFile.txt");
        }elseif($Iddr == $iddrFile)
            unlink(__DIR__."\OnlinePeople\\$timestampFile-$iddrFile.txt");
        
    }
    
    WriteFile(__DIR__."\OnlinePeople\\$time-$Iddr.txt");

    echo (count($listFile)-2)." Người Đang online.";
}

function WriteFile($dir){

    $myfile = fopen($dir, "w") or die("Unable to open file!");
    
    foreach($_SERVER as $value)
        fwrite($myfile, $value."\n");
        
    fclose($myfile);
}