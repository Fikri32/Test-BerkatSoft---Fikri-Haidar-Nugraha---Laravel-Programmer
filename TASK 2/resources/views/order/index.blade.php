@extends('layouts/master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>List Order</h2>
        <ul class="nav navbar-right panel_toolbox">
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="text-center">Nama Customer</th>
              <th class="text-center " >Produk</th>
              <th class="text-center">Tanggal Order</th>
            </tr>
          </thead>
          <tbody>
            @foreach($customer as $a)
						<tr>
							<td class="text-center" style="width:20%;height:30px">{{ $a->nama }}</td>
							<td   style="width:20%;justify-content: center">
                <ol style="text-align: center;list-style-position: inside">
                  @forelse($a->produk as $h)
                 
                    <li>
                     {{$h->nama}}
                    </li>
                    {{-- {{var_dump($o->pivot->created_at)}} --}}
                        {{-- <img class="img-rounded"
                      style="max-height: 50px; " src="{{url('/build/images/produk/'.$h->gambar)}}" alt=""> --}}
                    
                      @empty
                      <span class="label label-danger">Belum Melakukan Order</span>
									@endforelse
                </ol>
							</td>
              <td   style="width:20%;justify-content: center">
                <ol style="text-align: center;list-style-position: inside">
                  @forelse($a->produk as $o)
                 
                    <li>
                      {{Carbon\Carbon::parse($o->pivot->created_at)->translatedFormat('d F Y')}}
                    </li>
                    {{-- {{var_dump($o->pivot->created_at)}} --}}
                        {{-- <img class="img-rounded"
                      style="max-height: 50px; " src="{{url('/build/images/produk/'.$h->gambar)}}" alt=""> --}}
                    
                      @empty
                      <span class="label label-danger">Belum Melakukan Order</span>
									@endforelse
                </ol>
							</td>
							{{-- <td class="text-center"></td> --}}
						</tr>
						@endforeach
          </tbody>
          
         
        </table>
      </div>
    </div>
  </div>
</div>  
<script>
  $(document).ready(function() {
  $('#datatable').DataTable();
} );
</script>
@endsection