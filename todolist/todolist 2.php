<?php
if(!isset($_SESSION))
{
    session_start();
}
$list = $_SESSION['todolist']