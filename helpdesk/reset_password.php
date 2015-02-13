<?php
//==============================================================================
// HESK password reset script (2.0 @ 17th Aug 2013)
//
// WORKS WITH ALL HESK VERSIONS!
//==============================================================================
// Use at own risk. By using this code you agree to indemnify Klemen Stirn from
// any liability that might arise from it's use.
//
// This file needs to be DELETED from the server after password has been reset!!
//==============================================================================
// HESK is a registered trademark of Klemen Stirn.
// Copyight 2013 Klemen Stirn. All rights reserved.
//==============================================================================

define('IN_SCRIPT',1);
define('HESK_PATH','');
$hesklang = array();

// Get settings
require(HESK_PATH . 'hesk_settings.inc.php');

// Generate new password and hash
$hesk_settings['new_pass'] = hesk_iCreatePass();
$hesk_settings['new_hash'] = hesk_iPass2Hash($hesk_settings['new_pass']);

// Process HESK version 2.5.0+
if ( version_compare($hesk_settings['hesk_version'], '2.5.0', '>=') )
{
	reset_250();
}

// Process HESK version 2.1 - 2.4.2
elseif ( version_compare($hesk_settings['hesk_version'], '2.1', '>=') )
{
	reset_21();
}

// Process HESK version 2.0
elseif ( version_compare($hesk_settings['hesk_version'], '2.0', '==') )
{
	reset_20();
}

// Process older versions (0.9x)
else
{
	reset_09();
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>HESK password reset</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<style type="text/css">
	body, td, p, input
	{
		color : #000000;
		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
		font-size : 12px;
	}
	pre
	{
		font-size: 13px;
	}
	</style>
</head>

<body>

<p>HESK Administrator login details have been reset to:</p>

<p>&nbsp;</p>

<pre>
Username: <b>Administrator</b>
Password: <b><?php echo $hesk_settings['new_pass']; ?></b>
</pre>

<p><a href="#" onclick="window.print();return false;">Print this page</a></p>

<p>&nbsp;</p>

<p><span style="color:red">DELETE THIS FILE FROM THE SERVER!</span></p>

</body>

</html>

<?php

//==============================================================================
// FUNCTIONS
//==============================================================================


function reset_250()
{
	global $hesk_settings, $hesklang;

	require(HESK_PATH . 'inc/common.inc.php');
	hesk_load_database_functions();

	hesk_dbConnect();
	hesk_dbQuery("UPDATE `".$hesk_settings['db_pfix']."users` SET `user`='Administrator', `pass`='{$hesk_settings['new_hash']}' WHERE `id`=1 LIMIT 1");

	return true;
}


function reset_21()
{
	global $hesk_settings, $hesklang;

	require(HESK_PATH . 'inc/common.inc.php');
	require(HESK_PATH . 'inc/database.inc.php');

	hesk_dbConnect();
	hesk_dbQuery("UPDATE `".$hesk_settings['db_pfix']."users` SET `user`='Administrator', `pass`='{$hesk_settings['new_hash']}' WHERE `id`=1 LIMIT 1");

	return true;
}


function reset_20()
{
	global $hesk_settings, $hesklang;

	require(HESK_PATH . 'language/'.$hesk_settings['language'].'.inc.php');
	require(HESK_PATH . 'inc/common.inc.php');
	require(HESK_PATH . 'inc/database.inc.php');

	hesk_dbConnect();
	hesk_dbQuery("UPDATE `".$hesk_settings['db_pfix']."users` SET `user`='Administrator', `pass`='{$hesk_settings['new_hash']}' WHERE `id`=1 LIMIT 1");

	return true;
}


function reset_09()
{
	global $hesk_settings, $hesklang;

	require(HESK_PATH . 'language/'.$hesk_settings['language'].'.inc.php');
	require(HESK_PATH . 'inc/common.inc.php');
	require(HESK_PATH . 'inc/database.inc.php');

	hesk_dbConnect();
	hesk_dbQuery("UPDATE `hesk_users` SET `user`='Administrator', `pass`='{$hesk_settings['new_pass']}' WHERE `id`=1 LIMIT 1");

	return true;
}


function hesk_iPass2Hash($plaintext)
{
    $majorsalt  = '';
    $len = strlen($plaintext);
    for ($i=0;$i<$len;$i++)
    {
        $majorsalt .= sha1(substr($plaintext,$i,1));
    }
    $corehash = sha1($majorsalt);
    return $corehash;
}


function hesk_iCreatePass($length = 8)
{
	// Password can contain these chars
	$useChars = 'AaEeUuYyBbDdGgHhJjLMmNnPpQqRrSsTtVvWwXxZz123456789';
	$numChars = strlen($useChars) - 1;

	// Minimum password length is 5 chars
	$length = $length < 5 ? 5 : $length;

	// Generate password
	$newPass = '';
	for ($i = 1; $i <= $length; $i++)
	{
		$newPass .= $useChars[mt_rand(0,$numChars)];
	}

	// Return the password
	return $newPass;
}
?>
