<div id="bawah">
    <form method="POST" action="updatepassword" onSubmit="return checkLengkap();">
        <div id="usr">
            <label for="username" class="user">Username / Email</label><br>
            <input type="text" id="username" name="iUsr" placeholder="Masukkan Username / Email Anda">
            <span id="harus"></span>
        </div>
        <div id="pss">
            <label for="pass" class="pass">New Password</label><br>
            <input type="password" name="inputPass" id="pass" placeholder="Minimal 8 karakter"
                onkeyup='checkPass();'><span id="require"></span>
        </div>
        <div id="confirmpss">
            <label for="pass" class="pass">Confirm New Password</label><br>
            <input type="password" name="inputRePass" id="repass" placeholder="Masukkan kembali password Anda" 
                onkeyup='checkRePass();'><span id="message"></span>
        </div>
        <div id="btnLog">
            <input type="submit" id="log" value="Submit">
        </div>
    </form>
    <p>
        Belum punya akun?
        <a href="signup">Sign Up</a>
    </p>
</div>