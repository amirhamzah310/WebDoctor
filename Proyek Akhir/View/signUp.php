<div class="container">
    <div class="header">
        <h1 class="judul">Buat Akun di WebDoctor</h1>
    </div>
    <div class="atas"></div>
    <form action="addUser" method="post" id="formsignup" onSubmit="return check();">
        <div id="lblNama">
            <label for="nama" class="namaa">Nama</label><br>
            <input type="text" name="inputNama" class="nama" placeholder="Masukkan nama Anda">
        </div>
        <div id="lblTTL">
            <label for="ttl" class="tanggalLahir">Tanggal Lahir</label><br>
            <select name="year" id="selectYear">
                <option>Tahun</option>
                <?php
                    for ($x=1990 ; $x <= 2018; $x++) { 
                        echo "<option>";
                        echo "$x";
                        echo "</option>";
                    }
                ?>
            </select>
            <select name="month" id="selectMonth">
                <option>Bulan</option>
                <?php
                    for ($x=1; $x <= $bulan; $x++) { 
                        echo "<option>";
                        echo "$x";
                        echo "</option>";
                    }
                ?>
            </select>
            <select name="date" id="selectDate">
                <option>Tanggal</option>
                <?php
                    for ($x=1;$x<=$tanggal;$x++) {
                        echo "<option>";
                        echo "$x";
                        echo "</option>";
                    }
                ?>
            </select>
            <span id="valttl"></span>
        </div>
        <div id="lblAlamat">
            <label for="alamat" class="address">Alamat</label><br>
            <input type="text" name="inputAlamat" class="alamat" placeholder="Masukkan alamat Anda">
        </div> 
        <div id="lblKota">
            <label for="kota" class="city">Kota</label><br>
            <select name="kota" id="selectKota" onchange="showfield(this.options[this.selectedIndex].value)">
                <option>Pilih Kota</option>
                <?php
                    foreach ($kota as $key => $value) {
                        echo "<option>";
                        echo "$value[0]";
                        echo "</option>";
                    }
                ?>
                <option value="Other">lainnya</option>
            </select>
            <div id="txtbox"></div>
            <span id="valkota"></span>
        </div>
        <div id="lblUser">
            <label for="username" class="users">Username</label><br>
            <span id="userlength"></span>
            <input type="text" name="iUser" id="username" placeholder="Tidak boleh lebih dari 12 karakter" onkeyup='checkuser()'>
            <span id="userauth"></span>
        </div>
        <div id="lblEmail">
            <label for="email" class="e_mail">Email</label><br>
            <input type="email" name="inputEmail" class="email" placeholder="Masukkan Email Anda">
        </div>
        <div id="lblPass">
            <label for="pass" class="passwords">Password</label><br>
            <input type="password" name="inputPass" id="pass" placeholder="Minimal 8 karakter"
                onkeyup='checkPass();'><span id="require"></span>
        </div>
        <div id="lblRePass">
            <label for="repass" class="repasswords">Confirm Password</label><br>
            <input type="password" name="inputRePass" id="repass" placeholder="Masukkan kembali password Anda" 
                onkeyup='checkRePass();'><span id="message"></span>
        </div>
        <div id="lblButton">
            <input type="submit" id="sign_in" value="Sign Up">
        </div>
    </form>
    <p>
        Sudah punya akun?
        <a href="index.php">Log In</a>
    </p>
</div>
<script src="View/Script/scriptajax.js"></script>