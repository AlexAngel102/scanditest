<?php

$sql = "SELECT product.*, product_type.attribute, product_type.unit 
		FROM product 
    	JOIN product_type ON product.type = product_type.id 
		ORDER BY product.id;
		";

$query = $pdo->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

while ($r = $query->fetch()):?>
	<div class="col-sm rounded border" style="margin: 0.5%">
        <?= htmlspecialchars($r["sku"]); ?><br>
        <?= htmlspecialchars($r["name"]); ?><br>
        <?= htmlspecialchars($r["parameter"]) . htmlspecialchars($r["unit"]); ?><br>
        <?= htmlspecialchars($r["price"]) . '$'; ?>
	</div>
<?php endwhile; ?>

