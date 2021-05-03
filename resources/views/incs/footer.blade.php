{{-- Footer --}}
<footer>
    <div id="container">
        <div id="part1">
            <div id="assoinfo"> <a id="sitelink" href="{{ route('accueil') }}">J'irai t'aider chez toi</a>
                <p id="title">Service de proximités</p>
                <p id="detail">Association de régie de quartier.</p>
            </div>
            <div id="explore">
                <p id="txt1">Menu</p>
                <a class="link" href="#">Accueil</a>
                <a class="link" href="#">Services</a>
                <a class="link" href="#">Reservations</a>
            </div>
            <div id="visit">
                <p id="txt2">Adresse</p>
                <p class="text">Garros Services</p>
                <p class="text">4 bis, rue du Bourget</p>
                <p class="text">32000 Auch</p>
                <p class="text"><span class="ai-phone-incoming"></span>05 62 63 65 39</p>
            </div>
            <div id="legal">
                <p id="txt3">Mentions</p>
                <a class="link1 pt-2" href="#">Conditions d'utilisations</a>
                <a class="link1  pt-2" href="#">Politique de confidentialités</a>
            </div>
        </div>
        <div id="part2" class="text-center p-3">
            <p> © {{ date('Y') }} Copyright: <a href="http://garros-services.fr" target="_blank" rel="noopener noreferrer" class="target"> Garros Services</a> - Tous droits réservés</p>
        </div>
    </div>
</footer>
