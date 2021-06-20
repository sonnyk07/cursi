<?php
$comment= serialize($_POST);
$dir = __DIR__ . '/storage/' . date('d-m-y');
if (!is_dir($dir)){ //зодания файла//
    mkdir($dir);
}
$file = time().'_'.md5($comment).'.log';//шифровка файла//
$rout = "{$dir}/{$file}";//обеденям данные двух пернменных в роут//
if (file_exists($rout)){//проверка если фал существует//
    header('location: forms.php');//переаодресация скрипта//
    exit;//конец выполения программы//
}

file_put_contents($rout, $comment);//создания путя и фалы с данными в переменных//
header('location: forms.php');//переаодресация скрипта//
