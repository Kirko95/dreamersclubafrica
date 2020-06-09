@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/banner/banner3.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Events</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Events <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
                <div class="heading-section">
                    <h2 class="mb-4 text-center"><span>Upcoming </span>Events</h2>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: [ 'interaction', 'dayGrid', 'list' ],
                    header: {
                        left: 'prevYear,prev,next,nextYear today',
                        center: 'title',
                        right: 'dayGridMonth,dayGridWeek,dayGridDay'
                    },
                    defaultDate: Date.now(),
                    navLinks: true, // can click day/week names to navigate views
                    editable: false,
                    eventLimit: true, // allow "more" link when too many events
                    events: [
                        {
                            title: 'Holiday Programs',
                            start: '2020-04-13',
                            end: '2020-04-18',
                        },
                        {
                            title: 'Holiday Programs',
                            start: '2020-04-20',
                            end: '2020-04-25'
                        },
                        {
                            groupId: 999,
                            title: 'Weekend Programs',
                            start: '2020-05-09'
                        },
                        {
                            groupId: 999,
                            title: 'Weekend Programs',
                            start: '2020-05-16'
                        },
                        {
                            groupId: 999,
                            title: 'Weekend Programs',
                            start: '2020-05-23'
                        },
                        {
                            groupId: 999,
                            title: 'Weekend Programs',
                            start: '2020-05-30'
                        },
                        {
                            groupId: 1000,
                            title: 'Weekend Programs',
                            start: '2020-06-06'
                        },
                        {
                            groupId: 1000,
                            title: 'Weekend Programs',
                            start: '2020-06-13'
                        },
                        {
                            groupId: 1000,
                            title: 'Weekend Programs',
                            start: '2020-06-20'
                        },
                        {
                            title: 'Holiday Programs',
                            start: '2020-07-27',
                            end: '2020-08-01'
                        },
                        {
                            title: 'Holiday Programs',
                            start: '2020-08-03',
                            end: '2020-08-08'
                        },
                        {
                            title: 'Holiday Programs - Intermediary classes will commence',
                            start: '2020-08-10',
                            end: '2020-08-15'
                        },
                        {
                            title: 'Holiday Programs - Intermediary classes will commence',
                            start: '2020-08-17',
                            end: '2020-08-21'
                        },
                        {
                            groupId: 991,
                            title: 'Weekend Programs',
                            start: '2020-09-05'
                        },
                        {
                            groupId: 991,
                            title: 'Weekend Programs',
                            start: '2020-09-12'
                        },
                        {
                            groupId: 991,
                            title: 'Weekend Programs',
                            start: '2020-09-19'
                        },
                        {
                            groupId: 991,
                            title: 'Weekend Programs',
                            start: '2020-09-26'
                        },
                        {
                            groupId: 980,
                            title: 'Weekend Programs',
                            start: '2020-10-03'
                        },
                        {
                            groupId: 980,
                            title: 'Weekend Programs',
                            start: '2020-10-10'
                        },
                        {
                            groupId: 980,
                            title: 'Weekend Programs',
                            start: '2020-10-17'
                        },
                        {
                            title: 'Holiday Programs',
                            start: '2020-11-02',
                            end: '2020-11-07'
                        },
                        {
                            title: 'Holiday Programs',
                            start: '2020-11-09',
                            end: '2020-11-14'
                        },
                        {
                            title: 'Holiday Programs - Advance classes will commence',
                            start: '2020-11-16',
                            end: '2020-11-21'
                        },
                        {
                            title: 'Holiday Programs - Advance classes will commence',
                            start: '2020-11-23',
                            end: '2020-11-27'
                        },
                        {
                            title: 'Holiday Programs - Advance classes will commence',
                            start: '2020-11-30',
                            end: '2020-12-05'
                        },
                        {
                            title: 'Holiday Event - Advance classes will commence',
                            start: '2020-12-07',
                            end: '2020-12-12'
                        },
                    ]
                    });

                    calendar.render();
                });
            </script>

            <div class="container" style="max-width: 900px; margin: 0 auto;">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</section>
<br> <br>

<style>
#calendar {
    max-width: 900px;
    margin: 0 auto;
  }
</style>
@endsection