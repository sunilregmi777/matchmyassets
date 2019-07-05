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
		<div class="payment-method-wrapper">
			<div class="payments-methods">
				<h5>Credit Card (Stripe)</h5>
				<div class="credit-cards">
					<img src="./images/visa.svg">
					<img src="./images/mastercard.svg">
					<img src="./images/amex.svg">
				</div>
				<div class="payment_box">
					<p>Pay with your credit card via Stripe. TEST MODE ENABLED. In test mode, you can use the card number 4242424242424242 with any CVC and a valid expiration date or check the Testing Stripe documentation for more card numbers.</p>
					<div class="card-info">
						<form>
							<div class="form-row">
								<div class="field-head">
									<label for="card_number">Card number<abbr title="required">*</abbr></label>
								</div>
								<div class="field card">
									<input type="number" name="" id="card_number" placeholder="1234 1234 1234 1234">
									<i class="fa fa-credit-card" aria-hidden="true"></i>
								</div>
							</div>
							<div class="card-info-bottom">
								<div class="inner-wrapper">
									<div class="form-row half-width">
										<div class="field-head">
											<label for="expiry_date">Expiry Date<abbr title="required">*</abbr></label>
										</div>
										<div class="field card">
											<input type="month" name="" id="expiry_date" placeholder="MM/YY">
										</div>
									</div>
									<div class="form-row half-width">
										<div class="field-head">
											<label for="card_code">Card Code(CVC)<abbr title="required">*</abbr></label>
										</div>
										<div class="field card">
											<input type="number" name="" id="card_code" placeholder="CVC">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="payment-method-bottom">
					<button type="submit" class="button btn-payment-method"> Add paymnt method</button>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>