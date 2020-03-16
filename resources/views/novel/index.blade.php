@extends('layout.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Novel</h3>
					<div class="right">
						
					
					
						<a href="/novel/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
				

				</div>
					

				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th >Judul</th>
								<th >Penerbit</th>
								<th >Penulis</th>
								<th >Tahun Terbit</th>
								<th >Kategori</th>
								<th >Harga</th>
								<th >Gambar</th>
								<th width="500px">Sinopsis</th>
								<th >AKSI</th></tr>
						</thead>
						@foreach($data_novel as $novel)
						<tbody>
							<tr>
								<td>{{$novel->judul}}</td>
								<td>{{$novel->penerbit}}</td>
								<td>
									@foreach($penulis as $penu)
                                        @if($penu->id == $novel->penulis)
                                            {{ $penu->penulis }}
                                        @endif
                                    @endforeach
								</td>
								<td>{{$novel->thn_terbit}}</td>
								<td>{{$novel->kategori}}</td>
								<td>{{$novel->harga}}</td>
								<td><img src="{{asset('images/'.$novel->gambar)}}" width="100" height="130"></td>
								<td>{{$novel->sinopsis}}</td>
								<td>
									<a href="/novel/{{$novel->id}}/edit" class="btn btn-warning">Edit</a>
									<a href="/novel/{{$novel->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ? ')" > Delete </a>
								</td></tr>
									@endforeach
										
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

					       <form action="/novel/create" method="POST" enctype="multipart/form-data">
					       	{{csrf_field()}}

								  <div class="form-group">
								    <label for="exampleInputEmail1">Judul Novel</label>
								    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputPassword1">Penerbit</label>
								    <input name="penerbit" type="text" class="form-control" id="exampleInputPassword1" placeholder="Penerbit">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Penulis</label>

								    <select class="form-control" id="penulis" name="penulis">
		                                <option value="" hidden>Pilih Penulis</option>
		                                @foreach($penulis as $pen)
		                                    <option value="{{ $pen->id }}">{{ $pen->penulis }}</option>
		                                @endforeach
		                            </select>
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Tahun Terbit</label>
								    <input name="thn_terbit" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tahun">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Harga</label>
								    <input name="harga" type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Kategori</label>
								    <input name="kategori" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kategori Novel">
								  </div>

								   <div class="form-group">
								    <label for="exampleFormControlTextarea1">Gambar</label>
								    <input type="file" name="gambar" class="form-control">
								  </div>

								   <div class="form-group">
								    <label for="exampleFormControlTextarea1">Sinopsis</label>
								    <textarea name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
