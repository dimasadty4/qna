
<body>

<!-- Header -->
<div class="header-div">

<!--== SlideshowBg Area Start ==-->
<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <br><br><br>
                </div>
            </div>
        </div><!--== SlideshowBg Area End ==-->

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo-div bounceInLeft wow" data-wow-duration="2s">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <a id="button" title="button"></a>  
	  <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <img src="<?php echo base_url() ?>assets/assets_shop/images/logo.png" alt=".">
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse top-right-menu-ul bounceInRight wow" id="bs-example-navbar-collapse-1" data-wow-duration="4s">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">BERANDA</a></li>
        <li><a href="#profil">PROFIL</a></li>
        <li><a href="#inf_publik">INFORMASI PUBLIK</a></li>
        <li><a href="#lay_publik">LAYANAN PUBLIK</a></li>
        <li><a href="#tanya">TANYA JAWAB</a></li>
        <li><a href="#lay_pengaduan">LAYANAN PENGADUAN</a></li>
        <li><a href="<?php echo base_url('register') ?>">Register</a></li>
      </ul>
    </div><!-- End navbar-collapse -->
  </div><!-- End container -->
</nav>

<div class="container wow bounceInDown" data-wow-duration="5s">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 text-center slide-text">
			<h1>TANYA JAWAB</h1>
			<p>Uji Coba</p>
		</div><!-- End col-md-8-->
		<div class="col-md-offset-2"></div><!-- End col-md-offset-2 -->
	</div><!-- End Row -->
</div><!-- End Contanier -->

</div><!-- End header-div -->

<!-- Feature -->

<div class="container" id="features">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>Q & A</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
			<style>

				form {
				width: 1600px;
				margin-right: 20px;
				margin-left: 20px;
				margin-top: 100px;
				}
				input {
				padding: 4px 10px;
				border: 2;
				font-size: 16px;
				}
				.search {
				width: 70%;
				}
				.submit {
				width: 70px;
				background-color: #1c87c9;
				color: #ffffff;
				}
				@media screen and (max-width: 460px){
					nav.menu ul a{
						padding: 15px;
						font-size: 14px;
					}
					.sidebar{
						display: none;
					}
					.post-info{
						display: none;
					}
					.conteudo{
						margin:25px auto;
					}
					.conteudo img{
						margin:-5% 0 25px -5%;
					}
				}
			</style>
		</head>
  <body>
    <form method="POST">
      <input type="text" name="cari" class="search" placeholder="Search here!">
      <input type="submit" name="submit" class="submit" value="Search">
    </form>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->
	
	<div class="accordion" id="accordionExample">
	<?php
	//var_dump($qnaa);
	$i=0;
	foreach($qnaa as $qa) :
	$i++;
	$benar="false";
	if($i==1)
	{
		$benar="true";
	}
	?>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
	  <input type="hidden" id="texttampil<?= $i ?>" value="hide">
        <button class="btn btn-link btn-block text-left" onClick="muncul(<?= $i ?>)" type="button" data-toggle="collapse<?= $i ?>" data-target="#collapseOne<?= $i ?>" aria-controls="collapseOne<?= $i ?>">
          <h3><?php echo $qa->pertanyaan ?></h3>
        </button>
      </h2>
    </div>
	<div id="collapseOne<?= $i ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <h4><?php echo $qa->jawaban ?></h4>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<div class="call-action-color" id="About">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>About us</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->


	<div class="row">
		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="<?php echo base_url() ?>assets/assets_shop/images/whatsapp.png" alt="">
		    </div>
		    <h3>0215261813</h3>
		</div>

		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="<?php echo base_url() ?>assets/assets_shop/images/email.png" alt="">
		    </div>
		    <h3>infomonev.yankes@gmail.com</h3>
		</div>

		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="<?php echo base_url() ?>assets/assets_shop/images/place.png" alt="">
		    </div>
		    <h3>Jl. H. R. Rasuna Said No. Kav 8, RT.1/RW.2, Kuningan</h3>
		</div>
	</div><!-- End row -->

</div>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js '></script>
<script>
function muncul(id)
{
text=$( "#texttampil"+id).val();
	if(text=='hide')
	{
	$( "#collapseOne"+id).show();
	$( "#texttampil"+id).val('show');
	}else{
	$( "#collapseOne"+id).hide();
	$( "#texttampil"+id).val('hide');
	}
}

$(document).ready(function() {
    $( ".collapse").hide();
});
</script>