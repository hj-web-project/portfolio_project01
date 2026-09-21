<?php 
  $page_title = "portfolio"; 
  
  include_once '../header.php'; 
?>

	<style>
		.project-list-contents-wr .project-list-ul{display:flex; flex-wrap:wrap; border-top:1px solid #000;}
		.project-list-contents-wr .project-list-ul .project-list-li{width:25%; border-right:1px solid #000;  border-bottom:1px solid #000;}
		.project-list-contents-wr .project-list-ul .project-list-li:nth-child(4n){border-right:1px solid transparent;}
		.project-list-contents-wr .project-list-ul .project-list-li:nth-last-child(-n + 4) {border-bottom:0;}
		.project-list-contents-wr .project-list-ul .project-list-li .tx-box{padding:20px 16px; border-top:1px solid #000; }
		.project-list-contents-wr .project-list-ul .project-list-li .tx-box .tx{ font-size:16px; color:#191919; display:flex; align-items:center; gap:6px; font-family:"Pretendard", sans-serif;}
		.project-list-contents-wr .project-list-ul .project-list-li .tx-box .tx .line{display:inline-block; width:1px; height:12px; background:#ddd;}
		.project-list-contents-wr .project-list-ul .project-list-li .img__wr{overflow:hidden;}
		.project-list-contents-wr .project-list-ul .project-list-li .img__wr > img{ transition:all 0.4s ease;}
		@media (pointer: fine) {
			.project-list-contents-wr .project-list-ul .project-list-li:hover .img__wr > img{transform:scale(1.1);}
		}
		
		
		.filter-wr{position:relative;}
		.filter-wr .filter-btn{font-size:20px; font-weight:500; color:#000; display: flex; align-items: center; gap: 3px;}
		.filter-wr .filter-info-wr{position:absolute; top:100%; z-index:10; left:0; width:100%; background:#fff;}
	</style>
<div id="sub">
	<div class="sub-title-wr">
		<div class="inner__full">
			<h1 class="title PlayfairDisplay">PROJECT</h1>
		</div>
	</div>
	
	<div class="sub-title-wr filter-wr">
		<div class="inner__full">
			<a href="#none" class="filter-btn">Filter <img src="../images/plus_icon.png" alt="더보기"></a>
			<div class="filter-info-wr">
				<ul>
					<li>
						<a href="#none">Beauty</a>
						<a href="#none">Food</a>
						<a href="#none">Living</a>
						<a href="#none">Beauty</a>
						<a href="#none">Beauty</a>
					</li>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	
	<section class="project-list-contents-wr">
		<div class="inner__full">
			<div class="project-list-ul">
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
				<a href="#none" class="project-list-li">
					<div class="img__wr"><img src="../images/lnk_detail_img01.jpg" alt=""></div>
					<div class="tx-box">
						<p class="tx">이낙근 찹쌀떡 <span class="line"></span>카페24</p>
					</div>
				</a>
			</div>
			
		</div>	
	</section>
	
	<footer class="sub-footer">
		<div class="inner__cen1600 talign__center">
			<p class="tx01">웹 퍼블리셔 / 웹 프론트엔드 개발자 이혜지의<br> 2026 포트폴리오</p>
			<div class="ft-link-wr">
				<a href="index.html" class="tx01">포트폴리오 홈</a>
				<a href="javascript:void(0);" onclick="alert('준비 중입니다.');" class="tx01">실무 프로젝트 갤러리</a>
				<a href="index.html#main-contents-wr04" class="tx01">미팅신청</a>
			</div>
			<p class="tx01">© 2026 Leehaeji Portfolio</p>
		</div>
		
	</footer>
</div>
