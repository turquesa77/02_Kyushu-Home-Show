<script>　
$(document).ready(function(){
	$('.slideShow__box').slick({
		infinite: true,
		autoplay: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
		});
	});
</script>

<section class="slideShow">
	<h2>会場の様子</h2>
	<ul class="slideShow__box">
		<li><img src="common/images/slide_img01.jpg" width="754" height="371" alt=""/></li>
		<li><img src="common/images/slide_img02.jpg" width="754" height="371" alt=""/></li>
		<li><img src="common/images/slide_img03.jpg" width="754" height="371" alt=""/></li>
		<li><img src="common/images/slide_img04.jpg" width="754" height="371" alt=""/></li>
		<li><img src="common/images/slide_img05.jpg" width="754" height="371" alt=""/></li>
		<li><img src="common/images/slide_img06.jpg" width="754" height="371" alt=""/></li>
	</ul>
<!-- /.slideShow --></section>
