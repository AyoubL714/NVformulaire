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
    <h2 id="description"> Informations Professionnelle</h2>
    <form id="survey-form" method="POST" action="/dataInsert">
      @csrf
      <!-- demande de Matricule -->
      <div class="rowTab"> 
        <div class="labels"><strong>
        <label id="name-label" for="matricule">*Matricule :</label>
        </strong></div>
        <div class="rightTab">
          <input autofocus type="number" name="matricule" id="matricule" class="input-field"  required>
        </div>
      </div>
        <!-- demande de Nom -->
      <div class="rowTab"> 
        <div class="labels"><strong>
        <label id="name-label" for="name">*Nom :</label>
        </strong></div>
        <div class="rightTab">
          <input autofocus type="text" name="name" id="name" class="input-field"  required>
        </div>
      </div>
      <!-- demande de Prenom-->
      <div class="rowTab">
        <div class="labels"><strong>
          <label id="Prenom-label" for="prenom">*Prénom :</label>
        </strong></div>
        <div class="rightTab">
          <input type="text" name="prenom" id="prenom" class="input-field"   required>
        </div>
      </div>
       <!-- demande de Nom en Arabe -->
      <div class="rowTab"> 
        <div class="labels"><strong>
        <label id="name-label" for="nameA">*Nom en Arabe :اسم</label>
        </strong></div>
        <div class="rightTab">
          <input autofocus type="text" name="nameA" id="name" class="input-field"  required>
        </div>
      </div>
      <!-- demande de Prenom en Arabe-->
      <div class="rowTab">
        <div class="labels"><strong>
          <label id="Prenom-label" for="prenomA">*Prénom en Arabe :</label>
        </strong></div>
        <div class="rightTab">
          <input type="text" name="prenomA" id="prenom" class="input-field"   required>
        </div>
      </div>
      <!-- demande de Numéro de Carte d'indentite  -->
      <div class="rowTab"> 
        <div class="labels"><strong>
      <label id="NumCIN-label" for="NumCIN">*Numéro de carte d'indentite :</label>
        </strong></div>
        <div class="rightTab">
      <input  type="text" name="NumCIN" id="NumCIN" class="input-field" placeholder=" " required>
        </div>
      </div>
      <!-- demande de Date de Recrutement -->
      <div class="rowTab"> 
        <div class="labels"><strong>
        <label id="name-label" for="DateR">*Date de Recrutement :</label>
        </strong></div>
        <div class="rightTab">
          <input autofocus type="text" name="DateR" id="DateR" class="input-field" placeholder="" required>
        </div>
      </div>
      <!-- choix du service-->
      <div class="rowTab">
        <div class="labels"><strong>
          <label for="currentPos">*Votre  :</label>
        </strong></div>
        <div class="rightTab">
          <select id="dropdown" name="currentPos" class="dropdown" required>
            <option disabled selected value>Service</option>
            <option>Presidente</option>
            <option>Secrétarit de la Présidente</option>
            <option>B. des Projets</option>
            <option>Service Communication</option>
            <option>Deriction des Services</option>
            <option>RAS</option>
            <option>Bureau des systemes d'information</option>
           </select>
        </div>
      </div>
         
             <!-- choix du Fonction -->
      <div class="rowTab">
        <div class="labels"><strong>
          <label for="currentPos">*Votre  :</label>
        </strong></div>
        <div class="rightTab">
          <select id="dropdown" name="Fonction" class="dropdown" required>
            <option disabled selected value>Fonction</option>
            <option>Chef de Service</option>
            <option>Chef de Bureau</option>
            <option>Menuisier</option>
            <option>Conducteur</option>
            <option>Soudeur</option>
            
          </select>
        </div>
      </div>
      <!-- choix du Grade -->
      <div class="rowTab">
        <div class="labels"><strong>
          <label for="currentPos">*Votre  :</label>
       </strong> </div>
        <div class="rightTab">
          <select id="dropdown" name="Grade" class="dropdown" required>
            <option disabled selected value>Grade</option>
            <option>Technicien</option>
            <option>Redacteur</option>
            <option>Ingenieur</option>
            <option>Administrateur</option>
          </select>
        </div>
      </div>
      
      <h2> Information Personnel</h2>
  <!-- demande de Telephone -->
  <div class="rowTab"> 
    <div class="labels"><strong>
    <label id="name-label" for="Telephone">*Téléphone :</label>
    </strong></div>
    <div class="rightTab">
      <input autofocus type="tel" name="Telephone" id="Telephone" class="input-field"  required>
    </div>
  </div>
    <!-- demande de Email -->
    <div class="rowTab"> 
      <div class="labels"><strong>
      <label id="name-label" for="Email">*Email :</label>
      </strong></div>
      <div class="rightTab">
        <input autofocus type="email" name="Email" id="Email" class="input-field"  required>
      </div>
    </div>
      <!-- demande de Adresse -->
      <div class="rowTab"> 
        <div class="labels"><strong>
        <label id="name-label" for="adresse">*Adresse :</label>
        </strong></div>
        <div class="rightTab">
          <input autofocus type="text" name="adresse" id="adresse" class="input-field"  required>
        </div>
      </div>
      <!-- demande de Adresse en Arabe -->
      <div class="rowTab"> 
          <div class="labels"><strong>
          <label id="name-label" for="adresse">*Adresse en Arabe :عنوان</label>
          </strong></div>
            <div class="rightTab">
              <input autofocus type="text"  name="adresseA" id="adresseA" class="input-field"  required>
            </div>
        </div>
        <!-- demande de Sexe -->
      <div class="rowTab">
        <div class="labels"><strong>
        <label for="Sexe">Sexe:</label>
        </strong></div>
        <div class="rightTab">
        <ul id="preferences">
            <li class="radio"><label><input name="Sexe" value="Masculin" type="radio">Masculin</label>
            </li>
            <li class="radio"><label><input name="Sexe" value="Féminin" type="radio">Féminin</label>
            </li>             
            <li class="radio"><label><input name="Sexe" value="Indéterminé" type="radio" >Indéterminé</label>
            </li>             
          </ul>
        </div>
      </div>
       <!-- demande de Etat Matmoniale -->
       <div class="rowTab">
        <div class="labels"><strong>
        <label for="EMatmoniale">Etat Matmoniale:</label>
        </strong></div>
        <div class="rightTab">
        <ul id="preferences">
            <li class="radio"><label><input name="Etat Matmoniale" value="Marié(e)" type="radio">Marié(e)</label>
            </li>
            <li class="radio"><label><input name="Etat Matmoniale" value="Dévorcé" type="radio">Dévorcé</label>
            </li>             
            <li class="radio"><label><input name="Etat Matmoniale" value="Inconnu" type="radio" >Inconnu</label>
            </li>   
            <li class="radio"><label><input name="Etat Matmoniale" value="Célibataire" type="radio">Célibataire</label>
            </li>
            <li class="radio"><label><input name="EtatMatmoniale" value="Veuf(ve)" type="radio">Veuf(ve)</label>
            </li>          
          </ul>
        </div>
      </div>
       <!-- demande de Sexe -->
          <div class="rowTab">
            <div class="labels"><strong>
            <label for="Natio">Nationalité:</label>
            </strong></div>
            <div class="rightTab">
            <ul id="preferences">
                <li class="radio"><label><input name="Nationalite" value="Masculin" type="radio">Marocain</label>
                </li>
                <li class="radio"><label><input name="Nationalite" value="Féminin" type="radio">Etrangére</label>
                </li>             
                </ul>
            </div>
          </div>
          <!--demande date de naissance-->
          <div class="rowTab"> 
            <div class="labels"><strong>
            <label id="name-label" for="age">*Date de Naissance :</label>
            </strong></div>
            <div class="rightTab">
              <input  type="text" name="age" id="age" class="input-field"  required>
            </div>
          </div>
      <!--Observation-->
      <div class="rowTab"> 
        <div class="labels"><strong>
        <label id="name-label" for="observation">*Observation :</label>
        </strong></div>
        <div class="rightTab">
          <input autofocus type="text" name="Obs" id="Obs" class="input-field"  required>
        </div>
      </div>
        
    

      



        

<button id="submit" type="submit">Ajouter</button>
<button id="reset" type="reset">Initialisation</button>
<button id="search" type="button">Recherche</button>

      







      
      
      
    </form>
  </div>

  </body>
</html>

