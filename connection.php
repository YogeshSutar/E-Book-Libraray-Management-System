<?php
define('db_server','localhost');
define('db_username','root');
define('db_password','');
define('db_name','login');

$con=mysqli_connect(db_server,db_username,db_password,db_name);

if(mysqli_connect_error()){
    echo "<script>
    alert('cannot connect database');
    </script>";
}

?>