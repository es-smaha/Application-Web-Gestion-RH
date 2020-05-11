<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"class="table">
                      <thead class=" text-primary">
                       
                        <th>
                         last Name
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          KO
                        </th>
                        <th>
                         solde Conge
                        </th>
                        <th>
                         Jours Consommee
                        </th>
                      
                        <th>
                        Show
                        </th>
                     
                        <th>
                       delete
                        </th>
                      </thead>
                      <tbody>
                      @foreach($user as $user)
                        <tr>
                          
                            <td>{{$user->prenom}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->ko}}</td>
                            <td>{{$user->solde}}</td>
                            <td>{{$user->jour}}</td>
                           
                                
                                <td> 
                                    <a href="/liste-agent/{{$user->id}}" class="btn btn-success btn-link btn-lg" >
                                <span class="material-icons">  remove_red_eye</span>   </a></td>
                         

                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           