<?php  
// определяем callback функцию основного окна которой вернем ответ по окончанию загрузки 
 function jsOnResponse($obj)  
 {  
 echo '<script type="text/javascript"> window.parent.onResponse("'.$obj.'"); </script> ';  
 }  
// определяем куда скопируем файл пользователя
 $dir = '../temp/';  
 $name = basename($_FILES['loadfile']['name']);  
 $file = $dir . $name;  
//копируем файл и получаем результат
 $success = move_uploaded_file($_FILES['loadfile']['tmp_name'], $file);  
//вызываем callback функцию и передаем ей результат
 jsOnResponse("{'filename':'" . $name . "', 'success':'" . $success . "'}");  
?> 