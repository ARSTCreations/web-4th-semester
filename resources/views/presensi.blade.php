@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/presensi.css')}}">
@stop
@section('content')
<header>
    <h1>Presensi</h1>
    <div class="box-presensi">
        <table id="product" class="display form-table" style="width:100%">
            <thead>
              <tr>
                <th>
                    <a href="#" class="left"> <</a>
                    <a href="#" class="month"> Juli 2022 </a>
                    <a href="#" class="right"> > </a>
                </th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                
              </tr>
            </tbody>
        </table>
    </div>
    <div class="box-presensi-2">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="product" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Tanggal dan Waktu</th>
                              <th>Nama Pegawai</th>
                              <th>Presensi</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($presensifromauth as $s)
                            <tr class="data-presensi">
                              <td>
                                <p>{{str_replace('"', "", json_encode($s->date))}}</p>
                              </td>
                              <td>
                                <p>{{str_replace('"', "", json_encode($s->full_name))}}</p>
                              </td>
                              <td>
                                <a class="{{str_replace('"', "", json_encode($s->status))}}">{{str_replace('"', "", json_encode($s->status))}}</a>
                              </td>
                            </tr>
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
        </div>
    </div>
    
</header>

@endsection
