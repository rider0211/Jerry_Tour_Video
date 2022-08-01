@include('common.header')
    <div class="container-fluid body-container">
        <div id="content" class="mx-auto tm-content-container">
            <main>
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-page-title mb-4">Our Customers</h2>
                        <div class="tm-categories-container mb-5">
                            <h3 class="tm-text-primary tm-categories-text">Search:</h3>
                            <ul class="nav tm-category-list">
                                <input type="text" id="customer_search" class="form-control" placeholder="Search by Customer Name"/>
                            </ul>
                            <button class="btn btn-primary" onclick="search(1)" style="padding: 3px; margin-left: 15px; padding-left:10px; padding-right:10px">Search</button>
                            <button class="btn btn-primary" onclick="showAll(1)" style="padding: 3px; margin-left: 15px; padding-left:10px; padding-right:10px">Show All</button>
                        </div>        
                    </div>
                </div>
                <div class="row tm-catalog-item-list" id="customers_list">
                @foreach($customers as $key=>$customer)
                <div class="col-lg-3 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/assets/img/customers/{{$customer->Customer_Avatar}}" alt="Image" style="width:100%; height:300px;" class="img-fluid tm-catalog-item-img">    
                        <a href="/clients/{{$customer->ID}}" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$customer->Customer_Name}}</h3>
                    </div>
                </div>
                @endforeach
                </div>
            </main>
        </div>
    </div>
@include('common.footer')