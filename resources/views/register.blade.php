<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/register.css">
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
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <form action="#register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Full Name</label>
            <input type="text" name="full_name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Working Status</label>
                    <select name="working_status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Salary</label>
            <input type="number" name="salary" required>
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
            <input type="number" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
            <input type="text" name="address" required>
                </div>
                <div class="form-group">
                    <label for="">Birth Place</label>
                    <input type="text" name="birth_place" required>
                </div>
                <div class="form-group">
                    <label for="">Birth Date</label>
                    <input type="date" name="birth_date" required>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
            <select name="gender" id="" required>
                <option value="0">Female</option>
                <option value="1">Male</option>
            </select>
                </div>
                <div class="form-group">
                    <label for="">Start Date</label>
            <input type="datetime" name="start_date" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</body>

</html>