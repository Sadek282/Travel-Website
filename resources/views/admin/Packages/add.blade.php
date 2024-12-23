@extends("dashboard")
@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Add Service</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Service</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <div class="content ">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Service</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <!-- method="POST" -->
                <form action="{{route('packagesAdd')}}" method="POST" enctype="multipart/form-data">  
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile" >
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Place_Name</label>
                      <input type="text" name="Place_Name" class="form-control" id="exampleInputEmail1" placeholder="Enter Place_Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">days</label>
                        <input type="text" name="days" class="form-control" id="exampleInputEmail1" placeholder="Enter days">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Person</label>
                        <input type="text" name="Person" class="form-control" id="exampleInputEmail1" placeholder="Enter Person">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter subtitle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ammount</label>
                        <input type="text" name="Ammount" class="form-control" id="exampleInputEmail1" placeholder="Enter Ammount">
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" name="Description" rows="3" placeholder="Enter short description"></textarea>
                    </div>
                   
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>
@endsection