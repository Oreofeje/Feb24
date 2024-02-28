@extends ('Admin.Layout.master')

@section ('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                
                <div class="row align-items-center">
                    
                    <div class="col">
                        <div class="mt-5">
                            <h3 class="card-title float-left mt-2">Create User</h3>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                    <h1></h1>
                  
                        <form method="POST" action="{{ url('/admin/team/create') }}" enctype="multipart/form-data">   
                            @csrf                 
                            <div class="form-group">
                                <label class="control-label" for="title">Title:</label>
                                <input type="text" name="title" class="form-control"  placeholder="Post Title ..."  >
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Description:</label>
                                <input type="file" id="uploadFile" name="media">
                                <input type="text" name="description" class="form-control" placeholder="Post Description">
                            
                            </div>

                            <div class="form-group">
                              <label>Upload media</label>
                                <div class="form-group">
                                <input type="file" id="uploadFile" name="media">
                                    <br> <br>
                                </div>    
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="media-type">Media Type:</label>
                                <input type="text" name="media-type" class="form-control" placeholder="Post media-type">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="media-type">Author:</label>
                                <input type="text" name="Author" class="form-control" placeholder="Post author">
                            
                            </div>
            

                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save and post</button>

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

