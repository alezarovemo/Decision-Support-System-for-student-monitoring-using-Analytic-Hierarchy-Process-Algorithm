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
          	<h3><i class="fa fa-angle-right"></i> ANALISA SUBKRITERIA ABSENSI</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST" action="simpan_analisa_ab.php">
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
								$A[12]  = $_POST['ab13'];
								$A[13] = $_POST['ab14'];
								$A[14] = $_POST['ab15'];
								$A[15]  = $_POST['ab16'];
								$A[16] = $_POST['jml1'];
								$A[17] = $_POST['jml2'];
								$A[18] = $_POST['jml3'];
								$A[19] = $_POST['jml4'];

								$B = array();
								$B[0] = $A[0];
								$B[1] = $A[1];
								$B[2] = $A[2];
								$B[3] = $A[3];
								$B[4] = $A[5]/$A[1];
								$B[5] = $A[5];
								$B[6] = $A[6];
								$B[7] = $A[7];
								$B[8] = $A[10]/$A[2];
								$B[9] = $A[10]/$A[6];
								$B[10] = $A[10];
								$B[11] = $A[11]; 
								$B[12] = $A[15]/$A[3];
								$B[13] = $A[15]/$A[7];
								$B[14] = $A[15]/$A[11];
								$B[15] = $A[15];
								$B[16] = $B[0]+$B[4]+$B[8]+$B[12];
								$B[17] = $B[1]+$B[5]+$B[9]+$B[13];
								$B[18] = $B[2]+$B[6]+$B[10]+$B[14];
								$B[19] = $B[3]+$B[7]+$B[11]+$B[15];
								
								
								$C = array();
								$C[0] = $B[0]/$B[16];
								$C[1] = $B[1]/$B[17];
								$C[2] = $B[2]/$B[18];
								$C[3] = $B[3]/$B[19];
								$C[4] = $C[0]+$C[1]+$C[2]+$C[3];
								$C[5] = $C[4]/4;
								$C[6] = $B[4]/$B[16];
								$C[7] = $B[5]/$B[17];
								$C[8] = $B[6]/$B[18];
								$C[9] = $B[7]/$B[19];
								$C[10] = $C[6]+$C[7]+$C[8]+$C[9];
								$C[11] = $C[10]/4;
								$C[12] = $B[8]/$B[16];
								$C[13] = $B[9]/$B[17];
								$C[14] = $B[10]/$B[18];
								$C[15] = $B[11]/$B[19];
								$C[16] = $C[12]+$C[13]+$C[14]+$C[15];
								$C[17] = $C[16]/4;
								$C[18] = $B[12]/$B[16];
								$C[19] = $B[13]/$B[17];
								$C[20] = $B[14]/$B[18];
								$C[21] = $B[15]/$B[19];
								$C[22] = $C[18]+$C[19]+$C[20]+$C[21]; 	
								$C[23] = $C[22]/4;
								
								?>
								<h4 align="center">MATRIK PERBANDINGAN BERPASANGAN</h4>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="600" >
								<tr>
								<td> AB </td>
								<td> 0-3 </td>
								<td> 4-6  </td>
								<td> 7-9  </td>
								<td> >10  </td>
								</tr>
								<?php
								echo "<tr>";
								echo "	<td> 0-3 </td>";

								for($k=0; $k<=3; $k+=1)
								{
									echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 4-6 </td>";
								for($k=4; $k<=7; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 7-9 </td>";
								for($k=8; $k<=11; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> >10 </td>";
								for($k=12; $k<=15; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								
								echo "<tr>";
								echo "	<td> Jumlah </td>";
								for($k=16; $k<=19; $k+=1)
								{
									echo "<td>$B[$k]</td>";
								}
								
								echo "</tr>";
								?>
								</table>
								
								<h4 align="center"> MATRIK NILAI KERJA </h4>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="1000" >
								<tr>
								<td> AB </td>
								<td> 0-3 </td>
								<td> 4-6 </td>
								<td> 7-9 </td>
								<td> >10 </td>
								<td>Jumlah </td>
								<td>Prioritas </td>
								</tr>
								<?php
								echo "<tr>";
								echo "	<td> 0-3 </td>";
								for($k=0; $k<=5; $k+=1)
								{
									echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 4-6 </td>";
								for($k=6; $k<=11; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> 7-9 </td>";
								for($k=12; $k<=17; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> >10 </td>";
								for($k=18; $k<=23; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}								
								?>
								<input type="hidden" name="b_ab1" value="<?php echo "$C[5]"; ?>" >
								<input type="hidden" name="b_ab2" value="<?php echo "$C[11]"; ?>" >
								<input type="hidden" name="b_ab3" value="<?php echo "$C[17]"; ?>" >
								<input type="hidden" name="b_ab4" value="<?php echo "$C[23]"; ?>" >

								
								<input type="hidden" name="ab1" value="<?php echo "$B[0]"; ?>" >
								<input type="hidden" name="ab2" value="<?php echo "$B[1]"; ?>" >
								<input type="hidden" name="ab3" value="<?php echo "$B[2]"; ?>" >
								<input type="hidden" name="ab4" value="<?php echo "$B[3]"; ?>" >
								<input type="hidden" name="ab5" value="<?php echo "$B[4]"; ?>" >
								<input type="hidden" name="ab6" value="<?php echo "$B[5]"; ?>" >
								<input type="hidden" name="ab7" value="<?php echo "$B[6]"; ?>" >
								<input type="hidden" name="ab8" value="<?php echo "$B[7]"; ?>" >
								<input type="hidden" name="ab9" value="<?php echo "$B[8]"; ?>" >
								<input type="hidden" name="ab10" value="<?php echo "$B[9]"; ?>" >
								<input type="hidden" name="ab11" value="<?php echo "$B[10]"; ?>" >
								<input type="hidden" name="ab12" value="<?php echo "$B[11]"; ?>" >
								<input type="hidden" name="ab13" value="<?php echo "$B[12]"; ?>" >
								<input type="hidden" name="ab14" value="<?php echo "$B[13]"; ?>" >
								<input type="hidden" name="ab15" value="<?php echo "$B[14]"; ?>" >
								<input type="hidden" name="ab16" value="<?php echo "$B[15]"; ?>" >
								<input type="hidden" name="ab17" value="<?php echo "$B[16]"; ?>" >
								<input type="hidden" name="ab18" value="<?php echo "$B[17]"; ?>" >
								<input type="hidden" name="ab19" value="<?php echo "$B[18]"; ?>" >
								<input type="hidden" name="ab20" value="<?php echo "$B[19]"; ?>" >
								</table> 
								<input type="submit" name="simpan" value="Simpan">	
								</form>
								
								<table>
								<form method="POST" action="cek_konsistensi_subkriteria_ab.php">
								<input type="hidden" name="b_ab1" value="<?php echo "$C[5]"; ?>" >
								<input type="hidden" name="b_ab2" value="<?php echo "$C[11]"; ?>" >
								<input type="hidden" name="b_ab3" value="<?php echo "$C[17]"; ?>" >
								<input type="hidden" name="b_ab4" value="<?php echo "$C[23]"; ?>" >

								
								<input type="hidden" name="ab1" value="<?php echo "$B[0]"; ?>" >
								<input type="hidden" name="ab2" value="<?php echo "$B[1]"; ?>" >
								<input type="hidden" name="ab3" value="<?php echo "$B[2]"; ?>" >
								<input type="hidden" name="ab4" value="<?php echo "$B[3]"; ?>" >
								<input type="hidden" name="ab5" value="<?php echo "$B[4]"; ?>" >
								<input type="hidden" name="ab6" value="<?php echo "$B[5]"; ?>" >
								<input type="hidden" name="ab7" value="<?php echo "$B[6]"; ?>" >
								<input type="hidden" name="ab8" value="<?php echo "$B[7]"; ?>" >
								<input type="hidden" name="ab9" value="<?php echo "$B[8]"; ?>" >
								<input type="hidden" name="ab10" value="<?php echo "$B[9]"; ?>" >
								<input type="hidden" name="ab11" value="<?php echo "$B[10]"; ?>" >
								<input type="hidden" name="ab12" value="<?php echo "$B[11]"; ?>" >
								<input type="hidden" name="ab13" value="<?php echo "$B[12]"; ?>" >
								<input type="hidden" name="ab14" value="<?php echo "$B[13]"; ?>" >
								<input type="hidden" name="ab15" value="<?php echo "$B[14]"; ?>" >
								<input type="hidden" name="ab16" value="<?php echo "$B[15]"; ?>" >
								<input type="submit" name="cek" value="Cek Konsistensi">
								</form>
								</table>
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
              <a href="" class="go-top">
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