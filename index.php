<?php
$dataArray = json_decode(file_get_contents('data.json'), true);
echo "<html lang=\"en\">

<head>
    <base target=\"_top\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Quick Start - Leaflet</title>

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"docs/images/favicon.ico\">

    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.css\"
        integrity=\"sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=\" crossorigin=\"\">
    <script src=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.js\"
        integrity=\"sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=\" crossorigin=\"\"></script>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 400px;
            width: 600px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>


</head>

<body data-new-gr-c-s-check-loaded=\"14.1087.0\" data-gr-ext-installed=\"\" class=\"\">

    <div id=\"map\" style=\"width: 600px; height: 400px; position: relative; outline: none;\"
        class=\"leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom\"
        tabindex=\"0\">
        <div class=\"leaflet-pane leaflet-map-pane\" style=\"transform: translate3d(-38px, 8px, 0px);\">
            <div class=\"leaflet-pane leaflet-tile-pane\">
                <div class=\"leaflet-layer \" style=\"z-index: 1; opacity: 1;\">
                    <div class=\"leaflet-tile-container leaflet-zoom-animated\"
                        style=\"z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);\"><img alt=\"\"
                            src=\"https://tile.openstreetmap.org/13/4093/2723.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(56px, -91px, 0px); opacity: 1;\"><img
                            alt=\"\" src=\"https://tile.openstreetmap.org/13/4094/2723.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(312px, -91px, 0px); opacity: 1;\"><img
                            alt=\"\" src=\"https://tile.openstreetmap.org/13/4093/2724.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(56px, 165px, 0px); opacity: 1;\"><img
                            alt=\"\" src=\"https://tile.openstreetmap.org/13/4094/2724.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(312px, 165px, 0px); opacity: 1;\">
                        <img alt=\"\" src=\"https://tile.openstreetmap.org/13/4092/2723.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(-200px, -91px, 0px); opacity: 1;\"><img
                            alt=\"\" src=\"https://tile.openstreetmap.org/13/4095/2723.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(568px, -91px, 0px); opacity: 1;\"><img
                            alt=\"\" src=\"https://tile.openstreetmap.org/13/4092/2724.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(-200px, 165px, 0px); opacity: 1;\"><img
                            alt=\"\" src=\"https://tile.openstreetmap.org/13/4095/2724.png\"
                            class=\"leaflet-tile leaflet-tile-loaded\"
                            style=\"width: 256px; height: 256px; transform: translate3d(568px, 165px, 0px); opacity: 1;\">
                    </div>
                </div>
            </div>
            <div class=\"leaflet-pane leaflet-overlay-pane\"></div>
            <div class=\"leaflet-pane leaflet-shadow-pane\"></div>
            <div class=\"leaflet-pane leaflet-marker-pane\"></div>
            <div class=\"leaflet-pane leaflet-tooltip-pane\"></div>
            <div class=\"leaflet-pane leaflet-popup-pane\"></div>
            <div class=\"leaflet-proxy leaflet-zoom-animated\"
                style=\"transform: translate3d(1.04809e+06px, 697371px, 0px) scale(4096);\"></div>
        </div>
        <div class=\"leaflet-control-container\">
            <div class=\"leaflet-top leaflet-left\">
                <div class=\"leaflet-control-zoom leaflet-bar leaflet-control\"><a class=\"leaflet-control-zoom-in\"
                        href=\"#\" title=\"Zoom in\" role=\"button\" aria-label=\"Zoom in\" aria-disabled=\"false\"><span
                            aria-hidden=\"true\">+</span></a><a class=\"leaflet-control-zoom-out\" href=\"#\" title=\"Zoom out\"
                        role=\"button\" aria-label=\"Zoom out\" aria-disabled=\"false\"><span aria-hidden=\"true\">???</span></a>
                </div>
            </div>
            <div class=\"leaflet-top leaflet-right\"></div>
            <div class=\"leaflet-bottom leaflet-left\"></div>
            <div class=\"leaflet-bottom leaflet-right\">
                <div class=\"leaflet-control-attribution leaflet-control\"><a href=\"https://leafletjs.com\"
                        title=\"A JavaScript library for interactive maps\"><svg aria-hidden=\"true\"
                            xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"8\" viewBox=\"0 0 12 8\"
                            class=\"leaflet-attribution-flag\">
                            <path fill=\"#4C7BE1\" d=\"M0 0h12v4H0z\"></path>
                            <path fill=\"#FFD500\" d=\"M0 4h12v3H0z\"></path>
                            <path fill=\"#E0BC00\" d=\"M0 7h12v1H0z\"></path>
                        </svg> Leaflet</a> <span aria-hidden=\"true\">|</span> ?? <a
                        href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a></div>
            </div>
        </div>
    </div>
    <script>
        const map = L.map(\'map\').setView([";echo $dataArray['lat'];", ";echo $dataArray['leng'];"], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
        }).addTo(map);

        const marker = L.marker([";echo $dataArray['lat'];", ";echo $dataArray['leng'];").addTo(map);

        const circle = L.circle([51.508, -0.11], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(map);

        const polygon = L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(map);
    </script>





</body>
<grammarly-desktop-integration data-grammarly-shadow-root=\"true\"></grammarly-desktop-integration>

</html>";