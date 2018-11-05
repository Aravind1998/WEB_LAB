<!DOCTYPE html>
<html>
<head>
	<title> Addition of Matrix </title>
	<meta charset="utf-8">
</head>
<body>
	<form action="Program8c.php" method="post">
		Enter the Order of Matrix 1 : <input type="number" id="m1" name="m1" style="width:3.5em"/> X <input type="number" id="n1" name="n1" style="width:3.5em"/> <input type="button" value="Ok" onClick= "createTable('m1','n1','matrix1','mat1');"/><br>
		<div id="matrix1" ></div><br>
	
		Enter the Order of Matrix 2 : <input type="number" id="m2" name="m2" style="width:3.5em"/> X <input type="number" id="n2" name="n2" style="width:3.5em"/> <input type="button" value="Ok" onClick= "createTable('m2','n2','matrix2','mat2');"/><br>
		<div id="matrix2" ></div><br>

		<input type="submit" value="Add" name="Add" id="Add"/><br>
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
		function Add ()
		{
			echo ('<p>Matrix 1 : </p>');
			echo (printMatrix('m1','n1','mat1') . '<br>');
			echo ('<p>Matrix 2 : </p>');
			echo (printMatrix('m2','n2','mat2') . '<br>');
			if (($_POST['m1'] == $_POST['m2']) and ($_POST['n1'] == $_POST['n2']))
			{
				//echo ("OK");
				echo ('<p>Sum of the Matrix : </p><table border= "1">');
				$mat1 = $_POST['mat1'];
				$mat2 = $_POST['mat2'];
				//print_r ($mat1);
				//print_r ($mat2);
				for ($i=0;$i<$_POST['m1'];$i++)
				{
					echo ('<tr>');
					for ($j=0;$j<$_POST['n1'];$j++)
					{
						echo ('<td style="width:3.5em">' . ($mat1[$i][$j]+$mat2[$i][$j]) . '</td>');
					}
					echo ('</tr>');
				}
				echo ('</table>');
			}
			else
			{
				echo("Order of the Matrix is not the Same");
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
			
		if (array_key_exists('Add',$_POST))
		{
			Add();
		}
	?>	
</body>
</html>
