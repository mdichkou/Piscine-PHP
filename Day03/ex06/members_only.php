<?php
$user = $_SERVER['PHP_AUTH_USER'];
$pw = $_SERVER['PHP_AUTH_PW'];
$check = true;
if ($user == "zaz" && $pw == "jaimelespetitsponeys")
{
    $url = "../img/42.png";
    $data = base64_encode(file_get_contents($url));
    $imgdata = 'data:image/png;base64,'.$data;
}
else
{
    $check = false;
    header('WWW-Authenticate: Basic realm="Espace membres"');
    header('HTTP/1.0 401 Unauthorized');
}
?>
<?php if ($check): ?>
<html><body>
Bonjour Zaz<br />
<img src="<?=$imgdata?>">
</body></html>
<?php elseif (!$check): ?>
<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
<?php endif;?>