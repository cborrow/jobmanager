@extends('master')

@section('content')
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
@endsection