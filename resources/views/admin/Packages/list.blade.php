@extends("dashboard")
@section('main_content')
<div class="content-wrapper">
   
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Service </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Service</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <section class="content">


</section>



      <div class="content-header">
      <div class="container-fluid">

      <div class="w-full p-8 bg-dark rounded-lg shadow-lg ">
           
              <div class="card-header">
                <!-- <h3 class="card-title">Responsive Hover Table</h3> -->
            <h2 class="text-2xl font-bold mb-4 text-gray-500">Service All Data List</h2>


                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Place_Name  </th>
                      <th>days</th>
                      <th>Person</th>
                      <th>Subtitle</th>
                      <th>Ammount</th>

                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>id</td>
                      <td>Image</td>
                      <td>Place_Name</td>
                      <td>days</td>
                      <td>Person</td>
                      <td>Subtitle</td>
                      <td>Ammount</td>
                      
                      <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex space-x-2">
                                      <a href="" class="text-blue-500 hover:text-blue-700">
                                          <i class="fas fa-edit"></i>
                                      </a>
                                      <a href="" class="text-red-500 hover:text-red-700">
                                          <i class="fas fa-trash"></i>
                                      </a>
                                  </div>
                              </td>
                    </tr>
                  
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>


    </div>
      </div>
</div>

@endsection
