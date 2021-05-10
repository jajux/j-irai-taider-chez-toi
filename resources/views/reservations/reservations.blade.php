<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Réservations') }}
        </h2>
    </x-slot>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Sélectionner le ou les services</h1>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="form-checkbox">
                                    <label for="one-way">
                                        <input type="radio" id="one-way" name="flight-type">
                                        <span></span>assistance numérique
                                    </label>
                                    <label for="multi-city">
                                        <input type="radio" id="multi-city" name="flight-type">
                                        <span></span>bricolage
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text">
                                <span class="form-label">description</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date">
                                        <span class="form-label">date</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group input-not-empty">
                                            <select class="form-control">
                                                <option>Matin</option>
                                                <option>Après-midi</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Plage horaires</span>
                                        </div>
    
                                    </div>
                                </div>
                            </div>

                            <div class="form-btn">
                                <button class="submit-btn">Validation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $('.form-control').each(function() {
            floatedLabel($(this));
        });

        $('.form-control').on('input', function() {
            floatedLabel($(this));
        });

        function floatedLabel(input) {
            var $field = input.closest('.form-group');
            if (input.val()) {
                $field.addClass('input-not-empty');
            } else {
                $field.removeClass('input-not-empty');
            }
        }

    </script>

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>

</x-app-layout>
