<?php

require('connect.php');
$fullname = $_POST['fio'];
$about = $_POST['about'];
$career = $_POST['career'];
$interests = $_POST['interests'];


$query = "INSERT INTO `portfolio` (`id`, `fullname`, `photo`, `course`, `group_id`, `about`, `interests`, `career`, `modified`) VALUES (NULL, '$fullname', '', '', '', '$about', '$interests', 
'$career', '')";

?>