@extends('layouts.nav4')
@section('title')
Dashboard
@endsection
@section('content')
<div class="sectiontitle">
    <h2>Statistics </h2>
    <span class="headerLine"></span>
</div>
<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
        <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <i class="fa fa-smile-o"></i>
                <p id="number2" class="number">{{App\User::count()}}</p>
           
                    <br>
                <p>Nombre total des employee</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Service::count()}}" style="visibility: visible;">
 
            <i class="fa fa-briefcase"></i>
         
                <p id="number1" class="number">{{App\Service::count()}}</p>
          
                    <br>
                <p>total Service </p>
            </div>
         
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Typedocument::count()}}" style="visibility: visible;">
            <div class="card-icon">
            <i class="material-icons">content_copy</i>
                </div>
                
                <p id="number3" class="number">{{App\Typedocument::count()}}</p>
            <br>
                <p>Total Type Dosuments Administratives</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Typeconge::count()}}" style="visibility: visible;">
            <div class="card-icon">
                  <i class="material-icons">event</i>
                  </div>
                <p id="number4" class="number">{{App\Typeconge::count()}}</p>
            <br>
                <p>total Types Conges</p>
            </div>
        </div>
    </div>
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
        <div class="item wow fadeInUpBig animated animated" data-number="{{App\Demandedocument::count()}}" style="visibility: visible;">
        <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                <p id="number5" class="number">{{App\Demandedocument::count()}}</p>
           
                    <br>
                <p>Nombre total des employee</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\User::count()}}" style="visibility: visible;">
                <i class="fa fa-briefcase"></i>
                <p id="number6" class="number">{{App\Demandedocument::where('etat','=','1')->count()}}</p>
          
                    <br>
                <p>Demande Documents Adminitratives  <b style="color:orange">Valider</b></p>
            </div>
         
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Demandedocument::where('etat','=','1')->count()}}" style="visibility: visible;">
                <i class="fa fa-coffee"></i>
                <p id="number7" class="number">{{App\Demandedocument::where('etat','=','0')->count()}}</p>
            <br>
                <p>demande Documents Administratives <b style="color:orange">enAttente</b></p>
            </div>

            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Reclamation::count()}}" style="visibility: visible;">
                <i class="fa fa-camera"></i>
                <p id="number8" class="number">{{App\Reclamation::count()}}</p>
            <br>
                <p>Nouvelles reclamations</p>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
  <script>

$.fn.jQuerySimpleCounter = function( options ) {
	    var settings = $.extend({
	        start:  0,
	        end:    100,
	        easing: 'swing',
	        duration: 400,
	        complete: ''
	    }, options );

	    var thisElement = $(this);

	    $({count: settings.start}).animate({count: settings.end}, {
			duration: settings.duration,
			easing: settings.easing,
			step: function() {
				var mathCount = Math.ceil(this.count);
				thisElement.text(mathCount);
			},
			complete: settings.complete
		});
	};


$('#number1').jQuerySimpleCounter({end: {{App\Service::count()}},duration: 3000});
$('#number2').jQuerySimpleCounter({end: {{App\User::count()}} ,duration: 3000});
$('#number3').jQuerySimpleCounter({end: {{App\Typedocument::count()}},duration: 2000});
$('#number4').jQuerySimpleCounter({end: {{App\Typeconge::count()}},duration: 2500});
$('#number5').jQuerySimpleCounter({end: {{App\Demandedocument::count()}},duration: 3000});
$('#number6').jQuerySimpleCounter({end: {{App\Demandedocument::where('etat','=','1')->count()}} ,duration: 3000});
$('#number7').jQuerySimpleCounter({end: {{App\Demandedocument::where('etat','=','0')->count()}},duration: 2000});
$('#number8').jQuerySimpleCounter({end: {{App\Reclamation::count()}},duration: 2500});



  	/* AUTHOR LINK */
     $('.about-me-img').hover(function(){
            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
        }, function(){
            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
        });
  




  </script>
@endsection