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

var p = document.getElementById('page[]');
p.addEventListener('click', function () {
    console.log("a");
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            hasil.innerHTML = xhr.responseText;
        }
    }
    var param = getUrlVars("start");
    alert(param);
    xhr.open('GET', 'Controller/paginationController.php?p=' + param, true);
    xhr.send();
})

function getUrlVars(param = null) {
    if (param !== null) {
        var vars = [],
            hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars[param];
    } else {
        return null;
    }
}