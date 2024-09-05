<?php
require 'baglan.php';

if (isset($_POST['ayarkaydet'])) {

    // site_port ve site_sifre değerini kontrol et ve geçerli bir tamsayıya dönüştür
    $site_port = !empty($_POST['site_port']) ? intval($_POST['site_port']) : null;
    $site_sifre = !empty($_POST['site_sifre']) ? intval($_POST['site_sifre']) : null;

    $sorgu = $conn->prepare("UPDATE ayarlar SET 
        site_baslik=:site_baslik,
        site_aciklama=:site_aciklama,
        site_link=:site_link,
        site_sahip=:site_sahip,
        site_host=:site_host,
        site_email=:site_email,
        site_port=:site_port,
        site_sifre=:site_sifre
    ");

    $sonuc = $sorgu->execute(array(
        'site_baslik' => $_POST['site_baslik'],
        'site_aciklama' => $_POST['site_aciklama'],
        'site_link' => $_POST['site_link'],
        'site_sahip' => $_POST['site_sahip'],
        'site_host' => $_POST['site_host'],
        'site_email' => $_POST['site_email'],
        'site_port' => $site_port,
        'site_sifre' => $site_sifre
    ));

    if ($_FILES['site_logo']['error']=="0") {
		$gecici_isim=$_FILES['site_logo']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['site_logo']['name'];
		move_uploaded_file($gecici_isim,"../dosyalar/$dosya_ismi");

		$sorgu=$conn->prepare("UPDATE ayarlar SET 
			site_logo=:site_logo WHERE id=1
			");

		$sonuc=$sorgu->execute(array(
			'site_logo' => $dosya_ismi,

		));
    }

    if ($sonuc) {
        header("location:../ayarlar.php?durum=ok");
    } else {
        header("location:../ayarlar.php?durum=no");
    }
    exit;
}
