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
		<div class="my-account-top">
			<div class="welcome-message">
				<h1>Hello, Patrick!</h1>
			</div>
			<div class="filter dropdown">
				<a href="#" class="dropdown-link filter-link">
                    Filter by listing
                </a>
                <ul class="dropdown-list filter-list">
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                </ul>
			</div>
		</div>
		<div class="my-account-count">
			<div class="inner-wrapper">
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>2</h2>
						<p>Published Listing</p>
						<i class="fa fa-window-maximize" aria-hidden="true"></i>
					</div>
				</div>
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>5</h2>
						<p>Pending Listing</p>
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</div>
				</div>
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>0</h2>
						<p>Active Promotions</p>
						<i class="fa fa-bolt" aria-hidden="true"></i>
					</div>
				</div>
				<div class="account-countbox-wrapper">
					<div class="my-account-count-box" style="background-color: #a64022;">
						<h2>15</h2>
						<p>Visits this week</p>
						<i class="fa fa-line-chart" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="visit-detail">
			<div class="visit-top">
				<i class="fa fa-line-chart" aria-hidden="true"></i>
				<h4>Visits</h4>
				<div class="visit-chart-action">
					<a href="#">Last 24hours</a>
					<a href="#">Last 7 days</a>
					<a href="#">Last 30 days</a>
				</div>
			</div>
			<div class="visit-botom">
				<ul>
					<li class="view">Views</li>
					<li class="unique-view">Unique views</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>

