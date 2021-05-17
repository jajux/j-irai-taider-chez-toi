{{-- Footer --}}
<footer>
    <section id="footer" style="background: #418471; color:white">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-3 col-md-3  mt-3">
                    <h5>J'irai t'aider chez toi</h5>
                    <ul class="list-unstyled quick-links">
                        <li>plateforme de réservations</li>
                        <li>de services de proximités</li>
                        <li>du Grand quartier Garros.</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3  mt-3">
                    <h5>Menu</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a class="footer-links" href="{{ route('accueil') }}"><i class="fa fa-angle-right">
                                    Accueil</i></a></li>
                        <li><a class="footer-links" href="{{ route('services') }}"><i class="fa fa-angle-right">
                                    Services</i></a></li>
                        <li><a class="footer-links" href="{{ route('reservations') }}"><i class="fa fa-angle-right">
                                    Réservations</i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3  mt-3">
                    <h5>Adresse / Contact</h5>
                    <ul class="list-unstyled quick-links">
                        <li><span class="h6">Garros Services</span></li>
                        <li><i class="fa fa-home" aria-hidden="true"></i> 4 bis, rue du Bourget 32000 Auch</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><span> 05 62 63 65 39</span></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3  mt-3 ">
                    <h5>Mentions</h5>
                    <ul class="list-unstyled quick-links ">
                        <li><a class="footer-links" href="{{route('terms.show') }}" target="_blank"
                                rel="noopener noreferrer"><i class="fa fa-angle-right"> Conditions
                                    d'utilisations</i></a></li>
                        <li><a class="footer-links" href="{{route('policy.show') }}" target="_blank" rel="noopener noreferrer"><i
                                    class="fa fa-angle-right"> Politique de
                                    confidentialités</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p> © {{ date('Y') }} Copyright: <a class="footer-links target" href="http://garros-services.fr"
                            target="_blank" rel="noopener noreferrer"> Garros Services</a> - Tous droits réservés</p>
                </div>
                <hr>
            </div>
        </div>
    </section>
</footer>
