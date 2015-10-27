
	<div class="setting">
		<!-- Modal Export-->
		<div class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="Export">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Export Table</h4>
			  </div>
			  <div class="modal-body">
				...
			  </div>
			  <div class="modal-footer">				
				<button type="button" class="btn btn-primary">Export</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Search-->
		<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="Search">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Search</h4>
			  </div>
			  <div class="modal-body">
				...
			  </div>
			  <div class="modal-footer">				
				<button type="button" class="btn btn-primary">Search</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Add-->
		<div class="modal fade" id="addVal" tabindex="-1" role="dialog" aria-labelledby="Add Values">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Category/Developer/Status</h4>
			  </div>
			  <div class="modal-body">
				<div class="row center">
					<div class="col-md-4">
						<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#add_category">
							Add Category
						</button>
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#add_developer">
							Add Developer
						</button>
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#add_status">
							Add Status
						</button>
					</div>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Edit-->
		<div class="modal fade" id="editVal" tabindex="1" role="dialog" aria-labelledby="Edit Values">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Edit Category/Developer/Status</h4>
					</div>
					<div class="modal-body">	
						<div class="row center">			  
							<div class="col-md-4">
								<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#edit_category">
									Edit Category
								</button>
							</div>
							<div class="col-md-4">
								<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#edit_developer">
									Edit Developer
								</button>
							</div>
							<div class="col-md-4">
								<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#edit_status">
									Edit Status
								</button>
							</div>
						</div>				
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Add Category-->
		<div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="Category">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Category</h4>
			  </div>
			  <div class="modal-body">
				<div class="row center">
					<form role="form" class="add form-inline">						
							<div class="form-group vmiddle">
								<label class="col-sm-6 control-label" for="add_category_text">Category: </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="add_category_text" placeholder="Category">
								</div>								
							</div>							
					</form>
				</div>
				<div class="row center">
					<div class="result"></div>
				</div>
			  </div>
			  <div class="modal-footer">				
				<button type="button" class="btn btn-primary add-mod">Add</button>
				<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Add Developer-->
		<div class="modal fade" id="add_developer" tabindex="-1" role="dialog" aria-labelledby="Developer">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Developer</h4>
			  </div>
			  <div class="modal-body">
				<div class="row center">
					<form role="form" class="add form-inline">						
							<div class="form-group vmiddle">
								<label class="col-sm-6 control-label" for="add_developer_text">Developer: </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="add_developer_text" placeholder="Developer">
								</div>
							</div>
					</form>
				</div>
				<div class="row center">
					<div class="result"></div>
				</div>
			  </div>
			  <div class="modal-footer">				
				<button type="button" class="btn btn-primary add-mod">Add</button>
				<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Add Status-->
		<div class="modal fade" id="add_status" tabindex="-1" role="dialog" aria-labelledby="Status">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Status</h4>
			  </div>
			  <div class="modal-body">
					<form role="form" class="add form-inline">						
							<div class="form-group vmiddle">
								<label class="col-sm-6 control-label" for="add_status_text">Status: </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="add_status_text" placeholder="Status">
								</div>
							</div>
					</form>
				<div class="row center">
					<div class="result"></div>
				</div>
			  </div>
			  <div class="modal-footer">				
				<button type="button" class="btn btn-primary add-mod">Add</button>
				<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Edit Category-->
		<div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="Category">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Category</h4>
			  </div>
			  <div class="modal-body">
				<select class="form-control" name="edit_category_text" id="edit_category_text">
				<?php 
					foreach ($final_category as $category) {
						print "<option data-id='" . $category['id'] . "'>" . $category['category'] . "</option>";						
					}
				?>
				</select>
				<div class="row center">
					<div class="result"></div>
				</div>
			  </div>
			  <div class="modal-footer">				
				<?php 
				print "<button type='button' class='btn btn-default' id='edit_col_action_edit' data-toggle='modal' data-target='#edit_edit'><span class='glyphicon glyphicon-edit'></span></button>";
				print "<button type='button' class='btn btn-default' id='edit_col_action_delete'><span class='glyphicon glyphicon-trash'></span></button>";
				?>	
				<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Edit Developer-->
		<div class="modal fade" id="edit_developer" tabindex="-1" role="dialog" aria-labelledby="Developer">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Developer</h4>
			  </div>
			  <div class="modal-body">
				<select class="form-control" name="edit_developer_text" id="edit_category_text">
				<?php 
					foreach ($final_developer as $developer) {
						print "<option data-id='" . $developer['id'] . "'>" . $developer['developer'] . "</option>";						
					}
				?>
				</select>
				<div class="row center">
					<div class="result"></div>
				</div>
			  </div>
			  <div class="modal-footer">				
				<?php 
				print "<button type='button' class='btn btn-default' id='edit_col_action_edit' data-toggle='modal' data-target='#edit_edit'><span class='glyphicon glyphicon-edit'></span></button>";
				print "<button type='button' class='btn btn-default' id='edit_col_action_delete'><span class='glyphicon glyphicon-trash'></span></button>";
				?>	
				<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal Edit Status-->
		<div class="modal fade" id="edit_status" tabindex="-1" role="dialog" aria-labelledby="Status">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Status</h4>
			  </div>
			  <div class="modal-body">
				<select class="form-control" name="edit_developer_text" id="edit_category_text">
				<?php 
					foreach ($final_status as $status) {
						print "<option data-id='" . $status['id'] . "'>" . $status['status'] . "</option>";						
					}
				?>
				</select>
				<div class="row center">
					<div class="result"></div>
				</div>
			  </div>
			  <div class="modal-footer">				
				<?php 
				print "<button type='button' class='btn btn-default' id='edit_col_action_edit' data-toggle='modal' data-target='#edit_edit'><span class='glyphicon glyphicon-edit'></span></button>";
				print "<button type='button' class='btn btn-default' id='edit_col_action_delete'><span class='glyphicon glyphicon-trash'></span></button>";
				?>	
				<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade" id="edit_edit" tabindex="-1" role="dialog" aria-labelledby="Status">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Enter New Value</h4>
			  </div>
			  <div class="modal-body">
				<form role="form" class="add form-inline">						
						<div class="form-group vmiddle">
							<label class="col-sm-6 control-label" for="edit_edit_text">New Value: </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="edit_edit_text" placeholder="">
							</div>
							<label class="col-sm-6 sr-only" for="edit_id_text">ID: </label>
							<div class="col-sm-6">
								<input type="hidden" class="form-control" id="edit_id_text" placeholder="ID">
							</div>
							<label class="col-sm-6 sr-only" for="edit_table_text">Table: </label>
							<div class="col-sm-6">
								<input type="hidden" class="form-control" id="edit_table_text" placeholder="Table">
							</div>
						</div>
				</form>
				<div class="row center">
					<div class="result"></div>
				</div>
			  </div>
			  <div class="modal-footer">				
				<button type="button" class="btn btn-primary update-mod">Update</button>
				<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	
	<!-- Modal Edit Table-->
	<div class="modal fade" id="edit_table" tabindex="-1" role="dialog" aria-labelledby="Status">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Edit Values</h4>
		  </div>
		  <div class="modal-body">
				<form role="form" class="add form-inline">						
						<div class="form-group vmiddle">
							<label class="col-sm-6 control-label" for="edit_category_text">Category: </label>
							<div class="col-sm-6">
								<select class="form-control" name="edit_category_text" id="edit_category_text">
								<?php 
									foreach ($final_category as $category) {
										print "<option>" . $category['category'] . "</option>";						
									}
								?>
								</select>
								<!-- <input type="text" class="form-control" id="edit_category_text" placeholder="Category"> -->
							</div>
							<label class="col-sm-6 control-label" for="edit_developer_text">Developer: </label>
							<div class="col-sm-6">
								<select class="form-control" name="edit_developer_text" id="edit_developer_text">
								<?php 
									foreach ($final_developer as $developer) {
										print "<option>" . $developer['developer'] . "</option>";						
									}
								?>
								</select>
								<!-- <input type="text" class="form-control" id="edit_developer_text" placeholder="Developer"> -->
							</div>
							<label class="col-sm-6 control-label" for="edit_status_text">Status: </label>
							<div class="col-sm-6">
								<select class="form-control" name="edit_status_text" id="edit_status_text">
								<?php 
									foreach ($final_status as $status) {
										print "<option>" . $status['status'] . "</option>";						
									}
								?>
								</select>
								<!-- <input type="text" class="form-control" id="edit_status_text" placeholder="Status"> -->
							</div>
							<label class="col-sm-6 control-label" for="edit_start_text">Start: </label>
							<div class="col-sm-6">
								<input type="datetime-local" class="form-control" id="edit_start_text" placeholder="Start">
							</div>
							<label class="col-sm-6 control-label" for="edit_end_text">End: </label>
							<div class="col-sm-6">
								<input type="datetime-local" class="form-control" id="edit_end_text" placeholder="End">
							</div>
							<label class="col-sm-6 control-label" for="edit_notes_text">Notes: </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="edit_notes_text" placeholder="Notes">
							</div>
							<label class="col-sm-6 sr-only" for="edit_notes_text">ID: </label>
							<div class="col-sm-6">
								<input type="hidden" class="form-control" id="edit_id_text" placeholder="ID">
							</div>
						</div>
				</form>
			<div class="row center">
				<div class="result"></div>
			</div>
		  </div>
		  <div class="modal-footer">			
			<button type="button" class="btn btn-primary edit-table">Update</button>
			<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Modal Delete Table-->
	<div class="modal fade" id="delete_table" tabindex="-1" role="dialog" aria-labelledby="Category">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Delete Value</h4>
		  </div>
		  <div class="modal-body">
			<div class="row center">
				<div class="alert alert-warning">Are you sure you want to delete this record?</div>
				<label class="col-sm-6 sr-only" for="edit_notes_text">ID: </label>
				<div class="col-sm-6">
					<input type="hidden" class="form-control" id="delete_id_text" placeholder="ID">
				</div>
			</div>
			<div class="row center">
				<div class="result"></div>
			</div>
		  </div>
		  <div class="modal-footer">			
			<button type="button" class="btn btn-primary delete-table">Yes</button>
			<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Modal Login -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="Login" data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">			
			<h4 class="modal-title" id="myModalLabel">Login</h4>
		  </div>
		  <div class="modal-body">
			<div class="row center">
				<div class="alert alert-info">Please enter your name</div>
				<label class="col-sm-6 control-label" for="login_name_text">Name: </label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="login_name_text" placeholder="Name">
				</div>				
			</div>
			<div class="row center">
				<div class="result"></div>
			</div>
		  </div>
		  <div class="modal-footer">			
			<button type="button" class="btn btn-primary login-login">Login</button>
			<button type="button" class="btn btn-primary admin-login" data-toggle="modal" data-target="#admin-login">Admin?</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Modal Admin Login -->
	<div class="modal fade" id="admin-login" tabindex="-1" role="dialog" aria-labelledby="Login" data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Login</h4>
		  </div>
		  <div class="modal-body">
			<div class="row center">
				<div class="alert alert-info">Please enter your name</div>
				<label class="col-sm-6 control-label" for="login_name_text">Name: </label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="login_name_text" placeholder="Name">
				</div>
				<label class="col-sm-6 control-label" for="login_pass_text">Password: </label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="login_pass_text" placeholder="Password">
				</div>
			</div>
			<div class="row center">
				<div class="result"></div>
			</div>
		  </div>
		  <div class="modal-footer">			
			<button type="button" class="btn btn-primary login-login">Login</button>			
			<button type="button" class="btn btn-default close-mod" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>