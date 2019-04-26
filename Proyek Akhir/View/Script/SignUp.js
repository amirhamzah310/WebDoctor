class SignUp {
    constructor(nama, alamat, username, email, password, retype) {
        this.nama = nama;
        this.nama.addEventListener("keyup", this.validateNama.bind(this));
        this.alamat = alamat;
        this.alamat.addEventListener("keyup", this.validateAlamat.bind(this));
        this.username = username;
        this.username.addEventListener("keyup", this.validateUsername.bind(this));
        this.email = email;
        this.email.addEventListener("keyup", this.validateEmail.bind(this));
        this.password = password;
        this.password.addEventListener("keyup", this.validatePassword.bind(this));
        this.retype = retype;
    }

    validateNama() {
        if (this.nama.value != "") {
            this.nama.classList.remove("background");
            this.nama.classList.remove("nama::-webkit-input-placeholder");
            return true;
        } else {
            this.nama.classList.add("background");
            return false;
        }
    }

    validateAlamat() {
        if (this.alamat.value != "") {
            this.alamat.classList.remove("background");
            return true;
        } else {
            this.alamat.classList.add("background");
            return false;
        }
    }

    validateUsername() {
        if (this.username.value != "") {
            this.username.classList.remove("background");
            return true;
        } else {
            this.username.classList.add("background");
            return false;
        }
    }

    validateEmail() {
        if (this.email.value != "") {
            this.email.classList.remove("background");
            return true;
        } else {
            this.email.classList.add("background");
            return false;
        }
    }

    validatePassword() {
        if (this.password.value.length == 0) {
            this.password.classList.add("background");
            this.retype.classList.add("background");
            return false;
        }
        if (this.password.value.length > 0 && this.password.value.length < 8) {
            this.password.classList.add("background");
            this.retype.classList.add("background");
            return false;
        } else {
            this.password.classList.remove("background");
            this.retype.classList.remove("background");
            return true;
        }
    }
}