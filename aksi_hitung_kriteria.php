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
          	<h3><i class="fa fa-angle-right"></i> PERHITUNGAN KRITERIA </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  
                      <form class="form-horizontal style-form" method="POST" action="simpan_analisa_kriteria.php">
                          <div class="form-group">
                              <div class="col-sm-10">
								  
								<?php
								$A = array();
								$A[0] = $_POST['k1'];
								$A[1] = $_POST['k2'];
								$A[2] = $_POST['k3'];
								$A[3] = $_POST['k4'];
								$A[4] = $_POST['k5'];
								$A[5] = $_POST['k6'];
								$A[6] = $_POST['k7'];
								$A[7] = $_POST['k8'];
								$A[8] = $_POST['k9'];
								$A[9] = $_POST['k10'];
								$A[10] = $_POST['k11'];
								$A[11] = $_POST['k12'];
								$A[12] = $_POST['k13'];
								$A[13] = $_POST['k14'];
								$A[14] = $_POST['k15'];
								$A[15] = $_POST['k16'];
								$A[16] = $_POST['k17'];
								$A[17] = $_POST['k18'];
								$A[18] = $_POST['k19'];
								$A[19] = $_POST['k20'];
								$A[20] = $_POST['k21'];
								$A[21] = $_POST['k22'];
								$A[22] = $_POST['k23'];
								$A[23] = $_POST['k24'];
								$A[24] = $_POST['k25'];
								$A[25] = $_POST['jml1'];
								$A[26] = $_POST['jml2'];
								$A[27] = $_POST['jml3'];
								$A[28] = $_POST['jml4'];
								$A[29] = $_POST['jml5'];

								$B = array();
								$B[0] = $A[0];
								$B[1] = $A[1];
								$B[2] = $A[2];
								$B[3] = $A[3];
								$B[4] = $A[4];
								$B[5] = $A[6]/$A[1];
								$B[6] = $A[6];
								$B[7] = $A[7];
								$B[8] = $A[8];
								$B[9] = $A[9];
								$B[10] = $A[12]/$A[2];
								$B[11] = $A[12]/$A[7];
								$B[12] = $A[12];
								$B[13] = $A[13];
								$B[14] = $A[14];
								$B[15] = $A[18]/$A[3];
								$B[16] = $A[18]/$A[8];
								$B[17] = $A[18]/$A[13];
								$B[18] = $A[18];
								$B[19] = $A[19];
								$B[20] = $A[24]/$A[4];
								$B[21] = $A[24]/$A[9];
								$B[22] = $A[24]/$A[14];
								$B[23] = $A[24]/$A[19];
								$B[24] = $A[24];
								$B[25] = $B[0]+$B[5]+$B[10]+$B[15]+$B[20];
								$B[26] = $B[1]+$B[6]+$B[11]+$B[16]+$B[21];
								$B[27] = $B[2]+$B[7]+$B[12]+$B[17]+$B[22];
								$B[28] = $B[3]+$B[8]+$B[13]+$B[18]+$B[23];
								$B[29] = $B[4]+$B[9]+$B[14]+$B[19]+$B[24];
								
								
								$C = array();
								$C[0] = $B[0]/$B[25];
								$C[1] = $B[1]/$B[26];
								$C[2] = $B[2]/$B[27];
								$C[3] = $B[3]/$B[28];
								$C[4] = $B[4]/$B[29];
								$C[5] = $C[0]+$C[1]+$C[2]+$C[3]+$C[4];
								$C[6] = $C[5]/5;
								$C[7] = $B[5]/$B[25];
								$C[8] = $B[6]/$B[26];
								$C[9] = $B[7]/$B[27];
								$C[10] = $B[8]/$B[28];
								$C[11] = $B[9]/$B[29];
								$C[12] = $C[7]+$C[8]+$C[9]+$C[10]+$C[11];
								$C[13] = $C[12]/5;
								$C[14] = $B[10]/$B[25];
								$C[15] = $B[11]/$B[26];
								$C[16] = $B[12]/$B[27];
								$C[17] = $B[13]/$B[28];
								$C[18] = $B[14]/$B[29];
								$C[19] = $C[14]+$C[15]+$C[16]+$C[17]+$C[18];
								$C[20] = $C[19]/5;
								$C[21] = $B[15]/$B[25];
								$C[22] = $B[16]/$B[26];
								$C[23] = $B[17]/$B[27];
								$C[24] = $B[18]/$B[28];
								$C[25] = $B[19]/$B[29];
								$C[26] = $C[21]+$C[22]+$C[23]+$C[24]+$C[25]; 	
								$C[27] = $C[26]/5;
								$C[28] = $B[20]/$B[25];
								$C[29] = $B[21]/$B[26];
								$C[30] = $B[22]/$B[27];
								$C[31] = $B[23]/$B[28];
								$C[32] = $B[24]/$B[29];
								$C[33] = $C[28]+$C[29]+$C[30]+$C[31]+$C[32]; 	
								$C[34] = $C[33]/5;
								
								?>
								<h4 align="center">MATRIK PERBANDINGAN BERPASANGAN</h4>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="700" >
								<tr>
								<td class="numeric" > Kriteria </td>
								<td class="numeric" > AB </td>
								<td class="numeric" > SK  </td>
								<td class="numeric" > PL  </td>
								<td class="numeric" > PTT </td>
								<td class="numeric" > NA  </td>
								</tr>
								<?php
								echo "<tr>";
								echo "	<td> AB </td>";

								for($k=0; $k<=4; $k+=1)
								{
									echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> SK </td>";
								for($k=5; $k<=9; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> PL </td>";
								for($k=10; $k<=14; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> PTT </td>";
								for($k=15; $k<=19; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> NA </td>";
								for($k=20; $k<=24; $k+=1)
								{
									 echo "<td>$B[$k]</td>";
								}
								
								echo "<tr>";
								echo "	<td> Jumlah </td>";
								for($k=25; $k<=29; $k+=1)
								{
									echo "<td>$B[$k]</td>";
								}
								
								echo "</tr>";
								?>
								</table>
								
								<h4 align="center"> MATRIK NILAI KERJA </h4>
								<table class="table table-bordered table-striped table-condensed" border="1" align="center" width="1000" >
								<tr>
								<td class="numeric"> Kriteria</td>
								<td class="numeric"> AB </td>
								<td class="numeric"> SK </td>
								<td class="numeric"> PL </td>
								<td class="numeric"> PTT </td>
								<td class="numeric"> NA </td>
								<td class="numeric">Jumlah </td>
								<td class="numeric">Prioritas </td>
								</tr>
								<?php
								echo "<tr>";
								echo "	<td> AB </td>";
								for($k=0; $k<=6; $k+=1)
								{
									echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> SK </td>";
								for($k=7; $k<=13; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> PL </td>";
								for($k=14; $k<=20; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> PTT </td>";
								for($k=21; $k<=27; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}
								echo "</tr><tr>";
								echo "	<td> NA </td>";
								for($k=28; $k<=34; $k+=1)
								{
									 echo "<td>$C[$k]</td>";
								}								
								?>
								
								<input type="hidden" name="b_ab" value="<?php echo "$C[6]"; ?>" >
								<input type="hidden" name="b_sk" value="<?php echo "$C[13]"; ?>" >
								<input type="hidden" name="b_pl" value="<?php echo "$C[20]"; ?>" >
								<input type="hidden" name="b_ptt" value="<?php echo "$C[27]"; ?>" >
								<input type="hidden" name="b_na" value="<?php echo "$C[34]"; ?>" >
								
								<input type="hidden" name="k1" value="<?php echo "$B[0]"; ?>" >
								<input type="hidden" name="k2" value="<?php echo "$B[1]"; ?>" >
								<input type="hidden" name="k3" value="<?php echo "$B[2]"; ?>" >
								<input type="hidden" name="k4" value="<?php echo "$B[3]"; ?>" >
								<input type="hidden" name="k5" value="<?php echo "$B[4]"; ?>" >
								<input type="hidden" name="k6" value="<?php echo "$B[5]"; ?>" >
								<input type="hidden" name="k7" value="<?php echo "$B[6]"; ?>" >
								<input type="hidden" name="k8" value="<?php echo "$B[7]"; ?>" >
								<input type="hidden" name="k9" value="<?php echo "$B[8]"; ?>" >
								<input type="hidden" name="k10" value="<?php echo "$B[9]"; ?>" >
								<input type="hidden" name="k11" value="<?php echo "$B[10]"; ?>" >
								<input type="hidden" name="k12" value="<?php echo "$B[11]"; ?>" >
								<input type="hidden" name="k13" value="<?php echo "$B[12]"; ?>" >
								<input type="hidden" name="k14" value="<?php echo "$B[13]"; ?>" >
								<input type="hidden" name="k15" value="<?php echo "$B[14]"; ?>" >
								<input type="hidden" name="k16" value="<?php echo "$B[15]"; ?>" >
								<input type="hidden" name="k17" value="<?php echo "$B[16]"; ?>" >
								<input type="hidden" name="k18" value="<?php echo "$B[17]"; ?>" >
								<input type="hidden" name="k19" value="<?php echo "$B[18]"; ?>" >
								<input type="hidden" name="k20" value="<?php echo "$B[19]"; ?>" >
								<input type="hidden" name="k21" value="<?php echo "$B[20]"; ?>" >
								<input type="hidden" name="k22" value="<?php echo "$B[21]"; ?>" >
								<input type="hidden" name="k23" value="<?php echo "$B[22]"; ?>" >
								<input type="hidden" name="k24" value="<?php echo "$B[23]"; ?>" >
								<input type="hidden" name="k25" value="<?php echo "$B[24]"; ?>" >
								<input type="hidden" name="k26" value="<?php echo "$B[25]"; ?>" >
								<input type="hidden" name="k27" value="<?php echo "$B[26]"; ?>" >
								<input type="hidden" name="k28" value="<?php echo "$B[27]"; ?>" >
								<input type="hidden" name="k29" value="<?php echo "$B[28]"; ?>" >
								<input type="hidden" name="k30" value="<?php echo "$B[29]"; ?>" >
								</table> 
								<input type="submit" name="simpan" value="Simpan">
								
								</form>
								<table >
								<form method="POST" action="cek_konsistensi_kriteria.php">
								<input type="hidden" name="k1" value="<?php echo "$B[0]"; ?>" >
								<input type="hidden" name="k2" value="<?php echo "$B[1]"; ?>" >
								<input type="hidden" name="k3" value="<?php echo "$B[2]"; ?>" >
								<input type="hidden" name="k4" value="<?php echo "$B[3]"; ?>" >
								<input type="hidden" name="k5" value="<?php echo "$B[4]"; ?>" >
								<input type="hidden" name="k6" value="<?php echo "$B[5]"; ?>" >
								<input type="hidden" name="k7" value="<?php echo "$B[6]"; ?>" >
								<input type="hidden" name="k8" value="<?php echo "$B[7]"; ?>" >
								<input type="hidden" name="k9" value="<?php echo "$B[8]"; ?>" >
								<input type="hidden" name="k10" value="<?php echo "$B[9]"; ?>" >
								<input type="hidden" name="k11" value="<?php echo "$B[10]"; ?>" >
								<input type="hidden" name="k12" value="<?php echo "$B[11]"; ?>" >
								<input type="hidden" name="k13" value="<?php echo "$B[12]"; ?>" >
								<input type="hidden" name="k14" value="<?php echo "$B[13]"; ?>" >
								<input type="hidden" name="k15" value="<?php echo "$B[14]"; ?>" >
								<input type="hidden" name="k16" value="<?php echo "$B[15]"; ?>" >
								<input type="hidden" name="k17" value="<?php echo "$B[16]"; ?>" >
								<input type="hidden" name="k18" value="<?php echo "$B[17]"; ?>" >
								<input type="hidden" name="k19" value="<?php echo "$B[18]"; ?>" >
								<input type="hidden" name="k20" value="<?php echo "$B[19]"; ?>" >
								<input type="hidden" name="k21" value="<?php echo "$B[20]"; ?>" >
								<input type="hidden" name="k22" value="<?php echo "$B[21]"; ?>" >
								<input type="hidden" name="k23" value="<?php echo "$B[22]"; ?>" >
								<input type="hidden" name="k24" value="<?php echo "$B[23]"; ?>" >
								<input type="hidden" name="k25" value="<?php echo "$B[24]"; ?>" >
								
								<input type="hidden" name="b_ab" value="<?php echo "$C[6]"; ?>" >
								<input type="hidden" name="b_sk" value="<?php echo "$C[13]"; ?>" >
								<input type="hidden" name="b_pl" value="<?php echo "$C[20]"; ?>" >
								<input type="hidden" name="b_ptt" value="<?php echo "$C[27]"; ?>" >
								<input type="hidden" name="b_na" value="<?php echo "$C[34]"; ?>" >
								<input type="submit" name="cek" value="Cek Konsistensi">
								</form>
								</table>
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