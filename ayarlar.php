<?php require 'inc/header.php';?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold text-primary">Ayarlar</h5>
                </div>
                <div class="card-body">

                    <form action="config/update.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Logo</label>
                                <input type="file" class="form-control" name="site_logo">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Baslik</label>
                                <input type="text" class="form-control" name="site_baslik"  value="<?= $ayar['site_baslik']?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Aciklama</label>
                                <input type="text" class="form-control" name="site_aciklama"  value="<?= $ayar['site_aciklama']?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site Link</label>
                                <input type="text" class="form-control" name="site_link"  value="<?= $ayar['site_link']?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site sahibi mail adress</label>
                                <input type="email" class="form-control" name="site_sahip"  value="<?= $ayar['site_sahip']?>">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Site HOST adress</label>
                                <input type="text" class="form-control" name="site_host"  value="<?= $ayar['site_host']?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mail adress</label>
                                <input type="email" class="form-control" name="site_email"  value="<?= $ayar['site_email']?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Mail Port Numarası</label>
                                <input type="text" class="form-control" name="site_port"  value="<?= $ayar['site_port']?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mail şifre</label>
                                <input type="email" class="form-control" name="site_sifre"  value="<?= $ayar['site_sifre']?>">
                            </div>
                        </div>


                        <div class="form-row">
                            <button type="submit" class="btn btn-primary" name="ayarkaydet">Kaydet</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/footer.php'; ?>