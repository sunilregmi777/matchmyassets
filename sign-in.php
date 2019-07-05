<?php include('header.html'); ?>
<section class="signin-section">
	<div class="container">
		<div class="sign-in-wrapper">
			<form>
				<h2>Sign in</h2>
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<button type="submit" class="signin-btn" value="submit">Sign in</button>
				<div class="form-footer">
					<div class="signin-checkbox">
					    <label> Remember me
					    	<input type="checkbox">
					    	<span class="checkmark"></span>
					    </label>
					</div>
					<div class="forget-password">
						<a href="#">Forget Password?</a>
					</div>
					<span class="dont-have-account"><a href="register.php">Don't have an account?</a></span>
				</div>
			</form>
		</div>
	</div>
</section>	
<?php include('footer.html'); ?>
