<div class="maps-wraper">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=6a0c633c-193e-4f23-9ff1-01e421de70a5&load=Map&lang=ru_RU"
            type="text/javascript"></script>
    <div id="map" style="width: 100vw; height: 500px;"></div>
    <script type="text/javascript">
        ymaps.ready(function () {
            var map = new ymaps.Map("map", {
                center: [55.76, 37.64],
                zoom: 10
            });

            if (map) {
                ymaps.modules.require(['Placemark', 'Circle'], function (Placemark, Circle) {
                    var placemark = new Placemark([55.37, 35.45]);
                });
            }
        });
    </script>
</div>
