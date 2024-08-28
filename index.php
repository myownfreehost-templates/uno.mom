<?
include('geturl.php');
?>
<html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAHtRtAAAAAAAH4AAAD/AAABw4AAA4HAAAOBwAADgcAAA4HAAAOBwAADgcAAA4HAAAOBwAABw4AAAP8AAAB+AAAAAAAAD//wAA+B8AAPAPAADjxwAAx+MAAMfjAADH4wAAx+MAAMfjAADH4wAAx+MAAMfjAADjxwAA8A8AAPgfAAD//wAA" rel="icon" type="image/x-icon">
<Title>უფასო ვებ ჰოსტინგი და უფასო ქვე-დომენი</Title>
  <meta charset="UTF-8">
  <meta name="description" content="<?echo $yourdomain;?> - უფასო ვებ ჰოსტინგი PHP მხარდაჭერით და უფასო ქვე-დომენით.">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, SQL, Hosting, Subdomain">
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
</head>
<body> 
<div style="text-transform: uppercase; padding: 8px; margin: 8px; text-align: left; position: fixed; left: 0; top: 0;">
<a class="btn btn-danger" href="http://<?echo $yourdomain;?>"><?echo $yourdomain;?></a></div>
<div style="padding: 8px; margin: 8px; text-align: right; position: fixed; right: 0; top: 0;">
<a class="btn btn-primary" href="http://cpanel.<?echo $yourdomain;?>">შესვლა</a> <a class="btn btn-dark" href="http://<?echo $yourdomain;?>/signup.php">რეგისტრაცია</a></div>
<div class="container text-center justify-content-center">
<form class="row justify-content-center" style='position: absolute; left: 0; right: 0; top: 20%; margin-top: -50px; width: auto; height: auto; padding: 10px; margin: 10px; color: black; font-size: 14px;'><div class="col-auto"><div class="form-control alert alert-primary" role="alert">
უფასო ვებ ჰოსტინგი PHP მხარდაჭერით და უფასო ქვე-დომენით</div></div>
</form>
<form class="row justify-content-center" style='position: absolute; top: 50%; left: 0; right: 0; margin-top: -50px; width: auto; height: auto;'>
<div class="col-auto"><div class="input-group mb-3">
<input type='text' class="form-control" placeholder="ქვე-დომენი" value="" pattern="[a-z0-9]{4,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter sub-domain')" oninput="setCustomValidity('')" id="hostname" required>
<span class="input-group-text">.<?echo $yourdomain;?></span>
</div></div>
<div class="col-auto">
<input type="submit" onclick="openURL()" class="btn btn-success" value="გადამოწმება" />
    </div>
</form>
<div style="padding: 5px; margin: 5px; text-align: left; position: fixed; left: 0; bottom: 0; color: black;">&copy; 20<?php echo date('y'); ?></div><div style="padding: 5px; margin: 5px; text-align: right; position: fixed; right: 0; bottom: 0;"><?php include 'stat.php'; ?></div>
</body>
</html>
