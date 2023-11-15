<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Website Pendaftaran</title>
    <script>
        function validateForm() {
        var nrp = document.getElementById("nrp");
        if (nrp.value == "") {
        alert("NRP must be filled out");
        nrp.focus();
        return false;
        }
        if(isNaN(nrp.value)==true){
        alert("NRP must be number");
        nrp.focus();
        nrp.value="";
        return false;
        }
        if(nrp.value.length != 10){
        alert("Jumlah digit harus 10, Anda memasukkan " + nrp.value.length + " digit!");
        nrp.focus();
        return false;
        }
        if(nrp.value.substring(0,4)!= "5026"){
        alert("Pendaftaran hanya untuk Mahasiswa Sistem Informasi");
        nrp.focus();
        return false;
        }
        if(nrp.value.substring(4,6)!= "22" && nrp.value.substring(4,6)!= "21" ){
        alert("Pendaftaran hanya untuk Mahasiswa Sistem Informasi Angkatan 2022 dan Angkatan 2021");
        nrp.focus();
        return false;
        }

        return true;
    }
    </script>
    </head>
    <body>
        <h2>Pendaftaran Asisten Lab Sistem Informasi</h2>
        <form name="myForm" action="https://youtube.com" onsubmit="return validateForm()" method="post">
            <label for="nrp">NRP:</label>
            <input type="text" id="nrp" name="nrp" class="form-control">
            <input type="submit" value="Submit" class="btn btn-primary">
            <input type="reset" value="Kosongi" class="btn btn-warning">
          </form>
    </body>
</html>
