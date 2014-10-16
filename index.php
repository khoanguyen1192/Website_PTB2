<!DOCTYPE html>
<html>
	<head>
		<title>Website-giai PTB2-by Bao Khoa</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>

	<body>
		<?php
			$a = 3;
			$b = 4;
			$c = 5;

			
			$del = $b*$b - 4*$a*$c;

			echo $del;

			echo "<br />";

			if ($del == 0) {
			 	echo "Phuong trinh co nghiem kep";
			}
			elseif ($del > 0) {
			 	echo "Phuong trinh co 2 nghiem phan biet";
			}
			else{
				echo "Phuong trinh vo nghiem";
			} 
		?>
	</body>
</html>