<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสมาชิกศิษย์เก่า</title>

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
    <div class="row">
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ตารางรถไฟ</h3>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ขบวน</th>
                        <th>สถานี ต้นทาง</th>
                        <th>เวลาออก ต้นทาง</th>
                        <th>ถึง ห้วยราช</th>
                        <th>ออกจาก ห้วยราช</th>
                        <th>สถานนี ปลายทาง</th>
                        <th>ถึงเวลา ปลายทาง</th>
                        <th>หมายเหตุ</th>
                    </tr>
                </thead>
                 <tbody>
                    <?php foreach ($query->result_array() as $rs) { ?>
                        <tr>
                            <td><?php echo $rs['train']; ?></td>
                            <td><?php echo $rs['station']; ?></td>
                            <td><?php echo $rs['time']; ?></td>
                            <td><?php echo $rs['to']; ?></td>
                            <td><?php echo $rs['exit']; ?></td>
                            <td><?php echo $rs['d_station']; ?></td>
                            <td><?php echo $rs['d_time']; ?></td>
                            <td><?php echo $rs['note']; ?></td>
     
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
            <a class="btn btn-warning" href="<?php echo base_url(); ?>index.php/welcome/index">ลงทะเบียน</a>
        </div>
        <div class="col-lg-1">
            
        </div>
    </div>
</div>
<!--  -->
<body>
<script>
$(document).ready(function() {
    $('#example').DataTable();
    $('#table_details').DataTable();
});
</script>