<?php
error_reporting(0);
session_start();
?>

<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Point Blank beyond Limits Launching Event">
	<meta property="og:url" content="https://www.pointblank.id/">
	<meta property="og:description" content="Medan peperangan baru telah dimulai! Ajak teman sperjuanganmu untuk registrasi melalui link kamu, dan dapatkan hadiah sepeda motor NMAX!! Ajak teman seperjuanganmu! Dapatkan PB Voucher, Limited Edition Jaket &amp; Helm, Asus Headset dan Sepeda motor NMAX!!">
	<meta property="og:image" content="images/event/2018/launching/og_image.jpg">
	<meta name="keywords" content="PB, point blank, fps, shooting game, online">
	<meta name="description" content="Medan peperangan baru telah dimulai! Ajak teman sperjuanganmu untuk registrasi melalui link kamu, dan dapatkan hadiah sepeda motor NMAX!! Ajak teman seperjuanganmu! Dapatkan PB Voucher, Limited Edition Jaket &amp; Helm, Asus Headset dan Sepeda motor NMAX!!">
	<title>PB Indonesia</title>
	<link rel="stylesheet" type="text/css" href="assets/css/launching.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
	<script type="text/javascript">
		//<![CDATA[
		var zptRcvMessage = {
			receiveMessage: function(event) {
				var regPBID = /.pbid/g;

				var data = $.parseJSON(event.data);

				if (regPBID.test(event.data)) {
					switch (data.type) {
						case "pbid_iframe_resize":
							var frame = $("#layer_popup").find("iframe");
							if (frame.length > 0) {
								if (data.width) {
									frame.attr("width", data.width);
								}
								if (data.height) {
									frame.attr("height", data.height);
								}
							}
							break;
						case "pbid_location_change":
							if (data.location) {
								document.location.href = data.location;
							}
							break;
						case "pbid_layer_popup_close":
							$("#layer_popup").html("").fadeOut("fast");
							break;
						case "pbid_page_reload":
							window.location.href = window.location;
							break;
						case "pbid_set_value":
							$("#" + data.id).val(data.value);
							break;
						case "pbid_pop_layer":
							openLayerPopup(data.url);
							break;
					}
				} else {
					return false;
				}
			}
		};

		if (window.addEventListener) {
			window.addEventListener("message", zptRcvMessage.receiveMessage, false);
		} else {
			if (window.attachEvent) {
				window.attachEvent("onmessage", zptRcvMessage.receiveMessage);
			}
		}
		<?php

		$sudahLogin = $_SESSION["login"];
		if ($sudahLogin) {
			echo
				'function openLayerPopup(param) {
				var url = "";
				if ($.trim(param) == "login") {
					url = "<p class=\"dimmed\"></p><iframe src=\"/sukses.html\" height=\"576\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
				}
				else {
					url = "<p class=\"dimmed\"></p><iframe src=\""+param+"\" height=\"576\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
				}
				$("#layer_popup").html(url).fadeIn("fast");
				//return false;
			}';
		} else {
			echo
				'function openLayerPopup(param) {
				var url = "";
				if ($.trim(param) == "login") {
					url = "<p class=\"dimmed\"></p><iframe src=\"/login.html\" height=\"420\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
				} else {
					url = "<p class=\"dimmed\"></p><iframe src=\"" + param + "\" height=\"420\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
				}
				$("#layer_popup").html(url).fadeIn("fast");
				//return false;
			}';
		};

		?>
		//]]>
	</script>
</head>

<body>

	<div id="layer_popup" style="display: none;"></div>


	<script type="text/javascript">
		$(document).ready(function() {
			$("#share").attr("href", "javascript:void('0');");
			$("#share").parent().addClass("current");
		});
	</script>
	<header>
		<ul>
			<li><a href="https://www.pointblank.id/event" class="gnb_bi" id="index">
					<p>Point Blank Beyond Limits</p>
				</a></li>
			<?php
			if ($sudahLogin) {
				echo '<div class="header_btn">
				<p class="login">
					<a href="/logout.php">LOGOUT</a>
				</p>
				</div>';
			};
			?>
		</ul>
		<div class="header_btn">
		</div>
	</header>
	<section class="event_gn">
		<div class="wire">
			<div class="container">
				<div class="sub">
					<p class="date">1 JUNI. 2019 ~ 31. JULI. 2019
					</p>
					<h2>Ambil Event Disini<br><strong>News Event 2019</strong></h2>
					<p class="txt">
						Share KeTeman Teman Anda Untuk Mendapatkan Banyak Event Di 2019<br>
						Spesial <strong>Limited Edition Jaket,Helm,Senjata</strong> Point Blank beyond Limits
					</p>
					<p class="btn"><a href="javascript:goFacebook();">share</a></p>
					<ul class="item">
						<li>
							<p class="period"><strong>30</strong>DIAMBIL</p>
							<p class="img"><img src="assets/images/item_jacket.png" alt="Custom Point Blank Bike Jacket"></p>
							<p class="name">Custom Point Blank<br><strong>Bike Jacket</strong></p>
							<?php
							if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbiljaket();" class="tombol">Ambil</button>';;
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';;
							};
							?>
						</li>
						<li>
							<p class="period"><strong>30</strong>DIAMBIL</p>
							<p class="img"><img src="assets/images/item_helmet.png" alt="Custom Point Blank Helmet"></p>
							<p class="name">Custom Point Blank<br><strong>Helmet</strong></p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilhlm();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>50</strong>DIAMBIL</p>
							<p class="img"><img src="assets/images/item_cash_100.png" alt="Point blank voucher 100,000"></p>
							<p class="name">Point Blank Voucher<br><strong>100,000</strong></p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilvocher();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>150</strong>DIAMBIL</p>
							<p class="img"><img src="assets/images/item_cash_50.png" alt="Point blank voucher 50,000"></p>
							<p class="name">Point Blank Voucher<br><strong>50,000</strong></p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilvocher();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>300</strong>DIAMBIL</p>
							<p class="img"><img src="assets/images/item_cash_20.png" alt="Point blank voucher 20,000"></p>
							<p class="name">Point Blank Voucher<br><strong>20,000</strong></p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilvocher();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>500</strong>DIAMBIL</p>
							<p class="img"><img src="assets/images/item_cash_10.png" alt="Point blank voucher 10,000"></p>
							<p class="name">Point Blank Voucher<br><strong>10,000</strong></p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilvocher();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>200</strong>DIAMBIL</p>
							<p class="img">
								<img src="assets/images/item_phm.png" alt="P HM Zepetto">
							</p>
							<p class="name">P HM Zepetto
								<br>
								<strong>3DAY</strong>
							</p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilhm();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>500</strong>DIAMBIL</p>
							<p class="img">
								<img src="assets/images/item_kriss.png" alt="SMG Kriss SV Zepetto">
							</p>
							<p class="name">SMG Kriss SV Zepetto
								<br>
								<strong>3DAY</strong>
							</p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilkris();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>100</strong>DIAMBIL</p>
							<p class="img">
								<img src="assets/images/item_aug.png" alt="AR AUG A3 Zepetto">
							</p>
							<p class="name">AR AUG A3 Zepetto
								<br>
								<strong>3DAY</strong>
							</p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilaug();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>50</strong>DIAMBIL</p>
							<p class="img">
								<img src="assets/images/item_tactilite.png" alt="SR Tactilite T2 Zepetto">
							</p>
							<p class="name">SR Tactilite T2 Zepetto
								<br>
								<strong>3DAY</strong>
							</p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilt2();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>500</strong>DIAMBIL</p>
							<p class="img">
								<img src="assets/images/item_silence.png" alt="SMG OA93 SNC Zepetto">
							</p>
							<p class="name">SMG OA93 SNC Zepetto
								<br>
								<strong>3DAY</strong>
							</p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbiloa();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						<li>
							<p class="period"><strong>400</strong>DIAMBIL</p>
							<p class="img">
								<img src="assets/images/item_keris.png" alt="Mel Keris Zepetto">
							</p>
							<p class="name">Mel Keris Zepetto
								<br>
								<strong>3DAY</strong>
							</p>
							<?php if ($sudahLogin) {
								echo '<button onclick="javascript:goAmbilkeris();" class="tombol">Ambil</button>';
							} else {
								echo '<button onclick="javascript:goAmbil();" class="tombol">Ambil</button>';
							}; ?>
						</li>
						</li>
					</ul>
					<ul class="explain">
						<li>PEMBERITAHUAN</li>
						<li>Share Ke Teman Teman Anda Untuk Dapatkan Event Selanjutnya.</li>
						<li>Troopers harus log in home page terlebih dahulu untuk bisa mengikuti Share Launchig Event PB.</li>
						<li>Batas maksimal penggunaan PB Cash dari Event Voucher adalah 1 tahun setelah pembelian.</li>
					</ul>
				</div>
				<p class="bg_img"><img src="assets/images/bg_img_gn.png" alt="Character"></p>
			</div>
		</div>
	</section>

	<section class="caution caution_gn">
		<p>Detail, durasi, dan hadiah event dapat berubah atau dibatalkan tanpa pemberitahuan terlebih dahulu.</p>
		<p>Pengambil yang tidak memenuhi syarat atau melanggar dapat di diskualifikasi.</p>
	</section>
	<script type="text/javascript">
		function goAmbil() {
			alert("Login dibutuhkan.");
			openLayerPopup("login");
		};

		function goFacebook() {
			alert("Login dibutuhkan.");
			openLayerPopup("login");
		};
	</script>
	<script type="text/javascript">
		function goAmbilt2() {
			alert("Sukses Ambil SR Tactilite T2");
			openLayerPopup("login");
		};

		function goAmbilhm() {
			alert("Sukses Ambil P HM");
			openLayerPopup("login");
		};

		function goAmbilkeris() {
			alert("Sukses Ambil Keris");
			openLayerPopup("login");
		};

		function goAmbilhlm() {
			alert("Sukses Ambil Helmet");
			openLayerPopup("login");
		};

		function goAmbilkris() {
			alert("Sukses Ambil Kriss");
			openLayerPopup("login");
		};

		function goAmbilaug() {
			alert("Sukses Ambil Aug");
			openLayerPopup("login");
		};

		function goAmbilvocher() {
			alert("Sukses Ambil Vocher");
			openLayerPopup("login");
		};

		function goAmbiljaket() {
			alert("Sukses Ambil Jaket");
			openLayerPopup("login");
		};

		function goAmbiloa() {
			alert("Sukses Ambil OA");
			openLayerPopup("login");
		};
	</script>
	<footer>
		<img src="assets/images/footer_zii.png" alt="PT. Zepetto Interactive Indonesia">
		<p class="cs">Jika ada pertanyaan hubungi <a href="mailto:cs@zepetto.id">cs@zepetto.id</a></p>
		<p>COPYRIGHT PT. ZEPETTO INTERACTIVE INDONESIA ALL RIGHTS RESERVED.</p>
	</footer>
</body>

</html>