<?php
session_start();
if (empty($_SESSION['username']) AND
empty($_SESSION['password'])){
// Apabila belum login maka akan diarahkan ke form login
 header('location:index.php');
}
else{
if ( $_SESSION['level']=='admin' ){
// Jika sudah login dan levelnya adalah admin maka akanditampilkan halaman web
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SISTEM PENDUKUNG KEPUTUSAN</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
<header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div  data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Analityc Hirarchy Process</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
			
            <div class="top-menu">
			
            	<ul class="nav pull-right top-menu">
				
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
			<div class="top-menu">
			
            	<ul class="nav pull-right top-menu">
				<li><a href="index.html" class="logo"> <b>SMA MUhammadiyah Singaparna</b> </a></li>
                   
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  
              	  	
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>M E N U</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Input Data</span>
                      </a>
                      <ul class="sub">
                         <li><a  href="input_data_kriteria.php">Data Kriteria</a></li>
                          
						  <li class="sub-menu">
							<a href="javascript:;" >
                          
							<span>Data Subkriteria</span>
							</a>
							<ul class="sub">
								<li><a  href="input_data_subkriteria_ab.php">Data Subkriteria AB</a></li>
								<li><a  href="input_data_subkriteria_sk.php">Data Subkriteria SK</a></li>
								<li><a  href="input_data_subkriteria_pl.php">Data Subkriteria PL</a></li>
								<li><a  href="input_data_subkriteria_ptt.php">Data Subkriteria PTT</a></li>
								<li><a  href="input_data_subkriteria_na.php">Data Subkriteria NA</a></li>
							</ul>
						</li>
                          <li><a  href="input_data_alternatif.php">Data Alternatif</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Analisa Data</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_data_kriteria.php">Analisa Kriteria</a></li>
                          
						  <li class="sub-menu">
							<a href="javascript:;" >
                          
							<span>Analisa Subkriteria</span>
							</a>
							<ul class="sub">
								<li><a  href="tampil_data_subkriteria_ab.php">Analisa Subkriteria AB</a></li>
								<li><a  href="tampil_data_subkriteria_sk.php">Analisa Subkriteria SK</a></li>
								<li><a  href="tampil_data_subkriteria_pl.php">Analisa Subkriteria PL</a></li>
								<li><a  href="tampil_data_subkriteria_ptt.php">Analisa Subkriteria PT</a></li>
								<li><a  href="tampil_data_subkriteria_na.php">Analisa Subkriteria NA</a></li>
							</ul>
						</li>
                          <li><a  href="tampil_data_alternatif.php">Analisa Alternatif</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Laporan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_hasil_analisa_alternatif.php">Hasil Siswa Bermasalah</a></li>
                          <li><a  href="laporan.php">Cetak Siswa Bermasalah</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> DATA SUBKRITERIA ABSENSI </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  
                      <form class="form-horizontal style-form" method="POST" action="aksi_input_data_kriteria.php">
                          <div class="form-group">
                              <div class="col-sm-10">
								<table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
								 <th>No</th>
								 <th> AB2 </th>
								 <th> AB3 </th>
								 <th> AB4 </th>
								 <th> AB7 </th>
								 <th> AB8 </th>
								 <th> AB12 </th>
								 <th> Aksi </th>
								 </tr>
                              <tr>
							   <?php
								 include "koneksi.php";
								 $i=0;
								 $sql="select * from t_absensi";
								 $tampil=mysql_query($sql);
								 while($data=mysql_fetch_array($tampil)){
								 $i++;
								 echo"
								 <tr>
								 <td>$i</td>
								 <td>$data[ab2]</td>
								 <td>$data[ab3]</td>
								 <td>$data[ab4]</td>
								 <td>$data[ab7]</td>
								 <td>$data[ab8]</td>
								 <td>$data[ab12]</td>
								 <td>
								<a href='edit_data_subkriteria_ab.php?id_absensi=$data[id_absensi]'>Edit</a>
								<a href='aksi_hapus_subkriteria_ab.php?id_absensi=$data[id_absensi]'>Hapus</a>
								<a href='analisa_subkriteria_ab.php?id_absensi=$data[id_absensi]'>Analisa</a>
								 </td>
								 </tr>";
								 }
								 ?>
                              </tbody>
                          </table>
                              </div>
                          </div>
                          
          	
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              SISTEM PENDUKUNG KEPUTUSAN MONITORING SISWA BERMASALAH
              <a href="form_component.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php }else { echo "Anda bukan Administraor"; }
}
?>