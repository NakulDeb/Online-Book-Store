<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin<>Login</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

	<link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head><!--/head-->

<body class="bg-dark">
	
	
	<section id="form"><!--form-->
		<div class="container ">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4 border border-info m-10 p-5 pb-5 bg-secondary ">
					<div class="login-form margin" ><!--login form-->
                    {{csrf_field()}}
                    <h2 class="text-light text-success">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                    ?>
                   </h2>
						<h2 class="text-dark">Login to your account</h2>
						<form action="{{url('/admin-login')}}",method="post">
                            <input name="admin_email" type="email" placeholder="Email"required />  
							<input name="admin_password" type="password" placeholder="Password"  required/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2019 nakul deb nath. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://github.com/NakulDeb">NAKUL DEB NATH</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer--->

    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('my_styles/js/main.js')}}">
    </body>
</html>