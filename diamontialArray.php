<?php


  
$languages = array();
  
$languages['Python'] = array(
    "first_release" => "1991", 
    "latest_release" => "3.8.0", 
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py", 
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);
  
foreach ($languages as $key => $value) {
    echo $key . "\n";
    foreach ($value as $sub_key => $sub_val) {
                  
        // If sub_val is an array then again
        // iterate through each element of it
        // else simply print the value of sub_key
        // and sub_val
        if (is_array($sub_val)) {
            echo $sub_key . " : \n";
            foreach ($sub_val as $k => $v) {
                echo "\t" .$k . " = " . $v . "\n";
            }
        } else {
            echo $sub_key . " = " . $sub_val . "\n";
        }
    }
}
  
?>
