<?php
    //print php information
    //phpinfo();
  
    //echo "this string"; to display
    $var = 'PHP Tutorial';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var?></title>
</head>
<body>
    <h3><?php echo $var?></h3>
    <form method='POST'>
        <h2>Please input your name:</h2>
        <input type="text" name="name">
        <input type="submit" value="Submit Name">  
    </form>
    <?php
        include 'string.php';
                //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   
        {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
        {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from remote address
        else
        {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        echo "$ip_address<br><br>";

        echo $_SERVER['HTTP_USER_AGENT'];
        $browser = get_browser();
        print_r($browser);

        //get current file name
        //echo basename(__FILE__);
        $current_file_name = basename($_SERVER['PHP_SELF']);
        echo "<br><br>";
        echo $current_file_name."\n";
        
        //get a URL, break it into scheme, host, path execise 8
        echo "<br><br>";
        $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
        $url=parse_url($url);
        echo 'Scheme : '.$url['scheme']."<br>";
        echo 'Host : '.$url['host']."<br>";
        echo 'Path : '.$url['path']."<br>";

        //perform regular expression and replace first letter, q09
        $text = 'PHP Tutorial';
        $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
        echo "$text<br>";

        //q10, check HTTP or HTTPS
        if (!empty($_SERVER['HTTPS'])) 
        {
          echo 'https is enabled<br>';
        }
        else
        {
        echo 'http is enabled<br>';
        }

        //redirect page to another URL
        //header("Location: https://www.w3resource.com/");

        $email = "clifton@example.com"; 
        echo "PHP Version: ".phpversion().'<br>';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo $email." is valid<br>";
           
        }else{
            echo "Invalid \n";   
        }
    ?>
</body>
</html>