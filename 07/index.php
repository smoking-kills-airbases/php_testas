<!DOCTYPE html>
<html>
<head>
	<style>
    	table {
        	border: 2px solid black;
            /* border-collapse: collapse; */
        }
        td {
        	height: 50px;
            width: 50px;
            border: 1px solid black;
        }
        .black {
        	background-color: burlywood;
        }
    </style>
</head>

<body>
<table>
<?php

	 for ($rows = 1; $rows <= 7;$rows++) {
     	echo "<tr>";
        	for ($columns = 1; $columns  <= 7;$columns++) {
            	if ($rows == 4 && $columns == 4
                	|| $rows == 1 && $columns == 1
                    || $rows == 2 && $columns == 2
                    || $rows == 3 && $columns == 3
                    || $rows == 3 && $columns == 5
                    || $rows == 2 && $columns == 6
                    || $rows == 1 && $columns == 7
                    || $rows == 7 && $columns == 1
                    || $rows == 6 && $columns == 2
                    || $rows == 5 && $columns == 3
                    || $rows == 5 && $columns == 5
                    || $rows == 6 && $columns == 6
                    || $rows == 7 && $columns == 7
                ) {
                	echo "<td class='black'</td>";
                } else {
            		echo "<td></td>";
                }  
            }
        echo "</tr>";
     }

?>
</table>
</body>
</html>