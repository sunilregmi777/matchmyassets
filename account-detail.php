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
				<i class="fa fa-user-circle" aria-hidden="true"></i>
				<h5>Account-detail</h5>
			</div>
			<div class="section-body">
				<div class="account-detail order-detail">
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
								<label for="display_name">Display name <abbr title="required">*</abbr></label>
							</div>
							<div class="field">
								<input type="text" name="" id="display_name">
								<span class="input-caption">
									<em>
										This will be how your name will be displayed in the account section and in reviews
									</em>
								</span>
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
						<div class="password-section">
							<h2 class="detail-title">Password change</h2>
							<div class="form-row">
								<div class="field-head">
									<label for="current_password">Current password (leave blank to leave unchanged)</label>
								</div>
								<div class="field">
									<input type="password" name="" id="current_password">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="new_password">New password (leave blank to leave unchanged)</label>
								</div>
								<div class="field">
									<input type="password" name="" id="new_password">
								</div>
							</div>
							<div class="form-row">
								<div class="field-head">
									<label for="confirm_password">Confirm new password</label>
								</div>
								<div class="field">
									<input type="password" name="" id="confirm_password">
								</div>
							</div>
						</div>
						<button type="submit" class="save-changes">Save changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>
