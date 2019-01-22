
<?php



$conn = new PDO("mysql:host=localhost;dbname=project1", "root","");

$ingevoerdeNaam = $_POST['naam'];
$ingevoerdeWoonplaats = $_POST['woonplaats'];
$ingevoerdAantal = $_POST['aantalkopjes'];

$stmt = $conn->prepare("INSERT INTO deelnemers (naam, woonplaats, aantalkopjes) VALUES (:fname, :fwoonplaats, :faantal)");
$stmt->bindParam(':fname',$ingevoerdeNaam);
$stmt->bindParam(':fwoonplaats',$ingevoerdeWoonplaats);
$stmt->bindParam(':faantal',$ingevoerdAantal);
// $sql = "INSERT INTO deelnemers (naam, woonplaats, aantalkopjes) 
// VALUES ('$ingevoerdeNaam', 'Dierentuin', 50);";
// INSERT INTO deelnemers (naam, woonplaats, aantalkopjes) VALUES ("Aap", "Dierentuin", 50);
// echo $sql;

$stmt->execute();


$conn = "NULL";



?> 