@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/agenda.css')}}">
@stop
@section('content')
<header>
    <div class="box-daftar-agenda">
        <h1>Daftar Agenda</h1>
        <div class="card-agenda">
            <p>Selasa, 19 Juli 2022</p>
            <h2>Demo Proyek Pemaaran</h2>
            <p>08.00 - 09.00</p>
            <p>Gedung AB</p>
            </div>
        </div>
    </div>
    <div class="box-kalender-agenda">
        <h1>Kalender Agenda</h1>
    </div>
    
</header>

@endsection
