<?php

if (!$_SESSION['user_id'])
{
    header('location:index.php');
}

?>