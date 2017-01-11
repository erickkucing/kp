@extends('Frontend')
@section('title')
Register
@stop
@section('content')
<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>new user? <span> create an account </span></h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="" method="post">
                            <input type="hidden" name="jenis" value="register">
				<div>
					<label>
						<input placeholder="Nama" type="text" tabindex="1" required autofocus name="nama">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Alamat" type="text" tabindex="1" required autofocus name="alamat">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Email" type="email" tabindex="3" required name="email">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Nomor HP" type="text" tabindex="4" required name="hp">
					</label>
				</div>	
				<div>
					<label>
						<input placeholder="Password 6 Karakter" type="password" tabindex="5" required name="password">
					</label>
				</div>						
				<div>
					<input type="submit" value="Buat Akun" id="register-submit">
				</div>
			</form>
			<!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2>existing user</h2>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="" method="post">
                            <input type="hidden" name="jenis" value="login">
				<div>
					<label>
						<input placeholder="Email" name="email" type="email" tabindex="8" required>
					</label>
				</div>
				<div>
					<label>
                                            <input placeholder="Password" name="password" type="password" tabindex="9" required>
					</label>
				</div>						
				<div>
					<input type="submit" >
				</div>
			</form>
			<!-- /Form -->
			</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
@stop