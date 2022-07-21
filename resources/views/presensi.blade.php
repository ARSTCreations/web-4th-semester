@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/presensi.css')}}">
@stop
@section('content')
<header>
    <div class="box-presensi">
        <table id="product" class="display form-table" style="width:100%">
            <thead>
              <tr>
                <th>
                    <h1>Presensi</h1>
                    <div class="prev-next">
                        <a href="#" class="left"> <</a>
                        <a href="#" class="month"> Juli 2022 </a>
                        <a href="#" class="right"> > </a>
                    </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <div class="tanggal-waktu">
                        <label for="tanggal">Tanggal</label>
                        <input style="margin-left: 60px;font-family:'Montserrat" type="date" name="tanggal" id="tanggal">
                        <label for="waktu">Waktu</label>
                        <input style="margin-left: 30px;font-family:'Montserrat" type="text" name="waktu" id="waktu" placeholder="08.00-17.00">
                    </div>
                    <div class="status">
                        <label for="ket-hadir">Keterangan</label>
                        <label>
                            <input type="radio" style="margin-left: -11px; font-weight: 100" name="contact_email" value="email"> Hadir
                            <input type="radio" style="margin-left: 50px; font-weight: 100" name="ket" value="absen"> Tidak Hadir 
                            <input type="radio" style="margin-left: 50px; font-weight: 100" name="ket" value="izin"> Izin
                        </label>  
                    </div>
                    <div class="deskripsi">
                        <label for="desc">Deskripsi</label>
                        <input type="text" style="margin-left: 50px;font-family:'Montserrat" name="desc" id="desc" placeholder="Lorem ipsum dolor sit amet">
                    </div> <br>
                </td>
                
              </tr>
              <tr>
                <td>
                    <div class="submit">
                        <button> Submit</button>
                        <button> Cancel</button>
                    </div>
                </td>
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
