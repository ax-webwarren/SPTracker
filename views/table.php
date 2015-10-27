	<div id="summaryTableContainer">
		<table id="summaryTable" class="table table-striped table-bordered responsive nowrap" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th id="col_category">Category</th>
					<th id="col_developer">Developer</th>
					<th id="col_status">Status</th>
					<th id="col_start">Start</th>
					<th id="col_end">End</th>
					<th id="col_notes">Notes</th>
					<th id="col_actions">Actions</th>					
				</tr>
			</thead>			
			<tbody>
			<?php  
				foreach ($final_table_display as $rows) {
					print "<tr>";
					$last_val = end($rows);
					foreach ($rows as $row) {
						if ($row !== $last_val) {
							print "<td>";
							print $row;
							print "</td>";
						}
						else {
							print "<td>";
							print "<span data-id='" . $row . "' id='col_action_edit' class='glyphicon glyphicon-edit' data-toggle='modal' data-target='#edit_table'></span>";
							print "<span data-id='" . $row . "' id='col_action_delete' class='glyphicon glyphicon-trash' data-toggle='modal' data-target='#delete_table'></span>";
							print "</td>";
						}
					}
					print "</tr>";
				}
			?>
			</tbody>
		</table>
	</div>
	</div>