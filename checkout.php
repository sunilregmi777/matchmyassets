<?php include('header.html'); ?>
<section class="checkout-section">
	<div class="container">
		<div class="checkout">
			<div class="checkout-coupon">
				<p>Have a coupon?
					<a href="#" class="open-coupon-form" id="open-coupon-form">Click here to enter your code</a>
				</p>
			</div>
			<form class="form-coupon" id="form_coupon">
				<p>If you have a coupon code, please apply it below.</p>
				<div class="form-row">
					<div class="field-wrapper">
						<div class="inner-wrapper">
							<div class="field half-width">
								<input type="text" name="coupon_code" placeholder="Coupon code">
							</div>
							<div class="field half-width">
								<button type="submit" class="btn-apply-coupon">Apply coupon</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="checkout-content">
				<form>
					<div class="form-body">
						<div class="form-row">
							<div class="form-header">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
								<h5>checkout</h5>
							</div>
						</div>
						<div class="checkout-info-container">
							<div class="inner-wrapper">
								<div class="checkout-info billing-detail">
									<h3 class="info-title">Billing details</h3>
									<div class="form-row">
										<div class="field-head">
											<label for="billing_firstname">First name <abbr title="required">*</abbr></label>
										</div>
										<div class="field">
											<input type="text" name="" id="billing_firstname">
										</div>
									</div>
									<div class="form-row">
										<div class="field-head">
											<label for="billing_firstname">Last name <abbr title="required">*</abbr></label>
										</div>
										<div class="field">
											<input type="text" name="" id="billing_lastname">
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
									<div class="form-row">
										<div class="field-head">
											<h4>Additional Information</h4>
											<label for="billing_other">Order notes (optional)</label>
										</div>
										<div class="field">
											<textarea rows="2" cols="5" id="billing_other" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
										</div>
									</div>
								</div>	
								<div class="checkout-info your-order">
									<h3 class="info-title">Your orders</h3>
									<div class="order-list">
										<table>
											<thead>
												<tr>
													<th>Product</th>
													<th class="product-total">Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Silver<span>*1</span></td>
													<td>
														<span>
															<span class="currency-symbol">
																CHF
															</span>
															800.00
														</span>
													</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td>Subtotal</td>
													<td>
														<span>
															<span class="currency-symbol">
																CHF
															</span>
															800.00
														</span>
													</td>
												</tr>
												<tr>
													<td>Total</td>
													<td>
														<strong>
															<span>
															<span class="currency-symbol">
																CHF
															</span>
															800.00
														</span>
														</strong>
														<small>
															(includes
															<span class="currency-symbol">
																CHF
															</span>
															800.00
														</span>
														VAT)
														</small>
														
													</td>
												</tr>
											</tfoot>
										</table>
									</div>
									<div class="checkout-payments">
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
													<div class="form-row">
														<div class="field checkbox-in">
															<input type="checkbox" name="" id="remember_card_info">
														</div>
														<div class="field-head checkbox-rm">
															<label for="remember_card_info"> Save payment information to my account for future purchases.</label>
														</div>
														
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="place-order">
										<div class="terms-conditions">
											<p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.</p>
										<p>Do not sign up if you are not a Swiss Wealth Manager without a banking license. An administration fee will be deducted from any reimbursement.</p>
										</div>
										
										<div class="form-row">
											<div class="field checkbox-in">
												<input type="checkbox" name="" id="terms_conditions">
											</div>
											<div class="field-head checkbox-rm">
												<label for="terms_conditions"> I have read and agree to the website terms and conditions *</label>
											</div>
										</div>
										<a href="thankyou-page.php" class="button btn-place-order">Place order</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>
