<?php

session_start();

echo"session is start";
 echo'<html>
<body>
<form action="sesion2.php"method="POST" class="login">
Enter The Username<br><input type="text" name="username" required>
<br>
Eneter the password<br><input type="password">
<br><input type="submit" value="submit">
</form>

</body>
</html>';
 
$_SESSION['lastname']="swami";
?>