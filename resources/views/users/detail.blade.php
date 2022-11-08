@extends('layout.master')
@section('content')
    <div class="event-sidebar dz-scroll active" id="eventSidebar">
        <div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
            <div class="card-body text-center event-calender pb-2">
                <input type='text' class="form-control d-none" id='datetimepicker1' />
            </div>
        </div>
        <div class="card shadow-none rounded-0 bg-transparent h-auto">
            <div class="card-header border-0 pb-0">
                <h4 class="text-black">Pengunjung Terkini</h4>
            </div>

            <div class="card-body">
                <div class="media mb-5 align-items-center event-list">
                    <div class="p-3 text-center rounded me-3 date-bx bgl-primary">
                        <h2 class="flaticon-381-user-7"></h2>
                    </div>
                    <div class="media-body px-0">
                        <h6 class="mt-0 mb-3 fs-14"><a class="text-black"></a></h6>
                        <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--**********************************  EventList END ***********************************-->
    <!--**********************************  Content body start ***********************************-->
    <div class="content-body rightside-event">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <!--Total Visitor-->
                <div class="row">
                    <div class="col-xl-4 col-sm-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Pengunjung Hari Ini</p>
                                        <h3 class="mb-0 text-black font-w600"> </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Pengunjung Minggu Ini</p>
                                        <h3 class="mb-0 text-black font-w600"></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Pengunjung Bulan Ini</p>
                                        <h3 class="mb-0 text-black font-w600"></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Total Visitor-->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMO</h4>
                            </div>
                            {{--  <div class="card-body">
                                <a href="#" class="btn btn-primary"><span><i class="fa fa-plus"></i>
                                    </span> Tambah Pengunjung</button></a>
                                <a href="#" class="btn btn-danger">
                                    <span><i class="fa fa-power-off" aria-hidden="true"></i></span> Keluar</button></a>
                            </div>  --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane fade show active"
                                                            id="first">
                                                            {{--  @foreach ($imo as $i)  --}}
                                                            <script type="text/javascript">
                                                                var imo = "9619969";
                                                            </script>
                                                            <script type="text/javascript" src="https://www.vesselfinder.com/aismap.js"></script>
                                                           
                                                            {{--  <img class="img-fluid" src="{{asset('/assets/images/product/1.jpg')}}" alt="">  --}}
                                                        </div> 
                                                        {{--  @endforeach  --}}
                                                    </div>
                                                </div>
                                                <!--Tab slider End-->
                                                <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                                    <div class="product-detail-content">
                                                        <!--Product details-->
                                                        <div class="new-arrival-content pr">
                                                            <h4>No. IMO 9619969 </h4>
                                                            {{--  <div class="comment-review star-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>

                                                                </ul>
                                                                <span class="review-text">(34 reviews) / </span><a
                                                                    class="product-review" href="#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#reviewModal">Write a review?</a>
                                                            </div>  --}}
                                                            {{--  <div class="d-table mb-2">
                                                                <p class="price float-start d-block">$325.00</p>
                                                            </div>
                                                            <p>Availability: <span class="item"> In stock <i
                                                                        class="fa fa-shopping-basket"></i></span>
                                                            </p>
                                                            <p>Product code: <span class="item">0405689</span> </p>
                                                            <p>Brand: <span class="item">Lee</span></p>
                                                            <p>Product tags:&nbsp;&nbsp;
                                                                <span class="badge badge-success light">bags</span>
                                                                <span class="badge badge-success light">clothes</span>
                                                                <span class="badge badge-success light">shoes</span>
                                                                <span class="badge badge-success light">dresses</span>
                                                            </p>  --}}
                                                            <p class="text-content">There are many variations of passages
                                                                of Lorem Ipsum available, but the majority have suffered
                                                                alteration in some form, by injected humour, or randomised
                                                                words which don't look even slightly believable.
                                                                If you are going to use a passage of Lorem Ipsum, you need
                                                                to be sure there isn't anything embarrassing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- review -->
                                <div class="modal fade" id="reviewModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Review</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="text-center mb-4">
                                                        <img class="img-fluid rounded" width="78"
                                                            src="public/assets/images/avatar/1.jpg" alt="DexignZone">
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="rating-widget mb-4 text-center">
                                                            <!-- Rating Stars Box -->
                                                            <div class="rating-stars">
                                                                <ul id="stars">
                                                                    <li class="star" title="Poor" data-value="1">
                                                                        <i class="fa fa-star fa-fw"></i>
                                                                    </li>
                                                                    <li class="star" title="Fair" data-value="2">
                                                                        <i class="fa fa-star fa-fw"></i>
                                                                    </li>
                                                                    <li class="star" title="Good" data-value="3">
                                                                        <i class="fa fa-star fa-fw"></i>
                                                                    </li>
                                                                    <li class="star" title="Excellent" data-value="4">
                                                                        <i class="fa fa-star fa-fw"></i>
                                                                    </li>
                                                                    <li class="star" title="WOW!!!" data-value="5">
                                                                        <i class="fa fa-star fa-fw"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                                    </div>
                                                    <button class="btn btn-success btn-block">RATE</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--**********************************
         Footer end
        ***********************************-->
                </div>

                <script src="public/assets/vendor/global/global.min.js"></script>
                <script src="public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
                <script src="public/assets/vendor/bootstrap-datetimepicker/js/moment.js"></script>
                <script src="public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

                <script src="public/assets/vendor/star-rating/jquery.star-rating-svg.js"></script>
                <script src="public/assets/vendor/owl-carousel/owl.carousel.js"></script>

                <script src="public/assets/js/custom.js"></script>
                <script src="public/assets/js/deznav-init.js"></script>
                <script src="public/assets/js/demo.js"></script>
                <script src="public/assets/js/styleSwitcher.js"></script>
                <script>
                    function cardsCenter() {

                        /*  testimonial one function by = owl.carousel.js */



                        jQuery('.card-slider').owlCarousel({
                            loop: true,
                            margin: 20,
                            nav: false,
                            autoplay: true,
                            //center:true,
                            slideSpeed: 3000,
                            paginationSpeed: 3000,
                            dots: false,
                            navText: ['', ''],
                            responsive: {
                                0: {
                                    items: 1
                                },
                                576: {
                                    items: 3
                                },
                                800: {
                                    items: 3
                                },
                                991: {
                                    items: 4
                                },
                                1200: {
                                    items: 5
                                },
                                1600: {
                                    items: 6
                                }
                            }
                        })
                    }

                    jQuery(window).on('load', function() {
                        setTimeout(function() {
                            cardsCenter();
                        }, 1000);
                    });
                </script>

                <!--**********************************
                Main wrapper end
            ***********************************-->
                </body>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
