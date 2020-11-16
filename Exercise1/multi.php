//<?php include 'multi.php';?>//
//website on help with table commands
//https://www.w3schools.com/html/html_tables.asp
//http://www.csun.edu/science/help/help_docs/html_tags.html

<?php




function multi($x, $y) {
    $z = $x * $y;
    return $z;
    }
    
echo "<table style=width:100%>";
echo "<tr>";



echo "<td> </td>";

for($i = 1; $i <=100; $i++){
    echo "<td>" . $i . "</td>";
}

echo "</tr>";


for($j=1; $j<=100; $j++){

    echo "<tr>";
    echo "<td>" . $j . "</td>";
    
    for($k=1; $k<=100; $k++){

        echo "<td>" . multiply($j,$k) . "</td>";
    }

    echo "</tr>";

}

echo "</table>";


?>
