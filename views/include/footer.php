<!--Début du pied de page avec logo facebook et logo mail qui au click renvoie sur les sites dans un nouvel onglet puis les mentions légales et n° siret avec ouverture modal dés lors du click-->
<footer id="hidePhone" class="container-fluid pr-0 pl-0 parameterFooter">
  <div class="bg-primary flexPhone">
      <button type="button" class="btn btn-secondary font-weight-bold contactPhone" data-toggle="modal" id="buttonContact" onclick="window.location.href = 'index.php?index=contact';">Contact</button>
        <button type="button" class="btn btn-secondary buttonComment font-weight-bold" id="viewPhone" name="button">Avis</button>
        <!--Début du logo facebook-->
        <a href="https://fr-fr.facebook.com/" target="_blank"><i class="fa fa-facebook-square parameterLogoFacebook font-weight-bold" aria-hidden="true"></i></a>
    <!--Fin du logo facebook-->
    <div>
      <button id="buttonPhone" type="button" class="btnGeolocation" data-toggle="modal" data-target="#exampleModalCentered">
        <i class="fa fa-map-marker iconMaps" aria-hidden="true"></i>
      </button>
    </div>
    <div class="hide">
      <!--Début du logo mail-->
      <a href="https://outlook.live.com/owa/" target="_blank"><i class="fa fa-envelope parameterLogoMail font-weight-bold" aria-hidden="true"></i></a>
    </div>
    <!--Fin du logo mail-->
    <!--Boutton d'ouverture modal-->
    <div class="d-flex justify-content-center">
      <div class="hide">
          <button type="button" id="notice" class="notice btn btn-secondary parameterBorderButtonFooter" data-toggle="modal">
          Mentions Légales
        </button>
      </div>
      <!--Début de la modal mentions légales-->
      <div class="modal" id="modalLegalNotice" tabindex="-1" role="dialog" aria-labelledby="modalLegalNotice" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title text-primary" id="modalNotice">Mentions Légales</h2>
              <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <p>
              1. Informations relatives à l'hébergeur
              OVH<br>
              Adresse du siège social : 2 rue Kellermann - 59100 Roubaix - France<br>
              Numéro de téléphone : 09 72 10 10 07<br>
              2. Informations relatives à l'éditeur<br>
              Raison sociale : MARECHAL    width: 100%; FERRANT<br>
              Adresse : 2 place des brouvreuils 80110 Moreuil<br>
              Téléphone : 0634306343<br>
              E-mail : foucartflorianmarechalferrant@outlook.fr<br>
              Directeur de publication : Mikael DAVID<br>
              RCS : 82319244800000<br>
              3. Conditions d'utilisation<br>
              Le site est accessible pa    width: 100%;r l'url marechalerie-davidmikael.fr.
              Son utilisation est régie par les présentes conditions générales. En utilisant le site, vous reconnaissez avoir pris connaissance de ces conditions et les avoir acceptées. Celles-ci pourront être modifiées à tout moment et sans préavis par la société MARECHAL FERRANT.
              MARECHAL FERRANT ne saurait être tenue pour responsable en aucune manière d'une mauvaise utilisation du service.<br>
              4. Limitation de la responsabilité<br>
              Les informations contenues sur ce site sont aussi précises que possible et le site est périodiquement remis à jour, mais peut toutefois contenir des inexactitudes, des omissions ou des lacunes. Si vous constatez une erreur ou ce qui peut être un dysfonctionnement, merci de bien vouloir le signaler par email en décrivant le problème de la manière la plus précise possible.
              Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, MARECHAL FERRANT ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. Les photos sont non contractuelles.
              Les liens hypertextes mis en place sur ce site internet en direction d'autres sites internet ne sauraient engager la responsabilité de MARECHAL FERRANT.<br>
              5. Litiges<br>
              Les présentes conditions sont régies par les lois françaises et toute contestation ou litige qui pourrait naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société MARECHAL FERRANT. La langue de référence, pour le règlement de contentieux éventuels, est le français.<br>
              6. Données personnelles<br>
              En application de la loi informatique et libertés, les internautes disposent d'un droit d'accès, de rectification, de modification et de suppression concernant les données qui les concernent personnellement. Ce droit peut être exercé par voie postale auprès de MARECHAL FERRANT 2 place des brouvreuils 29300 Quimperlé ou par voie électronique à l'adresse email suivante : contact@marechalerie-davidmikael.fr.
              Les informations personnelles collectées sont confidentielles et ne sont en aucun cas transmises à des tiers hormis pour l'éventuelle bonne exécution de la prestation commandée par l'internaute. En vertu de la loi n° 2000-719 du 1er août 2000, les coordonnées déclarées par l'acheteur pourront être communiquées sur réquisition des autorités judiciaires.<br>
              7. Propriété intellectuelle<br>
              Tout le contenu du présent site, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société MARECHAL FERRANT à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.
              Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord express par écrit de MARECHAL FERRANT.<br>
              8. Cookies<br>
              Pour des besoins de statistiques et d'affichage, le présent site utilise des cookies. Il s'agit de petits fichiers textes stockés sur votre disque dur afin d'enregistrer des données techniques sur votre navigation. Certaines parties de ce site ne peuvent être fonctionnelles sans l'acceptation de cookies.<br>
              9. Prestataire technique<br>
              Les prestations techniques sont assurées par Local.fr, société anonyme à Directoire et Conseil de Surveillance, dont le siège social est situé au 231 avenue de Parme Bât C 01000 Bourg en Bresse.
              www.local.fr
            </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
      <!--Fin de la modal mentions légales-->
      <!--Bouton d'ouverture modal-->
      <div id="hide">
        <button type="button" id="siret" class="siret btn btn-secondary parameterBorderButtonFooter" data-toggle="modal">
          N° Siret
        </button>
      </div>
      <!--Début de la modal n° siret-->
      <div class="modal" id="modalSiret" tabindex="-1" role="dialog" aria-labelledby="modalNumberSiret" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title text-primary" id="exampleModalCenteredLabel">N° Siret</h2>
              <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body text-center">
              79388678900015
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--Fin de la modal n° siret et fin du pied de page-->
  </footer>
<script  src="/views/assets/js/jquery.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script  src="/views/assets/js/script.js"></script>
</body>
</html>
