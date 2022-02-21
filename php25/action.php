<?php
require_once 'vendor/autoload.php';
use App\classes\Fileupload;
use App\classes\StudentInfo;
use App\classes\Auth;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'fileU')
    {
        include 'pages/fileUpload.php';
    }
    if ($_GET['pages'] == 'all')
    {
        $studentinfo = new StudentInfo();
        $students = $studentinfo->indexx();
        include 'pages/allstudents.php';
    }
    if ($_GET['pages'] == 'log_in')
    {
       include 'pages/login.php';
    }
    if ($_GET['pages'] == 'log_out')
    {
        $auth = new Auth();
        $auth ->logout();
        include 'pages/login.php';
    }

}

elseif (isset($_POST['btn']))
{
    $fileUpload = new Fileupload($_FILES,$_POST);
    $message = $fileUpload-> index();
    include 'pages/fileUpload.php';
}
elseif (isset($_POST['log_btn']))
{
    $auth = new Auth($_POST);
    $message = $auth ->login();
    include 'pages/login.php';
}