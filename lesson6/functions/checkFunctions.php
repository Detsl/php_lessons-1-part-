<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 28.09.16
 * Time: 18:55
 */




function upload_file($file)
{
    if ($file['name'] == '')
    {
        return 'Файл не выбран!';
        
    }
    elseif (copy($file['tmp_name'], '/Users/ghettogeek/devlearn/php_lessons-1-part-/lesson6/pictures/'.$file['name'])) {
        return 'Файл успешно загружен';
    }
    else {
        return 'Ошибка загрузки файла';
    }
}
    

function newFile($file){
    
    return $file['file']['name'];
}
//записывает название нового файла в текстовый файл(будет как бд пока что)
function writeTxt($file){
    $flow = fopen('newfiles.txt','a+');
    fputs($flow,"$file \n");
    fclose($flow);
}
// пишем функцию которая записывает каждую строку файла(массива) в переменную


