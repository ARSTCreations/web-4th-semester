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
                              <th>Tanggal</th>
                              <th>Waktu</th>
                              <th>Deskripsi</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="data-presensi">
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
                                <a class="presence">Presence</a>
                              </td>
                            </tr>
                            <tr class="data-presensi">
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
                                  <a class="absent">Absent</a>
                                </td>
                              </tr>
                              <tr class="data-presensi">
                                <td>
                                  <p>12/07/2022</p>
                                </td>
                                <td>
                                  <p>---</p>
                                </td>
                                <td>
                                  <p>Lorem Ipsum Dolor Sit Amet</p>
                                </td>
                                <td>
                                  <a class="presence">Presence</a>
                                </td>
                              </tr>
                              <tr class="data-presensi">
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
                                  <a class="presence">Presence</a>
                                </td>
                              </tr>
                              <tr class="data-presensi">
                                <td>
                                  <p>12/07/2022</p>
                                </td>
                                <td>
                                  <p>---</p>
                                </td>
                                <td>
                                  <p>Lorem Ipsum Dolor Sit Amet</p>
                                </td>
                                <td>
                                  <a class="permit">Permit</a>
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
