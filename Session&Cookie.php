<!-- Session and Cookie -->

<!-- 
        Session -> Store on SERVER

        Cookie -> Store on User's Browser 

-->

<!-- --------------Set and Get and Delete Cookie--------------- -->

<!-- setcookie(cookieName,value,expireTime,path,domain,security);
// if have not domain, write ''// security 0 -> https // security 1 -> http -->

<?php
    function mysetCookie(){
        setcookie('BM','Brighter Myanmar',time() + 3600,'/','',0);
        echo "set cookie success";
    }

    function getCookie(){
        if(isset($_COOKIE['BM'])){
            echo $_COOKIE['BM'];
        }else{
            echo "There is no cookie with that name";
        }
    }

    function deleteCookie(){
        setcookie('BM','',time() - 3600,'/','',0);// value-> ''//expire-> time() - 3600
        echo "delete cookie success";
    }

    //mysetCookie();

    getCookie();

    //deleteCookie();

?>
