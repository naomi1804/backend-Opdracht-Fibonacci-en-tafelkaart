<?php

// gives the looks for the table
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; text-align: center; font-family: sans-serif;'>";

// top table row where the numbers 1 to 9 are
echo "<thead>";
echo "<tr style='background-color: #116869;'>";
echo "<th style='padding: 10px;'>Tafel van</th>";
for ($col = 1; $col <= 9; $col++) {
    echo "<th style='padding: 10px; min-width: 30px;'>" . $col . "</th>";
}
echo "</tr>";
echo "</thead>";

// rows for the table
echo "<tbody>";
// this is for the rows of the table from 1 to 10 and makes sure it doesn't go higher
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";

    // this is for the style of the rows
    echo "<th style='background-color: rgb(106, 204, 192); padding: 10px;'>" . $row . "</th>";

    // this is the bottom row with the numbers 1 to 9 and it makes sure it doesn't go higher 
    for ($col = 1; $col <= 9; $col++) {
        // it calculates it here
        $product = $row * $col;
        echo "<td style='padding: 10px;'>" . $product . "</td>";
    }

    echo "</tr>";
}
echo "</tbody>";

echo "</table>";
?>