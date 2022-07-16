@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@stop
@section('content')
<header>
    <div class="box-profile">
        <h1>Profile</h1>
    </div>
    <div class="box-agenda">
        <h1>Agenda</h1>
     </div>
    <div class="box-p-surat">
        <h1>Permohonan Surat</h1>
    </div>
    <div class="box-presensi">
        <h1>Presensi</h1>
    </div>
</header>

@endsection
