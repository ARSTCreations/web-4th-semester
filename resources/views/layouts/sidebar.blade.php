<?php
    use Tymon\JWTAuth\Facades\JWTAuth;
    $is_admin = JWTAuth::parseToken()->authenticate()->is_admin;
?>
<div class="sidebar">
  @if($is_admin == 1)
  <a  href="/api/stable/dashboard"><i class="uil uil-estate"></i>    Dashboard</a>
  @endif
  <a  href="/api/stable/profile"><i class="uil uil-user"></i>   Profile</a>
  <a  href="/api/stable/permohonan_surat"><i class="uil uil-envelope"></i>  Permohonan Surat</a>
  <a  href="/api/stable/presensi"><i class="uil uil-check-square"></i>  Presensi</a>
  @if($is_admin == 1)
    <a  href="/api/stable/agenda"><i class="uil uil-calender"></i>    Agenda Kantor</a>
  @endif
    <form action="/api/stable/auth/logout" method="post">
    <input type="submit" class="button" value="Logout">
  </form>
</div>