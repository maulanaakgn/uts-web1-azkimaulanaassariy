document.getElementById('btn-regis').addEventListener('click', function(event) {
    event.preventDefault();

    if (!validateForm()) {
        alert('Formulir tidak valid. Silakan periksa kembali input Anda.');
        return;
    }

    document.getElementById('btn-regist').disabled = false;

    var formData = new FormData(document.getElementById('registrationForm'));

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '../Project1/insertData/insert.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log(xhr.responseText);
            } else {
                console.error('Error:', xhr.statusText);
            }
        }
    };

    xhr.send(formData);
});
function validateForm() {
    var namadp = document.getElementById('namadp').value;
    var namabl = document.getElementById('namabl').value;
    var emailr = document.getElementById('emailr').value;
    var nohp = document.getElementById('nohp').value;
    var password = document.getElementById('passwordr').value;
    var kon_password = document.getElementById('kon-password').value;

    return (namadp !== "" && namabl !== "" && emailr !== "" && nohp !== "" && password !== "" && kon_password !== "" && password === kon_password);
}
