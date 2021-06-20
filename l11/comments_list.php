<?php
$days = scandir(__DIR__.'/storage/');
$days = array_filter($days, static function ($item)
{return(bool) preg_match('/\d{2}-\d{2}-\d{2}/', $item);});//
//fn($items) => (bool) preg_match('/\d{2}-\d{2}-\d{2}/',$items)); скоращенная запись

$result = [];
foreach ($days as $day) {
    $dir = __DIR__.'/storage/'.$day;
    $files = scandir($dir);
    $files = array_filter($files,static function ($item)
    {return(bool) preg_match('/\d+_[0-9a-f]{32}\.log/',$item);});

    $result[$day] = [];
    foreach ($files as $file) {
        $comment = file_get_contents("{$dir}/{$file}");
        $comment = unserialize($comment);
        $comment['time'] = substr($file,0, strpos($file,'_'));
        //$time = substr($file,0, strpos($file,'_'));//обрезаем '_'//
        //preg_match('/\d+_/',$file,$time);$time = str_replace('_','',$time); втрой вариант обрезания результата '_'//

        $result[$day][$file] = $comment;
    }
}
return $result;