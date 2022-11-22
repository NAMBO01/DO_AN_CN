<div class="banner" id="home1">
    <div class="container">
        <h3>fashions fade, <span>style is eternal</span></h3>
    </div>
</div>
<!-- //banner -->

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-5 wthree_banner_bottom_left">
            <div class="video-img">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                </a>
            </div>
            <!-- pop-up-box -->
            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" property="" media="all" />
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!--//pop-up-box -->
            <div id="small-dialog" class="mfp-hide">
                <iframe src="https://player.vimeo.com/video/23259282?title=0&byline=0&portrait=0"></iframe>
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
        </div>
        <div class="col-md-7 wthree_banner_bottom_right">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                            data-toggle="tab" aria-controls="home">T-shirts</a></li>
                    <li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab"
                            aria-controls="skirts">Shoes</a></li>
                    <li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab"
                            aria-controls="watches">BackPack</a></li>
                    <li role="presentation"><a href="#sandals" role="tab" id="sandals-tab" data-toggle="tab"
                            aria-controls="sandals">BALL</a></li>
                    <li role="presentation"><a href="#jewellery" role="tab" id="jewellery-tab" data-toggle="tab"
                            aria-controls="jewellery">BASKETBALL SOCKS</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="agile_ecommerce_tabs ">
                            @foreach ($t_shirt as $shirt)
                                <div class="col-md-4 agile_ecommerce_tab_left ">
                                    <img src="images/hinh_sp/{{ $shirt->hinh }}" alt=" "
                                        class="img-responsive" />

                                    <h5>
                                        <a href="/single?id_sp={{ $shirt->ma_san_pham }}">
                                            {{ $shirt->ten_san_pham }} </a>
                                    </h5>
                                    <div class="simpleCart_shelfItem ">
                                        <p><span>${{ $shirt->don_gia }}</span> <i
                                                class="item_price">${{ $shirt->gia_giam }}</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>

                                </div>
                            @endforeach

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    {{-- shoes --}}
                    <div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
                        <div class="agile_ecommerce_tabs ">
                            @foreach ($n_shoes as $shoes)
                                <div class="col-md-4 agile_ecommerce_tab_left ">
                                    <img src="images/hinh_sp/{{ $shoes->hinh }}" alt=" "
                                        class="img-responsive" />

                                    <h5>
                                        <a href="/single?id_sp={{ $shoes->ma_san_pham }}">
                                            {{ $shoes->ten_san_pham }} </a>
                                    </h5>
                                    <div class="simpleCart_shelfItem ">
                                        <p><span>${{ $shoes->don_gia }}</span> <i
                                                class="item_price">${{ $shoes->gia_giam }}</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>

                                </div>
                            @endforeach

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    {{-- ----- --}}
                    <div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
                        <div class="agile_ecommerce_tabs ">
                            @foreach ($n_backpack as $backpack)
                                <div class="col-md-4 agile_ecommerce_tab_left ">
                                    <img src="images/hinh_sp/{{ $backpack->hinh }}" alt=" "
                                        class="img-responsive" />

                                    <h5>
                                        <a href="/single?id_sp={{ $backpack->ma_san_pham }}">
                                            {{ $backpack->ten_san_pham }} </a>
                                    </h5>
                                    <div class="simpleCart_shelfItem ">
                                        <p><span>${{ $backpack->don_gia }}</span> <i
                                                class="item_price">${{ $backpack->gia_giam }}</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>

                                </div>
                            @endforeach
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="sandals" aria-labelledby="sandals-tab">
                        <div class="agile_ecommerce_tabs ">
                            @foreach ($t_shirt as $shirt)
                                <div class="col-md-4 agile_ecommerce_tab_left ">
                                    <img src="images/hinh_sp/{{ $shirt->hinh }}" alt=" "
                                        class="img-responsive" />

                                    <h5>
                                        <a href="/single?id_sp={{ $shirt->ma_san_pham }}">
                                            {{ $shirt->ten_san_pham }} </a>
                                    </h5>
                                    <div class="simpleCart_shelfItem ">
                                        <p><span>${{ $shirt->don_gia }}</span> <i
                                                class="item_price">${{ $shirt->gia_giam }}</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>

                                </div>
                            @endforeach

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="jewellery" aria-labelledby="jewellery-tab">
                        <div class="agile_ecommerce_tabs ">
                            @foreach ($t_shirt as $shirt)
                                <div class="col-md-4 agile_ecommerce_tab_left ">
                                    <img src="images/hinh_sp/{{ $shirt->hinh }}" alt=" "
                                        class="img-responsive" />

                                    <h5>
                                        <a href="/single?id_sp={{ $shirt->ma_san_pham }}">
                                            {{ $shirt->ten_san_pham }} </a>
                                    </h5>
                                    <div class="simpleCart_shelfItem ">
                                        <p><span>${{ $shirt->don_gia }}</span> <i
                                                class="item_price">${{ $shirt->gia_giam }}</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>

                                </div>
                            @endforeach

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal-video-->
            <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog"
                aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="images/20.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look women's shirt</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog"
                aria-labelledby="myModal1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="images/63.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look black women's jeans</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog"
                aria-labelledby="myModal2">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="images/23.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look women's Watch</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog"
                aria-labelledby="myModal3">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="images/24.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look women's Sandal</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog"
                aria-labelledby="myModal4">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="images/22.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look women's Necklace</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog"
                aria-labelledby="myModal5">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="images/35.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look women's Jacket</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog"
                aria-labelledby="myModal6">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="images/39.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look women's Long Skirt</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner-bottom -->

<!-- banner-bottom1 -->
<div class="banner-bottom1">
    <div class="agileinfo_banner_bottom1_grids">
        <div class="col-md-7 agileinfo_banner_bottom1_grid_left">
            <h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
            <a href="/product">Shop Now</a>
        </div>
        <div class="col-md-5 agileinfo_banner_bottom1_grid_right">
            <h4>hot deal</h4>
            <div class="timer_wrap">
                <div id="counter"> </div>
            </div>
            <script src="js/jquery.countdown.js"></script>
            <script src="js/script.js"></script>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner-bottom1 -->

<!-- special-deals -->
<div class="special-deals">
    <div class="container">
        <h2>Special Deals</h2>
        <div class="w3agile_special_deals_grids">
            <div class="col-md-7 w3agile_special_deals_grid_left">
                <div class="w3agile_special_deals_grid_left_grid">
                    <img src="images/poster.jpg" alt=" " class="img-responsive" />
                    <div class="w3agile_special_deals_grid_left_grid_pos1">
                        <h5>30%<span>Off/-</span></h5>
                    </div>
                    <div class="w3agile_special_deals_grid_left_grid_pos">
                        <h4>We Offer <span>Best Products</span></h4>
                    </div>
                </div>
                <div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="images/stephen-curry.png" alt=" " class="img-responsive" />
                                    <p> <i> “ I can do all thing ” </i> </p>
                                    <h4><b>Stephen Curry</b> / Golden State Warrior</h4>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="images/michael-jordan.png" alt=" " class="img-responsive" />
                                    <p><i> “ I have failed many times in my life and that's why I succeed ” </i></p>
                                    <h4><b>Michael Jordan</b> / BULL</h4>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="images/ben-simmons.png" alt=" " class="img-responsive" />
                                    <p>Something about basketball: “ Is that you don't play basketball on paper ”
                                    </p>
                                    <h4>BEN SIMMONS</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
            <div class="col-md-5 w3agile_special_deals_grid_right">
                <img src="images/BaoStore Shop.jpg" alt=" " class="img-responsive" />
                <div class="w3agile_special_deals_grid_right_pos">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //special-deals -->
<!-- new-products -->
<div class="new-products">
    <div class="container">
        <h3>New Products</h3>
        <div class="agileinfo_new_products_grids">
            @foreach ($new_product as $n_product)
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1 ">
                        <img src="images/hinh_sp/{{ $n_product->hinh }}" alt=" " class="img-responsive" />
                        <h5><a href="/single">{{ $n_product->ten_san_pham }}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>${{ $n_product->don_gia }}</span> <i
                                    class="item_price">${{ $n_product->gia_giam }}</i></p>
                            <p><a class="item_add" href="#">Add to cart</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 1.png" alt=" " class="img-responsive" />
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 2.png" alt=" " class="img-responsive" />
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 1.png" alt=" " class="img-responsive" />
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 2.png" alt=" " class="img-responsive" />
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 1.png" alt=" " class="img-responsive" />
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 2.png" alt=" " class="img-responsive" />
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 1.png" alt=" " class="img-responsive" />
                        <img src="images/ÁO KHOÁC NIKE BIG SWOOSH 2.png" alt=" " class="img-responsive" />
                        <div class="hs_bottom hs_bottom_sub">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal5"><span
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5><a href="/single">ÁO KHOÁC NIKE BIG SWOOSH</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><span>$320</span> <i class="item_price">$250</i></p>
                        <p><a class="item_add" href="#">Add to cart</a></p>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="images/JD_BALL_HG.jpg" alt=" " class="img-responsive" />
                        <img src="images/JD_BALL_HG_2.jpg" alt=" " class="img-responsive" />
                        <img src="images/JD_BALL_HG.jpg" alt=" " class="img-responsive" />
                        <img src="images/JD_BALL_HG_2.jpg" alt=" " class="img-responsive" />
                        <img src="images/JD_BALL_HG.jpg" alt=" " class="img-responsive" />
                        <img src="images/JD_BALL_HG_2.jpg" alt=" " class="img-responsive" />
                        <img src="images/JD_BALL_HG.jpg" alt=" " class="img-responsive" />
                        <img src="images/JD_BALL_HG_2.jpg" alt=" " class="img-responsive" />
                        <div class="hs_bottom hs_bottom_sub">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal6"><span
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5><a href="/single">BANH JORDAN HYPER GRIP</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><span>$320</span> <i class="item_price">$250</i></p>
                        <p><a class="item_add" href="#">Add to cart</a></p>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="images/BALO JORDAN ZION .jpg" alt=" " class="img-responsive" />
                        <img src="images/BALO JORDAN ZION 2 .jpg" alt=" " class="img-responsive" />
                        <img src="images/BALO JORDAN ZION 3 .jpg" alt=" " class="img-responsive" />
                        <img src="images/BALO JORDAN ZION 4 .jpg" alt=" " class="img-responsive" />
                        <img src="images/BALO JORDAN ZION .jpg" alt=" " class="img-responsive" />
                        <img src="images/BALO JORDAN ZION 2 .jpg" alt=" " class="img-responsive" />
                        <img src="images/BALO JORDAN ZION 3 .jpg" alt=" " class="img-responsive" />
                        <img src="images/BALO JORDAN ZION 4 .jpg" alt=" " class="img-responsive" />
                        <div class="hs_bottom hs_bottom_sub">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"><span
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5><a href="/single">BALO JORDAN ZION</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><span>$320</span> <i class="item_price">$250</i></p>
                        <p><a class="item_add" href="#">Add to cart</a></p>
                    </div>
                </div>
            </div> --}}
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //new-products -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Top Brands</h3>
        <div class="sliderfig">
            <ul id="flexiselDemo1">
                <li>
                    <img src="images/nike.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/adidas.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/jordan.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/under armour.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/puma.png" alt=" " class="img-responsive" />
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<!-- //top-brands -->
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3>Newsletter</h3>
            <p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';"
                    onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="" />
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
