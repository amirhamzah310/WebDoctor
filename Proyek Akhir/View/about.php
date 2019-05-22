<div class="container">
    <div class="header">
        <h1 class="judul">TENTANG KAMI</h1>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <a href="#web"><img src="View/Style/Images/logo.png" id="gbrLogo"></a>
            <div class="text">Website pemberi diagnosis online berdasarkan gejala-gejala dari inputan user</div>
        </div>
        <div class="mySlides fade">
            <a href="#mike"><img src="View/Style/Images/mike.jpg" id="gbrSlide"></a>
            <div class="text">Ignatius Michael Liondy-2017730007</div>
        </div>
        <div class="mySlides fade">
            <a href="#indra"><img src="View/Style/Images/indra.jpg" id="gbrSlide"></a>
            <div class="text">Indra Permana Sugianto-2017730008</div>
        </div>
        <div class="mySlides fade">
            <a href="#jode"><img src="View/Style/Images/jode.jpg" id="gbrSlide"></a>
            <div class="text">Joshua Delavo-2017730028</div>
        </div>
    </div>
    <div class="konten">
        <h2 id="web">WebDoctor</h2>
        <p id="konten">
            Website pemberi diagnosis online berdasarkan gejala-gejala dari inputan user.
            Website ini dibuat untuk memenuhi penilaian tugas akhir mata kuliah Pemrograman Berbasis Web (PBW) dan
            mata kuliah Manajemen Informasi dan Basis Data (MIBD).
        </p>
        <p id="konten">
            Website ini akan menerima input berupa gejala-gejala yang dialami oleh user kemudian mendiagnosa penyakit
            berdasarkan gejala-gejala yang diinput oleh user beserta kategori penyakitnya.
            User dapat melihat riwayat penyakitnya (tanggal diagnosa, penyakit, gejala-gejala).
            Apabila user menemui kesulitan, dapat menghubungi salah satu kontak dari ketiga admin dibawah. Terima kasih.
        </p>
        <ul>
            <li>Lihat kode program di gitHub kami : WebDoctor</li>
            <li id="icon"><i class="fab fa-github"></i><a href="https://github.com/liondy/WebDoctor">WebDoctor</a></li>
        </ul>
        <h2 id="mike">Ignatius Michael Liondy-2017730007</h2>
        <p id="konten">Mahasiswa Informatika Unpar angkatan 2017 - Pembuat Website</p>
        <ul>
            <li>Hubungi kami: </li>
            <li id="icon"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/michaelliondy/"
                    target="blank">mike</a></li>
            <li id="icon"><i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/michaelliondy"
                    target="blank">Michael Liondy</a></li>
            <li id="icon"><i class="fab fa-github"></i><a href="https://github.com/liondy" target="blank">liondy</a>
            </li>
            <li id="icon"><i class="fas fa-envelope"></i><a
                    href="https://mail.google.com">2017730007@student.unpar.ac.id</a></li>
        </ul>
        <h2 id="indra">Indra Permana Sugianto-2017730008</h2>
        <p id="konten">Mahasiswa Informatika Unpar angkatan 2017 - Pembuat BasisData</p>
        <ul>
            <li>Hubungi kami: </li>
            <li id="icon"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/inpers273/"
                    target="blank">Indra Permana Sugianto</a></li>
            <li id="icon"><i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/inpers273"
                    target="blank">Indra Permana</a></li>
            <li id="icon"><i class="fab fa-github"></i><a href="https://github.com/inpers273"
                    target="blank">inpers273</a></li>
            <li id="icon"><i class="fas fa-envelope"></i><a
                    href="https://mail.google.com">2017730008@student.unpar.ac.id</a></li>
        </ul>
        <h2 id="jode">Joshua Delavo-2017730028</h2>
        <p id="konten">Mahasiswa Informatika Unpar angkatan 2017 - Pembuat Laporan</p>
        <ul>
            <li>Hubungi kami: </li>
            <li id="icon"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/joshua_jode/"
                    target="blank">Joshua Delavo</a></li>
            <li id="icon"><i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/joshuaJodez"
                    target="blank">Joshua Delavo</a></li>
            <li id="icon"><i class="fab fa-github"></i><a href="https://github.com/JoshuaDelavo"
                    target="blank">JoshuaDelavo</a></li>
            <li id="icon"><i class="fas fa-envelope"></i><a
                    href="https://mail.google.com">2017730028@student.unpar.ac.id</a></li>
        </ul>
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