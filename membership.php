<?php include('header.html'); ?>
<div class="membership">
	<div class="container">
		<div class="packages">
			<h1 class="section-title">Choose a Package</h2>
			<div class="inner-wrapper">
				<div class="package">
					<div class="package-container">
						<h3 class="package-title">silver</h3>
						<img src="./images/silver.png">
						<h2 class="price">
							<span>CHF</span>
							<span>800.00</span>
						</h2>
						<h4>Listing Duration 365 Days</h4>
						<ul class="plan-feature">
							<li>Company Description</li>
							<li>Picture and Logo Upload</li>
						</ul>
						<span class="cards">
							<i class="fa fa-cc-amex" aria-hidden="true"></i>
							<i class="fa fa-cc-visa" aria-hidden="true"></i>
							<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
						</span>
						<div class="plan-dropdown-wrapper">
							<a onclick="buyToggle()" class="dropdown-package">You already own this package</a>
							<div class="drop-down-package-wrapper" id="silver-plan-dropdown">
								<div class="checkbox-plan-list">
									<div class="checkbox">
										<input type="radio" name="listing-package" id="silver-checkbox" value="#">
										<label for="silver-checkbox"></label>
									</div>
									<div class="checkbox-content">
										<p><strong>Silver</strong></p>
										<p>7 listings posted out of 5000, listed for 365 days</p>
									</div>
								</div>
								<a href="#" class="button package buy-new">Or bye new</a>
							</div>
						</div>
						<a href="#" onclick="window.location.href = 'form-silver.php';" class="button package" type="submit">Use Available Package</a>
					</div>
				</div>
				<div class="package">
					<div class="package-container">
						<h3 class="package-title">Gold</h3>
						<img src="./images/gold.png">
						<h2 class="price">
							<span>CHF</span>
							<span>1,750.00</span>
						</h2>
						<h4>Listing Duration 365 Days</h4>
						<ul class="plan-feature">
							<li>Company Description</li>
							<li>Picture and Logo Upload</li>
						</ul>
						<ul class="plan-feature strong">
							<li><strong>Full Contact Details</strong></li>
							<li><strong>Social Media Links</strong></li>
							<li><strong>SRO/ASWM Membership Tag</strong></li>
						</ul>
						<span class="cards">
							<i class="fa fa-cc-amex" aria-hidden="true"></i>
							<i class="fa fa-cc-visa" aria-hidden="true"></i>
							<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
						</span>
						<div class="plan-dropdown-wrapper">
							<a onclick="buyToggle()" class="dropdown-package">You already own this package</a>
							<div class="drop-down-package-wrapper" id="silver-plan-dropdown">
								<div class="checkbox-plan-list">
									<div class="checkbox">
										<input type="radio" name="listing-package" id="silver-checkbox" value="#">
										<label for="silver-checkbox"></label>
									</div>
									<div class="checkbox-content">
										<p><strong>Silver</strong></p>
										<p>7 listings posted out of 5000, listed for 365 days</p>
									</div>
								</div>
								<a href="#" class="button package buy-new">Or bye new</a>
							</div>
						</div>
						<a href="#" onclick="window.location.href = 'form-gold.php';" class="button package" type="submit">Use Available Package</a>
					</div>
				</div>
				<div class="package">
					<div class="package-container">
						<div class="featured-plan-badge">
							<span class="icon-flash"></span>
						</div>
						<h3 class="package-title">Platinum</h3>
						<img src="./images/platinum.png">
						<h2 class="price">
							<span>CHF</span>
							<span>2,500.00</span>
						</h2>
						<h4>Listing Duration 365 Days</h4>
						<ul class="plan-feature">
							<li>Company Description</li>
							<li>Picture and Logo Upload</li>
						</ul>
						<ul class="plan-feature">
							<li>Full Contact Details</li>
							<li>Social Media Links</li>
							<li>SRO/ASWM Membership Tag</li>
						</ul>
						<ul class="plan-feature strong">
							<li><strong>Social Media Notification</strong></li>
							<li><strong>Logo featured on Public Section</strong></li>
							<li><strong>High Search Result Ranking</strong></li>
						</ul>
						<span class="cards">
							<i class="fa fa-cc-amex" aria-hidden="true"></i>
							<i class="fa fa-cc-visa" aria-hidden="true"></i>
							<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
						</span>
						<div class="plan-dropdown-wrapper">
							<a onclick="buyToggle()" class="dropdown-package">You already own this package</a>
							<div class="drop-down-package-wrapper" id="silver-plan-dropdown">
								<div class="checkbox-plan-list">
									<div class="checkbox">
										<input type="radio" name="listing-package" id="silver-checkbox" value="#">
										<label for="silver-checkbox"></label>
									</div>
									<div class="checkbox-content">
										<p><strong>Silver</strong></p>
										<p>7 listings posted out of 5000, listed for 365 days</p>
									</div>
								</div>
								<a href="#" class="button package buy-new">Or bye new</a>
							</div>
						</div>
						<a href="#" onclick="window.location.href = 'form-platinum.php';" class="button package" type="submit">Use Available Package</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.html'); ?>

