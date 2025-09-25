  @extends('layout.layout')
  @section('title', 'List Key Search')
    @section('main')


    
      <main class="adminuiux-content has-sidebar" onclick="contentClick()">
            <!-- body content of pages -->

            <!-- Content  -->
            <div class="container mt-4" id="main-content">

                <!-- Welcome box -->
              

                <div class="row">
                
                    <!-- Assets funds and shares -->
                    <div class="col-12">
                        {{-- <div class="card adminuiux-card mb-4">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6>Market with Technical Trend</h6>
                                    </div>
                                    <div class="col-auto px-0">
                                        <select class="form-select form-select-sm">
                                                        <option selected>All Trend</option>
                                                        <option>Bullish</option>
                                                        <option>Bearish</option>
                                                    </select>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-square btn-link"><i class="bi bi-arrow-clockwise"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table mb-0" data-show-toggle="true" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th class="">Company</th>
                                            <th>Price</th>
                                            <th data-breakpoints="xs">Holding</th>
                                            <th data-breakpoints="xs sm">Profit/Loss</th>
                                            <th data-breakpoints="xs">Today's Trend</th>
                                            <th>% Change</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Jintudal</p>
                                                <p class="small text-theme-1"><i class="bi bi-award-fill"></i> Event</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 100.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 152</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">102 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 1400.45 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 25.30%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 305.5 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-graph-up-arrow"></i> Bullish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 1.24%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Ciplasc</p>

                                            </td>
                                            <td>
                                                <p class="mb-0">$ 520.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 521.05</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">50 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 1520.45 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 15.40%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 408.65 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-danger"><i class="bi bi-graph-down-arrow"></i> Bearish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-danger"><i class="bi bi-caret-down-fill"></i> 0.85%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Trisha LLC</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 856.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 856.55</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">20 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 2050.00 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 35.15%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 685.00 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-graph-up-arrow"></i> Bullish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 1.03%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Cyborgous</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 150.00</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 153.00</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">3 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 450.00 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 10.00%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 45.0 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-danger"><i class="bi bi-graph-down-arrow"></i> Bearish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-danger"><i class="bi bi-caret-down-fill"></i> 0.65%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Spanishwebs</p>
                                                <p class="small text-theme-1"><i class="bi bi-award-fill"></i> Event</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 130.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 135.52</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">100 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 150.45 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 5.52%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 10.15 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-graph-up-arrow"></i> Bullish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 1.24%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Jintudal</p>
                                                <p class="small text-theme-1"><i class="bi bi-award-fill"></i> Event</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 100.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 152</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">102 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 1400.45 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 25.30%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 305.5 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-graph-up-arrow"></i> Bullish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 1.24%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Jintudal</p>
                                                <p class="small text-theme-1"><i class="bi bi-award-fill"></i> Event</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 100.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 152</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">102 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 1400.45 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 25.30%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 305.5 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-graph-up-arrow"></i> Bullish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 1.24%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Jintudal</p>
                                                <p class="small text-theme-1"><i class="bi bi-award-fill"></i> Event</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 100.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 152</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">102 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 1400.45 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 25.30%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 305.5 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-graph-up-arrow"></i> Bullish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 1.24%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Jintudal</p>
                                                <p class="small text-theme-1"><i class="bi bi-award-fill"></i> Event</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">$ 100.45</p>
                                                <p class="small"><span class="text-secondary" data-bs-toggle="tooltip" title="Last top price">LTP:</span> 152</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">102 units </p>
                                                <p class="small"><span class="text-secondary">Invested:</span> $ 1400.45 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 25.30%</p>
                                                <p class="small"><span class="text-secondary">Profit:</span> $ 305.5 </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-graph-up-arrow"></i> Bullish</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success"><i class="bi bi-caret-up-fill"></i> 1.24%</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success">Invest</button>
                                                <button class="btn btn-sm btn-outline-danger">Sell</button>
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn btn-link btn-square no-caret" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">View Chart</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Company Events</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div> --}}

                         <div class="card adminuiux-card mb-4">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="h6">Questions List</p>
                            </div>
                            {{-- <div class="col-auto">
                                <button type="button" class="btn btn-outline-theme btn-square" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false">
                                            <i class="bi bi-code-slash"></i>
                                        </button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <p class="mb-0">Add advanced interaction controls to your HTML tables the free & easy way</p>
                        <p class="text-secondary">This integration is done simply by including the DataTables Bootstrap 5 files (CSS and JS) which sets the defaults required for DataTables to be initialised as normal, as shown in this example.</p> --}}

                        <!-- data table -->
                        <div class=" mb-4">
                            <table class="table w-100 nowrap" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th data-breakpoints="xs sm" class="text-center">Question</th>
                                        <th data-breakpoints="xs sm md " class="text-center">No of Keywords</th>
                                        
                                       
                                        <th data-breakpoints="xs sm" hidden>Status</th>
                                        <th class="all">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @forelse($questions as $index => $question)

                                    <tr>

                                        <td>{{ $index + 1 }}</td>
                                        <td class="text-center">
                                          {{ $question->title }}
                                        </td>
                                        <td>
                                            <p class="mb-0 text-center">{{ $question->searches_count }}</p>
                                            {{-- <p class="text-secondary small">{{ $question->searches_count }}</p> --}}
                                        </td>
                                       
                                       
                                        <td hidden>
                                            <span class="badge badge-light rounded-pill text-bg-warning">Pending</span>
                                        </td>
                                        <td>
                                            <a href="investment-view-patient.html" class="btn btn-square btn-link" data-bs-toggle="tooltip" title="View">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                          
                                        </td>
                                    </tr>
                                      @empty
                                             <tr>
                                              <td colspan="4">No data found</td>
                                          </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{-- <a href="https://datatables.net/" target="_blank" class="btn btn-link">more details at Website</a> --}}
                    </div>
                    <div class="collapse" id="collapse1">
                        <div class="card-footer border-top">
                            <p>Above demo code already executed with <code>id="datatable"</code> in <code>function.js main.js</code></p>
                            <div class="bg-dark text-white p-2 rounded my-2">
                                <pre class="mb-2"><code class="code rounded language-html">
            &lt;table id="clientScheduleGrid" class="table w-100 nowrap"&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th&gt;ID&lt;/th&gt;
                        &lt;th data-breakpoints="xs sm"&gt;Patient&lt;/th&gt;
                        &lt;th data-breakpoints="xs sm md"&gt;Contact info&lt;/th&gt;
                        &lt;th data-breakpoints="xs sm"&gt;Tags&lt;/th&gt;
                        &lt;th class="all"&gt;Recent Schedule&lt;/th&gt;
                        &lt;th data-breakpoints="xs sm"&gt;Status&lt;/th&gt;
                        &lt;th class="all"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;td&gt;2054ID&lt;/td&gt;
            
                        &lt;td&gt;
                            &lt;div class="row align-items-center flex-nowrap"&gt;
                                &lt;div class="col-auto"&gt;
                                    &lt;figure class="avatar avatar-40 mb-0 coverimg rounded-circle"&gt;
                                        &lt;img src="assets/img/modern-ai-image/user-7.jpg" alt="" /&gt;
                                    &lt;/figure&gt;
                                &lt;/div&gt;
                                &lt;div class="col ps-0"&gt;
                                    &lt;p class="mb-0 fw-medium"&gt;David Warner&lt;/p&gt;
                                    &lt;p class="text-secondary small"&gt;32 years, United Kingdom&lt;/p&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
            
                        &lt;td&gt;
                            &lt;p class="mb-0"&gt;david@sales..core.com&lt;/p&gt;
                            &lt;p class="text-secondary small"&gt;+44 8466585****1154&lt;/p&gt;
                        &lt;/td&gt;
            
                        &lt;td&gt;
                            &lt;span class="badge badge-light rounded-pill text-bg-success"&gt;Fresh Case&lt;/span&gt;
                        &lt;/td&gt;
            
                        &lt;td&gt;
                            &lt;p class="mb-0"&gt;9:10 AM - 9 June 2024&lt;/p&gt;
                            &lt;p class="text-secondary small"&gt;Allergies -Dr. Ryan Sylia&lt;/p&gt;
                        &lt;/td&gt;
            
                        &lt;td&gt;
                            &lt;span class="badge badge-light rounded-pill text-bg-warning"&gt;Pending&lt;/span&gt;
                        &lt;/td&gt;
            
                        &lt;td&gt;
                            &lt;a href="investment-view-patient.html" class="btn btn-square btn-link" data-bs-toggle="tooltip" title="View"&gt;
                                &lt;i class="bi bi-eye"&gt;&lt;/i&gt;
                            &lt;/a&gt;
                            &lt;div class="dropdown d-inline-block"&gt;
                                &lt;a class="btn btn-link no-caret" data-bs-toggle="dropdown"&gt;
                                    &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
                                &lt;/a&gt;
                                &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
                                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0)"&gt;Edit&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0)"&gt;Move&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class="dropdown-item theme-red" href="javascript:void(0)"&gt;Delete&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
            
            
            &lt;script&gt;
            "use strict";
            
            $(document).ready(function () {                    
                /* Initialize dataTable */
                $('#clientScheduleGrid').DataTable({
                    searching: true,
                    lengthChange: true,
                    autoWidth: false,
                    columnDefs: [{ orderable: false, targets: 4 }],
                    order: [[0, 'desc']],
                    pageLength: 5,
                    responsive: true,
                });
            
                /* responsive last visible table cell */
                lastvisibletd();            
            });
            
            $(window).on('resize', function () {
                /* resize */
                var table = $('#clientScheduleGrid').DataTable();
                table.columns.adjust().draw();
                lastvisibletd();                    
            });                    
            
            /* responsive last visible table cell after cell hides*/
            function lastvisibletd() {
                $('.table tbody tr td').removeClass('lastvisible');
                $('.table tbody tr').each(function () {
                    var thisis = $(this);
                    thisis.find('td:visible:last').addClass('lastvisible');
                })
            }                    
                                &lt;/script&gt;</code></pre>
                                <button type="button" class="btn btn-outline-light  btn-square copycode"><i class="bi bi-clipboard"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>

                </div>


            </div>
        </main>
    @endsection