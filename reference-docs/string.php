<?php
    //print php information
    //phpinfo();
    
    //echo "this string"; to display
    
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "<h3>Hello $name</h3>";
    }
  

?>