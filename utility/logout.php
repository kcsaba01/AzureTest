<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy 0811994@rgu.ac.uk
 * Date: 20/03/2016
 * Time: 22:07
 */
session_start();
if(session_destroy())
{
    header("Location: ../index.php");
}

?>