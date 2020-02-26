<div class="contenu row">
  <div class="col-xl-3 col-md-2">
    <!--Card avec les coordonnées du client-->
    <div class="card coordinatedPhone bg-primary text-dark text-center font-weight-bold d-inline-block mt-5 ml-3">
      <div class="card-header font-weight-bold">Coordonnées</div>
      <div class="card-body">
        <p class="card-text text-dark font-weight-bold">
          Nom : Foucart<br>
          Prénom : Florian<br>
          <i class="fa fa-phone" aria-hidden="true"> : 06 34 30 63 43</i><br><br>
          <div class="displayNonePhone">
            <!--Bouton de contact qui au click renvoie sur un formulaire de contact-->
            <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="buttonContact" onclick="window.location.href = '../views/contact.php';">Contactez-moi</button>
            <!--Bouton de contact qui au click renvoie sur un calendrier-->
            <button type="button" class="btn btn-secondary font-weight-bold" data-toggle="modal" id="buttonAppointment" onclick="window.location.href = '../views/calendrier.php';">Prenez rendez-vous ici</button>
            <!--Fin du bouton prise de rendez-vous-->
          </div>
        </p>
        <!--Fin de card coordonnées client-->
        <div class="displayNonePhone">
          <div class="d-flex justify-content-center">
            <p>
              <!--Bouton icon modal géolocalisation-->
              <button type="button" class="btnGeolocation" data-toggle="modal" data-target="#exampleModalCentered">
                <i class="fa fa-map-marker iconMaps" aria-hidden="true"></i>
              </button>
            </p>
          </div>
        </div>
        <!-- Début de la modal géolocalisation -->
        <div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-body">
              <!--Insertion de la carte maps-->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49027.25880909703!2d2.4491935188965797!3d49.7733158396207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e793a6198fef93%3A0xe0263c33339324c7!2s80110%20Moreuil!5e0!3m2!1sfr!2sfr!4v1574153605631!5m2!1sfr!2sfr" allowfullscreen="" class="img-fluid imgIframe d-flex justify-content-center"></iframe>
            </div>
          </div>
        </div>
        <!--Fin de la modal géolocalisation-->
        <!--Card avis utilisateur-->
        <div class="displayNonePhone">
          <div class="card text-dark text-center font-weight-bold bg-primary mb-3 d-inline-block">
            <div class="card-header">Avis</div>
            <div class="card-body">
              <div class="justify-content-around">
                <p>
                  Le site vous a t-il plus ?<br>
                  <!--Smiley heureux et pas content qui au click affiche une fenêtre pour ajouter un commentaire-->
                  <i class="fa fa-smile-o parameterSmileyHappy" aria-hidden="true"></i>
                  <i class="fa fa-frown-o parameterSmileyAngry" aria-hidden="true"></i><br>
                </p>
              </div>
              <button type="button" class="btn btn-secondary buttonComment text-center font-weight-bold" name="button">Commentaires</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Fin de la card avis utilisateur-->
