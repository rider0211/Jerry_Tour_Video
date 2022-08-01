@include('common.header')
		<!-- Page content -->
		<div class="container-fluid body-container">
			<div class="mx-auto tm-content-container">
				<main>
					<div class="row mb-5 pb-4">
						<div class="col-12">
							<h2 class="tm-page-title mb-4"><a href="/clients/{{$client->Customer_ID}}" class="tm-text-primary">Go to Clients List</a></h2>
						</div>
						<div class="col-12">
							<!-- Video player 1422x800 -->
							<video width="1422" height="800" controls autoplay>
							  <source src="/assets/video/{{$playVideo->Location}}" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</div>
					<div class="row mb-5 pb-5">
						<div class="col-xl-8 col-lg-7">
							<!-- Video description -->
							<div class="tm-video-description-box">
								<h2 class="mb-5 tm-video-title">About this Video</h2>
								<p class="mb-4">Cras dictum pretium est, et imperdiet ex. Fusce vitae vestibulum ipsum. Maecenas ultricies ipsum a urna ullamcorper, id interdum est blandit. Vivamus sit amet justo sed erat iaculis consequat. Nulla suscipit posuere lectus ut venenatis. Proin sed orci eget tellus euismod vulputate eu eu arcu.</p>
								<p class="mb-4">Etiam a bibendum lorem. Curabitur ac bibendum odio. Vivamus euismod dui mauris, ut tincidunt mi congue quis. Phasellus luctus orci dolor, a luctus massa tincidunt vitae. Integer sit amet odio id libero tincidunt dignissim in eget arcu.</p>
								<p class="mb-4">Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. Cras euismod leo a urna placerat, vel blandit turpis fermentum.</p>	
							</div>							
						</div>
						<div class="col-xl-4 col-lg-5">
							<!-- Share box -->
							<div class="tm-bg-gray tm-share-box">
								<h6 class="tm-share-box-title mb-4">Share this video</h6>
								<div class="mb-5 d-flex">
									<a href="https://www.facebook.com/sharer/sharer.php?u=link_to_be_shared" class="tm-bg-white tm-share-button"><i class="fab fa-facebook"></i></a>
									<a href="https://twitter.com/intent/tweet?url=link_to_be_shared" class="tm-bg-white tm-share-button"><i class="fab fa-twitter"></i></a>
									<a href="https://pinterest.com" class="tm-bg-white tm-share-button"><i class="fab fa-pinterest"></i></a>
									<a href="mailto:codemaster9428@gmail.com" class="tm-bg-white tm-share-button"><i class="far fa-envelope"></i></a>
								</div>
								<p class="mb-4">Author: <a href="/clients/{{$client->Customer_ID}}" class="tm-text-link">{{$client->Client_Name}}</a></p>
								<!-- <a href="#" class="tm-bg-white px-5 mb-4 d-inline-block tm-text-primary tm-likes-box tm-liked">
									<i class="fas fa-heart mr-3 tm-liked-icon"></i>
									<i class="far fa-heart mr-3 tm-not-liked-icon"></i>
									<span id="tm-likes-count">486 likes</span>
								</a> -->
								<div>
									<a class="btn btn-primary p-0 tm-btn-animate tm-btn-download tm-icon-download" href="/assets/video/{{$playVideo->Location}}" download="{{$client->Client_Name}}"><span>Download Video</span></a>	
								</div>								
							</div>
						</div>
					</div>
					<div class="row pt-4 pb-5">
						<div class="col-12">
							<h2 class="mb-5 tm-text-primary">Related Videos for You</h2>
							<div class="row tm-catalog-item-list">
								@foreach($videos as $key=>$video)
								<div class="col-lg-3 col-md-6 col-sm-12 tm-catalog-item">
		                            <div class="position-relative tm-thumbnail-container-relate">
		                                <img src="/assets/img/thumbnail/{{$video->Thumbnail}}"style="width:100%; height:300px;" alt="Image" class="img-fluid tm-catalog-item-img">    
		                                <a href="/video/{{$video->Client_ID}}/{{$video->ID}}" class="position-absolute tm-img-overlay">
		                                    <i class="fas fa-play tm-overlay-icon"></i>
		                                </a>
		                            </div>
		                        </div>
								@endforeach
		                    </div>
						</div>
					</div>
				</main>
			</div>
    </div>
@include('common.footer')
