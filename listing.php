<?php include('header.html'); ?>
<div class="my-account">
	<div class="container-fluid">
		<nav class="my-account-navigation"  id="accNav">
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
		<div class="my-account-count">
			<div class="inner-wrapper">
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>2</h2>
						<p>Published</p>
						<i class="fa fa-window-maximize" aria-hidden="true"></i>
					</div>
				</div>
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>0</h2>
						<p>Pending Approval</p>
						<i class="fa fa-info-circle" aria-hidden="true"></i>
					</div>
				</div>
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>5</h2>
						<p>Pending Payment</p>
						<i class="fa fa-info-circle" aria-hidden="true"></i>
					</div>
				</div>
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>0</h2>
						<p>Expired</p>
						<i class="fa fa-clock-o" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="listing-detail">
			<div class="inner-wrapper">
				<div class="job-manager-wrapper">
					<div class="job-manager">
						<div class="job-manager-top-text">
							<p>Start your journey</p>
						</div>
						<img src="./images/job-logo.jpg" alt="job logo">
						<a href="#" class="job-manager-title">Wealth manager</a>
						<div class="inner-wrapper">
							<div class="listing-action">
								<ul class="job-dashboard-action">
									<li><a href="#" class="action-promote">Promote</a></li>
									<li><a href="#" class="action-edit">Edit</a></li>
									<li><a href="#" class="action-stats">Stats</a></li>
									<li><a href="#" class="action-switch-plan">Switch Plan</a></li>
									<li><a href="#" class="action-delete">Delete</a></li>
								</ul>
							</div>
						</div>
						<div class="listing-info">
							<div class="info created">
								<label>Created:</label>
								<span>14/06/2019</span>
							</div>	
							<div class="info expires">
								<label>Expires:</label>
								<span>13/06/2020</span>
							</div>	
						</div>
					</div>
				</div>
				<div class="job-manager-wrapper">
					<div class="job-manager">
						<div class="job-manager-top-text">
							<p>Start your journey</p>
						</div>
						<img src="./images/job-logo.jpg" alt="job logo">
						<a href="#" class="job-manager-title">Wealth manager</a>
						<div class="listing-action">
							<div class="inner-wrapper">
								<ul class="job-dashboard-action">
									<li><a href="#" class="action-promote">Promott</a></li>
									<li><a href="#" class="action-edit">Edit</a></li>
									<li><a href="#" class="action-stats">Stats</a></li>
									<li><a href="#" class="action-switch-plan">Switch Plan</a></li>
									<li><a href="#" class="action-delete">Delete</a></li>
								</ul>
							</div>
						</div>
						<div class="listing-info">
							<div class="info created">
								<label>Created:</label>
								<span>14/06/2019</span>
							</div>	
							<div class="info expires">
								<label>Expires:</label>
								<span>13/06/2020</span>
							</div>	
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<?php include('footer.html'); ?>

