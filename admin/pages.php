<?php
$do =isset($_GET['do'])?$_GET['do']:'manage';
//if the page is main page
if ($do== 'manage'){
    echo 'Welcome you are in '. $do .' category page';
}elseif ($do=='add'){
    echo 'Welcome you are in '. $do .' category page';
}elseif ($do == 'insert'){
    echo 'Welcome you are in '. $do .' category page';
}elseif ($do == 'edit'){
    echo 'Welcome you are in '. $do .' category page';
}elseif($do == 'update'){
    echo 'Welcome you are in '. $do .' category page';
}elseif ($do == 'delete'){
    echo 'Welcome you are in '. $do .' category page';
}else{
    echo 'Error';
}