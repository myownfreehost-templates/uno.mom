<?
include('geturl.php');
?>
<? $subdomain = $_GET['subdomain']; ?>
<html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAHtRtAAAAAAAH4AAAD/AAABw4AAA4HAAAOBwAADgcAAA4HAAAOBwAADgcAAA4HAAAOBwAABw4AAAP8AAAB+AAAAAAAAD//wAA+B8AAPAPAADjxwAAx+MAAMfjAADH4wAAx+MAAMfjAADH4wAAx+MAAMfjAADjxwAA8A8AAPgfAAD//wAA" rel="icon" type="image/x-icon">
<Title>Free Web Hosting with Free Subdomain</Title>
  <meta charset="UTF-8">
  <meta name="description" content="<?echo $yourdomain;?> - Free Web Hosting with Free Subdomain Name.">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, SQL, Hosting, Subdomain Name">
  <meta name="author" content="Mehrab Mazmanian">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="bootstrap.min.css">
<script>
function openURL()
{
    var name = document.getElementById('hostname').value;
    var url = 'http://' + encodeURIComponent(name) + '.<?echo $yourdomain;?>';
    window.location.href = url;
    window.open(url);
}
</script>
<style type="text/css">
#popupbox{background: #fafafa;
position: absolute; right: 0; padding: 10px; margin: 10px;
z-index: 9; 
font-family: arial; 
visibility: hidden;
}
</style>
<script language="JavaScript" type="text/javascript">
function login(showhide){
if(showhide == "show"){
    document.getElementById('popupbox').style.visibility="visible";
}else if(showhide == "hide"){
    document.getElementById('popupbox').style.visibility="hidden"; 
}
}
</script>
</head>
<body> 
<div id="popupbox"><div class="container">
<div class="row">
<div class="col"><p>
<div class="card">
<form action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post">
<h6 class="card-header">Control Panel - Login</h6>
  <div class="card-body">
<div class="input-group mb-3">
<input placeholder="Enter username" class="form-control" type="text" name="uname" maxlength="30" oninvalid="this.setCustomValidity('Enter username')" oninput="setCustomValidity('')" required></div>

<div class="input-group mb-3">
<input placeholder="Enter password" class="form-control" type="password" name="passwd" maxlength="30" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required></div>

<div class="input-group mb-3">
<input type="submit" name="submit" class="btn btn-warning" value="Login" /></div>

<div class="input-group mb-3">
<a class="btn btn-secondary" href="http://cpanel.<?echo $yourdomain;?>/lostpassword.php">Forgot password?</a>
</div>

<div class="input-group mb-3">
<a class="btn btn-danger" href="javascript:login('hide');">Close</a></div>
</form>
</div></div></p></div></div></div></div>
<div style="text-transform: uppercase; padding: 8px; margin: 8px; text-align: left; position: fixed; left: 0; top: 0;">
<a class="btn btn-outline-secondary" href="http://<?echo $yourdomain;?>"><?echo $yourdomain;?></a></div>
<div style="padding: 8px; margin: 8px; text-align: right; position: fixed; right: 0; top: 0;">
<a class="btn btn-primary" href="javascript:login('show');">Login</a> <a class="btn btn-dark" href="http://<?echo $yourdomain;?>/signup.php">Sign Up</a></div>
<div class="container text-center justify-content-center">
<form class="row justify-content-center" style='position: absolute; left: 0; right: 0; top: 20%; margin-top: -50px; width: auto; height: auto; padding: 10px; margin: 10px; color: black; font-size: 14px;'><div class="col-auto"><div class="card-body alert alert-primary" role="alert">
Free Web Hosting with Free Subdomain Name</div></div>
</form>
<form method="GET" action="signup.php" class="row shadow-none mb-5 bg-body-tertiary rounded justify-content-center" style='background-color: #fafafa; padding: 5px; margin: 5px; position: absolute; top: 50%; left: 0; right: 0; margin-top: -50px; width: auto; height: auto;'>
<div class="col-auto"><div class="input-group mb-3">
<span class="input-group-text">http://</span><input type='text' name="subdomain" class="form-control" placeholder="Enter sub-domain name" value="<?echo $subdomain;?>" pattern="[a-z0-9]{4,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter sub-domain')" oninput="setCustomValidity('')" name="subdomain" id="hostname" required>
<span class="input-group-text">.<?echo $yourdomain;?></span>
</div></div>
<div class="col-auto">
<input type="submit" onclick="openURL()" class="btn btn-success" value="Register" />
</div>
</form>
<div style="padding: 5px; margin: 5px; text-align: left; position: fixed; left: 0; bottom: 0; color: black;">&copy; 20<?php echo date('y'); ?></div><div style="padding: 5px; margin: 5px; text-align: right; position: fixed; right: 0; bottom: 0;"><?php include 'stat.php'; ?></div>
</body>
</html>
