@extends('layouts.nav4')
@section('title')
Dashboard
@endsection
@section('content')


<div class="card-body">
              
<div class="cards-listt">
  
<div class="cardi 1">

  <div class="card_image">  <p text-align="center">Demander un congé</p><img src="https://cdn.icon-icons.com/icons2/7/PNG/128/Today_thecalendar_1130.png" /> </div>
  <div class="card_title title-white">
  
  <a href="/conge"><span class="material-icons" style="color:black" >add_circle</span></a>
 </div>
  
</div>
  <div class="cardi 1">
  
  <div class="card_image">
  <p text-align="center"> Demander un Document </p>
    <img src="https://cdn.icon-icons.com/icons2/1024/PNG/256/document_add_256_icon-icons.com_75994.png" />
    </div>
  <div class="card_title title-white">
 
  <a   href="/doc" ><span class="material-icons"  style="color:black">add_circle</span></a>
  
  
  </div>
</div>

<div class="cardi 2">

  <div class="card_image">
  <p text-align="center">Ajouter Reclamation/suggestion</p>
    <img src="https://cdn.icon-icons.com/icons2/81/PNG/256/exclamation_warning_15590.png" />
  </div>
  <div class="card_title">
 
  <a href="/reclamation" ><span class="material-icons" style="color:black">add_circle</span></a>
  </div>
</div>
  
  <div class="cardi 3">
  <div class="card_image">
  <p text-align="center">Visiter Profil </p>
  <img src="https://cdn.icon-icons.com/icons2/1865/PNG/512/idcard_119573.png"/>
    </div>
  <div class="card_title title-black">
  <a href="/profil"  ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>

  </div>
  </div>
   

  <div class="cardi 4">
  <div class="card_image">
  <p text-align="center">Visiter Calendrier </p>
    <img src="https://cdn.icon-icons.com/icons2/481/PNG/128/07_Calendar_47149.png" />
    </div>
  <div class="card_title title-black">
  <a href="/calendar-employee"  ><span class="material-icons"  style="color:black">  remove_red_eye</span></a>
  </div>
  </div>

<div class="cardi 2 ">
  <div class="card_image">
  <p text-align="center">Visiter Le Planning de Travail </p>
    <img src="https://cdn.icon-icons.com/icons2/1827/PNG/512/4288579andbusinessdatefinancegearplanningtime-115777_115736.png" />
    </div>
  <div class="card_title title-black">
  <a href="/planningR"  ><span class="material-icons"  style="color:white">  remove_red_eye</span></a>
  </div>
  </div>
</div>


@endsection