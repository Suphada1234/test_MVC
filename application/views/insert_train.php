<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ลงทะเบียนตารางรถไฟ</h3>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url();?>index.php/manage/insert_tarin" method="post" enctype="multipart/form-data" id="form1">
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ต้นทาง</span></h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>ขบวน<span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="train" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>สถานี</label>
                        <input type="text" class="form-control" name="station">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เวลาออก</label>
                        <input type="time" class="form-control" name="time">
                    </div>
                     <div class="form-group col-md-6">
                        <label>หมายเหตุ</label>
                        <select id="" class="form-control" name="note">
                            <option selected>-</option>
                            <option value="รถธรรมดา">รถธรรมดา</option>
                            <option value="รถดีเซลราง">รถดีเซลราง</option>
                            <option value="รถด่วนดีเซลราง">รถด่วนดีเซลราง</option>
                        </select>
                    </div>
                </div>
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ห้วยราช</span></h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>ถึงเวลา</label>
                        <input type="time" class="form-control" name="to">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เวลาออก</label>
                        <input type="time" class="form-control" name="exit">
                    </div>
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ปลายทาง</span></h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label>สถานนี</label>
                        <input type="text" class="form-control" name="d_station">
                    </div>
                    <div class="form-group col-md-10">
                        <label>ถึงเวลา</label>
                        <input type="time" class="form-control" name="d_time">
                    </div>

                </div>

                <div>
                    <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">ลงทะเบียน</button>
                    <a class="btn btn-warning" href="<?php echo base_url(); ?>index.php/welcome/show">ตารางรถไฟ</a>
                </div>
            </form>

        </div>
    </div>
    <br>
    <br>
</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
