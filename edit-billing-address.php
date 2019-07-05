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
				<div class="order-detail">
					<div class="edit-address billing">
						<h2 class="detail-title address-title">Billing address</h2>
						<form>
							<div class="inner-wrapper">
								<div class="form-row half-width">
									<div class="field-head">
										<label for="billing_firstname">First name <abbr title="required">*</abbr></label>
									</div>
									<div class="field">
										<input type="text" name="" id="billing_firstname">
									</div>
								</div>
								<div class="form-row half-width">
									<div class="field-head">
										<label for="billing_firstname">Last name <abbr title="required">*</abbr></label>
									</div>
									<div class="field">
										<input type="text" name="" id="billing_lastname">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_company_name">Company name <abbr title="required">*</abbr></label>
								</div>
								<div class="field">
									<input type="text" name="" id="billing_company_name">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_country">Country <abbr title="required">*</abbr></label>
								</div>
								<div class="field">
									<input type="text" name="" id="billing_country">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_street_address">Street address<abbr title="required">*</abbr></label>
								</div>
								<div class="field">
									<input type="text" name="" id="billing_street_address">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_street_address"></label>
								</div>
								<div class="field">
									<input type="text" name="" placeholder="Apartment, suite, unit, etc. (optional)" id="billing_street_address2">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_zip">Postcode/ZIP <abbr title="required">*</abbr></label>
								</div>
								<div class="field">
									<input type="text" name="" id="billing_zip">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_town">Town/city <abbr title="required">*</abbr></label>
								</div>
								<div class="field">
									<input type="text" name="" id="billing_town">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label class="field-title">
										Canton (optional)
									</label>
								</div>
								<div class="field">
									<div id="canton" class="dropdown canton">
                                	<a href="#" id="dropdown-link7" class="dropdown-link link7">
                                    	Select network
                                	</a>
                                	<ul class="dropdown-list list7">
                                    	<li>fdgdfg</li>
                                    	<li>dfgdfgd</li>
                                    	<li>dfgdf</li>
                                    	<li>jkhkhjk</li>
                                    	<li>gf gh</li>
                                    	<li>yrty</li>
                                    	<li>sdf</li>
                                    	<li>Redhfghdit</li>
                                    	<li>hfghfgh</li>
                                    	<li>rteter</li>
                                    	<li>zfsf</li>
                                    	<li>fherty</li>
                                    	<li>ertret</li>
                                    	<li>Webetertsite</li>
                                    	<li>gdfg</li>
                                    </ul>
                                </div>
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_phone">Phone<abbr title="required">*</abbr></label>
								</div>
								<div class="field">
									<input type="text" name="" id="billing_phone">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="billing_email">Email address<abbr title="required">*</abbr></label>
								</div>
								<div class="field">
									<input type="email" name="" id="billing_email">
								</div>
							</div>
							<button type="submit" class="save-address">Save address</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>
