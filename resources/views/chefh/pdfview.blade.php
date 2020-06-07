            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <style>
                    h3:before, h3:after {
  content:'\00a0\00a0\00a0\00a0';
  text-decoration: line-through;
  margin: auto 0.5em;
  text-decoration-line: underline

                    }
                    p.groove {border-style: groove;}
                    div{
                        border-width: 5px thin 10px
                        
                    }
                    p{
                        font-size:17px;
                    }
            </style>
 

            <body>
           
                            <p style="float:right;color:black">date :   <b>{{$conge->created_at}} </b></p>
                                <br>
                                <br>

                                <h1 align="center"  >Demande D'autorisation d'absence 
                                            <br>
                                            pour congé annuel payé</h1>
                    <hr>
                        
            <h3 style="text-decoration-line: underline">le demandeur :</h3>
                    <br>
                        <p>- Nom & prenom :     <small>{{$conge->user->name}} {{$conge->user->prenom}}</small> </p>
                          
                            <p>- Matricule :     <small>{{$conge->user->ko}} </small> </p>
                                                        
                                                        <p>- Fonction :     <small>{{$conge->user->poste}} </small> </p>
                                                        <p>- Service :     <small>{{$conge->user->service->nom}} </small> </p>
                            <hr>  
                            <h3 style="text-decoration-line: underline;position:absolute">Mentions Obligatoir :</h3>      <p style="position:relative ; float:right"> Repos Hebdomadaire:</p>  
                                <br>                        
                            <p>- Date de Depart :     <small>{{$conge->datedebut}} </small>     <small style="color gray">(jour Inclus dans la periode de conge)</small></p>
                          
                          <p>- date de retour :     <small>{{$conge->datefin}} </small>     <small style="color gray">(jour Exclus de la periode)</small>  </p>
                          <p>- Nombre de jours:     <small>{{$conge->jour}} </small> </p>                           
                                <br>
                                    <hr>
                                <h3 style="text-decoration-line: underline;position:absolute">Droits restants :     <small>periode de reference:</small></h3> 
                                <h3 style="float:right;position:relative"> -intérim du poste assuré par
                                  
                                </h3>
                                    <br>
                                        <br>
                                    <p>Période(1): ...............    </p> 
                                    <p>Période(2): ...............    </p>
                                    <p>Période(3): ...............    </p> 
                                        <p>Total restant a consommer  :  <small> {{$conge->user->solde}}</small> </p>
                    <hr>
                    <h3 style="text-decoration-line: underline;position:absolute">Visas :</h3> 
                        <br>     
                        <p style="position:absolute">Du demandeur  :    <small>{{$conge->user->name}} {{$conge->user->prenom}}</small></p>
                            <p style="position:relative;float:right">Du responsable Hierarchique:  <small>{{$conge->user->kochef}} </small> </p>

                    <br>
                        <br>
                            <hr>
                            <h4 align="center">Période de réference de calcul des droits au congé payé:</h4>
                                    <h1 align="center">1er janvier / 31 decembre</h1>
            
            
            </body>
            </html>