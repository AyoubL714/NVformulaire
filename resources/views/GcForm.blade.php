 
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="{{asset('CssFiles/App.css')}}">
    </head>
  <header>
    
    <h1 id="title">Gestion des Congés</h1>
  </header>
  <body>
  <div id="form-outer">
    <h2 id="description">Informations de Congés</h2>

    <form method="GET" action="{{ route('employee.search') }}">
  @csrf
           <!-- demande de Matricule -->
           <div class="rowTab">
            <div class="labels"><strong>
                <label id="name-label" for="matricule">*Matricule :</label>
              </strong></div>
            <div class="rightTab">
              <input autofocus type="text" name="employee_id" id="matricule" class="input-field" required>
            </div>
          </div>
          <button id="search" type="submit">Recherche !</button>
    </form>
    @if(isset($employee))
    <pre>
      {{ $employee }}
    </pre>
  @endif

    <form id="survey-form"   >      
      @csrf  

      <!--Info du Conges-->
      <fieldset class="field">
   
       
         <!--Date debut du conges-->
        <div class="rowTab"> 
      <div class="labels"><strong>
      <label id="name-label" for="datedebutdeC">*Date debut du Congé:</label>
      </strong></div>
      <div class="rightTab">
        <input type="date" name="datedebutC" id="datedebutC" class="input-field" placeholder=" " >
      </div>
    </div>
       <!--Date fin du conges-->
       <div class="rowTab"> 
        <div class="labels"><strong>
        <label id="name-label" for="observation">*Date fin du Congé :</label>
        </strong></div>
        <div class="rightTab">
          <input  type="date" name="datefinC" id="datefinC" class="input-field" placeholder=" ">
        </div>
      </div>
<!--Nombre du jour de Congé-->
       <div class="rowTab">
        <div class="labels"><strong>
          <label id="date-label" for="NbrConge">*Nombre du jour de Congé :</label>
        </strong></div>
        <div class="rightTab">
          <input type="number" name="Date" id="Date" class="input-field"    >
        </div>
      </div>
      <!--Relica-->
      <div class="rowTab">
        <div class="labels"><strong>
          <label id="date-label" for="relica">*Relica(Nombre de jours Restants) :</label>
        </strong></div>
        <div class="rightTab">
          <input type="number" name="relica" id="relica" class="input-field">
        </div>
      </div>
       <!--Type de Congé-->
       <div class="rowTab">
        <div class="labels"><strong>
          <label for="currentPos">*Type de Congé :</label>
        </strong></div>
        <div class="rightTab">
          <select id="dropdown" name="currentPos" class="dropdown" required>
            <option disabled selected value>Congé</option>
            <option>Conge administratif</option>
            <option>Conge de maladie</option>
            <option>Conge de maternité</option>
            <option>Conge exceptionnels</option>
            <option>Accident de travail </option>
            <option>La meque</option>
            <option>Autorisation d'allaitement</option>
            <option>Autre</option>
            <option>Absence Non Justifié</option>
            </select>
        </div>
      </div>
         <!--Decision-->
             
             <div class="rowTab"> 
              <div class="labels"><strong>
              <label id="name-label" for="decision">*Decision :</label>
              </strong></div>
              <div class="rightTab">
                <input  type="text" name="decision" id="decision" class="input-field" placeholder="" required>
              </div>
            </div>
               <!--Adresse du Conge-->
       <div class="rowTab"> 
        <div class="labels"><strong>
          <label id="name-label" for="Adrs">*Adresse du Congé:</label>
        </strong></div>
        <div class="rightTab">
          <input  type="text" name="Adrs" id="Adrs" class="input-field" required>
        </div>
      </div>
          <!--Observation-->
          <div class="rowTab"> 
            <div class="labels"><strong>
            <label id="name-label" for="observation">*Observation :</label>
            </strong></div>
            <div class="rightTab">
              <input  type="text" name="Obs" id="Obs" class="input-field" placeholder="" required>
            </div>
          </div>
      </fieldset>
            
      
      

       
      
      



        


      
      <button id="submit" type="submit">Ajouter !</button>
      <button id="reset" type="reset">Initialisation !</button>
      <button id="search" type="button">Recherche !</button>






      
    </form>
  </div>

  </body>
</html>