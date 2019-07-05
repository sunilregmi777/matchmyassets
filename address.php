<?php include('header.html'); ?>
<div class="my-account">
	<div class="container-fluid">
		<nav class="my-account-navigation" id="accNav">
			<ul>
				<li><a href="listing.php" class="acc-nav-list">My Listings</a></li>
				<li><a href="orders.php" class="acc-nav-list">Orders</a></li>
				<li><a href="address.php" class="acc-nav-list">Addresses</a></li>
				<li><a href="payment-method.php" class="acc-nav-list">Payment methods</a></li>
				<li><a href="account-detail.php" class="acc-nav-list">Account details</a></li>
				<li><a href="#" class="acc-nav-list">Logout</a></li>
				<li><a href="lost-password.php" class="acc-nav-list">Lost password</a></li>
			</ul>
		</nav>
	</div>
</div>
<section class="my-account-content">
	<div class="container">
		<div class="tab-item my-order">
			<div class="section-header">
				<i class="fa fa-address-book-o" aria-hidden="true"></i>
				<h5>Addresses</h5>
			</div>
			<div class="section-body">
				<p>The following addresses will be used on the checkout page by default.</p>
				<div class="order-detail">
					<div class="inner-wrapper">
						<div class="address billing-address">
							<h2 class="detail-title address-title">Billing address</h2>
							<a href="edit-billing-address.php" class="edit-address">Edit</a>
							<address>
								<p>
									<span>MatchMyAssets</span>
									<span>asd Stauber</span>
									<span>Strasse 2</span>
									<span>8000 Zurich</span>
								</p>
							</address>
						</div>
						<div class="address mailing-address">
							<h2 class="detail-title address-title">Shipping address</h2>
							<a href="edit-shipping-address.php" class="edit-address">Edit</a>
							<address>
								<p>You have not set up this type of address yet.</p>
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>
