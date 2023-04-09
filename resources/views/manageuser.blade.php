@include('adlayout.navbar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kala | Manage User's</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
          
          <li class="breadcrumb-item active">User's</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-18">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kala | Users</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">UID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($manageCustomer as $item)
                      
             
                  <tr>
                    <th scope="row">{{$item->uid}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    {{-- <td>
                      <span class="badge bg-success">Active</span>
                    </td>
                    
                    <td> <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i>Edit</button>
                      <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i>Delete</button></td> --}}
                  </tr>
                  @endforeach
                  
                  
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->
    
  </section>
@include('adlayout.footer')