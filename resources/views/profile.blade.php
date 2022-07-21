@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@stop
@section('content')
<header>
    <h3 style="position: absolute; left: 332px; top: 105px; font-size: 20px">Profile</h3>
    <div class="box-profile">
    <div class="grid-atas">
        <img src="{{asset('img/Artboard 11 2.png')}}" alt="">
    </div>
    <div class="grid-bawah">
        <div class="grid-bawah-kiri">
            <img src="{{asset('img/profil.png')}}" alt="">
            <h3 style="margin-top: 30px;">{{str_replace('"', "", json_encode($profilefromauth[0]->full_name))}}</h3>
            <p>{{str_replace('"', "", json_encode($profilefromauth[0]->job_title))}}</p>
            <p style="margin-top: 270px;">Kontak :</p>
            <li class="social-media">
                <a href="#linkedin"><i class="uil uil-linkedin"></i></a>
                <a href="#facebook"><i class="uil uil-facebook"></i></a>
                <a href="#whatsaap"><i class="uil uil-whatsapp"></i></a>
                <a href="#twitter"><i class="uil uil-twitter"></i></a>
            </li>
        </div>
        <div class="grid-bawah-tengah">
            <h2>Detail Pekerjaan</h2>
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
            <ul>
                <li class="desc-li">Mulai Bekerja</li>
                <li>{{str_replace('"', "", json_encode($profilefromauth[0]->start_date))}}</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Status</li>
                <li>{{str_replace('"', "", json_encode($profilefromauth[0]->working_status))}}</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
        </div>
        <div class="grid-bawah-kanan">
            <h2>Biodata</h2>
            <ul>
                <li class="desc-li">Email</li>
                <li>{{str_replace('"', "", json_encode($profilefromauth[0]->email))}}</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Tanggal Lahir</li>
                <li>{{str_replace('"', "", json_encode($profilefromauth[0]->birth_place))}}, {{str_replace('"', "", json_encode($profilefromauth[0]->birth_date))}}</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Jenis Kelamin</li>
                <li>Perumahan</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Alamat</li>
                <li>{{str_replace('"', "", json_encode($profilefromauth[0]->address))}}</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Kota</li>
                <li>Malang</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
        </div>
    </div>
    </div>
    
</header>

@endsection
