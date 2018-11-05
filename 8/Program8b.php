<!DOCTYPE html>
<html>
<head>
	<title> Transpose of Matrix </title>
	<meta charset="utf-8">
</head>
<body>
	<form action="Program8b.php" method="post">
		Enter the Order of Matrix 1 : <input type="number" id="m1" name="m1" style="width:3.5em"/> X <input type="number" id="n1" name="n1" style="width:3.5em"/> <input type="button" value="Ok" onClick= "createTable('m1','n1','matrix1','mat1');"/><br>
		<div id="matrix1" ></div><br>

		<input type="submit" value="Transpose" name="Transpose" id="Transpose"/><br>
	</form> 
	<script type="text/javascript">
		function createTable(m,n,id,mat)
		{
			var num_rows = document.getElementById(m).value;
			var num_cols = document.getElementById(n).value;
			var theader = '<table border="1">\n';
			var tbody = '';
			for( var i=0; i<num_rows;i++)
			{
				tbody += '<tr>';
				for( var j=0; j<num_cols;j++)
				{
					tbody += '<td>';
					tbody += '<input type="number" id="'+mat+'[' +i+ '][]" name="'+mat+'[' +i+ '][]" style="width:3.5em"/>';
					tbody += '</td>'
				}
				tbody += '</tr>\n';
			}
			var tfooter = '</table>';
			document.getElementById(id).innerHTML = theader + tbody + tfooter;
		}
	</script>
	<?php
		function Transpose ()
		{
			echo ('<p>Matrix 1 : </p>');
			echo (printMatrix('m1','n1','mat1') . '<br>');
			if (isset($_POST['m1']) and isset($_POST['n1']))
			{
				echo ('<p>Transpose of the Matrix : </p><table border= "1">');
				$mat1 = $_POST['mat1'];
				for ($i=0;$i<$_POST['n1'];$i++)
				{
					echo ('<tr>');
					for ($j=0;$j<$_POST['m1'];$j++)
					{
						echo ('<td style="width:3.5em">' . $mat1[$j][$i] . '</td>');
					}
					echo ('</tr>');
				}
				echo ('</table>');
			}
			else
			{
				echo("Not able to Transpose");
			}
		}

		function printMatrix ($m,$n,$id)
		{
			$mat = $_POST[$id];
			echo ('<table border= "1">');
			for ($i=0;$i<$_POST[$m];$i++)
			{
				echo ('<tr>');
				for ($j=0;$j<$_POST[$n];$j++)
				{
					echo ('<td style="width:3.5em">' . $mat[$i][$j] . '</td>');
				}
				echo ('</tr>');
			}
			echo ('</table>');
		}
			
		if (array_key_exists('Transpose',$_POST))
		{
			Transpose();
		}
	?>	
</body>
</html>
