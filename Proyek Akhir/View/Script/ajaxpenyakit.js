var button = document.getElementById('btnMulai');
var msg = document.getElementById('sakit');

button.addEventListener('click', function () {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            msg.innerHTML = xhr.responseText;
        }
    }
    xhr.open('POST', 'Controller/penyakitController.php', true);
    xhr.send();
})