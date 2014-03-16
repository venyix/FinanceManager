<script type='text/javascript'
src='http://code.jquery.com/jquery-latest.js'>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js">
</script> 
<script src="http://malsup.github.com/jquery.form.js"></script>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../sys/config/db-cred.php';
include_once 'assets/process/pay_period_calculations.php';

foreach ($C as $name => $val) {
    define($name, $val);
}

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
$dbo = new PDO($dsn, DB_USER, DB_PASS);

if(!function_exists('classAutoLoader')) {
    function classAutoLoader($class) {
        $class = strtolower($class);
        $classFile = $_SERVER['DOCUMENT_ROOT'] . '../sys/class/' . 
                $class . '.php';
        if(is_file($classFile) && !class_exists($class)) {
            include $classFile;
        }
    }
}
spl_autoload_register('classAutoLoader');
?>