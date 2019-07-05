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
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				<h5>View order</h5>
			</div>
			<div class="section-body">
				<p>Order <mark>#81</mark> was placed on <mark>26/10/2017</mark> and is currently <mark>Completed</mark>.</p>
				<div class="order-detail">
					<h2 class="detail-title">Order Details</h2>
					<table>
						<thead>
							<tr>
								<th>Product</th>
								<th>Total</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Subtotal:</th>
								<td><span><span class="currency-symbol">$</span>0.00</span></td>
							</tr>
							<tr>
								<th>Payment method:</th>
								<td>Check payments</td>
							</tr>
							<tr>
								<th>Total:</th>
								<td><span><span class="currency-symbol">$</span>19.90</span></td>
							</tr>
						</tfoot>
					</table>
					<a href="#" class="button order-again">Order again</a>
				</div>
				<div class="customer-detail">
					<h2 class="detail-title customer-detail-title">Billing address</h2>
					<address>
						<p>
							<span>London</span>
							<span>WC2N 5DU</span>
							<span>United Kingdom (UK)</span>
						</p>
						<p class="phone-no">00123</p>
						<p class="email-address">
							<a href="mailto:test@example.com" class="mail-address">test@example.com</a>
						</p>
					</address>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>
