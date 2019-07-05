<?php include('header.html'); ?>
<section class="form-buy silver">
	<div class="container">
		<div class="silver-form-wrapper">
			<h2 class="form-header">Your listing details</h2>
			<form>
				<div class="form-body">
					<div class="form-row">
						<div class="form-header">
							<i class="fa fa-pencil" aria-hidden="true"></i>
							<h5>General</h5>
						</div>
					</div>
					<div class="form-row">
						<div class="field-wrapper">
							<div class="field-head">
								<label class="field-title">
									Full Company Name
								</label>
								<small>e.g. Wealth Management SA</small>
							</div>
							<div class="field">
								<input type="text" name="company-name">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="field-wrapper">
							<div class="field-head">
								<label class="field-title">
									Company Short Profile/Description
								</label>
							</div>
							<div class="field">
								<textarea cols="20" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="field-wrapper">
							<div class="field-head">
								<label class="field-title">
									Select Office Region(s)
								</label>
							</div>
							<div class="field field-padding">
								<ul>
									<li>
										<div class="field-checkbox">
											<input type="checkbox" id="fcb1" name="dsd" value="sdsd" >
											<label for="fcb1"> Central Switzerland (LU, UR, SZ, OW, NW, ZG)</label>
										</div>
									</li>
									<li>
										<div class="field-checkbox">
											<input type="checkbox" id="fcb2" name="dsd" value="sdsd">
											<label for="fcb2"> Eastern Switzerland (GL, SH, AR, AI, SG, GR, TG)</label>
										</div>
									</li>
									<li>
										<div class="field-checkbox">
											<input type="checkbox" id="fcb3" name="dsd" value="sdsd">
											<label for="fcb3">Espace Mittelland (BE, FR, NE, SO, JU)</label>
										</div>
									</li>
									<li>
										<div class="field-checkbox">
											<input type="checkbox" id="fcb4" name="dsd" value="sdsd">
											<label for="fcb4">Northern Switzerland (BL, BS, AG)</label>
										</div>
									</li>
									<li>
										<div class="field-checkbox">
											<input type="checkbox" id="fcb5" name="dsd" value="sdsd">
											<label for="fcb5">Région Lémanique (VD, VS, GE)</label>
										</div>
									</li>
									<li>
										<div class="field-checkbox">
											<input type="checkbox" id="fcb6" name="dsd" value="sdsd">
											<label for="fcb6">Ticino (TI)</label>
										</div>
									</li>
									<li>
										<div class="field-checkbox">
											<input type="checkbox" id="fcb7" name="dsd" value="sdsd">
											<label for="fcb7">Zurich (ZH)</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="field-wrapper">
							<div class="field-head">
								<label class="field-title">
									Upload Company Logo
								</label>
								<small>1:1 aspect ratio (optimal 160x160) - shown in preview mode</small>
							</div>
							<div class="field field-padding">
								<div class="upload-logo">
									<i class="fa fa-upload" aria-hidden="true"></i>
								</div>
								<span class="file-size">Maximum file size: 300 MB.</span>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="field-wrapper">
							<div class="field-head">
								<label class="field-title">
									Upload Company Cover Image
								</label>
								<small>16:9 aspect ratio (optimal 1920 x 1125) - shown in preview mode</small>
							</div>
							<div class="field field-padding">
								<div class="upload-logo">
									<i class="fa fa-upload" aria-hidden="true"></i>
								</div>
								<span class="file-size">Maximum file size: 300 MB.</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-footer">
					<button type="submit">Preview</button>
					<a href="#">Skip preview and submit</a>
				</div>
			</form>
		</div>
	</div>
</section>
<?php include('footer.html'); ?>
