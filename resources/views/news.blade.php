@extends('layouts.master')

@section('title', 'News')

@section('content')

	<!-- Title Page -->
	<section class="section-slide">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro-01.jpg);">

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				News
			</h3>
		</div>
	</section>


	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="index.html" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					News
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="news_detail">
									<img height="380px" src="images/2/1.jpg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										28
									</span>

									<span class="txt31">
										Dec, 2018
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="news_detail" class="tit9">Cat campur aer</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										28 December, 2018
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<p>
									Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
								</p>

								<a href="news_detail" class="dis-block txt4 m-t-30">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="news_detail">
									<img height="380px" src="images/2/5.jpg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										20
									</span>

									<span class="txt31">
										Dec, 2018
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="news_detail" class="tit9">tinta campur cat</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										20 December, 2018
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<p>
									Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
								</p>

								<a href="news_detail" class="dis-block txt4 m-t-30">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<!-- Pagination -->
						<div class="pagination flex-l-m flex-w m-l--6 p-t-25">
							<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
							<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<!-- Search -->
						<div class="search-sidebar2 size12 bo2 pos-relative">
							<input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search" placeholder="Search">
							<button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
						</div>
						
						<!-- Archive -->
						<div class="archive">
							<h4 class="txt33 p-b-20 p-t-43">
								Archive
							</h4>

							<ul>
								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										uly 2018
									</a>

									<span class="txt29">
										(9)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										June 2018
									</a>

									<span class="txt29">
										(39)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										May 2018
									</a>

									<span class="txt29">
										(29)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										April  2018
									</a>

									<span class="txt29">
										(35)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										March 2018
									</a>

									<span class="txt29">
										(22)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										February 2018
									</a>

									<span class="txt29">
										(32)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										January 2018
									</a>

									<span class="txt29">
										(21)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										December 2017
									</a>

									<span class="txt29">
										(26)
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection