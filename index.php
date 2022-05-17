<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>えちぜん鍼灸院</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/top.css">
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
	<style>
/*まずはお決まりのボックスサイズ算出をborer-boxに */

	</style>
</head>
<body>
	<?php include(dirname(__FILE__).'/tpl/header.html'); ?>
	<main>
		<div class="first-view-box">
			<img class="first-view-img" src="img/first-view.png" alt="ファーストビューの写真">
		</div>
		<section id="introduction" class="introduction">
			<div class="t-a-c">
				<p class="section-title">
					<span class="pink-underline">鍼灸院紹介</span>
				</p>
			</div>
			<p class="section-title-en">
				INTRODUCTION
			</p>
			<div class="introduction-box">
				<div class="introduction-sentence">
					<div class="introduction-phrase">
						確かなスキルで<br>
						患者さんのお悩みを解決します。
					</div>
					<div class="intro-sentence-wrapper">
						<p class="intro-sentence-p-1">
							当鍼灸院は<br>
							お悩みの症状に効果のある施術を行います。
						</p>
						<div class="h-25"></div>
						<p class="intro-sentence-p-2">
							必要に応じて鍼灸だけでなく、<br>
							整体による治療も行います。<br>
							また、体のこりや自律神経失調症など<br>
							幅広い症状に対応しております。
						</p>
						<div class="h-25"></div>
						<p class="intro-sentence-p-3">
							確かなスキルと優しさで<br>
							お客様に寄り添います。
						</p>
					</div>
				</div>
				<img src="img/introduction.jpg" alt="鍼灸院内の写真" class="introduction-img">
			</div>
			<div class="introduction-box-res">
				<img src="img/introduction.jpg" alt="鍼灸院内の写真" class="introduction-img">
				<div class="introduction-phrase">
						確かなスキルで<br>
						患者さんのお悩みを解決します。
				</div>
				<div class="intro-sentence-wrapper">
					<p class="intro-sentence-p-1">
						当鍼灸院は
						お悩みの症状に効果のある施術を行います。
					</p>
					<div class="h-25"></div>
					<p class="intro-sentence-p-2">
						必要に応じて鍼灸だけでなく、
						整体による治療も行います。<br>
						また、体のこりや自律神経失調症など
						幅広い症状に対応しております。
					</p>
					<div class="h-25"></div>
					<p class="intro-sentence-p-3">
						確かなスキルと優しさで
						お客様に寄り添います。
					</p>
				</div>
			</div>
		</section>
		<section id="price">
			<div class="t-a-c">
				<p class="section-title">
					<span class="pink-underline">料金</span>
				</p>
			</div>
			<p class="section-title-en">
				PRICE
			</p>
			<p class="ticket-price">回数券：10,000円</p>
			<div class="h-25"></div>
			<table class="price-table">
				<tbody>
					<tr>
						<td>学生(高校生まで)</td>
						<td>：4回</td>
					</tr>
					<tr>
						<td>大人</td>
						<td>：3回</td>
					</tr>
				</tbody>
			</table>
		</section>
		<div class="h-price-under"></div>
		<a href="contact.php" class="btn btn--orange btn-c">ご予約、お問い合わせはこちら</a>
	</main>
	<footer>
		<p class="footer-p">©︎2022 Koki Motomura</p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script>
	$(function () {
		$(window).scroll(function () {
			const wHeight = $(window).height();
			const scrollAmount = $(window).scrollTop();
			$('.introduction-img').each(function () {
				const targetPosition = $(this).offset().top;
				if(scrollAmount > targetPosition - wHeight + 60) {
					$(this).addClass("fadeInDown");
				}
			});
		});
	});
	</script>
</body>
</html>