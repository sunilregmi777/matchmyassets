<?php include('header.html'); ?>
<section class="my-account-content thank-you">
	<div class="container">
		<div class="tab-item my-order">
			<div class="section-header">
				<i class="fa fa-shopping-basket" aria-hidden="true"></i>
				<h5>Checkout</h5>
			</div>
			<div class="section-body">
				<p>Thank you. Your order has been received.</p>
				<ul class="order-short-info">
					<li>Order number:<strong>4217</strong></li>
					<li>Date:<strong>27/06/2019</strong></li>
					<li>Total:
						<strong>
							<span>
								<span class="currency-symbol">CHF</span>
								800.00
							</span>
						</strong>
					</li>
					<li>Payment method:<strong>Credit Card (Stripe)</strong></li>
				</ul>
				<p>Test has been submitted successfully.</p>
				<a href="view-listing.php" class="button view-listing">View Listing</a>
				<div class="order-detail">
					<h2 class="detail-title">Order Details</h2>
					<table>
						<thead>
							<tr>
								<th>Product</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="view-product.php">Silver</a><strong>×1</strong></td>
								<td><span><span class="currency-symbol">CHF</span>800.00</span></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Subtotal:</th>
								<td><span><span class="currency-symbol">CHF</span>800.00</span></td>
							</tr>
							<tr>
								<th>Payment method:</th>
								<td>Credit Card (Stripe)</td>
							</tr>
							<tr>
								<th>Total:</th>
								<td><span><span class="currency-symbol">CHF</span>800.00(includes <span class="currency-symbol">CHF</span>57.20 VAT)</span></td>
							</tr>
						</tfoot>
					</table>
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
