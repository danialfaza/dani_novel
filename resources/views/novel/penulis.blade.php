@extends('layout.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Penulis</h3>
					<div class="right">						
						<button type="button" class="btn" class="btn-remove" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th >ID</th>
								<th >Penulis</th>
								<th >AKSI</th></tr>
						</thead>
						@foreach($penulis as $pen)
						<tbody>
							<tr>
								<td>{{ $pen->id }}</td>
								<td>{{ $pen->penulis }}</td>
								<td>
									<a href="/penulis/{{$pen->id}}/detail" class="btn btn-success">Lihat Buku</a>
									<a href="/penulis/{{$pen->id}}/edit" class="btn btn-warning">Edit</a>
								</td></tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					       <form action="/penulis/create" method="POST" enctype="multipart/form-data">
					       	{{csrf_field()}}

								  <div class="form-group">
								    <label for="exampleInputPassword1">Penulis</label>
								    <input name="penulis" type="text" class="form-control" id="exampleInputPassword1" placeholder="Penulis" required>
								  </div>

								  <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					       <button type="submit" class="btn btn-primary">Submit</button>
					      </div>
								</form>
					      </div>
					     
					    </div>
					  </div>
@stop
