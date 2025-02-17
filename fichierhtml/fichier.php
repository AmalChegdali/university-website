
<?php

$conn= mysqli_connect("localhost","root","","projectdev") or die( mysqli_connect_error());



$query = "SELECT e.Nom_Etudiant, e.Prenom_Etudiant, d.Type_Demande, d.contenu, d.Date_Demande
FROM demande d
INNER JOIN etudiant e ON e.Id_Etudiant = d.Id_Etudiant
WHERE d.Type_Demande IN ('Demande du changement du groupe', 'lettre_de_recommandation')
GROUP BY d.Type_Demande;
";


$result = $conn->query($query);


echo "<table border='2' id='tab_demande'><tr>";


if ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $column => $value) {
        echo "<th>$column</th>";
    }
    echo "</tr>";

    
    mysqli_data_seek($result, 0); 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
          