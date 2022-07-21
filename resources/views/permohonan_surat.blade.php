@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/permohonan_surat.css')}}">
@stop
@section('content')
<header>
    <h3 style="position: absolute; left: 332px; top: 105px; font-size: 20px">Permohonan Surat</h3>
    <form class="box-pengajuan" action="/api/stable/files" method="POST" enctype="multipart/form-data">
        <h1>Pengajuan</h1><hr style="width: 100%; height: 1.5px; background: var(--color-light); margin-top: 20px">
        <div class="form-input">
            <label for="nama_surat">Nama Surat</label>
            <input style="margin-left: -10px" type="text" name="title" placeholder="Nama Surat">
        </div>
        <div class="form-input">
            <label for="jenis_surat">Jenis Surat</label>
            <input type="text" placeholder="Jenis Surat">
        </div>
        <div class="form-input">
            <label for="desc_surat">Deskripsi Singkat</label>
            <textarea style="margin-left: -60px" placeholder=""></textarea>
        </div>
        <div class="form-input">
            <label for="upload">Upload File</label>
            <input type="file" name="file" style="border: 0px">
        </div>
        <div class="float-right">
            <input type="submit" class="button-custom" value="Submit">
            <input type="reset" class="button-custom" value="Cancel">
        </div>
    </form>


    <div class="box-daftar-surat">
        <h1>Daftar Surat</h1><hr style="width: 100%; height: 1.5px; background: var(--color-light); margin-top: 20px">
        @foreach ($suratfromauth as $s)
        <div class="card-d-surat" style="margin: 1rem">
            <div>
                <img  href="{{str_replace('"', "", stripslashes(json_encode($s->url)))}}" src="{{asset('img/pdf.png')}}" alt="">
            </div>
            <div>
                <h3> <a href="{{str_replace('"', "", stripslashes(json_encode($s->url)))}}">{{str_replace('"', "", json_encode($s->title))}}</a></h3>
                <p>{{str_replace('"', "", json_encode($s->status))}} | {{str_replace('"', "", json_encode($s->created_at))}}</p>
                <div class="inputan">
                    {{ Form::open(['url' => '/api/stable/files/'.$s->id, 'method' => 'delete', 'class' => 'deleteForm', 'target'=>'dummyframe']) }}
                    <input type="submit" class="deleteBtn" value="Delete"/>
                    {{ Form::close() }}
                    {{ Form::open(['url' => '/api/stable/files/'.$s->id, 'method' => 'patch', 'class' => 'deleteForm', 'target'=>'dummyframe']) }}
                        <input type="hidden" name="status" value="Approved">
                        <input type="submit" class="deleteBtn" value="Approve"/>
                    {{ Form::close() }}
                    {{ Form::open(['url' => '/api/stable/files/'.$s->id, 'method' => 'patch', 'class' => 'deleteForm', 'target'=>'dummyframe']) }}
                        <input type="hidden" name="status" value="Rejected">
                        <input type="submit" class="deleteBtn" value="Reject"/>
                    {{ Form::close() }}
                </div>
                
            </div>
        </div>
        @endforeach
        
    </div>
    
</header>

@endsection
