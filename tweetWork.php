<?php

include_once './Tweet.php';

$pseudo = htmlspecialchars($_POST['pseudo']);
$tweet = htmlspecialchars($_POST['tweet']);
$date = date ("H:i:s d:m:Y");
$avatar = htmlspecialchars($_POST['avatar']);
$likes = htmlspecialchars($_POST['likes']);

$creatTweet = new Tweet($pseudo, $tweet, $date, $avatar, $likes);

$creatTweet->save();
header('Location: affiche.php');




