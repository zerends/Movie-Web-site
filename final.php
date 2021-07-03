<html>
<head>
<meta charset="utf-8">
<style>
	.kenarlik{border:1px solid #e0e0ee;}
	.gizle{display:none;}
	.fontSize18{font-size:18px;}
	.fontSize14{font-size:14px;}
	.yaziRenk{color:#847592;}
	.fontSize13{font-size:13px;}
	.koyu{font-weight: bold}
	.koseYuvarlat{border-radius: 10px}
	.kenarlikRow{border:2px solid red;}
	.kenarlikCol{border:1px solid orange;}
	.turuncu{color:orange;}
	.turuncuFon{background: orange}
	.renkSiyah{background:black;}
	.saydam{opacity:0.5;}
	.siyah{color: black;}
	.siyahFon{background: black}
	body a{text-decoration:none !important}
</style>
<script src="js/popper.min.js" ></script> 
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery-3.3.1.min.js" ></script> 
<script src="js/bootstrap.min.js" ></script>
<script src="js/jQueryRotate.js"></script>
<script>

	$(document).ready(function(){
		
		function dolguAyarla(){
			genislik=$("#resimOlcu").width();
  			yukseklik=$("#resimOlcu").height();
  			$(".dolgu").css({height:yukseklik-20,width:genislik-20});
  			}
		
		dolguAyarla();

		$(window).resize(function(){
			dolguAyarla();
		});
		
		$(".resim").mouseenter(function(){
			i=$(".resim").index(this);
			$(".dolgu:eq("+i+")").stop(true,true).show(250);
		});
		$(".resim").mouseleave(function(){
			$(".dolgu:eq("+i+")").stop(true,true).hide(250);
		});

		$(".bilgi").mouseenter(function(){
			i=$(".bilgi").index(this);
			$(".bilgi:eq("+i+")").rotate({animateTo:360});
		});
		$(".bilgi").mouseleave(function(){
			$(".bilgi:eq("+i+")").rotate({animateTo:0});
		});
	});

</script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				function boyutlandir(){
					y=$("#resimOlcu").height();
					$(".alanRow").css({height:y+20});
				}
				boyutlandir();
				$(window).resize(function(){
					boyutlandir();
				});

				$(".alan").mouseenter(function(){
					i=$(".alan").index(this);
					$(".alan:eq("+i+") .resim1").stop(true,true).hide("slide",{direction:"left",easing:"swing"},400);
					$(".alan:eq("+i+") .resim2").stop(true,true).show("slide",{direction:"left",easing:"swing"},400);
					$(".alan:eq("+i+") .yazi").stop(true,true).animate({top:"50px",color:"gray"},400,"easeOutBounce");
				});

				$(".alan").mouseleave(function(){
					$(".alan:eq("+i+") .resim1").stop(true,true).show("slide",{direction:"left",easing:"swing"},400);
					$(".alan:eq("+i+") .resim2").stop(true,true).hide("slide",{direction:"left",easing:"swing"},400);
					$(".alan:eq("+i+") .yazi").stop(true,true).animate({top:"10px",color:"white"},400,"easeOutBounce");
				});
			});
		</script>
</head>
<body>
	<div class="container">
	
	<div class="row">
		
	<?php
    $db=new mysqli ("localhost","root","","odev");
    $db->set_charset("utf-8");
    $sorgu="select * from icerikler";
    $sonuc =$db->query($sorgu);
    $ks=$sonuc->num_rows;
    for($i=0;$i<$ks;$i++){
      $kayit=$sonuc->fetch_assoc();
      $filmOneri=$kayit["filmOneri"];
    
      echo "<div class='col-3'>";
        echo "<div class='row p-2'>";
          echo "<div class='col-12   '>";
            echo "<div class='row text-center p-2'>";
                echo "<div class='col-12  rounded'>";
                echo "<img src='$reklam' class='img-fluid'/>";
                echo "</div>";
                echo "<div class='col-12  text-dark  m-2'>$kitapadi</div>";
                echo "<div class='col-12 p-1  text-warning fontfamily rounded'style='font-size:20px'> $yazaradi</div> ";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        echo "</div>";

    }
		?>
		
	</div>
		
	</div>
		
		<div class="row my-3">
			<div class="col-12 p-0">
				 <img src="resimler/uyari/uyari.png" class="img-fluid">
			</div>
		</div>
		<div class="row  p-3 align-items-end">
			<div class="col-4">
				<img src="logo/logo2.png" class="img-fluid" />
			</div>
			
			<div class="col-8 text-right">
				
		
				<button type="button" class="btn btn-outline-danger">Üye Ol</button>
				<button type="button" class="btn btn-outline-success">Giriş Yap</button>
			</div>
		</div>

		
		<div class="row p-2 my-3 bg-danger ">
		
			<div class="col-3 col-md-12">
				<div class="row">
					<div class="col-12 col-md py-2 p-md-2"> 
						<a class="text-white " href="#">Ana Sayfa</a>
					</div>
					<div class="col-12 col-md pb-1 p-md-2">
						<a class="text-white" href="#">Aksiyon</a>
					</div>
					<div class="col-12 col-md pb-1 p-md-2">
						<a class="text-white" href="#">Macera</a>
					</div>
					<div class="col-12 col-md pb-1 p-md-2">
						<a class="text-white" href="#">Dram</a>
					</div>
					<div class="col-12 col-md pb-1 p-md-2">
						<a class="text-white" href="#">Komedi</a>
					</div>
					<div class="col-12 col-md pb-1 p-md-2">
						<a class="text-white" href="#">Korku</a>
					</div>
				</div>	
			</div>	
		</div>	

		<div class="row my-3  p-2">
			<div class="col-2  d-none d-lg-block">
				<div class="accordion" id="accordionExample">
					<div class="col-12 p-2">
				        <button class="btn btn-block text-left bg-dark text-white koyu btn-outline-dark" type="button" data-toggle="collapse" data-target="#icerik1" aria-expanded="true" aria-controls="collapseOne">
				          Ana Sayfa
				        </button>
					    <div id="icerik1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					      <div class="row pl-4 mt-1">
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ana Sayfa 1</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ana Sayfa 2</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ana Sayfa 3</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ana Sayfa 3</a></div>
					      </div>
					    </div>
					</div>
				    <div class="col-12 p-2">
				        <button class="btn btn-block text-left bg-dark text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#icerik2" aria-expanded="true" aria-controls="collapseOne">
				          Top 10 Filmler
				        </button>
					    <div id="icerik2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					      <div class="row pl-4 mt-1">
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 1</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 2</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 3</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 4</a></div>
					      </div>
					    </div>
				    </div>
				    <div class="col-12 p-2">
				        <button class="btn btn-block text-left bg-dark text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#icerik3" aria-expanded="true" aria-controls="collapseOne">
				          Ödüllü Filmler
				        </button>
					    <div id="icerik3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					      <div class="row pl-4 mt-1">
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 1</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 2</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 2</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Film 2</a></div>
					      </div>
					    </div>
				    </div>
				    <div class="col-12 p-2">
				        <button class="btn btn-block text-left bg-dark text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#icerik4" aria-expanded="true" aria-controls="collapseOne">
				          En İyi Yönetmenler
				        </button>
					    <div id="icerik4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					      <div class="row pl-4 mt-1">
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Yönetmen 1 1</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Yönetmen 1 1</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Yönetmen 1 1</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Yönetmen 1 1</a></div>
					      </div>
					    </div>
				    </div>
				    <div class="col-12 p-2">
				        <button class="btn btn-block text-left bg-dark text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#icerik5" aria-expanded="true" aria-controls="collapseOne">
				          Ödüllü Oyuncular
				        </button>
					    <div id="icerik5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					      <div class="row pl-4 mt-1">
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ödüllü Oyuncular 1</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ödüllü Oyuncular 2</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ödüllü Oyuncular 3</a></div>
					       	<div class="col-12 koyu"><a href="#" class="text-muted">Ödüllü Oyuncular 3</a></div>
					      </div>
					    </div>
				    </div>
				</div>
			</div>


			<div class="col-12 col-lg-10">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="resimler/banner/banner.jpg" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="resimler/banner/banner2.png" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="resimler/banner/banner3.png" class="d-block w-100" alt="...">
				    </div>
				     <div class="carousel-item">
				      <img src="resimler/banner/banner4.png" class="d-block w-100" alt="...">
				    </div>
				     <div class="carousel-item">
				      <img src="resimler/banner/banner1.png" class="d-block w-100" alt="...">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				</div>
			</div>
		<div class="row">
			<div class="col-12  p-3 bg-danger text-white"><h5>FİLM ÖNERİLERİ</h5></div>
		</div>

		<div class="row my-3">
			<div class="col-3 alan">
				<div class="row text-center align-items-center alanRow">
					<div class="col-12">
						<img src="resimler/reklam/reklam1.png" class="img-fluid resim1" id="resimOlcu" />	
					</div>
					<div class="col-12 position-absolute">
						<img src="resimler/reklam/reklam2.png" class="img-fluid resim2 gizle" />	
					</div>
					
				</div>
			</div>
			<div class="col-3  alan">
				<div class="row text-center align-items-center alanRow">
					<div class="col-12">
						<img src="resimler/reklam/reklam1.png" class="img-fluid resim1" id="resimOlcu" />	
					</div>
					<div class="col-12 position-absolute">
						<img src="resimler/reklam/reklam3.png" class="img-fluid resim2 gizle" />	
					</div>
					
				</div>
			</div>
			<div class="col-3  alan">
				<div class="row text-center align-items-center alanRow">
					<div class="col-12">
						<img src="resimler/reklam/reklam1.png" class="img-fluid resim1" id="resimOlcu" />	
					</div>
					<div class="col-12 position-absolute">
						<img src="resimler/reklam/reklam4.png" class="img-fluid resim2 gizle" />	
					</div>
					
				</div>
			</div>
			<div class="col-3 alan">
				<div class="row text-center align-items-center alanRow">
					<div class="col-12">
						<img src="resimler/reklam/reklam1.png" class="img-fluid resim1" id="resimOlcu" />	
					</div>
					<div class="col-12 position-absolute">
						<img src="resimler/reklam/reklam5.png" class="img-fluid resim2 gizle" />	
					</div>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12  p-3 bg-danger text-white"><h5>FİLM KATEGORİLER</h5></div>
		</div>
		
		<div class="row justify-content-center text-center">
			<div class="col-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between">
				<div class="p-1">
					<div class="row p-2">
					<div class="col-12 d-block d-lg-none" data-toggle="tooltip" data-placement="top" title="Aksiyon">
							<img src="resimler/bilgi/aksiyon1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block">
							<img src="resimler/bilgi/aksiyon1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block koyu">Aksiyon</div>
					</div>
				</div>
				<div class="p-1">
					<div class="row p-2">
					<div class="col-12 d-block d-lg-none" data-toggle="tooltip" data-placement="top" title="Macera">
							<img src="resimler/bilgi/macera1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block">
							<img src="resimler/bilgi/macera1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block koyu">Macera</div>
					</div>
				</div>
				<div class="p-1">
					<div class="row p-2">
					<div class="col-12 d-block d-lg-none" data-toggle="tooltip" data-placement="top" title="Korku">
							<img src="resimler/bilgi/korku1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block">
							<img src="resimler/bilgi/korku1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block koyu">Korku</div>
					</div>
				</div>
				<div class="p-1">
					<div class="row p-2">
					<div class="col-12 d-block d-lg-none" data-toggle="tooltip" data-placement="top" title="Komedi">
							<img src="resimler/bilgi/komedi1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block">
							<img src="resimler/bilgi/komedi1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block koyu">Komedi</div>
					</div>
				</div>
				<div class="p-1">
					<div class="row p-2">
					<div class="col-12 d-block d-lg-none" data-toggle="tooltip" data-placement="top" title="Romantik">
							<img src="resimler/bilgi/romantik1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block">
							<img src="resimler/bilgi/romantik1.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block koyu">Romantik</div>
					</div>
				</div>
				<div class="p-1">
					<div class="row p-2">
					<div class="col-12 d-block d-lg-none" data-toggle="tooltip" data-placement="top" title="bilimkurgu">
							<img src="resimler/bilgi/bilimkurgu.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block">
							<img src="resimler/bilgi/bilimkurgu.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block koyu">Bilim Kurgu</div>
					</div>
				</div>
				<div class="p-1">
					<div class="row p-2">
					<div class="col-12 d-block d-lg-none" data-toggle="tooltip" data-placement="top" title="Yerli">
							<img src="resimler/bilgi/kalp.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block">
							<img src="resimler/bilgi/kalp.png" class="img-fluid bilgi" />
						</div>
						<div class="col-12 d-none d-lg-block koyu">Yerli</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row my-3">
			<div class="col-12 p-3 bg-danger text-white"><h5>HABERLER</h5></div>
		</div>
		<div class="row  p-2">
			<div class="col-4">
				<div class="card" style="width: 18rem;">
  					<img src="resimler/firsat/firsat1.png" class="card-img-top" alt="haberler">
  						<div class="card-body">
   						 <h5 class="card-title">Scream</h5>
    						<p class="card-text">Scream'in yeni filminin çıkış tarihi belli oldu.</p>
    							<a href="#" class="btn btn-primary">OKU</a>
 						</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card" style="width: 18rem;">
  <img src="resimler/firsat/firsat2.png" class="card-img-top" alt="haberler">
  <div class="card-body">
    <h5 class="card-title">Yeni Anlaşma</h5>
    <p class="card-text">Justin Lin, Universal Studio ile anlaştı.</p>
    <a href="#" class="btn btn-primary">OKU</a>
  </div>
</div>
			</div>
			<div class="col-4">
				<div class="card" style="width: 18rem;">
  <img src="resimler/firsat/firsat3.png" class="card-img-top" alt="haberler">
  <div class="card-body">
    <h5 class="card-title">Başvurular Başladı.</h5>
    <p class="card-text">Altın Portakal Sinema Okulu başvuruları başladı.</p>
    <a href="#" class="btn btn-primary">OKU</a>
  </div>
</div>
</div>
</div>	

<div class="row my-3">
			<div class="col-12 p-3 bg-danger text-white"><h5>RÖPORTAJ</h5></div>
		</div>
		<div class="row  p-2">
			<div class="col-4">
				<div class="card" style="width: 18rem;">
  					<img src="resimler/roportaj/roporaj1.png" class="card-img-top" alt="haberler">
  						<div class="card-body">
   						 <h5 class="card-title">Kıvanç Tatlıtuğ</h5>
    						<p class="card-text">Kıvanç Tatlıtuğ ile yeni röportajımız.</p>
    							<a href="#" class="btn btn-primary">OKU</a>
 						</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card" style="width: 18rem;">
  <img src="resimler/roportaj/roporaj3.png" class="card-img-top" alt="haberler">
  <div class="card-body">
    <h5 class="card-title">Şevval Sam</h5>
    <p class="card-text">Şevval Sam ile yeni röportajımız.</p>
    <a href="#" class="btn btn-primary">OKU</a>
  </div>
</div>
			</div>
			<div class="col-4">
				<div class="card" style="width: 18rem;">
  <img src="resimler/roportaj/roporaj2.png" class="card-img-top" alt="haberler">
  <div class="card-body">
    <h5 class="card-title">Nesrin Cevadzade</h5>
    <p class="card-text">Nesrin Cevadzade ile yeni röportajımız.</p>
    <a href="#" class="btn btn-primary">OKU</a>
  </div>
</div>
</div>
</div>	
		
		<div class="row my-5">
			<div class="col-12">
				<div class="jumbotron bg-danger p-5">
				 	<div class="row">
				 		<div class="col-12 col-sm-6 col-lg-3">
				 			<div class="row">
				 				<h5>Hızlı Bağlantılar</h5>
				 				<div class="col-12 p-0">
				 					<a href="#" class="text-dark">İnsan Kaynakları</a>
				 				</div>
				 				<div class="col-12 p-0">
									<a href="#" class="text-dark">Gizlilik Politikası</a>
				 				</div>
				 				<div class="col-12 p-0">
				 					<a href="#" class="text-dark">Site Haritası</a>
				 				</div>	
				 				<div class="col-12 p-0">
				 					<a href="#" class="text-dark">Fİlm Sözlüğü</a>
				 				</div>	
				 				<div class="col-12 p-0">
				 					<a href="#" class="text-dark">Tüm Kategoriler</a>
				 				</div>		
				 			</div>
				 		</div>
				 		<div class="col-12 col-sm-6 col-lg-3">
				 			<h5>Müşteri Hizmetleri</h5>
				 			<div class="col-12 p-0">
				 				<a href="#" class="text-dark">Üye Girişi</a>
				 				</div>
				 				<div class="col-12 p-0">
									<a href="#" class="text-dark">Kayıt OL</a>
				 				</div>
				 				<div class="col-12 p-0">
				 					<a href="#" class="text-dark">Karşılaştırma Listesi</a>
				 				</div>	
				 				<div class="col-12 p-0">
				 					<a href="#" class="text-dark">Film Tavsiyeleri</a>
				 				</div>	
				 				
				 				
				 			</div>

				 		
				 		<div class="col-12 col-sm-6 col-lg-3">
				 			<h5>E-Bülten Aboneliği</h5>
				 			<p class="text-justify">
				 				Yeni haberler ve filmlerden haberdar olmak ister misiniz ?
				 			</p>
				 			<div class="col-12 p-0">
				 				<label>E-Mail</label>
				 				<input type="text">
				 			</div>
				 			<div class="col-12 p-0">
				 				<button class="btn btn-dark">Kaydet</button>
				 			</div>
				 		</div>
				 		<div class="col-12 col-sm-6 col-lg-3 ">
				 			<h5>İletişim</h5>
				 			<ul class="list-unstyled">
							  <li class="media my-1">
							    <img src="resimler/iletisim/konum.jpg" class="mr-3">
							    <div class="media-body">
							      Atatürk Caddesi No:2 Seyhan/Adana
							    </div>
							  </li>
							   <li class="media my-1">
							    <img src="resimler/iletisim/eposta.jpg" class="mr-3">
							    <div class="media-body">
							      sezginzeren02@gmail.com
							    </div>
							  </li>
							   <li class="media my-1">
							    <img src="resimler/iletisim/tel.jpg" class="mr-3">
							    <div class="media-body">
							      0 322 456 5455
							    </div>
							  </li>
							   <li class="media my-1">
							    <img src="resimler/iletisim/facebook.jpg" class="mr-3">
							    <div class="media-body">
							      /filmgram
							    </div>
							  </li>
							   <li class="media my-1">
							    <img src="resimler/iletisim/youtube.jpg" class="mr-3">
							    <div class="media-body">
							      /filmgram
							    </div>
							  </li>	
							</ul>
				 		</div>
				 	</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>













