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
                <h4 class="text-black">Pengiriman Terkini</h4>
            </div>
            @foreach ($data as $g)
                <div class="card-body">
                    <div class="media align-items-center event-list">
                        <div class="p-3 text-center rounded me-3 date-bx bgl-primary">
                            <h2 class="flaticon-381-user-7"></h2>
                        </div>
                        <div class="media-body px-0">
                            <h6 class="mt-0 mb-3 fs-14"><a class="text-black"></a>{{ $g->id_barang }}</h6>
                            <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                                <li>{{ $g->no_part }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
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
                    {{--  <div class="col-xl-4 col-sm-4">
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
                    </div>  --}}
                    <!--Total Visitor-->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detail Track</h4>
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
                                                <div class="col-lg-5">
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane fade show active" id="first">                                                                                                                  
                                                            <script type="text/javascript">
                                                                // Map appearance
                                                                var width="100%";         // width in pixels or percentage
                                                                var height="450";         // height in pixels
                                                                var names=true;           // always show ship names (defaults to false)
                                                            
                                                                // Single ship tracking
                                                                var show_track=true;      // display track line (last 24 hours)
                                                            </script>                                                     
                                                            <script type="text/javascript">
                                                                var imo = "{{ $imos->no_part }}";
                                                            </script>
                                                            <script type="text/javascript" src="https://www.vesselfinder.com/aismap.js"></script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Tab slider End-->
                                                
                                                <div class="col-lg-6  col-md-6 ">
                                                    <div class="product-detail-content">
                                                        <!--Product details-->
                                                        <div class="new-arrival-content pr">
                                                          
                                                            <h4>ID Barang : {{ $imos->id_barang }}</h4>
                                                            <h4>Nomor Part : {{ $imos->no_part }}</h4>
                                                                                                                       
                                                            <td>{{ $imos->desc }}</td>
                                                            <td>{{ $imos->asal_kirim }}</td>
                                                            <td>{{ $imos->ekspedisi }}</td>
                                                            <td>{{ $imos->status_kirim }}</td>
                                                            </tr>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- review -->
                                {{--  <div class="modal fade" id="reviewModal">
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
                                </div>  --}}
                            </div>
                        </div>
                    </div>


                    <!--**********************************
                 Footer end
                ***********************************-->
                </div>

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
