<?php

session_start();
$title=$_REQUEST['title'];
$detail=$_REQUEST['detail'];

$_SESSION['detail']=$detail;
$_SESSION['title']=$title;

$errors=[];

if(strlen($title)==0){
    $errors['title']="No value in title";
}elseif(strlen($title)>10){
    $errors['title']="Title should be less than 10 ";
}

if(strlen($detail)==0){
    $errors['detail']="No value in details";
}

if(count($errors)>0)
{
    $_SESSION['errors']=$errors;
    header("Location: ../index.php");
}
else{
    echo "everything is uptomark";
}
?>