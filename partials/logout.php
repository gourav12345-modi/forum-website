<?php

session_start();//mandatory while accessing session 
session_unset();//unset all session varible like username ,favcat
session_destroy();//destory session
header("location:http://localhost/gphpt/gforum/index.php");



?>