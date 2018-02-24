<?php
require '../connect/connect.php';
require '../classes/databasetable.php';
require '../template/loadtemplate.php';
if(!isset($_GET['page'])){
$_GET['page'] = 'home';
}
require'../pages/'.$_GET['page'].'.php';
$templateVars=[
'title'=> $title,
'content'=> $content
];
echo loadTemplate('../template/layout.php',$templateVars);
?>