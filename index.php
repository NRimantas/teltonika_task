<?php


echo "<h3> Implement a function that receives two IPv4 addresses and returns the number of addresses between
    them (including the first one, excluding the last one). </h3>";

$ip = "20.0.0.0"; //enter IP address here
$ip2 = "20.0.1.50"; //enter IP address here

// check if IP address is valid
if (filter_var($ip, FILTER_VALIDATE_IP) || filter_var($ip2, FILTER_VALIDATE_IP)) {

    if ($ip > $ip2) {
        echo "The last address must be greater than the first one.";
    } else {
        
        function ipsBetween($ip, $ip2)
        {   
            $result = ip2long($ip2) - ip2long($ip);
            
            return $result;
        }       

        // shows the number of addresses
        echo ipsBetween($ip, $ip2);
    }
} else {
    echo "The IP Address is not valid!";
}

?>

