  @extends('layout.layout')
  @section('title', 'Add Key Search')
    @section('main')

         <main class="adminuiux-content has-sidebar" onclick="contentClick()">
            <!-- body content of pages -->

            <!-- Content  -->
            <div class="container mt-4" id="main-content">

                <!-- Welcome box -->
              

                <div class="row">
                
                    <!-- Assets funds and shares -->
                    <div class="col-12">
                     

                         <div class="card adminuiux-card mb-4">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="h6">Add Questions</p>
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

            <form class="row g-3
             {{-- needs-validation --}}
              {{-- was-validated --}}
              " novalidate>

                          <div class="col-12 col-md-12">
                    <label for="validationCustom04" class="form-label">Add Question</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>


          





                   <div class="card adminuiux-card mb-4">
                    {{-- <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="h6">Card with Nav</p>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-outline-theme btn-square" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false">
                                            <i class="bi bi-code-slash"></i>
                                        </button>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card-body">
                        <div class="row align-items-center">
                            {{-- <div class="col-12 col-md-6">
                                <div class="card adminuiux-card border text-center">
                                    <div class="card-header border-bottom">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="true" href="#">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p class="h5 card-title">Special title treatment</p>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-theme">Button</a>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        2 days ago
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12 col-md-12">
                                <div class="card adminuiux-card border text-center">
                                    <div class="card-header border-bottom">
                                        <ul class="nav nav-pills card-header-pills">
                                            <li class="nav-item col-md-1">
                                                <a class="nav-link" aria-current="true" href="#">ID</a>
                                            </li>
                                            <li class="nav-item col-md-9">
                                                <a class="nav-link" href="#">Title</a>
                                            </li>
                                         
                                             <li class="nav-item col-md-2" >
                                                <a class="nav-link disabled" aria-disabled="true">Action</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                             

                                        <div class="row">
                                          
                <div class="col-12 col-md-1">
                    <input type="text" class="form-control" id="" value="1" required>
            
                </div>

                  <div class="col-12 col-md-10">
                    {{-- <label for="validationCustom01" class="form-label">Title</label> --}}
                    <input type="text" class="form-control" id="" value="Mark" required>
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                </div>
                

               
               

               

                  <div class="col-12 col-md-1">
                    {{-- <label for="validationCustom01" class="form-label">Action</label> --}}
                    {{-- <input type="text" class="form-control" id="" value="Mark" required> --}}
                    <button class="btn btn-danger"> <i class="bi bi-minus"  style="color:black;"></i></button>
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                </div>




                                        </div>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <button class="btn btn-theme ">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapse3">
                        <div class="card-footer border-top">
                            <div class="bg-dark text-white p-2 rounded my-2">
                                <pre class="mb-2"><code class="code rounded language-html">
            &lt;div class="row align-items-center"&gt;
                &lt;div class="col-12 col-md-6"&gt;
                    &lt;div class="card adminuiux-card border text-center"&gt;
                        &lt;div class="card-header border-bottom"&gt;
                            &lt;ul class="nav nav-tabs card-header-tabs"&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link active" aria-current="true" href="#"&gt;Active&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link disabled" aria-disabled="true"&gt;Disabled&lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body"&gt;
                            &lt;p class="h5 card-title"&gt;Special title treatment&lt;/p&gt;
                            &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                            &lt;a href="#" class="btn btn-theme"&gt;Button&lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="card-footer text-body-secondary"&gt;
                            2 days ago
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="col-12 col-md-6"&gt;
                    &lt;div class="card adminuiux-card border text-center"&gt;
                        &lt;div class="card-header border-bottom"&gt;
                            &lt;ul class="nav nav-pills card-header-pills"&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link active" aria-current="true" href="#"&gt;Active&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link disabled" aria-disabled="true"&gt;Disabled&lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body"&gt;
                            &lt;p class="h5 card-title"&gt;Special title treatment&lt;/p&gt;
                            &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                            &lt;a href="#" class="btn btn-theme"&gt;Button&lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="card-footer text-body-secondary"&gt;
                            2 days ago
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                                </code></pre>
                                <button type="button" class="btn btn-outline-light  btn-square copycode"><i class="bi bi-clipboard"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="container">
                      <button type="button" class="btn btn-theme col-md-3 mt-2">Add New Keyword</button>
                      <button type="button" class="btn btn-light col-md-2 mt-2">Cancel</button>
                      </div>
                    </div>
                                

                </div>



            </form>
                                
                           
                        </div>
                    </div>
                  
                </div>
                    </div>

                </div>


            </div>
        </main>
    @endsection