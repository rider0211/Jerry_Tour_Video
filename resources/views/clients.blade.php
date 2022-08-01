@include('common.header')
    <div class="container-fluid body-container">
        <div id="content" class="mx-auto tm-content-container">
            <main>
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" id="customer_id" value="{{$customer->ID}}"/>
                        <h2 class="tm-page-title mb-4">Clients of <a href="/" class="tm-text-primary">{{$customer->Customer_Name}}</a></h2>
                        <div class="tm-categories-container mb-5">
                            <h3 class="tm-text-primary tm-categories-text">Search:</h3>
                            <ul class="nav tm-category-list">
                                <input type="text" id="client_search" class="form-control" placeholder="Search by Client Name"/>
                            </ul>
                            <button class="btn btn-primary" onclick="search(2)" style="padding: 3px; margin-left: 15px; padding-left:10px; padding-right:10px">Search</button>
                            <button class="btn btn-primary" onclick="showAll(2)" style="padding: 3px; margin-left: 15px; padding-left:10px; padding-right:10px">Show All</button>
                        </div>        
                    </div>
                </div>
                <div class="row tm-catalog-item-list" id="clients_list">
                @foreach($clients as $key=>$client)
                <div class="col-lg-3 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        @if(!$client->Client_Avatar)
                            <img src="/assets/img/human_avatar.png" alt="Image" style="width:100%; height:300px;" class="img-fluid tm-catalog-item-img">
                        @else
                            <img src="/assets/img/clients/{{$client->Client_Avatar}}" alt="Image" style="width:100%; height:300px;" class="img-fluid tm-catalog-item-img">
                        @endif
                        <a href="/video/{{$client->ID}}/1" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$client->Client_Name}}</h3>
                    </div>
                </div>
                @endforeach
                </div>
            </main>
        </div>
    </div>
@include('common.footer')