
	<form role="form" class="addSP">
		<div class="row center-main">
			<div class="result"></div>
			<div class="start form-group">
				<label class="control-label" for="selCategories">Category</label>
				<select class="form-control" name="selCategories">
				<?php 
					foreach ($final_category as $category) {
						print "<option>" . $category['category'] . "</option>";						
					}
				?>
				</select>
			</div>
						
			<div class="start form-group">
				<label class="control-label" for="selDev">Developer</label>
				<select class="form-control" name="selDev">
				<?php 
					foreach ($final_developer as $developer) {
						print "<option>" . $developer['developer'] . "</option>";						
					}
				?>
				</select>
			</div>
						
			<div class="start form-group">
				<label class="control-label" for="selStatus">Status</label>
				<select class="form-control" name="selStatus">
				<?php 
					foreach ($final_status as $status) {
						print "<option>" . $status['status'] . "</option>";						
					}
				?>
				</select>
			</div>
			
			<div class="start form-group">
				<label class="control-label" for="InputStart">Start Date/Time</label>
				<input type="datetime-local" class="form-control" id="InputStart" placeholder="Start Time and Date">
			</div>
			
			<div class="end form-group">
				<label class="control-label" for="InputStart">End Date/Time</label>
				<input type="datetime-local" class="form-control" id="InputEnd" placeholder="End Time and Date">
			</div>
			
			<div class="notes form-group">
				<label class="sr-only" for="InputNotes">Notes</label>
				<textarea type="text" class="form-control" rows="1" id="InputNotes" placeholder="Notes" rows="4"></textarea>
			</div>
			
			<div class="form-group">
				<button type="button" class="btn btn-default" id="submitAdd">Submit</button>
			</div>		
			
		</div>
	</form>
	<!-- /.container -->