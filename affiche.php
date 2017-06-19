<?php
include_once './Tweet.php'; 
 $tab = scandir('Tweets/');
    foreach($tab as $value){
        if(is_file('Tweets/'.$value) && $value !='.DS_Store'){
            $cont = file_get_contents('Tweets/'.$value);
                $str = explode("\n", $cont);
                    $message = new Tweet ($str[0], $str[1], $str[2], $str[3], $str[4]);
                    $message->aff();
        }
    }
?>
 

