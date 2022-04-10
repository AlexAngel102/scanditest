<div class="mx-2 flex-grow-1">
	<div>
		<nav class="navbar navbar-expand-lg navbar-prime bg-light">
			<div class="container-fluid">
				<nav class="navbar-brand"><h4>Product list</h4></nav>

				<div class="justify-content-md-end" id="navbarScroll">
					<ul class="navbar-nav navbar-nav-scroll">
						<li class="nav-item">
							<form action="" method="post">
								<button type="button" id="" class="btn btn-outline-success mx-1">Add
									product
								</button>
							</form>
						</li>
						<li class="nav-item">
							<form action="" method="post">
								<button type="button" class="btn btn-outline-danger mx-1 delete-product-btn">Mass
									delete
								</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="row justify-content-md-end">
            <?php include "allProducts.php"; ?>
		</div>
	</div>
</div>