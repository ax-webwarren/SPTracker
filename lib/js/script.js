$(function () {
	$('[data-toggle="popover"]').popover();	
	
	/*
	$("#admin-login").modal({
		backdrop: 'static',
		keyboard: false
	});
	*/
	
	$user = '';
	
	if (sessionStorage['username'] == 'admin') {
		$('#login').modal('hide');
	}
	else {
		$("#login").modal('show');	
		$("#login").modal({
			backdrop: 'static',
			keyboard: false
		});
		$(".container").hide();
	}
	
	//Login
	$("#login .login-login").click(function(){
		var user = $('#login #login_name_text').val();
		if(user=='')	{			
			$("#login .result").html("Please enter a valid Name.");
			$("#login .result").addClass("alert alert-danger");
		}
		else {
			$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				user: user,
			})
			.done(function(data){
				//window.location.reload(true);	
				if ($.trim(data) == "Yes") {
					$('#login').modal('hide');		
					$('select[name="selDev"] option').each(function(){
						if ($(this).text().toLowerCase() != user.toLowerCase()){							
							$(this).remove();
						}
					});
					$('#summaryTable tr').find("td:last").remove();
					$('#summaryTable').find("th:last").remove();
					$('.settings').remove();
					$(".container").show();
					$user = "regular";
				}
				else {
					$("#login .result").html("Please enter a valid Name.");
					$("#login .result").addClass("alert alert-danger");
				}
			})
			.fail(function(){
				$("#login .result").html("Please enter a valid Name.");
				$("#login .result").addClass("alert alert-danger");
			});
		}
	});	
	$('#login').on('hidden.bs.modal', function () {
		$("#login .result").html("");
		$("#login .result").removeClass("alert alert-danger");
	});
	
	//Login Admin
	$("#admin-login .login-login").click(function(){
		var user = $('#admin-login #login_name_text').val();
		var pass = $('#admin-login #login_pass_text').val();
		if(user=='')	{			
			$("#admin-login .result").html("Please enter a valid login credentials.");
			$("#admin-login .result").addClass("alert alert-danger");
		}
		else {
			$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				user: user,
				pass: pass,
			})
			.done(function(data){
				//window.location.reload(true);	
				if ($.trim(data) == "Yes") {
					$('#login').modal('hide');		
					$('#admin-login').modal('hide');
					var myDate = new Date();
					sessionStorage.setItem("username", "admin");
					$(".container").show();
					/*$('select[name="selDev"] option').each(function(){
						if ($(this).text().toLowerCase() != user.toLowerCase()){							
							$(this).remove();
						}
					});
					$('#summaryTable tr').find("td:last").remove();
					$('#summaryTable').find("th:last").remove();
					$('.settings').remove();
					$user = "regular";*/
				}
				else {
					$("#admin-login .result").html("Please enter a valid login credentials.");
					$("#admin-login .result").addClass("alert alert-danger");
				}
			})
			.fail(function(){
				$("#admin-login .result").html("Please enter a valid login credentials.");
				$("#admin-login .result").addClass("alert alert-danger");
			});
		}
	});
	$('#admin-login').on('hidden.bs.modal', function () {
		$("#admin-login .result").html("");
		$("#admin-login .result").removeClass("alert alert-danger");
	});
	
	var summaryTable = $('#summaryTable').DataTable({	
		destroy: true,
		responsive: true,
		"order": [[ 3, "desc" ]],
		columnDefs: [{targets:6,"orderable":false}]
	});
		
	$("#exportTable").click(function(){
		url = "views/export.php";
		var form = $('<form></form>').attr('action', url).attr('method', 'post');  
		//send request
		form.appendTo('body').submit().remove();
	});
	
	//Start and End Time Auto Generate	
	$("#InputStart").click(function(){	
		cur_time = CurrentTimeDate();
		$(this).val(cur_time);
	});
	
	$("#InputEnd").click(function(){	
		cur_time = CurrentTimeDate();
		$(this).val(cur_time);
	});
  
	//Edit Category Developer Status	
	//Edit Category
	$("#edit_category").on("click", '#edit_col_action_edit', function(){		
		var id = $("#edit_category option:selected").attr('data-id');
		$("#edit_edit #edit_id_text").val(id);		
		$("#edit_edit #edit_table_text").val('category');
	});	
	//Edit Developer
	$("#edit_developer").on("click", '#edit_col_action_edit', function(){		
		var id = $("#edit_developer option:selected").attr('data-id');
		$("#edit_edit #edit_id_text").val(id);		
		$("#edit_edit #edit_table_text").val('developer');
	});
	//Edit Status
	$("#edit_status").on("click", '#edit_col_action_edit', function(){		
		var id = $("#edit_status option:selected").attr('data-id');
		$("#edit_edit #edit_id_text").val(id);		
		$("#edit_edit #edit_table_text").val('status');
	});	
	
	$("#edit_edit").on("click", ".update-mod", function(){
		selId = $("#edit_edit #edit_id_text").val();
		selVal = $("#edit_edit #edit_edit_text").val();
		seltable = $("#edit_edit #edit_table_text").val();
		$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				id: selId,
				value: selVal,
				table: seltable,
				edit_cat_dev_stat: true,
				edit: false,
				delete_record: false,
			})
			.done(function(data){
				//window.location.reload(true);				
				$('#edit_edit').modal('hide');
				$('#edit_status').modal('hide');
				$('#edit_category').modal('hide');
				$('#edit_developer').modal('hide');
				window.location.reload();
			})
			.fail(function(){
				$("#edit_edit .result").html("Please enter a valid Category.");
				$("#edit_edit .result").addClass("alert alert-danger");
			});
	});	
	$('#edit_edit').on('hidden.bs.modal', function () {
		$("#edit_edit .result").html("");
		$("#edit_edit #add_category_text").val('');
		$("#edit_edit .result").removeClass("alert alert-danger");
	});
	
	//Delete Category Developer Status
	//Delete Category
	$("#edit_category").on("click", '#edit_col_action_delete', function(){		
		var selId = $("#edit_category option:selected").attr('data-id');
		$.post("index.php", //Required URL of the page on server
		{ 
			//Data Sending With Request To Server
			table: 'category',
			id: selId,
			edit: false,
			delete_record: true,
		})
		.done(function(data){				
			$("#edit_category .result").html("");
			$("#edit_category .result").removeClass("alert alert-danger");				
			$('#edit_category').modal('hide');
			window.location.reload();				
		})
		.fail(function(){
			$("#edit_category .result").html("Please check the fields for incorrect values.");
			$("#edit_category .result").addClass("alert alert-danger");
		});
	});	
	//Delete Developer
	$("#edit_developer").on("click", '#edit_col_action_delete', function(){		
		var selId = $("#edit_developer option:selected").attr('data-id');
		$.post("index.php", //Required URL of the page on server
		{ 
			//Data Sending With Request To Server
			table: 'developer',
			id: selId,
			edit: false,
			delete_record: true,
		})
		.done(function(data){				
			$("#edit_developer .result").html("");
			$("#edit_developer .result").removeClass("alert alert-danger");				
			$('#edit_developer').modal('hide');
			window.location.reload();				
		})
		.fail(function(){
			$("#edit_developer .result").html("Please check the fields for incorrect values.");
			$("#edit_developer .result").addClass("alert alert-danger");
		});
	});
	//Delete Status
	$("#edit_status").on("click", '#edit_col_action_delete', function(){		
		var selId = $("#edit_status option:selected").attr('data-id');
		$.post("index.php", //Required URL of the page on server
		{ 
			//Data Sending With Request To Server
			table: 'status',
			id: selId,
			edit: false,
			delete_record: true,
		})
		.done(function(data){				
			$("#edit_status .result").html("");
			$("#edit_status .result").removeClass("alert alert-danger");				
			$('#edit_status').modal('hide');
			window.location.reload();				
		})
		.fail(function(){
			$("#edit_status .result").html("Please check the fields for incorrect values.");
			$("#edit_status .result").addClass("alert alert-danger");
		});
	});	
	
	
	//Add Category  
	$("#add_category .add-mod").click(function(){		
		var value = $("#add_category #add_category_text").val();
		if(value=='')	{			
			$("#add_category .result").html("Please enter a valid Category.");
			$("#add_category .result").addClass("alert alert-danger");
		}
		else {
			$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				field: value,
				table: "category",
			})
			.done(function(data){
				//window.location.reload(true);
				$('[name="selCategories"]').append('<option>' + value + '</option>');
				$('#add_category').modal('hide');
				window.location.reload();
			})
			.fail(function(){
				$("#add_category .result").html("Please enter a valid Category.");
				$("#add_category .result").addClass("alert alert-danger");
			});
		}
	});	
	$('#add_category').on('hidden.bs.modal', function () {
		$("#add_category .result").html("");
		$("#add_category #add_category_text").val('');
		$("#add_category .result").removeClass("alert alert-danger");
	});
	
	//Add Developer
	$("#add_developer .add-mod").click(function(){		
		var value = $("#add_developer #add_developer_text").val();
		if (value=='') {			
			$("#add_developer .result").html("Please enter a valid Name.");
			$("#add_developer .result").addClass("alert alert-danger");
		}
		else {
			$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				field: value,
				table: "developer",
			})
			.done(function(data){
				//window.location.reload(true);
				$('[name="selDev"]').append('<option>' + value + '</option>');
				$('#add_developer').modal('hide');
				window.location.reload();
			})
			.fail(function(){
				$("#add_developer .result").html("Please enter a valid Name.");
				$("#add_developer .result").addClass("alert alert-danger");
			});
		}
	});	
	$('#add_developer').on('hidden.bs.modal', function () {
		$("#add_developer .result").html("");
		$("#add_developer #add_developer_text").val('');
		$("#add_developer .result").removeClass("alert alert-danger");
	});
	
	//Add Status
	$("#add_status .add-mod").click(function(){		
		var value = $("#add_status #add_status_text").val();
		if (value=='') {			
			$("#add_status .result").html("Please enter a valid Status.");
			$("#add_status .result").addClass("alert alert-danger");
		}
		else {
			$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				field: value,
				table: "status",
			})
			.done(function(data){
				//window.location.reload(true);
				$('[name="selStatus"]').append('<option>' + value + '</option>');
				$('#add_status').modal('hide');
				window.location.reload();
			})
			.fail(function(){
				$("#add_status .result").html("Please enter a valid Status.");
				$("#add_status .result").addClass("alert alert-danger");
			});
		}
	});	
	$('#add_status').on('hidden.bs.modal', function () {
		$("#add_status .result").html("");
		$("#add_status #add_status_text").val('');
		$("#add_status .result").removeClass("alert alert-danger");
	});
	
	//Add Form Submit	
	$(".addSP #submitAdd").click(function(){		
		
		var selCat = $(".addSP [name=selCategories]").val();
		var seDev = $(".addSP [name=selDev]").val();
		var selStatus = $(".addSP [name=selStatus]").val();
		var selInputStart = $(".addSP #InputStart").val();
		var selInputEnd = $(".addSP #InputEnd").val();
		var selInputNotes = $(".addSP #InputNotes").val();
		
		if (selCat=='' || seDev=='' || selStatus=='' || selInputStart=='' || selInputEnd=='' || selInputNotes=='') {			
			$(".addSP .result").html("Please check the fields for incorrect values.");
			$(".addSP .result").addClass("alert alert-danger");
		}
		else {
			$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				categories: selCat,
				developer: seDev,
				status: selStatus,
				start: selInputStart,
				end: selInputEnd,
				notes: selInputNotes,
				edit: false,
				delete_record: false,				
				edit_cat_dev_stat: false,
				//type: "add-multiple",
			})
			.done(function(data){				
				$(".addSP .result").html("");
				$(".addSP .result").removeClass("alert alert-danger");				
				GenerateGrid(data, summaryTable);				
			})
			.fail(function(){
				$(".addSP .result").html("Please check the fields for incorrect values.");
				$(".addSP .result").addClass("alert alert-danger");
			});
		}
	});	
	
	//Delete Table
	$("#summaryTable").on("click", '#col_action_delete', function(){		
		var id = $(this).attr('data-id');
		$("#delete_table #delete_id_text").val(id);
	});	
	
	$("#delete_table .delete-table").click(function(){		
		
		var selId = $("#delete_table #delete_id_text").val();
		
		$.post("index.php", //Required URL of the page on server
		{ 
			//Data Sending With Request To Server
			categories: false,
			developer: false,
			status: false,
			start: false,
			end: false,
			notes: false,
			id: selId,
			edit: false,
			delete_record: true,
		})
		.done(function(data){				
			$("#delete_table .result").html("");
			$("#delete_table .result").removeClass("alert alert-danger");				
			$('#delete_table').modal('hide');
			GenerateGrid(data, summaryTable);				
		})
		.fail(function(){
			$("#delete_table .result").html("Please check the fields for incorrect values.");
			$("#delete_table .result").addClass("alert alert-danger");
		});
		
	});	
	$('#delete_table').on('hidden.bs.modal', function () {
		$("#delete_table .result").html("");
		$("#delete_table .result").removeClass("alert alert-danger");
	});
	
	//Edit Table
	$("#summaryTable").on("click", '#col_action_edit', function(){		
		var id = $(this).attr('data-id');
		
		var cells = $(this).closest("tr").find("td");
		
		var val = [];
		
		var i = 0;
		$(cells).each(function(){
			val[i] = $(this).text();			
			i++;
		});
		
		i = 0;
		$("#edit_table .form-control").each(function(){
			if ($(this).attr('id') == 'edit_start_text' || $(this).attr('id') == 'edit_end_text') {
				val[i] = val[i].replace(' ', 'T');
				//$(this).attr('placeholder',val[i]);
				$(this).val(val[i]);
			}
			else if ($(this).attr('id')== 'edit_id_text'){
				val[i] = id;
				//$(this).attr('placeholder',val[i]);
				$(this).val(val[i]);
			}
			else {
				//$(this).attr('placeholder',val[i]);
				$(this).val(val[i]);
			}			
			i++;
		});		
	});	
	
	$("#edit_table .edit-table").click(function(){		
		
		var selCat = $("#edit_table #edit_category_text").val();
		var seDev = $("#edit_table #edit_developer_text").val();
		var selStatus = $("#edit_table #edit_status_text").val();
		var selInputStart = $("#edit_table #edit_start_text").val();
		var selInputEnd = $("#edit_table #edit_end_text").val();
		var selInputNotes = $("#edit_table #edit_notes_text").val();
		var selId = $("#edit_table #edit_id_text").val();
		
		if (selCat=='' || seDev=='' || selStatus=='' || selInputStart=='' || selInputEnd=='' || selInputNotes=='') {			
			$("#edit_table .result").html("Please check the fields for incorrect values.");
			$("#edit_table .result").addClass("alert alert-danger");
		}
		else {
			$.post("index.php", //Required URL of the page on server
			{ // Data Sending With Request To Server
				categories: selCat,
				developer: seDev,
				status: selStatus,
				start: selInputStart,
				end: selInputEnd,
				notes: selInputNotes,
				id: selId,
				edit: true,
				delete_record: false,
				//type: "add-multiple",
			})
			.done(function(data){				
				$("#edit_table .result").html("");
				$("#edit_table .result").removeClass("alert alert-danger");				
				$('#edit_table').modal('hide');
				GenerateGrid(data, summaryTable);				
			})
			.fail(function(){
				$("#edit_table .result").html("Please check the fields for incorrect values.");
				$("#edit_table .result").addClass("alert alert-danger");
			});
		}
	});	
	$('#edit_table').on('hidden.bs.modal', function () {
		$("#edit_table .result").html("");
		$("#edit_table .result").removeClass("alert alert-danger");
	});
	
	//Generate Table Grid
	function GenerateGrid(data, summaryTable){		
		//Trim trailing spaces
		data = $.trim(data);
		
		//Parse data from PHP
		data = $.parseJSON(data);
		//To Array
		data = eval(data);
		
		//Clear Table
		summaryTable.clear();
		summaryTable.rows.add(data).draw();	
		
		if($user == 'regular') {
			$('#summaryTable tr').find("td:last").remove();
		}		
	}
	
	function GenerateSelect(data){			
		//Trim trailing spaces
		data = $.trim(data);
		
		//Parse data from PHP
		data = $.parseJSON(data);
		//To Array
		data = eval(data);
		
		//Clear Table
		summaryTable.clear();
		summaryTable.rows.add(data).draw();				
	}
	
	function CurrentTimeDate(){
		var dateObj = new Date();
		var year = dateObj.getFullYear();
		var month = ((dateObj.getMonth()+1)>=10)? (dateObj.getMonth()+1) : '0' + (dateObj.getMonth()+1); 
		var day = ((dateObj.getDate())>=10)? (dateObj.getDate()) : '0' + (dateObj.getDate());
		var hours = ((dateObj.getHours())>=10)? (dateObj.getHours()) : '0' + (dateObj.getHours());
		var minutes = ((dateObj.getMinutes())>=10)? (dateObj.getMinutes()) : '0' + (dateObj.getMinutes());
		var seconds = ((dateObj.getSeconds())>=10)? (dateObj.getSeconds()) : '0' + (dateObj.getSeconds());
		newdate = year.toString() + '-' + month.toString() + '-' + day.toString() + 'T' + hours.toString() + ':' + minutes.toString() + ':' + seconds.toString();
		return newdate;
	}
})

