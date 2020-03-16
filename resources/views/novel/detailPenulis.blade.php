@extends('layout.master')


@section('content')
<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">{{$penulis->penulis}}</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th >Judul</th>
								<th >Penerbit</th>
								<th >Tahun Terbit</th>
								<th >Kategori</th>
								<th >Harga</th>
								<th >Gambar</th>
								<th width="500px">Sinopsis</th>
						</thead>
						@foreach($novel as $nov)
						<tbody>
							<tr>
								<td>{{$nov->judul}}</td>
								<td>{{$nov->penerbit}}</td>
								<td>{{$nov->thn_terbit}}</td>
								<td>{{$nov->kategori}}</td>
								<td>{{$nov->harga}}</td>
								<td><img src="{{asset('images/'.$nov->gambar)}}" width="100" height="130"></td>
								<td>{{$nov->sinopsis}}</td></tr>
									@endforeach
						</tbody>
					</table>
				</div>
			</div>
					</div>
				</div>
@stop
@section('content1')		
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif

		<div class="row">
			<div class="col-lg-12">
			

		</div>
		</div>
	</div>
		<!-- Modal -->
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

					       
					      </div>
					     
					    </div>
					  </div>
					  @endsection
					