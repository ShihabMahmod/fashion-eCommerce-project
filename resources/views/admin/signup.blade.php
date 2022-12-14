@include('admin.base.header2')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
		<div class="card border-grey border-lighten-3 px-2 py-2 m-0">
			<div class="card-header no-border">
				<div class="card-title text-xs-center">
					<img src="../../app-assets/images/logo/robust-logo-dark.png" alt="branding logo">
				</div>
				<h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Account</span></h6>
			</div>
			<div class="card-body collapse in">	
				<div class="card-block">
					<form class="form-horizontal form-simple" action="/saveData" method="POST" novalidate>
						@csrf
						<fieldset class="form-group position-relative has-icon-left mb-1">
							<input type="text" class="form-control form-control-lg input-lg" id="user-name" name="name" placeholder="User Name">
							<div class="form-control-position">
							    <i class="icon-head"></i>
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left mb-1">
							<input type="email" class="form-control form-control-lg input-lg" id="user-email" name="email" placeholder="Your Email Address" required>
							<div class="form-control-position">
							    <i class="icon-mail6"></i>
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left">
							<input type="password" class="form-control form-control-lg input-lg" id="user-password" name="password" placeholder="Enter Password" required>
							<div class="form-control-position">
							    <i class="icon-key3"></i>
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Register</button>
					</form>
				</div>
				<p class="text-xs-center">Already have an account ? <a href="login-simple.html" class="card-link">Login</a></p>
			</div>
		</div>
	</div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

@include('admin.base.footer')
