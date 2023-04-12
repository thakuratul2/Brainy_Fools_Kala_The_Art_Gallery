@include('adlayout.navbar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kala | Manage Artist's</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
          
          <li class="breadcrumb-item active">Artist's</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-18">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kala | Artists</h5>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">UID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Role</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($manageArtist as $data)
                     <tr>
                      <td>
                        {{$data->uid}}
                      </td>
                     <td>
                      {{$data->name}}
                     </td>
                     <td>
                      {{$data->email}}
                     </td>
                     <td>
                      {{$data->username}}
                     </td>
                     <td>
                      @if ($data->role_as == '2')
                          <span class="badge bg-warning">Artist</span>
                      @endif
                     </td>
                     <td>
                      <a href="{{url('/manage-artist')}}/{{$data->uid}}"><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i>Delete</button></td></a>
                     </tr>
                 @endforeach
                  
                  
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
              
                  <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Assign Role</h5>
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