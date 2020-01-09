
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin<>All Category</title>
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







			
		
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>


			<h2 class="text-light text-success">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                    ?>
            </h2>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Category Id</th>
								  <th>Category Name</th>
								  <th>Description</th>
								  <th>Publication Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($data as $result)  
						  <tbody>
							<tr>
								<td>{{$result->category_id}}</td>
								<td class="center">{{$result->category_name}}</td>
								<td class="center">{{$result->category_description}}</td>
								@if($result->publication_status==1)
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								@else
								<td class="center">
									<span class="label label-denger">Unactive</span>
								</td>
								@endif
								<td class="center">
								@if($result->publication_status==1)
									<a class="btn btn-denger" title="Set De-Active" href="{{URL::to('/set-unactive/'.$result->category_id)}}">
										<i class="halflings-icon white zoom-down"></i>  
									</a>
								@else
									<a class="btn btn-success" title="Set Active" href="{{URL::to('/set-active/'.$result->category_id)}}">
										<i class="halflings-icon white zoom-up"></i>  
									</a>
								@endif
									<a class="btn btn-info"  title="Edit" href="{{URL::to('/edit-category/'.$result->category_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" title="Delete" href="{{URL::to('/delete-category/'.$result->category_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>            
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

	<!-- bootbox   alert start-->
	<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>  
	<script>
		$(document).on("click", "#delete", function(e) {
			e.preventDefault();
			var link = $(this).attr("href");
			bootbox.confirm("Are you sure you want to delete?", function(result) {
				if(result){
					window.location.href = link;
				};
			}); 
		});
	</script>
	<!-- bootbox   alert end-->
	<!-- end: JavaScript-->
	
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>































