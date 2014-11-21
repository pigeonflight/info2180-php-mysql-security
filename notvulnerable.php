<!doctype html>
<html>
<head>
    <title>I'm am insecure</title>
</head>
<body>
    

<?php
# connect to world database on local computer
$db = mysql_connect("127.0.0.1", "pigeonflight");
mysql_select_db("userdb");


$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

#$name = htmlspecialchars($name);
#print "hello this is a quote \" $name";
#$mal = mysql_escape_string("THE STRING: hello ' I'm a malicious string");
#print $mal;
# add a mysql query against our userdb > login table to check if everything is 
# legit

/* $username = 'john';
$password = '1234';
$testquery = "SHOW tables";
*/

$query = "SELECT username FROM login WHERE username = '$username' AND password = '$password'";

$results = mysql_query($query);

$arr = mysql_fetch_array($results);

$arr_size = sizeof($arr);

if ($arr_size > 1){
  print "welcome, you got in";
}
else {
    print "sorry wrong password"; ?>

Enter your username and password
<form method="POST">
<label>username:<input type="text" name="username"></label>
<label><input type="text" name="password"></label>
<input type="submit">
</form>
    
<?php
}

?>

</body>
</html>