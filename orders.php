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
				<h5>Orders</h5>
			</div>
			<div class="section-body">
				<table class="order-table">
					<thead>
						<tr>
							<th>Order</th>
							<th>Date</th>
							<th>Status</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label="Order"><a href="order-detail.php">#81</a></td>
							<td data-label="Date"><time>26/10/2017</time></td>
							<td data-label="Status">Completed</td>
							<td data-label="Total"><span><span class="currency-symbol">$</span>19.90</span> for 0 items</td>
							<td data-label="Action"><a href="order-detail.php" class="view-item">View</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>
