<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Form Input Rakor</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="container">  
            <form class="form-inline" id="contact" action="" method="post">
                <h3>Form Biodata</h3>
                <h4>A. Identitas Pribadi</h4>
                <div class="form-group" id="">
                    <input placeholder="Nama Lengkap" type="text" class="form-control" />
                </div>
                <div class="form-group" id="">
                    <input placeholder="NIP" type="text" class="form-control" />
                </div>
                <div class="form-group" id="">
                    <input placeholder="Pendidikan Terakhir" type="text" class="form-control" />
                </div>
                <div class="form-group" id="">
                    <input placeholder="Jabatan" type="text" class="form-control" />
                </div>
                <div class="form-group" id="">
                    <input placeholder="Golongan/Pangkat" type="text" class="form-control" />
                </div>
                <div class="form-group" id="">
                    <input placeholder="NPWP" type="text" class="form-control" />
                </div>
                <div class="form-group" id="">
                    <textarea placeholder="Alamat Rumah" tabindex="5" required></textarea>
                    <h4>B. Identitas Instansi</h4>
                    <div class="form-group" id="">
                        <input placeholder="Nama Instansi" type="text" class="form-control" />
                    </div>
                    <div class="form-group" id="">
                        <textarea placeholder="Alamat Instansi" tabindex="5" required></textarea>
                    </div>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                </div>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
        </div>

    </body>
</html>
