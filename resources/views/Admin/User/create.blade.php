@extends ('Admin.Layout.master')

@section ('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                
                <div class="row align-items-center">
                    
                    <div class="col">
                        <div class="mt-5">
                            <h3 class="card-title float-left mt-2">Add new User</h3>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                    <h1></h1>
                  
                        <form method="POST" action="{{ url('/admin/users/store') }}" enctype="multipart/form-data">   
                            @csrf                 
                            <div class="form-group">
                              <label>Upload Image</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image">
                                    <br> <br>

                                
                                </div>    
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="title">First Name:</label>
                                <input type="text" name="firstname" class="form-control"  placeholder="firstname"  >
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Last Name:</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="email">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            
                            </div>

            

                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save</button>

                                <a href="/admin/team" class="btn btn-primary">Back</a>
                           </div>

                        </form>

                        <br>


                      
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                <!-- /.row -->
            
            </div>
        </div>    
    </div>

@endsection

