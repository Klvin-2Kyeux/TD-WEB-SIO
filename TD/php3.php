<?php
session_start();
$list=$_SESSION['todolist']??[];
$list[]='pain';
$_SESSION['todolist']=$list;
