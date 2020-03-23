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
          	<h3><i class="fa fa-angle-right"></i> ANALISA SUBKRITERIA PERILAKU </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST" action="simpan_analisa_pl.php">
                          <div class="form-group">
                              <div class="col-sm-10">
								<?php
								$A = array();
								$A[0] = $_POST['p1'];
								$A[1] = $_POST['p2'];
								$A[2] = $_POST['p3'];
								$A[3] = $_POST['p4'];
								$A[4] = $_POST['p5'];
								$A[5] = $_POST['p6'];
								$A[6] = $_POST['p7'];
								$A[7] = $_POST['p8'];
								$A[8] = $_POST['p9'];
								$A[9] = $_POST['jml1'];
								$A[10] = $_POST['jml2'];
								$A[11] = $_POST['jml3'];

								$B = array();
								$B[0] = $A[0];
								$B[1] = $A[1];
								$B[2] = $A[2];
								$B[3] = ($A[4]/$A[1]);
								$B[4] = $A[4];
								$B[5] = $A[5];
								$B[6] = ($A[8]/$A[2]);
								$B[7] = ($A[8]/$A[5]);
								$B[8] = $A[8];
								
								
								$C = array();
								$C[0] = $B[0];
								$C[1] = $B[1];
								$C[2] = $B[2];
								$C[3] = $B[3];
								$C[4] = $B[4];
								$C[5] = $B[5];
								$C[6] = $B[6];
								$C[7] = $B[7];
								$C[8] = $B[8];
								$C[9] = ($B[0]+$B[3]+$B[6]);
								$C[10] = ($B[1]+$B[4]+$B[7]);
								$C[11] = ($B[2]+$B[5]+$B[8]);
								
								$D = array();
								$D[0] = ($C[0]/$C[9]);
								$D[1] = ($C[1]/$C[10]);
								$D[2] = ($C[2]/$C[11]);
								$D[3] = ($D[0]+$D[1]+$D[2]);
								$D[4] = $D[3]/3;
								$D[5] = ($C[3]/$C[9]);
								$D[6] = ($C[4]/$C[10]);
								$D[7] = ($C[5]/$C[11]);
								$D[8] = ($D[5]+$D[6]+$D[7]);
								$D[9] = $D[8]/3;
								$D[10] = ($C[6]/$C[9]);
								$D[11] = ($C[7]/$C[10]);
								$D[12] = ($C[8]/$C[11]);
								$D[13] = ($D[10]+$D[11]+$D[12]);
								$D[14] = $D[13]/3;
								

								
								?>
								<h4 align="center">MATRIK PERBANDINGAN BERPASANGAN</h4>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<tr>
								<td> PL </td>
								<td> Rajin </td>
								<td> Sedang </td>
								<td> Malas </td>
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
								
								echo "<tr>";
								echo "	<td> Jumlah</td>";
								for($k=9; $k<=11; $k+=1)
								{
									echo "<td>$C[$k]</td>";
								}
								
								echo "</tr>";
								?>
								</table>
								
								<h4 align="center"> MATRIK NILAI KERJA </h4>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="1000" >
								<tr>
								<td> PL </td>
								<td> Rajin </td>
								<td> Sedang </td>
								<td> Malas </td>
								<td>Jumlah </td>
								<td>Prioritas </td>
								</tr>
								<?php
								echo "<tr>";
								echo "	<td> Baik </td>";
								for($k=0; $k<=4; $k+=1)
								{
									echo "<td>$D[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Cukup </td>";
								for($k=5; $k<=9; $k+=1)
								{
									 echo "<td>$D[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Buruk </td>";
								for($k=10; $k<=14; $k+=1)
								{
									 echo "<td>$D[$k]</td>";
								}
								?>
								
								<input type="hidden" name="b_pl1" value="<?php echo "$D[4]"; ?>" >
								<input type="hidden" name="b_pl2" value="<?php echo "$D[9]"; ?>" >
								<input type="hidden" name="b_pl3" value="<?php echo "$D[14]"; ?>" >

								
								<input type="hidden" name="pl1" value="<?php echo "$C[0]"; ?>" >
								<input type="hidden" name="pl2" value="<?php echo "$C[1]"; ?>" >
								<input type="hidden" name="pl3" value="<?php echo "$C[2]"; ?>" >
								<input type="hidden" name="pl4" value="<?php echo "$C[3]"; ?>" >
								<input type="hidden" name="pl5" value="<?php echo "$C[4]"; ?>" >
								<input type="hidden" name="pl6" value="<?php echo "$C[5]"; ?>" >
								<input type="hidden" name="pl7" value="<?php echo "$C[6]"; ?>" >
								<input type="hidden" name="pl8" value="<?php echo "$C[7]"; ?>" >
								<input type="hidden" name="pl9" value="<?php echo "$C[8]"; ?>" >
								<input type="hidden" name="pl10" value="<?php echo "$C[9]"; ?>" >
								<input type="hidden" name="pl11" value="<?php echo "$C[10]"; ?>" >
								<input type="hidden" name="pl12" value="<?php echo "$C[11]"; ?>" >
								
								</table> 
								<input type="submit" name="simpan" value="Simpan">
								
								</form>
								</table> 
								
								<table>
								<form method="POST" action="cek_konsistensi_subkriteria_pl.php">
								<input type="hidden" name="b_pl1" value="<?php echo "$D[4]"; ?>" >
								<input type="hidden" name="b_pl2" value="<?php echo "$D[9]"; ?>" >
								<input type="hidden" name="b_pl3" value="<?php echo "$D[14]"; ?>" >

								
								<input type="hidden" name="pl1" value="<?php echo "$C[0]"; ?>" >
								<input type="hidden" name="pl2" value="<?php echo "$C[1]"; ?>" >
								<input type="hidden" name="pl3" value="<?php echo "$C[2]"; ?>" >
								<input type="hidden" name="pl4" value="<?php echo "$C[3]"; ?>" >
								<input type="hidden" name="pl5" value="<?php echo "$C[4]"; ?>" >
								<input type="hidden" name="pl6" value="<?php echo "$C[5]"; ?>" >
								<input type="hidden" name="pl7" value="<?php echo "$C[6]"; ?>" >
								<input type="hidden" name="pl8" value="<?php echo "$C[7]"; ?>" >
								<input type="hidden" name="pl9" value="<?php echo "$C[8]"; ?>" >
								<input type="submit" name="cek" value="Cek Konsistensi">
								</form>
								</table>
                              </div>
                          </div>
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Sistem Pendukung Keputusan Monitoring Siswa Bermasalah
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