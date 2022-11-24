<!DOCTYPE html>
<html>
    <head> <title>Info Pegawai</title></head>
<body>
    <h1>Saya adalah pegawai dengan Jabatan :
    <?php
    if($jabatan=="HRD")
            echo "Human Resource Development";
        elseif($jabatan=="Adm")
            echo "Admin";
        elseif($jabatan=="SHRD")
            echo "Staff HRD";
        elseif($jabatan=="MO")
            echo "Manager Operasional";
        elseif($jabatan=="SO")
            echo "Staff Operasional";
        elseif($jabatan=="KR")
            echo "Kurir";
        else
            echo "Tidak ada jabatan tersebut di PT Moro Seneng";
        ?>
        </h1>
    </body>
</html>