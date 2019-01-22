
<!--  -->
<?php
$productid = $_GET['productid'];//ipv formulier in browser invoegen

try{
$conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("DELETE FROM producten  WHERE ID= :fid");
$stmt->execute([
    'fid' => $productid,
    
]);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

header("Location: index.php");//verwijzing naar andere pagina
$conn = NULL;
?> 