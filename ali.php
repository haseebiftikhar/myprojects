<?php

/**
 * @author haseeb@brokergenius.com
 * @copyright 2016
 */
$myfile;
$ipAdd = "192.99.23.240,        
192.99.244.245,        
192.99.23.32,        
192.99.23.33,        
192.99.23.35,        
192.99.23.239,
192.99.144.58,        
192.99.97.190,        
192.99.97.217,        
192.99.97.216,        
192.99.97.191,        
192.99.97.215,
198.20.91.179,
184.154.223.215,
184.154.223.216,
184.154.223.217,
184.154.223.218,
198.143.141.217,
108.178.59.2,
108.178.59.3,
108.178.59.4,
108.178.59.5,
108.178.59.6,
68.169.52.6, 68.169.52.9, 68.169.52.26, 68.169.52.29, 68.169.52.30, 68.169.52.43,
199.229.255.128,199.229.255.51, 199.229.255.52, 199.229.255.53, 199.229.255.54, 199.229.255.55, 199.229.255.56 ,199.229.255.129,199.229.255.135,
50.22.194.118,
159.100.179.33,
159.100.179.32,
162.210.51.58,
162.210.51.59,
162.253.34.29,162.253.33.244,162.253.32.244,162.253.32.243,162.253.35.29,
173.44.63.172, 173.44.63.178, 173.44.63.180, 173.44.63.181,
168.144.187.26, 168.144.187.42, 168.144.187.55, 168.144.187.71, 168.144.187.73, 168.144.187.80,
50.31.1.37, 50.31.3.182 ,50.31.4.64 ,50.31.4.221 ,50.31.3.196 ,50.31.4.224 ,50.31.4.165,
198.20.101.146,
108.178.41.226,
198.20.101.147,
198.20.101.150,
198.20.101.151,
198.20.101.154,
198.20.101.159,
159.100.185.123,
159.100.185.145,
159.100.185.146,
159.100.185.147,
159.100.185.148,
159.100.185.149,

192.99.147.54,
167.114.173.110,
167.114.116.42,
167.114.119.202,
167.114.156.12,
192.99.18.74,

198.245.55.64,
167.114.169.161,

167.114.64.128 ,

158.69.116.74,

167.114.1.77,

167.114.101.120,

158.69.60.92,
158.69.60.93,
158.69.201.191,
158.69.201.192,
158.69.201.193,
158.69.201.194,
158.69.201.195,
158.69.201.195,
158.69.52.92,
167.114.174.87,
158.69.217.80,

192.99.244.43,

158.69.55.33,
158.69.55.35,
158.69.55.34,
158.69.205.218,

158.69.116.223";

$newIp = explode(',', $ipAdd);

$path = 'C:\wamp\www\Server';
        $myfile = fopen($path . "\autoping [" . date('Y-m-d-H-m-s') . '].bat', "a") or
            die("Unable to open file!");
            

$abc="@ECHO"; 
$def=":LOOPSTART";
$ghi="time /T >> Pinglog.txt";

fwrite($myfile, $abc . PHP_EOL);
fwrite($myfile, $def . PHP_EOL);
fwrite($myfile, $ghi . PHP_EOL);
        
        
$size=sizeof($newIp);
//echo $size;    
for($i=0;$i<$size;$i++)
{
    $text= test_input($newIp[$i]);
    $text="ping  ".$text."  -n 4 >> Pinglog.txt";
    fwrite($myfile, $text . PHP_EOL);
}

fclose($myfile);           

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    //$data = htmlspecialchars($data);
    return $data;
}

?>
