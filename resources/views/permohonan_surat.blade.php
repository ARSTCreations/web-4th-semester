@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/permohonan_surat.css')}}">
@stop
@section('content')
<header>
    <h69>Pengajuan Surat</h69>
</header>
<body>
    <div class="box-form">
        <h1>Pengajuan : </h1>
    </div>
    <div class="text-field1">
    </div>
    <div class="text-field2">
    </div>
    <div class="text-field3">
    </div>
    <button class="button3" href="#">
       <h13> Choose File </h13>
    </button>
    <div class="alert-box">
        <h499>Document files :  .doc .docx .epub .gdoc .odt .oth .ott .pdf .rtf</h499>
        <h499>PDF document : .pdf</h499>
    </div>
    <button class="button4" href="#">
    <h13> Submit </h13>
    </button>
    <button class="button5" href="#">
    <h13> Cancel </h13>
    </button>
</body>
<body>
    <div class="daftar-surat">
    <h1>Surat Anda : </h1>

    </div>
</body>

@endsection
