<?php 

    $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $DB->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

    $products = $DB->query("SELECT * FROM projektdatart LIMIT 15");

    function lowercase($string){
        return strtolower(iconv('utf-8', 'ascii//TRANSLIT', $string));
    }
?>