<?php /* Template Name: Contact */ ?>
<?php $Url = get_template_directory_uri(); ?>
<?php get_header(); ?>
	<div class="maps">
		<div class="container">
			<div id="map" style="text-align : center;">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3033137391426!2d106.6938446490378!3d10.788065192275917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f34e8598ab7%3A0x6eab948274b4cf43!2zTmjDoCBIw6BuZyBUaeG7h2MgQ8aw4bubaSBCw6FjaCBWaeG7h3Q!5e0!3m2!1svi!2s!4v1570276533608!5m2!1svi!2s" width="100%" height="320px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    			<div>
    				<?php echo do_shortcode('[wp_swiper id=21]'); ?>
    			</div>

			</div>
		</div>
	</div>
	<div class="main">

		<div class="container">

			<div class="row">
				<div class="col-md-4">
					<div class="information">
						<img src="<?php echo $Url ?>/public/images/logo2.PNG" alt="logo" class="img-responsive"></a>
						<h4> TRUNG TÂM HỘI NGHỊ & TIỆC CƯỚI BÁCH VIỆT</h4>
						<h5>90 Mạc Đĩnh Chi, P. Đakao, Q.1, TP.HCM</h5>
						<a href="#">(028) 38273 678 - 38275 375</a>
						<h5>Email: info@bachviet.com.vn</h5>
					</div>
				</div>

				<div class="col-md-8">
					<form action="#" method="POST" role="form">
						<legend>Liên Hệ</legend>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Họ tên">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" class="form-control" id="number" placeholder="Số điện thoại">
							</div>
						</div>
						<textarea id="content" name="content" placeholder="Nội dung"></textarea>	

						<button type="submit" class="btn btn-primary">Gửi</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
