<!DOCTYPE html>
<html>
<head>
	<style>
    	table {
        	border: 2px solid black;
            border-collapse: collapse;
        }
        td {
        	height: 50px;
            width: 50px;
        }
        .black {
        	background-color: black;
        }
    </style>
</head>

<body>
    <table>
        <?php

            for ($rows = 1; $rows <= 8; $rows++) {
                echo "<tr>";
                    for ($columns = 1; $columns  <= 8; $columns++) {
                        if (($rows + $columns) %2 ==0) {
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