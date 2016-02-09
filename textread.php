<?php

/**
 * @author haseeb@brokergenius.com
 * @copyright 2016
 */
include('C:\wamp\www\sms.php');
$myfile = fopen("C:\wamp\www\Server\Pinglog.txt", "r");

$message = null;
$messageNew = null;
$defect = null;

while (!feof($myfile))
{
    $arrM = fgets($myfile);
    $var = test_input($arrM);
    $sixe = strlen($var);
    if ($sixe >= 53)
    {
        $arr = explode(",", $var);
        if (sizeof($arr) == 4)
        {
            $res = explode(" ", $var1);
            $defect = chop($res[3], ":");
            $message = "For IP: " . $defect . "\n Result is: [" . $var . "] \n";
            $messageNew .= $message;
        }
    }
    $var1 = $var;
}

//echo $messageNew;
$sms=str_split($messageNew, 3100 );
$num = sizeof($sms);
//echo $num;
//var_dump($sms);
for($i=0;$i<$num;$i++)
{
    echo $sms[$i]."<br /><br /><br />";
    //sendmessage($sms[$i]);
}

//sendmessage($messageNew);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>