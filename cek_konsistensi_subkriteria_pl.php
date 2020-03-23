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
          	<h3><i class="fa fa-angle-right"></i> CEK KONSISTENSI </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  
                      <form class="form-horizontal style-form" method="POST" action="simpan_analisa_kriteria.php">
                          <div class="form-group">
                              <div class="col-sm-10">
						<?php
								$A = array();
								$A[0] = $_POST['pl1'];
								$A[1] = $_POST['pl2'];
								$A[2] = $_POST['pl3'];
								$A[3] = $_POST['pl4'];
								$A[4] = $_POST['pl5'];
								$A[5] = $_POST['pl6'];
								$A[6] = $_POST['pl7'];
								$A[7] = $_POST['pl8'];
								$A[8] = $_POST['pl9'];
								$A[9] = $_POST['b_pl1'];
								$A[10] = $_POST['b_pl2'];
								$A[11] = $_POST['b_pl3'];
								
								$B = array();
								$B[0] = $A[0]*$A[9];
								$B[1] = $A[1]*$A[10];
								$B[2] = $A[2]*$A[11];
								$B[3] = $B[0]+$B[1]+$B[2];
								$B[4] = $A[3]*$A[9];
								$B[5] = $A[4]*$A[10];
								$B[6] = $A[5]*$A[11];
								$B[7] = $B[4]+$B[5]+$B[6];
								$B[8] = $A[6]*$A[9];
								$B[9] = $A[7]*$A[10];
								$B[10] = $A[8]*$A[11];
								$B[11] = $B[8]+$B[9]+$B[10];
								
								$C = array();
								$C[0] = $B[3];
								$C[1] = $A[9];
								$C[2] = $B[3]+$A[9];
								$C[3] = $B[7];
								$C[4] = $A[10];
								$C[5] = $B[7]+$A[10];
								$C[6] = $B[11];
								$C[7] = $A[11];
								$C[8] = $B[11]+$A[11];
								$C[9] = $C[2]+$C[5]+$C[8];
								$C[10] = $C[9]/3;
								$C[11] = ($C[10]-3)/(3-1);
								$C[12] = $C[11]/0.58;
								
							?>
								<h3 align="center"> Matrik Perbandingan Berpasangan </h3>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<tr>
								<td class="numeric" > PL </td>
								<td class="numeric" > Rajin </td>
								<td class="numeric" > Sedang  </td>
								<td class="numeric" > Malas  </td>
								</tr>
								
								<?php
								echo "<tr>";
								echo "	<td> Rajin </td>";

								for($k=0; $k<=2; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr> <tr>";
								echo "	<td> Sedang </td>";
								for($k=3; $k<=5; $k+=1)
								{
									 echo "<td>$A[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Malas </td>";
								for($k=6; $k<=8; $k+=1)
								{
									 echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								?>
								
								
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="200" >
								<h3 align="center"> Bobot </h3>
								<tr>
								<td class="numeric" > Bobot </td>
								</tr>
								<?php
								echo "<tr>";
								for($k=9; $k<=9; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								
								for($k=10; $k<=10; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								
								for($k=11; $k<=11; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								?>
								
							<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<h3 align="center"> Matrik Perkalian Baris </h3>
								<tr>
								<td class="numeric" > PL </td>
								<td class="numeric" > Rajin </td>
								<td class="numeric" > Sedang  </td>
								<td class="numeric" > Malas  </td>
								<td class="numeric" > Jumlah  </td>
								</tr>
								
								<?php
								echo "<tr>";
								echo "	<td> Rajin </td>";

								for($k=0; $k<=3; $k+=1)
								{
									echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Sedang </td>";
								for($k=4; $k<=7; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Malas </td>";
								for($k=8; $k<=11; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								
								echo "</tr>";
								?>
								</table>
								
								
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<h3 align="center"> Matrik Rasio Konsistensi </h3>
								<tr>
								<td class="numeric" > PL </td>
								<td class="numeric" > Jumlah </td>
								<td class="numeric" > Prioritas  </td>
								<td class="numeric" > Hasil  </td>
								</tr>
								
								<?php
								echo "<tr>";
								echo "	<td> Rajin </td>";

								for($k=0; $k<=2; $k+=1)
								{
									echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Sedang </td>";
								for($k=3; $k<=5; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Malas </td>";
								for($k=6; $k<=8; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Jumlah </td>";
								for($k=9; $k<=9; $k+=1)
								{
									echo "<td></td>";
									echo "<td></td>";
									 echo "<td>$C[$k]</td>";
								}
								?>
								
								<table class="table table-bordered table-striped table-condensed" border="0" align="center" width="700" >
								<?php
								echo "</tr><tr>";
								echo "	<td> Amak </td>";
								for($k=10; $k<=10; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								
								echo "</tr><tr>";
								echo "	<td> CI </td>";
								for($k=11; $k<=11; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								
								echo "</tr><tr>";
								echo "	<td> CR </td>";
								for($k=12; $k<=12; $k+=1)
								{	
									 echo "<td>$C[$k]</td>";
								}
								
								echo "</tr>";
								?>
								</table>
								<table class="table table-bordered table-striped table-condensed" border="0" align="center" width="700" >
								
								Jadi Bobot yang telah dihitung <?php if ($C[12] < 0.1) {
								 echo "Konsisten";
								} else
								echo"Tidak Konsisten";?>
								
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
