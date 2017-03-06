<!DOCTYPE html>
<head>
    <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
    <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
    <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
    <style type="text/css">
        body {
            background-color: #0ca3d2;
        }
        .indent-small {
            margin-left: 5px;
        }
        .form-group.internal {
            margin-bottom: 0;
        }

        .dialog-panel {
            margin: 10px;
        }

        .datepicker-dropdown {
            z-index: 200 !important;
        }

        .panel-body {  

            background: #e5e5e5; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover,  #e5e5e5 0%, #ffffff 100%); /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#e5e5e5), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover,  #e5e5e5 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover,  #e5e5e5 0%,#ffffff 100%); /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover,  #e5e5e5 0%,#ffffff 100%); /* IE10+ */
            background: radial-gradient(ellipse at center,  #e5e5e5 0%,#ffffff 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5e5e5', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

            font: 600 15px "Open Sans",Arial,sans-serif;
        }

        label.control-label {
            font-weight: 600;
            color: #777;  
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='panel panel-primary dialog-panel'>
            <div class='panel-heading'>
                <h5><b>FORM INPUT BIODATA</b></h5>
            </div>
            <div class='panel-body'>
                <form class='form-horizontal' role='form'>
                    <?php
                    echo form_open('welcome/post');
                    ?>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Nama Lengkap</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input type="text" class='form-control ' id='id_checkin' name="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <label class='control-label col-md-3' for='id_checkout'>Nama Instansi</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkout' placeholder="Nama Instansi">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Tanggal Lahir</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <label class='control-label col-md-3' for='id_checkout'>Alamat Instansi</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkout' placeholder="Jalan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>NIP</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Nomor Induk Pegawai">
                                </div>
                            </div>
                            <label class='control-label col-md-3' for='id_checkout'>Kecamatan</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkout' placeholder="Kecamatan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Pend. Terakhir</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input type="text" class='form-control ' id='id_checkin' name="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
                                </div>
                            </div>
                            <label class='control-label col-md-3' for='id_checkout'>Kab./Kota</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkout' placeholder="Kabupaten/Kota">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Jabatan</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input type="text" class='form-control ' id='id_checkin' name="jabatan" placeholder="Jabatan">
                                </div>
                            </div>
                            <label class='control-label col-md-3' for='id_checkout'>Provinsi</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkout' placeholder="Provinsi">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Golongan/Pangkat</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Golongan/Pangkat">
                                </div>
                            </div>
                            <label class='control-label col-md-3' for='id_checkout'>Telpon/HP</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkout' placeholder="Telpon/HP">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>NPWP</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="NPWP">
                                </div>
                            </div>
                            <label class='control-label col-md-3' for='id_checkout'>Email</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkout' placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Alamat Rumah</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Jalan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Kecamatan</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Kecamatan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Kab./Kota</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Kabupaten/Kota">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Provinsi</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Provinsi">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Telpon/HP</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Telpon/HP">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Email</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control ' id='id_checkin' placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-offset-4 col-md-3'>
                            <button class='btn-lg btn-success' type='submit' name="submit">Submit</button>
                            <?php echo anchor('welcome','kembali',array('class'=>'btn btn-primary btn-sm'))?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.multiselect').multiselect();
            $('.datepicker').datepicker();
        });
    </script>
</body>