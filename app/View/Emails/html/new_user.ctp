<pre><?php
	print_r($data); ?>
	
 </pre>
	<a href="<?php echo $this->webroot.'/Users/verify/u:'.$data['username'].'/t:'.$data['token']; ?>">Click to Verify</a>