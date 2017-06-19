<link rel="stylesheet" href="styleB.css" />
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tweet
 *
 * @author sylvainarnaudbourique
 */
 
class Tweet {
    private $pseudo;
    private $tweet;
    private $date;
    private $avatar;
    private $likes;
    
    public function __construct($pseudo, $tweet, $date, $avatar, $likes) {
        $this->pseudo= $pseudo;
        $this->tweet= $tweet;
        $this->date= $date;
        $this->avatar= $avatar;
        $this->likes= $likes;
    }
    public function save() {
        if(!is_dir("Tweets")){
            mkdir("Tweets");
        }
    
        $contenu = $this->pseudo."\n".$this->tweet."\n".$this->date."\n".$this->avatar."\n".$this->likes;
    
        $file = fopen('Tweets/'.$this->date.''.$this->pseudo, 'w');
        fwrite ($file, $contenu);
        fclose($file);
    }
    public function aff() {
        echo '<section>';
        echo '<h3>'.$this->pseudo.'</h3>';
        echo '<h4>'.$this->tweet.'</h4>';
        echo '<p>'.$this->avatar.'</p>';
        echo '<h6>'.$this->date.'</h6>';
        echo '<h6>'.$this->likes.'</h6>';
        echo '</section>';
    }
    
}
