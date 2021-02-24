<html>
    <head>
      <title> BlogRender| CMS| ADMIN - @yield('title')</title>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      
      
    </head>
    <body>
        @section('sidebar')
        <nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				BlogRender
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="" id="">			
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li><a href="/admin/logout">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
    <div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="/admin/dashboard">Dashboard</a></li>
				<li><a href="/admin/add-blog">Add Blogs</a></li>
			</ul>
		</div>

	
        @show
		<div class="col-md-10 content">
            @yield('content')
        </div>
    </body>
    <footer>
	<script>
        async function httpCallGet(url, method = "GET", data = {}) {
              if (data) {
            data = Object.keys(data)
                .map(key => `${encodeURIComponent(key)}=${encodeURIComponent(data[key])}`)
                .join('&');
            url += `?${data}`;
        }
        const response2 = await fetch(url, {
           method: method, 
            headers: {
                'Content-Type': 'application/json',
                
            },
           //body: JSON.stringify(data) 
        });
        return response2.json(); 
    }
    </script>
    </footer>
</html>