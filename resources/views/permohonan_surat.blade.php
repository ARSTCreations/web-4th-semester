@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/permohonan_surat.css')}}">
@stop
@section('content')
<header>
    <h3 style="position: absolute; left: 332px; top: 105px; font-size: 20px">Permohonan Surat</h3>
    <div class="box-pengajuan">
        <h1>Pengajuan</h1><hr style="width: 100%; height: 1.5px; background: var(--color-light); margin-top: 20px">
        <div class="form-input">
            <label for="nama_surat">Nama Surat</label>
            <input style="margin-left: -10px" type="text" name="nama_surat" id="nama_surat" placeholder="Nama Surat">
        </div>
        <div class="form-input">
            <label for="jenis_surat">Jenis Surat</label>
            <input type="text" name="jenis_surat" id="jenis_surat" placeholder="Jenis Surat">
        </div>
        <div class="form-input">
            <label for="desc_surat">Deskripsi Singkat</label>
            <textarea style="margin-left: -60px" name="desc_surat" id="desc_surat" placeholder="Deskripsi Singkat"></textarea>
        </div>
        <div class="form-input">
            <label for="upload">Upload File</label>
            <input type="file" name="upload" id="upload" placeholder="Chosee File">
        </div>
        <button class="button-custom">Submit</button>
        <button class="button-custom">Cancel</button>
        
    </div>


    <div class="box-daftar-surat">
        <h1>Daftar Surat</h1><hr style="width: 100%; height: 1.5px; background: var(--color-light); margin-top: 20px">
    </div>
    
</header>

@endsection
