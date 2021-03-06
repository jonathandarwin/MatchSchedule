<!DOCTYPE html>
<html>
<head>
	<title>Match Schedule</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  		.container{
  			padding-top:50px;
  		}  		
  		.margin30{
  			margin-top:30px;
  			margin-bottom: 30px;
  		}  	  
  		.margin15{
  			margin-top:15px;
  			margin-bottom:15px;
  		}	
  		.colorHover{
  			background-color: #F0F8FF;
  		}
  		.colorSelected{
  			background-color: red;
  		}
  		.freeSchedule{
  			background-color: green;
  		}
  		.white{
  			color:white;
  			text-align: center;
  		}
  		.tableSchedule, .resultTable{
  			overflow-y: scroll;
  			height:300px;
  		}
  		.errMsg{
  			color:red;
  		}
  		.center{
  			text-align: center;
  		}
  		.divResult{
  			border-radius:10px;
  			background-color: #FAFAD2;
  			padding:0px 15px 15px 15px;
  			margin-bottom:30px;
  		}
  	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 center">
				<h2>Match Schedule</h2>
				<hr>
			</div>
		</div>
		<div class="person1">
			<div class="row">
				<div class="col-md-3" style="display:inline-block">
					<label>Name </label>
					<input class="txtName form-control" type="text" name="Name">	
					<span class="errMsgName errMsg" style="display:none">
						Required
					</span>			
				</div>			
			</div>

			<div class="row margin30 btnAddNewSchedule">
				<div class="col-md-12">
					<button class="btn btn-primary">View/Hide Schedule</button>
				</div>
			</div>

			<div class="row margin30 tableSchedule" style="display:none">
				<div class="col-md-12">
					<table class="table table-bordered" id="tbSchedule">
						<thead>
							<tr>
								<th></th>
								<th>Mon</th>
								<th>Tue</th>
								<th>Wed</th>
								<th>Thu</th>
								<th>Fri</th>
								<th>Sat</th>
							</tr>
						</thead>
						
						<tbody class="tableBody">
							<tr>
								<td class="hour">07.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">07.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">08.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">08.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">09.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">09.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">10.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">10.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">11.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">11.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">12.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">12.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">13.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">13.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">14.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">14.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">15.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">15.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">16.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">16.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">17.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">17.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">18.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">18.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">19.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">19.30</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
							<tr>
								<td class="hour">20.00</td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
								<td class="day"></td>
							</tr>
						</tbody>
						
					</table>					
				</div>				
			</div>				
			<button class="btn btn-primary btnSubmit" style="display:none">Submit</button>	
		</div> <!-- END OF PERSON 1 -->		

		<!-- SCHEDULE -->
		<div class="divResult" style="display:none">
			<hr>	
			<h2>Schedule</h2>	
			<hr>		
		</div>
		<!-- END OF SCHEDULE -->


		<!-- MATCH SCHEDULE -->
		<div class="divDone" style="display:none">			
			<h2>Result</h2>
		</div>
		<button class="btn btn-primary btnDone" style="display:none">Done</button>	
		<!-- END OF MATCH SCHEDULE -->

		<hr>
		<footer class="page-footer font-small" style="margin-bottom:30px">
			<div class="footer-copyright text-center py-3">
				&copy 2018 Copyright : Jonathan Darwin
			</div>
		</footer>
	</div><!-- END OF CONTAINER -->
	
	


	<!-- TEMPLATE RESULT -->
	<div class="row template margin15" style="display:none">
		<div class="col-md-3 resultName">
		</div>
		<!-- <div class="col-md-3">
			<button class="btn btn-primary btnShowSchedule">Show Schedule</button>
		</div> -->
		<div class="col-md-6 resultTable">
		</div>
	</div>		
	<!-- END OF TEMPLATE RESULT -->

</body>
</html>

<script>	
	$(document).ready(function(){	
		var person = 1;			
		// BUTTON
		$('.btnAddNewSchedule').click(function(){
			$('.tableSchedule').toggle();
			$('.btnSubmit').toggle();			
		});						

		$('.btnDone').click(function(){
			//console.log('terpilih? : ' + $('.resultTable .tableBody .mon83').hasClass('selected'));
			$('#tbSchedule').clone().addClass('done').removeClass('selected colorSelected').appendTo('.divDone');
			var looping = 0;			
			var firstLoop = true;
			var arr = [];
			
			$('.resultTable .tableBody td.day').each(function(){
				if(firstLoop == true){
					if($(this).hasClass('selected')){
						arr.push(1);
					}
					else{
						arr.push(0);
					}
				}
				else{
					if($(this).hasClass('selected')){
						arr[looping] = 1;
					}
				}

				looping++;

				if(looping >= 162){
					looping = 0;
					firstLoop = false;
				}
			});
			
			looping = 0;			

			$('.done .tableBody td.day').each(function(){
				var curr = this;
				if(arr[looping] == 0){
					$(curr).addClass('freeSchedule white');
					$(curr).text('FREE');					
				}
				looping++;
			});

			$('.divDone').show();
						
		});
		// END OF BUTTON

		// SET SCHEDULE
		$('td').hover(function(){
			$(this).addClass('colorHover');
		},function(){
			$(this).removeClass('colorHover');
		});

		$('td').click(function(){			
			if($(this).hasClass('selected')){
				$(this).removeClass('selected');
				$(this).removeClass('colorSelected');
			}
			else if(!$(this).hasClass('hour')){
				$(this).addClass('selected');
				$(this).addClass('colorSelected');				
			}
		});
		// END OF SET SCHEDULE

		
		// SAVE DATA
		$('.btnSubmit').click(function(){		
			if($('.txtName').val() == ''){
				$('.errMsgName').show();
				return;
			}
			else{
				$('.errMsgName').hide();	
			}
			var classPerson = '';
			switch(person){	
				case 1:
					classPerson = 'first';
					$('.btnDone').show();
					break;
				case 2:
					classPerson = 'second';
					break;
				case 3:
					classPerson = 'third';
					break;
				case 4:
					classPerson = 'forth';
					break;
				case 5:
					classPerson = 'fifth';
					break;
			}// END OF SWITCH CASE	

			if(person > 5){
				alert('Max Schedule : 5');
				return;
			}

			// RESULT			
			$('.template').clone().addClass(classPerson).removeClass('template').addClass('result').appendTo('.divResult');
			$('.divResult').show();
			$('.' + classPerson).show();			
			$('.' + classPerson + ' .resultName').append($('.txtName').val());
			$('#tbSchedule').clone().appendTo('.' + classPerson + ' .resultTable');


			// RESET			
			$('.txtName').val('');
			$('.tableSchedule').hide();
			$('.btnSubmit').hide();
			$('.tableSchedule #tbSchedule td').removeClass('selected colorSelected');
			person++;
		});
		// END OF SAVE DATA

	
	});
</script>

<?php	
	$a = 1;
	$b = 2;
	$a = $a + $b;
?>