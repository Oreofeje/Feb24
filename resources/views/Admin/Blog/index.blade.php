@extends ('Admin.Layout.master')

@section ('content')
<div class="page-wrapper">
            
			<div class="content container-fluid">
				<div class="page-header">
                   
					<div class="row align-items-center">
                        
						<div class="col">
							<div class="mt-5">
								<h3 class="card-title float-left mt-2">Blogs</h3>
                                <a href="{{ url('admin/blog/create') }}" class="btn btn-primary float-right veiwbutton ">Add New Blog</a>
                            </div>
						</div>
					</div>
				</div>
                
				<div class="row">
					<div class="col-sm-12">
						

                        <div class="card card-table">
							<div class="card-body booking_card mb-4">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
                                     
										<thead>
											<tr>
												<th>Image</th>
												<th>Name</th>
												<th>Role</th>
												<th>Description</th>
                                                <th>Action</th>
                                            
											</tr>
										</thead>
										
											<tbody>
												<tr>
													
													<td>
														<h2 class="table-avatar">
														<a  class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/teams/') }}" alt="Blog Image"></a>
														</h2>
													</td>
													<td>name</td>
													<td>name</td>
													<td>Avartar</td>
													
												
													<td class="">
														
														<a href="{{ url('admin/team/edit') }}" style="margin: 10px;" class="btn btn-primary  veiwbutton">Edit</a>
														<a href="add-booking.html" style="margin: 10px;" class="btn btn-primary  veiwbutton ">Delete</a>
													
													</td>
												</tr>
											
											</tbody>
									
									</table>
								</div>

                                
							</div>
                            
						</div>

                     


                      
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection