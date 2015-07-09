<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Joel Brubaker's Portfolio</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		{{-- Main Theme --}}
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>
		<nav class="navbar material-navbar">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <a href="#" type="button" class="menu-hamburger">
		    	<span class="glyphicon glyphicon-menu-hamburger"></span>
		    </a>
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="container home-container">
			<div class="row">
				<div class="col-md-4">
					<section class="material-card profile-card">
						<div class="profile-image img-circle"></div>
						<div class="bar profile-bar">
							<div class="title profile-title">
								<h2>Joel Brubaker</h2>
								<p>Web Developer & Digital Strategist</p>
							</div>
						</div>
					</section>
					<section class="material-card skills-card">
						<div class="bar skills-bar">
							<div class="title skills-title">
								<span class="medium">Skills and Experience</span>
								<a href="" class="icon toggle-skills"></a>
							</div>
						</div>
						<ul class="skills-list list-group">
							<li class="skill-item list-group-item">
								<span class="icon backend-icon"></span>
								<h4>Backend</h4>
								<p>Linux / Nginx / MySQL / Laravel 5</p>
							</li>
							<li class="skill-item list-group-item">
								<span class="icon frontend-icon"></span>
								<h4>Frontend</h4>
								<p>HTML5 / Bootstrap / Javascript</p>
							</li>
							<li class="skill-item list-group-item">
								<span class="icon design-icon"></span>
								<h4>Design</h4>
								<p>Photoshop / Material Design</p>
							</li>
							<li class="skill-item list-group-item">
								<span class="icon strategy-icon"></span>
								<h4>Strategy</h4>
								<p>Social / Paid Digital / Email</p>
							</li>
						</ul>
					</section>
				</div>
				<div class="col-md-8">
					<section class="card projects-card">
						<div class="bar projects-bar">
							<div class="title project-title">
								<span class="medium">Projects</span>
								<a href="" class="toggle toggle-projects"></a>
							</div>
						</div>
						<div class="projects-container">
							<div class="img-project-header" alt="Responsive image"></div>
							<div class="row">
								<ul class="projects-list list-group">
									<div class="col-md-6 col-sm-12 project-item-container">
										<li class="project-item list-group-item">
											<img src="images/work-1.jpg" class="project-item-image">
											<div class="bar project-item-bar">
												<div class="title project-item-title">
													<span class="medium">Bootstrap / Laravel 4.2 / Design</span>
													<span class="icon bar-glyphicon"></span>
												</div>
											</div>
										</li>
									</div>
									<div class="col-md-6 col-sm-12 project-item-container">
										<li class="project-item list-group-item">
											<img src="images/work-2.jpg" class="project-item-image">
											<div class="bar project-item-bar">
												<div class="title project-item-title">
													<span class="medium">Bootstrap / Laravel 4.2 / Design</span>
													<span class="icon bar-glyphicon"></span>
												</div>
											</div>
										</li>
									</div>
									<div class="col-md-6 col-sm-12 project-item-container">
										<li class="project-item list-group-item">
											<img src="images/work-3.jpg" class="project-item-image">
											<div class="bar project-item-bar">
												<div class="title project-item-title">
													<span class="medium">Bootstrap / Laravel 4.2 / Design</span>
													<span class="icon bar-glyphicon"></span>
												</div>
											</div>
										</li>
									</div>
									<div class="col-md-6 col-sm-12 project-item-container">
										<li class="project-item list-group-item">
											<img src="images/work-4.jpg" class="project-item-image">
											<div class="bar project-item-bar">
												<div class="title project-item-title">
													<span class="medium">Bootstrap / Laravel 4.2 / Design</span>
													<span class="icon bar-glyphicon"></span>
												</div>
											</div>
										</li>
									</div>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		@yield('content')
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!-- User Interface Scripts -->
	<script src="/js/ui.js" type="text/javascript" charset="utf-8" async defer></script>

</html>