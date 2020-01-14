<?php
include('includes/public_header.php');

if (isset($_POST['submit'])) {
	$email 	 = $_POST['email'];
	$textcon = $_POST['textcon'];

	$query="INSERT INTO contact(email,cout_text)VALUES('$email','$textcon')";
	
	
	mysqli_query($conn,$query);
	echo '<script>window.top.location="contact.php"</script>';
}

?>


<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1" style="background-image: url(admin/uplode/banner-bg.jpg);">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							<span style="color: white !important; font-family: cursive !important;" class="ltext-101 cl2 respon2">
								Cat
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 style="color: white !important; font-family: cursive !important;" class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								NEW PAT
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a style="background-color:#2bd5c5; font-family: cursive !important;" href="add_pet.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								ِAdd Pet
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1" style="background-image: url(admin/uplode/call-bg.jpg);">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span style="color: white !important; font-family: cursive !important;" class="ltext-101 cl2 respon2">
								OYTHERS ANIMALS
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 style="color: white !important; font-family: cursive !important;" class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								NEW PAT
							</h2>
						</div>

						<div  class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a style="background-color:#2bd5c5 ; font-family: cursive !important;" href="add_pet.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								ِAdd Pet
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item-slick1" style="background-image: url(admin/uplode/slider-2.jpg);">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span style="color: white !important; font-family: cursive !important;" class="ltext-101 cl2 respon2">
								DOG
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2  style="color: white !important; font-family: cursive !important;"class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								NEW PAT
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a style="background-color:#2bd5c5;font-family: cursive !important;" href="add_pet.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								ِAdd Pet
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="" method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input  class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea name="textcon" class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25"  placeholder="How Can We Help?"></textarea>
						</div>

						<button name="submit" type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Amman , Jordan
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+962 795878871
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								yazanmuala1@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<?php
include('includes/public_footer.php');
?>

	