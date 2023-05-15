<?php 
function mySetCookie(){
    setcookie('AM','Min Kyaw Thu',time()+3600,'/','',0);//name,value,expire,path,domain,secure
}

//mySetCookie();//if use ,myGetCookie() close.
function myGetCookie(){
    if(isset($_COOKIE['AM'])){
      echo $_COOKIE['AM'];
    }else{
        echo "There is no cookie set with that key.";
    }
}
//myGetCookie();//if use ,mySetCookie() close.

function myDeleteCookie(){
    setcookie('AM','',time()-3600,'/','',0);
}
myDeleteCookie();//if use,myDeleteCookie() close.
?>