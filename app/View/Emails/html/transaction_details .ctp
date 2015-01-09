<body style="background:#ccc; margin:0; padding:0;">
<?php 
    
	$homeurl = 'http://www.esmees.blankandco.com';
    $url = $homeurl.'/Users/login/';
?>

<div style="background:#cccccc; text-align:center; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:12px; padding:50px;">
<center>
<table cellpadding="0" cellspacing="0" width="600" style="background:#fff; margin:0 auto; text-align:left; width:600px;">
<tr>
	<td style="padding:25px 20px; text-align:left; border-bottom:1px solid #ccc;">
			<img src="<?php echo $homeurl;?>/img/logo.png" height="51" width="259">
	</td>
</tr>
<tr>
	<td style="padding:25px; text-align:left;">
		<div style="min-height:300px; text-align:left;">
			
		<!-- ------------ CONTENT STARTS HERE ------- -->
		
			<h4 style="font-size:14px; font-family:Arial, Helvetica, sans-serif; margin:0 0 20px;">Welcome to Esmees!</h4>
			<p style="font-size:12px; font-family:Arial, Helvetica; line-height:18px; margin:0 0 15px;">Your new password is:&nbsp;<strong> <?php echo $amount; ?></strong></p>
			<p style="font-size:12px; font-family:Arial, Helvetica; line-height:18px; margin:0 0 15px;"><a style="color:#05f;" href="<?php echo $url; ?>">Login</a> with this password and change it, post success.</p>
			<p style="font-size:12px; font-family:Arial, Helvetica; line-height:18px; margin:0 0 15px;">Regards,<br>
			<a href="<?php echo $homeurl; ?>" style="color:#000; text-decoration:none; font-weight:bold;">Esmees Team</a>
			</p>
			
		<!-- ------------ CONTENT ENDS HERE ------- -->
		
		</div>
	</td>
</tr>
<tr>
	<td style="padding:25px; border-top:1px solid #ccc; text-align:left;">
		<a href="<?php echo $homeurl; ?>"><img src="<?php echo $homeurl;?>/img/foot-logo.png" height="17" width="161" style="border:0;"></a>
	</td>
</tr>

</table>
</center>
</div>
</body>
</html>