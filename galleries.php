<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Just-In-Time Technology Services : Galleries</title>
	<link rel=stylesheet type="text/css" href="style.css">
</head>

<body bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" bgcolor="0000000" text="#EAF5FF">
<table width="100%" height="94" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
<!-- the LOGO is below, edit blanklogo.jpg / or .psd and save as a different
name to create a logo.  Then change the src="" below to the new file name -->
		<td width="246" height="94"><img src="images/buttons/JNCLogo.jpg" width="246" height="94" border="0" alt=""></td>
<!-- END OF LOGO ----------------------------------------------------------->
		<td width="368" height="94"><img src="topbar1.jpg" width="368" height="94" border="0" alt=""></td>
		<td width="100%" height="94" background="topbar1bg.jpg">&nbsp;</td>
	</tr>
</table>
<table width="100%" height="91" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="613" height="91"><img src="2maincolorarea.jpg" width="613" height="91" border="0" alt=""></td>
		<td width="100%" height="91" background="2maincolorarea_bg.jpg">&nbsp;</td>
	</tr>
</table>
<table width="100%" height="33" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
<!-- IMPORTANT.. edit blankbutton1.jpg or .psd and save as a different
name to create the FIRST button on this menu.  Then change the src="" below to the new file name.
The blankbutton.jpg is a different graphic and shouldn't be edited for placement here -->
		<td width="246" height="33"><a href="index.php"><img src="images/buttons/homebtn.jpg" width="207" height="33" border="0" alt=""></a></td>
<!-- end of first button code -->
		<td width="368" height="33"><img src="3buttonarea.jpg" width="427" height="33" border="0" alt=""></td>
		<td width="100%" height="33" background="3buttonareabg.jpg">&nbsp;</td>
	</tr>
</table>



<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">

		<td width="207">
<!-- the rest of the menu buttons go below, edit blankbutton.jpg / or .psd and save as a different
name to create a new button.  Then change the src="" below to the new file name -->
<a href="helpdesk/index.php?a=add"><img src="images/buttons/requestbtn.jpg" width="207" height="33" border="0" alt=""></a><BR>
<a href="helpdesk/ticket.php"><img src="images/buttons/trackbtn.jpg" width="207" height="33" border="0" alt=""></a><BR>
<a href="partners.html"><img src="images/buttons/partnerbtn.jpg" width="207" height="33" border="0" alt=""></a><BR>
<a href="about.html"><img src="images/buttons/aboutbtn.jpg" width="207" height="33" border="0" alt=""></a><BR>
<a href="contact.html"><img src="images/buttons/contactbtn.jpg" width="207" height="33" border="0" alt=""></a><BR>
<!--<a href="http://www.webaddresshere.com"><img src="images/buttons/paypalbtn.jpg" width="207" height="33" border="0" alt=""></a><BR> --><!-- end of button menu -->
<!-- you can add other text/images for the left side menu below this comment but not after the </td> -->

		</td>

	
	
	  <td width="20">&nbsp;&nbsp;&nbsp;</td>

		<td width="100%">

			<table width="100%" cellpadding="10" cellspacing="0" border="0">
				<tr valign="top">
					<td>			
<!------------------------ Content area, delete anything below this comment and add your content below ---------------------------->
<table width="100%" cellpadding="2" cellspacing="2" border="0"><tr valign="top">
<td width="49%">
<H3>.: Galleries</h3>
<p align="justify">Here are some galleries that I have compiled. Content ranges from the process of building a computer to advanced software configurations.</p>
</td>
<td width="1%">&nbsp;</td>
<td width="50%">
<H3>&nbsp;</h3>
</td>
</tr></table>

<p align="justify">
<?php
		echo "Builds";
		
        $builds = array(
		"AMD A10-5800 based future-proofed small-business computer" => "images/nancyBuild/index.html",
		"Older, but still capable Intel Core2Quad Q6600 based gaming rig" => "images/aaronBuild/index.html",
		"Intel Core i5 based entry-level graphic design system" => "images/rickyBuild/index.html",
		"My personal Intel Core i7 based gaming/home server machine" => "images/myBuild/index.html");
        	foreach ($builds as $name => $url) {
            echo '<li><a href="'.$url.'">'.$name.'</a></li>';
        }
        
        unset($builds);
		echo '<BR>';
		echo 'Software';
		echo '<BR><BR>';
		echo '<li><a href="images/lscreens/CompUbun.html">Ubuntu Linux Configured With Compiz Fusion Visual Effects</a></li>';
	  ?>

<BR><BR><BR><BR><BR><BR><BR>
<BR><BR><BR><BR><BR><BR><BR><BR><BR>
</p>
<center>Web site contents &copy; Copyright Justin Newman 2015, All rights reserved.</center>
<!-------------------------- End of content area ----------------------------------------------------->


<center><a href="http://www.steves-templates.com/" title="Steves free website templates" target="_blank">Website templates</a></center>					</td>
				</tr>
				<tr valign="top">
				  <td>&nbsp;</td>
			  </tr>
			</table>			
	  </td>
		
		<td width="20">&nbsp;&nbsp;&nbsp;</td>
	</tr>
</table>

</body>
</html>