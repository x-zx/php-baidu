<?php
include_once('baidu.php');
$bd = new baidu();
$res = $bd->search('apple');
print_r($res);