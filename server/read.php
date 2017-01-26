<?php
/**
 * @name   读取目标文件
 * @author Rohn(liuzhao08@baidu.com)
 * @date   17/1/25
 */
set_time_limit(600);
define('DATA_DIR', '../data/');
//取文件全路径
$dataFileName = DATA_DIR . $_GET['f'];
//初次刷新页面会清空原文件内容
if($_GET['timestamp'] == 0){
    @unlink($dataFileName);
}else{
    $timestamp = $_GET['timestamp'];
    if(file_exists($dataFileName)){
        $modifiedAt = filemtime($dataFileName);
        if($modifiedAt > $timestamp){
            $data    = file_get_contents($dataFileName);
            $arrData = array(
                'content' => $data,
                'timestamp' => $modifiedAt,
            );
            echo json_encode($arrData);
        }
    }
}
