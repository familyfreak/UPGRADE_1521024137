<?php
/* Nama */
	$n1 = "ADITYA PUTRA IRFANDI";
/* proses - vocal */
	$a = substr_count($n1, 'A');
	$e = substr_count($n1, 'E');
	$i = substr_count($n1, 'I');
	$u = substr_count($n1, 'U');
	$o = substr_count($n1, 'O');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Menghitung Vocal pada nama</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<th rowspan="2">INPUT</th>
				<th colspan="5">OUTPUT</th>
			</tr>
			<tr>
				<th>A</th>
				<th>E</th>
				<th>I</th>
				<th>U</th>
				<th>O</th>
			</tr>
			<tr>
				<!-- mengambil variabel yang telah di proses di atas -->
				<td>
					<?php 
					echo $n1;
					?>
				</td>
				<td>
					<?php 
					echo $a;
					?>
				</td>
				<td>
					<?php 
					echo $e;
				;	?>
				</td>
				<td>
					<?php 
					echo $i;
					?>
				</td>
				<td>
					<?php 
					echo $u;
					?>
				</td>
				<td>
					<?php 
					echo $o;
					?>
				</td>
			</tr>
		</table>
	</body>
</html>