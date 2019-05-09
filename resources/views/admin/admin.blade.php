@extends('admin.layout.app')

@section('title', 'Admin')
@section('content')

<div class="container mt-5 mb-5">
	<div class="row justify-content-center text-center mb-5">
		<div class="col">
			<h1>Respons Contact</h1>
		</div>
	</div>
	<table class="table table-bordered " id="users-table">
		<thead>
			<tr class="text-center">
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Message</th>
				<th>Created At</th>
				<th>Updated At</th>
			</tr>			
		</thead>
		
	</table>
</div>
@stop

@push('scripts')
<script>
	$(function() {
		$('#users-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: 'admin/json', //lokasi file
			columns: [
			{ data: 'id', name: 'id' },
			{ data: 'name', name: 'name' },
			{ data: 'email', name: 'email' },
			{ data: 'phone', name: 'phone' },
			{ data: 'message', name: 'message' },
			{ data: 'created_at', name: 'created_at' },
			{ data: 'updated_at', name: 'updated_at' }
			]
		});
	});
</script>
@endpush

