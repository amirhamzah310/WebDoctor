<div class="container">
    <div class="header">
        <h1 class="judul">SELAMAT DATANG DI WEBDOCTOR</h1>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="View/Style/Images/logo.png" id="gbrSlide">
            <div class="text">Website pemberi diagnosis online berdasarkan gejala-gejala dari inputan user</div>
        </div>
        <div class="mySlides fade">
            <img src="View/Style/Images/mike.jpg" id="gbrSlide">
            <div class="text">Ignatius Michael Liondy-2017730007</div>
        </div>
        <div class="mySlides fade">
            <img src="View/Style/Images/indra.jpg" id="gbrSlide">
            <div class="text">Indra Permana Sugianto-2017730008</div>
        </div>
        <div class="mySlides fade">
            <img src="View/Style/Images/jode.jpg" id="gbrSlide">
            <div class="text">Joshua Delavo-2017730028</div>
        </div>
    </div>
    <div id="bawah">
        <form method="POST" action="signin">
            <div id="usr">
                <label for="username" class="user">Username / Email</label><br>
                <input type="text" class="username" name="iUsr" placeholder="Masukkan Username / Email Anda">
            </div>
            <div id="pss">
                <label for="pass" class="pass">Password</label><br>
                <input type="password" class="password" name="iPss" placeholder="Masukkan Password Anda">
            </div>
            <div id="remember">
                <input type="checkbox"> Remember Me
            </div>
            <div id="btnLog">
                <input type="submit" id="log" value="Login">
            </div>
        </form>
        <p>
            <br>
            Lupa Password?
            <a href="forgot">Klik di sini</a><br><br>
            Belum punya akun?
            <a href="signup">Sign Up</a>
        </p>
    </div>
</div>
<script>
var idxSlide = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    // var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    idxSlide++;
    if (idxSlide > slides.length) {
        idxSlide = 1;
    }
    // for (i = 0; i < dots.length; i++) {
    //     dots[i].className = dots[i].className.replace(" active", "");
    // }
    slides[idxSlide - 1].style.display = "block";
    // dots[idxSlide - 1].className += " active";
    setTimeout(showSlides, 4000); //setiap 4 detik geser
}
</script>