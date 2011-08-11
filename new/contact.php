<? 



#| SETTINGS |==================================================
$mailto[]  = "will@willbowling.com";

// $mailto2[]	= 'michael@drcinc.us';

$domain = "willbowling.com";

$filename = "contact.csv";

$thankyoupage = "thanks.php";

#|=============================================================

 if ($_POST['ipaddress'] == $_SERVER['REMOTE_ADDR'])
{
$subject = "Lead From $domain";


if ($_GET['source'] == 'aw')
{
	$subject .= " - Google";
}
else
{
	$subject .= "";
}

$fields['datetime'] = date('Y-m-d H:i:s');
$fields['IP'] = $_SERVER['REMOTE_ADDR'];

foreach ($_POST as $key => $value)
{
    $fields[$key] = trim($value);
    unset($fields['imageField_x']);
	unset($fields['imageField_y']);
	unset($fields['Submit']);
	unset($fields['ipaddress']);
}

foreach ($fields as $key => $value)
{
    $email_text .= "$key: $value\n";
}

$file_text = '"' . implode('","', $fields) . '","' . $_GET['source'] . "\"\r\n";

if (isset($fields['name']))
{
    $name = $fields['name'];
}
else
{
    $name = $fields['first_name'] . " " . $fields['last_name'];
}

if (is_writable($filename))
{
    if ($fileid = fopen($filename, "a"))
    {
        fwrite($fileid, $file_text);
        fclose($fileid);
    }
    else
    {
        echo "Cannot open file.";
    }
}
else
{
    echo "File not writable.";
}

mail(implode(',', $mailto), $subject, $email_text, "From: \"$email\" <{$fields['email']}>");

/*
if (isset($_GET['source']))
{
foreach ($_GET as $key2 => $value2)
{
	$fields2[$key2] = trim($value2);
}

foreach ($fields2 as $key2 => $value2)
{
	$google_source .= "$key2: $value2\n";
}

$google_source .= $email_text;

mail(implode(',', $mailto2), $subject, $google_source, "From: \"$email\" <{$fields['email']}>");
}
else


{
mail(implode(',', $mailto2), $subject, $email_text, "From: \"$email\" <{$fields['email']}>");
}
*/

header("Location: $thankyoupage");
exit;

}
else
{
	die("You have reached this page an error. Please <a href='http://$domain'>click here to continue</a>");
}

?>


