<!doctype html>
<html>
<head>
	<title>Job Manager</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
	<script src="https://kit.fontawesome.com/0360c6e09d.js"></script>
</head>
<body>
	<div class="main-container">
		<aside>
			<ul class="nav">
				<li>
					<i class="fas fa-tachometer-alt"></i>
					<a href="#">Dashboard</a>
				</li>
				<li>
					<i class="fas fa-address-book"></i>
					<a href="#">Browse Customers</a>
				</li>
				<li>
					<i class="fas fa-clipboard-list"></i>
					<a href="#">Browse Jobs</a>
				</li>
				<li>
					<i class="fas fa-users"></i>
					<a href="#">Manage Users</a>
				</li>

				<li class="nav-title">Customers</li>
				<li>
					<i class="fas fa-user-plus"></i>
					<a href="#">Add Customer</a>
				</li>
				<li>
					<i class="fas fa-mail-bulk"></i>
					<a href="#">Scheduled E-Mails</a>
				</li>
				<li>
					<i class="fas fa-users-cog"></i>
					<a href="#">Customer Settings</a>
				</li>

				<li class="nav-title">Jobs</li>
				<li>
					<i class="fas fa-clipboard-list"></i>
					<a href="#">Active Jobs</a>
				</li>
				<li>
					<i class="fas fa-calendar-alt"></i>
					<a href="#">Upcoming Jobs</a>
				</li>
				<li>
					<i class="far fa-clipboard"></i>
					<a href="#">Unscheduled Jobs</a>
				</li>
				<li>
					<i class="fas fa-calendar-minus"></i>
					<a href="#">Past Jobs</a>
				</li>

				<li class="nav-title">Categories</li>
				<li>
					<i class="fas fa-tags"></i>
					<a href="#">All Jobs</a> <span class="job-category-badge">0</span>
				</li>
			</ul>
		</aside>
		<div class="content">
			<div class="container medium">
				<div class="container-title-bar">
					<span>Customers</span>
				</div>
				<table cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Company</td>
							<td>Open Jobs</td>
							<td>Active Since</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Test</td>
							<td>Customer</td>
							<td>Test Company</td>
							<td>0</td>
							<td>May 1, 2019</td>
							<td>
								<a href="#"><i class="fas fa-portrait"></i> View</a>
								<a href="#"><i class="fas fa-user-edit"></i> Edit</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="{{ asset('/js/app.js')}}"></script>
	<script type="text/javascript">
		init();
	</script>
</body>
</html>