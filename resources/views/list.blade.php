<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets/images/brand/favicon.ico')}}" />

		<!-- TITLE -->
		<title>Zanex – Bootstrap  Admin & Dashboard Template</title>

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('template/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/dark-style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- SIDE-MENU CSS -->
		<link href="{{asset('template/assets/css/sidemenu.css')}}" rel="stylesheet" id="sidemenu-theme">

		<!--C3 CHARTS CSS -->
		<link href="{{asset('template/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- DATA TABLE CSS -->
		<link href="{{asset('template/assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
		<link href="{{asset('template/assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
		<link href="{{asset('template/assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

		<!-- INTERNAL SELECT2 CSS -->
		<link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{asset('template/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('template/assets/colors/color1.css')}}" />

	</head>

	<body class="app sidebar-mini">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('template/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1" href="index.html">
							<img src="{{asset('template/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
						</a><!-- LOGO -->
					</div>
					<ul class="side-menu">
						<li><h3>Main</h3></li>
						<li class="slide">
							<a class="side-menu__item"  data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li><h3>Widgets & Maps</h3></li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Widgets</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="maps1.html" class="slide-item">Leaflet Maps</a></li>
								<li><a href="maps2.html" class="slide-item">Mapel Maps</a></li>
								<li><a href="maps.html" class="slide-item">Vector Maps</a></li>
							</ul>
						</li>
						<li><h3>Elements</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Components</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="cards.html" class="slide-item"> Cards design</a></li>
								<li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
								<li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
								<li><a href="chat.html" class="slide-item"> Default Chat</a></li>
								<li><a href="notify.html" class="slide-item"> Notifications</a></li>
								<li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
								<li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
								<li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
								<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
								<li><a href="counters.html" class="slide-item"> Counters</a></li>
								<li><a href="rating.html" class="slide-item"> Rating</a></li>
								<li><a href="timeline.html" class="slide-item"> Timeline</a></li>
								<li><a href="treeview.html" class="slide-item"> Treeview</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="alerts.html" class="slide-item"> Alerts</a></li>
								<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
								<li><a href="colors.html" class="slide-item"> Colors</a></li>
								<li><a href="avatarsquare.html" class="slide-item"> Avatar-Square</a></li>
								<li><a href="avatar-round.html" class="slide-item"> Avatar-Rounded</a></li>
								<li><a href="avatar-radius.html" class="slide-item"> Avatar-Radius</a></li>
								<li><a href="dropdown.html" class="slide-item"> Drop downs</a></li>
								<li><a href="list.html" class="slide-item"> List</a></li>
								<li><a href="tags.html" class="slide-item"> Tags</a></li>
								<li><a href="pagination.html" class="slide-item"> Pagination</a></li>
								<li><a href="navigation.html" class="slide-item"> Navigation</a></li>
								<li><a href="typography.html" class="slide-item"> Typography</a></li>
								<li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
								<li><a href="badge.html" class="slide-item"> Badges</a></li>
								<li><a href="panels.html" class="slide-item"> Panels</a></li>
								<li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Advanced Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
								<li><a href="accordion.html" class="slide-item"> Accordions</a></li>
								<li><a href="tabs.html" class="slide-item"> Tabs</a></li>
								<li><a href="chart.html" class="slide-item"> Charts</a></li>
								<li><a href="modal.html" class="slide-item"> Modal</a></li>
								<li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
								<li><a href="progress.html" class="slide-item"> Progress</a></li>
								<li><a href="carousel.html" class="slide-item"> Carousels</a></li>
								<li><a href="headers.html" class="slide-item"> Headers</a></li>
								<li><a href="footers.html" class="slide-item"> Footers</a></li>
								<li><a href="users-list.html" class="slide-item"> User List</a></li>
								<li><a href="search.html" class="slide-item">Search</a></li>
								<li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
							</ul>
						</li>
						<li><h3>Charts & Tables</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
								<li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
								<li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
								<li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
								<li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
								<li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
								<li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
								<li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
								<li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-clipboard"></i><span class="side-menu__label">Tables</span><span class="badge bg-secondary side-badge">2</span></a>
							<ul class="slide-menu">
								<li><a href="tables.html" class="slide-item">Default table</a></li>
								<li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
							</ul>
						</li>
						<li><h3>Forms & Icons</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Forms</span><span class="badge bg-success side-badge">5</span></a>
							<ul class="slide-menu">
								<li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
								<li><a href="form-advanced.html" class="slide-item"> Form Advanced</a></li>
								<li><a href="wysiwyag.html" class="slide-item"> Form Editor</a></li>
								<li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
								<li><a href="form-validation.html" class="slide-item"> Form Validation</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
								<li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
								<li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
								<li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
								<li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
								<li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
								<li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
								<li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
								<li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
								<li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
							</ul>
						</li>
						<li><h3>Pages</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="profile.html" class="slide-item"> Profile</a></li>
								<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
								<li><a href="email.html" class="slide-item"> Mail-Inbox</a></li>
								<li><a href="emailservices.html" class="slide-item"> Mail-Compose</a></li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="about.html" class="slide-item"> About Company</a></li>
								<li><a href="services.html" class="slide-item"> Services</a></li>
								<li><a href="faq.html" class="slide-item"> FAQS</a></li>
								<li><a href="terms.html" class="slide-item"> Terms</a></li>
								<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
								<li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
								<li><a href="blog.html" class="slide-item"> Blog</a></li>
								<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
								<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
							</ul>
						</li>
						<li><h3>E-Commerce</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="shop.html" class="slide-item"> Shop</a></li>
								<li><a href="shop-description.html" class="slide-item">Product Details</a></li>
								<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
								<li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
								<li><a href="checkout.html" class="slide-item"> Checkout</a></li>
							</ul>
						</li>
						<li><h3>Custom & Error Pages</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="login.html" class="slide-item"> Login</a></li>
								<li><a href="register.html" class="slide-item"> Register</a></li>
								<li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
								<li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-info"></i><span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="400.html" class="slide-item"> 400</a></li>
								<li><a href="401.html" class="slide-item"> 401</a></li>
								<li><a href="403.html" class="slide-item"> 403</a></li>
								<li><a href="404.html" class="slide-item"> 404</a></li>
								<li><a href="500.html" class="slide-item"> 500</a></li>
								<li><a href="503.html" class="slide-item"> 503</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#">
							<i class="side-menu__icon fe fe-sliders"></i>
							<span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="#" class="slide-item">Level-1</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="#">Level-2.1</a></li>
										<li><a class="sub-slide-item" href="#">Level-2.2</a></li>
										<li class="sub-slide2">
											<a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Level-2.3</span><i class="sub-angle2 fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu2">
												<li><a href="#" class="sub-slide-item2">Level-2.3.1</a></li>
												<li><a href="#" class="sub-slide-item2">Level-2.3.2</a></li>
												<li><a href="#" class="sub-slide-item2">Level-2.3.3</a></li>
											</ul>
										</li>
										<li><a class="sub-slide-item" href="#">Level-2.4</a></li>
										<li><a class="sub-slide-item" href="#">Level-2.5</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--/APP-SIDEBAR-->

				<!-- Mobile Header -->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<a class="header-brand1 d-flex d-md-none" href="index.html">
								<img src="{{asset('template/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
							</a><!-- LOGO -->
							<div class="main-header-center ms-3 d-none d-md-block">
								<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<div class="d-flex order-lg-2 ms-auto header-right-icons">
								<div class="dropdown d-lg-none d-md-block d-none">
									<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
										<i class="fe fe-search"></i>
									</a>
									<div class="dropdown-menu header-search dropdown-menu-start">
										<div class="input-group w-100 p-2">
											<input type="text" class="form-control" placeholder="Search....">
											<div class="input-group-text btn btn-primary">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div><!-- SEARCH -->
								<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
								</button>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon theme-layout nav-link-bg layout-setting">
										<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
										<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
									</a>
								</div><!-- Theme-Layout -->
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->
								<div class="dropdown d-none d-md-flex notifications">
									<a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
										<div class="drop-heading border-bottom">
											<div class="d-flex">
												<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
												<div class="ms-auto">
													<span class="badge bg-success rounded-pill">3</span>
												</div>
											</div>
										</div>
										<div class="notifications-menu">
											<a class="dropdown-item d-flex" href="chat.html">
												<div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
													<i class="fe fe-message-square"></i>
												</div>
												<div class="mt-1">
													<h5 class="notification-label mb-1">New review received</h5>
													<span class="notification-subtext">2 hours ago</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
													<i class="fe fe-mail"></i>
												</div>
												<div class="mt-1">
													<h5 class="notification-label mb-1">New Mails Received</h5>
													<span class="notification-subtext">1 week ago</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="cart.html">
												<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
													<i class="fe fe-shopping-cart"></i>
												</div>
												<div class="mt-1">
													<h5 class="notification-label mb-1">New Order Received</h5>
													<span class="notification-subtext">1 day ago</span>
												</div>
											</a>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
									</div>
								</div><!-- NOTIFICATIONS -->
								<div class="dropdown  d-none d-md-flex message">
									<a class="nav-link icon text-center" data-bs-toggle="dropdown">
										<i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="drop-heading border-bottom">
											<div class="d-flex">
												<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
												<div class="ms-auto">
													<span class="badge bg-danger rounded-pill">4</span>
												</div>
											</div>
										</div>
										<div class="message-menu">
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/1.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Madeleine</h5>
														<small class="text-muted ms-auto text-end">
															3 hours ago
														</small>
													</div>
													<span>Hey! there I' am available....</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/12.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Anthony</h5>
														<small class="text-muted ms-auto text-end">
															5 hour ago
														</small>
													</div>
													<span>New product Launching...</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/4.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Olivia</h5>
														<small class="text-muted ms-auto text-end">
															45 mintues ago
														</small>
													</div>
													<span>New Schedule Realease......</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/15.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Sanderson</h5>
														<small class="text-muted ms-auto text-end">
															2 days ago
														</small>
													</div>
													<span>New Schedule Realease......</span>
												</div>
											</a>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
									</div>
								</div><!-- MESSAGE-BOX -->
								<div class="dropdown d-none d-md-flex profile-1">
									<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
										<span>
											<img src="{{asset('template/assets/images/users/8.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
												<small class="text-muted">Administrator</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="profile.html">
											<i class="dropdown-icon fe fe-user"></i> Profile
										</a>
										<a class="dropdown-item" href="email.html">
											<i class="dropdown-icon fe fe-mail"></i> Inbox
											<span class="badge bg-primary float-end">3</span>
										</a>
										<a class="dropdown-item" href="emailservices.html">
											<i class="dropdown-icon fe fe-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="faq.html">
											<i class="dropdown-icon fe fe-alert-triangle"></i> Need help??
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon fe fe-alert-circle"></i> Sign out
										</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex header-settings">
									<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-menu"></i>
									</a>
								</div><!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ms-auto">
							<div class="dropdown d-sm-flex">
								<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-start">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control" placeholder="Search....">
										<div class="input-group-text btn btn-primary">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon theme-layout nav-link-bg layout-setting">
									<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
									<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
								</a>
							</div><!-- Theme-Layout -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-minimize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->
							<div class="dropdown  d-md-flex notifications">
								<a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="drop-heading border-bottom">
										<div class="d-flex">
											<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
											<div class="ms-auto">
												<span class="badge bg-success rounded-pill">3</span>
											</div>
										</div>
									</div>
									<div class="notifications-menu">
										<a class="dropdown-item d-flex" href="chat.html">
											<div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
												<i class="fe fe-message-square"></i>
											</div>
											<div class="mt-1">
												<h5 class="notification-label mb-1">New review received</h5>
												<span class="notification-subtext">2 hours ago</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
												<i class="fe fe-mail"></i>
											</div>
											<div class="mt-1">
												<h5 class="notification-label mb-1">New Mails Received</h5>
												<span class="notification-subtext">1 week ago</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="cart.html">
											<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
												<i class="fe fe-shopping-cart"></i>
											</div>
											<div class="mt-1">
												<h5 class="notification-label mb-1">New Order Received</h5>
												<span class="notification-subtext">1 day ago</span>
											</div>
										</a>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
								</div>
							</div><!-- NOTIFICATIONS -->
							<div class="dropdown d-md-flex message">
								<a class="nav-link icon text-center" data-bs-toggle="dropdown">
									<i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="drop-heading border-bottom">
										<div class="d-flex">
											<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
											<div class="ms-auto">
												<span class="badge bg-danger rounded-pill">4</span>
											</div>
										</div>
									</div>
									<div class="message-menu">
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/1.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Madeleine</h5>
													<small class="text-muted ms-auto text-end">
														3 hours ago
													</small>
												</div>
												<span>Hey! there I' am available....</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/12.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Anthony</h5>
													<small class="text-muted ms-auto text-end">
														5 hour ago
													</small>
												</div>
												<span>New product Launching...</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/4.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Olivia</h5>
													<small class="text-muted ms-auto text-end">
														45 mintues ago
													</small>
												</div>
												<span>New Schedule Realease......</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/15.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Sanderson</h5>
													<small class="text-muted ms-auto text-end">
														2 days ago
													</small>
												</div>
												<span>New Schedule Realease......</span>
											</div>
										</a>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
								</div>
							</div><!-- MESSAGE-BOX -->
							<div class="dropdown d-md-flex profile-1">
								<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
									<span>
										<img src="{{asset('template/assets/images/users/8.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="drop-heading">
										<div class="text-center">
											<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
											<small class="text-muted">Administrator</small>
										</div>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a class="dropdown-item" href="#">
<i class="dropdown-icon fe fe-user"></i> Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-mail"></i> Inbox
										<span class="badge bg-primary float-end">3</span>
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-settings"></i> Settings
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
									</a>
									<a class="dropdown-item" href="login.html">
										<i class="dropdown-icon fe fe-alert-circle"></i> Sign out
									</a>
								</div>
							</div>
							<div class="dropdown d-md-flex header-settings">
								<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="fe fe-menu"></i>
								</a>
							</div><!-- SIDE-MENU -->
						</div>
					</div>
				</div>
				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="app-content">
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Data Table</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Table</li>
								</ol>
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="#" class="btn btn-primary btn-icon text-white me-2">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Account
								</a>
								<a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Datatable</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
												<thead>
													<tr>
														<th class="wd-15p border-bottom-0">First name</th>
														<th class="wd-15p border-bottom-0">Last name</th>
														<th class="wd-20p border-bottom-0">Position</th>
														<th class="wd-15p border-bottom-0">Start date</th>
														<th class="wd-10p border-bottom-0">Salary</th>
														<th class="wd-25p border-bottom-0">E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>$654,765</td>
														<td>b.Chloe@datatables.net</td>
													</tr>
													<tr>
														<td>Donna</td>
														<td>Bond</td>
														<td>Account Manager</td>
														<td>2012/02/21</td>
														<td>$543,654</td>
														<td>d.bond@datatables.net</td>
													</tr>
													<tr>
														<td>Harry</td>
														<td>Carr</td>
														<td>Technical Manager</td>
														<td>20011/02/87</td>
														<td>$86,000</td>
														<td>h.carr@datatables.net</td>
													</tr>
													<tr>
														<td>Lucas</td>
														<td>Dyer</td>
														<td>Javascript Developer</td>
														<td>2014/08/23</td>
														<td>$456,123</td>
														<td>l.dyer@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Hill</td>
														<td>Sales Manager</td>
														<td>2010/7/14</td>
														<td>$432,230</td>
														<td>k.hill@datatables.net</td>
													</tr>
													<tr>
														<td>Dominic</td>
														<td>Hudson</td>
														<td>Sales Assistant</td>
														<td>2015/10/16</td>
														<td>$654,300</td>
														<td>d.hudson@datatables.net</td>
													</tr>
													<tr>
														<td>Herrod</td>
														<td>Chandler</td>
														<td>Integration Specialist</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
														<td>h.chandler@datatables.net</td>
													</tr>
													<tr>
														<td>Jonathan</td>
														<td>Ince</td>
														<td>junior Manager</td>
														<td>2012/11/23</td>
														<td>$345,789</td>
														<td>j.ince@datatables.net</td>
													</tr>
													<tr>
														<td>Leonard</td>
														<td>Ellison</td>
														<td>Junior Javascript Developer</td>
														<td>2010/03/19</td>
														<td>$205,500</td>
														<td>l.ellison@datatables.net</td>
													</tr>
													<tr>
														<td>Madeleine</td>
														<td>Lee</td>
														<td>Software Developer</td>
														<td>20015/8/23</td>
														<td>$456,890</td>
														<td>m.lee@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Miller</td>
														<td>Office Director</td>
														<td>2012/9/25</td>
														<td>$87,654</td>
														<td>k.miller@datatables.net</td>
													</tr>
													<tr>
														<td>Lisa</td>
														<td>Smith</td>
														<td>Support Lead</td>
														<td>2011/05/21</td>
														<td>$342,000</td>
														<td>l.simth@datatables.net</td>
													</tr>
													<tr>
														<td>Morgan</td>
														<td>Keith</td>
														<td>Accountant</td>
														<td>2012/11/27</td>
														<td>$675,245</td>
														<td>m.keith@datatables.net</td>
													</tr>
													<tr>
														<td>Nathan</td>
														<td>Mills</td>
														<td>Senior Marketing Designer</td>
														<td>2014/10/8</td>
														<td>$765,980</td>
														<td>n.mills@datatables.net</td>
													</tr>
													<tr>
														<td>Ruth</td>
														<td>May</td>
														<td>office Manager</td>
														<td>2010/03/17</td>
														<td>$654,765</td>
														<td>r.may@datatables.net</td>
													</tr>
													<tr>
														<td>Penelope</td>
														<td>Ogden</td>
														<td>Marketing Manager</td>
														<td>2013/5/22</td>
														<td>$345,510</td>
														<td>p.ogden@datatables.net</td>
													</tr>
													<tr>
														<td>Sean</td>
														<td>Piper</td>
														<td>Financial Officer</td>
														<td>2014/06/11</td>
														<td>$725,000</td>
														<td>s.piper@datatables.net</td>
													</tr>
													<tr>
														<td>Trevor</td>
														<td>Ross</td>
														<td>Systems Administrator</td>
														<td>2011/05/23</td>
														<td>$237,500</td>
														<td>t.ross@datatables.net</td>
													</tr>
													<tr>
														<td>Vanessa</td>
														<td>Robertson</td>
														<td>Software Designer</td>
														<td>2014/6/23</td>
														<td>$765,654</td>
														<td>v.robertson@datatables.net</td>
													</tr>
													<tr>
														<td>Una</td>
														<td>Richard</td>
														<td>Personnel Manager</td>
														<td>2014/5/22</td>
														<td>$765,290</td>
														<td>u.richard@datatables.net</td>
													</tr>
													<tr>
														<td>Justin</td>
														<td>Peters</td>
														<td>Development lead</td>
														<td>2013/10/23</td>
														<td>$765,654</td>
														<td>j.peters@datatables.net</td>
													</tr>
													<tr>
														<td>Adrian</td>
														<td>Terry</td>
														<td>Marketing Officer</td>
														<td>2013/04/21</td>
														<td>$543,769</td>
														<td>a.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Cameron</td>
														<td>Watson</td>
														<td>Sales Support</td>
														<td>2013/9/7</td>
														<td>$675,876</td>
														<td>c.watson@datatables.net</td>
													</tr>
													<tr>
														<td>Evan</td>
														<td>Terry</td>
														<td>Sales Manager</td>
														<td>2013/10/26</td>
														<td>$66,340</td>
														<td>d.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Angelica</td>
														<td>Ramos</td>
														<td>Chief Executive Officer</td>
														<td>20017/10/15</td>
														<td>$6,234,000</td>
														<td>a.ramos@datatables.net</td>
													</tr>
													<tr>
														<td>Connor</td>
														<td>Johne</td>
														<td>Web Developer</td>
														<td>2011/1/25</td>
														<td>$92,575</td>
														<td>C.johne@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Chang</td>
														<td>Regional Director</td>
														<td>2012/17/11</td>
														<td>$546,890</td>
														<td>j.chang@datatables.net</td>
													</tr>
													<tr>
														<td>Brenden</td>
														<td>Wagner</td>
														<td>Software Engineer</td>
														<td>2013/07/14</td>
														<td>$206,850</td>
														<td>b.wagner@datatables.net</td>
													</tr>
													<tr>
														<td>Fiona</td>
														<td>Green</td>
														<td>Chief Operating Officer</td>
														<td>2015/06/23</td>
														<td>$345,789</td>
														<td>f.green@datatables.net</td>
													</tr>
													<tr>
														<td>Shou</td>
														<td>Itou</td>
														<td>Regional Marketing</td>
														<td>2013/07/19</td>
														<td>$335,300</td>
														<td>s.itou@datatables.net</td>
													</tr>
													<tr>
														<td>Michelle</td>
														<td>House</td>
														<td>Integration Specialist</td>
														<td>2016/07/18</td>
														<td>$76,890</td>
														<td>m.house@datatables.net</td>
													</tr>
													<tr>
														<td>Suki</td>
														<td>Burks</td>
														<td>Developer</td>
														<td>2010/11/45</td>
														<td>$678,890</td>
														<td>s.burks@datatables.net</td>
													</tr>
													<tr>
														<td>Prescott</td>
														<td>Bartlett</td>
														<td>Technical Author</td>
														<td>2014/12/25</td>
														<td>$789,100</td>
														<td>p.bartlett@datatables.net</td>
													</tr>
													<tr>
														<td>Gavin</td>
														<td>Cortez</td>
														<td>Team Leader</td>
														<td>2015/1/19</td>
														<td>$345,890</td>
														<td>g.cortez@datatables.net</td>
													</tr>
													<tr>
														<td>Martena</td>
														<td>Mccray</td>
														<td>Post-Sales support</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
														<td>m.mccray@datatables.net</td>
													</tr>
													<tr>
														<td>Unity</td>
														<td>Butler</td>
														<td>Marketing Designer</td>
														<td>2014/7/28</td>
														<td>$34,983</td>
														<td>u.butler@datatables.net</td>
													</tr>
													<tr>
														<td>Howard</td>
														<td>Hatfield</td>
														<td>Office Manager</td>
														<td>2013/8/19</td>
														<td>$98,000</td>
														<td>h.hatfield@datatables.net</td>
													</tr>
													<tr>
														<td>Hope</td>
														<td>Fuentes</td>
														<td>Secretary</td>
														<td>2015/07/28</td>
														<td>$78,879</td>
														<td>h.fuentes@datatables.net</td>
													</tr>
													<tr>
														<td>Vivian</td>
														<td>Harrell</td>
														<td>Financial Controller</td>
														<td>2010/02/14</td>
														<td>$452,500</td>
														<td>v.harrell@datatables.net</td>
													</tr>
													<tr>
														<td>Timothy</td>
														<td>Mooney</td>
														<td>Office Manager</td>
														<td>20016/12/11</td>
														<td>$136,200</td>
														<td>t.mooney@datatables.net</td>
													</tr>
													<tr>
														<td>Jackson</td>
														<td>Bradshaw</td>
														<td>Director</td>
														<td>2011/09/26</td>
														<td>$645,750</td>
														<td>j.bradshaw@datatables.net</td>
													</tr>
													<tr>
														<td>Olivia</td>
														<td>Liang</td>
														<td>Support Engineer</td>
														<td>2014/02/03</td>
														<td>$234,500</td>
														<td>o.liang@datatables.net</td>
													</tr>
													<tr>
														<td>Bruno</td>
														<td>Nash</td>
														<td>Software Engineer</td>
														<td>2015/05/03</td>
														<td>$163,500</td>
														<td>b.nash@datatables.net</td>
													</tr>
													<tr>
														<td>Sakura</td>
														<td>Yamamoto</td>
														<td>Support Engineer</td>
														<td>2010/08/19</td>
														<td>$139,575</td>
														<td>s.yamamoto@datatables.net</td>
													</tr>
													<tr>
														<td>Thor</td>
														<td>Walton</td>
														<td>Developer</td>
														<td>2012/08/11</td>
														<td>$98,540</td>
														<td>t.walton@datatables.net</td>
													</tr>
													<tr>
														<td>Finn</td>
														<td>Camacho</td>
														<td>Support Engineer</td>
														<td>2016/07/07</td>
														<td>$87,500</td>
														<td>f.camacho@datatables.net</td>
													</tr>
													<tr>
														<td>Serge</td>
														<td>Baldwin</td>
														<td>Data Coordinator</td>
														<td>2017/04/09</td>
														<td>$138,575</td>
														<td>s.baldwin@datatables.net</td>
													</tr>
													<tr>
														<td>Zenaida</td>
														<td>Frank</td>
														<td>Software Engineer</td>
														<td>2018/01/04</td>
														<td>$125,250</td>
														<td>z.frank@datatables.net</td>
													</tr>
													<tr>
														<td>Zorita</td>
														<td>Serrano</td>
														<td>Software Engineer</td>
														<td>2017/06/01</td>
														<td>$115,000</td>
														<td>z.serrano@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>2017/02/01</td>
														<td>$75,650</td>
														<td>j.acosta@datatables.net</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Responsive DataTable</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
												<thead>
													<tr>
														<th class="wd-15p border-bottom-0">First name</th>
														<th class="wd-15p border-bottom-0">Last name</th>
														<th class="wd-20p border-bottom-0">Position</th>
														<th class="wd-15p border-bottom-0">Start date</th>
														<th class="wd-10p border-bottom-0">Salary</th>
														<th class="wd-25p border-bottom-0">E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>$654,765</td>
														<td>b.Chloe@datatables.net</td>
													</tr>
													<tr>
														<td>Donna</td>
														<td>Bond</td>
														<td>Account Manager</td>
														<td>2012/02/21</td>
														<td>$543,654</td>
														<td>d.bond@datatables.net</td>
													</tr>
													<tr>
														<td>Harry</td>
														<td>Carr</td>
														<td>Technical Manager</td>
														<td>20011/02/87</td>
														<td>$86,000</td>
														<td>h.carr@datatables.net</td>
													</tr>
													<tr>
														<td>Lucas</td>
														<td>Dyer</td>
														<td>Javascript Developer</td>
														<td>2014/08/23</td>
														<td>$456,123</td>
														<td>l.dyer@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Hill</td>
														<td>Sales Manager</td>
														<td>2010/7/14</td>
														<td>$432,230</td>
														<td>k.hill@datatables.net</td>
													</tr>
													<tr>
														<td>Dominic</td>
														<td>Hudson</td>
														<td>Sales Assistant</td>
														<td>2015/10/16</td>
														<td>$654,300</td>
														<td>d.hudson@datatables.net</td>
													</tr>
													<tr>
														<td>Herrod</td>
														<td>Chandler</td>
														<td>Integration Specialist</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
														<td>h.chandler@datatables.net</td>
													</tr>
													<tr>
														<td>Jonathan</td>
														<td>Ince</td>
														<td>junior Manager</td>
														<td>2012/11/23</td>
														<td>$345,789</td>
														<td>j.ince@datatables.net</td>
													</tr>
													<tr>
														<td>Leonard</td>
														<td>Ellison</td>
														<td>Junior Javascript Developer</td>
														<td>2010/03/19</td>
														<td>$205,500</td>
														<td>l.ellison@datatables.net</td>
													</tr>
													<tr>
														<td>Madeleine</td>
														<td>Lee</td>
														<td>Software Developer</td>
														<td>20015/8/23</td>
														<td>$456,890</td>
														<td>m.lee@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Miller</td>
														<td>Office Director</td>
														<td>2012/9/25</td>
														<td>$87,654</td>
														<td>k.miller@datatables.net</td>
													</tr>
													<tr>
														<td>Lisa</td>
														<td>Smith</td>
														<td>Support Lead</td>
														<td>2011/05/21</td>
														<td>$342,000</td>
														<td>l.simth@datatables.net</td>
													</tr>
													<tr>
														<td>Morgan</td>
														<td>Keith</td>
														<td>Accountant</td>
														<td>2012/11/27</td>
														<td>$675,245</td>
														<td>m.keith@datatables.net</td>
													</tr>
													<tr>
														<td>Nathan</td>
														<td>Mills</td>
														<td>Senior Marketing Designer</td>
														<td>2014/10/8</td>
														<td>$765,980</td>
														<td>n.mills@datatables.net</td>
													</tr>
													<tr>
														<td>Ruth</td>
														<td>May</td>
														<td>office Manager</td>
														<td>2010/03/17</td>
														<td>$654,765</td>
														<td>r.may@datatables.net</td>
													</tr>
													<tr>
														<td>Penelope</td>
														<td>Ogden</td>
														<td>Marketing Manager</td>
														<td>2013/5/22</td>
														<td>$345,510</td>
														<td>p.ogden@datatables.net</td>
													</tr>
													<tr>
														<td>Sean</td>
														<td>Piper</td>
														<td>Financial Officer</td>
														<td>2014/06/11</td>
														<td>$725,000</td>
														<td>s.piper@datatables.net</td>
													</tr>
													<tr>
														<td>Trevor</td>
														<td>Ross</td>
														<td>Systems Administrator</td>
														<td>2011/05/23</td>
														<td>$237,500</td>
														<td>t.ross@datatables.net</td>
													</tr>
													<tr>
														<td>Vanessa</td>
														<td>Robertson</td>
														<td>Software Designer</td>
														<td>2014/6/23</td>
														<td>$765,654</td>
														<td>v.robertson@datatables.net</td>
													</tr>
													<tr>
														<td>Una</td>
														<td>Richard</td>
														<td>Personnel Manager</td>
														<td>2014/5/22</td>
														<td>$765,290</td>
														<td>u.richard@datatables.net</td>
													</tr>
													<tr>
														<td>Justin</td>
														<td>Peters</td>
														<td>Development lead</td>
														<td>2013/10/23</td>
														<td>$765,654</td>
														<td>j.peters@datatables.net</td>
													</tr>
													<tr>
														<td>Adrian</td>
														<td>Terry</td>
														<td>Marketing Officer</td>
														<td>2013/04/21</td>
														<td>$543,769</td>
														<td>a.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Cameron</td>
														<td>Watson</td>
														<td>Sales Support</td>
														<td>2013/9/7</td>
														<td>$675,876</td>
														<td>c.watson@datatables.net</td>
													</tr>
													<tr>
														<td>Evan</td>
														<td>Terry</td>
														<td>Sales Manager</td>
														<td>2013/10/26</td>
														<td>$66,340</td>
														<td>d.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Angelica</td>
														<td>Ramos</td>
														<td>Chief Executive Officer</td>
														<td>20017/10/15</td>
														<td>$6,234,000</td>
														<td>a.ramos@datatables.net</td>
													</tr>
													<tr>
														<td>Connor</td>
														<td>Johne</td>
														<td>Web Developer</td>
														<td>2011/1/25</td>
														<td>$92,575</td>
														<td>C.johne@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Chang</td>
														<td>Regional Director</td>
														<td>2012/17/11</td>
														<td>$546,890</td>
														<td>j.chang@datatables.net</td>
													</tr>
													<tr>
														<td>Brenden</td>
														<td>Wagner</td>
														<td>Software Engineer</td>
														<td>2013/07/14</td>
														<td>$206,850</td>
														<td>b.wagner@datatables.net</td>
													</tr>
													<tr>
														<td>Fiona</td>
														<td>Green</td>
														<td>Chief Operating Officer</td>
														<td>2015/06/23</td>
														<td>$345,789</td>
														<td>f.green@datatables.net</td>
													</tr>
													<tr>
														<td>Shou</td>
														<td>Itou</td>
														<td>Regional Marketing</td>
														<td>2013/07/19</td>
														<td>$335,300</td>
														<td>s.itou@datatables.net</td>
													</tr>
													<tr>
														<td>Michelle</td>
														<td>House</td>
														<td>Integration Specialist</td>
														<td>2016/07/18</td>
														<td>$76,890</td>
														<td>m.house@datatables.net</td>
													</tr>
													<tr>
														<td>Suki</td>
														<td>Burks</td>
														<td>Developer</td>
														<td>2010/11/45</td>
														<td>$678,890</td>
														<td>s.burks@datatables.net</td>
													</tr>
													<tr>
														<td>Prescott</td>
														<td>Bartlett</td>
														<td>Technical Author</td>
														<td>2014/12/25</td>
														<td>$789,100</td>
														<td>p.bartlett@datatables.net</td>
													</tr>
													<tr>
														<td>Gavin</td>
														<td>Cortez</td>
														<td>Team Leader</td>
														<td>2015/1/19</td>
														<td>$345,890</td>
														<td>g.cortez@datatables.net</td>
													</tr>
													<tr>
														<td>Martena</td>
														<td>Mccray</td>
														<td>Post-Sales support</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
														<td>m.mccray@datatables.net</td>
													</tr>
													<tr>
														<td>Unity</td>
														<td>Butler</td>
														<td>Marketing Designer</td>
														<td>2014/7/28</td>
														<td>$34,983</td>
														<td>u.butler@datatables.net</td>
													</tr>
													<tr>
														<td>Howard</td>
														<td>Hatfield</td>
														<td>Office Manager</td>
														<td>2013/8/19</td>
														<td>$98,000</td>
														<td>h.hatfield@datatables.net</td>
													</tr>
													<tr>
														<td>Hope</td>
														<td>Fuentes</td>
														<td>Secretary</td>
														<td>2015/07/28</td>
														<td>$78,879</td>
														<td>h.fuentes@datatables.net</td>
													</tr>
													<tr>
														<td>Vivian</td>
														<td>Harrell</td>
														<td>Financial Controller</td>
														<td>2010/02/14</td>
														<td>$452,500</td>
														<td>v.harrell@datatables.net</td>
													</tr>
													<tr>
														<td>Timothy</td>
														<td>Mooney</td>
														<td>Office Manager</td>
														<td>20016/12/11</td>
														<td>$136,200</td>
														<td>t.mooney@datatables.net</td>
													</tr>
													<tr>
														<td>Jackson</td>
														<td>Bradshaw</td>
														<td>Director</td>
														<td>2011/09/26</td>
														<td>$645,750</td>
														<td>j.bradshaw@datatables.net</td>
													</tr>
													<tr>
														<td>Olivia</td>
														<td>Liang</td>
														<td>Support Engineer</td>
														<td>2014/02/03</td>
														<td>$234,500</td>
														<td>o.liang@datatables.net</td>
													</tr>
													<tr>
														<td>Bruno</td>
														<td>Nash</td>
														<td>Software Engineer</td>
														<td>2015/05/03</td>
														<td>$163,500</td>
														<td>b.nash@datatables.net</td>
													</tr>
													<tr>
														<td>Sakura</td>
														<td>Yamamoto</td>
														<td>Support Engineer</td>
														<td>2010/08/19</td>
														<td>$139,575</td>
														<td>s.yamamoto@datatables.net</td>
													</tr>
													<tr>
														<td>Thor</td>
														<td>Walton</td>
														<td>Developer</td>
														<td>2012/08/11</td>
														<td>$98,540</td>
														<td>t.walton@datatables.net</td>
													</tr>
													<tr>
														<td>Finn</td>
														<td>Camacho</td>
														<td>Support Engineer</td>
														<td>2016/07/07</td>
														<td>$87,500</td>
														<td>f.camacho@datatables.net</td>
													</tr>
													<tr>
														<td>Serge</td>
														<td>Baldwin</td>
														<td>Data Coordinator</td>
														<td>2017/04/09</td>
														<td>$138,575</td>
														<td>s.baldwin@datatables.net</td>
													</tr>
													<tr>
														<td>Zenaida</td>
														<td>Frank</td>
														<td>Software Engineer</td>
														<td>2018/01/04</td>
														<td>$125,250</td>
														<td>z.frank@datatables.net</td>
													</tr>
													<tr>
														<td>Zorita</td>
														<td>Serrano</td>
														<td>Software Engineer</td>
														<td>2017/06/01</td>
														<td>$115,000</td>
														<td>z.serrano@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>2017/02/01</td>
														<td>$75,650</td>
														<td>j.acosta@datatables.net</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">File Export</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive export-table">
											<table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
												<thead>
													<tr>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Position</th>
														<th class="border-bottom-0">Office</th>
														<th class="border-bottom-0">Age</th>
														<th class="border-bottom-0">Start date</th>
														<th class="border-bottom-0">Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td>$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td>$372,000</td>
													</tr>
													<tr>
														<td>Herrod Chandler</td>
														<td>Sales Assistant</td>
														<td>San Francisco</td>
														<td>59</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
													</tr>
													<tr>
														<td>Rhona Davidson</td>
														<td>Integration Specialist</td>
														<td>Tokyo</td>
														<td>55</td>
														<td>2010/10/14</td>
														<td>$327,900</td>
													</tr>
													<tr>
														<td>Colleen Hurst</td>
														<td>Javascript Developer</td>
														<td>San Francisco</td>
														<td>39</td>
														<td>2009/09/15</td>
														<td>$205,500</td>
													</tr>
													<tr>
														<td>Sonya Frost</td>
														<td>Software Engineer</td>
														<td>Edinburgh</td>
														<td>23</td>
														<td>2008/12/13</td>
														<td>$103,600</td>
													</tr>
													<tr>
														<td>Jena Gaines</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>30</td>
														<td>2008/12/19</td>
														<td>$90,560</td>
													</tr>
													<tr>
														<td>Quinn Flynn</td>
														<td>Support Lead</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2013/03/03</td>
														<td>$342,000</td>
													</tr>
													<tr>
														<td>Charde Marshall</td>
														<td>Regional Director</td>
														<td>San Francisco</td>
														<td>36</td>
														<td>2008/10/16</td>
														<td>$470,600</td>
													</tr>
													<tr>
														<td>Haley Kennedy</td>
														<td>Senior Marketing Designer</td>
														<td>London</td>
														<td>43</td>
														<td>2012/12/18</td>
														<td>$313,500</td>
													</tr>
													<tr>
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
													</tr>
													<tr>
														<td>Michael Silva</td>
														<td>Marketing Designer</td>
														<td>London</td>
														<td>66</td>
														<td>2012/11/27</td>
														<td>$198,500</td>
													</tr>
													<tr>
														<td>Paul Byrd</td>
														<td>Chief Financial Officer (CFO)</td>
														<td>New York</td>
														<td>64</td>
														<td>2010/06/09</td>
														<td>$725,000</td>
													</tr>
													<tr>
														<td>Gloria Little</td>
														<td>Systems Administrator</td>
														<td>New York</td>
														<td>59</td>
														<td>2009/04/10</td>
														<td>$237,500</td>
													</tr>
													<tr>
														<td>Bradley Greer</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>41</td>
														<td>2012/10/13</td>
														<td>$132,000</td>
													</tr>
													<tr>
														<td>Dai Rios</td>
														<td>Personnel Lead</td>
														<td>Edinburgh</td>
														<td>35</td>
														<td>2012/09/26</td>
														<td>$217,500</td>
													</tr>
													<tr>
														<td>Jenette Caldwell</td>
														<td>Development Lead</td>
														<td>New York</td>
														<td>30</td>
														<td>2011/09/03</td>
														<td>$345,000</td>
													</tr>
													<tr>
														<td>Yuri Berry</td>
														<td>Chief Marketing Officer (CMO)</td>
														<td>New York</td>
														<td>40</td>
														<td>2009/06/25</td>
														<td>$675,000</td>
													</tr>
													<tr>
														<td>Caesar Vance</td>
														<td>Pre-Sales Support</td>
														<td>New York</td>
														<td>21</td>
														<td>2011/12/12</td>
														<td>$106,450</td>
													</tr>
													<tr>
														<td>Doris Wilder</td>
														<td>Sales Assistant</td>
														<td>Sidney</td>
														<td>23</td>
														<td>2010/09/20</td>
														<td>$85,600</td>
													</tr>
													<tr>
														<td>Angelica Ramos</td>
														<td>Chief Executive Officer (CEO)</td>
														<td>London</td>
														<td>47</td>
														<td>2009/10/09</td>
														<td>$1,200,000</td>
													</tr>
													<tr>
														<td>Gavin Joyce</td>
														<td>Developer</td>
														<td>Edinburgh</td>
														<td>42</td>
														<td>2010/12/22</td>
														<td>$92,575</td>
													</tr>
													<tr>
														<td>Jennifer Chang</td>
														<td>Regional Director</td>
														<td>Singapore</td>
														<td>28</td>
														<td>2010/11/14</td>
														<td>$357,650</td>
													</tr>
													<tr>
														<td>Brenden Wagner</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>28</td>
														<td>2011/06/07</td>
														<td>$206,850</td>
													</tr>
													<tr>
														<td>Fiona Green</td>
														<td>Chief Operating Officer (COO)</td>
														<td>San Francisco</td>
														<td>48</td>
														<td>2010/03/11</td>
														<td>$850,000</td>
													</tr>
													<tr>
														<td>Shou Itou</td>
														<td>Regional Marketing</td>
														<td>Tokyo</td>
														<td>20</td>
														<td>2011/08/14</td>
														<td>$163,000</td>
													</tr>
													<tr>
														<td>Michelle House</td>
														<td>Integration Specialist</td>
														<td>Sidney</td>
														<td>37</td>
														<td>2011/06/02</td>
														<td>$95,400</td>
													</tr>
													<tr>
														<td>Suki Burks</td>
														<td>Developer</td>
														<td>London</td>
														<td>53</td>
														<td>2009/10/22</td>
														<td>$114,500</td>
													</tr>
													<tr>
														<td>Prescott Bartlett</td>
														<td>Technical Author</td>
														<td>London</td>
														<td>27</td>
														<td>2011/05/07</td>
														<td>$145,000</td>
													</tr>
													<tr>
														<td>Gavin Cortez</td>
														<td>Team Leader</td>
														<td>San Francisco</td>
														<td>22</td>
														<td>2008/10/26</td>
														<td>$235,500</td>
													</tr>
													<tr>
														<td>Martena Mccray</td>
														<td>Post-Sales support</td>
														<td>Edinburgh</td>
														<td>46</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
													</tr>
													<tr>
														<td>Unity Butler</td>
														<td>Marketing Designer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/12/09</td>
														<td>$85,675</td>
													</tr>
													<tr>
														<td>Howard Hatfield</td>
														<td>Office Manager</td>
														<td>San Francisco</td>
														<td>51</td>
														<td>2008/12/16</td>
														<td>$164,500</td>
													</tr>
													<tr>
														<td>Hope Fuentes</td>
														<td>Secretary</td>
														<td>San Francisco</td>
														<td>41</td>
														<td>2010/02/12</td>
														<td>$109,850</td>
													</tr>
													<tr>
														<td>Vivian Harrell</td>
														<td>Financial Controller</td>
														<td>San Francisco</td>
														<td>62</td>
														<td>2009/02/14</td>
														<td>$452,500</td>
													</tr>
													<tr>
														<td>Timothy Mooney</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>37</td>
														<td>2008/12/11</td>
														<td>$136,200</td>
													</tr>
													<tr>
														<td>Jackson Bradshaw</td>
														<td>Director</td>
														<td>New York</td>
														<td>65</td>
														<td>2008/09/26</td>
														<td>$645,750</td>
													</tr>
													<tr>
														<td>Olivia Liang</td>
														<td>Support Engineer</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2011/02/03</td>
														<td>$234,500</td>
													</tr>
													<tr>
														<td>Bruno Nash</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>38</td>
														<td>2011/05/03</td>
														<td>$163,500</td>
													</tr>
													<tr>
														<td>Sakura Yamamoto</td>
														<td>Support Engineer</td>
														<td>Tokyo</td>
														<td>37</td>
														<td>2009/08/19</td>
														<td>$139,575</td>
													</tr>
													<tr>
														<td>Thor Walton</td>
														<td>Developer</td>
														<td>New York</td>
														<td>61</td>
														<td>2013/08/11</td>
														<td>$98,540</td>
													</tr>
													<tr>
														<td>Finn Camacho</td>
														<td>Support Engineer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/07/07</td>
														<td>$87,500</td>
													</tr>
													<tr>
														<td>Serge Baldwin</td>
														<td>Data Coordinator</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2012/04/09</td>
														<td>$138,575</td>
													</tr>
													<tr>
														<td>Zenaida Frank</td>
														<td>Software Engineer</td>
														<td>New York</td>
														<td>63</td>
														<td>2010/01/04</td>
														<td>$125,250</td>
													</tr>
													<tr>
														<td>Zorita Serrano</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>56</td>
														<td>2012/06/01</td>
														<td>$115,000</td>
													</tr>
													<tr>
														<td>Jennifer Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>43</td>
														<td>2013/02/01</td>
														<td>$75,650</td>
													</tr>
													<tr>
														<td>Cara Stevens</td>
														<td>Sales Assistant</td>
														<td>New York</td>
														<td>46</td>
														<td>2011/12/06</td>
														<td>$145,600</td>
													</tr>
													<tr>
														<td>Hermione Butler</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>47</td>
														<td>2011/03/21</td>
														<td>$356,250</td>
													</tr>
													<tr>
														<td>Lael Greer</td>
														<td>Systems Administrator</td>
														<td>London</td>
														<td>21</td>
														<td>2009/02/27</td>
														<td>$103,500</td>
													</tr>
													<tr>
														<td>Jonas Alexander</td>
														<td>Developer</td>
														<td>San Francisco</td>
														<td>30</td>
														<td>2010/07/14</td>
														<td>$86,500</td>
													</tr>
													<tr>
														<td>Shad Decker</td>
														<td>Regional Director</td>
														<td>Edinburgh</td>
														<td>51</td>
														<td>2008/11/13</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Michael Bruce</td>
														<td>Javascript Developer</td>
														<td>Singapore</td>
														<td>29</td>
														<td>2011/06/27</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Donna Snider</td>
														<td>Customer Support</td>
														<td>New York</td>
														<td>27</td>
														<td>2011/01/25</td>
														<td>$112,000</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Deleted Row DataTable</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive deleted-table">
											<button id="button" class="btn btn-primary mb-4 data-table-btn">Delete selected row</button>
											<table id="delete-datatable" class="table table-bordered text-nowrap border-bottom">
												<thead>
													<tr>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Position</th>
														<th class="border-bottom-0">Office</th>
														<th class="border-bottom-0">Age</th>
														<th class="border-bottom-0">Start date</th>
														<th class="border-bottom-0">Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td>$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td>$372,000</td>
													</tr>
													<tr>
														<td>Herrod Chandler</td>
														<td>Sales Assistant</td>
														<td>San Francisco</td>
														<td>59</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
													</tr>
													<tr>
														<td>Rhona Davidson</td>
														<td>Integration Specialist</td>
														<td>Tokyo</td>
														<td>55</td>
														<td>2010/10/14</td>
														<td>$327,900</td>
													</tr>
													<tr>
														<td>Colleen Hurst</td>
														<td>Javascript Developer</td>
														<td>San Francisco</td>
														<td>39</td>
														<td>2009/09/15</td>
														<td>$205,500</td>
													</tr>
													<tr>
														<td>Sonya Frost</td>
														<td>Software Engineer</td>
														<td>Edinburgh</td>
														<td>23</td>
														<td>2008/12/13</td>
														<td>$103,600</td>
													</tr>
													<tr>
														<td>Jena Gaines</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>30</td>
														<td>2008/12/19</td>
														<td>$90,560</td>
													</tr>
													<tr>
														<td>Quinn Flynn</td>
														<td>Support Lead</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2013/03/03</td>
														<td>$342,000</td>
													</tr>
													<tr>
														<td>Charde Marshall</td>
														<td>Regional Director</td>
														<td>San Francisco</td>
														<td>36</td>
														<td>2008/10/16</td>
														<td>$470,600</td>
													</tr>
													<tr>
														<td>Haley Kennedy</td>
														<td>Senior Marketing Designer</td>
														<td>London</td>
														<td>43</td>
														<td>2012/12/18</td>
														<td>$313,500</td>
													</tr>
													<tr>
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
													</tr>
													<tr>
														<td>Michael Silva</td>
														<td>Marketing Designer</td>
														<td>London</td>
														<td>66</td>
														<td>2012/11/27</td>
														<td>$198,500</td>
													</tr>
													<tr>
														<td>Paul Byrd</td>
														<td>Chief Financial Officer (CFO)</td>
														<td>New York</td>
														<td>64</td>
														<td>2010/06/09</td>
														<td>$725,000</td>
													</tr>
													<tr>
														<td>Gloria Little</td>
														<td>Systems Administrator</td>
														<td>New York</td>
														<td>59</td>
														<td>2009/04/10</td>
														<td>$237,500</td>
													</tr>
													<tr>
														<td>Bradley Greer</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>41</td>
														<td>2012/10/13</td>
														<td>$132,000</td>
													</tr>
													<tr>
														<td>Dai Rios</td>
														<td>Personnel Lead</td>
														<td>Edinburgh</td>
														<td>35</td>
														<td>2012/09/26</td>
														<td>$217,500</td>
													</tr>
													<tr>
														<td>Jenette Caldwell</td>
														<td>Development Lead</td>
														<td>New York</td>
														<td>30</td>
														<td>2011/09/03</td>
														<td>$345,000</td>
													</tr>
													<tr>
														<td>Yuri Berry</td>
														<td>Chief Marketing Officer (CMO)</td>
														<td>New York</td>
														<td>40</td>
														<td>2009/06/25</td>
														<td>$675,000</td>
													</tr>
													<tr>
														<td>Caesar Vance</td>
														<td>Pre-Sales Support</td>
														<td>New York</td>
														<td>21</td>
														<td>2011/12/12</td>
														<td>$106,450</td>
													</tr>
													<tr>
														<td>Doris Wilder</td>
														<td>Sales Assistant</td>
														<td>Sidney</td>
														<td>23</td>
														<td>2010/09/20</td>
														<td>$85,600</td>
													</tr>
													<tr>
														<td>Angelica Ramos</td>
														<td>Chief Executive Officer (CEO)</td>
														<td>London</td>
														<td>47</td>
														<td>2009/10/09</td>
														<td>$1,200,000</td>
													</tr>
													<tr>
														<td>Gavin Joyce</td>
														<td>Developer</td>
														<td>Edinburgh</td>
														<td>42</td>
														<td>2010/12/22</td>
														<td>$92,575</td>
													</tr>
													<tr>
														<td>Jennifer Chang</td>
														<td>Regional Director</td>
														<td>Singapore</td>
														<td>28</td>
														<td>2010/11/14</td>
														<td>$357,650</td>
													</tr>
													<tr>
														<td>Brenden Wagner</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>28</td>
														<td>2011/06/07</td>
														<td>$206,850</td>
													</tr>
													<tr>
														<td>Fiona Green</td>
														<td>Chief Operating Officer (COO)</td>
														<td>San Francisco</td>
														<td>48</td>
														<td>2010/03/11</td>
														<td>$850,000</td>
													</tr>
													<tr>
														<td>Shou Itou</td>
														<td>Regional Marketing</td>
														<td>Tokyo</td>
														<td>20</td>
														<td>2011/08/14</td>
														<td>$163,000</td>
													</tr>
													<tr>
														<td>Michelle House</td>
														<td>Integration Specialist</td>
														<td>Sidney</td>
														<td>37</td>
														<td>2011/06/02</td>
														<td>$95,400</td>
													</tr>
													<tr>
														<td>Suki Burks</td>
														<td>Developer</td>
														<td>London</td>
														<td>53</td>
														<td>2009/10/22</td>
														<td>$114,500</td>
													</tr>
													<tr>
														<td>Prescott Bartlett</td>
														<td>Technical Author</td>
														<td>London</td>
														<td>27</td>
														<td>2011/05/07</td>
														<td>$145,000</td>
													</tr>
													<tr>
														<td>Gavin Cortez</td>
														<td>Team Leader</td>
														<td>San Francisco</td>
														<td>22</td>
														<td>2008/10/26</td>
														<td>$235,500</td>
													</tr>
													<tr>
														<td>Martena Mccray</td>
														<td>Post-Sales support</td>
														<td>Edinburgh</td>
														<td>46</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
													</tr>
													<tr>
														<td>Unity Butler</td>
														<td>Marketing Designer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/12/09</td>
														<td>$85,675</td>
													</tr>
													<tr>
														<td>Howard Hatfield</td>
														<td>Office Manager</td>
														<td>San Francisco</td>
														<td>51</td>
														<td>2008/12/16</td>
														<td>$164,500</td>
													</tr>
													<tr>
														<td>Hope Fuentes</td>
														<td>Secretary</td>
														<td>San Francisco</td>
														<td>41</td>
														<td>2010/02/12</td>
														<td>$109,850</td>
													</tr>
													<tr>
														<td>Vivian Harrell</td>
														<td>Financial Controller</td>
														<td>San Francisco</td>
														<td>62</td>
														<td>2009/02/14</td>
														<td>$452,500</td>
													</tr>
													<tr>
														<td>Timothy Mooney</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>37</td>
														<td>2008/12/11</td>
														<td>$136,200</td>
													</tr>
													<tr>
														<td>Jackson Bradshaw</td>
														<td>Director</td>
														<td>New York</td>
														<td>65</td>
														<td>2008/09/26</td>
														<td>$645,750</td>
													</tr>
													<tr>
														<td>Olivia Liang</td>
														<td>Support Engineer</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2011/02/03</td>
														<td>$234,500</td>
													</tr>
													<tr>
														<td>Bruno Nash</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>38</td>
														<td>2011/05/03</td>
														<td>$163,500</td>
													</tr>
													<tr>
														<td>Sakura Yamamoto</td>
														<td>Support Engineer</td>
														<td>Tokyo</td>
														<td>37</td>
														<td>2009/08/19</td>
														<td>$139,575</td>
													</tr>
													<tr>
														<td>Thor Walton</td>
														<td>Developer</td>
														<td>New York</td>
														<td>61</td>
														<td>2013/08/11</td>
														<td>$98,540</td>
													</tr>
													<tr>
														<td>Finn Camacho</td>
														<td>Support Engineer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/07/07</td>
														<td>$87,500</td>
													</tr>
													<tr>
														<td>Serge Baldwin</td>
														<td>Data Coordinator</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2012/04/09</td>
														<td>$138,575</td>
													</tr>
													<tr>
														<td>Zenaida Frank</td>
														<td>Software Engineer</td>
														<td>New York</td>
														<td>63</td>
														<td>2010/01/04</td>
														<td>$125,250</td>
													</tr>
													<tr>
														<td>Zorita Serrano</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>56</td>
														<td>2012/06/01</td>
														<td>$115,000</td>
													</tr>
													<tr>
														<td>Jennifer Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>43</td>
														<td>2013/02/01</td>
														<td>$75,650</td>
													</tr>
													<tr>
														<td>Cara Stevens</td>
														<td>Sales Assistant</td>
														<td>New York</td>
														<td>46</td>
														<td>2011/12/06</td>
														<td>$145,600</td>
													</tr>
													<tr>
														<td>Hermione Butler</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>47</td>
														<td>2011/03/21</td>
														<td>$356,250</td>
													</tr>
													<tr>
														<td>Lael Greer</td>
														<td>Systems Administrator</td>
														<td>London</td>
														<td>21</td>
														<td>2009/02/27</td>
														<td>$103,500</td>
													</tr>
													<tr>
														<td>Jonas Alexander</td>
														<td>Developer</td>
														<td>San Francisco</td>
														<td>30</td>
														<td>2010/07/14</td>
														<td>$86,500</td>
													</tr>
													<tr>
														<td>Shad Decker</td>
														<td>Regional Director</td>
														<td>Edinburgh</td>
														<td>51</td>
														<td>2008/11/13</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Michael Bruce</td>
														<td>Javascript Developer</td>
														<td>Singapore</td>
														<td>29</td>
														<td>2011/06/27</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Donna Snider</td>
														<td>Customer Support</td>
														<td>New York</td>
														<td>27</td>
														<td>2011/01/25</td>
														<td>$112,000</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

			<!-- Sidebar-right -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 shadow-none border-0">
					<div class="tab-menu-heading border-0 d-flex p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="#" class="sidebar-icon text-end float-end me-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu border-bottom">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-user me-1"></i> Profile</a></li>
								<li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-users me-1"></i> Contacts</a></li>
								<li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i> Settings</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="side1">
								<div class="card-body text-center">
									<div class="dropdown user-pro-body">
										<div class="">
											<img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="{{asset('template/assets/images/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
										</div>
										<div class="user-info mg-t-20">
											<h6 class="fw-semibold  mt-2 mb-0">Mintrona Pechon</h6>
											<span class="mb-0 text-muted fs-12">Premium Member</span>
										</div>
									</div>
								</div>
								<a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
									<div class="d-flex"><i class="fe fe-user me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Profile</h6>
											<p class="tx-12 mb-0 text-muted">Profile Personal information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="chat.html">
									<div class="d-flex"><i class="fe fe-message-square me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Messages</h6>
											<p class="tx-12 mb-0 text-muted">Person message information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="emailservices.html">
									<div class="d-flex"><i class="fe fe-mail me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Mails</h6>
											<p class="tx-12 mb-0 text-muted">Persons mail information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="editprofile.html">
									<div class="d-flex"><i class="fe fe-settings me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Account Settings</h6>
											<p class="tx-12 mb-0 text-muted">Settings Information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="login.html">
									<div class="d-flex"><i class="fe fe-power me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Sign Out</h6>
											<p class="tx-12 mb-0 text-muted">Account Signout</p>
										</div>
									</div>
								</a>
							</div>
							<div class="tab-pane" id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/9.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
											<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/11.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/10.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											<p class="mb-0 tx-12 text-muted">alinaaernier@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/2.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/13.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/12.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
											<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/4.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/7.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/2.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/14.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/11.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/9.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/15.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/4.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="side3">
								<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
									Account Settings
								</a>
								<div class="card-body">
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Updates Automatically</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Allow Location Map</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Contacts</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Notication</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Tasks Statistics</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Email Notification</span>
										</label>
									</div>
								</div>
								<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
									General Settings
								</a>
								<div class="card-body">
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show User Online</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Website Notication</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Recent activity</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Logout Automatically</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Aloow All Notifications</span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							 Copyright © 2021 <a href="#">Zenax</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="#"> Spruko </a> All rights reserved
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{asset('template/assets/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('template/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SPARKLINE JS-->
		<script src="{{asset('template/assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="{{asset('template/assets/js/circle-progress.min.js')}}"></script>

		<!-- C3 CHART JS -->
		<script src="{{asset('template/assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/charts-c3/c3-chart.js')}}"></script>

		<!-- INPUT MASK JS-->
		<script src="{{asset('template/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!-- SIDE-MENU JS -->
		<script src="{{asset('template/assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('template/assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- DATA TABLE JS-->
		<script src="{{asset('template/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets/js/table-data.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset('template/assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('template/assets/plugins/p-scroll/pscroll.js')}}"></script>
		<script src="{{asset('template/assets/plugins/p-scroll/pscroll-1.js')}}')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{asset('template/assets/js/custom.js')}}"></script>

	</body>
</html>