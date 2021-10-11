<?php
/*
Template Name: Map Test Template v2.0
 */
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>

    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css"/>

            <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <style>
                #map_16494ffe3d994c2fb95ce876ef007369 {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>

</head>
<body>

            <div class="folium-map" id="map_16494ffe3d994c2fb95ce876ef007369" ></div>

</body>
<script>

            var map_16494ffe3d994c2fb95ce876ef007369 = L.map(
                "map_16494ffe3d994c2fb95ce876ef007369",
                {
                    center: [-38.043995, 145.264296],
                    crs: L.CRS.EPSG3857,
                    zoom: 6,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );
            L.control.scale().addTo(map_16494ffe3d994c2fb95ce876ef007369);





            var tile_layer_05a0cd9267954dfaafef957e9bb15f83 = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {"attribution": "Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_16494ffe3d994c2fb95ce876ef007369);


            var feature_group_777c2c0de63142b8a90dbfc0f72df866 = L.featureGroup(
                {}
            ).addTo(map_16494ffe3d994c2fb95ce876ef007369);


            var marker_8a211cf683ac4d78806293a953ec04e1 = L.marker(
                [-35.3114, 149.028152],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a9861429790b458585840d7fd70724a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8a211cf683ac4d78806293a953ec04e1.setIcon(icon_a9861429790b458585840d7fd70724a0);


            marker_8a211cf683ac4d78806293a953ec04e1.bindTooltip(
                `<div>
                     Porter Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_4b321d788b2644729c771fbade800c6f = L.marker(
                [-35.268338, 149.141855],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf64b955bb364ad5b2f219b269b43a5e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4b321d788b2644729c771fbade800c6f.setIcon(icon_cf64b955bb364ad5b2f219b269b43a5e);


            marker_4b321d788b2644729c771fbade800c6f.bindTooltip(
                `<div>
                     Corroboree Park
                 </div>`,
                {"sticky": true}
            );


            var marker_1669250716674bc19924dab7c42092b1 = L.marker(
                [-35.319146999999994, 149.100659],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_19e996eb346a41399594329203691776 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1669250716674bc19924dab7c42092b1.setIcon(icon_19e996eb346a41399594329203691776);


            marker_1669250716674bc19924dab7c42092b1.bindTooltip(
                `<div>
                     Lawley Street - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_949c691f1dde438fad2373fd5ad27e73 = L.marker(
                [-35.206624, 149.038999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_96b9e952c2314b0d85df162a8d18efcd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_949c691f1dde438fad2373fd5ad27e73.setIcon(icon_96b9e952c2314b0d85df162a8d18efcd);


            marker_949c691f1dde438fad2373fd5ad27e73.bindTooltip(
                `<div>
                     Blackwell Circuit Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_6e9e6d58bedf4a4197089e42b3ec6d4d = L.marker(
                [-35.193455, 149.106676],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3d6ab53400a446ef9a3ff700784e58e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e9e6d58bedf4a4197089e42b3ec6d4d.setIcon(icon_3d6ab53400a446ef9a3ff700784e58e7);


            marker_6e9e6d58bedf4a4197089e42b3ec6d4d.bindTooltip(
                `<div>
                     Lyrebird Place Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_1e79732f279347d4be18fd8bbea0a13c = L.marker(
                [-35.336639, 149.073916],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5f76ea3032e84e89b4ef22153c8f9317 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1e79732f279347d4be18fd8bbea0a13c.setIcon(icon_5f76ea3032e84e89b4ef22153c8f9317);


            marker_1e79732f279347d4be18fd8bbea0a13c.bindTooltip(
                `<div>
                     Devonport Street - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_52ac414ead4d4b4381a1af54146bc7a4 = L.marker(
                [-35.421279999999996, 149.122054],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0583b09201e3404fadea8b59f78b69f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_52ac414ead4d4b4381a1af54146bc7a4.setIcon(icon_0583b09201e3404fadea8b59f78b69f3);


            marker_52ac414ead4d4b4381a1af54146bc7a4.bindTooltip(
                `<div>
                     Alston Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a555973f10964fb4bddee320e4c93707 = L.marker(
                [-35.408122999999996, 149.129002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a63652f24ba34a7dbfe04246c4fa5fe1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a555973f10964fb4bddee320e4c93707.setIcon(icon_a63652f24ba34a7dbfe04246c4fa5fe1);


            marker_a555973f10964fb4bddee320e4c93707.bindTooltip(
                `<div>
                     Hawkesworth Place - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_006fb0914e474b0f9f056076789acf50 = L.marker(
                [-35.402904, 149.071724],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3c0a3f94fe0e4a18947e3a1f2c45c0ad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_006fb0914e474b0f9f056076789acf50.setIcon(icon_3c0a3f94fe0e4a18947e3a1f2c45c0ad);


            marker_006fb0914e474b0f9f056076789acf50.bindTooltip(
                `<div>
                     Lake Tuggeranong District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d089d7b2dfd44240b01b1c7a0f656c51 = L.marker(
                [-35.372251, 149.062246],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c3cedaa170cf49f8a4a3431de01ce181 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d089d7b2dfd44240b01b1c7a0f656c51.setIcon(icon_c3cedaa170cf49f8a4a3431de01ce181);


            marker_d089d7b2dfd44240b01b1c7a0f656c51.bindTooltip(
                `<div>
                     Rundle Place - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7d66be093ab04737994c6cde31339a4c = L.marker(
                [-35.341884, 149.227383],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_59a6fa99ed6240cc80db61553b15cfd3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7d66be093ab04737994c6cde31339a4c.setIcon(icon_59a6fa99ed6240cc80db61553b15cfd3);


            marker_7d66be093ab04737994c6cde31339a4c.bindTooltip(
                `<div>
                     River Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_587232c67d854bcf90a437316408fb48 = L.marker(
                [-35.237826, 149.074645],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4a44615a07144aebaa05d354b6728f66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_587232c67d854bcf90a437316408fb48.setIcon(icon_4a44615a07144aebaa05d354b6728f66);


            marker_587232c67d854bcf90a437316408fb48.bindTooltip(
                `<div>
                     John Knight Memorial Park
                 </div>`,
                {"sticky": true}
            );


            var marker_884e7d5dd5754c9392ce2ce11e48cea8 = L.marker(
                [-35.314768, 149.10578999999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dfc6a1ff7d694cd997343a5fe8356646 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_884e7d5dd5754c9392ce2ce11e48cea8.setIcon(icon_dfc6a1ff7d694cd997343a5fe8356646);


            marker_884e7d5dd5754c9392ce2ce11e48cea8.bindTooltip(
                `<div>
                     Hannah Place - Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_c9392a30e22a4506ba20b804356d711e = L.marker(
                [-35.264871, 149.113599],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4b5892bce37e45c693ebe11fd3d31a0e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c9392a30e22a4506ba20b804356d711e.setIcon(icon_4b5892bce37e45c693ebe11fd3d31a0e);


            marker_c9392a30e22a4506ba20b804356d711e.bindTooltip(
                `<div>
                     Cockle Street  Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_af365cc4b1f64110b3bdf085e7041956 = L.marker(
                [-35.201965, 149.038737],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_829b11ea811c494ba3c63659bb8dc86f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_af365cc4b1f64110b3bdf085e7041956.setIcon(icon_829b11ea811c494ba3c63659bb8dc86f);


            marker_af365cc4b1f64110b3bdf085e7041956.bindTooltip(
                `<div>
                     Packham Place Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_523890389f3f4095b976521b3092b93a = L.marker(
                [-35.389103000000006, 149.05193500000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bc09fa906151420498797da6263adf67 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_523890389f3f4095b976521b3092b93a.setIcon(icon_bc09fa906151420498797da6263adf67);


            marker_523890389f3f4095b976521b3092b93a.bindTooltip(
                `<div>
                     Boddington Crescent - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e33d3fdbed224f92add988e9f2aacf6e = L.marker(
                [-35.357267, 149.063593],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5a9c9c1610274ae0abc129b2699a5a01 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e33d3fdbed224f92add988e9f2aacf6e.setIcon(icon_5a9c9c1610274ae0abc129b2699a5a01);


            marker_e33d3fdbed224f92add988e9f2aacf6e.bindTooltip(
                `<div>
                     Nemarang Crescent Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_721caef4b1da4b43b4aa3388483ad11a = L.marker(
                [-35.209532, 149.077357],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_48ed963fb6234ceeb077d93050b9f8a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_721caef4b1da4b43b4aa3388483ad11a.setIcon(icon_48ed963fb6234ceeb077d93050b9f8a5);


            marker_721caef4b1da4b43b4aa3388483ad11a.bindTooltip(
                `<div>
                     Kingston Street Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_9fd194f20df94c719e2c11a119d70c16 = L.marker(
                [-35.456377, 149.084235],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_78b6f55b161c4008895dfb2bae54a7fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9fd194f20df94c719e2c11a119d70c16.setIcon(icon_78b6f55b161c4008895dfb2bae54a7fa);


            marker_9fd194f20df94c719e2c11a119d70c16.bindTooltip(
                `<div>
                     Point Hut District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d1c71627b5d14712beea9699348529be = L.marker(
                [-35.323883, 148.941168],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b699466b4b2b41de91de255619805eba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d1c71627b5d14712beea9699348529be.setIcon(icon_b699466b4b2b41de91de255619805eba);


            marker_d1c71627b5d14712beea9699348529be.bindTooltip(
                `<div>
                     Coree - Cotter Road
                 </div>`,
                {"sticky": true}
            );


            var marker_3bfe17c7cc8649cd9dc9594fb937e45b = L.marker(
                [-35.426712, 149.07164],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0bcb4989d464448d9994d48aa502a81a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3bfe17c7cc8649cd9dc9594fb937e45b.setIcon(icon_0bcb4989d464448d9994d48aa502a81a);


            marker_3bfe17c7cc8649cd9dc9594fb937e45b.bindTooltip(
                `<div>
                     Burgoyne Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_18c030ab0b6e448eb0bdd7213e4145f4 = L.marker(
                [-35.350207, 149.061227],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2472e3a7e46e42c79e71403b04619da8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_18c030ab0b6e448eb0bdd7213e4145f4.setIcon(icon_2472e3a7e46e42c79e71403b04619da8);


            marker_18c030ab0b6e448eb0bdd7213e4145f4.bindTooltip(
                `<div>
                     Malara Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_84359cacadf4460199b2a06d637c6b5a = L.marker(
                [-35.337649, 149.053683],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f9118037075e47b798b1d9ffd9fb4f45 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_84359cacadf4460199b2a06d637c6b5a.setIcon(icon_f9118037075e47b798b1d9ffd9fb4f45);


            marker_84359cacadf4460199b2a06d637c6b5a.bindTooltip(
                `<div>
                     Dillon Close - Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_0a38d61bd5d94f11a9f427331e26879a = L.marker(
                [-35.20798, 149.16024199999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9944b7f6a0ee47d4a6c5401271136e04 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0a38d61bd5d94f11a9f427331e26879a.setIcon(icon_9944b7f6a0ee47d4a6c5401271136e04);


            marker_0a38d61bd5d94f11a9f427331e26879a.bindTooltip(
                `<div>
                     Helby Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d64c3a7081534806aa8c16f436884507 = L.marker(
                [-35.31666, 149.152879],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_498767b7c59f424c9416d9ce9c319a2b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d64c3a7081534806aa8c16f436884507.setIcon(icon_498767b7c59f424c9416d9ce9c319a2b);


            marker_d64c3a7081534806aa8c16f436884507.bindTooltip(
                `<div>
                     Sandalwood Street - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_103c0c8f9b19412fb7a95fcafe17ed0b = L.marker(
                [-35.330284999999996, 149.151911],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9efdaebbcce8490db33c0b3f8223a1ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_103c0c8f9b19412fb7a95fcafe17ed0b.setIcon(icon_9efdaebbcce8490db33c0b3f8223a1ec);


            marker_103c0c8f9b19412fb7a95fcafe17ed0b.bindTooltip(
                `<div>
                     Kootara Crescent
                 </div>`,
                {"sticky": true}
            );


            var marker_cecdef947220494688c14c74ca39c685 = L.marker(
                [-35.157396000000006, 149.150881],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e889317418904483b271bb66f3e823eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cecdef947220494688c14c74ca39c685.setIcon(icon_e889317418904483b271bb66f3e823eb);


            marker_cecdef947220494688c14c74ca39c685.bindTooltip(
                `<div>
                     Mulligans Flat Road Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_f497ed4678a74544b6170b58b45949da = L.marker(
                [-35.334126, 149.030598],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8054081e96204b5d8e369344b24cf28d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f497ed4678a74544b6170b58b45949da.setIcon(icon_8054081e96204b5d8e369344b24cf28d);


            marker_f497ed4678a74544b6170b58b45949da.bindTooltip(
                `<div>
                     Cargelligo Street Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_84c1ed8831be466590a9049afafda5b7 = L.marker(
                [-35.392426, 149.062122],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5cadabebd84c4ccbb393462b9e48c59f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_84c1ed8831be466590a9049afafda5b7.setIcon(icon_5cadabebd84c4ccbb393462b9e48c59f);


            marker_84c1ed8831be466590a9049afafda5b7.bindTooltip(
                `<div>
                     Kambah District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_c0f2bc4ae9004879a77daa267909f2a4 = L.marker(
                [-35.352159, 149.07701200000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4ca21642fbb34243bec14d59dd9fcb5a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c0f2bc4ae9004879a77daa267909f2a4.setIcon(icon_4ca21642fbb34243bec14d59dd9fcb5a);


            marker_c0f2bc4ae9004879a77daa267909f2a4.bindTooltip(
                `<div>
                     Shann Place  Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8011e6b802da402daaac56bf0053f1a0 = L.marker(
                [-35.392427000000005, 149.062302],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_87c6c35ba71848e5889657da9a1bee1c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8011e6b802da402daaac56bf0053f1a0.setIcon(icon_87c6c35ba71848e5889657da9a1bee1c);


            marker_8011e6b802da402daaac56bf0053f1a0.bindTooltip(
                `<div>
                     Kambah District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_dfb33edfd0944dbd98af984a870d0d9c = L.marker(
                [-35.383505, 149.052571],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_af009b92efa44ec8bc3f16244c37a856 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dfb33edfd0944dbd98af984a870d0d9c.setIcon(icon_af009b92efa44ec8bc3f16244c37a856);


            marker_dfb33edfd0944dbd98af984a870d0d9c.bindTooltip(
                `<div>
                     Boddington Crescent Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8f57dbdcc0244099906dcd1bf252f59b = L.marker(
                [-35.253398, 149.165685],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f3a0cd347abb4aebb4050c2dc059e232 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f57dbdcc0244099906dcd1bf252f59b.setIcon(icon_f3a0cd347abb4aebb4050c2dc059e232);


            marker_8f57dbdcc0244099906dcd1bf252f59b.bindTooltip(
                `<div>
                     Brennan Street  Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_ca97bb8395054babab6a8e55524d24e3 = L.marker(
                [-35.404784, 149.103042],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_017ca7db96a44844b4e3be377ec41589 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca97bb8395054babab6a8e55524d24e3.setIcon(icon_017ca7db96a44844b4e3be377ec41589);


            marker_ca97bb8395054babab6a8e55524d24e3.bindTooltip(
                `<div>
                     Lansell Circuit Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_3cd7c0f408244c3198d9b07485ccaa45 = L.marker(
                [-35.16785, 149.143869],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_37b821e23c8b44419daaf1e35226b79b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3cd7c0f408244c3198d9b07485ccaa45.setIcon(icon_37b821e23c8b44419daaf1e35226b79b);


            marker_3cd7c0f408244c3198d9b07485ccaa45.bindTooltip(
                `<div>
                     Amy Ackman Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8d642236460e41778b20733293b4904b = L.marker(
                [-35.188035, 149.16236899999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c2d734a4cd8a4c4584f4f772f6a91675 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d642236460e41778b20733293b4904b.setIcon(icon_c2d734a4cd8a4c4584f4f772f6a91675);


            marker_8d642236460e41778b20733293b4904b.bindTooltip(
                `<div>
                     Bettong Avenue Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_df4690c255734566b763a91bb559b1b2 = L.marker(
                [-35.418688, 149.083038],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_adb9272fbb604098814fd4d6923187c6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_df4690c255734566b763a91bb559b1b2.setIcon(icon_adb9272fbb604098814fd4d6923187c6);


            marker_df4690c255734566b763a91bb559b1b2.bindTooltip(
                `<div>
                     Griffin Place Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_ead0699c7ba14bf2bb488faf29d5d561 = L.marker(
                [-35.208529999999996, 149.001871],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3c98694c67814e0a98e339f1522abcdf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ead0699c7ba14bf2bb488faf29d5d561.setIcon(icon_3c98694c67814e0a98e339f1522abcdf);


            marker_ead0699c7ba14bf2bb488faf29d5d561.bindTooltip(
                `<div>
                     Clyde Finlay Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a9b4bf12938b4ccea3f3eccc9153e07b = L.marker(
                [-35.247334, 149.12096699999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9799957c28d94eef90f693a1f1263ec6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a9b4bf12938b4ccea3f3eccc9153e07b.setIcon(icon_9799957c28d94eef90f693a1f1263ec6);


            marker_a9b4bf12938b4ccea3f3eccc9153e07b.bindTooltip(
                `<div>
                     Lambert Place - Road Verge
                 </div>`,
                {"sticky": true}
            );


            var marker_887b15f7a3064da3a045b5b519cfb019 = L.marker(
                [-35.188399, 149.017748],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_22bdf6fa2ce14f89a39d1c18dea9f789 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_887b15f7a3064da3a045b5b519cfb019.setIcon(icon_22bdf6fa2ce14f89a39d1c18dea9f789);


            marker_887b15f7a3064da3a045b5b519cfb019.bindTooltip(
                `<div>
                     Percy Pegg Circuit Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_88fc2c6b8dce461e92c5cf28d8c7de97 = L.marker(
                [-35.180051, 149.119613],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_78f036da897a403992ebea6c26361042 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88fc2c6b8dce461e92c5cf28d8c7de97.setIcon(icon_78f036da897a403992ebea6c26361042);


            marker_88fc2c6b8dce461e92c5cf28d8c7de97.bindTooltip(
                `<div>
                     Gadali Crescent Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_218cefd413e34ccaba5ca8e2f3c90594 = L.marker(
                [-35.339862, 149.09164199999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_39cb04fa3c2c422589018a38253f6581 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_218cefd413e34ccaba5ca8e2f3c90594.setIcon(icon_39cb04fa3c2c422589018a38253f6581);


            marker_218cefd413e34ccaba5ca8e2f3c90594.bindTooltip(
                `<div>
                     Edison District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9578df3c4c9143a6b313b99a387faa66 = L.marker(
                [-35.377732, 149.053236],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_510e74dfcfcc41519236a470a109cc2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9578df3c4c9143a6b313b99a387faa66.setIcon(icon_510e74dfcfcc41519236a470a109cc2a);


            marker_9578df3c4c9143a6b313b99a387faa66.bindTooltip(
                `<div>
                     Attiwell Circuit - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_f9b885e292d8421e95fa826dae333f9c = L.marker(
                [-35.277923, 149.134538],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ca7a9d1c13424240b53b13ed5aaf4353 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9b885e292d8421e95fa826dae333f9c.setIcon(icon_ca7a9d1c13424240b53b13ed5aaf4353);


            marker_f9b885e292d8421e95fa826dae333f9c.bindTooltip(
                `<div>
                     City Youth Centre Basket Ball Court
                 </div>`,
                {"sticky": true}
            );


            var marker_6dd2565bbef24af4a7d6f30541b9c037 = L.marker(
                [-35.179882, 149.12991599999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_289fb06797cb4adfb1a99043c68cedb2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6dd2565bbef24af4a7d6f30541b9c037.setIcon(icon_289fb06797cb4adfb1a99043c68cedb2);


            marker_6dd2565bbef24af4a7d6f30541b9c037.bindTooltip(
                `<div>
                     Yerrabi District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3b692766406f4b75ac9ddd229cad43bf = L.marker(
                [-37.55223341, 143.8065678],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e451ab320559484d8a0567662c44151f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3b692766406f4b75ac9ddd229cad43bf.setIcon(icon_e451ab320559484d8a0567662c44151f);


            marker_3b692766406f4b75ac9ddd229cad43bf.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_77c550a0fe474570b91bae4ea954ea02 = L.marker(
                [-37.54830503, 143.8697381],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6cb5301a7d074f388cc8887813ff6839 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_77c550a0fe474570b91bae4ea954ea02.setIcon(icon_6cb5301a7d074f388cc8887813ff6839);


            marker_77c550a0fe474570b91bae4ea954ea02.bindTooltip(
                `<div>
                     Black Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_72bf1e2fabf846b2bd2a70d235ab4efc = L.marker(
                [-37.55154926, 143.8951763],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b5e315de07174f658ddc106909b2e936 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72bf1e2fabf846b2bd2a70d235ab4efc.setIcon(icon_b5e315de07174f658ddc106909b2e936);


            marker_72bf1e2fabf846b2bd2a70d235ab4efc.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_034bf5ca2f914b27bf2a1b7c50051be3 = L.marker(
                [-37.65042933, 143.8878956],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_516812bad597486e8f9485bce4d9d859 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_034bf5ca2f914b27bf2a1b7c50051be3.setIcon(icon_516812bad597486e8f9485bce4d9d859);


            marker_034bf5ca2f914b27bf2a1b7c50051be3.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_d0b39ddfbea94b9287c21376915c2083 = L.marker(
                [-37.58012558, 143.8187479],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0bb3e494fc0040ae8dae676b345f0d7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d0b39ddfbea94b9287c21376915c2083.setIcon(icon_0bb3e494fc0040ae8dae676b345f0d7d);


            marker_d0b39ddfbea94b9287c21376915c2083.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_31a10db3d8c44055a1941fabe3d871f2 = L.marker(
                [-37.56525496, 143.8630079],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3472aa284e03474b8095cc6dd2d733a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_31a10db3d8c44055a1941fabe3d871f2.setIcon(icon_3472aa284e03474b8095cc6dd2d733a4);


            marker_31a10db3d8c44055a1941fabe3d871f2.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_24e41c1dc3fb4d44b6c4afb2e8d68e9b = L.marker(
                [-37.57534311, 143.8346314],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bf1cc6bdacfb457a82606b5b7c8bfba2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24e41c1dc3fb4d44b6c4afb2e8d68e9b.setIcon(icon_bf1cc6bdacfb457a82606b5b7c8bfba2);


            marker_24e41c1dc3fb4d44b6c4afb2e8d68e9b.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_47a054b7fb4f4c31b9b48feec2723de8 = L.marker(
                [-37.53737218, 143.8368403],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a9c8636ef934491b803f93e381222e57 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_47a054b7fb4f4c31b9b48feec2723de8.setIcon(icon_a9c8636ef934491b803f93e381222e57);


            marker_47a054b7fb4f4c31b9b48feec2723de8.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_32eebd447f4d420e92deb639ae9cfb06 = L.marker(
                [-37.60729103, 143.86863469999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c37e449e5a30479a904ce0b30be2fa2e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_32eebd447f4d420e92deb639ae9cfb06.setIcon(icon_c37e449e5a30479a904ce0b30be2fa2e);


            marker_32eebd447f4d420e92deb639ae9cfb06.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_9b526b1a9dfe41ae8aa776ccc695a1aa = L.marker(
                [-37.62593629, 143.87788799999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_596a33662d124c45a1b3508e87f1fab4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9b526b1a9dfe41ae8aa776ccc695a1aa.setIcon(icon_596a33662d124c45a1b3508e87f1fab4);


            marker_9b526b1a9dfe41ae8aa776ccc695a1aa.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_7c11e33e1951477f8fc194b79e699336 = L.marker(
                [-37.57787579, 143.8540298],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_40e5c76c24974d73bfd62da4d0220bc8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7c11e33e1951477f8fc194b79e699336.setIcon(icon_40e5c76c24974d73bfd62da4d0220bc8);


            marker_7c11e33e1951477f8fc194b79e699336.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_db3f9c823c8d4dfebc916b76162c4505 = L.marker(
                [-37.52186263, 143.8354857],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_33d767be865543ae9914365612e1d16e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db3f9c823c8d4dfebc916b76162c4505.setIcon(icon_33d767be865543ae9914365612e1d16e);


            marker_db3f9c823c8d4dfebc916b76162c4505.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_64e18b454df6472284564e55cd0d4511 = L.marker(
                [-37.60242554, 143.8392869],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f21a787462e243bc9c439eb3e736e36e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_64e18b454df6472284564e55cd0d4511.setIcon(icon_f21a787462e243bc9c439eb3e736e36e);


            marker_64e18b454df6472284564e55cd0d4511.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_f05bdcb25e4d419b8f19adae6549f9f9 = L.marker(
                [-37.5314097, 143.82427030000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4a5d59a2d58943a3a50900e11ba08606 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f05bdcb25e4d419b8f19adae6549f9f9.setIcon(icon_4a5d59a2d58943a3a50900e11ba08606);


            marker_f05bdcb25e4d419b8f19adae6549f9f9.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_b08620c40c654514a936a78bfff9cec9 = L.marker(
                [-37.54043536, 143.8600685],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fccf00dee92546a4b0701a41ab257563 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b08620c40c654514a936a78bfff9cec9.setIcon(icon_fccf00dee92546a4b0701a41ab257563);


            marker_b08620c40c654514a936a78bfff9cec9.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_dc593fb4d5e0458ca653cc320bd86b0d = L.marker(
                [-37.53958301, 143.8602221],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bd45989b14104b7a8f4268ae5e1d7564 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc593fb4d5e0458ca653cc320bd86b0d.setIcon(icon_bd45989b14104b7a8f4268ae5e1d7564);


            marker_dc593fb4d5e0458ca653cc320bd86b0d.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_024522687f4b44f0be13fd66212a3f7d = L.marker(
                [-37.56553665, 143.8401465],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e16989e7d84d48e18b6cc9a515a368a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_024522687f4b44f0be13fd66212a3f7d.setIcon(icon_e16989e7d84d48e18b6cc9a515a368a3);


            marker_024522687f4b44f0be13fd66212a3f7d.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_096d97a7f68f434db7c4d6a86581efdd = L.marker(
                [-37.59226876, 143.83877230000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7f81f120fdad4d77b38437c3a21e3f33 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_096d97a7f68f434db7c4d6a86581efdd.setIcon(icon_7f81f120fdad4d77b38437c3a21e3f33);


            marker_096d97a7f68f434db7c4d6a86581efdd.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_8f422ca23b48479e93a7693e23de2ed6 = L.marker(
                [-37.51578917, 143.7818993],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b2c7b6eea9ca4c9e9e6a35bb226e1c8c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f422ca23b48479e93a7693e23de2ed6.setIcon(icon_b2c7b6eea9ca4c9e9e6a35bb226e1c8c);


            marker_8f422ca23b48479e93a7693e23de2ed6.bindTooltip(
                `<div>
                     Mitchell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5462b10b8b2e4d5faeda90e4d7bf1e88 = L.marker(
                [-37.59745682, 143.8416798],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f9102bbabbad452b96161650c158f350 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5462b10b8b2e4d5faeda90e4d7bf1e88.setIcon(icon_f9102bbabbad452b96161650c158f350);


            marker_5462b10b8b2e4d5faeda90e4d7bf1e88.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_81f97334cdb3486abda1a7732782a84e = L.marker(
                [-37.60160223, 143.8324374],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ad8cfea5c4bf4678a24357ff8c43993d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_81f97334cdb3486abda1a7732782a84e.setIcon(icon_ad8cfea5c4bf4678a24357ff8c43993d);


            marker_81f97334cdb3486abda1a7732782a84e.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_ac27d52c385d4252a7e114d7b4a3e49f = L.marker(
                [-37.57912321, 143.8770403],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_12580bef4ba746fdbf73e691dffbf35c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ac27d52c385d4252a7e114d7b4a3e49f.setIcon(icon_12580bef4ba746fdbf73e691dffbf35c);


            marker_ac27d52c385d4252a7e114d7b4a3e49f.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_1ba22306c0c442baba662ccaba681106 = L.marker(
                [-37.42201264, 143.7107983],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5a14d9209ef64c2f8af846d3d66e25c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ba22306c0c442baba662ccaba681106.setIcon(icon_5a14d9209ef64c2f8af846d3d66e25c4);


            marker_1ba22306c0c442baba662ccaba681106.bindTooltip(
                `<div>
                     Learmonth
                 </div>`,
                {"sticky": true}
            );


            var marker_187e64e3e8bf41adbab60acefe149072 = L.marker(
                [-37.55444734, 143.80017880000003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bb1b13366eb541638982a45cb3d92dd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_187e64e3e8bf41adbab60acefe149072.setIcon(icon_bb1b13366eb541638982a45cb3d92dd7);


            marker_187e64e3e8bf41adbab60acefe149072.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_640ddb2a463a41139e52577cf74fd686 = L.marker(
                [-37.55188874, 143.8065302],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8195b8842d6d4813b1a81a3ae89bf7f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_640ddb2a463a41139e52577cf74fd686.setIcon(icon_8195b8842d6d4813b1a81a3ae89bf7f1);


            marker_640ddb2a463a41139e52577cf74fd686.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_898576228b604a5ba3e581ab445c1f4c = L.marker(
                [-37.55575737, 143.7882916],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a610a0f37bc04c738fa7ee2a22a3a7d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_898576228b604a5ba3e581ab445c1f4c.setIcon(icon_a610a0f37bc04c738fa7ee2a22a3a7d5);


            marker_898576228b604a5ba3e581ab445c1f4c.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_d6b6a3be7f6741a78ba458283116e1e3 = L.marker(
                [-37.57061213, 143.8715201],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fb8c3c08671249e985d365150d538ac5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d6b6a3be7f6741a78ba458283116e1e3.setIcon(icon_fb8c3c08671249e985d365150d538ac5);


            marker_d6b6a3be7f6741a78ba458283116e1e3.bindTooltip(
                `<div>
                     Golden Point
                 </div>`,
                {"sticky": true}
            );


            var marker_5cb75235a67644faa08f87d4a6d83b9d = L.marker(
                [-37.39626674, 143.7990146],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_370057b5cac142988031d7447d379444 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5cb75235a67644faa08f87d4a6d83b9d.setIcon(icon_370057b5cac142988031d7447d379444);


            marker_5cb75235a67644faa08f87d4a6d83b9d.bindTooltip(
                `<div>
                     Ascot
                 </div>`,
                {"sticky": true}
            );


            var marker_7032002b73b241258a1d6a4595c20766 = L.marker(
                [-37.56480883, 143.7965289],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6a4ad11da1f7421c8fe7c07ad96106a1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7032002b73b241258a1d6a4595c20766.setIcon(icon_6a4ad11da1f7421c8fe7c07ad96106a1);


            marker_7032002b73b241258a1d6a4595c20766.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_1925d321326a48ca8261fa455b905a46 = L.marker(
                [-37.59177357, 143.818295],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4d6091f2a4ae4a17aaa28c566b4e4423 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1925d321326a48ca8261fa455b905a46.setIcon(icon_4d6091f2a4ae4a17aaa28c566b4e4423);


            marker_1925d321326a48ca8261fa455b905a46.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_171e0f4b03e74837939513ce4b988ff2 = L.marker(
                [-37.60212087, 143.83418569999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a0e5468638b24692ad2946a885677254 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_171e0f4b03e74837939513ce4b988ff2.setIcon(icon_a0e5468638b24692ad2946a885677254);


            marker_171e0f4b03e74837939513ce4b988ff2.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_d559b494ff7841d5b8e9deb8e2cdb754 = L.marker(
                [-37.531637700000005, 143.8377677],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3cc8a9134148436aa85fb4d3c7ca8c70 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d559b494ff7841d5b8e9deb8e2cdb754.setIcon(icon_3cc8a9134148436aa85fb4d3c7ca8c70);


            marker_d559b494ff7841d5b8e9deb8e2cdb754.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_3fe8ea20c7924c6286053b559430dd86 = L.marker(
                [-37.55236443, 143.8984577],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dfd560917b8947c283b0eb3a3b909723 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3fe8ea20c7924c6286053b559430dd86.setIcon(icon_dfd560917b8947c283b0eb3a3b909723);


            marker_3fe8ea20c7924c6286053b559430dd86.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_22f32efaa1a146ba85dcb39ccd4942fa = L.marker(
                [-37.53935581, 143.87150880000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0df30af2f2964a5fb8c61bbe8e2a85fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_22f32efaa1a146ba85dcb39ccd4942fa.setIcon(icon_0df30af2f2964a5fb8c61bbe8e2a85fb);


            marker_22f32efaa1a146ba85dcb39ccd4942fa.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_07f1ee6ac3de40f096650fead31080d6 = L.marker(
                [-37.652807700000004, 143.888122],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e67efdae342f4d70bf643941c3f142ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07f1ee6ac3de40f096650fead31080d6.setIcon(icon_e67efdae342f4d70bf643941c3f142ef);


            marker_07f1ee6ac3de40f096650fead31080d6.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_98b28df5464049a2ad797632b8fa37c9 = L.marker(
                [-37.64939325, 143.8872799],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ab75d60019a04cb0b7b8281a0bd20d0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_98b28df5464049a2ad797632b8fa37c9.setIcon(icon_ab75d60019a04cb0b7b8281a0bd20d0c);


            marker_98b28df5464049a2ad797632b8fa37c9.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_6a74456b3055400e8982a8840e0c21a7 = L.marker(
                [-37.64986628, 143.8910267],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_86a096c9318d4fd9ba2e33273f098f41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6a74456b3055400e8982a8840e0c21a7.setIcon(icon_86a096c9318d4fd9ba2e33273f098f41);


            marker_6a74456b3055400e8982a8840e0c21a7.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_0dc1fbc60ecf473899f2f8f24d86bab2 = L.marker(
                [-37.51419645, 143.8022486],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a0962ed1498c4814aa27d99d727a543b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0dc1fbc60ecf473899f2f8f24d86bab2.setIcon(icon_a0962ed1498c4814aa27d99d727a543b);


            marker_0dc1fbc60ecf473899f2f8f24d86bab2.bindTooltip(
                `<div>
                     Mitchell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d18dec1521dd46b9a2119c6e8e14994e = L.marker(
                [-37.58523147, 143.8690186],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2a038831ac924809abbef1634cb75b45 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d18dec1521dd46b9a2119c6e8e14994e.setIcon(icon_2a038831ac924809abbef1634cb75b45);


            marker_d18dec1521dd46b9a2119c6e8e14994e.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_5439904947164f77beee99aaa70398aa = L.marker(
                [-37.59279444, 143.870159],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_559db4c1aeb849d4b3f024e33698a651 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5439904947164f77beee99aaa70398aa.setIcon(icon_559db4c1aeb849d4b3f024e33698a651);


            marker_5439904947164f77beee99aaa70398aa.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_9fb87c52b8de441db1ce7883bea2d94c = L.marker(
                [-37.60494765, 143.87034880000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3ea8561cc714412da6150cdb96a941fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9fb87c52b8de441db1ce7883bea2d94c.setIcon(icon_3ea8561cc714412da6150cdb96a941fa);


            marker_9fb87c52b8de441db1ce7883bea2d94c.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_3097e59559bb44c4bbe63d24ef69c26d = L.marker(
                [-37.5881856, 143.8676811],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02d793ece1694300b2eb13c7c02a10b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3097e59559bb44c4bbe63d24ef69c26d.setIcon(icon_02d793ece1694300b2eb13c7c02a10b2);


            marker_3097e59559bb44c4bbe63d24ef69c26d.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_7bf03e56e857489d8340d331328ff455 = L.marker(
                [-37.51424258, 143.70899690000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2bdf6232e2214abbbf70e9a8edcaf618 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7bf03e56e857489d8340d331328ff455.setIcon(icon_2bdf6232e2214abbbf70e9a8edcaf618);


            marker_7bf03e56e857489d8340d331328ff455.bindTooltip(
                `<div>
                     Cardigan Village
                 </div>`,
                {"sticky": true}
            );


            var marker_e82eef0212c84ece93f46f8759d75b21 = L.marker(
                [-37.52322431, 143.8332246],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_25aac576e0534af6a8dbfd7a1d6bbd11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e82eef0212c84ece93f46f8759d75b21.setIcon(icon_25aac576e0534af6a8dbfd7a1d6bbd11);


            marker_e82eef0212c84ece93f46f8759d75b21.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_cc144516929b40fb9a4909c12464b8cd = L.marker(
                [-37.53805568, 143.8440296],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_720450d197f44f749bb2298fb62f7427 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cc144516929b40fb9a4909c12464b8cd.setIcon(icon_720450d197f44f749bb2298fb62f7427);


            marker_cc144516929b40fb9a4909c12464b8cd.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_4a27a94fc487442b8b801834e5044b42 = L.marker(
                [-37.53716369, 143.8410304],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d865090cd6f7493791e5d17f1cf0e511 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a27a94fc487442b8b801834e5044b42.setIcon(icon_d865090cd6f7493791e5d17f1cf0e511);


            marker_4a27a94fc487442b8b801834e5044b42.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_58d64408630348c8a6386cd6aa5c10da = L.marker(
                [-37.42958452, 143.7866969],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5661c19e484a4e55bf81e47343560345 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_58d64408630348c8a6386cd6aa5c10da.setIcon(icon_5661c19e484a4e55bf81e47343560345);


            marker_58d64408630348c8a6386cd6aa5c10da.bindTooltip(
                `<div>
                     Blowhard
                 </div>`,
                {"sticky": true}
            );


            var marker_a019050b37c846eca70bf59d87842b4d = L.marker(
                [-37.54505633, 143.8181728],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_566832c53d25483fbb384aca7dcfbf7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a019050b37c846eca70bf59d87842b4d.setIcon(icon_566832c53d25483fbb384aca7dcfbf7d);


            marker_a019050b37c846eca70bf59d87842b4d.bindTooltip(
                `<div>
                     Lake Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_a15b73d974464b698ed6bed165ebd904 = L.marker(
                [-37.53087426, 143.81654630000003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d9f112cf08e145f1858e7114b0b759f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a15b73d974464b698ed6bed165ebd904.setIcon(icon_d9f112cf08e145f1858e7114b0b759f1);


            marker_a15b73d974464b698ed6bed165ebd904.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_fda71c7c132b4342b192d564bd2eeb84 = L.marker(
                [-37.53753427, 143.8370132],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6903f24f877f480faa9954abec4fda29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fda71c7c132b4342b192d564bd2eeb84.setIcon(icon_6903f24f877f480faa9954abec4fda29);


            marker_fda71c7c132b4342b192d564bd2eeb84.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_bf563d16ed07401793d8451f01fed654 = L.marker(
                [-37.53398005, 143.9217247],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_08c786edb9fa4d53934438feedd11638 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bf563d16ed07401793d8451f01fed654.setIcon(icon_08c786edb9fa4d53934438feedd11638);


            marker_bf563d16ed07401793d8451f01fed654.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_de6defc0cfb44bb1995af1c6ec6729e4 = L.marker(
                [-37.49152389, 143.804017],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e7fd8e9e322c4f9fbaec9e0db50a932c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de6defc0cfb44bb1995af1c6ec6729e4.setIcon(icon_e7fd8e9e322c4f9fbaec9e0db50a932c);


            marker_de6defc0cfb44bb1995af1c6ec6729e4.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_765ce2302a7a4214af0888edd9300c6f = L.marker(
                [-37.55045264, 143.7912021],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_35d6638287c04e5f8375082c1ae8e40f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_765ce2302a7a4214af0888edd9300c6f.setIcon(icon_35d6638287c04e5f8375082c1ae8e40f);


            marker_765ce2302a7a4214af0888edd9300c6f.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_cab1cf2b45dd487f8cfedec186f34861 = L.marker(
                [-37.60352301, 143.8221559],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c0d797f087a34aa0851fe309616f2502 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cab1cf2b45dd487f8cfedec186f34861.setIcon(icon_c0d797f087a34aa0851fe309616f2502);


            marker_cab1cf2b45dd487f8cfedec186f34861.bindTooltip(
                `<div>
                     Bonshaw
                 </div>`,
                {"sticky": true}
            );


            var marker_f35fd1fb67fa40178a3d401f9c2b4732 = L.marker(
                [-37.64888695, 143.88380149999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_147724cc4f8e4a5db9395fbe7861fdec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f35fd1fb67fa40178a3d401f9c2b4732.setIcon(icon_147724cc4f8e4a5db9395fbe7861fdec);


            marker_f35fd1fb67fa40178a3d401f9c2b4732.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_9d39ea77b4ba44eb84efa5c8fd576368 = L.marker(
                [-37.58363223, 143.815834],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2d0c05f934e14fbe9d2fe26f6bd57e8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9d39ea77b4ba44eb84efa5c8fd576368.setIcon(icon_2d0c05f934e14fbe9d2fe26f6bd57e8b);


            marker_9d39ea77b4ba44eb84efa5c8fd576368.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_0e6cf2409b534924a01d5cd49edabf7e = L.marker(
                [-37.55295284, 143.84860030000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c208859c866a4d70ae2108a7f5b593d2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e6cf2409b534924a01d5cd49edabf7e.setIcon(icon_c208859c866a4d70ae2108a7f5b593d2);


            marker_0e6cf2409b534924a01d5cd49edabf7e.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_4d032a2211f74d63a5431841afa261f9 = L.marker(
                [-37.5493588, 143.7954237],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8fc6ea06082447ee8fb7090ec9d3f26c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d032a2211f74d63a5431841afa261f9.setIcon(icon_8fc6ea06082447ee8fb7090ec9d3f26c);


            marker_4d032a2211f74d63a5431841afa261f9.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_b6348c1141644fab983b8a08cd6a4da1 = L.marker(
                [-37.56487058, 143.88469609999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c4da95ee465c4d8fb8618dd1cbe1bd41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b6348c1141644fab983b8a08cd6a4da1.setIcon(icon_c4da95ee465c4d8fb8618dd1cbe1bd41);


            marker_b6348c1141644fab983b8a08cd6a4da1.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_03f1cf8403e142388cf8172e9230eb34 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6cdc72a14eee4bea8057c4eb6b4471ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_03f1cf8403e142388cf8172e9230eb34.setIcon(icon_6cdc72a14eee4bea8057c4eb6b4471ff);


            marker_03f1cf8403e142388cf8172e9230eb34.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_2e11dea9b14d4d71bcaf5741c4db40df = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c337e143816a446c9ab6721e8b6933e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e11dea9b14d4d71bcaf5741c4db40df.setIcon(icon_c337e143816a446c9ab6721e8b6933e6);


            marker_2e11dea9b14d4d71bcaf5741c4db40df.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_c7eabc57d4bf4344b532e766e0de539f = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5c934d975e954235972a566b8f63f9d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c7eabc57d4bf4344b532e766e0de539f.setIcon(icon_5c934d975e954235972a566b8f63f9d4);


            marker_c7eabc57d4bf4344b532e766e0de539f.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_1301b5eb159147ffa932cb6427760985 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7cb7346734fe49c8832e91cb80e1f6ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1301b5eb159147ffa932cb6427760985.setIcon(icon_7cb7346734fe49c8832e91cb80e1f6ab);


            marker_1301b5eb159147ffa932cb6427760985.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_3b4973bb2752483bb6e927ff12b24613 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_720dd4ea06534ae791bceb0b3b837468 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3b4973bb2752483bb6e927ff12b24613.setIcon(icon_720dd4ea06534ae791bceb0b3b837468);


            marker_3b4973bb2752483bb6e927ff12b24613.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_bde8b47027f44474b9680dd505c3b602 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f652fae033e74bc2bb723a7988e2d3a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bde8b47027f44474b9680dd505c3b602.setIcon(icon_f652fae033e74bc2bb723a7988e2d3a7);


            marker_bde8b47027f44474b9680dd505c3b602.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_66dafda767084fefb19c7f16e8250c32 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ca51bb890c964fad977b6a3673ebb091 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66dafda767084fefb19c7f16e8250c32.setIcon(icon_ca51bb890c964fad977b6a3673ebb091);


            marker_66dafda767084fefb19c7f16e8250c32.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_ae0d4b2525a84f3eb0009ec900bb8d13 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_00072731f8954ba4a1b8b1b5ee507cda = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ae0d4b2525a84f3eb0009ec900bb8d13.setIcon(icon_00072731f8954ba4a1b8b1b5ee507cda);


            marker_ae0d4b2525a84f3eb0009ec900bb8d13.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_d060313e629549f1836d434ff2dc248b = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2d861fb85e9344bb9ab71bef7aeb1d82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d060313e629549f1836d434ff2dc248b.setIcon(icon_2d861fb85e9344bb9ab71bef7aeb1d82);


            marker_d060313e629549f1836d434ff2dc248b.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_76fb0dab694148ce9b24c83b1e1809cd = L.marker(
                [-37.56430895, 143.885753],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8fb1635b59a8461eac823678580ac703 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_76fb0dab694148ce9b24c83b1e1809cd.setIcon(icon_8fb1635b59a8461eac823678580ac703);


            marker_76fb0dab694148ce9b24c83b1e1809cd.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_07207be8238a49a1b9e1ba27af91af03 = L.marker(
                [-37.5966404, 143.8665747],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ec63dce3d9df45f7b227bfc64acab562 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07207be8238a49a1b9e1ba27af91af03.setIcon(icon_ec63dce3d9df45f7b227bfc64acab562);


            marker_07207be8238a49a1b9e1ba27af91af03.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_b2b0fa457d654693be028c38f9487d26 = L.marker(
                [-37.61905514, 143.8857721],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e3a2d86655e346f8a474f0e10b4e9b9a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b2b0fa457d654693be028c38f9487d26.setIcon(icon_e3a2d86655e346f8a474f0e10b4e9b9a);


            marker_b2b0fa457d654693be028c38f9487d26.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_f23d682fe69545bc8eb69389c4a2cd96 = L.marker(
                [-37.54485765, 143.8563515],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_99c71e4dda554c5fb48600270cc09629 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f23d682fe69545bc8eb69389c4a2cd96.setIcon(icon_99c71e4dda554c5fb48600270cc09629);


            marker_f23d682fe69545bc8eb69389c4a2cd96.bindTooltip(
                `<div>
                     Soldiers Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_7379619f76ea4a2c849d1390b874b401 = L.marker(
                [-37.54735539, 143.9088138],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_87c94fdbfea54e6d9ced3fc7adbd8126 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7379619f76ea4a2c849d1390b874b401.setIcon(icon_87c94fdbfea54e6d9ced3fc7adbd8126);


            marker_7379619f76ea4a2c849d1390b874b401.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_e1e0434177244fd883e31d1ea9b54717 = L.marker(
                [-37.52636399, 143.8418301],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9838c0e7660f4731a1b47e642e9b3e83 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e1e0434177244fd883e31d1ea9b54717.setIcon(icon_9838c0e7660f4731a1b47e642e9b3e83);


            marker_e1e0434177244fd883e31d1ea9b54717.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_23d3323a373641c1939b48056f1ab3aa = L.marker(
                [-37.59370898, 143.876507],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3e453c50d4f44460b1c21c4ebc6eeed8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23d3323a373641c1939b48056f1ab3aa.setIcon(icon_3e453c50d4f44460b1c21c4ebc6eeed8);


            marker_23d3323a373641c1939b48056f1ab3aa.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_7943444f4de8469ba8273547614de17f = L.marker(
                [-37.55131963, 143.7969563],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c2e4c829a6f344778fb23bb7caa87f9d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7943444f4de8469ba8273547614de17f.setIcon(icon_c2e4c829a6f344778fb23bb7caa87f9d);


            marker_7943444f4de8469ba8273547614de17f.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_caadbc0ee1d94e6c952580cb631282c1 = L.marker(
                [-37.54225466, 143.8732918],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_130937bc3b044aa785e954d3b6623fbb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_caadbc0ee1d94e6c952580cb631282c1.setIcon(icon_130937bc3b044aa785e954d3b6623fbb);


            marker_caadbc0ee1d94e6c952580cb631282c1.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_fd5979993e28441087a3f6ccfc3ca00d = L.marker(
                [-37.52227503, 143.87390580000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dcc4c04e4c93446d92d8852bec285c7b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fd5979993e28441087a3f6ccfc3ca00d.setIcon(icon_dcc4c04e4c93446d92d8852bec285c7b);


            marker_fd5979993e28441087a3f6ccfc3ca00d.bindTooltip(
                `<div>
                     Invermay
                 </div>`,
                {"sticky": true}
            );


            var marker_a5185cd457324db980f0d3747e2d1c2e = L.marker(
                [-37.52983349, 143.8587436],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_40ef9ef0e71944b292ebb81e3913c3f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a5185cd457324db980f0d3747e2d1c2e.setIcon(icon_40ef9ef0e71944b292ebb81e3913c3f1);


            marker_a5185cd457324db980f0d3747e2d1c2e.bindTooltip(
                `<div>
                     Invermay Park
                 </div>`,
                {"sticky": true}
            );


            var marker_00feb9fc86cb455a8560b88e744d71be = L.marker(
                [-37.52476588, 143.8386273],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_34279cf5627e4c89bdeeb7fd0e103f41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00feb9fc86cb455a8560b88e744d71be.setIcon(icon_34279cf5627e4c89bdeeb7fd0e103f41);


            marker_00feb9fc86cb455a8560b88e744d71be.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_4b1d7215dec0406c976c849d5ed26731 = L.marker(
                [-37.59351002, 143.83007990000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ea060f58b67247e598e3a6b6b15a3b11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4b1d7215dec0406c976c849d5ed26731.setIcon(icon_ea060f58b67247e598e3a6b6b15a3b11);


            marker_4b1d7215dec0406c976c849d5ed26731.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_33f8f16eb5de4c7c8bbc9a5ae6e6b7e9 = L.marker(
                [-37.58282287, 143.8528993],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fc73f142a0714e25bac07763432edf33 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_33f8f16eb5de4c7c8bbc9a5ae6e6b7e9.setIcon(icon_fc73f142a0714e25bac07763432edf33);


            marker_33f8f16eb5de4c7c8bbc9a5ae6e6b7e9.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_a7ca4f8bf814442893e6e5ca31161397 = L.marker(
                [-37.5724222, 143.8401603],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8dfeaf7e198040eaa5c343d5bd465973 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7ca4f8bf814442893e6e5ca31161397.setIcon(icon_8dfeaf7e198040eaa5c343d5bd465973);


            marker_a7ca4f8bf814442893e6e5ca31161397.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_9952660e783245cba5effadf04587e3b = L.marker(
                [-37.57529948, 143.8747779],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f9e27e9aa67a4b59a9a75343c3b67ce6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9952660e783245cba5effadf04587e3b.setIcon(icon_f9e27e9aa67a4b59a9a75343c3b67ce6);


            marker_9952660e783245cba5effadf04587e3b.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_9ba3aa415e0d437e9ce0706bd4c0cffa = L.marker(
                [-37.43480484, 143.7249584],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dc64c62f73d24067bbba815a9d096309 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ba3aa415e0d437e9ce0706bd4c0cffa.setIcon(icon_dc64c62f73d24067bbba815a9d096309);


            marker_9ba3aa415e0d437e9ce0706bd4c0cffa.bindTooltip(
                `<div>
                     Learmonth
                 </div>`,
                {"sticky": true}
            );


            var marker_353ce9a4391b4fb69b3b19c30e5ffde3 = L.marker(
                [-37.55024748, 143.8225395],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8d05c2d6d3654df18b6e759b414c6202 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_353ce9a4391b4fb69b3b19c30e5ffde3.setIcon(icon_8d05c2d6d3654df18b6e759b414c6202);


            marker_353ce9a4391b4fb69b3b19c30e5ffde3.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_a4794040df6b4b7bb0ff9b43a968f059 = L.marker(
                [-37.55228448, 143.8229301],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2b9fe8dcb8724830b9d3de66a44b81c6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a4794040df6b4b7bb0ff9b43a968f059.setIcon(icon_2b9fe8dcb8724830b9d3de66a44b81c6);


            marker_a4794040df6b4b7bb0ff9b43a968f059.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_b33cb7065d9441d6bb6f814d77b5d695 = L.marker(
                [-37.55567607, 143.83205719999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9ce551acd68d4c879ccb3bfd893a3a0d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b33cb7065d9441d6bb6f814d77b5d695.setIcon(icon_9ce551acd68d4c879ccb3bfd893a3a0d);


            marker_b33cb7065d9441d6bb6f814d77b5d695.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_1e195c44913441eeb5f75efad9ffba0d = L.marker(
                [-37.54458055, 143.8346263],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2a970dd38b0142eab768343677023ec6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1e195c44913441eeb5f75efad9ffba0d.setIcon(icon_2a970dd38b0142eab768343677023ec6);


            marker_1e195c44913441eeb5f75efad9ffba0d.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_0f91d6f7f93c44ffaeec5614b5bcbefb = L.marker(
                [-37.55545096, 143.84204],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6008ceee87424ffe848f5c24fa60e567 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0f91d6f7f93c44ffaeec5614b5bcbefb.setIcon(icon_6008ceee87424ffe848f5c24fa60e567);


            marker_0f91d6f7f93c44ffaeec5614b5bcbefb.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_f00c3a49e3604f0cae5ae6c3bac53ba0 = L.marker(
                [-37.55764436, 143.8046099],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d191644e27f8494ea0dc16f6362d7aff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f00c3a49e3604f0cae5ae6c3bac53ba0.setIcon(icon_d191644e27f8494ea0dc16f6362d7aff);


            marker_f00c3a49e3604f0cae5ae6c3bac53ba0.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_9ae1195134224ec380f597b36a72d99e = L.marker(
                [-37.58413965, 143.8230174],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b64ad5c5edec46ad90c34765d4ec13b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ae1195134224ec380f597b36a72d99e.setIcon(icon_b64ad5c5edec46ad90c34765d4ec13b7);


            marker_9ae1195134224ec380f597b36a72d99e.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_bcde3fb39eed42df8234cb6d635000a2 = L.marker(
                [-37.58440312, 143.822886],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3e6827ca29c84c5aacd80cceeb14363a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bcde3fb39eed42df8234cb6d635000a2.setIcon(icon_3e6827ca29c84c5aacd80cceeb14363a);


            marker_bcde3fb39eed42df8234cb6d635000a2.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_f8c8830704664d13b60c5dec0e10a316 = L.marker(
                [-37.56577574, 143.8674611],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d2e2651fd8d8451b90fd6d4dd1f03bf7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f8c8830704664d13b60c5dec0e10a316.setIcon(icon_d2e2651fd8d8451b90fd6d4dd1f03bf7);


            marker_f8c8830704664d13b60c5dec0e10a316.bindTooltip(
                `<div>
                     Bakery Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_24f4d97b397e4e1d81695404678f61aa = L.marker(
                [-37.56577574, 143.8674611],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1ec53796f4454d9c8700929b01e40fc0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24f4d97b397e4e1d81695404678f61aa.setIcon(icon_1ec53796f4454d9c8700929b01e40fc0);


            marker_24f4d97b397e4e1d81695404678f61aa.bindTooltip(
                `<div>
                     Bakery Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_73db5cbe1a8245fa88f31fd29bb881d4 = L.marker(
                [-37.55010601, 143.781139],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b38324ff2549440aa4c7a179cdc302ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_73db5cbe1a8245fa88f31fd29bb881d4.setIcon(icon_b38324ff2549440aa4c7a179cdc302ab);


            marker_73db5cbe1a8245fa88f31fd29bb881d4.bindTooltip(
                `<div>
                     Lucas
                 </div>`,
                {"sticky": true}
            );


            var marker_668deda6ba4d4ceab260ccd54ff31143 = L.marker(
                [-37.50075327, 143.810416],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fe94fcbfecc14eb1b8899a33806e0d69 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_668deda6ba4d4ceab260ccd54ff31143.setIcon(icon_fe94fcbfecc14eb1b8899a33806e0d69);


            marker_668deda6ba4d4ceab260ccd54ff31143.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_60c08278b47a4fdd830e6d582b5cc52a = L.marker(
                [-37.55085223, 143.8550656],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f0d46b91f905461b82d30efdc919cc91 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60c08278b47a4fdd830e6d582b5cc52a.setIcon(icon_f0d46b91f905461b82d30efdc919cc91);


            marker_60c08278b47a4fdd830e6d582b5cc52a.bindTooltip(
                `<div>
                     Soldiers Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_5570920515fd4c47b08f5c33cbef4a37 = L.marker(
                [-37.52938081, 143.82262580000003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_180d29523ee147e880f925c6314b28e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5570920515fd4c47b08f5c33cbef4a37.setIcon(icon_180d29523ee147e880f925c6314b28e3);


            marker_5570920515fd4c47b08f5c33cbef4a37.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_b90c790d9ea549f68dc33beaa95edf43 = L.marker(
                [-37.60788664, 143.86495390000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e38fa8c5a58243e5b8fbd92fd19ea490 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b90c790d9ea549f68dc33beaa95edf43.setIcon(icon_e38fa8c5a58243e5b8fbd92fd19ea490);


            marker_b90c790d9ea549f68dc33beaa95edf43.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_3af50f762cfa49f88c0c1d133753b040 = L.marker(
                [-37.54288954, 143.8629542],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_60f1de52a2554652898b093c85c2d903 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3af50f762cfa49f88c0c1d133753b040.setIcon(icon_60f1de52a2554652898b093c85c2d903);


            marker_3af50f762cfa49f88c0c1d133753b040.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_645647b5b59048c9b208571f65890eff = L.marker(
                [-37.60308371, 143.8448448],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_66c5f63dcde74fc782b8c5ccebc3abb8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_645647b5b59048c9b208571f65890eff.setIcon(icon_66c5f63dcde74fc782b8c5ccebc3abb8);


            marker_645647b5b59048c9b208571f65890eff.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_6c70a193f4ee42078ba1a09aab5fb0c1 = L.marker(
                [-37.58509009, 143.8585873],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_952c82d2b62e435ba56699899cc725ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c70a193f4ee42078ba1a09aab5fb0c1.setIcon(icon_952c82d2b62e435ba56699899cc725ef);


            marker_6c70a193f4ee42078ba1a09aab5fb0c1.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_03338cfb600744ebbdd6864ce1d1a5d3 = L.marker(
                [-37.526644299999994, 143.8128036],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_575e04849984441d97f5a1e6b7338f4e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_03338cfb600744ebbdd6864ce1d1a5d3.setIcon(icon_575e04849984441d97f5a1e6b7338f4e);


            marker_03338cfb600744ebbdd6864ce1d1a5d3.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_8234a5ffc5bc4743a39a4c1780b51459 = L.marker(
                [-37.59165721, 143.8212242],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_65550242a41b46f78f47127239220afd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8234a5ffc5bc4743a39a4c1780b51459.setIcon(icon_65550242a41b46f78f47127239220afd);


            marker_8234a5ffc5bc4743a39a4c1780b51459.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_dc6254c296d24dafbd93031e98f9be5e = L.marker(
                [-37.54030618, 143.8595315],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d5e3b00adecf477788bb10b92c7cf34d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc6254c296d24dafbd93031e98f9be5e.setIcon(icon_d5e3b00adecf477788bb10b92c7cf34d);


            marker_dc6254c296d24dafbd93031e98f9be5e.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_ade1fc082b564ec0b8f16421fae52a4f = L.marker(
                [-37.53947901, 143.860245],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5cc3960430b948c88fec3545b9775cc7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ade1fc082b564ec0b8f16421fae52a4f.setIcon(icon_5cc3960430b948c88fec3545b9775cc7);


            marker_ade1fc082b564ec0b8f16421fae52a4f.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_e76bbbf0306048048b2988a5b100bb79 = L.marker(
                [-37.48050982, 143.7977043],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_75268d1ed73445538aed4689e02828dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e76bbbf0306048048b2988a5b100bb79.setIcon(icon_75268d1ed73445538aed4689e02828dd);


            marker_e76bbbf0306048048b2988a5b100bb79.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_67f62339a40c4af88ba3fb7a628dfa4e = L.marker(
                [-37.52561691, 143.83052990000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_85d4f252bde74684a4cd54fe2f31e91e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_67f62339a40c4af88ba3fb7a628dfa4e.setIcon(icon_85d4f252bde74684a4cd54fe2f31e91e);


            marker_67f62339a40c4af88ba3fb7a628dfa4e.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_3c9e7455bf104e98be3c4c7ff335189d = L.marker(
                [-37.58068689, 143.8335146],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_018464d2f81b4b6d8a1cfad5958677dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c9e7455bf104e98be3c4c7ff335189d.setIcon(icon_018464d2f81b4b6d8a1cfad5958677dd);


            marker_3c9e7455bf104e98be3c4c7ff335189d.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_b967d5c2661848a5b2dd6a2e0f9be2aa = L.marker(
                [-37.60064498, 143.83094609999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bfb0addd8db943598a63883335bc1cfe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b967d5c2661848a5b2dd6a2e0f9be2aa.setIcon(icon_bfb0addd8db943598a63883335bc1cfe);


            marker_b967d5c2661848a5b2dd6a2e0f9be2aa.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_e50872dba91447ebb3d255c0ce35b650 = L.marker(
                [-37.57072302, 143.7827489],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_971e81f6443c4d259bf10bd4a5375a15 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e50872dba91447ebb3d255c0ce35b650.setIcon(icon_971e81f6443c4d259bf10bd4a5375a15);


            marker_e50872dba91447ebb3d255c0ce35b650.bindTooltip(
                `<div>
                     Cardigan
                 </div>`,
                {"sticky": true}
            );


            var marker_271fcdc9588d48ae96cf0920c4b2b072 = L.marker(
                [-37.57789261, 143.85179230000003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8d767cd3b96c49fd8d7433aff7931d54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_271fcdc9588d48ae96cf0920c4b2b072.setIcon(icon_8d767cd3b96c49fd8d7433aff7931d54);


            marker_271fcdc9588d48ae96cf0920c4b2b072.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_255fd97ef3a64d37861309b70ac219b1 = L.marker(
                [-37.57757004, 143.8515421],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4b308e0d933e4a6fb5b5075b9994465a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_255fd97ef3a64d37861309b70ac219b1.setIcon(icon_4b308e0d933e4a6fb5b5075b9994465a);


            marker_255fd97ef3a64d37861309b70ac219b1.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_b92a1f17c3344acbb79ea98591171833 = L.marker(
                [-37.5975068, 143.841464],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ab32536f9d904e8293e07e4890a038da = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b92a1f17c3344acbb79ea98591171833.setIcon(icon_ab32536f9d904e8293e07e4890a038da);


            marker_b92a1f17c3344acbb79ea98591171833.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_7deaa652733545a8990147b839c889a1 = L.marker(
                [-37.57405919, 143.8587427],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_475994f808ab420e92516bf4ab53d247 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7deaa652733545a8990147b839c889a1.setIcon(icon_475994f808ab420e92516bf4ab53d247);


            marker_7deaa652733545a8990147b839c889a1.bindTooltip(
                `<div>
                     Golden Point
                 </div>`,
                {"sticky": true}
            );


            var marker_74bd4199d97e46e88f480f40823d570c = L.marker(
                [-37.5494499, 143.8672449],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f0dd962866eb424aa5c831ce4e093ef5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_74bd4199d97e46e88f480f40823d570c.setIcon(icon_f0dd962866eb424aa5c831ce4e093ef5);


            marker_74bd4199d97e46e88f480f40823d570c.bindTooltip(
                `<div>
                     Black Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_d2886bf7560e48e1a265df4de82e39db = L.marker(
                [-37.57037261, 143.875678],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bcc5cc78224e40578574db926a4ff7cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d2886bf7560e48e1a265df4de82e39db.setIcon(icon_bcc5cc78224e40578574db926a4ff7cc);


            marker_d2886bf7560e48e1a265df4de82e39db.bindTooltip(
                `<div>
                     Ballarat East
                 </div>`,
                {"sticky": true}
            );


            var marker_334af6731d7744d6a2b8b889be12f74e = L.marker(
                [-37.53425381, 143.87085249999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b70d1e21d09040bdacc0ec3e2f9caff5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_334af6731d7744d6a2b8b889be12f74e.setIcon(icon_b70d1e21d09040bdacc0ec3e2f9caff5);


            marker_334af6731d7744d6a2b8b889be12f74e.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_08f31d7a1a7d47eb9a59ba89f376efed = L.marker(
                [-37.57181197, 143.8350634],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e566f1d7f27e4e50a72fde2f6bad33cd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_08f31d7a1a7d47eb9a59ba89f376efed.setIcon(icon_e566f1d7f27e4e50a72fde2f6bad33cd);


            marker_08f31d7a1a7d47eb9a59ba89f376efed.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_f28730d44b1b42f78ff40087ec7e1aff = L.marker(
                [-37.52426447, 143.8580534],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a886f11596e1483e889436be851bd555 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f28730d44b1b42f78ff40087ec7e1aff.setIcon(icon_a886f11596e1483e889436be851bd555);


            marker_f28730d44b1b42f78ff40087ec7e1aff.bindTooltip(
                `<div>
                     Invermay Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e64eaee0b6224d39874f83c1241abf25 = L.marker(
                [-37.53045394, 143.8263398],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ec3b3c8448964c80ac076a15a366d3bd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e64eaee0b6224d39874f83c1241abf25.setIcon(icon_ec3b3c8448964c80ac076a15a366d3bd);


            marker_e64eaee0b6224d39874f83c1241abf25.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_67d95c5b7be347e687a5a88646d611a2 = L.marker(
                [-37.55580559, 143.8851841],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c4918f146ec8487a892b95ba47395b5e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_67d95c5b7be347e687a5a88646d611a2.setIcon(icon_c4918f146ec8487a892b95ba47395b5e);


            marker_67d95c5b7be347e687a5a88646d611a2.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_773434fba087406f822e28db6b65c516 = L.marker(
                [-37.62972904, 143.87507309999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0f06c3bee1cd46beb0da1b79f245216a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_773434fba087406f822e28db6b65c516.setIcon(icon_0f06c3bee1cd46beb0da1b79f245216a);


            marker_773434fba087406f822e28db6b65c516.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_cfbddcd677874a719d67c8093e1c8557 = L.marker(
                [-37.59540367, 143.8688509],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dd31ef4664e041ab8b43c39725c69bfe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cfbddcd677874a719d67c8093e1c8557.setIcon(icon_dd31ef4664e041ab8b43c39725c69bfe);


            marker_cfbddcd677874a719d67c8093e1c8557.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_492d3211658b49679ec1f8cb7df9739c = L.marker(
                [-37.53580263, 143.8282657],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1eb848b9d99948e9b92f540b4eb374eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_492d3211658b49679ec1f8cb7df9739c.setIcon(icon_1eb848b9d99948e9b92f540b4eb374eb);


            marker_492d3211658b49679ec1f8cb7df9739c.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_525bc43e16ac491988d7a932e4c51612 = L.marker(
                [-37.58810401, 143.86468330000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b078183948404fafbcccdc3930d22bbb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_525bc43e16ac491988d7a932e4c51612.setIcon(icon_b078183948404fafbcccdc3930d22bbb);


            marker_525bc43e16ac491988d7a932e4c51612.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_a8d5a6bb146749179bdbdcdff8764c80 = L.marker(
                [-37.56078938, 143.8093102],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0a062f83619e46b29a25ff3702f63976 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a8d5a6bb146749179bdbdcdff8764c80.setIcon(icon_0a062f83619e46b29a25ff3702f63976);


            marker_a8d5a6bb146749179bdbdcdff8764c80.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_eda83f291b7c430a9d137a64aec26437 = L.marker(
                [-37.52892427, 143.8302762],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_73d9f48044bc411c876fe6f54a4486cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eda83f291b7c430a9d137a64aec26437.setIcon(icon_73d9f48044bc411c876fe6f54a4486cb);


            marker_eda83f291b7c430a9d137a64aec26437.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_a348ae41b1ea4c8ca28e00ecb2a73df1 = L.marker(
                [-37.49895706, 143.8035874],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4c772457bbda4543b5a5e2862a65cdcc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a348ae41b1ea4c8ca28e00ecb2a73df1.setIcon(icon_4c772457bbda4543b5a5e2862a65cdcc);


            marker_a348ae41b1ea4c8ca28e00ecb2a73df1.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_ad6a0ad9efbb4e6782932dd39eb1d399 = L.marker(
                [-37.57936785, 143.8058994],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_70da3384c4514d5bb941d194c58061c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad6a0ad9efbb4e6782932dd39eb1d399.setIcon(icon_70da3384c4514d5bb941d194c58061c7);


            marker_ad6a0ad9efbb4e6782932dd39eb1d399.bindTooltip(
                `<div>
                     Winter Valley
                 </div>`,
                {"sticky": true}
            );


            var marker_a922f96d882c486a90dc6e8d795f3c02 = L.marker(
                [-37.57148262, 143.8371104],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bbcb09ad488e493b888e3f4e015745b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a922f96d882c486a90dc6e8d795f3c02.setIcon(icon_bbcb09ad488e493b888e3f4e015745b2);


            marker_a922f96d882c486a90dc6e8d795f3c02.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_2ca2809b8ced4a3aa70bd2776de469ce = L.marker(
                [-37.58345442, 143.8291758],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fb67bbd038bd4e10807c73e817c26526 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ca2809b8ced4a3aa70bd2776de469ce.setIcon(icon_fb67bbd038bd4e10807c73e817c26526);


            marker_2ca2809b8ced4a3aa70bd2776de469ce.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_3d7e35d1ebd547b6afbe3662898a40ea = L.marker(
                [-37.55765408, 143.81564509999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_529a83ef3f574038a103de80e2a5df69 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d7e35d1ebd547b6afbe3662898a40ea.setIcon(icon_529a83ef3f574038a103de80e2a5df69);


            marker_3d7e35d1ebd547b6afbe3662898a40ea.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_9934a3bee0dc499a9810a61f0b5a9143 = L.marker(
                [-37.59333345, 143.8261556],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4da8f4e3fc9e4f389ad380346b89e881 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9934a3bee0dc499a9810a61f0b5a9143.setIcon(icon_4da8f4e3fc9e4f389ad380346b89e881);


            marker_9934a3bee0dc499a9810a61f0b5a9143.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_27713cd04cbb436aaba232fa3e13df70 = L.marker(
                [-37.56156389, 143.8271647],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_604d7d3c08304b4ab1d165181c6d17de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27713cd04cbb436aaba232fa3e13df70.setIcon(icon_604d7d3c08304b4ab1d165181c6d17de);


            marker_27713cd04cbb436aaba232fa3e13df70.bindTooltip(
                `<div>
                     Newington
                 </div>`,
                {"sticky": true}
            );


            var marker_88454a4d0802494cbd935b83a77e476c = L.marker(
                [-37.558349, 143.82349399999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d18c35ed6b944088986c4693a70398d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88454a4d0802494cbd935b83a77e476c.setIcon(icon_d18c35ed6b944088986c4693a70398d1);


            marker_88454a4d0802494cbd935b83a77e476c.bindTooltip(
                `<div>
                     Newington
                 </div>`,
                {"sticky": true}
            );


            var marker_d3cf68f62c3f4289acd44fe955c3b6fe = L.marker(
                [-37.55809903, 143.822685],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf94ff62042247e8ae2f560b15a1ca7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3cf68f62c3f4289acd44fe955c3b6fe.setIcon(icon_cf94ff62042247e8ae2f560b15a1ca7d);


            marker_d3cf68f62c3f4289acd44fe955c3b6fe.bindTooltip(
                `<div>
                     Newington
                 </div>`,
                {"sticky": true}
            );


            var marker_e13c5fe1131c4149bef5766e91c76cab = L.marker(
                [-37.59885425, 143.8337424],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3c48e75be791485a914a59d989191f4f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e13c5fe1131c4149bef5766e91c76cab.setIcon(icon_3c48e75be791485a914a59d989191f4f);


            marker_e13c5fe1131c4149bef5766e91c76cab.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_faa3061987074e618503845329bd1554 = L.marker(
                [-37.55292088, 143.8088645],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8bcd37b15eed424c830e87b9b5f145fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_faa3061987074e618503845329bd1554.setIcon(icon_8bcd37b15eed424c830e87b9b5f145fd);


            marker_faa3061987074e618503845329bd1554.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_57f8743a9ba24426bd12c96c256d142f = L.marker(
                [-37.59295922, 143.8388033],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7f3f75b039b249929a0d63b7ebda8607 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_57f8743a9ba24426bd12c96c256d142f.setIcon(icon_7f3f75b039b249929a0d63b7ebda8607);


            marker_57f8743a9ba24426bd12c96c256d142f.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_f50bddfbeacd410db16fd0c9aad96913 = L.marker(
                [-37.59298284, 143.838256],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9b9ade27d3334eb8ac823516444551cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f50bddfbeacd410db16fd0c9aad96913.setIcon(icon_9b9ade27d3334eb8ac823516444551cf);


            marker_f50bddfbeacd410db16fd0c9aad96913.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_f671e78eebc4471a9595e82962cec6af = L.marker(
                [-37.59313413, 143.8388067],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6db9173c31424a3cb651e6c57291a9cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f671e78eebc4471a9595e82962cec6af.setIcon(icon_6db9173c31424a3cb651e6c57291a9cf);


            marker_f671e78eebc4471a9595e82962cec6af.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_2919eac1fb6449b3b53e80ed1e2a08ff = L.marker(
                [-37.59291141, 143.8384048],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2256aa45142a461db2b95f363ef09ac5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2919eac1fb6449b3b53e80ed1e2a08ff.setIcon(icon_2256aa45142a461db2b95f363ef09ac5);


            marker_2919eac1fb6449b3b53e80ed1e2a08ff.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_96cd5108b3574d25b21573c38ddede64 = L.marker(
                [-37.61085085, 143.8375056],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d232334279164d55959951fca1e7ecc6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_96cd5108b3574d25b21573c38ddede64.setIcon(icon_d232334279164d55959951fca1e7ecc6);


            marker_96cd5108b3574d25b21573c38ddede64.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_d4c8bd456de54b5f90526d0d537a7181 = L.marker(
                [-37.55195912, 143.8644584],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_72f9cf76a33146f8906e328ae2814ee1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4c8bd456de54b5f90526d0d537a7181.setIcon(icon_72f9cf76a33146f8906e328ae2814ee1);


            marker_d4c8bd456de54b5f90526d0d537a7181.bindTooltip(
                `<div>
                     Black Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_05d5e390fbca4e08bc67773f0cc8cd0f = L.marker(
                [-37.51978147, 143.8073362],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8dbc24a0da4c4957af91a728d2bebbf2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_05d5e390fbca4e08bc67773f0cc8cd0f.setIcon(icon_8dbc24a0da4c4957af91a728d2bebbf2);


            marker_05d5e390fbca4e08bc67773f0cc8cd0f.bindTooltip(
                `<div>
                     Mitchell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_80922b8dc5854bb884a532cf3f038320 = L.marker(
                [-37.52910783, 143.8416138],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_539c0a3dfa5347e2bfd6c4123f9dcc40 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_80922b8dc5854bb884a532cf3f038320.setIcon(icon_539c0a3dfa5347e2bfd6c4123f9dcc40);


            marker_80922b8dc5854bb884a532cf3f038320.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_fa138e19954c405799e16c31939f5c84 = L.marker(
                [-37.55068677, 143.8022813],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fe95cd9159f141cab444ec86681b0a3e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fa138e19954c405799e16c31939f5c84.setIcon(icon_fe95cd9159f141cab444ec86681b0a3e);


            marker_fa138e19954c405799e16c31939f5c84.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_cb730356cfe84dce931a78b09816e3fd = L.marker(
                [-37.55647929999999, 143.87088310000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8cb8c1ad364142ada7f8f9c3ac339a11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cb730356cfe84dce931a78b09816e3fd.setIcon(icon_8cb8c1ad364142ada7f8f9c3ac339a11);


            marker_cb730356cfe84dce931a78b09816e3fd.bindTooltip(
                `<div>
                     Ballarat East
                 </div>`,
                {"sticky": true}
            );


            var marker_b2e8eb6c0fad48a08cd605e78329bbdc = L.marker(
                [-37.53136888, 143.8228092],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_86a69ba4fd5742889a8b94711bdf8a68 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b2e8eb6c0fad48a08cd605e78329bbdc.setIcon(icon_86a69ba4fd5742889a8b94711bdf8a68);


            marker_b2e8eb6c0fad48a08cd605e78329bbdc.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_e9ae8c966fc94d02b7095cd27bd2b46d = L.marker(
                [-37.52563889, 143.81954299999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_34a2d7c4b3ab4033b16bf33e71d373d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e9ae8c966fc94d02b7095cd27bd2b46d.setIcon(icon_34a2d7c4b3ab4033b16bf33e71d373d4);


            marker_e9ae8c966fc94d02b7095cd27bd2b46d.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_c910c9b4b1ad4632a4b9901917be8177 = L.marker(
                [-37.56591729, 143.838382],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0b367c43ff0f4a309eb68305d19161c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c910c9b4b1ad4632a4b9901917be8177.setIcon(icon_0b367c43ff0f4a309eb68305d19161c7);


            marker_c910c9b4b1ad4632a4b9901917be8177.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_75818b55925447efa2699360ba05df68 = L.marker(
                [-37.58735159, 143.817426],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_05aa0bcb09fb411783b88f6f5bc14867 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75818b55925447efa2699360ba05df68.setIcon(icon_05aa0bcb09fb411783b88f6f5bc14867);


            marker_75818b55925447efa2699360ba05df68.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_32e9d1fef1634a878f12ed98adda4b02 = L.marker(
                [-37.62425006, 143.8750111],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b39554842f8a4ca79b42179fe78f877f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_32e9d1fef1634a878f12ed98adda4b02.setIcon(icon_b39554842f8a4ca79b42179fe78f877f);


            marker_32e9d1fef1634a878f12ed98adda4b02.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_4060d2e0f7a945be8715a953d4de0102 = L.marker(
                [-37.54179715, 143.8836348],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d00dcca5a017496b8687235795a35b2e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4060d2e0f7a945be8715a953d4de0102.setIcon(icon_d00dcca5a017496b8687235795a35b2e);


            marker_4060d2e0f7a945be8715a953d4de0102.bindTooltip(
                `<div>
                     Nerrina
                 </div>`,
                {"sticky": true}
            );


            var marker_61b7df6388ab45dfb3d9bd67765b8f6e = L.marker(
                [-37.54677157, 143.9166397],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1ae366b68bcb46619bdb45c2d4f79f0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_61b7df6388ab45dfb3d9bd67765b8f6e.setIcon(icon_1ae366b68bcb46619bdb45c2d4f79f0c);


            marker_61b7df6388ab45dfb3d9bd67765b8f6e.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_567260671b964255a0c61337ce71bde5 = L.marker(
                [-37.57941904, 143.798408],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c8a74691ea764323a14df82e62f3cec4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_567260671b964255a0c61337ce71bde5.setIcon(icon_c8a74691ea764323a14df82e62f3cec4);


            marker_567260671b964255a0c61337ce71bde5.bindTooltip(
                `<div>
                     Winter Valley
                 </div>`,
                {"sticky": true}
            );


            var marker_c912527aaa964302981a14f6e4802688 = L.marker(
                [-37.556695, 143.79242299999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4d28572fb69d410f92f48fa7a2ab3a96 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c912527aaa964302981a14f6e4802688.setIcon(icon_4d28572fb69d410f92f48fa7a2ab3a96);


            marker_c912527aaa964302981a14f6e4802688.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_d6aca31b9a914a08b48a4a5126a8bab8 = L.marker(
                [-37.546657, 143.9165829],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a75b96981e214b7ab39613453a7486e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d6aca31b9a914a08b48a4a5126a8bab8.setIcon(icon_a75b96981e214b7ab39613453a7486e8);


            marker_d6aca31b9a914a08b48a4a5126a8bab8.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_b8661299804f467792927c66d0c6e947 = L.marker(
                [-37.56244356, 143.862324],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1d4c7b4c7dd94042953897b6a5eaeaa9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b8661299804f467792927c66d0c6e947.setIcon(icon_1d4c7b4c7dd94042953897b6a5eaeaa9);


            marker_b8661299804f467792927c66d0c6e947.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_e8a2a8c533ce4591a2811e76d5534a1b = L.marker(
                [-37.592338, 143.812376],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4d45ac4fd9a14c588d9d7341623aa35b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e8a2a8c533ce4591a2811e76d5534a1b.setIcon(icon_4d45ac4fd9a14c588d9d7341623aa35b);


            marker_e8a2a8c533ce4591a2811e76d5534a1b.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_ad94c496dd264285955d1b3ab8d31757 = L.marker(
                [-37.548656, 143.809496],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_886caaf014534c77bbcf507facd1bce0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad94c496dd264285955d1b3ab8d31757.setIcon(icon_886caaf014534c77bbcf507facd1bce0);


            marker_ad94c496dd264285955d1b3ab8d31757.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_6f9ec9c5e2fc47f1879731dd537be8d7 = L.marker(
                [-37.56557712, 143.86282849999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a811c815b7254051923c01028981668c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f9ec9c5e2fc47f1879731dd537be8d7.setIcon(icon_a811c815b7254051923c01028981668c);


            marker_6f9ec9c5e2fc47f1879731dd537be8d7.bindTooltip(
                `<div>
                     Magpie
                 </div>`,
                {"sticky": true}
            );


            var marker_36851a692dbc42319201483e8609a25a = L.marker(
                [-37.79893626, 144.94047859999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_935bb5bc5ba7406ca9d3686a39991d33 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_36851a692dbc42319201483e8609a25a.setIcon(icon_935bb5bc5ba7406ca9d3686a39991d33);


            marker_36851a692dbc42319201483e8609a25a.bindTooltip(
                `<div>
                     North Melbourne Recreation Reserve Multi Purpose Court
                 </div>`,
                {"sticky": true}
            );


            var marker_9e1ada6ca97a4fa3a1a9409f58f58609 = L.marker(
                [-37.81168723, 144.98181100000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9f459183654f4a918ae7245884cfa899 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e1ada6ca97a4fa3a1a9409f58f58609.setIcon(icon_9f459183654f4a918ae7245884cfa899);


            marker_9e1ada6ca97a4fa3a1a9409f58f58609.bindTooltip(
                `<div>
                     Fitzroy Gardens Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_532f636a935b4e498cffc6a33291d012 = L.marker(
                [-37.82589894, 144.9686158],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a6dc9e8046a2461ab1b9909b2b412bd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_532f636a935b4e498cffc6a33291d012.setIcon(icon_a6dc9e8046a2461ab1b9909b2b412bd7);


            marker_532f636a935b4e498cffc6a33291d012.bindTooltip(
                `<div>
                     Grant Street Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e0e3fa5c6f4846f3b06f7cdd8455884b = L.marker(
                [-37.82193098, 144.94716100000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_49d5abf81f6d4712a90b59a9307838f7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e0e3fa5c6f4846f3b06f7cdd8455884b.setIcon(icon_49d5abf81f6d4712a90b59a9307838f7);


            marker_e0e3fa5c6f4846f3b06f7cdd8455884b.bindTooltip(
                `<div>
                     Docklands Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ceddffe2a4fb4576b22e08db5bfd37d1 = L.marker(
                [-37.82011229, 144.944909],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_51a31398a387452c97396168649b3637 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ceddffe2a4fb4576b22e08db5bfd37d1.setIcon(icon_51a31398a387452c97396168649b3637);


            marker_ceddffe2a4fb4576b22e08db5bfd37d1.bindTooltip(
                `<div>
                     Victoria Green Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b9b20b04d2c947a6bed273825c99681f = L.marker(
                [-37.78908097, 144.92837],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3a5f61ca0c7e41309912162ba37d6f4b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b9b20b04d2c947a6bed273825c99681f.setIcon(icon_3a5f61ca0c7e41309912162ba37d6f4b);


            marker_b9b20b04d2c947a6bed273825c99681f.bindTooltip(
                `<div>
                     Kensington Hall Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c511fa1ccaa34f6092cd7bc435a722da = L.marker(
                [-37.79630478, 144.97275390000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e83d9552aba14faba84a65af8134a3ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c511fa1ccaa34f6092cd7bc435a722da.setIcon(icon_e83d9552aba14faba84a65af8134a3ec);


            marker_c511fa1ccaa34f6092cd7bc435a722da.bindTooltip(
                `<div>
                     Canning and Palmerston Streets Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_863a20176b774a9992cfe64ffe88c5d2 = L.marker(
                [-37.83876575, 144.9848819],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_96e595b5702c418facddb252e4af3f75 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_863a20176b774a9992cfe64ffe88c5d2.setIcon(icon_96e595b5702c418facddb252e4af3f75);


            marker_863a20176b774a9992cfe64ffe88c5d2.bindTooltip(
                `<div>
                     Fawkner Park North East
                 </div>`,
                {"sticky": true}
            );


            var marker_09ff976b03614254b50f49729df4d0fe = L.marker(
                [-37.82014296, 144.97301159999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6366de49b7964c0e8736bc4e44b655ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_09ff976b03614254b50f49729df4d0fe.setIcon(icon_6366de49b7964c0e8736bc4e44b655ba);


            marker_09ff976b03614254b50f49729df4d0fe.bindTooltip(
                `<div>
                     Riverslide Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9f370dd30584464eb35f1ff0e91ca272 = L.marker(
                [-37.79548675, 144.9308347],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d2c0156af0b540d1856a38d59b56cf1e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9f370dd30584464eb35f1ff0e91ca272.setIcon(icon_d2c0156af0b540d1856a38d59b56cf1e);


            marker_9f370dd30584464eb35f1ff0e91ca272.bindTooltip(
                `<div>
                     Bellair Street Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5e838b63a68d4d5f96befdac2700631c = L.marker(
                [-37.78131234, 144.9621013],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3f7283f6b1b944fc9f3162b98b22de5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e838b63a68d4d5f96befdac2700631c.setIcon(icon_3f7283f6b1b944fc9f3162b98b22de5d);


            marker_5e838b63a68d4d5f96befdac2700631c.bindTooltip(
                `<div>
                     Princes Park North Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_033f65da04d54ad5ae102f7ce93f57c8 = L.marker(
                [-37.82019174, 144.9407585],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f06309089f834250b57e8f89a7880319 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_033f65da04d54ad5ae102f7ce93f57c8.setIcon(icon_f06309089f834250b57e8f89a7880319);


            marker_033f65da04d54ad5ae102f7ce93f57c8.bindTooltip(
                `<div>
                     Buluk Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8df3771f81204b759a00ef316475c050 = L.marker(
                [-37.79658068, 144.9205615],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_646f77ebef4a40cd8ab1485606730409 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8df3771f81204b759a00ef316475c050.setIcon(icon_646f77ebef4a40cd8ab1485606730409);


            marker_8df3771f81204b759a00ef316475c050.bindTooltip(
                `<div>
                     Mercantile Parade and Tankard Street Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_89b2fd7adf8049239e3bdc9025e3d32f = L.marker(
                [-37.78550893, 144.96289130000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9b5002124d014664a00c6476ea1a5e77 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_89b2fd7adf8049239e3bdc9025e3d32f.setIcon(icon_9b5002124d014664a00c6476ea1a5e77);


            marker_89b2fd7adf8049239e3bdc9025e3d32f.bindTooltip(
                `<div>
                     Princes Park South Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b19595710c71425386aed1b8b3962e27 = L.marker(
                [-37.80285546, 144.9625853],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_050dbb8468534055ad273c458039dbc3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b19595710c71425386aed1b8b3962e27.setIcon(icon_050dbb8468534055ad273c458039dbc3);


            marker_b19595710c71425386aed1b8b3962e27.bindTooltip(
                `<div>
                     Lincoln Square Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_457a5dccb5ed47ff8fe95daebd28bde9 = L.marker(
                [-37.79534127, 144.9521257],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1abbda64940f4df7a98d7e4f6baf6aba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_457a5dccb5ed47ff8fe95daebd28bde9.setIcon(icon_1abbda64940f4df7a98d7e4f6baf6aba);


            marker_457a5dccb5ed47ff8fe95daebd28bde9.bindTooltip(
                `<div>
                     NaturePlay Playground Royal Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b754cdcf848c4b0cad59612f93f72631 = L.marker(
                [-37.79345555, 144.9400371],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0372fbb13d5a474196c448f5b76eedad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b754cdcf848c4b0cad59612f93f72631.setIcon(icon_0372fbb13d5a474196c448f5b76eedad);


            marker_b754cdcf848c4b0cad59612f93f72631.bindTooltip(
                `<div>
                     North Melbourne Community Centre Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_09fdfea320e74ce49af698462ce4c9c9 = L.marker(
                [-37.80945929, 144.95476599999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7560655501bd4b1b9f77c08760d74350 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_09fdfea320e74ce49af698462ce4c9c9.setIcon(icon_7560655501bd4b1b9f77c08760d74350);


            marker_09fdfea320e74ce49af698462ce4c9c9.bindTooltip(
                `<div>
                     Flagstaff Gardens Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_061a35fb76954dc980352f48a68eae96 = L.marker(
                [-37.81806928, 144.9716335],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1b222c0ce0a748ac97c4151dfbdccf40 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_061a35fb76954dc980352f48a68eae96.setIcon(icon_1b222c0ce0a748ac97c4151dfbdccf40);


            marker_061a35fb76954dc980352f48a68eae96.bindTooltip(
                `<div>
                     Birrarung Marr Artplay
                 </div>`,
                {"sticky": true}
            );


            var marker_d29b154bdbf24e00bddbf9f9d31b072d = L.marker(
                [-37.79536635, 144.9208128],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_31db816af6924acd9f501d9f5af55bc2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d29b154bdbf24e00bddbf9f9d31b072d.setIcon(icon_31db816af6924acd9f501d9f5af55bc2);


            marker_d29b154bdbf24e00bddbf9f9d31b072d.bindTooltip(
                `<div>
                     Mercantile Parade and Newman Street Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3b0d1f3c950b40e7abb4bfea13cdebeb = L.marker(
                [-37.79870198, 144.9439624],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3f10d147fcf34663afc0c774766c0420 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3b0d1f3c950b40e7abb4bfea13cdebeb.setIcon(icon_3f10d147fcf34663afc0c774766c0420);


            marker_3b0d1f3c950b40e7abb4bfea13cdebeb.bindTooltip(
                `<div>
                     Gardiner Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9e6c40c71f034e559ea411229d327e80 = L.marker(
                [-37.82300844, 144.94128600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d06a96b70f104555ac61502c65cecf1f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e6c40c71f034e559ea411229d327e80.setIcon(icon_d06a96b70f104555ac61502c65cecf1f);


            marker_9e6c40c71f034e559ea411229d327e80.bindTooltip(
                `<div>
                     Point Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0e1cb7b1da06417ea601f0efb0501b11 = L.marker(
                [-37.79826744, 144.9213692],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0caedee1053044c39d111f083191e808 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e1cb7b1da06417ea601f0efb0501b11.setIcon(icon_0caedee1053044c39d111f083191e808);


            marker_0e1cb7b1da06417ea601f0efb0501b11.bindTooltip(
                `<div>
                     Holland Park Extreme Sports Precinct
                 </div>`,
                {"sticky": true}
            );


            var marker_06419c5022cd4f22be5575804e7f4ea3 = L.marker(
                [-37.83910067, 144.98038019999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1ba2bd4023d948149efbbc9205f93680 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_06419c5022cd4f22be5575804e7f4ea3.setIcon(icon_1ba2bd4023d948149efbbc9205f93680);


            marker_06419c5022cd4f22be5575804e7f4ea3.bindTooltip(
                `<div>
                     Fawkner Park Toddler Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_3dd5867a456b468591a6be33653de5c5 = L.marker(
                [-37.79518528, 144.969754],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e2ccba562b1348e0a45544832911f80b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3dd5867a456b468591a6be33653de5c5.setIcon(icon_e2ccba562b1348e0a45544832911f80b);


            marker_3dd5867a456b468591a6be33653de5c5.bindTooltip(
                `<div>
                     Neill Street Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_87e51ab5bd9f4c57b6c1d9d00c40cd2c = L.marker(
                [-37.79613164, 144.926748],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f8bca60b44044387acf32a37c1a9d80d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_87e51ab5bd9f4c57b6c1d9d00c40cd2c.setIcon(icon_f8bca60b44044387acf32a37c1a9d80d);


            marker_87e51ab5bd9f4c57b6c1d9d00c40cd2c.bindTooltip(
                `<div>
                     Warun Biik Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_119048e0bf0b429f8186f2d7c2208880 = L.marker(
                [-37.77979069, 144.9398302],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_37ff14b4404740fab51fae89846b6fa9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_119048e0bf0b429f8186f2d7c2208880.setIcon(icon_37ff14b4404740fab51fae89846b6fa9);


            marker_119048e0bf0b429f8186f2d7c2208880.bindTooltip(
                `<div>
                     Galada Avenue Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_75db06962d3c40988eac4703164ad4bc = L.marker(
                [-37.79381593, 144.92350580000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dd87b77c439f45748179d052af99ba49 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75db06962d3c40988eac4703164ad4bc.setIcon(icon_dd87b77c439f45748179d052af99ba49);


            marker_75db06962d3c40988eac4703164ad4bc.bindTooltip(
                `<div>
                     Bayswater Road Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_775274510e674a8784402b7dc10532d4 = L.marker(
                [-37.79464314, 144.9191093],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3b678f073dd3442e8afcf9160864d5cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_775274510e674a8784402b7dc10532d4.setIcon(icon_3b678f073dd3442e8afcf9160864d5cc);


            marker_775274510e674a8784402b7dc10532d4.bindTooltip(
                `<div>
                     The Crescent Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_00525fc9b3fb41a88240a62df5edcc51 = L.marker(
                [-37.80200278, 144.9708559],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ae12565ebb4447a299930d9f1eafcaaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00525fc9b3fb41a88240a62df5edcc51.setIcon(icon_ae12565ebb4447a299930d9f1eafcaaa);


            marker_00525fc9b3fb41a88240a62df5edcc51.bindTooltip(
                `<div>
                     Carlton Gardens Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2b39ddd3ad2847f8a33466ad7831929c = L.marker(
                [-37.7966018, 144.9526638],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_227494107fdb495099a9bba745c3c130 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2b39ddd3ad2847f8a33466ad7831929c.setIcon(icon_227494107fdb495099a9bba745c3c130);


            marker_2b39ddd3ad2847f8a33466ad7831929c.bindTooltip(
                `<div>
                     Ievers Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_04514524f4dc4aa0a8ae2b09cd5f656f = L.marker(
                [-37.81624, 144.9337296],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fbdf8fa4f0a14ad1bc85016792c6542a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_04514524f4dc4aa0a8ae2b09cd5f656f.setIcon(icon_fbdf8fa4f0a14ad1bc85016792c6542a);


            marker_04514524f4dc4aa0a8ae2b09cd5f656f.bindTooltip(
                `<div>
                     Ron Barassi Senior Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_bf6e3cbff3354f69845eaad34559f9e0 = L.marker(
                [-37.81157067, 144.98637319999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3feece3c45484f3fa1d123f4ee570492 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bf6e3cbff3354f69845eaad34559f9e0.setIcon(icon_3feece3c45484f3fa1d123f4ee570492);


            marker_bf6e3cbff3354f69845eaad34559f9e0.bindTooltip(
                `<div>
                     Powlett Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_dd3dec128e62418681e9096a4c2125f7 = L.marker(
                [-37.79972461, 144.9413521],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9e4f1d4a53024cc8a35849304c4f1107 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dd3dec128e62418681e9096a4c2125f7.setIcon(icon_9e4f1d4a53024cc8a35849304c4f1107);


            marker_dd3dec128e62418681e9096a4c2125f7.bindTooltip(
                `<div>
                     North Melbourne Recreation Reserve Play Court
                 </div>`,
                {"sticky": true}
            );


            var marker_4bd9f7a4972943ae8637a1bfb0861f69 = L.marker(
                [-37.79699543, 144.97407819999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6e996747621442b6b15026dfffedf321 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4bd9f7a4972943ae8637a1bfb0861f69.setIcon(icon_6e996747621442b6b15026dfffedf321);


            marker_4bd9f7a4972943ae8637a1bfb0861f69.bindTooltip(
                `<div>
                     Station Street Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_14313872df5546b9a07ebcd08c1df674 = L.marker(
                [-37.8406993, 144.9841878],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_81f2def8a59047a8a8774cb61c051d7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_14313872df5546b9a07ebcd08c1df674.setIcon(icon_81f2def8a59047a8a8774cb61c051d7d);


            marker_14313872df5546b9a07ebcd08c1df674.bindTooltip(
                `<div>
                     Fawkner Park East
                 </div>`,
                {"sticky": true}
            );


            var marker_c2b311d7755e4d48bcbb08ba74d1b5b6 = L.marker(
                [-37.80878457, 144.94471000000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0d799680a4ab4c949db119cd7b49cfba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c2b311d7755e4d48bcbb08ba74d1b5b6.setIcon(icon_0d799680a4ab4c949db119cd7b49cfba);


            marker_c2b311d7755e4d48bcbb08ba74d1b5b6.bindTooltip(
                `<div>
                     Hawke & Adderley Streets Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_324fea25fb8d4f36a758c9337878ad90 = L.marker(
                [-37.80741069, 144.95166830000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_766086fa95874fbcb1ea06cd786bf301 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_324fea25fb8d4f36a758c9337878ad90.setIcon(icon_766086fa95874fbcb1ea06cd786bf301);


            marker_324fea25fb8d4f36a758c9337878ad90.bindTooltip(
                `<div>
                     Eades Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a0b65b9e740a417f8d1d6de45c65c7c2 = L.marker(
                [-37.79313247, 144.93234109999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e70bf98a11a141bc8af3f42726f22016 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a0b65b9e740a417f8d1d6de45c65c7c2.setIcon(icon_e70bf98a11a141bc8af3f42726f22016);


            marker_a0b65b9e740a417f8d1d6de45c65c7c2.bindTooltip(
                `<div>
                     Robertson Street Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7da6bedc67024259af5a878395dbef26 = L.marker(
                [-36.37634498, 145.4010869],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0ca0de9913bb4daa829835d52928edf3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7da6bedc67024259af5a878395dbef26.setIcon(icon_0ca0de9913bb4daa829835d52928edf3);


            marker_7da6bedc67024259af5a878395dbef26.bindTooltip(
                `<div>
                     Arthur Dickmann Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_ec4e93f40a3641c09c4d25fb893453a4 = L.marker(
                [-36.37956966, 145.3518372],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ae5b532700d04e77b6478c076f3efeb4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ec4e93f40a3641c09c4d25fb893453a4.setIcon(icon_ae5b532700d04e77b6478c076f3efeb4);


            marker_ec4e93f40a3641c09c4d25fb893453a4.bindTooltip(
                `<div>
                     Frank R Puller Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_6b7e6b2fee7d481c82896e0ac8497fb5 = L.marker(
                [-36.39324019, 145.35874009999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4ea6c8401b4c40709a984417a01a155e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6b7e6b2fee7d481c82896e0ac8497fb5.setIcon(icon_4ea6c8401b4c40709a984417a01a155e);


            marker_6b7e6b2fee7d481c82896e0ac8497fb5.bindTooltip(
                `<div>
                     Alexandra Street Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_3dddc79be63b406398de884a4a0844a1 = L.marker(
                [-36.32719629, 145.68725519999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4a19ed06fd084fc08dd37113160714a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3dddc79be63b406398de884a4a0844a1.setIcon(icon_4a19ed06fd084fc08dd37113160714a8);


            marker_3dddc79be63b406398de884a4a0844a1.bindTooltip(
                `<div>
                     Dookie Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_33b2a4650bb14ba1bac0db12322d9d48 = L.marker(
                [-36.22565519, 145.56269450000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_76022d531bb8486b9853c49c339c9052 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_33b2a4650bb14ba1bac0db12322d9d48.setIcon(icon_76022d531bb8486b9853c49c339c9052);


            marker_33b2a4650bb14ba1bac0db12322d9d48.bindTooltip(
                `<div>
                     Katandra West Early Childhood Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_5dde1f04e8df41b4bdfb967a168361e0 = L.marker(
                [-36.39426703, 145.355407],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_18e69a7ae1ac4f9fad6785f21e53309e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5dde1f04e8df41b4bdfb967a168361e0.setIcon(icon_18e69a7ae1ac4f9fad6785f21e53309e);


            marker_5dde1f04e8df41b4bdfb967a168361e0.bindTooltip(
                `<div>
                     Rodney Neighbourhood Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_6a9404073ea44ae69f701f690340191b = L.marker(
                [-36.38052264, 145.3523076],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1d352236ef0b46ea84f9c8a673eb5887 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6a9404073ea44ae69f701f690340191b.setIcon(icon_1d352236ef0b46ea84f9c8a673eb5887);


            marker_6a9404073ea44ae69f701f690340191b.bindTooltip(
                `<div>
                     Echuca Road Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_1d9448d3a6a247e586b6d0f5c749cf2c = L.marker(
                [-36.41010547, 145.46160940000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_db95a6b4e70948c5a2094a7cb4415d4a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d9448d3a6a247e586b6d0f5c749cf2c.setIcon(icon_db95a6b4e70948c5a2094a7cb4415d4a);


            marker_1d9448d3a6a247e586b6d0f5c749cf2c.bindTooltip(
                `<div>
                     Isabel Pearce Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_48782b01d6304ae6980b4a97d5430b70 = L.marker(
                [-36.39936161, 145.4013179],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9cab724ec78d4982989c200ac1e04b80 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_48782b01d6304ae6980b4a97d5430b70.setIcon(icon_9cab724ec78d4982989c200ac1e04b80);


            marker_48782b01d6304ae6980b4a97d5430b70.bindTooltip(
                `<div>
                     Colliver Road Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_1cc45762466b4d63bac9a5cef08375fb = L.marker(
                [-36.36675463, 145.4058753],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_edf221725c29444c986f270a53dd9dfb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1cc45762466b4d63bac9a5cef08375fb.setIcon(icon_edf221725c29444c986f270a53dd9dfb);


            marker_1cc45762466b4d63bac9a5cef08375fb.bindTooltip(
                `<div>
                     Dolena Young Pre School
                 </div>`,
                {"sticky": true}
            );


            var marker_c24d13a6d27142d2b5381a87f9ebd5fe = L.marker(
                [-36.40186144, 145.4103101],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_038754c107cb4d71be526bb8c27d5720 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c24d13a6d27142d2b5381a87f9ebd5fe.setIcon(icon_038754c107cb4d71be526bb8c27d5720);


            marker_c24d13a6d27142d2b5381a87f9ebd5fe.bindTooltip(
                `<div>
                     Leslie Gribble Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_079c15206e0c42ccb65908becb715d8a = L.marker(
                [-36.23907207, 145.4364476],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e54249387177451dbf95b133503af218 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_079c15206e0c42ccb65908becb715d8a.setIcon(icon_e54249387177451dbf95b133503af218);


            marker_079c15206e0c42ccb65908becb715d8a.bindTooltip(
                `<div>
                     Tallygaroopna Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_8329a749df2d43eab867855a22636bbc = L.marker(
                [-36.43849777, 145.23596369999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4ac5f06cc5854f22bfddafa8d90aa2d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8329a749df2d43eab867855a22636bbc.setIcon(icon_4ac5f06cc5854f22bfddafa8d90aa2d4);


            marker_8329a749df2d43eab867855a22636bbc.bindTooltip(
                `<div>
                     Gowrie Park Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_9d317f7013bd4643a09070960c43f36a = L.marker(
                [-36.37870843, 145.4032346],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6adf12a909f14faab672791feccbb073 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9d317f7013bd4643a09070960c43f36a.setIcon(icon_6adf12a909f14faab672791feccbb073);


            marker_9d317f7013bd4643a09070960c43f36a.bindTooltip(
                `<div>
                     Nancy Vibert Occasional Care Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_b379ddf9ac314347b8937908754ad11e = L.marker(
                [-36.36155445, 145.3938443],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0b63a8ca0ed34cde8d9866d4c0cb44d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b379ddf9ac314347b8937908754ad11e.setIcon(icon_0b63a8ca0ed34cde8d9866d4c0cb44d4);


            marker_b379ddf9ac314347b8937908754ad11e.bindTooltip(
                `<div>
                     Patricia Smith Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_d816c022a7e944d5bc1191d48fdc8971 = L.marker(
                [-36.29854207, 145.43516110000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8caab228a94b4d2b9d95eda93917593a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d816c022a7e944d5bc1191d48fdc8971.setIcon(icon_8caab228a94b4d2b9d95eda93917593a);


            marker_d816c022a7e944d5bc1191d48fdc8971.bindTooltip(
                `<div>
                     Congupna Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_a5176b6ddbb94fdb8a7bcdc2ad4472de = L.marker(
                [-36.33314672, 145.6832224],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c655fb2eb06d4fea98bf1f9fcf151c41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a5176b6ddbb94fdb8a7bcdc2ad4472de.setIcon(icon_c655fb2eb06d4fea98bf1f9fcf151c41);


            marker_a5176b6ddbb94fdb8a7bcdc2ad4472de.bindTooltip(
                `<div>
                     Dookie Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9690cd808db748b19e7c4ad169bfdd85 = L.marker(
                [-36.52664289, 145.4778338],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8fdbdb4a5d2742a3b9d4d7da4cf9ecd9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9690cd808db748b19e7c4ad169bfdd85.setIcon(icon_8fdbdb4a5d2742a3b9d4d7da4cf9ecd9);


            marker_9690cd808db748b19e7c4ad169bfdd85.bindTooltip(
                `<div>
                     Karramomus Memorial Hall
                 </div>`,
                {"sticky": true}
            );


            var marker_1a08ccbcf8454958a2801b45cc4ed788 = L.marker(
                [-36.22800205, 145.5599478],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ff26ece9931e4e9f9f86f81c13209848 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a08ccbcf8454958a2801b45cc4ed788.setIcon(icon_ff26ece9931e4e9f9f86f81c13209848);


            marker_1a08ccbcf8454958a2801b45cc4ed788.bindTooltip(
                `<div>
                     Katandra West Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_cf0f4ab889ee40259fa8708baabdec2c = L.marker(
                [-36.46838857, 145.3856126],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_47461fb461234187a4a5f62d4c7ef8f5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cf0f4ab889ee40259fa8708baabdec2c.setIcon(icon_47461fb461234187a4a5f62d4c7ef8f5);


            marker_cf0f4ab889ee40259fa8708baabdec2c.bindTooltip(
                `<div>
                     Kialla West Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_ed276849395149be891c2299230b1e43 = L.marker(
                [-36.41934091, 145.3881824],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ca1d632ef174406aab46054d40b9b1d0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ed276849395149be891c2299230b1e43.setIcon(icon_ca1d632ef174406aab46054d40b9b1d0);


            marker_ed276849395149be891c2299230b1e43.bindTooltip(
                `<div>
                     Kialla Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_8f6cbff2a073442fb95a026a9a1d9433 = L.marker(
                [-36.40112899, 145.40813500000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6f85c7382f2d4102ac4b2409753435c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f6cbff2a073442fb95a026a9a1d9433.setIcon(icon_6f85c7382f2d4102ac4b2409753435c5);


            marker_8f6cbff2a073442fb95a026a9a1d9433.bindTooltip(
                `<div>
                     V E Vibert Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_f9b745fff43e4dc889cc2dd5f21d33a2 = L.marker(
                [-36.37211907, 145.12748],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c868daf760f143f289295755407c5a79 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9b745fff43e4dc889cc2dd5f21d33a2.setIcon(icon_c868daf760f143f289295755407c5a79);


            marker_f9b745fff43e4dc889cc2dd5f21d33a2.bindTooltip(
                `<div>
                     Merrigum Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_f2b60dfb8ed7498c8da1ee08eabdeada = L.marker(
                [-36.36354245, 145.5410698],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c768cc77e4fb47438852c7e890c8cad4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f2b60dfb8ed7498c8da1ee08eabdeada.setIcon(icon_c768cc77e4fb47438852c7e890c8cad4);


            marker_f2b60dfb8ed7498c8da1ee08eabdeada.bindTooltip(
                `<div>
                     Pine Lodge Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_e64ebc5e003f40938d27c3b6ba6a40a5 = L.marker(
                [-36.35634286, 145.3992273],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf0438e97df84a62bfbbbff51bfc19d7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e64ebc5e003f40938d27c3b6ba6a40a5.setIcon(icon_cf0438e97df84a62bfbbbff51bfc19d7);


            marker_e64ebc5e003f40938d27c3b6ba6a40a5.bindTooltip(
                `<div>
                     Sports City Netball Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d3edc245bf1a460fac504b0781a305b7 = L.marker(
                [-36.35287579, 145.39444740000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_be52ed54a0de4870a9db747d5029d0e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3edc245bf1a460fac504b0781a305b7.setIcon(icon_be52ed54a0de4870a9db747d5029d0e6);


            marker_d3edc245bf1a460fac504b0781a305b7.bindTooltip(
                `<div>
                     Sports City Soccer Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6198ddaf1a54472386b9fbec7e8c65b3 = L.marker(
                [-36.40896941, 145.4622898],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_95fb7a33f2ff4a44bca3ccac031a7592 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6198ddaf1a54472386b9fbec7e8c65b3.setIcon(icon_95fb7a33f2ff4a44bca3ccac031a7592);


            marker_6198ddaf1a54472386b9fbec7e8c65b3.bindTooltip(
                `<div>
                     WG Parker-Central Park
                 </div>`,
                {"sticky": true}
            );


            var marker_02bcbd36035040f48f1da8d27688ddf9 = L.marker(
                [-36.40833472, 145.4627038],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6f944930ac134bab9a2cc5e5e6e0ce43 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_02bcbd36035040f48f1da8d27688ddf9.setIcon(icon_6f944930ac134bab9a2cc5e5e6e0ce43);


            marker_02bcbd36035040f48f1da8d27688ddf9.bindTooltip(
                `<div>
                     Central Park Tennis Courts
                 </div>`,
                {"sticky": true}
            );


            var marker_a9aefd90a6ad426ab819e3c685920cbd = L.marker(
                [-36.32424207, 145.39686899999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ba54d207a2cb4650a8c6933078766c6d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a9aefd90a6ad426ab819e3c685920cbd.setIcon(icon_ba54d207a2cb4650a8c6933078766c6d);


            marker_a9aefd90a6ad426ab819e3c685920cbd.bindTooltip(
                `<div>
                     North Shepparton Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9c87a2b8fea84261824efcbeb2d57593 = L.marker(
                [-36.56344495, 145.33339809999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fdc474d9d8414f5989cb083dee349ad9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9c87a2b8fea84261824efcbeb2d57593.setIcon(icon_fdc474d9d8414f5989cb083dee349ad9);


            marker_9c87a2b8fea84261824efcbeb2d57593.bindTooltip(
                `<div>
                     Arcadia Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b2a56bff44594d29b03925bd520e409b = L.marker(
                [-36.35675321, 145.4626156],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2b3261fc338f43ecb4dd3dc1a3b53860 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b2a56bff44594d29b03925bd520e409b.setIcon(icon_2b3261fc338f43ecb4dd3dc1a3b53860);


            marker_b2a56bff44594d29b03925bd520e409b.bindTooltip(
                `<div>
                     Lemnos Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_56f3f4c230ee46069f26266028bd83e6 = L.marker(
                [-36.21964498, 145.3433929],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_275d0761d37f45e28d100f18de43fa5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_56f3f4c230ee46069f26266028bd83e6.setIcon(icon_275d0761d37f45e28d100f18de43fa5d);


            marker_56f3f4c230ee46069f26266028bd83e6.bindTooltip(
                `<div>
                     Bunbartha Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_c79e68d2f18f43fb8beb8d08a54513e8 = L.marker(
                [-36.24142603, 145.436833],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2fca68260ceb4da889defa9838fb6ec4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c79e68d2f18f43fb8beb8d08a54513e8.setIcon(icon_2fca68260ceb4da889defa9838fb6ec4);


            marker_c79e68d2f18f43fb8beb8d08a54513e8.bindTooltip(
                `<div>
                     Tallygaroopna Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_522a435aa60f41e2924e5b8da92884c2 = L.marker(
                [-36.22752004, 145.559132],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_31cc3bd0782a4a40b12b3221a33bdd2f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_522a435aa60f41e2924e5b8da92884c2.setIcon(icon_31cc3bd0782a4a40b12b3221a33bdd2f);


            marker_522a435aa60f41e2924e5b8da92884c2.bindTooltip(
                `<div>
                     Katandra Rec Res Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_9eaa9c51470b45659dc6594ae709dd98 = L.marker(
                [-36.49185037, 145.3440352],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_29e59b9b63404b90ad58212a05972c91 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9eaa9c51470b45659dc6594ae709dd98.setIcon(icon_29e59b9b63404b90ad58212a05972c91);


            marker_9eaa9c51470b45659dc6594ae709dd98.bindTooltip(
                `<div>
                     Toolamba Recreation Reserve.Exercise Equipement
                 </div>`,
                {"sticky": true}
            );


            var marker_4d8382f346f14582a1c3a62370746850 = L.marker(
                [-36.491143, 145.34342900000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_95be862ab4194aaf8578b30d48c17742 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d8382f346f14582a1c3a62370746850.setIcon(icon_95be862ab4194aaf8578b30d48c17742);


            marker_4d8382f346f14582a1c3a62370746850.bindTooltip(
                `<div>
                     Toolamba Rec Res Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_5f00e040402942289d0d9560fdbf6e4f = L.marker(
                [-36.37516604, 145.338418],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_023d2b68ffd84e498593a53bbc06bbda = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f00e040402942289d0d9560fdbf6e4f.setIcon(icon_023d2b68ffd84e498593a53bbc06bbda);


            marker_5f00e040402942289d0d9560fdbf6e4f.bindTooltip(
                `<div>
                     Arrowsmith Crescent Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_24933d3105ac48f8a37822e942e6224b = L.marker(
                [-36.4264678, 145.23927],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_debb94d5f67542c5a60e1bedbd155826 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24933d3105ac48f8a37822e942e6224b.setIcon(icon_debb94d5f67542c5a60e1bedbd155826);


            marker_24933d3105ac48f8a37822e942e6224b.bindTooltip(
                `<div>
                     Northlinks Estate Playground 2
                 </div>`,
                {"sticky": true}
            );


            var marker_b24bf756d0ae44699a83d6f203082ab2 = L.marker(
                [-36.42645846, 145.2392479],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_047992cb16be4f6c991f4432e3d0f093 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b24bf756d0ae44699a83d6f203082ab2.setIcon(icon_047992cb16be4f6c991f4432e3d0f093);


            marker_b24bf756d0ae44699a83d6f203082ab2.bindTooltip(
                `<div>
                     nan
                 </div>`,
                {"sticky": true}
            );


            var marker_7e7f13727c4a48289921f0ed97ab5210 = L.marker(
                [-36.43340351, 145.4034367],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d017add6091542559147231a9ae7a61a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e7f13727c4a48289921f0ed97ab5210.setIcon(icon_d017add6091542559147231a9ae7a61a);


            marker_7e7f13727c4a48289921f0ed97ab5210.bindTooltip(
                `<div>
                     Sanctuary Park Estate Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6b9e8423ce7f4a87b007490a9e1c8f46 = L.marker(
                [-36.61581192, 145.216231],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02ea741d033c480eb096fff6fa955b27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6b9e8423ce7f4a87b007490a9e1c8f46.setIcon(icon_02ea741d033c480eb096fff6fa955b27);


            marker_6b9e8423ce7f4a87b007490a9e1c8f46.bindTooltip(
                `<div>
                     Murchison Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_941cca6182b44188b48675787528fc92 = L.marker(
                [-36.42017002, 145.4009026],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_298dc44292d54e21bbe7c461e9fc41db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_941cca6182b44188b48675787528fc92.setIcon(icon_298dc44292d54e21bbe7c461e9fc41db);


            marker_941cca6182b44188b48675787528fc92.bindTooltip(
                `<div>
                     Lowanna Waters
                 </div>`,
                {"sticky": true}
            );


            var marker_f0e30c7093234967bdf9d0c68c723013 = L.marker(
                [-36.39795929, 145.3512259],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_17382adb93d4454d8c6cdf1d3c377656 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f0e30c7093234967bdf9d0c68c723013.setIcon(icon_17382adb93d4454d8c6cdf1d3c377656);


            marker_f0e30c7093234967bdf9d0c68c723013.bindTooltip(
                `<div>
                     Smyth Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_f5b0e68e68924503b2c253d54bd94ec3 = L.marker(
                [-36.42977298, 145.38806709999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_29f0575312834be5887096ed1a382ed3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f5b0e68e68924503b2c253d54bd94ec3.setIcon(icon_29f0575312834be5887096ed1a382ed3);


            marker_f5b0e68e68924503b2c253d54bd94ec3.bindTooltip(
                `<div>
                     Sevens Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_52e508ff26c74bcf83715b5a91b4eab4 = L.marker(
                [-36.30097359, 145.4349788],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1a659d6e507d4cad84f403032751e4ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_52e508ff26c74bcf83715b5a91b4eab4.setIcon(icon_1a659d6e507d4cad84f403032751e4ab);


            marker_52e508ff26c74bcf83715b5a91b4eab4.bindTooltip(
                `<div>
                     Farrell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7c03b98953f84cf6acb17dbb048b6b2b = L.marker(
                [-36.30062496, 145.4345281],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_85427673bd0d4a549a430b75326adb89 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7c03b98953f84cf6acb17dbb048b6b2b.setIcon(icon_85427673bd0d4a549a430b75326adb89);


            marker_7c03b98953f84cf6acb17dbb048b6b2b.bindTooltip(
                `<div>
                     Farrell park Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_d53ccd8ce2d44461bb8d4bc6e7005ade = L.marker(
                [-36.41469731, 145.3847541],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a313cacc9220441c89a3638cdfb140cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d53ccd8ce2d44461bb8d4bc6e7005ade.setIcon(icon_a313cacc9220441c89a3638cdfb140cb);


            marker_d53ccd8ce2d44461bb8d4bc6e7005ade.bindTooltip(
                `<div>
                     Riverwood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9b76727d01dc49a197059a28f16cd44f = L.marker(
                [-36.34476008, 145.40577009999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8c5e8f76b888462abd48ab1d018ffe45 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9b76727d01dc49a197059a28f16cd44f.setIcon(icon_8c5e8f76b888462abd48ab1d018ffe45);


            marker_9b76727d01dc49a197059a28f16cd44f.bindTooltip(
                `<div>
                     Northside Estate Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3c2aa5e583e8428e8b3bda44bfcb553c = L.marker(
                [-36.33442367, 145.40634619999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02466c8a1ffd406185756f1f750a2a8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c2aa5e583e8428e8b3bda44bfcb553c.setIcon(icon_02466c8a1ffd406185756f1f750a2a8e);


            marker_3c2aa5e583e8428e8b3bda44bfcb553c.bindTooltip(
                `<div>
                     Trinity Drive Park
                 </div>`,
                {"sticky": true}
            );


            var marker_bc7e8c36f7fe43758ee07e4307507069 = L.marker(
                [-36.44169698, 145.358608],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e837abbcba594b22bed7aef51b0f9f09 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc7e8c36f7fe43758ee07e4307507069.setIcon(icon_e837abbcba594b22bed7aef51b0f9f09);


            marker_bc7e8c36f7fe43758ee07e4307507069.bindTooltip(
                `<div>
                     Teasdale Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_3f4c700cfb6b432aad21920666f858c3 = L.marker(
                [-36.38773866, 145.4145779],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2991057b3cb24adca67d4e9a81e23308 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f4c700cfb6b432aad21920666f858c3.setIcon(icon_2991057b3cb24adca67d4e9a81e23308);


            marker_3f4c700cfb6b432aad21920666f858c3.bindTooltip(
                `<div>
                     Darby Park
                 </div>`,
                {"sticky": true}
            );


            var marker_67b8d6d5dcb1488bbf5db7b21fe0e3b0 = L.marker(
                [-36.3595774, 145.3969832],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_afc7a4dba4ef4ee3b7b5485d4b5beb88 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_67b8d6d5dcb1488bbf5db7b21fe0e3b0.setIcon(icon_afc7a4dba4ef4ee3b7b5485d4b5beb88);


            marker_67b8d6d5dcb1488bbf5db7b21fe0e3b0.bindTooltip(
                `<div>
                     Morrison Park
                 </div>`,
                {"sticky": true}
            );


            var marker_04d0a0b4015d4ed3b88752da7f6a0dfa = L.marker(
                [-36.398268, 145.34032549999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9fd05a12c2434efe96e6af12e770ca51 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_04d0a0b4015d4ed3b88752da7f6a0dfa.setIcon(icon_9fd05a12c2434efe96e6af12e770ca51);


            marker_04d0a0b4015d4ed3b88752da7f6a0dfa.bindTooltip(
                `<div>
                     Charles Street Park
                 </div>`,
                {"sticky": true}
            );


            var marker_2154330c65654504a64e1425535be53d = L.marker(
                [-36.37742373, 145.343979],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f61c4e6e552f419cba158437ec6573e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2154330c65654504a64e1425535be53d.setIcon(icon_f61c4e6e552f419cba158437ec6573e7);


            marker_2154330c65654504a64e1425535be53d.bindTooltip(
                `<div>
                     Gange Street Park
                 </div>`,
                {"sticky": true}
            );


            var marker_943425df5e0b43fb802f15d6633e96a1 = L.marker(
                [-36.38413322, 145.3585525],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_686ba3a4b9a847c6bdfc844e1bc103fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_943425df5e0b43fb802f15d6633e96a1.setIcon(icon_686ba3a4b9a847c6bdfc844e1bc103fd);


            marker_943425df5e0b43fb802f15d6633e96a1.bindTooltip(
                `<div>
                     G & D Howe Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a685768100544e9986fa5ef5f3dde4b5 = L.marker(
                [-36.38226754, 145.3448573],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e750bc8c4bac442d9df2cf88e08d9f31 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a685768100544e9986fa5ef5f3dde4b5.setIcon(icon_e750bc8c4bac442d9df2cf88e08d9f31);


            marker_a685768100544e9986fa5ef5f3dde4b5.bindTooltip(
                `<div>
                     Norton Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_a9323020fcfb4214b90911e13ac48f8f = L.marker(
                [-36.39072435, 145.3475657],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_27c816bc8f2b499daa9dbf8f95bfd8d7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a9323020fcfb4214b90911e13ac48f8f.setIcon(icon_27c816bc8f2b499daa9dbf8f95bfd8d7);


            marker_a9323020fcfb4214b90911e13ac48f8f.bindTooltip(
                `<div>
                     Rodney Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b7f2ab5ca94940e58c6854d578c2d838 = L.marker(
                [-36.401072, 145.4015749],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2c7b7e744a734507a66219391c5373c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b7f2ab5ca94940e58c6854d578c2d838.setIcon(icon_2c7b7e744a734507a66219391c5373c0);


            marker_b7f2ab5ca94940e58c6854d578c2d838.bindTooltip(
                `<div>
                     Kittle Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9691e188836d418bac92489ff75c312d = L.marker(
                [-36.36130164, 145.40930780000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1d1db296b521498ca4f213dad4d7dec4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9691e188836d418bac92489ff75c312d.setIcon(icon_1d1db296b521498ca4f213dad4d7dec4);


            marker_9691e188836d418bac92489ff75c312d.bindTooltip(
                `<div>
                     Duncan Coates Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_714d45e1388a441b9f32e2c506c3d230 = L.marker(
                [-36.35955775, 145.3828185],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ce0e1959a4b04a6e8f0cc5b71b872d8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_714d45e1388a441b9f32e2c506c3d230.setIcon(icon_ce0e1959a4b04a6e8f0cc5b71b872d8f);


            marker_714d45e1388a441b9f32e2c506c3d230.bindTooltip(
                `<div>
                     Flinders Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3481f0177a1441368e2ebb62a6de24cc = L.marker(
                [-36.35949657, 145.3886307],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fe965895f8634cc9a6480fde671c203b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3481f0177a1441368e2ebb62a6de24cc.setIcon(icon_fe965895f8634cc9a6480fde671c203b);


            marker_3481f0177a1441368e2ebb62a6de24cc.bindTooltip(
                `<div>
                     Roche Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b944d3de2fd340c7b6b2b2e518cd5c25 = L.marker(
                [-36.36107343, 145.4172367],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a577f7c22ec64e88967c90d047b0084c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b944d3de2fd340c7b6b2b2e518cd5c25.setIcon(icon_a577f7c22ec64e88967c90d047b0084c);


            marker_b944d3de2fd340c7b6b2b2e518cd5c25.bindTooltip(
                `<div>
                     McCorkell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_571864358b5046468a9f52f48930701c = L.marker(
                [-36.35456378, 145.36427769999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_58e098a116c544dca07914e7e4393d5a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_571864358b5046468a9f52f48930701c.setIcon(icon_58e098a116c544dca07914e7e4393d5a);


            marker_571864358b5046468a9f52f48930701c.bindTooltip(
                `<div>
                     Kingfisher Drive Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_4d86cd70317f460bb38360f50dde3570 = L.marker(
                [-36.39956321, 145.39887180000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e3fd18594aca484680fa7246b461804c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d86cd70317f460bb38360f50dde3570.setIcon(icon_e3fd18594aca484680fa7246b461804c);


            marker_4d86cd70317f460bb38360f50dde3570.bindTooltip(
                `<div>
                     Shepparton Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_49321db86b014f33a6b59ba46369219c = L.marker(
                [-36.39611072, 145.3928324],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a8e72350addc4cb78ff1ee48f2498857 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49321db86b014f33a6b59ba46369219c.setIcon(icon_a8e72350addc4cb78ff1ee48f2498857);


            marker_49321db86b014f33a6b59ba46369219c.bindTooltip(
                `<div>
                     Wauchope Park
                 </div>`,
                {"sticky": true}
            );


            var marker_64566d1c4eeb4bea88efce247ab7a0e0 = L.marker(
                [-36.39280132, 145.4028237],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2f51df1119364da7a5fc62e437af1d5f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_64566d1c4eeb4bea88efce247ab7a0e0.setIcon(icon_2f51df1119364da7a5fc62e437af1d5f);


            marker_64566d1c4eeb4bea88efce247ab7a0e0.bindTooltip(
                `<div>
                     Furphy Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b672551f83e24a0db7b69740aa050ed7 = L.marker(
                [-36.36116718, 145.39991519999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5adf4d181e9a43c1ad6c96a802674a50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b672551f83e24a0db7b69740aa050ed7.setIcon(icon_5adf4d181e9a43c1ad6c96a802674a50);


            marker_b672551f83e24a0db7b69740aa050ed7.bindTooltip(
                `<div>
                     Frank McNamara
                 </div>`,
                {"sticky": true}
            );


            var marker_77b67bff39fd42f78d7fbf9007e9f020 = L.marker(
                [-36.4008579, 145.4107655],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6651e9aaa8244a658878dc39501f600f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_77b67bff39fd42f78d7fbf9007e9f020.setIcon(icon_6651e9aaa8244a658878dc39501f600f);


            marker_77b67bff39fd42f78d7fbf9007e9f020.bindTooltip(
                `<div>
                     Rigg Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_ca8e3da4ef14483b9e94e179e9fd7651 = L.marker(
                [-36.36009182, 145.40376],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3d39d676d8e44c46af344f183bd54105 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca8e3da4ef14483b9e94e179e9fd7651.setIcon(icon_3d39d676d8e44c46af344f183bd54105);


            marker_ca8e3da4ef14483b9e94e179e9fd7651.bindTooltip(
                `<div>
                     Leembruggen Park
                 </div>`,
                {"sticky": true}
            );


            var marker_bc5aaa727125490ea5dd99e7763a68f5 = L.marker(
                [-36.364851200000004, 145.41797380000003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7df086f9cc02498baf5ed62bbb8c01b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc5aaa727125490ea5dd99e7763a68f5.setIcon(icon_7df086f9cc02498baf5ed62bbb8c01b5);


            marker_bc5aaa727125490ea5dd99e7763a68f5.bindTooltip(
                `<div>
                     Bailey Park
                 </div>`,
                {"sticky": true}
            );


            var marker_4c7dcf7f477a460093c41bb7e597098c = L.marker(
                [-36.35762819, 145.41370669999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_49be1b85c7a04db295a9d5e5b5d8b95d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4c7dcf7f477a460093c41bb7e597098c.setIcon(icon_49be1b85c7a04db295a9d5e5b5d8b95d);


            marker_4c7dcf7f477a460093c41bb7e597098c.bindTooltip(
                `<div>
                     Centennial Park
                 </div>`,
                {"sticky": true}
            );


            var marker_4a2a5598e7de4c2291f19eea67e9043f = L.marker(
                [-36.371076, 145.41051399999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4cf93ffa87844668a0fe08721369ef36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a2a5598e7de4c2291f19eea67e9043f.setIcon(icon_4cf93ffa87844668a0fe08721369ef36);


            marker_4a2a5598e7de4c2291f19eea67e9043f.bindTooltip(
                `<div>
                     W.S. James Park
                 </div>`,
                {"sticky": true}
            );


            var marker_185c67b56cfb41b581a38615580aa3ba = L.marker(
                [-36.36078945, 145.4134977],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9262f2662a5146588d8308984ca18435 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_185c67b56cfb41b581a38615580aa3ba.setIcon(icon_9262f2662a5146588d8308984ca18435);


            marker_185c67b56cfb41b581a38615580aa3ba.bindTooltip(
                `<div>
                     Alfred Kleinhart Park
                 </div>`,
                {"sticky": true}
            );


            var marker_535bc4d6016841ce823ae51ef884773a = L.marker(
                [-36.36372199, 145.409098],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9d354975a687437b868863be75a0d5b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_535bc4d6016841ce823ae51ef884773a.setIcon(icon_9d354975a687437b868863be75a0d5b3);


            marker_535bc4d6016841ce823ae51ef884773a.bindTooltip(
                `<div>
                     Billingham Park
                 </div>`,
                {"sticky": true}
            );


            var marker_dc171fb14aa14a8e90dd82fc519c0a8a = L.marker(
                [-36.39507507, 145.400694],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_be729e698a9647629cf1cdd7dcdabcc9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc171fb14aa14a8e90dd82fc519c0a8a.setIcon(icon_be729e698a9647629cf1cdd7dcdabcc9);


            marker_dc171fb14aa14a8e90dd82fc519c0a8a.bindTooltip(
                `<div>
                     Hillier Park
                 </div>`,
                {"sticky": true}
            );


            var marker_72aaf06ae3894865a37896f4e99c5479 = L.marker(
                [-36.39388949, 145.4141297],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7d7ce7f899bf4c8c862f994196e8fd33 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72aaf06ae3894865a37896f4e99c5479.setIcon(icon_7d7ce7f899bf4c8c862f994196e8fd33);


            marker_72aaf06ae3894865a37896f4e99c5479.bindTooltip(
                `<div>
                     Wilson Park
                 </div>`,
                {"sticky": true}
            );


            var marker_6e5e8dd709bb4cb0b24c649cba62ec17 = L.marker(
                [-36.38835747, 145.4095929],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf5f312cbe9b4fb49257a15e1dec1db3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e5e8dd709bb4cb0b24c649cba62ec17.setIcon(icon_cf5f312cbe9b4fb49257a15e1dec1db3);


            marker_6e5e8dd709bb4cb0b24c649cba62ec17.bindTooltip(
                `<div>
                     O'Connor Park
                 </div>`,
                {"sticky": true}
            );


            var marker_337355ae4abb4979801c4c358299a2d1 = L.marker(
                [-36.40678576, 145.4132096],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e8a206c84d564359b5ac7d46069657b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_337355ae4abb4979801c4c358299a2d1.setIcon(icon_e8a206c84d564359b5ac7d46069657b6);


            marker_337355ae4abb4979801c4c358299a2d1.bindTooltip(
                `<div>
                     Allinga Park
                 </div>`,
                {"sticky": true}
            );


            var marker_52ed562df5704f41a36e59ff674c6de5 = L.marker(
                [-36.39603031, 145.40752619999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e5b626349a0d492a8e72cf35973fc173 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_52ed562df5704f41a36e59ff674c6de5.setIcon(icon_e5b626349a0d492a8e72cf35973fc173);


            marker_52ed562df5704f41a36e59ff674c6de5.bindTooltip(
                `<div>
                     Hanlon Park
                 </div>`,
                {"sticky": true}
            );


            var marker_19b550093a53433b9f67a5cf5719dbc2 = L.marker(
                [-36.438306, 145.236821],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2e73c8586406413fad8d97c1a5adfa2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_19b550093a53433b9f67a5cf5719dbc2.setIcon(icon_2e73c8586406413fad8d97c1a5adfa2c);


            marker_19b550093a53433b9f67a5cf5719dbc2.bindTooltip(
                `<div>
                     Tatura Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5764c642d097484a8bad3fd86a8ca8fa = L.marker(
                [-36.44642057, 145.24020249999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6e83df1c938a4272beab5c06b2f28acb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5764c642d097484a8bad3fd86a8ca8fa.setIcon(icon_6e83df1c938a4272beab5c06b2f28acb);


            marker_5764c642d097484a8bad3fd86a8ca8fa.bindTooltip(
                `<div>
                     Hopkins Street Park
                 </div>`,
                {"sticky": true}
            );


            var marker_fc42a2eed4e544c1bf7b93195d366eae = L.marker(
                [-36.23954663, 145.4341347],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_29be707cbeb541249ee0d25d3020d30b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fc42a2eed4e544c1bf7b93195d366eae.setIcon(icon_29be707cbeb541249ee0d25d3020d30b);


            marker_fc42a2eed4e544c1bf7b93195d366eae.bindTooltip(
                `<div>
                     Larsen Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_8e5ad0f7034b4ed68a14ec9a0f857d2e = L.marker(
                [-36.23968906, 145.43419],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_36552f4bc9d74355af3e50fd3f30f376 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8e5ad0f7034b4ed68a14ec9a0f857d2e.setIcon(icon_36552f4bc9d74355af3e50fd3f30f376);


            marker_8e5ad0f7034b4ed68a14ec9a0f857d2e.bindTooltip(
                `<div>
                     Larsen Res Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_e76d272894cb44c2a7d71093f758ede5 = L.marker(
                [-36.35590778, 145.40703269999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c1f9a54063f1436094fd7bf1d9b3e854 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e76d272894cb44c2a7d71093f758ede5.setIcon(icon_c1f9a54063f1436094fd7bf1d9b3e854);


            marker_e76d272894cb44c2a7d71093f758ede5.bindTooltip(
                `<div>
                     Sabri Drive Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_0714032731494635993c6147fa08a931 = L.marker(
                [-36.349107000000004, 145.4136461],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0809e92d296c4634ae725a11a02d2ab1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0714032731494635993c6147fa08a931.setIcon(icon_0809e92d296c4634ae725a11a02d2ab1);


            marker_0714032731494635993c6147fa08a931.bindTooltip(
                `<div>
                     Hereford Drive Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_4af9de909b484d52ad1186ea8b77c3d1 = L.marker(
                [-36.38655052, 145.3458621],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bf57af4592464602bca190e6678e8fc6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4af9de909b484d52ad1186ea8b77c3d1.setIcon(icon_bf57af4592464602bca190e6678e8fc6);


            marker_4af9de909b484d52ad1186ea8b77c3d1.bindTooltip(
                `<div>
                     Heathmont Park
                 </div>`,
                {"sticky": true}
            );


            var marker_715b6770f6c3484f9f49e1e514845045 = L.marker(
                [-36.42558266, 145.38247280000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_71166968973f4986b490c767fa79ddc3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_715b6770f6c3484f9f49e1e514845045.setIcon(icon_71166968973f4986b490c767fa79ddc3);


            marker_715b6770f6c3484f9f49e1e514845045.bindTooltip(
                `<div>
                     Sevens Creek Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_962587698f3b46c4a808b95725478704 = L.marker(
                [-36.44329567, 145.3818787],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0019f10509f546fd9c6ee15eac5f78b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_962587698f3b46c4a808b95725478704.setIcon(icon_0019f10509f546fd9c6ee15eac5f78b4);


            marker_962587698f3b46c4a808b95725478704.bindTooltip(
                `<div>
                     Riviera Park Estate Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_edc6bbf652a34412863dc4d52ce90c5b = L.marker(
                [-36.39960804, 145.477354],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_14e21325a5bd42ce8ce900b291ca2160 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_edc6bbf652a34412863dc4d52ce90c5b.setIcon(icon_14e21325a5bd42ce8ce900b291ca2160);


            marker_edc6bbf652a34412863dc4d52ce90c5b.bindTooltip(
                `<div>
                     O'Donnell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e19e07c1d65b410cbfd9d1d7f86bd6d8 = L.marker(
                [-36.41386948, 145.4002622],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_67505fba21014a19bb745e7654e4c131 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e19e07c1d65b410cbfd9d1d7f86bd6d8.setIcon(icon_67505fba21014a19bb745e7654e4c131);


            marker_e19e07c1d65b410cbfd9d1d7f86bd6d8.bindTooltip(
                `<div>
                     Ganaway Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_7ff734e5929e49588a146c199c11d311 = L.marker(
                [-36.27786883, 145.2230612],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c33f4100cd124122b90f39f02ebaf376 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ff734e5929e49588a146c199c11d311.setIcon(icon_c33f4100cd124122b90f39f02ebaf376);


            marker_7ff734e5929e49588a146c199c11d311.bindTooltip(
                `<div>
                     Undera Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_a479581f91634fa5a9c7210f739c6579 = L.marker(
                [-36.37202831, 145.1311346],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a4a6b256f2eb499bae9eeb48150a01ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a479581f91634fa5a9c7210f739c6579.setIcon(icon_a4a6b256f2eb499bae9eeb48150a01ee);


            marker_a479581f91634fa5a9c7210f739c6579.bindTooltip(
                `<div>
                     Judd Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7e6cab842e1e477781297f19a22dc104 = L.marker(
                [-36.49037599, 145.338555],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_54f19585dc3343598554e6f82e42ed70 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e6cab842e1e477781297f19a22dc104.setIcon(icon_54f19585dc3343598554e6f82e42ed70);


            marker_7e6cab842e1e477781297f19a22dc104.bindTooltip(
                `<div>
                     Colaura Gardens Toolamba
                 </div>`,
                {"sticky": true}
            );


            var marker_9f18fbb5a99449029c013aa4c71d8a1f = L.marker(
                [-36.36054921, 145.37238969999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_15e03749b2154536a97f84a99ff15d03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9f18fbb5a99449029c013aa4c71d8a1f.setIcon(icon_15e03749b2154536a97f84a99ff15d03);


            marker_9f18fbb5a99449029c013aa4c71d8a1f.bindTooltip(
                `<div>
                      Canterbury Park
                 </div>`,
                {"sticky": true}
            );


            var marker_471d93d005fb4575b0ae795e268b5a76 = L.marker(
                [-36.372217, 145.12987009999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7e16452cb368437dae6538f98000194f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_471d93d005fb4575b0ae795e268b5a76.setIcon(icon_7e16452cb368437dae6538f98000194f);


            marker_471d93d005fb4575b0ae795e268b5a76.bindTooltip(
                `<div>
                     Merrigum Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_c934bd8fd3ff4674af40e9366131fe22 = L.marker(
                [-36.39276442, 145.35316880000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2cfb1ba9e5e64ffcab8f55cfd2990d4b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c934bd8fd3ff4674af40e9366131fe22.setIcon(icon_2cfb1ba9e5e64ffcab8f55cfd2990d4b);


            marker_c934bd8fd3ff4674af40e9366131fe22.bindTooltip(
                `<div>
                     Mooroopna Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_2cd050e1f037410eaf2b2736abb65f13 = L.marker(
                [-36.37328822, 145.3454266],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_35bdd495a64142529811b9d6bb761095 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2cd050e1f037410eaf2b2736abb65f13.setIcon(icon_35bdd495a64142529811b9d6bb761095);


            marker_2cd050e1f037410eaf2b2736abb65f13.bindTooltip(
                `<div>
                     Craigmuir Lake Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9694f46fe3c747f892d14e64b611872d = L.marker(
                [-36.32762637, 145.6853764],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7b970c687d114af69375697deed321fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9694f46fe3c747f892d14e64b611872d.setIcon(icon_7b970c687d114af69375697deed321fe);


            marker_9694f46fe3c747f892d14e64b611872d.bindTooltip(
                `<div>
                     CWA Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_c3a73fd63aee45d6a1f89895ce378945 = L.marker(
                [-36.32769258, 145.6871344],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_16f0d850f4e544a6bf269b47542820dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c3a73fd63aee45d6a1f89895ce378945.setIcon(icon_16f0d850f4e544a6bf269b47542820dd);


            marker_c3a73fd63aee45d6a1f89895ce378945.bindTooltip(
                `<div>
                     CWA Gardens Exercise Equipment
                 </div>`,
                {"sticky": true}
            );


            var marker_6322c53d10734e68ac8a920e68267888 = L.marker(
                [-36.32793094, 145.6848733],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bc82ab58afc7460685487fdfa96a9411 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6322c53d10734e68ac8a920e68267888.setIcon(icon_bc82ab58afc7460685487fdfa96a9411);


            marker_6322c53d10734e68ac8a920e68267888.bindTooltip(
                `<div>
                     CWA Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_0fd87074e22d440184810e09f9370886 = L.marker(
                [-36.36670612, 145.39149809999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_791693fcf1ad4814951571ca8238d4cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0fd87074e22d440184810e09f9370886.setIcon(icon_791693fcf1ad4814951571ca8238d4cb);


            marker_0fd87074e22d440184810e09f9370886.bindTooltip(
                `<div>
                     Stuart Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9655ed5c064f42bfb6032c26ee12a664 = L.marker(
                [-36.44064655, 145.2319323],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9ebdadcbb36e46ff94b9cbcd9fcdbeb4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9655ed5c064f42bfb6032c26ee12a664.setIcon(icon_9ebdadcbb36e46ff94b9cbcd9fcdbeb4);


            marker_9655ed5c064f42bfb6032c26ee12a664.bindTooltip(
                `<div>
                     Robert McTier VC Memorial Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_2cab8e61cb2f4da9be89e35af7f53dde = L.marker(
                [-36.42527964, 145.3994481],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3a5cf2b243cf4dbd96c27f5ead15dbbd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2cab8e61cb2f4da9be89e35af7f53dde.setIcon(icon_3a5cf2b243cf4dbd96c27f5ead15dbbd);


            marker_2cab8e61cb2f4da9be89e35af7f53dde.bindTooltip(
                `<div>
                     Lowanna Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3ab8406bebe64ea490a1ee468387e05d = L.marker(
                [-36.4411819, 145.23277919999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e9123512db1b4a7290f1f2a33ae56030 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ab8406bebe64ea490a1ee468387e05d.setIcon(icon_e9123512db1b4a7290f1f2a33ae56030);


            marker_3ab8406bebe64ea490a1ee468387e05d.bindTooltip(
                `<div>
                     Tatura Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9af7a79192904ab1a6b56b7a72953d78 = L.marker(
                [-36.38817964, 145.3943503],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_caffe112087a4742a1fff0be899eece5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9af7a79192904ab1a6b56b7a72953d78.setIcon(icon_caffe112087a4742a1fff0be899eece5);


            marker_9af7a79192904ab1a6b56b7a72953d78.bindTooltip(
                `<div>
                     Western Park
                 </div>`,
                {"sticky": true}
            );


            var marker_579a154cc24a43158818f560ad201c89 = L.marker(
                [-36.42649043, 145.2312897],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f4d27db51e994061ab6180a69a249465 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_579a154cc24a43158818f560ad201c89.setIcon(icon_f4d27db51e994061ab6180a69a249465);


            marker_579a154cc24a43158818f560ad201c89.bindTooltip(
                `<div>
                     Northlinks Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_43c6723c03e6485fa305a1056d967a1a = L.marker(
                [-36.3541099, 145.3732214],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b74db7aea0a64191864a563238e4357d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43c6723c03e6485fa305a1056d967a1a.setIcon(icon_b74db7aea0a64191864a563238e4357d);


            marker_43c6723c03e6485fa305a1056d967a1a.bindTooltip(
                `<div>
                     Boulevard Estate Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_88c6d43325fe42138d6b017be69a12e1 = L.marker(
                [-36.43137076, 145.40060590000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8c2399d591cc4900b230eaf052fba9b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88c6d43325fe42138d6b017be69a12e1.setIcon(icon_8c2399d591cc4900b230eaf052fba9b3);


            marker_88c6d43325fe42138d6b017be69a12e1.bindTooltip(
                `<div>
                     Pelican Park
                 </div>`,
                {"sticky": true}
            );


            var marker_fc31ee8b1f2e46b2bea8f6b3dfc30728 = L.marker(
                [-36.61662206, 145.21794599999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4eef5b634df24e86a31df3ecd6073712 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fc31ee8b1f2e46b2bea8f6b3dfc30728.setIcon(icon_4eef5b634df24e86a31df3ecd6073712);


            marker_fc31ee8b1f2e46b2bea8f6b3dfc30728.bindTooltip(
                `<div>
                     Murchison Riverbank Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_0b500cf93d754e348a6e6e82a059993d = L.marker(
                [-36.37735001, 145.40682900000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5e5c51b469764c57804c24d558413521 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b500cf93d754e348a6e6e82a059993d.setIcon(icon_5e5c51b469764c57804c24d558413521);


            marker_0b500cf93d754e348a6e6e82a059993d.bindTooltip(
                `<div>
                     Deakin Park
                 </div>`,
                {"sticky": true}
            );


            var marker_0f5037306b724d7ea5d2e7aca347a643 = L.marker(
                [-36.44159126, 145.2196267],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_98534814637f443bb68c140d9fa756aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0f5037306b724d7ea5d2e7aca347a643.setIcon(icon_98534814637f443bb68c140d9fa756aa);


            marker_0f5037306b724d7ea5d2e7aca347a643.bindTooltip(
                `<div>
                     Joe Ford Drive Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_abda2e499e9c44ee8bc063f6da66be02 = L.marker(
                [-36.35652501, 145.3885315],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_943c00f2a7c94558b18696452500940a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_abda2e499e9c44ee8bc063f6da66be02.setIcon(icon_943c00f2a7c94558b18696452500940a);


            marker_abda2e499e9c44ee8bc063f6da66be02.bindTooltip(
                `<div>
                     Wanganui Park
                 </div>`,
                {"sticky": true}
            );


            var marker_44142a470d5244a496f53596aac47214 = L.marker(
                [-36.38668803, 145.397497],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ca519c8ff5614c50baa002018c85d6a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_44142a470d5244a496f53596aac47214.setIcon(icon_ca519c8ff5614c50baa002018c85d6a2);


            marker_44142a470d5244a496f53596aac47214.bindTooltip(
                `<div>
                     John Pick Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d4301430a79d44768cccb039567a937e = L.marker(
                [-36.39506598, 145.35320480000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2dde894012da464490c0a0ab2b5f6e45 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4301430a79d44768cccb039567a937e.setIcon(icon_2dde894012da464490c0a0ab2b5f6e45);


            marker_d4301430a79d44768cccb039567a937e.bindTooltip(
                `<div>
                     Mooroopna Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a65ebaf71e94491eb5eb12dc65238e65 = L.marker(
                [-36.39574405, 145.419388],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_06a7f768db7e40cc8ed48580a8205653 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a65ebaf71e94491eb5eb12dc65238e65.setIcon(icon_06a7f768db7e40cc8ed48580a8205653);


            marker_a65ebaf71e94491eb5eb12dc65238e65.bindTooltip(
                `<div>
                     Ducat Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_54dcb8b2fa0a492487493cd3f65efaf6 = L.marker(
                [-36.38074127, 145.4008854],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2367ca2c79e54f6ea13217bb16fc48bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54dcb8b2fa0a492487493cd3f65efaf6.setIcon(icon_2367ca2c79e54f6ea13217bb16fc48bb);


            marker_54dcb8b2fa0a492487493cd3f65efaf6.bindTooltip(
                `<div>
                     Maude Street Mall
                 </div>`,
                {"sticky": true}
            );


            var marker_c316ca31135c430ab31459ccc0e9db81 = L.marker(
                [-36.38510705, 145.3803608],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3b74b283a362471bb8eefa60092da4fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c316ca31135c430ab31459ccc0e9db81.setIcon(icon_3b74b283a362471bb8eefa60092da4fe);


            marker_c316ca31135c430ab31459ccc0e9db81.bindTooltip(
                `<div>
                     KidsTown Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_140cd8e2c70e46ceb9c71516fe98550f = L.marker(
                [-36.38759724, 145.39454619999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ef8872e0e66e40e081c1d7000548f88b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_140cd8e2c70e46ceb9c71516fe98550f.setIcon(icon_ef8872e0e66e40e081c1d7000548f88b);


            marker_140cd8e2c70e46ceb9c71516fe98550f.bindTooltip(
                `<div>
                     All Abilities Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ceb45053a56f4d81ab136721e745b248 = L.marker(
                [-36.38706588, 145.3972663],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_de698b31e4864e65aa1c8b6d06e4c248 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ceb45053a56f4d81ab136721e745b248.setIcon(icon_de698b31e4864e65aa1c8b6d06e4c248);


            marker_ceb45053a56f4d81ab136721e745b248.bindTooltip(
                `<div>
                     Victoria Park Lake Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_00a6b26336ff435b942fe867a5668117 = L.marker(
                [-36.39442569, 145.3543483],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_067d393532524747ba3c5964b8d0ff98 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00a6b26336ff435b942fe867a5668117.setIcon(icon_067d393532524747ba3c5964b8d0ff98);


            marker_00a6b26336ff435b942fe867a5668117.bindTooltip(
                `<div>
                     Ferrari Park
                 </div>`,
                {"sticky": true}
            );


            var marker_52a124abddf342ebbda20ef4b237bb98 = L.marker(
                [-36.786952, 145.151046],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2a54faf87ff1465e91752406b6c7792d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_52a124abddf342ebbda20ef4b237bb98.setIcon(icon_2a54faf87ff1465e91752406b6c7792d);


            marker_52a124abddf342ebbda20ef4b237bb98.bindTooltip(
                `<div>
                     Blayney Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d7e755fc5a7e4ac98dd3b10459e2f65e = L.marker(
                [-36.786226, 145.14903],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e0fdede122fc474591173797ce33d961 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7e755fc5a7e4ac98dd3b10459e2f65e.setIcon(icon_e0fdede122fc474591173797ce33d961);


            marker_d7e755fc5a7e4ac98dd3b10459e2f65e.bindTooltip(
                `<div>
                     Buckley Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1752f226897e41d0a59d2ace89af5ac6 = L.marker(
                [-36.642494, 145.543081],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4dbd89af51dc4816bed83ae4fcfc0bac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1752f226897e41d0a59d2ace89af5ac6.setIcon(icon_4dbd89af51dc4816bed83ae4fcfc0bac);


            marker_1752f226897e41d0a59d2ace89af5ac6.bindTooltip(
                `<div>
                     Moglonemby Hall Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_efcc329f03b04eb593c067ecd22704bd = L.marker(
                [-36.897393, 145.230175],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bc74137edab141e59961951d0d87fe6c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_efcc329f03b04eb593c067ecd22704bd.setIcon(icon_bc74137edab141e59961951d0d87fe6c);


            marker_efcc329f03b04eb593c067ecd22704bd.bindTooltip(
                `<div>
                     Jubilee Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_46ed61dc46ed4ac48d8a9f93a5083ba7 = L.marker(
                [-36.752315, 145.573133],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6cedd3fb746b46cb9ef2261cba00c30f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_46ed61dc46ed4ac48d8a9f93a5083ba7.setIcon(icon_6cedd3fb746b46cb9ef2261cba00c30f);


            marker_46ed61dc46ed4ac48d8a9f93a5083ba7.bindTooltip(
                `<div>
                     Euroa Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_66c5e0f1cb7e4fb38661f921bcc2893b = L.marker(
                [-36.636635, 145.718104],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ebab58618a364bbe8df9d5718897c0c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66c5e0f1cb7e4fb38661f921bcc2893b.setIcon(icon_ebab58618a364bbe8df9d5718897c0c3);


            marker_66c5e0f1cb7e4fb38661f921bcc2893b.bindTooltip(
                `<div>
                     Violet Town Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6756138940c14165b5b5f2df4679e942 = L.marker(
                [-36.636072, 145.716663],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4d416735ef344ee1bc57f469795af66f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6756138940c14165b5b5f2df4679e942.setIcon(icon_4d416735ef344ee1bc57f469795af66f);


            marker_6756138940c14165b5b5f2df4679e942.bindTooltip(
                `<div>
                     Violet Town Lions Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9e1f6775d6db478fa782ff6b2602582b = L.marker(
                [-36.782039, 145.157388],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_90f0ac677918446cb59ec2f5cc49a911 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e1f6775d6db478fa782ff6b2602582b.setIcon(icon_90f0ac677918446cb59ec2f5cc49a911);


            marker_9e1f6775d6db478fa782ff6b2602582b.bindTooltip(
                `<div>
                     Nagambie Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8e2ec91127e349df9f24f688001c9365 = L.marker(
                [-36.804674, 145.426609],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3c94c3be29da458eb9d2ed2031933ff3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8e2ec91127e349df9f24f688001c9365.setIcon(icon_3c94c3be29da458eb9d2ed2031933ff3);


            marker_8e2ec91127e349df9f24f688001c9365.bindTooltip(
                `<div>
                     Longwood Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_125aa1c1cd714ac383b3c83f51bd0ce5 = L.marker(
                [-36.793434, 145.147919],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5b014aa42a074145b6b908ca16edd4d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_125aa1c1cd714ac383b3c83f51bd0ce5.setIcon(icon_5b014aa42a074145b6b908ca16edd4d9);


            marker_125aa1c1cd714ac383b3c83f51bd0ce5.bindTooltip(
                `<div>
                     Nagambie Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9a570829c6ef4a9bbd3d82fdeeab94e0 = L.marker(
                [-36.850099, 145.73898399999996],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9a20b2a824744e3ea96158ea31049b91 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9a570829c6ef4a9bbd3d82fdeeab94e0.setIcon(icon_9a20b2a824744e3ea96158ea31049b91);


            marker_9a570829c6ef4a9bbd3d82fdeeab94e0.bindTooltip(
                `<div>
                     Strathbogie Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_32d28934f5ff496aaf08ca4d680b2728 = L.marker(
                [-36.635462, 145.72118],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9424d1de1ea14a57a5345ecfd02fbaa0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_32d28934f5ff496aaf08ca4d680b2728.setIcon(icon_9424d1de1ea14a57a5345ecfd02fbaa0);


            marker_32d28934f5ff496aaf08ca4d680b2728.bindTooltip(
                `<div>
                     Violet Town Recreation Reserve East Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_37b941e55ac64513ba8802c1d4176833 = L.marker(
                [-36.634512, 145.718727],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0f2ce6be929340e18a6b8b8e26cba8bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37b941e55ac64513ba8802c1d4176833.setIcon(icon_0f2ce6be929340e18a6b8b8e26cba8bf);


            marker_37b941e55ac64513ba8802c1d4176833.bindTooltip(
                `<div>
                     Violet Town Recreation Reserve West Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f1a39a3989904c21acb315f7cf723b49 = L.marker(
                [-36.879924, 145.528681],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9529a05cb17b4f8f89fb10d7746cc718 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f1a39a3989904c21acb315f7cf723b49.setIcon(icon_9529a05cb17b4f8f89fb10d7746cc718);


            marker_f1a39a3989904c21acb315f7cf723b49.bindTooltip(
                `<div>
                     Creightons Creek Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f7c41d5411f3473d9639c301cf6104ba = L.marker(
                [-36.778513, 145.149148],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_621193652105433a9d048b143598ee4a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f7c41d5411f3473d9639c301cf6104ba.setIcon(icon_621193652105433a9d048b143598ee4a);


            marker_f7c41d5411f3473d9639c301cf6104ba.bindTooltip(
                `<div>
                     River Street Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b88733bec3ff42a2b0bdbcc3d1f3c55e = L.marker(
                [-36.751051, 145.572811],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d107ec0aab0c4502acd9a2d0a34125d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b88733bec3ff42a2b0bdbcc3d1f3c55e.setIcon(icon_d107ec0aab0c4502acd9a2d0a34125d4);


            marker_b88733bec3ff42a2b0bdbcc3d1f3c55e.bindTooltip(
                `<div>
                     Euroa Rotary Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_50e8310e50dc494996e99a20478042e1 = L.marker(
                [-36.751455, 145.573195],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4aefc257dbd34cb881f5096ca719c1d2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_50e8310e50dc494996e99a20478042e1.setIcon(icon_4aefc257dbd34cb881f5096ca719c1d2);


            marker_50e8310e50dc494996e99a20478042e1.bindTooltip(
                `<div>
                     Euroa Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3765a25c9f0f4145b7a7b5e621bf3cd9 = L.marker(
                [-36.901297, 145.237817],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_642c38e2cc5a4505a35cd5a84853e781 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3765a25c9f0f4145b7a7b5e621bf3cd9.setIcon(icon_642c38e2cc5a4505a35cd5a84853e781);


            marker_3765a25c9f0f4145b7a7b5e621bf3cd9.bindTooltip(
                `<div>
                     Avenel Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7e3b0461e1ec4862ae1c6cc043689279 = L.marker(
                [-36.756497, 145.568806],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a7036655ef784f7686faab2b29fb083f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e3b0461e1ec4862ae1c6cc043689279.setIcon(icon_a7036655ef784f7686faab2b29fb083f);


            marker_7e3b0461e1ec4862ae1c6cc043689279.bindTooltip(
                `<div>
                     Euroa Lions Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e6cad0d5625449729941654cd4e81a5c = L.marker(
                [-36.746804, 145.56609599999996],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_710e8c28ce854fc08311129bbd623986 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e6cad0d5625449729941654cd4e81a5c.setIcon(icon_710e8c28ce854fc08311129bbd623986);


            marker_e6cad0d5625449729941654cd4e81a5c.bindTooltip(
                `<div>
                     Euroa Rotary Bicentennial Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_37e6a83f171f41e88e8fec953ad81151 = L.marker(
                [-36.6359, 145.722],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_19b617dd9f2a4720ad97b2f0b1e151e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37e6a83f171f41e88e8fec953ad81151.setIcon(icon_19b617dd9f2a4720ad97b2f0b1e151e0);


            marker_37e6a83f171f41e88e8fec953ad81151.bindTooltip(
                `<div>
                     Violet Town Recreation Reserve Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e7032313ce354c4698ee3dafbf90c8a5 = L.marker(
                [-37.790419614, 145.11452704],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7e7602884ec246cb9904e9f84198b20c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7032313ce354c4698ee3dafbf90c8a5.setIcon(icon_7e7602884ec246cb9904e9f84198b20c);


            marker_e7032313ce354c4698ee3dafbf90c8a5.bindTooltip(
                `<div>
                     Acheron Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a3948a86644f4d9f9423586571028605 = L.marker(
                [-37.787738058, 145.168614683],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_37073eece9394bb4a704abe150636c05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a3948a86644f4d9f9423586571028605.setIcon(icon_37073eece9394bb4a704abe150636c05);


            marker_a3948a86644f4d9f9423586571028605.bindTooltip(
                `<div>
                     Aintree Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_129a7b966de34f76a5d27ee1a6c679de = L.marker(
                [-37.7751094, 145.180724185],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_92b6aeaa59b043e9bc49a7488a9f1fed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_129a7b966de34f76a5d27ee1a6c679de.setIcon(icon_92b6aeaa59b043e9bc49a7488a9f1fed);


            marker_129a7b966de34f76a5d27ee1a6c679de.bindTooltip(
                `<div>
                     Allara Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a1f6b006dcce44039b19d2e29dc5dbbe = L.marker(
                [-37.775784611, 145.109228004],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_90d5cb5c9fb545f7a3be7434d07ee80f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a1f6b006dcce44039b19d2e29dc5dbbe.setIcon(icon_90d5cb5c9fb545f7a3be7434d07ee80f);


            marker_a1f6b006dcce44039b19d2e29dc5dbbe.bindTooltip(
                `<div>
                     Anthony Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_cf7906ddaeeb4df2b268d08b73a69f73 = L.marker(
                [-37.772343131999996, 145.161341484],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_345d9718512c4ce4a42a28f62096ea16 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cf7906ddaeeb4df2b268d08b73a69f73.setIcon(icon_345d9718512c4ce4a42a28f62096ea16);


            marker_cf7906ddaeeb4df2b268d08b73a69f73.bindTooltip(
                `<div>
                     Apple Blossom Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f55ccd9aead744eca3954a24f6791a65 = L.marker(
                [-37.802164182, 145.176734092],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b9c60267473f453788e25b83432ba0bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f55ccd9aead744eca3954a24f6791a65.setIcon(icon_b9c60267473f453788e25b83432ba0bf);


            marker_f55ccd9aead744eca3954a24f6791a65.bindTooltip(
                `<div>
                     Aranga Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8ebb8cec082646cba36482091dc6312b = L.marker(
                [-37.798901676999996, 145.17119547299998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8a5d3dce92854dab9aeebcc07aedb1a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ebb8cec082646cba36482091dc6312b.setIcon(icon_8a5d3dce92854dab9aeebcc07aedb1a8);


            marker_8ebb8cec082646cba36482091dc6312b.bindTooltip(
                `<div>
                     Argyle Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_11c3311c612440ac8053793037435f2b = L.marker(
                [-37.784991223, 145.159038319],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2ab3f8aac62443a09a084a1aab425171 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_11c3311c612440ac8053793037435f2b.setIcon(icon_2ab3f8aac62443a09a084a1aab425171);


            marker_11c3311c612440ac8053793037435f2b.bindTooltip(
                `<div>
                     Dryden Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_97434ed896f34b7393c2f214df4c3616 = L.marker(
                [-37.800964339000004, 145.180379979],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_050148cb3ab94afa851de18e1556c2ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_97434ed896f34b7393c2f214df4c3616.setIcon(icon_050148cb3ab94afa851de18e1556c2ef);


            marker_97434ed896f34b7393c2f214df4c3616.bindTooltip(
                `<div>
                     Astelot Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_dc823d868e6a43d58ab0ae6c66ed3de8 = L.marker(
                [-37.770241694, 145.112585435],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2eff24158a834ec899a7c8c135f0a9d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc823d868e6a43d58ab0ae6c66ed3de8.setIcon(icon_2eff24158a834ec899a7c8c135f0a9d9);


            marker_dc823d868e6a43d58ab0ae6c66ed3de8.bindTooltip(
                `<div>
                     Balmoral Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_830933c7cf3442548bc7c7e977100674 = L.marker(
                [-37.797433397, 145.1529424],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_51623cc221874cc59a96023f91eff320 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_830933c7cf3442548bc7c7e977100674.setIcon(icon_51623cc221874cc59a96023f91eff320);


            marker_830933c7cf3442548bc7c7e977100674.bindTooltip(
                `<div>
                     Thea Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_589c5451194d48aa8b240278a46d1019 = L.marker(
                [-37.759029733, 145.154709907],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fb99da4c16d64822ba88d06d7d305e3f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_589c5451194d48aa8b240278a46d1019.setIcon(icon_fb99da4c16d64822ba88d06d7d305e3f);


            marker_589c5451194d48aa8b240278a46d1019.bindTooltip(
                `<div>
                     Bebs Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1e0936be608f4f81a4304c8f84935f12 = L.marker(
                [-37.791444019000004, 145.16635006799999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1f99a8534b1c4fd39917b5af27096679 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1e0936be608f4f81a4304c8f84935f12.setIcon(icon_1f99a8534b1c4fd39917b5af27096679);


            marker_1e0936be608f4f81a4304c8f84935f12.bindTooltip(
                `<div>
                     Beverley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ca25bab27fb54379ae7815d43d46fdb7 = L.marker(
                [-37.75748066, 145.10920780200001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_75d639310ae24df68191eb46f749313b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca25bab27fb54379ae7815d43d46fdb7.setIcon(icon_75d639310ae24df68191eb46f749313b);


            marker_ca25bab27fb54379ae7815d43d46fdb7.bindTooltip(
                `<div>
                     Bimbadeen Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3bb34be5553c43b7b7c9a43d3812e1dd = L.marker(
                [-37.780763461999996, 145.121456501],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_14a173b58e3344ac98523431ea39eb30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3bb34be5553c43b7b7c9a43d3812e1dd.setIcon(icon_14a173b58e3344ac98523431ea39eb30);


            marker_3bb34be5553c43b7b7c9a43d3812e1dd.bindTooltip(
                `<div>
                     Brendan Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c67d994db8714af0a4c06743b9006fe9 = L.marker(
                [-37.77251307, 145.071932876],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02638f2c4b6c4cc98843ec6b3ff31360 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c67d994db8714af0a4c06743b9006fe9.setIcon(icon_02638f2c4b6c4cc98843ec6b3ff31360);


            marker_c67d994db8714af0a4c06743b9006fe9.bindTooltip(
                `<div>
                     Bulleen Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3d03ceb307fb4a05ae2784429f51bb5a = L.marker(
                [-37.792880196, 145.147515553],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fde61ab9c5124c78b74c83f89e1058d2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d03ceb307fb4a05ae2784429f51bb5a.setIcon(icon_fde61ab9c5124c78b74c83f89e1058d2);


            marker_3d03ceb307fb4a05ae2784429f51bb5a.bindTooltip(
                `<div>
                     Bullen Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_96b666eb443c4de893eef1b4246a43fd = L.marker(
                [-37.779434089, 145.119530777],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e6916693c2374f918e4167ae3bb80619 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_96b666eb443c4de893eef1b4246a43fd.setIcon(icon_e6916693c2374f918e4167ae3bb80619);


            marker_96b666eb443c4de893eef1b4246a43fd.bindTooltip(
                `<div>
                     Burgundy Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ca8190c74a344ca1801deb351027a8ef = L.marker(
                [-37.780245461, 145.179848877],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b3cf6a4ef28547e5881102b4022fbc9c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca8190c74a344ca1801deb351027a8ef.setIcon(icon_b3cf6a4ef28547e5881102b4022fbc9c);


            marker_ca8190c74a344ca1801deb351027a8ef.bindTooltip(
                `<div>
                     Cameron Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c2f17494ca114b728f3dabc8ec1d1938 = L.marker(
                [-37.789463138, 145.118381761],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f020cfaf044943c9bbf7bae3a5550389 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c2f17494ca114b728f3dabc8ec1d1938.setIcon(icon_f020cfaf044943c9bbf7bae3a5550389);


            marker_c2f17494ca114b728f3dabc8ec1d1938.bindTooltip(
                `<div>
                     Carawatha Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4e9c1d1859bb42df9be256e7f6b2e88a = L.marker(
                [-37.780690306, 145.174267601],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_45723289bb9f4e128cee2a77baa07c57 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4e9c1d1859bb42df9be256e7f6b2e88a.setIcon(icon_45723289bb9f4e128cee2a77baa07c57);


            marker_4e9c1d1859bb42df9be256e7f6b2e88a.bindTooltip(
                `<div>
                     Cat Jump Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8bc27860ca624ce3b6ed9830f9bf0dbd = L.marker(
                [-37.786780416999996, 145.15465830899998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_637ae38b9d5e4f8291aba1ed382bab82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8bc27860ca624ce3b6ed9830f9bf0dbd.setIcon(icon_637ae38b9d5e4f8291aba1ed382bab82);


            marker_8bc27860ca624ce3b6ed9830f9bf0dbd.bindTooltip(
                `<div>
                     Celeste Reserve East Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6e3b334f1b5b4f51b6f16af0ce70a369 = L.marker(
                [-37.786254932, 145.150177394],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1cae06bf90f547a1adeca4469c625695 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e3b334f1b5b4f51b6f16af0ce70a369.setIcon(icon_1cae06bf90f547a1adeca4469c625695);


            marker_6e3b334f1b5b4f51b6f16af0ce70a369.bindTooltip(
                `<div>
                     Celeste Reserve West Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3e806a6a90854830a0650d7ec8a125d3 = L.marker(
                [-37.786828147, 145.165607387],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1ca42a9cbe824cb28c3921ddebf39c23 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3e806a6a90854830a0650d7ec8a125d3.setIcon(icon_1ca42a9cbe824cb28c3921ddebf39c23);


            marker_3e806a6a90854830a0650d7ec8a125d3.bindTooltip(
                `<div>
                     Carisbrook Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d7033df564564546bfd81c56aa0e1392 = L.marker(
                [-37.766757728, 145.238262093],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_612444213e684da9899ecae20c4b9169 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7033df564564546bfd81c56aa0e1392.setIcon(icon_612444213e684da9899ecae20c4b9169);


            marker_d7033df564564546bfd81c56aa0e1392.bindTooltip(
                `<div>
                     Colman Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_989a81ca35114faead18720e37f2f5ef = L.marker(
                [-37.791205519, 145.139326133],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c428b739b1b84324a5a031f955441a13 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_989a81ca35114faead18720e37f2f5ef.setIcon(icon_c428b739b1b84324a5a031f955441a13);


            marker_989a81ca35114faead18720e37f2f5ef.bindTooltip(
                `<div>
                     Coolabah Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8651518756104fe5832054975413b4b5 = L.marker(
                [-37.759548426, 145.105011964],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_640a71b1b38c4c1e9dec3e4a2b25a5e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8651518756104fe5832054975413b4b5.setIcon(icon_640a71b1b38c4c1e9dec3e4a2b25a5e6);


            marker_8651518756104fe5832054975413b4b5.bindTooltip(
                `<div>
                     Corroboree Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_81b3ab0365d8413f9544b10fbd78dab3 = L.marker(
                [-37.774265579, 145.121577274],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1e1fc842b8934afc99409335eebf9e20 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_81b3ab0365d8413f9544b10fbd78dab3.setIcon(icon_1e1fc842b8934afc99409335eebf9e20);


            marker_81b3ab0365d8413f9544b10fbd78dab3.bindTooltip(
                `<div>
                     Crawford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5cefb99397224ac8af6fa6bd62f1bbbd = L.marker(
                [-37.784858261, 145.176497349],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_768c92debc5c4214b2c6afb79eaf6be4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5cefb99397224ac8af6fa6bd62f1bbbd.setIcon(icon_768c92debc5c4214b2c6afb79eaf6be4);


            marker_5cefb99397224ac8af6fa6bd62f1bbbd.bindTooltip(
                `<div>
                     Daniel Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_de7acf3e51094c7ba9a762d95a10e974 = L.marker(
                [-37.793899421999996, 145.119037073],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5a04a8b527d34b80b6a223c9d9865626 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de7acf3e51094c7ba9a762d95a10e974.setIcon(icon_5a04a8b527d34b80b6a223c9d9865626);


            marker_de7acf3e51094c7ba9a762d95a10e974.bindTooltip(
                `<div>
                     Davis Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_61b1a60cee2441a488d2b93324adb628 = L.marker(
                [-37.785116684, 145.149221519],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b4dfe582346c4d94b76cf8f50be3d80a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_61b1a60cee2441a488d2b93324adb628.setIcon(icon_b4dfe582346c4d94b76cf8f50be3d80a);


            marker_61b1a60cee2441a488d2b93324adb628.bindTooltip(
                `<div>
                     Jocelyn Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b1871e0f6ff144cbb731cccf9a261b67 = L.marker(
                [-37.764521004, 145.125059618],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5f8f9e0c0e6f4d888afd31c0f8baf937 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b1871e0f6ff144cbb731cccf9a261b67.setIcon(icon_5f8f9e0c0e6f4d888afd31c0f8baf937);


            marker_b1871e0f6ff144cbb731cccf9a261b67.bindTooltip(
                `<div>
                     Dellfield Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1c2a95954226433fa80dd03e7f9551f6 = L.marker(
                [-37.773849299, 145.21762268],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_94f1576b5da443dd9a1c30a5cbee7f50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1c2a95954226433fa80dd03e7f9551f6.setIcon(icon_94f1576b5da443dd9a1c30a5cbee7f50);


            marker_1c2a95954226433fa80dd03e7f9551f6.bindTooltip(
                `<div>
                     Domeney Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_08e2cb9316164c97a39f37f8c0f0a749 = L.marker(
                [-37.788218468000004, 145.152052893],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bfadef7b358b41a689a503b38b20aabc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_08e2cb9316164c97a39f37f8c0f0a749.setIcon(icon_bfadef7b358b41a689a503b38b20aabc);


            marker_08e2cb9316164c97a39f37f8c0f0a749.bindTooltip(
                `<div>
                     Doncaster Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_470f97009aa34375b2570bbb135a3e5d = L.marker(
                [-37.796130247, 145.17640408399998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9f705bbb3b154c75a57e1df83a8afb47 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_470f97009aa34375b2570bbb135a3e5d.setIcon(icon_9f705bbb3b154c75a57e1df83a8afb47);


            marker_470f97009aa34375b2570bbb135a3e5d.bindTooltip(
                `<div>
                     Donvale Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3e07f73b470d4ad1b1ef475bf01a5592 = L.marker(
                [-37.731210653000005, 145.27286425100002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bd513848c4a74def84021b54e05a2b9a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3e07f73b470d4ad1b1ef475bf01a5592.setIcon(icon_bd513848c4a74def84021b54e05a2b9a);


            marker_3e07f73b470d4ad1b1ef475bf01a5592.bindTooltip(
                `<div>
                     Dudley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d43bb015328e4c34a261e7684673973f = L.marker(
                [-37.762398415, 145.08753863200002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_32a0d68b695a4fa58a323b4b9196054f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d43bb015328e4c34a261e7684673973f.setIcon(icon_32a0d68b695a4fa58a323b4b9196054f);


            marker_d43bb015328e4c34a261e7684673973f.bindTooltip(
                `<div>
                     Dumossa Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d5bfa415fa4f444bbc49acf9c726cab8 = L.marker(
                [-37.79449498, 145.12422181899998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ec8e95d0f25541a69741226d9e415662 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5bfa415fa4f444bbc49acf9c726cab8.setIcon(icon_ec8e95d0f25541a69741226d9e415662);


            marker_d5bfa415fa4f444bbc49acf9c726cab8.bindTooltip(
                `<div>
                     Eildon Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_675e3858023a4634ac27e28eb57d447c = L.marker(
                [-37.78312175, 145.177945746],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9bf02a4f45394a6c8ce1586d7832d23a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_675e3858023a4634ac27e28eb57d447c.setIcon(icon_9bf02a4f45394a6c8ce1586d7832d23a);


            marker_675e3858023a4634ac27e28eb57d447c.bindTooltip(
                `<div>
                     Fahey Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fb82fea9fe424f23849c4c3242573aad = L.marker(
                [-37.753371444, 145.170206399],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9ff4d57a59c44c61b629d9fef29e06ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fb82fea9fe424f23849c4c3242573aad.setIcon(icon_9ff4d57a59c44c61b629d9fef29e06ea);


            marker_fb82fea9fe424f23849c4c3242573aad.bindTooltip(
                `<div>
                     Fernlea Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c85d11a5bb5043f9acde12de01d89bd3 = L.marker(
                [-37.76076307, 145.15750568],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d2e38ce04bb24de890b58daa7ec935d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c85d11a5bb5043f9acde12de01d89bd3.setIcon(icon_d2e38ce04bb24de890b58daa7ec935d9);


            marker_c85d11a5bb5043f9acde12de01d89bd3.bindTooltip(
                `<div>
                     Fielding Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f424ac07497642ecb97f3f0dfd9d7f32 = L.marker(
                [-37.753848399, 145.115772266],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0c0dd19d16164f059ee1d4fb9f2ece0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f424ac07497642ecb97f3f0dfd9d7f32.setIcon(icon_0c0dd19d16164f059ee1d4fb9f2ece0c);


            marker_f424ac07497642ecb97f3f0dfd9d7f32.bindTooltip(
                `<div>
                     Finns Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0926d1ff17634a668cf3553efa0b4fac = L.marker(
                [-37.78123201, 145.149919162],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_350349010f76488b8176ded2936fba7f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0926d1ff17634a668cf3553efa0b4fac.setIcon(icon_350349010f76488b8176ded2936fba7f);


            marker_0926d1ff17634a668cf3553efa0b4fac.bindTooltip(
                `<div>
                     Dehnert Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d791107ccb364e33b5468d4cb566fb0d = L.marker(
                [-37.764977006, 145.101143069],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9d886d5728bd474cb8d84602b9539f19 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d791107ccb364e33b5468d4cb566fb0d.setIcon(icon_9d886d5728bd474cb8d84602b9539f19);


            marker_d791107ccb364e33b5468d4cb566fb0d.bindTooltip(
                `<div>
                     Gertrude Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_558c0f4bed3540acb9252e034fdad4a6 = L.marker(
                [-37.758578263000004, 145.116482536],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d84853e9364b4039be1d8137c537adb0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_558c0f4bed3540acb9252e034fdad4a6.setIcon(icon_d84853e9364b4039be1d8137c537adb0);


            marker_558c0f4bed3540acb9252e034fdad4a6.bindTooltip(
                `<div>
                     Paterson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f6394b7847074effac9e5a43a3460ed1 = L.marker(
                [-37.783371099, 145.106973627],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fe14afdfc0ec4e438ec4266eb130e4ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f6394b7847074effac9e5a43a3460ed1.setIcon(icon_fe14afdfc0ec4e438ec4266eb130e4ae);


            marker_f6394b7847074effac9e5a43a3460ed1.bindTooltip(
                `<div>
                     Glenda Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d56d3cef4a664151bad51f206bf23f3c = L.marker(
                [-37.765402868, 145.09333287],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8cc38868052b432f89399fc8812e217e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d56d3cef4a664151bad51f206bf23f3c.setIcon(icon_8cc38868052b432f89399fc8812e217e);


            marker_d56d3cef4a664151bad51f206bf23f3c.bindTooltip(
                `<div>
                     Grant Olson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4ecffb517cb846e0af097eaaae04af7c = L.marker(
                [-37.766938168, 145.16246301299998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e8caa530ba224e3f9cfd8a6b9cc28f10 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4ecffb517cb846e0af097eaaae04af7c.setIcon(icon_e8caa530ba224e3f9cfd8a6b9cc28f10);


            marker_4ecffb517cb846e0af097eaaae04af7c.bindTooltip(
                `<div>
                     Bronte Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_163323d8535c4ea2b664d6dec1eb88d6 = L.marker(
                [-37.780827139, 145.140698654],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b3863194f69844f88efe5a338ed6d14d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_163323d8535c4ea2b664d6dec1eb88d6.setIcon(icon_b3863194f69844f88efe5a338ed6d14d);


            marker_163323d8535c4ea2b664d6dec1eb88d6.bindTooltip(
                `<div>
                     Grover Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_128c92fd252445f2bac58a87a9a4a0fa = L.marker(
                [-37.794754386, 145.138685137],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_07750d443d244d91a4b729f553720a29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_128c92fd252445f2bac58a87a9a4a0fa.setIcon(icon_07750d443d244d91a4b729f553720a29);


            marker_128c92fd252445f2bac58a87a9a4a0fa.bindTooltip(
                `<div>
                     Hampshire Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_70cda897eefd4bdab871d91b8e3c828a = L.marker(
                [-37.791043646999995, 145.124324551],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_91f3deaad797427fb009c72e6c27abf7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_70cda897eefd4bdab871d91b8e3c828a.setIcon(icon_91f3deaad797427fb009c72e6c27abf7);


            marker_70cda897eefd4bdab871d91b8e3c828a.bindTooltip(
                `<div>
                     Hanke Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_37a6d27eec624273a81aa2dec5d4630e = L.marker(
                [-37.76673471, 145.17478754],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_56379bec8f58406b9414b445b1f9b224 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37a6d27eec624273a81aa2dec5d4630e.setIcon(icon_56379bec8f58406b9414b445b1f9b224);


            marker_37a6d27eec624273a81aa2dec5d4630e.bindTooltip(
                `<div>
                     Happy Valley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6d9cbb5cb8d0487c9413be09c6243c12 = L.marker(
                [-37.775090254, 145.09858440899998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b45ec51bb121426fbe3631c3ce7a7103 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6d9cbb5cb8d0487c9413be09c6243c12.setIcon(icon_b45ec51bb121426fbe3631c3ce7a7103);


            marker_6d9cbb5cb8d0487c9413be09c6243c12.bindTooltip(
                `<div>
                     Harold Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7d8038c8a6824f8883545d51732ee032 = L.marker(
                [-37.759338187, 145.113543145],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b02ab20075ca455fadfdf6c103101bce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7d8038c8a6824f8883545d51732ee032.setIcon(icon_b02ab20075ca455fadfdf6c103101bce);


            marker_7d8038c8a6824f8883545d51732ee032.bindTooltip(
                `<div>
                     Heath Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_55514aa20c2b4bf087d63be0e559c41f = L.marker(
                [-37.769154162, 145.135886984],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_551bc0ccd87147d28b168abe57a94fb5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_55514aa20c2b4bf087d63be0e559c41f.setIcon(icon_551bc0ccd87147d28b168abe57a94fb5);


            marker_55514aa20c2b4bf087d63be0e559c41f.bindTooltip(
                `<div>
                     Hillcroft Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_753898d265694decbca0773afa6cea75 = L.marker(
                [-37.757121798, 145.16390252600002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6786e3c08b0341b381439b21716fc1a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_753898d265694decbca0773afa6cea75.setIcon(icon_6786e3c08b0341b381439b21716fc1a2);


            marker_753898d265694decbca0773afa6cea75.bindTooltip(
                `<div>
                     Hollywood Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_8e954fee85b14283af6d0c3727ccdac6 = L.marker(
                [-37.767262005999996, 145.103998523],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_41cec7bfad324053ba6fcf62174ea322 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8e954fee85b14283af6d0c3727ccdac6.setIcon(icon_41cec7bfad324053ba6fcf62174ea322);


            marker_8e954fee85b14283af6d0c3727ccdac6.bindTooltip(
                `<div>
                     Hodgson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f391979115634a1f8c76da2734534a96 = L.marker(
                [-37.772907862, 145.117482902],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_07d09c458d774d8080997740a0c976ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f391979115634a1f8c76da2734534a96.setIcon(icon_07d09c458d774d8080997740a0c976ed);


            marker_f391979115634a1f8c76da2734534a96.bindTooltip(
                `<div>
                     Ironbark Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_dbd8dc9c5634468dbbce250b87a71d75 = L.marker(
                [-37.756483802, 145.141266963],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_daa6429daded404f8f3fb70751297964 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dbd8dc9c5634468dbbce250b87a71d75.setIcon(icon_daa6429daded404f8f3fb70751297964);


            marker_dbd8dc9c5634468dbbce250b87a71d75.bindTooltip(
                `<div>
                     Mandella Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_dd43542132164795addd8923cec15e6d = L.marker(
                [-37.764937275, 145.16239801700002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0c2ed84d2e8649528332afb314e1b046 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dd43542132164795addd8923cec15e6d.setIcon(icon_0c2ed84d2e8649528332afb314e1b046);


            marker_dd43542132164795addd8923cec15e6d.bindTooltip(
                `<div>
                     Jenkins Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f9287bb2f4e64fafb6125626ce02f3c5 = L.marker(
                [-37.759556134, 145.288252852],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_117751b957df4e1aae37c1b7c904e332 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9287bb2f4e64fafb6125626ce02f3c5.setIcon(icon_117751b957df4e1aae37c1b7c904e332);


            marker_f9287bb2f4e64fafb6125626ce02f3c5.bindTooltip(
                `<div>
                     Joroma Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_58f3fb716e4145dea9cceb5e7cd32c75 = L.marker(
                [-37.760740309, 145.131832527],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_62119b3a74174e9980e2dad05cf72ab9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_58f3fb716e4145dea9cceb5e7cd32c75.setIcon(icon_62119b3a74174e9980e2dad05cf72ab9);


            marker_58f3fb716e4145dea9cceb5e7cd32c75.bindTooltip(
                `<div>
                     June Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_dcf6d0cc115c49b7852af97566e1cf34 = L.marker(
                [-37.794520326, 145.116641919],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d470a3d0165343969c7def5b86dfa1fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dcf6d0cc115c49b7852af97566e1cf34.setIcon(icon_d470a3d0165343969c7def5b86dfa1fa);


            marker_dcf6d0cc115c49b7852af97566e1cf34.bindTooltip(
                `<div>
                     Katrina Gully Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2be58164d8a34b919b5b4c3d20a3d1d7 = L.marker(
                [-37.759501088, 145.144275751],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_eedc64f6c7e34487b443ff78d57c6616 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2be58164d8a34b919b5b4c3d20a3d1d7.setIcon(icon_eedc64f6c7e34487b443ff78d57c6616);


            marker_2be58164d8a34b919b5b4c3d20a3d1d7.bindTooltip(
                `<div>
                     Kenman Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_df0dba0ec9f84ddc8d7b6acbbe69fbca = L.marker(
                [-37.75670621, 145.28925794399998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cd6b5a06ec144006beaaff21ad13dcc6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_df0dba0ec9f84ddc8d7b6acbbe69fbca.setIcon(icon_cd6b5a06ec144006beaaff21ad13dcc6);


            marker_df0dba0ec9f84ddc8d7b6acbbe69fbca.bindTooltip(
                `<div>
                     Kerry Anne Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_67c03d131d4348348ec147edfbb795b0 = L.marker(
                [-37.78348274, 145.146373965],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ecde31d368554318aae0ff3e1f00e18c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_67c03d131d4348348ec147edfbb795b0.setIcon(icon_ecde31d368554318aae0ff3e1f00e18c);


            marker_67c03d131d4348348ec147edfbb795b0.bindTooltip(
                `<div>
                     Kerry Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5dc943de44024a6a8ad407216a2ec0d9 = L.marker(
                [-37.800828095, 145.182563501],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_14fd129dbdd944d281e5566dce36b8a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5dc943de44024a6a8ad407216a2ec0d9.setIcon(icon_14fd129dbdd944d281e5566dce36b8a2);


            marker_5dc943de44024a6a8ad407216a2ec0d9.bindTooltip(
                `<div>
                     Kevin Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d5222a9933fe4bd38fcd8cfd3e1d8973 = L.marker(
                [-37.785666690999996, 145.10358464799998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b2e6529037a04b64a9bdaa5bfd728110 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5222a9933fe4bd38fcd8cfd3e1d8973.setIcon(icon_b2e6529037a04b64a9bdaa5bfd728110);


            marker_d5222a9933fe4bd38fcd8cfd3e1d8973.bindTooltip(
                `<div>
                     Kingsnorth Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0794f7d110d44e2cb16f6bc736138dc1 = L.marker(
                [-37.79566426, 145.133947524],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_64f87126107d41f884749fda968a211b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0794f7d110d44e2cb16f6bc736138dc1.setIcon(icon_64f87126107d41f884749fda968a211b);


            marker_0794f7d110d44e2cb16f6bc736138dc1.bindTooltip(
                `<div>
                     Windella Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_34a09d0e09f44cbaabf7c1e9faedb06e = L.marker(
                [-37.801921445, 145.171100334],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5b122882acf84b629a8072c4e8c92272 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_34a09d0e09f44cbaabf7c1e9faedb06e.setIcon(icon_5b122882acf84b629a8072c4e8c92272);


            marker_34a09d0e09f44cbaabf7c1e9faedb06e.bindTooltip(
                `<div>
                     Darvall Playspace Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e48499aaba3a4f5d8b63e21e135a4d1f = L.marker(
                [-37.778878973000005, 145.086769005],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3083a5c0776f4815a066fdb137f6be27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e48499aaba3a4f5d8b63e21e135a4d1f.setIcon(icon_3083a5c0776f4815a066fdb137f6be27);


            marker_e48499aaba3a4f5d8b63e21e135a4d1f.bindTooltip(
                `<div>
                     Koonung Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7cf9ec543d294d0394cb299bce9c3202 = L.marker(
                [-37.771059941, 145.174228907],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5ca3f3d337fb423abfbff0b3e4127d31 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7cf9ec543d294d0394cb299bce9c3202.setIcon(icon_5ca3f3d337fb423abfbff0b3e4127d31);


            marker_7cf9ec543d294d0394cb299bce9c3202.bindTooltip(
                `<div>
                     Landscape Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_15ae277eb9284ef2847dc5ab6f523fa0 = L.marker(
                [-37.770225019, 145.157591261],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_eb680f7b578840c4a3ac10542ae7ab6f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15ae277eb9284ef2847dc5ab6f523fa0.setIcon(icon_eb680f7b578840c4a3ac10542ae7ab6f);


            marker_15ae277eb9284ef2847dc5ab6f523fa0.bindTooltip(
                `<div>
                     Larnaca Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1d6be42f3bb341a1a9a959fe04759287 = L.marker(
                [-37.759627277, 145.180302999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cd4a1a35cfb64cfa95f139a495b21577 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d6be42f3bb341a1a9a959fe04759287.setIcon(icon_cd4a1a35cfb64cfa95f139a495b21577);


            marker_1d6be42f3bb341a1a9a959fe04759287.bindTooltip(
                `<div>
                     Larnoo Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_e05f952096ae49b2b3097da941654d63 = L.marker(
                [-37.775306763, 145.154429107],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_27789253e1b941cd85b253ee3b7720f7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e05f952096ae49b2b3097da941654d63.setIcon(icon_27789253e1b941cd85b253ee3b7720f7);


            marker_e05f952096ae49b2b3097da941654d63.bindTooltip(
                `<div>
                     Leawarra Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_049ccb363f2044e5b6c5ed2d922bb762 = L.marker(
                [-37.796013006, 145.161455245],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4e3942358a77491bada6c2863514dec1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_049ccb363f2044e5b6c5ed2d922bb762.setIcon(icon_4e3942358a77491bada6c2863514dec1);


            marker_049ccb363f2044e5b6c5ed2d922bb762.bindTooltip(
                `<div>
                     Lionel Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5c6e350f50d44e98a936a0bb004f6800 = L.marker(
                [-37.80253748, 145.195476704],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_66d798da7264479693212ec7ffa773b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5c6e350f50d44e98a936a0bb004f6800.setIcon(icon_66d798da7264479693212ec7ffa773b5);


            marker_5c6e350f50d44e98a936a0bb004f6800.bindTooltip(
                `<div>
                     Hillcrest Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c9c15a2b51234f1ab721f2c22592d2cf = L.marker(
                [-37.755291074, 145.17689755],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e504938e89994ff7af413e96150317de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c9c15a2b51234f1ab721f2c22592d2cf.setIcon(icon_e504938e89994ff7af413e96150317de);


            marker_c9c15a2b51234f1ab721f2c22592d2cf.bindTooltip(
                `<div>
                     Lyndal Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_609ae58bbd80448d8e70a466825994e0 = L.marker(
                [-37.745070391999995, 145.200915248],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1813295626ff412c8adf196b919fe0e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_609ae58bbd80448d8e70a466825994e0.setIcon(icon_1813295626ff412c8adf196b919fe0e3);


            marker_609ae58bbd80448d8e70a466825994e0.bindTooltip(
                `<div>
                     Lynette Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6d012774abaa43608b0204fcb8256a2d = L.marker(
                [-37.769482584, 145.122808453],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_be97c121c0514541b1ab770bb4273357 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6d012774abaa43608b0204fcb8256a2d.setIcon(icon_be97c121c0514541b1ab770bb4273357);


            marker_6d012774abaa43608b0204fcb8256a2d.bindTooltip(
                `<div>
                     Lynnwood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e4e5d0047f404df5a6c40d01984d58b0 = L.marker(
                [-37.793620276999995, 145.164337113],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a637ba656fc14dd295e2442f498494b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e4e5d0047f404df5a6c40d01984d58b0.setIcon(icon_a637ba656fc14dd295e2442f498494b5);


            marker_e4e5d0047f404df5a6c40d01984d58b0.bindTooltip(
                `<div>
                     Maggs Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c2cb23ea44944ab986b6d2e7d249007a = L.marker(
                [-37.779535904, 145.153372035],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b5fd7e13fd554fceaae0a38e098f96d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c2cb23ea44944ab986b6d2e7d249007a.setIcon(icon_b5fd7e13fd554fceaae0a38e098f96d6);


            marker_c2cb23ea44944ab986b6d2e7d249007a.bindTooltip(
                `<div>
                     Hertford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b5aa71fd583b4d2eb26b3901cf0fbbdc = L.marker(
                [-37.790705941, 145.135178077],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2b8710fdaa0b4ec2b0fd4dd5a4afefc9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5aa71fd583b4d2eb26b3901cf0fbbdc.setIcon(icon_2b8710fdaa0b4ec2b0fd4dd5a4afefc9);


            marker_b5aa71fd583b4d2eb26b3901cf0fbbdc.bindTooltip(
                `<div>
                     Marshall Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fd5240d733f648bb85eb159538fcf7ad = L.marker(
                [-37.760787486, 145.16421133],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_36e63a3617e5447ab905d640a62191e4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fd5240d733f648bb85eb159538fcf7ad.setIcon(icon_36e63a3617e5447ab905d640a62191e4);


            marker_fd5240d733f648bb85eb159538fcf7ad.bindTooltip(
                `<div>
                     Matisse Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_bfb6c69fc76f400e8f4ce6a6f5e25a2a = L.marker(
                [-37.797735805, 145.15935492],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8a4c8da3d3a14b2aad1e51f0cb8751d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bfb6c69fc76f400e8f4ce6a6f5e25a2a.setIcon(icon_8a4c8da3d3a14b2aad1e51f0cb8751d3);


            marker_bfb6c69fc76f400e8f4ce6a6f5e25a2a.bindTooltip(
                `<div>
                     Maxia Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_38cc6e314b504350be31049494df1c86 = L.marker(
                [-37.76656876, 145.114821828],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b2be69abe13c490e857328f422e1b6de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38cc6e314b504350be31049494df1c86.setIcon(icon_b2be69abe13c490e857328f422e1b6de);


            marker_38cc6e314b504350be31049494df1c86.bindTooltip(
                `<div>
                     Mayfair Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5cf1f9445a70454cb7edd4d153643a3d = L.marker(
                [-37.783036933000005, 145.169929776],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_44096ee1c624447092d63bf772a7e5c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5cf1f9445a70454cb7edd4d153643a3d.setIcon(icon_44096ee1c624447092d63bf772a7e5c7);


            marker_5cf1f9445a70454cb7edd4d153643a3d.bindTooltip(
                `<div>
                     McKenzie Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_28c32f85f0c84c4aa1f45b69e9cdd161 = L.marker(
                [-37.769984451, 145.109562549],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3db2b8a7dfbe42d6873a8e66710152d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_28c32f85f0c84c4aa1f45b69e9cdd161.setIcon(icon_3db2b8a7dfbe42d6873a8e66710152d3);


            marker_28c32f85f0c84c4aa1f45b69e9cdd161.bindTooltip(
                `<div>
                     Michael Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e44584d9eea34bd7a26ab04c4b53e144 = L.marker(
                [-37.788191093, 145.159571976],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_22bb937c3ed14a768f523fedb1ff9921 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e44584d9eea34bd7a26ab04c4b53e144.setIcon(icon_22bb937c3ed14a768f523fedb1ff9921);


            marker_e44584d9eea34bd7a26ab04c4b53e144.bindTooltip(
                `<div>
                     Montgomery Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4e3a2d1d964842e1b86bdc6000989ce5 = L.marker(
                [-37.753859771, 145.133127602],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a59997f07bac4092bbfa5ac07b2ec787 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4e3a2d1d964842e1b86bdc6000989ce5.setIcon(icon_a59997f07bac4092bbfa5ac07b2ec787);


            marker_4e3a2d1d964842e1b86bdc6000989ce5.bindTooltip(
                `<div>
                     Morecambe Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9a586aec80d146459b882e1a48bd1800 = L.marker(
                [-37.792875982, 145.15862466299998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7a1ed4821e3141279ff348b7dfa2d2b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9a586aec80d146459b882e1a48bd1800.setIcon(icon_7a1ed4821e3141279ff348b7dfa2d2b0);


            marker_9a586aec80d146459b882e1a48bd1800.bindTooltip(
                `<div>
                     Morna Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0b4ac6291be64b529c3ad3b581f45939 = L.marker(
                [-37.770477737, 145.142482599],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b721cdfb22e44eaa960acc63d3edadf2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b4ac6291be64b529c3ad3b581f45939.setIcon(icon_b721cdfb22e44eaa960acc63d3edadf2);


            marker_0b4ac6291be64b529c3ad3b581f45939.bindTooltip(
                `<div>
                     Mossdale Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6017c0388260424fa1dba804f1c26ae2 = L.marker(
                [-37.777291283000004, 145.146027916],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1722cd35d24e4d728dc4be0780359885 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6017c0388260424fa1dba804f1c26ae2.setIcon(icon_1722cd35d24e4d728dc4be0780359885);


            marker_6017c0388260424fa1dba804f1c26ae2.bindTooltip(
                `<div>
                     Rieschiecks Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_de6a6acdd7e845adb1cfc39a4067802d = L.marker(
                [-37.803782611, 145.183113088],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a914a2ba51464ae498c183a6edad8dec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de6a6acdd7e845adb1cfc39a4067802d.setIcon(icon_a914a2ba51464ae498c183a6edad8dec);


            marker_de6a6acdd7e845adb1cfc39a4067802d.bindTooltip(
                `<div>
                     Oxford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6f0771f4d9d84956828bc558ee7bd027 = L.marker(
                [-37.778732203000004, 145.21403136799998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0803f2856dfa48859a30268909b8efec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f0771f4d9d84956828bc558ee7bd027.setIcon(icon_0803f2856dfa48859a30268909b8efec);


            marker_6f0771f4d9d84956828bc558ee7bd027.bindTooltip(
                `<div>
                     Park Orchards Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_870b216a5025441199be616867f706f7 = L.marker(
                [-37.769694322, 145.18022755],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5171fc26beab495fbd22536d697ef385 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_870b216a5025441199be616867f706f7.setIcon(icon_5171fc26beab495fbd22536d697ef385);


            marker_870b216a5025441199be616867f706f7.bindTooltip(
                `<div>
                     Pine Hill Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1342934d4d634d5b8d33e2f204c74d7e = L.marker(
                [-37.768810479, 145.114997548],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_54881daf551e4ffab56f2e0c3013119f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1342934d4d634d5b8d33e2f204c74d7e.setIcon(icon_54881daf551e4ffab56f2e0c3013119f);


            marker_1342934d4d634d5b8d33e2f204c74d7e.bindTooltip(
                `<div>
                     Ranleigh Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e01eb80fe51642b38c99e5f9b0f0cdf7 = L.marker(
                [-37.794348477, 145.149256251],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_94939d9565874a65a28021d1f0ddcb4e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e01eb80fe51642b38c99e5f9b0f0cdf7.setIcon(icon_94939d9565874a65a28021d1f0ddcb4e);


            marker_e01eb80fe51642b38c99e5f9b0f0cdf7.bindTooltip(
                `<div>
                     Renshaw Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f213d9da25a34dfbbb579ff2811ecef1 = L.marker(
                [-37.772547089, 145.099315522],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ee53613dff8e4758b2c959518dba24a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f213d9da25a34dfbbb579ff2811ecef1.setIcon(icon_ee53613dff8e4758b2c959518dba24a2);


            marker_f213d9da25a34dfbbb579ff2811ecef1.bindTooltip(
                `<div>
                     Riverview Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_758b8775eea94f1f885f297b01e26177 = L.marker(
                [-37.763630489, 145.089825939],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a3939a3b3d8c419483b6467891b5f841 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_758b8775eea94f1f885f297b01e26177.setIcon(icon_a3939a3b3d8c419483b6467891b5f841);


            marker_758b8775eea94f1f885f297b01e26177.bindTooltip(
                `<div>
                     Ronald Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d3a1ad9e3f104e6d91a754d9379aa413 = L.marker(
                [-37.777218785, 145.13187766299998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ff205c23d922434593adec9c6f407739 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3a1ad9e3f104e6d91a754d9379aa413.setIcon(icon_ff205c23d922434593adec9c6f407739);


            marker_d3a1ad9e3f104e6d91a754d9379aa413.bindTooltip(
                `<div>
                     Ruffey Lake Park (The Boulevard) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_71c64503539248ce9dd59b62898e2900 = L.marker(
                [-37.776904486, 145.14435273799998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_141ada7980d245a8a922c36c637e23a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71c64503539248ce9dd59b62898e2900.setIcon(icon_141ada7980d245a8a922c36c637e23a5);


            marker_71c64503539248ce9dd59b62898e2900.bindTooltip(
                `<div>
                     Ruffey Lake Park (Victoria St) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2434a00eb4ab4983a1b06727eb9eada5 = L.marker(
                [-37.777156611, 145.084057457],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_62badc7acaf44579abd691b2cccd4091 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2434a00eb4ab4983a1b06727eb9eada5.setIcon(icon_62badc7acaf44579abd691b2cccd4091);


            marker_2434a00eb4ab4983a1b06727eb9eada5.bindTooltip(
                `<div>
                     Sandra Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3b1bc54cbf3c4c0eb260cc5f938ad263 = L.marker(
                [-37.782291639, 145.127978077],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1abe1800ac594a24bb2929f32f8a812a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3b1bc54cbf3c4c0eb260cc5f938ad263.setIcon(icon_1abe1800ac594a24bb2929f32f8a812a);


            marker_3b1bc54cbf3c4c0eb260cc5f938ad263.bindTooltip(
                `<div>
                     JW Thomson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2fecdbf74ea641b19b733a34734417a4 = L.marker(
                [-37.76265146, 145.175676851],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9f0b60b1cdaf4088a8e6668ee8b7bc7a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2fecdbf74ea641b19b733a34734417a4.setIcon(icon_9f0b60b1cdaf4088a8e6668ee8b7bc7a);


            marker_2fecdbf74ea641b19b733a34734417a4.bindTooltip(
                `<div>
                     Schafter Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_66c1ddbb37f242f89ba039fe4b8e1808 = L.marker(
                [-37.784661537, 145.13377421],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3b6b37497a7c4287adb716b8405d17cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66c1ddbb37f242f89ba039fe4b8e1808.setIcon(icon_3b6b37497a7c4287adb716b8405d17cb);


            marker_66c1ddbb37f242f89ba039fe4b8e1808.bindTooltip(
                `<div>
                     Schramms Reserve Playground (South)
                 </div>`,
                {"sticky": true}
            );


            var marker_821e6c788885499a8741c602b79aa3bd = L.marker(
                [-37.783712992, 145.140191417],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6bf63687553947519f709d14d1b9a1ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_821e6c788885499a8741c602b79aa3bd.setIcon(icon_6bf63687553947519f709d14d1b9a1ea);


            marker_821e6c788885499a8741c602b79aa3bd.bindTooltip(
                `<div>
                     Sharon Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_371ad644a4644f9f84ccbbb6a00f6bf8 = L.marker(
                [-37.759037455, 145.094294082],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9b7535009da84397861b1e35bd7e5c8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_371ad644a4644f9f84ccbbb6a00f6bf8.setIcon(icon_9b7535009da84397861b1e35bd7e5c8f);


            marker_371ad644a4644f9f84ccbbb6a00f6bf8.bindTooltip(
                `<div>
                     Sheahans Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_decdb8cd76414a7da673982be3a912f4 = L.marker(
                [-37.763231374, 145.121111139],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0cd4620d46b6476fb81d56a3b6dbc51c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_decdb8cd76414a7da673982be3a912f4.setIcon(icon_0cd4620d46b6476fb81d56a3b6dbc51c);


            marker_decdb8cd76414a7da673982be3a912f4.bindTooltip(
                `<div>
                     Sinclair Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_eef4c7c24364488b85712fc2f8a77ee1 = L.marker(
                [-37.778472346, 145.116295407],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fa72ec7332114554820fc1b674b554d2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eef4c7c24364488b85712fc2f8a77ee1.setIcon(icon_fa72ec7332114554820fc1b674b554d2);


            marker_eef4c7c24364488b85712fc2f8a77ee1.bindTooltip(
                `<div>
                     Somerville Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_667bb6133d7a4ce696bd09fbca95136d = L.marker(
                [-37.753398217, 145.15958194200002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_67837a1ffa11441bbfc794a0ab9b028d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_667bb6133d7a4ce696bd09fbca95136d.setIcon(icon_67837a1ffa11441bbfc794a0ab9b028d);


            marker_667bb6133d7a4ce696bd09fbca95136d.bindTooltip(
                `<div>
                     Spring Valley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_60a1820ac13b47dc97a62e31eb6f3cc2 = L.marker(
                [-37.774882274, 145.185847083],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f338a8b4fc474c70a15477bb9c747f8d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60a1820ac13b47dc97a62e31eb6f3cc2.setIcon(icon_f338a8b4fc474c70a15477bb9c747f8d);


            marker_60a1820ac13b47dc97a62e31eb6f3cc2.bindTooltip(
                `<div>
                     Dellview Playspace Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_286be3c776434996861fe68c1401a42d = L.marker(
                [-37.796490475, 145.16902458],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c18847b000de4e068e15de710e6c4537 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_286be3c776434996861fe68c1401a42d.setIcon(icon_c18847b000de4e068e15de710e6c4537);


            marker_286be3c776434996861fe68c1401a42d.bindTooltip(
                `<div>
                     St Clems Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2df6b49df16544519cb77209449c7d86 = L.marker(
                [-37.737806574000004, 145.271753152],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bd4ecf6381884f859a116aa1dfc1ccd2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2df6b49df16544519cb77209449c7d86.setIcon(icon_bd4ecf6381884f859a116aa1dfc1ccd2);


            marker_2df6b49df16544519cb77209449c7d86.bindTooltip(
                `<div>
                     St Deny's Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9ae7a7ca7ec247468222c836be0c03cf = L.marker(
                [-37.774619373, 145.08490156],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cdc89501deb8445ea3c4730ba5f21105 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ae7a7ca7ec247468222c836be0c03cf.setIcon(icon_cdc89501deb8445ea3c4730ba5f21105);


            marker_9ae7a7ca7ec247468222c836be0c03cf.bindTooltip(
                `<div>
                     Stanley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_64449e3b259e4ff79277ea0394372ced = L.marker(
                [-37.741331016, 145.210947279],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c8f9b481cb88495aad8a5b081919fa6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_64449e3b259e4ff79277ea0394372ced.setIcon(icon_c8f9b481cb88495aad8a5b081919fa6a);


            marker_64449e3b259e4ff79277ea0394372ced.bindTooltip(
                `<div>
                     Stiggants Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_69a74069fac24b1caa128c5d4df18017 = L.marker(
                [-37.782112304, 145.113568014],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_521ba4f9296347d5b68623b22a6aabac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69a74069fac24b1caa128c5d4df18017.setIcon(icon_521ba4f9296347d5b68623b22a6aabac);


            marker_69a74069fac24b1caa128c5d4df18017.bindTooltip(
                `<div>
                     Studley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b5f1fee2298f4eac81f993630a836288 = L.marker(
                [-37.762277893000004, 145.09895765299999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f018a75e590347a1b24e00ed261d6080 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5f1fee2298f4eac81f993630a836288.setIcon(icon_f018a75e590347a1b24e00ed261d6080);


            marker_b5f1fee2298f4eac81f993630a836288.bindTooltip(
                `<div>
                     Swanston Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_da8ce880a5b04285a137293aabc71388 = L.marker(
                [-37.769222922, 145.10221623299998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_db445d4ad8bd428bad5344e8c668d03c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_da8ce880a5b04285a137293aabc71388.setIcon(icon_db445d4ad8bd428bad5344e8c668d03c);


            marker_da8ce880a5b04285a137293aabc71388.bindTooltip(
                `<div>
                     Tasker Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_57dfa010e4624837b8d371933abb9813 = L.marker(
                [-37.769000716, 145.107299709],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_03f4c0bdc1334559b6406c7f99b25103 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_57dfa010e4624837b8d371933abb9813.setIcon(icon_03f4c0bdc1334559b6406c7f99b25103);


            marker_57dfa010e4624837b8d371933abb9813.bindTooltip(
                `<div>
                     Ted Ajani Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fc4e786aec474c448a08906204ed7bf9 = L.marker(
                [-37.754014063, 145.13607467],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6ba8bc48f86c4d9d914f8a6db9113211 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fc4e786aec474c448a08906204ed7bf9.setIcon(icon_6ba8bc48f86c4d9d914f8a6db9113211);


            marker_fc4e786aec474c448a08906204ed7bf9.bindTooltip(
                `<div>
                     Templestowe Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1fdb24594ff44baebee0fce9f605297a = L.marker(
                [-37.770523355, 145.148993626],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_36677238d0994b7daca8bc2f7a800728 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1fdb24594ff44baebee0fce9f605297a.setIcon(icon_36677238d0994b7daca8bc2f7a800728);


            marker_1fdb24594ff44baebee0fce9f605297a.bindTooltip(
                `<div>
                     The Grange Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a34657887cec44cd9759827e7d483a9c = L.marker(
                [-37.775340784, 145.107988218],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bab31d523008478bb228b63c0d49312b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a34657887cec44cd9759827e7d483a9c.setIcon(icon_bab31d523008478bb228b63c0d49312b);


            marker_a34657887cec44cd9759827e7d483a9c.bindTooltip(
                `<div>
                     Timber Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_55bba4458c454e3eb54794ff07a28cd6 = L.marker(
                [-37.776782361, 145.105904031],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5ea9fe2a044e43338696a208eefb4bec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_55bba4458c454e3eb54794ff07a28cd6.setIcon(icon_5ea9fe2a044e43338696a208eefb4bec);


            marker_55bba4458c454e3eb54794ff07a28cd6.bindTooltip(
                `<div>
                     Timber Reserve (South) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_34396e6123074d71bc77e074b4483add = L.marker(
                [-37.777499003, 145.180488483],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7bb6b901c1764782ad906754712b54c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_34396e6123074d71bc77e074b4483add.setIcon(icon_7bb6b901c1764782ad906754712b54c7);


            marker_34396e6123074d71bc77e074b4483add.bindTooltip(
                `<div>
                     Valepark Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9e7bad43db794e498d182a94f4f07d5c = L.marker(
                [-37.756891778, 145.13244099899998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e338dbd299fc40b7908b1d28d0ae7543 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e7bad43db794e498d182a94f4f07d5c.setIcon(icon_e338dbd299fc40b7908b1d28d0ae7543);


            marker_9e7bad43db794e498d182a94f4f07d5c.bindTooltip(
                `<div>
                     Verbena Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fc2d79b051894810ad85318ca578d74d = L.marker(
                [-37.790255453, 145.128430685],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5048b2e3ae5343f0b05728d3f69230df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fc2d79b051894810ad85318ca578d74d.setIcon(icon_5048b2e3ae5343f0b05728d3f69230df);


            marker_fc2d79b051894810ad85318ca578d74d.bindTooltip(
                `<div>
                     Walker Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d78b1e0a1624484a9001af9ae97cd829 = L.marker(
                [-37.745796079, 145.207429798],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d256ee3cefed4f719efa78a41d4123be = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d78b1e0a1624484a9001af9ae97cd829.setIcon(icon_d256ee3cefed4f719efa78a41d4123be);


            marker_d78b1e0a1624484a9001af9ae97cd829.bindTooltip(
                `<div>
                     Warrandyte Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_19f0a298c20e4803a82347033828b603 = L.marker(
                [-37.736578383, 145.220466489],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b76b4e867d794b5595af694f258403b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_19f0a298c20e4803a82347033828b603.setIcon(icon_b76b4e867d794b5595af694f258403b8);


            marker_19f0a298c20e4803a82347033828b603.bindTooltip(
                `<div>
                     Warrandyte Federation Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_69ca9e6023a84a41a54a7f213a4c03e6 = L.marker(
                [-37.767506665, 145.1679704],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1bac30cf1e1b43069d04a79896d6a811 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69ca9e6023a84a41a54a7f213a4c03e6.setIcon(icon_1bac30cf1e1b43069d04a79896d6a811);


            marker_69ca9e6023a84a41a54a7f213a4c03e6.bindTooltip(
                `<div>
                     Whistlewood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d3064dee16b04968a56011d91f6178f3 = L.marker(
                [-37.782089533000004, 145.100891418],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cac6f59b88c1445c91dcc664b8ae0cad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3064dee16b04968a56011d91f6178f3.setIcon(icon_cac6f59b88c1445c91dcc664b8ae0cad);


            marker_d3064dee16b04968a56011d91f6178f3.bindTooltip(
                `<div>
                     Willow North Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_297d44c9a8be4e449802032e963ea7f4 = L.marker(
                [-37.791304972, 145.111040671],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bae0e032f4dc4c3dba054db5cd9c3735 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_297d44c9a8be4e449802032e963ea7f4.setIcon(icon_bae0e032f4dc4c3dba054db5cd9c3735);


            marker_297d44c9a8be4e449802032e963ea7f4.bindTooltip(
                `<div>
                     Wilsons Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c258fe6ea1904e6782d2978aa9ec9d29 = L.marker(
                [-37.781084017, 145.124820818],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a6a0914901394801b3202e276d3e1029 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c258fe6ea1904e6782d2978aa9ec9d29.setIcon(icon_a6a0914901394801b3202e276d3e1029);


            marker_c258fe6ea1904e6782d2978aa9ec9d29.bindTooltip(
                `<div>
                     Winbrook Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_af212a7012a941079b79432323bb4f77 = L.marker(
                [-37.718715397, 145.2857712],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4fffffdcaf16469dbe97bcb97d633b0a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_af212a7012a941079b79432323bb4f77.setIcon(icon_4fffffdcaf16469dbe97bcb97d633b0a);


            marker_af212a7012a941079b79432323bb4f77.bindTooltip(
                `<div>
                     Wittons Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e8be724615fe4bec95c8727cb3b099e2 = L.marker(
                [-37.739284411999996, 145.267058683],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3cadb16882de4e089778a3552c48a54a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e8be724615fe4bec95c8727cb3b099e2.setIcon(icon_3cadb16882de4e089778a3552c48a54a);


            marker_e8be724615fe4bec95c8727cb3b099e2.bindTooltip(
                `<div>
                     Wonga Park Reserve (Oval) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c626f73e7c114ba0992df5282f9540df = L.marker(
                [-37.739104604, 145.269445934],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d58fd54574dd473d9a3469c6d98ecee3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c626f73e7c114ba0992df5282f9540df.setIcon(icon_d58fd54574dd473d9a3469c6d98ecee3);


            marker_c626f73e7c114ba0992df5282f9540df.bindTooltip(
                `<div>
                     Wonga Park Tennis Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fc7a1ee02cc24b5da8405efa35105a5b = L.marker(
                [-37.775162637, 145.147978112],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e26d475649944a9fb1705519338cf758 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fc7a1ee02cc24b5da8405efa35105a5b.setIcon(icon_e26d475649944a9fb1705519338cf758);


            marker_fc7a1ee02cc24b5da8405efa35105a5b.bindTooltip(
                `<div>
                     Woodlea Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_04d78115a76a49f3ad016e7687c48d26 = L.marker(
                [-37.770752083000005, 145.089940102],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1568577262e64765ae17a28059fb2cbf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_04d78115a76a49f3ad016e7687c48d26.setIcon(icon_1568577262e64765ae17a28059fb2cbf);


            marker_04d78115a76a49f3ad016e7687c48d26.bindTooltip(
                `<div>
                     Morris Williams Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2d512abb5035477e9090ef045bee7a6d = L.marker(
                [-37.778906538, 145.162368426],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4d5de025bf6e423cbb1756b6dea37daf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2d512abb5035477e9090ef045bee7a6d.setIcon(icon_4d5de025bf6e423cbb1756b6dea37daf);


            marker_2d512abb5035477e9090ef045bee7a6d.bindTooltip(
                `<div>
                     Zerbes Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_65b79cee9f6e4a70bb9cdf9481d1fce7 = L.marker(
                [-37.773648568, 145.166339703],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4201986adff54abf8d97f24d537d0c2b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_65b79cee9f6e4a70bb9cdf9481d1fce7.setIcon(icon_4201986adff54abf8d97f24d537d0c2b);


            marker_65b79cee9f6e4a70bb9cdf9481d1fce7.bindTooltip(
                `<div>
                     Albany Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4343d2d1e8914866bb63cb08469bf06c = L.marker(
                [-37.770593043000005, 145.161461503],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_87001b6740444a58939f99100ffc7a5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4343d2d1e8914866bb63cb08469bf06c.setIcon(icon_87001b6740444a58939f99100ffc7a5d);


            marker_4343d2d1e8914866bb63cb08469bf06c.bindTooltip(
                `<div>
                     Browning Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a29e4d80e307471fa2236ef21e749cf1 = L.marker(
                [-37.750265023000004, 145.175627106],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_266091b3b8a84ebca232ef250e70d037 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a29e4d80e307471fa2236ef21e749cf1.setIcon(icon_266091b3b8a84ebca232ef250e70d037);


            marker_a29e4d80e307471fa2236ef21e749cf1.bindTooltip(
                `<div>
                     Manna Gum Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b7aa6035f94544b79d826e040cbff2cd = L.marker(
                [-37.762922411, 145.107387116],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_641c0265c01247ff9bb2c6a0c175a383 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b7aa6035f94544b79d826e040cbff2cd.setIcon(icon_641c0265c01247ff9bb2c6a0c175a383);


            marker_b7aa6035f94544b79d826e040cbff2cd.bindTooltip(
                `<div>
                     Richard Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b89a901163bc4e869b85d38e993c3333 = L.marker(
                [-37.786358097, 145.10714856200002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fdf40aa4e090418093a26535e0a04ae4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b89a901163bc4e869b85d38e993c3333.setIcon(icon_fdf40aa4e090418093a26535e0a04ae4);


            marker_b89a901163bc4e869b85d38e993c3333.bindTooltip(
                `<div>
                     Stutt Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3d3febcc6d3a4069bcb12c8956a3e6b4 = L.marker(
                [-37.769680818000005, 145.096073324],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ea03ca8d930b4b03b8ca4a3d98958af7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d3febcc6d3a4069bcb12c8956a3e6b4.setIcon(icon_ea03ca8d930b4b03b8ca4a3d98958af7);


            marker_3d3febcc6d3a4069bcb12c8956a3e6b4.bindTooltip(
                `<div>
                     Lillian Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_94371a0feecd4674b47c4e8ba40dcc8a = L.marker(
                [-37.760335024, 145.17024827],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_991f512a38ed47768b26cf7d492eb804 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_94371a0feecd4674b47c4e8ba40dcc8a.setIcon(icon_991f512a38ed47768b26cf7d492eb804);


            marker_94371a0feecd4674b47c4e8ba40dcc8a.bindTooltip(
                `<div>
                     The Pines Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8cab4fd881ba44b3858e2b8898eab840 = L.marker(
                [-37.77588203, 145.14129216],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1136b28f72a94b2abf0136631e865dc0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8cab4fd881ba44b3858e2b8898eab840.setIcon(icon_1136b28f72a94b2abf0136631e865dc0);


            marker_8cab4fd881ba44b3858e2b8898eab840.bindTooltip(
                `<div>
                     Ruffey Lake Park (Church St) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f4971dc58a8e4015a3af87bd2d7b63b2 = L.marker(
                [-37.739839996, 145.267617399],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_631a1342d35742ed9f7ce9c0f3409375 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f4971dc58a8e4015a3af87bd2d7b63b2.setIcon(icon_631a1342d35742ed9f7ce9c0f3409375);


            marker_f4971dc58a8e4015a3af87bd2d7b63b2.bindTooltip(
                `<div>
                     Wonga Park Reserve - (Gooligulch) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_bc7ea3bb12ad490c8437ead05eee2940 = L.marker(
                [-37.774277037, 145.122588882],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_376e63609a664dc1abf5724e4273cdf0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc7ea3bb12ad490c8437ead05eee2940.setIcon(icon_376e63609a664dc1abf5724e4273cdf0);


            marker_bc7ea3bb12ad490c8437ead05eee2940.bindTooltip(
                `<div>
                     Aquarena Aquatic and Leisure Centre Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0076ccaae2b442ce89124daf9c4592cf = L.marker(
                [-37.789053625, 145.150394679],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e6d0390552324d5a873cb67ccab89cf3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0076ccaae2b442ce89124daf9c4592cf.setIcon(icon_e6d0390552324d5a873cb67ccab89cf3);


            marker_0076ccaae2b442ce89124daf9c4592cf.bindTooltip(
                `<div>
                     Doncaster Reserve Playground (Jackson Ct)
                 </div>`,
                {"sticky": true}
            );


            var marker_b15b7dc121584c289df4638f5fa53b56 = L.marker(
                [-37.779667558, 145.102075048],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d7853123c3594646abed641a04c63ebf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b15b7dc121584c289df4638f5fa53b56.setIcon(icon_d7853123c3594646abed641a04c63ebf);


            marker_b15b7dc121584c289df4638f5fa53b56.bindTooltip(
                `<div>
                     Westwood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6b14028a0ad24d31aa6657c5f22adbe6 = L.marker(
                [-37.77280918, 145.15266899899999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_af33529a1d3f4e04a1c2c508b531d632 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6b14028a0ad24d31aa6657c5f22adbe6.setIcon(icon_af33529a1d3f4e04a1c2c508b531d632);


            marker_6b14028a0ad24d31aa6657c5f22adbe6.bindTooltip(
                `<div>
                     Noral Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ffdf4dc0bec14b94bc12828b20fea779 = L.marker(
                [-37.780812376, 145.134625266],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_76383430f8594936a4a449dc77c4dd90 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ffdf4dc0bec14b94bc12828b20fea779.setIcon(icon_76383430f8594936a4a449dc77c4dd90);


            marker_ffdf4dc0bec14b94bc12828b20fea779.bindTooltip(
                `<div>
                     Schramms Reserve Playground (North)
                 </div>`,
                {"sticky": true}
            );


            var marker_d0208af281d74ea0aa7874f43fedd0a4 = L.marker(
                [-37.786706175, 145.116649002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8b8ce3310efe4a50bfa34cdb2ebc164f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d0208af281d74ea0aa7874f43fedd0a4.setIcon(icon_8b8ce3310efe4a50bfa34cdb2ebc164f);


            marker_d0208af281d74ea0aa7874f43fedd0a4.bindTooltip(
                `<div>
                     Makybe Reserve (Tullamore) Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_38c4eddd886b4d51bd91322991c839cb = L.marker(
                [-37.785260155, 145.115086523],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3e5cd09eaad9472592f495ab1ee6de40 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38c4eddd886b4d51bd91322991c839cb.setIcon(icon_3e5cd09eaad9472592f495ab1ee6de40);


            marker_38c4eddd886b4d51bd91322991c839cb.bindTooltip(
                `<div>
                     Southern Gully Reserve - East (Tullamore) Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_3249e847182d4ec689be43ea9158cba5 = L.marker(
                [-37.784667017, 145.113308519],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_74447024c27e4871be02477e1c4b4fdb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3249e847182d4ec689be43ea9158cba5.setIcon(icon_74447024c27e4871be02477e1c4b4fdb);


            marker_3249e847182d4ec689be43ea9158cba5.bindTooltip(
                `<div>
                     Southern Gully Reserve - West (Tullamore) Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_c7452c210aca47aa91d1c298e8058fcd = L.marker(
                [-37.76201057, 145.1703018],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ff6735eaeed8427f861e3ba381e7d583 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c7452c210aca47aa91d1c298e8058fcd.setIcon(icon_ff6735eaeed8427f861e3ba381e7d583);


            marker_c7452c210aca47aa91d1c298e8058fcd.bindTooltip(
                `<div>
                     Morello Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_9601247a15a14714946b4ac89f23642f = L.marker(
                [-37.785273344000004, 145.120279581],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0264f108d6f44770a6b6d06973d254e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9601247a15a14714946b4ac89f23642f.setIcon(icon_0264f108d6f44770a6b6d06973d254e6);


            marker_9601247a15a14714946b4ac89f23642f.bindTooltip(
                `<div>
                     Lawford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_de928fa952df40098a658d1dff78e05f = L.marker(
                [-37.783821531, 145.155548385],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7428ccf8daf340cfb222f1223e089de3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de928fa952df40098a658d1dff78e05f.setIcon(icon_7428ccf8daf340cfb222f1223e089de3);


            marker_de928fa952df40098a658d1dff78e05f.bindTooltip(
                `<div>
                     Gainsborough Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3dad2aaf801e4a409188f9a70e983b18 = L.marker(
                [-27.43642293, 153.00107309999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_af5f8e89fb8c472982ac7fff4989ac22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3dad2aaf801e4a409188f9a70e983b18.setIcon(icon_af5f8e89fb8c472982ac7fff4989ac22);


            marker_3dad2aaf801e4a409188f9a70e983b18.bindTooltip(
                `<div>
                     QUANDONG PARK
                 </div>`,
                {"sticky": true}
            );


            var marker_70eb6dd12b0441bb8e628fdbbfc43575 = L.marker(
                [-27.43636786, 153.0009842],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf7c64e1130444d79b91d688bbe844ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_70eb6dd12b0441bb8e628fdbbfc43575.setIcon(icon_cf7c64e1130444d79b91d688bbe844ec);


            marker_70eb6dd12b0441bb8e628fdbbfc43575.bindTooltip(
                `<div>
                     QUANDONG PARK
                 </div>`,
                {"sticky": true}
            );


            var marker_766fa97067244c38a06c0114bc130605 = L.marker(
                [-27.62120735, 152.96760049999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cbd7c68323f54b4e9f846758974614f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_766fa97067244c38a06c0114bc130605.setIcon(icon_cbd7c68323f54b4e9f846758974614f9);


            marker_766fa97067244c38a06c0114bc130605.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_72ede0e6ba3547bcbdd737b4f030cf00 = L.marker(
                [-27.62464451, 152.96293369999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e291aca1de094785b00bf133261a2467 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72ede0e6ba3547bcbdd737b4f030cf00.setIcon(icon_e291aca1de094785b00bf133261a2467);


            marker_72ede0e6ba3547bcbdd737b4f030cf00.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8f24fdea6255428fa2bee876319dc650 = L.marker(
                [-27.62103501, 152.9622254],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d892da1fc72e41afaa943bfee2b49e39 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f24fdea6255428fa2bee876319dc650.setIcon(icon_d892da1fc72e41afaa943bfee2b49e39);


            marker_8f24fdea6255428fa2bee876319dc650.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0563dcdfdd334e45b10141809bb38fae = L.marker(
                [-27.62492493, 152.9650925],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_19163845c4224a0ea15810f1b8cdda4e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0563dcdfdd334e45b10141809bb38fae.setIcon(icon_19163845c4224a0ea15810f1b8cdda4e);


            marker_0563dcdfdd334e45b10141809bb38fae.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1241ea28d7e44ca9a3591bfc477a87e2 = L.marker(
                [-27.62498759, 152.96369819999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8cc9417686af4bfe9fb8c7ca61308e8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1241ea28d7e44ca9a3591bfc477a87e2.setIcon(icon_8cc9417686af4bfe9fb8c7ca61308e8f);


            marker_1241ea28d7e44ca9a3591bfc477a87e2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b3fad656b8924ad384e474fd59b9e26c = L.marker(
                [-27.62592725, 152.9646061],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1f89ce046cbd4f918f835e7b1700335c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b3fad656b8924ad384e474fd59b9e26c.setIcon(icon_1f89ce046cbd4f918f835e7b1700335c);


            marker_b3fad656b8924ad384e474fd59b9e26c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_671b298064f741d8b8bce8654ee6cd6a = L.marker(
                [-27.62513297, 152.9634943],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bab98f93ad6a43b581406be1503bca83 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_671b298064f741d8b8bce8654ee6cd6a.setIcon(icon_bab98f93ad6a43b581406be1503bca83);


            marker_671b298064f741d8b8bce8654ee6cd6a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b2f2db2350c344e3a5e322825d944981 = L.marker(
                [-27.62492745, 152.96398359999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_70ae8b0e863f47f4b22a05a9027f1ce5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b2f2db2350c344e3a5e322825d944981.setIcon(icon_70ae8b0e863f47f4b22a05a9027f1ce5);


            marker_b2f2db2350c344e3a5e322825d944981.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0ce7939959344e5d8f9435d893c8e93b = L.marker(
                [-27.62062475, 152.9641177],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d2b58a9bbcc64397a51b11ffa8f7bcaf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0ce7939959344e5d8f9435d893c8e93b.setIcon(icon_d2b58a9bbcc64397a51b11ffa8f7bcaf);


            marker_0ce7939959344e5d8f9435d893c8e93b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bbf510fe27c948bc9b181162da257894 = L.marker(
                [-27.62203701, 152.9660949],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_547f0208269b40039d10682a8ae64ac4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bbf510fe27c948bc9b181162da257894.setIcon(icon_547f0208269b40039d10682a8ae64ac4);


            marker_bbf510fe27c948bc9b181162da257894.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0883ea80fbd049f9886c551900fb4e08 = L.marker(
                [-27.62032044, 152.9663582],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9a5b207297bd4123b77a5aed75570a84 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0883ea80fbd049f9886c551900fb4e08.setIcon(icon_9a5b207297bd4123b77a5aed75570a84);


            marker_0883ea80fbd049f9886c551900fb4e08.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1a7a5c141b374cb887a0eb293e8bd378 = L.marker(
                [-27.62226944, 152.96450780000004],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4279838821964b7f859f04e7660bb2b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a7a5c141b374cb887a0eb293e8bd378.setIcon(icon_4279838821964b7f859f04e7660bb2b0);


            marker_1a7a5c141b374cb887a0eb293e8bd378.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5cd007c6345f4ed2a3732fc3b9f71742 = L.marker(
                [-27.62569248, 152.9651359],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_74eb8a8e67704f19a76f49a8f0128ecf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5cd007c6345f4ed2a3732fc3b9f71742.setIcon(icon_74eb8a8e67704f19a76f49a8f0128ecf);


            marker_5cd007c6345f4ed2a3732fc3b9f71742.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d11a911a931b40e3aef42796c5046ad2 = L.marker(
                [-27.62425688, 152.9637003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8ab72fd5fd5f4e3090d99731b8a194ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d11a911a931b40e3aef42796c5046ad2.setIcon(icon_8ab72fd5fd5f4e3090d99731b8a194ae);


            marker_d11a911a931b40e3aef42796c5046ad2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b60f1e10330648efafce2b0795d5ee01 = L.marker(
                [-27.28616972, 153.0642312],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5e52372b5b36470b919c64d5056bc5ca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b60f1e10330648efafce2b0795d5ee01.setIcon(icon_5e52372b5b36470b919c64d5056bc5ca);


            marker_b60f1e10330648efafce2b0795d5ee01.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_56c809604d5d4263822f2f1a10843d52 = L.marker(
                [-27.62088097, 152.9670804],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b8a39e0e420140f3a33f22513952755f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_56c809604d5d4263822f2f1a10843d52.setIcon(icon_b8a39e0e420140f3a33f22513952755f);


            marker_56c809604d5d4263822f2f1a10843d52.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3bef95291e3f4482ae0d7f1bb53ea39f = L.marker(
                [-27.62015756, 152.96275119999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_16b2e2d501e946519a5d882d57b1a991 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3bef95291e3f4482ae0d7f1bb53ea39f.setIcon(icon_16b2e2d501e946519a5d882d57b1a991);


            marker_3bef95291e3f4482ae0d7f1bb53ea39f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bfd88801255d4f7eb9828ec1502eee49 = L.marker(
                [-27.62221077, 152.9599061],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3990e01db32e441eaff8a218d2ab326a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bfd88801255d4f7eb9828ec1502eee49.setIcon(icon_3990e01db32e441eaff8a218d2ab326a);


            marker_bfd88801255d4f7eb9828ec1502eee49.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bf82df366c3a42799b52cc8288f5cd58 = L.marker(
                [-27.62533029, 152.9617071],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fd713067019f49b7b7ca73f7a8f20e8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bf82df366c3a42799b52cc8288f5cd58.setIcon(icon_fd713067019f49b7b7ca73f7a8f20e8f);


            marker_bf82df366c3a42799b52cc8288f5cd58.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b5519f3840604aba858652263c0c7235 = L.marker(
                [-27.62005842, 152.96302649999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_224f3d1bcc494eb19457bf111fb9b695 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5519f3840604aba858652263c0c7235.setIcon(icon_224f3d1bcc494eb19457bf111fb9b695);


            marker_b5519f3840604aba858652263c0c7235.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4d299a5ede8346899816e29e2d935ec5 = L.marker(
                [-27.61972435, 152.9628847],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2519b4a20975436b8dbc8fd3cdb279d2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d299a5ede8346899816e29e2d935ec5.setIcon(icon_2519b4a20975436b8dbc8fd3cdb279d2);


            marker_4d299a5ede8346899816e29e2d935ec5.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_50fec97d94d747168dcb20c49707cbc9 = L.marker(
                [-27.62107685, 152.9673776],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d71356d36dfa4765a7054f09c6bb0f9b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_50fec97d94d747168dcb20c49707cbc9.setIcon(icon_d71356d36dfa4765a7054f09c6bb0f9b);


            marker_50fec97d94d747168dcb20c49707cbc9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5f07a485e4324e948450fb00f4cc7209 = L.marker(
                [-27.62026628, 152.9656566],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4a4a6e5ea4d542728dfc81587d662a8c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f07a485e4324e948450fb00f4cc7209.setIcon(icon_4a4a6e5ea4d542728dfc81587d662a8c);


            marker_5f07a485e4324e948450fb00f4cc7209.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0eb6273d434b4dc3a3506787f468ad28 = L.marker(
                [-27.62537689, 152.962082],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f6eba821013943518e46c21fc898b4cd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0eb6273d434b4dc3a3506787f468ad28.setIcon(icon_f6eba821013943518e46c21fc898b4cd);


            marker_0eb6273d434b4dc3a3506787f468ad28.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_48d6cad0154e4deaa5855d9f1e43c9de = L.marker(
                [-27.61978744, 152.9624793],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d5763e4ed28d4dbb968bae82d61061b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_48d6cad0154e4deaa5855d9f1e43c9de.setIcon(icon_d5763e4ed28d4dbb968bae82d61061b9);


            marker_48d6cad0154e4deaa5855d9f1e43c9de.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d260669ccdfc485fb27c8e406e33edcd = L.marker(
                [-27.62097839, 152.9621873],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0f5c528e22f34d1b9dbad5718a8a8b99 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d260669ccdfc485fb27c8e406e33edcd.setIcon(icon_0f5c528e22f34d1b9dbad5718a8a8b99);


            marker_d260669ccdfc485fb27c8e406e33edcd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3cf024a732314e1bbb0f84d4873b6035 = L.marker(
                [-27.62054594, 152.9631074],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_427e1205975a41fa933e944af29fc430 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3cf024a732314e1bbb0f84d4873b6035.setIcon(icon_427e1205975a41fa933e944af29fc430);


            marker_3cf024a732314e1bbb0f84d4873b6035.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d359caa500b743cbbb2572a1dc93f6dd = L.marker(
                [-27.62005792, 152.9625214],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02773eef6c2d4cc6a93eec4b4280997a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d359caa500b743cbbb2572a1dc93f6dd.setIcon(icon_02773eef6c2d4cc6a93eec4b4280997a);


            marker_d359caa500b743cbbb2572a1dc93f6dd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c2c14ab11e544e27aa880649ecc4ad66 = L.marker(
                [-27.62147903, 152.9610528],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_aea381229f034743b41d78fb9c19fd85 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c2c14ab11e544e27aa880649ecc4ad66.setIcon(icon_aea381229f034743b41d78fb9c19fd85);


            marker_c2c14ab11e544e27aa880649ecc4ad66.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1e4c58eb2eeb4a5c90536ebde0a0be40 = L.marker(
                [-27.62196292, 152.9600905],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f7b9d8dcac864a40b89335b9c7c7f556 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1e4c58eb2eeb4a5c90536ebde0a0be40.setIcon(icon_f7b9d8dcac864a40b89335b9c7c7f556);


            marker_1e4c58eb2eeb4a5c90536ebde0a0be40.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7a0138a0e89a43f58ffa0980ee13b13b = L.marker(
                [-27.62316808, 152.9580833],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_39670949bbfe4ca5bb5d588730e3a0f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7a0138a0e89a43f58ffa0980ee13b13b.setIcon(icon_39670949bbfe4ca5bb5d588730e3a0f9);


            marker_7a0138a0e89a43f58ffa0980ee13b13b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f3a8f423922a4ec9b121807713ab2f00 = L.marker(
                [-27.62243521, 152.9642369],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8ecd2637dc944aef8b5cf44eff82453f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f3a8f423922a4ec9b121807713ab2f00.setIcon(icon_8ecd2637dc944aef8b5cf44eff82453f);


            marker_f3a8f423922a4ec9b121807713ab2f00.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a7b04647b72243f8951b2643453573fd = L.marker(
                [-27.62240065, 152.9639363],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ee9cbf779ed04f6286044afc2408255d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7b04647b72243f8951b2643453573fd.setIcon(icon_ee9cbf779ed04f6286044afc2408255d);


            marker_a7b04647b72243f8951b2643453573fd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bc7168b20db240d693a8358e451ad021 = L.marker(
                [-27.62512796, 152.9654064],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3841901c4f3f48f4b9930eb86d9bfefd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc7168b20db240d693a8358e451ad021.setIcon(icon_3841901c4f3f48f4b9930eb86d9bfefd);


            marker_bc7168b20db240d693a8358e451ad021.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_eef13ce99e654da694a0a651f7e337f8 = L.marker(
                [-27.62231629, 152.9666745],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_df9fc900a43140598df7303b245e140c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eef13ce99e654da694a0a651f7e337f8.setIcon(icon_df9fc900a43140598df7303b245e140c);


            marker_eef13ce99e654da694a0a651f7e337f8.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ca96b26e702d4ce8abcdde4482070b21 = L.marker(
                [-27.62146239, 152.9603056],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4ddc085862d349e89febefe5653ecb7a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca96b26e702d4ce8abcdde4482070b21.setIcon(icon_4ddc085862d349e89febefe5653ecb7a);


            marker_ca96b26e702d4ce8abcdde4482070b21.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_347133a673a845e5b59ef44ea148c049 = L.marker(
                [-27.61962212, 152.9627613],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3470c416c82644bb96c2f0397b62b780 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_347133a673a845e5b59ef44ea148c049.setIcon(icon_3470c416c82644bb96c2f0397b62b780);


            marker_347133a673a845e5b59ef44ea148c049.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3752baab7d1c4c28a6bf7779a558a03d = L.marker(
                [-27.62372848, 152.96546840000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fc27d85620d94a2e9e32c8f613cb8b1d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3752baab7d1c4c28a6bf7779a558a03d.setIcon(icon_fc27d85620d94a2e9e32c8f613cb8b1d);


            marker_3752baab7d1c4c28a6bf7779a558a03d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c7cb2ea61eea4d10a1e1b0b794d54c13 = L.marker(
                [-27.62249038, 152.96427490000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_edb02b98f19c40a6b17147019a208bbc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c7cb2ea61eea4d10a1e1b0b794d54c13.setIcon(icon_edb02b98f19c40a6b17147019a208bbc);


            marker_c7cb2ea61eea4d10a1e1b0b794d54c13.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d92be15859e24699b7d0d282cedab4c6 = L.marker(
                [-27.62492465, 152.9639877],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fa9b40c796a249e784550d8f6a084e47 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d92be15859e24699b7d0d282cedab4c6.setIcon(icon_fa9b40c796a249e784550d8f6a084e47);


            marker_d92be15859e24699b7d0d282cedab4c6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e113576ef16a4d20a4e72be00ef8f1c3 = L.marker(
                [-27.62489733, 152.96310590000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e1a6aa059efa48b1ba1e48b003ae897d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e113576ef16a4d20a4e72be00ef8f1c3.setIcon(icon_e1a6aa059efa48b1ba1e48b003ae897d);


            marker_e113576ef16a4d20a4e72be00ef8f1c3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3e0919b6ae5a4cc591a250bc24cf224b = L.marker(
                [-27.62477076, 152.9624269],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_260ffde066ff4f4ba6a892f302f45ee8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3e0919b6ae5a4cc591a250bc24cf224b.setIcon(icon_260ffde066ff4f4ba6a892f302f45ee8);


            marker_3e0919b6ae5a4cc591a250bc24cf224b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d3ee4bbeba7445a6a863ad2b475fbe5e = L.marker(
                [-27.62101159, 152.96740069999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_330c8e5927b3493394fa3ed52ea85551 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3ee4bbeba7445a6a863ad2b475fbe5e.setIcon(icon_330c8e5927b3493394fa3ed52ea85551);


            marker_d3ee4bbeba7445a6a863ad2b475fbe5e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_fdc4a8a891634ac8bc9847f86850de9b = L.marker(
                [-27.62592763, 152.9650291],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5535812c351a41f6ae75b726f5b4d7fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fdc4a8a891634ac8bc9847f86850de9b.setIcon(icon_5535812c351a41f6ae75b726f5b4d7fd);


            marker_fdc4a8a891634ac8bc9847f86850de9b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_677ee6adc15b49eb8ba180fa698be3a1 = L.marker(
                [-27.62374798, 152.9654538],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1b71a135ee4c4c96b3f881bbe22ae4e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_677ee6adc15b49eb8ba180fa698be3a1.setIcon(icon_1b71a135ee4c4c96b3f881bbe22ae4e5);


            marker_677ee6adc15b49eb8ba180fa698be3a1.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4490d6308c184a26ab47ae2b6db47574 = L.marker(
                [-27.62074095, 152.96312859999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_36c89d6ce4124af28ca6e693a44829ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4490d6308c184a26ab47ae2b6db47574.setIcon(icon_36c89d6ce4124af28ca6e693a44829ff);


            marker_4490d6308c184a26ab47ae2b6db47574.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5c3bacdd6a40468b8e5aaf7f12f15448 = L.marker(
                [-27.62172914, 152.960229],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7672d2bbd4cf4c9fb8bd2d1b2be13eb2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5c3bacdd6a40468b8e5aaf7f12f15448.setIcon(icon_7672d2bbd4cf4c9fb8bd2d1b2be13eb2);


            marker_5c3bacdd6a40468b8e5aaf7f12f15448.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e91ab9a0374f49d3a0c20598b485851b = L.marker(
                [-27.4841615, 153.0599105],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_96eed2a206464de2b08d52a09222e040 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e91ab9a0374f49d3a0c20598b485851b.setIcon(icon_96eed2a206464de2b08d52a09222e040);


            marker_e91ab9a0374f49d3a0c20598b485851b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9b18eaee5db14865b549bab907b3e92c = L.marker(
                [-27.62137692, 152.9623521],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e27546b1e07940969fb13adfdeeddd63 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9b18eaee5db14865b549bab907b3e92c.setIcon(icon_e27546b1e07940969fb13adfdeeddd63);


            marker_9b18eaee5db14865b549bab907b3e92c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0ee14a06767846599ba2870028c94abe = L.marker(
                [-27.6223104, 152.96441380000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_078eded096a94bdca99097867bfc49a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0ee14a06767846599ba2870028c94abe.setIcon(icon_078eded096a94bdca99097867bfc49a0);


            marker_0ee14a06767846599ba2870028c94abe.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9804d9750fca45eca7f3d731448549c2 = L.marker(
                [-27.62489719, 152.9625688],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_34090a9455ff493a83039eea4dabfdaf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9804d9750fca45eca7f3d731448549c2.setIcon(icon_34090a9455ff493a83039eea4dabfdaf);


            marker_9804d9750fca45eca7f3d731448549c2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d96e6ecda9be4d2ca5aec37d470b1634 = L.marker(
                [-27.62487011, 152.9625688],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a7dce59296d142509385def3cb64c626 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d96e6ecda9be4d2ca5aec37d470b1634.setIcon(icon_a7dce59296d142509385def3cb64c626);


            marker_d96e6ecda9be4d2ca5aec37d470b1634.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_47fd50ae6b9347879faba98b7eacc647 = L.marker(
                [-27.624752899999997, 152.9631364],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b79cc2c133ae442aa71fd723182a33f5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_47fd50ae6b9347879faba98b7eacc647.setIcon(icon_b79cc2c133ae442aa71fd723182a33f5);


            marker_47fd50ae6b9347879faba98b7eacc647.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c1bed10124aa42c989ec00d398f04ca7 = L.marker(
                [-27.62476192, 152.9631263],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7b8006dd08224d01b4d32cfc2aac93a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c1bed10124aa42c989ec00d398f04ca7.setIcon(icon_7b8006dd08224d01b4d32cfc2aac93a2);


            marker_c1bed10124aa42c989ec00d398f04ca7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_07e00ee049a441f6869131674cc65a9c = L.marker(
                [-27.62473458, 152.9621532],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d7e687d04daf43c8bd30370c02bee29c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07e00ee049a441f6869131674cc65a9c.setIcon(icon_d7e687d04daf43c8bd30370c02bee29c);


            marker_07e00ee049a441f6869131674cc65a9c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f021c44a750a49408a5908f6e7bf1fe0 = L.marker(
                [-27.62228729, 152.9644012],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ecf3ec1ff733479b89f333366448d6a9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f021c44a750a49408a5908f6e7bf1fe0.setIcon(icon_ecf3ec1ff733479b89f333366448d6a9);


            marker_f021c44a750a49408a5908f6e7bf1fe0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0d2f2a6659144de6ad5b83c76624ba4d = L.marker(
                [-27.62137107, 152.9623926],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_95d57f29b7fe49b6ad74ac85d063bdc7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0d2f2a6659144de6ad5b83c76624ba4d.setIcon(icon_95d57f29b7fe49b6ad74ac85d063bdc7);


            marker_0d2f2a6659144de6ad5b83c76624ba4d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8f21959f69744e119e692c670ad8ad78 = L.marker(
                [-27.48476416, 153.0614669],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d396dab82bf94467964d454c9219b5ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f21959f69744e119e692c670ad8ad78.setIcon(icon_d396dab82bf94467964d454c9219b5ae);


            marker_8f21959f69744e119e692c670ad8ad78.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_80f12fef781c46ca9dbe6678adb1c53d = L.marker(
                [-27.62538807, 152.96516330000003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_30b1b0819b6d404ebbfab2e8c0e96c45 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_80f12fef781c46ca9dbe6678adb1c53d.setIcon(icon_30b1b0819b6d404ebbfab2e8c0e96c45);


            marker_80f12fef781c46ca9dbe6678adb1c53d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_44d687fa26014e7c8358d240b45b415d = L.marker(
                [-27.62548479, 152.96527319999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_affa12cd59f74b82b71ac902bbb20b30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_44d687fa26014e7c8358d240b45b415d.setIcon(icon_affa12cd59f74b82b71ac902bbb20b30);


            marker_44d687fa26014e7c8358d240b45b415d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2a91572277e54cf295c1e44b9cafaa40 = L.marker(
                [-27.62540111, 152.9652997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_860db5dfb6bd49d092f274d8afd1c2bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2a91572277e54cf295c1e44b9cafaa40.setIcon(icon_860db5dfb6bd49d092f274d8afd1c2bb);


            marker_2a91572277e54cf295c1e44b9cafaa40.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a632534bcd1a4347832274622071d916 = L.marker(
                [-27.62543876, 152.9653041],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3ba8d65dce6c4242add67dc16c592b0a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a632534bcd1a4347832274622071d916.setIcon(icon_3ba8d65dce6c4242add67dc16c592b0a);


            marker_a632534bcd1a4347832274622071d916.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3d4822748e864a7d97620a74bcffb66e = L.marker(
                [-27.62478232, 152.96310590000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7b332a97d7f54788abba321be3241e78 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d4822748e864a7d97620a74bcffb66e.setIcon(icon_7b332a97d7f54788abba321be3241e78);


            marker_3d4822748e864a7d97620a74bcffb66e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_811433c21b3d439e9b349e97167a1b50 = L.marker(
                [-27.622253100000002, 152.96670490000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e76b2b5a3f8b468f80952be2358685ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_811433c21b3d439e9b349e97167a1b50.setIcon(icon_e76b2b5a3f8b468f80952be2358685ed);


            marker_811433c21b3d439e9b349e97167a1b50.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cd7467243b62463cac50a883ab143bbe = L.marker(
                [-27.62226922, 152.9661484],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a4fd9d4ac08e412aabbf655305f6166a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cd7467243b62463cac50a883ab143bbe.setIcon(icon_a4fd9d4ac08e412aabbf655305f6166a);


            marker_cd7467243b62463cac50a883ab143bbe.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4bac75b737ee4ed78a6645575f4b4094 = L.marker(
                [-27.62193021, 152.96721499999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6eb948a612114cd393eaf06e90be6066 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4bac75b737ee4ed78a6645575f4b4094.setIcon(icon_6eb948a612114cd393eaf06e90be6066);


            marker_4bac75b737ee4ed78a6645575f4b4094.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_fe9c6b0544a34b30a7b66875601f2d8c = L.marker(
                [-27.6218886, 152.9668809],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bddd42ef98a94825bcabfc9390782a3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fe9c6b0544a34b30a7b66875601f2d8c.setIcon(icon_bddd42ef98a94825bcabfc9390782a3b);


            marker_fe9c6b0544a34b30a7b66875601f2d8c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a8df919dcca74ed79659d27368771808 = L.marker(
                [-27.62192294, 152.9670236],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e96ce453a02344c79c2100674691cf98 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a8df919dcca74ed79659d27368771808.setIcon(icon_e96ce453a02344c79c2100674691cf98);


            marker_a8df919dcca74ed79659d27368771808.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_31c0bf805c864a3aa52630b2c032abba = L.marker(
                [-27.62182628, 152.9671484],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cea990193a3249d1ad41ac3b0e351270 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_31c0bf805c864a3aa52630b2c032abba.setIcon(icon_cea990193a3249d1ad41ac3b0e351270);


            marker_31c0bf805c864a3aa52630b2c032abba.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3119d70988c24cc0952084e873f5db08 = L.marker(
                [-27.62201044, 152.96712390000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c338785f9f1a48889a0b87a36b1c18f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3119d70988c24cc0952084e873f5db08.setIcon(icon_c338785f9f1a48889a0b87a36b1c18f0);


            marker_3119d70988c24cc0952084e873f5db08.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_658bc5ac72d249698b5e3cd686f38057 = L.marker(
                [-27.62032514, 152.9638707],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f57ac7921336402e9ac6976810d391ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_658bc5ac72d249698b5e3cd686f38057.setIcon(icon_f57ac7921336402e9ac6976810d391ce);


            marker_658bc5ac72d249698b5e3cd686f38057.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a63d4998018e4f208d2e3d1e6c5495a0 = L.marker(
                [-27.62548389, 152.96218340000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9fcfd82a84a04233ab22b5bac60dfed6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a63d4998018e4f208d2e3d1e6c5495a0.setIcon(icon_9fcfd82a84a04233ab22b5bac60dfed6);


            marker_a63d4998018e4f208d2e3d1e6c5495a0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5e1e4d85ad64455bb626448cd976b582 = L.marker(
                [-27.62001666, 152.9656355],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f46035aea2294ae0a37a128fc2484574 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e1e4d85ad64455bb626448cd976b582.setIcon(icon_f46035aea2294ae0a37a128fc2484574);


            marker_5e1e4d85ad64455bb626448cd976b582.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a93d3e83f51b4bb6a0f524b4b141bbb5 = L.marker(
                [-27.62274907, 152.9644648],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3fd3f10eda194db0bff4d140f686333f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a93d3e83f51b4bb6a0f524b4b141bbb5.setIcon(icon_3fd3f10eda194db0bff4d140f686333f);


            marker_a93d3e83f51b4bb6a0f524b4b141bbb5.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e58eafd21580407095eb0e51fb1be645 = L.marker(
                [-27.62562615, 152.95488559999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3c0ff2beb1e84488bb77d9b4e786285f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e58eafd21580407095eb0e51fb1be645.setIcon(icon_3c0ff2beb1e84488bb77d9b4e786285f);


            marker_e58eafd21580407095eb0e51fb1be645.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b7c7551fdce14bedbcef812b8a4df8b1 = L.marker(
                [-27.62210808, 152.9643738],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1502918b405148b09ec4bf97e1e85809 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b7c7551fdce14bedbcef812b8a4df8b1.setIcon(icon_1502918b405148b09ec4bf97e1e85809);


            marker_b7c7551fdce14bedbcef812b8a4df8b1.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_95d925be2af145abab0a379f060d8c70 = L.marker(
                [-27.62497027, 152.9641189],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_705a4bae65e1430d87de94188c8e866e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_95d925be2af145abab0a379f060d8c70.setIcon(icon_705a4bae65e1430d87de94188c8e866e);


            marker_95d925be2af145abab0a379f060d8c70.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7c6fd719583b4c83b83aef4ea60ecb48 = L.marker(
                [-27.62529066, 152.96204880000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e0b4d09df0414dd28ae37176da83ed02 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7c6fd719583b4c83b83aef4ea60ecb48.setIcon(icon_e0b4d09df0414dd28ae37176da83ed02);


            marker_7c6fd719583b4c83b83aef4ea60ecb48.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bba01cd36b314725a81f4486dd47e5c7 = L.marker(
                [-27.62206344, 152.9663908],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5460a46303a24bea9470aa17fa17b3b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bba01cd36b314725a81f4486dd47e5c7.setIcon(icon_5460a46303a24bea9470aa17fa17b3b2);


            marker_bba01cd36b314725a81f4486dd47e5c7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6070cea838ce4ce0b5c91aa1575a1bb0 = L.marker(
                [-27.62233422, 152.9665228],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f9c0e5add39641dfb8fef5dcebcd4f67 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6070cea838ce4ce0b5c91aa1575a1bb0.setIcon(icon_f9c0e5add39641dfb8fef5dcebcd4f67);


            marker_6070cea838ce4ce0b5c91aa1575a1bb0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f0ad18647c4b48f98f57dfc5a4ac086c = L.marker(
                [-27.622427000000002, 152.9664267],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_66123df708c34f2788194253ec85f42f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f0ad18647c4b48f98f57dfc5a4ac086c.setIcon(icon_66123df708c34f2788194253ec85f42f);


            marker_f0ad18647c4b48f98f57dfc5a4ac086c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e95369a772c84ee398ab634217d6446c = L.marker(
                [-27.62161132, 152.9634821],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_49728cfa2de54da6950ff93807d9a84d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e95369a772c84ee398ab634217d6446c.setIcon(icon_49728cfa2de54da6950ff93807d9a84d);


            marker_e95369a772c84ee398ab634217d6446c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bc76d0245bc94af2a8f56517683f3604 = L.marker(
                [-27.48416603, 153.0598745],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3a3e062dbb964515b7d1b47d1ab7ac6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc76d0245bc94af2a8f56517683f3604.setIcon(icon_3a3e062dbb964515b7d1b47d1ab7ac6a);


            marker_bc76d0245bc94af2a8f56517683f3604.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f549ec2f887b49e5be81952e358b059a = L.marker(
                [-27.62180767, 152.9667139],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2355915fc08948d89b89688babf79c7f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f549ec2f887b49e5be81952e358b059a.setIcon(icon_2355915fc08948d89b89688babf79c7f);


            marker_f549ec2f887b49e5be81952e358b059a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d4f78b05e7de4464ae924ea17e11d4c7 = L.marker(
                [-27.62542147, 152.9651532],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_10acc3632c364b1a9c5549379f5ba5dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4f78b05e7de4464ae924ea17e11d4c7.setIcon(icon_10acc3632c364b1a9c5549379f5ba5dd);


            marker_d4f78b05e7de4464ae924ea17e11d4c7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_50843d618fc14fa0adb2f172fe7b1073 = L.marker(
                [-27.62010633, 152.96576090000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ddc83d61132f42ad8431cda4bda0d6b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_50843d618fc14fa0adb2f172fe7b1073.setIcon(icon_ddc83d61132f42ad8431cda4bda0d6b4);


            marker_50843d618fc14fa0adb2f172fe7b1073.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_38952b8e072749cc8ebf4a2d5f586c00 = L.marker(
                [-27.61992434, 152.96577649999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_68b3ce536ad24ee0889bac1bf9b51e4d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38952b8e072749cc8ebf4a2d5f586c00.setIcon(icon_68b3ce536ad24ee0889bac1bf9b51e4d);


            marker_38952b8e072749cc8ebf4a2d5f586c00.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_dee29dd1319a4f76a4106beae893929c = L.marker(
                [-27.62487002, 152.9622647],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a0d42e242f604d9897370cefe4637e3a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dee29dd1319a4f76a4106beae893929c.setIcon(icon_a0d42e242f604d9897370cefe4637e3a);


            marker_dee29dd1319a4f76a4106beae893929c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8bf3e4ef5dff4c22b6a470d51a28aeb3 = L.marker(
                [-27.62018477, 152.9628845],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_72a08b53b6f14e13b5c14684580fdb92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8bf3e4ef5dff4c22b6a470d51a28aeb3.setIcon(icon_72a08b53b6f14e13b5c14684580fdb92);


            marker_8bf3e4ef5dff4c22b6a470d51a28aeb3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f04ebb5d3a8c4847b48d2f607faa48aa = L.marker(
                [-27.62140344, 152.9626003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f41991700f184646a12ac59a241260d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f04ebb5d3a8c4847b48d2f607faa48aa.setIcon(icon_f41991700f184646a12ac59a241260d5);


            marker_f04ebb5d3a8c4847b48d2f607faa48aa.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6702748191914ce28b3568bd2e3f9c1c = L.marker(
                [-27.48486804, 153.061124],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ffdc2e551ac7487783932e98c5f6399f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6702748191914ce28b3568bd2e3f9c1c.setIcon(icon_ffdc2e551ac7487783932e98c5f6399f);


            marker_6702748191914ce28b3568bd2e3f9c1c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1e5a983e1ba8432b8228fb162c6abe27 = L.marker(
                [-27.620155199999996, 152.966609],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4e51bb729a1f49d19e73e4917a089144 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1e5a983e1ba8432b8228fb162c6abe27.setIcon(icon_4e51bb729a1f49d19e73e4917a089144);


            marker_1e5a983e1ba8432b8228fb162c6abe27.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2384944de3d343eb8b39101048b924dc = L.marker(
                [-27.62021412, 152.9657388],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_94ed6a4a6e0f47869c1ef1114e218e8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2384944de3d343eb8b39101048b924dc.setIcon(icon_94ed6a4a6e0f47869c1ef1114e218e8b);


            marker_2384944de3d343eb8b39101048b924dc.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_66d7d41a6d3f45bcaec8589ebcdd7796 = L.marker(
                [-27.62038228, 152.9656074],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_06eca56542d44d189982c7b42a96aca8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66d7d41a6d3f45bcaec8589ebcdd7796.setIcon(icon_06eca56542d44d189982c7b42a96aca8);


            marker_66d7d41a6d3f45bcaec8589ebcdd7796.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5f71f21eb88146abbdae69ae72cfde1d = L.marker(
                [-27.62049088, 152.96525590000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a13187b2763140459ac07a1697c9b8e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f71f21eb88146abbdae69ae72cfde1d.setIcon(icon_a13187b2763140459ac07a1697c9b8e6);


            marker_5f71f21eb88146abbdae69ae72cfde1d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7bc853ed811b42c282b63b7b9bb84247 = L.marker(
                [-27.62063229, 152.9646518],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3a275e50c00040dda2aab5b67551d799 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7bc853ed811b42c282b63b7b9bb84247.setIcon(icon_3a275e50c00040dda2aab5b67551d799);


            marker_7bc853ed811b42c282b63b7b9bb84247.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1614464ce862469b9a6c15bab9092a23 = L.marker(
                [-27.62048384, 152.9638169],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fd1108da7ddc431b89c77cab548ee5b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1614464ce862469b9a6c15bab9092a23.setIcon(icon_fd1108da7ddc431b89c77cab548ee5b6);


            marker_1614464ce862469b9a6c15bab9092a23.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3bc16ac29b844927b38e742c0b146715 = L.marker(
                [-27.62038066, 152.963526],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f6067be750e74536921161de633f81ad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3bc16ac29b844927b38e742c0b146715.setIcon(icon_f6067be750e74536921161de633f81ad);


            marker_3bc16ac29b844927b38e742c0b146715.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_21b6709b7da74ff88912849c9f6a4ee8 = L.marker(
                [-27.624838099999998, 152.96272869999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_57b39851c1cf447eb6a6951065a9af26 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_21b6709b7da74ff88912849c9f6a4ee8.setIcon(icon_57b39851c1cf447eb6a6951065a9af26);


            marker_21b6709b7da74ff88912849c9f6a4ee8.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1f7ed5a35d504af5a716e2e71a826480 = L.marker(
                [-27.46811097, 153.189841],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cd7f0d55bad14c33a7ebf600ab6d7056 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f7ed5a35d504af5a716e2e71a826480.setIcon(icon_cd7f0d55bad14c33a7ebf600ab6d7056);


            marker_1f7ed5a35d504af5a716e2e71a826480.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e7cab0cd0bca42aea83471809a92570b = L.marker(
                [-27.6210812, 152.96242969999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4ead885e317e41afbea15a0485ca00de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7cab0cd0bca42aea83471809a92570b.setIcon(icon_4ead885e317e41afbea15a0485ca00de);


            marker_e7cab0cd0bca42aea83471809a92570b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_825234854f6c4561a5da29b646f84d1c = L.marker(
                [-27.62503573, 152.9637866],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b3b69265541f4d818183c5c0adfeb403 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_825234854f6c4561a5da29b646f84d1c.setIcon(icon_b3b69265541f4d818183c5c0adfeb403);


            marker_825234854f6c4561a5da29b646f84d1c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_20fea586ed714b14a2c4cf3eb9653089 = L.marker(
                [-27.62501681, 152.9639292],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d6f08c12581d457a83f5285d69dea6db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20fea586ed714b14a2c4cf3eb9653089.setIcon(icon_d6f08c12581d457a83f5285d69dea6db);


            marker_20fea586ed714b14a2c4cf3eb9653089.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_aa874e97eba44c4598870429d9a9600f = L.marker(
                [-27.62505265, 152.96393740000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fab12ca7d39b431e92133cae0b654aeb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa874e97eba44c4598870429d9a9600f.setIcon(icon_fab12ca7d39b431e92133cae0b654aeb);


            marker_aa874e97eba44c4598870429d9a9600f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1a194cc983c84744a9a177cfa6f9556a = L.marker(
                [-27.62498643, 152.9640979],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_59336813f24e48d19fca67d2265b8fd8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a194cc983c84744a9a177cfa6f9556a.setIcon(icon_59336813f24e48d19fca67d2265b8fd8);


            marker_1a194cc983c84744a9a177cfa6f9556a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a62a874cafca4a919338fb1e2c1cebbe = L.marker(
                [-27.62498407, 152.9644084],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_092369b091794de88746c6dc3577a07b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a62a874cafca4a919338fb1e2c1cebbe.setIcon(icon_092369b091794de88746c6dc3577a07b);


            marker_a62a874cafca4a919338fb1e2c1cebbe.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e184b0445e134d029cb8a0007defcd4f = L.marker(
                [-27.62517949, 152.9646261],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_22ccbcda97664c058b3ffaa39ad4c5e4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e184b0445e134d029cb8a0007defcd4f.setIcon(icon_22ccbcda97664c058b3ffaa39ad4c5e4);


            marker_e184b0445e134d029cb8a0007defcd4f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_87c2db008dc94b05a8b862f7574ba021 = L.marker(
                [-27.28616076, 153.0638882],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6e2b25985f47490cbb845037966e4899 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_87c2db008dc94b05a8b862f7574ba021.setIcon(icon_6e2b25985f47490cbb845037966e4899);


            marker_87c2db008dc94b05a8b862f7574ba021.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_196378b40168432e96d7a8af7e43af2a = L.marker(
                [-27.621020399999995, 152.9672661],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_853546123a194a859976da06339896d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_196378b40168432e96d7a8af7e43af2a.setIcon(icon_853546123a194a859976da06339896d6);


            marker_196378b40168432e96d7a8af7e43af2a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1f2da23585314f24a7317a408e7c94bf = L.marker(
                [-27.62021167, 152.9660356],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7092b9395f6d409e9c9036ab0d744581 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f2da23585314f24a7317a408e7c94bf.setIcon(icon_7092b9395f6d409e9c9036ab0d744581);


            marker_1f2da23585314f24a7317a408e7c94bf.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_78775cdb02fc424894e29de1e2337671 = L.marker(
                [-27.62023455, 152.96622649999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_56adb2c5e9404a55a9e27b77fc48cc77 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_78775cdb02fc424894e29de1e2337671.setIcon(icon_56adb2c5e9404a55a9e27b77fc48cc77);


            marker_78775cdb02fc424894e29de1e2337671.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_54885692edb24d6d9ca307ad0d5e4585 = L.marker(
                [-27.62081746, 152.96296669999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c3454a5f56244350a6a949337cde44da = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54885692edb24d6d9ca307ad0d5e4585.setIcon(icon_c3454a5f56244350a6a949337cde44da);


            marker_54885692edb24d6d9ca307ad0d5e4585.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_83b92eb3c40b488ca463e2c6c7947220 = L.marker(
                [-27.62031298, 152.9633017],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_928c74a59f3d42ecb3b4cdff9755661d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_83b92eb3c40b488ca463e2c6c7947220.setIcon(icon_928c74a59f3d42ecb3b4cdff9755661d);


            marker_83b92eb3c40b488ca463e2c6c7947220.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d85d2b983c0147a2aefdee7c6e1e7546 = L.marker(
                [-27.62091598, 152.9627525],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0facc570855e40919e8526a7ea6a7294 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d85d2b983c0147a2aefdee7c6e1e7546.setIcon(icon_0facc570855e40919e8526a7ea6a7294);


            marker_d85d2b983c0147a2aefdee7c6e1e7546.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1ef8c4731b6044a181efd2d62f2a4a25 = L.marker(
                [-27.62186266, 152.96385790000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_abf0e293641a4199bf5ac1e6eed9ebf2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ef8c4731b6044a181efd2d62f2a4a25.setIcon(icon_abf0e293641a4199bf5ac1e6eed9ebf2);


            marker_1ef8c4731b6044a181efd2d62f2a4a25.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d4a71d33141445f39af615659fc765b7 = L.marker(
                [-27.62373709, 152.9638377],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c6accd9ba72c4b0a970384dfe4560d05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4a71d33141445f39af615659fc765b7.setIcon(icon_c6accd9ba72c4b0a970384dfe4560d05);


            marker_d4a71d33141445f39af615659fc765b7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bd101b4c736448279994eae788ae2236 = L.marker(
                [-27.62413633, 152.96361090000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_11a7c89983594e19a1f89fa7b17363aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd101b4c736448279994eae788ae2236.setIcon(icon_11a7c89983594e19a1f89fa7b17363aa);


            marker_bd101b4c736448279994eae788ae2236.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4ad355c9950a4139886ef9b617fcf68c = L.marker(
                [-27.62447535, 152.9633513],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f9fa898b2f4049a281f9ce798c9d6970 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4ad355c9950a4139886ef9b617fcf68c.setIcon(icon_f9fa898b2f4049a281f9ce798c9d6970);


            marker_4ad355c9950a4139886ef9b617fcf68c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8dce6cce91c14e47926788463e63819b = L.marker(
                [-27.62541119, 152.9648106],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9642c99b53a84fec90a706b44c931ab7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8dce6cce91c14e47926788463e63819b.setIcon(icon_9642c99b53a84fec90a706b44c931ab7);


            marker_8dce6cce91c14e47926788463e63819b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d7607c4abfe442d7b28d44debd6c3430 = L.marker(
                [-27.62590167, 152.9648267],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e9d911d134144ad3b5f4170b29a6063a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7607c4abfe442d7b28d44debd6c3430.setIcon(icon_e9d911d134144ad3b5f4170b29a6063a);


            marker_d7607c4abfe442d7b28d44debd6c3430.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4b3f1f73bad04cbaaf1852fd198ee6ba = L.marker(
                [-27.62563687, 152.9647814],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_97562d8bd1734695aea55144662fa78f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4b3f1f73bad04cbaaf1852fd198ee6ba.setIcon(icon_97562d8bd1734695aea55144662fa78f);


            marker_4b3f1f73bad04cbaaf1852fd198ee6ba.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1419c51b977e49e7824525c1d305fa76 = L.marker(
                [-27.62508573, 152.9651509],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_58d0355c0d654ed68ead409724cd5bf8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1419c51b977e49e7824525c1d305fa76.setIcon(icon_58d0355c0d654ed68ead409724cd5bf8);


            marker_1419c51b977e49e7824525c1d305fa76.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a5a649752b434ccf8c977928a6715e31 = L.marker(
                [-27.62042293, 152.9668393],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b57617ac547948b0b65c292e6b802856 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a5a649752b434ccf8c977928a6715e31.setIcon(icon_b57617ac547948b0b65c292e6b802856);


            marker_a5a649752b434ccf8c977928a6715e31.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ac45976ab3534b43bb0ae57ec8122065 = L.marker(
                [-27.62428292, 152.964904],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d96fc2de52904c33b43e57bf462f4212 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ac45976ab3534b43bb0ae57ec8122065.setIcon(icon_d96fc2de52904c33b43e57bf462f4212);


            marker_ac45976ab3534b43bb0ae57ec8122065.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2665e803c0f9405b8f8ef9e7ddb7e201 = L.marker(
                [-27.62378604, 152.96495],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9c62c094200f44619fe4dc9f1520431c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2665e803c0f9405b8f8ef9e7ddb7e201.setIcon(icon_9c62c094200f44619fe4dc9f1520431c);


            marker_2665e803c0f9405b8f8ef9e7ddb7e201.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d29b82f6bec645fe91a66323b79d3a52 = L.marker(
                [-27.6236299, 152.9650969],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_46430c53e82c414ab1ae55b341caf1e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d29b82f6bec645fe91a66323b79d3a52.setIcon(icon_46430c53e82c414ab1ae55b341caf1e7);


            marker_d29b82f6bec645fe91a66323b79d3a52.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4498607486f94d5a8a0e19370a1abed3 = L.marker(
                [-27.62358663, 152.96537619999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c37f7a31fa224757a5f8a2af8ea8b50b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4498607486f94d5a8a0e19370a1abed3.setIcon(icon_c37f7a31fa224757a5f8a2af8ea8b50b);


            marker_4498607486f94d5a8a0e19370a1abed3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2db269bf163f410c963194f5c267c33c = L.marker(
                [-27.6233973, 152.965293],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7916644ab2d445d39cc30a92a3b7ccff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2db269bf163f410c963194f5c267c33c.setIcon(icon_7916644ab2d445d39cc30a92a3b7ccff);


            marker_2db269bf163f410c963194f5c267c33c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_09b0602d15f247bcb54c40b19ed98390 = L.marker(
                [-27.62295636, 152.96557909999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cb78d480739c41cdb1bd6fb71c39cb35 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_09b0602d15f247bcb54c40b19ed98390.setIcon(icon_cb78d480739c41cdb1bd6fb71c39cb35);


            marker_09b0602d15f247bcb54c40b19ed98390.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bc4cb729700a4920ad4d4dd32007fb77 = L.marker(
                [-27.620217600000004, 152.9659452],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6a102cfd1f674fcf8f57c9f903bec9a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc4cb729700a4920ad4d4dd32007fb77.setIcon(icon_6a102cfd1f674fcf8f57c9f903bec9a0);


            marker_bc4cb729700a4920ad4d4dd32007fb77.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f88ba696a7e240ec8e99d05c47ea6a2f = L.marker(
                [-27.62012194, 152.9660697],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bb9b4d734dc042268fdcc45527f182b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f88ba696a7e240ec8e99d05c47ea6a2f.setIcon(icon_bb9b4d734dc042268fdcc45527f182b9);


            marker_f88ba696a7e240ec8e99d05c47ea6a2f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_19d4a58ce9b84608a37b28f7b173dfbf = L.marker(
                [-27.62336284, 152.9639781],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2122df94dd5a4dcab3d9995d1eab4689 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_19d4a58ce9b84608a37b28f7b173dfbf.setIcon(icon_2122df94dd5a4dcab3d9995d1eab4689);


            marker_19d4a58ce9b84608a37b28f7b173dfbf.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_906a66836f1141f5b0b0e137c6f94bfb = L.marker(
                [-27.62143968, 152.9630767],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_35185ede2b0943e89275df9cff32dbda = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_906a66836f1141f5b0b0e137c6f94bfb.setIcon(icon_35185ede2b0943e89275df9cff32dbda);


            marker_906a66836f1141f5b0b0e137c6f94bfb.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ac56dfac8b96406cb268f6020541f8a0 = L.marker(
                [-27.62233003, 152.9660239],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1138a97249e345fca2aeb49783ea6040 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ac56dfac8b96406cb268f6020541f8a0.setIcon(icon_1138a97249e345fca2aeb49783ea6040);


            marker_ac56dfac8b96406cb268f6020541f8a0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_61931d466be64becbca789eb2bcdeb9e = L.marker(
                [-27.62218074, 152.9661374],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6b342ea761204ccfa2e0cfe975deddc3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_61931d466be64becbca789eb2bcdeb9e.setIcon(icon_6b342ea761204ccfa2e0cfe975deddc3);


            marker_61931d466be64becbca789eb2bcdeb9e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6ba728a8f8a54037b69ff2eadaa3b303 = L.marker(
                [-27.62210422, 152.96626],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3d96cf5d782a4f9aab07bb5186b49015 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6ba728a8f8a54037b69ff2eadaa3b303.setIcon(icon_3d96cf5d782a4f9aab07bb5186b49015);


            marker_6ba728a8f8a54037b69ff2eadaa3b303.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_92d0d3f0cab94743b5aa5d95bdf34e45 = L.marker(
                [-27.62515967, 152.9620467],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_52f0aee04a8b41a5ae6a881b9d225b2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_92d0d3f0cab94743b5aa5d95bdf34e45.setIcon(icon_52f0aee04a8b41a5ae6a881b9d225b2a);


            marker_92d0d3f0cab94743b5aa5d95bdf34e45.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8dc0fd1a9b1a48bfaf9074ba53f9548f = L.marker(
                [-27.62025914, 152.9667335],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_09c4b418db614c2c83bf036e061e70bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8dc0fd1a9b1a48bfaf9074ba53f9548f.setIcon(icon_09c4b418db614c2c83bf036e061e70bf);


            marker_8dc0fd1a9b1a48bfaf9074ba53f9548f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cd69f512a63646329ad864c8b7eba994 = L.marker(
                [-27.62210588, 152.9668116],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f9bb171181874649818624348aa7779a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cd69f512a63646329ad864c8b7eba994.setIcon(icon_f9bb171181874649818624348aa7779a);


            marker_cd69f512a63646329ad864c8b7eba994.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f72c8a30339947e7a42c3cd6075049b9 = L.marker(
                [-27.61996693, 152.96643909999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9fcce18631234af89c2e53971527931a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f72c8a30339947e7a42c3cd6075049b9.setIcon(icon_9fcce18631234af89c2e53971527931a);


            marker_f72c8a30339947e7a42c3cd6075049b9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_22572fe2213541e79027f5f8cb905c22 = L.marker(
                [-27.62494272, 152.96405869999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4de8eb5ab5074243b0f37132ceb21d37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_22572fe2213541e79027f5f8cb905c22.setIcon(icon_4de8eb5ab5074243b0f37132ceb21d37);


            marker_22572fe2213541e79027f5f8cb905c22.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3cd49ab7a8914763afb5e02ffff851b9 = L.marker(
                [-27.62094392, 152.9671975],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_31601ecfc67d4740912ea6af7fd9ce0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3cd49ab7a8914763afb5e02ffff851b9.setIcon(icon_31601ecfc67d4740912ea6af7fd9ce0c);


            marker_3cd49ab7a8914763afb5e02ffff851b9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2ba5d925e4fb4d128ceb73dcb940cdb8 = L.marker(
                [-27.61996359, 152.9664354],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_765af2bf2f33443580a86cb1a2f1b172 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ba5d925e4fb4d128ceb73dcb940cdb8.setIcon(icon_765af2bf2f33443580a86cb1a2f1b172);


            marker_2ba5d925e4fb4d128ceb73dcb940cdb8.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a9748206f22f48f887034ae11646941a = L.marker(
                [-27.6231828, 152.95810580000003],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f8e1dfa57a41468db0e8106f6e3ef64f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a9748206f22f48f887034ae11646941a.setIcon(icon_f8e1dfa57a41468db0e8106f6e3ef64f);


            marker_a9748206f22f48f887034ae11646941a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_35b467b034974e4ba22008c4eb5059a1 = L.marker(
                [-27.62261867, 152.9581549],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c508d6ee50ab4ceca5f95ecc7b729b0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_35b467b034974e4ba22008c4eb5059a1.setIcon(icon_c508d6ee50ab4ceca5f95ecc7b729b0c);


            marker_35b467b034974e4ba22008c4eb5059a1.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f2b41b13c4b3481fac8e9e31b0f16f20 = L.marker(
                [-27.61998955, 152.9655431],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c46e0c018d3c44a7964a304c2aa4ffba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f2b41b13c4b3481fac8e9e31b0f16f20.setIcon(icon_c46e0c018d3c44a7964a304c2aa4ffba);


            marker_f2b41b13c4b3481fac8e9e31b0f16f20.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6fa125fd67424dceab00d2d28111f18c = L.marker(
                [-27.62145052, 152.9611219],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8779363247b844229123bcfefd3f4cfe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6fa125fd67424dceab00d2d28111f18c.setIcon(icon_8779363247b844229123bcfefd3f4cfe);


            marker_6fa125fd67424dceab00d2d28111f18c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0267554fe0c045d3800a9d23fe86cf26 = L.marker(
                [-27.61990812, 152.9627589],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cea921bc01694d69b0d1b14ec84a5e53 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0267554fe0c045d3800a9d23fe86cf26.setIcon(icon_cea921bc01694d69b0d1b14ec84a5e53);


            marker_0267554fe0c045d3800a9d23fe86cf26.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0e6968a2e7294834af21d87c5fe0fcdd = L.marker(
                [-27.62041235, 152.9628539],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a571f71b571d427f8a1b8e78fd389daa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e6968a2e7294834af21d87c5fe0fcdd.setIcon(icon_a571f71b571d427f8a1b8e78fd389daa);


            marker_0e6968a2e7294834af21d87c5fe0fcdd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_19b72eaa42fe4d2cadb41482da7c1c0f = L.marker(
                [-27.62225297, 152.9661576],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0df301e3125048b4af009a2afa36cf97 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_19b72eaa42fe4d2cadb41482da7c1c0f.setIcon(icon_0df301e3125048b4af009a2afa36cf97);


            marker_19b72eaa42fe4d2cadb41482da7c1c0f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_487ffd5e6fee47b09159783ee640923f = L.marker(
                [-27.62223505, 152.96670490000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_adfe0bb4619c478fa25591bf256acf55 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_487ffd5e6fee47b09159783ee640923f.setIcon(icon_adfe0bb4619c478fa25591bf256acf55);


            marker_487ffd5e6fee47b09159783ee640923f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1b6931f2c79541aba480a4a20abf7aac = L.marker(
                [-27.62143922, 152.9613739],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_74737dca9f3b4a5aa8d663999a4b4b85 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1b6931f2c79541aba480a4a20abf7aac.setIcon(icon_74737dca9f3b4a5aa8d663999a4b4b85);


            marker_1b6931f2c79541aba480a4a20abf7aac.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c26f8259bbb64386b584c877ffee7e55 = L.marker(
                [-27.61995782, 152.9661002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_174284f2b7ea4623955ec867250245c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c26f8259bbb64386b584c877ffee7e55.setIcon(icon_174284f2b7ea4623955ec867250245c3);


            marker_c26f8259bbb64386b584c877ffee7e55.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_fe9afd70a9f14f7daf8668dbd060d1fd = L.marker(
                [-27.62242696, 152.958292],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_83168ebf3c7c40b6af86e0ccde8fdb43 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fe9afd70a9f14f7daf8668dbd060d1fd.setIcon(icon_83168ebf3c7c40b6af86e0ccde8fdb43);


            marker_fe9afd70a9f14f7daf8668dbd060d1fd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0ecc37ba57464472b9923654c2ebb675 = L.marker(
                [-26.62242696, 152.9621984],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8811bed8dc3441db86af54315f459fc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0ecc37ba57464472b9923654c2ebb675.setIcon(icon_8811bed8dc3441db86af54315f459fc5);


            marker_0ecc37ba57464472b9923654c2ebb675.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1426f7605a0d4c6faa6eaf2e81662346 = L.marker(
                [-27.62261867, 152.9625534],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_edf688d8031940008831e9d341b8570b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1426f7605a0d4c6faa6eaf2e81662346.setIcon(icon_edf688d8031940008831e9d341b8570b);


            marker_1426f7605a0d4c6faa6eaf2e81662346.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ae53174d2f9e46818f88b516654572c4 = L.marker(
                [-27.61998955, 152.9666745],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e05c8ad25e08492983e933540a7c49bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ae53174d2f9e46818f88b516654572c4.setIcon(icon_e05c8ad25e08492983e933540a7c49bb);


            marker_ae53174d2f9e46818f88b516654572c4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1d977b57012c4d5ab4511d9a7b6a6c97 = L.marker(
                [-27.62145052, 152.9624342],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8de3a43bdf16476bbe62cd2a8d866ad0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d977b57012c4d5ab4511d9a7b6a6c97.setIcon(icon_8de3a43bdf16476bbe62cd2a8d866ad0);


            marker_1d977b57012c4d5ab4511d9a7b6a6c97.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1ef08480a76c450d86aacb3b3bcc0ab7 = L.marker(
                [-27.61990812, 152.96276269999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf8816d76519449caf52e768a4ecafe4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ef08480a76c450d86aacb3b3bcc0ab7.setIcon(icon_cf8816d76519449caf52e768a4ecafe4);


            marker_1ef08480a76c450d86aacb3b3bcc0ab7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c32c74f88ae243358f22a99eb1b9267f = L.marker(
                [-27.62041235, 152.9660886],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b6cf49a2b9f848f490ea6b59766ff5b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c32c74f88ae243358f22a99eb1b9267f.setIcon(icon_b6cf49a2b9f848f490ea6b59766ff5b0);


            marker_c32c74f88ae243358f22a99eb1b9267f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_343dba3fb9064573afe07013043144ce = L.marker(
                [-27.62225297, 152.9632681],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4b3948bdda994cd6852bf5a7855d2d03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_343dba3fb9064573afe07013043144ce.setIcon(icon_4b3948bdda994cd6852bf5a7855d2d03);


            marker_343dba3fb9064573afe07013043144ce.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3c0c7f40eb4a44f78756b72631cadc2e = L.marker(
                [-27.62223505, 152.9667899],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a134d8a6de97414ab6fd66a64405a6c2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c0c7f40eb4a44f78756b72631cadc2e.setIcon(icon_a134d8a6de97414ab6fd66a64405a6c2);


            marker_3c0c7f40eb4a44f78756b72631cadc2e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_37a5c80d83ca41ed94ee9e101ddc9b43 = L.marker(
                [-27.62143922, 152.9667656],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7f28d5966f804b4b8f8e9def8c7da9e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37a5c80d83ca41ed94ee9e101ddc9b43.setIcon(icon_7f28d5966f804b4b8f8e9def8c7da9e5);


            marker_37a5c80d83ca41ed94ee9e101ddc9b43.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9620dd5969164c4e8c7a83f7664a3699 = L.marker(
                [-27.61995782, 152.96535649999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c1bc5d2e37f14af99ad3a30762797150 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9620dd5969164c4e8c7a83f7664a3699.setIcon(icon_c1bc5d2e37f14af99ad3a30762797150);


            marker_9620dd5969164c4e8c7a83f7664a3699.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cd422976dd514952830963f254212838 = L.marker(
                [-27.62242696, 152.9630743],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a8e99eff8875437e8df6ceb5240af6a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cd422976dd514952830963f254212838.setIcon(icon_a8e99eff8875437e8df6ceb5240af6a4);


            marker_cd422976dd514952830963f254212838.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_15f2685470064eed96ae74e281b1ee33 = L.marker(
                [-27.62242691, 152.9659958],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c3c78b4ce9a843fb9481c92b3963575b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15f2685470064eed96ae74e281b1ee33.setIcon(icon_c3c78b4ce9a843fb9481c92b3963575b);


            marker_15f2685470064eed96ae74e281b1ee33.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0b15c7e761304f31a61e815f28d5bf65 = L.marker(
                [-27.62261867, 152.9659649],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_748015a67a7440758143a09c93666e73 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b15c7e761304f31a61e815f28d5bf65.setIcon(icon_748015a67a7440758143a09c93666e73);


            marker_0b15c7e761304f31a61e815f28d5bf65.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_281bf9f3bad848e7b58102a0043e7a95 = L.marker(
                [-27.61998955, 152.96674130000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_14fe1eb35118431ab24de2ed0f011213 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_281bf9f3bad848e7b58102a0043e7a95.setIcon(icon_14fe1eb35118431ab24de2ed0f011213);


            marker_281bf9f3bad848e7b58102a0043e7a95.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d6eb4b5b746c4aebb1a54b47e4959660 = L.marker(
                [-27.62145052, 152.9629959],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d11594351eef4001a31ec86836cba04e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d6eb4b5b746c4aebb1a54b47e4959660.setIcon(icon_d11594351eef4001a31ec86836cba04e);


            marker_d6eb4b5b746c4aebb1a54b47e4959660.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c56ece3e9c714d5baaefbe3dcb256801 = L.marker(
                [-27.61990812, 152.9621836],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_95bb09ca657d49c18205020837b804d0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c56ece3e9c714d5baaefbe3dcb256801.setIcon(icon_95bb09ca657d49c18205020837b804d0);


            marker_c56ece3e9c714d5baaefbe3dcb256801.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_979bedd10251492285876e69ca45a0a2 = L.marker(
                [-27.62041235, 152.9661989],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f356cb1a6f9e423aa0242c1ef00848ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_979bedd10251492285876e69ca45a0a2.setIcon(icon_f356cb1a6f9e423aa0242c1ef00848ed);


            marker_979bedd10251492285876e69ca45a0a2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5f3f9b4635464f4dab84810af2f926e9 = L.marker(
                [-27.62225297, 153.0638929],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_796a583b9e804e26a6c644a4f63d1253 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f3f9b4635464f4dab84810af2f926e9.setIcon(icon_796a583b9e804e26a6c644a4f63d1253);


            marker_5f3f9b4635464f4dab84810af2f926e9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3ce519e631ff4abebe4992cf86f194ec = L.marker(
                [-27.62223505, 152.96367890000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_95771a5db2114961807870afa700f2fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ce519e631ff4abebe4992cf86f194ec.setIcon(icon_95771a5db2114961807870afa700f2fb);


            marker_3ce519e631ff4abebe4992cf86f194ec.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5ef1e4bd2b104c7d8e8ee8af5349969f = L.marker(
                [-27.62143922, 152.9620335],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4fe563e3fd384b399c69c7b18d9497f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5ef1e4bd2b104c7d8e8ee8af5349969f.setIcon(icon_4fe563e3fd384b399c69c7b18d9497f9);


            marker_5ef1e4bd2b104c7d8e8ee8af5349969f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_61bd2fee842e44459e0f55381053fac6 = L.marker(
                [-27.61995782, 152.9630115],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b3f48d9310b9495092b7bdd05d70d237 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_61bd2fee842e44459e0f55381053fac6.setIcon(icon_b3f48d9310b9495092b7bdd05d70d237);


            marker_61bd2fee842e44459e0f55381053fac6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7f05ba55cecf4ad88f770198f6fed328 = L.marker(
                [-27.62242696, 152.9631356],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_38addf1c46e34c099ab7c5c56844456b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7f05ba55cecf4ad88f770198f6fed328.setIcon(icon_38addf1c46e34c099ab7c5c56844456b);


            marker_7f05ba55cecf4ad88f770198f6fed328.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3c152dbe508d44be8edc871aa5e7929a = L.marker(
                [-28.62001018, 152.9631424],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ad435b0bda27480095e0a3143723a45e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c152dbe508d44be8edc871aa5e7929a.setIcon(icon_ad435b0bda27480095e0a3143723a45e);


            marker_3c152dbe508d44be8edc871aa5e7929a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_377c10386ae64301aa64b50007c65298 = L.marker(
                [-27.62001018, 152.9629185],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9e902882d095479dabee2f9c83fb4f39 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_377c10386ae64301aa64b50007c65298.setIcon(icon_9e902882d095479dabee2f9c83fb4f39);


            marker_377c10386ae64301aa64b50007c65298.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2c679b148984497f83577fd0fb38b84d = L.marker(
                [-27.360979999999998, 152.883896],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_67fc3d67f1a6410f818f17dc6e5d0ae1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2c679b148984497f83577fd0fb38b84d.setIcon(icon_67fc3d67f1a6410f818f17dc6e5d0ae1);


            marker_2c679b148984497f83577fd0fb38b84d.bindTooltip(
                `<div>
                     The Samford Tennis Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_3621be5888de4235b4629f5225d08189 = L.marker(
                [-21.109592000000003, 149.178737],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6667e5b09f7f4ef9b4f98ecfe8defb79 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3621be5888de4235b4629f5225d08189.setIcon(icon_6667e5b09f7f4ef9b4f98ecfe8defb79);


            marker_3621be5888de4235b4629f5225d08189.bindTooltip(
                `<div>
                     Mackay Lions Soccer Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_03511061cfd84de58fcf93d8a42c0516 = L.marker(
                [-28.210753000000004, 152.027743],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f84ece1f58eb4533a1df7c583f392d00 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_03511061cfd84de58fcf93d8a42c0516.setIcon(icon_f84ece1f58eb4533a1df7c583f392d00);


            marker_03511061cfd84de58fcf93d8a42c0516.bindTooltip(
                `<div>
                     Warwick Boxing Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_55a48cae19ba4f16866d8400f7d5db8b = L.marker(
                [-17.322798000000002, 145.421676],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_09e258170f8947bb9856bbfef963cdc4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_55a48cae19ba4f16866d8400f7d5db8b.setIcon(icon_09e258170f8947bb9856bbfef963cdc4);


            marker_55a48cae19ba4f16866d8400f7d5db8b.bindTooltip(
                `<div>
                     Tablelands Outdoor Recreation Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_54da42723a7346a5a062b380d06ec44a = L.marker(
                [-21.139791, 149.169739],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_753d93fe9f9f479bbd6d2a1aaa791eb6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54da42723a7346a5a062b380d06ec44a.setIcon(icon_753d93fe9f9f479bbd6d2a1aaa791eb6);


            marker_54da42723a7346a5a062b380d06ec44a.bindTooltip(
                `<div>
                     Mackay Junior Moto Cross Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_831a351c327240b5b91c8f00bf15112e = L.marker(
                [-17.585341, 146.040367],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_def3206f36fc440ca599669d54da5594 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_831a351c327240b5b91c8f00bf15112e.setIcon(icon_def3206f36fc440ca599669d54da5594);


            marker_831a351c327240b5b91c8f00bf15112e.bindTooltip(
                `<div>
                     Innisfail United Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_ff48dd5bb1144fd480329243872256d6 = L.marker(
                [-22.815271, 148.712637],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9113c9dd8e7b464086e3e2ba292d85ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff48dd5bb1144fd480329243872256d6.setIcon(icon_9113c9dd8e7b464086e3e2ba292d85ee);


            marker_ff48dd5bb1144fd480329243872256d6.bindTooltip(
                `<div>
                     Middlemount Golf & Country Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ac372e18755b49ba8056884ffa21740f = L.marker(
                [-27.548556, 151.928093],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ccd8533769454e82abfe56918f8f3eaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ac372e18755b49ba8056884ffa21740f.setIcon(icon_ccd8533769454e82abfe56918f8f3eaa);


            marker_ac372e18755b49ba8056884ffa21740f.bindTooltip(
                `<div>
                     Toowoomba Bmx Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0b9590c5daa5472b9a9cdbf59c37090c = L.marker(
                [-16.487337, 145.46173100000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2a86314c0f054bf09be7ca1313901021 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b9590c5daa5472b9a9cdbf59c37090c.setIcon(icon_2a86314c0f054bf09be7ca1313901021);


            marker_0b9590c5daa5472b9a9cdbf59c37090c.bindTooltip(
                `<div>
                     Port Douglas Rugby Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ef4f020d43594ef58b2e7df57fad0913 = L.marker(
                [-27.542594, 151.985252],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8efe9f222e0d4ca18182e6ee9d5e4684 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ef4f020d43594ef58b2e7df57fad0913.setIcon(icon_8efe9f222e0d4ca18182e6ee9d5e4684);


            marker_ef4f020d43594ef58b2e7df57fad0913.bindTooltip(
                `<div>
                     Toowoomba Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_249755e1aa3f43c6a4f19de5d68e225a = L.marker(
                [-27.599984000000003, 152.915855],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9f7e92e6b9f4444f9100673e1e4f13fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_249755e1aa3f43c6a4f19de5d68e225a.setIcon(icon_9f7e92e6b9f4444f9100673e1e4f13fb);


            marker_249755e1aa3f43c6a4f19de5d68e225a.bindTooltip(
                `<div>
                     Gailes Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9e216409de3b48ea908a4bfbb52068f8 = L.marker(
                [-27.518334999999997, 153.04878100000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_14fe9f3d90ae4f09866e0d90861ec137 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e216409de3b48ea908a4bfbb52068f8.setIcon(icon_14fe9f3d90ae4f09866e0d90861ec137);


            marker_9e216409de3b48ea908a4bfbb52068f8.bindTooltip(
                `<div>
                     The Tarragindi Churches' Tigers Sporting Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_22d7404b2735485b9646eab3dbaa2ca0 = L.marker(
                [-26.479716999999997, 153.094976],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_812d8cd9c398421bb4a054a252d0647f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_22d7404b2735485b9646eab3dbaa2ca0.setIcon(icon_812d8cd9c398421bb4a054a252d0647f);


            marker_22d7404b2735485b9646eab3dbaa2ca0.bindTooltip(
                `<div>
                     Peregian Tennis Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b1a5af3898694cbd8ee78f4023a582b4 = L.marker(
                [-27.477752000000002, 153.034326],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_22babbcbfd6e45d78412be2c6ba43e21 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b1a5af3898694cbd8ee78f4023a582b4.setIcon(icon_22babbcbfd6e45d78412be2c6ba43e21);


            marker_b1a5af3898694cbd8ee78f4023a582b4.bindTooltip(
                `<div>
                     University Of Queensland Mountain Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_669f3288be074388936c6147acd88845 = L.marker(
                [-27.227043, 153.10860300000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_98c24e5c0d6b46ecbe846e4d295fa966 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_669f3288be074388936c6147acd88845.setIcon(icon_98c24e5c0d6b46ecbe846e4d295fa966);


            marker_669f3288be074388936c6147acd88845.bindTooltip(
                `<div>
                     The Redcliffe Leagues Hockey Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_3259f536ef334272bdc15eae8fb715d3 = L.marker(
                [-27.680626, 153.146154],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1260ca51841a41df9ffef10266d2049e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3259f536ef334272bdc15eae8fb715d3.setIcon(icon_1260ca51841a41df9ffef10266d2049e);


            marker_3259f536ef334272bdc15eae8fb715d3.bindTooltip(
                `<div>
                     Bethania Rams Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_a66fcd63dc274348940abab95a387400 = L.marker(
                [-28.146826, 153.493984],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_696e3c897cdb416b8227ca0cf53c19aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a66fcd63dc274348940abab95a387400.setIcon(icon_696e3c897cdb416b8227ca0cf53c19aa);


            marker_a66fcd63dc274348940abab95a387400.bindTooltip(
                `<div>
                     Tugun Bowls & Community Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_20c2a53d2a5a4de7ad6f28126a8232bb = L.marker(
                [-26.573999, 148.809179],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ee486e0af2674403b7712e3fdf481f0d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20c2a53d2a5a4de7ad6f28126a8232bb.setIcon(icon_ee486e0af2674403b7712e3fdf481f0d);


            marker_20c2a53d2a5a4de7ad6f28126a8232bb.bindTooltip(
                `<div>
                     Cities Rugby League Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d5f4485af2c54f7cad83f828826a5d53 = L.marker(
                [-17.428427, 145.396176],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e1836304cb3a4efeb3a1f65402586a22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5f4485af2c54f7cad83f828826a5d53.setIcon(icon_e1836304cb3a4efeb3a1f65402586a22);


            marker_d5f4485af2c54f7cad83f828826a5d53.bindTooltip(
                `<div>
                     Tableland Competition Car Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_8133f2c980744fd3a03e26a2e6fd66f4 = L.marker(
                [-28.552159999999997, 150.320701],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d67f477ec8b14a2f9820baf0686bd323 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8133f2c980744fd3a03e26a2e6fd66f4.setIcon(icon_d67f477ec8b14a2f9820baf0686bd323);


            marker_8133f2c980744fd3a03e26a2e6fd66f4.bindTooltip(
                `<div>
                     Goondiwindi Rugby League Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_e7b631ad7aef4f649bfec919a189cdeb = L.marker(
                [-19.403828, 146.988926],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2bbd2ba610254d96a16f51733023a404 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7b631ad7aef4f649bfec919a189cdeb.setIcon(icon_2bbd2ba610254d96a16f51733023a404);


            marker_e7b631ad7aef4f649bfec919a189cdeb.bindTooltip(
                `<div>
                     Townsville Gun Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_f1d4e234f8404cda98137d112f41be76 = L.marker(
                [-27.584497999999996, 153.122866],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3993c451cd0c4873bd4f56ea9e020340 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f1d4e234f8404cda98137d112f41be76.setIcon(icon_3993c451cd0c4873bd4f56ea9e020340);


            marker_f1d4e234f8404cda98137d112f41be76.bindTooltip(
                `<div>
                     Southside Aquatics Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4859d972126a401fbe604b1510f55462 = L.marker(
                [-27.865239000000003, 152.977936],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_625ec68be0a94a139d8bb765ae0f1b38 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4859d972126a401fbe604b1510f55462.setIcon(icon_625ec68be0a94a139d8bb765ae0f1b38);


            marker_4859d972126a401fbe604b1510f55462.bindTooltip(
                `<div>
                     Cedar Grove And District Riding Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_a612a42c554b41358db5da607ea68f66 = L.marker(
                [-27.642907, 153.158614],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8a0ace6ba1d441b2840491c36fc78cfe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a612a42c554b41358db5da607ea68f66.setIcon(icon_8a0ace6ba1d441b2840491c36fc78cfe);


            marker_a612a42c554b41358db5da607ea68f66.bindTooltip(
                `<div>
                     Slacks Creek Soccer Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_a844a0e85cf74348ba9b738d111ff100 = L.marker(
                [-27.658982, 153.152531],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bfa5f09237f946dd945c807b7537a92e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a844a0e85cf74348ba9b738d111ff100.setIcon(icon_bfa5f09237f946dd945c807b7537a92e);


            marker_a844a0e85cf74348ba9b738d111ff100.bindTooltip(
                `<div>
                     Springwood Branch Little Athletics Centre Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_819571d4870745b69bdd41011fd78dfe = L.marker(
                [-16.794329, 145.6853],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d77c32683f994aaab660d0ac9933a06b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_819571d4870745b69bdd41011fd78dfe.setIcon(icon_d77c32683f994aaab660d0ac9933a06b);


            marker_819571d4870745b69bdd41011fd78dfe.bindTooltip(
                `<div>
                     Trinity Beach Tennis Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1908b99878c44f9886fcad0b195e43ca = L.marker(
                [-27.610429999999997, 152.802008],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0f90d5b134fd4c84b0873903656b633d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1908b99878c44f9886fcad0b195e43ca.setIcon(icon_0f90d5b134fd4c84b0873903656b633d);


            marker_1908b99878c44f9886fcad0b195e43ca.bindTooltip(
                `<div>
                     Ipswich Knights Soccer Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_abfd0f53acfc48f0ab297071b8eab721 = L.marker(
                [-27.406053999999997, 152.981101],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7b1a6e4e3d13442598e04a92a008d380 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_abfd0f53acfc48f0ab297071b8eab721.setIcon(icon_7b1a6e4e3d13442598e04a92a008d380);


            marker_abfd0f53acfc48f0ab297071b8eab721.bindTooltip(
                `<div>
                     Mitchelton Sports Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_6395ad2de4a04b4093f066087d9fd469 = L.marker(
                [-26.788453000000004, 153.113742],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4d2f860c19bd4832a6c42bd481fae8ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6395ad2de4a04b4093f066087d9fd469.setIcon(icon_4d2f860c19bd4832a6c42bd481fae8ae);


            marker_6395ad2de4a04b4093f066087d9fd469.bindTooltip(
                `<div>
                     Caloundra Off Road Cycling Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_aa58cf724cb74b3da5e89e277d0268fe = L.marker(
                [-27.644378000000003, 153.167571],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3504abc6f53248b39df283146328d3a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa58cf724cb74b3da5e89e277d0268fe.setIcon(icon_3504abc6f53248b39df283146328d3a3);


            marker_aa58cf724cb74b3da5e89e277d0268fe.bindTooltip(
                `<div>
                     Springwood Suns Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b859df7bd65a49d59e95da6ff3772a94 = L.marker(
                [-27.4782, 153.052292],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7fc0fce891e947a2ac5c8d684f065f33 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b859df7bd65a49d59e95da6ff3772a94.setIcon(icon_7fc0fce891e947a2ac5c8d684f065f33);


            marker_b859df7bd65a49d59e95da6ff3772a94.bindTooltip(
                `<div>
                     Eastern Suburbs Soccer Club Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_6f0e2dba023f40ceb712cc943ed8bed0 = L.marker(
                [-21.166061, 149.070881],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3c23603a1d594851af6e4fd0db9aa2bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f0e2dba023f40ceb712cc943ed8bed0.setIcon(icon_3c23603a1d594851af6e4fd0db9aa2bf);


            marker_6f0e2dba023f40ceb712cc943ed8bed0.bindTooltip(
                `<div>
                     Walkerston B.m.x. Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_6dc0b52cc2754ea0b158870a96e4f8de = L.marker(
                [-23.15332, 150.710489],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d8212c54624641e4a7b53f2b5e06dbcd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6dc0b52cc2754ea0b158870a96e4f8de.setIcon(icon_d8212c54624641e4a7b53f2b5e06dbcd);


            marker_6dc0b52cc2754ea0b158870a96e4f8de.bindTooltip(
                `<div>
                     Yeppoon Gymnastics & Movement Centre Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_e28f22aac2fd4fd0921fb1d212c48130 = L.marker(
                [-27.408745, 153.039941],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b746ce4b15b9454583447e266e7a976f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e28f22aac2fd4fd0921fb1d212c48130.setIcon(icon_b746ce4b15b9454583447e266e7a976f);


            marker_e28f22aac2fd4fd0921fb1d212c48130.bindTooltip(
                `<div>
                     Kedron Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_bb987c638a8d47dd972a9b891dd9bdc3 = L.marker(
                [-19.979647, 148.232322],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_497980b77d4b456fae269bb973183259 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bb987c638a8d47dd972a9b891dd9bdc3.setIcon(icon_497980b77d4b456fae269bb973183259);


            marker_bb987c638a8d47dd972a9b891dd9bdc3.bindTooltip(
                `<div>
                     Wangaratta Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_82d9a9b646b64cf29bbc06a586cced37 = L.marker(
                [-27.706198999999998, 153.19303200000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf697ffa4b824aa28df1edec8a11399b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_82d9a9b646b64cf29bbc06a586cced37.setIcon(icon_cf697ffa4b824aa28df1edec8a11399b);


            marker_82d9a9b646b64cf29bbc06a586cced37.bindTooltip(
                `<div>
                     Beenleigh Multisports Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_00b7eaabf89c4debb16e4172528c4e87 = L.marker(
                [-23.358483, 150.49512099999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ebad68597d7741c4ad93d5f5b89e0124 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00b7eaabf89c4debb16e4172528c4e87.setIcon(icon_ebad68597d7741c4ad93d5f5b89e0124);


            marker_00b7eaabf89c4debb16e4172528c4e87.bindTooltip(
                `<div>
                     North Rockhampton Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7899e8070ba94e5fa8c688aef76eac2f = L.marker(
                [-27.53997, 153.272949],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b971c9d4c38b48b8931269c097f7e0df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7899e8070ba94e5fa8c688aef76eac2f.setIcon(icon_b971c9d4c38b48b8931269c097f7e0df);


            marker_7899e8070ba94e5fa8c688aef76eac2f.bindTooltip(
                `<div>
                     Cleveland - Thornlands Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_03f843c07aa5449582465fa1c277cb59 = L.marker(
                [-28.036576, 153.185823],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_323ed5dd23fb4c5b861a6567374042c2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_03f843c07aa5449582465fa1c277cb59.setIcon(icon_323ed5dd23fb4c5b861a6567374042c2);


            marker_03f843c07aa5449582465fa1c277cb59.bindTooltip(
                `<div>
                     Canungra Area Golf Club (cagc) Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_10ba99a86abb4c4791f3cf5120c812df = L.marker(
                [-20.009549, 148.256494],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e325c1ac9e2744a09db49c8638bbb4ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_10ba99a86abb4c4791f3cf5120c812df.setIcon(icon_e325c1ac9e2744a09db49c8638bbb4ba);


            marker_10ba99a86abb4c4791f3cf5120c812df.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_80b20309eaa44a42899bb81955b8de8a = L.marker(
                [-26.389483000000002, 153.025138],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e958be94e64f4c8ba2710931fcc0b36f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_80b20309eaa44a42899bb81955b8de8a.setIcon(icon_e958be94e64f4c8ba2710931fcc0b36f);


            marker_80b20309eaa44a42899bb81955b8de8a.bindTooltip(
                `<div>
                     Noosa District Softball Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_648318c6cb864f4a9b0892263262f0b7 = L.marker(
                [-27.730743, 153.11696799999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4f129a4e7f6e4c25b28727a74ad95a71 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_648318c6cb864f4a9b0892263262f0b7.setIcon(icon_4f129a4e7f6e4c25b28727a74ad95a71);


            marker_648318c6cb864f4a9b0892263262f0b7.bindTooltip(
                `<div>
                     Waterford Equestrian And Pony Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_a8758d9d715943af97defb9c63240adf = L.marker(
                [-26.686147, 153.103222],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_24b17e4d0bbe4cc1b7b37167ee4c0287 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a8758d9d715943af97defb9c63240adf.setIcon(icon_24b17e4d0bbe4cc1b7b37167ee4c0287);


            marker_a8758d9d715943af97defb9c63240adf.bindTooltip(
                `<div>
                     Mooloolaba Tennis Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_5bb7cc9a3dec4de29300a38b47c89d61 = L.marker(
                [-21.108597, 149.170895],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7ed13d8b3dca48f88a3387b0abeae084 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bb7cc9a3dec4de29300a38b47c89d61.setIcon(icon_7ed13d8b3dca48f88a3387b0abeae084);


            marker_5bb7cc9a3dec4de29300a38b47c89d61.bindTooltip(
                `<div>
                     Mackay Pioneer Bmx Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_f95b77f3bd754802801c9fef252cb531 = L.marker(
                [-22.832654, 148.701978],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_617c3a4ed6b64a4dbb53da33b444f06e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f95b77f3bd754802801c9fef252cb531.setIcon(icon_617c3a4ed6b64a4dbb53da33b444f06e);


            marker_f95b77f3bd754802801c9fef252cb531.bindTooltip(
                `<div>
                     Middlemount Rodeo Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_27bded74452242bbbf5b474c720b5241 = L.marker(
                [-27.452407, 153.057152],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_652c527b5e8545409d386a57fe6c4111 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27bded74452242bbbf5b474c720b5241.setIcon(icon_652c527b5e8545409d386a57fe6c4111);


            marker_27bded74452242bbbf5b474c720b5241.bindTooltip(
                `<div>
                     Southside Eagles Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1426efec6f4e48c89e8865c1031d1844 = L.marker(
                [-16.520039999999998, 145.47212199999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5ce944aa0a8a4a85954ca5148ad2ce78 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1426efec6f4e48c89e8865c1031d1844.setIcon(icon_5ce944aa0a8a4a85954ca5148ad2ce78);


            marker_1426efec6f4e48c89e8865c1031d1844.bindTooltip(
                `<div>
                     Port Douglas Outrigger Canoe Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_ae592586d2824229965ad6974803644e = L.marker(
                [-27.467940999999996, 153.126817],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_70d6b2ca018d4e3e84e8ed13e1bdc343 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ae592586d2824229965ad6974803644e.setIcon(icon_70d6b2ca018d4e3e84e8ed13e1bdc343);


            marker_ae592586d2824229965ad6974803644e.bindTooltip(
                `<div>
                     Wynnum Manly District Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_f0eb3e32dcab4b289db10f03cd81c53e = L.marker(
                [-27.43944, 153.02606],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_42852ea2a9de4499a0594a92827dccac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f0eb3e32dcab4b289db10f03cd81c53e.setIcon(icon_42852ea2a9de4499a0594a92827dccac);


            marker_f0eb3e32dcab4b289db10f03cd81c53e.bindTooltip(
                `<div>
                     Brisbane Softball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7241762139f84ffd963cd0ee4b3a8ea9 = L.marker(
                [-27.55783, 152.937953],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5b80e6e0509949698d98b357a276bacf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7241762139f84ffd963cd0ee4b3a8ea9.setIcon(icon_5b80e6e0509949698d98b357a276bacf);


            marker_7241762139f84ffd963cd0ee4b3a8ea9.bindTooltip(
                `<div>
                     The Young Men's Christian Association Of Brisbane
                 </div>`,
                {"sticky": true}
            );


            var marker_7d4653a0930846938f001d57e45941bb = L.marker(
                [-26.200039, 152.654673],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ce3bb484debd408f85c34764668ebf60 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7d4653a0930846938f001d57e45941bb.setIcon(icon_ce3bb484debd408f85c34764668ebf60);


            marker_7d4653a0930846938f001d57e45941bb.bindTooltip(
                `<div>
                     Gympie And District Hockey Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4cfc60d233dd42639e4b01ea02835eb0 = L.marker(
                [-24.393537, 150.51376399999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a9fa95918945481fbe09d92c7cd29403 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4cfc60d233dd42639e4b01ea02835eb0.setIcon(icon_a9fa95918945481fbe09d92c7cd29403);


            marker_4cfc60d233dd42639e4b01ea02835eb0.bindTooltip(
                `<div>
                     Banana Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_3ccb0be30568460285b058e899cbb327 = L.marker(
                [-19.979647, 148.232322],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b6d134c922d948078425fc4be1424895 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ccb0be30568460285b058e899cbb327.setIcon(icon_b6d134c922d948078425fc4be1424895);


            marker_3ccb0be30568460285b058e899cbb327.bindTooltip(
                `<div>
                     Bowen Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_968d9707809744f682052563c7561886 = L.marker(
                [-27.525913, 153.274872],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7484bd72069f43ddb27f7c214d134bd2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_968d9707809744f682052563c7561886.setIcon(icon_7484bd72069f43ddb27f7c214d134bd2);


            marker_968d9707809744f682052563c7561886.bindTooltip(
                `<div>
                     Cleveland Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_d869caf507184c239c6558dcd1659ab6 = L.marker(
                [-27.726940000000003, 153.00389199999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_15fa2822a34946aa9d38a6a4f4fa9719 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d869caf507184c239c6558dcd1659ab6.setIcon(icon_15fa2822a34946aa9d38a6a4f4fa9719);


            marker_d869caf507184c239c6558dcd1659ab6.bindTooltip(
                `<div>
                     Greenbank Pony Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_82ab5bdb574c4b06ab2637db5d399ce8 = L.marker(
                [-27.477346, 153.00468500000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0958458094654e5c998239eae8dbec98 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_82ab5bdb574c4b06ab2637db5d399ce8.setIcon(icon_0958458094654e5c998239eae8dbec98);


            marker_82ab5bdb574c4b06ab2637db5d399ce8.bindTooltip(
                `<div>
                     Commercial Rowing Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ff6dd0c750884cbfa47e9b756ead7ea5 = L.marker(
                [-26.716012, 153.06882199999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c1aa8821f0114f338ba726e1e8d00869 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff6dd0c750884cbfa47e9b756ead7ea5.setIcon(icon_c1aa8821f0114f338ba726e1e8d00869);


            marker_ff6dd0c750884cbfa47e9b756ead7ea5.bindTooltip(
                `<div>
                     University Of The Sunshine Coast Barbarians Rugby Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_082301ba54324977809f6ec036b1d936 = L.marker(
                [-27.444482, 152.027941],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_33cf6dd5268d40a887efabf0f9749274 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_082301ba54324977809f6ec036b1d936.setIcon(icon_33cf6dd5268d40a887efabf0f9749274);


            marker_082301ba54324977809f6ec036b1d936.bindTooltip(
                `<div>
                     Toowoomba Motor Cycle Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4a6f9fff40264c569c9a41fbd2212e2b = L.marker(
                [-16.927195, 145.750086],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_281b3c947e024500b2cb9f78b12f1d16 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a6f9fff40264c569c9a41fbd2212e2b.setIcon(icon_281b3c947e024500b2cb9f78b12f1d16);


            marker_4a6f9fff40264c569c9a41fbd2212e2b.bindTooltip(
                `<div>
                     Cairns & District Squash Rackets Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_6c1f087aef7f4f199a6529470dad8846 = L.marker(
                [-27.232888, 152.978845],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7e87041f3acd430b9f290da24158faa2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c1f087aef7f4f199a6529470dad8846.setIcon(icon_7e87041f3acd430b9f290da24158faa2);


            marker_6c1f087aef7f4f199a6529470dad8846.bindTooltip(
                `<div>
                     Pine Rivers Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_660f2160826b4e63b2d8efceb78d0a74 = L.marker(
                [-26.389483000000002, 153.025138],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9babff7985de44fcafca31c44be59c78 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_660f2160826b4e63b2d8efceb78d0a74.setIcon(icon_9babff7985de44fcafca31c44be59c78);


            marker_660f2160826b4e63b2d8efceb78d0a74.bindTooltip(
                `<div>
                     Noosa District Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_18d1425670c6499c9eefb6fe2404c158 = L.marker(
                [-21.164753, 149.184782],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9423467159ab4078a62b587a8bc7a88e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_18d1425670c6499c9eefb6fe2404c158.setIcon(icon_9423467159ab4078a62b587a8bc7a88e);


            marker_18d1425670c6499c9eefb6fe2404c158.bindTooltip(
                `<div>
                     Mackay Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_640ff80cd5364d288f24ea4ac7e56f0e = L.marker(
                [-27.454912, 152.65766499999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f15d7ac451a742569a22bef0baf7d9b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_640ff80cd5364d288f24ea4ac7e56f0e.setIcon(icon_f15d7ac451a742569a22bef0baf7d9b9);


            marker_640ff80cd5364d288f24ea4ac7e56f0e.bindTooltip(
                `<div>
                     Fernvale Campdraft Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7fc65b8c1af94853987144c25a0a1855 = L.marker(
                [-26.409437, 153.011083],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ebae6ab1346a47e9bc7e7e0dcaec2657 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fc65b8c1af94853987144c25a0a1855.setIcon(icon_ebae6ab1346a47e9bc7e7e0dcaec2657);


            marker_7fc65b8c1af94853987144c25a0a1855.bindTooltip(
                `<div>
                     Noosa Trailblazers Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9954cc7b7f7a49a180212f37b38783af = L.marker(
                [-27.972387, 153.417506],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a89519e423514f9597bb1a8f8dada046 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9954cc7b7f7a49a180212f37b38783af.setIcon(icon_a89519e423514f9597bb1a8f8dada046);


            marker_9954cc7b7f7a49a180212f37b38783af.bindTooltip(
                `<div>
                     Tennis Gold Coast Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_eecca9e7b7ff4ea98dbf27eaaad53172 = L.marker(
                [-16.815006, 145.69683600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e41ee76e82d640a6a4f864ac87b08e93 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eecca9e7b7ff4ea98dbf27eaaad53172.setIcon(icon_e41ee76e82d640a6a4f864ac87b08e93);


            marker_eecca9e7b7ff4ea98dbf27eaaad53172.bindTooltip(
                `<div>
                     Marlin Coast Swimming Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_4a0d1b39f8204786826a5f21e6cd3e0f = L.marker(
                [-17.748829999999998, 146.025793],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_65de1dc25d6d4257ac2a0d2dda66fcf1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a0d1b39f8204786826a5f21e6cd3e0f.setIcon(icon_65de1dc25d6d4257ac2a0d2dda66fcf1);


            marker_4a0d1b39f8204786826a5f21e6cd3e0f.bindTooltip(
                `<div>
                     Silkwood Clay Target Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_fe70bc4c5100402193d634812687c844 = L.marker(
                [-20.054206, 146.250748],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7c8da1b39659494e807c94f56309924a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fe70bc4c5100402193d634812687c844.setIcon(icon_7c8da1b39659494e807c94f56309924a);


            marker_fe70bc4c5100402193d634812687c844.bindTooltip(
                `<div>
                     Charters Towers Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_6be4ebe8fa4043f1a4cc5e42cf480d99 = L.marker(
                [-27.900114000000002, 153.329137],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_beb26f37db2c44ee912c3521d0677b90 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6be4ebe8fa4043f1a4cc5e42cf480d99.setIcon(icon_beb26f37db2c44ee912c3521d0677b90);


            marker_6be4ebe8fa4043f1a4cc5e42cf480d99.bindTooltip(
                `<div>
                     Helensvale Rugby Union Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_e828f9cd1c444e899378d7272f4ddc1b = L.marker(
                [-28.018534999999996, 153.358798],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_96c6d64ff80a40b4ad0b03bdf889bbb8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e828f9cd1c444e899378d7272f4ddc1b.setIcon(icon_96c6d64ff80a40b4ad0b03bdf889bbb8);


            marker_e828f9cd1c444e899378d7272f4ddc1b.bindTooltip(
                `<div>
                     Mudgeeraba Nerang And Districts' Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_742653fd565240a08440ec354a15a5da = L.marker(
                [-26.197294, 152.678277],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fa17735f99f34f149d58e2fdce0c3fb6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_742653fd565240a08440ec354a15a5da.setIcon(icon_fa17735f99f34f149d58e2fdce0c3fb6);


            marker_742653fd565240a08440ec354a15a5da.bindTooltip(
                `<div>
                     Gympie Regional Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5f96d5a754c04a8ea83659b4c6b882ae = L.marker(
                [-27.491335, 153.099078],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3c835ddb2d1a4a1fab374dc26bbda0eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f96d5a754c04a8ea83659b4c6b882ae.setIcon(icon_3c835ddb2d1a4a1fab374dc26bbda0eb);


            marker_5f96d5a754c04a8ea83659b4c6b882ae.bindTooltip(
                `<div>
                     Eastern Suburbs Hockey Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9c6fb38a8ed44db78d9071c90fb85ea6 = L.marker(
                [-27.519632, 153.024169],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fd6afc5fc24348d6b6ece7ba6b3913c1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9c6fb38a8ed44db78d9071c90fb85ea6.setIcon(icon_fd6afc5fc24348d6b6ece7ba6b3913c1);


            marker_9c6fb38a8ed44db78d9071c90fb85ea6.bindTooltip(
                `<div>
                     Souths Rugby Union Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_c4f4bbb1ea0a4f549f4395d892d93a51 = L.marker(
                [-27.488803000000004, 153.05901599999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_530f7e52ef2f4c24a56d2fe0de7ca018 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c4f4bbb1ea0a4f549f4395d892d93a51.setIcon(icon_530f7e52ef2f4c24a56d2fe0de7ca018);


            marker_c4f4bbb1ea0a4f549f4395d892d93a51.bindTooltip(
                `<div>
                     Metropolitan Districts Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_10d39d6a4705470ebf0a0f4fef7020c0 = L.marker(
                [-24.004518, 151.19353999999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_98c56bfdd0c54b4b92aae2343e4ce111 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_10d39d6a4705470ebf0a0f4fef7020c0.setIcon(icon_98c56bfdd0c54b4b92aae2343e4ce111);


            marker_10d39d6a4705470ebf0a0f4fef7020c0.bindTooltip(
                `<div>
                     Calliope Junior Rugby League Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d6b657a7cdb24bdebf71376657a7efdf = L.marker(
                [-19.671160999999998, 147.42118],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5990415ed6dd4f7680610f5d6e328dc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d6b657a7cdb24bdebf71376657a7efdf.setIcon(icon_5990415ed6dd4f7680610f5d6e328dc5);


            marker_d6b657a7cdb24bdebf71376657a7efdf.bindTooltip(
                `<div>
                     Home Hill Tennis Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_43655c7b8adb41a19949365875784061 = L.marker(
                [-27.298745, 151.59833799999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d875e09590024f2097c39eec7fff8427 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43655c7b8adb41a19949365875784061.setIcon(icon_d875e09590024f2097c39eec7fff8427);


            marker_43655c7b8adb41a19949365875784061.bindTooltip(
                `<div>
                     Darling Downs Rifle Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_2819c26014bb4da292ceb8401c0eb2df = L.marker(
                [-27.443125, 153.025992],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d36972c1da924f30a470fb40136dace9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2819c26014bb4da292ceb8401c0eb2df.setIcon(icon_d36972c1da924f30a470fb40136dace9);


            marker_2819c26014bb4da292ceb8401c0eb2df.bindTooltip(
                `<div>
                     Downey Park Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_60031b0ee920450b9096141ba206d24c = L.marker(
                [-20.404997, 148.570399],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0f1f337a28244ff6b46563c10fc064bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60031b0ee920450b9096141ba206d24c.setIcon(icon_0f1f337a28244ff6b46563c10fc064bc);


            marker_60031b0ee920450b9096141ba206d24c.bindTooltip(
                `<div>
                     Proserpine District Lawn Tennis Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_82cea239b69b450dbccac3e5f4445e06 = L.marker(
                [-27.99643, 153.000562],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ae219cc9f98646469c5d2cb88e1f7de4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_82cea239b69b450dbccac3e5f4445e06.setIcon(icon_ae219cc9f98646469c5d2cb88e1f7de4);


            marker_82cea239b69b450dbccac3e5f4445e06.bindTooltip(
                `<div>
                     Beaudesert Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_1d42bdc26a6b47db90e4fda50a9b65d1 = L.marker(
                [-20.389857, 148.561676],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_eeb0e8f190844718837dcea25f2dfcd6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d42bdc26a6b47db90e4fda50a9b65d1.setIcon(icon_eeb0e8f190844718837dcea25f2dfcd6);


            marker_1d42bdc26a6b47db90e4fda50a9b65d1.bindTooltip(
                `<div>
                     Proserpine Junior Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d3b14b9d00f64c80a3612162009cddea = L.marker(
                [-19.986047, 148.23913100000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_45d8fbf125204954b43a7cce1f20d5c6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3b14b9d00f64c80a3612162009cddea.setIcon(icon_45d8fbf125204954b43a7cce1f20d5c6);


            marker_d3b14b9d00f64c80a3612162009cddea.bindTooltip(
                `<div>
                     Bowen Golf Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_91c9673488c44ac58ce9e54e2f2d6e0a = L.marker(
                [-23.941782999999997, 151.36731],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_59ffaf33340f404aadeb4881f40f44ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_91c9673488c44ac58ce9e54e2f2d6e0a.setIcon(icon_59ffaf33340f404aadeb4881f40f44ae);


            marker_91c9673488c44ac58ce9e54e2f2d6e0a.bindTooltip(
                `<div>
                     Tannum Sands Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_d9936ab7671b41de8ec526cf6762b77c = L.marker(
                [-19.311019, 146.804031],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c45052fbc89f43ca856ddab163bbff1c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d9936ab7671b41de8ec526cf6762b77c.setIcon(icon_c45052fbc89f43ca856ddab163bbff1c);


            marker_d9936ab7671b41de8ec526cf6762b77c.bindTooltip(
                `<div>
                     Afl Townsville Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9a3d09ae9b794377b70c3a01bcd42c0e = L.marker(
                [-28.018534999999996, 153.358798],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1732c52d69bc419a88b013fb8374cc10 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9a3d09ae9b794377b70c3a01bcd42c0e.setIcon(icon_1732c52d69bc419a88b013fb8374cc10);


            marker_9a3d09ae9b794377b70c3a01bcd42c0e.bindTooltip(
                `<div>
                     Carrara Australian Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d9a14aac0e5b4caaa95d0cfe5df4523c = L.marker(
                [-27.404389000000002, 152.990018],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_236240a45cf74352bcd8299d2bcee7bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d9a14aac0e5b4caaa95d0cfe5df4523c.setIcon(icon_236240a45cf74352bcd8299d2bcee7bc);


            marker_d9a14aac0e5b4caaa95d0cfe5df4523c.bindTooltip(
                `<div>
                     Everton Park Bowls And Community Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_be87264f99e1498b81c1f2b6510c2438 = L.marker(
                [-26.789144, 153.076394],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_56e3b8dace7e4af4ae29655cc8a0d382 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_be87264f99e1498b81c1f2b6510c2438.setIcon(icon_56e3b8dace7e4af4ae29655cc8a0d382);


            marker_be87264f99e1498b81c1f2b6510c2438.bindTooltip(
                `<div>
                     Caloundra Equestrian Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_0b65c9b026004948a36d2e1cb0fa3346 = L.marker(
                [-25.3043, 152.864769],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c4400a79898f4f76b3bb8940d0e83b1b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b65c9b026004948a36d2e1cb0fa3346.setIcon(icon_c4400a79898f4f76b3bb8940d0e83b1b);


            marker_0b65c9b026004948a36d2e1cb0fa3346.bindTooltip(
                `<div>
                     Hervey Bay Australian Football And Cricket Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_9fd3dbbee50040d8b79c871a6db21e94 = L.marker(
                [-24.868814999999998, 151.12436],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dec431aa78894ecd9514aa9363b316ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9fd3dbbee50040d8b79c871a6db21e94.setIcon(icon_dec431aa78894ecd9514aa9363b316ea);


            marker_9fd3dbbee50040d8b79c871a6db21e94.bindTooltip(
                `<div>
                     Monto Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_feb44aceed1f436a8ed660063323787f = L.marker(
                [-28.082361, 153.3616],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1859a4572a6c46caaedfa51b29c79af7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_feb44aceed1f436a8ed660063323787f.setIcon(icon_1859a4572a6c46caaedfa51b29c79af7);


            marker_feb44aceed1f436a8ed660063323787f.bindTooltip(
                `<div>
                     Mudgeeraba Baseball Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_f561280e8407437f8bb6ba099cd20ee7 = L.marker(
                [-27.29869, 152.971315],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4c1905164cc24bfc8d9cdddfb2a7c7ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f561280e8407437f8bb6ba099cd20ee7.setIcon(icon_4c1905164cc24bfc8d9cdddfb2a7c7ba);


            marker_f561280e8407437f8bb6ba099cd20ee7.bindTooltip(
                `<div>
                     Moreton Bay Regional Council
                 </div>`,
                {"sticky": true}
            );


            var marker_b4348213cbf8446e976f4defe134451f = L.marker(
                [-17.043145000000003, 145.75548799999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4b10619a8fee491ca30fb664747ecea4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b4348213cbf8446e976f4defe134451f.setIcon(icon_4b10619a8fee491ca30fb664747ecea4);


            marker_b4348213cbf8446e976f4defe134451f.bindTooltip(
                `<div>
                     Cairns Target Shooting Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_49d6108d135a499f9d3a4245746d3740 = L.marker(
                [-23.8445, 151.252141],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e52c6031fdeb468b827e935bb9e82236 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49d6108d135a499f9d3a4245746d3740.setIcon(icon_e52c6031fdeb468b827e935bb9e82236);


            marker_49d6108d135a499f9d3a4245746d3740.bindTooltip(
                `<div>
                     Gladstone Amateur Basketball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_23f70845188742e4af0a537df6ba02a4 = L.marker(
                [-25.23658, 152.280272],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a3cd85f5116f479685ce9444c4e80262 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23f70845188742e4af0a537df6ba02a4.setIcon(icon_a3cd85f5116f479685ce9444c4e80262);


            marker_23f70845188742e4af0a537df6ba02a4.bindTooltip(
                `<div>
                     Isis Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_309879815ee14b45a30f493082f88bbe = L.marker(
                [-27.001306, 151.929618],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d769ff76c6cc4864b1398487fe561a6c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_309879815ee14b45a30f493082f88bbe.setIcon(icon_d769ff76c6cc4864b1398487fe561a6c);


            marker_309879815ee14b45a30f493082f88bbe.bindTooltip(
                `<div>
                     Brisbane North Dirt Bike Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_0266b2509fd64b35b20b94c00e96a465 = L.marker(
                [-23.880651, 151.22411699999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_479d334969ac44e1bb2465d23907f2a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0266b2509fd64b35b20b94c00e96a465.setIcon(icon_479d334969ac44e1bb2465d23907f2a2);


            marker_0266b2509fd64b35b20b94c00e96a465.bindTooltip(
                `<div>
                     Gladstone And District Junior Rugby League Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5f9752e265304d7d973e562eb6d2d7e7 = L.marker(
                [-19.279225, 146.770446],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_84949dc46b1049e681e90998f2fd5636 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f9752e265304d7d973e562eb6d2d7e7.setIcon(icon_84949dc46b1049e681e90998f2fd5636);


            marker_5f9752e265304d7d973e562eb6d2d7e7.bindTooltip(
                `<div>
                     Teachers West Rugby Union Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_12fa0ceb9a1d49a1af9713b4d7c8c3eb = L.marker(
                [-27.552884000000002, 153.072669],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3f4392e2894a48c8a780b54aec4ef4ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_12fa0ceb9a1d49a1af9713b4d7c8c3eb.setIcon(icon_3f4392e2894a48c8a780b54aec4ef4ba);


            marker_12fa0ceb9a1d49a1af9713b4d7c8c3eb.bindTooltip(
                `<div>
                     Rackley Swim Team Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_536c898459cd46889957053ac5a43deb = L.marker(
                [-21.130205, 149.180194],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7e950bb8a63a4bda99738f2ad5606d9b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_536c898459cd46889957053ac5a43deb.setIcon(icon_7e950bb8a63a4bda99738f2ad5606d9b);


            marker_536c898459cd46889957053ac5a43deb.bindTooltip(
                `<div>
                     Mackay North Horse And Pony Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_71144638973c489d89e5926e43f17a0f = L.marker(
                [-26.651033, 152.95555],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_823192108f6a4c238ad854103ca29eab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71144638973c489d89e5926e43f17a0f.setIcon(icon_823192108f6a4c238ad854103ca29eab);


            marker_71144638973c489d89e5926e43f17a0f.bindTooltip(
                `<div>
                     Nambour Rugby Union Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_d7df92bc2945462281cb15e0faaf07d6 = L.marker(
                [-16.875997, 145.54998799999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_29086e2faa1d47749e8ba12104b2decf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7df92bc2945462281cb15e0faaf07d6.setIcon(icon_29086e2faa1d47749e8ba12104b2decf);


            marker_d7df92bc2945462281cb15e0faaf07d6.bindTooltip(
                `<div>
                     Koah Sports And Social Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_85527596c97848cea85186a000c81038 = L.marker(
                [-26.595223999999998, 148.77317],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_287e71a30eba4cf7b4fb44105d37d899 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85527596c97848cea85186a000c81038.setIcon(icon_287e71a30eba4cf7b4fb44105d37d899);


            marker_85527596c97848cea85186a000c81038.bindTooltip(
                `<div>
                     Roma Clay Target Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_6e910de69c8142e6b0638684254b0dc4 = L.marker(
                [-27.673903999999997, 153.042528],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3838382d39974a01b896155733a6b6ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e910de69c8142e6b0638684254b0dc4.setIcon(icon_3838382d39974a01b896155733a6b6ae);


            marker_6e910de69c8142e6b0638684254b0dc4.bindTooltip(
                `<div>
                     Logan City Gridiron Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1344c75dfcc344e3be2d5050826b1da0 = L.marker(
                [-23.374023, 150.510122],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_687642c4335a4950926224974be9c11c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1344c75dfcc344e3be2d5050826b1da0.setIcon(icon_687642c4335a4950926224974be9c11c);


            marker_1344c75dfcc344e3be2d5050826b1da0.bindTooltip(
                `<div>
                     Rockhampton Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_a1d7866e2c5a4392a39d16869ef50316 = L.marker(
                [-20.40278, 148.57745],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a459bc6d57894e92917981e1217db285 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a1d7866e2c5a4392a39d16869ef50316.setIcon(icon_a459bc6d57894e92917981e1217db285);


            marker_a1d7866e2c5a4392a39d16869ef50316.bindTooltip(
                `<div>
                     Proserpine Bmx Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b23c7ae396394d4992a5eedbd36156dd = L.marker(
                [-24.886878, 146.253885],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7d0b1a03ac3841799ee9d361b6ea7f0d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b23c7ae396394d4992a5eedbd36156dd.setIcon(icon_7d0b1a03ac3841799ee9d361b6ea7f0d);


            marker_b23c7ae396394d4992a5eedbd36156dd.bindTooltip(
                `<div>
                     Blackall - Tambo Regional Council
                 </div>`,
                {"sticky": true}
            );


            var marker_91420b9fad3f4f7aa0ea903f039d4574 = L.marker(
                [-23.365879999999997, 150.49174],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ad52de9962ed4e2b88d1f0f755941f1a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_91420b9fad3f4f7aa0ea903f039d4574.setIcon(icon_ad52de9962ed4e2b88d1f0f755941f1a);


            marker_91420b9fad3f4f7aa0ea903f039d4574.bindTooltip(
                `<div>
                     Rockhampton Netball Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_1c782048b1a941db8e20257f1cb4d506 = L.marker(
                [-23.72056, 150.817097],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f62f4608aaca42c8943e8128416dcfaf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1c782048b1a941db8e20257f1cb4d506.setIcon(icon_f62f4608aaca42c8943e8128416dcfaf);


            marker_1c782048b1a941db8e20257f1cb4d506.bindTooltip(
                `<div>
                     Raglan Target Sports Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_3558688b18c042ca98c5835fa85262b7 = L.marker(
                [-27.190257, 151.27219499999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_76f4b0b7150d4f7da60d22379f499fd6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3558688b18c042ca98c5835fa85262b7.setIcon(icon_76f4b0b7150d4f7da60d22379f499fd6);


            marker_3558688b18c042ca98c5835fa85262b7.bindTooltip(
                `<div>
                     Dalby & District Rugby Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_81d134037c1043f68b48d9350e8422e7 = L.marker(
                [-27.624778999999997, 152.766483],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7b9ff8c30d4e4ceba5f7f1e26cffad36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_81d134037c1043f68b48d9350e8422e7.setIcon(icon_7b9ff8c30d4e4ceba5f7f1e26cffad36);


            marker_81d134037c1043f68b48d9350e8422e7.bindTooltip(
                `<div>
                     Ipswich & District Athletic Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d5ac160cb62944dc88bfe6a665952416 = L.marker(
                [-27.649201, 153.138769],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ef15e01504564783bff008f7c7431dd2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5ac160cb62944dc88bfe6a665952416.setIcon(icon_ef15e01504564783bff008f7c7431dd2);


            marker_d5ac160cb62944dc88bfe6a665952416.bindTooltip(
                `<div>
                     Football Queensland Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_4d5972ebcb234bf3b77b790cc5c6aba1 = L.marker(
                [-28.005767, 153.34051399999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_62c1376b9e6f4e9e8746587f91265dbe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d5972ebcb234bf3b77b790cc5c6aba1.setIcon(icon_62c1376b9e6f4e9e8746587f91265dbe);


            marker_4d5972ebcb234bf3b77b790cc5c6aba1.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_96316e1c86a84a36aad2d9aaf4d0d556 = L.marker(
                [-27.385446999999996, 153.03526599999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7b659b00522d4081a93acebe85fdd462 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_96316e1c86a84a36aad2d9aaf4d0d556.setIcon(icon_7b659b00522d4081a93acebe85fdd462);


            marker_96316e1c86a84a36aad2d9aaf4d0d556.bindTooltip(
                `<div>
                     Brisbane Hockey Management Group Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_20f81a89a50a4ea3a178a28938ffe62c = L.marker(
                [-16.924941, 145.739198],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fa05333883c540b5a84ed5862a3a0c3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20f81a89a50a4ea3a178a28938ffe62c.setIcon(icon_fa05333883c540b5a84ed5862a3a0c3b);


            marker_20f81a89a50a4ea3a178a28938ffe62c.bindTooltip(
                `<div>
                     Cairns Cycling Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7fcbc3c17f114800a4989ff9ea57fddb = L.marker(
                [-24.920074, 152.491034],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0528cb47e87646b48116bc2ca05d99d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fcbc3c17f114800a4989ff9ea57fddb.setIcon(icon_0528cb47e87646b48116bc2ca05d99d6);


            marker_7fcbc3c17f114800a4989ff9ea57fddb.bindTooltip(
                `<div>
                     Elliott Heads Surf Life Saving Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7ca8ff6e668b4339b0dbd66a7d3b4246 = L.marker(
                [-19.313214000000002, 146.799343],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a3631f663b63433da2d0907c07a2a4e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ca8ff6e668b4339b0dbd66a7d3b4246.setIcon(icon_a3631f663b63433da2d0907c07a2a4e0);


            marker_7ca8ff6e668b4339b0dbd66a7d3b4246.bindTooltip(
                `<div>
                     Townsville City Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_92939625c53a4de2ae05bd69cf715c45 = L.marker(
                [-27.714639000000002, 153.206228],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_12d350b2e3c44f6eb2d244017cd1ff17 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_92939625c53a4de2ae05bd69cf715c45.setIcon(icon_12d350b2e3c44f6eb2d244017cd1ff17);


            marker_92939625c53a4de2ae05bd69cf715c45.bindTooltip(
                `<div>
                     Beenleigh Australian Rules Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d53ca2bc5dd5450f8db4f32ab7537db7 = L.marker(
                [-28.032954999999998, 147.482479],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3fd4e68a8e7d4ad9a3f7ec548cfaf2f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d53ca2bc5dd5450f8db4f32ab7537db7.setIcon(icon_3fd4e68a8e7d4ad9a3f7ec548cfaf2f4);


            marker_d53ca2bc5dd5450f8db4f32ab7537db7.bindTooltip(
                `<div>
                     Bollon Tennis Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_4939f3f080a448bb87df75df8c8081ca = L.marker(
                [-27.896077000000002, 153.30973600000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d2c5c2618deb4d1d8ce990b4987b7e2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4939f3f080a448bb87df75df8c8081ca.setIcon(icon_d2c5c2618deb4d1d8ce990b4987b7e2a);


            marker_4939f3f080a448bb87df75df8c8081ca.bindTooltip(
                `<div>
                     Coomera Cubs Baseball Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_06f93ff4c4d349a3ac7130ec96a1950f = L.marker(
                [-21.083731, 149.120174],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_49efc313e6eb43e7bfd22755206ce107 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_06f93ff4c4d349a3ac7130ec96a1950f.setIcon(icon_49efc313e6eb43e7bfd22755206ce107);


            marker_06f93ff4c4d349a3ac7130ec96a1950f.bindTooltip(
                `<div>
                     Mad Mountain Bike Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_60c4a1e54287469e87b98aa3535b033d = L.marker(
                [-25.307810999999997, 152.887431],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2f8eb378a58844f1a39dd749957c2d1f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60c4a1e54287469e87b98aa3535b033d.setIcon(icon_2f8eb378a58844f1a39dd749957c2d1f);


            marker_60c4a1e54287469e87b98aa3535b033d.bindTooltip(
                `<div>
                     Wide Bay Gymnastics Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_6707868d25a34ca9a4fc906cc9c38387 = L.marker(
                [-27.994278, 153.39501299999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b193d35946ba498f99eac0821f737dd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6707868d25a34ca9a4fc906cc9c38387.setIcon(icon_b193d35946ba498f99eac0821f737dd7);


            marker_6707868d25a34ca9a4fc906cc9c38387.bindTooltip(
                `<div>
                     Southport Carrara Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_59f2f5b6baba41518b1655a7fa6833ca = L.marker(
                [-21.116182000000002, 149.18393],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_204c25e8017b4864abd77712086836dc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_59f2f5b6baba41518b1655a7fa6833ca.setIcon(icon_204c25e8017b4864abd77712086836dc);


            marker_59f2f5b6baba41518b1655a7fa6833ca.bindTooltip(
                `<div>
                     Mackay District Junior Rugby Union Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c6682d4bad7c4a039c4c1b7a49cc0f6a = L.marker(
                [-23.590412, 148.889015],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2acfa4579adc441c9562b1d6bf2caa1b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c6682d4bad7c4a039c4c1b7a49cc0f6a.setIcon(icon_2acfa4579adc441c9562b1d6bf2caa1b);


            marker_c6682d4bad7c4a039c4c1b7a49cc0f6a.bindTooltip(
                `<div>
                     Blackwater Pony Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5e8c38e7486544719b9745c16c76cd9a = L.marker(
                [-27.488917999999998, 152.985426],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d04c0cb1cd8f491c83c772a6973c7096 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e8c38e7486544719b9745c16c76cd9a.setIcon(icon_d04c0cb1cd8f491c83c772a6973c7096);


            marker_5e8c38e7486544719b9745c16c76cd9a.bindTooltip(
                `<div>
                     Wests Juniors Australian Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_b002e4a57fdc4e79a7fefddd30773ea6 = L.marker(
                [-21.103979000000002, 149.170929],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b557250b83e04d2cb501b85fc34c1eb0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b002e4a57fdc4e79a7fefddd30773ea6.setIcon(icon_b557250b83e04d2cb501b85fc34c1eb0);


            marker_b002e4a57fdc4e79a7fefddd30773ea6.bindTooltip(
                `<div>
                     North Mackay Australian Rules Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_60ed599b1e98407eb5d08fe3bf9c2da5 = L.marker(
                [-20.01909, 148.245494],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_566b5863a5b14467a79fa5c907ba05ca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60ed599b1e98407eb5d08fe3bf9c2da5.setIcon(icon_566b5863a5b14467a79fa5c907ba05ca);


            marker_60ed599b1e98407eb5d08fe3bf9c2da5.bindTooltip(
                `<div>
                     Port Denison Sailing Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_a4e1290116a942e08bf07086bbe4ebd4 = L.marker(
                [-27.629514, 153.302851],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0ca29cad6660445e8ee3ed0934ea8b7f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a4e1290116a942e08bf07086bbe4ebd4.setIcon(icon_0ca29cad6660445e8ee3ed0934ea8b7f);


            marker_a4e1290116a942e08bf07086bbe4ebd4.bindTooltip(
                `<div>
                     Vp Magic Fc Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_6c4982e6f08d492682520545b3225d51 = L.marker(
                [-21.145303, 148.940248],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a9398f01bd9b4c6eb7f967ae0d7d8e27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c4982e6f08d492682520545b3225d51.setIcon(icon_a9398f01bd9b4c6eb7f967ae0d7d8e27);


            marker_6c4982e6f08d492682520545b3225d51.bindTooltip(
                `<div>
                     Marian Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_583bddb1944245008ca9f31b46cc245d = L.marker(
                [-27.640024, 152.760206],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_64d23aef9d734c8aaf2733c0c6b22590 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_583bddb1944245008ca9f31b46cc245d.setIcon(icon_64d23aef9d734c8aaf2733c0c6b22590);


            marker_583bddb1944245008ca9f31b46cc245d.bindTooltip(
                `<div>
                     Ipswich Hockey Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b87a0ae8c17b455292000ef2f7c065ca = L.marker(
                [-27.801221999999996, 153.275547],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_42ac527544f94f2494b59b82a55e65d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b87a0ae8c17b455292000ef2f7c065ca.setIcon(icon_42ac527544f94f2494b59b82a55e65d5);


            marker_b87a0ae8c17b455292000ef2f7c065ca.bindTooltip(
                `<div>
                     Ormeau Pimpama Tennis Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_9a2b97b9bb614f09b1fef909b6065adf = L.marker(
                [-21.159354, 149.18629099999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d817ed14f82e4b5b935e1056f643122f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9a2b97b9bb614f09b1fef909b6065adf.setIcon(icon_d817ed14f82e4b5b935e1056f643122f);


            marker_9a2b97b9bb614f09b1fef909b6065adf.bindTooltip(
                `<div>
                     Mackay Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_acd2e13879164d3782dc66c514838514 = L.marker(
                [-27.516951000000002, 152.981607],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2380c4f43972406d9e2a5e9e5060279f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_acd2e13879164d3782dc66c514838514.setIcon(icon_2380c4f43972406d9e2a5e9e5060279f);


            marker_acd2e13879164d3782dc66c514838514.bindTooltip(
                `<div>
                     Western Districts Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_37c8c80dcbbc44d7acdb0806ffbed4b0 = L.marker(
                [-18.657971, 146.1596],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a17c813555df4ddc8008236b77ab48a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37c8c80dcbbc44d7acdb0806ffbed4b0.setIcon(icon_a17c813555df4ddc8008236b77ab48a2);


            marker_37c8c80dcbbc44d7acdb0806ffbed4b0.bindTooltip(
                `<div>
                     Hinchinbrook Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_bda54a67312648a0956b545474f80c89 = L.marker(
                [-17.001883, 145.766091],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_04a85e6aeda747d28a12efa76e146cd4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bda54a67312648a0956b545474f80c89.setIcon(icon_04a85e6aeda747d28a12efa76e146cd4);


            marker_bda54a67312648a0956b545474f80c89.bindTooltip(
                `<div>
                     North Queensland International Motor Raceway Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_bcd0a2ec9f664f81a3de86d0d73dc93a = L.marker(
                [-27.369765, 152.820717],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a83c8e3327264b7793405c009eef5253 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bcd0a2ec9f664f81a3de86d0d73dc93a.setIcon(icon_a83c8e3327264b7793405c009eef5253);


            marker_bcd0a2ec9f664f81a3de86d0d73dc93a.bindTooltip(
                `<div>
                     Samford Riding For The Disabled Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_8ddcc9b7d1394457bcfb8abd0b09e0bf = L.marker(
                [-26.389554999999998, 153.029371],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4f1a0b85cf2b4fac9b111eb75faac616 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ddcc9b7d1394457bcfb8abd0b09e0bf.setIcon(icon_4f1a0b85cf2b4fac9b111eb75faac616);


            marker_8ddcc9b7d1394457bcfb8abd0b09e0bf.bindTooltip(
                `<div>
                     Tewantin - Noosa Cricket Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_eec30b30f4ea4fb8bf18d5d6bc111e29 = L.marker(
                [-27.914163000000002, 153.36758899999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7dd480042fcc49d1b59a8954b195c8cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eec30b30f4ea4fb8bf18d5d6bc111e29.setIcon(icon_7dd480042fcc49d1b59a8954b195c8cb);


            marker_eec30b30f4ea4fb8bf18d5d6bc111e29.bindTooltip(
                `<div>
                     Arundel Park Riding For Disabled Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4617dd627b5d4426b05f670e2828632b = L.marker(
                [-27.21792, 153.092062],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2e7e3a9d55294dfda3fefc71cf87f294 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4617dd627b5d4426b05f670e2828632b.setIcon(icon_2e7e3a9d55294dfda3fefc71cf87f294);


            marker_4617dd627b5d4426b05f670e2828632b.bindTooltip(
                `<div>
                     Newport Cruising Yacht Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0d65cb98257e4cd99bca5eec823a8b2b = L.marker(
                [-28.038084, 148.576643],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0ab165b5462745d8bff99ebac0d53207 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0d65cb98257e4cd99bca5eec823a8b2b.setIcon(icon_0ab165b5462745d8bff99ebac0d53207);


            marker_0d65cb98257e4cd99bca5eec823a8b2b.bindTooltip(
                `<div>
                     Balonne Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_344053c3760a422d800defc0a47f7478 = L.marker(
                [-27.598648999999998, 152.912835],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ff09cb1ab5d84fa4be6e3fcaff54f6c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_344053c3760a422d800defc0a47f7478.setIcon(icon_ff09cb1ab5d84fa4be6e3fcaff54f6c4);


            marker_344053c3760a422d800defc0a47f7478.bindTooltip(
                `<div>
                     Wolston Park Centenary Cricket Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_9c5468f41d934c8893393dc7713d63c3 = L.marker(
                [-18.759745000000002, 146.585373],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ef649ca206bf4db98fff57bf4136f12e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9c5468f41d934c8893393dc7713d63c3.setIcon(icon_ef649ca206bf4db98fff57bf4136f12e);


            marker_9c5468f41d934c8893393dc7713d63c3.bindTooltip(
                `<div>
                     Palm Island Aboriginal Council
                 </div>`,
                {"sticky": true}
            );


            var marker_3bc74072b4c64e38bfac030c9ceb1d50 = L.marker(
                [-27.711796999999997, 153.205534],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8d4508978c404b8d9f08af08c59c260a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3bc74072b4c64e38bfac030c9ceb1d50.setIcon(icon_8d4508978c404b8d9f08af08c59c260a);


            marker_3bc74072b4c64e38bfac030c9ceb1d50.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_b5679abd5b7c48c1b2a639813b57f335 = L.marker(
                [-27.732986, 153.21432],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0f2f5fd3293849a1a9a7b8db590eb8de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5679abd5b7c48c1b2a639813b57f335.setIcon(icon_0f2f5fd3293849a1a9a7b8db590eb8de);


            marker_b5679abd5b7c48c1b2a639813b57f335.bindTooltip(
                `<div>
                     Mount Warren Park Golf Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_c66c2275e2234973b49a2b5f86279899 = L.marker(
                [-27.401774, 153.04111],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c24933e469e341d4bc11892e88a8312d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c66c2275e2234973b49a2b5f86279899.setIcon(icon_c24933e469e341d4bc11892e88a8312d);


            marker_c66c2275e2234973b49a2b5f86279899.bindTooltip(
                `<div>
                     Northern Suburbs Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_b91a2588c8a34dc98170cc6b8563fdf0 = L.marker(
                [-16.924309, 145.758223],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_10ce0b3a1d084dfcbec6293165120334 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b91a2588c8a34dc98170cc6b8563fdf0.setIcon(icon_10ce0b3a1d084dfcbec6293165120334);


            marker_b91a2588c8a34dc98170cc6b8563fdf0.bindTooltip(
                `<div>
                     Cairns District Junior Rugby League Limited
                 </div>`,
                {"sticky": true}
            );


            var marker_62436fe0865c485599658ef9c1e58021 = L.marker(
                [-27.506738000000002, 153.02335],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_64be8c3a14a840e1a1ba024183ece5ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_62436fe0865c485599658ef9c1e58021.setIcon(icon_64be8c3a14a840e1a1ba024183ece5ee);


            marker_62436fe0865c485599658ef9c1e58021.bindTooltip(
                `<div>
                     Brisbane Rugby League Referees Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_d79372d419154285b44c00b7b7824e86 = L.marker(
                [-27.156309999999998, 152.96618999999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8a8eb3ad3969488cb600edca3ef048bd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d79372d419154285b44c00b7b7824e86.setIcon(icon_8a8eb3ad3969488cb600edca3ef048bd);


            marker_d79372d419154285b44c00b7b7824e86.bindTooltip(
                `<div>
                     Burpengary Junior Rugby League Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_3abeacbe917b475483fbf45cd9e2b55b = L.marker(
                [-27.599341, 153.148062],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a41a3686135549c5a806357d325d5f4c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3abeacbe917b475483fbf45cd9e2b55b.setIcon(icon_a41a3686135549c5a806357d325d5f4c);


            marker_3abeacbe917b475483fbf45cd9e2b55b.bindTooltip(
                `<div>
                     Underwood Park Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_3da33fbb7e0e4995b6cc211ce42ae432 = L.marker(
                [-21.162748, 149.183491],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1f489e5b3d1e4ad7aa8cd0fae4d45528 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3da33fbb7e0e4995b6cc211ce42ae432.setIcon(icon_1f489e5b3d1e4ad7aa8cd0fae4d45528);


            marker_3da33fbb7e0e4995b6cc211ce42ae432.bindTooltip(
                `<div>
                     Mackay Junior Rugby Football League Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_28bc3b511d29493cb7f6684e875960dd = L.marker(
                [-24.876326000000002, 152.326367],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b54a79aae22946768849dd5b8afc9170 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_28bc3b511d29493cb7f6684e875960dd.setIcon(icon_b54a79aae22946768849dd5b8afc9170);


            marker_28bc3b511d29493cb7f6684e875960dd.bindTooltip(
                `<div>
                     Western Suburbs Junior Rugby League Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9fa40af2429e45ada5a2403cc153fe68 = L.marker(
                [-27.218846000000003, 153.097293],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4ffcd018125d4699ada69a5cd0de1cba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9fa40af2429e45ada5a2403cc153fe68.setIcon(icon_4ffcd018125d4699ada69a5cd0de1cba);


            marker_9fa40af2429e45ada5a2403cc153fe68.bindTooltip(
                `<div>
                     The Redcliffe District Rugby League Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_a24619de6a5240e5ad824925b65efef7 = L.marker(
                [-27.551151, 152.920991],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_90ec2f028cdd42ea956ed24990d34adf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a24619de6a5240e5ad824925b65efef7.setIcon(icon_90ec2f028cdd42ea956ed24990d34adf);


            marker_a24619de6a5240e5ad824925b65efef7.bindTooltip(
                `<div>
                     St Catherine's United Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_43054c897a5e4681bab65fd5534ee386 = L.marker(
                [-27.184115999999996, 151.267824],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ba7da1d6b6b749d6899a17726f3308b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43054c897a5e4681bab65fd5534ee386.setIcon(icon_ba7da1d6b6b749d6899a17726f3308b2);


            marker_43054c897a5e4681bab65fd5534ee386.bindTooltip(
                `<div>
                     Dalby Bowls Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_776ff7415cac4893b257ade75144bcad = L.marker(
                [-19.572961, 147.400945],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_067e324901254719b13baa6e4c2f5eaf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_776ff7415cac4893b257ade75144bcad.setIcon(icon_067e324901254719b13baa6e4c2f5eaf);


            marker_776ff7415cac4893b257ade75144bcad.bindTooltip(
                `<div>
                     Ayr Bowling Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_24400b0f65ec4a07b272076a493495f5 = L.marker(
                [-16.889206, 145.749581],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9e22719f891749c8a965ac3cefea597e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24400b0f65ec4a07b272076a493495f5.setIcon(icon_9e22719f891749c8a965ac3cefea597e);


            marker_24400b0f65ec4a07b272076a493495f5.bindTooltip(
                `<div>
                     Cairns Pirates Touch Football Assoc Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_92e05b9fce9d490db15e02e1d1d1dac6 = L.marker(
                [-27.547940999999998, 152.28706100000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e0eaadb4c5784917909b918b06b94b65 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_92e05b9fce9d490db15e02e1d1d1dac6.setIcon(icon_e0eaadb4c5784917909b918b06b94b65);


            marker_92e05b9fce9d490db15e02e1d1d1dac6.bindTooltip(
                `<div>
                     Cahill Park Sports Complex Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_4f587184f40b4da2b7b4e2473ada4bfe = L.marker(
                [-13.359025, 141.727959],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d0be1979b09a4aea8c35d9dff2ced9b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4f587184f40b4da2b7b4e2473ada4bfe.setIcon(icon_d0be1979b09a4aea8c35d9dff2ced9b4);


            marker_4f587184f40b4da2b7b4e2473ada4bfe.bindTooltip(
                `<div>
                     Aurukun Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_bcae39be0e31413b9314de19813bbb23 = L.marker(
                [-16.995005, 145.418782],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1e7533ebbf3241af96e5a0db6a19a009 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bcae39be0e31413b9314de19813bbb23.setIcon(icon_1e7533ebbf3241af96e5a0db6a19a009);


            marker_bcae39be0e31413b9314de19813bbb23.bindTooltip(
                `<div>
                     Mareeba Gymnastics Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_b293e4ae6c4e49dfa9650af96be7b076 = L.marker(
                [-19.580455999999998, 147.411118],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6a0c8ab3635a465cb76e0c8b3d30ca6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b293e4ae6c4e49dfa9650af96be7b076.setIcon(icon_6a0c8ab3635a465cb76e0c8b3d30ca6a);


            marker_b293e4ae6c4e49dfa9650af96be7b076.bindTooltip(
                `<div>
                     Ayr Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_777b5fe773014c7f8b807d319e032d9d = L.marker(
                [-19.268483, 146.82596999999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_741a553f210842c988621c5a83956c67 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_777b5fe773014c7f8b807d319e032d9d.setIcon(icon_741a553f210842c988621c5a83956c67);


            marker_777b5fe773014c7f8b807d319e032d9d.bindTooltip(
                `<div>
                     South Townsville Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_06d81393ab054f2b8812b0292a04b536 = L.marker(
                [-22.907338, 139.912601],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9bdea7af2a604e969065b39cb0f43830 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_06d81393ab054f2b8812b0292a04b536.setIcon(icon_9bdea7af2a604e969065b39cb0f43830);


            marker_06d81393ab054f2b8812b0292a04b536.bindTooltip(
                `<div>
                     Boulia Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_bd954fbb30b94d778169c97cd83e35e7 = L.marker(
                [-26.409996000000003, 153.051633],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7da2bf04ae574d5f98402ddbe8d280d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd954fbb30b94d778169c97cd83e35e7.setIcon(icon_7da2bf04ae574d5f98402ddbe8d280d3);


            marker_bd954fbb30b94d778169c97cd83e35e7.bindTooltip(
                `<div>
                     The Noosa Croquet Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7754c6f8d98244b0850c185c23b4c153 = L.marker(
                [-17.7487, 146.01916599999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6238b9756f68460aa430253e0ed1b00f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7754c6f8d98244b0850c185c23b4c153.setIcon(icon_6238b9756f68460aa430253e0ed1b00f);


            marker_7754c6f8d98244b0850c185c23b4c153.bindTooltip(
                `<div>
                     Silkwood Clay Target Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c31c54f4e9e6463cbed93394b3c6f0fe = L.marker(
                [-27.739688, 153.188804],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d61e4cbe4c75456fb53bb83cad61cf9c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c31c54f4e9e6463cbed93394b3c6f0fe.setIcon(icon_d61e4cbe4c75456fb53bb83cad61cf9c);


            marker_c31c54f4e9e6463cbed93394b3c6f0fe.bindTooltip(
                `<div>
                     Yatala Junior Rugby Union Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_3b7bd362afd543a7a70452ee12b5b8b1 = L.marker(
                [-26.864558000000002, 152.099018],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_64459f5dafa5450fb367960b468dd176 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3b7bd362afd543a7a70452ee12b5b8b1.setIcon(icon_64459f5dafa5450fb367960b468dd176);


            marker_3b7bd362afd543a7a70452ee12b5b8b1.bindTooltip(
                `<div>
                     Blackbutt Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_341a6aafd9954995bd3d3d16aef8e2e8 = L.marker(
                [-28.804503000000004, 151.841124],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6b90d1e2f75541aeb034cb1de3961632 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_341a6aafd9954995bd3d3d16aef8e2e8.setIcon(icon_6b90d1e2f75541aeb034cb1de3961632);


            marker_341a6aafd9954995bd3d3d16aef8e2e8.bindTooltip(
                `<div>
                     Ballandean Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7b2716e9f1e34caca8c1dd467c70a774 = L.marker(
                [-26.20213, 152.436823],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_edf9e24fdcf14c70b8de4be711f4f089 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7b2716e9f1e34caca8c1dd467c70a774.setIcon(icon_edf9e24fdcf14c70b8de4be711f4f089);


            marker_7b2716e9f1e34caca8c1dd467c70a774.bindTooltip(
                `<div>
                     Widgee District - Hall And Recreation Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_5b755dd38e7f4e8daf13dfc443133eae = L.marker(
                [-20.653727, 141.746354],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_020af24eafa14affa95e9d03bf28af05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b755dd38e7f4e8daf13dfc443133eae.setIcon(icon_020af24eafa14affa95e9d03bf28af05);


            marker_5b755dd38e7f4e8daf13dfc443133eae.bindTooltip(
                `<div>
                     Mckinlay Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_435c5df5ebd94400acfb113153ae779e = L.marker(
                [-27.421411, 153.032158],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_04c4269c51cb4734a57ee3448518b242 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_435c5df5ebd94400acfb113153ae779e.setIcon(icon_04c4269c51cb4734a57ee3448518b242);


            marker_435c5df5ebd94400acfb113153ae779e.bindTooltip(
                `<div>
                     North Brisbane Fc Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_20992c7e505f4c2996e7c4ca999d0dcd = L.marker(
                [-27.553397999999998, 153.075894],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ec5b623a5ec94cfc9ec63241a212c0df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20992c7e505f4c2996e7c4ca999d0dcd.setIcon(icon_ec5b623a5ec94cfc9ec63241a212c0df);


            marker_20992c7e505f4c2996e7c4ca999d0dcd.bindTooltip(
                `<div>
                     Clairvaux Soccer Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_f0f592d4eb044c4aa87314a8ed059c2d = L.marker(
                [-19.330136, 146.743943],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b13068f1ade44c12a6688d053af3d8a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f0f592d4eb044c4aa87314a8ed059c2d.setIcon(icon_b13068f1ade44c12a6688d053af3d8a0);


            marker_f0f592d4eb044c4aa87314a8ed059c2d.bindTooltip(
                `<div>
                     Townsville Rockwheelers Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_af1061e13bb54d44bd5bf457a171b199 = L.marker(
                [-26.294499, 151.955446],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_dfa3ec4e87ea4812a2347bfd61bc3635 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_af1061e13bb54d44bd5bf457a171b199.setIcon(icon_dfa3ec4e87ea4812a2347bfd61bc3635);


            marker_af1061e13bb54d44bd5bf457a171b199.bindTooltip(
                `<div>
                     Cherbourg Sports Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_23d76ee45fb94a82bd05968e86d12634 = L.marker(
                [-25.803624, 146.593228],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3bd794e133334801b5dde6a084048378 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23d76ee45fb94a82bd05968e86d12634.setIcon(icon_3bd794e133334801b5dde6a084048378);


            marker_23d76ee45fb94a82bd05968e86d12634.bindTooltip(
                `<div>
                     Augathella Junior Rugby League Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c2f97a3f23b94ef989f4d301c3b601d7 = L.marker(
                [-20.731397, 143.13890800000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d972c57d7e4d4652acb859f1ab9776a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c2f97a3f23b94ef989f4d301c3b601d7.setIcon(icon_d972c57d7e4d4652acb859f1ab9776a8);


            marker_c2f97a3f23b94ef989f4d301c3b601d7.bindTooltip(
                `<div>
                     Richmond Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_f97e86fe27874bbd9831643b1438e06f = L.marker(
                [-17.585341, 146.040367],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d29cd1264ead4731b2cbce586d170ae7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f97e86fe27874bbd9831643b1438e06f.setIcon(icon_d29cd1264ead4731b2cbce586d170ae7);


            marker_f97e86fe27874bbd9831643b1438e06f.bindTooltip(
                `<div>
                     Innisfail United Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_f8b7c563cc264c7a8f53b62a7a9baaf0 = L.marker(
                [-21.184829, 149.17330900000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_544a6304614d4658ada7ea3f3e8a49ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f8b7c563cc264c7a8f53b62a7a9baaf0.setIcon(icon_544a6304614d4658ada7ea3f3e8a49ba);


            marker_f8b7c563cc264c7a8f53b62a7a9baaf0.bindTooltip(
                `<div>
                     Mackay Brothers Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_98026acc5cf841288a64791f483af3b6 = L.marker(
                [-27.586753, 152.778836],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ec8826fafbac4c3395821a66c164a181 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_98026acc5cf841288a64791f483af3b6.setIcon(icon_ec8826fafbac4c3395821a66c164a181);


            marker_98026acc5cf841288a64791f483af3b6.bindTooltip(
                `<div>
                     Musketeers Sports Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_74a1ce9bee4d4732a563c1a0a66744e8 = L.marker(
                [-17.732244, 139.545735],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_894a1259617640b2a54797911b27e129 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_74a1ce9bee4d4732a563c1a0a66744e8.setIcon(icon_894a1259617640b2a54797911b27e129);


            marker_74a1ce9bee4d4732a563c1a0a66744e8.bindTooltip(
                `<div>
                     Burke Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_e8caf928395c42e2a0187579286e8a0f = L.marker(
                [-27.572657, 153.07466200000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_32f4821cf86b456283b704345c2328a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e8caf928395c42e2a0187579286e8a0f.setIcon(icon_32f4821cf86b456283b704345c2328a5);


            marker_e8caf928395c42e2a0187579286e8a0f.bindTooltip(
                `<div>
                     Sunnybank Senior Rugby Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_49c524d7c46f447c80b26d3e1579a0f5 = L.marker(
                [-17.941071, 145.929546],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7e3f2c3808ae4427b84054b3d2fe7797 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49c524d7c46f447c80b26d3e1579a0f5.setIcon(icon_7e3f2c3808ae4427b84054b3d2fe7797);


            marker_49c524d7c46f447c80b26d3e1579a0f5.bindTooltip(
                `<div>
                     Tully Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_92982caaa65a4efcb085ffe8a42034a1 = L.marker(
                [-25.370285, 151.12473400000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3122dc2bc1374e62abe63749b5c7a4f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_92982caaa65a4efcb085ffe8a42034a1.setIcon(icon_3122dc2bc1374e62abe63749b5c7a4f1);


            marker_92982caaa65a4efcb085ffe8a42034a1.bindTooltip(
                `<div>
                     Eidsvold Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_21833cc6507a496eaf5032f6eae96df3 = L.marker(
                [-27.440169, 152.455194],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3040e326756e4c0eb7413202ff6dd9e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_21833cc6507a496eaf5032f6eae96df3.setIcon(icon_3040e326756e4c0eb7413202ff6dd9e5);


            marker_21833cc6507a496eaf5032f6eae96df3.bindTooltip(
                `<div>
                     The Boys' Brigade Queensland Limited
                 </div>`,
                {"sticky": true}
            );


            var marker_b1141ea2f24540128eed545e07790492 = L.marker(
                [-23.874329, 151.24000900000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2e5ef737ac074424aa83d017cdab07a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b1141ea2f24540128eed545e07790492.setIcon(icon_2e5ef737ac074424aa83d017cdab07a0);


            marker_b1141ea2f24540128eed545e07790492.bindTooltip(
                `<div>
                     Yaralla Golf Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_8ef0c64f39824528995081010a2eb454 = L.marker(
                [-26.864056, 152.956486],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b9a5ca5225fb4eb18741cf159f678465 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ef0c64f39824528995081010a2eb454.setIcon(icon_b9a5ca5225fb4eb18741cf159f678465);


            marker_8ef0c64f39824528995081010a2eb454.bindTooltip(
                `<div>
                     Beerwah Sportsground Management Committee Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d4fae17abf424d6084be84fb7233cddb = L.marker(
                [-24.864608999999998, 152.347257],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e5d088c9d590418a8221ed4199e3ad57 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4fae17abf424d6084be84fb7233cddb.setIcon(icon_e5d088c9d590418a8221ed4199e3ad57);


            marker_d4fae17abf424d6084be84fb7233cddb.bindTooltip(
                `<div>
                     Bundaberg Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_40b16e0452e5492da1b2d9326f102ff1 = L.marker(
                [-27.080733000000002, 153.17765500000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f0781ed89d7d4cb49bf306ca15d0be6c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_40b16e0452e5492da1b2d9326f102ff1.setIcon(icon_f0781ed89d7d4cb49bf306ca15d0be6c);


            marker_40b16e0452e5492da1b2d9326f102ff1.bindTooltip(
                `<div>
                     Bribie Island Soccer Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_81d2732f6a0540fc8bef8cf6735a505b = L.marker(
                [-19.581545000000002, 147.40419599999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4cd3194511ec492596724d4773984817 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_81d2732f6a0540fc8bef8cf6735a505b.setIcon(icon_4cd3194511ec492596724d4773984817);


            marker_81d2732f6a0540fc8bef8cf6735a505b.bindTooltip(
                `<div>
                     Burdekin Amateur Basketball Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_294acdceb48d446cbc2766aaad8c0bbf = L.marker(
                [-23.349832, 150.53327099999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02d4477068a047ca8a1e1e5a16ee95c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_294acdceb48d446cbc2766aaad8c0bbf.setIcon(icon_02d4477068a047ca8a1e1e5a16ee95c0);


            marker_294acdceb48d446cbc2766aaad8c0bbf.bindTooltip(
                `<div>
                     Diggers Memorial Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_147148a9783a4db986d6cb8704b37c0e = L.marker(
                [-27.910262, 153.390798],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_09c9a6ac8cf447158e250d39b448d4ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_147148a9783a4db986d6cb8704b37c0e.setIcon(icon_09c9a6ac8cf447158e250d39b448d4ab);


            marker_147148a9783a4db986d6cb8704b37c0e.bindTooltip(
                `<div>
                     Gold Coast Regional Tennis Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_f247f8b76a1c402b82e3e772a3ededb6 = L.marker(
                [-18.204941, 142.244815],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c279a193d19f465097da2a3a4b8230b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f247f8b76a1c402b82e3e772a3ededb6.setIcon(icon_c279a193d19f465097da2a3a4b8230b2);


            marker_f247f8b76a1c402b82e3e772a3ededb6.bindTooltip(
                `<div>
                     Croydon Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_ba6bb5138e6f4c5d8bd0d218d73b6fd1 = L.marker(
                [-21.131589, 149.185242],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6649adc03b774ccfae75721ad25242b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ba6bb5138e6f4c5d8bd0d218d73b6fd1.setIcon(icon_6649adc03b774ccfae75721ad25242b4);


            marker_ba6bb5138e6f4c5d8bd0d218d73b6fd1.bindTooltip(
                `<div>
                     Rangers Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_eb5b7cbece0d411e930ea883008d6721 = L.marker(
                [-25.327334, 152.810868],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_341f2d92b21044139e6fe8ef1ed7c4e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eb5b7cbece0d411e930ea883008d6721.setIcon(icon_341f2d92b21044139e6fe8ef1ed7c4e2);


            marker_eb5b7cbece0d411e930ea883008d6721.bindTooltip(
                `<div>
                     Football Queensland - Wide Bay Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_e8357aee6e854a6a98e6a791f74ebd19 = L.marker(
                [-16.820698999999998, 145.694521],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_484138df9eb54a30aa1426ad643dece0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e8357aee6e854a6a98e6a791f74ebd19.setIcon(icon_484138df9eb54a30aa1426ad643dece0);


            marker_e8357aee6e854a6a98e6a791f74ebd19.bindTooltip(
                `<div>
                     Cairns Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_e0ac2d3b85024d2e9c1c9265e412c630 = L.marker(
                [-27.088835999999997, 152.946694],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c644c8b5a5a2414a8de01a2b3b65eb04 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e0ac2d3b85024d2e9c1c9265e412c630.setIcon(icon_c644c8b5a5a2414a8de01a2b3b65eb04);


            marker_e0ac2d3b85024d2e9c1c9265e412c630.bindTooltip(
                `<div>
                     Caboolture Junior Rugby League Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_bb9bb31822814a368f86af4c97201da9 = L.marker(
                [-17.150791, 145.105114],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a40cb1be8c5b4b818a3a7f4abc6c4235 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bb9bb31822814a368f86af4c97201da9.setIcon(icon_a40cb1be8c5b4b818a3a7f4abc6c4235);


            marker_bb9bb31822814a368f86af4c97201da9.bindTooltip(
                `<div>
                     Mareeba Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_00e469eb3f2a4f8b8f91dc9765861310 = L.marker(
                [-23.660135, 148.088044],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_83a019e80b354144b64d4cb76890c464 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00e469eb3f2a4f8b8f91dc9765861310.setIcon(icon_83a019e80b354144b64d4cb76890c464);


            marker_00e469eb3f2a4f8b8f91dc9765861310.bindTooltip(
                `<div>
                     Maraboon Power Boat And Ski Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_bd2c6cfed3fc486c90fe75fca06a60c5 = L.marker(
                [-25.593026000000002, 151.30166],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1503f5ec9485449ebff7b6f6e0b91249 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd2c6cfed3fc486c90fe75fca06a60c5.setIcon(icon_1503f5ec9485449ebff7b6f6e0b91249);


            marker_bd2c6cfed3fc486c90fe75fca06a60c5.bindTooltip(
                `<div>
                     Mundubbera Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_2d3554a2af5d456f80444a8663d7f108 = L.marker(
                [-27.454867999999998, 153.025789],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8d7633d2c8c34a88ab10dc570ff22f1a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2d3554a2af5d456f80444a8663d7f108.setIcon(icon_8d7633d2c8c34a88ab10dc570ff22f1a);


            marker_2d3554a2af5d456f80444a8663d7f108.bindTooltip(
                `<div>
                     Rackley Swim Team Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_eea4f995db4e40659c71592e32d977e9 = L.marker(
                [-27.437224, 153.005271],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6ef662facd304fa2895b2732ca8c510b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eea4f995db4e40659c71592e32d977e9.setIcon(icon_6ef662facd304fa2895b2732ca8c510b);


            marker_eea4f995db4e40659c71592e32d977e9.bindTooltip(
                `<div>
                     Brisbane City Football Club Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_96169884a5bc432db574fd08419038c7 = L.marker(
                [-16.962935, 145.743973],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f68f37e2cbf44d32809aa1958706ab73 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_96169884a5bc432db574fd08419038c7.setIcon(icon_f68f37e2cbf44d32809aa1958706ab73);


            marker_96169884a5bc432db574fd08419038c7.bindTooltip(
                `<div>
                     Cairns Stingrays Swimming Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4057a01bcc86403eaccc9d5570739888 = L.marker(
                [-27.665274, 153.051624],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9f2f844578714b8d91d9c75944c4cb32 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4057a01bcc86403eaccc9d5570739888.setIcon(icon_9f2f844578714b8d91d9c75944c4cb32);


            marker_4057a01bcc86403eaccc9d5570739888.bindTooltip(
                `<div>
                     Centenary Plains Bmx Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_8d33d2de76cb4f4fa6ca1d23fd7e7527 = L.marker(
                [-28.007040999999997, 153.396136],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1f405f396ae84b95b88c2ee32f1f2888 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d33d2de76cb4f4fa6ca1d23fd7e7527.setIcon(icon_1f405f396ae84b95b88c2ee32f1f2888);


            marker_8d33d2de76cb4f4fa6ca1d23fd7e7527.bindTooltip(
                `<div>
                     Surfers Paradise - Benowa Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_081ecdb9612841778e79be5683138ed9 = L.marker(
                [-27.088835999999997, 152.946694],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ec1f4dfca14240dfaa6f92a0c8b4c77c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_081ecdb9612841778e79be5683138ed9.setIcon(icon_ec1f4dfca14240dfaa6f92a0c8b4c77c);


            marker_081ecdb9612841778e79be5683138ed9.bindTooltip(
                `<div>
                     Caboolture Netball Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_6f4f9e714b96440487a570295f509e9d = L.marker(
                [-24.395937, 150.514981],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e05849f82a17462abdddc1465d57373b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f4f9e714b96440487a570295f509e9d.setIcon(icon_e05849f82a17462abdddc1465d57373b);


            marker_6f4f9e714b96440487a570295f509e9d.bindTooltip(
                `<div>
                     Callide Valley Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_3d1661579e374d2aa6a687dafdc63e92 = L.marker(
                [-26.421533, 152.911545],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_985b91c229a647bdad1cf13b2ac65d7b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d1661579e374d2aa6a687dafdc63e92.setIcon(icon_985b91c229a647bdad1cf13b2ac65d7b);


            marker_3d1661579e374d2aa6a687dafdc63e92.bindTooltip(
                `<div>
                     Cooroy Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_637dcbd712cd4f5a858b2dfe3dcac77b = L.marker(
                [-16.459477, 145.374553],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4e2ad70fe4cb4e2484aece8f07b72c3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_637dcbd712cd4f5a858b2dfe3dcac77b.setIcon(icon_4e2ad70fe4cb4e2484aece8f07b72c3b);


            marker_637dcbd712cd4f5a858b2dfe3dcac77b.bindTooltip(
                `<div>
                     Mossman And District Gymnastics Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1846347261914d7095743635a79855f3 = L.marker(
                [-16.902196, 145.758262],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d96c2b554a2643b692603ba007b5c830 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1846347261914d7095743635a79855f3.setIcon(icon_d96c2b554a2643b692603ba007b5c830);


            marker_1846347261914d7095743635a79855f3.bindTooltip(
                `<div>
                     Cairns Hockey Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0a7b45d51e9540a6a1832a10e8f4cd88 = L.marker(
                [-24.894814999999998, 152.312733],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_aaa3f1ac2620454cbf3e8902b68c371c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0a7b45d51e9540a6a1832a10e8f4cd88.setIcon(icon_aaa3f1ac2620454cbf3e8902b68c371c);


            marker_0a7b45d51e9540a6a1832a10e8f4cd88.bindTooltip(
                `<div>
                     Bundaberg And District Table Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_743e7b0f256349609443903c7ccc4411 = L.marker(
                [-15.238598999999999, 145.19028400000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_414a8557f1fa488f9849324f2b2900a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_743e7b0f256349609443903c7ccc4411.setIcon(icon_414a8557f1fa488f9849324f2b2900a3);


            marker_743e7b0f256349609443903c7ccc4411.bindTooltip(
                `<div>
                     Hope Vale Aboriginal Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_4671063c7b0e41dfb43618010cc3b364 = L.marker(
                [-27.509597999999997, 153.04079],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3dda8f4a3e604b8e8790f14d4da7b2e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4671063c7b0e41dfb43618010cc3b364.setIcon(icon_3dda8f4a3e604b8e8790f14d4da7b2e1);


            marker_4671063c7b0e41dfb43618010cc3b364.bindTooltip(
                `<div>
                     Annerley Recreation Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_35e51674c504406394da3f7926534904 = L.marker(
                [-27.335486, 152.96641100000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_83507324af5a4b32be51b3661aa43b36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_35e51674c504406394da3f7926534904.setIcon(icon_83507324af5a4b32be51b3661aa43b36);


            marker_35e51674c504406394da3f7926534904.bindTooltip(
                `<div>
                     Albany Creek Excelsior Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_dfb221cb25654da3b04436968d32b703 = L.marker(
                [-27.670256, 153.049831],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_451cfbd4b7e94e08ae2a2f9da4387ee4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dfb221cb25654da3b04436968d32b703.setIcon(icon_451cfbd4b7e94e08ae2a2f9da4387ee4);


            marker_dfb221cb25654da3b04436968d32b703.bindTooltip(
                `<div>
                     Southern Stars Baseball Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_e3c54710398c4f2eae4776650cd4618d = L.marker(
                [-20.056166, 146.31037800000001],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7447302686b04205b2621503ddae0bf5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e3c54710398c4f2eae4776650cd4618d.setIcon(icon_7447302686b04205b2621503ddae0bf5);


            marker_e3c54710398c4f2eae4776650cd4618d.bindTooltip(
                `<div>
                     Towers Kart Racing Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_43b83c30c03342c5846b8fbedda062ff = L.marker(
                [-26.617694, 149.373499],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8e5739b75e0b4eba9b921c3392d9446a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43b83c30c03342c5846b8fbedda062ff.setIcon(icon_8e5739b75e0b4eba9b921c3392d9446a);


            marker_43b83c30c03342c5846b8fbedda062ff.bindTooltip(
                `<div>
                     Yuleba & District Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ea18227178af4b4181ee5b113cb01c14 = L.marker(
                [-27.705296, 153.057495],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2cd86739357c4b4296608fc8f9aba91e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ea18227178af4b4181ee5b113cb01c14.setIcon(icon_2cd86739357c4b4296608fc8f9aba91e);


            marker_ea18227178af4b4181ee5b113cb01c14.bindTooltip(
                `<div>
                     Park Ridge Panthers Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_e63d221c50b34f749d583f7d2cf7792e = L.marker(
                [-15.472176000000001, 145.252775],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f73259c78c1d4b04971957831b9e5f25 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e63d221c50b34f749d583f7d2cf7792e.setIcon(icon_f73259c78c1d4b04971957831b9e5f25);


            marker_e63d221c50b34f749d583f7d2cf7792e.bindTooltip(
                `<div>
                     Cook Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_1ad0e0f05e6f4ba2b5a8ea30b1073ce2 = L.marker(
                [-12.782083, 143.343106],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5b360a1053744313878bba9dcea1d232 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ad0e0f05e6f4ba2b5a8ea30b1073ce2.setIcon(icon_5b360a1053744313878bba9dcea1d232);


            marker_1ad0e0f05e6f4ba2b5a8ea30b1073ce2.bindTooltip(
                `<div>
                     Lockhart River Aboriginal Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_aa8cefbb97d14abfbcd13a8c8c361231 = L.marker(
                [-26.657827, 153.100558],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_885a1f368f8649908dc619c906e83573 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa8cefbb97d14abfbcd13a8c8c361231.setIcon(icon_885a1f368f8649908dc619c906e83573);


            marker_aa8cefbb97d14abfbcd13a8c8c361231.bindTooltip(
                `<div>
                     Sunshine Coast Regional Council
                 </div>`,
                {"sticky": true}
            );


            var marker_85d22e73424244c7b18aa750a2ce7e6c = L.marker(
                [-26.644892, 153.059098],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a0438853a13244efbd2846df081dd78c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85d22e73424244c7b18aa750a2ce7e6c.setIcon(icon_a0438853a13244efbd2846df081dd78c);


            marker_85d22e73424244c7b18aa750a2ce7e6c.bindTooltip(
                `<div>
                     The Sunshine Coast Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_88d645549eb0452a999513c300dca472 = L.marker(
                [-23.84872, 151.255308],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8deb1d80beda46d6bb5a07ed65aae197 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88d645549eb0452a999513c300dca472.setIcon(icon_8deb1d80beda46d6bb5a07ed65aae197);


            marker_88d645549eb0452a999513c300dca472.bindTooltip(
                `<div>
                     Gladstone Tennis & Squash Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_8049b20c049f473ca1f9b2c2e31115c6 = L.marker(
                [-27.512596000000002, 153.019389],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_993de04979a14e609f00c8b343987c19 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8049b20c049f473ca1f9b2c2e31115c6.setIcon(icon_993de04979a14e609f00c8b343987c19);


            marker_8049b20c049f473ca1f9b2c2e31115c6.bindTooltip(
                `<div>
                     Souths Junior Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c5cd18a0117143ddbc366672da0454aa = L.marker(
                [-15.951505, 145.319103],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7b3a0ae61491467a97cbcd2da5069bf4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c5cd18a0117143ddbc366672da0454aa.setIcon(icon_7b3a0ae61491467a97cbcd2da5069bf4);


            marker_c5cd18a0117143ddbc366672da0454aa.bindTooltip(
                `<div>
                     Wujal Wujal Aboriginal Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_0bf08c1279f04f5fbfbbc19576aef8d5 = L.marker(
                [-28.071359, 145.684665],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bae587d0737a4d608bca1fbfe41d2082 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0bf08c1279f04f5fbfbbc19576aef8d5.setIcon(icon_bae587d0737a4d608bca1fbfe41d2082);


            marker_0bf08c1279f04f5fbfbbc19576aef8d5.bindTooltip(
                `<div>
                     Paroo Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_ebe86b2cb71e48e3a35303776a58cba5 = L.marker(
                [-23.586628, 150.58101100000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_de3c5ba27f964f8bbebece7cd5e4684a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ebe86b2cb71e48e3a35303776a58cba5.setIcon(icon_de3c5ba27f964f8bbebece7cd5e4684a);


            marker_ebe86b2cb71e48e3a35303776a58cba5.bindTooltip(
                `<div>
                     Rockhampton Kart Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_1f1e129f9273411b9020f45d3acf3a3c = L.marker(
                [-27.614490999999997, 151.955995],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_48b32f5d06664c59ae2cd73551c29e08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f1e129f9273411b9020f45d3acf3a3c.setIcon(icon_48b32f5d06664c59ae2cd73551c29e08);


            marker_1f1e129f9273411b9020f45d3acf3a3c.bindTooltip(
                `<div>
                     Toowoomba Motocross Club Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_c4d4eae529d54bfd8667ce0c048a472c = L.marker(
                [-27.967415999999997, 153.399281],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c94f06db98174b0abc656fcc9be55f30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c4d4eae529d54bfd8667ce0c048a472c.setIcon(icon_c94f06db98174b0abc656fcc9be55f30);


            marker_c4d4eae529d54bfd8667ce0c048a472c.bindTooltip(
                `<div>
                     Southport Pony & Hack Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_c130a7d1c8ea47de9af94effe45cf0b8 = L.marker(
                [-26.548029, 151.83358],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6388283003724031a054b2e08993fffc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c130a7d1c8ea47de9af94effe45cf0b8.setIcon(icon_6388283003724031a054b2e08993fffc);


            marker_c130a7d1c8ea47de9af94effe45cf0b8.bindTooltip(
                `<div>
                     Kingaroy Senior Soccer Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_3f77e05ffe854605948f4017f7908196 = L.marker(
                [-27.129602000000002, 152.97151200000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7fe81d54cdb546358a9ad7c369f1770c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f77e05ffe854605948f4017f7908196.setIcon(icon_7fe81d54cdb546358a9ad7c369f1770c);


            marker_3f77e05ffe854605948f4017f7908196.bindTooltip(
                `<div>
                     Moreton Bay Lions Australian Football Sports Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1074095143f54cbfa35b948130db922d = L.marker(
                [-27.213263, 153.005464],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a64b2ca381034254ba33586539021c9b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1074095143f54cbfa35b948130db922d.setIcon(icon_a64b2ca381034254ba33586539021c9b);


            marker_1074095143f54cbfa35b948130db922d.bindTooltip(
                `<div>
                     North Lakes District Rugby League Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_802310a757184cf99a9220f44d68e86c = L.marker(
                [-20.55583, 147.84791299999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_274299899ba64e12b4a4e42466419a5b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_802310a757184cf99a9220f44d68e86c.setIcon(icon_274299899ba64e12b4a4e42466419a5b);


            marker_802310a757184cf99a9220f44d68e86c.bindTooltip(
                `<div>
                     Whitsunday Regional Council
                 </div>`,
                {"sticky": true}
            );


            var marker_3ea08894c7e946e9ae96037a60b2fba2 = L.marker(
                [-18.296865, 143.543526],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ae52aceeaaec476897b2eed8cb16eebc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ea08894c7e946e9ae96037a60b2fba2.setIcon(icon_ae52aceeaaec476897b2eed8cb16eebc);


            marker_3ea08894c7e946e9ae96037a60b2fba2.bindTooltip(
                `<div>
                     Georgetown Horse And Pony Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_71b4f6d70b4b4524a24c58a8cc284169 = L.marker(
                [-27.75768, 153.092878],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_65b7d36750974afd9a00ad35b24febc0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71b4f6d70b4b4524a24c58a8cc284169.setIcon(icon_65b7d36750974afd9a00ad35b24febc0);


            marker_71b4f6d70b4b4524a24c58a8cc284169.bindTooltip(
                `<div>
                     Mustangs Brothers Rugby League Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_cd9c235bf8484f29b7061703b375e857 = L.marker(
                [-27.228758000000003, 153.094746],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_58265bab6c9e4db5a4da7c3a48cfa745 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cd9c235bf8484f29b7061703b375e857.setIcon(icon_58265bab6c9e4db5a4da7c3a48cfa745);


            marker_cd9c235bf8484f29b7061703b375e857.bindTooltip(
                `<div>
                     Peninsula And Districts Football And Sporting Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_5b11f834db434bb398c11b3763769e33 = L.marker(
                [-17.268407, 145.482722],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_57c296c119d64efca0c83a83d5c9e558 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b11f834db434bb398c11b3763769e33.setIcon(icon_57c296c119d64efca0c83a83d5c9e558);


            marker_5b11f834db434bb398c11b3763769e33.bindTooltip(
                `<div>
                     Atherton Rugby League Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_c407fc7c113544c993a6506d7d54afb0 = L.marker(
                [-28.200018, 152.033028],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ece9bc011105491186041b773bc6f189 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c407fc7c113544c993a6506d7d54afb0.setIcon(icon_ece9bc011105491186041b773bc6f189);


            marker_c407fc7c113544c993a6506d7d54afb0.bindTooltip(
                `<div>
                     Warwick And District Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_2118789f3e3e4f158fe04ad15c51a932 = L.marker(
                [-10.587879, 142.21305900000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_24fada206b5a4a26927f3515d24f882b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2118789f3e3e4f158fe04ad15c51a932.setIcon(icon_24fada206b5a4a26927f3515d24f882b);


            marker_2118789f3e3e4f158fe04ad15c51a932.bindTooltip(
                `<div>
                     Thursday Island Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1612a7730a8942b49f4cf03ea5db320c = L.marker(
                [-19.272929, 146.749068],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2f80c1c0123f42ab9692b5859336a16b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1612a7730a8942b49f4cf03ea5db320c.setIcon(icon_2f80c1c0123f42ab9692b5859336a16b);


            marker_1612a7730a8942b49f4cf03ea5db320c.bindTooltip(
                `<div>
                     Brothers Tsv Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_adefc788f3f8482c907c530f64190680 = L.marker(
                [-27.159938, 152.96547900000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d2f7ae9a980c44febcca6ad89ab7761f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_adefc788f3f8482c907c530f64190680.setIcon(icon_d2f7ae9a980c44febcca6ad89ab7761f);


            marker_adefc788f3f8482c907c530f64190680.bindTooltip(
                `<div>
                     Burpengary Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_6f45cc60f199493eb0e1cc57cfe77910 = L.marker(
                [-16.927982999999998, 145.875529],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_eb5d35b4e6d1414481018db4d2530abc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f45cc60f199493eb0e1cc57cfe77910.setIcon(icon_eb5d35b4e6d1414481018db4d2530abc);


            marker_6f45cc60f199493eb0e1cc57cfe77910.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_75ff34f0c9df4894b372ffde7445ac3c = L.marker(
                [-16.431538, 145.392744],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_aa4f37e0fb6942a580e5030f1ee4e592 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75ff34f0c9df4894b372ffde7445ac3c.setIcon(icon_aa4f37e0fb6942a580e5030f1ee4e592);


            marker_75ff34f0c9df4894b372ffde7445ac3c.bindTooltip(
                `<div>
                     Port Douglas District Combined Clubs Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_fa01000a0e5e461397b6b0209162ff6e = L.marker(
                [-36.748562, 142.551592],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d5be65904aac4308a531098add6fff0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fa01000a0e5e461397b6b0209162ff6e.setIcon(icon_d5be65904aac4308a531098add6fff0c);


            marker_fa01000a0e5e461397b6b0209162ff6e.bindTooltip(
                `<div>
                     Lubeck Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_94d7bf0a86ab4c62ae0ad6f253609ad7 = L.marker(
                [-36.627742, 142.635804],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_418063205d474196a8c606cb04f46099 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_94d7bf0a86ab4c62ae0ad6f253609ad7.setIcon(icon_418063205d474196a8c606cb04f46099);


            marker_94d7bf0a86ab4c62ae0ad6f253609ad7.bindTooltip(
                `<div>
                     Rupanyup Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_5b0de97053504b598089d0ce98c24993 = L.marker(
                [-36.625959, 142.629512],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e1eaedfc89da49d5813bffc4866eb5a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b0de97053504b598089d0ce98c24993.setIcon(icon_e1eaedfc89da49d5813bffc4866eb5a8);


            marker_5b0de97053504b598089d0ce98c24993.bindTooltip(
                `<div>
                     Rupanyup Memorial Park
                 </div>`,
                {"sticky": true}
            );


            var marker_444826038dbc46f9b8f075ee41209b0a = L.marker(
                [-36.619284, 142.46556999999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_75d7085b9a164c3bbad595b32c4a4e2f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_444826038dbc46f9b8f075ee41209b0a.setIcon(icon_75d7085b9a164c3bbad595b32c4a4e2f);


            marker_444826038dbc46f9b8f075ee41209b0a.bindTooltip(
                `<div>
                     Lake Marma Park- Lions
                 </div>`,
                {"sticky": true}
            );


            var marker_fe8a198bc40047b29dc0b63672eed049 = L.marker(
                [-36.616572, 142.46598999999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e3d2030996f346d7b74380f4d33e893e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fe8a198bc40047b29dc0b63672eed049.setIcon(icon_e3d2030996f346d7b74380f4d33e893e);


            marker_fe8a198bc40047b29dc0b63672eed049.bindTooltip(
                `<div>
                     Rabl Park
                 </div>`,
                {"sticky": true}
            );


            var marker_24ddbea386c2427cbaf01d0bcb571afd = L.marker(
                [-36.61701, 142.46572700000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_e41d34059b1c411da8400ff8d8984ce9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24ddbea386c2427cbaf01d0bcb571afd.setIcon(icon_e41d34059b1c411da8400ff8d8984ce9);


            marker_24ddbea386c2427cbaf01d0bcb571afd.bindTooltip(
                `<div>
                     Murtoa Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_902d6d514365411b83fda2b65703a3d5 = L.marker(
                [-36.460516, 142.585597],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_108b31d8d4914e0bb283333f021b0279 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_902d6d514365411b83fda2b65703a3d5.setIcon(icon_108b31d8d4914e0bb283333f021b0279);


            marker_902d6d514365411b83fda2b65703a3d5.bindTooltip(
                `<div>
                     Lions Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b7957b414f7e4acfa613c67721a7a91c = L.marker(
                [-36.456165000000006, 142.586365],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_57e9516be68c4faaaf3ca2a53e80dc8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b7957b414f7e4acfa613c67721a7a91c.setIcon(icon_57e9516be68c4faaaf3ca2a53e80dc8b);


            marker_b7957b414f7e4acfa613c67721a7a91c.bindTooltip(
                `<div>
                     Minyip Wetlands
                 </div>`,
                {"sticky": true}
            );


            var marker_f6cc68eff2ed439392396836ec8c02ad = L.marker(
                [-36.241264, 142.390299],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_266ac1004031445eac8bbd007f39d512 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f6cc68eff2ed439392396836ec8c02ad.setIcon(icon_266ac1004031445eac8bbd007f39d512);


            marker_f6cc68eff2ed439392396836ec8c02ad.bindTooltip(
                `<div>
                     Warrackanbeal Boat Ramp
                 </div>`,
                {"sticky": true}
            );


            var marker_3997a97a3feb4f758a98aba77fc8b87a = L.marker(
                [-36.252656, 142.392893],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_828c027f2a3f4f2fb3f99d6c7d17fccd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3997a97a3feb4f758a98aba77fc8b87a.setIcon(icon_828c027f2a3f4f2fb3f99d6c7d17fccd);


            marker_3997a97a3feb4f758a98aba77fc8b87a.bindTooltip(
                `<div>
                     Warracknabeal Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_00fba3fa4f144bdf8c847570e6f8af21 = L.marker(
                [-36.246795, 142.39338500000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_adadd11bd44f42c7a95087ce2d6c9e48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00fba3fa4f144bdf8c847570e6f8af21.setIcon(icon_adadd11bd44f42c7a95087ce2d6c9e48);


            marker_00fba3fa4f144bdf8c847570e6f8af21.bindTooltip(
                `<div>
                     Lions Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2e467d4fd095421189b0cde42678c425 = L.marker(
                [-35.731823999999996, 142.3634],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02199b42b3384b07a1d2cd7f44b01c2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e467d4fd095421189b0cde42678c425.setIcon(icon_02199b42b3384b07a1d2cd7f44b01c2c);


            marker_2e467d4fd095421189b0cde42678c425.bindTooltip(
                `<div>
                     Hopetoun Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_7b269b658cc247c4adf0d8d4170aa447 = L.marker(
                [-35.731014, 142.365016],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a02ae44b787a4ccab45605f821a4c77f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7b269b658cc247c4adf0d8d4170aa447.setIcon(icon_a02ae44b787a4ccab45605f821a4c77f);


            marker_7b269b658cc247c4adf0d8d4170aa447.bindTooltip(
                `<div>
                     Hopetoun Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_f861765ecb43473da9b5c4df16cbf179 = L.marker(
                [-35.727123, 142.36688999999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9d5678fd533d4718ac89da460b1b3784 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f861765ecb43473da9b5c4df16cbf179.setIcon(icon_9d5678fd533d4718ac89da460b1b3784);


            marker_f861765ecb43473da9b5c4df16cbf179.bindTooltip(
                `<div>
                     L. & J. Poulton Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5632a351b47b46bb8382b6afcd769987 = L.marker(
                [-35.72579, 142.366466],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4c5c01d0cd934fc893d2bb5f7c3107e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5632a351b47b46bb8382b6afcd769987.setIcon(icon_4c5c01d0cd934fc893d2bb5f7c3107e6);


            marker_5632a351b47b46bb8382b6afcd769987.bindTooltip(
                `<div>
                     Hopetoun Caravan Park &Tennis Court Play Ground
                 </div>`,
                {"sticky": true}
            );


            var marker_794c16aee934430f98b0b21b27d4f584 = L.marker(
                [-35.608129, 142.579819],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_53e4edcffcbf4ba0b739ab9ea152b8cd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_794c16aee934430f98b0b21b27d4f584.setIcon(icon_53e4edcffcbf4ba0b739ab9ea152b8cd);


            marker_794c16aee934430f98b0b21b27d4f584.bindTooltip(
                `<div>
                     Lascelles Caravan Park
                 </div>`,
                {"sticky": true}
            );


            var marker_897ec67b78bf47f2aed1d8a564d3d5cf = L.marker(
                [-35.381834999999995, 142.19169],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f9a73bd49183497e9d235f706a7fe67b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_897ec67b78bf47f2aed1d8a564d3d5cf.setIcon(icon_f9a73bd49183497e9d235f706a7fe67b);


            marker_897ec67b78bf47f2aed1d8a564d3d5cf.bindTooltip(
                `<div>
                     Patchewollock Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_71565403c9524ef3ad0e09a6827b0546 = L.marker(
                [-36.258316, 142.395406],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7529fed94fff462c823ea84918b1bbd5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71565403c9524ef3ad0e09a6827b0546.setIcon(icon_7529fed94fff462c823ea84918b1bbd5);


            marker_71565403c9524ef3ad0e09a6827b0546.bindTooltip(
                `<div>
                     Anzac Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7cce22f92d2c4331947606ed3f5fe236 = L.marker(
                [-35.941872, 142.417025],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3be5810dbd4642018fcd960dafb76de9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7cce22f92d2c4331947606ed3f5fe236.setIcon(icon_3be5810dbd4642018fcd960dafb76de9);


            marker_7cce22f92d2c4331947606ed3f5fe236.bindTooltip(
                `<div>
                     Beulah Lake Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5c17fee2ca3040ae9503ad1894a0db48 = L.marker(
                [-35.940058, 142.421213],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_36d703e1b6634de392b42261312b3f08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5c17fee2ca3040ae9503ad1894a0db48.setIcon(icon_36d703e1b6634de392b42261312b3f08);


            marker_5c17fee2ca3040ae9503ad1894a0db48.bindTooltip(
                `<div>
                     Beulah Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_dc114d25471746c696dffa0a0dad385f = L.marker(
                [-36.072959999999995, 142.416055],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7551fab48f72490dadf34232736e3c5b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc114d25471746c696dffa0a0dad385f.setIcon(icon_7551fab48f72490dadf34232736e3c5b);


            marker_dc114d25471746c696dffa0a0dad385f.bindTooltip(
                `<div>
                     Brim Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_764928a56bf34bdfa5e750f9312cd742 = L.marker(
                [-35.767389, 142.049419],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a26c72702f424525b905fc76d327545c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_764928a56bf34bdfa5e750f9312cd742.setIcon(icon_a26c72702f424525b905fc76d327545c);


            marker_764928a56bf34bdfa5e750f9312cd742.bindTooltip(
                `<div>
                     Yaapeet Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_5b3423b538084679915960e0be572214 = L.marker(
                [-35.681126, 142.662818],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_5f31cdd7e1f8474b9f221ff01e3ea419 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b3423b538084679915960e0be572214.setIcon(icon_5f31cdd7e1f8474b9f221ff01e3ea419);


            marker_5b3423b538084679915960e0be572214.bindTooltip(
                `<div>
                     High way Park Woomelang
                 </div>`,
                {"sticky": true}
            );


            var marker_e8deb41e3b5040e9a02a29d2eb429ca4 = L.marker(
                [-35.684446, 142.66751499999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a9e013f57ce246d784fd4f27e6e34b79 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e8deb41e3b5040e9a02a29d2eb429ca4.setIcon(icon_a9e013f57ce246d784fd4f27e6e34b79);


            marker_e8deb41e3b5040e9a02a29d2eb429ca4.bindTooltip(
                `<div>
                     Woomelang Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_0e8f44fdaf404f94b9fb58764621f551 = L.marker(
                [-27.586159999999996, 153.026354],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7a0a0b41ce4149fe9497ab0ca4992fed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e8f44fdaf404f94b9fb58764621f551.setIcon(icon_7a0a0b41ce4149fe9497ab0ca4992fed);


            marker_0e8f44fdaf404f94b9fb58764621f551.bindTooltip(
                `<div>
                     Acacia Ridge Leisure Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_8f57ae993eb24049880e7a61c1713a04 = L.marker(
                [-27.565465999999997, 152.891082],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7e13e341750d4bc496848a90609e0aa6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f57ae993eb24049880e7a61c1713a04.setIcon(icon_7e13e341750d4bc496848a90609e0aa6);


            marker_8f57ae993eb24049880e7a61c1713a04.bindTooltip(
                `<div>
                     Bellbowrie Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_bdf8617370e3403595ece68663f56547 = L.marker(
                [-27.607439000000003, 152.931511],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d3d64fddd8904ece8b45c97269fe0cbf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bdf8617370e3403595ece68663f56547.setIcon(icon_d3d64fddd8904ece8b45c97269fe0cbf);


            marker_bdf8617370e3403595ece68663f56547.bindTooltip(
                `<div>
                     Carole Park Swim Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_02f1a38163044979afd52eda95451d8f = L.marker(
                [-27.455369, 153.02506699999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_54d419fe5a854c09b84800c522e94f41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_02f1a38163044979afd52eda95451d8f.setIcon(icon_54d419fe5a854c09b84800c522e94f41);


            marker_02f1a38163044979afd52eda95451d8f.bindTooltip(
                `<div>
                     Centenary Pool (Spring Hill)
                 </div>`,
                {"sticky": true}
            );


            var marker_f0f0c188a2d64e4a9f87f2538e75c2c0 = L.marker(
                [-27.385828999999998, 153.035109],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ff834e099d314a1d9d60cf62e783fc76 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f0f0c188a2d64e4a9f87f2538e75c2c0.setIcon(icon_ff834e099d314a1d9d60cf62e783fc76);


            marker_f0f0c188a2d64e4a9f87f2538e75c2c0.bindTooltip(
                `<div>
                     Chermside Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_7643131c88ce495395bc0c22d366579d = L.marker(
                [-27.45516, 153.07886100000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_887e282acbd842808a34ff0472ee6ef3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7643131c88ce495395bc0c22d366579d.setIcon(icon_887e282acbd842808a34ff0472ee6ef3);


            marker_7643131c88ce495395bc0c22d366579d.bindTooltip(
                `<div>
                     Colmslie Pool (Morningside)
                 </div>`,
                {"sticky": true}
            );


            var marker_de35b5e30ed74680b1a39510d6cbc9ac = L.marker(
                [-27.546519, 152.980628],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bcbbcd7f425b4b28a1a255dbd5804d46 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de35b5e30ed74680b1a39510d6cbc9ac.setIcon(icon_bcbbcd7f425b4b28a1a255dbd5804d46);


            marker_de35b5e30ed74680b1a39510d6cbc9ac.bindTooltip(
                `<div>
                     Dunlop Park Memorial Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_17907af48b0740fba7c880ab2ff2a20f = L.marker(
                [-27.331986999999998, 153.042374],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_d275f360ff644b3db74940c15cf314de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_17907af48b0740fba7c880ab2ff2a20f.setIcon(icon_d275f360ff644b3db74940c15cf314de);


            marker_17907af48b0740fba7c880ab2ff2a20f.bindTooltip(
                `<div>
                     The Emily Seebohm Aquatic Centre - Fitzgibbon
                 </div>`,
                {"sticky": true}
            );


            var marker_d6353e0cf2f14c43bbd53ed344a67c97 = L.marker(
                [-27.551826000000002, 153.07353999999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fa1c811b669945849abca55cc06b38c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d6353e0cf2f14c43bbd53ed344a67c97.setIcon(icon_fa1c811b669945849abca55cc06b38c5);


            marker_d6353e0cf2f14c43bbd53ed344a67c97.bindTooltip(
                `<div>
                     Hibiscus Sports Complex (Upper Mt Gravatt)
                 </div>`,
                {"sticky": true}
            );


            var marker_f4e92bbbc18e4720a5a688ece4d55bdc = L.marker(
                [-27.462262, 153.010347],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_45c5547f9ab9442691a71e3a8df3f25b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f4e92bbbc18e4720a5a688ece4d55bdc.setIcon(icon_45c5547f9ab9442691a71e3a8df3f25b);


            marker_f4e92bbbc18e4720a5a688ece4d55bdc.bindTooltip(
                `<div>
                     Ithaca Pool (Paddington)
                 </div>`,
                {"sticky": true}
            );


            var marker_4537cc1316b64cb38d65aaf01d6108e5 = L.marker(
                [-27.532363, 152.942691],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8fea7c371f0a4dc0a0cf0ac14be3651a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4537cc1316b64cb38d65aaf01d6108e5.setIcon(icon_8fea7c371f0a4dc0a0cf0ac14be3651a);


            marker_4537cc1316b64cb38d65aaf01d6108e5.bindTooltip(
                `<div>
                     Jindalee Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_febc7674876040398ab907df4e7b67b3 = L.marker(
                [-27.497689, 153.04867],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3245353f94264f4b8cba4ce9fd483daf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_febc7674876040398ab907df4e7b67b3.setIcon(icon_3245353f94264f4b8cba4ce9fd483daf);


            marker_febc7674876040398ab907df4e7b67b3.bindTooltip(
                `<div>
                     Langlands Park Memorial Pool (Stones Corner)
                 </div>`,
                {"sticky": true}
            );


            var marker_6c4eab9847b642afa40a60504d640ff5 = L.marker(
                [-27.452284999999996, 153.18743700000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1a3dbfd018e447d29ccf8a007ea26279 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c4eab9847b642afa40a60504d640ff5.setIcon(icon_1a3dbfd018e447d29ccf8a007ea26279);


            marker_6c4eab9847b642afa40a60504d640ff5.bindTooltip(
                `<div>
                     Manly Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_54195f51e48c4c7bba8872eced9da9dd = L.marker(
                [-27.532134999999997, 153.094289],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02916a66aa5e42caa3ec638549b45cf7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54195f51e48c4c7bba8872eced9da9dd.setIcon(icon_02916a66aa5e42caa3ec638549b45cf7);


            marker_54195f51e48c4c7bba8872eced9da9dd.bindTooltip(
                `<div>
                     Mt Gravatt East Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_e6babb9f52744f79baab9d945a0163a1 = L.marker(
                [-27.479777000000002, 153.016806],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_22d30e7da6fd41beabef046a4b93d6a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e6babb9f52744f79baab9d945a0163a1.setIcon(icon_22d30e7da6fd41beabef046a4b93d6a0);


            marker_e6babb9f52744f79baab9d945a0163a1.bindTooltip(
                `<div>
                     Musgrave Park Swimming  Centre(South Brisbane)
                 </div>`,
                {"sticky": true}
            );


            var marker_e958830ac97041fda41f716ac389244e = L.marker(
                [-27.429679999999998, 153.006206],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_888b76f4d8f042efa34a4ecb83523b35 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e958830ac97041fda41f716ac389244e.setIcon(icon_888b76f4d8f042efa34a4ecb83523b35);


            marker_e958830ac97041fda41f716ac389244e.bindTooltip(
                `<div>
                     Newmarket Olympic Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_a20a1b3e80af4af184cbe91b020e3638 = L.marker(
                [-27.639954, 153.038668],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a28f239e627e4ae2b5e8c43bbd02b90a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a20a1b3e80af4af184cbe91b020e3638.setIcon(icon_a28f239e627e4ae2b5e8c43bbd02b90a);


            marker_a20a1b3e80af4af184cbe91b020e3638.bindTooltip(
                `<div>
                     Parkinson Aquatic Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_800ed0832f234907a14b3a6081fc95d9 = L.marker(
                [-27.591561, 153.076415],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_cf4c9fa4c532449a97afdfb0b1a4ce7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_800ed0832f234907a14b3a6081fc95d9.setIcon(icon_cf4c9fa4c532449a97afdfb0b1a4ce7d);


            marker_800ed0832f234907a14b3a6081fc95d9.bindTooltip(
                `<div>
                     Runcorn Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_f6c2dcd2d2c0405f8d0a21ec8dcd42ba = L.marker(
                [-27.311956, 153.069098],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0c2d56f85240452e8d9c713d48e786fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f6c2dcd2d2c0405f8d0a21ec8dcd42ba.setIcon(icon_0c2d56f85240452e8d9c713d48e786fd);


            marker_f6c2dcd2d2c0405f8d0a21ec8dcd42ba.bindTooltip(
                `<div>
                     Sandgate Aquatic Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_3c8346f0d53742ca9347a92e09c1ef84 = L.marker(
                [-27.459596, 153.021548],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_02707662288c476fb9953b3f1d1e011e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c8346f0d53742ca9347a92e09c1ef84.setIcon(icon_02707662288c476fb9953b3f1d1e011e);


            marker_3c8346f0d53742ca9347a92e09c1ef84.bindTooltip(
                `<div>
                     Spring Hill Baths (Inner City)
                 </div>`,
                {"sticky": true}
            );


            var marker_8b318f9e050543208a1cebc271c3efb7 = L.marker(
                [-27.4539, 153.0368],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1e9c40967bfd46f6b08b8901884d4fca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8b318f9e050543208a1cebc271c3efb7.setIcon(icon_1e9c40967bfd46f6b08b8901884d4fca);


            marker_8b318f9e050543208a1cebc271c3efb7.bindTooltip(
                `<div>
                     Valley Pool (Fortitude Valley)
                 </div>`,
                {"sticky": true}
            );


            var marker_27ed0f59f65b4592b82c8c202e881469 = L.marker(
                [-27.520527, 153.018544],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c7c1f8e03ede4172aef3ac34650a4dd4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27ed0f59f65b4592b82c8c202e881469.setIcon(icon_c7c1f8e03ede4172aef3ac34650a4dd4);


            marker_27ed0f59f65b4592b82c8c202e881469.bindTooltip(
                `<div>
                     Yeronga Park Memorial Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_036925c7064e477fb80ed2c3ec0b6c96 = L.marker(
                [-37.78685, 143.613069],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c17b627fecd3412993a3a6154a21e30b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_036925c7064e477fb80ed2c3ec0b6c96.setIcon(icon_c17b627fecd3412993a3a6154a21e30b);


            marker_036925c7064e477fb80ed2c3ec0b6c96.bindTooltip(
                `<div>
                     Cape Clear & District Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_58923c3e5bc94a61a2a731c82730d3bd = L.marker(
                [-37.58807, 143.714742],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bec609fd9c5e472e89f6359966219407 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_58923c3e5bc94a61a2a731c82730d3bd.setIcon(icon_bec609fd9c5e472e89f6359966219407);


            marker_58923c3e5bc94a61a2a731c82730d3bd.bindTooltip(
                `<div>
                     Haddon Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_1a0f3e4567d64e0495cf31e46baa1dd7 = L.marker(
                [-37.58812, 143.72221299999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a03a2a5cba2b4e1b922206e45e739fbf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a0f3e4567d64e0495cf31e46baa1dd7.setIcon(icon_a03a2a5cba2b4e1b922206e45e739fbf);


            marker_1a0f3e4567d64e0495cf31e46baa1dd7.bindTooltip(
                `<div>
                     Haddon Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_5c95f5e5883b4aa6980a8be313db7feb = L.marker(
                [-37.632090999999996, 143.758713],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_59fcaa6a344f45daa3fedb278d289094 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5c95f5e5883b4aa6980a8be313db7feb.setIcon(icon_59fcaa6a344f45daa3fedb278d289094);


            marker_5c95f5e5883b4aa6980a8be313db7feb.bindTooltip(
                `<div>
                     Ross Creek Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_1b2423bc45af4172baf7b3cd146f5fe3 = L.marker(
                [-37.724602000000004, 143.80101399999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6a472dedb2a641b0a33a99145ebe043d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1b2423bc45af4172baf7b3cd146f5fe3.setIcon(icon_6a472dedb2a641b0a33a99145ebe043d);


            marker_1b2423bc45af4172baf7b3cd146f5fe3.bindTooltip(
                `<div>
                     Enfield Harrison Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_7a6c4e4739f04d828fb09c3bc7e7278b = L.marker(
                [-37.680147, 143.82521599999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_27ffcd294702468bb7fc80d9b43f8a8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7a6c4e4739f04d828fb09c3bc7e7278b.setIcon(icon_27ffcd294702468bb7fc80d9b43f8a8e);


            marker_7a6c4e4739f04d828fb09c3bc7e7278b.bindTooltip(
                `<div>
                     Napoleons Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_0f8d2a611b8c45199ebc97b641a0602d = L.marker(
                [-37.717755, 143.880762],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_46c43b3c305f445b9e34552f31790259 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0f8d2a611b8c45199ebc97b641a0602d.setIcon(icon_46c43b3c305f445b9e34552f31790259);


            marker_0f8d2a611b8c45199ebc97b641a0602d.bindTooltip(
                `<div>
                     Garibaldi Public Hall Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_53d5f303ab3f4b8093db5cce9a71de10 = L.marker(
                [-37.769056, 143.884521],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_840eddf2484546de960dfcfcef953de2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53d5f303ab3f4b8093db5cce9a71de10.setIcon(icon_840eddf2484546de960dfcfcef953de2);


            marker_53d5f303ab3f4b8093db5cce9a71de10.bindTooltip(
                `<div>
                     Grenville Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_c8b2108e05094bfe9abd1a8492ac7ef7 = L.marker(
                [-37.638477, 143.68646],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c120553d147347d0bf9c01327648d42f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c8b2108e05094bfe9abd1a8492ac7ef7.setIcon(icon_c120553d147347d0bf9c01327648d42f);


            marker_c8b2108e05094bfe9abd1a8492ac7ef7.bindTooltip(
                `<div>
                     Smythesdale Gardens Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_8166e0ae7aca4c68be2e68d2f4705dad = L.marker(
                [-37.64181, 143.683965],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f7c4f9a7ecfb45769a2ac336624f898d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8166e0ae7aca4c68be2e68d2f4705dad.setIcon(icon_f7c4f9a7ecfb45769a2ac336624f898d);


            marker_8166e0ae7aca4c68be2e68d2f4705dad.bindTooltip(
                `<div>
                     Woady Yaloak Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_21eb7e66ab53441a975d3c40a57ec76f = L.marker(
                [-37.672406, 143.655099],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_85bde9a8ece54df49fa11c22e8cfef53 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_21eb7e66ab53441a975d3c40a57ec76f.setIcon(icon_85bde9a8ece54df49fa11c22e8cfef53);


            marker_21eb7e66ab53441a975d3c40a57ec76f.bindTooltip(
                `<div>
                     Scarsdale Community Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_f8e61427f801408fa7dd27a1f6c464b6 = L.marker(
                [-37.68347, 143.56812],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3f53a03a4ba840cab79c0ea97cb735a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f8e61427f801408fa7dd27a1f6c464b6.setIcon(icon_3f53a03a4ba840cab79c0ea97cb735a5);


            marker_f8e61427f801408fa7dd27a1f6c464b6.bindTooltip(
                `<div>
                     Linton Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_7c9a99f4e07649098bb27c44535dbf28 = L.marker(
                [-37.774046999999996, 143.697024],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_606126d86fbd4452ba0733b93c3ff134 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7c9a99f4e07649098bb27c44535dbf28.setIcon(icon_606126d86fbd4452ba0733b93c3ff134);


            marker_7c9a99f4e07649098bb27c44535dbf28.bindTooltip(
                `<div>
                     Berringa Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_cdfc7e368e6e44019692916dca53aba4 = L.marker(
                [-38.055146, 144.175162],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_369f710fde974fb7b431b51069ca7beb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cdfc7e368e6e44019692916dca53aba4.setIcon(icon_369f710fde974fb7b431b51069ca7beb);


            marker_cdfc7e368e6e44019692916dca53aba4.bindTooltip(
                `<div>
                     Bannockburn Glenmore Estate Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c92742ad91e845068f25cfdaf655ce42 = L.marker(
                [-38.045446999999996, 144.171519],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9da360b61083410abee89efa070174d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c92742ad91e845068f25cfdaf655ce42.setIcon(icon_9da360b61083410abee89efa070174d8);


            marker_c92742ad91e845068f25cfdaf655ce42.bindTooltip(
                `<div>
                     Bannockburn Shire Hall Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_75fe25647b0d48ae90449b037d754a74 = L.marker(
                [-38.036428, 144.164469],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c4c1d87cab204d328bcbefa21a3de1fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75fe25647b0d48ae90449b037d754a74.setIcon(icon_c4c1d87cab204d328bcbefa21a3de1fe);


            marker_75fe25647b0d48ae90449b037d754a74.bindTooltip(
                `<div>
                     Bannockburn Recreation Precinct
                 </div>`,
                {"sticky": true}
            );


            var marker_f9798326d6f74a9786c5d925099c8b25 = L.marker(
                [-38.047903999999996, 144.17525],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_43ec1b906eac4eb3a34d43240732c4e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9798326d6f74a9786c5d925099c8b25.setIcon(icon_43ec1b906eac4eb3a34d43240732c4e1);


            marker_f9798326d6f74a9786c5d925099c8b25.bindTooltip(
                `<div>
                     Bannockburn Victoria Park Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b0fb9832df2448e28d0038d8cd6b5a4c = L.marker(
                [-38.045111, 144.17516],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_08a1a1f73e824bf3882b659a23238e63 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b0fb9832df2448e28d0038d8cd6b5a4c.setIcon(icon_08a1a1f73e824bf3882b659a23238e63);


            marker_b0fb9832df2448e28d0038d8cd6b5a4c.bindTooltip(
                `<div>
                     Bannockburn Lions Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5eefa209d36c40b5b2ff27d0e4fcdab0 = L.marker(
                [-37.966592, 144.134531],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_f5c99e11a85d48bbac74985b71e9ccaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5eefa209d36c40b5b2ff27d0e4fcdab0.setIcon(icon_f5c99e11a85d48bbac74985b71e9ccaa);


            marker_5eefa209d36c40b5b2ff27d0e4fcdab0.bindTooltip(
                `<div>
                     Lethbridge Russell Street Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_644b1c92df6e4e46af2cf39c97668327 = L.marker(
                [-37.819505, 143.752532],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c1fd14a2a7a2456c8d0a9bf04d5c9a64 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_644b1c92df6e4e46af2cf39c97668327.setIcon(icon_c1fd14a2a7a2456c8d0a9bf04d5c9a64);


            marker_644b1c92df6e4e46af2cf39c97668327.bindTooltip(
                `<div>
                     Dereel Hall & Recreation Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_c1f15e0512bc42e2953a03a128184946 = L.marker(
                [-37.902426, 143.717106],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_eb4f145277f94139bbee91716bc560d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c1f15e0512bc42e2953a03a128184946.setIcon(icon_eb4f145277f94139bbee91716bc560d5);


            marker_c1f15e0512bc42e2953a03a128184946.bindTooltip(
                `<div>
                     Rokewood Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_fafcdc2db7404e60b1ff8e5558dac3ed = L.marker(
                [-37.873185, 143.740973],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_42a3a5fde22943e38d41356693145688 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fafcdc2db7404e60b1ff8e5558dac3ed.setIcon(icon_42a3a5fde22943e38d41356693145688);


            marker_fafcdc2db7404e60b1ff8e5558dac3ed.bindTooltip(
                `<div>
                     Corindhap Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_e6ebfde3c099449da1b66588dba4a504 = L.marker(
                [-38.012552, 143.976935],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8bb29e2c86274d579f1d30844637fef0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e6ebfde3c099449da1b66588dba4a504.setIcon(icon_8bb29e2c86274d579f1d30844637fef0);


            marker_e6ebfde3c099449da1b66588dba4a504.bindTooltip(
                `<div>
                     Shelford Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_51a8ec4b86754d43a856e324727de3d8 = L.marker(
                [-38.023002000000005, 144.042493],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4449f77d321b416a8a373976967ce802 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_51a8ec4b86754d43a856e324727de3d8.setIcon(icon_4449f77d321b416a8a373976967ce802);


            marker_51a8ec4b86754d43a856e324727de3d8.bindTooltip(
                `<div>
                     Teesdale Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_1bb08bb0e6c043348fa6c4011fe3d4c7 = L.marker(
                [-38.026779, 144.04949399999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_9a6b1d9342ab45e58f77efc65cc6eba9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1bb08bb0e6c043348fa6c4011fe3d4c7.setIcon(icon_9a6b1d9342ab45e58f77efc65cc6eba9);


            marker_1bb08bb0e6c043348fa6c4011fe3d4c7.bindTooltip(
                `<div>
                     Teesdale Turtle Bend Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b1d2d0a4f1824067b6abe38ec4450e28 = L.marker(
                [-38.026779, 144.04949399999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_aceb728e2d9d4e18b20e2019e8712ae6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b1d2d0a4f1824067b6abe38ec4450e28.setIcon(icon_aceb728e2d9d4e18b20e2019e8712ae6);


            marker_b1d2d0a4f1824067b6abe38ec4450e28.bindTooltip(
                `<div>
                     Teesdale Turtle Bend Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9b6a601659c64002a359cb422bf7fe3f = L.marker(
                [-38.100783, 144.053754],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_fa2c95b68e4e4e4696a0e572a836d6ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9b6a601659c64002a359cb422bf7fe3f.setIcon(icon_fa2c95b68e4e4e4696a0e572a836d6ab);


            marker_9b6a601659c64002a359cb422bf7fe3f.bindTooltip(
                `<div>
                     Inverleigh Tennis Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_774ae929b0db4c52a5728ea6f367c228 = L.marker(
                [-38.103387, 144.048977],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_51b2e3327c6343da916f06314aa8a53f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_774ae929b0db4c52a5728ea6f367c228.setIcon(icon_51b2e3327c6343da916f06314aa8a53f);


            marker_774ae929b0db4c52a5728ea6f367c228.bindTooltip(
                `<div>
                     Inverleigh Sporting Complex
                 </div>`,
                {"sticky": true}
            );


            var marker_7de6c0fb51f14af3b070286ab938331d = L.marker(
                [-38.099467, 144.061449],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_beb417d148f44f0b912cb3d8c2412489 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7de6c0fb51f14af3b070286ab938331d.setIcon(icon_beb417d148f44f0b912cb3d8c2412489);


            marker_7de6c0fb51f14af3b070286ab938331d.bindTooltip(
                `<div>
                     Inverleigh Lawson Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_f35b94b1804e4846a3b80b19c21871e5 = L.marker(
                [-38.105568, 144.141966],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_995f207fc7514f59a267acc017bf7ea5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f35b94b1804e4846a3b80b19c21871e5.setIcon(icon_995f207fc7514f59a267acc017bf7ea5);


            marker_f35b94b1804e4846a3b80b19c21871e5.bindTooltip(
                `<div>
                     Murgheboluc Recreation & Public Hall Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_5b1912e680c344c48e5e71bad837a5ec = L.marker(
                [-37.847221000000005, 144.072728],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c157a63b44ea4444adec03698710443d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b1912e680c344c48e5e71bad837a5ec.setIcon(icon_c157a63b44ea4444adec03698710443d);


            marker_5b1912e680c344c48e5e71bad837a5ec.bindTooltip(
                `<div>
                     Meredith Pioneer Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_68ee3417d32e4febb489d7db78f92748 = L.marker(
                [-37.950019, 144.16823200000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b3d387c75c2142bc9be187409ccea1d0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_68ee3417d32e4febb489d7db78f92748.setIcon(icon_b3d387c75c2142bc9be187409ccea1d0);


            marker_68ee3417d32e4febb489d7db78f92748.bindTooltip(
                `<div>
                     Maude Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_449ce4e9ba7d4138972389309ab4c5f9 = L.marker(
                [-37.949409, 144.169117],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4c82c44601a841db8904771dcd6c0a08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_449ce4e9ba7d4138972389309ab4c5f9.setIcon(icon_4c82c44601a841db8904771dcd6c0a08);


            marker_449ce4e9ba7d4138972389309ab4c5f9.bindTooltip(
                `<div>
                     Maude Tennis Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_3f41262e1c8b4fd392b85ae5348dfecc = L.marker(
                [-38.01553, 144.227951],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1baed3ea56f14c10be50352e79a6b784 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f41262e1c8b4fd392b85ae5348dfecc.setIcon(icon_1baed3ea56f14c10be50352e79a6b784);


            marker_3f41262e1c8b4fd392b85ae5348dfecc.bindTooltip(
                `<div>
                     Sutherlands Creek Tennis Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_11ab0ac6136c4b108198e331cd88d176 = L.marker(
                [-37.73994975, 142.022546],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bcc5b0913ba54c0597f778c6a25affaf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_11ab0ac6136c4b108198e331cd88d176.setIcon(icon_bcc5b0913ba54c0597f778c6a25affaf);


            marker_11ab0ac6136c4b108198e331cd88d176.bindTooltip(
                `<div>
                     melville oval playground
                 </div>`,
                {"sticky": true}
            );


            var marker_56c3a8a25d774518aa2c412a27189f82 = L.marker(
                [-37.7475818, 142.0240087],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_1c38ae2540c444ba9d266562ccab334e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_56c3a8a25d774518aa2c412a27189f82.setIcon(icon_1c38ae2540c444ba9d266562ccab334e);


            marker_56c3a8a25d774518aa2c412a27189f82.bindTooltip(
                `<div>
                     botanic gardens playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4a2cfa6d0577472abdb07eafc8b94b7b = L.marker(
                [-37.75385163, 142.0319314],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ea1be1fa85494e25bc8347013d5188cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a2cfa6d0577472abdb07eafc8b94b7b.setIcon(icon_ea1be1fa85494e25bc8347013d5188cf);


            marker_4a2cfa6d0577472abdb07eafc8b94b7b.bindTooltip(
                `<div>
                     mitchell park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_eab8aa442b2e4331be59fc24d00c1da2 = L.marker(
                [-37.74775833, 142.03753590000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_909247eb526e44a7997ae050771179e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eab8aa442b2e4331be59fc24d00c1da2.setIcon(icon_909247eb526e44a7997ae050771179e3);


            marker_eab8aa442b2e4331be59fc24d00c1da2.bindTooltip(
                `<div>
                     white ave playground
                 </div>`,
                {"sticky": true}
            );


            var marker_686bbdbe4c954e159120e50f8f27f080 = L.marker(
                [-37.74130653, 142.0355533],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_496d7e66b31346a385581f81face6ea5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_686bbdbe4c954e159120e50f8f27f080.setIcon(icon_496d7e66b31346a385581f81face6ea5);


            marker_686bbdbe4c954e159120e50f8f27f080.bindTooltip(
                `<div>
                     skate park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0702864e39594966b4e738d1235ddaaa = L.marker(
                [-37.74125159, 142.0442005],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_abc6ae7dd6e947d1aaf79d2bee61d774 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0702864e39594966b4e738d1235ddaaa.setIcon(icon_abc6ae7dd6e947d1aaf79d2bee61d774);


            marker_0702864e39594966b4e738d1235ddaaa.bindTooltip(
                `<div>
                     kokoda ave playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9078f852109643b0b7a80ea99b171c9e = L.marker(
                [-37.73378715, 142.0384396],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a57052fe8365425faed4babeb64b3422 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9078f852109643b0b7a80ea99b171c9e.setIcon(icon_a57052fe8365425faed4babeb64b3422);


            marker_9078f852109643b0b7a80ea99b171c9e.bindTooltip(
                `<div>
                     brumley park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ffd9cbe386c242f7bc850d6c63d570c3 = L.marker(
                [-37.737826399999996, 142.0428349],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3cc9204c479b4984bd8ab95bd01edba2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ffd9cbe386c242f7bc850d6c63d570c3.setIcon(icon_3cc9204c479b4984bd8ab95bd01edba2);


            marker_ffd9cbe386c242f7bc850d6c63d570c3.bindTooltip(
                `<div>
                     rasmussen ave playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9b8006cbd65548d8b04fa851d5ac9c19 = L.marker(
                [-37.73769051, 142.02940759999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8bcf03fad1064eea8395f5f5d9e0f85d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9b8006cbd65548d8b04fa851d5ac9c19.setIcon(icon_8bcf03fad1064eea8395f5f5d9e0f85d);


            marker_9b8006cbd65548d8b04fa851d5ac9c19.bindTooltip(
                `<div>
                     bree park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_666236d19c344939ad7d43a10d8f485d = L.marker(
                [-37.73252665, 142.0258987],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_a5029e2547464c0fb8049015a6488460 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_666236d19c344939ad7d43a10d8f485d.setIcon(icon_a5029e2547464c0fb8049015a6488460);


            marker_666236d19c344939ad7d43a10d8f485d.bindTooltip(
                `<div>
                     patterson park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e100fd37ff134285ada750065f60ca69 = L.marker(
                [-37.7255357, 142.02887009999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_804bcebb42504f45b133d295cfaadf3c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e100fd37ff134285ada750065f60ca69.setIcon(icon_804bcebb42504f45b133d295cfaadf3c);


            marker_e100fd37ff134285ada750065f60ca69.bindTooltip(
                `<div>
                     pedrina park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c4d315e885824c5d81495c71e922f5b0 = L.marker(
                [-37.73516625, 142.0166135],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_55cc93f0d444472e81b9ba4041a31808 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c4d315e885824c5d81495c71e922f5b0.setIcon(icon_55cc93f0d444472e81b9ba4041a31808);


            marker_c4d315e885824c5d81495c71e922f5b0.bindTooltip(
                `<div>
                     victory park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_044b8c281463467bafceb982704fd7b9 = L.marker(
                [-37.74179546, 142.0164145],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0090bb99ce7b4a6aa6f17d72ef03711c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_044b8c281463467bafceb982704fd7b9.setIcon(icon_0090bb99ce7b4a6aa6f17d72ef03711c);


            marker_044b8c281463467bafceb982704fd7b9.bindTooltip(
                `<div>
                     hughan park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1d7ccfc2396b46c6af202e540a683026 = L.marker(
                [-37.73043958, 142.0073333],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_2f47a4552b5246b39e20e6603162a2f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d7ccfc2396b46c6af202e540a683026.setIcon(icon_2f47a4552b5246b39e20e6603162a2f2);


            marker_1d7ccfc2396b46c6af202e540a683026.bindTooltip(
                `<div>
                     coleraine rd playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f123b7a5f3144962b4ed4ca4c69b0195 = L.marker(
                [-37.73427159, 142.0007392],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_ddd78ae4864f448b893b619bfb5ff05e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f123b7a5f3144962b4ed4ca4c69b0195.setIcon(icon_ddd78ae4864f448b893b619bfb5ff05e);


            marker_f123b7a5f3144962b4ed4ca4c69b0195.bindTooltip(
                `<div>
                     quigley street playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a9bd894048c94cb6b7999f80845c705e = L.marker(
                [-37.59709058, 141.694187],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6f571a80b3bf4cf19482d06de6fde9a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a9bd894048c94cb6b7999f80845c705e.setIcon(icon_6f571a80b3bf4cf19482d06de6fde9a0);


            marker_a9bd894048c94cb6b7999f80845c705e.bindTooltip(
                `<div>
                     turnbull street playground
                 </div>`,
                {"sticky": true}
            );


            var marker_77309180c77d4e33aba307ba08c44f7d = L.marker(
                [-37.60149021, 141.69713240000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b57480fa356e42e18c4d5277ff8c12c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_77309180c77d4e33aba307ba08c44f7d.setIcon(icon_b57480fa356e42e18c4d5277ff8c12c5);


            marker_77309180c77d4e33aba307ba08c44f7d.bindTooltip(
                `<div>
                     coleraine vic playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a75b6c90e5064640858017690a6cd78e = L.marker(
                [-37.87257274, 142.2908635],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c49ea6dc06634bf799556b4d6a690310 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a75b6c90e5064640858017690a6cd78e.setIcon(icon_c49ea6dc06634bf799556b4d6a690310);


            marker_a75b6c90e5064640858017690a6cd78e.bindTooltip(
                `<div>
                     penshurst botanic gardens playground
                 </div>`,
                {"sticky": true}
            );


            var marker_dc43c0b547ae49819bb69afcc103407b = L.marker(
                [-37.6363689, 142.5484944],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_3f3f3633e77e46e391ebd9a39e58ec7e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc43c0b547ae49819bb69afcc103407b.setIcon(icon_3f3f3633e77e46e391ebd9a39e58ec7e);


            marker_dc43c0b547ae49819bb69afcc103407b.bindTooltip(
                `<div>
                     glenthompson lions park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_651536e5feba40d9a13e7aa28e46243e = L.marker(
                [-37.24717093, 141.8399898],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_7af15ca4e2634d7abe8dfcdf060a5a0f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_651536e5feba40d9a13e7aa28e46243e.setIcon(icon_7af15ca4e2634d7abe8dfcdf060a5a0f);


            marker_651536e5feba40d9a13e7aa28e46243e.bindTooltip(
                `<div>
                     glendinning street playground
                 </div>`,
                {"sticky": true}
            );


            var marker_33cf1b75971b4c94a8b7355056b0dcd1 = L.marker(
                [-37.52779537, 142.0403303],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_671e3a7d82024c4db7e45931544682a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_33cf1b75971b4c94a8b7355056b0dcd1.setIcon(icon_671e3a7d82024c4db7e45931544682a8);


            marker_33cf1b75971b4c94a8b7355056b0dcd1.bindTooltip(
                `<div>
                     cavendish playground
                 </div>`,
                {"sticky": true}
            );


            var marker_867cc519bea8412989669dfa89d2a851 = L.marker(
                [-37.59453566, 141.69235759999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4377b4fb2089410e937c3a58aa3d093c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_867cc519bea8412989669dfa89d2a851.setIcon(icon_4377b4fb2089410e937c3a58aa3d093c);


            marker_867cc519bea8412989669dfa89d2a851.bindTooltip(
                `<div>
                     silvester oval playground
                 </div>`,
                {"sticky": true}
            );


            var marker_50b6f1ead9884225b2172e5f478e9496 = L.marker(
                [-37.73127928, 142.01639690000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_c45be8bd26734f4cb5dbb6528cfdcedb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_50b6f1ead9884225b2172e5f478e9496.setIcon(icon_c45be8bd26734f4cb5dbb6528cfdcedb);


            marker_50b6f1ead9884225b2172e5f478e9496.bindTooltip(
                `<div>
                     hamilton rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7f8343fc044d4626b4a83f608884c302 = L.marker(
                [-37.85931998, 141.8034252],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_aeb26ef6c43541ee8266586d7cc014e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7f8343fc044d4626b4a83f608884c302.setIcon(icon_aeb26ef6c43541ee8266586d7cc014e8);


            marker_7f8343fc044d4626b4a83f608884c302.bindTooltip(
                `<div>
                     branxholme rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7fb059871d374619b20df0124b36d9b2 = L.marker(
                [-37.64080778, 142.54399899999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_04b25ff316a74b26aeb256b9b0a3aa87 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fb059871d374619b20df0124b36d9b2.setIcon(icon_04b25ff316a74b26aeb256b9b0a3aa87);


            marker_7fb059871d374619b20df0124b36d9b2.bindTooltip(
                `<div>
                     glenthompson rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7061454930f04004875a04eed307decc = L.marker(
                [-37.64977441, 142.3425948],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8acc884fd60f45838050f40b19a01b14 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7061454930f04004875a04eed307decc.setIcon(icon_8acc884fd60f45838050f40b19a01b14);


            marker_7061454930f04004875a04eed307decc.bindTooltip(
                `<div>
                     dunkeld memorial parkl playground
                 </div>`,
                {"sticky": true}
            );


            var marker_de99a7440cff4ae2a6bcb63620410a1b = L.marker(
                [-37.76675088, 142.09809119999997],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_0aab40c8223c433f81b13cb333207e0f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de99a7440cff4ae2a6bcb63620410a1b.setIcon(icon_0aab40c8223c433f81b13cb333207e0f);


            marker_de99a7440cff4ae2a6bcb63620410a1b.bindTooltip(
                `<div>
                     tarrington rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_49171c938e8d483eb54219fabd21ce56 = L.marker(
                [-37.73329987, 142.0446242],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b361102e414d457fad332dcb2737ede2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49171c938e8d483eb54219fabd21ce56.setIcon(icon_b361102e414d457fad332dcb2737ede2);


            marker_49171c938e8d483eb54219fabd21ce56.bindTooltip(
                `<div>
                     l.e.a.p. playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c39b9e49755a48ffbc45a3420fb11022 = L.marker(
                [-37.73472702, 142.037353],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_b297a7897b434f95b557d82985976a90 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c39b9e49755a48ffbc45a3420fb11022.setIcon(icon_b297a7897b434f95b557d82985976a90);


            marker_c39b9e49755a48ffbc45a3420fb11022.bindTooltip(
                `<div>
                     health station 7/8 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_76a14541c4a34f3eb701286f8ff6e264 = L.marker(
                [-37.73131703, 142.042135],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_6fc88cdecd224bbeb49146f4c54b19f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_76a14541c4a34f3eb701286f8ff6e264.setIcon(icon_6fc88cdecd224bbeb49146f4c54b19f0);


            marker_76a14541c4a34f3eb701286f8ff6e264.bindTooltip(
                `<div>
                     health station 11/12 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0b33bba6f4574bcaa19716b1d2f9fd5c = L.marker(
                [-37.73310211, 142.0489844],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_532b1b6f80e748ff8dda068ea6fe44a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b33bba6f4574bcaa19716b1d2f9fd5c.setIcon(icon_532b1b6f80e748ff8dda068ea6fe44a7);


            marker_0b33bba6f4574bcaa19716b1d2f9fd5c.bindTooltip(
                `<div>
                     health station 3/4 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_41e86a03199a401ba6b56c9b084848b1 = L.marker(
                [-37.73823296, 142.03966499999999],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_bacf45e3db4a44018459a348d1a80c99 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41e86a03199a401ba6b56c9b084848b1.setIcon(icon_bacf45e3db4a44018459a348d1a80c99);


            marker_41e86a03199a401ba6b56c9b084848b1.bindTooltip(
                `<div>
                     health station 1/2 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5e3861a92cdb4681a3586a90f5c56ce8 = L.marker(
                [-37.73300878, 142.04525900000002],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_8663a5b9d401473bbfd8c3797b793656 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e3861a92cdb4681a3586a90f5c56ce8.setIcon(icon_8663a5b9d401473bbfd8c3797b793656);


            marker_5e3861a92cdb4681a3586a90f5c56ce8.bindTooltip(
                `<div>
                     lake hamilton - health station 3 way playground
                 </div>`,
                {"sticky": true}
            );


            var marker_18c1623c256c43398bb8ab74843b7b18 = L.marker(
                [-37.87082739, 142.29935559999998],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_4b77a2782bf0445888ad6a162b58d781 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_18c1623c256c43398bb8ab74843b7b18.setIcon(icon_4b77a2782bf0445888ad6a162b58d781);


            marker_18c1623c256c43398bb8ab74843b7b18.bindTooltip(
                `<div>
                     penshurst rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e999d5b63a7c4735900fb310fd8ba56d = L.marker(
                [-36.718084000000005, 142.200904],
                {}
            ).addTo(feature_group_777c2c0de63142b8a90dbfc0f72df866);


            var icon_987879dd41474ee4a918bf1ec48cea37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e999d5b63a7c4735900fb310fd8ba56d.setIcon(icon_987879dd41474ee4a918bf1ec48cea37);


            marker_e999d5b63a7c4735900fb310fd8ba56d.bindTooltip(
                `<div>
                     Horsham Aquatic Centre
                 </div>`,
                {"sticky": true}
            );

</script>
