@extends('layouts.nav2')
@section('title')
dashboard
@endsection
@section('content')
<div class="sectiontitle">
    <h2>Statistics </h2>
    <span class="headerLine"></span>
</div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 Ajouter Map
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form  action="/map" method="POST" enctype="multipart/form-data">
        @csrf
      
        <div class="modal-body">
            <p>Importer le map d'usine </p>
          <input type="hidden" name="demandedoc_id" id="user_id" value="">
          <input type="file" name="recu" class="form-control">
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="submit"  onclick="md.showNotificationn('top','center')" class="btn btn-warning">yes</button>
      </div>
          
        </form>
      </div>
    
    </div>
  </div>
</div>





<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
        <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
        
        <i class="material-icons">account_box</i>
          <br>
          <p>Nombre total des employee</p>
                <p id="number2" class="number">{{App\User::count()}}</p>
              
                               <br>
               
            </div>

            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Service::count()}}" style="visibility: visible;">
  
            <i class="fa fa-briefcase"></i>

            <br>
            <p>total Service </p>
                         <p id="number1" class="number">{{App\Service::count()}}</p>
                              <br>
                
            </div>
         
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Typedocument::count()}}" style="visibility: visible;">
           
            <i class="material-icons">content_copy</i>
                
                <br>
                <p>Total Type Dosuments Administratives</p>
                <p id="number3" class="number">{{App\Typedocument::count()}}</p>
                  <br>
                
            </div>

            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Typeconge::count()}}" style="visibility: visible;">
            
                  <i class="material-icons">event</i>
                  
                  <br>
                  <p>total Types Conges</p>
                <p id="number4" class="number">{{App\Typeconge::count()}}</p>
                        <br>
                
            </div>
        </div>
    </div>










    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
        <div class="item wow fadeInUpBig animated animated" data-number="{{App\Demandedocument::count()}}" style="visibility: visible;">
  
                    <i class="material-icons">content_copy</i>
            
                  <br>
                  <p>Nombre Total de Documents demandées</p>
                <p id="number5" class="number">{{App\Demandedocument::count()}}</p>
                    <br>
                   
                
            </div>

            <div class="item wow fadeInUpBig animated animated" data-number="{{App\User::count()}}" style="visibility: visible;">
         
                <i class="fa fa-check-square"></i>
              
                <br>
                <p>Documents Adminitratives  <b style="color:orange">Validés</b></p>
                <p id="number6" class="number">{{App\Demandedocument::where('etat','=','1')->count()}}</p>
          
                    <br>
                
            </div>
         
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Demandedocument::where('etat','=','1')->count()}}" style="visibility: visible;">
                <i class="fa fa-hourglass-half"></i>
                  <br>
                <p>Documents Administratives <b style="color:orange">En Attente</b></p>
                <p id="number7" class="number">{{App\Demandedocument::where('etat','=','0')->count()}}</p>
            <br>
                
            </div>

            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Reclamation::count()}}" style="visibility: visible;">
                <i class="fa fa-exclamation-circle"></i>
                  <br>
                <p>Nouvelles reclamations</p>
                <p id="number8" class="number">{{App\Reclamation::count()}}</p>
            <br>
                
            </div>
        </div>
    </div>








   
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
        <div class="item wow fadeInUpBig animated animated" data-number="{{App\Demandedocument::count()}}" style="visibility: visible;">
        <div class="card-icon">
                    <i class="fa fa-sign-out"></i> <br><br>
                  </div>
                <p id="number5" class="number">{{App\Demandeconge::count()}}</p>
           
                    <br>
                <p>  Nombre total des demandes du congé</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\User::count()}}" style="visibility: visible;">
                <i class="fa fa-check-square"></i> <br> <br>
                <p id="number6" class="number">{{App\Demandeconge::where('decision','=','1')->count()}}</p>
          
                    <br>
                <p>Demandes de congé  <b style="color:orange">Validées</b></p>
            </div>
         
            <div class="item wow fadeInUpBig animated animated" data-number="{{App\Demandedocument::where('etat','=','1')->count()}}" style="visibility: visible;">
                <i class="fa fa-hourglass-half"></i> <br> <br>
                <p id="number7" class="number">{{App\Demandeconge::where('decision','=','0')->count()}}</p>
            <br>
                <p>demandes de congé <b style="color:orange">en Attente</b></p>
            </div>

            
        </div>
    </div>
</div>
@foreach(App\Map::all() as $map)
<embed id="zoom_01" height="600px" width="100%"  type="application/pdf" data-zoom-image="large/storage/cover_images/{{$map->map}}" src="/storage/cover_images/{{$map->map}}" />
            


@endforeach
@endsection
@section('scripts')
    <script>
    $("#zoom_01").elevateZoom();
    </script>
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