<?php
$comment = serialize($_POST);

$error = worldFilter($_POST['comment']);
if ($error){
    header("Location: error.php?massage={$error}");
    exit;
}

$dir = __DIR__ . '/storage/' . date('d-m-y');
if (!is_dir($dir)){ //зодания файла//
    mkdir($dir);
}
$file = time().'_'.md5($comment).'.log';//шифровка файла//
$rout = "{$dir}/{$file}";//обеденям данные двух пернменных в роут//
if (file_exists($rout)){//проверка если фал существует//
    header('Location: forms.php');//переаодресация скрипта//
    exit;//конец выполения программы//
}

    file_put_contents($rout, $comment);//создания путя и фалы с данными в переменных//
    header('Location: forms.php');//переаодресация скрипта//

function worldFilter(string $message): ? string
{
    $blackList = ['loh', 'nigga', 'jopa'];
    foreach ($blackList as $world){
    $contains = stripos($message, $world);
    if ($contains !== false) {
        return "World {$world} is not accetible!";

    }
}
return null;
}
