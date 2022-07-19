@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/presensi.css')}}">
@stop
@section('content')
<header>
    <h1>Presensi</h1>
    <div class="box-presensi">
        
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
                              <th>Tanggal</th>
                              <th>Waktu</th>
                              <th>Deskripsi</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <p>12/07/2022</p>
                              </td>
                              <td>
                                <p>08.00-17.00</p>
                              </td>
                              <td>
                                <p>Lorem Ipsum Dolor Sit Amet</p>
                              </td>
                              <td>
                                <a>Presence</a>
                              </td>
                            </tr>
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
