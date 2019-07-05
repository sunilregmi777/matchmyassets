<?php include('header.html'); ?>
<div class="search-result content-margin">
	<div class="container">
		<h5 class="section-top-header">Swiss Wealth Managers Platform</h5>
        <h2 class="section-main-header">Search Result</h2>
        <p>The following Swiss Wealth Manager(s) match your search parameters. Click on the preview card for further information.</p>
        <p><strong>IMPORTANT: Match My Assets</strong> promotes the services of suitably authorised and FINMA/or SRO regulated wealth managers without a banking license. It does not, and will not, offer or provide any advise or legal reviews on any activities provided by the wealth manager (e.g. cross-border rule). </p>
		<p>Please read our legal note for further information.</p>
		<div class="search-result-content">
			<div class="search-result-tabs">
				<div class="inner-wrapper">
					<div class="search-result-head search-filter">
						<a href="#" class="open-search-filter" id="open_search_filter">Search filter</a>
					</div>
					<div class="search-result-head search-result-count">
						<span>
							<span class="search-count">3</span>
							results
						</span>
					</div>
					<div class="search-result-head sort-search">
						<a href="#" id="dropdown-link10" class="sort-type link10">A-Z</a>
						<ul class="dropdown-list list10">
							<li><a href="#">A-Z</a></li>
							<li><a href="#">Latest</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="search-result-boxes">
				<div class="inner-wrapper">
					<div class="search-result-box">
						<a href="single-job-listing.php">
							<div class="platinum-content" style="background-image: url(./images/jlp.png); ">
	                        <a href="#" class="flash-icon">
	                            <span class="tooltip">
	                                <i class="fa fa-bolt" aria-hidden="true"></i>
	                                <span class="tooltip-text">Featured</span>
	                            </span>
	                        </a>
	                        <a href="#" class="platinum-footer-link">
	                            <img src="./images/team1.jpg" alt="platinum image small">
	                            <h2>Wealth Manager</h2>
	                        </a>
	                    	</div>
	                    </a>
					</div>
					<div class="search-result-box">
						<a href="single-job-listing.php">
							<div class="platinum-content" style="background-image: url(./images/jlp.png); ">
		                        <a href="#" class="flash-icon">
		                            <span class="tooltip">
		                                <i class="fa fa-bolt" aria-hidden="true"></i>
		                                <span class="tooltip-text">Featured</span>
		                            </span>
		                        </a>
		                        <a href="#" class="platinum-footer-link">
		                            <img src="./images/team1.jpg" alt="platinum image small">
		                            <h2>Wealth Manager</h2>
		                        </a>
		                    </div>
		                </a>
					</div>
					<div class="search-result-box">
						<a href="single-job-listing.php">
							<div class="platinum-content" style="background-image: url(./images/jlp.png); ">
		                        <a href="#" class="flash-icon">
		                            <span class="tooltip">
		                                <i class="fa fa-bolt" aria-hidden="true"></i>
		                                <span class="tooltip-text">Featured</span>
		                            </span>
		                        </a>
		                        <a href="#" class="platinum-footer-link">
		                            <img src="./images/team1.jpg" alt="platinum image small">
		                            <h2>Wealth Manager</h2>
		                        </a>
		                    </div>
		                </a>
					</div>
				</div>
			</div>
			<div class="goback">
				<button class="btn-goback" onclick="goBack()">Go back</button>
			</div>
		</div>
		<div class="search-filter-box-wrapper overlay">
			<div class="search-filter-box" id="search_filter_box">
				<div class="filter-tabs">
					<button class="tablinks tb1" onclick="openFilter(event,'Filter')" id="defaultOpen">Filters</button>
					<button class="tablinks tb2" onclick="openFilter(event,'Categories')">Categories</a></button>
				</div>
				<div id="Filter" class="tabcontent dropdown client-tax">
					<div class="tab-filter">
						<div class="available-tax-domiciles dropdown">
							<label>Available Client Tax Domiciles</label>
							<a href="#" id="dropdown-link8" class="dropdown-link link8">
		                    Choose Client Tax Domiciles
			                </a>
			                <ul class="dropdown-list list8">
			                    <li>Option 1</li>
			                    <li>Option 2</li>
			                    <li>Option 3</li>
			                    <li>Option 4</li>
			                    <li>Option 5</li>
			                </ul>
						</div>
						<div class="choose-location dropdown">
							<label>Wealth Manager Location</label>
			                <a href="#" id="dropdown-link9" class="dropdown-link link9">
			                Choose Wealth Manager Location
				            </a>
				            <ul class="dropdown-list list9">
				                <li>Central Switzerland (LU, UR, SZ, OW, NW, ZG)</li>
				                <li>Eastern Switzerland (GL, SH, AR, AI, SG, GR, TG)</li>
				                <li>Espace Mittelland (BE, FR, NE, SO, JU)</li>
				                <li>Northern Switzerland (BL, BS, AG)</li>
				                <li>Région Lémanique (VD, VS, GE)</li>
				                <li>Ticino (TI)</li>
				                <li>Zurich (ZH)</li>
				            </ul>
						</div>
					</div>
					<div class="filter-btns">
						<a href="#" class="button btn-search">Search</a>
						<a href="#" class="reset-filter">Reset Filters</a>
					</div>
	            </div>
		        <div id="Categories" class="dropdown tabcontent wealth-manager">
		            <div class="listing-cat overlay" onclick="location.href='#';" style="cursor: pointer;">
		            	<a href="#">
		            		<span>
		            			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
		            			<h4>Afghanistan</h4>
		            			<h6>1 listing</h6>
		            		</span>
		            	</a>
		            </div>
		            <div class="listing-cat overlay" onclick="location.href='#';" style="cursor: pointer;">
		            	<a href="#">
		            		<span>
		            			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
		            			<h4>Denmark</h4>
		            			<h6>1 listing</h6>
		            		</span>
		            	</a>
		            </div>
		        </div>
			</div>	
		</div>
	</div>
</div>
<?php include('footer.html'); ?>
