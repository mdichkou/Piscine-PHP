<?php
$login = $_GET["login"];
$passwd = $_GET["passwd"];
$submit = $_GET["submit"];
session_start();
if ($submit == "OK")
{
    $_SESSION['login'] = $login;
    $_SESSION['passwd'] = $passwd;
}
?>
<html>
<head>
</head>
<body>
<div id="login">
<form action="" method="get">
Identifiant:<input type="text" name="login" value="<?php echo $_SESSION['login'];?>" >
<br><br>
Password :<input type="password" name="passwd" value="<?php echo $_SESSION['passwd'];?>">
<br><br>
<input type="submit" name="submit" value="OK" >
</form> 
</div>
<style>
#login {
    position:absolute;
    margin: 0 auto; 
    width:50%;
    height:20%;
    right:0;
    left:0;
    text-align: center;
    padding:5%;
}
body {
    background-color: #a0d8d6;
}
</style>
</body>
</html>