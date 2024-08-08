<?php
echo "<h3>Tabel Perkalian 1-10</h3>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i = 1; $i <= 10; $i++) {
echo "<tr>";
for ($j = 1; $j <= 10; $j++) {
echo "<td>" . ($i * $j) . "</td>";
}
echo "</tr>";}
echo "</table>";
?>
