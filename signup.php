<?php
$id = md5(rand(6000,PHP_INT_MAX));
?>
<?
include('geturl.php');
?>
<? $subdomain = $_GET['subdomain']; ?>
<html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAHtRtAAAAAAAH4AAAD/AAABw4AAA4HAAAOBwAADgcAAA4HAAAOBwAADgcAAA4HAAAOBwAABw4AAAP8AAAB+AAAAAAAAD//wAA+B8AAPAPAADjxwAAx+MAAMfjAADH4wAAx+MAAMfjAADH4wAAx+MAAMfjAADjxwAA8A8AAPgfAAD//wAA" rel="icon" type="image/x-icon">
<Title>Free Web Hosting with Free Subdomain</Title>
  <meta charset="UTF-8">
  <meta name="description" content="<?echo $yourdomain;?> - Free Web Hosting with Free Subdomain.">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, SQL, Hosting, Subdomain">
  <meta name="author" content="Mehrab Mazmanian">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container text-center justify-content-center"><span style='position: absolute; left: 0; right: 0; top: 10%; margin-top: -50px; width: auto; height: auto; padding: 10px; margin: 10px; color: black; font-size: 14px;'>
<form class="row justify-content-center" method=post action="http://order.<?echo $yourdomain;?>/register2.php"><div style="text-align: center;">
    <div style="text-align: left; display: inline-block;">
    <center><h6><span class="badge text-bg-dark text-center justify-content-center">Free Hosting - Sign Up</span></h6></center>
<div class="col-auto"><div class="input-group mb-3">
<input placeholder="Subdomain" type=text class="form-control" name=username value="<?echo $subdomain;?>" pattern="[a-z0-9]{4,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter sub-domain')" oninput="setCustomValidity('')" required>  <span class="input-group-text">.<?echo $yourdomain;?></span>
</div>
<div class="input-group mb-3"><input placeholder="Password" type=password class="form-control" name=password pattern=".{6,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" id="password" required></div>
<div class="input-group mb-3"><input placeholder="E-mail" class="form-control" oninput="validateEmailInput()" type="email" name=email value="" required></div><div class="input-group mb-3"><input type=hidden name=id value="<?PHP echo $id; ?>"><span class="input-group-text"><img alt="captcha" src="http://order.<? echo $yourdomain;?>/image.php?id=<?PHP echo $id; ?>"></span><input placeholder="Security code" size="10" type=text class="form-control" pattern=".{5,5}" name=number oninvalid="this.setCustomValidity('Enter security code')" oninput="setCustomValidity('')" required></div>
<center><input type="submit" class="btn btn-primary" value="Register"></center></form></div></div></span></div></div>
<div style="opacity: 0.9;"><div style="padding: 5px; margin: 5px; text-align: left; position: fixed; left: 0; bottom: 0; color: black;">&copy; 20<?php echo date('y'); ?></div><div style="padding: 5px; margin: 5px; text-align: right; position: fixed; right: 0; bottom: 0;"><?php include 'stat.php'; ?></div></div></div>
</body>
</html>

