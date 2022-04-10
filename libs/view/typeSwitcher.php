<?php
$sql = "SELECT product_type.id, product_type.type
		FROM product_type
		ORDER BY product_type.id;
";

$query = $pdo->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
?>

<?php while ($r = $query->fetch()):?>
	<option value="<?= htmlspecialchars($r["id"]); ?>"><?= htmlspecialchars($r["type"]); ?></option>
<?php endwhile;?>


