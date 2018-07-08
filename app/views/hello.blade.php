<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<!-- Initialize CSS -->
	<link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('jquery/jquery-ui.css') }}" rel="stylesheet">

	<link href="{{ asset('style.css') }}" rel="stylesheet">

	<!-- Calendar Display --> 
	
	<link href="{{asset('fullcalendar/fullcalendar.min.css')}}" rel='stylesheet' />
	<link href="{{ asset('fullcalendar/fullcalendar.print.min.css') }}" rel='stylesheet' media='print' />
	
</head>
<body>

	<div class="page">

		<div class="container-fluid">
			<div class="col-md-4">
				{{ Form::open(array('url' => 'add/event/submit','method'=>'post','class'=>'form')) }}
              
          		  <div class="form-group">
				    <label for="exampleInputEmail1">Event Title</label>
				    <input type="text" class="form-control" id="txtEventTitle" name="txtEventTitle" placeholder="Event Title">
				  </div>

				  <div class="col-md-6 padding-l0">
				  	<div class="form-group">
					    <label for="exampleInputEmail1">From</label>
					    <input type="text" class="form-control datepicker" id="txtEventTitleFrom" name="txtEventTitleFrom" placeholder="Date From">
					</div>
				  </div>

				  <div class="col-md-6 padding-l0">
				  	<div class="form-group">
					    <label for="exampleInputEmail1">To</label>
					    <input type="text" class="form-control datepicker" id="txtEventTitleTo" name="txtEventTitleTo" placeholder="Dater To">
					</div>
				  </div>

				  <button type="submit" class="btn btn-default">Save</button>

				{{ Form::close() }}
				<br/><br/>
				<a href="{{URL::to('/calendar/delete/all' )}}" class="btn btn-danger btn-xs">Delete All Record</a>
			</div>

			<div class="col-md-8">
				  <div id="calendar"></div>
			</div>
		</div>
	
	</div>

	<script src="{{ asset('fullcalendar/lib/moment.min.js')}}"></script>
	<script src="{{ asset('fullcalendar/lib/jquery.min.js')}}"></script>
	<script src="{{ asset('fullcalendar/lib/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('fullcalendar/fullcalendar.min.js') }}"></script>

	<script src="{{ asset('script.js') }}"></script>

	<script>

	var loadingImage = "";

	$(document).ready(function() {

	    $('#calendar').fullCalendar({
	      header: {
		        left: 'prev,next today',
		        center: 'title',
		        right: 'month,agendaWeek,agendaDay,listWeek'
		      },
		      defaultDate: "{{ date('Y-m-d') }}",
		      editable: true,
		      navLinks: true, // can click day/week names to navigate views
		      eventLimit: true, // allow "more" link when too many events
		      events: {
		        url: 'get/events',
		        error: function() {
		          alert('Error')
		        }
	      },
	      loading: function(bool) {
	        $('#loading').toggle(bool);
	      }
	    });

	    $('.datepicker').datepicker();
	});


	</script>


</body>
</html>
