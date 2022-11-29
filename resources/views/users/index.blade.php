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
                        <h6 class="mt-0 mb-3 fs-14"><a class="text-black"></a>{{$g->id_barang}}</h6>
                        <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                            <li>{{$g->no_part}}</li>
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
                                            <h3 class="mb-0 text-black font-w600">{{ $current_date->count() }} </h3>
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
                                            <h3 class="mb-0 text-black font-w600">{{ $current_week->count() }}</h3>
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
                                            <h3 class="mb-0 text-black font-w600">{{ $current_month->count() }} </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!--Button-->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Pengiriman</h4>
                            </div>
                            <div class="card-body">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-round ml-auto" data-bs-toggle="modal"
                                    data-bs-target="#basicModal">
                                    <i class="fa fa-plus"></i> Tambah Data</button>
                            </div>

                            <div class="bootstrap-modal">
                                <!-- Modal -->
                                <div class="modal fade" id="basicModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Input data baru</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label>id_barang</label>
                                                        <input id="id_barang" type="text" name="id_barang" class="form-control"
                                                            placeholder="Masukkan id barang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>no_part</label>
                                                        <input id="no_part" type="text" name="no_part" class="form-control"
                                                            placeholder="Masukkan no_part">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>desc</label>
                                                        <input id="desc" type="text" name="desc" class="form-control"
                                                            placeholder="Masukkan desc">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>asal kirim</label>
                                                        <input id="asal_kirim" type="text" name="asal_kirim" class="form-control"
                                                            placeholder="Masukkan asal kirim">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>ekspedisi</label>
                                                        <input id="ekspedisi" type="text" name="ekspedisi" class="form-control"
                                                            placeholder="Masukkan ekspedisi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Status Kirim</label>
                                                        <select id="status_kirim" type="text" name="status_kirim" class="form-control">
                                                            <option value="1">1-On The Way</option>
                                                            <option value="2">2-Arrived</option>
                                                        </select>
                                                    </div>


                                                {{--  <button type="button" class="btn btn-danger light"
                                                    data-bs-dismiss="modal">Close</button>  --}}
                                                    <div class="">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                {{--  <button type="submit" class="btn btn-primary">Save</button>  --}}

                                            </form>
                                            {{--  <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Barang</th>
                                                <th>No Part</th>
                                                <th>Desc</th>
                                                <th>Asal Kirim</th>
                                                <th>Ekspedisi</th>
                                                <th>Status Kirim</th>
                                                <th style="text-align:center;width:30%">Peta </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($imos as $u)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $u->id_barang }}</td>
                                                    <td>{{ $u->no_part }}</td>
                                                    <td>{{ $u->desc }}</td>
                                                    <td>{{ $u->asal_kirim }}</td>
                                                    <td>{{ $u->ekspedisi }}</td>
                                                    <td>{{ $u->status_kirim }}</td>
                                                    <td>
                                                        {{-- <div role="tabpanel" class="tab-pane fade show active" id="first"> --}}
                                                            <script type="text/javascript">
                                                                // Map appearance
                                                                var width="100%";         // width in pixels or percentage
                                                                var height="150";         // height in pixels
                                                                var names=true;           // always show ship names (defaults to false)

                                                                // Single ship tracking
                                                                var show_track=true;      // display track line (last 24 hours)
                                                            </script>
                                                            <script type="text/javascript">
                                                                var imo = "{{ $u->no_part }}";
                                                            </script>
                                                            <script type="text/javascript" src="https://www.vesselfinder.com/aismap.js"></script>
                                                        </div>
                                                    </td>
                                                    {{-- <td>
                                                        <a href="{{ route('users.detail', $u->id) }}"
                                                            class="btn btn-primary">Details</a>
                                                    </td> --}}

                                                </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection
