<?php
    session_start();

    function isLoggedIn(){
        if (isset($_SESSION['ptpwl_user_id'])){
            return true;
        } else {
            return false;
        }
    }