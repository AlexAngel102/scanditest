<div class="mx-2 flex-grow-1">
	<form action="" method="post" id="product-form">
		<nav class="navbar navbar-expand-lg navbar-prime bg-light">
			<div class="container-fluid">
				<nav class="navbar-brand"><h4>Product add</h4></nav>
				<div class="justify-content-md-end" id="navbarScroll">
					<ul class="navbar-nav navbar-nav-scroll">
						<li class="nav-item">
							<button type="submit" id="" class="btn btn-outline-success mx-1">Save
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="btn btn-outline-danger mx-1">Cancel</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container m-1">
			<div class="row">
				<div class="col-1">
					<label for="sku">SKU:</label>
				</div>
				<div class="col">
					<input type="text" id="sku" name="sku" class="my-1"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<label for="name">Name:</label>
				</div>
				<div class="col">
					<input type="text" id="name" name="name" class="my-1"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<label for="price">Price($):</label>
				</div>
				<div class="col">
					<input type="text" id="price" name="price" class="my-1"><br>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-1">
					<label for="productType">Type:</label>
				</div>
				<div class="col-2">
					<select class="form-control" id="productType" onchange="this">
						<?php include "typeSwitcher.php";?>
					</select>
					<script src="./js/formSwitcher.js"></script>
					<div id="content"></div>
				</div>
			</div>
		</div>
	</form>
</div>



