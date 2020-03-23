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
								$A[0] = $_POST['ab1'];
								$A[1] = $_POST['ab2'];
								$A[2] = $_POST['ab3'];
								$A[3] = $_POST['ab4'];
								$A[4] = $_POST['ab5'];
								$A[5] = $_POST['ab6'];
								$A[6] = $_POST['ab7'];
								$A[7] = $_POST['ab8'];
								$A[8] = $_POST['ab9'];
								$A[9] = $_POST['ab10'];
								$A[10] = $_POST['ab11'];
								$A[11] = $_POST['ab12'];
								$A[12] = $_POST['ab13'];
								$A[13] = $_POST['ab14'];
								$A[14] = $_POST['ab15'];
								$A[15] = $_POST['ab16'];
								$A[16] = $_POST['b_ab1'];
								$A[17] = $_POST['b_ab2'];
								$A[18] = $_POST['b_ab3'];
								$A[19] = $_POST['b_ab4'];
								
								$B = array();
								$B[0] = $A[0]*$A[16];
								$B[1] = $A[1]*$A[17];
								$B[2] = $A[2]*$A[18];
								$B[3] = $A[3]*$A[19];
								$B[4] = $B[0]+$B[1]+$B[2]+$B[3];
								$B[5] = $A[4]*$A[16];
								$B[6] = $A[5]*$A[17];
								$B[7] = $A[6]*$A[18];
								$B[8] = $A[7]*$A[19];
								$B[9] = $B[5]+$B[6]+$B[7]+$B[8];
								$B[10] = $A[8]*$A[16];
								$B[11] = $A[9]*$A[17];
								$B[12] = $A[10]*$A[18];
								$B[13] = $A[11]*$A[19];
								$B[14] = $B[10]+$B[11]+$B[12]+$B[13];
								$B[15] = $A[12]*$A[16];
								$B[16] = $A[13]*$A[17];
								$B[17] = $A[14]*$A[18];
								$B[18] = $A[15]*$A[19];
								$B[19] = $B[15]+$B[16]+$B[17]+$B[18];
								
								$C = array();
								$C[0] = $B[4];
								$C[1] = $A[16];
								$C[2] = $B[4]+$A[16];
								$C[3] = $B[9];
								$C[4] = $A[17];
								$C[5] = $B[9]+$A[17];
								$C[6] = $B[14];
								$C[7] = $A[18];
								$C[8] = $B[14]+$A[18];
								$C[9] = $B[19];
								$C[10] = $A[19];
								$C[11] = $B[19]+$A[19];
								$C[12] = $C[2]+$C[5]+$C[8]+$C[11];
								$C[13] = $C[12]/4;
								$C[14] = ($C[13]-4)/(4-1);
								$C[15] = $C[14]/0.9;
								
							?>
								<h3 align="center"> Matrik Perbandingan Berpasangan </h3>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<tr>
								<td class="numeric" > AB </td>
								<td class="numeric" > 0-3 </td>
								<td class="numeric" > 4-6  </td>
								<td class="numeric" > 7-9  </td>
								<td class="numeric" > >10 </td>
								</tr>
								
								<?php
								echo "<tr>";
								echo "	<td> 0-3 </td>";

								for($k=0; $k<=3; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr> <tr>";
								echo "	<td> 4-6 </td>";
								for($k=4; $k<=7; $k+=1)
								{
									 echo "<td>$A[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 7-9 </td>";
								for($k=8; $k<=11; $k+=1)
								{
									 echo "<td>$A[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> >10 </td>";
								for($k=12; $k<=15; $k+=1)
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
								

								for($k=16; $k<=16; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								
								for($k=17; $k<=17; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								
								for($k=18; $k<=18; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								
								for($k=19; $k<=19; $k+=1)
								{
									echo "<td>$A[$k]</td>";
								}
								echo "</tr>";
								?>
								
							
							
							
							<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<h3 align="center"> Matrik Perkalian Baris </h3>
								<tr>
								<td class="numeric" > AB </td>
								<td class="numeric" > 0-3 </td>
								<td class="numeric" > 4-6  </td>
								<td class="numeric" > 7-9  </td>
								<td class="numeric" > >10 </td>
								<td class="numeric" > Jumlah  </td>
								</tr>
								
								<?php
								echo "<tr>";
								echo "	<td> 0-3 </td>";

								for($k=0; $k<=4; $k+=1)
								{
									echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 4-6 </td>";
								for($k=5; $k<=9; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 7-9 </td>";
								for($k=10; $k<=14; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> >10 </td>";
								for($k=15; $k<=19; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								
								echo "</tr>";
								?>
								</table>
								
								
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<h3 align="center"> Matrik Rasio Konsistensi </h3>
								<tr>
								<td class="numeric" > AB </td>
								<td class="numeric" > Jumlah </td>
								<td class="numeric" > Prioritas  </td>
								<td class="numeric" > Hasil  </td>
								</tr>
								
								<?php
								echo "<tr>";
								echo "	<td> 0-3 </td>";

								for($k=0; $k<=2; $k+=1)
								{
									echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 4-6 </td>";
								for($k=3; $k<=5; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 7-9 </td>";
								for($k=6; $k<=8; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> >10 </td>";
								for($k=9; $k<=11; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> Jumlah </td>";
								for($k=12; $k<=12; $k+=1)
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
								for($k=13; $k<=13; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								
								echo "</tr><tr>";
								echo "	<td> CI </td>";
								for($k=14; $k<=14; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								
								echo "</tr><tr>";
								echo "	<td> CR </td>";
								for($k=15; $k<=15; $k+=1)
								{	
									 echo "<td>$C[$k]</td>";
								}
								
								echo "</tr>";
								?>
								</table>
								<table class="table table-bordered table-striped table-condensed" border="0" align="center" width="700" >
								
								Jadi Bobot yang telah dihitung <?php if ($C[15] < 0.1) {
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
