<main id="main">



		<div class="container">

		 <!--
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Trade-in offer</h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand">On all products</h1>
                                    <p class="animated">Save more with coupons & up to 70% off</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="product-details.html"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="assets/imgs/slider/slider-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-7">Great Collection</h1>
                                    <p class="animated">Save more with coupons & up to 20% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="product-details.html"> Discover Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="assets/imgs/slider/slider-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section> -->

			<!--MAIN SLIDE-->
			{{-- <!-- former slider
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-interval="500" data-items="1" data-loop="true" loop="true" data-nav="true" data-dots="false" autoPlay="true" >
					@foreach($sliders as $slide)
						<div class="item-slide">
							<img src="{{ asset ('assets/images/sliders')}}/{{$slide->image}}" alt="" class="img-slide">
							<div class="slide-info slide-1">
								<h2 class="f-title"><b>{{$slide->title}}</b></h2>
								<span class="subtitle">{{$slide->subtitle}}</span>
								<p class="sale-info">Only price: <span class="price">AED {{$slide->price}}</span></p>
								<a href="{{$slide->link}}" class="btn-link">Shop Now</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>  --> --}}

			 <section class="home-slider position-relative pt-50 ">
                <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">

                    @foreach($sliders as $slide)
                    <div class="single-hero-slider single-animation-wrap">
                        <div class="container">
                            <div class="row align-items-center slider-animated-1">
                                <div class="col-lg-5 col-md-6">
                                    <div class="hero-slider-content-2">
                                        <h4 class="animated">{{$slide->title}}</h4>
                                        <h2 class="animated fw-900">{{$slide->subtitle}}</h2>
                                        <h1 class="animated fw-900 text-brand">On all products</h1>
                                        <p class="animated">Save more with coupons & up to 60% off</p>
                                        <a class="animated btn btn-brush btn-brush-3" href="{{$slide->link}}"> Shop Now </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="single-slider-img single-slider-img-1">
                                        <img class="animated slider-1-1" src="{{ asset ('assets/images/sliders')}}/{{$slide->image}}" height="400px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--
                    <div class="single-hero-slider single-animation-wrap">
                        <div class="container">
                            <div class="row align-items-center slider-animated-1">
                                <div class="col-lg-5 col-md-6">
                                    <div class="hero-slider-content-2">
                                        <h4 class="animated">Hot promotions</h4>
                                        <h2 class="animated fw-900">Fashion Trending</h2>
                                        <h1 class="animated fw-900 text-7">Great Collection</h1>
                                        <p class="animated">Save more with coupons & up to 20% off</p>
                                        <a class="animated btn btn-brush btn-brush-2" href="product-details.html"> Discover Now </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="single-slider-img single-slider-img-1">
                                        <img class="animated slider-1-2" src="assets/imgs/slider/slider-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                </div>
                <div class="slider-arrow hero-slider-1-arrow"></div>
            </section>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/grocery_banner_1.jpg') }}" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/grocery_banner_2.jpg') }}" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>

			    <!-- ======= Our Dome categories Section ======= -->
			    <!--
            <section id="team" class="category_members">


              <div class="container" data-aos="fade-up">
                <div class="row">

                  <div class="col-2"><!---class="col-lg-3 col-md-6" was in--><!--
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Todays Deals</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2"><!---class="col-lg-3 col-md-6" was in--><!--
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">New Arrivals</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2"><!---class="col-lg-3 col-md-6" was in--><!--
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Best Selling</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;"> Sales</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Clear Sales</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2"
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Sell With Us</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">The Disabled</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Eldery</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Baby</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Kids</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Women</p>
                        </div>
                    </a>
                  </div>

                  <div class="col-2">
                    <a href="#">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <p style="text-align: center;">Men</p>
                        </div>
                    </a>
                  </div>

                </div>

              </div>
            </section>--><!-- End Our Categories Section -->


			<!--On Sale Products-->

			@if($sproducts->count() > 0 ) <!--&& $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() -- was in the if statement-->
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">Flash Sales</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="{{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d  h:m:s') }} "></div> {{--<---->--}}
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="true" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"2"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
					@foreach ($sproducts as $sproduct)

                        <div class="product product-style-2 equal-elem">
                            <div class="product-thumnail">
                                <a href="{{route('product.details', ['slug'=>$sproduct->slug])}}" title="{{$sproduct->name}}">
                                    <figure><img src="{{ asset('assets/images/products') }}/{{$sproduct->image}}" style="max-height: 150px; height=100%; width=100%;"" alt="{{$sproduct->name}}"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details', ['slug'=>$sproduct->slug])}}" class="product-name"><span>{{$sproduct->name}}</span></a>
                                <div class="wrap-price"><ins><p class="product-price">AED {{$sproduct->sale_price}}</p></ins> <del><p class="product-price">AED {{$sproduct->regular_price}}</p></del></div>
                            </div>
                        </div>

					@endforeach
				</div>
			</div>
			@endif

            <!--since On Sale previously under testing-->
            {{--
			<div class="wrap-show-advance-info-box style-1 "><!-- has-countdown (belongs to div class if with timer)-->
				<h3 class="title-box">Best Sales</h3>
				<!--
				<div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div> (belongs to div class if with timer)-->
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="true" data-nav="true"
				 data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                 @foreach ($lproducts as $lproduct)
                    <div class="product product-style-2  ">
                        <div class="product-thumnail" >
                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" title="{{$lproduct->name}}">
                                <figure><img src="{{asset('assets/images/products')}}/{{$lproduct->image}}" width="800" max-height="800" alt="{{$lproduct->name}}"></figure>
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="product-name"><span>{{$lproduct->name}}</span></a>
                            <div class="wrap-price"><span class="product-price">AED {{$lproduct->sale_price}}</span></div>
                        </div>
                    </div>
                @endforeach

				</div>
			</div>--}}

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/digital-electronic-banner.jpg') }}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="true" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"2"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
								@foreach ($lproducts as $lproduct)

									<div class="product product-style-2 equal-elem">
										<div class="product-thumnail"  >
											<a href="{{route('product.details',['slug'=>$lproduct->slug])}}" title="{{$lproduct->name}}">
												<figure><img src="{{asset('assets/images/products')}}/{{$lproduct->image}}" style="max-height: 150px; height=100%; width=100%;" alt="{{$lproduct->name}}"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="product-name"><span>{{$lproduct->name}}</span></a>
											<div class="wrap-price"><span class="product-price">AED {{$lproduct->sale_price}}</span></div>
										</div>
									</div>

								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>


			<!--Product Categories-->

			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							@foreach($categories as $key=>$category)
								<a href="#category_{{$category->id}}" class="tab-control-item {{$key==0 ? 'active':''}}">{{$category->name}}</a>
							@endforeach
						</div>
						<div class="tab-contents">
							@foreach($categories as $key=>$category)
							<div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="true" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"2"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
									@php
										$c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
									@endphp

									@foreach($c_products as $c_product)
										<div class="product product-style-2 equal-elem ">
											<div class="product-thumnail">
												<a href="{{route('product.details', ['slug'=>$c_product->slug])}}" title="{{$c_product->name}}">
													<figure><img src="{{ asset('assets/images/products') }}/{{$c_product->image}}" style="max-height: 150px; height=100%; width=100%;" alt="{{$c_product->name}}"></figure>
												</a>
											</div>
											<div class="product-info">
												<a href="{{route('product.details', ['slug'=>$c_product->slug])}}" class="product-name"><span>{{$c_product->name}}</span></a>
												<div class="wrap-price"><span class="product-price">AED {{$c_product->sale_price}}</span></div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
</main>
