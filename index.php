<?php

include_once ("connect.php");
require("includes/smarty/libs/Smarty.class.php");

$template = new smarty();


$gettweet =$conn->prepare("SELECT * from twitter");
$gettweet->execute();
$tweets = $gettweet->fetchAll(PDO::FETCH_ASSOC);

$template->assign('tweets' , $tweets);

$getusers =$conn->prepare("SELECT * from mensen");
$getusers->execute();
$users = $getusers->fetchAll(PDO::FETCH_ASSOC);

$template->assign('users' , $users);

$template->display("template/index.tpl");
