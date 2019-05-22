var usernameExist = document.getElementById('username');
var auth = document.getElementById('userauth');

//tambah event waktu username diketik, cek udah ada yg punya ato blom
usernameExist.addEventListener('keyup', function () {
    //bkin object ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            auth.innerHTML = xhr.responseText;
            if (auth.innerHTML == "username tersedia") {
                auth.style.color = 'green';
            } else {
                auth.style.color = 'red';
            }
        }
    }
    // eksekusi ajax
    // param pertama request method nya apa
    // param kedua sumbernya dari mana
    // param ketiga (TRUE = ASYNCHRONOUS, FALSE = SYNCHRONOUS)
    xhr.open('GET', 'Controller/usernameController.php?usr=' + usernameExist.value, true);
    xhr.send();
})