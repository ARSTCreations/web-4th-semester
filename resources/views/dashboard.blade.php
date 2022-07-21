@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@stop
@section('content')
<header>
    <div class="box-profile">
        <div class="header-grid">
            <h1>Profile</h1>
        <hr style="width: 100%; height: 1.5px; background: var(--color-light); margin-top: 15px">
        </div>
        <div class="content-grid">
            <div class="grid-kiri">
                <img src="{{asset('img/profil.png')}}" alt="">
                <h3 style="margin-top: 30px;">{{str_replace('"', "", json_encode($profilefromauth[0]->full_name))}}</h3>
                <p style="margin-bottom: 50px;">{{str_replace('"', "", json_encode($profilefromauth[0]->job_title))}}</p>
                <li class="social-media">
                    <a href="#linkedin"><i class="uil uil-linkedin"></i></a>
                    <a href="#facebook"><i class="uil uil-facebook"></i></a>
                    <a href="#whatsaap"><i class="uil uil-whatsapp"></i></a>
                    <a href="#twitter"><i class="uil uil-twitter"></i></a>
                </li>
            </div>
            <div class="grid-kanan">
                <div class="grid-kiri-kiri">
                    <ul>
                        <li class="desc-li">Department</li>
                        <li>{{str_replace('"', "", json_encode($profilefromauth[0]->department_name))}}</li>
                        <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
                    </ul>
                    <ul>
                        <li class="desc-li">Posisi</li>
                        <li>{{str_replace('"', "", json_encode($profilefromauth[0]->job_title))}}</li>
                        <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
                    </ul>
                    <ul>
                        <li class="desc-li">Salary</li>
                        <li>{{str_replace('"', "", json_encode($profilefromauth[0]->salary))}}</li>
                        <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
                    </ul>
                </div>
                <div class="grid-kiri-kanan">
                    <ul>
                        <li class="desc-li">Phone</li>
                        <li>{{str_replace('"', "", json_encode($profilefromauth[0]->phone))}}</li>
                        <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
                    </ul>
                    <ul>
                        <li class="desc-li">Alamat</li>
                        <li>{{str_replace('"', "", json_encode($profilefromauth[0]->address))}}</li>
                        <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
                    </ul>
                    <ul>
                        <li class="desc-li">Tanggal Lahir</li>
                        <li>{{str_replace('"', "", json_encode($profilefromauth[0]->birth_place))}}, {{str_replace('"', "", json_encode($profilefromauth[0]->birth_date))}}</li>
                        <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
                    </ul>
                </div>
            </div>
        </div>
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
