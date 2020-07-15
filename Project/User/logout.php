<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        session_destroy();
        unset($_SESSION['username']);
        echo "<script> window.location.href = 'login.php'</script>";
    }
?>