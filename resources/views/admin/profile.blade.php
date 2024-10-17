














<!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
<nav class="main-header navbar navbar-expand navbar-dark">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home')}}" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
   
  </nav>




<div class="content-wrapper">

   <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <div class="content ">
        <div class="container-fluid">
           




<main id="main" class="main">

     
    <!-- End Page Title -->
    
        <section class="section profile">
          <div class="row">
            <div class="col-xl-4">
    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
    
                  <img src="" alt="Profile" class="rounded-circle" height="130px" width="200px">
                  <h2></h2>
                  <h3></h3>
                  <div class="social-links mt-2">
                    <a href="" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
                  </div>
                </div>
              </div>
    
            </div>
    
            <div class="col-xl-8">
    
              <div class="card">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
    
                    <li class="nav-item">
                      <a class="nav-link active" href="/admin" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</a>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Update Profile</button>
                    </li>
    
    
                  </ul>
                  <div class="tab-content pt-2">
    
    
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">{{(Auth::user()->name)}}</div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">{{(Auth::user()->email)}}</div>
                      </div>
                      

                    </div>
                    <a class="nav-link" href="/admin/up" data-bs-toggle="tab" data-bs-target="#profile-edit">Update Profile</a>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    
                      <!-- Profile Update Form -->
                      <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label for="profilePicture" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                          <div class="col-md-8 col-lg-9">
                            <img src="" alt="Profile" height="130px" width="200px">
                            <div class="mt-3" >
                              
                              <label  class="p-2" for="profilePicture" style="border: 1px solid rgb(35, 62, 184); background: rebeccapurple; color:#fff; border-radius: 10px;cursor: pointer;">
                             <input style="font-size: 13px;cursor: pointer;" type="file" id="profilePicture" name="profilePicture" accept="image/*">Uplode Profile Pictuer</label>
                          
                            </div>
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="name" type="text" class="form-control" value="" id="fullName">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                          <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about" style="height: 100px"> </textarea>
                          </div>
                        </div>
   
                       <div class="row mb-3">
                         <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                         <div class="col-md-8 col-lg-9">
                           <input name="email" value="" type="email" class="form-control  @error('email') is-invalid @enderror" id="Email">
                        
                           <div class="text-danger"></div>
                        
                         </div>
                       </div>
    
                        <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="phone" value="" type="text" class="form-control" id="Phone" >
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="address" type="text" value="" class="form-control" id="Address" >
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="twitter" type="text" value="" class="form-control" id="Twitter">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="facebook" type="text" value="" class="form-control" id="Facebook" >
                          </div>
                        </div>
    
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                      </form><!-- End Profile Edit Form -->
    
                    </div>
    
                    <div class="tab-pane fade pt-3" id="profile-change-password">
                      <!-- Change Password Form -->
                      <form action="" method="POST">
                      @csrf
                        <div class="row mb-3">
                          <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="oldpassword" type="password" class="form-control" id="currentPassword">
                    
                            <div class="text-danger"></div>
                    
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="new_password" type="password" class="form-control" id="newPassword">
                
                            <div class="text-danger"></div>
                        
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="new_password_confirmation" type="password" class="form-control" id="renewPassword">
                            <div class="text-danger"></div>
                        
                          </div>
                        </div>
    
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                      </form><!-- End Change Password Form -->
    
                    </div>
    
                  </div><!-- End Bordered Tabs -->
    
                </div>
              </div>
    
            </div>
          </div>
        </section>
    
  </main>



</div>
        </div>
    </div>
</div>