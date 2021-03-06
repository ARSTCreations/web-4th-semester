@extends ('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/agenda.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
@stop
@section('content')
<header>
<div class="box-daftar-agenda">
        <h1>Daftar Agenda</h1>
        @foreach($agendafromauth as $s)
        <div class="card-agenda">
            <h2>{{str_replace('"', "", stripslashes(json_encode($s->title)))}}</h2>
            <p style="font-size: 10px;">start date: {{str_replace('"', "", stripslashes(json_encode($s->start_date)))}}</p>
            <p style="font-size: 10px;">end date: {{str_replace('"', "", stripslashes(json_encode($s->start_date)))}}</p>
            <p>{{str_replace('"', "", stripslashes(json_encode($s->location)))}}</p>
        </div>
        @endforeach
    </div>
    <div class="box-kalender-agenda">
        <h1>Kalender Agenda</h1>
        <br />
        <div class="container">
        <br />
    <br />
    <div id="calendar"></div>

</div>
   
<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month'
        },
        events:'/full-calender',
        selectable:true,
        selectHelper: true,
        select:function(start, end, allDay)
        {
            var title = prompt('Event Title:');

            if(title)
            {
                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    success:function(data)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Created Successfully");
                    }
                })
            }
        }
    });

});
  
</script>
    </div>
    
</header>

@endsection
