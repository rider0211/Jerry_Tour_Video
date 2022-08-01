
    <footer class="footer">
      <div class="container">
        <div class="row">
        <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Footer Logo-->
              <div class="footer-logo">
                <img src="/assets/img/1880townlogo.png" style="width:300px"/>
              </div>
              <!-- Footer Social Area-->
              
            </div>
          </div>
        <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h3 class="widget-title">Pages</h3>
              <!-- Footer Menu-->
              <div class="footer_menu">
                  <div class="row">
                      <div class="col-4" style="text-align:center;">
                        <a href="/">Video</a>
                      </div>
                      <div class="col-4" style="text-align:center;">
                        <a href="/about">About</a>
                      </div>
                      <div class="col-4" style="text-align:center;">
                        <a href="/contact">Contact</a>
                      </div>
                  </div>
                  <div class="footer_social_area my-3">
                    <div class="row">
                        <div class="col-3" style="text-align:center;">
                            <a href="https://facebook.com" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="col-3" style="text-align:center;">
                            <a href="https://pinterest.com" target="_blank"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="col-3" style="text-align:center;">
                            <a href="https://skype.com" target="_blank"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                        </div>
                        <div class="col-3" style="text-align:center;">
                            <a href="https://twitter.com" target="_blank"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h3 class="widget-title">Contact</h3>
              <!-- Footer Menu-->
              <div class="footer_menu">
                  <div class="row">
                      <div class="col-12" style="text-align:center;">
                        <a href="mailTo:jerry.durgin1@gmail.com"><span class="fa fa-envelope"></span><span class="text" style="padding:10px;">jerry.durgin1@gmail.com</span></a>
                      </div>
                      <div class="col-12" style="text-align:center;">
                        <a href="tel:+16055742343"><span class="fa fa-phone"></span><span class="text" style="padding:10px;">+16055742343</span></a>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
    
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            let windowWidth = window.innerWidth;
            let newVidWidth = windowWidth;
            let newVidHeight = windowWidth * vidHeight / vidWidth;
            let marginLeft = 0;
            let marginTop = 0;

            if (newVidHeight < 500) {
                newVidHeight = 500;
                newVidWidth = newVidHeight * vidWidth / vidHeight;
            }

            if(newVidWidth > windowWidth) {
                marginLeft = -((newVidWidth - windowWidth) / 2);
            }

            if(newVidHeight > 720) {
                marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
            }

            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
            tmVideo.css('margin-left', marginLeft);
            tmVideo.css('margin-top', marginTop);
        }

        function search(param){
            var csrf = document.querySelector('meta[name="csrf-token"]').content;
            if(param == 1){
                var search_word = $('#customer_search').val();
                $.post("/search",
                {
                    _token: csrf,
                    searchType:'customer',
                    searchWord : search_word,
                }).done(function(data){
                    if(data.status){
                        var customers = data.payload;
                        $('#customers_list').html("");
                        for(var i = 0; i < customers.length; i++){
                            $('#customers_list').append(
                                '<div class="col-lg-3 col-md-6 col-sm-12 tm-catalog-item">'+
                                    '<div class="position-relative tm-thumbnail-container">'+
                                        '<img src="/assets/img/customers/'+customers[i].Customer_Avatar+'" alt="Image" style="width:100%; height:300px;" class="img-fluid tm-catalog-item-img">'+
                                        '<a href="/clients/'+customers[i].ID+'" class="position-absolute tm-img-overlay">'+
                                            '<i class="fas fa-play tm-overlay-icon"></i>'+
                                        '</a>'+
                                    '</div>'+
                                    '<div class="p-4 tm-bg-gray tm-catalog-item-description">'+
                                        '<h3 class="tm-text-primary mb-3 tm-catalog-item-title">'+customers[i].Customer_Name+'</h3>'+
                                    '</div>'+
                                '</div>'
                            );
                        }
                    }else{
                        
                    }
                }).fail(function(err){
                });
            }else if(param == 2){
                var search_word = $('#client_search').val();
                var customer_id = $('#customer_id').val();
                $.post("/search",
                {
                    _token: csrf,
                    searchType:'client',
                    searchWord : search_word,
                    customer_id : customer_id
                }).done(function(data){
                    if(data.status){
                        var clients = data.payload;
                        $('#clients_list').html("");
                        for(var i = 0; i < clients.length; i++){
                            $('#clients_list').append(
                                '<div class="col-lg-3 col-md-6 col-sm-12 tm-catalog-item">'+
                                    '<div class="position-relative tm-thumbnail-container">'+
                                        '<img src="/assets/img/clients/'+clients[i].Client_Avatar+'" alt="Image" style="width:100%; height:300px;" class="img-fluid tm-catalog-item-img">'+
                                        '<a href="/video/'+clients[i].ID+'/1" class="position-absolute tm-img-overlay">'+
                                            '<i class="fas fa-play tm-overlay-icon"></i>'+
                                        '</a>'+
                                    '</div>'+
                                    '<div class="p-4 tm-bg-gray tm-catalog-item-description">'+
                                        '<h3 class="tm-text-primary mb-3 tm-catalog-item-title">'+clients[i].Client_Name+'</h3>'+
                                    '</div>'+
                                '</div>'
                            );
                        }
                    }else{
                    }
                }).fail(function(err){
                });
            }
        }
        function showAll(param){
            var csrf = document.querySelector('meta[name="csrf-token"]').content;
            if(param == 1){
                $.post("/showAll",
                {
                    _token: csrf,
                    searchType:'customer',
                }).done(function(data){
                    if(data.status){
                        var customers = data.payload;
                        $('#customers_list').html("");
                        for(var i = 0; i < customers.length; i++){
                            $('#customers_list').append(
                                '<div class="col-lg-3 col-md-6 col-sm-12 tm-catalog-item">'+
                                    '<div class="position-relative tm-thumbnail-container">'+
                                        '<img src="/assets/img/customers/'+customers[i].Customer_Avatar+'" alt="Image" style="width:100%; height:300px;" class="img-fluid tm-catalog-item-img">'+
                                        '<a href="/clients/'+customers[i].ID+'" class="position-absolute tm-img-overlay">'+
                                            '<i class="fas fa-play tm-overlay-icon"></i>'+
                                        '</a>'+
                                    '</div>'+
                                    '<div class="p-4 tm-bg-gray tm-catalog-item-description">'+
                                        '<h3 class="tm-text-primary mb-3 tm-catalog-item-title">'+customers[i].Customer_Name+'</h3>'+
                                    '</div>'+
                                '</div>'
                            );
                        }
                    }else{
                        
                    }
                }).fail(function(err){
                });
            }else{
                var customer_id = $('#customer_id').val();
                $.post("/showAll",
                {
                    _token: csrf,
                    searchType:'client',
                    customer_id : customer_id
                }).done(function(data){
                    if(data.status){
                        var clients = data.payload;
                        $('#clients_list').html("");
                        for(var i = 0; i < clients.length; i++){
                            $('#clients_list').append(
                                '<div class="col-lg-3 col-md-6 col-sm-12 tm-catalog-item">'+
                                    '<div class="position-relative tm-thumbnail-container">'+
                                        '<img src="/assets/img/clients/'+clients[i].Client_Avatar+'" alt="Image" style="width:100%; height:300px;" class="img-fluid tm-catalog-item-img">'+
                                        '<a href="/video/'+clients[i].ID+'/1" class="position-absolute tm-img-overlay">'+
                                            '<i class="fas fa-play tm-overlay-icon"></i>'+
                                        '</a>'+
                                    '</div>'+
                                    '<div class="p-4 tm-bg-gray tm-catalog-item-description">'+
                                        '<h3 class="tm-text-primary mb-3 tm-catalog-item-title">'+clients[i].Client_Name+'</h3>'+
                                    '</div>'+
                                '</div>'
                            );
                        }
                    }else{
                    }
                }).fail(function(err){
                });
            }
        }
        $(document).ready(function () {
            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        })
    </script>
</body>

</html>