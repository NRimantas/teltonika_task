<?php


echo "<h3> Implement a function that receives two IPv4 addresses and returns the number of addresses between
    them (including the first one, excluding the last one). </h3>";

$ip = "10.0.0.0"; //enter IP address here
$ip2 = "10.0.0.50"; //enter IP address here

// check if IP address is valid
if (filter_var($ip, FILTER_VALIDATE_IP) || filter_var($ip2, FILTER_VALIDATE_IP)) {

    // if first IP address is lower then second
    if ($ip > $ip2) {
        echo "The last address must be greater than the first one.";
    }else if($ip < $ip2){

        // function to return the number of IPv4 addresses between them
        function ipsBetween($ip, $ip2)
        {   
            $result = ip2long($ip2) - ip2long($ip);            
            return $result;
        } 
        // shows the number of addresses between them and compares it
        echo "Numbers between: " . ipsBetween($ip, $ip2) . "<br><br>" . $ip2 . " this IP address is greater.";
        
    }else if(ipsBetween($ip, $ip2) == 0 ){ //if IPv6 are equal
        echo "IPv6 addresses are equal"; 
    } else {        
      
    }
} else {
    echo "The IP Address is not valid!";
}

?>


