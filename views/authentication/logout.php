<?php

    require ("views/authentication/config.php");
    $_SESSION = [''];
    session_unset();
    session_destroy();
    
    echo "<script> location.href = 'home';</script>";