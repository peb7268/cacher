<?php 
//echo "Bootstrap Found in:". dirname(dirname(__FILE__)).'/src/lib/autoloader.php' . "\n";
//echo "Bootstrap Found \n";
require dirname(dirname(__FILE__)).'/src/lib/autoloader.php';
spl_autoload_register('autoloadTests');