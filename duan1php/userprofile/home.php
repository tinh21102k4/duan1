
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="home-slider margin-bottom-0">

				<!-- Slide -->
				<div data-background-image="assets/img/banner-12.png" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									<div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="text-light fs-sm ft-ragular mb-0">New Collection</h5>
											<h1 class="mb-1 ft-bold lg-heading text-light">The Standard<br>With Smartness</h1>
											<span class="trending text-light">Apple 10 comes with 6.5 inches full HD + High Valume</span>
										</div>

										<a href="#" class="btn btn-white stretched-link">Buy Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div>
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div data-background-image="assets/img/banner-27.png" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									<div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="text-light fs-sm ft-ragular mb-0">Super Sale</h5>
											<h1 class="mb-1 ft-bold lg-heading text-light">The Standard<br>With Smartness</h1>
											<span class="trending text-light">Xiomi Redmi 10 comes with 6.5 inches full HD + LCD Screen</span>
										</div>

										<a href="#" class="btn btn-white stretched-link">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div>
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div data-background-image="assets/img/banner-28.png" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									<div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
											<h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
											<span class="trending">There's nothing like trend</span>
										</div>

										<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div>
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ======================= Customer Features ======================== -->
			<section class="p-0">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
								<div class="d_ico">
									<i class="fas fa-shopping-basket"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Free Shipping</h5>
									<span class="text-muted">Capped at $10 per order</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
								<div class="d_ico">
									<i class="far fa-credit-card"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Secure Payments</h5>
									<span class="text-muted">Up to 6 months installments</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
								<div class="d_ico">
									<i class="fas fa-shield-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">15-Days Returns</h5>
									<span class="text-muted">Shop with fully confidence</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
								<div class="d_ico">
									<i class="fas fa-headphones-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">24x7 Fully Support</h5>
									<span class="text-muted">Get friendly support</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= Customer Features ======================== -->
			
			<!-- ======================= Product List ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Trendy Products</h2>
								<h3 class="ft-bold pt-3">Our Trending Products</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center rows-products">			
						<!-- Single -->
						<?php
                              $product =  loadproduct();
							  foreach($product as $pro):
						?>
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="index.php?act=sanphamct&prdid=<?php echo $pro['prdid']?>"><img class="card-img-top" src="./images/<?php echo $pro['image']  ?>" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Cloth</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="index.php?act=sanphamct&prdid=<?php echo $pro['prdid']?>"><?php echo $pro['name']?></a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm"><?php echo $pro['price']?> VND</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					
						</div>
						
					</div>
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="shop-style-1.html" class="btn stretched-link borders">Explore More<i class="lni lni-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= Product List ======================== -->
			
			<!-- ======================= Tag Wrap Start ============================ -->
			<section class="bg-cover" style="background:url(assets/img/e-middle-banner.png) no-repeat;">
				<div class="ht-60"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-sm-12">
							<div class="tags_explore text-center">
								<h2 class="mb-0 text-white ft-bold">Big Sale Up To 70% Off</h2>
								<p class="text-light fs-lg mb-4">Exclussive Offers For Limited Time</p><p>
								<a href="#" class="btn btn-lg bg-white px-5 text-dark ft-medium">Explore Your Order</a>
							</p></div>
						</div>
					</div>
				</div>
				<div class="ht-60"></div>
			</section>
			<!-- ======================= Tag Wrap Start ============================ -->
			
			<!-- ======================= All Category ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Popular Categories</h2>
								<h3 class="ft-bold pt-3">Trending Categories</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center justify-content-center">
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/headphones.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Headphones</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/watch.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Watches</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/washing-machine.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Washing Machine</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/cell-phone.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">iPhones</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/safety-goggles.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Goggles</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/camera.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Video Camera</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/fashion.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Wear</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/tshirt.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Kid's Wear</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/accessories.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/sneakers.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Shoes</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/television.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="assets/img/pant.png" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Pants</a></h6></div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= All Category ======================== -->
			
			<!-- ======================= Customer Review ======================== -->
			<section class="gray">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Testimonials</h2>
								<h3 class="ft-bold pt-3">Client Reviews</h3>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
							<div class="reviews-slide px-3">
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">Mark Jevenue</h4>
											<span class="fs-sm">CEO of Addle</span>
										</div>
									</div>
								</div>
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-2.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">Henna Bajaj</h4>
											<span class="fs-sm">Aqua Founder</span>
										</div>
									</div>
								</div>
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-3.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">John Cenna</h4>
											<span class="fs-sm">CEO of Plike</span>
										</div>
									</div>
								</div>
								
								<!-- single review -->
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="assets/img/team-4.jpg" class="img-fluid circle" alt="" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0">Madhu Sharma</h4>
											<span class="fs-sm">Team Manager</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= Customer Review ======================== -->
			
			<!-- ======================= Top Seller Start ============================ -->
			<section class="space min">
				<div class="container">
					
					<div class="row">
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="top-seller-title"><h4 class="ft-medium">Top 3 on sale</h4></div>
							<div class="ftr-content">
									<?php
									$topproduct = topproduct();
									 foreach ($topproduct as $prd):
									
									?>
								<!-- Single Item -->
								<div class="product_grid row">
									<div class="col-xl-4 col-lg-5 col-md-5 col-4">
										<div class="shop_thumb position-relative">
											<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
											<a class="card-img-top d-block overflow-hidden" href="index.php?act=sanphamct&prdid=<?php echo $prd['prdid']?>"><img class="card-img-top" src="./images/<?php echo $prd['image']  ?>" alt="..."></a>
										</div>
									</div>
									<div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
										<div class="text-left mfliud">
											<div class="elso_titl"><span class="small">ON SALE </span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="index.php?act=sanphamct&prdid=<?php echo $prd['prdid']?>"><?php echo $prd['name']?></a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm"><?php echo $prd['price']?> VND</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								
								<?php endforeach ?>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="ftr-title"><h4 class="ft-medium">Top 3 latest product</h4></div>
							<div class="ftr-content">

								<!-- Single Item -->
								<?php
									$topnewproduct = topnewproduct();
									 foreach ($topnewproduct as $newprd):
									
									?>
								<div class="product_grid row">
									<div class="col-xl-4 col-lg-5 col-md-5 col-4">
										<div class="shop_thumb position-relative">
											<div class="badge bg-warning text-white position-absolute ft-regular ab-left text-upper">Hot</div>
											<a class="card-img-top d-block overflow-hidden" href="index.php?act=sanphamct&prdid=<?php echo $newprd['prdid']?>"><img class="card-img-top" src="./images/<?php echo $newprd['image']  ?>" alt="..."></a>
										</div>
									</div>
									<div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
										<div class="text-left mfliud">
											<div class="elso_titl"><span class="small">NEW PRODUCT</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="index.php?act=sanphamct&prdid=<?php echo $newprd['prdid']?>"><?php echo $newprd['name']  ?></a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm"><?php echo $newprd['price']  ?>VND</span></div>
										</div>
									</div>
								</div>
								<?php endforeach ?>
								

								
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="ftr-title"><h4 class="ft-medium">Top 3 product limited</h4></div>
							<div class="ftr-content">

								<!-- Top 3 product limited -->

								<?php
									$top3productlimit = top3limited();
									 foreach ($top3productlimit as $limit):
									
									?>
								<div class="product_grid row">
									<div class="col-xl-4 col-lg-5 col-md-5 col-4">
										<div class="shop_thumb position-relative">
											<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
											<a class="card-img-top d-block overflow-hidden" href="index.php?act=sanphamct&prdid=<?php echo $limit['prdid']?>"><img class="card-img-top" src="./images/<?php echo $limit['image']  ?>" alt="..."></a>
										</div>
									</div>
									<div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
										<div class="text-left mfliud">
											<div class="elso_titl"><span class="small">PRODUCT LIMIT</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="index.php?act=sanphamct&prdid=<?php echo $limit['prdid']?>"><?php echo $limit['name']  ?></a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm"><?php echo $limit['price']  ?>VND</span></div>
										</div>
									</div>
								</div>
								
								<?php endforeach ?>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ======================= Top Seller Start ============================ -->
			
			<!-- ======================= Brand Start ============================ -->
			<section class="py-3 br-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="smart-brand">
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-1.png" class="img-fluid" alt="" />
								</div>
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-2.png" class="img-fluid" alt="" />
								</div>
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-3.png" class="img-fluid" alt="" />
								</div>
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-4.png" class="img-fluid" alt="" />
								</div>
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-5.png" class="img-fluid" alt="" />
								</div>
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-6.png" class="img-fluid" alt="" />
								</div>
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-1.png" class="img-fluid" alt="" />
								</div>
								
								<div class="single-brnads">
									<img src="assets/img/shop-logo-2.png" class="img-fluid" alt="" />
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============