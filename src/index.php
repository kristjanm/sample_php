<html>
	<body>
		<?php
			print ("Hello world");
			$response = file_get_contents('https://www.google.com');
			print($response);	
		?> 
	</body>
</html>