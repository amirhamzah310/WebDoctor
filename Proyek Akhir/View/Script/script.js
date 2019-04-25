var x;
var val;
var hasilNama;
var hasilAlamat;
var hasilEmail;
var hasilPassword;

function checkPass() {
    if (document.getElementById('pass').value.length == 0) {
        document.getElementById('require').innerHTML = '';
        return false;
    }
    if (document.getElementById('pass').value.length < 8) {
        document.getElementById('require').style.color = 'red';
        document.getElementById('require').innerHTML = 'minimal password 8 karakter';
        return false;
    } else {
        document.getElementById('require').style.color = 'green';
        document.getElementById('require').innerHTML = '8 karakter';
        return true;
    }
}

function checkRePass() {
    if (document.getElementById('repass').value.length == 0) {
        document.getElementById('message').innerHTML = '';
        return false;
    }
    if (document.getElementById('pass').value == document.getElementById('repass').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'match';
        return true;
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not match';
        return false;
    }
}

function check() {
    x = document.querySelectorAll("#formsignup input");
    validate();
    if (hasilNama && hasilAlamat && hasilEmail && checkPass() && checkRePass() && hasilPassword) {
        return true;
    }
    return false;
}

function validate() {
    val = new SignUp(x[0], x[1], x[2], x[3], x[4], x[5]);
    hasilNama = val.validateNama();
    hasilAlamat = val.validateAlamat();
    hasilUsername = val.validateUsername();
    hasilEmail = val.validateEmail();
    hasilPassword = val.validatePassword();
}