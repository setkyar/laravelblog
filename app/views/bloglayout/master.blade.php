<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
		Universe | {{ $site_title }}
		@show
	</title>
	{{ HTML::style('css/bootstrap2.css') }}
	<style type="text/css">
		html, 
		body {
			100%;
		}
		.blog-nav {
			margin-top: 1%;
		}
		.message {
			color:red; 
			margin-top:80px;
			margin-bottom: 48%;
		}
		.footer a {
			text-decoration: none;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="navbar blog-nav">
	<div class="navbar-inner">
    <a href="{{ URL::to('/') }}" class="brand">uvu</a>
    	<ul class="nav">
      		<li><a href="{{URL::to('/')}}">Home</a></li>
      		<li><a href="{{ URL::to('about-me')}}">About Me</a></li>
      		<li><a href="{{ URL::to('contact-me') }}">Contact Me</a></li>
      		<li><a href="{{ URL::to('portfolio') }}">Portfolio</a></li>
		</ul>
    
    	<form class="navbar-form pull-right">
  			<input type="text" class="span2" placeholder="Searh Posts">
  			<button type="submit" class="btn">Submit</button>
		</form>		
  	</div>
@yield('content')

@yield('footer')
<p class="footer">Copyright <?php echo date("Y") ?> | Developed by <a href="{{ URL::to('/about-me') }}">Universe</a>.</p>
</div>

</body>
</html>