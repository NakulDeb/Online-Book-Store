
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin<>Edit Category</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{URL::to('/')}}"><span>Home</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{Session::get('admin_name')}}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="{{URL::to('/admin-logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('/admin-deshboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="{{URL::to('/all-category')}}"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> All Category</span></a></li>
						<li><a href="{{URL::to('add-category')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Category</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('all-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Products</span></a></li>
								<li><a class="submenu" href="{{URL::to('add-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Products</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Announcement</span><span class="label label-important">NEW</span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('all-announcement')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Announcement</span></a></li>
								<li><a class="submenu" href="{{URL::to('add-announcement')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Announcement</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->







			
			
<div id="content" class="span10">
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-content">
					
						<h2 class="text-light text-success">
							<?php
								$message = Session::get('message');
								if($message){
									echo $message;
									Session::put('message',null);
								}
							?>
						</h2>
						<form class="form-horizontal" action="{{url('/update-category/'.$data->category_id)}}" method="get">
						{{csrf_field()}}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Category Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="category_name" value="{{$data->category_name}}" >
							  </div>
							</div>
       
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="category_description" value="{{$data->category_description}}" rows="3">
							  </div>
							</div>

							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Publication Status</label>
							  <div class="controls">
								<input type="number" class="span6 typeahead" id="typeahead" name="publication_status"  data-provide="typeahead" data-items="4" value="{{$data->publication_status}}">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->






		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2020 <a href="https://github.com/NakulDeb" alt="Bootstrap Themes">nakul deb nath</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="https://github.com/NakulDeb" alt="Bootstrap Admin Templates">NAKUL DEB NATH</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

	<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('backend/js/modernizr.js')}}"></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backend/js/excanvas.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
	<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
	<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
	<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
	<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('backend/js/counter.js')}}"></script>
	<script src="{{asset('backend/js/retina.js')}}"></script>
	<script src="{{asset('backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
