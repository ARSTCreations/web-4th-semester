@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/agenda.css')}}">
@stop
@section('content')
<header>
    <div class="box-daftar-agenda">
        <h1>Daftar Agenda</h1>
    </div>
    <div class="box-kalender-agenda">
        <h1>Kalender Agenda</h1>
    </div>
    
</header>

@endsection
