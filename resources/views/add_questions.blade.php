  @extends('layout.layout')
  @section('title', 'Add Questions')
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
                        {{-- <option>...</option> --}}
                           @foreach($questions as $question)
        <option value="{{ $question->id }}">
            {{ $question->full_path }}
        </option>
    @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>


                   <div class="col-12 mb-3">
                    <label for="validationTextarea" class="form-label">Intro Message</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
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
                                            <li class="nav-item col-md-2">
                                                <a class="nav-link" href="#">Title</a>
                                            </li>
                                            <li class="nav-item col-md-2">
                                                <a class="nav-link disabled" aria-disabled="true">Questions</a>
                                            </li>
                                            <li class="nav-item col-md-2">
                                                <a class="nav-link" aria-current="true" href="#">Input</a>
                                            </li>
                                            <li class="nav-item col-md-1">
                                                <a class="nav-link" href="#">Img</a>
                                            </li>
                                            <li class="nav-item col-md-1">
                                                <a class="nav-link disabled" aria-disabled="true">PDF</a>
                                            </li>
                                             <li class="nav-item col-md-2" style="margin-right: -45px; margin-left: -30px;">
                                                <a class="nav-link disabled" aria-disabled="true">Status</a>
                                            </li>
                                             <li class="nav-item col-md-2" >
                                                <a class="nav-link disabled" aria-disabled="true">Action</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        {{-- <p class="h5 card-title">Special title treatment</p>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-theme">Button</a> --}}


                                        <div class="row">
                                          
                <div class="col-12 col-md-1">
                    {{-- <label for="validationCustom01" class="form-label">ID</label> --}}
                    <input type="text" class="form-control" id="" value="1" required>
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                </div>

                  <div class="col-12 col-md-2">
                    {{-- <label for="validationCustom01" class="form-label">Title</label> --}}
                    <input type="text" class="form-control" id="" value="Mark" required>
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                </div>
                  {{-- <div class="col-12 col-md-2">
                    <label for="validationCustom01" class="form-label">Conv_id</label>
                    <input type="text" class="form-control" id="" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div> --}}
                  {{-- <div class="col-12 col-md-2"> --}}
                    {{-- <label for="validationCustom01" class="form-label">Questions</label> --}}
                    {{-- <input type="text" class="form-control" id="" value="Mark" required> --}}
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                {{-- </div> --}}

                <div class="col-12 col-md-2 ">
                    {{-- <label for="validationTextarea" class="form-label">Textarea</label> --}}
                    <textarea class="form-control" style="height:0; " id="validationTextarea" placeholder="Question" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                  <div class="col-12 col-md-2">
                    {{-- <label for="validationCustom01" class="form-label">Input</label> --}}
                    <input type="text" class="form-control" id="" value="Mark" required>
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                </div>
                  <div class="col-12 col-md-1">
                    {{-- <label for="validationCustom01" class="form-label">Image</label> --}}
                    {{-- <i class="bi bi-camera" aria-hidden="true"></i>

                    <input type="file" class="form-control d-none" id="" value="Mark" required> --}}


                     <label id="image_label" style="display: flex; justify-content: center; align-items: center;">
                <i class="bi bi-camera" aria-hidden="true"></i>
                <input type="file" class="form-control" name="image[0]" onchange="loadFile(event)" style="display: none;">
            </label>
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                </div>
                  <div class="col-12 col-md-1">
                    {{-- <label for="validationCustom01" class="form-label">PDF</label> --}}
                    {{-- <input type="file" class="form-control" id="" value="Mark" required> --}}
                     <label id="pdf_label" style="display: flex; justify-content: center; align-items: center;">
                <i class="bi bi-file-pdf" aria-hidden="true"></i>
                <input type="file" class="form-control" name="pdf_file[0]" style="display: none;">
            </label>
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                </div>
                  {{-- <div class="col-12 col-md-2"> --}}
                    {{-- <label for="validationCustom01" class="form-label">Status</label> --}}
                    {{-- <input type="text" class="form-control" id="" value="Mark" required> --}}
                    {{-- <div class="valid-feedback">
                        Looks good!
                    </div> --}}
                {{-- </div> --}}

                 <div class="col-12 col-md-2">
                    {{-- <label for="validationCustom04" class="form-label">State</label> --}}
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Active</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                  <div class="col-12 col-md-1">
                    {{-- <label for="validationCustom01" class="form-label">Action</label> --}}
                    {{-- <input type="text" class="form-control" id="" value="Mark" required> --}}
                    <button class="btn btn-danger"> <i class="bi bi-minus"></i></button>
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
                      <button type="button" class="btn btn-theme col-md-3 mt-2">Add New Question</button>
                      <button type="button" class="btn btn-light col-md-2 mt-2">Cancel</button>
                      </div>
                    </div>
                                

                </div>






















            </form>
                                
                           
                        </div>
                        {{-- <a href="https://datatables.net/" target="_blank" class="btn btn-link">more details at Website</a> --}}
                    </div>
                  
                </div>
                    </div>

                </div>


            </div>
        </main>

    @endsection