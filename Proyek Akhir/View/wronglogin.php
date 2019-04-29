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
        <div id="wronginput">
            <span>Username / Password tidak valid!</span>
        </div>
    </form>
    <p>
        Belum punya akun?
        <a href="signup">Sign Up</a>
    </p>
</div>