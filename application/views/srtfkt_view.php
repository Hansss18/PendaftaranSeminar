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
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <?php $this->load->view('pages/head') ?>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

          <?php $this->load->view('pages/side') ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

            <?php $this->load->view('pages/nav') ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kelas /</span> Sertifikat</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Data Sertifikat</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Peserta</th>
                        <th>Nama Seminar</th>
                        <th>Sertifikat</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <tr>
                      <?php
                        foreach ($records as $r) {
      echo "<tr>";
      echo "<td>".$r->anmpst."</td>";
      echo "<td>".$r->anmsmnr."</td>";
      echo "<td><a href='javascript:;' class='btn btn-sm btn-outline-success'>Download</a></td>";
      echo "<td>";
      echo "<tr>";
    }
?>    
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

             

              <!-- Responsive Table -->
              
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->

            <!-- Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      
                        

      <?php $this->load->view('pages/js') ?>
  </body>
</html>
