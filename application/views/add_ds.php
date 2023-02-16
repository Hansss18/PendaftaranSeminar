<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="\PendaftaranSeminar\assets/"
  data-template="vertical-menu-template-free"
>
  <head>
     <?php $this->load->view('pages/head') ?>
  </head>

  <body>
  	<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
  	<?php $this->load->view('pages/side') ?>
  	   <div class="layout-page">
  	<?php $this->load->view('pages/nav') ?>
  	 <div class="card">
                <h5 class="card-header">Absen Seminar</h5>
                <div class="table-responsive text-nowrap">
	<?php
		echo form_open('ds_controller/add_ds');
    echo "<div class='form-group'>";
    echo "<div class='col-md-3'>";
		echo form_label('Nama Seminar');
		echo form_input(array('id'=>'namasmnr','name'=>'namasmnr', 'class'=>'form-control'));
    echo "</div></div>";
    echo "<div class='form-group'>";
    echo "<div class='col-md-3'>";
		echo form_label('Tanggal Seminar');
		echo form_input(array('id'=>'tglsminar','name'=>'tglsminar','type'=>'date', 'class'=>'form-control'));
		echo "</div></div>";					
		echo form_submit(array('id'=>'submit','value'=>'Add', 'class'=>'btn btn-success'));
		echo form_close();
	?>			
                </div>
              </div>
 
</div>
</div>
</div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="\PendaftaranSeminar\assets/vendor/libs/jquery/jquery.js"></script>
    <script src="\PendaftaranSeminar\assets/vendor/libs/popper/popper.js"></script>
    <script src="\PendaftaranSeminar\assets/vendor/js/bootstrap.js"></script>
    <script src="\PendaftaranSeminar\assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="\PendaftaranSeminar\assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="\PendaftaranSeminar\assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="\PendaftaranSeminar\assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="\PendaftaranSeminar\assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>