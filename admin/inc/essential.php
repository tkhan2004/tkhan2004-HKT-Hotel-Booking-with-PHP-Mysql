<?php 
    function adminLogin(){
        session_start() ;
        if(!(isset($_SESSION['adminLogin']) &&  $_SESSION['adminLogin'] == true)){
            echo"<script> 
            window.location.href='index.php';
            </script>";
    }
}
    function redirect($url){
        echo"<script> 
            window.location.href='$url';
        </script>";
        exit;

    }
    function alert($type, $msg){
        $bs_class = ($type=="success") ? "arlert-success" : "allert-danger";
        echo <<<arler
        <div class="alert $bs_class alert-dismissible fade show custom-arlert" role="alert">
        <strong>$msg</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    arler;
    }
?>