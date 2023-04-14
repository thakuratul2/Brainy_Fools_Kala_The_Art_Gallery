@include('adlayout.navbar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kala | Add Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
          
          <li class="breadcrumb-item active">Add Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-18">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kala | Categories</h5>
              <!-- Default Table -->
              <button type="button" class="btn btn-info" style="float: right;" data-bs-toggle="modal" data-bs-target="#basicModal">Add</button>
              <table class="table">
        
                
                <thead>
                  <tr>
                    <th scope="col">CID</th>
                    
                    <th scope="col">Name</th>
                    <th scope="col">By</th>
                    <th scope="col">Added On</th>
                    <th scope="col">Updated On</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                
                 <tr>
                  
                    

                   
                 
                    
                  </tr>
               
                      
             
                  
                  
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
              
                  <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add New Categories</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Artist</option>
                            <option value="2">Admin</option>
                           
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Basic Modal-->
    
                </div>
              </div>
            </div>
          </div>

          

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->
    
  </section>
@include('adlayout.footer')