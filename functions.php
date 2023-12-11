<?php
function isUserLoggedIn()
{
    return isset($_SESSION['kd_cs']);
}
