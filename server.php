<?php




if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    $val = $_GET['tempValue'];
    if (empty($val)) {
        echo "0";
    } else {
        echo "Temp =".$val;
    }
    

   
}



?>