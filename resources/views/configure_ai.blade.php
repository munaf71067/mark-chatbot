  @extends('layout.layout')
  @section('title', 'view Report')
  @section('main')

      <main class="adminuiux-content has-sidebar" onclick="contentClick()">
          <!-- body content of pages -->

          <!-- breadcrumb -->
          <div class="container-fluid mt-4">
              <div class="row gx-3 align-items-center">
                  <div class="col-12 col-sm">
                      <nav aria-label="breadcrumb" class="mb-2">
                          <ol class="breadcrumb mb-0">
                              <li class="breadcrumb-item bi"><a href="investment-dashboard.html"><i
                                          class="bi bi-house-door me-1 fs-14"></i> Dashboard</a></li>
                              <li class="breadcrumb-item active bi" aria-current="page">Setup AI</li>
                          </ol>
                      </nav>
                      <h5>Setup AI</h5>
                  </div>
                  {{-- <div class="col-12 col-sm-auto text-end py-3 py-sm-0">

                      <a href="investment-add-goal.html" class="btn btn-theme">
                          <i class="bi bi-plus-lg"></i> Create <span class="d-none d-md-inline">Goal</span>
                      </a>
                  </div> --}}
              </div>
          </div>

          <!-- content -->
          <div class="container mt-4" id="main-content">
              <div class="row">
                  <!-- primary goal -->
                  {{-- <div class="col-12 col-lg-12 col-xxl-4 mb-4 theme-teal">
                        <div class="card adminuiux-card position-relative overflow-hidden bg-theme-1 h-100">
                            <div class="position-absolute top-0 start-0 h-100 w-100 z-index-0 coverimg opacity-25">
                                <img src="assets/img/modern-ai-image/tree-15.jpg" alt="">
                            </div>
                            <div class="card-body z-index-1">
                                <div class="row align-items-center justify-content-center h-100 py-4">
                                    <div class="col-11">
                                        <h2 class="fw-normal">Your goals saving has been grown by</h2>
                                        <h1 class="mb-3">$7.45k</h1>
                                        <p>1 goal will be completed soon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                  <!--goals-->
                  <div class="col-12 col-lg-8 col-xxl-4 mb-4">
                      <div class="card adminuiux-card">
                          <div class="card-body">
                              <div class="row gx-3 mb-3">
                                  <div class="col-auto">
                                      <i class="bi bi-house fs-4 avatar avatar-50 bg-success text-white rounded"></i>
                                  </div>
                                  <div class="col">
                                      <h5 class="mb-0 fw-medium">Add Document to related answer</h5>
                                      <p class="small opacity-75">Life Goal</p>
                                  </div>
                              </div>
                              <div class="col-12 col-md-12 col-lg-12">
                                  <div class="card">
                                      <div class="card-body">
                                          {{-- <p class="h5 card-title mb-3">Card title</p> --}}
                                          {{-- <img src="https://picsum.photos/1000/600" class="mw-100 rounded mb-2"
                                              alt="..."> --}}
                                          {{-- <p class="card-text text-secondary">Some quick example text to build on the card
                                              title and make up the bulk of the card's content.</p> --}}
                                              <form action="/upload-ai-document" method="POST" enctype="multipart/form-data">
                                                @csrf
                                              <input type="file" class="form-control mb-3" name="file">
                                          <button  type="submit" class="btn btn-theme form-control">Upload</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                            
                              
                           
                             
                             
                              
                          </div>
                      </div>
                  </div>

                  <!--goals-->
                  <div class="col-12 col-lg-4 col-xxl-4 mb-4">
                      <div class="card adminuiux-card overflow-hidden bg-theme-1">
                          <div class="card-body position-relative">
                              <div class="position-absolute top-0 start-0 h-100 w-100 z-index-0 coverimg opacity-25">
                                  <img src="assets/img/modern-ai-image/taxi-1.jpg" alt="">
                              </div>
                              <div class="row gx-3 position-relative z-index-1">
                                  <div class="col-12 mb-1">
                                      <div class="row">
                                          <div class="col-auto">
                                              <i
                                                  class="bi bi-car-front fs-4 avatar avatar-50 bg-white-opacity text-white rounded"></i>
                                          </div>
                                          <div class="col">
                                              <h6 class="mt-3 fw-medium">Uploaded Document</h6>
                                              {{-- <p class="small opacity-75">Life Goal</p> --}}
                                          </div>
                                      </div>
                                  </div>
                                 
                                 
                              </div>
                          </div>
                          <div class="card adminuiux-card">
                            <br>
                             @foreach($files as $file)
                              <div class="card-body" style="margin-top: -20px">
                                  <div class="card">
                                      <div class="card-body">
                                               

                                          <div class="row align-items-center">
                                              <div class="col-auto">
                                                  <i class="bi bi-archive text-danger h4"></i>
                                              </div>
                                              <div class="col d-flex justify-content-between align-items-center">
                                                  <p class="text-secondary mt-2">{{Str::limit(basename( $file->title),10) }}</p>
                                                  <div>
                                                   <i class="bi bi-eye" style="margin-right: 10px"></i>
                                                   <i class="bi bi-trash"></i>
                                                  </div>
                                              </div>
                                             
                                          </div>
                                         
                                          
                                      </div>
                                  </div>
                                
                                
                               
                              </div>
                               @endforeach
                          </div>
                      </div>
                  </div>

              </div>

          </div>
      </main>
  @endsection
