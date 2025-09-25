  @extends('layout.layout')


  @section('title', 'Dashboard');
  @section('main')
  <main class="adminuiux-content has-sidebar" onclick="contentClick()">
            <!-- body content of pages -->

            <!-- Content  -->
            <div class="container mt-4" id="main-content">

                <!-- Welcome box -->
                <div class="row align-items-center">
                    <div class="col-12 col-lg mb-4">
                        <h3 class="fw-normal mb-0 text-secondary">Good Morning,</h3>
                        <h1>Munaf</h1>
                    </div>
                    <!-- total profit -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mb-4">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <p class="text-secondary small mb-2">Total Customers</p>
                                <h4 class="mb-3">{{$total_cus_today}}</h4>
                                <span class="badge badge-light text-bg-success"><i class="me-1 bi bi-arrow-up-short"></i>28.50%</span>
                            </div>
                        </div>
                    </div>
                    <!-- Best Profit -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-3 mb-4">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <p class="text-secondary small mb-2">Requested to agent chat</p>
                                <h4 class="mb-3">{{$total_req_today}}</h4>
                                <span class="badge badge-light text-bg-success"><i class="me-1 bi bi-arrow-up-short"></i>54.35%</span>
                            </div>
                        </div>
                    </div>
                    <!-- top loser -->
                    <div class="col-12 col-sm-4 col-lg-3 col-xl-3 mb-4">
                        <div class="card adminuiux-card">
                            <div class="card-body">
                                <p class="text-secondary small mb-2">Chat Accepted by agent</p>
                                <h4 class="mb-3"> {{$total_accepted_today}} </h4>
                                <span class="badge badge-light text-bg-danger"><i class="me-1 bi bi-arrow-down-short"></i>18.25%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- summary quick -->
                   

                    <!-- Summary chart -->
                    <div class="col-12 col-lg-6 col-xl-8 mb-4">
                        <div class="card adminuiux-card">
                            <div class="row gx-0">

                                <!-- summary account -->
                                <div class="col-12 col-xl-4">
                                    <div class="card-header">
                                        <h6>Summary</h6>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="card adminuiux-card bg-theme-1 mb-3">
                                            <div class="card-body">
                                                <p class="text-white mb-2">Current Value</p>
                                                <h4 class="fw-medium">$ 65.52k <span class="text-white fs-14"><i class="bi bi-arrow-up-short me-1"></i> 18.5%</span></h4>
                                            </div>
                                        </div>
                                        <div class="card adminuiux-card bg-theme-1-subtle mb-3">
                                            <div class="card-body">
                                                <p class="text-secondary mb-2">Profit Revenue</p>
                                                <h4 class="fw-medium">$ 15.51k <span class="text-success fs-14"><i class="bi bi-arrow-up-short me-1"></i> 11.5%</span></h4>
                                            </div>
                                        </div>
                                        <div class="card adminuiux-card bg-theme-1-subtle mb-3">
                                            <div class="card-body">
                                                <p class="text-secondary mb-2">Investment</p>
                                                <h4 class="fw-medium">$ 45.00k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- chart section -->
                                <div class="col-12 col-xl-8">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination pagination-sm justify-content-end mb-0">
                                                        <li class="page-item"><a class="page-link" href="#">1D</a></li>
                                                        <li class="page-item"><a class="page-link active" href="#">1W</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1M</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1Y</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">All</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col position-relative text-end">
                                                <input type="text" class="form-control form-control-sm border-0 d-inline-block w-auto align-middle" id="daterangepicker">
                                                <button class="btn btn-sm btn-square btn-link d-inline-block align-middle" onclick="$(this).prev().click()">
                                                                <i data-feather="calendar" class="text-theme-1"></i>
                                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-1">
                                        <div class="w-100 height-300">
                                            <canvas id="summarychart"></canvas>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                     {{-- <div class="col-12 col-lg-6 col-xl-4 mb-4">
                        <div class="card adminuiux-card position-relative overflow-hidden bg-theme-1 h-100">
                            <div class="position-absolute top-0 start-0 h-100 w-100 z-index-0 coverimg opacity-50">
                                <img src="assets/img/modern-ai-image/flamingo-4.jpg" alt="">
                            </div>
                            <div class="card-body z-index-1">
                                <div class="row align-items-center justify-content-center h-100 py-4">
                                    <div class="col-11">
                                        <h2 class="fw-normal">Your portfolio value has been grown by</h2>
                                        <h1 class="mb-3">$7.52k</h1>
                                        <p>In last 7 days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}





                       <div class="col-12 col-md-12 col-xl-4 mb-2">
                        <div class="card adminuiux-card overflow-hidden">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar avatar-30 rounded-circle bg-theme-1-subtle text-theme-1"><i class="bi bi-people"></i></span>
                                    </div>
                                    <div class="col px-0">
                                        <h6>Agent Queue</h6>

                                    </div>

                                    {{-- <div class="col-auto px-0">
                                        <select class="form-select form-select-sm">
                                                        <option>USD</option>
                                                        <option>CAD</option>
                                                        <option>AUD</option>
                                                    </select>
                                    </div> --}}
                                    <div class="col-auto" >
                                        <button class="btn btn-sm btn-square btn-link"><i class="bi bi-arrow-clockwise"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <h4 class="fw-medium">$ 1152.25k </h4>
                                <p>Total net revenue is $ 756.83 <span class="text-success fs-14"><i class="bi bi-arrow-up-short"></i> 11.5%</span> increased in last week</p>

                                <!-- chart blue -->
                                <div class="summarychart height-110 w-100 mb-3">
                                    <canvas id="areachartblue1"></canvas>
                                </div> --}}
                                <div class="card adminuiux-card bg-theme-1-subtle">
                                    <div class="card-body">
                                        {{-- <p class="text-secondary small mb-2">Top performing investment is <b class="text-theme-1">Share Holdings</b></p>
                                        <h4 class="fw-medium">$ 165.52k <span class="text-success fs-14 fw-normal"><i class="bi bi-caret-up-fill me-1 fs-14"></i> 25.30%</span></h4> --}}
                                <ul class="list-group adminuiux-list-group list-group-flush chat-list-contacts bg-none rounded-0 " id="load_req">
                                          


                                </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- updates -->
                    {{-- <div class="col-12 mb-4">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-0">Updates:</h6>
                                <p class="small text-secondary">Today <span class="text-danger">Live</span></p>
                            </div>
                            <div class="col-12 col-sm-10">
                                <div class="swiper swipernav">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-success">24,806.00</h6>
                                            <p class="small"><span class="text-secondary">GIFTS NIFTYS:</span> <span class="text-success"><i class="bi bi-caret-up-fill"></i> 1.40%</span> </p>
                                        </div>
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-success">41,118.13</h6>
                                            <p class="small"><span class="text-secondary">Nikkies 2250:</span> <span class="text-success"><i class="bi bi-caret-up-fill"></i> 0.40%</span> </p>
                                        </div>
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-danger">30,006.00</h6>
                                            <p class="small"><span class="text-secondary">JOHN DOUES:</span> <span class="text-danger"><i class="bi bi-caret-down-fill"></i> 0.40%</span> </p>
                                        </div>
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-success">90,105.00</h6>
                                            <p class="small"><span class="text-secondary">Adminuiux Love:</span> <span class="text-success"><i class="bi bi-caret-up-fill"></i> 1.40%</span> </p>
                                        </div>
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-success">24,806.00</h6>
                                            <p class="small"><span class="text-secondary">GIFTS NIFTYS:</span> <span class="text-success"><i class="bi bi-caret-up-fill"></i> 1.40%</span> </p>
                                        </div>
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-success">41,118.13</h6>
                                            <p class="small"><span class="text-secondary">Nikkies 2250:</span> <span class="text-success"><i class="bi bi-caret-up-fill"></i> 0.40%</span> </p>
                                        </div>
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-danger">30,006.00</h6>
                                            <p class="small"><span class="text-secondary">JOHN DOUES:</span> <span class="text-danger"><i class="bi bi-caret-down-fill"></i> 0.40%</span> </p>
                                        </div>
                                        <div class="swiper-slide width-200">
                                            <h6 class="mb-0 text-success">90,105.00</h6>
                                            <p class="small"><span class="text-secondary">Adminuiux Love:</span> <span class="text-success"><i class="bi bi-caret-up-fill"></i> 1.40%</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-square btn-link"><i class="bi bi-arrow-clockwise"></i></button>
                            </div>
                        </div>
                    </div> --}}

                    <!-- investment category chart -->
                    {{-- <div class="col-12 col-lg-12 col-xl-8 mb-4">
                        <div class="card adminuiux-card">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-5 col-xl-5">
                                    <div class="card-header">
                                        <h6 class="my-1">Investment Categories</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="position-relative d-flex align-items-center justify-content-center text-center mb-3">
                                            <div class="position-absolute">
                                                <h4 class="mb-0">$ 1165.30k</h4>
                                                <p class="text-secondary small">Portfolio Value</p>
                                            </div>
                                            <canvas id="doughnutchart" class="mx-auto width-240 height-240"></canvas>
                                        </div>
                                        <p class="text-secondary small">You have invested in different types of categories shown as above and summary of each category.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-6 col-md-6 mb-4">
                                                <p class="text-secondary small mb-2">
                                                    <span class="me-1 avatar avatar-10 rounded bg-green"></span> Share holdings
                                                </p>
                                                <h4 class="ps-3 fw-medium">$ 165.52k<br> <span class="text-success fs-14 fw-normal"><i class="bi bi-caret-up-fill me-1 fs-14"></i> 25.30%</span></h4>

                                            </div>
                                            <div class="col-6 col-md-6 mb-4">
                                                <p class="text-secondary small mb-2">
                                                    <span class="me-1 avatar avatar-10 rounded bg-yellow"></span> Mutual Funds
                                                </p>
                                                <h4 class="ps-3 fw-medium">$ 265.85k<br> <span class="text-success fs-14 fw-normal"><i class="bi bi-caret-up-fill me-1"></i> 21.42%</span></h4>
                                            </div>
                                            <div class="col-6 col-md-6 mb-4">
                                                <p class="text-secondary small mb-2">
                                                    <span class="me-1 avatar avatar-10 rounded bg-orange"></span> Bank Bonds
                                                </p>
                                                <h4 class="ps-3 fw-medium">$ 356.26k<br> <span class="text-success fs-14 fw-normal"><i class="bi bi-caret-up-fill me-1"></i> 20.18%</span></h4>
                                            </div>
                                            <div class="col-6 col-md-6 mb-4">
                                                <p class="text-secondary small mb-2">
                                                    <span class="me-1 avatar avatar-10 rounded bg-purple"></span> Gov. Securities
                                                </p>
                                                <h4 class="ps-3 fw-medium">$ 185.65<br> <span class="text-success fs-14 fw-normal"><i class="bi bi-caret-up-fill me-1"></i> 15.65%</span></h4>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <p class="text-secondary small mb-2">
                                                    <span class="me-1 avatar avatar-10 rounded bg-secondary"></span> Fixed Deposit
                                                </p>
                                                <h4 class="ps-3 fw-medium">$ 190.45k<br> <span class="text-success fs-14 fw-normal"><i class="bi bi-caret-up-fill me-1"></i> 18.50%</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                       <div class="col-12 col-lg-12 col-xl-8 mb-4">
                        <div class="row mb-2">

                           @foreach($agentsData as $agent)

                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 col-xxl mb-3">
                                <a href="investment-company-shares.html" class="card adminuiux-card style-none text-center h-100">
                                    <div class="card-body">
                                        {{-- <i class="avatar avatar-40 text-theme-1 h3 bi bi-bank mb-3"></i> --}}
                                        <span class="avatar avatar-40 text-theme-1  h3 mb-3">{{ $agent['total'] }}</span>
                                        <p class="text-secondary small">{{ $agent['name'] }} {{ $agent['lname'] }}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach


                        </div>
                    </div>

                    <!-- wallet balance -->
                    <div class="col-12 col-md-12 col-xl-4 mb-4">
                        <div class="card adminuiux-card overflow-hidden">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar avatar-30 rounded-circle bg-theme-1-subtle text-theme-1"><i class="bi bi-arrow-left-right"></i></span>
                                    </div>
                                    <div class="col px-0">
                                        <h6>Transfer Agent to me</h6>
                                    </div>
                                
                                    {{-- <div class="col-auto px-0">
                                        <select class="form-select form-select-sm">
                                                        <option>USD</option>
                                                        <option>CAD</option>
                                                        <option>AUD</option>
                                                    </select>
                                    </div> --}}
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-square btn-link"><i class="bi bi-arrow-clockwise"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>agent</th>
                                                <th>name</th>
                                                <th>phone</th>


                                            </tr>
                                        </thead>
                                        <tbody id="transfer_data"></tbody>
                                    </table>
                                {{-- <h4 class="fw-medium">$ 1152.25k </h4>
                                <p>Total net revenue is $ 756.83 <span class="text-success fs-14"><i class="bi bi-arrow-up-short"></i> 11.5%</span> increased in last week</p> --}}

                                <!-- chart blue -->
                                <div  hidden class="summarychart height-110 w-100 mb-3">
                                    <canvas id="areachartblue1"></canvas>
                                </div>
                                {{-- <div class="card adminuiux-card bg-theme-1-subtle">
                                    <div class="card-body">
                                        <p class="text-secondary small mb-2">Top performing investment is <b class="text-theme-1">Share Holdings</b></p>
                                        <h4 class="fw-medium">$ 165.52k <span class="text-success fs-14 fw-normal"><i class="bi bi-caret-up-fill me-1 fs-14"></i> 25.30%</span></h4>
                                    </div>
                                </div> --}}

                                  <ul class="list-group adminuiux-list-group list-group-flush chat-list-contacts bg-none rounded-0 ">
                                          <li class="list-group-item new">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="avatar avatar-40 coverimg rounded-circle">
                                                    <img src="assets/img/modern-ai-image/user-4.jpg" alt="" style="display: none;">
                                                </figure>
                                            </div>
                                            <div class="col-9 align-self-center ps-0">
                                                <div class="row g-0">
                                                    <div class="col-8">
                                                        <p class="text-truncate mb-0">Roberto</p>
                                                    </div>
                                                    <div class="col-4 text-end"><small class="opacity-50 fs-10 mb-1">
                                                        {{-- <i class="bi bi-check-all text-info"></i> --}}
                                    <button class="btn btn-sm btn-accent active">accept</button></small></div>
                                                </div>
                                                {{-- <p class="opacity-75 small text-truncate">Spread love and spread this template</p> --}}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item new">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="avatar avatar-40 coverimg rounded-circle">
                                                    <img src="assets/img/modern-ai-image/user-1.jpg" alt="" style="display: none;">
                                                </figure>
                                            </div>
                                            <div class="col-9 align-self-center ps-0">
                                                <div class="row g-0">
                                                    <div class="col-8">
                                                        <p class="text-truncate mb-0">Adminuiux</p>
                                                    </div>
                                                    <div class="col-4 text-end"><small class="opacity-50 fs-10 mb-1">
                                                        {{-- <i class="bi bi-check-all text-success"></i> --}}
                                                         <button class="btn btn-sm btn-accent active">accept</button></small></div>
                                                </div>
                                                {{-- <p class="opacity-75 small text-truncate">Spread love and spread this template</p> --}}
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item new">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="avatar avatar-40 rounded-circle bg-warning text-white">
                                                    <span class="h6 align-middle">JC</span>
                                                </figure>
                                            </div>
                                            <div class="col-9 align-self-center ps-0">
                                                <div class="row g-0">
                                                    <div class="col-8">
                                                        <p class="text-truncate mb-0">Ms. Jully</p>
                                                    </div>
                                                    <div class="col-4 text-end"><small class="opacity-50 fs-10 mb-1">
                                                        {{-- <i class="bi bi-check-all"></i> --}}
                                    <button class="btn btn-sm btn-accent active">Accept</button>
                                  </small></div>
                                                </div>
                                                {{-- <p class="opacity-75 small text-truncate">Spread love and spread this template</p> --}}
                                            </div>
                                        </div>
                                    </li>

                                      {{-- <li class="list-group-item new">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="avatar avatar-40 coverimg rounded-circle">
                                                    <img src="assets/img/modern-ai-image/user-4.jpg" alt="" style="display: none;">
                                                </figure>
                                            </div>
                                            <div class="col-9 align-self-center ps-0">
                                                <div class="row g-0">
                                                    <div class="col-8">
                                                        <p class="text-truncate mb-0">Roberto </p>
                                                    </div>
                                                    <div class="col-4 text-end"><small class="opacity-50 fs-10 mb-1">
                                    <button class="btn btn-sm btn-accent active">accept</button></small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                                






                            </div>
                        </div>
                    </div>

                    <!-- start investment -->
                 

                    <!-- offer -->
                   

                    <!-- Assets funds and shares -->
                   

                </div>


            </div>
        </main>

        <script>
            function load_req() {

  $.ajax({
    
    url: "{{ route('load.req') }}",
    type: "post",
    data: {
      table: "load_req",
      _token: "{{ csrf_token() }}" // csrf token laravel ke liye zaruri hai
    },
    success: function(data) {
      $("#load_req").html(data);
    }
  });
}

function transfer_data() {
  $.ajax({
    url: "/transfer-data-idex",   // direct URL use karo
    type: "post",
    data: {_token: $('meta[name="csrf-token"]').attr('content')},
    success: function(data){
        $("#transfer_data").html(data);
    },
    error: function(xhr) {
        console.log("Error:", xhr.responseText);
    }
  });
}



$(document).ready(function(){
    // alert('hello');
  load_req();
  transfer_data();
});

setInterval(function() {
  transfer_data();
  load_req();
}, 1000);

        </script>
        @endsection