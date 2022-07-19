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
        <img src="../img/Artboard 11 2.png" alt="">
    </div>
    <div class="grid-bawah">
        <div class="grid-bawah-kiri">
            <img src="../img/profil.png" alt="">
            <h3 style="margin-top: 30px;">Nama Saya</h3>
            <p>Title Saya</p>
            <p >Kontak :</p>
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
                <li class="desc-li">Divisi</li>
                <li>Produksi</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Posisi</li>
                <li>IT Support</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Salary</li>
                <li>15000</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Mulai Bekerja</li>
                <li>DD/MM/YYYY</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Status</li>
                <li>Aktif Bekerja</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
        </div>
        <div class="grid-bawah-kanan">
            <h2>Biodata</h2>
            <ul>
                <li class="desc-li">Email</li>
                <li>email@email.com</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Tanggal Lahir</li>
                <li>DD/MM/YYYY</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Jenis Kelamin</li>
                <li>Perumahan</li>
                <hr style="width: 70%; height: 1.5px; background: var(--color-light); margin-top: 15px">
            </ul>
            <ul>
                <li class="desc-li">Alamat</li>
                <li>Jl. Kasih Sayang</li>
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
