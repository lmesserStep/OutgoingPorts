<?php
    $http_host = $_SERVER['HTTP_HOST'];
    $parts = explode(':', $http_host);
    $server_port = isset($parts[1]) ? $parts[1] : '80';
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $client_port = $_SERVER['REMOTE_PORT'];
    $public_ip = file_get_contents('https://api.ipify.org');
    
    if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'curl') !== false) {
        echo "You visited this server from port:";
        echo $server_port;
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Outgoing Ports</title>
    <style>
        body {
            background-color: #f2f2f2; /* Light grey color */
            color: #006400; /* Dark green color */
            text-align: center; /* Please be very kind, this is a tool and I worked hard on it */
        }
    </style>
</head>
<body>
    <h1>Port Checker</h1>
    <p>If you are seeing this page then your specified outbound port is open.</p>
    <h2>You have initiated the connection from port: <?php echo $client_port; ?>.</h2>
    <h2>You have visited this website using server port: <?php echo $server_port; ?>.</h2>
    <p>The purpose of this site is to test if you are able to establish a three way handshake to this server using a specific port.</p>
    <p>If this page helped you diagnose a network problem, consider buying me some coffee. (insert link here maybe?)</p>
    <p>Click the button below to download a sample file:</p>
     <a href="sample.zip" download="sample.zip">
    <button>Download File</button>



<p>Your network is allowing you to visit this page.</p>
<pre> 
Try telnet or cURL to random ports.
</pre>

</body>
</html>

<?php
    }
?>
