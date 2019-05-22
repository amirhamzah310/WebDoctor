var s = document.getElementById('search');
var hasil = document.getElementById('isi');
s.addEventListener('keyup', function () {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            hasil.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'Controller/searchController.php?q=' + s.value, true);
    xhr.send();
})