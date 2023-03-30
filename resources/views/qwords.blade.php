<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="icon website" href="https://www.qwords.com/wp-content/uploads/2022/12/cropped-logo-qw-light-32x32.png">
	<title>Qwords</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{!! asset('assets/style.css') !!}"/>

</head>
<body>	
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#">
					<img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp" width="125"/>
				</a>
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item m-1">
						<div class="dropdown">
							<button class="nav-link dropdown-toggle fw-bolder text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Cloud Hosting
							</button>
							<ul class="dropdown-menu">
								<li>
									<div class="col-sm-6">
										<a class="dropdown-item fw-bolder fs-5" href="#">
											<i class="fa-solid fa-database" style="color: #f66331;"></i> Value Cloud Hosting
											<div class="fw-lighter fs-6 deskripsi-item">
												Harga ekonomis dengan performa optimal
											</div>
										</a>
									</div>
									<div class="col-sm-6">
										<a class="dropdown-item fw-bolder fs-5" href="#">
											<i class="fa-solid fa-database" style="color: #f66331;"></i> High Performance Bisnis
											<div class="fw-lighter fs-6 deskripsi-item">
												Untuk perusahaan e-commerce, startup & website e-learning
											</div>
										</a>
									</div>
									<div class="col-sm-6">
										<a class="dropdown-item fw-bolder fs-5" href="#">
											<i class="fa-solid fa-database" style="color: #f66331;"></i> High Performance Enterprice
											<div class="fw-lighter fs-6 deskripsi-item">
												Hosting dengan dedicated resource. Tanpa ganggunan dan batasan
											</div>
										</a>
									</div>
									<div class="col-sm-6">
										<a class="dropdown-item fw-bolder fs-5" href="#">
											<i class="fa-solid fa-database" style="color: #f66331;"></i> Unlimited Hosting
											<div class="fw-lighter fs-6 deskripsi-item">
												Hosting dengan unlimited resource yang dapat diandalkan
											</div>
										</a>
									</div>
								</li>								
							</ul>
						</div>						
					</li>
					<li class="nav-item m-1">
						<div class="dropdown">
							<button class="nav-link dropdown-toggle fw-bolder text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Server
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-database" style="color: #f66331;"></i> Cloud VPS KVM SSD<p class="fw-lighter fs-6">KVM Ultrafast dengan easy install & OS terbaru</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-database" style="color: #f66331;"></i> Dedicated Server<p class="fw-lighter fs-6">Multiple Internet Connection up to 10Gbps, Monitoring 24/7</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-database" style="color: #f66331;"></i> Flexible VPS<p class="fw-lighter fs-6">KVM pay as you Growth! Mulai Rp200/jam</p></a></li>							
							</ul>
						</div>						
					</li>
					<li class="nav-item m-1">
						<div class="dropdown">
							<button class="nav-link dropdown-toggle fw-bolder text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Domain
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-building" style="color: #f66331;"></i> Daftar Domain<p class="fw-lighter fs-6">Miliki domain terbaik untuk identitas website Anda</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-building" style="color: #f66331;"></i> Domain premiun .id<p class="fw-lighter fs-6">Domain premium berkualitas untuk website Anda</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-building" style="color: #f66331;"></i> Domain Privacy Protection<p class="fw-lighter fs-6">Lindungi data pribadi & rahasia Anda</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-building" style="color: #f66331;"></i> Sewa Domain<p class="fw-lighter fs-6">Dapatkan domain premiun tanpa bayar penuh</p></a></li>								
							</ul>
						</div>						
					</li>
					<li class="nav-item m-1">
						<div class="dropdown">
							<button class="nav-link dropdown-toggle fw-bolder text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Email Suite
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-envelope" style="color: #f66331;"></i> Titan Email<p class="fw-lighter fs-6">Bisnis tampil professional dengan email domain khusus dari Titan</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-brands fa-google" style="color: #f66331;"></i> Google Workspace<p class="fw-lighter fs-6">Layanan Premium dari Google dengan Nama Domain Anda</p></a></li>							
							</ul>
						</div>						
					</li>
					<li class="nav-item m-1">
						<div class="dropdown">
							<button class="nav-link dropdown-toggle fw-bolder text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Services
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-brands fa-expeditedssl" style="color: #f66331;"></i> SSL<p class="fw-lighter fs-6">Amankan komunikasi data Anda</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-floppy-disk" style="color: #f66331;"></i> Advance Backup<p class="fw-lighter fs-6">Advance Backup berbasis Acronis</p></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-sharp fa-solid fa-id-card" style="color: #f66331;"></i> Licenses<p class="fw-lighter fs-6">Lisensi software bagi bisnis Anda</p></a></li>
							</ul>
						</div>						
					</li>
					<li class="nav-item m-1">
						<div class="dropdown">
							<button class="nav-link dropdown-toggle fw-bolder text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								Internet Access
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-wifi" style="color: #f66331;"></i> Broadband Home<div class="fw-lighter fs-6">Internet dengan kebutuhan rumah/personal dengan <br/>koneksi stabil tanpa buffering hingga 1Gbps</div></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-wifi" style="color: #f66331;"></i> Broadband Bisnis<div class="fw-lighter fs-6">Jalankan bisnis bisa lebih fokus dengan kecepatan cepat</div></a></li>
								<li><a class="dropdown-item fw-bolder fs-5" href="#"><i class="fa-solid fa-wifi" style="color: #f66331;"></i> Broadband Wireless<div class="fw-lighter fs-6">Internet dengan teknologi wireless super cepat</div></a></li>								
							</ul>
						</div>						
					</li>
					<li class="nav-item pt-2 m-1 ps-5"> 
						<a href="#" style="color: #f66331; text-decoration: none;" class="fw-bolder"><i class="fa-solid fa-gift"></i> Promo</a></li>
						<li class="nav-item pt-1 ps-5 m-1">
							<a href="#" class="btn btn-login rounded-pill fw-bolder"> Log in </a>
						</li>
					</ul>				
				</div>
			</div>
		</nav>						
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="mt-5">
						<p class="fs-1 fw-bolder">Cloud Hosting untuk <span style="color: #f66331;">Kesuksesan Websitemu!</span></p>
						<p class="">Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier 3.</p>
						<div class="support">
							<img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/icann-logo.webp">
							<img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logobsi-black.webp">
							<img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logoaccreditedpandi.webp">
						</div>
						<a href="#offer" class="btn btn-beli rounded-pill fw-bolder fs-5 mt-5">Lihat Penawaran</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="text-center mt-5">
						<img src="https://img.freepik.com/free-vector/internet-addiction-abstract-concept-illustration-real-life-substitution-living-online-disorder-web-addiction-digital-addictive-behavior-internet-overuse-social-media_335657-1248.jpg?w=740&t=st=1680157816~exp=1680158416~hmac=daf990a7172fdfaf2a5825cc7950d5e949098311e2e8b80426c839069eabb4fa" class="w-100">
					</div>
				</div>
			</div>			
		</div>
		<div class="container" id="offer">
			<div class="text-center">
				<p class="fs-1 fw-bolder">Cloud Hosting Indonesia <span style="color: #f66331;">Diskon Hingga 50%</span></p>
				<p>Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>
			</div>
			<div class="row mb-5">
				<div class="col-lg-3 col-sm-6">
					<div class="card" style="width: 16rem;">
						<div class="card-body">
							<h6 class="card-title">Value Cloud Hosting</h6>
							<h4 class="text-bold">VCH1</h4>
							<h6 class="card-subtitle my-2 mt-3 text-body-secondary"><s>Rp 24.500</s></h6>
							<h3 class="text-bold mb-5" style="color: #f66331;">Rp 14.500</h3>
							<p class="card-text">
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-regular fs-4 fa-hard-drive" style="color: #f66331;"></i> Disk
										<div class="fw-bolder deskripsi-item">
											3 GB
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-gauge" style="color: #f66331;"></i> Bandwith
										<div class="fw-bolder deskripsi-item">
											Unlimited
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-microchip" style="color: #f66331;"></i> Core CPU
										<div class="fw-bolder deskripsi-item">
											0.5 Core
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-magnifying-glass" style="color: #f66331;"></i> Addon / parked domain
										<div class="fw-bolder deskripsi-item">
											No
										</div>
									</a>
								</div>
							</p>
							<a href="#" class="btn btn-beli rounded-pill p-2 text-center fw-bolder">Pesan Sekarang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="card" style="width: 16rem;">
						<div class="card-body">
							<h6 class="card-title">Unlimited Hosting</h6>
							<h4 class="text-bold">Signature</h4>
							<h6 class="card-subtitle my-2 mt-3 text-body-secondary"><s>Rp 109.000</s></h6>
							<h3 class="text-bold mb-5" style="color: #f66331;">Rp 89.900</h3>
							<p class="card-text">
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-regular fs-4 fa-hard-drive" style="color: #f66331;"></i> Disk
										<div class="fw-bolder deskripsi-item">
											Unlimited
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-gauge" style="color: #f66331;"></i> Bandwith
										<div class="fw-bolder deskripsi-item">
											Unlimited
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-microchip" style="color: #f66331;"></i> Core CPU
										<div class="fw-bolder deskripsi-item">
											1 Core
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-magnifying-glass" style="color: #f66331;"></i> Addon / parked domain
										<div class="fw-bolder deskripsi-item">
											5 / 5
										</div>
									</a>
								</div>
							</p>
							<a href="#" class="btn btn-beli rounded-pill p-2 text-center fw-bolder">Pesan Sekarang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="card" style="width: 16rem;">
						<div class="card-body">
							<h6 class="card-title">High Performance</h6>
							<h4 class="text-bold">HPCH Bisnis 1</h4>
							<h6 class="card-subtitle my-2 mt-3 text-body-secondary"><s>Rp 90.000</s></h6>
							<h3 class="text-bold mb-5" style="color: #f66331;">Rp 79.000</h3>
							<p class="card-text">
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-regular fs-4 fa-hard-drive" style="color: #f66331;"></i> Disk
										<div class="fw-bolder deskripsi-item">
											3 GB
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-gauge" style="color: #f66331;"></i> Bandwith
										<div class="fw-bolder deskripsi-item">
											Unlimited
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-microchip" style="color: #f66331;"></i> Core CPU
										<div class="fw-bolder deskripsi-item">
											1 Core
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-magnifying-glass" style="color: #f66331;"></i> Addon / parked domain
										<div class="fw-bolder deskripsi-item">
											-
										</div>
									</a>
								</div>
							</p>
							<a href="#" class="btn btn-beli rounded-pill p-2 text-center fw-bolder">Pesan Sekarang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="card" style="width: 16rem;">
						<div class="card-body">
							<h6 class="card-title">Cloud VPS KVM SSD</h6>
							<h4 class="text-bold">VPS SC1</h4>
							<h6 class="card-subtitle my-2 mt-3 text-body-secondary"><s>Rp 135.000</s></h6>
							<h3 class="text-bold mb-5" style="color: #f66331;">Rp 75.000</h3>
							<p class="card-text">
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-regular fs-4 fa-hard-drive" style="color: #f66331;"></i> Disk
										<div class="fw-bolder deskripsi-item">
											25 GB
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-gauge" style="color: #f66331;"></i> Bandwith
										<div class="fw-bolder deskripsi-item">
											Unlimited
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-microchip" style="color: #f66331;"></i> Core CPU
										<div class="fw-bolder deskripsi-item">
											1Core
										</div>
									</a>
								</div>
								<div class="m-1 my-4">
									<a class="dropdown-item" href="#">
										<i class="fa-solid fs-4 fa-magnifying-glass" style="color: #f66331;"></i> Addon / parked domain
										<div class="fw-bolder deskripsi-item">
											Unlimited
										</div>
									</a>
								</div>
							</p>
							<a href="#" class="btn btn-beli rounded-pill p-2 text-center fw-bolder">Pesan Sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="background-color: #f66331;">
			<div class="container py-5">
				<div class="text-center text-white">
					<p class="fs-2 fw-bolder">Cari Nama Domainmu!</p>
					<p>Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda</p>
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<input class="form-control form-control-lg rounded-pill" type="text" placeholder="Ketik nama domain Anda">
						</div>
						<div class="col-lg-2 pt-sm-2">
							<button class="btn btn-light rounded-pill p-2">Cari Domain</button>
						</div>
					</div>								
				</div>
			</div>
		</div>
		
		<div class="container-fluid" style="background-color:#13151b; color:#fff;">
			<div class="container py-5">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logo-dark.webp">
						<h5 class="py-3">PT Qwords Company International</h5>
						<p>Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan akses cepat yang didukung layanan support 24/7</p>
						<img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/bsi.webp" width="200px">
						<h5 class="py-3">Customer Care</h5>
						<a href="#" class="nav-link pb-3">Pembayaran</a>
						<a href="#" class="nav-link pb-3">Faktur Pajak</a>
						<a href="#" class="nav-link pb-3">Bantuan 24 jam</a>
						<a href="#" class="nav-link pb-3">FTP Backup</a>
						<a href="#" class="nav-link pb-3">Qwords Rewards</a>
						<a href="#" class="nav-link pb-3">Knowledge Base</a>
						<a href="#" class="nav-link pb-3">Blog</a>
						<a href="#" class="nav-link pb-3">FAQ</a>						
						<a href="#" class="nav-link pb-3">Kontak</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<h5 class="pb-3">Mengenai Kami</h5>
						<a href="#" class="nav-link pb-3">Corporate Website</a>
						<a href="#" class="nav-link pb-3">Qwords History</a>
						<a href="#" class="nav-link pb-3">Qwords Differences</a>
						<a href="#" class="nav-link pb-3">Media Publication</a>
						<a href="#" class="nav-link pb-3">Network & Infrastructure</a>
						<a href="#" class="nav-link pb-3">Partner</a>						
						<a href="#" class="nav-link pb-3">Career & Employment</a>
						<h5 class="py-3">MSA/SLA/AUP</h5>
						<a href="#" class="nav-link pb-3">Master Service Agreement</a>
						<a href="#" class="nav-link pb-3">Refund Policy</a>
						<a href="#" class="nav-link pb-3">Privacy Policy</a>
						<a href="#" class="nav-link pb-3">Product Life Cycle Policy</a>
						<a href="#" class="nav-link pb-3">Penggunaan Merek dan Logo</a>
						<a href="#" class="nav-link pb-3">Migrasi Ke Qwords</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<h5 class="pb-3">Layanan Lainnya</h5>
						<a href="#" class="nav-link pb-3">Extended Support</a>
						<a href="#" class="nav-link pb-3">Manage The Box Server</a>
						<a href="#" class="nav-link pb-3">Flexi Main Domain</a>
						<a href="#" class="nav-link pb-3">FTP Backup</a>
						<a href="#" class="nav-link pb-3">Offline Backup</a>
						<a href="#" class="nav-link pb-3">Hosting Insurance</a>
						<a href="#" class="nav-link pb-3">Software License</a>
						<a href="#" class="nav-link pb-3">Digital Signature</a>
						<h5 class="py-3">Layanan Reseler</h5>
						<a href="#" class="nav-link pb-3">Afiliasi</a>
						<a href="#" class="nav-link pb-3">Qwords VIP Partner</a>
						<a href="#" class="nav-link pb-3">Network Tools</a>
						<h5 class="py-3">Free Tools</h5>
						<a href="#" class="nav-link pb-3">Qwords Link-Q</a>
						<a href="#" class="nav-link pb-3">WhatsApp Link Generator</a>
						<a href="#" class="nav-link pb-3">Network Tools</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<h5 class="pb-3">Kantor Surabaya</h5>
						<p>Gedung Bursa Efek Indonesia Lt.10, Jl. Taman AIS Nasution No.21, Surabaya 60271 - Indonesia 031 30008800</p>
						<h5 class="py-3">Kantor Yogyakarta</h5>
						<p>Jl. Blotan no. 18 Kayen Wedomartani, Ngemplak, Sleman, Yogyakarta 55584 - Indonesia 0274 6058800</p>
						<h5 class="py-3">Kantor Jakarta</h5>
						<p>Gedung Cyber 1 Lantai 3, Jl.Kuningan Barat no.8, Jakarta 12710 - Indonesia 021 39708800</p>
						<h5 class="py-3">Kantor Bandung</h5>
						<p>Jl. Terusan Setra Indah I No.19, Sukagalih, Sukajadi, Bandung 40163 - Indonesia 022 30508800</p>
					</div>
				</div>				
			</div>
			<div class="text-center text-light py-3">
				Copyright &copy;2023
			</div>
			<!-- About Qwords -->
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
	</html>