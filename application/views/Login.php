<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succession - Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <style>
        p.footer
        {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div>
        <div class="d-block" style="width:40%;margin-left:auto;margin-right:auto;"><img class="img-fluid d-block" src="<?php echo base_url(); ?>assets/img/bws-logo.png" style="width:49%;height:auto;margin-left:auto;margin-right:auto;min-width:153px;min-height:102px;">
            <?php 
                echo validation_errors();
                echo form_open("User/Login");
            ?>
                <label style="font-size:20px;">Payroll ID</label>
                <input class="form-control" type="text" name="empPID" required="" placeholder="Enter Payroll ID" minlength="4">
                <label style="margin-top:8px;font-size:20px;">Password</label>
                <input class="form-control" type="password" name="empPassword" required="" placeholder="Enter Password" minlength="6">
                <a class="d-block" href="forgot.php?action=password" target="_blank" style="color:rgb(55,107,163);font-size:13px;margin-top:7px;">I forgot my Password !</a>
                <button class="btn btn-primary btn-block" type="submit" name="empLoginSubmit" style="margin-top:14px;background-color:#ff8c00;">Login</button>
            </form>
        </div>
    </div>