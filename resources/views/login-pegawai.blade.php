<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pegawai Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">

</head>
<body>
    
    <div class="row">
        <div class="kiri">
            <img src="img/rectangle.png" style="height:100%; width:35vw">

            <!-------offer----->
            <div class="offer">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="row">
                            <div class="col-2">
                                <div class="numbertext">1 / 4</div>
                                <img src="img/agenda.png">
                            </div>
                            <div class="col-2">
                                <h3>Agenda Kantor</h3>
                                <p>Lihat jadwal atau agenda perusahaan secara Realtime<br>
                                    di menu Agenda</p>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="row">
                            <div class="col-2">
                                <div class="numbertext">2 / 4</div>
                                <img src="img/presensi.png">
                            </div>
                            <div class="col-2">
                                <h3>Presensi</h3>
                                <p>Lihat jadwal atau agenda perusahaan secara Realtime<br>
                                    di menu Agenda</p>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="row">
                            <div class="col-2">
                                <div class="numbertext">3 / 4</div>
                                <img src="img/profile.png">
                            </div>
                            <div class="col-2">
                                <h3>Profile</h3>
                                <p>Lihat jadwal atau agenda perusahaan secara Realtime<br>
                                    di menu Agenda</p>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="row">
                            <div class="col-2">
                                <div class="numbertext">4 / 4</div>
                                <img src="img/permohonan_surat.png">
                            </div>
                            <div class="col-2">
                                <h3>Permohonan Surat</h3>
                                <p>Lihat jadwal atau agenda perusahaan secara Realtime<br>
                                    di menu Agenda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
        
                <div style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                
                <br>
                <script>
                    var slideIndex = 0;
                    showSlides();
        
                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 3000);
                    }
                </script>
            </div>
        </div>

        <div class="kanan">
            <div class="container">
                <a href="index.html"><img src="../img/weblogo.png"></a>
    
            </div>
            <div class="title">
                <h1>Log in Pegawai <img src="img/waving-hand-2.png" width="30px"></h1>
                <p>Selamat datang di aplikasi kepegawaian CV. Creative Design<br>Indonesia. Pegawai?
                    <a href="#login-pegawai" class="signupBtn">Klik Disini</a></p>
            </div>

            <form name="submitbtn" id="login" action="/api/stable/auth/login" method="post">
                <div class="form_atas">
                    <p>
                        <label>E-mail</label><br>
                        <input type="text" id="fullname" name="email" placeholder="account@gmail.com" required/><br>
                    </p> <br><br><br><br>
                    <p>
                        <label>Password</label><br>
                        <input type="password" name="password" placeholder="password" required /><br>
                    </p>
                </div> <br><br><br><br>
                <div class="submitbtn">
                    <p><input type="checkbox" name="checkbox"> Remember me</p>
                    <p> 
                        
                        <button class="button" href="#submit">Log in</button>
                    </p>
        
                </div>
            </form>
            
            <div class="copyright">
                <p>Copyright @KelompokWEB-F 2022</p>
            </div>
        </div>
    </div>
</body>

</html>