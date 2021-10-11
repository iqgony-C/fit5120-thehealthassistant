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
                #map_2e1ab640b32f4cc28ddecac877c8e737 {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>

</head>
<body>

            <div class="folium-map" id="map_2e1ab640b32f4cc28ddecac877c8e737" ></div>

</body>
<script>

            var map_2e1ab640b32f4cc28ddecac877c8e737 = L.map(
                "map_2e1ab640b32f4cc28ddecac877c8e737",
                {
                    center: [-38.043995, 145.264296],
                    crs: L.CRS.EPSG3857,
                    zoom: 6,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );
            L.control.scale().addTo(map_2e1ab640b32f4cc28ddecac877c8e737);





            var tile_layer_c306d994371849959a3852f515cdcff0 = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {"attribution": "Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_2e1ab640b32f4cc28ddecac877c8e737);


            var feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db = L.featureGroup(
                {}
            ).addTo(map_2e1ab640b32f4cc28ddecac877c8e737);


            var marker_934872de5b2944df98d0cd1759efa2b6 = L.marker(
                [-35.3114, 149.028152],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c175689d60de42fa8523f2e94d8e86f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_934872de5b2944df98d0cd1759efa2b6.setIcon(icon_c175689d60de42fa8523f2e94d8e86f0);


            marker_934872de5b2944df98d0cd1759efa2b6.bindTooltip(
                `<div>
                     Porter Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5bb0451b64a842e6b2d7bc23a3917416 = L.marker(
                [-35.268338, 149.141855],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a9238b769b464be98be9994c1ceb6204 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bb0451b64a842e6b2d7bc23a3917416.setIcon(icon_a9238b769b464be98be9994c1ceb6204);


            marker_5bb0451b64a842e6b2d7bc23a3917416.bindTooltip(
                `<div>
                     Corroboree Park
                 </div>`,
                {"sticky": true}
            );


            var marker_2c051ca7b5dd42ddb3d145b5d027307c = L.marker(
                [-35.319146999999994, 149.100659],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2440e6e76f4a4b2a9fb158ee9b27502f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2c051ca7b5dd42ddb3d145b5d027307c.setIcon(icon_2440e6e76f4a4b2a9fb158ee9b27502f);


            marker_2c051ca7b5dd42ddb3d145b5d027307c.bindTooltip(
                `<div>
                     Lawley Street - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a59605d753724a7aa03d1dbc3f0636a9 = L.marker(
                [-35.206624, 149.038999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5c257b0a3a9e470e9c0f21600cacf5e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a59605d753724a7aa03d1dbc3f0636a9.setIcon(icon_5c257b0a3a9e470e9c0f21600cacf5e7);


            marker_a59605d753724a7aa03d1dbc3f0636a9.bindTooltip(
                `<div>
                     Blackwell Circuit Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_90a1022e2dc84a97bc136aaf4066bc5c = L.marker(
                [-35.193455, 149.106676],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d9fe5409df204480abf0cb0f4fdfc353 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_90a1022e2dc84a97bc136aaf4066bc5c.setIcon(icon_d9fe5409df204480abf0cb0f4fdfc353);


            marker_90a1022e2dc84a97bc136aaf4066bc5c.bindTooltip(
                `<div>
                     Lyrebird Place Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_5dcc55c12f8c463abcaa6ce0b50fcac3 = L.marker(
                [-35.336639, 149.073916],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7809d491ef2f4068ad06c956c65d3ff5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5dcc55c12f8c463abcaa6ce0b50fcac3.setIcon(icon_7809d491ef2f4068ad06c956c65d3ff5);


            marker_5dcc55c12f8c463abcaa6ce0b50fcac3.bindTooltip(
                `<div>
                     Devonport Street - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_1d07e508cb1c42d6ac4d6b8b065aa7b3 = L.marker(
                [-35.421279999999996, 149.122054],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a2ceaf6d464f458cae23d1acf56cc691 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d07e508cb1c42d6ac4d6b8b065aa7b3.setIcon(icon_a2ceaf6d464f458cae23d1acf56cc691);


            marker_1d07e508cb1c42d6ac4d6b8b065aa7b3.bindTooltip(
                `<div>
                     Alston Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_74bdfa9715f74836a0e5ec3771a2391c = L.marker(
                [-35.408122999999996, 149.129002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fae51dfeecb64b49bf1726fcfd93c11d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_74bdfa9715f74836a0e5ec3771a2391c.setIcon(icon_fae51dfeecb64b49bf1726fcfd93c11d);


            marker_74bdfa9715f74836a0e5ec3771a2391c.bindTooltip(
                `<div>
                     Hawkesworth Place - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_db09986f7a6c485ca7b08c12203c2f25 = L.marker(
                [-35.402904, 149.071724],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_88858604cb9f4082a43f194dae05ca50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db09986f7a6c485ca7b08c12203c2f25.setIcon(icon_88858604cb9f4082a43f194dae05ca50);


            marker_db09986f7a6c485ca7b08c12203c2f25.bindTooltip(
                `<div>
                     Lake Tuggeranong District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_744736df26564465baef80d592068a7d = L.marker(
                [-35.372251, 149.062246],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ef1350f56df545a69b14b04ccbfd428a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_744736df26564465baef80d592068a7d.setIcon(icon_ef1350f56df545a69b14b04ccbfd428a);


            marker_744736df26564465baef80d592068a7d.bindTooltip(
                `<div>
                     Rundle Place - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_216240cd0fcf4bd1a83ae2eac910f461 = L.marker(
                [-35.341884, 149.227383],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_147a8c55172b4795ae559aedc7936b61 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_216240cd0fcf4bd1a83ae2eac910f461.setIcon(icon_147a8c55172b4795ae559aedc7936b61);


            marker_216240cd0fcf4bd1a83ae2eac910f461.bindTooltip(
                `<div>
                     River Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_1a48053987324647980bcb0ffedf7bf5 = L.marker(
                [-35.237826, 149.074645],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7189a9f97fb34b7c8f4034f2987477f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a48053987324647980bcb0ffedf7bf5.setIcon(icon_7189a9f97fb34b7c8f4034f2987477f9);


            marker_1a48053987324647980bcb0ffedf7bf5.bindTooltip(
                `<div>
                     John Knight Memorial Park
                 </div>`,
                {"sticky": true}
            );


            var marker_88d72071c81a41ffb4406b8d0d4b6d37 = L.marker(
                [-35.314768, 149.10578999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3daba7a09f9243d6b676e45ad5fed620 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88d72071c81a41ffb4406b8d0d4b6d37.setIcon(icon_3daba7a09f9243d6b676e45ad5fed620);


            marker_88d72071c81a41ffb4406b8d0d4b6d37.bindTooltip(
                `<div>
                     Hannah Place - Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_848ceac9b6244880b8e13d2ebec30a07 = L.marker(
                [-35.264871, 149.113599],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_15c1e27799cb4eba87bd721d360a6f28 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_848ceac9b6244880b8e13d2ebec30a07.setIcon(icon_15c1e27799cb4eba87bd721d360a6f28);


            marker_848ceac9b6244880b8e13d2ebec30a07.bindTooltip(
                `<div>
                     Cockle Street  Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_5e1a95c13d3c48bd9152fc8175d30332 = L.marker(
                [-35.201965, 149.038737],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2df5f1699d8f404abde7f4197eb139a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e1a95c13d3c48bd9152fc8175d30332.setIcon(icon_2df5f1699d8f404abde7f4197eb139a5);


            marker_5e1a95c13d3c48bd9152fc8175d30332.bindTooltip(
                `<div>
                     Packham Place Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_db4732a7b5254b6eba8647e561583692 = L.marker(
                [-35.389103000000006, 149.05193500000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5901319453974bd4a6ccdf194e76a6fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db4732a7b5254b6eba8647e561583692.setIcon(icon_5901319453974bd4a6ccdf194e76a6fd);


            marker_db4732a7b5254b6eba8647e561583692.bindTooltip(
                `<div>
                     Boddington Crescent - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_28ea7df8f6754e70a6148aaaff2bf1e3 = L.marker(
                [-35.357267, 149.063593],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_117b1c1752844e9e923b8e711984dc20 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_28ea7df8f6754e70a6148aaaff2bf1e3.setIcon(icon_117b1c1752844e9e923b8e711984dc20);


            marker_28ea7df8f6754e70a6148aaaff2bf1e3.bindTooltip(
                `<div>
                     Nemarang Crescent Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b91af9ca63714c52a1c5833b11ff79f9 = L.marker(
                [-35.209532, 149.077357],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_758eef42a79f4e5eb3c5d74474217c8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b91af9ca63714c52a1c5833b11ff79f9.setIcon(icon_758eef42a79f4e5eb3c5d74474217c8b);


            marker_b91af9ca63714c52a1c5833b11ff79f9.bindTooltip(
                `<div>
                     Kingston Street Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_08be3431b0424778b8601a957cb48dc0 = L.marker(
                [-35.456377, 149.084235],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6b9acabb3c5147018e405df81e16a2af = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_08be3431b0424778b8601a957cb48dc0.setIcon(icon_6b9acabb3c5147018e405df81e16a2af);


            marker_08be3431b0424778b8601a957cb48dc0.bindTooltip(
                `<div>
                     Point Hut District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_23b59bb2895e4059bf288a06d1665647 = L.marker(
                [-35.323883, 148.941168],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4aba3dbf958f45fc847d3e659a1836e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23b59bb2895e4059bf288a06d1665647.setIcon(icon_4aba3dbf958f45fc847d3e659a1836e5);


            marker_23b59bb2895e4059bf288a06d1665647.bindTooltip(
                `<div>
                     Coree - Cotter Road
                 </div>`,
                {"sticky": true}
            );


            var marker_602b60cb7f8547419ca5b9fb1a5df566 = L.marker(
                [-35.426712, 149.07164],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6d02717701c34787ac9fb322eb1cf740 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_602b60cb7f8547419ca5b9fb1a5df566.setIcon(icon_6d02717701c34787ac9fb322eb1cf740);


            marker_602b60cb7f8547419ca5b9fb1a5df566.bindTooltip(
                `<div>
                     Burgoyne Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8048c34aaad84bafaaa75e12f3586546 = L.marker(
                [-35.350207, 149.061227],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8b8ddc481a1045428f9606f92835fd25 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8048c34aaad84bafaaa75e12f3586546.setIcon(icon_8b8ddc481a1045428f9606f92835fd25);


            marker_8048c34aaad84bafaaa75e12f3586546.bindTooltip(
                `<div>
                     Malara Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9a966378090b468db6db125fd0109d6c = L.marker(
                [-35.337649, 149.053683],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f2b4dda4ee8b4221b2f0f9c03b11ece9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9a966378090b468db6db125fd0109d6c.setIcon(icon_f2b4dda4ee8b4221b2f0f9c03b11ece9);


            marker_9a966378090b468db6db125fd0109d6c.bindTooltip(
                `<div>
                     Dillon Close - Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_1909c07cb2be44bbb35c563d5e836340 = L.marker(
                [-35.20798, 149.16024199999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d2390933177b4e388659dceab8db72f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1909c07cb2be44bbb35c563d5e836340.setIcon(icon_d2390933177b4e388659dceab8db72f1);


            marker_1909c07cb2be44bbb35c563d5e836340.bindTooltip(
                `<div>
                     Helby Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d79bbacdd9d44dea8da8704b80f9915a = L.marker(
                [-35.31666, 149.152879],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4ec12081c2e64dc9b6ce5d00cf07b26e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d79bbacdd9d44dea8da8704b80f9915a.setIcon(icon_4ec12081c2e64dc9b6ce5d00cf07b26e);


            marker_d79bbacdd9d44dea8da8704b80f9915a.bindTooltip(
                `<div>
                     Sandalwood Street - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5747afc3f4ac432dbf39447cc7bf2929 = L.marker(
                [-35.330284999999996, 149.151911],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a34ef482b0604cbfa573136f3e202169 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5747afc3f4ac432dbf39447cc7bf2929.setIcon(icon_a34ef482b0604cbfa573136f3e202169);


            marker_5747afc3f4ac432dbf39447cc7bf2929.bindTooltip(
                `<div>
                     Kootara Crescent
                 </div>`,
                {"sticky": true}
            );


            var marker_43d3f6161188424dba682255b6738b1a = L.marker(
                [-35.157396000000006, 149.150881],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_95f2ef624ce841c1abce73251d058dfa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43d3f6161188424dba682255b6738b1a.setIcon(icon_95f2ef624ce841c1abce73251d058dfa);


            marker_43d3f6161188424dba682255b6738b1a.bindTooltip(
                `<div>
                     Mulligans Flat Road Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_c969ee65a9284c7e964bf8f75495240f = L.marker(
                [-35.334126, 149.030598],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c94f1d77bcca466da28131e40777cafa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c969ee65a9284c7e964bf8f75495240f.setIcon(icon_c94f1d77bcca466da28131e40777cafa);


            marker_c969ee65a9284c7e964bf8f75495240f.bindTooltip(
                `<div>
                     Cargelligo Street Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_193fa27b88af4e7eb1b6a1f59e8bf39d = L.marker(
                [-35.392426, 149.062122],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7ef4dd2ed1aa420ead13d29d03c4835d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_193fa27b88af4e7eb1b6a1f59e8bf39d.setIcon(icon_7ef4dd2ed1aa420ead13d29d03c4835d);


            marker_193fa27b88af4e7eb1b6a1f59e8bf39d.bindTooltip(
                `<div>
                     Kambah District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_bd3bd9197e76499bafaf9217183bffc8 = L.marker(
                [-35.352159, 149.07701200000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_92d35df5f5b942718591dd32d4a14b6e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd3bd9197e76499bafaf9217183bffc8.setIcon(icon_92d35df5f5b942718591dd32d4a14b6e);


            marker_bd3bd9197e76499bafaf9217183bffc8.bindTooltip(
                `<div>
                     Shann Place  Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_42d7266a7a9144c58c864a7bc1f53347 = L.marker(
                [-35.392427000000005, 149.062302],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a734fb766b146e2aecb68ed2dcfb984 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_42d7266a7a9144c58c864a7bc1f53347.setIcon(icon_0a734fb766b146e2aecb68ed2dcfb984);


            marker_42d7266a7a9144c58c864a7bc1f53347.bindTooltip(
                `<div>
                     Kambah District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_08fb88730ffb496b92f839f02c6cfa44 = L.marker(
                [-35.383505, 149.052571],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e3f3c305f52a4ab6acdaf885b98b9cfc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_08fb88730ffb496b92f839f02c6cfa44.setIcon(icon_e3f3c305f52a4ab6acdaf885b98b9cfc);


            marker_08fb88730ffb496b92f839f02c6cfa44.bindTooltip(
                `<div>
                     Boddington Crescent Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8e737820956f40cfa3639794921ccc8b = L.marker(
                [-35.253398, 149.165685],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_05e2f810e0d942f49a760fa5cfa40fb7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8e737820956f40cfa3639794921ccc8b.setIcon(icon_05e2f810e0d942f49a760fa5cfa40fb7);


            marker_8e737820956f40cfa3639794921ccc8b.bindTooltip(
                `<div>
                     Brennan Street  Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e10d43f7513e4568a64a0b74ffdd4401 = L.marker(
                [-35.404784, 149.103042],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2711fcd41f0a41e98c648271c708d60e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e10d43f7513e4568a64a0b74ffdd4401.setIcon(icon_2711fcd41f0a41e98c648271c708d60e);


            marker_e10d43f7513e4568a64a0b74ffdd4401.bindTooltip(
                `<div>
                     Lansell Circuit Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_69298042bd134022a133bddc15e87e40 = L.marker(
                [-35.16785, 149.143869],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f9a5ec155c5240ba85a45dda9b790411 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69298042bd134022a133bddc15e87e40.setIcon(icon_f9a5ec155c5240ba85a45dda9b790411);


            marker_69298042bd134022a133bddc15e87e40.bindTooltip(
                `<div>
                     Amy Ackman Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8c71783ac8d241f98aad8ae5b04c9ce4 = L.marker(
                [-35.188035, 149.16236899999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3ca0f04f42bd4c4389a120efb8c4a203 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8c71783ac8d241f98aad8ae5b04c9ce4.setIcon(icon_3ca0f04f42bd4c4389a120efb8c4a203);


            marker_8c71783ac8d241f98aad8ae5b04c9ce4.bindTooltip(
                `<div>
                     Bettong Avenue Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3aedba0476884374a957bcecbe569bd7 = L.marker(
                [-35.418688, 149.083038],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_86b7cd1b313f4207b7819904c06e0e21 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3aedba0476884374a957bcecbe569bd7.setIcon(icon_86b7cd1b313f4207b7819904c06e0e21);


            marker_3aedba0476884374a957bcecbe569bd7.bindTooltip(
                `<div>
                     Griffin Place Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_39f22c6d8f814201b35b96b657df16e0 = L.marker(
                [-35.208529999999996, 149.001871],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_73671075b93a416fa3194d905b295365 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_39f22c6d8f814201b35b96b657df16e0.setIcon(icon_73671075b93a416fa3194d905b295365);


            marker_39f22c6d8f814201b35b96b657df16e0.bindTooltip(
                `<div>
                     Clyde Finlay Street Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7e47252cf154400e8fd23235ccc2ace2 = L.marker(
                [-35.247334, 149.12096699999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a6c2b96d01d74058b64589d7bbe59f8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e47252cf154400e8fd23235ccc2ace2.setIcon(icon_a6c2b96d01d74058b64589d7bbe59f8f);


            marker_7e47252cf154400e8fd23235ccc2ace2.bindTooltip(
                `<div>
                     Lambert Place - Road Verge
                 </div>`,
                {"sticky": true}
            );


            var marker_36184ce8faca4024b815dda536c0553d = L.marker(
                [-35.188399, 149.017748],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bbbf4c0d1b9449c896673989566133d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_36184ce8faca4024b815dda536c0553d.setIcon(icon_bbbf4c0d1b9449c896673989566133d4);


            marker_36184ce8faca4024b815dda536c0553d.bindTooltip(
                `<div>
                     Percy Pegg Circuit Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e050cced1aa64eeba93547cf718b7b52 = L.marker(
                [-35.180051, 149.119613],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fb79136e05b44c23a032ec24b7c1bf52 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e050cced1aa64eeba93547cf718b7b52.setIcon(icon_fb79136e05b44c23a032ec24b7c1bf52);


            marker_e050cced1aa64eeba93547cf718b7b52.bindTooltip(
                `<div>
                     Gadali Crescent Pedestrian Parkland
                 </div>`,
                {"sticky": true}
            );


            var marker_b8120fd5f95e4f3592aa9173f2816399 = L.marker(
                [-35.339862, 149.09164199999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6bf798f01fd84e999c0f1857ae2f3f66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b8120fd5f95e4f3592aa9173f2816399.setIcon(icon_6bf798f01fd84e999c0f1857ae2f3f66);


            marker_b8120fd5f95e4f3592aa9173f2816399.bindTooltip(
                `<div>
                     Edison District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_68b01b1e7f73487088768f8df04daee9 = L.marker(
                [-35.377732, 149.053236],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ac34a99572dd44b1bda7cbaf1220bfc4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_68b01b1e7f73487088768f8df04daee9.setIcon(icon_ac34a99572dd44b1bda7cbaf1220bfc4);


            marker_68b01b1e7f73487088768f8df04daee9.bindTooltip(
                `<div>
                     Attiwell Circuit - Neighbourhood Park
                 </div>`,
                {"sticky": true}
            );


            var marker_da3e2e086d284c699471560a08152cf6 = L.marker(
                [-35.277923, 149.134538],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ab459d023b52425c9d3fda6dbeb3d81f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_da3e2e086d284c699471560a08152cf6.setIcon(icon_ab459d023b52425c9d3fda6dbeb3d81f);


            marker_da3e2e086d284c699471560a08152cf6.bindTooltip(
                `<div>
                     City Youth Centre Basket Ball Court
                 </div>`,
                {"sticky": true}
            );


            var marker_5094565069164086a7935aedda74ce1d = L.marker(
                [-35.179882, 149.12991599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_86f4b7151bf04636ae74df29ffa496cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5094565069164086a7935aedda74ce1d.setIcon(icon_86f4b7151bf04636ae74df29ffa496cc);


            marker_5094565069164086a7935aedda74ce1d.bindTooltip(
                `<div>
                     Yerrabi District Park
                 </div>`,
                {"sticky": true}
            );


            var marker_609e14ec4c4a46a6b1f166b3adf73d98 = L.marker(
                [-37.55223341, 143.8065678],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ee7aad3fdae646bda79b5ceda43ffad0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_609e14ec4c4a46a6b1f166b3adf73d98.setIcon(icon_ee7aad3fdae646bda79b5ceda43ffad0);


            marker_609e14ec4c4a46a6b1f166b3adf73d98.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_abd5f4ca392d4fd68b5841f4a2446155 = L.marker(
                [-37.54830503, 143.8697381],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_014e967baef048e9a726f6e300b4807e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_abd5f4ca392d4fd68b5841f4a2446155.setIcon(icon_014e967baef048e9a726f6e300b4807e);


            marker_abd5f4ca392d4fd68b5841f4a2446155.bindTooltip(
                `<div>
                     Black Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_9acd245568924d2f8c305cd5894779a4 = L.marker(
                [-37.55154926, 143.8951763],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0d11e38d4b4b47079b2c8cd5de2690f6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9acd245568924d2f8c305cd5894779a4.setIcon(icon_0d11e38d4b4b47079b2c8cd5de2690f6);


            marker_9acd245568924d2f8c305cd5894779a4.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_91245f503d2a4c8fb0f4d738ece6ba80 = L.marker(
                [-37.65042933, 143.8878956],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d8ac6e15fe53447fabafa250161f5c10 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_91245f503d2a4c8fb0f4d738ece6ba80.setIcon(icon_d8ac6e15fe53447fabafa250161f5c10);


            marker_91245f503d2a4c8fb0f4d738ece6ba80.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_bf520677e6b74de1b1c3083c72a232c5 = L.marker(
                [-37.58012558, 143.8187479],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9b20833b5a824fd89e63967b5adc16c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bf520677e6b74de1b1c3083c72a232c5.setIcon(icon_9b20833b5a824fd89e63967b5adc16c9);


            marker_bf520677e6b74de1b1c3083c72a232c5.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_77cb5cced9d34764ada4104aabbd8e30 = L.marker(
                [-37.56525496, 143.8630079],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8f1bb2b51163446780df46ee193c83bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_77cb5cced9d34764ada4104aabbd8e30.setIcon(icon_8f1bb2b51163446780df46ee193c83bb);


            marker_77cb5cced9d34764ada4104aabbd8e30.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_f011f6eaa0b1424d921520bdf93628ff = L.marker(
                [-37.57534311, 143.8346314],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ee6c6110737b4edeb9e4df46184f6247 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f011f6eaa0b1424d921520bdf93628ff.setIcon(icon_ee6c6110737b4edeb9e4df46184f6247);


            marker_f011f6eaa0b1424d921520bdf93628ff.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_f853bdd9f72a4e7297b729f9d23ebbda = L.marker(
                [-37.53737218, 143.8368403],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f99de5fc011146798d19293e4d648880 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f853bdd9f72a4e7297b729f9d23ebbda.setIcon(icon_f99de5fc011146798d19293e4d648880);


            marker_f853bdd9f72a4e7297b729f9d23ebbda.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_1d72d063ae2d4274bd0df48fd50d1759 = L.marker(
                [-37.60729103, 143.86863469999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4d39a26628b54248a3636518dad1f47d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d72d063ae2d4274bd0df48fd50d1759.setIcon(icon_4d39a26628b54248a3636518dad1f47d);


            marker_1d72d063ae2d4274bd0df48fd50d1759.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_a9ab5033fc8b46bb86c76c7826779f2f = L.marker(
                [-37.62593629, 143.87788799999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0829afce4a824025bbe00bfde6694681 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a9ab5033fc8b46bb86c76c7826779f2f.setIcon(icon_0829afce4a824025bbe00bfde6694681);


            marker_a9ab5033fc8b46bb86c76c7826779f2f.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_709e1fc388894c8b82475f42da51e384 = L.marker(
                [-37.57787579, 143.8540298],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c661728239064003af28a4e6afb0652b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_709e1fc388894c8b82475f42da51e384.setIcon(icon_c661728239064003af28a4e6afb0652b);


            marker_709e1fc388894c8b82475f42da51e384.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_ba690e334c0b437d81030f432323523a = L.marker(
                [-37.52186263, 143.8354857],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_46bf747baef54ca0adbcbe78cd71e86c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ba690e334c0b437d81030f432323523a.setIcon(icon_46bf747baef54ca0adbcbe78cd71e86c);


            marker_ba690e334c0b437d81030f432323523a.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_8ac6528ea1944010834118da71775f17 = L.marker(
                [-37.60242554, 143.8392869],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_981304cc33e84e6f96ffaf66eae93031 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ac6528ea1944010834118da71775f17.setIcon(icon_981304cc33e84e6f96ffaf66eae93031);


            marker_8ac6528ea1944010834118da71775f17.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_18647af0567c44a6bc3f82c86c8455cd = L.marker(
                [-37.5314097, 143.82427030000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2f51cadd5b2f4b8aaefb27330609e966 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_18647af0567c44a6bc3f82c86c8455cd.setIcon(icon_2f51cadd5b2f4b8aaefb27330609e966);


            marker_18647af0567c44a6bc3f82c86c8455cd.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_0981bc50b40443fa95d4eb68b497fb5e = L.marker(
                [-37.54043536, 143.8600685],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e7ebfb8a9c494135b280b318e3eace13 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0981bc50b40443fa95d4eb68b497fb5e.setIcon(icon_e7ebfb8a9c494135b280b318e3eace13);


            marker_0981bc50b40443fa95d4eb68b497fb5e.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_e0b47419836842ec9d883260b2b35b1d = L.marker(
                [-37.53958301, 143.8602221],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_aac9a9e2330e4fdc8a56abc8ca41d470 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e0b47419836842ec9d883260b2b35b1d.setIcon(icon_aac9a9e2330e4fdc8a56abc8ca41d470);


            marker_e0b47419836842ec9d883260b2b35b1d.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_c0a2c07719b5427880c796f652a6b3c7 = L.marker(
                [-37.56553665, 143.8401465],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fcbe8ba5f0634049a83554dc75276388 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c0a2c07719b5427880c796f652a6b3c7.setIcon(icon_fcbe8ba5f0634049a83554dc75276388);


            marker_c0a2c07719b5427880c796f652a6b3c7.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_8d1271229f3f4662a88f4ba6d78bcd10 = L.marker(
                [-37.59226876, 143.83877230000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b846a499a1944b99ac670ac0de5bc343 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d1271229f3f4662a88f4ba6d78bcd10.setIcon(icon_b846a499a1944b99ac670ac0de5bc343);


            marker_8d1271229f3f4662a88f4ba6d78bcd10.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_5bd5390771bd48a198d30d8f2a7a1c49 = L.marker(
                [-37.51578917, 143.7818993],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cd19bfc330d445a88ba10462fd37a43c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bd5390771bd48a198d30d8f2a7a1c49.setIcon(icon_cd19bfc330d445a88ba10462fd37a43c);


            marker_5bd5390771bd48a198d30d8f2a7a1c49.bindTooltip(
                `<div>
                     Mitchell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b2821bad558d45c39e8da924b23df1b0 = L.marker(
                [-37.59745682, 143.8416798],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_718df86df35043f4b0a1e25db2333086 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b2821bad558d45c39e8da924b23df1b0.setIcon(icon_718df86df35043f4b0a1e25db2333086);


            marker_b2821bad558d45c39e8da924b23df1b0.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_cdebb4bfc495491db0780d3dd118dff0 = L.marker(
                [-37.60160223, 143.8324374],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7fc05e92e86544e1aba6d5b9ee016005 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cdebb4bfc495491db0780d3dd118dff0.setIcon(icon_7fc05e92e86544e1aba6d5b9ee016005);


            marker_cdebb4bfc495491db0780d3dd118dff0.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_4776413d206b4ea282f58d85d6d0cb42 = L.marker(
                [-37.57912321, 143.8770403],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ed6f97d515d647708cd92c78a120341a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4776413d206b4ea282f58d85d6d0cb42.setIcon(icon_ed6f97d515d647708cd92c78a120341a);


            marker_4776413d206b4ea282f58d85d6d0cb42.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_f7e09fd5da8e49538356bcc53a8de7b8 = L.marker(
                [-37.42201264, 143.7107983],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_26f9c65f80c0475cb95644a01af08be2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f7e09fd5da8e49538356bcc53a8de7b8.setIcon(icon_26f9c65f80c0475cb95644a01af08be2);


            marker_f7e09fd5da8e49538356bcc53a8de7b8.bindTooltip(
                `<div>
                     Learmonth
                 </div>`,
                {"sticky": true}
            );


            var marker_022e7b723fb6464c9381b5a56a44788c = L.marker(
                [-37.55444734, 143.80017880000003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f3aa351d59a740608e2e8697149ab160 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_022e7b723fb6464c9381b5a56a44788c.setIcon(icon_f3aa351d59a740608e2e8697149ab160);


            marker_022e7b723fb6464c9381b5a56a44788c.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_b8b14f0ea6ce4e4aa06918dd3026d0bc = L.marker(
                [-37.55188874, 143.8065302],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0c0240e8080644f79c0204c05b3042c8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b8b14f0ea6ce4e4aa06918dd3026d0bc.setIcon(icon_0c0240e8080644f79c0204c05b3042c8);


            marker_b8b14f0ea6ce4e4aa06918dd3026d0bc.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_ee32ebca32fc4d769b1c828bab313b0e = L.marker(
                [-37.55575737, 143.7882916],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_eb0c2c33118f498e9efb4cbf4e519935 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ee32ebca32fc4d769b1c828bab313b0e.setIcon(icon_eb0c2c33118f498e9efb4cbf4e519935);


            marker_ee32ebca32fc4d769b1c828bab313b0e.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_7899821daf314da7ac2f32eb31c7b01a = L.marker(
                [-37.57061213, 143.8715201],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6152b19f9b5840159f69775e9941fd54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7899821daf314da7ac2f32eb31c7b01a.setIcon(icon_6152b19f9b5840159f69775e9941fd54);


            marker_7899821daf314da7ac2f32eb31c7b01a.bindTooltip(
                `<div>
                     Golden Point
                 </div>`,
                {"sticky": true}
            );


            var marker_a2c6b1d26d9a4b779d5ab83eda8560b4 = L.marker(
                [-37.39626674, 143.7990146],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_949987c81a7c4df6b2f81dff2030abee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a2c6b1d26d9a4b779d5ab83eda8560b4.setIcon(icon_949987c81a7c4df6b2f81dff2030abee);


            marker_a2c6b1d26d9a4b779d5ab83eda8560b4.bindTooltip(
                `<div>
                     Ascot
                 </div>`,
                {"sticky": true}
            );


            var marker_ea1e5bcb7d7f4fffaf150c2080d3b7f2 = L.marker(
                [-37.56480883, 143.7965289],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a0dae0de8794436087c778ac9fdcc60b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ea1e5bcb7d7f4fffaf150c2080d3b7f2.setIcon(icon_a0dae0de8794436087c778ac9fdcc60b);


            marker_ea1e5bcb7d7f4fffaf150c2080d3b7f2.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_40ba6a9c097b4103bf30f67659e22bb0 = L.marker(
                [-37.59177357, 143.818295],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5bb9ef6bbf964f40900e21ffed80ae28 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_40ba6a9c097b4103bf30f67659e22bb0.setIcon(icon_5bb9ef6bbf964f40900e21ffed80ae28);


            marker_40ba6a9c097b4103bf30f67659e22bb0.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_757897d3d6a9499c8a9da9ccbb1d6118 = L.marker(
                [-37.60212087, 143.83418569999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8de278ea9ee342079f6c5cbd4fcfa9d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_757897d3d6a9499c8a9da9ccbb1d6118.setIcon(icon_8de278ea9ee342079f6c5cbd4fcfa9d6);


            marker_757897d3d6a9499c8a9da9ccbb1d6118.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_11d91df4dea340e49c26e49aa4396c08 = L.marker(
                [-37.531637700000005, 143.8377677],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d9d496b064ed4a538540758cc205a3f8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_11d91df4dea340e49c26e49aa4396c08.setIcon(icon_d9d496b064ed4a538540758cc205a3f8);


            marker_11d91df4dea340e49c26e49aa4396c08.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_99c34df092584dc0a0ec539aa43d20f5 = L.marker(
                [-37.55236443, 143.8984577],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fa760c8cf2754c4fa6b77745c273c66f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_99c34df092584dc0a0ec539aa43d20f5.setIcon(icon_fa760c8cf2754c4fa6b77745c273c66f);


            marker_99c34df092584dc0a0ec539aa43d20f5.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_e1c5369a3b2148248b1c29e0bbd622b0 = L.marker(
                [-37.53935581, 143.87150880000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_29329ef1e1bd44089312ba11d1932953 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e1c5369a3b2148248b1c29e0bbd622b0.setIcon(icon_29329ef1e1bd44089312ba11d1932953);


            marker_e1c5369a3b2148248b1c29e0bbd622b0.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_b87eb4763efd4ecaa04fb4b6ef2a4d73 = L.marker(
                [-37.652807700000004, 143.888122],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_159313ebcefa44c7be11d0e771cf3443 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b87eb4763efd4ecaa04fb4b6ef2a4d73.setIcon(icon_159313ebcefa44c7be11d0e771cf3443);


            marker_b87eb4763efd4ecaa04fb4b6ef2a4d73.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_fd8f825c92c9455f9eb20eb6ba4162a4 = L.marker(
                [-37.64939325, 143.8872799],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_82d4155d5e65435fa78ca411a90dac6b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fd8f825c92c9455f9eb20eb6ba4162a4.setIcon(icon_82d4155d5e65435fa78ca411a90dac6b);


            marker_fd8f825c92c9455f9eb20eb6ba4162a4.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_259ca87abcd44b89b2d0bb7603c0fcf2 = L.marker(
                [-37.64986628, 143.8910267],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0cb63216e2a74ea2a17a3fcb98640717 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_259ca87abcd44b89b2d0bb7603c0fcf2.setIcon(icon_0cb63216e2a74ea2a17a3fcb98640717);


            marker_259ca87abcd44b89b2d0bb7603c0fcf2.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_6ac0e925d895418499cfb5c1a5076a4b = L.marker(
                [-37.51419645, 143.8022486],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_53b0850b47d24fe3965e7ab1322c4cd2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6ac0e925d895418499cfb5c1a5076a4b.setIcon(icon_53b0850b47d24fe3965e7ab1322c4cd2);


            marker_6ac0e925d895418499cfb5c1a5076a4b.bindTooltip(
                `<div>
                     Mitchell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9e1d33fa19d24b81adbd3f81c5d7b089 = L.marker(
                [-37.58523147, 143.8690186],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f99715af08d34d7e8a80d802916d1367 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e1d33fa19d24b81adbd3f81c5d7b089.setIcon(icon_f99715af08d34d7e8a80d802916d1367);


            marker_9e1d33fa19d24b81adbd3f81c5d7b089.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_3d5dbed378ec41d3a95a78d96c2467f6 = L.marker(
                [-37.59279444, 143.870159],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fd03d945e3194a2dbb03bea014a7ef3e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d5dbed378ec41d3a95a78d96c2467f6.setIcon(icon_fd03d945e3194a2dbb03bea014a7ef3e);


            marker_3d5dbed378ec41d3a95a78d96c2467f6.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_5c620d9fcc7c4891a6ceb9e3e6f4cc75 = L.marker(
                [-37.60494765, 143.87034880000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_350e3a3907f2431ba10dff625d3d9246 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5c620d9fcc7c4891a6ceb9e3e6f4cc75.setIcon(icon_350e3a3907f2431ba10dff625d3d9246);


            marker_5c620d9fcc7c4891a6ceb9e3e6f4cc75.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_1f0dca5a2e53494c859f2efd5be74d44 = L.marker(
                [-37.5881856, 143.8676811],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_447bb69764e0495fb9d1f0f9511f7b14 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f0dca5a2e53494c859f2efd5be74d44.setIcon(icon_447bb69764e0495fb9d1f0f9511f7b14);


            marker_1f0dca5a2e53494c859f2efd5be74d44.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_05afe870e54b4605b167669fdb9d5665 = L.marker(
                [-37.51424258, 143.70899690000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3f9ef66585b84548ac27e6d306d2a987 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_05afe870e54b4605b167669fdb9d5665.setIcon(icon_3f9ef66585b84548ac27e6d306d2a987);


            marker_05afe870e54b4605b167669fdb9d5665.bindTooltip(
                `<div>
                     Cardigan Village
                 </div>`,
                {"sticky": true}
            );


            var marker_69c544ed638049d7bb6842eb27b9b15c = L.marker(
                [-37.52322431, 143.8332246],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e83a90284248464c91e63a0d0971d295 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69c544ed638049d7bb6842eb27b9b15c.setIcon(icon_e83a90284248464c91e63a0d0971d295);


            marker_69c544ed638049d7bb6842eb27b9b15c.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_f91a120147be4ca2a5ed6bfd28d31960 = L.marker(
                [-37.53805568, 143.8440296],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d9ee95b73d8a471488c15017be0de4d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f91a120147be4ca2a5ed6bfd28d31960.setIcon(icon_d9ee95b73d8a471488c15017be0de4d5);


            marker_f91a120147be4ca2a5ed6bfd28d31960.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_cf498b413b5f4840b81925b3e2a9b7c9 = L.marker(
                [-37.53716369, 143.8410304],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8c1630ab64fa49ba915100c562cc8ec9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cf498b413b5f4840b81925b3e2a9b7c9.setIcon(icon_8c1630ab64fa49ba915100c562cc8ec9);


            marker_cf498b413b5f4840b81925b3e2a9b7c9.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_e9353521e10049818dd80419277e6358 = L.marker(
                [-37.42958452, 143.7866969],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f2cbdd527a6c4d64988bdf0d3cddc34a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e9353521e10049818dd80419277e6358.setIcon(icon_f2cbdd527a6c4d64988bdf0d3cddc34a);


            marker_e9353521e10049818dd80419277e6358.bindTooltip(
                `<div>
                     Blowhard
                 </div>`,
                {"sticky": true}
            );


            var marker_9778917b7eca44f697e9deecadc76bc2 = L.marker(
                [-37.54505633, 143.8181728],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6a5909677cde48fbb0a9eb6a0c3d3cd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9778917b7eca44f697e9deecadc76bc2.setIcon(icon_6a5909677cde48fbb0a9eb6a0c3d3cd7);


            marker_9778917b7eca44f697e9deecadc76bc2.bindTooltip(
                `<div>
                     Lake Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_517d2b71abad4d8ba1191147f396be79 = L.marker(
                [-37.53087426, 143.81654630000003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8833885daf564c6099b3624df0e9a09f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_517d2b71abad4d8ba1191147f396be79.setIcon(icon_8833885daf564c6099b3624df0e9a09f);


            marker_517d2b71abad4d8ba1191147f396be79.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_7e7cc7eba23a4f099594e5ba1a8c9b83 = L.marker(
                [-37.53753427, 143.8370132],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_977c04de241d4ebb9bab7d27bcf93057 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e7cc7eba23a4f099594e5ba1a8c9b83.setIcon(icon_977c04de241d4ebb9bab7d27bcf93057);


            marker_7e7cc7eba23a4f099594e5ba1a8c9b83.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_f3d915929588468494b67d2670a354a5 = L.marker(
                [-37.53398005, 143.9217247],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_680651864f3d4a1c9eebfc78ad53b703 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f3d915929588468494b67d2670a354a5.setIcon(icon_680651864f3d4a1c9eebfc78ad53b703);


            marker_f3d915929588468494b67d2670a354a5.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_30c584a413194be7bb0b37c40741f5ae = L.marker(
                [-37.49152389, 143.804017],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_487a3f30104b451c9835254b74278344 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_30c584a413194be7bb0b37c40741f5ae.setIcon(icon_487a3f30104b451c9835254b74278344);


            marker_30c584a413194be7bb0b37c40741f5ae.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_6958b49f9b54432ebd5e8c5937afd82f = L.marker(
                [-37.55045264, 143.7912021],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c556bedc3998461cbbd5af1ec51e1fc0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6958b49f9b54432ebd5e8c5937afd82f.setIcon(icon_c556bedc3998461cbbd5af1ec51e1fc0);


            marker_6958b49f9b54432ebd5e8c5937afd82f.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_65ed01cb46fa4b44825976a0c4cfbb07 = L.marker(
                [-37.60352301, 143.8221559],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_537fb4055afa4713bf18c42c7bf50e00 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_65ed01cb46fa4b44825976a0c4cfbb07.setIcon(icon_537fb4055afa4713bf18c42c7bf50e00);


            marker_65ed01cb46fa4b44825976a0c4cfbb07.bindTooltip(
                `<div>
                     Bonshaw
                 </div>`,
                {"sticky": true}
            );


            var marker_7143717d72f74bce99d0456a9a2b5942 = L.marker(
                [-37.64888695, 143.88380149999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ec3284b73ef242b19556d8526ad37dae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7143717d72f74bce99d0456a9a2b5942.setIcon(icon_ec3284b73ef242b19556d8526ad37dae);


            marker_7143717d72f74bce99d0456a9a2b5942.bindTooltip(
                `<div>
                     Buninyong
                 </div>`,
                {"sticky": true}
            );


            var marker_9ea1ca21de074589b29bde0694807575 = L.marker(
                [-37.58363223, 143.815834],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5893b00d39a54c78927aab79c3e1e5cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ea1ca21de074589b29bde0694807575.setIcon(icon_5893b00d39a54c78927aab79c3e1e5cb);


            marker_9ea1ca21de074589b29bde0694807575.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_15f43232a9fb4b7282497e87d738e1d0 = L.marker(
                [-37.55295284, 143.84860030000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c647e47805174dd0a0f2fbbeb6d25bca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15f43232a9fb4b7282497e87d738e1d0.setIcon(icon_c647e47805174dd0a0f2fbbeb6d25bca);


            marker_15f43232a9fb4b7282497e87d738e1d0.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_1ba020b501f84b888338b09dd1696f83 = L.marker(
                [-37.5493588, 143.7954237],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2d86ea97e63a497faa5c6cb88e10a94f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ba020b501f84b888338b09dd1696f83.setIcon(icon_2d86ea97e63a497faa5c6cb88e10a94f);


            marker_1ba020b501f84b888338b09dd1696f83.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_d5814b11d3f24fd4b64756a7056dbbc8 = L.marker(
                [-37.56487058, 143.88469609999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_569cfcbc089f4cfb9c59e520dcc728a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5814b11d3f24fd4b64756a7056dbbc8.setIcon(icon_569cfcbc089f4cfb9c59e520dcc728a8);


            marker_d5814b11d3f24fd4b64756a7056dbbc8.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_e76f9d4286ea4dce99c97fad1de3a882 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3007c272aee14622aa844a1931cc7d27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e76f9d4286ea4dce99c97fad1de3a882.setIcon(icon_3007c272aee14622aa844a1931cc7d27);


            marker_e76f9d4286ea4dce99c97fad1de3a882.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_afdca5abc619452693f9fe111f4c2673 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4698fa7b72414ef4b255a3591a0f003c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_afdca5abc619452693f9fe111f4c2673.setIcon(icon_4698fa7b72414ef4b255a3591a0f003c);


            marker_afdca5abc619452693f9fe111f4c2673.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_00aabdf691b74a838cb9c4f35dcc067a = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7041645912c840b99f45ad8621803c1e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00aabdf691b74a838cb9c4f35dcc067a.setIcon(icon_7041645912c840b99f45ad8621803c1e);


            marker_00aabdf691b74a838cb9c4f35dcc067a.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_1cea9b05e5924bef905963acb270f40b = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b8fb969702014fd2bf343637b94ac855 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1cea9b05e5924bef905963acb270f40b.setIcon(icon_b8fb969702014fd2bf343637b94ac855);


            marker_1cea9b05e5924bef905963acb270f40b.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_9b923456aaf44a89a8379b8e045181de = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d62a00c2da7c4642a48269dcf7e2721a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9b923456aaf44a89a8379b8e045181de.setIcon(icon_d62a00c2da7c4642a48269dcf7e2721a);


            marker_9b923456aaf44a89a8379b8e045181de.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_735120d0ec374a229aa3f9db0470da16 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2b70c08d7cc24d6ab1d1f6ce1ee6e2f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_735120d0ec374a229aa3f9db0470da16.setIcon(icon_2b70c08d7cc24d6ab1d1f6ce1ee6e2f4);


            marker_735120d0ec374a229aa3f9db0470da16.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_c060c13379c84ffc9cf6457c5bd45cb2 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_de52deeb1dfa41979a145f7348e7d63c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c060c13379c84ffc9cf6457c5bd45cb2.setIcon(icon_de52deeb1dfa41979a145f7348e7d63c);


            marker_c060c13379c84ffc9cf6457c5bd45cb2.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_3d893ea1cf51466292dbc96d95a49ef5 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7fa69e7fc228476aaba94f21240660b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d893ea1cf51466292dbc96d95a49ef5.setIcon(icon_7fa69e7fc228476aaba94f21240660b6);


            marker_3d893ea1cf51466292dbc96d95a49ef5.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_f2e346caae3347cd9e2c91ef9509f002 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_792a21a2565b4cdab131b9ba40d47685 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f2e346caae3347cd9e2c91ef9509f002.setIcon(icon_792a21a2565b4cdab131b9ba40d47685);


            marker_f2e346caae3347cd9e2c91ef9509f002.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_ac8b7523d4a644a48cee4e291430a003 = L.marker(
                [-37.56430895, 143.885753],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bbff0cefa2434dc5aa13055dd407541f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ac8b7523d4a644a48cee4e291430a003.setIcon(icon_bbff0cefa2434dc5aa13055dd407541f);


            marker_ac8b7523d4a644a48cee4e291430a003.bindTooltip(
                `<div>
                     Eureka
                 </div>`,
                {"sticky": true}
            );


            var marker_21a624559ab54f2e93ff314e4edb74d6 = L.marker(
                [-37.5966404, 143.8665747],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_eccb792d39fb4b009c6bdbb5c25ead24 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_21a624559ab54f2e93ff314e4edb74d6.setIcon(icon_eccb792d39fb4b009c6bdbb5c25ead24);


            marker_21a624559ab54f2e93ff314e4edb74d6.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_2381e769f6754506bec5b2f34d6d0ed1 = L.marker(
                [-37.61905514, 143.8857721],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c51fc9f1b6bd47549f42fda450733822 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2381e769f6754506bec5b2f34d6d0ed1.setIcon(icon_c51fc9f1b6bd47549f42fda450733822);


            marker_2381e769f6754506bec5b2f34d6d0ed1.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_b9ebcb7335ef4b04b12f0459d1d762b2 = L.marker(
                [-37.54485765, 143.8563515],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cf507e03eace4567bdaa49b8c801660e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b9ebcb7335ef4b04b12f0459d1d762b2.setIcon(icon_cf507e03eace4567bdaa49b8c801660e);


            marker_b9ebcb7335ef4b04b12f0459d1d762b2.bindTooltip(
                `<div>
                     Soldiers Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_0701c3c614cd463eabaee7de2851b4a5 = L.marker(
                [-37.54735539, 143.9088138],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_aec1d70d78e64b97a7f507cb3bfd32ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0701c3c614cd463eabaee7de2851b4a5.setIcon(icon_aec1d70d78e64b97a7f507cb3bfd32ef);


            marker_0701c3c614cd463eabaee7de2851b4a5.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_322e8621faca4495b4a51b9f4627c8f9 = L.marker(
                [-37.52636399, 143.8418301],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a91e1d514c0747d6b4c23e339bd4d096 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_322e8621faca4495b4a51b9f4627c8f9.setIcon(icon_a91e1d514c0747d6b4c23e339bd4d096);


            marker_322e8621faca4495b4a51b9f4627c8f9.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_ff806779a2ca4a8699a4029e89ca0a3f = L.marker(
                [-37.59370898, 143.876507],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_daa8bc88bf7d465baf7bddea88755c97 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff806779a2ca4a8699a4029e89ca0a3f.setIcon(icon_daa8bc88bf7d465baf7bddea88755c97);


            marker_ff806779a2ca4a8699a4029e89ca0a3f.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_a98f5d90fa004a92920fb436ced5b42b = L.marker(
                [-37.55131963, 143.7969563],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6247e65340bf4ca0b175a7b5eaf73e08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a98f5d90fa004a92920fb436ced5b42b.setIcon(icon_6247e65340bf4ca0b175a7b5eaf73e08);


            marker_a98f5d90fa004a92920fb436ced5b42b.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_f80f95cd4a444ae78e05493e7205a61d = L.marker(
                [-37.54225466, 143.8732918],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_282675841c754ae581baf9b621e9fc38 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f80f95cd4a444ae78e05493e7205a61d.setIcon(icon_282675841c754ae581baf9b621e9fc38);


            marker_f80f95cd4a444ae78e05493e7205a61d.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_2e62bf55355c4723a81702a9f9d0635e = L.marker(
                [-37.52227503, 143.87390580000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3f28b5f240de44ac879bf3f142c564b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e62bf55355c4723a81702a9f9d0635e.setIcon(icon_3f28b5f240de44ac879bf3f142c564b1);


            marker_2e62bf55355c4723a81702a9f9d0635e.bindTooltip(
                `<div>
                     Invermay
                 </div>`,
                {"sticky": true}
            );


            var marker_50d495facf0740fea120aa9d63ed3483 = L.marker(
                [-37.52983349, 143.8587436],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_93e830809d254809a16b573b87ceef6e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_50d495facf0740fea120aa9d63ed3483.setIcon(icon_93e830809d254809a16b573b87ceef6e);


            marker_50d495facf0740fea120aa9d63ed3483.bindTooltip(
                `<div>
                     Invermay Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d1df1a495a164bc49b091b48bc108382 = L.marker(
                [-37.52476588, 143.8386273],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6ef0f199119c4f9ebb54962a9c80f9ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d1df1a495a164bc49b091b48bc108382.setIcon(icon_6ef0f199119c4f9ebb54962a9c80f9ba);


            marker_d1df1a495a164bc49b091b48bc108382.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_a315ae1bdfda4a2380018dd5fa353d5f = L.marker(
                [-37.59351002, 143.83007990000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_73104bf6b08a46f2ba6658c26dfb7ffa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a315ae1bdfda4a2380018dd5fa353d5f.setIcon(icon_73104bf6b08a46f2ba6658c26dfb7ffa);


            marker_a315ae1bdfda4a2380018dd5fa353d5f.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_b518f2464c744a38ac624b5640eb3fb9 = L.marker(
                [-37.58282287, 143.8528993],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_17776d99e89c43a08fab4d70b9313d3e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b518f2464c744a38ac624b5640eb3fb9.setIcon(icon_17776d99e89c43a08fab4d70b9313d3e);


            marker_b518f2464c744a38ac624b5640eb3fb9.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_9c36260df6db489d912cc95acbe4fc3f = L.marker(
                [-37.5724222, 143.8401603],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c66d2aeb303e4852a156892ce22e1325 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9c36260df6db489d912cc95acbe4fc3f.setIcon(icon_c66d2aeb303e4852a156892ce22e1325);


            marker_9c36260df6db489d912cc95acbe4fc3f.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_88072b9f8ac8458681db20da15d79d06 = L.marker(
                [-37.57529948, 143.8747779],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4a67ce4a40aa41d38f99c65b6fb0b2bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88072b9f8ac8458681db20da15d79d06.setIcon(icon_4a67ce4a40aa41d38f99c65b6fb0b2bf);


            marker_88072b9f8ac8458681db20da15d79d06.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_6f435eeb4e6341ffb3ff402e10b8bd5a = L.marker(
                [-37.43480484, 143.7249584],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1e078c4d59154fe69a17763f84d809fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f435eeb4e6341ffb3ff402e10b8bd5a.setIcon(icon_1e078c4d59154fe69a17763f84d809fb);


            marker_6f435eeb4e6341ffb3ff402e10b8bd5a.bindTooltip(
                `<div>
                     Learmonth
                 </div>`,
                {"sticky": true}
            );


            var marker_05fcb47efc36419eb5b8134040172064 = L.marker(
                [-37.55024748, 143.8225395],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d3ace6bd8eca4670a1b6c159b4bff9ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_05fcb47efc36419eb5b8134040172064.setIcon(icon_d3ace6bd8eca4670a1b6c159b4bff9ff);


            marker_05fcb47efc36419eb5b8134040172064.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_55c0514874e64efaa03d814723fc5c4a = L.marker(
                [-37.55228448, 143.8229301],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_df1bea18a5e94050b2847514cc90f6b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_55c0514874e64efaa03d814723fc5c4a.setIcon(icon_df1bea18a5e94050b2847514cc90f6b3);


            marker_55c0514874e64efaa03d814723fc5c4a.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_1d6a4ff52ece4420abbc2d4f93dbf196 = L.marker(
                [-37.55567607, 143.83205719999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9919d50ea1ab4ffe99abf598b1c7b495 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d6a4ff52ece4420abbc2d4f93dbf196.setIcon(icon_9919d50ea1ab4ffe99abf598b1c7b495);


            marker_1d6a4ff52ece4420abbc2d4f93dbf196.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_0219ce6cbb7a4134b007099774c55935 = L.marker(
                [-37.54458055, 143.8346263],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8501f77411e449e7b0b8b4d0cf45d755 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0219ce6cbb7a4134b007099774c55935.setIcon(icon_8501f77411e449e7b0b8b4d0cf45d755);


            marker_0219ce6cbb7a4134b007099774c55935.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_7cf2d559832642ddbb1890e4b2c90af7 = L.marker(
                [-37.55545096, 143.84204],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ef40192b0af14d4b9241eb50e9daa6db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7cf2d559832642ddbb1890e4b2c90af7.setIcon(icon_ef40192b0af14d4b9241eb50e9daa6db);


            marker_7cf2d559832642ddbb1890e4b2c90af7.bindTooltip(
                `<div>
                     Lake Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_2fff22f2bfc24de986a22900f6b28f72 = L.marker(
                [-37.55764436, 143.8046099],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a8a40e3d6b694cc7a1a74082d1ec44ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2fff22f2bfc24de986a22900f6b28f72.setIcon(icon_a8a40e3d6b694cc7a1a74082d1ec44ab);


            marker_2fff22f2bfc24de986a22900f6b28f72.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_3a502d8476144e32aeb4cba7b95dd41e = L.marker(
                [-37.58413965, 143.8230174],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ca06157c86d740309172039e73f653e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3a502d8476144e32aeb4cba7b95dd41e.setIcon(icon_ca06157c86d740309172039e73f653e3);


            marker_3a502d8476144e32aeb4cba7b95dd41e.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_b50a982a8bf64845b4bdc665c84b2385 = L.marker(
                [-37.58440312, 143.822886],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_79d005cc684e40a08114f87d291e3689 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b50a982a8bf64845b4bdc665c84b2385.setIcon(icon_79d005cc684e40a08114f87d291e3689);


            marker_b50a982a8bf64845b4bdc665c84b2385.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_d257b08cb22b4ad09dcdf1d0cd4c2060 = L.marker(
                [-37.56577574, 143.8674611],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0d50cdab2ff34c4cbfc63bc1b480aa09 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d257b08cb22b4ad09dcdf1d0cd4c2060.setIcon(icon_0d50cdab2ff34c4cbfc63bc1b480aa09);


            marker_d257b08cb22b4ad09dcdf1d0cd4c2060.bindTooltip(
                `<div>
                     Bakery Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_b0b07384600547a7914934095f92cdec = L.marker(
                [-37.56577574, 143.8674611],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f887aa8627ca4715a1d147243abd7311 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b0b07384600547a7914934095f92cdec.setIcon(icon_f887aa8627ca4715a1d147243abd7311);


            marker_b0b07384600547a7914934095f92cdec.bindTooltip(
                `<div>
                     Bakery Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_59db8f48e9a24f46856e9ea798ccb686 = L.marker(
                [-37.55010601, 143.781139],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_420d58e188fe4e708a462c81ff191000 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_59db8f48e9a24f46856e9ea798ccb686.setIcon(icon_420d58e188fe4e708a462c81ff191000);


            marker_59db8f48e9a24f46856e9ea798ccb686.bindTooltip(
                `<div>
                     Lucas
                 </div>`,
                {"sticky": true}
            );


            var marker_c3bd2f0bfd074aa0926f96383da3a7c8 = L.marker(
                [-37.50075327, 143.810416],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_112c1df110994d069817d3c998109fec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c3bd2f0bfd074aa0926f96383da3a7c8.setIcon(icon_112c1df110994d069817d3c998109fec);


            marker_c3bd2f0bfd074aa0926f96383da3a7c8.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_38139f5135fa4291a5c669c3373cbe82 = L.marker(
                [-37.55085223, 143.8550656],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bc1c8ecc86034f6caf084ec22675922c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38139f5135fa4291a5c669c3373cbe82.setIcon(icon_bc1c8ecc86034f6caf084ec22675922c);


            marker_38139f5135fa4291a5c669c3373cbe82.bindTooltip(
                `<div>
                     Soldiers Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_a82e9e55278e4ef187198cf80ad65aeb = L.marker(
                [-37.52938081, 143.82262580000003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_62dd02b9cd4549b6aeeb5289d276e998 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a82e9e55278e4ef187198cf80ad65aeb.setIcon(icon_62dd02b9cd4549b6aeeb5289d276e998);


            marker_a82e9e55278e4ef187198cf80ad65aeb.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_56b03efd97514f9d91b968ec1dc34924 = L.marker(
                [-37.60788664, 143.86495390000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_795fe25857764f6093bf219f2567474c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_56b03efd97514f9d91b968ec1dc34924.setIcon(icon_795fe25857764f6093bf219f2567474c);


            marker_56b03efd97514f9d91b968ec1dc34924.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_0ecbb5124b1542afb5fb196520f2c779 = L.marker(
                [-37.54288954, 143.8629542],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d2e3b6cbed834579b88a699e86a7f32d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0ecbb5124b1542afb5fb196520f2c779.setIcon(icon_d2e3b6cbed834579b88a699e86a7f32d);


            marker_0ecbb5124b1542afb5fb196520f2c779.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_9f2d31e902ee4c0f8c6b6766eed74649 = L.marker(
                [-37.60308371, 143.8448448],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_21c01382ac0b48d98ab54c00dbcdacfa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9f2d31e902ee4c0f8c6b6766eed74649.setIcon(icon_21c01382ac0b48d98ab54c00dbcdacfa);


            marker_9f2d31e902ee4c0f8c6b6766eed74649.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_def7e0c2bdcf4b4e8d7426743f07a569 = L.marker(
                [-37.58509009, 143.8585873],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d785fef1054c480d9a2b8b5164b97e84 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_def7e0c2bdcf4b4e8d7426743f07a569.setIcon(icon_d785fef1054c480d9a2b8b5164b97e84);


            marker_def7e0c2bdcf4b4e8d7426743f07a569.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_52abd47ed6a6447ebd1832495d7508a1 = L.marker(
                [-37.526644299999994, 143.8128036],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5856af40923143d481655cf02ac91df2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_52abd47ed6a6447ebd1832495d7508a1.setIcon(icon_5856af40923143d481655cf02ac91df2);


            marker_52abd47ed6a6447ebd1832495d7508a1.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_69eebb97d9274cf5a617a180662f4d23 = L.marker(
                [-37.59165721, 143.8212242],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ff5e23e2dfe4428f807e3ae784abac1c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69eebb97d9274cf5a617a180662f4d23.setIcon(icon_ff5e23e2dfe4428f807e3ae784abac1c);


            marker_69eebb97d9274cf5a617a180662f4d23.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_2ef57a4f3e384476b56c5ee1274e7847 = L.marker(
                [-37.54030618, 143.8595315],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1a6c645431df40d2a2e338dd563fd88f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ef57a4f3e384476b56c5ee1274e7847.setIcon(icon_1a6c645431df40d2a2e338dd563fd88f);


            marker_2ef57a4f3e384476b56c5ee1274e7847.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_83f56ba2b8c04e2e9c5fdb2f36cb7458 = L.marker(
                [-37.53947901, 143.860245],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_72eff097bebd43ad98e01144511262a6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_83f56ba2b8c04e2e9c5fdb2f36cb7458.setIcon(icon_72eff097bebd43ad98e01144511262a6);


            marker_83f56ba2b8c04e2e9c5fdb2f36cb7458.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_1b481390c01d434888a4d10175ccb040 = L.marker(
                [-37.48050982, 143.7977043],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a20099ce643c410d95574360da72e445 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1b481390c01d434888a4d10175ccb040.setIcon(icon_a20099ce643c410d95574360da72e445);


            marker_1b481390c01d434888a4d10175ccb040.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_ff4da8ccc609476c8aab89ffca105256 = L.marker(
                [-37.52561691, 143.83052990000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_19e8f535abd24eccb6516d0ca33db5aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff4da8ccc609476c8aab89ffca105256.setIcon(icon_19e8f535abd24eccb6516d0ca33db5aa);


            marker_ff4da8ccc609476c8aab89ffca105256.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_aa018fca559243ff9a1eb4d5e064e34c = L.marker(
                [-37.58068689, 143.8335146],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_456c2c77538e4451832a221ce204ebdc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa018fca559243ff9a1eb4d5e064e34c.setIcon(icon_456c2c77538e4451832a221ce204ebdc);


            marker_aa018fca559243ff9a1eb4d5e064e34c.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_3689a5cefaf245c0a1e51300d9c577c2 = L.marker(
                [-37.60064498, 143.83094609999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6af26d6cc34c4eebb90e3824a40e8d56 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3689a5cefaf245c0a1e51300d9c577c2.setIcon(icon_6af26d6cc34c4eebb90e3824a40e8d56);


            marker_3689a5cefaf245c0a1e51300d9c577c2.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_e8c4e07785ba430cb6f7446102936159 = L.marker(
                [-37.57072302, 143.7827489],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_815210c920de4e85924cd5821dd2fa14 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e8c4e07785ba430cb6f7446102936159.setIcon(icon_815210c920de4e85924cd5821dd2fa14);


            marker_e8c4e07785ba430cb6f7446102936159.bindTooltip(
                `<div>
                     Cardigan
                 </div>`,
                {"sticky": true}
            );


            var marker_a7996996d4ed4a8daf4af4a2656ba347 = L.marker(
                [-37.57789261, 143.85179230000003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_73f16fa0b7c74fada98bbcf01839ef20 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7996996d4ed4a8daf4af4a2656ba347.setIcon(icon_73f16fa0b7c74fada98bbcf01839ef20);


            marker_a7996996d4ed4a8daf4af4a2656ba347.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_fbb2dc62dc284c8783f481622dbf5175 = L.marker(
                [-37.57757004, 143.8515421],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_71b8e1c10bc6433190d95783ebf35ce0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fbb2dc62dc284c8783f481622dbf5175.setIcon(icon_71b8e1c10bc6433190d95783ebf35ce0);


            marker_fbb2dc62dc284c8783f481622dbf5175.bindTooltip(
                `<div>
                     Mount Pleasant
                 </div>`,
                {"sticky": true}
            );


            var marker_53b22ac100274ecd80fac834e0f54099 = L.marker(
                [-37.5975068, 143.841464],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ffd500c255c44360970c94455a9115dc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53b22ac100274ecd80fac834e0f54099.setIcon(icon_ffd500c255c44360970c94455a9115dc);


            marker_53b22ac100274ecd80fac834e0f54099.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_6be7be7d80184dc0b0ebf4a48038116d = L.marker(
                [-37.57405919, 143.8587427],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e41a00f23aff47bea2859ff723ae342d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6be7be7d80184dc0b0ebf4a48038116d.setIcon(icon_e41a00f23aff47bea2859ff723ae342d);


            marker_6be7be7d80184dc0b0ebf4a48038116d.bindTooltip(
                `<div>
                     Golden Point
                 </div>`,
                {"sticky": true}
            );


            var marker_7df996e016f34caab671b357781c86c9 = L.marker(
                [-37.5494499, 143.8672449],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ab2af50394b0422594a10f3860eb40c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7df996e016f34caab671b357781c86c9.setIcon(icon_ab2af50394b0422594a10f3860eb40c7);


            marker_7df996e016f34caab671b357781c86c9.bindTooltip(
                `<div>
                     Black Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_2ab90d0e749047f499405e8f2b068c7b = L.marker(
                [-37.57037261, 143.875678],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_95aea3bc164043759829654e05190067 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ab90d0e749047f499405e8f2b068c7b.setIcon(icon_95aea3bc164043759829654e05190067);


            marker_2ab90d0e749047f499405e8f2b068c7b.bindTooltip(
                `<div>
                     Ballarat East
                 </div>`,
                {"sticky": true}
            );


            var marker_781a7f072e804cf79a1a7ced25c6eb81 = L.marker(
                [-37.53425381, 143.87085249999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b4ce60d13ae14105bfe49f153d2bd354 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_781a7f072e804cf79a1a7ced25c6eb81.setIcon(icon_b4ce60d13ae14105bfe49f153d2bd354);


            marker_781a7f072e804cf79a1a7ced25c6eb81.bindTooltip(
                `<div>
                     Ballarat North
                 </div>`,
                {"sticky": true}
            );


            var marker_7be3dfc159da49829602c4e79a2e6001 = L.marker(
                [-37.57181197, 143.8350634],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_51665aa9a128490186e5c70e20def3c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7be3dfc159da49829602c4e79a2e6001.setIcon(icon_51665aa9a128490186e5c70e20def3c0);


            marker_7be3dfc159da49829602c4e79a2e6001.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_f8634d4374e64512a16aa8502a32f4fc = L.marker(
                [-37.52426447, 143.8580534],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_77eeb7d8eac54e9cac526cb082cf9e28 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f8634d4374e64512a16aa8502a32f4fc.setIcon(icon_77eeb7d8eac54e9cac526cb082cf9e28);


            marker_f8634d4374e64512a16aa8502a32f4fc.bindTooltip(
                `<div>
                     Invermay Park
                 </div>`,
                {"sticky": true}
            );


            var marker_de455af83d8043ef92729214aa069c76 = L.marker(
                [-37.53045394, 143.8263398],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dba17c819d794be19fb55b3a64500686 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de455af83d8043ef92729214aa069c76.setIcon(icon_dba17c819d794be19fb55b3a64500686);


            marker_de455af83d8043ef92729214aa069c76.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_7fdedc7d9c0d4bee9d48d1fa3eff890b = L.marker(
                [-37.55580559, 143.8851841],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_71c1011891a849ad9ddd21d7531933ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fdedc7d9c0d4bee9d48d1fa3eff890b.setIcon(icon_71c1011891a849ad9ddd21d7531933ef);


            marker_7fdedc7d9c0d4bee9d48d1fa3eff890b.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_2a3c1d1b3bc14bfe8dfddae7b2a9a464 = L.marker(
                [-37.62972904, 143.87507309999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d5a531e183c640e08543f0f56a948b6d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2a3c1d1b3bc14bfe8dfddae7b2a9a464.setIcon(icon_d5a531e183c640e08543f0f56a948b6d);


            marker_2a3c1d1b3bc14bfe8dfddae7b2a9a464.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_5849131521b24a2c9ae6708f58b6626c = L.marker(
                [-37.59540367, 143.8688509],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_41b99582d73d4a359915c454192d5c00 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5849131521b24a2c9ae6708f58b6626c.setIcon(icon_41b99582d73d4a359915c454192d5c00);


            marker_5849131521b24a2c9ae6708f58b6626c.bindTooltip(
                `<div>
                     Mount Clear
                 </div>`,
                {"sticky": true}
            );


            var marker_60a6efdba21f493c972c8661bf7e3fd1 = L.marker(
                [-37.53580263, 143.8282657],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b9aec8dd49244e72963d89c94d781ca1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60a6efdba21f493c972c8661bf7e3fd1.setIcon(icon_b9aec8dd49244e72963d89c94d781ca1);


            marker_60a6efdba21f493c972c8661bf7e3fd1.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_e7781a1f0b09495ea2afe370b8aa103c = L.marker(
                [-37.58810401, 143.86468330000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6f8d83514314417c81bc7cfa59bb211c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7781a1f0b09495ea2afe370b8aa103c.setIcon(icon_6f8d83514314417c81bc7cfa59bb211c);


            marker_e7781a1f0b09495ea2afe370b8aa103c.bindTooltip(
                `<div>
                     Canadian
                 </div>`,
                {"sticky": true}
            );


            var marker_0e91ec5d5ee74c69b083946b50e68bcd = L.marker(
                [-37.56078938, 143.8093102],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c51c34b3d6514e2994adfa759cf0b769 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e91ec5d5ee74c69b083946b50e68bcd.setIcon(icon_c51c34b3d6514e2994adfa759cf0b769);


            marker_0e91ec5d5ee74c69b083946b50e68bcd.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_dead818e831b43519c1f77ab9794b955 = L.marker(
                [-37.52892427, 143.8302762],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9462d5c6c330415d941e173b39123316 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dead818e831b43519c1f77ab9794b955.setIcon(icon_9462d5c6c330415d941e173b39123316);


            marker_dead818e831b43519c1f77ab9794b955.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_cb259f11dacb4c889167cef63c0a6472 = L.marker(
                [-37.49895706, 143.8035874],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0ccfd9531434dbcbf0d27aee6a652ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cb259f11dacb4c889167cef63c0a6472.setIcon(icon_f0ccfd9531434dbcbf0d27aee6a652ee);


            marker_cb259f11dacb4c889167cef63c0a6472.bindTooltip(
                `<div>
                     Miners Rest
                 </div>`,
                {"sticky": true}
            );


            var marker_ae7a84c703034a8a8b910b6f9ca85314 = L.marker(
                [-37.57936785, 143.8058994],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c1593f76fd544a90bdc1118af18bda41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ae7a84c703034a8a8b910b6f9ca85314.setIcon(icon_c1593f76fd544a90bdc1118af18bda41);


            marker_ae7a84c703034a8a8b910b6f9ca85314.bindTooltip(
                `<div>
                     Winter Valley
                 </div>`,
                {"sticky": true}
            );


            var marker_a87da85fa10140cf89db4d4e6a338794 = L.marker(
                [-37.57148262, 143.8371104],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2418254b223c411590a0f4d9f3edc932 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a87da85fa10140cf89db4d4e6a338794.setIcon(icon_2418254b223c411590a0f4d9f3edc932);


            marker_a87da85fa10140cf89db4d4e6a338794.bindTooltip(
                `<div>
                     Redan
                 </div>`,
                {"sticky": true}
            );


            var marker_a240e70c7ffc43c79954b19543d3af52 = L.marker(
                [-37.58345442, 143.8291758],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5ca3bff7cbf643b582c79571f1d4d2a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a240e70c7ffc43c79954b19543d3af52.setIcon(icon_5ca3bff7cbf643b582c79571f1d4d2a5);


            marker_a240e70c7ffc43c79954b19543d3af52.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_dc31ea0c9e5c4975bd25617cc1ec6b5c = L.marker(
                [-37.55765408, 143.81564509999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_36de4513922e4fcab29bc75d4a5e9fd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc31ea0c9e5c4975bd25617cc1ec6b5c.setIcon(icon_36de4513922e4fcab29bc75d4a5e9fd7);


            marker_dc31ea0c9e5c4975bd25617cc1ec6b5c.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_315f192111fa4c7984f4c77e77e65b46 = L.marker(
                [-37.59333345, 143.8261556],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b28f5652484341ffa0ac5ca139999eed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_315f192111fa4c7984f4c77e77e65b46.setIcon(icon_b28f5652484341ffa0ac5ca139999eed);


            marker_315f192111fa4c7984f4c77e77e65b46.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_44d9057f00c84be986d7b0d0c523bc2d = L.marker(
                [-37.56156389, 143.8271647],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c3c17c4521914e4e9c20b87505eb402f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_44d9057f00c84be986d7b0d0c523bc2d.setIcon(icon_c3c17c4521914e4e9c20b87505eb402f);


            marker_44d9057f00c84be986d7b0d0c523bc2d.bindTooltip(
                `<div>
                     Newington
                 </div>`,
                {"sticky": true}
            );


            var marker_77ed7fae860846e28fb7f39d4da0839b = L.marker(
                [-37.558349, 143.82349399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a8b736eb868a4fb382cf3682a0a910f7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_77ed7fae860846e28fb7f39d4da0839b.setIcon(icon_a8b736eb868a4fb382cf3682a0a910f7);


            marker_77ed7fae860846e28fb7f39d4da0839b.bindTooltip(
                `<div>
                     Newington
                 </div>`,
                {"sticky": true}
            );


            var marker_a63ee18935894d63a81351869ccc8a07 = L.marker(
                [-37.55809903, 143.822685],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9741418950624c1687e35cae0a769b88 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a63ee18935894d63a81351869ccc8a07.setIcon(icon_9741418950624c1687e35cae0a769b88);


            marker_a63ee18935894d63a81351869ccc8a07.bindTooltip(
                `<div>
                     Newington
                 </div>`,
                {"sticky": true}
            );


            var marker_ab3f094b213942ddb3ecff0b74d4e3b5 = L.marker(
                [-37.59885425, 143.8337424],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f9a10cd9c9eb4dd883151f23cf0aba78 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ab3f094b213942ddb3ecff0b74d4e3b5.setIcon(icon_f9a10cd9c9eb4dd883151f23cf0aba78);


            marker_ab3f094b213942ddb3ecff0b74d4e3b5.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_e9a18ba675d545bfb9d7251402c5e65f = L.marker(
                [-37.55292088, 143.8088645],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_34b11e64bfff49c99f3a4f7d0b5a8d71 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e9a18ba675d545bfb9d7251402c5e65f.setIcon(icon_34b11e64bfff49c99f3a4f7d0b5a8d71);


            marker_e9a18ba675d545bfb9d7251402c5e65f.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_15f253aa5ec140b7bc0cc0ecf245eb08 = L.marker(
                [-37.59295922, 143.8388033],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5c60496128204cb4a9e3204f0a2c556e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15f253aa5ec140b7bc0cc0ecf245eb08.setIcon(icon_5c60496128204cb4a9e3204f0a2c556e);


            marker_15f253aa5ec140b7bc0cc0ecf245eb08.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_707d5e6fa5d54f9f9e7c10542defd12f = L.marker(
                [-37.59298284, 143.838256],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4d17787a174a41c19b66753eba175975 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_707d5e6fa5d54f9f9e7c10542defd12f.setIcon(icon_4d17787a174a41c19b66753eba175975);


            marker_707d5e6fa5d54f9f9e7c10542defd12f.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_37705663d5094ff6972ea510d7a00177 = L.marker(
                [-37.59313413, 143.8388067],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_97b057a59fea48068c7f79f0eae63c02 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37705663d5094ff6972ea510d7a00177.setIcon(icon_97b057a59fea48068c7f79f0eae63c02);


            marker_37705663d5094ff6972ea510d7a00177.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_788be61d4e224c66bdea313d681bdefc = L.marker(
                [-37.59291141, 143.8384048],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e3ba01ec701a4fdfa93172cd64ddeb29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_788be61d4e224c66bdea313d681bdefc.setIcon(icon_e3ba01ec701a4fdfa93172cd64ddeb29);


            marker_788be61d4e224c66bdea313d681bdefc.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_4472f53429234ba0b84ed09b66073e1b = L.marker(
                [-37.61085085, 143.8375056],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6cab3d18099a4cd28e410f5d986ab99d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4472f53429234ba0b84ed09b66073e1b.setIcon(icon_6cab3d18099a4cd28e410f5d986ab99d);


            marker_4472f53429234ba0b84ed09b66073e1b.bindTooltip(
                `<div>
                     Sebastopol
                 </div>`,
                {"sticky": true}
            );


            var marker_0e845df65dc14747b9bf3dd3eb75de4d = L.marker(
                [-37.55195912, 143.8644584],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f9109a1fb9a9461b8ab9c637f4766bfd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e845df65dc14747b9bf3dd3eb75de4d.setIcon(icon_f9109a1fb9a9461b8ab9c637f4766bfd);


            marker_0e845df65dc14747b9bf3dd3eb75de4d.bindTooltip(
                `<div>
                     Black Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_b740e2accbce4431b1bb0aed9d0d6d74 = L.marker(
                [-37.51978147, 143.8073362],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6e8a4134fd9346e5878a691011369e32 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b740e2accbce4431b1bb0aed9d0d6d74.setIcon(icon_6e8a4134fd9346e5878a691011369e32);


            marker_b740e2accbce4431b1bb0aed9d0d6d74.bindTooltip(
                `<div>
                     Mitchell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_fb690b09feaa4fd68f43edc65b87ff3b = L.marker(
                [-37.52910783, 143.8416138],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_454e9478ba3246a6afcf289fa508912e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fb690b09feaa4fd68f43edc65b87ff3b.setIcon(icon_454e9478ba3246a6afcf289fa508912e);


            marker_fb690b09feaa4fd68f43edc65b87ff3b.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_55fa155f15f34a4e92868234a46522d8 = L.marker(
                [-37.55068677, 143.8022813],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_491d7f787f3c4b0297b03b5cbfa6cd30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_55fa155f15f34a4e92868234a46522d8.setIcon(icon_491d7f787f3c4b0297b03b5cbfa6cd30);


            marker_55fa155f15f34a4e92868234a46522d8.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_85568ea5a9264d9b865804e01efa504c = L.marker(
                [-37.55647929999999, 143.87088310000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_21c3452d727b4f919b24672346b0f67e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85568ea5a9264d9b865804e01efa504c.setIcon(icon_21c3452d727b4f919b24672346b0f67e);


            marker_85568ea5a9264d9b865804e01efa504c.bindTooltip(
                `<div>
                     Ballarat East
                 </div>`,
                {"sticky": true}
            );


            var marker_6239113326e144468743cea8e3e48b7e = L.marker(
                [-37.53136888, 143.8228092],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4ce31f05852f4800b31e20305cb8b4c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6239113326e144468743cea8e3e48b7e.setIcon(icon_4ce31f05852f4800b31e20305cb8b4c9);


            marker_6239113326e144468743cea8e3e48b7e.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_31639e97f8f9441d85b2b9332113d57c = L.marker(
                [-37.52563889, 143.81954299999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_315477108ef8434c865c0367efd60afe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_31639e97f8f9441d85b2b9332113d57c.setIcon(icon_315477108ef8434c865c0367efd60afe);


            marker_31639e97f8f9441d85b2b9332113d57c.bindTooltip(
                `<div>
                     Wendouree
                 </div>`,
                {"sticky": true}
            );


            var marker_b6b91600202949b29ad54daac49e9688 = L.marker(
                [-37.56591729, 143.838382],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b2215076c810439987eb7b402c6d69f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b6b91600202949b29ad54daac49e9688.setIcon(icon_b2215076c810439987eb7b402c6d69f2);


            marker_b6b91600202949b29ad54daac49e9688.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_efa2e17059f8499fa886dcc9b422d3b0 = L.marker(
                [-37.58735159, 143.817426],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_24978a0cea634c55962687aae092100b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_efa2e17059f8499fa886dcc9b422d3b0.setIcon(icon_24978a0cea634c55962687aae092100b);


            marker_efa2e17059f8499fa886dcc9b422d3b0.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_c391a0129af0443cb6772f0b81586677 = L.marker(
                [-37.62425006, 143.8750111],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9510b069e45a467f81bb2ef98c6a02d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c391a0129af0443cb6772f0b81586677.setIcon(icon_9510b069e45a467f81bb2ef98c6a02d1);


            marker_c391a0129af0443cb6772f0b81586677.bindTooltip(
                `<div>
                     Mount Helen
                 </div>`,
                {"sticky": true}
            );


            var marker_baaa832c273e4263b43711fa55545f4f = L.marker(
                [-37.54179715, 143.8836348],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_557a35fe723b4f95a32fb80918a457b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_baaa832c273e4263b43711fa55545f4f.setIcon(icon_557a35fe723b4f95a32fb80918a457b1);


            marker_baaa832c273e4263b43711fa55545f4f.bindTooltip(
                `<div>
                     Nerrina
                 </div>`,
                {"sticky": true}
            );


            var marker_37acb1206eca4de398956e43e2e0651e = L.marker(
                [-37.54677157, 143.9166397],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4f228dc3168d41bca331ea9cd6141146 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37acb1206eca4de398956e43e2e0651e.setIcon(icon_4f228dc3168d41bca331ea9cd6141146);


            marker_37acb1206eca4de398956e43e2e0651e.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_d75c7dabbf714ebcbd686b2bd4d7de1f = L.marker(
                [-37.57941904, 143.798408],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_344f3e996cae4fb597cb8e056d020bbf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d75c7dabbf714ebcbd686b2bd4d7de1f.setIcon(icon_344f3e996cae4fb597cb8e056d020bbf);


            marker_d75c7dabbf714ebcbd686b2bd4d7de1f.bindTooltip(
                `<div>
                     Winter Valley
                 </div>`,
                {"sticky": true}
            );


            var marker_ad7403face8e47cc98a34ee1d5d861cc = L.marker(
                [-37.556695, 143.79242299999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3d83092cfc2041b89d493063cbda3613 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad7403face8e47cc98a34ee1d5d861cc.setIcon(icon_3d83092cfc2041b89d493063cbda3613);


            marker_ad7403face8e47cc98a34ee1d5d861cc.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_4c7c361981354519ba577cd31984dbf9 = L.marker(
                [-37.546657, 143.9165829],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7e18727831aa457d85606f9a19f238a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4c7c361981354519ba577cd31984dbf9.setIcon(icon_7e18727831aa457d85606f9a19f238a0);


            marker_4c7c361981354519ba577cd31984dbf9.bindTooltip(
                `<div>
                     Brown Hill
                 </div>`,
                {"sticky": true}
            );


            var marker_729d1909647641febe1449ce1e02c8f7 = L.marker(
                [-37.56244356, 143.862324],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3b5a0d06a82b4861b4acfb6417c86c34 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_729d1909647641febe1449ce1e02c8f7.setIcon(icon_3b5a0d06a82b4861b4acfb6417c86c34);


            marker_729d1909647641febe1449ce1e02c8f7.bindTooltip(
                `<div>
                     Ballarat Central
                 </div>`,
                {"sticky": true}
            );


            var marker_ed481e4de5484a40a65fa17cf6823f85 = L.marker(
                [-37.592338, 143.812376],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4037bff0c0c8490f8e68df60ce03c68b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ed481e4de5484a40a65fa17cf6823f85.setIcon(icon_4037bff0c0c8490f8e68df60ce03c68b);


            marker_ed481e4de5484a40a65fa17cf6823f85.bindTooltip(
                `<div>
                     Delacombe
                 </div>`,
                {"sticky": true}
            );


            var marker_9215849c448844b1a32587309804a71f = L.marker(
                [-37.548656, 143.809496],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f509f8ea26f54a8582461a8fe9d82710 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9215849c448844b1a32587309804a71f.setIcon(icon_f509f8ea26f54a8582461a8fe9d82710);


            marker_9215849c448844b1a32587309804a71f.bindTooltip(
                `<div>
                     Alfredton
                 </div>`,
                {"sticky": true}
            );


            var marker_ff7cdf26c7c641ffad3bd984f4908c8b = L.marker(
                [-37.56557712, 143.86282849999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_86ae915bd88d4863a59a8304b474e8b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff7cdf26c7c641ffad3bd984f4908c8b.setIcon(icon_86ae915bd88d4863a59a8304b474e8b5);


            marker_ff7cdf26c7c641ffad3bd984f4908c8b.bindTooltip(
                `<div>
                     Magpie
                 </div>`,
                {"sticky": true}
            );


            var marker_4d1ddb31ab8549ab85c694cf371ff4ab = L.marker(
                [-37.79893626, 144.94047859999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_821371e955774c3b8d6e9da423f7d58b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d1ddb31ab8549ab85c694cf371ff4ab.setIcon(icon_821371e955774c3b8d6e9da423f7d58b);


            marker_4d1ddb31ab8549ab85c694cf371ff4ab.bindTooltip(
                `<div>
                     North Melbourne Recreation Reserve Multi Purpose Court
                 </div>`,
                {"sticky": true}
            );


            var marker_784aba63b5ae44bd99aa9477220bcfc9 = L.marker(
                [-37.81168723, 144.98181100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3438bbadc98c4e5cb8a7873744868048 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_784aba63b5ae44bd99aa9477220bcfc9.setIcon(icon_3438bbadc98c4e5cb8a7873744868048);


            marker_784aba63b5ae44bd99aa9477220bcfc9.bindTooltip(
                `<div>
                     Fitzroy Gardens Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_740f24b5eb0d4ad0a155887684b7bedf = L.marker(
                [-37.82589894, 144.9686158],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_07d5f786e1ca4ba896cc70933c93764b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_740f24b5eb0d4ad0a155887684b7bedf.setIcon(icon_07d5f786e1ca4ba896cc70933c93764b);


            marker_740f24b5eb0d4ad0a155887684b7bedf.bindTooltip(
                `<div>
                     Grant Street Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_088e54c8658d46e48d970c28c7afe2e5 = L.marker(
                [-37.82193098, 144.94716100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6c31ac9722e745e689c03babe4085678 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_088e54c8658d46e48d970c28c7afe2e5.setIcon(icon_6c31ac9722e745e689c03babe4085678);


            marker_088e54c8658d46e48d970c28c7afe2e5.bindTooltip(
                `<div>
                     Docklands Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_199732e63e454f67b307cc4f0ceeba66 = L.marker(
                [-37.82011229, 144.944909],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_225edfd1eef3486cba055992b5507b60 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_199732e63e454f67b307cc4f0ceeba66.setIcon(icon_225edfd1eef3486cba055992b5507b60);


            marker_199732e63e454f67b307cc4f0ceeba66.bindTooltip(
                `<div>
                     Victoria Green Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_be0f8b25014042dea08dce43ec7f147a = L.marker(
                [-37.78908097, 144.92837],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b776d7d52a0942fdb63d45c4ea54323e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_be0f8b25014042dea08dce43ec7f147a.setIcon(icon_b776d7d52a0942fdb63d45c4ea54323e);


            marker_be0f8b25014042dea08dce43ec7f147a.bindTooltip(
                `<div>
                     Kensington Hall Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6ae9f62aaba241469bdf2d4406ad5d84 = L.marker(
                [-37.79630478, 144.97275390000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c4a248dd991d40fba77e604382826984 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6ae9f62aaba241469bdf2d4406ad5d84.setIcon(icon_c4a248dd991d40fba77e604382826984);


            marker_6ae9f62aaba241469bdf2d4406ad5d84.bindTooltip(
                `<div>
                     Canning and Palmerston Streets Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_60d4337a08834271a680f2afe5951cc8 = L.marker(
                [-37.83876575, 144.9848819],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5f69d53cb21b4766843ba23f9b52b5e4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60d4337a08834271a680f2afe5951cc8.setIcon(icon_5f69d53cb21b4766843ba23f9b52b5e4);


            marker_60d4337a08834271a680f2afe5951cc8.bindTooltip(
                `<div>
                     Fawkner Park North East
                 </div>`,
                {"sticky": true}
            );


            var marker_8655a9695ecb4580924555ce0ffc453c = L.marker(
                [-37.82014296, 144.97301159999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e364f49f24314857bbc44f2f670dce2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8655a9695ecb4580924555ce0ffc453c.setIcon(icon_e364f49f24314857bbc44f2f670dce2c);


            marker_8655a9695ecb4580924555ce0ffc453c.bindTooltip(
                `<div>
                     Riverslide Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_6ff2fa65e4d046f6b88b86f0f657c7ad = L.marker(
                [-37.79548675, 144.9308347],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a94e1e0bbc594060b808a696520057ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6ff2fa65e4d046f6b88b86f0f657c7ad.setIcon(icon_a94e1e0bbc594060b808a696520057ec);


            marker_6ff2fa65e4d046f6b88b86f0f657c7ad.bindTooltip(
                `<div>
                     Bellair Street Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_621f050998cc4d5294b6c512e8fa6a58 = L.marker(
                [-37.78131234, 144.9621013],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0197f07b6ca2475589b7a44831c99c60 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_621f050998cc4d5294b6c512e8fa6a58.setIcon(icon_0197f07b6ca2475589b7a44831c99c60);


            marker_621f050998cc4d5294b6c512e8fa6a58.bindTooltip(
                `<div>
                     Princes Park North Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_86f2596eb598459b8f2a270e49326209 = L.marker(
                [-37.82019174, 144.9407585],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_60fe4226de234a1995a3b647bf839111 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_86f2596eb598459b8f2a270e49326209.setIcon(icon_60fe4226de234a1995a3b647bf839111);


            marker_86f2596eb598459b8f2a270e49326209.bindTooltip(
                `<div>
                     Buluk Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_16d322d00e2a4c83aaf9a2d2d2b6ac15 = L.marker(
                [-37.79658068, 144.9205615],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5642248780b64df082b2fd5525a2fa60 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_16d322d00e2a4c83aaf9a2d2d2b6ac15.setIcon(icon_5642248780b64df082b2fd5525a2fa60);


            marker_16d322d00e2a4c83aaf9a2d2d2b6ac15.bindTooltip(
                `<div>
                     Mercantile Parade and Tankard Street Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_88b625109f294becab90c69318dd69a3 = L.marker(
                [-37.78550893, 144.96289130000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_188cbe956ae14a23899aa1c398b5fdb6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88b625109f294becab90c69318dd69a3.setIcon(icon_188cbe956ae14a23899aa1c398b5fdb6);


            marker_88b625109f294becab90c69318dd69a3.bindTooltip(
                `<div>
                     Princes Park South Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1db7a1d5645c44838d24839ffe47b863 = L.marker(
                [-37.80285546, 144.9625853],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5f8f150a1ec34c25b61fc87ce7e210d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1db7a1d5645c44838d24839ffe47b863.setIcon(icon_5f8f150a1ec34c25b61fc87ce7e210d6);


            marker_1db7a1d5645c44838d24839ffe47b863.bindTooltip(
                `<div>
                     Lincoln Square Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_cc34f541f20948cc95d6b845e63c62a6 = L.marker(
                [-37.79534127, 144.9521257],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f00c3741f8454191a90d29197222fe93 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cc34f541f20948cc95d6b845e63c62a6.setIcon(icon_f00c3741f8454191a90d29197222fe93);


            marker_cc34f541f20948cc95d6b845e63c62a6.bindTooltip(
                `<div>
                     NaturePlay Playground Royal Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8a31312d84ce43e9b53c8adf6da2fa48 = L.marker(
                [-37.79345555, 144.9400371],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b3e4a78ce1eb4ebf8399528ee88ef329 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8a31312d84ce43e9b53c8adf6da2fa48.setIcon(icon_b3e4a78ce1eb4ebf8399528ee88ef329);


            marker_8a31312d84ce43e9b53c8adf6da2fa48.bindTooltip(
                `<div>
                     North Melbourne Community Centre Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_141af6cd65c341cf91cb209d05fe1f05 = L.marker(
                [-37.80945929, 144.95476599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_52669d2311704c69896e894ce7165fc8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_141af6cd65c341cf91cb209d05fe1f05.setIcon(icon_52669d2311704c69896e894ce7165fc8);


            marker_141af6cd65c341cf91cb209d05fe1f05.bindTooltip(
                `<div>
                     Flagstaff Gardens Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a7d3e4e101ef414b8e7ce5aa0bcdcffe = L.marker(
                [-37.81806928, 144.9716335],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3416c040193d4c56985e4e5c59e22029 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7d3e4e101ef414b8e7ce5aa0bcdcffe.setIcon(icon_3416c040193d4c56985e4e5c59e22029);


            marker_a7d3e4e101ef414b8e7ce5aa0bcdcffe.bindTooltip(
                `<div>
                     Birrarung Marr Artplay
                 </div>`,
                {"sticky": true}
            );


            var marker_7312607977cf4097be1c26110a806001 = L.marker(
                [-37.79536635, 144.9208128],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_21299f69c07342cb8ce0f97957a0e968 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7312607977cf4097be1c26110a806001.setIcon(icon_21299f69c07342cb8ce0f97957a0e968);


            marker_7312607977cf4097be1c26110a806001.bindTooltip(
                `<div>
                     Mercantile Parade and Newman Street Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_116fea66210d414fa6aa71c62227c47a = L.marker(
                [-37.79870198, 144.9439624],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_98f1c13f54e74bd79d00ca91d36253a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_116fea66210d414fa6aa71c62227c47a.setIcon(icon_98f1c13f54e74bd79d00ca91d36253a4);


            marker_116fea66210d414fa6aa71c62227c47a.bindTooltip(
                `<div>
                     Gardiner Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_60ae86836582433286bdae5d4faa1975 = L.marker(
                [-37.82300844, 144.94128600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7446ea16dbbd4425b2dac7652ff5b055 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_60ae86836582433286bdae5d4faa1975.setIcon(icon_7446ea16dbbd4425b2dac7652ff5b055);


            marker_60ae86836582433286bdae5d4faa1975.bindTooltip(
                `<div>
                     Point Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_bcc39286d66840729f11ad7236695d38 = L.marker(
                [-37.79826744, 144.9213692],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7c939782c1f345e4a04304e1902e5c2f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bcc39286d66840729f11ad7236695d38.setIcon(icon_7c939782c1f345e4a04304e1902e5c2f);


            marker_bcc39286d66840729f11ad7236695d38.bindTooltip(
                `<div>
                     Holland Park Extreme Sports Precinct
                 </div>`,
                {"sticky": true}
            );


            var marker_017ae21a754f4e1f8fad079d9af7f5a3 = L.marker(
                [-37.83910067, 144.98038019999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7c41085fc09b4cb0a27b0b5018f9b554 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_017ae21a754f4e1f8fad079d9af7f5a3.setIcon(icon_7c41085fc09b4cb0a27b0b5018f9b554);


            marker_017ae21a754f4e1f8fad079d9af7f5a3.bindTooltip(
                `<div>
                     Fawkner Park Toddler Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_c3bdabae8c3648f6813ccfb0bc0301df = L.marker(
                [-37.79518528, 144.969754],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6372cef2582247ecbd47ee1751e13300 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c3bdabae8c3648f6813ccfb0bc0301df.setIcon(icon_6372cef2582247ecbd47ee1751e13300);


            marker_c3bdabae8c3648f6813ccfb0bc0301df.bindTooltip(
                `<div>
                     Neill Street Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_001563a6d8c04504be0f6de6f1485ee8 = L.marker(
                [-37.79613164, 144.926748],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f8903f06bbad4ce4bac098fda7ca9d5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_001563a6d8c04504be0f6de6f1485ee8.setIcon(icon_f8903f06bbad4ce4bac098fda7ca9d5d);


            marker_001563a6d8c04504be0f6de6f1485ee8.bindTooltip(
                `<div>
                     Warun Biik Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a041c61f23314060a3d17d6e0b892ee1 = L.marker(
                [-37.77979069, 144.9398302],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_305e903706034df2ac290e7897240b42 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a041c61f23314060a3d17d6e0b892ee1.setIcon(icon_305e903706034df2ac290e7897240b42);


            marker_a041c61f23314060a3d17d6e0b892ee1.bindTooltip(
                `<div>
                     Galada Avenue Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_69bca9e0ca5746acb3f361cf72358d6f = L.marker(
                [-37.79381593, 144.92350580000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_49260036eb644d08b6f5cc090d7359bd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69bca9e0ca5746acb3f361cf72358d6f.setIcon(icon_49260036eb644d08b6f5cc090d7359bd);


            marker_69bca9e0ca5746acb3f361cf72358d6f.bindTooltip(
                `<div>
                     Bayswater Road Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c1c76499f8314718bddaf4a5e16811c4 = L.marker(
                [-37.79464314, 144.9191093],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7c2350014bbf431784e4566002ca5d1d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c1c76499f8314718bddaf4a5e16811c4.setIcon(icon_7c2350014bbf431784e4566002ca5d1d);


            marker_c1c76499f8314718bddaf4a5e16811c4.bindTooltip(
                `<div>
                     The Crescent Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e292230e9f134292ae0d3181fb4018aa = L.marker(
                [-37.80200278, 144.9708559],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1f83da2ef1c24c469c7d6ba436b99ec3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e292230e9f134292ae0d3181fb4018aa.setIcon(icon_1f83da2ef1c24c469c7d6ba436b99ec3);


            marker_e292230e9f134292ae0d3181fb4018aa.bindTooltip(
                `<div>
                     Carlton Gardens Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_700e2c4a1328432eacf71f1264d36c73 = L.marker(
                [-37.7966018, 144.9526638],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_47f452a15ebe45dda1e4befd427e7499 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_700e2c4a1328432eacf71f1264d36c73.setIcon(icon_47f452a15ebe45dda1e4befd427e7499);


            marker_700e2c4a1328432eacf71f1264d36c73.bindTooltip(
                `<div>
                     Ievers Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5072c62694e643848d938671f8024700 = L.marker(
                [-37.81624, 144.9337296],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_50915159c8c546bbbe625a92189631d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5072c62694e643848d938671f8024700.setIcon(icon_50915159c8c546bbbe625a92189631d6);


            marker_5072c62694e643848d938671f8024700.bindTooltip(
                `<div>
                     Ron Barassi Senior Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d36578094fdc4adebdfec7df06965821 = L.marker(
                [-37.81157067, 144.98637319999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_066aaaed16904e4d9f72ea43c4632507 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d36578094fdc4adebdfec7df06965821.setIcon(icon_066aaaed16904e4d9f72ea43c4632507);


            marker_d36578094fdc4adebdfec7df06965821.bindTooltip(
                `<div>
                     Powlett Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2338370aa29749afb61e77bb27476184 = L.marker(
                [-37.79972461, 144.9413521],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b02c3a2edc9a4416b33d4578130646f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2338370aa29749afb61e77bb27476184.setIcon(icon_b02c3a2edc9a4416b33d4578130646f9);


            marker_2338370aa29749afb61e77bb27476184.bindTooltip(
                `<div>
                     North Melbourne Recreation Reserve Play Court
                 </div>`,
                {"sticky": true}
            );


            var marker_ed15209563d447f5887460f7110214db = L.marker(
                [-37.79699543, 144.97407819999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ace12cbd812448f9985b2df748e6f96d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ed15209563d447f5887460f7110214db.setIcon(icon_ace12cbd812448f9985b2df748e6f96d);


            marker_ed15209563d447f5887460f7110214db.bindTooltip(
                `<div>
                     Station Street Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_76c383c4b23046d4a0654ab11c1a5a65 = L.marker(
                [-37.8406993, 144.9841878],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7888c86beab8424d85afc92a7bd68d54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_76c383c4b23046d4a0654ab11c1a5a65.setIcon(icon_7888c86beab8424d85afc92a7bd68d54);


            marker_76c383c4b23046d4a0654ab11c1a5a65.bindTooltip(
                `<div>
                     Fawkner Park East
                 </div>`,
                {"sticky": true}
            );


            var marker_dcc1f8c4b0db4e71befa6f70a5a8a692 = L.marker(
                [-37.80878457, 144.94471000000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d0c543dd79e54c159029b13e389e6f64 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dcc1f8c4b0db4e71befa6f70a5a8a692.setIcon(icon_d0c543dd79e54c159029b13e389e6f64);


            marker_dcc1f8c4b0db4e71befa6f70a5a8a692.bindTooltip(
                `<div>
                     Hawke & Adderley Streets Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b160b611e3bb47429a0e190b000db526 = L.marker(
                [-37.80741069, 144.95166830000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7519a164396e4584a133983aa6f47184 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b160b611e3bb47429a0e190b000db526.setIcon(icon_7519a164396e4584a133983aa6f47184);


            marker_b160b611e3bb47429a0e190b000db526.bindTooltip(
                `<div>
                     Eades Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b822126c8ed1485f816c53f8ff4f9ab8 = L.marker(
                [-37.79313247, 144.93234109999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_320ff5291e9c4786919ae12398d2ac34 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b822126c8ed1485f816c53f8ff4f9ab8.setIcon(icon_320ff5291e9c4786919ae12398d2ac34);


            marker_b822126c8ed1485f816c53f8ff4f9ab8.bindTooltip(
                `<div>
                     Robertson Street Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0d896000f4034a22897b981d302134d4 = L.marker(
                [-36.37634498, 145.4010869],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1809bf7922d64d339750574a56939e42 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0d896000f4034a22897b981d302134d4.setIcon(icon_1809bf7922d64d339750574a56939e42);


            marker_0d896000f4034a22897b981d302134d4.bindTooltip(
                `<div>
                     Arthur Dickmann Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_87d763a5f7334e23acb546eb92048ae0 = L.marker(
                [-36.37956966, 145.3518372],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d6b89a6e76ad48339335285ec3fe9f1c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_87d763a5f7334e23acb546eb92048ae0.setIcon(icon_d6b89a6e76ad48339335285ec3fe9f1c);


            marker_87d763a5f7334e23acb546eb92048ae0.bindTooltip(
                `<div>
                     Frank R Puller Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_5539180dfe234d6db79e036f7e2aee60 = L.marker(
                [-36.39324019, 145.35874009999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a4cf13b185ce4bdabac82e644ce09608 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5539180dfe234d6db79e036f7e2aee60.setIcon(icon_a4cf13b185ce4bdabac82e644ce09608);


            marker_5539180dfe234d6db79e036f7e2aee60.bindTooltip(
                `<div>
                     Alexandra Street Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_7e2138565eea4bd08498b02fff8a449e = L.marker(
                [-36.32719629, 145.68725519999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_59306fcfde6f48e9abe6474392645553 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e2138565eea4bd08498b02fff8a449e.setIcon(icon_59306fcfde6f48e9abe6474392645553);


            marker_7e2138565eea4bd08498b02fff8a449e.bindTooltip(
                `<div>
                     Dookie Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_1a732001bc7142289e2f9ca78491b57d = L.marker(
                [-36.22565519, 145.56269450000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6455a5fcef5a4d4ab1a2fea01d94a995 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a732001bc7142289e2f9ca78491b57d.setIcon(icon_6455a5fcef5a4d4ab1a2fea01d94a995);


            marker_1a732001bc7142289e2f9ca78491b57d.bindTooltip(
                `<div>
                     Katandra West Early Childhood Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_6c3d4bd25a2846f6981ab55fd4b1cabd = L.marker(
                [-36.39426703, 145.355407],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d66a4a36053e4ef882f98c057c29ebdd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c3d4bd25a2846f6981ab55fd4b1cabd.setIcon(icon_d66a4a36053e4ef882f98c057c29ebdd);


            marker_6c3d4bd25a2846f6981ab55fd4b1cabd.bindTooltip(
                `<div>
                     Rodney Neighbourhood Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_7d5103d97f7f4b3093af019df90ec808 = L.marker(
                [-36.38052264, 145.3523076],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d0eeee84f06d48a3a10900fbf5af7bb8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7d5103d97f7f4b3093af019df90ec808.setIcon(icon_d0eeee84f06d48a3a10900fbf5af7bb8);


            marker_7d5103d97f7f4b3093af019df90ec808.bindTooltip(
                `<div>
                     Echuca Road Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_b586f07e9e1b4b658cb4d90cdb1c6b63 = L.marker(
                [-36.41010547, 145.46160940000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0757064204d40ddb11d0cfd0b06c725 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b586f07e9e1b4b658cb4d90cdb1c6b63.setIcon(icon_f0757064204d40ddb11d0cfd0b06c725);


            marker_b586f07e9e1b4b658cb4d90cdb1c6b63.bindTooltip(
                `<div>
                     Isabel Pearce Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_a07b929004cc4663bef79596de3caf3b = L.marker(
                [-36.39936161, 145.4013179],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_57165e057aa7451da75ede5d71fa171e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a07b929004cc4663bef79596de3caf3b.setIcon(icon_57165e057aa7451da75ede5d71fa171e);


            marker_a07b929004cc4663bef79596de3caf3b.bindTooltip(
                `<div>
                     Colliver Road Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_b7380a2eb98b4436895d48a273bdbbff = L.marker(
                [-36.36675463, 145.4058753],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ee475d2c68c04b53bf25f1dc190efbbf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b7380a2eb98b4436895d48a273bdbbff.setIcon(icon_ee475d2c68c04b53bf25f1dc190efbbf);


            marker_b7380a2eb98b4436895d48a273bdbbff.bindTooltip(
                `<div>
                     Dolena Young Pre School
                 </div>`,
                {"sticky": true}
            );


            var marker_09d326aef679408baa22d34eac570c54 = L.marker(
                [-36.40186144, 145.4103101],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e3c14c23f0834513a5173fcf0a9c508e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_09d326aef679408baa22d34eac570c54.setIcon(icon_e3c14c23f0834513a5173fcf0a9c508e);


            marker_09d326aef679408baa22d34eac570c54.bindTooltip(
                `<div>
                     Leslie Gribble Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_0a9f2f49d2d94bcaaf3952c50a248e9c = L.marker(
                [-36.23907207, 145.4364476],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ff9be7eadecf47d993b424fcfc08827a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0a9f2f49d2d94bcaaf3952c50a248e9c.setIcon(icon_ff9be7eadecf47d993b424fcfc08827a);


            marker_0a9f2f49d2d94bcaaf3952c50a248e9c.bindTooltip(
                `<div>
                     Tallygaroopna Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_058ceedcdfc14b428b5ff77ca0bb9721 = L.marker(
                [-36.43849777, 145.23596369999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1102e2fd11c54b33999c140b3438699a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_058ceedcdfc14b428b5ff77ca0bb9721.setIcon(icon_1102e2fd11c54b33999c140b3438699a);


            marker_058ceedcdfc14b428b5ff77ca0bb9721.bindTooltip(
                `<div>
                     Gowrie Park Kindergarten
                 </div>`,
                {"sticky": true}
            );


            var marker_af626a99ecce49d68d5f258929014bc4 = L.marker(
                [-36.37870843, 145.4032346],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f839a168e6384017b84b322a6da0cb0b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_af626a99ecce49d68d5f258929014bc4.setIcon(icon_f839a168e6384017b84b322a6da0cb0b);


            marker_af626a99ecce49d68d5f258929014bc4.bindTooltip(
                `<div>
                     Nancy Vibert Occasional Care Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_93cd7fb54abc4fc48382191e0e78e25e = L.marker(
                [-36.36155445, 145.3938443],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3ed957435dc24630acfc09f213729c22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_93cd7fb54abc4fc48382191e0e78e25e.setIcon(icon_3ed957435dc24630acfc09f213729c22);


            marker_93cd7fb54abc4fc48382191e0e78e25e.bindTooltip(
                `<div>
                     Patricia Smith Childrens Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_e7bc6a142c19484b8d8a7c9a40e863af = L.marker(
                [-36.29854207, 145.43516110000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0f2bca080984111bdc7de433e68b681 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7bc6a142c19484b8d8a7c9a40e863af.setIcon(icon_f0f2bca080984111bdc7de433e68b681);


            marker_e7bc6a142c19484b8d8a7c9a40e863af.bindTooltip(
                `<div>
                     Congupna Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_2677e8ed9b4147b0a451e33a5389f18a = L.marker(
                [-36.33314672, 145.6832224],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_16c36bff861d4a70bdd2ca3c76d7291b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2677e8ed9b4147b0a451e33a5389f18a.setIcon(icon_16c36bff861d4a70bdd2ca3c76d7291b);


            marker_2677e8ed9b4147b0a451e33a5389f18a.bindTooltip(
                `<div>
                     Dookie Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_a70b0395ba8244c29e73afa5f199018d = L.marker(
                [-36.52664289, 145.4778338],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1c4cbdd704aa4f6687c9c8a1964f9462 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a70b0395ba8244c29e73afa5f199018d.setIcon(icon_1c4cbdd704aa4f6687c9c8a1964f9462);


            marker_a70b0395ba8244c29e73afa5f199018d.bindTooltip(
                `<div>
                     Karramomus Memorial Hall
                 </div>`,
                {"sticky": true}
            );


            var marker_939479198e1a488f9945fe74c93c73c3 = L.marker(
                [-36.22800205, 145.5599478],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1787bca8ce0f4e0b8065bd7c3f40a8af = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_939479198e1a488f9945fe74c93c73c3.setIcon(icon_1787bca8ce0f4e0b8065bd7c3f40a8af);


            marker_939479198e1a488f9945fe74c93c73c3.bindTooltip(
                `<div>
                     Katandra West Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_223fb6fb48f04bd8b2d8df93b6c28004 = L.marker(
                [-36.46838857, 145.3856126],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fe3013ccdc62415fafe56b09868e9e7a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_223fb6fb48f04bd8b2d8df93b6c28004.setIcon(icon_fe3013ccdc62415fafe56b09868e9e7a);


            marker_223fb6fb48f04bd8b2d8df93b6c28004.bindTooltip(
                `<div>
                     Kialla West Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_bc5b5e61644c4ca1a3df0948e77f9ce8 = L.marker(
                [-36.41934091, 145.3881824],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9a54c4a145084961a654b27896fbc167 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc5b5e61644c4ca1a3df0948e77f9ce8.setIcon(icon_9a54c4a145084961a654b27896fbc167);


            marker_bc5b5e61644c4ca1a3df0948e77f9ce8.bindTooltip(
                `<div>
                     Kialla Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_bb3dd6b948f04c47b1f2eeb2a0ecfad2 = L.marker(
                [-36.40112899, 145.40813500000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_aec17eeb16014b87a288413677cbf2d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bb3dd6b948f04c47b1f2eeb2a0ecfad2.setIcon(icon_aec17eeb16014b87a288413677cbf2d8);


            marker_bb3dd6b948f04c47b1f2eeb2a0ecfad2.bindTooltip(
                `<div>
                     V E Vibert Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_952c5f80607b411ba9892a083614b5d0 = L.marker(
                [-36.37211907, 145.12748],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_54188fb0676847aea439d773f846b67c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_952c5f80607b411ba9892a083614b5d0.setIcon(icon_54188fb0676847aea439d773f846b67c);


            marker_952c5f80607b411ba9892a083614b5d0.bindTooltip(
                `<div>
                     Merrigum Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_17da99b09ed04afbafc492683ec76e18 = L.marker(
                [-36.36354245, 145.5410698],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_450c84e58bd34f7d81ffd3ece2c90266 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_17da99b09ed04afbafc492683ec76e18.setIcon(icon_450c84e58bd34f7d81ffd3ece2c90266);


            marker_17da99b09ed04afbafc492683ec76e18.bindTooltip(
                `<div>
                     Pine Lodge Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b84339d64214428297d6053d48f6e13b = L.marker(
                [-36.35634286, 145.3992273],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_02d3adffd81545569eb35a51d694cf55 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b84339d64214428297d6053d48f6e13b.setIcon(icon_02d3adffd81545569eb35a51d694cf55);


            marker_b84339d64214428297d6053d48f6e13b.bindTooltip(
                `<div>
                     Sports City Netball Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_21ebac6dfede4656bd72b3ed793470f0 = L.marker(
                [-36.35287579, 145.39444740000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_00093acfc475469e83f76df397483137 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_21ebac6dfede4656bd72b3ed793470f0.setIcon(icon_00093acfc475469e83f76df397483137);


            marker_21ebac6dfede4656bd72b3ed793470f0.bindTooltip(
                `<div>
                     Sports City Soccer Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6e5122664a554dc8b5aef6ff2d20cb7b = L.marker(
                [-36.40896941, 145.4622898],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_61a3a244c562432d8e2051dea4da95d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e5122664a554dc8b5aef6ff2d20cb7b.setIcon(icon_61a3a244c562432d8e2051dea4da95d8);


            marker_6e5122664a554dc8b5aef6ff2d20cb7b.bindTooltip(
                `<div>
                     WG Parker-Central Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a12a0e281ac64a4e99d80d28c27f1056 = L.marker(
                [-36.40833472, 145.4627038],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_640f50672eac4ca9be5747e68c11417f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a12a0e281ac64a4e99d80d28c27f1056.setIcon(icon_640f50672eac4ca9be5747e68c11417f);


            marker_a12a0e281ac64a4e99d80d28c27f1056.bindTooltip(
                `<div>
                     Central Park Tennis Courts
                 </div>`,
                {"sticky": true}
            );


            var marker_adf0f14d9f0246d6b72d3ba457e0a647 = L.marker(
                [-36.32424207, 145.39686899999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c3d8262385fe4a4ea3f384a83f170090 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_adf0f14d9f0246d6b72d3ba457e0a647.setIcon(icon_c3d8262385fe4a4ea3f384a83f170090);


            marker_adf0f14d9f0246d6b72d3ba457e0a647.bindTooltip(
                `<div>
                     North Shepparton Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_0a62a4473d68460cb0ab77bfa7902491 = L.marker(
                [-36.56344495, 145.33339809999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fb2d0e1eb80444d6ac599dd708fd616f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0a62a4473d68460cb0ab77bfa7902491.setIcon(icon_fb2d0e1eb80444d6ac599dd708fd616f);


            marker_0a62a4473d68460cb0ab77bfa7902491.bindTooltip(
                `<div>
                     Arcadia Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_1ea9aed55f2945beb226b7ba29219aa2 = L.marker(
                [-36.35675321, 145.4626156],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f9137e7af1474ca39726de5a31ff2148 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ea9aed55f2945beb226b7ba29219aa2.setIcon(icon_f9137e7af1474ca39726de5a31ff2148);


            marker_1ea9aed55f2945beb226b7ba29219aa2.bindTooltip(
                `<div>
                     Lemnos Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_1f8629417e344d56bef8a75039f50d14 = L.marker(
                [-36.21964498, 145.3433929],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_24c5eb2ce4054e02b2a067ec184ab366 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f8629417e344d56bef8a75039f50d14.setIcon(icon_24c5eb2ce4054e02b2a067ec184ab366);


            marker_1f8629417e344d56bef8a75039f50d14.bindTooltip(
                `<div>
                     Bunbartha Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_d2630b1a9d21476db88d2f683fce623e = L.marker(
                [-36.24142603, 145.436833],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ca2a6f64acf34141972955bdc40a65e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d2630b1a9d21476db88d2f683fce623e.setIcon(icon_ca2a6f64acf34141972955bdc40a65e3);


            marker_d2630b1a9d21476db88d2f683fce623e.bindTooltip(
                `<div>
                     Tallygaroopna Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_84754922355b42edaf87041b93293405 = L.marker(
                [-36.22752004, 145.559132],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5cee576613fa4ce4903779ad89994ff2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_84754922355b42edaf87041b93293405.setIcon(icon_5cee576613fa4ce4903779ad89994ff2);


            marker_84754922355b42edaf87041b93293405.bindTooltip(
                `<div>
                     Katandra Rec Res Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_0e19ab5f5dac4d6e9f65a63930c862e1 = L.marker(
                [-36.49185037, 145.3440352],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1a76ad3b489e43ca91e02d097983a822 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e19ab5f5dac4d6e9f65a63930c862e1.setIcon(icon_1a76ad3b489e43ca91e02d097983a822);


            marker_0e19ab5f5dac4d6e9f65a63930c862e1.bindTooltip(
                `<div>
                     Toolamba Recreation Reserve.Exercise Equipement
                 </div>`,
                {"sticky": true}
            );


            var marker_549b6debe82847f0886818f7d867b6f4 = L.marker(
                [-36.491143, 145.34342900000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c0d4b1db95854cd2a2f290bbf1e21ee6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_549b6debe82847f0886818f7d867b6f4.setIcon(icon_c0d4b1db95854cd2a2f290bbf1e21ee6);


            marker_549b6debe82847f0886818f7d867b6f4.bindTooltip(
                `<div>
                     Toolamba Rec Res Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_44d90f01b3c74be38908219b62d45a03 = L.marker(
                [-36.37516604, 145.338418],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dc4b2859bf9a421490dc7d2fd170dada = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_44d90f01b3c74be38908219b62d45a03.setIcon(icon_dc4b2859bf9a421490dc7d2fd170dada);


            marker_44d90f01b3c74be38908219b62d45a03.bindTooltip(
                `<div>
                     Arrowsmith Crescent Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_ad13381520f8431cb1c11701866158df = L.marker(
                [-36.4264678, 145.23927],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_49b78313cf12485eaef88862bda607f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad13381520f8431cb1c11701866158df.setIcon(icon_49b78313cf12485eaef88862bda607f1);


            marker_ad13381520f8431cb1c11701866158df.bindTooltip(
                `<div>
                     Northlinks Estate Playground 2
                 </div>`,
                {"sticky": true}
            );


            var marker_57487d268941474bb17cc195abfebedb = L.marker(
                [-36.42645846, 145.2392479],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_531705ec004b483ea97e63d706b539dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_57487d268941474bb17cc195abfebedb.setIcon(icon_531705ec004b483ea97e63d706b539dd);


            marker_57487d268941474bb17cc195abfebedb.bindTooltip(
                `<div>
                     nan
                 </div>`,
                {"sticky": true}
            );


            var marker_f348fe9c05004b69a293c06ec3cbd962 = L.marker(
                [-36.43340351, 145.4034367],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2773c64813bb41179b03c28cd9fc9b6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f348fe9c05004b69a293c06ec3cbd962.setIcon(icon_2773c64813bb41179b03c28cd9fc9b6a);


            marker_f348fe9c05004b69a293c06ec3cbd962.bindTooltip(
                `<div>
                     Sanctuary Park Estate Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5765ad61b2024af5a19bc2c91f8ca42f = L.marker(
                [-36.61581192, 145.216231],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2a4b4405bdeb469f818e28e451389f73 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5765ad61b2024af5a19bc2c91f8ca42f.setIcon(icon_2a4b4405bdeb469f818e28e451389f73);


            marker_5765ad61b2024af5a19bc2c91f8ca42f.bindTooltip(
                `<div>
                     Murchison Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_e6542bb633f44e4ea509121dae760bab = L.marker(
                [-36.42017002, 145.4009026],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_98d41bfd345c4e47ac1328d4731fe9a9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e6542bb633f44e4ea509121dae760bab.setIcon(icon_98d41bfd345c4e47ac1328d4731fe9a9);


            marker_e6542bb633f44e4ea509121dae760bab.bindTooltip(
                `<div>
                     Lowanna Waters
                 </div>`,
                {"sticky": true}
            );


            var marker_a6703a99bac14eab926341589209c74c = L.marker(
                [-36.39795929, 145.3512259],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a477556edfe6482395ee5ced79f8d4d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a6703a99bac14eab926341589209c74c.setIcon(icon_a477556edfe6482395ee5ced79f8d4d5);


            marker_a6703a99bac14eab926341589209c74c.bindTooltip(
                `<div>
                     Smyth Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_811c8a07e8e344a0bc05c144a8ce9d5a = L.marker(
                [-36.42977298, 145.38806709999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f26ed254f45a43d5a4acf9a3ada3de24 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_811c8a07e8e344a0bc05c144a8ce9d5a.setIcon(icon_f26ed254f45a43d5a4acf9a3ada3de24);


            marker_811c8a07e8e344a0bc05c144a8ce9d5a.bindTooltip(
                `<div>
                     Sevens Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_455e7046ae1d4bc58f7d29e19b999a55 = L.marker(
                [-36.30097359, 145.4349788],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a093ad9d31e34349b5c5c2b0d7b741aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_455e7046ae1d4bc58f7d29e19b999a55.setIcon(icon_a093ad9d31e34349b5c5c2b0d7b741aa);


            marker_455e7046ae1d4bc58f7d29e19b999a55.bindTooltip(
                `<div>
                     Farrell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3ef3dd907a5f4529ad2283f385186b76 = L.marker(
                [-36.30062496, 145.4345281],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_114b03ac108b45ff92f28daa6ddaf5f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ef3dd907a5f4529ad2283f385186b76.setIcon(icon_114b03ac108b45ff92f28daa6ddaf5f0);


            marker_3ef3dd907a5f4529ad2283f385186b76.bindTooltip(
                `<div>
                     Farrell park Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_c66ac05671be4f16ac287d733ec528cc = L.marker(
                [-36.41469731, 145.3847541],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3c2eae3ba8c4473782dcd4ab1939a608 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c66ac05671be4f16ac287d733ec528cc.setIcon(icon_3c2eae3ba8c4473782dcd4ab1939a608);


            marker_c66ac05671be4f16ac287d733ec528cc.bindTooltip(
                `<div>
                     Riverwood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8dbee432cfd74f0ebe2d7ac483741bff = L.marker(
                [-36.34476008, 145.40577009999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_89537cb5e8fb456eb8e8987d0218a3a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8dbee432cfd74f0ebe2d7ac483741bff.setIcon(icon_89537cb5e8fb456eb8e8987d0218a3a2);


            marker_8dbee432cfd74f0ebe2d7ac483741bff.bindTooltip(
                `<div>
                     Northside Estate Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a6d9bd74453a405aa009b18ee19d4237 = L.marker(
                [-36.33442367, 145.40634619999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_98e1f49f44a24eec931876903f69abab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a6d9bd74453a405aa009b18ee19d4237.setIcon(icon_98e1f49f44a24eec931876903f69abab);


            marker_a6d9bd74453a405aa009b18ee19d4237.bindTooltip(
                `<div>
                     Trinity Drive Park
                 </div>`,
                {"sticky": true}
            );


            var marker_12a5311c59614f59b7465d27e8c0e3b7 = L.marker(
                [-36.44169698, 145.358608],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e8d7a88347ff4ccd8a71a62160af77f6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_12a5311c59614f59b7465d27e8c0e3b7.setIcon(icon_e8d7a88347ff4ccd8a71a62160af77f6);


            marker_12a5311c59614f59b7465d27e8c0e3b7.bindTooltip(
                `<div>
                     Teasdale Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9e5c2fa448594ef0b2ee597e5c133256 = L.marker(
                [-36.38773866, 145.4145779],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f59cf1e5d79e4521a435d7341a048a11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e5c2fa448594ef0b2ee597e5c133256.setIcon(icon_f59cf1e5d79e4521a435d7341a048a11);


            marker_9e5c2fa448594ef0b2ee597e5c133256.bindTooltip(
                `<div>
                     Darby Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d8281c6fc4cc443c9bae480f058c8cad = L.marker(
                [-36.3595774, 145.3969832],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0f5a6c8b556840c3a8a838fe79254b3e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d8281c6fc4cc443c9bae480f058c8cad.setIcon(icon_0f5a6c8b556840c3a8a838fe79254b3e);


            marker_d8281c6fc4cc443c9bae480f058c8cad.bindTooltip(
                `<div>
                     Morrison Park
                 </div>`,
                {"sticky": true}
            );


            var marker_f508155c7ef54a14a2a35ddc9c004e7a = L.marker(
                [-36.398268, 145.34032549999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0cc39624ef554aa4b8eec27d2980024b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f508155c7ef54a14a2a35ddc9c004e7a.setIcon(icon_0cc39624ef554aa4b8eec27d2980024b);


            marker_f508155c7ef54a14a2a35ddc9c004e7a.bindTooltip(
                `<div>
                     Charles Street Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b8102cc86b034ce3b1de1beef340e9c3 = L.marker(
                [-36.37742373, 145.343979],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e1942badc3494189bc174426a685fa34 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b8102cc86b034ce3b1de1beef340e9c3.setIcon(icon_e1942badc3494189bc174426a685fa34);


            marker_b8102cc86b034ce3b1de1beef340e9c3.bindTooltip(
                `<div>
                     Gange Street Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7f0157a47f744dab96e67042b7a791ac = L.marker(
                [-36.38413322, 145.3585525],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_38bec9ffc59b4795bd04ca0c01c6163e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7f0157a47f744dab96e67042b7a791ac.setIcon(icon_38bec9ffc59b4795bd04ca0c01c6163e);


            marker_7f0157a47f744dab96e67042b7a791ac.bindTooltip(
                `<div>
                     G & D Howe Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e878c1b1f1fd47209237a3efd644d140 = L.marker(
                [-36.38226754, 145.3448573],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8541c3ce982b4c019b9cc3cfc2194e11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e878c1b1f1fd47209237a3efd644d140.setIcon(icon_8541c3ce982b4c019b9cc3cfc2194e11);


            marker_e878c1b1f1fd47209237a3efd644d140.bindTooltip(
                `<div>
                     Norton Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_2cc6d847f82742658e91a7724771cc99 = L.marker(
                [-36.39072435, 145.3475657],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_be57cd31639346c389ee45dd02590153 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2cc6d847f82742658e91a7724771cc99.setIcon(icon_be57cd31639346c389ee45dd02590153);


            marker_2cc6d847f82742658e91a7724771cc99.bindTooltip(
                `<div>
                     Rodney Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_388ed273f4194d99a02703f53c445a39 = L.marker(
                [-36.401072, 145.4015749],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b881d5188d40452ebb79c8f93b526725 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_388ed273f4194d99a02703f53c445a39.setIcon(icon_b881d5188d40452ebb79c8f93b526725);


            marker_388ed273f4194d99a02703f53c445a39.bindTooltip(
                `<div>
                     Kittle Park
                 </div>`,
                {"sticky": true}
            );


            var marker_6c04d47ea2ab4e0e852290ef09e5571e = L.marker(
                [-36.36130164, 145.40930780000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5b628dc2c1af44a6b69ef556cc882cc8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c04d47ea2ab4e0e852290ef09e5571e.setIcon(icon_5b628dc2c1af44a6b69ef556cc882cc8);


            marker_6c04d47ea2ab4e0e852290ef09e5571e.bindTooltip(
                `<div>
                     Duncan Coates Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_d0180fa9cfaf49978305f697302b3972 = L.marker(
                [-36.35955775, 145.3828185],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4aa0afa82bd64760b3ed9a6a120190d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d0180fa9cfaf49978305f697302b3972.setIcon(icon_4aa0afa82bd64760b3ed9a6a120190d8);


            marker_d0180fa9cfaf49978305f697302b3972.bindTooltip(
                `<div>
                     Flinders Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b424cb112644474290b57db7f97e997c = L.marker(
                [-36.35949657, 145.3886307],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_35cc03c699f0421a903a2d4b13e630df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b424cb112644474290b57db7f97e997c.setIcon(icon_35cc03c699f0421a903a2d4b13e630df);


            marker_b424cb112644474290b57db7f97e997c.bindTooltip(
                `<div>
                     Roche Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_141dea0658f242c7b4266b26806d0839 = L.marker(
                [-36.36107343, 145.4172367],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1554bc54ec0b4466a11d93d1fb4f25b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_141dea0658f242c7b4266b26806d0839.setIcon(icon_1554bc54ec0b4466a11d93d1fb4f25b2);


            marker_141dea0658f242c7b4266b26806d0839.bindTooltip(
                `<div>
                     McCorkell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_2b96e04290f94c978eedf938ab4bfefc = L.marker(
                [-36.35456378, 145.36427769999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fbd809656c2c423694835230daeceb66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2b96e04290f94c978eedf938ab4bfefc.setIcon(icon_fbd809656c2c423694835230daeceb66);


            marker_2b96e04290f94c978eedf938ab4bfefc.bindTooltip(
                `<div>
                     Kingfisher Drive Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b06d79ad267942b4a3ff0f797969d5fb = L.marker(
                [-36.39956321, 145.39887180000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ffa86000541d40a99e1981a4bcf5015f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b06d79ad267942b4a3ff0f797969d5fb.setIcon(icon_ffa86000541d40a99e1981a4bcf5015f);


            marker_b06d79ad267942b4a3ff0f797969d5fb.bindTooltip(
                `<div>
                     Shepparton Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d7f2be566b914e4aae16660b1ec438bf = L.marker(
                [-36.39611072, 145.3928324],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_14de928e6ae04324846527abd8270aa3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7f2be566b914e4aae16660b1ec438bf.setIcon(icon_14de928e6ae04324846527abd8270aa3);


            marker_d7f2be566b914e4aae16660b1ec438bf.bindTooltip(
                `<div>
                     Wauchope Park
                 </div>`,
                {"sticky": true}
            );


            var marker_ea787609998c4f899a22c65ae64b992f = L.marker(
                [-36.39280132, 145.4028237],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a9cd2804c1dc4e3385019d617aa09e05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ea787609998c4f899a22c65ae64b992f.setIcon(icon_a9cd2804c1dc4e3385019d617aa09e05);


            marker_ea787609998c4f899a22c65ae64b992f.bindTooltip(
                `<div>
                     Furphy Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7fbaba6971e44d64ad235ada3ba0b1ff = L.marker(
                [-36.36116718, 145.39991519999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0ed9aace95fa47978b4eed31b09a0c42 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fbaba6971e44d64ad235ada3ba0b1ff.setIcon(icon_0ed9aace95fa47978b4eed31b09a0c42);


            marker_7fbaba6971e44d64ad235ada3ba0b1ff.bindTooltip(
                `<div>
                     Frank McNamara
                 </div>`,
                {"sticky": true}
            );


            var marker_e109386b38cc40eeb056eb875f65c744 = L.marker(
                [-36.4008579, 145.4107655],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_efc5ccc31a2f418888702f08877dcd6b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e109386b38cc40eeb056eb875f65c744.setIcon(icon_efc5ccc31a2f418888702f08877dcd6b);


            marker_e109386b38cc40eeb056eb875f65c744.bindTooltip(
                `<div>
                     Rigg Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_8b75fc03fbdd4e069c8e9a0890b0f1b0 = L.marker(
                [-36.36009182, 145.40376],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_49d18e0fa91c4fc88f1254d24eff9119 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8b75fc03fbdd4e069c8e9a0890b0f1b0.setIcon(icon_49d18e0fa91c4fc88f1254d24eff9119);


            marker_8b75fc03fbdd4e069c8e9a0890b0f1b0.bindTooltip(
                `<div>
                     Leembruggen Park
                 </div>`,
                {"sticky": true}
            );


            var marker_4eacdfd69ffc4ae49b818b5306d25c4f = L.marker(
                [-36.364851200000004, 145.41797380000003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3b13df9a53374df48641dbab539192cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4eacdfd69ffc4ae49b818b5306d25c4f.setIcon(icon_3b13df9a53374df48641dbab539192cf);


            marker_4eacdfd69ffc4ae49b818b5306d25c4f.bindTooltip(
                `<div>
                     Bailey Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7b9835a2f14b45bf9e16135f1567c399 = L.marker(
                [-36.35762819, 145.41370669999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_64d8b90a530d4984bba170d1b3c3ada5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7b9835a2f14b45bf9e16135f1567c399.setIcon(icon_64d8b90a530d4984bba170d1b3c3ada5);


            marker_7b9835a2f14b45bf9e16135f1567c399.bindTooltip(
                `<div>
                     Centennial Park
                 </div>`,
                {"sticky": true}
            );


            var marker_1954a52ced5245cb860b22bc319ac060 = L.marker(
                [-36.371076, 145.41051399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_91e3881482064be7b391e384ae6b9e8d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1954a52ced5245cb860b22bc319ac060.setIcon(icon_91e3881482064be7b391e384ae6b9e8d);


            marker_1954a52ced5245cb860b22bc319ac060.bindTooltip(
                `<div>
                     W.S. James Park
                 </div>`,
                {"sticky": true}
            );


            var marker_c43df961ba6c4563a1dd2a6ade28b36b = L.marker(
                [-36.36078945, 145.4134977],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1803ca9ff69042c798d7305807460577 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c43df961ba6c4563a1dd2a6ade28b36b.setIcon(icon_1803ca9ff69042c798d7305807460577);


            marker_c43df961ba6c4563a1dd2a6ade28b36b.bindTooltip(
                `<div>
                     Alfred Kleinhart Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9183322ebd124313aefe227fbe61e36e = L.marker(
                [-36.36372199, 145.409098],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4b9f5387dbff440b9886be1126ed0c05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9183322ebd124313aefe227fbe61e36e.setIcon(icon_4b9f5387dbff440b9886be1126ed0c05);


            marker_9183322ebd124313aefe227fbe61e36e.bindTooltip(
                `<div>
                     Billingham Park
                 </div>`,
                {"sticky": true}
            );


            var marker_6943dd58eeec44728b3f94226758d673 = L.marker(
                [-36.39507507, 145.400694],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d5a75722bd144542994fb32572d0a500 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6943dd58eeec44728b3f94226758d673.setIcon(icon_d5a75722bd144542994fb32572d0a500);


            marker_6943dd58eeec44728b3f94226758d673.bindTooltip(
                `<div>
                     Hillier Park
                 </div>`,
                {"sticky": true}
            );


            var marker_653d569a8f4d46e2af5f7316cc823eaa = L.marker(
                [-36.39388949, 145.4141297],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ceec10e96fa44a6f949597725b9a9690 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_653d569a8f4d46e2af5f7316cc823eaa.setIcon(icon_ceec10e96fa44a6f949597725b9a9690);


            marker_653d569a8f4d46e2af5f7316cc823eaa.bindTooltip(
                `<div>
                     Wilson Park
                 </div>`,
                {"sticky": true}
            );


            var marker_dab19340c497424aae39f9d7d3a65062 = L.marker(
                [-36.38835747, 145.4095929],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_89f9f5dd909747a699fc3cdaddef741a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dab19340c497424aae39f9d7d3a65062.setIcon(icon_89f9f5dd909747a699fc3cdaddef741a);


            marker_dab19340c497424aae39f9d7d3a65062.bindTooltip(
                `<div>
                     O'Connor Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7ed65e5562004b68aa1639b6e29f76be = L.marker(
                [-36.40678576, 145.4132096],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7e9fc665ccdd445984eeda2b5dfb7f4a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ed65e5562004b68aa1639b6e29f76be.setIcon(icon_7e9fc665ccdd445984eeda2b5dfb7f4a);


            marker_7ed65e5562004b68aa1639b6e29f76be.bindTooltip(
                `<div>
                     Allinga Park
                 </div>`,
                {"sticky": true}
            );


            var marker_94e1aa00e05a4f64abcc2768b32c6e61 = L.marker(
                [-36.39603031, 145.40752619999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_80858e4e7b7d4598ac7a9daf01bcd621 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_94e1aa00e05a4f64abcc2768b32c6e61.setIcon(icon_80858e4e7b7d4598ac7a9daf01bcd621);


            marker_94e1aa00e05a4f64abcc2768b32c6e61.bindTooltip(
                `<div>
                     Hanlon Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d1477ac114944d06b1d88af2764bb8d9 = L.marker(
                [-36.438306, 145.236821],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dbdcbd2a84064c929ed942b50c8da82a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d1477ac114944d06b1d88af2764bb8d9.setIcon(icon_dbdcbd2a84064c929ed942b50c8da82a);


            marker_d1477ac114944d06b1d88af2764bb8d9.bindTooltip(
                `<div>
                     Tatura Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5acd2bd728444dd597a377814b1c8331 = L.marker(
                [-36.44642057, 145.24020249999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f624011e885045e1b81af7faa5d2476d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5acd2bd728444dd597a377814b1c8331.setIcon(icon_f624011e885045e1b81af7faa5d2476d);


            marker_5acd2bd728444dd597a377814b1c8331.bindTooltip(
                `<div>
                     Hopkins Street Park
                 </div>`,
                {"sticky": true}
            );


            var marker_daadcdd25e1e4ff7beb322323722a2d7 = L.marker(
                [-36.23954663, 145.4341347],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5ef7e366a143468dba4899d7506950a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_daadcdd25e1e4ff7beb322323722a2d7.setIcon(icon_5ef7e366a143468dba4899d7506950a2);


            marker_daadcdd25e1e4ff7beb322323722a2d7.bindTooltip(
                `<div>
                     Larsen Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_403e2bcf910e4d87bae46c35f6d82f41 = L.marker(
                [-36.23968906, 145.43419],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dc788423f94f465891c242cd01091ae2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_403e2bcf910e4d87bae46c35f6d82f41.setIcon(icon_dc788423f94f465891c242cd01091ae2);


            marker_403e2bcf910e4d87bae46c35f6d82f41.bindTooltip(
                `<div>
                     Larsen Res Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_3f35fd20591a40b89abd1c88bcde1908 = L.marker(
                [-36.35590778, 145.40703269999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c0c01b3d9a5645d4a1f2a820d8f1dc7f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f35fd20591a40b89abd1c88bcde1908.setIcon(icon_c0c01b3d9a5645d4a1f2a820d8f1dc7f);


            marker_3f35fd20591a40b89abd1c88bcde1908.bindTooltip(
                `<div>
                     Sabri Drive Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_31a9bee8eb5643d38238d4b53d6bad16 = L.marker(
                [-36.349107000000004, 145.4136461],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_942711eb353f491491c4adf53aa56629 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_31a9bee8eb5643d38238d4b53d6bad16.setIcon(icon_942711eb353f491491c4adf53aa56629);


            marker_31a9bee8eb5643d38238d4b53d6bad16.bindTooltip(
                `<div>
                     Hereford Drive Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_ba05f953a98a4278be4e731324ddaeca = L.marker(
                [-36.38655052, 145.3458621],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_72e34aa79dcf4a6ea150f87674c180df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ba05f953a98a4278be4e731324ddaeca.setIcon(icon_72e34aa79dcf4a6ea150f87674c180df);


            marker_ba05f953a98a4278be4e731324ddaeca.bindTooltip(
                `<div>
                     Heathmont Park
                 </div>`,
                {"sticky": true}
            );


            var marker_11fb9afcb5784495a25cb1bd0672f8d0 = L.marker(
                [-36.42558266, 145.38247280000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5a078f304eb24a279b4b71f0ca53aa5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_11fb9afcb5784495a25cb1bd0672f8d0.setIcon(icon_5a078f304eb24a279b4b71f0ca53aa5d);


            marker_11fb9afcb5784495a25cb1bd0672f8d0.bindTooltip(
                `<div>
                     Sevens Creek Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_06e016cad7bc44fd9c25733ad822c355 = L.marker(
                [-36.44329567, 145.3818787],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1cf45798805146bd9c865493248b9d2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_06e016cad7bc44fd9c25733ad822c355.setIcon(icon_1cf45798805146bd9c865493248b9d2a);


            marker_06e016cad7bc44fd9c25733ad822c355.bindTooltip(
                `<div>
                     Riviera Park Estate Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2da0c0100014417f9eabc45fae32edea = L.marker(
                [-36.39960804, 145.477354],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ca770532a3eb4db089e538098ec85c12 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2da0c0100014417f9eabc45fae32edea.setIcon(icon_ca770532a3eb4db089e538098ec85c12);


            marker_2da0c0100014417f9eabc45fae32edea.bindTooltip(
                `<div>
                     O'Donnell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_01702f03d5554bf8a06253cf59a04802 = L.marker(
                [-36.41386948, 145.4002622],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3687d2fd2acd41518157013606bd6ef7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_01702f03d5554bf8a06253cf59a04802.setIcon(icon_3687d2fd2acd41518157013606bd6ef7);


            marker_01702f03d5554bf8a06253cf59a04802.bindTooltip(
                `<div>
                     Ganaway Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b25bbbf5bbc940a696ed8c1c2d27e540 = L.marker(
                [-36.27786883, 145.2230612],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d51a746c381c4bfb9f5fa722a16ab4ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b25bbbf5bbc940a696ed8c1c2d27e540.setIcon(icon_d51a746c381c4bfb9f5fa722a16ab4ec);


            marker_b25bbbf5bbc940a696ed8c1c2d27e540.bindTooltip(
                `<div>
                     Undera Youth Spot
                 </div>`,
                {"sticky": true}
            );


            var marker_df5473a1d70d4d768b12754e0ea65815 = L.marker(
                [-36.37202831, 145.1311346],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bd2cf4531985469c9b8199517c419849 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_df5473a1d70d4d768b12754e0ea65815.setIcon(icon_bd2cf4531985469c9b8199517c419849);


            marker_df5473a1d70d4d768b12754e0ea65815.bindTooltip(
                `<div>
                     Judd Park
                 </div>`,
                {"sticky": true}
            );


            var marker_72c874f602cf424f9da426e56e8cb943 = L.marker(
                [-36.49037599, 145.338555],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_92916c8611d545aab79d9c29e6e50e22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72c874f602cf424f9da426e56e8cb943.setIcon(icon_92916c8611d545aab79d9c29e6e50e22);


            marker_72c874f602cf424f9da426e56e8cb943.bindTooltip(
                `<div>
                     Colaura Gardens Toolamba
                 </div>`,
                {"sticky": true}
            );


            var marker_b985ac5faf6241ddaf910094a6b3158e = L.marker(
                [-36.36054921, 145.37238969999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_22c53f9a520c47a99fefc7b56cb5a193 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b985ac5faf6241ddaf910094a6b3158e.setIcon(icon_22c53f9a520c47a99fefc7b56cb5a193);


            marker_b985ac5faf6241ddaf910094a6b3158e.bindTooltip(
                `<div>
                      Canterbury Park
                 </div>`,
                {"sticky": true}
            );


            var marker_c6c9b916f80845ec8dbd95064f2a5028 = L.marker(
                [-36.372217, 145.12987009999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_01671262a69e488a817f984b9f251169 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c6c9b916f80845ec8dbd95064f2a5028.setIcon(icon_01671262a69e488a817f984b9f251169);


            marker_c6c9b916f80845ec8dbd95064f2a5028.bindTooltip(
                `<div>
                     Merrigum Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d4d233feb4344dc288ca77ee182de5c8 = L.marker(
                [-36.39276442, 145.35316880000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_acda760494c34297864aacdffe6b9c95 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4d233feb4344dc288ca77ee182de5c8.setIcon(icon_acda760494c34297864aacdffe6b9c95);


            marker_d4d233feb4344dc288ca77ee182de5c8.bindTooltip(
                `<div>
                     Mooroopna Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_d67bb878d3814cd897b6fdddef6f97d9 = L.marker(
                [-36.37328822, 145.3454266],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ca54512bdd714198b7c44b17f7b47058 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d67bb878d3814cd897b6fdddef6f97d9.setIcon(icon_ca54512bdd714198b7c44b17f7b47058);


            marker_d67bb878d3814cd897b6fdddef6f97d9.bindTooltip(
                `<div>
                     Craigmuir Lake Park
                 </div>`,
                {"sticky": true}
            );


            var marker_97f42ed1c8a54629b97df53fa1383751 = L.marker(
                [-36.32762637, 145.6853764],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dfcf1843db4a47c5aaae9b5b11cad96d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_97f42ed1c8a54629b97df53fa1383751.setIcon(icon_dfcf1843db4a47c5aaae9b5b11cad96d);


            marker_97f42ed1c8a54629b97df53fa1383751.bindTooltip(
                `<div>
                     CWA Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_bb464ffdae8b4affa3cd268ae26c1212 = L.marker(
                [-36.32769258, 145.6871344],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3b9b5fabda314ebcbb9b1ba8def4cd62 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bb464ffdae8b4affa3cd268ae26c1212.setIcon(icon_3b9b5fabda314ebcbb9b1ba8def4cd62);


            marker_bb464ffdae8b4affa3cd268ae26c1212.bindTooltip(
                `<div>
                     CWA Gardens Exercise Equipment
                 </div>`,
                {"sticky": true}
            );


            var marker_5afa17a432d44ad8bc2dada3e35e2237 = L.marker(
                [-36.32793094, 145.6848733],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_abdd7fa4e71e42e4a238b54d5907dfa7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5afa17a432d44ad8bc2dada3e35e2237.setIcon(icon_abdd7fa4e71e42e4a238b54d5907dfa7);


            marker_5afa17a432d44ad8bc2dada3e35e2237.bindTooltip(
                `<div>
                     CWA Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_2ba4f338c3a84d30b8095e51e0f05024 = L.marker(
                [-36.36670612, 145.39149809999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_32cb8716e2d84cb1a15fe8858b50cb83 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ba4f338c3a84d30b8095e51e0f05024.setIcon(icon_32cb8716e2d84cb1a15fe8858b50cb83);


            marker_2ba4f338c3a84d30b8095e51e0f05024.bindTooltip(
                `<div>
                     Stuart Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_dc9d804e59ae4775880ca9dd490c136a = L.marker(
                [-36.44064655, 145.2319323],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_93b6f5e0191a4e2fba2a55a91282ab37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc9d804e59ae4775880ca9dd490c136a.setIcon(icon_93b6f5e0191a4e2fba2a55a91282ab37);


            marker_dc9d804e59ae4775880ca9dd490c136a.bindTooltip(
                `<div>
                     Robert McTier VC Memorial Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_5f41b0b3d1eb4059a5e754125a1f42bf = L.marker(
                [-36.42527964, 145.3994481],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2576e971a6d74d91b887db16be62870d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f41b0b3d1eb4059a5e754125a1f42bf.setIcon(icon_2576e971a6d74d91b887db16be62870d);


            marker_5f41b0b3d1eb4059a5e754125a1f42bf.bindTooltip(
                `<div>
                     Lowanna Park
                 </div>`,
                {"sticky": true}
            );


            var marker_1292f31501804ded8ecbaeb3867f2668 = L.marker(
                [-36.4411819, 145.23277919999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_655041d6424640fbb545872dcf2317c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1292f31501804ded8ecbaeb3867f2668.setIcon(icon_655041d6424640fbb545872dcf2317c3);


            marker_1292f31501804ded8ecbaeb3867f2668.bindTooltip(
                `<div>
                     Tatura Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_29c668fedab7471984e758e8d44567d5 = L.marker(
                [-36.38817964, 145.3943503],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_73712db7091c4d21bf130efcdb3b07af = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_29c668fedab7471984e758e8d44567d5.setIcon(icon_73712db7091c4d21bf130efcdb3b07af);


            marker_29c668fedab7471984e758e8d44567d5.bindTooltip(
                `<div>
                     Western Park
                 </div>`,
                {"sticky": true}
            );


            var marker_37bf9c128eaa454183d6670eba4bde6f = L.marker(
                [-36.42649043, 145.2312897],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9b10d510c27845bcaaae847eb7551f2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37bf9c128eaa454183d6670eba4bde6f.setIcon(icon_9b10d510c27845bcaaae847eb7551f2a);


            marker_37bf9c128eaa454183d6670eba4bde6f.bindTooltip(
                `<div>
                     Northlinks Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_396bdd67107b4529b4cee61628a91e71 = L.marker(
                [-36.3541099, 145.3732214],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c9a673e9b2f440169ad1ac0ae7b5eb4c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_396bdd67107b4529b4cee61628a91e71.setIcon(icon_c9a673e9b2f440169ad1ac0ae7b5eb4c);


            marker_396bdd67107b4529b4cee61628a91e71.bindTooltip(
                `<div>
                     Boulevard Estate Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9959956e7b9244eca7fd59eb68c3a666 = L.marker(
                [-36.43137076, 145.40060590000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_80719c318f7446a3a8f28f3ec55f19a9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9959956e7b9244eca7fd59eb68c3a666.setIcon(icon_80719c318f7446a3a8f28f3ec55f19a9);


            marker_9959956e7b9244eca7fd59eb68c3a666.bindTooltip(
                `<div>
                     Pelican Park
                 </div>`,
                {"sticky": true}
            );


            var marker_65fb5517d8cf4c25a6bc70fc190af7d9 = L.marker(
                [-36.61662206, 145.21794599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_412120f6765a44b58727a902b9bea09f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_65fb5517d8cf4c25a6bc70fc190af7d9.setIcon(icon_412120f6765a44b58727a902b9bea09f);


            marker_65fb5517d8cf4c25a6bc70fc190af7d9.bindTooltip(
                `<div>
                     Murchison Riverbank Gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_12f7f09268fb4e5ab69156c3016ceb03 = L.marker(
                [-36.37735001, 145.40682900000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b4e19b0b67d640508180a287a38624aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_12f7f09268fb4e5ab69156c3016ceb03.setIcon(icon_b4e19b0b67d640508180a287a38624aa);


            marker_12f7f09268fb4e5ab69156c3016ceb03.bindTooltip(
                `<div>
                     Deakin Park
                 </div>`,
                {"sticky": true}
            );


            var marker_bce650e1908b47f7a00b28a233d4a312 = L.marker(
                [-36.44159126, 145.2196267],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_80c5ac2d47224e1db0b2685ddc175937 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bce650e1908b47f7a00b28a233d4a312.setIcon(icon_80c5ac2d47224e1db0b2685ddc175937);


            marker_bce650e1908b47f7a00b28a233d4a312.bindTooltip(
                `<div>
                     Joe Ford Drive Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_818074170c9040598b856848d1042607 = L.marker(
                [-36.35652501, 145.3885315],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_656e819af475459791da65f6535d4efa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_818074170c9040598b856848d1042607.setIcon(icon_656e819af475459791da65f6535d4efa);


            marker_818074170c9040598b856848d1042607.bindTooltip(
                `<div>
                     Wanganui Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5a1111bc43b8413c89d669df15ee9f5c = L.marker(
                [-36.38668803, 145.397497],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_eb09baa930cc4a9d9fc75e82dae86976 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5a1111bc43b8413c89d669df15ee9f5c.setIcon(icon_eb09baa930cc4a9d9fc75e82dae86976);


            marker_5a1111bc43b8413c89d669df15ee9f5c.bindTooltip(
                `<div>
                     John Pick Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d2d901c4aec04572bc06abdf2ff3ed13 = L.marker(
                [-36.39506598, 145.35320480000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_00686b222bed457a89fc6844efeb0b94 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d2d901c4aec04572bc06abdf2ff3ed13.setIcon(icon_00686b222bed457a89fc6844efeb0b94);


            marker_d2d901c4aec04572bc06abdf2ff3ed13.bindTooltip(
                `<div>
                     Mooroopna Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7ff52e142d2d44c590d2b538ee22d6f3 = L.marker(
                [-36.39574405, 145.419388],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a7e3a7ec046840468fc465e399757201 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ff52e142d2d44c590d2b538ee22d6f3.setIcon(icon_a7e3a7ec046840468fc465e399757201);


            marker_7ff52e142d2d44c590d2b538ee22d6f3.bindTooltip(
                `<div>
                     Ducat Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_b8ba5a993b89493db7cf3ca3f7680f4f = L.marker(
                [-36.38074127, 145.4008854],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c0b179fcf76f491ba0af8706f462c52e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b8ba5a993b89493db7cf3ca3f7680f4f.setIcon(icon_c0b179fcf76f491ba0af8706f462c52e);


            marker_b8ba5a993b89493db7cf3ca3f7680f4f.bindTooltip(
                `<div>
                     Maude Street Mall
                 </div>`,
                {"sticky": true}
            );


            var marker_eab92dc7c67641499242ac8e1f20ae9b = L.marker(
                [-36.38510705, 145.3803608],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ca22e58eaa504488a680da3afdbc8abd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eab92dc7c67641499242ac8e1f20ae9b.setIcon(icon_ca22e58eaa504488a680da3afdbc8abd);


            marker_eab92dc7c67641499242ac8e1f20ae9b.bindTooltip(
                `<div>
                     KidsTown Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_797d2aa44ddf465e92cbba3567f0d4d7 = L.marker(
                [-36.38759724, 145.39454619999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7dfb35fbab064b989410a4eb2a444f68 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_797d2aa44ddf465e92cbba3567f0d4d7.setIcon(icon_7dfb35fbab064b989410a4eb2a444f68);


            marker_797d2aa44ddf465e92cbba3567f0d4d7.bindTooltip(
                `<div>
                     All Abilities Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c6d10a6b2a9845fdb65e892f54c77c7c = L.marker(
                [-36.38706588, 145.3972663],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_46361a175bba4d778f56012456d81233 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c6d10a6b2a9845fdb65e892f54c77c7c.setIcon(icon_46361a175bba4d778f56012456d81233);


            marker_c6d10a6b2a9845fdb65e892f54c77c7c.bindTooltip(
                `<div>
                     Victoria Park Lake Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_f4e5a7abf78f49c99be1b7926f29589c = L.marker(
                [-36.39442569, 145.3543483],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7c964f63552c4c94af52682691813e9f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f4e5a7abf78f49c99be1b7926f29589c.setIcon(icon_7c964f63552c4c94af52682691813e9f);


            marker_f4e5a7abf78f49c99be1b7926f29589c.bindTooltip(
                `<div>
                     Ferrari Park
                 </div>`,
                {"sticky": true}
            );


            var marker_0bb4da8e60d4445e901874ce19c4fa9c = L.marker(
                [-36.786952, 145.151046],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_86494f09b8564b14922e0d4052140ec7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0bb4da8e60d4445e901874ce19c4fa9c.setIcon(icon_86494f09b8564b14922e0d4052140ec7);


            marker_0bb4da8e60d4445e901874ce19c4fa9c.bindTooltip(
                `<div>
                     Blayney Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_69fbc17fd8fa409aa45c177d4f5b69c0 = L.marker(
                [-36.786226, 145.14903],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0416a2ba0e884715a93a327ba78f38a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69fbc17fd8fa409aa45c177d4f5b69c0.setIcon(icon_0416a2ba0e884715a93a327ba78f38a4);


            marker_69fbc17fd8fa409aa45c177d4f5b69c0.bindTooltip(
                `<div>
                     Buckley Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3a9fdb19297b4153b49829f81d3a14f8 = L.marker(
                [-36.642494, 145.543081],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_60e49158e7c94bed8ed1a137f275a19a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3a9fdb19297b4153b49829f81d3a14f8.setIcon(icon_60e49158e7c94bed8ed1a137f275a19a);


            marker_3a9fdb19297b4153b49829f81d3a14f8.bindTooltip(
                `<div>
                     Moglonemby Hall Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c311f332bfae453ca788e8c7416f1aec = L.marker(
                [-36.897393, 145.230175],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b13edc6f50d748db9ccb97024fb738ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c311f332bfae453ca788e8c7416f1aec.setIcon(icon_b13edc6f50d748db9ccb97024fb738ff);


            marker_c311f332bfae453ca788e8c7416f1aec.bindTooltip(
                `<div>
                     Jubilee Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4552ff3e574a4faf9dd79258586da52d = L.marker(
                [-36.752315, 145.573133],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c3de1ff9327a4485972b0476b82a2289 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4552ff3e574a4faf9dd79258586da52d.setIcon(icon_c3de1ff9327a4485972b0476b82a2289);


            marker_4552ff3e574a4faf9dd79258586da52d.bindTooltip(
                `<div>
                     Euroa Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_54291d87b036480aa4c9f24e2fcf573b = L.marker(
                [-36.636635, 145.718104],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0f434d3cd2243bdbae2ea9076f9722b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54291d87b036480aa4c9f24e2fcf573b.setIcon(icon_f0f434d3cd2243bdbae2ea9076f9722b);


            marker_54291d87b036480aa4c9f24e2fcf573b.bindTooltip(
                `<div>
                     Violet Town Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f34e76ae075e41beb695ed69abb448db = L.marker(
                [-36.636072, 145.716663],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b639189f3da34d1d827965ad5d380204 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f34e76ae075e41beb695ed69abb448db.setIcon(icon_b639189f3da34d1d827965ad5d380204);


            marker_f34e76ae075e41beb695ed69abb448db.bindTooltip(
                `<div>
                     Violet Town Lions Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fcd74db78c0244889a6dc7035b680357 = L.marker(
                [-36.782039, 145.157388],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3f51fba2ec9e486095fbb61361318f7a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fcd74db78c0244889a6dc7035b680357.setIcon(icon_3f51fba2ec9e486095fbb61361318f7a);


            marker_fcd74db78c0244889a6dc7035b680357.bindTooltip(
                `<div>
                     Nagambie Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d5792db913464c28a66e420a84644080 = L.marker(
                [-36.804674, 145.426609],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ad3c3f00a32746db826aa6dddc3ffe75 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5792db913464c28a66e420a84644080.setIcon(icon_ad3c3f00a32746db826aa6dddc3ffe75);


            marker_d5792db913464c28a66e420a84644080.bindTooltip(
                `<div>
                     Longwood Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ba8f7e9ab5524f98911b4ef3c196c78f = L.marker(
                [-36.793434, 145.147919],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0765929e51af428d900e55f1292d80d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ba8f7e9ab5524f98911b4ef3c196c78f.setIcon(icon_0765929e51af428d900e55f1292d80d4);


            marker_ba8f7e9ab5524f98911b4ef3c196c78f.bindTooltip(
                `<div>
                     Nagambie Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0edc3bf97c1643b0b94e95aec9b0179b = L.marker(
                [-36.850099, 145.73898399999996],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4e81d622bb2a47139ac5bfab2b3305ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0edc3bf97c1643b0b94e95aec9b0179b.setIcon(icon_4e81d622bb2a47139ac5bfab2b3305ef);


            marker_0edc3bf97c1643b0b94e95aec9b0179b.bindTooltip(
                `<div>
                     Strathbogie Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2ace62fb64ac4a4a9931d95743dc5ded = L.marker(
                [-36.635462, 145.72118],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_34f5dea2777f40cf9618ee16081f2bb2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ace62fb64ac4a4a9931d95743dc5ded.setIcon(icon_34f5dea2777f40cf9618ee16081f2bb2);


            marker_2ace62fb64ac4a4a9931d95743dc5ded.bindTooltip(
                `<div>
                     Violet Town Recreation Reserve East Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_dcfaf1f3fcfe443ca34b008a249de0d0 = L.marker(
                [-36.634512, 145.718727],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5649647cef734fcd98bbb73ad311ddca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dcfaf1f3fcfe443ca34b008a249de0d0.setIcon(icon_5649647cef734fcd98bbb73ad311ddca);


            marker_dcfaf1f3fcfe443ca34b008a249de0d0.bindTooltip(
                `<div>
                     Violet Town Recreation Reserve West Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_20ca5e20708f4644b34f07673bde7056 = L.marker(
                [-36.879924, 145.528681],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e55866f45bc742259a35cf90014bf5df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20ca5e20708f4644b34f07673bde7056.setIcon(icon_e55866f45bc742259a35cf90014bf5df);


            marker_20ca5e20708f4644b34f07673bde7056.bindTooltip(
                `<div>
                     Creightons Creek Recreation Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_51e04c5048254b368990ca65174b26fe = L.marker(
                [-36.778513, 145.149148],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5f3b50c85c8a4c6d84005edc92e3ddc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_51e04c5048254b368990ca65174b26fe.setIcon(icon_5f3b50c85c8a4c6d84005edc92e3ddc5);


            marker_51e04c5048254b368990ca65174b26fe.bindTooltip(
                `<div>
                     River Street Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e7db48d19d384d6aad29e19421739401 = L.marker(
                [-36.751051, 145.572811],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_990a8b19fc8c4e3883749f78fbc9837b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7db48d19d384d6aad29e19421739401.setIcon(icon_990a8b19fc8c4e3883749f78fbc9837b);


            marker_e7db48d19d384d6aad29e19421739401.bindTooltip(
                `<div>
                     Euroa Rotary Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c6fa5dcafed74104ac6f012709955b41 = L.marker(
                [-36.751455, 145.573195],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_07f8503027f8456ea5180db38277dcde = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c6fa5dcafed74104ac6f012709955b41.setIcon(icon_07f8503027f8456ea5180db38277dcde);


            marker_c6fa5dcafed74104ac6f012709955b41.bindTooltip(
                `<div>
                     Euroa Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_39ec73625d4645d9987e8f2c6735e6fc = L.marker(
                [-36.901297, 145.237817],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_67a9c5bd477f4e9db1d90c31ddaab63a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_39ec73625d4645d9987e8f2c6735e6fc.setIcon(icon_67a9c5bd477f4e9db1d90c31ddaab63a);


            marker_39ec73625d4645d9987e8f2c6735e6fc.bindTooltip(
                `<div>
                     Avenel Kindergarten Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a7d42654521e45b5bae5d5e485975448 = L.marker(
                [-36.756497, 145.568806],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d59764c739eb4ea6a611558b2540cd26 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7d42654521e45b5bae5d5e485975448.setIcon(icon_d59764c739eb4ea6a611558b2540cd26);


            marker_a7d42654521e45b5bae5d5e485975448.bindTooltip(
                `<div>
                     Euroa Lions Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c3dc3f0e1e0b40999f42b43b4620f45d = L.marker(
                [-36.746804, 145.56609599999996],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ac7fccdb4be54b30b95f3a0dba5672d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c3dc3f0e1e0b40999f42b43b4620f45d.setIcon(icon_ac7fccdb4be54b30b95f3a0dba5672d6);


            marker_c3dc3f0e1e0b40999f42b43b4620f45d.bindTooltip(
                `<div>
                     Euroa Rotary Bicentennial Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_274e3940afb54a3498ff87bb5e3d5ea9 = L.marker(
                [-36.6359, 145.722],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_463e1fd6166c49e9bd70dedfa709ecf8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_274e3940afb54a3498ff87bb5e3d5ea9.setIcon(icon_463e1fd6166c49e9bd70dedfa709ecf8);


            marker_274e3940afb54a3498ff87bb5e3d5ea9.bindTooltip(
                `<div>
                     Violet Town Recreation Reserve Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_ef3a2d28ce1a4db9a7f3283863be91af = L.marker(
                [-37.790419614, 145.11452704],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_aa05029686e848769b73013e9c9565ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ef3a2d28ce1a4db9a7f3283863be91af.setIcon(icon_aa05029686e848769b73013e9c9565ef);


            marker_ef3a2d28ce1a4db9a7f3283863be91af.bindTooltip(
                `<div>
                     Acheron Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2f6e24248b854a91ba4037d2c0832306 = L.marker(
                [-37.787738058, 145.168614683],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c85468513b08404f912e12b64a25dd9f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2f6e24248b854a91ba4037d2c0832306.setIcon(icon_c85468513b08404f912e12b64a25dd9f);


            marker_2f6e24248b854a91ba4037d2c0832306.bindTooltip(
                `<div>
                     Aintree Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_71f4c6ca1da04f67b79c809ec05aa3bc = L.marker(
                [-37.7751094, 145.180724185],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8dd41a71f6d84778b2d437798fe72031 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71f4c6ca1da04f67b79c809ec05aa3bc.setIcon(icon_8dd41a71f6d84778b2d437798fe72031);


            marker_71f4c6ca1da04f67b79c809ec05aa3bc.bindTooltip(
                `<div>
                     Allara Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_697b33ecf3d142068221c1256195c4b0 = L.marker(
                [-37.775784611, 145.109228004],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_057b181631fc45b0842f7cbe111dbc2b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_697b33ecf3d142068221c1256195c4b0.setIcon(icon_057b181631fc45b0842f7cbe111dbc2b);


            marker_697b33ecf3d142068221c1256195c4b0.bindTooltip(
                `<div>
                     Anthony Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8985d0061dd042a2b8b16f2ae7579cc2 = L.marker(
                [-37.772343131999996, 145.161341484],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6c47696912684b929de7ff5c984d983d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8985d0061dd042a2b8b16f2ae7579cc2.setIcon(icon_6c47696912684b929de7ff5c984d983d);


            marker_8985d0061dd042a2b8b16f2ae7579cc2.bindTooltip(
                `<div>
                     Apple Blossom Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_595c39b0c960462fa3e71e2fc834ae7a = L.marker(
                [-37.802164182, 145.176734092],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2edb5742fcdc49e9ae0dd7dbaeba87a6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_595c39b0c960462fa3e71e2fc834ae7a.setIcon(icon_2edb5742fcdc49e9ae0dd7dbaeba87a6);


            marker_595c39b0c960462fa3e71e2fc834ae7a.bindTooltip(
                `<div>
                     Aranga Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8f191057638b460ca512b51584eb90a1 = L.marker(
                [-37.798901676999996, 145.17119547299998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_172f479faa51436eacdfcc4a6451204a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f191057638b460ca512b51584eb90a1.setIcon(icon_172f479faa51436eacdfcc4a6451204a);


            marker_8f191057638b460ca512b51584eb90a1.bindTooltip(
                `<div>
                     Argyle Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4f020975ae54412a91e0ea3c098d8cf5 = L.marker(
                [-37.784991223, 145.159038319],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ffe8abf5cb7145d29c56de948bedf75d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4f020975ae54412a91e0ea3c098d8cf5.setIcon(icon_ffe8abf5cb7145d29c56de948bedf75d);


            marker_4f020975ae54412a91e0ea3c098d8cf5.bindTooltip(
                `<div>
                     Dryden Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ad68bbfc1a58458c98d1fdf678d11dd1 = L.marker(
                [-37.800964339000004, 145.180379979],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6cc1ad49d5694f1c9ec4f780012d68d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad68bbfc1a58458c98d1fdf678d11dd1.setIcon(icon_6cc1ad49d5694f1c9ec4f780012d68d3);


            marker_ad68bbfc1a58458c98d1fdf678d11dd1.bindTooltip(
                `<div>
                     Astelot Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_303a2fce611946c0a0d201f03267f509 = L.marker(
                [-37.770241694, 145.112585435],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7fb7a2a4165e4b92b15eca9d65c4b872 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_303a2fce611946c0a0d201f03267f509.setIcon(icon_7fb7a2a4165e4b92b15eca9d65c4b872);


            marker_303a2fce611946c0a0d201f03267f509.bindTooltip(
                `<div>
                     Balmoral Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5bea59003b8c47f38836f57fdcfc6693 = L.marker(
                [-37.797433397, 145.1529424],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_97a5095aa9914926b7bb1a13693c4bdb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bea59003b8c47f38836f57fdcfc6693.setIcon(icon_97a5095aa9914926b7bb1a13693c4bdb);


            marker_5bea59003b8c47f38836f57fdcfc6693.bindTooltip(
                `<div>
                     Thea Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_549011f6a3484af49cd20f32b176871b = L.marker(
                [-37.759029733, 145.154709907],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_927385ab57b94565b35676a6c5f4d5d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_549011f6a3484af49cd20f32b176871b.setIcon(icon_927385ab57b94565b35676a6c5f4d5d5);


            marker_549011f6a3484af49cd20f32b176871b.bindTooltip(
                `<div>
                     Bebs Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ed8ac24b1dd4429686fc9d1d10f04dfd = L.marker(
                [-37.791444019000004, 145.16635006799999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9ba90d37faf648698b9eb4c4a833507e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ed8ac24b1dd4429686fc9d1d10f04dfd.setIcon(icon_9ba90d37faf648698b9eb4c4a833507e);


            marker_ed8ac24b1dd4429686fc9d1d10f04dfd.bindTooltip(
                `<div>
                     Beverley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_576e857ffc2f4b8c87680133e2e61573 = L.marker(
                [-37.75748066, 145.10920780200001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_95192a2138fd442b8a0df42d50508aef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_576e857ffc2f4b8c87680133e2e61573.setIcon(icon_95192a2138fd442b8a0df42d50508aef);


            marker_576e857ffc2f4b8c87680133e2e61573.bindTooltip(
                `<div>
                     Bimbadeen Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c574d035a9ce4e20a98560670aa444b0 = L.marker(
                [-37.780763461999996, 145.121456501],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a7292a87d2044f958ef37087f5ad34e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c574d035a9ce4e20a98560670aa444b0.setIcon(icon_a7292a87d2044f958ef37087f5ad34e7);


            marker_c574d035a9ce4e20a98560670aa444b0.bindTooltip(
                `<div>
                     Brendan Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d5bb52d8101842bf8c379ddf05320826 = L.marker(
                [-37.77251307, 145.071932876],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e1597bc7f0f044f9b7c2d0e256144972 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5bb52d8101842bf8c379ddf05320826.setIcon(icon_e1597bc7f0f044f9b7c2d0e256144972);


            marker_d5bb52d8101842bf8c379ddf05320826.bindTooltip(
                `<div>
                     Bulleen Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1bfe1842f5424648ac876b7e69f976d6 = L.marker(
                [-37.792880196, 145.147515553],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9c399c946c824b0c8b300d4e23e28710 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1bfe1842f5424648ac876b7e69f976d6.setIcon(icon_9c399c946c824b0c8b300d4e23e28710);


            marker_1bfe1842f5424648ac876b7e69f976d6.bindTooltip(
                `<div>
                     Bullen Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_88206ec928274001af2581076b1aa422 = L.marker(
                [-37.779434089, 145.119530777],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d0a480faa01842c197cf71ae10d0b9e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88206ec928274001af2581076b1aa422.setIcon(icon_d0a480faa01842c197cf71ae10d0b9e2);


            marker_88206ec928274001af2581076b1aa422.bindTooltip(
                `<div>
                     Burgundy Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8bd044ab3981456a8816c8329749c6c8 = L.marker(
                [-37.780245461, 145.179848877],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5b10b032013244a4ad94f581cff287f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8bd044ab3981456a8816c8329749c6c8.setIcon(icon_5b10b032013244a4ad94f581cff287f2);


            marker_8bd044ab3981456a8816c8329749c6c8.bindTooltip(
                `<div>
                     Cameron Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5ac0006f640443309b9f0f9d960b7c8c = L.marker(
                [-37.789463138, 145.118381761],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d9cecd1099704f6f89c13c73cb51a8ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5ac0006f640443309b9f0f9d960b7c8c.setIcon(icon_d9cecd1099704f6f89c13c73cb51a8ab);


            marker_5ac0006f640443309b9f0f9d960b7c8c.bindTooltip(
                `<div>
                     Carawatha Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9e895ef19bba4c51bf64eb676faf9dd9 = L.marker(
                [-37.780690306, 145.174267601],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d1e3802ee7a948f38af2950c3e3797d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e895ef19bba4c51bf64eb676faf9dd9.setIcon(icon_d1e3802ee7a948f38af2950c3e3797d4);


            marker_9e895ef19bba4c51bf64eb676faf9dd9.bindTooltip(
                `<div>
                     Cat Jump Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9861c674c6d24887a4244fb975cc1a4f = L.marker(
                [-37.786780416999996, 145.15465830899998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_67452d31f3b14d6783ec0ab6882e7625 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9861c674c6d24887a4244fb975cc1a4f.setIcon(icon_67452d31f3b14d6783ec0ab6882e7625);


            marker_9861c674c6d24887a4244fb975cc1a4f.bindTooltip(
                `<div>
                     Celeste Reserve East Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2c53b7b0fddf423392892161aa4d473a = L.marker(
                [-37.786254932, 145.150177394],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cb72f977b8e742f4bb3c768d1179c8f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2c53b7b0fddf423392892161aa4d473a.setIcon(icon_cb72f977b8e742f4bb3c768d1179c8f9);


            marker_2c53b7b0fddf423392892161aa4d473a.bindTooltip(
                `<div>
                     Celeste Reserve West Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_79cb3a4427a14916875b16f81b8c1d03 = L.marker(
                [-37.786828147, 145.165607387],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_60271bbf1f7c4d419d24ff9d877232e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_79cb3a4427a14916875b16f81b8c1d03.setIcon(icon_60271bbf1f7c4d419d24ff9d877232e5);


            marker_79cb3a4427a14916875b16f81b8c1d03.bindTooltip(
                `<div>
                     Carisbrook Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_58c08cd5e93d40c0ab7bb1f84482fef1 = L.marker(
                [-37.766757728, 145.238262093],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a93a82ef921e4a7cb988994d6fd2fcd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_58c08cd5e93d40c0ab7bb1f84482fef1.setIcon(icon_a93a82ef921e4a7cb988994d6fd2fcd7);


            marker_58c08cd5e93d40c0ab7bb1f84482fef1.bindTooltip(
                `<div>
                     Colman Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3c9c3ab7397a4802b3cd0bf4df626bff = L.marker(
                [-37.791205519, 145.139326133],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cd5a295d9db24669ae0954657e3c1a7c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c9c3ab7397a4802b3cd0bf4df626bff.setIcon(icon_cd5a295d9db24669ae0954657e3c1a7c);


            marker_3c9c3ab7397a4802b3cd0bf4df626bff.bindTooltip(
                `<div>
                     Coolabah Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f9a322fda8224189b405e25c820a7c20 = L.marker(
                [-37.759548426, 145.105011964],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e0ba244aeae14229b29b2fc5ce00583e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9a322fda8224189b405e25c820a7c20.setIcon(icon_e0ba244aeae14229b29b2fc5ce00583e);


            marker_f9a322fda8224189b405e25c820a7c20.bindTooltip(
                `<div>
                     Corroboree Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0ebb34b3a3ec4b928984579eb6603aa9 = L.marker(
                [-37.774265579, 145.121577274],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f10d07d6e2e54680a98f757d8cffbd7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0ebb34b3a3ec4b928984579eb6603aa9.setIcon(icon_f10d07d6e2e54680a98f757d8cffbd7d);


            marker_0ebb34b3a3ec4b928984579eb6603aa9.bindTooltip(
                `<div>
                     Crawford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_bc1a03333a234fe6b4a2b0bd0ada62d3 = L.marker(
                [-37.784858261, 145.176497349],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cff6c1cf53cf4976b8875d563b5fee32 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc1a03333a234fe6b4a2b0bd0ada62d3.setIcon(icon_cff6c1cf53cf4976b8875d563b5fee32);


            marker_bc1a03333a234fe6b4a2b0bd0ada62d3.bindTooltip(
                `<div>
                     Daniel Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b93481d5a65c4083adf54073311aebc4 = L.marker(
                [-37.793899421999996, 145.119037073],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1c86ae457e9f4cc4b9b7a710314b6d2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b93481d5a65c4083adf54073311aebc4.setIcon(icon_1c86ae457e9f4cc4b9b7a710314b6d2a);


            marker_b93481d5a65c4083adf54073311aebc4.bindTooltip(
                `<div>
                     Davis Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_51a9c7d3a6bc4955ac090b1420ab2781 = L.marker(
                [-37.785116684, 145.149221519],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5be6a655fa61485f811d46531bb4ac2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_51a9c7d3a6bc4955ac090b1420ab2781.setIcon(icon_5be6a655fa61485f811d46531bb4ac2c);


            marker_51a9c7d3a6bc4955ac090b1420ab2781.bindTooltip(
                `<div>
                     Jocelyn Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fd1e90f0aec145bea215e96d627fd548 = L.marker(
                [-37.764521004, 145.125059618],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a0968b8ddc7e46fc88f87922fbeee410 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fd1e90f0aec145bea215e96d627fd548.setIcon(icon_a0968b8ddc7e46fc88f87922fbeee410);


            marker_fd1e90f0aec145bea215e96d627fd548.bindTooltip(
                `<div>
                     Dellfield Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_bbe8075e8dcd4c87b888ddccecd34c04 = L.marker(
                [-37.773849299, 145.21762268],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c07273af69124368b5ba6ff2f8c1c08b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bbe8075e8dcd4c87b888ddccecd34c04.setIcon(icon_c07273af69124368b5ba6ff2f8c1c08b);


            marker_bbe8075e8dcd4c87b888ddccecd34c04.bindTooltip(
                `<div>
                     Domeney Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_cb65308f8f504b52b1d1c6a6d03f2850 = L.marker(
                [-37.788218468000004, 145.152052893],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f6ae23ce8d7043eab2ebe8d3784ae446 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cb65308f8f504b52b1d1c6a6d03f2850.setIcon(icon_f6ae23ce8d7043eab2ebe8d3784ae446);


            marker_cb65308f8f504b52b1d1c6a6d03f2850.bindTooltip(
                `<div>
                     Doncaster Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_433f1cac504d453da34c179d0bad3da8 = L.marker(
                [-37.796130247, 145.17640408399998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5e4606ff625949858a1cf53654eac981 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_433f1cac504d453da34c179d0bad3da8.setIcon(icon_5e4606ff625949858a1cf53654eac981);


            marker_433f1cac504d453da34c179d0bad3da8.bindTooltip(
                `<div>
                     Donvale Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ab5c043225d248429e840a54af3f7c30 = L.marker(
                [-37.731210653000005, 145.27286425100002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_717c570010e244549ed76eca6a5b69de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ab5c043225d248429e840a54af3f7c30.setIcon(icon_717c570010e244549ed76eca6a5b69de);


            marker_ab5c043225d248429e840a54af3f7c30.bindTooltip(
                `<div>
                     Dudley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_88bfc8097ee44423b5e9820e1cedbdb3 = L.marker(
                [-37.762398415, 145.08753863200002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_edbad020997d45df9538e40063c62c37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_88bfc8097ee44423b5e9820e1cedbdb3.setIcon(icon_edbad020997d45df9538e40063c62c37);


            marker_88bfc8097ee44423b5e9820e1cedbdb3.bindTooltip(
                `<div>
                     Dumossa Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0f825290b5ff4268b77bc9a659a7e2b8 = L.marker(
                [-37.79449498, 145.12422181899998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_084423b4469042f1a47eb2f5f5ddcba8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0f825290b5ff4268b77bc9a659a7e2b8.setIcon(icon_084423b4469042f1a47eb2f5f5ddcba8);


            marker_0f825290b5ff4268b77bc9a659a7e2b8.bindTooltip(
                `<div>
                     Eildon Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b45a91fde1b64cdd8b58f12375b8d92b = L.marker(
                [-37.78312175, 145.177945746],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_064436af9dc94b8e9419b95416dcc1df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b45a91fde1b64cdd8b58f12375b8d92b.setIcon(icon_064436af9dc94b8e9419b95416dcc1df);


            marker_b45a91fde1b64cdd8b58f12375b8d92b.bindTooltip(
                `<div>
                     Fahey Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_4533bf20cfa64ba099fe3227b269e69a = L.marker(
                [-37.753371444, 145.170206399],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_390d5ed4716d4d1980bcc76c3e63107c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4533bf20cfa64ba099fe3227b269e69a.setIcon(icon_390d5ed4716d4d1980bcc76c3e63107c);


            marker_4533bf20cfa64ba099fe3227b269e69a.bindTooltip(
                `<div>
                     Fernlea Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_307b449e569a44f5bbf828181f27b8a1 = L.marker(
                [-37.76076307, 145.15750568],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fdf6fd7703504cb2ba30f7999fa108a6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_307b449e569a44f5bbf828181f27b8a1.setIcon(icon_fdf6fd7703504cb2ba30f7999fa108a6);


            marker_307b449e569a44f5bbf828181f27b8a1.bindTooltip(
                `<div>
                     Fielding Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c3e3874ba49c480483720e3e5a9aa6c5 = L.marker(
                [-37.753848399, 145.115772266],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_25c29bcbaee34dc2bbd9d1bb251eb94f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c3e3874ba49c480483720e3e5a9aa6c5.setIcon(icon_25c29bcbaee34dc2bbd9d1bb251eb94f);


            marker_c3e3874ba49c480483720e3e5a9aa6c5.bindTooltip(
                `<div>
                     Finns Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7d7a1572d2f844bbbe8c0116d1ee9fc4 = L.marker(
                [-37.78123201, 145.149919162],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2543fc1e59fa44e19793ae3ba59ab828 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7d7a1572d2f844bbbe8c0116d1ee9fc4.setIcon(icon_2543fc1e59fa44e19793ae3ba59ab828);


            marker_7d7a1572d2f844bbbe8c0116d1ee9fc4.bindTooltip(
                `<div>
                     Dehnert Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_91f8722b52c846169b896a3113e85243 = L.marker(
                [-37.764977006, 145.101143069],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_72c7e2ff2e7e4b149bf05d170058c731 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_91f8722b52c846169b896a3113e85243.setIcon(icon_72c7e2ff2e7e4b149bf05d170058c731);


            marker_91f8722b52c846169b896a3113e85243.bindTooltip(
                `<div>
                     Gertrude Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a487f93099284a4eaed6f7e68f4a8d7e = L.marker(
                [-37.758578263000004, 145.116482536],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4f4bf14f364449af89be93e7afc9d16c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a487f93099284a4eaed6f7e68f4a8d7e.setIcon(icon_4f4bf14f364449af89be93e7afc9d16c);


            marker_a487f93099284a4eaed6f7e68f4a8d7e.bindTooltip(
                `<div>
                     Paterson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_02e6019f346c418ab1600fd3ae7682a3 = L.marker(
                [-37.783371099, 145.106973627],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_44b97898c4c1475aae3feabb71466e4d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_02e6019f346c418ab1600fd3ae7682a3.setIcon(icon_44b97898c4c1475aae3feabb71466e4d);


            marker_02e6019f346c418ab1600fd3ae7682a3.bindTooltip(
                `<div>
                     Glenda Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a5173cca84ca493c90e68d82e0e42f05 = L.marker(
                [-37.765402868, 145.09333287],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cf1bf5c32e8947b89849fc0aa2e61913 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a5173cca84ca493c90e68d82e0e42f05.setIcon(icon_cf1bf5c32e8947b89849fc0aa2e61913);


            marker_a5173cca84ca493c90e68d82e0e42f05.bindTooltip(
                `<div>
                     Grant Olson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_65dbb1f3fc65409aa743bd13168e9b7f = L.marker(
                [-37.766938168, 145.16246301299998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ccd7ce3f0ceb428cb1762a25ca4b1cc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_65dbb1f3fc65409aa743bd13168e9b7f.setIcon(icon_ccd7ce3f0ceb428cb1762a25ca4b1cc5);


            marker_65dbb1f3fc65409aa743bd13168e9b7f.bindTooltip(
                `<div>
                     Bronte Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_d77ded82749a420abb191b39aafc315d = L.marker(
                [-37.780827139, 145.140698654],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_001c5093c5b544b4b5ab39ce3cebda59 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d77ded82749a420abb191b39aafc315d.setIcon(icon_001c5093c5b544b4b5ab39ce3cebda59);


            marker_d77ded82749a420abb191b39aafc315d.bindTooltip(
                `<div>
                     Grover Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8f45700d301941058cd57c70a4ae7b2d = L.marker(
                [-37.794754386, 145.138685137],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_eb234d4d4bb84b37a3c0659920608a4a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f45700d301941058cd57c70a4ae7b2d.setIcon(icon_eb234d4d4bb84b37a3c0659920608a4a);


            marker_8f45700d301941058cd57c70a4ae7b2d.bindTooltip(
                `<div>
                     Hampshire Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_765a3f486383446ba7597b0e5d13b06b = L.marker(
                [-37.791043646999995, 145.124324551],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ef71a7263ade4b5d97c5d1b09d5ebd61 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_765a3f486383446ba7597b0e5d13b06b.setIcon(icon_ef71a7263ade4b5d97c5d1b09d5ebd61);


            marker_765a3f486383446ba7597b0e5d13b06b.bindTooltip(
                `<div>
                     Hanke Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d1d1f33956b54721a105564c0eb3ce54 = L.marker(
                [-37.76673471, 145.17478754],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f1ea9bc657a3433ebefe0ae2c64006cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d1d1f33956b54721a105564c0eb3ce54.setIcon(icon_f1ea9bc657a3433ebefe0ae2c64006cc);


            marker_d1d1f33956b54721a105564c0eb3ce54.bindTooltip(
                `<div>
                     Happy Valley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1d1a42930f6b4c3da0e9c736b3d37075 = L.marker(
                [-37.775090254, 145.09858440899998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4f6ae30c516f48eaa430bc6ddf1f8cd8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d1a42930f6b4c3da0e9c736b3d37075.setIcon(icon_4f6ae30c516f48eaa430bc6ddf1f8cd8);


            marker_1d1a42930f6b4c3da0e9c736b3d37075.bindTooltip(
                `<div>
                     Harold Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_62ce4df40c6340c28312e0244992d086 = L.marker(
                [-37.759338187, 145.113543145],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_33ec6ebc6a884d54b9f244040527072b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_62ce4df40c6340c28312e0244992d086.setIcon(icon_33ec6ebc6a884d54b9f244040527072b);


            marker_62ce4df40c6340c28312e0244992d086.bindTooltip(
                `<div>
                     Heath Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_895ab1928d72491ab693927008cb327a = L.marker(
                [-37.769154162, 145.135886984],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e0113a38c0624bdc8cfc4c10e559f153 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_895ab1928d72491ab693927008cb327a.setIcon(icon_e0113a38c0624bdc8cfc4c10e559f153);


            marker_895ab1928d72491ab693927008cb327a.bindTooltip(
                `<div>
                     Hillcroft Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1fb815459b464bfd8528d278bf38d6e5 = L.marker(
                [-37.757121798, 145.16390252600002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f1c642ea00b1437d83292fe2f375c901 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1fb815459b464bfd8528d278bf38d6e5.setIcon(icon_f1c642ea00b1437d83292fe2f375c901);


            marker_1fb815459b464bfd8528d278bf38d6e5.bindTooltip(
                `<div>
                     Hollywood Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_abecfc32b8d04c928648f0ba90851ed0 = L.marker(
                [-37.767262005999996, 145.103998523],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_412e986a5491491193dd58ee66070a9d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_abecfc32b8d04c928648f0ba90851ed0.setIcon(icon_412e986a5491491193dd58ee66070a9d);


            marker_abecfc32b8d04c928648f0ba90851ed0.bindTooltip(
                `<div>
                     Hodgson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6cfccf93deb14fe2822fa0e35e687dfe = L.marker(
                [-37.772907862, 145.117482902],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b900d1b5da7046b7a98aeb458cd765b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6cfccf93deb14fe2822fa0e35e687dfe.setIcon(icon_b900d1b5da7046b7a98aeb458cd765b4);


            marker_6cfccf93deb14fe2822fa0e35e687dfe.bindTooltip(
                `<div>
                     Ironbark Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2e31f79749c1489c8e10e1082165435d = L.marker(
                [-37.756483802, 145.141266963],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_00ed86f7cf6841aba2a297d8fcdd55c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e31f79749c1489c8e10e1082165435d.setIcon(icon_00ed86f7cf6841aba2a297d8fcdd55c4);


            marker_2e31f79749c1489c8e10e1082165435d.bindTooltip(
                `<div>
                     Mandella Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_436abeb3ac694007b1fc5cab32a83fa5 = L.marker(
                [-37.764937275, 145.16239801700002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_79fe01f2817f448a846092dcfae47970 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_436abeb3ac694007b1fc5cab32a83fa5.setIcon(icon_79fe01f2817f448a846092dcfae47970);


            marker_436abeb3ac694007b1fc5cab32a83fa5.bindTooltip(
                `<div>
                     Jenkins Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3f1f467c5a5b4596bba35dbbda0c3e48 = L.marker(
                [-37.759556134, 145.288252852],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_72c98905fb3f40fb8e432eb53939337f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f1f467c5a5b4596bba35dbbda0c3e48.setIcon(icon_72c98905fb3f40fb8e432eb53939337f);


            marker_3f1f467c5a5b4596bba35dbbda0c3e48.bindTooltip(
                `<div>
                     Joroma Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d4481f63387e40adb61ed5eb5e4ab340 = L.marker(
                [-37.760740309, 145.131832527],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_18b5efaf32f842d092d680d23d82a16f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4481f63387e40adb61ed5eb5e4ab340.setIcon(icon_18b5efaf32f842d092d680d23d82a16f);


            marker_d4481f63387e40adb61ed5eb5e4ab340.bindTooltip(
                `<div>
                     June Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6c4773b6b1c140248986b4958687b9db = L.marker(
                [-37.794520326, 145.116641919],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4fda8858350940379d8e7bee1d192bdd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c4773b6b1c140248986b4958687b9db.setIcon(icon_4fda8858350940379d8e7bee1d192bdd);


            marker_6c4773b6b1c140248986b4958687b9db.bindTooltip(
                `<div>
                     Katrina Gully Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0bbeecfa1f1c4b21819642917a8ddfe1 = L.marker(
                [-37.759501088, 145.144275751],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_390786b768994d288086301efcfb2623 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0bbeecfa1f1c4b21819642917a8ddfe1.setIcon(icon_390786b768994d288086301efcfb2623);


            marker_0bbeecfa1f1c4b21819642917a8ddfe1.bindTooltip(
                `<div>
                     Kenman Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_08743213f7bb45caa49c11aa57e95d16 = L.marker(
                [-37.75670621, 145.28925794399998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_22ff811d79df440b997c7b3f1c446a79 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_08743213f7bb45caa49c11aa57e95d16.setIcon(icon_22ff811d79df440b997c7b3f1c446a79);


            marker_08743213f7bb45caa49c11aa57e95d16.bindTooltip(
                `<div>
                     Kerry Anne Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0855cb5072d745b4aafae1ba5bfb317d = L.marker(
                [-37.78348274, 145.146373965],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4c002588022e4aed98b87f3ded6310bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0855cb5072d745b4aafae1ba5bfb317d.setIcon(icon_4c002588022e4aed98b87f3ded6310bf);


            marker_0855cb5072d745b4aafae1ba5bfb317d.bindTooltip(
                `<div>
                     Kerry Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f004ef3a5e5b43199956246faa3e6cf8 = L.marker(
                [-37.800828095, 145.182563501],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4c29b99de5494a189d26497439824db0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f004ef3a5e5b43199956246faa3e6cf8.setIcon(icon_4c29b99de5494a189d26497439824db0);


            marker_f004ef3a5e5b43199956246faa3e6cf8.bindTooltip(
                `<div>
                     Kevin Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9198f6cc7f1b47399515e9c791381713 = L.marker(
                [-37.785666690999996, 145.10358464799998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_69fa4f16d24446eba142a6cb6ccf94f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9198f6cc7f1b47399515e9c791381713.setIcon(icon_69fa4f16d24446eba142a6cb6ccf94f1);


            marker_9198f6cc7f1b47399515e9c791381713.bindTooltip(
                `<div>
                     Kingsnorth Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0cbcfcfe33e142cc97bea198694e85b5 = L.marker(
                [-37.79566426, 145.133947524],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_11630f7b43a94834affde9b66e2e3f24 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0cbcfcfe33e142cc97bea198694e85b5.setIcon(icon_11630f7b43a94834affde9b66e2e3f24);


            marker_0cbcfcfe33e142cc97bea198694e85b5.bindTooltip(
                `<div>
                     Windella Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_28c91e3769674e629c6cddb30060af24 = L.marker(
                [-37.801921445, 145.171100334],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e94a278863d34cedb81cfa471c869741 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_28c91e3769674e629c6cddb30060af24.setIcon(icon_e94a278863d34cedb81cfa471c869741);


            marker_28c91e3769674e629c6cddb30060af24.bindTooltip(
                `<div>
                     Darvall Playspace Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_27f550446e0848218f61a021cc930b35 = L.marker(
                [-37.778878973000005, 145.086769005],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_128464e0856e4c7b9b4b8effd40502ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27f550446e0848218f61a021cc930b35.setIcon(icon_128464e0856e4c7b9b4b8effd40502ec);


            marker_27f550446e0848218f61a021cc930b35.bindTooltip(
                `<div>
                     Koonung Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c390ef2fe4724d88a26aa54aee323729 = L.marker(
                [-37.771059941, 145.174228907],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cb18a41dab9f4c11a076f4de090bb000 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c390ef2fe4724d88a26aa54aee323729.setIcon(icon_cb18a41dab9f4c11a076f4de090bb000);


            marker_c390ef2fe4724d88a26aa54aee323729.bindTooltip(
                `<div>
                     Landscape Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e10f928535ba4c22a73257189dd1d1ee = L.marker(
                [-37.770225019, 145.157591261],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bb41e02d57cf4be9b5ef018fad16402f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e10f928535ba4c22a73257189dd1d1ee.setIcon(icon_bb41e02d57cf4be9b5ef018fad16402f);


            marker_e10f928535ba4c22a73257189dd1d1ee.bindTooltip(
                `<div>
                     Larnaca Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d8cf7580f9934a338fc5873c962915b1 = L.marker(
                [-37.759627277, 145.180302999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5fd93daa9f0341f696ae57e327b8df23 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d8cf7580f9934a338fc5873c962915b1.setIcon(icon_5fd93daa9f0341f696ae57e327b8df23);


            marker_d8cf7580f9934a338fc5873c962915b1.bindTooltip(
                `<div>
                     Larnoo Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_8c2c73e536404a8396dd82178c13a0dd = L.marker(
                [-37.775306763, 145.154429107],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4b621031fcd34b22b66802c2be11bdc4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8c2c73e536404a8396dd82178c13a0dd.setIcon(icon_4b621031fcd34b22b66802c2be11bdc4);


            marker_8c2c73e536404a8396dd82178c13a0dd.bindTooltip(
                `<div>
                     Leawarra Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7e75d15aa4b347e3a77659e9d27f317c = L.marker(
                [-37.796013006, 145.161455245],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a244b2749394975bb810e3ee5227465 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e75d15aa4b347e3a77659e9d27f317c.setIcon(icon_0a244b2749394975bb810e3ee5227465);


            marker_7e75d15aa4b347e3a77659e9d27f317c.bindTooltip(
                `<div>
                     Lionel Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8f1308185df34e579215c31e8f57869b = L.marker(
                [-37.80253748, 145.195476704],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ae08122a4a094f0d9fa0c169621a08d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f1308185df34e579215c31e8f57869b.setIcon(icon_ae08122a4a094f0d9fa0c169621a08d4);


            marker_8f1308185df34e579215c31e8f57869b.bindTooltip(
                `<div>
                     Hillcrest Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8e8c021b124d41eb868dbcd0a5763e03 = L.marker(
                [-37.755291074, 145.17689755],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_24f233a1098c4ba89ad12d1eaa4d7631 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8e8c021b124d41eb868dbcd0a5763e03.setIcon(icon_24f233a1098c4ba89ad12d1eaa4d7631);


            marker_8e8c021b124d41eb868dbcd0a5763e03.bindTooltip(
                `<div>
                     Lyndal Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ffd1f6d914da4ae58becb18ac18d508c = L.marker(
                [-37.745070391999995, 145.200915248],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_62377f7f381a41669fa2b917373fe381 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ffd1f6d914da4ae58becb18ac18d508c.setIcon(icon_62377f7f381a41669fa2b917373fe381);


            marker_ffd1f6d914da4ae58becb18ac18d508c.bindTooltip(
                `<div>
                     Lynette Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_616df282aa5449d09d8a2e9c3ad68390 = L.marker(
                [-37.769482584, 145.122808453],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_307375be7543433b812f5f51d6493e27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_616df282aa5449d09d8a2e9c3ad68390.setIcon(icon_307375be7543433b812f5f51d6493e27);


            marker_616df282aa5449d09d8a2e9c3ad68390.bindTooltip(
                `<div>
                     Lynnwood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_522dcfbe95bf49308e9cf252bd73a5ca = L.marker(
                [-37.793620276999995, 145.164337113],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ac1442e05a7c49b0afcc7126d45196b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_522dcfbe95bf49308e9cf252bd73a5ca.setIcon(icon_ac1442e05a7c49b0afcc7126d45196b3);


            marker_522dcfbe95bf49308e9cf252bd73a5ca.bindTooltip(
                `<div>
                     Maggs Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_62d5fd89c99448e7b56f892f536b5d0e = L.marker(
                [-37.779535904, 145.153372035],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_78f5a6b706314a93aa6b4afa0e2ec908 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_62d5fd89c99448e7b56f892f536b5d0e.setIcon(icon_78f5a6b706314a93aa6b4afa0e2ec908);


            marker_62d5fd89c99448e7b56f892f536b5d0e.bindTooltip(
                `<div>
                     Hertford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6a44bfd9380e4d449b508861331162e0 = L.marker(
                [-37.790705941, 145.135178077],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3bc251501fc14adcab0d46626b96b2c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6a44bfd9380e4d449b508861331162e0.setIcon(icon_3bc251501fc14adcab0d46626b96b2c9);


            marker_6a44bfd9380e4d449b508861331162e0.bindTooltip(
                `<div>
                     Marshall Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ff5277e4296545a18251e8185739e0fa = L.marker(
                [-37.760787486, 145.16421133],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_04a80198d7164b508107984951ff1491 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff5277e4296545a18251e8185739e0fa.setIcon(icon_04a80198d7164b508107984951ff1491);


            marker_ff5277e4296545a18251e8185739e0fa.bindTooltip(
                `<div>
                     Matisse Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_efe38397bbbc49e2a4c7884ba5a49ba5 = L.marker(
                [-37.797735805, 145.15935492],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e7b36cc44c2649a48ba9a47308c296c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_efe38397bbbc49e2a4c7884ba5a49ba5.setIcon(icon_e7b36cc44c2649a48ba9a47308c296c0);


            marker_efe38397bbbc49e2a4c7884ba5a49ba5.bindTooltip(
                `<div>
                     Maxia Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2d4ecc915e7d48c2895b7900c738d44f = L.marker(
                [-37.76656876, 145.114821828],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c39ef966534644a9aefb4619a66ce3c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2d4ecc915e7d48c2895b7900c738d44f.setIcon(icon_c39ef966534644a9aefb4619a66ce3c7);


            marker_2d4ecc915e7d48c2895b7900c738d44f.bindTooltip(
                `<div>
                     Mayfair Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b166df73a9c1417f8c2f427198fdfb40 = L.marker(
                [-37.783036933000005, 145.169929776],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1da3c3cf2a5f40638261416e2f60396a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b166df73a9c1417f8c2f427198fdfb40.setIcon(icon_1da3c3cf2a5f40638261416e2f60396a);


            marker_b166df73a9c1417f8c2f427198fdfb40.bindTooltip(
                `<div>
                     McKenzie Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b4bbea4f22014ea186b826c0cbfe1e6f = L.marker(
                [-37.769984451, 145.109562549],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a2b3b83b2fc44018b76804f20e3b6236 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b4bbea4f22014ea186b826c0cbfe1e6f.setIcon(icon_a2b3b83b2fc44018b76804f20e3b6236);


            marker_b4bbea4f22014ea186b826c0cbfe1e6f.bindTooltip(
                `<div>
                     Michael Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_800b31e407ea4c8bb187fcb25ea02b3b = L.marker(
                [-37.788191093, 145.159571976],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c95cebf1ff1848af8da6d6a524c9b011 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_800b31e407ea4c8bb187fcb25ea02b3b.setIcon(icon_c95cebf1ff1848af8da6d6a524c9b011);


            marker_800b31e407ea4c8bb187fcb25ea02b3b.bindTooltip(
                `<div>
                     Montgomery Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7e36109da7184ab2b3bf94087c87a970 = L.marker(
                [-37.753859771, 145.133127602],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e189a19d664f4649a676e63b725d0ed7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e36109da7184ab2b3bf94087c87a970.setIcon(icon_e189a19d664f4649a676e63b725d0ed7);


            marker_7e36109da7184ab2b3bf94087c87a970.bindTooltip(
                `<div>
                     Morecambe Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_662371d9574345afb221918a99b726c9 = L.marker(
                [-37.792875982, 145.15862466299998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0f8c88a4fc674e9e9ca17af21535322a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_662371d9574345afb221918a99b726c9.setIcon(icon_0f8c88a4fc674e9e9ca17af21535322a);


            marker_662371d9574345afb221918a99b726c9.bindTooltip(
                `<div>
                     Morna Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d0ffed0aeed84b2facabca3b5be169d7 = L.marker(
                [-37.770477737, 145.142482599],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5c2902a0d20244c1bbe30e43b2b14f0f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d0ffed0aeed84b2facabca3b5be169d7.setIcon(icon_5c2902a0d20244c1bbe30e43b2b14f0f);


            marker_d0ffed0aeed84b2facabca3b5be169d7.bindTooltip(
                `<div>
                     Mossdale Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_22ec1d81daef4e3c96f49197f9849cd9 = L.marker(
                [-37.777291283000004, 145.146027916],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3202d2fd47974c99b89a5d39b2f55936 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_22ec1d81daef4e3c96f49197f9849cd9.setIcon(icon_3202d2fd47974c99b89a5d39b2f55936);


            marker_22ec1d81daef4e3c96f49197f9849cd9.bindTooltip(
                `<div>
                     Rieschiecks Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_50151b265ec74608902fdb62ca32f888 = L.marker(
                [-37.803782611, 145.183113088],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_01d4b4e2a0194c0e958db83679a1b33c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_50151b265ec74608902fdb62ca32f888.setIcon(icon_01d4b4e2a0194c0e958db83679a1b33c);


            marker_50151b265ec74608902fdb62ca32f888.bindTooltip(
                `<div>
                     Oxford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_90522e3e3c61444cb5012f5e19526ed5 = L.marker(
                [-37.778732203000004, 145.21403136799998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_933a5f85d10a4e13a91e77645cdf2a4c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_90522e3e3c61444cb5012f5e19526ed5.setIcon(icon_933a5f85d10a4e13a91e77645cdf2a4c);


            marker_90522e3e3c61444cb5012f5e19526ed5.bindTooltip(
                `<div>
                     Park Orchards Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d79259e0d0d343bfae22d61b6091132a = L.marker(
                [-37.769694322, 145.18022755],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_788c904b543c4d73a9b84cc884267333 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d79259e0d0d343bfae22d61b6091132a.setIcon(icon_788c904b543c4d73a9b84cc884267333);


            marker_d79259e0d0d343bfae22d61b6091132a.bindTooltip(
                `<div>
                     Pine Hill Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_97c7b117976741638b281f121639bfed = L.marker(
                [-37.768810479, 145.114997548],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_aceacd69dfb94833a0b2a7580ddba3ad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_97c7b117976741638b281f121639bfed.setIcon(icon_aceacd69dfb94833a0b2a7580ddba3ad);


            marker_97c7b117976741638b281f121639bfed.bindTooltip(
                `<div>
                     Ranleigh Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_56b63368ec4145fabed8aeab177c7778 = L.marker(
                [-37.794348477, 145.149256251],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b2f51498313e4cb2aed971ed18087688 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_56b63368ec4145fabed8aeab177c7778.setIcon(icon_b2f51498313e4cb2aed971ed18087688);


            marker_56b63368ec4145fabed8aeab177c7778.bindTooltip(
                `<div>
                     Renshaw Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ff88c54e2e8a41e9916fa517c55cf293 = L.marker(
                [-37.772547089, 145.099315522],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_47cee01d11f64e5d862efb17f3fd2681 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff88c54e2e8a41e9916fa517c55cf293.setIcon(icon_47cee01d11f64e5d862efb17f3fd2681);


            marker_ff88c54e2e8a41e9916fa517c55cf293.bindTooltip(
                `<div>
                     Riverview Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8e61084e2fcb4d40b26d5c00843ac25f = L.marker(
                [-37.763630489, 145.089825939],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_699feb09dd4644418fd37586ebe68c2b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8e61084e2fcb4d40b26d5c00843ac25f.setIcon(icon_699feb09dd4644418fd37586ebe68c2b);


            marker_8e61084e2fcb4d40b26d5c00843ac25f.bindTooltip(
                `<div>
                     Ronald Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b73ac06edcb54fb08e739e510dd5a7fb = L.marker(
                [-37.777218785, 145.13187766299998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_55c128e472cd4842b788c55b724b9439 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b73ac06edcb54fb08e739e510dd5a7fb.setIcon(icon_55c128e472cd4842b788c55b724b9439);


            marker_b73ac06edcb54fb08e739e510dd5a7fb.bindTooltip(
                `<div>
                     Ruffey Lake Park (The Boulevard) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_384462e00f6d47daa779c46ea3835f0d = L.marker(
                [-37.776904486, 145.14435273799998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_21647500475c4408970118295504c0b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_384462e00f6d47daa779c46ea3835f0d.setIcon(icon_21647500475c4408970118295504c0b7);


            marker_384462e00f6d47daa779c46ea3835f0d.bindTooltip(
                `<div>
                     Ruffey Lake Park (Victoria St) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_365686f2ae0f41cd8989c093dad7b7ef = L.marker(
                [-37.777156611, 145.084057457],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_178609a1b59f428eb797d7075611e88e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_365686f2ae0f41cd8989c093dad7b7ef.setIcon(icon_178609a1b59f428eb797d7075611e88e);


            marker_365686f2ae0f41cd8989c093dad7b7ef.bindTooltip(
                `<div>
                     Sandra Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_13e3dd0368ad4e42b2f76628b9b33d84 = L.marker(
                [-37.782291639, 145.127978077],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9d326f48d5ee44ffbd8f85f3f1050cb5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_13e3dd0368ad4e42b2f76628b9b33d84.setIcon(icon_9d326f48d5ee44ffbd8f85f3f1050cb5);


            marker_13e3dd0368ad4e42b2f76628b9b33d84.bindTooltip(
                `<div>
                     JW Thomson Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1cf6003a1aec4d7693454526936d59d2 = L.marker(
                [-37.76265146, 145.175676851],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cc7cb1d03ce5402189e3a1fa233c7851 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1cf6003a1aec4d7693454526936d59d2.setIcon(icon_cc7cb1d03ce5402189e3a1fa233c7851);


            marker_1cf6003a1aec4d7693454526936d59d2.bindTooltip(
                `<div>
                     Schafter Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_15e4cb24341a4815b73087046d0e720b = L.marker(
                [-37.784661537, 145.13377421],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_869a029d753849a6a1a79d3ddba8cc0b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15e4cb24341a4815b73087046d0e720b.setIcon(icon_869a029d753849a6a1a79d3ddba8cc0b);


            marker_15e4cb24341a4815b73087046d0e720b.bindTooltip(
                `<div>
                     Schramms Reserve Playground (South)
                 </div>`,
                {"sticky": true}
            );


            var marker_0ee6b407555d441db8f33eec36cd2e2f = L.marker(
                [-37.783712992, 145.140191417],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fc86e56fdd2445f3a3d8f4c1a89e08f5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0ee6b407555d441db8f33eec36cd2e2f.setIcon(icon_fc86e56fdd2445f3a3d8f4c1a89e08f5);


            marker_0ee6b407555d441db8f33eec36cd2e2f.bindTooltip(
                `<div>
                     Sharon Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3d56597c0196404fa093650391b0953f = L.marker(
                [-37.759037455, 145.094294082],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_06e89d9ce6864bcca64d3f9dc61147eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d56597c0196404fa093650391b0953f.setIcon(icon_06e89d9ce6864bcca64d3f9dc61147eb);


            marker_3d56597c0196404fa093650391b0953f.bindTooltip(
                `<div>
                     Sheahans Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_063e6366ca9d4a7db7d5900f8ec22753 = L.marker(
                [-37.763231374, 145.121111139],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4c4c38e9346e468a8a239e631afc68ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_063e6366ca9d4a7db7d5900f8ec22753.setIcon(icon_4c4c38e9346e468a8a239e631afc68ce);


            marker_063e6366ca9d4a7db7d5900f8ec22753.bindTooltip(
                `<div>
                     Sinclair Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_50b52500fdda4f6fae46da7ae20b3b15 = L.marker(
                [-37.778472346, 145.116295407],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0cb5c00fc23a439894cefe5fc2e57c78 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_50b52500fdda4f6fae46da7ae20b3b15.setIcon(icon_0cb5c00fc23a439894cefe5fc2e57c78);


            marker_50b52500fdda4f6fae46da7ae20b3b15.bindTooltip(
                `<div>
                     Somerville Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_67e7409abaaa4e7482327fe9ddf81d2d = L.marker(
                [-37.753398217, 145.15958194200002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6025006df48b42709e565d27eec64a8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_67e7409abaaa4e7482327fe9ddf81d2d.setIcon(icon_6025006df48b42709e565d27eec64a8f);


            marker_67e7409abaaa4e7482327fe9ddf81d2d.bindTooltip(
                `<div>
                     Spring Valley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d4906bed0dbf467880b53cc3f3a2ced8 = L.marker(
                [-37.774882274, 145.185847083],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7501a47bcbd44bc19a5ae5e6b0860c8d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4906bed0dbf467880b53cc3f3a2ced8.setIcon(icon_7501a47bcbd44bc19a5ae5e6b0860c8d);


            marker_d4906bed0dbf467880b53cc3f3a2ced8.bindTooltip(
                `<div>
                     Dellview Playspace Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_58221c4d89ab4d8da997b258ada4ac19 = L.marker(
                [-37.796490475, 145.16902458],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9683aee5572e4d42b4efe4188911b98b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_58221c4d89ab4d8da997b258ada4ac19.setIcon(icon_9683aee5572e4d42b4efe4188911b98b);


            marker_58221c4d89ab4d8da997b258ada4ac19.bindTooltip(
                `<div>
                     St Clems Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7695e3df200545d5a3d69ae30b029f7d = L.marker(
                [-37.737806574000004, 145.271753152],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9a78374cee8248adb30bed9916a54812 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7695e3df200545d5a3d69ae30b029f7d.setIcon(icon_9a78374cee8248adb30bed9916a54812);


            marker_7695e3df200545d5a3d69ae30b029f7d.bindTooltip(
                `<div>
                     St Deny's Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2f95391e4cf748948f5044947cc05465 = L.marker(
                [-37.774619373, 145.08490156],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_90a475a51e014002bea90e13baa980bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2f95391e4cf748948f5044947cc05465.setIcon(icon_90a475a51e014002bea90e13baa980bb);


            marker_2f95391e4cf748948f5044947cc05465.bindTooltip(
                `<div>
                     Stanley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1dea4e05c6a84a62bee2a1c0ed8bf068 = L.marker(
                [-37.741331016, 145.210947279],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e079d3970c6e433aa70d7b73f7b8bdcd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1dea4e05c6a84a62bee2a1c0ed8bf068.setIcon(icon_e079d3970c6e433aa70d7b73f7b8bdcd);


            marker_1dea4e05c6a84a62bee2a1c0ed8bf068.bindTooltip(
                `<div>
                     Stiggants Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1228fe5eabe441b0b537a7a988cb1d3a = L.marker(
                [-37.782112304, 145.113568014],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a8c1a39a2dfe4254a06d94cc5ef651f5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1228fe5eabe441b0b537a7a988cb1d3a.setIcon(icon_a8c1a39a2dfe4254a06d94cc5ef651f5);


            marker_1228fe5eabe441b0b537a7a988cb1d3a.bindTooltip(
                `<div>
                     Studley Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_ab5027d481df4676b98a839041b63983 = L.marker(
                [-37.762277893000004, 145.09895765299999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f8f2f4cbdc7a4663afc74b5d13a68ee8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ab5027d481df4676b98a839041b63983.setIcon(icon_f8f2f4cbdc7a4663afc74b5d13a68ee8);


            marker_ab5027d481df4676b98a839041b63983.bindTooltip(
                `<div>
                     Swanston Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_595975c857ea448cbc389958a4a667fc = L.marker(
                [-37.769222922, 145.10221623299998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e4aa629b91d9450a867240c37a3ddd65 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_595975c857ea448cbc389958a4a667fc.setIcon(icon_e4aa629b91d9450a867240c37a3ddd65);


            marker_595975c857ea448cbc389958a4a667fc.bindTooltip(
                `<div>
                     Tasker Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_99e9ddfe14e2490284468386bc700c30 = L.marker(
                [-37.769000716, 145.107299709],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5e0fb53e82ab4bbeb2f7468ec70f0093 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_99e9ddfe14e2490284468386bc700c30.setIcon(icon_5e0fb53e82ab4bbeb2f7468ec70f0093);


            marker_99e9ddfe14e2490284468386bc700c30.bindTooltip(
                `<div>
                     Ted Ajani Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_02cee047bdd44f168dd89c3bda0fa4a0 = L.marker(
                [-37.754014063, 145.13607467],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_03d44e4940df4309837c2b49b5eaa9de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_02cee047bdd44f168dd89c3bda0fa4a0.setIcon(icon_03d44e4940df4309837c2b49b5eaa9de);


            marker_02cee047bdd44f168dd89c3bda0fa4a0.bindTooltip(
                `<div>
                     Templestowe Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c05002bcb6954c12bb8def0e7fc095bb = L.marker(
                [-37.770523355, 145.148993626],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5f0448d74dee4aafbea76916849ea3e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c05002bcb6954c12bb8def0e7fc095bb.setIcon(icon_5f0448d74dee4aafbea76916849ea3e0);


            marker_c05002bcb6954c12bb8def0e7fc095bb.bindTooltip(
                `<div>
                     The Grange Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a5326872bc614477a5d0ad5c2c9476b4 = L.marker(
                [-37.775340784, 145.107988218],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f4e84cd1390c4c628bd2556d2d1d7944 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a5326872bc614477a5d0ad5c2c9476b4.setIcon(icon_f4e84cd1390c4c628bd2556d2d1d7944);


            marker_a5326872bc614477a5d0ad5c2c9476b4.bindTooltip(
                `<div>
                     Timber Reserve (North) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f705692ab3f04db6902ad40600cc9c6a = L.marker(
                [-37.776782361, 145.105904031],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_98722d8acc7048f395f88617261d33e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f705692ab3f04db6902ad40600cc9c6a.setIcon(icon_98722d8acc7048f395f88617261d33e5);


            marker_f705692ab3f04db6902ad40600cc9c6a.bindTooltip(
                `<div>
                     Timber Reserve (South) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_041a43241b5741b698fb1c16b7e8d17a = L.marker(
                [-37.777499003, 145.180488483],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c2461d024af64a60aa289e406420a3e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_041a43241b5741b698fb1c16b7e8d17a.setIcon(icon_c2461d024af64a60aa289e406420a3e7);


            marker_041a43241b5741b698fb1c16b7e8d17a.bindTooltip(
                `<div>
                     Valepark Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1792bda17543417a8bb43dd46a7bbdcd = L.marker(
                [-37.756891778, 145.13244099899998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2d21c6c541e848a590008d70f5a31894 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1792bda17543417a8bb43dd46a7bbdcd.setIcon(icon_2d21c6c541e848a590008d70f5a31894);


            marker_1792bda17543417a8bb43dd46a7bbdcd.bindTooltip(
                `<div>
                     Verbena Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_32a5a934bf93491ebb86dc55a2529a3f = L.marker(
                [-37.790255453, 145.128430685],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_51206f7818c04e82a607d380077e5839 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_32a5a934bf93491ebb86dc55a2529a3f.setIcon(icon_51206f7818c04e82a607d380077e5839);


            marker_32a5a934bf93491ebb86dc55a2529a3f.bindTooltip(
                `<div>
                     Walker Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3fcb757b779f4cda918b3923855e12da = L.marker(
                [-37.745796079, 145.207429798],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ccd530eb266d4a38addfffc94520d163 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3fcb757b779f4cda918b3923855e12da.setIcon(icon_ccd530eb266d4a38addfffc94520d163);


            marker_3fcb757b779f4cda918b3923855e12da.bindTooltip(
                `<div>
                     Warrandyte Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_cfc067b49b334231889bc949539ff30a = L.marker(
                [-37.736578383, 145.220466489],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_64036870a62e4baa89facf5e8e9b3931 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cfc067b49b334231889bc949539ff30a.setIcon(icon_64036870a62e4baa89facf5e8e9b3931);


            marker_cfc067b49b334231889bc949539ff30a.bindTooltip(
                `<div>
                     Warrandyte Federation Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_b21d77b82a9a44b9ae11d25d04792a72 = L.marker(
                [-37.767506665, 145.1679704],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_33cac630e1e24b409b95132c2cb3c0bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b21d77b82a9a44b9ae11d25d04792a72.setIcon(icon_33cac630e1e24b409b95132c2cb3c0bc);


            marker_b21d77b82a9a44b9ae11d25d04792a72.bindTooltip(
                `<div>
                     Whistlewood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_da8b10a4543040f8b562b83186358a4a = L.marker(
                [-37.782089533000004, 145.100891418],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f4e58c9009e24306982ffc0d68306a9e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_da8b10a4543040f8b562b83186358a4a.setIcon(icon_f4e58c9009e24306982ffc0d68306a9e);


            marker_da8b10a4543040f8b562b83186358a4a.bindTooltip(
                `<div>
                     Willow North Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_34e968beb3de42efaa257f1e06a296d0 = L.marker(
                [-37.791304972, 145.111040671],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6691e1c6e32b4e96bee445f3978d3d58 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_34e968beb3de42efaa257f1e06a296d0.setIcon(icon_6691e1c6e32b4e96bee445f3978d3d58);


            marker_34e968beb3de42efaa257f1e06a296d0.bindTooltip(
                `<div>
                     Wilsons Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fcfcf4bb82b5412ab143ca584c7498e5 = L.marker(
                [-37.781084017, 145.124820818],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_af254cef3b6b4e62a5ad7e02322c11ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fcfcf4bb82b5412ab143ca584c7498e5.setIcon(icon_af254cef3b6b4e62a5ad7e02322c11ff);


            marker_fcfcf4bb82b5412ab143ca584c7498e5.bindTooltip(
                `<div>
                     Winbrook Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_55e24d46ea894a1b9370c097dc7a53e4 = L.marker(
                [-37.718715397, 145.2857712],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_87962269777b4360848b31d79422b53f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_55e24d46ea894a1b9370c097dc7a53e4.setIcon(icon_87962269777b4360848b31d79422b53f);


            marker_55e24d46ea894a1b9370c097dc7a53e4.bindTooltip(
                `<div>
                     Wittons Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2e53901f7d1943b7a8280354aba249ec = L.marker(
                [-37.739284411999996, 145.267058683],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_82f302477bdc42d8bf580eee8cd5eaf6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e53901f7d1943b7a8280354aba249ec.setIcon(icon_82f302477bdc42d8bf580eee8cd5eaf6);


            marker_2e53901f7d1943b7a8280354aba249ec.bindTooltip(
                `<div>
                     Wonga Park Reserve (Oval) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_efb0e89b080f4650a2692f6274c0222c = L.marker(
                [-37.739104604, 145.269445934],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bd2f6da01b144573b874c69057ba4ef5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_efb0e89b080f4650a2692f6274c0222c.setIcon(icon_bd2f6da01b144573b874c69057ba4ef5);


            marker_efb0e89b080f4650a2692f6274c0222c.bindTooltip(
                `<div>
                     Wonga Park Tennis Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_081fe0f3900b45e48d847aa0e3da6a7a = L.marker(
                [-37.775162637, 145.147978112],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8cc7d127fcc14f9ab25a2b0da35107dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_081fe0f3900b45e48d847aa0e3da6a7a.setIcon(icon_8cc7d127fcc14f9ab25a2b0da35107dd);


            marker_081fe0f3900b45e48d847aa0e3da6a7a.bindTooltip(
                `<div>
                     Woodlea Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_cac53de9d4a64b26b693202a0bfd39ae = L.marker(
                [-37.770752083000005, 145.089940102],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7f750ef33eff450cb26db4c1eb80fff4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cac53de9d4a64b26b693202a0bfd39ae.setIcon(icon_7f750ef33eff450cb26db4c1eb80fff4);


            marker_cac53de9d4a64b26b693202a0bfd39ae.bindTooltip(
                `<div>
                     Morris Williams Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c2ee54e397ed4da8bda2139d8278cbbe = L.marker(
                [-37.778906538, 145.162368426],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a950cc5130de4cac9082e96e0b6d6c15 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c2ee54e397ed4da8bda2139d8278cbbe.setIcon(icon_a950cc5130de4cac9082e96e0b6d6c15);


            marker_c2ee54e397ed4da8bda2139d8278cbbe.bindTooltip(
                `<div>
                     Zerbes Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_36411448c9284a41af836efb8443564b = L.marker(
                [-37.773648568, 145.166339703],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_439f80f4e39b4b07aea61d94edb5b8bd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_36411448c9284a41af836efb8443564b.setIcon(icon_439f80f4e39b4b07aea61d94edb5b8bd);


            marker_36411448c9284a41af836efb8443564b.bindTooltip(
                `<div>
                     Albany Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b019108e4b8e4c5783bfd6119cb30ae5 = L.marker(
                [-37.770593043000005, 145.161461503],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b50a8a5852974851aac635749b19797e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b019108e4b8e4c5783bfd6119cb30ae5.setIcon(icon_b50a8a5852974851aac635749b19797e);


            marker_b019108e4b8e4c5783bfd6119cb30ae5.bindTooltip(
                `<div>
                     Browning Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_fb2b9dfbcb5e43c2b0d2b4bdcea2f69a = L.marker(
                [-37.750265023000004, 145.175627106],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_afa8f51cb62e44b487bfe1280f7fbe72 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fb2b9dfbcb5e43c2b0d2b4bdcea2f69a.setIcon(icon_afa8f51cb62e44b487bfe1280f7fbe72);


            marker_fb2b9dfbcb5e43c2b0d2b4bdcea2f69a.bindTooltip(
                `<div>
                     Manna Gum Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_112dde6ef6684017884b6ab4f5ba20f5 = L.marker(
                [-37.762922411, 145.107387116],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2855d38c9d8b49cfaee98f880af249b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_112dde6ef6684017884b6ab4f5ba20f5.setIcon(icon_2855d38c9d8b49cfaee98f880af249b6);


            marker_112dde6ef6684017884b6ab4f5ba20f5.bindTooltip(
                `<div>
                     Richard Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_018b31eedb21480188f5335cd3fa94cb = L.marker(
                [-37.786358097, 145.10714856200002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d552f25c79014f9088d29f0ade49d499 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_018b31eedb21480188f5335cd3fa94cb.setIcon(icon_d552f25c79014f9088d29f0ade49d499);


            marker_018b31eedb21480188f5335cd3fa94cb.bindTooltip(
                `<div>
                     Stutt Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f49e51f5867f4dfd9881d370d2abd48b = L.marker(
                [-37.769680818000005, 145.096073324],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_368e57d03cca4fd2b4450d9d5253c087 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f49e51f5867f4dfd9881d370d2abd48b.setIcon(icon_368e57d03cca4fd2b4450d9d5253c087);


            marker_f49e51f5867f4dfd9881d370d2abd48b.bindTooltip(
                `<div>
                     Lillian Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1741bc3d2bef43e298efa73084f64a11 = L.marker(
                [-37.760335024, 145.17024827],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_029a27624f6b404fbcf9e00e2db17a57 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1741bc3d2bef43e298efa73084f64a11.setIcon(icon_029a27624f6b404fbcf9e00e2db17a57);


            marker_1741bc3d2bef43e298efa73084f64a11.bindTooltip(
                `<div>
                     The Pines Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_f1152d1f32444c7f95c16c93ad1914a4 = L.marker(
                [-37.77588203, 145.14129216],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6432bd27accc428081b42b798273f01f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f1152d1f32444c7f95c16c93ad1914a4.setIcon(icon_6432bd27accc428081b42b798273f01f);


            marker_f1152d1f32444c7f95c16c93ad1914a4.bindTooltip(
                `<div>
                     Ruffey Lake Park (Church St) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c265cc6fe0684af0b7311f99573780f0 = L.marker(
                [-37.739839996, 145.267617399],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c404d6594685467883e0e4620cc08624 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c265cc6fe0684af0b7311f99573780f0.setIcon(icon_c404d6594685467883e0e4620cc08624);


            marker_c265cc6fe0684af0b7311f99573780f0.bindTooltip(
                `<div>
                     Wonga Park Reserve - (Gooligulch) Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_0c4372f9ac064269ba70f61fd56593fa = L.marker(
                [-37.774277037, 145.122588882],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7e8f9a00644b48aa80435997dc05874e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0c4372f9ac064269ba70f61fd56593fa.setIcon(icon_7e8f9a00644b48aa80435997dc05874e);


            marker_0c4372f9ac064269ba70f61fd56593fa.bindTooltip(
                `<div>
                     Aquarena Aquatic and Leisure Centre Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5e9e7218fb0a4bc785a4997bcc8910b2 = L.marker(
                [-37.789053625, 145.150394679],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1811909b306143caa98f1ebbf4bfb811 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e9e7218fb0a4bc785a4997bcc8910b2.setIcon(icon_1811909b306143caa98f1ebbf4bfb811);


            marker_5e9e7218fb0a4bc785a4997bcc8910b2.bindTooltip(
                `<div>
                     Doncaster Reserve Playground (Jackson Ct)
                 </div>`,
                {"sticky": true}
            );


            var marker_ad1b49866769486e869c07e862d12313 = L.marker(
                [-37.779667558, 145.102075048],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b456fe868eb64587ae1cb00e5086d38d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad1b49866769486e869c07e862d12313.setIcon(icon_b456fe868eb64587ae1cb00e5086d38d);


            marker_ad1b49866769486e869c07e862d12313.bindTooltip(
                `<div>
                     Westwood Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1bc4fbae45744edf9e4f01c20637c46d = L.marker(
                [-37.77280918, 145.15266899899999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a517e7deff346519d5ed978cb76b162 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1bc4fbae45744edf9e4f01c20637c46d.setIcon(icon_0a517e7deff346519d5ed978cb76b162);


            marker_1bc4fbae45744edf9e4f01c20637c46d.bindTooltip(
                `<div>
                     Noral Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_03ea37d7706d4e83b3503913214e2f27 = L.marker(
                [-37.780812376, 145.134625266],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9bc50ad3b38b4999825a238256f730d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_03ea37d7706d4e83b3503913214e2f27.setIcon(icon_9bc50ad3b38b4999825a238256f730d4);


            marker_03ea37d7706d4e83b3503913214e2f27.bindTooltip(
                `<div>
                     Schramms Reserve Playground (North)
                 </div>`,
                {"sticky": true}
            );


            var marker_c5858a57c64f4c81989a68621fb3e847 = L.marker(
                [-37.786706175, 145.116649002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0f64da4b5df422ab881dea67851273c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c5858a57c64f4c81989a68621fb3e847.setIcon(icon_f0f64da4b5df422ab881dea67851273c);


            marker_c5858a57c64f4c81989a68621fb3e847.bindTooltip(
                `<div>
                     Makybe Reserve (Tullamore) Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_b0102e20f5ea4fdd98b2c715cb18fce9 = L.marker(
                [-37.785260155, 145.115086523],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c61e93d057024f888ecb26819de184bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b0102e20f5ea4fdd98b2c715cb18fce9.setIcon(icon_c61e93d057024f888ecb26819de184bb);


            marker_b0102e20f5ea4fdd98b2c715cb18fce9.bindTooltip(
                `<div>
                     Southern Gully Reserve - East (Tullamore) Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_2f784d245d6a46b3a3bfdd00b0d0ae81 = L.marker(
                [-37.784667017, 145.113308519],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0b8a960cefaa40f1baf15e8ab80bcbf0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2f784d245d6a46b3a3bfdd00b0d0ae81.setIcon(icon_0b8a960cefaa40f1baf15e8ab80bcbf0);


            marker_2f784d245d6a46b3a3bfdd00b0d0ae81.bindTooltip(
                `<div>
                     Southern Gully Reserve - West (Tullamore) Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_d7dfa5484efa4c138c96899fe9fa33d7 = L.marker(
                [-37.76201057, 145.1703018],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_644f20b348004660982ea41cccb244d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7dfa5484efa4c138c96899fe9fa33d7.setIcon(icon_644f20b348004660982ea41cccb244d4);


            marker_d7dfa5484efa4c138c96899fe9fa33d7.bindTooltip(
                `<div>
                     Morello Playspace
                 </div>`,
                {"sticky": true}
            );


            var marker_e879f42d4d4d4f5b8852c916db5d562d = L.marker(
                [-37.785273344000004, 145.120279581],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8c931525a86b4e4a9d4f3802097232db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e879f42d4d4d4f5b8852c916db5d562d.setIcon(icon_8c931525a86b4e4a9d4f3802097232db);


            marker_e879f42d4d4d4f5b8852c916db5d562d.bindTooltip(
                `<div>
                     Lawford Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d803612c1a954a2284648c039e95f7ae = L.marker(
                [-37.783821531, 145.155548385],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ddeb4f60d2e944c38bcc006ce4602ebf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d803612c1a954a2284648c039e95f7ae.setIcon(icon_ddeb4f60d2e944c38bcc006ce4602ebf);


            marker_d803612c1a954a2284648c039e95f7ae.bindTooltip(
                `<div>
                     Gainsborough Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a12b36ef14584889aedeaa746689cfaf = L.marker(
                [-27.43642293, 153.00107309999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_51f84af11055429bab20de07cccd5555 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a12b36ef14584889aedeaa746689cfaf.setIcon(icon_51f84af11055429bab20de07cccd5555);


            marker_a12b36ef14584889aedeaa746689cfaf.bindTooltip(
                `<div>
                     QUANDONG PARK
                 </div>`,
                {"sticky": true}
            );


            var marker_f4fba53bf9b14764ada741d34d66cb3a = L.marker(
                [-27.43636786, 153.0009842],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dfdbfe6161944f1b9affe1a0b4c6b4dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f4fba53bf9b14764ada741d34d66cb3a.setIcon(icon_dfdbfe6161944f1b9affe1a0b4c6b4dd);


            marker_f4fba53bf9b14764ada741d34d66cb3a.bindTooltip(
                `<div>
                     QUANDONG PARK
                 </div>`,
                {"sticky": true}
            );


            var marker_873fe189832447299a37aed77b198a28 = L.marker(
                [-27.62120735, 152.96760049999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_387428450f174cb78c5d5064262524e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_873fe189832447299a37aed77b198a28.setIcon(icon_387428450f174cb78c5d5064262524e0);


            marker_873fe189832447299a37aed77b198a28.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d7c42b83c480424db2c8ebc114a493fe = L.marker(
                [-27.62464451, 152.96293369999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_38e4e746455c4baca19ca6e30e4f4f3e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7c42b83c480424db2c8ebc114a493fe.setIcon(icon_38e4e746455c4baca19ca6e30e4f4f3e);


            marker_d7c42b83c480424db2c8ebc114a493fe.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4d3d59eba7de45c7b3739f2c21905eac = L.marker(
                [-27.62103501, 152.9622254],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2a8290187319442489f1fc938fcf1c76 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d3d59eba7de45c7b3739f2c21905eac.setIcon(icon_2a8290187319442489f1fc938fcf1c76);


            marker_4d3d59eba7de45c7b3739f2c21905eac.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1f1fc5c8f95749dcb27520e6a6d16583 = L.marker(
                [-27.62492493, 152.9650925],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a2660980ccfd4a729408e12a02134229 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f1fc5c8f95749dcb27520e6a6d16583.setIcon(icon_a2660980ccfd4a729408e12a02134229);


            marker_1f1fc5c8f95749dcb27520e6a6d16583.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3a71cbae016e4c758e65e81d6d59f40f = L.marker(
                [-27.62498759, 152.96369819999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4d5c4b73f1044903a0c0d740608053e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3a71cbae016e4c758e65e81d6d59f40f.setIcon(icon_4d5c4b73f1044903a0c0d740608053e3);


            marker_3a71cbae016e4c758e65e81d6d59f40f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9fc7396a26e64b448fafd6318a79d5a7 = L.marker(
                [-27.62592725, 152.9646061],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e7aeed404d20407dbae3a8e50f0072b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9fc7396a26e64b448fafd6318a79d5a7.setIcon(icon_e7aeed404d20407dbae3a8e50f0072b2);


            marker_9fc7396a26e64b448fafd6318a79d5a7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e534575f56524d5dac9440ceffb96145 = L.marker(
                [-27.62513297, 152.9634943],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d060e8f2ca5449c1a4b220d9a03949b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e534575f56524d5dac9440ceffb96145.setIcon(icon_d060e8f2ca5449c1a4b220d9a03949b6);


            marker_e534575f56524d5dac9440ceffb96145.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_767738968d754d219e51db942ed13925 = L.marker(
                [-27.62492745, 152.96398359999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4f917b1d0d3d4715bedbe889a038554e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_767738968d754d219e51db942ed13925.setIcon(icon_4f917b1d0d3d4715bedbe889a038554e);


            marker_767738968d754d219e51db942ed13925.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4ce179d9cc944add98a0da501169f1a9 = L.marker(
                [-27.62062475, 152.9641177],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_88cebf2c635f4052bc50c305160d8058 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4ce179d9cc944add98a0da501169f1a9.setIcon(icon_88cebf2c635f4052bc50c305160d8058);


            marker_4ce179d9cc944add98a0da501169f1a9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ae68af49ee704040bcd37f0ae27731f9 = L.marker(
                [-27.62203701, 152.9660949],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_05f3b57b5376485d91ad865cf8b7486e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ae68af49ee704040bcd37f0ae27731f9.setIcon(icon_05f3b57b5376485d91ad865cf8b7486e);


            marker_ae68af49ee704040bcd37f0ae27731f9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0d4381efbe754f9ea2af0fc5d5e7376c = L.marker(
                [-27.62032044, 152.9663582],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dd96cd3a02aa4cbabb30b3eb45649749 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0d4381efbe754f9ea2af0fc5d5e7376c.setIcon(icon_dd96cd3a02aa4cbabb30b3eb45649749);


            marker_0d4381efbe754f9ea2af0fc5d5e7376c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7107c7e657b949b5a847f2e58a492e6f = L.marker(
                [-27.62226944, 152.96450780000004],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b86b6e5c9b3043ae9f91a03af9838c6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7107c7e657b949b5a847f2e58a492e6f.setIcon(icon_b86b6e5c9b3043ae9f91a03af9838c6a);


            marker_7107c7e657b949b5a847f2e58a492e6f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3346d31898a8413fa0e84b884acd188f = L.marker(
                [-27.62569248, 152.9651359],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_33965d70f83e4b39a77a4672657c1e3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3346d31898a8413fa0e84b884acd188f.setIcon(icon_33965d70f83e4b39a77a4672657c1e3b);


            marker_3346d31898a8413fa0e84b884acd188f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cef7938d9198404a8425db4233a5dfed = L.marker(
                [-27.62425688, 152.9637003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_69d9d4266610430ab64fd38c6d79ef35 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cef7938d9198404a8425db4233a5dfed.setIcon(icon_69d9d4266610430ab64fd38c6d79ef35);


            marker_cef7938d9198404a8425db4233a5dfed.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d70b4c2dce164966aa6e165160489271 = L.marker(
                [-27.28616972, 153.0642312],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_eeb5b99bcb464540a4bf001b5d76540a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d70b4c2dce164966aa6e165160489271.setIcon(icon_eeb5b99bcb464540a4bf001b5d76540a);


            marker_d70b4c2dce164966aa6e165160489271.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_738e028d40a14973b987d73e366cceb0 = L.marker(
                [-27.62088097, 152.9670804],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e26ba5520c744557b4992d3680a1e2f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_738e028d40a14973b987d73e366cceb0.setIcon(icon_e26ba5520c744557b4992d3680a1e2f0);


            marker_738e028d40a14973b987d73e366cceb0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cdedd4f228674cc99a2f97b575e4fec6 = L.marker(
                [-27.62015756, 152.96275119999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1f057a6e59974ce1b8676e108bd6850d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cdedd4f228674cc99a2f97b575e4fec6.setIcon(icon_1f057a6e59974ce1b8676e108bd6850d);


            marker_cdedd4f228674cc99a2f97b575e4fec6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b9d254868644400b86c113ab96ee36db = L.marker(
                [-27.62221077, 152.9599061],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_76f9735f3764457db2d30e3a78950ee2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b9d254868644400b86c113ab96ee36db.setIcon(icon_76f9735f3764457db2d30e3a78950ee2);


            marker_b9d254868644400b86c113ab96ee36db.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9ea608432b1b4ecf87bc4b036285aca2 = L.marker(
                [-27.62533029, 152.9617071],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_46631cef7f8c409ab26a825c285c98df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ea608432b1b4ecf87bc4b036285aca2.setIcon(icon_46631cef7f8c409ab26a825c285c98df);


            marker_9ea608432b1b4ecf87bc4b036285aca2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5e0ee972b8bb45d19e64229a1851c7bc = L.marker(
                [-27.62005842, 152.96302649999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fa01edd48b2c4249934855f203dc654a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e0ee972b8bb45d19e64229a1851c7bc.setIcon(icon_fa01edd48b2c4249934855f203dc654a);


            marker_5e0ee972b8bb45d19e64229a1851c7bc.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_54a73e0b2c3a44f398d97b33410425e4 = L.marker(
                [-27.61972435, 152.9628847],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0193d2ad37784b5e9089d4e376a4a0da = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54a73e0b2c3a44f398d97b33410425e4.setIcon(icon_0193d2ad37784b5e9089d4e376a4a0da);


            marker_54a73e0b2c3a44f398d97b33410425e4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_835c285a25a2420cb9e3cb60884e9e7b = L.marker(
                [-27.62107685, 152.9673776],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1ddf5a6eec6e4201821464b6d5ab6dfd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_835c285a25a2420cb9e3cb60884e9e7b.setIcon(icon_1ddf5a6eec6e4201821464b6d5ab6dfd);


            marker_835c285a25a2420cb9e3cb60884e9e7b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_dbfde1fa720b4d17ba70d37f338c5223 = L.marker(
                [-27.62026628, 152.9656566],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8b5e48facd774d17b6965b8f3c1bf66f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dbfde1fa720b4d17ba70d37f338c5223.setIcon(icon_8b5e48facd774d17b6965b8f3c1bf66f);


            marker_dbfde1fa720b4d17ba70d37f338c5223.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_97391c47beef4a668d09ea8356abd713 = L.marker(
                [-27.62537689, 152.962082],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_88cba849cc2347e097cbc701220b4a4b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_97391c47beef4a668d09ea8356abd713.setIcon(icon_88cba849cc2347e097cbc701220b4a4b);


            marker_97391c47beef4a668d09ea8356abd713.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f7777a3204a1488eb933ec0a2d5bef9f = L.marker(
                [-27.61978744, 152.9624793],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7a99e76a5f7a4ea3836478c901a2acea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f7777a3204a1488eb933ec0a2d5bef9f.setIcon(icon_7a99e76a5f7a4ea3836478c901a2acea);


            marker_f7777a3204a1488eb933ec0a2d5bef9f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2f062b28ffd8433f846b66cbf3f9a0f3 = L.marker(
                [-27.62097839, 152.9621873],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b4504386b5854f67af2831f8a6ff85f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2f062b28ffd8433f846b66cbf3f9a0f3.setIcon(icon_b4504386b5854f67af2831f8a6ff85f2);


            marker_2f062b28ffd8433f846b66cbf3f9a0f3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ce1957f9e4a14b8c97f8216be0ffff55 = L.marker(
                [-27.62054594, 152.9631074],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e1994699fdc04def9ad6ca166487e592 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ce1957f9e4a14b8c97f8216be0ffff55.setIcon(icon_e1994699fdc04def9ad6ca166487e592);


            marker_ce1957f9e4a14b8c97f8216be0ffff55.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1c73b81a51bd4ba9840adbd7e9cc588d = L.marker(
                [-27.62005792, 152.9625214],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2440f50166d84d8ba95372df9a115c8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1c73b81a51bd4ba9840adbd7e9cc588d.setIcon(icon_2440f50166d84d8ba95372df9a115c8e);


            marker_1c73b81a51bd4ba9840adbd7e9cc588d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ea0f4ea4349b47c3afb82dab38e680d3 = L.marker(
                [-27.62147903, 152.9610528],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1132ec1ad0d34f76a52168b2f25f8986 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ea0f4ea4349b47c3afb82dab38e680d3.setIcon(icon_1132ec1ad0d34f76a52168b2f25f8986);


            marker_ea0f4ea4349b47c3afb82dab38e680d3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8bb6617980d34dd2937869c9d8792ebc = L.marker(
                [-27.62196292, 152.9600905],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4ddbcc165e2e45bf98738aa1a0a60647 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8bb6617980d34dd2937869c9d8792ebc.setIcon(icon_4ddbcc165e2e45bf98738aa1a0a60647);


            marker_8bb6617980d34dd2937869c9d8792ebc.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ce41ffcc946540c4a68a737c90335f5f = L.marker(
                [-27.62316808, 152.9580833],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c4ca2403bd4646dc9373cda10d3f6a1f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ce41ffcc946540c4a68a737c90335f5f.setIcon(icon_c4ca2403bd4646dc9373cda10d3f6a1f);


            marker_ce41ffcc946540c4a68a737c90335f5f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5770af0b2ab14562b94503ff951c5b2e = L.marker(
                [-27.62243521, 152.9642369],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d879a4406ba9452d94b4035965b1b133 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5770af0b2ab14562b94503ff951c5b2e.setIcon(icon_d879a4406ba9452d94b4035965b1b133);


            marker_5770af0b2ab14562b94503ff951c5b2e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0c1dda2862044809a3069327afd5bf1e = L.marker(
                [-27.62240065, 152.9639363],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dc9cd3c805a346408e02067c30615d2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0c1dda2862044809a3069327afd5bf1e.setIcon(icon_dc9cd3c805a346408e02067c30615d2c);


            marker_0c1dda2862044809a3069327afd5bf1e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7aa42976bcb248d6896e1bab25ef75c4 = L.marker(
                [-27.62512796, 152.9654064],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3608f3d1c96246dbb534881b426e3d53 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7aa42976bcb248d6896e1bab25ef75c4.setIcon(icon_3608f3d1c96246dbb534881b426e3d53);


            marker_7aa42976bcb248d6896e1bab25ef75c4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1f40c2e83ccb463697c6936b01fb67a4 = L.marker(
                [-27.62231629, 152.9666745],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_20f84592401d456e9b82c9afb43bc311 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f40c2e83ccb463697c6936b01fb67a4.setIcon(icon_20f84592401d456e9b82c9afb43bc311);


            marker_1f40c2e83ccb463697c6936b01fb67a4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_824f44dd53394740be5e3296f059bc2b = L.marker(
                [-27.62146239, 152.9603056],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c6f002fc8de647d6b474c48243957d74 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_824f44dd53394740be5e3296f059bc2b.setIcon(icon_c6f002fc8de647d6b474c48243957d74);


            marker_824f44dd53394740be5e3296f059bc2b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9cb2daf3abca449ea4c6019a69f8395e = L.marker(
                [-27.61962212, 152.9627613],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bba91a5070f443178db5c6cd7d0e19f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9cb2daf3abca449ea4c6019a69f8395e.setIcon(icon_bba91a5070f443178db5c6cd7d0e19f2);


            marker_9cb2daf3abca449ea4c6019a69f8395e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1881ac01cd9a4c51be5c1a3a0dd9d302 = L.marker(
                [-27.62372848, 152.96546840000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_55c9f3931081464a823e536849c27a66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1881ac01cd9a4c51be5c1a3a0dd9d302.setIcon(icon_55c9f3931081464a823e536849c27a66);


            marker_1881ac01cd9a4c51be5c1a3a0dd9d302.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1ee8313dc515433f8ce4679e9eb4e6db = L.marker(
                [-27.62249038, 152.96427490000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_82a1125034314943b5f2e6bf080b9956 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ee8313dc515433f8ce4679e9eb4e6db.setIcon(icon_82a1125034314943b5f2e6bf080b9956);


            marker_1ee8313dc515433f8ce4679e9eb4e6db.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6ebc261864634694aef0c988b2447949 = L.marker(
                [-27.62492465, 152.9639877],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_437ff4d2a44a4629bf8a52f44e87ca98 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6ebc261864634694aef0c988b2447949.setIcon(icon_437ff4d2a44a4629bf8a52f44e87ca98);


            marker_6ebc261864634694aef0c988b2447949.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d1c8c8fc3c53404caa28b16706cf087e = L.marker(
                [-27.62489733, 152.96310590000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b288fa7efa4c4c9d84665e5f0fcac43c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d1c8c8fc3c53404caa28b16706cf087e.setIcon(icon_b288fa7efa4c4c9d84665e5f0fcac43c);


            marker_d1c8c8fc3c53404caa28b16706cf087e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ec69548145dd4f7cbd82532c17564859 = L.marker(
                [-27.62477076, 152.9624269],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_985fe1d7b4d44bb3a93d2be3e76c1bdd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ec69548145dd4f7cbd82532c17564859.setIcon(icon_985fe1d7b4d44bb3a93d2be3e76c1bdd);


            marker_ec69548145dd4f7cbd82532c17564859.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9198abb4f0f8437fa50c23bf6b9bae3c = L.marker(
                [-27.62101159, 152.96740069999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bfc8e22d24564cb78a303f4e5e642361 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9198abb4f0f8437fa50c23bf6b9bae3c.setIcon(icon_bfc8e22d24564cb78a303f4e5e642361);


            marker_9198abb4f0f8437fa50c23bf6b9bae3c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1c7550974df2485b961d7018245156e5 = L.marker(
                [-27.62592763, 152.9650291],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5d9db76d831f47e18e10e56a709148e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1c7550974df2485b961d7018245156e5.setIcon(icon_5d9db76d831f47e18e10e56a709148e5);


            marker_1c7550974df2485b961d7018245156e5.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_01ad4c1d374c43aa8876634e60c4e1c9 = L.marker(
                [-27.62374798, 152.9654538],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_87bc0569f8a8486baf258adec567e554 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_01ad4c1d374c43aa8876634e60c4e1c9.setIcon(icon_87bc0569f8a8486baf258adec567e554);


            marker_01ad4c1d374c43aa8876634e60c4e1c9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_abd4045971354b7897c2bda21598eafe = L.marker(
                [-27.62074095, 152.96312859999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5b0f19681694450f89b8ed731a926333 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_abd4045971354b7897c2bda21598eafe.setIcon(icon_5b0f19681694450f89b8ed731a926333);


            marker_abd4045971354b7897c2bda21598eafe.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_922f8288132d4f609b690d4858eb80ce = L.marker(
                [-27.62172914, 152.960229],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f2d2993ab12840238014f461367142d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_922f8288132d4f609b690d4858eb80ce.setIcon(icon_f2d2993ab12840238014f461367142d8);


            marker_922f8288132d4f609b690d4858eb80ce.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_72771e4a0d8443209de4117c395411c4 = L.marker(
                [-27.4841615, 153.0599105],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_18b09340595140d2b7a201e508b6354f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72771e4a0d8443209de4117c395411c4.setIcon(icon_18b09340595140d2b7a201e508b6354f);


            marker_72771e4a0d8443209de4117c395411c4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e7a09e3cbdf94c87816a15abb3d160fc = L.marker(
                [-27.62137692, 152.9623521],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c3cd2f9a641d4cf5b7189d7cdb7951f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7a09e3cbdf94c87816a15abb3d160fc.setIcon(icon_c3cd2f9a641d4cf5b7189d7cdb7951f3);


            marker_e7a09e3cbdf94c87816a15abb3d160fc.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_38aaac73fe9d4e4287d00a07f01381a4 = L.marker(
                [-27.6223104, 152.96441380000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e7e38a8128d747a7bc35279e62b4331e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38aaac73fe9d4e4287d00a07f01381a4.setIcon(icon_e7e38a8128d747a7bc35279e62b4331e);


            marker_38aaac73fe9d4e4287d00a07f01381a4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_26179f216cb9413c8126d8d7ea29c43c = L.marker(
                [-27.62489719, 152.9625688],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_14372ca16ad54107b6a38b24eec1422a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_26179f216cb9413c8126d8d7ea29c43c.setIcon(icon_14372ca16ad54107b6a38b24eec1422a);


            marker_26179f216cb9413c8126d8d7ea29c43c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_bd2102f5fe3f4132be267217aacc5b54 = L.marker(
                [-27.62487011, 152.9625688],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0530f6cf3922444d938f85b3dc7b474d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd2102f5fe3f4132be267217aacc5b54.setIcon(icon_0530f6cf3922444d938f85b3dc7b474d);


            marker_bd2102f5fe3f4132be267217aacc5b54.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_69a182a2c2444ceab0a94b02a058aaf3 = L.marker(
                [-27.624752899999997, 152.9631364],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b7e2906e819c42a4a0bbff61280ee1cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69a182a2c2444ceab0a94b02a058aaf3.setIcon(icon_b7e2906e819c42a4a0bbff61280ee1cb);


            marker_69a182a2c2444ceab0a94b02a058aaf3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b321b0aa2fc8477bb278152abc0b110a = L.marker(
                [-27.62476192, 152.9631263],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7b4dd148a24d441683adf885a023896e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b321b0aa2fc8477bb278152abc0b110a.setIcon(icon_7b4dd148a24d441683adf885a023896e);


            marker_b321b0aa2fc8477bb278152abc0b110a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c1d0e41513b04dc380aaa3bea8d2d8d4 = L.marker(
                [-27.62473458, 152.9621532],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_00793236342845f88ce94a6e79d1ee22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c1d0e41513b04dc380aaa3bea8d2d8d4.setIcon(icon_00793236342845f88ce94a6e79d1ee22);


            marker_c1d0e41513b04dc380aaa3bea8d2d8d4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cb42acf0966241708bb0300cc50b6306 = L.marker(
                [-27.62228729, 152.9644012],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2ba46d9afd784a338a91e63a8d813d8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cb42acf0966241708bb0300cc50b6306.setIcon(icon_2ba46d9afd784a338a91e63a8d813d8b);


            marker_cb42acf0966241708bb0300cc50b6306.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e69eecdb8e2a4b87b998a9355613a5e4 = L.marker(
                [-27.62137107, 152.9623926],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1bf03f3a90ce40f390c82c806a9155e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e69eecdb8e2a4b87b998a9355613a5e4.setIcon(icon_1bf03f3a90ce40f390c82c806a9155e7);


            marker_e69eecdb8e2a4b87b998a9355613a5e4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4d592d7e455d48f3b065f9e786a29e53 = L.marker(
                [-27.48476416, 153.0614669],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_555e076e9e88479fbd8eb0948349dec5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d592d7e455d48f3b065f9e786a29e53.setIcon(icon_555e076e9e88479fbd8eb0948349dec5);


            marker_4d592d7e455d48f3b065f9e786a29e53.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_dc4cc1ea7b1a49dfa14f4c718cf4dff5 = L.marker(
                [-27.62538807, 152.96516330000003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_63e81df05ff44ed1844caa5579aab78b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dc4cc1ea7b1a49dfa14f4c718cf4dff5.setIcon(icon_63e81df05ff44ed1844caa5579aab78b);


            marker_dc4cc1ea7b1a49dfa14f4c718cf4dff5.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3c62b1dcc69544b29d96dd90f5c81bd5 = L.marker(
                [-27.62548479, 152.96527319999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_589a4f775be34802943f8aafcc0dfd39 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c62b1dcc69544b29d96dd90f5c81bd5.setIcon(icon_589a4f775be34802943f8aafcc0dfd39);


            marker_3c62b1dcc69544b29d96dd90f5c81bd5.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9a0496167e2e48e4a1ce45bba59f816a = L.marker(
                [-27.62540111, 152.9652997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7b8e13ba698345b28d22c46482f0f0be = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9a0496167e2e48e4a1ce45bba59f816a.setIcon(icon_7b8e13ba698345b28d22c46482f0f0be);


            marker_9a0496167e2e48e4a1ce45bba59f816a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_83358419486447cd9e55eaaa8ca1a787 = L.marker(
                [-27.62543876, 152.9653041],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_739131b496cc4772a2408721b01db882 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_83358419486447cd9e55eaaa8ca1a787.setIcon(icon_739131b496cc4772a2408721b01db882);


            marker_83358419486447cd9e55eaaa8ca1a787.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_711b4089e1f543a78c3ae1c93c7f66d3 = L.marker(
                [-27.62478232, 152.96310590000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1557b07f934541fe9a07ed61ba55c080 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_711b4089e1f543a78c3ae1c93c7f66d3.setIcon(icon_1557b07f934541fe9a07ed61ba55c080);


            marker_711b4089e1f543a78c3ae1c93c7f66d3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e3875a47960845aaa533d0fcabf6b1f1 = L.marker(
                [-27.622253100000002, 152.96670490000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cbc4e5d8afe24d309720d0ce19313fe7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e3875a47960845aaa533d0fcabf6b1f1.setIcon(icon_cbc4e5d8afe24d309720d0ce19313fe7);


            marker_e3875a47960845aaa533d0fcabf6b1f1.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_dacac2690b92419691e704ab913e5bea = L.marker(
                [-27.62226922, 152.9661484],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_29d260b43fcf43e698fb188501f83d09 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dacac2690b92419691e704ab913e5bea.setIcon(icon_29d260b43fcf43e698fb188501f83d09);


            marker_dacac2690b92419691e704ab913e5bea.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_91d41d293bef47619c551b55becc96a4 = L.marker(
                [-27.62193021, 152.96721499999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dfd5475dbf994f399e16c2403706167f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_91d41d293bef47619c551b55becc96a4.setIcon(icon_dfd5475dbf994f399e16c2403706167f);


            marker_91d41d293bef47619c551b55becc96a4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_97716770e7864e3cb995d91c0f43cea4 = L.marker(
                [-27.6218886, 152.9668809],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8ee654c8e86047cd9f4d899da856f0a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_97716770e7864e3cb995d91c0f43cea4.setIcon(icon_8ee654c8e86047cd9f4d899da856f0a8);


            marker_97716770e7864e3cb995d91c0f43cea4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5f1b0b219e884a6ba2a6453a739bbd99 = L.marker(
                [-27.62192294, 152.9670236],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a641d16151ab4f1fbc9805ba30c83627 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f1b0b219e884a6ba2a6453a739bbd99.setIcon(icon_a641d16151ab4f1fbc9805ba30c83627);


            marker_5f1b0b219e884a6ba2a6453a739bbd99.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0b5427314cf04bf7bd99f3216d35d810 = L.marker(
                [-27.62182628, 152.9671484],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3e067af16d95440c8909e7f4d08c5c10 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b5427314cf04bf7bd99f3216d35d810.setIcon(icon_3e067af16d95440c8909e7f4d08c5c10);


            marker_0b5427314cf04bf7bd99f3216d35d810.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c84f149f11a945fdab71d256be03c0f3 = L.marker(
                [-27.62201044, 152.96712390000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_47aed60408654da296c3eb22051433a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c84f149f11a945fdab71d256be03c0f3.setIcon(icon_47aed60408654da296c3eb22051433a0);


            marker_c84f149f11a945fdab71d256be03c0f3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1c2d288cce724b5cb0c8f978ddc053d0 = L.marker(
                [-27.62032514, 152.9638707],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_66eb046c94144243af65e5ffd2436111 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1c2d288cce724b5cb0c8f978ddc053d0.setIcon(icon_66eb046c94144243af65e5ffd2436111);


            marker_1c2d288cce724b5cb0c8f978ddc053d0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cbd0963fb06745ef8b4a8d3ecbc0b117 = L.marker(
                [-27.62548389, 152.96218340000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dbc367c2a8a3429a8cac82db74dc8ddf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cbd0963fb06745ef8b4a8d3ecbc0b117.setIcon(icon_dbc367c2a8a3429a8cac82db74dc8ddf);


            marker_cbd0963fb06745ef8b4a8d3ecbc0b117.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_df45f1879f7948f9a63a2512c3cd358e = L.marker(
                [-27.62001666, 152.9656355],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e37fdc04c4b14a289b8abf44d735ac2e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_df45f1879f7948f9a63a2512c3cd358e.setIcon(icon_e37fdc04c4b14a289b8abf44d735ac2e);


            marker_df45f1879f7948f9a63a2512c3cd358e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0b0c455ff5ba4270bc319ee8cef83736 = L.marker(
                [-27.62274907, 152.9644648],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ef068e8d8f1e44aaa589135e232eace6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b0c455ff5ba4270bc319ee8cef83736.setIcon(icon_ef068e8d8f1e44aaa589135e232eace6);


            marker_0b0c455ff5ba4270bc319ee8cef83736.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_05aebad7e68345cab328badc840712e6 = L.marker(
                [-27.62562615, 152.95488559999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4e29bf87d65e40acb07a647e40e78e18 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_05aebad7e68345cab328badc840712e6.setIcon(icon_4e29bf87d65e40acb07a647e40e78e18);


            marker_05aebad7e68345cab328badc840712e6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4d8caf0fa2994e19a3cc0bb1dba13482 = L.marker(
                [-27.62210808, 152.9643738],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a5abc2c2a9c4ccb9ddc24c59a3d07d2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d8caf0fa2994e19a3cc0bb1dba13482.setIcon(icon_0a5abc2c2a9c4ccb9ddc24c59a3d07d2);


            marker_4d8caf0fa2994e19a3cc0bb1dba13482.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2edd1283c3894ae68e15e9620e9698e9 = L.marker(
                [-27.62497027, 152.9641189],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b2e127d5b0cc4392a57b1633a16d474e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2edd1283c3894ae68e15e9620e9698e9.setIcon(icon_b2e127d5b0cc4392a57b1633a16d474e);


            marker_2edd1283c3894ae68e15e9620e9698e9.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_48c8530ca60748d69af45e359dc30158 = L.marker(
                [-27.62529066, 152.96204880000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1d83d9c8b9e44828be20e83fb2a05693 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_48c8530ca60748d69af45e359dc30158.setIcon(icon_1d83d9c8b9e44828be20e83fb2a05693);


            marker_48c8530ca60748d69af45e359dc30158.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_01c3d62bf8ee4f59bb734a8c66ba4a09 = L.marker(
                [-27.62206344, 152.9663908],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_19c9d2d46e2642fa88d39293a60dde80 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_01c3d62bf8ee4f59bb734a8c66ba4a09.setIcon(icon_19c9d2d46e2642fa88d39293a60dde80);


            marker_01c3d62bf8ee4f59bb734a8c66ba4a09.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9985a0b2d3b74ee88b3c6f18f06a865a = L.marker(
                [-27.62233422, 152.9665228],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_476b23e3d89845db953802894b290e23 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9985a0b2d3b74ee88b3c6f18f06a865a.setIcon(icon_476b23e3d89845db953802894b290e23);


            marker_9985a0b2d3b74ee88b3c6f18f06a865a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8ec0e9ddcaf74e4dbb45a42bf4a2785d = L.marker(
                [-27.622427000000002, 152.9664267],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_705213e9ca8f487db40868b382e5993f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ec0e9ddcaf74e4dbb45a42bf4a2785d.setIcon(icon_705213e9ca8f487db40868b382e5993f);


            marker_8ec0e9ddcaf74e4dbb45a42bf4a2785d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a3bee752d5b9460fa122d9e27a25d349 = L.marker(
                [-27.62161132, 152.9634821],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_208bb04da58b498fa61d51a3824c497c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a3bee752d5b9460fa122d9e27a25d349.setIcon(icon_208bb04da58b498fa61d51a3824c497c);


            marker_a3bee752d5b9460fa122d9e27a25d349.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c09d6f2abf6245baa308c417650082e7 = L.marker(
                [-27.48416603, 153.0598745],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c6f533abfe524da491a51ab92da8229e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c09d6f2abf6245baa308c417650082e7.setIcon(icon_c6f533abfe524da491a51ab92da8229e);


            marker_c09d6f2abf6245baa308c417650082e7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_53c3f3dd4c3a49db90ae8e64eaf22045 = L.marker(
                [-27.62180767, 152.9667139],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_da5af6cde62a4528a12a558f7fb1f53b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53c3f3dd4c3a49db90ae8e64eaf22045.setIcon(icon_da5af6cde62a4528a12a558f7fb1f53b);


            marker_53c3f3dd4c3a49db90ae8e64eaf22045.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9001c604cee440c38243269fbd57da4f = L.marker(
                [-27.62542147, 152.9651532],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0f5a744806ab4fccb3b3cde4d3c709bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9001c604cee440c38243269fbd57da4f.setIcon(icon_0f5a744806ab4fccb3b3cde4d3c709bc);


            marker_9001c604cee440c38243269fbd57da4f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_574bc5e3dd364116836df55cc291fc97 = L.marker(
                [-27.62010633, 152.96576090000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7bd7093ff80443778b05a7f37a7de2ca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_574bc5e3dd364116836df55cc291fc97.setIcon(icon_7bd7093ff80443778b05a7f37a7de2ca);


            marker_574bc5e3dd364116836df55cc291fc97.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4791e481d35f4c84b38b6f642af3eba2 = L.marker(
                [-27.61992434, 152.96577649999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_551bbdc32112419e8004d6ebccacbdfd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4791e481d35f4c84b38b6f642af3eba2.setIcon(icon_551bbdc32112419e8004d6ebccacbdfd);


            marker_4791e481d35f4c84b38b6f642af3eba2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a3b062d43e6048bab088fda6850a7463 = L.marker(
                [-27.62487002, 152.9622647],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_559b8408200c4593a3b3676590f021e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a3b062d43e6048bab088fda6850a7463.setIcon(icon_559b8408200c4593a3b3676590f021e5);


            marker_a3b062d43e6048bab088fda6850a7463.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c3964df5501341f59cfb393aae6135fb = L.marker(
                [-27.62018477, 152.9628845],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4711f8f0751645c097f36171ed5d54b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c3964df5501341f59cfb393aae6135fb.setIcon(icon_4711f8f0751645c097f36171ed5d54b5);


            marker_c3964df5501341f59cfb393aae6135fb.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_283f01544f144085be1b700091bab674 = L.marker(
                [-27.62140344, 152.9626003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f00b33035f7a48939f0494851918bd80 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_283f01544f144085be1b700091bab674.setIcon(icon_f00b33035f7a48939f0494851918bd80);


            marker_283f01544f144085be1b700091bab674.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_24de6f01a18a412ca5564f64dc2805cb = L.marker(
                [-27.48486804, 153.061124],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fdc50a8c2ea24b0a903dc9e3157e13a6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24de6f01a18a412ca5564f64dc2805cb.setIcon(icon_fdc50a8c2ea24b0a903dc9e3157e13a6);


            marker_24de6f01a18a412ca5564f64dc2805cb.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2bd5b49edfe440efab528d13a06c946c = L.marker(
                [-27.620155199999996, 152.966609],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_694adc4d10a44ea5b05de599faccf11a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2bd5b49edfe440efab528d13a06c946c.setIcon(icon_694adc4d10a44ea5b05de599faccf11a);


            marker_2bd5b49edfe440efab528d13a06c946c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_52d7b7e3386c4bc5848123f330b53d63 = L.marker(
                [-27.62021412, 152.9657388],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_53bdfb302ae0415d96066e126d3d29da = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_52d7b7e3386c4bc5848123f330b53d63.setIcon(icon_53bdfb302ae0415d96066e126d3d29da);


            marker_52d7b7e3386c4bc5848123f330b53d63.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_698cf010d15947cb874c490ba066b8dd = L.marker(
                [-27.62038228, 152.9656074],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f58e9c57582a4be0934ea7ec7fcc3ea9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_698cf010d15947cb874c490ba066b8dd.setIcon(icon_f58e9c57582a4be0934ea7ec7fcc3ea9);


            marker_698cf010d15947cb874c490ba066b8dd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9bdf4ea2fa844aa4a85e45b1de5fad50 = L.marker(
                [-27.62049088, 152.96525590000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b42eac6bb531418f8290c3d0d9ad83a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9bdf4ea2fa844aa4a85e45b1de5fad50.setIcon(icon_b42eac6bb531418f8290c3d0d9ad83a2);


            marker_9bdf4ea2fa844aa4a85e45b1de5fad50.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f8c456b001144b59b6621c3c7901fdb3 = L.marker(
                [-27.62063229, 152.9646518],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6ffa2ba714624d5c99cdcc2019a59925 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f8c456b001144b59b6621c3c7901fdb3.setIcon(icon_6ffa2ba714624d5c99cdcc2019a59925);


            marker_f8c456b001144b59b6621c3c7901fdb3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0e7a6b9f38ff429592641abd8922e7c7 = L.marker(
                [-27.62048384, 152.9638169],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7797eeb23e4f45eeb3e3014c8b34588f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e7a6b9f38ff429592641abd8922e7c7.setIcon(icon_7797eeb23e4f45eeb3e3014c8b34588f);


            marker_0e7a6b9f38ff429592641abd8922e7c7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d18e10b201854d849572fbc61b1c74d1 = L.marker(
                [-27.62038066, 152.963526],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1f427ec0be0c461aa22a8954a5069504 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d18e10b201854d849572fbc61b1c74d1.setIcon(icon_1f427ec0be0c461aa22a8954a5069504);


            marker_d18e10b201854d849572fbc61b1c74d1.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8373d20b5c5649ffbd319890e6da045f = L.marker(
                [-27.624838099999998, 152.96272869999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_932054edc27c47ac92caf22a18a67c1d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8373d20b5c5649ffbd319890e6da045f.setIcon(icon_932054edc27c47ac92caf22a18a67c1d);


            marker_8373d20b5c5649ffbd319890e6da045f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_36d35518ef1e4b18b5e71f199f078a9c = L.marker(
                [-27.46811097, 153.189841],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_023a7625d2e641919aa2239721151aa8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_36d35518ef1e4b18b5e71f199f078a9c.setIcon(icon_023a7625d2e641919aa2239721151aa8);


            marker_36d35518ef1e4b18b5e71f199f078a9c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_fd8fc24ffb5f44acb4580223ae172cca = L.marker(
                [-27.6210812, 152.96242969999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_50b87cc95fba4da68840bec466ddb9f5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fd8fc24ffb5f44acb4580223ae172cca.setIcon(icon_50b87cc95fba4da68840bec466ddb9f5);


            marker_fd8fc24ffb5f44acb4580223ae172cca.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e759b62e39494898b5d7b7e5c6620378 = L.marker(
                [-27.62503573, 152.9637866],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cb821738c3ee4fb1ba643c0b58ab090c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e759b62e39494898b5d7b7e5c6620378.setIcon(icon_cb821738c3ee4fb1ba643c0b58ab090c);


            marker_e759b62e39494898b5d7b7e5c6620378.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_34eb334693204924a25de5c6bc1afcc2 = L.marker(
                [-27.62501681, 152.9639292],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ce4a7b4c24774e17801b096cea91e8b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_34eb334693204924a25de5c6bc1afcc2.setIcon(icon_ce4a7b4c24774e17801b096cea91e8b9);


            marker_34eb334693204924a25de5c6bc1afcc2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_20f421d1a74e4a8b9092e7b1c0c2d407 = L.marker(
                [-27.62505265, 152.96393740000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f080bce95a7748b5b3e2228e0008d69c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20f421d1a74e4a8b9092e7b1c0c2d407.setIcon(icon_f080bce95a7748b5b3e2228e0008d69c);


            marker_20f421d1a74e4a8b9092e7b1c0c2d407.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_53728e93cb3b4aeca4b4cae8ab4177af = L.marker(
                [-27.62498643, 152.9640979],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9bbc25601f0a43279da717f1f2ea0c97 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53728e93cb3b4aeca4b4cae8ab4177af.setIcon(icon_9bbc25601f0a43279da717f1f2ea0c97);


            marker_53728e93cb3b4aeca4b4cae8ab4177af.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d0abb2afc8524d3bbdda99cb54c73cc8 = L.marker(
                [-27.62498407, 152.9644084],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6b28e342d8ef48a0aced4c8e8fb43ea8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d0abb2afc8524d3bbdda99cb54c73cc8.setIcon(icon_6b28e342d8ef48a0aced4c8e8fb43ea8);


            marker_d0abb2afc8524d3bbdda99cb54c73cc8.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7ef4ac6074134027a55015a55361a1f0 = L.marker(
                [-27.62517949, 152.9646261],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_67ddeee2d7264ce7a7284359e1b18089 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ef4ac6074134027a55015a55361a1f0.setIcon(icon_67ddeee2d7264ce7a7284359e1b18089);


            marker_7ef4ac6074134027a55015a55361a1f0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a2f10f876c824e24827b6c28feff209a = L.marker(
                [-27.28616076, 153.0638882],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_666afec28a4a438a931b7752962ac741 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a2f10f876c824e24827b6c28feff209a.setIcon(icon_666afec28a4a438a931b7752962ac741);


            marker_a2f10f876c824e24827b6c28feff209a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5a3e9d7db60f49148ec2ade56b170a99 = L.marker(
                [-27.621020399999995, 152.9672661],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8c007b44ab8645b2b5349d368ea93187 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5a3e9d7db60f49148ec2ade56b170a99.setIcon(icon_8c007b44ab8645b2b5349d368ea93187);


            marker_5a3e9d7db60f49148ec2ade56b170a99.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_46cd1e0ab43141d48660bed3309f844e = L.marker(
                [-27.62021167, 152.9660356],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bc58dee1800e4a7e8f369be954855d05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_46cd1e0ab43141d48660bed3309f844e.setIcon(icon_bc58dee1800e4a7e8f369be954855d05);


            marker_46cd1e0ab43141d48660bed3309f844e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b4b4faf0e83d447b9ec1632fba606298 = L.marker(
                [-27.62023455, 152.96622649999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f66306d67b68429dbe97de75b32ace38 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b4b4faf0e83d447b9ec1632fba606298.setIcon(icon_f66306d67b68429dbe97de75b32ace38);


            marker_b4b4faf0e83d447b9ec1632fba606298.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c44c478573a04e269eb3b5cccadc47c0 = L.marker(
                [-27.62081746, 152.96296669999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e50a9b596d894787af75c8fa79a8c684 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c44c478573a04e269eb3b5cccadc47c0.setIcon(icon_e50a9b596d894787af75c8fa79a8c684);


            marker_c44c478573a04e269eb3b5cccadc47c0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4c8e5022110c455abf5fec31f0ef3d5c = L.marker(
                [-27.62031298, 152.9633017],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5f84d7af9c21493198423836e076b938 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4c8e5022110c455abf5fec31f0ef3d5c.setIcon(icon_5f84d7af9c21493198423836e076b938);


            marker_4c8e5022110c455abf5fec31f0ef3d5c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5542b359f2c8481ca5843222b03e2223 = L.marker(
                [-27.62091598, 152.9627525],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0aec9012ff834d2f9bf403049461791b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5542b359f2c8481ca5843222b03e2223.setIcon(icon_0aec9012ff834d2f9bf403049461791b);


            marker_5542b359f2c8481ca5843222b03e2223.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_66c36b30fca544d2b4970aec7320be86 = L.marker(
                [-27.62186266, 152.96385790000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_05a0e07e9c484a9ea27dc21eafd05aea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66c36b30fca544d2b4970aec7320be86.setIcon(icon_05a0e07e9c484a9ea27dc21eafd05aea);


            marker_66c36b30fca544d2b4970aec7320be86.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e57a611c9ca84ec98d641d3d19731e51 = L.marker(
                [-27.62373709, 152.9638377],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ead555661fa44bfd97af99bc1cdc4e5b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e57a611c9ca84ec98d641d3d19731e51.setIcon(icon_ead555661fa44bfd97af99bc1cdc4e5b);


            marker_e57a611c9ca84ec98d641d3d19731e51.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7ca3fea967da4837aaef698854a958fd = L.marker(
                [-27.62413633, 152.96361090000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0edf2959594d4673b2be9cb70e45a48d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ca3fea967da4837aaef698854a958fd.setIcon(icon_0edf2959594d4673b2be9cb70e45a48d);


            marker_7ca3fea967da4837aaef698854a958fd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_796ac7c93be2409fa6c32a146c61caf3 = L.marker(
                [-27.62447535, 152.9633513],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5b33be0373a4479daed2ecee56da16fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_796ac7c93be2409fa6c32a146c61caf3.setIcon(icon_5b33be0373a4479daed2ecee56da16fe);


            marker_796ac7c93be2409fa6c32a146c61caf3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_07dfffcad21847beb36b72b23af6e0e5 = L.marker(
                [-27.62541119, 152.9648106],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7dddf4c56c26484d9c50809129645a40 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07dfffcad21847beb36b72b23af6e0e5.setIcon(icon_7dddf4c56c26484d9c50809129645a40);


            marker_07dfffcad21847beb36b72b23af6e0e5.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9052723db8f74e62b46ad8303007fcea = L.marker(
                [-27.62590167, 152.9648267],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2f518050b2e547af9e2e89156ed99712 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9052723db8f74e62b46ad8303007fcea.setIcon(icon_2f518050b2e547af9e2e89156ed99712);


            marker_9052723db8f74e62b46ad8303007fcea.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3e92740d9bc24d539803581ecc6d542b = L.marker(
                [-27.62563687, 152.9647814],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a412d48cab8432aafd0cc5703307760 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3e92740d9bc24d539803581ecc6d542b.setIcon(icon_0a412d48cab8432aafd0cc5703307760);


            marker_3e92740d9bc24d539803581ecc6d542b.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9bd85551388c41889bf18311c0284ff6 = L.marker(
                [-27.62508573, 152.9651509],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9208a6abf7c94c37b4d00fea77cdd58d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9bd85551388c41889bf18311c0284ff6.setIcon(icon_9208a6abf7c94c37b4d00fea77cdd58d);


            marker_9bd85551388c41889bf18311c0284ff6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_40b86d45ab1f48e098705f6950f7cec1 = L.marker(
                [-27.62042293, 152.9668393],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_59d7d8288f374f97aba47af484cf3ab1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_40b86d45ab1f48e098705f6950f7cec1.setIcon(icon_59d7d8288f374f97aba47af484cf3ab1);


            marker_40b86d45ab1f48e098705f6950f7cec1.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_32435f4fa63a4dc4a41199ec7e04c08c = L.marker(
                [-27.62428292, 152.964904],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ca99d63ad9a644c88d104a79bc2d53b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_32435f4fa63a4dc4a41199ec7e04c08c.setIcon(icon_ca99d63ad9a644c88d104a79bc2d53b0);


            marker_32435f4fa63a4dc4a41199ec7e04c08c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c177b110e51b45a8b788f7e1766fdcb6 = L.marker(
                [-27.62378604, 152.96495],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_21d491366a764b909e6c54a8484447cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c177b110e51b45a8b788f7e1766fdcb6.setIcon(icon_21d491366a764b909e6c54a8484447cc);


            marker_c177b110e51b45a8b788f7e1766fdcb6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5d758d724ef14b70988dbaf3170ff947 = L.marker(
                [-27.6236299, 152.9650969],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b1f42203618e4e41853ac12523bef4cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5d758d724ef14b70988dbaf3170ff947.setIcon(icon_b1f42203618e4e41853ac12523bef4cc);


            marker_5d758d724ef14b70988dbaf3170ff947.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_cecbfc5a89014abcae0af929197f2dc7 = L.marker(
                [-27.62358663, 152.96537619999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1ca1bf0c2919452898e4e40fae3d622d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cecbfc5a89014abcae0af929197f2dc7.setIcon(icon_1ca1bf0c2919452898e4e40fae3d622d);


            marker_cecbfc5a89014abcae0af929197f2dc7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_1983a88de92142f5809508e1a42eb69f = L.marker(
                [-27.6233973, 152.965293],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bead7f89a4344a99b67cf166d7cd65b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1983a88de92142f5809508e1a42eb69f.setIcon(icon_bead7f89a4344a99b67cf166d7cd65b3);


            marker_1983a88de92142f5809508e1a42eb69f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f259ee4c887044e58aa0e1590750d8e5 = L.marker(
                [-27.62295636, 152.96557909999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c6af408ac2c445cfb1a8fb92e07ce125 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f259ee4c887044e58aa0e1590750d8e5.setIcon(icon_c6af408ac2c445cfb1a8fb92e07ce125);


            marker_f259ee4c887044e58aa0e1590750d8e5.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_202c1057c52d4cebacb580c30b3a43ef = L.marker(
                [-27.620217600000004, 152.9659452],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a8543403497a4a908f596188f9162a62 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_202c1057c52d4cebacb580c30b3a43ef.setIcon(icon_a8543403497a4a908f596188f9162a62);


            marker_202c1057c52d4cebacb580c30b3a43ef.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_767b91fe8aec474babcd55afa13fa8d7 = L.marker(
                [-27.62012194, 152.9660697],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ecbaf90ab8144a6fbbf9faec7f75a9e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_767b91fe8aec474babcd55afa13fa8d7.setIcon(icon_ecbaf90ab8144a6fbbf9faec7f75a9e8);


            marker_767b91fe8aec474babcd55afa13fa8d7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_7d6b933df6c64a739cc57472f38f5f4c = L.marker(
                [-27.62336284, 152.9639781],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9ad32751f0a54b1fa7138ad5dbb185d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7d6b933df6c64a739cc57472f38f5f4c.setIcon(icon_9ad32751f0a54b1fa7138ad5dbb185d9);


            marker_7d6b933df6c64a739cc57472f38f5f4c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_095e14eee4a84081ac8bf5fb6fe13b13 = L.marker(
                [-27.62143968, 152.9630767],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b9e3861aedb2454ab207319a1eead270 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_095e14eee4a84081ac8bf5fb6fe13b13.setIcon(icon_b9e3861aedb2454ab207319a1eead270);


            marker_095e14eee4a84081ac8bf5fb6fe13b13.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9a44e61447e241dcae629f461a5c0eb0 = L.marker(
                [-27.62233003, 152.9660239],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_36c5acfd85e74797bd17069273aa7784 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9a44e61447e241dcae629f461a5c0eb0.setIcon(icon_36c5acfd85e74797bd17069273aa7784);


            marker_9a44e61447e241dcae629f461a5c0eb0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0b3cb3ab4da84534918bb9258b0e3947 = L.marker(
                [-27.62218074, 152.9661374],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8ecf606849d24574989a4ca7d2d7d16c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b3cb3ab4da84534918bb9258b0e3947.setIcon(icon_8ecf606849d24574989a4ca7d2d7d16c);


            marker_0b3cb3ab4da84534918bb9258b0e3947.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0c3afb727aae49b3bff9c38400ad73b2 = L.marker(
                [-27.62210422, 152.96626],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ec23e8c611e14fe08e376d11cb5a441f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0c3afb727aae49b3bff9c38400ad73b2.setIcon(icon_ec23e8c611e14fe08e376d11cb5a441f);


            marker_0c3afb727aae49b3bff9c38400ad73b2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5d5efb530f664f6abaeba4fdd49d1e60 = L.marker(
                [-27.62515967, 152.9620467],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e92f60d0289c4d7bab0297e4aad1d40b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5d5efb530f664f6abaeba4fdd49d1e60.setIcon(icon_e92f60d0289c4d7bab0297e4aad1d40b);


            marker_5d5efb530f664f6abaeba4fdd49d1e60.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5f30abd0c9c74c459746f4e3e7f37378 = L.marker(
                [-27.62025914, 152.9667335],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1807d5b3d2ad40de8601a6c3e3d204fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f30abd0c9c74c459746f4e3e7f37378.setIcon(icon_1807d5b3d2ad40de8601a6c3e3d204fe);


            marker_5f30abd0c9c74c459746f4e3e7f37378.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e881ca8e94a94b5fa341078cbc0db6cf = L.marker(
                [-27.62210588, 152.9668116],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1826878ff8424eb1b6ae8f687b4e5286 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e881ca8e94a94b5fa341078cbc0db6cf.setIcon(icon_1826878ff8424eb1b6ae8f687b4e5286);


            marker_e881ca8e94a94b5fa341078cbc0db6cf.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_108c1a3bf3214407b5620dfe851443d8 = L.marker(
                [-27.61996693, 152.96643909999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a1b8fb4e729b47e7b7aa51fd28f04568 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_108c1a3bf3214407b5620dfe851443d8.setIcon(icon_a1b8fb4e729b47e7b7aa51fd28f04568);


            marker_108c1a3bf3214407b5620dfe851443d8.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c436c97bb7454ae69641fc48d0cf3546 = L.marker(
                [-27.62494272, 152.96405869999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d6dbf10cbf364bf29031320c3c25b7aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c436c97bb7454ae69641fc48d0cf3546.setIcon(icon_d6dbf10cbf364bf29031320c3c25b7aa);


            marker_c436c97bb7454ae69641fc48d0cf3546.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_fc406a1dcb294a57a45a276bc99c490f = L.marker(
                [-27.62094392, 152.9671975],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_136c9f7ae98146b0a0f2fbc55b221ae8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fc406a1dcb294a57a45a276bc99c490f.setIcon(icon_136c9f7ae98146b0a0f2fbc55b221ae8);


            marker_fc406a1dcb294a57a45a276bc99c490f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_66398fe761e84718abc2cb550262c755 = L.marker(
                [-27.61996359, 152.9664354],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_663272121453472d8b43a31ebd020aa5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66398fe761e84718abc2cb550262c755.setIcon(icon_663272121453472d8b43a31ebd020aa5);


            marker_66398fe761e84718abc2cb550262c755.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_0df231e23d544f088ad191cdded3ce7d = L.marker(
                [-27.6231828, 152.95810580000003],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f374236de5e0407395a4ba37b085c72b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0df231e23d544f088ad191cdded3ce7d.setIcon(icon_f374236de5e0407395a4ba37b085c72b);


            marker_0df231e23d544f088ad191cdded3ce7d.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_4cf748446a874794a440a5665328d86e = L.marker(
                [-27.62261867, 152.9581549],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2c6e37a2d8bb484b9d146e1ba7fbd637 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4cf748446a874794a440a5665328d86e.setIcon(icon_2c6e37a2d8bb484b9d146e1ba7fbd637);


            marker_4cf748446a874794a440a5665328d86e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3f6209bcc7c44f20b9059cff81099df0 = L.marker(
                [-27.61998955, 152.9655431],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c4646632336a49ab83cc33f485ef617c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f6209bcc7c44f20b9059cff81099df0.setIcon(icon_c4646632336a49ab83cc33f485ef617c);


            marker_3f6209bcc7c44f20b9059cff81099df0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_41759e63c4374a08996c6c7816c93d78 = L.marker(
                [-27.62145052, 152.9611219],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3842a26d8d5246a6a72a1a84fb56731c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41759e63c4374a08996c6c7816c93d78.setIcon(icon_3842a26d8d5246a6a72a1a84fb56731c);


            marker_41759e63c4374a08996c6c7816c93d78.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_5f04c38f6a274c5ba8680ceb0cd3304a = L.marker(
                [-27.61990812, 152.9627589],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_753772b240ab4b39b7fa8b88d7cc4f35 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5f04c38f6a274c5ba8680ceb0cd3304a.setIcon(icon_753772b240ab4b39b7fa8b88d7cc4f35);


            marker_5f04c38f6a274c5ba8680ceb0cd3304a.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_499116d097c04aeba9ae1d490e2229cb = L.marker(
                [-27.62041235, 152.9628539],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_533c1f795d6445e2b9a07c5c6ac30630 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_499116d097c04aeba9ae1d490e2229cb.setIcon(icon_533c1f795d6445e2b9a07c5c6ac30630);


            marker_499116d097c04aeba9ae1d490e2229cb.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_aa8fa71f5ebc401c9b3837aad2cffadf = L.marker(
                [-27.62225297, 152.9661576],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_575916459aed431c99d829f622771111 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa8fa71f5ebc401c9b3837aad2cffadf.setIcon(icon_575916459aed431c99d829f622771111);


            marker_aa8fa71f5ebc401c9b3837aad2cffadf.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ea1608aa167943e1bc639a951024bd48 = L.marker(
                [-27.62223505, 152.96670490000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3f17c158614f41c89e14689a58b63136 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ea1608aa167943e1bc639a951024bd48.setIcon(icon_3f17c158614f41c89e14689a58b63136);


            marker_ea1608aa167943e1bc639a951024bd48.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_c07fa00f7420460891e6c514bab92926 = L.marker(
                [-27.62143922, 152.9613739],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f29c07f3dc61431eb55c88e807fbb3d0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c07fa00f7420460891e6c514bab92926.setIcon(icon_f29c07f3dc61431eb55c88e807fbb3d0);


            marker_c07fa00f7420460891e6c514bab92926.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3ac1928260254330b4040c23d0e10752 = L.marker(
                [-27.61995782, 152.9661002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_36e1a687a7464a35a9d5d66f62667eeb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ac1928260254330b4040c23d0e10752.setIcon(icon_36e1a687a7464a35a9d5d66f62667eeb);


            marker_3ac1928260254330b4040c23d0e10752.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6be1f1771c3b4fd28a31fd476fe55ac6 = L.marker(
                [-27.62242696, 152.958292],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7c6e07da9cd6485ba96930f09c5b51ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6be1f1771c3b4fd28a31fd476fe55ac6.setIcon(icon_7c6e07da9cd6485ba96930f09c5b51ea);


            marker_6be1f1771c3b4fd28a31fd476fe55ac6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_92ff5c39baaf4598b3949bd0cd7f25df = L.marker(
                [-26.62242696, 152.9621984],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ac781d3585ae4fb8b5374b00f7a15eb6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_92ff5c39baaf4598b3949bd0cd7f25df.setIcon(icon_ac781d3585ae4fb8b5374b00f7a15eb6);


            marker_92ff5c39baaf4598b3949bd0cd7f25df.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_98d81f553646495ea8695154bc3344fd = L.marker(
                [-27.62261867, 152.9625534],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d53bf7c3dc61488aa7d0ee7185f3ed24 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_98d81f553646495ea8695154bc3344fd.setIcon(icon_d53bf7c3dc61488aa7d0ee7185f3ed24);


            marker_98d81f553646495ea8695154bc3344fd.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_d9d5366789fa4584b036fbff0eb540bb = L.marker(
                [-27.61998955, 152.9666745],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_738fe05b766f4eeda45afecaf888a4c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d9d5366789fa4584b036fbff0eb540bb.setIcon(icon_738fe05b766f4eeda45afecaf888a4c3);


            marker_d9d5366789fa4584b036fbff0eb540bb.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e318ad0a6c2c4347ac9dab3f22fc7cac = L.marker(
                [-27.62145052, 152.9624342],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_987eb685bad448fb85818624486fb092 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e318ad0a6c2c4347ac9dab3f22fc7cac.setIcon(icon_987eb685bad448fb85818624486fb092);


            marker_e318ad0a6c2c4347ac9dab3f22fc7cac.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6d439f7c3ebb4c06b0900c64b1150c68 = L.marker(
                [-27.61990812, 152.96276269999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f9446d881075450393ae458d8926e4cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6d439f7c3ebb4c06b0900c64b1150c68.setIcon(icon_f9446d881075450393ae458d8926e4cf);


            marker_6d439f7c3ebb4c06b0900c64b1150c68.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6be38a53051749e9af0263c049246fdb = L.marker(
                [-27.62041235, 152.9660886],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ab7b604a73304bccb141b5b66f02b37e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6be38a53051749e9af0263c049246fdb.setIcon(icon_ab7b604a73304bccb141b5b66f02b37e);


            marker_6be38a53051749e9af0263c049246fdb.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_dba259920ab84bdd94bc687dcfb1f7d2 = L.marker(
                [-27.62225297, 152.9632681],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3d60f1ce376a414eab3ee619081ef909 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dba259920ab84bdd94bc687dcfb1f7d2.setIcon(icon_3d60f1ce376a414eab3ee619081ef909);


            marker_dba259920ab84bdd94bc687dcfb1f7d2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_41fa30aa0e004a8bbf491504bdddff3c = L.marker(
                [-27.62223505, 152.9667899],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a905cfc7f80d4c89979ae8d0f63f3ce2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41fa30aa0e004a8bbf491504bdddff3c.setIcon(icon_a905cfc7f80d4c89979ae8d0f63f3ce2);


            marker_41fa30aa0e004a8bbf491504bdddff3c.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6522184317e943c39d3202b16784faf4 = L.marker(
                [-27.62143922, 152.9667656],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b0610e144c40430c878c887a3c7f33b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6522184317e943c39d3202b16784faf4.setIcon(icon_b0610e144c40430c878c887a3c7f33b8);


            marker_6522184317e943c39d3202b16784faf4.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a33b37d2737c45f19871f5bd5e760bc7 = L.marker(
                [-27.61995782, 152.96535649999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d5d05611096541859f42cd498ee9a834 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a33b37d2737c45f19871f5bd5e760bc7.setIcon(icon_d5d05611096541859f42cd498ee9a834);


            marker_a33b37d2737c45f19871f5bd5e760bc7.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9e45950b56d54c67aa6487bccf4e6b97 = L.marker(
                [-27.62242696, 152.9630743],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6f12585bfe2e44efb20b636241e91ba0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e45950b56d54c67aa6487bccf4e6b97.setIcon(icon_6f12585bfe2e44efb20b636241e91ba0);


            marker_9e45950b56d54c67aa6487bccf4e6b97.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_b66505f070a6459689aae6565d044b96 = L.marker(
                [-27.62242691, 152.9659958],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2fb03f92ca194b3aad40ccdb4c3ae880 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b66505f070a6459689aae6565d044b96.setIcon(icon_2fb03f92ca194b3aad40ccdb4c3ae880);


            marker_b66505f070a6459689aae6565d044b96.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_3b3c7a511c1b4449b355eeb126f04620 = L.marker(
                [-27.62261867, 152.9659649],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_246f300c3a954ed8b03faf0447ca10ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3b3c7a511c1b4449b355eeb126f04620.setIcon(icon_246f300c3a954ed8b03faf0447ca10ef);


            marker_3b3c7a511c1b4449b355eeb126f04620.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_da41804aba6140808e3e0bd4afbf9bd2 = L.marker(
                [-27.61998955, 152.96674130000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8254b61d0fab48d4af3cb0d1e0a3281c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_da41804aba6140808e3e0bd4afbf9bd2.setIcon(icon_8254b61d0fab48d4af3cb0d1e0a3281c);


            marker_da41804aba6140808e3e0bd4afbf9bd2.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_e825a2822faa42c28278c88cc8e18b51 = L.marker(
                [-27.62145052, 152.9629959],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8a49f1a73c3044fbba5eb8a1009ac62d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e825a2822faa42c28278c88cc8e18b51.setIcon(icon_8a49f1a73c3044fbba5eb8a1009ac62d);


            marker_e825a2822faa42c28278c88cc8e18b51.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_ee26722808244b41b924e4e77bbda9c0 = L.marker(
                [-27.61990812, 152.9621836],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c8a5559a9c7d4149bcdd1106112d83cd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ee26722808244b41b924e4e77bbda9c0.setIcon(icon_c8a5559a9c7d4149bcdd1106112d83cd);


            marker_ee26722808244b41b924e4e77bbda9c0.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_47f01a3909e543d4b390819ce5a0bfd3 = L.marker(
                [-27.62041235, 152.9661989],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_073d8e84a7764289bcce2c6691786e87 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_47f01a3909e543d4b390819ce5a0bfd3.setIcon(icon_073d8e84a7764289bcce2c6691786e87);


            marker_47f01a3909e543d4b390819ce5a0bfd3.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2112dcee60bb491baf93220ab049e1f6 = L.marker(
                [-27.62225297, 153.0638929],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_25d8a2e3118744d782cba34905d67552 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2112dcee60bb491baf93220ab049e1f6.setIcon(icon_25d8a2e3118744d782cba34905d67552);


            marker_2112dcee60bb491baf93220ab049e1f6.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6adbd625b57b4f62a4ca03a0be3fe300 = L.marker(
                [-27.62223505, 152.96367890000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a03770fe0c2c4e62be69617cdf8b34b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6adbd625b57b4f62a4ca03a0be3fe300.setIcon(icon_a03770fe0c2c4e62be69617cdf8b34b4);


            marker_6adbd625b57b4f62a4ca03a0be3fe300.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_9d9dd69c397e400496c1357f2a11870e = L.marker(
                [-27.62143922, 152.9620335],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fa474b61d8e048dca4931614849eecd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9d9dd69c397e400496c1357f2a11870e.setIcon(icon_fa474b61d8e048dca4931614849eecd7);


            marker_9d9dd69c397e400496c1357f2a11870e.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_2c23fbc283024fb1831192c5c0cb403f = L.marker(
                [-27.61995782, 152.9630115],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_76cad239fa5f45678ce57fbe29978b7b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2c23fbc283024fb1831192c5c0cb403f.setIcon(icon_76cad239fa5f45678ce57fbe29978b7b);


            marker_2c23fbc283024fb1831192c5c0cb403f.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_8dcf7ca0189a4b68a782ba453d0a0710 = L.marker(
                [-27.62242696, 152.9631356],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3b65c99577264e0e82f645faec5ba214 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8dcf7ca0189a4b68a782ba453d0a0710.setIcon(icon_3b65c99577264e0e82f645faec5ba214);


            marker_8dcf7ca0189a4b68a782ba453d0a0710.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_6535bdfd7f5448e88eb4bc6ee0854d01 = L.marker(
                [-28.62001018, 152.9631424],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d014c1fa339c4e9bb04fb56a8f0f2855 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6535bdfd7f5448e88eb4bc6ee0854d01.setIcon(icon_d014c1fa339c4e9bb04fb56a8f0f2855);


            marker_6535bdfd7f5448e88eb4bc6ee0854d01.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_f0363c3688cf48bca19cef37e70f1174 = L.marker(
                [-27.62001018, 152.9629185],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4cca8a5089bc4dbd995429b81c665f30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f0363c3688cf48bca19cef37e70f1174.setIcon(icon_4cca8a5089bc4dbd995429b81c665f30);


            marker_f0363c3688cf48bca19cef37e70f1174.bindTooltip(
                `<div>
                     THE LAKE PARKLANDS
                 </div>`,
                {"sticky": true}
            );


            var marker_a719b9f205f1436d995df18aae4b9ad5 = L.marker(
                [-27.360979999999998, 152.883896],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_78ef10aa340342beb1867e2bd095e69a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a719b9f205f1436d995df18aae4b9ad5.setIcon(icon_78ef10aa340342beb1867e2bd095e69a);


            marker_a719b9f205f1436d995df18aae4b9ad5.bindTooltip(
                `<div>
                     The Samford Tennis Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_2ce5f4a4028348f393165b7a641547fe = L.marker(
                [-21.109592000000003, 149.178737],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_883a6c6506fb43cfb6afea8c4334592b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ce5f4a4028348f393165b7a641547fe.setIcon(icon_883a6c6506fb43cfb6afea8c4334592b);


            marker_2ce5f4a4028348f393165b7a641547fe.bindTooltip(
                `<div>
                     Mackay Lions Soccer Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_c029d752afec436da8562faaeadf5873 = L.marker(
                [-28.210753000000004, 152.027743],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_361f2adbe9c548d7b853f877d3004fc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c029d752afec436da8562faaeadf5873.setIcon(icon_361f2adbe9c548d7b853f877d3004fc5);


            marker_c029d752afec436da8562faaeadf5873.bindTooltip(
                `<div>
                     Warwick Boxing Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_76277dea81f9440fa7946a749b8b842d = L.marker(
                [-17.322798000000002, 145.421676],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_188fcfb8d06e493492714d5882ccb339 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_76277dea81f9440fa7946a749b8b842d.setIcon(icon_188fcfb8d06e493492714d5882ccb339);


            marker_76277dea81f9440fa7946a749b8b842d.bindTooltip(
                `<div>
                     Tablelands Outdoor Recreation Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_db3c571dc9314b069a1e66998a5968ca = L.marker(
                [-21.139791, 149.169739],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_aad103c274714a19baf7d0b9a42fa36b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db3c571dc9314b069a1e66998a5968ca.setIcon(icon_aad103c274714a19baf7d0b9a42fa36b);


            marker_db3c571dc9314b069a1e66998a5968ca.bindTooltip(
                `<div>
                     Mackay Junior Moto Cross Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_476fac5c0c464154b994f530d3f51bf0 = L.marker(
                [-17.585341, 146.040367],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f1150768e3574f499e8e3e411bb3824c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_476fac5c0c464154b994f530d3f51bf0.setIcon(icon_f1150768e3574f499e8e3e411bb3824c);


            marker_476fac5c0c464154b994f530d3f51bf0.bindTooltip(
                `<div>
                     Innisfail United Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_96bc8ebf5d04454c9af1cb30d0a1a187 = L.marker(
                [-22.815271, 148.712637],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8584105e05494745a4511ef695b1b481 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_96bc8ebf5d04454c9af1cb30d0a1a187.setIcon(icon_8584105e05494745a4511ef695b1b481);


            marker_96bc8ebf5d04454c9af1cb30d0a1a187.bindTooltip(
                `<div>
                     Middlemount Golf & Country Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_43513dbd621043f1bd299398d9d22488 = L.marker(
                [-27.548556, 151.928093],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6c763545cc394e6a8bf449e1fc0f4102 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43513dbd621043f1bd299398d9d22488.setIcon(icon_6c763545cc394e6a8bf449e1fc0f4102);


            marker_43513dbd621043f1bd299398d9d22488.bindTooltip(
                `<div>
                     Toowoomba Bmx Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_18d2e8942ead4819ae69212d086957aa = L.marker(
                [-16.487337, 145.46173100000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a600a56e8fe4a8baa71e7052181caa8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_18d2e8942ead4819ae69212d086957aa.setIcon(icon_0a600a56e8fe4a8baa71e7052181caa8);


            marker_18d2e8942ead4819ae69212d086957aa.bindTooltip(
                `<div>
                     Port Douglas Rugby Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_72596ac88cdd434785b89ef1aa8747a9 = L.marker(
                [-27.542594, 151.985252],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_28e979b3a8284c6f9a6c4789f17f8fdd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72596ac88cdd434785b89ef1aa8747a9.setIcon(icon_28e979b3a8284c6f9a6c4789f17f8fdd);


            marker_72596ac88cdd434785b89ef1aa8747a9.bindTooltip(
                `<div>
                     Toowoomba Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_81b87e9762224f81acfd3f2e65dcc222 = L.marker(
                [-27.599984000000003, 152.915855],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f7ad139052184f22852ae7c8c82ef107 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_81b87e9762224f81acfd3f2e65dcc222.setIcon(icon_f7ad139052184f22852ae7c8c82ef107);


            marker_81b87e9762224f81acfd3f2e65dcc222.bindTooltip(
                `<div>
                     Gailes Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ae22e5f9d9524e9f99e42a86bb2cd776 = L.marker(
                [-27.518334999999997, 153.04878100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_54fde74cef514f0e8c0b82aa820ab3b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ae22e5f9d9524e9f99e42a86bb2cd776.setIcon(icon_54fde74cef514f0e8c0b82aa820ab3b8);


            marker_ae22e5f9d9524e9f99e42a86bb2cd776.bindTooltip(
                `<div>
                     The Tarragindi Churches' Tigers Sporting Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_4524124361904114adda6b7eeed61ead = L.marker(
                [-26.479716999999997, 153.094976],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_09e46953d136491dacd5a9c414cddcad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4524124361904114adda6b7eeed61ead.setIcon(icon_09e46953d136491dacd5a9c414cddcad);


            marker_4524124361904114adda6b7eeed61ead.bindTooltip(
                `<div>
                     Peregian Tennis Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_2991702ef7b04c36901221fc8da33b0c = L.marker(
                [-27.477752000000002, 153.034326],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ab4686065dcc4c06836b93bd0d7c4353 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2991702ef7b04c36901221fc8da33b0c.setIcon(icon_ab4686065dcc4c06836b93bd0d7c4353);


            marker_2991702ef7b04c36901221fc8da33b0c.bindTooltip(
                `<div>
                     University Of Queensland Mountain Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_59eb9f1e5abc421eb913cc6d835cd4b1 = L.marker(
                [-27.227043, 153.10860300000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2fdf34d474af4e2f88c3f5a16b53b7be = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_59eb9f1e5abc421eb913cc6d835cd4b1.setIcon(icon_2fdf34d474af4e2f88c3f5a16b53b7be);


            marker_59eb9f1e5abc421eb913cc6d835cd4b1.bindTooltip(
                `<div>
                     The Redcliffe Leagues Hockey Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ee39e738fbbe4d079807243e33e47272 = L.marker(
                [-27.680626, 153.146154],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4d10b461f874481e8c154e1285e650d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ee39e738fbbe4d079807243e33e47272.setIcon(icon_4d10b461f874481e8c154e1285e650d4);


            marker_ee39e738fbbe4d079807243e33e47272.bindTooltip(
                `<div>
                     Bethania Rams Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_bfb19cc5e5924e4facfd9b9cbc748514 = L.marker(
                [-28.146826, 153.493984],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6a5c8957ca7e42b483829dc20c52f79c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bfb19cc5e5924e4facfd9b9cbc748514.setIcon(icon_6a5c8957ca7e42b483829dc20c52f79c);


            marker_bfb19cc5e5924e4facfd9b9cbc748514.bindTooltip(
                `<div>
                     Tugun Bowls & Community Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_87ee3c53e6f1491bad9c81084730e794 = L.marker(
                [-26.573999, 148.809179],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1a6b9f27bcb64b43beaf9ea3fdfa749b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_87ee3c53e6f1491bad9c81084730e794.setIcon(icon_1a6b9f27bcb64b43beaf9ea3fdfa749b);


            marker_87ee3c53e6f1491bad9c81084730e794.bindTooltip(
                `<div>
                     Cities Rugby League Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d12595b252e2452588c4a4284bbb47b4 = L.marker(
                [-17.428427, 145.396176],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4ade745b582342dfb65b04cdc0956654 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d12595b252e2452588c4a4284bbb47b4.setIcon(icon_4ade745b582342dfb65b04cdc0956654);


            marker_d12595b252e2452588c4a4284bbb47b4.bindTooltip(
                `<div>
                     Tableland Competition Car Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_63a15177b06f47498b414cee4d8158ff = L.marker(
                [-28.552159999999997, 150.320701],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_038dad8733d840a6af9d451c17f7d9cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_63a15177b06f47498b414cee4d8158ff.setIcon(icon_038dad8733d840a6af9d451c17f7d9cc);


            marker_63a15177b06f47498b414cee4d8158ff.bindTooltip(
                `<div>
                     Goondiwindi Rugby League Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_27ef3bdce67e4d079a967647ceaa5a23 = L.marker(
                [-19.403828, 146.988926],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b486700fa9284f40b4bdc31a6ebec4c1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27ef3bdce67e4d079a967647ceaa5a23.setIcon(icon_b486700fa9284f40b4bdc31a6ebec4c1);


            marker_27ef3bdce67e4d079a967647ceaa5a23.bindTooltip(
                `<div>
                     Townsville Gun Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_bdd20f7215d24104b2ea6304a9f92a67 = L.marker(
                [-27.584497999999996, 153.122866],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ba967065813a4aa9818cb6e045ba0973 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bdd20f7215d24104b2ea6304a9f92a67.setIcon(icon_ba967065813a4aa9818cb6e045ba0973);


            marker_bdd20f7215d24104b2ea6304a9f92a67.bindTooltip(
                `<div>
                     Southside Aquatics Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ad8082225f254469a7d6be74b6373778 = L.marker(
                [-27.865239000000003, 152.977936],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_83569a32057b4e26ae124e19d289718b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad8082225f254469a7d6be74b6373778.setIcon(icon_83569a32057b4e26ae124e19d289718b);


            marker_ad8082225f254469a7d6be74b6373778.bindTooltip(
                `<div>
                     Cedar Grove And District Riding Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_faa4bae3013a45afa5a930bb1d7748dc = L.marker(
                [-27.642907, 153.158614],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3b4d8c3fd06647ba931cef3f455c39a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_faa4bae3013a45afa5a930bb1d7748dc.setIcon(icon_3b4d8c3fd06647ba931cef3f455c39a4);


            marker_faa4bae3013a45afa5a930bb1d7748dc.bindTooltip(
                `<div>
                     Slacks Creek Soccer Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_5c8ca5c0953b42dca05513d011da0596 = L.marker(
                [-27.658982, 153.152531],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_084d60697cc644168ca35d8655543305 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5c8ca5c0953b42dca05513d011da0596.setIcon(icon_084d60697cc644168ca35d8655543305);


            marker_5c8ca5c0953b42dca05513d011da0596.bindTooltip(
                `<div>
                     Springwood Branch Little Athletics Centre Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d07bb508398146839c23ea2e5f95b89f = L.marker(
                [-16.794329, 145.6853],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_20a18774b8684516945a0788ac7d9a5e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d07bb508398146839c23ea2e5f95b89f.setIcon(icon_20a18774b8684516945a0788ac7d9a5e);


            marker_d07bb508398146839c23ea2e5f95b89f.bindTooltip(
                `<div>
                     Trinity Beach Tennis Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_afcd9107a87443ce8c3e021d2041a87b = L.marker(
                [-27.610429999999997, 152.802008],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9e0e53935447471db19753cbef044b6d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_afcd9107a87443ce8c3e021d2041a87b.setIcon(icon_9e0e53935447471db19753cbef044b6d);


            marker_afcd9107a87443ce8c3e021d2041a87b.bindTooltip(
                `<div>
                     Ipswich Knights Soccer Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5bbd322e67e24efe8bffbbe22ca0f57a = L.marker(
                [-27.406053999999997, 152.981101],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_511698b08315457b9cd1bd000dccbf5a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bbd322e67e24efe8bffbbe22ca0f57a.setIcon(icon_511698b08315457b9cd1bd000dccbf5a);


            marker_5bbd322e67e24efe8bffbbe22ca0f57a.bindTooltip(
                `<div>
                     Mitchelton Sports Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_9664ac2cc87a4c8bbd906018fcdcb017 = L.marker(
                [-26.788453000000004, 153.113742],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_000bfbdd979443f2b95a84f6428876b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9664ac2cc87a4c8bbd906018fcdcb017.setIcon(icon_000bfbdd979443f2b95a84f6428876b0);


            marker_9664ac2cc87a4c8bbd906018fcdcb017.bindTooltip(
                `<div>
                     Caloundra Off Road Cycling Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b5db28be12024c3e86b783389778a85e = L.marker(
                [-27.644378000000003, 153.167571],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_23135b0a209c4479850c950ca6563664 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5db28be12024c3e86b783389778a85e.setIcon(icon_23135b0a209c4479850c950ca6563664);


            marker_b5db28be12024c3e86b783389778a85e.bindTooltip(
                `<div>
                     Springwood Suns Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b6f060b681d54a5d8f069725cfee777e = L.marker(
                [-27.4782, 153.052292],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1cd04db992934536aa4176a9fc77fba7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b6f060b681d54a5d8f069725cfee777e.setIcon(icon_1cd04db992934536aa4176a9fc77fba7);


            marker_b6f060b681d54a5d8f069725cfee777e.bindTooltip(
                `<div>
                     Eastern Suburbs Soccer Club Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_f5501f03fb4049a3a05432a5cbcbbebc = L.marker(
                [-21.166061, 149.070881],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8660c77efea640cb82c69efda71c3166 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f5501f03fb4049a3a05432a5cbcbbebc.setIcon(icon_8660c77efea640cb82c69efda71c3166);


            marker_f5501f03fb4049a3a05432a5cbcbbebc.bindTooltip(
                `<div>
                     Walkerston B.m.x. Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_ecebcca882274c23b596582a20291887 = L.marker(
                [-23.15332, 150.710489],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2ff282d8368a4b429bd89038e838960a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ecebcca882274c23b596582a20291887.setIcon(icon_2ff282d8368a4b429bd89038e838960a);


            marker_ecebcca882274c23b596582a20291887.bindTooltip(
                `<div>
                     Yeppoon Gymnastics & Movement Centre Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_d94c5745187943fc8994b0d40ad25a84 = L.marker(
                [-27.408745, 153.039941],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_64da81ba1e294bb2a7457aea04980885 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d94c5745187943fc8994b0d40ad25a84.setIcon(icon_64da81ba1e294bb2a7457aea04980885);


            marker_d94c5745187943fc8994b0d40ad25a84.bindTooltip(
                `<div>
                     Kedron Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_3fdc0525af894a918d854aa4e5a79bd0 = L.marker(
                [-19.979647, 148.232322],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8097bab32c3f4e1fbd1e7a094f4f415c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3fdc0525af894a918d854aa4e5a79bd0.setIcon(icon_8097bab32c3f4e1fbd1e7a094f4f415c);


            marker_3fdc0525af894a918d854aa4e5a79bd0.bindTooltip(
                `<div>
                     Wangaratta Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_43fe7c9b302a43419e7675e01b29fe9f = L.marker(
                [-27.706198999999998, 153.19303200000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d176092e66924841a349c4898860884b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43fe7c9b302a43419e7675e01b29fe9f.setIcon(icon_d176092e66924841a349c4898860884b);


            marker_43fe7c9b302a43419e7675e01b29fe9f.bindTooltip(
                `<div>
                     Beenleigh Multisports Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_01921befb5a445d89f68646d83b095ab = L.marker(
                [-23.358483, 150.49512099999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4b5cda0cf9ba472480400ddfdf603c18 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_01921befb5a445d89f68646d83b095ab.setIcon(icon_4b5cda0cf9ba472480400ddfdf603c18);


            marker_01921befb5a445d89f68646d83b095ab.bindTooltip(
                `<div>
                     North Rockhampton Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c8c6afb8bf584615877f5f1c574e2b1e = L.marker(
                [-27.53997, 153.272949],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2d692d37015842279f7ffecb2922a688 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c8c6afb8bf584615877f5f1c574e2b1e.setIcon(icon_2d692d37015842279f7ffecb2922a688);


            marker_c8c6afb8bf584615877f5f1c574e2b1e.bindTooltip(
                `<div>
                     Cleveland - Thornlands Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_85eac316a5b94bbe85e56491d92d7912 = L.marker(
                [-28.036576, 153.185823],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c2e8f749cff44596b9506d39c4cd22bd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85eac316a5b94bbe85e56491d92d7912.setIcon(icon_c2e8f749cff44596b9506d39c4cd22bd);


            marker_85eac316a5b94bbe85e56491d92d7912.bindTooltip(
                `<div>
                     Canungra Area Golf Club (cagc) Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_41d56a60c0cc4690abe4a1ee1564860a = L.marker(
                [-20.009549, 148.256494],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d4f5f498405646b1ba6842a3e495bb09 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41d56a60c0cc4690abe4a1ee1564860a.setIcon(icon_d4f5f498405646b1ba6842a3e495bb09);


            marker_41d56a60c0cc4690abe4a1ee1564860a.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_0d7974c792244770baa49d01e216662c = L.marker(
                [-26.389483000000002, 153.025138],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2c98e4de7dc3496d8f85d6d073868fac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0d7974c792244770baa49d01e216662c.setIcon(icon_2c98e4de7dc3496d8f85d6d073868fac);


            marker_0d7974c792244770baa49d01e216662c.bindTooltip(
                `<div>
                     Noosa District Softball Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_65e97d4c3f434d7b946449adb416ac4f = L.marker(
                [-27.730743, 153.11696799999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d1d3614677644403882f6a8948b6a200 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_65e97d4c3f434d7b946449adb416ac4f.setIcon(icon_d1d3614677644403882f6a8948b6a200);


            marker_65e97d4c3f434d7b946449adb416ac4f.bindTooltip(
                `<div>
                     Waterford Equestrian And Pony Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_397300aa1017455fa261650cf3196578 = L.marker(
                [-26.686147, 153.103222],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3acd76452c1249409a4baac361be43e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_397300aa1017455fa261650cf3196578.setIcon(icon_3acd76452c1249409a4baac361be43e0);


            marker_397300aa1017455fa261650cf3196578.bindTooltip(
                `<div>
                     Mooloolaba Tennis Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_e3de97c9400b4006b262683f3ea04de8 = L.marker(
                [-21.108597, 149.170895],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a06fabee26d24f5396750008235557dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e3de97c9400b4006b262683f3ea04de8.setIcon(icon_a06fabee26d24f5396750008235557dd);


            marker_e3de97c9400b4006b262683f3ea04de8.bindTooltip(
                `<div>
                     Mackay Pioneer Bmx Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_a7b521aa5cf8473c86a063478e2db26b = L.marker(
                [-22.832654, 148.701978],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_59a54a4503044d43864bc08c168876eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7b521aa5cf8473c86a063478e2db26b.setIcon(icon_59a54a4503044d43864bc08c168876eb);


            marker_a7b521aa5cf8473c86a063478e2db26b.bindTooltip(
                `<div>
                     Middlemount Rodeo Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9074be7dd76c4352b2999a026697c27e = L.marker(
                [-27.452407, 153.057152],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_75c687beb41f459eaa5e1a4706363b9b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9074be7dd76c4352b2999a026697c27e.setIcon(icon_75c687beb41f459eaa5e1a4706363b9b);


            marker_9074be7dd76c4352b2999a026697c27e.bindTooltip(
                `<div>
                     Southside Eagles Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_53c071797e194215b370db024de33382 = L.marker(
                [-16.520039999999998, 145.47212199999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_648d27db6173488c81be67b17f950e5a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53c071797e194215b370db024de33382.setIcon(icon_648d27db6173488c81be67b17f950e5a);


            marker_53c071797e194215b370db024de33382.bindTooltip(
                `<div>
                     Port Douglas Outrigger Canoe Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_6e4d2c36ce454b0ca8ca0356b10e1cd3 = L.marker(
                [-27.467940999999996, 153.126817],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_19a307cd921f4059b00bd228d5f1aae4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e4d2c36ce454b0ca8ca0356b10e1cd3.setIcon(icon_19a307cd921f4059b00bd228d5f1aae4);


            marker_6e4d2c36ce454b0ca8ca0356b10e1cd3.bindTooltip(
                `<div>
                     Wynnum Manly District Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1f6b688cf4d6443e890e957a62bfbb54 = L.marker(
                [-27.43944, 153.02606],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_eb3bc470e91f41d790c970e4f8c2709a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f6b688cf4d6443e890e957a62bfbb54.setIcon(icon_eb3bc470e91f41d790c970e4f8c2709a);


            marker_1f6b688cf4d6443e890e957a62bfbb54.bindTooltip(
                `<div>
                     Brisbane Softball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_a039399f53de43aaa5717e47fd955cfb = L.marker(
                [-27.55783, 152.937953],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d0cc0e8b57e844ccb567e6ac0595cfcd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a039399f53de43aaa5717e47fd955cfb.setIcon(icon_d0cc0e8b57e844ccb567e6ac0595cfcd);


            marker_a039399f53de43aaa5717e47fd955cfb.bindTooltip(
                `<div>
                     The Young Men's Christian Association Of Brisbane
                 </div>`,
                {"sticky": true}
            );


            var marker_6d1fa795440e40d48ba55ebbb93a9bc4 = L.marker(
                [-26.200039, 152.654673],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4f5d7d9bbf784362b5016e943c17392a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6d1fa795440e40d48ba55ebbb93a9bc4.setIcon(icon_4f5d7d9bbf784362b5016e943c17392a);


            marker_6d1fa795440e40d48ba55ebbb93a9bc4.bindTooltip(
                `<div>
                     Gympie And District Hockey Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_87968caf9657468d8b3878342740903b = L.marker(
                [-24.393537, 150.51376399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c6ecee093ee046a39c405d63741c2eba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_87968caf9657468d8b3878342740903b.setIcon(icon_c6ecee093ee046a39c405d63741c2eba);


            marker_87968caf9657468d8b3878342740903b.bindTooltip(
                `<div>
                     Banana Shire Council
                 </div>`,
                {"sticky": true}
            );


            var marker_15fc00378ef84db1851e2d6241711d96 = L.marker(
                [-19.979647, 148.232322],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5c25ea495c004e2fb65247000c34fb17 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15fc00378ef84db1851e2d6241711d96.setIcon(icon_5c25ea495c004e2fb65247000c34fb17);


            marker_15fc00378ef84db1851e2d6241711d96.bindTooltip(
                `<div>
                     Bowen Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_b65c55ba57c44aecad26304f3c474cb0 = L.marker(
                [-27.525913, 153.274872],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_04afef3990b7450fa74cc857ac6015cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b65c55ba57c44aecad26304f3c474cb0.setIcon(icon_04afef3990b7450fa74cc857ac6015cc);


            marker_b65c55ba57c44aecad26304f3c474cb0.bindTooltip(
                `<div>
                     Cleveland Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_63973d0cd5064610bdd3961988f5e003 = L.marker(
                [-27.726940000000003, 153.00389199999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_981d72e46d5f4e4bbaf7b9e252b376b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_63973d0cd5064610bdd3961988f5e003.setIcon(icon_981d72e46d5f4e4bbaf7b9e252b376b6);


            marker_63973d0cd5064610bdd3961988f5e003.bindTooltip(
                `<div>
                     Greenbank Pony Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_6699727b51cb427388261f3eaef5f332 = L.marker(
                [-27.477346, 153.00468500000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dd6741c54ede49558b993d5a805d3de1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6699727b51cb427388261f3eaef5f332.setIcon(icon_dd6741c54ede49558b993d5a805d3de1);


            marker_6699727b51cb427388261f3eaef5f332.bindTooltip(
                `<div>
                     Commercial Rowing Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_cd02ecab219944eb833cc285bae0b124 = L.marker(
                [-26.716012, 153.06882199999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d1a2476a9b74428fb0932bd50091b87b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cd02ecab219944eb833cc285bae0b124.setIcon(icon_d1a2476a9b74428fb0932bd50091b87b);


            marker_cd02ecab219944eb833cc285bae0b124.bindTooltip(
                `<div>
                     University Of The Sunshine Coast Barbarians Rugby Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_963129a794234b37947730e6a1a92f4d = L.marker(
                [-27.444482, 152.027941],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_342395c025b1418e9480bfe046d6e95a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_963129a794234b37947730e6a1a92f4d.setIcon(icon_342395c025b1418e9480bfe046d6e95a);


            marker_963129a794234b37947730e6a1a92f4d.bindTooltip(
                `<div>
                     Toowoomba Motor Cycle Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_89a5d469f5d747d8bba8c12cd199f516 = L.marker(
                [-16.927195, 145.750086],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3ce515775be648aa817847f44a23a8ca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_89a5d469f5d747d8bba8c12cd199f516.setIcon(icon_3ce515775be648aa817847f44a23a8ca);


            marker_89a5d469f5d747d8bba8c12cd199f516.bindTooltip(
                `<div>
                     Cairns & District Squash Rackets Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_0b5c4e1ba839449ebb5c57899a0fb69b = L.marker(
                [-27.232888, 152.978845],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_30c75487a0b048d1b554b885170ba497 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0b5c4e1ba839449ebb5c57899a0fb69b.setIcon(icon_30c75487a0b048d1b554b885170ba497);


            marker_0b5c4e1ba839449ebb5c57899a0fb69b.bindTooltip(
                `<div>
                     Pine Rivers Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ad3d9eb3c7ed4ddd891062ccf3154dcd = L.marker(
                [-26.389483000000002, 153.025138],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_10d6b936c17d4b5ebb6933f093208872 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ad3d9eb3c7ed4ddd891062ccf3154dcd.setIcon(icon_10d6b936c17d4b5ebb6933f093208872);


            marker_ad3d9eb3c7ed4ddd891062ccf3154dcd.bindTooltip(
                `<div>
                     Noosa District Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4b9194efb75d4f3b93425ae5d532b9ad = L.marker(
                [-21.164753, 149.184782],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a3011b35712d43f895ff356c0eff4021 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4b9194efb75d4f3b93425ae5d532b9ad.setIcon(icon_a3011b35712d43f895ff356c0eff4021);


            marker_4b9194efb75d4f3b93425ae5d532b9ad.bindTooltip(
                `<div>
                     Mackay Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_82a36a5de5924305a11072bff12bb630 = L.marker(
                [-27.454912, 152.65766499999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cf5949d4b7c54de08dc9662fa3aa092c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_82a36a5de5924305a11072bff12bb630.setIcon(icon_cf5949d4b7c54de08dc9662fa3aa092c);


            marker_82a36a5de5924305a11072bff12bb630.bindTooltip(
                `<div>
                     Fernvale Campdraft Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_f8bf92c1f78640078f27b51821ce646b = L.marker(
                [-26.409437, 153.011083],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_77e70131cb7d40bd8885dbe4d4a6d0a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f8bf92c1f78640078f27b51821ce646b.setIcon(icon_77e70131cb7d40bd8885dbe4d4a6d0a4);


            marker_f8bf92c1f78640078f27b51821ce646b.bindTooltip(
                `<div>
                     Noosa Trailblazers Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_e570191c65cd4504b92db3f6888ab982 = L.marker(
                [-27.972387, 153.417506],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a6b420b0f5404ea5b541c3b0cbea15d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e570191c65cd4504b92db3f6888ab982.setIcon(icon_a6b420b0f5404ea5b541c3b0cbea15d1);


            marker_e570191c65cd4504b92db3f6888ab982.bindTooltip(
                `<div>
                     Tennis Gold Coast Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_f48af0830cc54bb58418e577144aece3 = L.marker(
                [-16.815006, 145.69683600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c8a33c26d2d24e228e11f245645623cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f48af0830cc54bb58418e577144aece3.setIcon(icon_c8a33c26d2d24e228e11f245645623cb);


            marker_f48af0830cc54bb58418e577144aece3.bindTooltip(
                `<div>
                     Marlin Coast Swimming Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_29d08a2c6ae444548484cd2a5a1debb6 = L.marker(
                [-17.748829999999998, 146.025793],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7709fb7bddd64629a6488d871bc3fb82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_29d08a2c6ae444548484cd2a5a1debb6.setIcon(icon_7709fb7bddd64629a6488d871bc3fb82);


            marker_29d08a2c6ae444548484cd2a5a1debb6.bindTooltip(
                `<div>
                     Silkwood Clay Target Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4e96d775cfd84437b4749c6de5b86698 = L.marker(
                [-20.054206, 146.250748],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1959311f2e0b431884211a4b36050bfa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4e96d775cfd84437b4749c6de5b86698.setIcon(icon_1959311f2e0b431884211a4b36050bfa);


            marker_4e96d775cfd84437b4749c6de5b86698.bindTooltip(
                `<div>
                     Charters Towers Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_c4b5ba40fee24cfd9bd844d8a93c7a36 = L.marker(
                [-27.900114000000002, 153.329137],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6a1bc5c3e5f04704bd8a68456ed9623b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c4b5ba40fee24cfd9bd844d8a93c7a36.setIcon(icon_6a1bc5c3e5f04704bd8a68456ed9623b);


            marker_c4b5ba40fee24cfd9bd844d8a93c7a36.bindTooltip(
                `<div>
                     Helensvale Rugby Union Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_c8950f046d7a4ccab108f3d4975f3edb = L.marker(
                [-28.018534999999996, 153.358798],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0209517809aa4c5daa9a07fd3301dbb5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c8950f046d7a4ccab108f3d4975f3edb.setIcon(icon_0209517809aa4c5daa9a07fd3301dbb5);


            marker_c8950f046d7a4ccab108f3d4975f3edb.bindTooltip(
                `<div>
                     Mudgeeraba Nerang And Districts' Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c91b7c3506444fa3a2421f4be6fb8791 = L.marker(
                [-26.197294, 152.678277],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a6d14b34d90417e903069e4e1cf8a3c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c91b7c3506444fa3a2421f4be6fb8791.setIcon(icon_0a6d14b34d90417e903069e4e1cf8a3c);


            marker_c91b7c3506444fa3a2421f4be6fb8791.bindTooltip(
                `<div>
                     Gympie Regional Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4440c466d6ff4df492475c64fecbc981 = L.marker(
                [-27.491335, 153.099078],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b00059fbca754c8d8cd04b807923f8ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4440c466d6ff4df492475c64fecbc981.setIcon(icon_b00059fbca754c8d8cd04b807923f8ce);


            marker_4440c466d6ff4df492475c64fecbc981.bindTooltip(
                `<div>
                     Eastern Suburbs Hockey Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_bd64f0b2a2854110a07203f50134959e = L.marker(
                [-27.519632, 153.024169],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5842237c03dc42e48dbed1053303debc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd64f0b2a2854110a07203f50134959e.setIcon(icon_5842237c03dc42e48dbed1053303debc);


            marker_bd64f0b2a2854110a07203f50134959e.bindTooltip(
                `<div>
                     Souths Rugby Union Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_4a77120544a94308b0b756d413a7d418 = L.marker(
                [-27.488803000000004, 153.05901599999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_260abb02bfdd4a6b92f5491e57af782c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a77120544a94308b0b756d413a7d418.setIcon(icon_260abb02bfdd4a6b92f5491e57af782c);


            marker_4a77120544a94308b0b756d413a7d418.bindTooltip(
                `<div>
                     Metropolitan Districts Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_c296aa810a3d4f7f8e888d626ca3dba6 = L.marker(
                [-24.004518, 151.19353999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_549f75f8eba347b18729a713a5487079 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c296aa810a3d4f7f8e888d626ca3dba6.setIcon(icon_549f75f8eba347b18729a713a5487079);


            marker_c296aa810a3d4f7f8e888d626ca3dba6.bindTooltip(
                `<div>
                     Calliope Junior Rugby League Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5bfe460dab314cc4a99c4ae2160f8676 = L.marker(
                [-19.671160999999998, 147.42118],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cd98ff163c7844b7809396a99eb2c72f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bfe460dab314cc4a99c4ae2160f8676.setIcon(icon_cd98ff163c7844b7809396a99eb2c72f);


            marker_5bfe460dab314cc4a99c4ae2160f8676.bindTooltip(
                `<div>
                     Home Hill Tennis Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9eaffb0f8ca846f5846f64f751501e88 = L.marker(
                [-27.298745, 151.59833799999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a73b4cb372044f359d411ec55bcf949e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9eaffb0f8ca846f5846f64f751501e88.setIcon(icon_a73b4cb372044f359d411ec55bcf949e);


            marker_9eaffb0f8ca846f5846f64f751501e88.bindTooltip(
                `<div>
                     Darling Downs Rifle Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0c0f5ab7b6554b2da6bad6911e2d26a8 = L.marker(
                [-27.443125, 153.025992],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7d81039a242c4ccca27643296b22ba3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0c0f5ab7b6554b2da6bad6911e2d26a8.setIcon(icon_7d81039a242c4ccca27643296b22ba3b);


            marker_0c0f5ab7b6554b2da6bad6911e2d26a8.bindTooltip(
                `<div>
                     Downey Park Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_942ea9e8d3a14e508ba62f65f289029a = L.marker(
                [-20.404997, 148.570399],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2702a56baa3b4c9ca93e3af3c1d4500b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_942ea9e8d3a14e508ba62f65f289029a.setIcon(icon_2702a56baa3b4c9ca93e3af3c1d4500b);


            marker_942ea9e8d3a14e508ba62f65f289029a.bindTooltip(
                `<div>
                     Proserpine District Lawn Tennis Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0708b90f23a44da9be0640ec122a30cf = L.marker(
                [-27.99643, 153.000562],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_facd3a7a0c874743baa76c1620d6a5db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0708b90f23a44da9be0640ec122a30cf.setIcon(icon_facd3a7a0c874743baa76c1620d6a5db);


            marker_0708b90f23a44da9be0640ec122a30cf.bindTooltip(
                `<div>
                     Beaudesert Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_5713b165bb944904a6b8e3ed195f6d01 = L.marker(
                [-20.389857, 148.561676],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_af0b9948ac0640038560ae4e715075d7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5713b165bb944904a6b8e3ed195f6d01.setIcon(icon_af0b9948ac0640038560ae4e715075d7);


            marker_5713b165bb944904a6b8e3ed195f6d01.bindTooltip(
                `<div>
                     Proserpine Junior Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5e2f1403f42f424292016dc5b96566e4 = L.marker(
                [-19.986047, 148.23913100000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e7756e84e17a4f6bbf2cf8002b20ae94 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e2f1403f42f424292016dc5b96566e4.setIcon(icon_e7756e84e17a4f6bbf2cf8002b20ae94);


            marker_5e2f1403f42f424292016dc5b96566e4.bindTooltip(
                `<div>
                     Bowen Golf Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_2051f3cef93141bfa00aa2eeb618778a = L.marker(
                [-23.941782999999997, 151.36731],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_36630271af834c10893b525aa66dbd5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2051f3cef93141bfa00aa2eeb618778a.setIcon(icon_36630271af834c10893b525aa66dbd5d);


            marker_2051f3cef93141bfa00aa2eeb618778a.bindTooltip(
                `<div>
                     Tannum Sands Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_9fb8e87ba8d74e20857788b9928ab058 = L.marker(
                [-19.311019, 146.804031],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_163568a1f81444b0a3405d0446cf04c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9fb8e87ba8d74e20857788b9928ab058.setIcon(icon_163568a1f81444b0a3405d0446cf04c0);


            marker_9fb8e87ba8d74e20857788b9928ab058.bindTooltip(
                `<div>
                     Afl Townsville Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_45fb74346d1a492f80a3ec37876d612c = L.marker(
                [-28.018534999999996, 153.358798],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b2738dd36fe84bc2b7ed2b470ed33756 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_45fb74346d1a492f80a3ec37876d612c.setIcon(icon_b2738dd36fe84bc2b7ed2b470ed33756);


            marker_45fb74346d1a492f80a3ec37876d612c.bindTooltip(
                `<div>
                     Carrara Australian Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_6c1fb4b4ecd04c5f9a7a8c1458dbe8f7 = L.marker(
                [-27.404389000000002, 152.990018],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f9da6003cfdc4839906e376fc64d91f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6c1fb4b4ecd04c5f9a7a8c1458dbe8f7.setIcon(icon_f9da6003cfdc4839906e376fc64d91f2);


            marker_6c1fb4b4ecd04c5f9a7a8c1458dbe8f7.bindTooltip(
                `<div>
                     Everton Park Bowls And Community Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1dd018883d8940dda58fa94d466e33e0 = L.marker(
                [-26.789144, 153.076394],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_28254914bf8d472f964f1d597db2ebd9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1dd018883d8940dda58fa94d466e33e0.setIcon(icon_28254914bf8d472f964f1d597db2ebd9);


            marker_1dd018883d8940dda58fa94d466e33e0.bindTooltip(
                `<div>
                     Caloundra Equestrian Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_706c55dae71d4af38dbf5bc7934a9359 = L.marker(
                [-25.3043, 152.864769],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_69cc602983b5450d970d3764c90fbf1f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_706c55dae71d4af38dbf5bc7934a9359.setIcon(icon_69cc602983b5450d970d3764c90fbf1f);


            marker_706c55dae71d4af38dbf5bc7934a9359.bindTooltip(
                `<div>
                     Hervey Bay Australian Football And Cricket Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_71c6c27b085a43218739cbea4566414b = L.marker(
                [-24.868814999999998, 151.12436],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1fbe7c8aafed44fbb0512fbf462c9e5c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71c6c27b085a43218739cbea4566414b.setIcon(icon_1fbe7c8aafed44fbb0512fbf462c9e5c);


            marker_71c6c27b085a43218739cbea4566414b.bindTooltip(
                `<div>
                     Monto Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_d501357acc814694b9bd6c30a3524bcc = L.marker(
                [-28.082361, 153.3616],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_72b21fc357be42b0ad86d42ef228375e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d501357acc814694b9bd6c30a3524bcc.setIcon(icon_72b21fc357be42b0ad86d42ef228375e);


            marker_d501357acc814694b9bd6c30a3524bcc.bindTooltip(
                `<div>
                     Mudgeeraba Baseball Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0a170f9b780c4bbaa6b514406549e538 = L.marker(
                [-27.29869, 152.971315],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0c77837686f147949a400dc720f8607d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0a170f9b780c4bbaa6b514406549e538.setIcon(icon_0c77837686f147949a400dc720f8607d);


            marker_0a170f9b780c4bbaa6b514406549e538.bindTooltip(
                `<div>
                     Moreton Bay Regional Council
                 </div>`,
                {"sticky": true}
            );


            var marker_6b871490c6194ffc9cbfc6b5280f746b = L.marker(
                [-17.043145000000003, 145.75548799999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_529dbdf81af240d0886ce7d087a02264 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6b871490c6194ffc9cbfc6b5280f746b.setIcon(icon_529dbdf81af240d0886ce7d087a02264);


            marker_6b871490c6194ffc9cbfc6b5280f746b.bindTooltip(
                `<div>
                     Cairns Target Shooting Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0e5414e32eee49c3898de7f5a95259b9 = L.marker(
                [-23.8445, 151.252141],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dd5f857386984145bff3877e00e72a66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e5414e32eee49c3898de7f5a95259b9.setIcon(icon_dd5f857386984145bff3877e00e72a66);


            marker_0e5414e32eee49c3898de7f5a95259b9.bindTooltip(
                `<div>
                     Gladstone Amateur Basketball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c37054305cca4488abb127a9da186069 = L.marker(
                [-25.23658, 152.280272],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e8e3cb69035d424db072ba9442fb256d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c37054305cca4488abb127a9da186069.setIcon(icon_e8e3cb69035d424db072ba9442fb256d);


            marker_c37054305cca4488abb127a9da186069.bindTooltip(
                `<div>
                     Isis Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_553010e9f521490bb923e49e1d8dce74 = L.marker(
                [-27.001306, 151.929618],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4b8b521a374843ce9161e56f94da17b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_553010e9f521490bb923e49e1d8dce74.setIcon(icon_4b8b521a374843ce9161e56f94da17b7);


            marker_553010e9f521490bb923e49e1d8dce74.bindTooltip(
                `<div>
                     Brisbane North Dirt Bike Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_f6b1af79c9794bc280fcf91a6f77059b = L.marker(
                [-23.880651, 151.22411699999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_193afb57fd5642d1a18b89696eb1288c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f6b1af79c9794bc280fcf91a6f77059b.setIcon(icon_193afb57fd5642d1a18b89696eb1288c);


            marker_f6b1af79c9794bc280fcf91a6f77059b.bindTooltip(
                `<div>
                     Gladstone And District Junior Rugby League Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_76de3fc8e445445ca6352aa3c1ed4bd4 = L.marker(
                [-19.279225, 146.770446],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e6c1ee89a89f4e98a8bae6ccc423f596 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_76de3fc8e445445ca6352aa3c1ed4bd4.setIcon(icon_e6c1ee89a89f4e98a8bae6ccc423f596);


            marker_76de3fc8e445445ca6352aa3c1ed4bd4.bindTooltip(
                `<div>
                     Teachers West Rugby Union Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_3d247ba7bdbf4238ad4b624cb7a70d12 = L.marker(
                [-27.552884000000002, 153.072669],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_45ce1ed0e1634fe2a88602da97e87a5a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3d247ba7bdbf4238ad4b624cb7a70d12.setIcon(icon_45ce1ed0e1634fe2a88602da97e87a5a);


            marker_3d247ba7bdbf4238ad4b624cb7a70d12.bindTooltip(
                `<div>
                     Rackley Swim Team Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_434e289d9f494ae79b0c8e9082025126 = L.marker(
                [-21.130205, 149.180194],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c8dda5ec460f40bd91f0ea602d18ca18 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_434e289d9f494ae79b0c8e9082025126.setIcon(icon_c8dda5ec460f40bd91f0ea602d18ca18);


            marker_434e289d9f494ae79b0c8e9082025126.bindTooltip(
                `<div>
                     Mackay North Horse And Pony Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_84c32ccda1b745e9adf1ffd96e5c769e = L.marker(
                [-26.651033, 152.95555],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7dae9ec07e794bd5accd12b9fbb66306 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_84c32ccda1b745e9adf1ffd96e5c769e.setIcon(icon_7dae9ec07e794bd5accd12b9fbb66306);


            marker_84c32ccda1b745e9adf1ffd96e5c769e.bindTooltip(
                `<div>
                     Nambour Rugby Union Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_4ea55482447e43dfb762bb89623aad57 = L.marker(
                [-16.875997, 145.54998799999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6775eeaa81694f83b804e79224c7fbf4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4ea55482447e43dfb762bb89623aad57.setIcon(icon_6775eeaa81694f83b804e79224c7fbf4);


            marker_4ea55482447e43dfb762bb89623aad57.bindTooltip(
                `<div>
                     Koah Sports And Social Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4e4c5000c1a94b37b7bf21dcf44b05b5 = L.marker(
                [-26.595223999999998, 148.77317],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1709a42a06af41cbba888e300e27e311 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4e4c5000c1a94b37b7bf21dcf44b05b5.setIcon(icon_1709a42a06af41cbba888e300e27e311);


            marker_4e4c5000c1a94b37b7bf21dcf44b05b5.bindTooltip(
                `<div>
                     Roma Clay Target Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_5eba175b4d354609af5c5d7b85292a1b = L.marker(
                [-27.673903999999997, 153.042528],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d4d5089eb2a24d1f99b42abd3ef4c514 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5eba175b4d354609af5c5d7b85292a1b.setIcon(icon_d4d5089eb2a24d1f99b42abd3ef4c514);


            marker_5eba175b4d354609af5c5d7b85292a1b.bindTooltip(
                `<div>
                     Logan City Gridiron Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_fdf6fe841bd5497b8df41ca9629aa5fc = L.marker(
                [-23.374023, 150.510122],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3bb9e09a415c480995bdfe1adf0d65e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fdf6fe841bd5497b8df41ca9629aa5fc.setIcon(icon_3bb9e09a415c480995bdfe1adf0d65e9);


            marker_fdf6fe841bd5497b8df41ca9629aa5fc.bindTooltip(
                `<div>
                     Rockhampton Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_84ab190c8e814c3ba5e4817f5a2d0fbe = L.marker(
                [-20.40278, 148.57745],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c5bf0e3511144e1c90e6fa9218362e6d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_84ab190c8e814c3ba5e4817f5a2d0fbe.setIcon(icon_c5bf0e3511144e1c90e6fa9218362e6d);


            marker_84ab190c8e814c3ba5e4817f5a2d0fbe.bindTooltip(
                `<div>
                     Proserpine Bmx Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_369371aa09844c549381dc99b8fae4e0 = L.marker(
                [-24.886878, 146.253885],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8b95709519114e70ab79ac1bfe769b23 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_369371aa09844c549381dc99b8fae4e0.setIcon(icon_8b95709519114e70ab79ac1bfe769b23);


            marker_369371aa09844c549381dc99b8fae4e0.bindTooltip(
                `<div>
                     Blackall - Tambo Regional Council
                 </div>`,
                {"sticky": true}
            );


            var marker_f9f41ea1c7ca42e0a210001a2849b9a0 = L.marker(
                [-23.365879999999997, 150.49174],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5cfb38668e864d1f9159c1f3893a0f67 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9f41ea1c7ca42e0a210001a2849b9a0.setIcon(icon_5cfb38668e864d1f9159c1f3893a0f67);


            marker_f9f41ea1c7ca42e0a210001a2849b9a0.bindTooltip(
                `<div>
                     Rockhampton Netball Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_f590bd2bfa2441268805299bd4d9e68d = L.marker(
                [-23.72056, 150.817097],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2833602b28614078ba1f2aca80e3407c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f590bd2bfa2441268805299bd4d9e68d.setIcon(icon_2833602b28614078ba1f2aca80e3407c);


            marker_f590bd2bfa2441268805299bd4d9e68d.bindTooltip(
                `<div>
                     Raglan Target Sports Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_459804ca98fb4b3aab9899fcabab3b3e = L.marker(
                [-27.190257, 151.27219499999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3de60ee4038e4d04a8c95ddc0862dfe4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_459804ca98fb4b3aab9899fcabab3b3e.setIcon(icon_3de60ee4038e4d04a8c95ddc0862dfe4);


            marker_459804ca98fb4b3aab9899fcabab3b3e.bindTooltip(
                `<div>
                     Dalby & District Rugby Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9ba7da5f1de744e68de8df9d1a52c096 = L.marker(
                [-27.624778999999997, 152.766483],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_975b632d88574a52848e2f141d91f952 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ba7da5f1de744e68de8df9d1a52c096.setIcon(icon_975b632d88574a52848e2f141d91f952);


            marker_9ba7da5f1de744e68de8df9d1a52c096.bindTooltip(
                `<div>
                     Ipswich & District Athletic Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_fb8f27a20ff04f7c8bc3af414e9f56c7 = L.marker(
                [-27.649201, 153.138769],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ec176997c3194980be245de3ad0e18cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fb8f27a20ff04f7c8bc3af414e9f56c7.setIcon(icon_ec176997c3194980be245de3ad0e18cc);


            marker_fb8f27a20ff04f7c8bc3af414e9f56c7.bindTooltip(
                `<div>
                     Football Queensland Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_7a014f5714204861a5a30308187c912c = L.marker(
                [-28.005767, 153.34051399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cc755263ea754d2791d411a04a8cef59 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7a014f5714204861a5a30308187c912c.setIcon(icon_cc755263ea754d2791d411a04a8cef59);


            marker_7a014f5714204861a5a30308187c912c.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_f5d9635f9a3f47fcb16fc0730092bbe9 = L.marker(
                [-27.385446999999996, 153.03526599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a3312e40af894c939e8caf5c324f783a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f5d9635f9a3f47fcb16fc0730092bbe9.setIcon(icon_a3312e40af894c939e8caf5c324f783a);


            marker_f5d9635f9a3f47fcb16fc0730092bbe9.bindTooltip(
                `<div>
                     Brisbane Hockey Management Group Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5e13a0e4b4e44e48bf28d7d34c14645a = L.marker(
                [-16.924941, 145.739198],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2202808e3a94434180a2c28c2f7e79f8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e13a0e4b4e44e48bf28d7d34c14645a.setIcon(icon_2202808e3a94434180a2c28c2f7e79f8);


            marker_5e13a0e4b4e44e48bf28d7d34c14645a.bindTooltip(
                `<div>
                     Cairns Cycling Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_f53605ffb6e54418bab45b14cb7e1e61 = L.marker(
                [-24.920074, 152.491034],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1caca49957ce458c992778f9f0ca3666 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f53605ffb6e54418bab45b14cb7e1e61.setIcon(icon_1caca49957ce458c992778f9f0ca3666);


            marker_f53605ffb6e54418bab45b14cb7e1e61.bindTooltip(
                `<div>
                     Elliott Heads Surf Life Saving Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_168966808178467091f4ef14bba222dd = L.marker(
                [-19.313214000000002, 146.799343],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8d51de8b29ee40d98548a4c3b75b9f5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_168966808178467091f4ef14bba222dd.setIcon(icon_8d51de8b29ee40d98548a4c3b75b9f5d);


            marker_168966808178467091f4ef14bba222dd.bindTooltip(
                `<div>
                     Townsville City Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_fad5f000461f4d45a3a543bf49d4e28e = L.marker(
                [-27.714639000000002, 153.206228],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c54e66d66fc6419381a7cf8e4f2d959a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fad5f000461f4d45a3a543bf49d4e28e.setIcon(icon_c54e66d66fc6419381a7cf8e4f2d959a);


            marker_fad5f000461f4d45a3a543bf49d4e28e.bindTooltip(
                `<div>
                     Beenleigh Australian Rules Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_3ccf01404fa04bdabbbcc9f022c2d035 = L.marker(
                [-28.032954999999998, 147.482479],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8342116a9cee41218fcdf3291c9a9461 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ccf01404fa04bdabbbcc9f022c2d035.setIcon(icon_8342116a9cee41218fcdf3291c9a9461);


            marker_3ccf01404fa04bdabbbcc9f022c2d035.bindTooltip(
                `<div>
                     Bollon Tennis Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_c0abee88cf8947df8fcaf90086b7301b = L.marker(
                [-27.896077000000002, 153.30973600000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_86e41bb058274d1fb1c00400e416d223 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c0abee88cf8947df8fcaf90086b7301b.setIcon(icon_86e41bb058274d1fb1c00400e416d223);


            marker_c0abee88cf8947df8fcaf90086b7301b.bindTooltip(
                `<div>
                     Coomera Cubs Baseball Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_6fbd345607bc4f639552cb6782de1b2a = L.marker(
                [-21.083731, 149.120174],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_98731b93a1124e92be5984da8054a4eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6fbd345607bc4f639552cb6782de1b2a.setIcon(icon_98731b93a1124e92be5984da8054a4eb);


            marker_6fbd345607bc4f639552cb6782de1b2a.bindTooltip(
                `<div>
                     Mad Mountain Bike Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_8d06acb187e847c199be0d6d2a4b8837 = L.marker(
                [-25.307810999999997, 152.887431],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0dc820018e21455db20ccb638bb91652 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d06acb187e847c199be0d6d2a4b8837.setIcon(icon_0dc820018e21455db20ccb638bb91652);


            marker_8d06acb187e847c199be0d6d2a4b8837.bindTooltip(
                `<div>
                     Wide Bay Gymnastics Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_3673af22cd924bdfa8aa6b344d5c3eb4 = L.marker(
                [-27.994278, 153.39501299999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c912211a87254aa99ab60c844cc7c603 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3673af22cd924bdfa8aa6b344d5c3eb4.setIcon(icon_c912211a87254aa99ab60c844cc7c603);


            marker_3673af22cd924bdfa8aa6b344d5c3eb4.bindTooltip(
                `<div>
                     Southport Carrara Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c9512ae2c7fa44e884c57f33c1edbfdb = L.marker(
                [-21.116182000000002, 149.18393],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c45a1fdd4c8f45259161aaeb890a86d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c9512ae2c7fa44e884c57f33c1edbfdb.setIcon(icon_c45a1fdd4c8f45259161aaeb890a86d1);


            marker_c9512ae2c7fa44e884c57f33c1edbfdb.bindTooltip(
                `<div>
                     Mackay District Junior Rugby Union Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ca2f481e03c94ca79597ec977a780aaf = L.marker(
                [-23.590412, 148.889015],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_86353b4eced441e6aab49cba3c5773c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca2f481e03c94ca79597ec977a780aaf.setIcon(icon_86353b4eced441e6aab49cba3c5773c0);


            marker_ca2f481e03c94ca79597ec977a780aaf.bindTooltip(
                `<div>
                     Blackwater Pony Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5174cdd2941445f2af5a5957cf9808af = L.marker(
                [-27.488917999999998, 152.985426],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7797865397574a6f8c170c24877b750b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5174cdd2941445f2af5a5957cf9808af.setIcon(icon_7797865397574a6f8c170c24877b750b);


            marker_5174cdd2941445f2af5a5957cf9808af.bindTooltip(
                `<div>
                     Wests Juniors Australian Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_ba6c085979fd4dd58dc8efdec25e5155 = L.marker(
                [-21.103979000000002, 149.170929],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0a6e6ce3535c45cfae349214fced1933 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ba6c085979fd4dd58dc8efdec25e5155.setIcon(icon_0a6e6ce3535c45cfae349214fced1933);


            marker_ba6c085979fd4dd58dc8efdec25e5155.bindTooltip(
                `<div>
                     North Mackay Australian Rules Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5cbbbe9c591f48b284bad02210e9b9f6 = L.marker(
                [-20.01909, 148.245494],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_605983daecba4399bf665f6857d1c535 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5cbbbe9c591f48b284bad02210e9b9f6.setIcon(icon_605983daecba4399bf665f6857d1c535);


            marker_5cbbbe9c591f48b284bad02210e9b9f6.bindTooltip(
                `<div>
                     Port Denison Sailing Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_9f75a51c50d9462cb1e5d8153cb5cb7d = L.marker(
                [-27.629514, 153.302851],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dfa6390252104397a6a23502f9489ce1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9f75a51c50d9462cb1e5d8153cb5cb7d.setIcon(icon_dfa6390252104397a6a23502f9489ce1);


            marker_9f75a51c50d9462cb1e5d8153cb5cb7d.bindTooltip(
                `<div>
                     Vp Magic Fc Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_23319a77a42a4a9da4625b7ba867ff4f = L.marker(
                [-21.145303, 148.940248],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_58275ea87d204ed9a34e0b7be53141a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23319a77a42a4a9da4625b7ba867ff4f.setIcon(icon_58275ea87d204ed9a34e0b7be53141a5);


            marker_23319a77a42a4a9da4625b7ba867ff4f.bindTooltip(
                `<div>
                     Marian Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_494c64ca274947e39bba6a7634db60c7 = L.marker(
                [-27.640024, 152.760206],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6d87241661004b4cb0a59ebf153ccc03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_494c64ca274947e39bba6a7634db60c7.setIcon(icon_6d87241661004b4cb0a59ebf153ccc03);


            marker_494c64ca274947e39bba6a7634db60c7.bindTooltip(
                `<div>
                     Ipswich Hockey Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_73a91d76d0624378bc44f13d5aedf745 = L.marker(
                [-27.801221999999996, 153.275547],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fc978003746f4b4f96e8f6a3dc8da7a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_73a91d76d0624378bc44f13d5aedf745.setIcon(icon_fc978003746f4b4f96e8f6a3dc8da7a5);


            marker_73a91d76d0624378bc44f13d5aedf745.bindTooltip(
                `<div>
                     Ormeau Pimpama Tennis Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_892b8244d40549baa2832ed917f7d48d = L.marker(
                [-21.159354, 149.18629099999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_403146768ef04ca1a4bb0fc2ba9d4f4c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_892b8244d40549baa2832ed917f7d48d.setIcon(icon_403146768ef04ca1a4bb0fc2ba9d4f4c);


            marker_892b8244d40549baa2832ed917f7d48d.bindTooltip(
                `<div>
                     Mackay Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_83f40af672034c6284b6edd66f24f2c6 = L.marker(
                [-27.516951000000002, 152.981607],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_156e6595119443e4a22cf840eed5439f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_83f40af672034c6284b6edd66f24f2c6.setIcon(icon_156e6595119443e4a22cf840eed5439f);


            marker_83f40af672034c6284b6edd66f24f2c6.bindTooltip(
                `<div>
                     Western Districts Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_fb2386593232493788d6e4875dfc235f = L.marker(
                [-18.657971, 146.1596],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_830c70fd1bdf4022898757252c025009 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fb2386593232493788d6e4875dfc235f.setIcon(icon_830c70fd1bdf4022898757252c025009);


            marker_fb2386593232493788d6e4875dfc235f.bindTooltip(
                `<div>
                     Hinchinbrook Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a150448699d44b22af23c706d475cc64 = L.marker(
                [-17.001883, 145.766091],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_60e3f5148ff1431dab251dba5284ba71 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a150448699d44b22af23c706d475cc64.setIcon(icon_60e3f5148ff1431dab251dba5284ba71);


            marker_a150448699d44b22af23c706d475cc64.bindTooltip(
                `<div>
                     North Queensland International Motor Raceway Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_49d08943acd14d53b54bdbc29572f8c3 = L.marker(
                [-27.369765, 152.820717],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f2fea005fbb746f2bab910f6228d838b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49d08943acd14d53b54bdbc29572f8c3.setIcon(icon_f2fea005fbb746f2bab910f6228d838b);


            marker_49d08943acd14d53b54bdbc29572f8c3.bindTooltip(
                `<div>
                     Samford Riding For The Disabled Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_8d48a36bff874a1bb8edc21c231ab620 = L.marker(
                [-26.389554999999998, 153.029371],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_439e724f4335461e94d1d4e4039f2fc6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d48a36bff874a1bb8edc21c231ab620.setIcon(icon_439e724f4335461e94d1d4e4039f2fc6);


            marker_8d48a36bff874a1bb8edc21c231ab620.bindTooltip(
                `<div>
                     Tewantin - Noosa Cricket Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_f54fb1239b854e87bf0b6b4a1fb1a5cc = L.marker(
                [-27.914163000000002, 153.36758899999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2605f0fcfba9499aacc5181618b98e27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f54fb1239b854e87bf0b6b4a1fb1a5cc.setIcon(icon_2605f0fcfba9499aacc5181618b98e27);


            marker_f54fb1239b854e87bf0b6b4a1fb1a5cc.bindTooltip(
                `<div>
                     Arundel Park Riding For Disabled Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_e868ebb7a14249ec95af6ab9964212b8 = L.marker(
                [-27.21792, 153.092062],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a1a3391e6bc74aff9415d7318d75ff66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e868ebb7a14249ec95af6ab9964212b8.setIcon(icon_a1a3391e6bc74aff9415d7318d75ff66);


            marker_e868ebb7a14249ec95af6ab9964212b8.bindTooltip(
                `<div>
                     Newport Cruising Yacht Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_85ae3dd395ab46d8a32b10951e5861dc = L.marker(
                [-28.038084, 148.576643],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_129d1d7484f94a8eb05126b3b48b905f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85ae3dd395ab46d8a32b10951e5861dc.setIcon(icon_129d1d7484f94a8eb05126b3b48b905f);


            marker_85ae3dd395ab46d8a32b10951e5861dc.bindTooltip(
                `<div>
                     Balonne Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7971c54762034458af45ab206b1c516b = L.marker(
                [-27.598648999999998, 152.912835],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_822c3d6dd1aa4f58a324eec00e2d8a97 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7971c54762034458af45ab206b1c516b.setIcon(icon_822c3d6dd1aa4f58a324eec00e2d8a97);


            marker_7971c54762034458af45ab206b1c516b.bindTooltip(
                `<div>
                     Wolston Park Centenary Cricket Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_656212a433e943209296060aad3f5092 = L.marker(
                [-18.759745000000002, 146.585373],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_631242c9949b4d73b2aab42b12dcb253 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_656212a433e943209296060aad3f5092.setIcon(icon_631242c9949b4d73b2aab42b12dcb253);


            marker_656212a433e943209296060aad3f5092.bindTooltip(
                `<div>
                     Palm Island Aboriginal Park
                 </div>`,
                {"sticky": true}
            );


            var marker_24171eb7c5d0414da37313fa60f3b481 = L.marker(
                [-27.711796999999997, 153.205534],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b2243b09fe574da3948030c1c35cd83b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24171eb7c5d0414da37313fa60f3b481.setIcon(icon_b2243b09fe574da3948030c1c35cd83b);


            marker_24171eb7c5d0414da37313fa60f3b481.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_84db1c91292a450d845a2b00fdcbabe5 = L.marker(
                [-27.732986, 153.21432],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4ef3acc9c80b4a99ac03ffb1a75a5104 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_84db1c91292a450d845a2b00fdcbabe5.setIcon(icon_4ef3acc9c80b4a99ac03ffb1a75a5104);


            marker_84db1c91292a450d845a2b00fdcbabe5.bindTooltip(
                `<div>
                     Mount Warren Park Golf Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_1470ebc9264a420490c2785b97fa1a99 = L.marker(
                [-27.401774, 153.04111],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ad4a7694fb654df1bba49ee1bf6d4ba2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1470ebc9264a420490c2785b97fa1a99.setIcon(icon_ad4a7694fb654df1bba49ee1bf6d4ba2);


            marker_1470ebc9264a420490c2785b97fa1a99.bindTooltip(
                `<div>
                     Northern Suburbs Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_20eeda9ea9f6496b838f692b8f739827 = L.marker(
                [-16.924309, 145.758223],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c46cfd73a48b45aca9668e15acf02323 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20eeda9ea9f6496b838f692b8f739827.setIcon(icon_c46cfd73a48b45aca9668e15acf02323);


            marker_20eeda9ea9f6496b838f692b8f739827.bindTooltip(
                `<div>
                     Cairns District Junior Rugby League Limited
                 </div>`,
                {"sticky": true}
            );


            var marker_29ad00b7cc104ee8811102fb224a4179 = L.marker(
                [-27.506738000000002, 153.02335],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e2215248eabe4f77af0fd1b93d355dc8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_29ad00b7cc104ee8811102fb224a4179.setIcon(icon_e2215248eabe4f77af0fd1b93d355dc8);


            marker_29ad00b7cc104ee8811102fb224a4179.bindTooltip(
                `<div>
                     Brisbane Rugby League Referees Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_be09d0fa437b463b9c52d5a0721ab821 = L.marker(
                [-27.156309999999998, 152.96618999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b1edbf02a57f4a88816b2a226459b0bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_be09d0fa437b463b9c52d5a0721ab821.setIcon(icon_b1edbf02a57f4a88816b2a226459b0bf);


            marker_be09d0fa437b463b9c52d5a0721ab821.bindTooltip(
                `<div>
                     Burpengary Junior Rugby League Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_03c667c522694843803c967082c74fdd = L.marker(
                [-27.599341, 153.148062],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c83c42f1f08847b496ad32c8d2004a4a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_03c667c522694843803c967082c74fdd.setIcon(icon_c83c42f1f08847b496ad32c8d2004a4a);


            marker_03c667c522694843803c967082c74fdd.bindTooltip(
                `<div>
                     Underwood Park Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_1be9d1da99f0490d8fbed665eb6e5b81 = L.marker(
                [-21.162748, 149.183491],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ab2cf46f915b44e48eec9c5b743f9f2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1be9d1da99f0490d8fbed665eb6e5b81.setIcon(icon_ab2cf46f915b44e48eec9c5b743f9f2c);


            marker_1be9d1da99f0490d8fbed665eb6e5b81.bindTooltip(
                `<div>
                     Mackay Junior Rugby Football League Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_79a0125ec72548959bdadb9c49976ba5 = L.marker(
                [-24.876326000000002, 152.326367],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6a29ac3f62e04e20af91a63d47d82b9b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_79a0125ec72548959bdadb9c49976ba5.setIcon(icon_6a29ac3f62e04e20af91a63d47d82b9b);


            marker_79a0125ec72548959bdadb9c49976ba5.bindTooltip(
                `<div>
                     Western Suburbs Junior Rugby League Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ab04abf7e676474a9dfb23ef810b80f0 = L.marker(
                [-27.218846000000003, 153.097293],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_73c74a33d68a475080484b8d2e1563b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ab04abf7e676474a9dfb23ef810b80f0.setIcon(icon_73c74a33d68a475080484b8d2e1563b4);


            marker_ab04abf7e676474a9dfb23ef810b80f0.bindTooltip(
                `<div>
                     The Redcliffe District Rugby League Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_ac5a81a1810240b99f9c733457c9d0d1 = L.marker(
                [-27.551151, 152.920991],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f31fb90891ea485cac5d9937f64e9ff3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ac5a81a1810240b99f9c733457c9d0d1.setIcon(icon_f31fb90891ea485cac5d9937f64e9ff3);


            marker_ac5a81a1810240b99f9c733457c9d0d1.bindTooltip(
                `<div>
                     St Catherine's United Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7355dddc8d4f4faf92f7d6e582bcf177 = L.marker(
                [-27.184115999999996, 151.267824],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bbc686455bd448b897916a0996ff4b88 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7355dddc8d4f4faf92f7d6e582bcf177.setIcon(icon_bbc686455bd448b897916a0996ff4b88);


            marker_7355dddc8d4f4faf92f7d6e582bcf177.bindTooltip(
                `<div>
                     Dalby Bowls Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_8bbe57c4bd444b029b4dbd41b485e12c = L.marker(
                [-19.572961, 147.400945],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_332939e49fd045e298f8efacdb8233ac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8bbe57c4bd444b029b4dbd41b485e12c.setIcon(icon_332939e49fd045e298f8efacdb8233ac);


            marker_8bbe57c4bd444b029b4dbd41b485e12c.bindTooltip(
                `<div>
                     Ayr Bowling Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_826cd00a4a444073847befb90cbe3dca = L.marker(
                [-16.889206, 145.749581],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ff9953eb1fd84981a6ed8f37bfb39a9f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_826cd00a4a444073847befb90cbe3dca.setIcon(icon_ff9953eb1fd84981a6ed8f37bfb39a9f);


            marker_826cd00a4a444073847befb90cbe3dca.bindTooltip(
                `<div>
                     Cairns Pirates Touch Football Assoc Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_3da3047f7bc74397b8db399d7b11e1d5 = L.marker(
                [-27.547940999999998, 152.28706100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_91a4613891af478294ea0e58a10043b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3da3047f7bc74397b8db399d7b11e1d5.setIcon(icon_91a4613891af478294ea0e58a10043b9);


            marker_3da3047f7bc74397b8db399d7b11e1d5.bindTooltip(
                `<div>
                     Cahill Park Sports Complex Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_6abbf8e3164a457f8667a7f6b3659d13 = L.marker(
                [-13.359025, 141.727959],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7921e22da8ce4fa68417e102d680e42b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6abbf8e3164a457f8667a7f6b3659d13.setIcon(icon_7921e22da8ce4fa68417e102d680e42b);


            marker_6abbf8e3164a457f8667a7f6b3659d13.bindTooltip(
                `<div>
                     Aurukun Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_2ad579fcdaed44b7a5e577d433488de2 = L.marker(
                [-16.995005, 145.418782],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6b782fc81fd741c1a600ce9c51bf2492 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ad579fcdaed44b7a5e577d433488de2.setIcon(icon_6b782fc81fd741c1a600ce9c51bf2492);


            marker_2ad579fcdaed44b7a5e577d433488de2.bindTooltip(
                `<div>
                     Mareeba Gymnastics Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_02e1f8a0608e4e5daa2736b2585a8038 = L.marker(
                [-19.580455999999998, 147.411118],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fd9728166d7446ae8a7c5e7218526317 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_02e1f8a0608e4e5daa2736b2585a8038.setIcon(icon_fd9728166d7446ae8a7c5e7218526317);


            marker_02e1f8a0608e4e5daa2736b2585a8038.bindTooltip(
                `<div>
                     Ayr Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_00895e5da7f740b5b985badaadf17cd7 = L.marker(
                [-19.268483, 146.82596999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_72b7a448b77b47dab8313e5e3ad119d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_00895e5da7f740b5b985badaadf17cd7.setIcon(icon_72b7a448b77b47dab8313e5e3ad119d4);


            marker_00895e5da7f740b5b985badaadf17cd7.bindTooltip(
                `<div>
                     South Townsville Bowls Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_b4c6f2e00f6f40b7adbe289bb1c9b232 = L.marker(
                [-22.907338, 139.912601],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1188e1831549495aa1c777f697831348 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b4c6f2e00f6f40b7adbe289bb1c9b232.setIcon(icon_1188e1831549495aa1c777f697831348);


            marker_b4c6f2e00f6f40b7adbe289bb1c9b232.bindTooltip(
                `<div>
                     Boulia Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_1b9ddfb668924e889e6c673f13b2dc55 = L.marker(
                [-26.409996000000003, 153.051633],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2c4783b5ba2d490084ae4006adf1d596 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1b9ddfb668924e889e6c673f13b2dc55.setIcon(icon_2c4783b5ba2d490084ae4006adf1d596);


            marker_1b9ddfb668924e889e6c673f13b2dc55.bindTooltip(
                `<div>
                     The Noosa Croquet Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_d28f545aa2294e69ae69a3c9f83e74f9 = L.marker(
                [-17.7487, 146.01916599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_edea1e335545486db0d2448432b29a1a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d28f545aa2294e69ae69a3c9f83e74f9.setIcon(icon_edea1e335545486db0d2448432b29a1a);


            marker_d28f545aa2294e69ae69a3c9f83e74f9.bindTooltip(
                `<div>
                     Silkwood Clay Target Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c4aedc49c52e4f9c99bd490c291a33b6 = L.marker(
                [-27.739688, 153.188804],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a755044b336341309173bfdf587f9d50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c4aedc49c52e4f9c99bd490c291a33b6.setIcon(icon_a755044b336341309173bfdf587f9d50);


            marker_c4aedc49c52e4f9c99bd490c291a33b6.bindTooltip(
                `<div>
                     Yatala Junior Rugby Union Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_549c10cfb60d4f2f87308d1d16b94224 = L.marker(
                [-26.864558000000002, 152.099018],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a796569c91e843bcbc0acb6e45da0f56 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_549c10cfb60d4f2f87308d1d16b94224.setIcon(icon_a796569c91e843bcbc0acb6e45da0f56);


            marker_549c10cfb60d4f2f87308d1d16b94224.bindTooltip(
                `<div>
                     Blackbutt Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_714c8965aeb64a48a911f4c8022ebb26 = L.marker(
                [-28.804503000000004, 151.841124],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8108d3d6c0b3421e83e07612e8ac40ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_714c8965aeb64a48a911f4c8022ebb26.setIcon(icon_8108d3d6c0b3421e83e07612e8ac40ae);


            marker_714c8965aeb64a48a911f4c8022ebb26.bindTooltip(
                `<div>
                     Ballandean Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_a16aab7baa1b4d59984c7a47d3fb89d6 = L.marker(
                [-26.20213, 152.436823],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_af37f7c9aadc432c8a5e5c0faeda7996 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a16aab7baa1b4d59984c7a47d3fb89d6.setIcon(icon_af37f7c9aadc432c8a5e5c0faeda7996);


            marker_a16aab7baa1b4d59984c7a47d3fb89d6.bindTooltip(
                `<div>
                     Widgee District - Hall And Recreation Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_5be3995e3fe54847ad3ee6b6faab6707 = L.marker(
                [-20.653727, 141.746354],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bcbee2bcccfc4166bae8a42b19e113b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5be3995e3fe54847ad3ee6b6faab6707.setIcon(icon_bcbee2bcccfc4166bae8a42b19e113b2);


            marker_5be3995e3fe54847ad3ee6b6faab6707.bindTooltip(
                `<div>
                     Mckinlay Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_221dce6fa84446e898a3edbb3e1c6edb = L.marker(
                [-27.421411, 153.032158],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_91c7973bc42a4b8e931b727bee9c74fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_221dce6fa84446e898a3edbb3e1c6edb.setIcon(icon_91c7973bc42a4b8e931b727bee9c74fd);


            marker_221dce6fa84446e898a3edbb3e1c6edb.bindTooltip(
                `<div>
                     North Brisbane Fc Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0e3ee8beea4749c79a01f0741a7b94a0 = L.marker(
                [-27.553397999999998, 153.075894],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9a88a889d5f94b80b6cd88b72b26cce8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0e3ee8beea4749c79a01f0741a7b94a0.setIcon(icon_9a88a889d5f94b80b6cd88b72b26cce8);


            marker_0e3ee8beea4749c79a01f0741a7b94a0.bindTooltip(
                `<div>
                     Clairvaux Soccer Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_9bae2b07d71b453395c16ed3bfa2c8ba = L.marker(
                [-19.330136, 146.743943],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2f0e9352e68a41b0861635ce65a03ea0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9bae2b07d71b453395c16ed3bfa2c8ba.setIcon(icon_2f0e9352e68a41b0861635ce65a03ea0);


            marker_9bae2b07d71b453395c16ed3bfa2c8ba.bindTooltip(
                `<div>
                     Townsville Rockwheelers Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ba89a12d94134546843603bc055c23dd = L.marker(
                [-26.294499, 151.955446],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_77ed0ea72207480a85a2d5629db41bd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ba89a12d94134546843603bc055c23dd.setIcon(icon_77ed0ea72207480a85a2d5629db41bd7);


            marker_ba89a12d94134546843603bc055c23dd.bindTooltip(
                `<div>
                     Cherbourg Sports Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_054398e722704f739f0d556c8941c68a = L.marker(
                [-25.803624, 146.593228],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1bc1712e8bf747f2896713161c7030a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_054398e722704f739f0d556c8941c68a.setIcon(icon_1bc1712e8bf747f2896713161c7030a0);


            marker_054398e722704f739f0d556c8941c68a.bindTooltip(
                `<div>
                     Augathella Junior Rugby League Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_17589a8728854299b41c4cd6bbdda9a8 = L.marker(
                [-20.731397, 143.13890800000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f1aaf93642f64b549baa16e5a9667507 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_17589a8728854299b41c4cd6bbdda9a8.setIcon(icon_f1aaf93642f64b549baa16e5a9667507);


            marker_17589a8728854299b41c4cd6bbdda9a8.bindTooltip(
                `<div>
                     Richmond Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b3913788fc4642d4bf5ea256145c6af8 = L.marker(
                [-17.585341, 146.040367],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dcb1ef3329c24af6ad79aa8e384e2796 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b3913788fc4642d4bf5ea256145c6af8.setIcon(icon_dcb1ef3329c24af6ad79aa8e384e2796);


            marker_b3913788fc4642d4bf5ea256145c6af8.bindTooltip(
                `<div>
                     Innisfail United Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_9789ffabd6f046de8ce1f52a8956b582 = L.marker(
                [-21.184829, 149.17330900000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_35a0f87da9f64910ab85e94a70431ac3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9789ffabd6f046de8ce1f52a8956b582.setIcon(icon_35a0f87da9f64910ab85e94a70431ac3);


            marker_9789ffabd6f046de8ce1f52a8956b582.bindTooltip(
                `<div>
                     Mackay Brothers Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7620b6181d6049f3add11947889fb53b = L.marker(
                [-27.586753, 152.778836],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4986c8f3c9d14b19965e8306b0603a7f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7620b6181d6049f3add11947889fb53b.setIcon(icon_4986c8f3c9d14b19965e8306b0603a7f);


            marker_7620b6181d6049f3add11947889fb53b.bindTooltip(
                `<div>
                     Musketeers Sports Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_f9294e197d2e436684c008d899e27121 = L.marker(
                [-17.732244, 139.545735],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9a77d6b8c6434461b8b190f8717405c2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9294e197d2e436684c008d899e27121.setIcon(icon_9a77d6b8c6434461b8b190f8717405c2);


            marker_f9294e197d2e436684c008d899e27121.bindTooltip(
                `<div>
                     Burke Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5d2f40fd846442c29c4431b233ebd7e0 = L.marker(
                [-27.572657, 153.07466200000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b40de37d96644cdb81cf52e01484d762 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5d2f40fd846442c29c4431b233ebd7e0.setIcon(icon_b40de37d96644cdb81cf52e01484d762);


            marker_5d2f40fd846442c29c4431b233ebd7e0.bindTooltip(
                `<div>
                     Sunnybank Senior Rugby Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_06f3afed768e48b69ba5f78c5d8993b5 = L.marker(
                [-17.941071, 145.929546],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_05973b27388b40b7a3004a509bda5f45 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_06f3afed768e48b69ba5f78c5d8993b5.setIcon(icon_05973b27388b40b7a3004a509bda5f45);


            marker_06f3afed768e48b69ba5f78c5d8993b5.bindTooltip(
                `<div>
                     Tully Netball Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9752ebe5e6974c33b97be3d842ad9ce5 = L.marker(
                [-25.370285, 151.12473400000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0cfe5ea8176f4658b5e59eecac5c47cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9752ebe5e6974c33b97be3d842ad9ce5.setIcon(icon_0cfe5ea8176f4658b5e59eecac5c47cc);


            marker_9752ebe5e6974c33b97be3d842ad9ce5.bindTooltip(
                `<div>
                     Eidsvold Golf Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_84afd642a02549dcbdbfa26fb3d587a5 = L.marker(
                [-27.440169, 152.455194],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3ea51d1a83c44a48a3e8fb68fcf21e20 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_84afd642a02549dcbdbfa26fb3d587a5.setIcon(icon_3ea51d1a83c44a48a3e8fb68fcf21e20);


            marker_84afd642a02549dcbdbfa26fb3d587a5.bindTooltip(
                `<div>
                     The Boys' Brigade Queensland Limited
                 </div>`,
                {"sticky": true}
            );


            var marker_7e8e14e741904f82aa63b2cd8c65e038 = L.marker(
                [-23.874329, 151.24000900000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1e6351b807d54b859c903175cb9b5e26 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e8e14e741904f82aa63b2cd8c65e038.setIcon(icon_1e6351b807d54b859c903175cb9b5e26);


            marker_7e8e14e741904f82aa63b2cd8c65e038.bindTooltip(
                `<div>
                     Yaralla Golf Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_75cbe10c27cb44c2b25cb7e36a8122d5 = L.marker(
                [-26.864056, 152.956486],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_db54a762a4be46ddaca2d92d061e3ec6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75cbe10c27cb44c2b25cb7e36a8122d5.setIcon(icon_db54a762a4be46ddaca2d92d061e3ec6);


            marker_75cbe10c27cb44c2b25cb7e36a8122d5.bindTooltip(
                `<div>
                     Beerwah Sportsground Management Committee Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7cf2d72b980543f19106e9ff37edaf2b = L.marker(
                [-24.864608999999998, 152.347257],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d3dc49c34338402eb7e1208b3bb397e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7cf2d72b980543f19106e9ff37edaf2b.setIcon(icon_d3dc49c34338402eb7e1208b3bb397e5);


            marker_7cf2d72b980543f19106e9ff37edaf2b.bindTooltip(
                `<div>
                     Bundaberg Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_79d2feaeb3f14bfb9dc59e55988f079b = L.marker(
                [-27.080733000000002, 153.17765500000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a0beb1efc04d4d7f94e3cce237bc0e37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_79d2feaeb3f14bfb9dc59e55988f079b.setIcon(icon_a0beb1efc04d4d7f94e3cce237bc0e37);


            marker_79d2feaeb3f14bfb9dc59e55988f079b.bindTooltip(
                `<div>
                     Bribie Island Soccer Football Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_8c6020a58d004ba5b9f5c5ceb9761467 = L.marker(
                [-19.581545000000002, 147.40419599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_17439b33c5d84817895a2e77bef4b2ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8c6020a58d004ba5b9f5c5ceb9761467.setIcon(icon_17439b33c5d84817895a2e77bef4b2ee);


            marker_8c6020a58d004ba5b9f5c5ceb9761467.bindTooltip(
                `<div>
                     Burdekin Amateur Basketball Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_0c62cd5df8ce413485f049140ffbbe79 = L.marker(
                [-23.349832, 150.53327099999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6a76774efe3c490d98c27ccca54f3c32 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0c62cd5df8ce413485f049140ffbbe79.setIcon(icon_6a76774efe3c490d98c27ccca54f3c32);


            marker_0c62cd5df8ce413485f049140ffbbe79.bindTooltip(
                `<div>
                     Diggers Memorial Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b4c049f3d05e46c288f14d2bd0621fa7 = L.marker(
                [-27.910262, 153.390798],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_70627d7b7d06445ca98f881d56bc9a16 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b4c049f3d05e46c288f14d2bd0621fa7.setIcon(icon_70627d7b7d06445ca98f881d56bc9a16);


            marker_b4c049f3d05e46c288f14d2bd0621fa7.bindTooltip(
                `<div>
                     Gold Coast Regional Tennis Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_016b6ba6955b46f384fc777be6b13973 = L.marker(
                [-18.204941, 142.244815],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_41493e74fc4b4e1c85520c4e92dfebf2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_016b6ba6955b46f384fc777be6b13973.setIcon(icon_41493e74fc4b4e1c85520c4e92dfebf2);


            marker_016b6ba6955b46f384fc777be6b13973.bindTooltip(
                `<div>
                     Croydon Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_04af557162d7474b85a755cc976a8bc0 = L.marker(
                [-21.131589, 149.185242],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1bb9470a3eba4c74be446f96101131f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_04af557162d7474b85a755cc976a8bc0.setIcon(icon_1bb9470a3eba4c74be446f96101131f4);


            marker_04af557162d7474b85a755cc976a8bc0.bindTooltip(
                `<div>
                     Rangers Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_f28b4de8291f401ca4457cbf629b0e5c = L.marker(
                [-25.327334, 152.810868],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fd1fe4161c72450f9ca5d75f2cca43b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f28b4de8291f401ca4457cbf629b0e5c.setIcon(icon_fd1fe4161c72450f9ca5d75f2cca43b7);


            marker_f28b4de8291f401ca4457cbf629b0e5c.bindTooltip(
                `<div>
                     Football Queensland - Wide Bay Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_43970a366ed54ac7b3b1502c8b17a369 = L.marker(
                [-16.820698999999998, 145.694521],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e8845f24129c43ceb56eefcf8a43a202 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43970a366ed54ac7b3b1502c8b17a369.setIcon(icon_e8845f24129c43ceb56eefcf8a43a202);


            marker_43970a366ed54ac7b3b1502c8b17a369.bindTooltip(
                `<div>
                     Cairns Mountain Bike Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b0057535e23b4e13a3a8e85198b98e77 = L.marker(
                [-27.088835999999997, 152.946694],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ba0f53aa0143415c9a6733bb6dea332e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b0057535e23b4e13a3a8e85198b98e77.setIcon(icon_ba0f53aa0143415c9a6733bb6dea332e);


            marker_b0057535e23b4e13a3a8e85198b98e77.bindTooltip(
                `<div>
                     Caboolture Junior Rugby League Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_6e0d1c00ef7c4181b11596cf20c4c4bb = L.marker(
                [-17.150791, 145.105114],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6aefca318ba448e98e9f9d62efd4d4b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e0d1c00ef7c4181b11596cf20c4c4bb.setIcon(icon_6aefca318ba448e98e9f9d62efd4d4b7);


            marker_6e0d1c00ef7c4181b11596cf20c4c4bb.bindTooltip(
                `<div>
                     Mareeba Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9ba583fcabc04dad90686790042bb3ca = L.marker(
                [-23.660135, 148.088044],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5278da32ed21472fbdbe69dfa55405b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ba583fcabc04dad90686790042bb3ca.setIcon(icon_5278da32ed21472fbdbe69dfa55405b0);


            marker_9ba583fcabc04dad90686790042bb3ca.bindTooltip(
                `<div>
                     Maraboon Power Boat And Ski Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_61c53153325546e3a9926524c236d85f = L.marker(
                [-25.593026000000002, 151.30166],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_37c651a5ea384733b70546d18573bc16 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_61c53153325546e3a9926524c236d85f.setIcon(icon_37c651a5ea384733b70546d18573bc16);


            marker_61c53153325546e3a9926524c236d85f.bindTooltip(
                `<div>
                     Mundubbera Cricket Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_ca000de686de436bbd85abaa466b1a4a = L.marker(
                [-27.454867999999998, 153.025789],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a7d9791ae70d4a7bb1b9f9669306ae41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca000de686de436bbd85abaa466b1a4a.setIcon(icon_a7d9791ae70d4a7bb1b9f9669306ae41);


            marker_ca000de686de436bbd85abaa466b1a4a.bindTooltip(
                `<div>
                     Rackley Swim Team Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_9555ae97161c468a946abd172d8744ab = L.marker(
                [-27.437224, 153.005271],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f7dae26bd1fe455d9a2db8ed5383796f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9555ae97161c468a946abd172d8744ab.setIcon(icon_f7dae26bd1fe455d9a2db8ed5383796f);


            marker_9555ae97161c468a946abd172d8744ab.bindTooltip(
                `<div>
                     Brisbane City Football Club Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_fd9d0a99e3d74c0ba7c3cc07ea4f44cd = L.marker(
                [-16.962935, 145.743973],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ff35225503f0443bb73520afde126619 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fd9d0a99e3d74c0ba7c3cc07ea4f44cd.setIcon(icon_ff35225503f0443bb73520afde126619);


            marker_fd9d0a99e3d74c0ba7c3cc07ea4f44cd.bindTooltip(
                `<div>
                     Cairns Stingrays Swimming Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_a5c4661ddcd640f8a2ecb596d837644e = L.marker(
                [-27.665274, 153.051624],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ca1b554185d34a4d8dbc26affca0f276 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a5c4661ddcd640f8a2ecb596d837644e.setIcon(icon_ca1b554185d34a4d8dbc26affca0f276);


            marker_a5c4661ddcd640f8a2ecb596d837644e.bindTooltip(
                `<div>
                     Centenary Plains Bmx Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_516edb5bc5ba4d2c81ed5b785c7a6d40 = L.marker(
                [-28.007040999999997, 153.396136],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_54e36fbc5bf24dbd8c2cde85403d1f4b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_516edb5bc5ba4d2c81ed5b785c7a6d40.setIcon(icon_54e36fbc5bf24dbd8c2cde85403d1f4b);


            marker_516edb5bc5ba4d2c81ed5b785c7a6d40.bindTooltip(
                `<div>
                     Surfers Paradise - Benowa Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_06f7332edf37475ab8074be69862a21e = L.marker(
                [-27.088835999999997, 152.946694],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_25d7e4ef91e04b6f9638d5a805b4d710 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_06f7332edf37475ab8074be69862a21e.setIcon(icon_25d7e4ef91e04b6f9638d5a805b4d710);


            marker_06f7332edf37475ab8074be69862a21e.bindTooltip(
                `<div>
                     Caboolture Netball Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_f9d560ab967149c2ad7fa129e122a7af = L.marker(
                [-24.395937, 150.514981],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a91ee4d05c55485bbd123e1ae5b2fda9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9d560ab967149c2ad7fa129e122a7af.setIcon(icon_a91ee4d05c55485bbd123e1ae5b2fda9);


            marker_f9d560ab967149c2ad7fa129e122a7af.bindTooltip(
                `<div>
                     Callide Valley Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_99e6691a70df4e2e8f35c5c74da113a6 = L.marker(
                [-26.421533, 152.911545],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bd77ca5beb874704b8b42744a6b8f987 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_99e6691a70df4e2e8f35c5c74da113a6.setIcon(icon_bd77ca5beb874704b8b42744a6b8f987);


            marker_99e6691a70df4e2e8f35c5c74da113a6.bindTooltip(
                `<div>
                     Cooroy Golf Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_6411b1536b6f4bebb20e8e0552627dce = L.marker(
                [-16.459477, 145.374553],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9a17d9738c664004838517f1264d47f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6411b1536b6f4bebb20e8e0552627dce.setIcon(icon_9a17d9738c664004838517f1264d47f2);


            marker_6411b1536b6f4bebb20e8e0552627dce.bindTooltip(
                `<div>
                     Mossman And District Gymnastics Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_3f28d7e6bd8d41e59c4f67b0678cbcf9 = L.marker(
                [-16.902196, 145.758262],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_91a7a55966bb4a74ae96568f410c9fb9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f28d7e6bd8d41e59c4f67b0678cbcf9.setIcon(icon_91a7a55966bb4a74ae96568f410c9fb9);


            marker_3f28d7e6bd8d41e59c4f67b0678cbcf9.bindTooltip(
                `<div>
                     Cairns Hockey Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_b94cabf9adfc42728997a8088fbd1144 = L.marker(
                [-24.894814999999998, 152.312733],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0e6a077097d47d982fba8ea1ce0f368 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b94cabf9adfc42728997a8088fbd1144.setIcon(icon_f0e6a077097d47d982fba8ea1ce0f368);


            marker_b94cabf9adfc42728997a8088fbd1144.bindTooltip(
                `<div>
                     Bundaberg And District Table Tennis Association Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_83c6feae835941b6924b27a52d04b6bd = L.marker(
                [-15.238598999999999, 145.19028400000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_83552514463f4dadaea3382e7676df14 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_83c6feae835941b6924b27a52d04b6bd.setIcon(icon_83552514463f4dadaea3382e7676df14);


            marker_83c6feae835941b6924b27a52d04b6bd.bindTooltip(
                `<div>
                     Hope Vale Aboriginal Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_0601659813484f30a4b88f1117ccadb8 = L.marker(
                [-27.509597999999997, 153.04079],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_938abb876c9e44fdab439ea8e643bfff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0601659813484f30a4b88f1117ccadb8.setIcon(icon_938abb876c9e44fdab439ea8e643bfff);


            marker_0601659813484f30a4b88f1117ccadb8.bindTooltip(
                `<div>
                     Annerley Recreation Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_2a4c5daa4f7142d184050d8adc5adba2 = L.marker(
                [-27.335486, 152.96641100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_53421787b77247beaa2719cc9940eec8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2a4c5daa4f7142d184050d8adc5adba2.setIcon(icon_53421787b77247beaa2719cc9940eec8);


            marker_2a4c5daa4f7142d184050d8adc5adba2.bindTooltip(
                `<div>
                     Albany Creek Excelsior Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_5e4cd5eca1d54a748eb4ec04d69b81c6 = L.marker(
                [-27.670256, 153.049831],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1e50b883c7544823882876249791bc3a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e4cd5eca1d54a748eb4ec04d69b81c6.setIcon(icon_1e50b883c7544823882876249791bc3a);


            marker_5e4cd5eca1d54a748eb4ec04d69b81c6.bindTooltip(
                `<div>
                     Southern Stars Baseball Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_41e246919a0f4d4aa690ace4759aa224 = L.marker(
                [-20.056166, 146.31037800000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4321c4a408874db39cc99e9fc591df13 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41e246919a0f4d4aa690ace4759aa224.setIcon(icon_4321c4a408874db39cc99e9fc591df13);


            marker_41e246919a0f4d4aa690ace4759aa224.bindTooltip(
                `<div>
                     Towers Kart Racing Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_dd286561c8f74acdaa3b440491c50870 = L.marker(
                [-26.617694, 149.373499],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5e82fdd7f2534936a7b1e0309061057b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_dd286561c8f74acdaa3b440491c50870.setIcon(icon_5e82fdd7f2534936a7b1e0309061057b);


            marker_dd286561c8f74acdaa3b440491c50870.bindTooltip(
                `<div>
                     Yuleba & District Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_16b49c5bb4274db1a53e37e331e1c48e = L.marker(
                [-27.705296, 153.057495],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_823abb9d8b6e4e268eb2f52baf1c91a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_16b49c5bb4274db1a53e37e331e1c48e.setIcon(icon_823abb9d8b6e4e268eb2f52baf1c91a2);


            marker_16b49c5bb4274db1a53e37e331e1c48e.bindTooltip(
                `<div>
                     Park Ridge Panthers Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_c4e9d9dd8f6c4dae8cda5800d8260012 = L.marker(
                [-15.472176000000001, 145.252775],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_721c134c0f0c48c6b777d5af1606eb64 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c4e9d9dd8f6c4dae8cda5800d8260012.setIcon(icon_721c134c0f0c48c6b777d5af1606eb64);


            marker_c4e9d9dd8f6c4dae8cda5800d8260012.bindTooltip(
                `<div>
                     Cook Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a0f1bbfbcd0b47b7b807c3cd162413ae = L.marker(
                [-12.782083, 143.343106],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dc2285ca18684c2a9c8ffc89c508255c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a0f1bbfbcd0b47b7b807c3cd162413ae.setIcon(icon_dc2285ca18684c2a9c8ffc89c508255c);


            marker_a0f1bbfbcd0b47b7b807c3cd162413ae.bindTooltip(
                `<div>
                     Lockhart River Aboriginal Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a23e26a2f796427388398f1c824fa881 = L.marker(
                [-26.657827, 153.100558],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1e78bd0638b04455a68f3c4cb450b906 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a23e26a2f796427388398f1c824fa881.setIcon(icon_1e78bd0638b04455a68f3c4cb450b906);


            marker_a23e26a2f796427388398f1c824fa881.bindTooltip(
                `<div>
                     Sunshine Coast Regional Park
                 </div>`,
                {"sticky": true}
            );


            var marker_67ce5731bbaf4c6da37c786e8140c8c9 = L.marker(
                [-26.644892, 153.059098],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2982fc1370c94733a8d8970d652994a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_67ce5731bbaf4c6da37c786e8140c8c9.setIcon(icon_2982fc1370c94733a8d8970d652994a4);


            marker_67ce5731bbaf4c6da37c786e8140c8c9.bindTooltip(
                `<div>
                     The Sunshine Coast Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_72a2c20a5cf84c458339315c10a34aae = L.marker(
                [-23.84872, 151.255308],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_384d8da63aab4b0390a8dd5f7a4fed84 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72a2c20a5cf84c458339315c10a34aae.setIcon(icon_384d8da63aab4b0390a8dd5f7a4fed84);


            marker_72a2c20a5cf84c458339315c10a34aae.bindTooltip(
                `<div>
                     Gladstone Tennis & Squash Association Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_1679db7bf09a4f4089ea58028e55fed2 = L.marker(
                [-27.512596000000002, 153.019389],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d1aed3757f5d4ba38e827059c87096ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1679db7bf09a4f4089ea58028e55fed2.setIcon(icon_d1aed3757f5d4ba38e827059c87096ce);


            marker_1679db7bf09a4f4089ea58028e55fed2.bindTooltip(
                `<div>
                     Souths Junior Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_7083c0f3c4c94f068080b33dc5547c85 = L.marker(
                [-15.951505, 145.319103],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e5169b28f4ff4a10905c2ccec40f9a35 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7083c0f3c4c94f068080b33dc5547c85.setIcon(icon_e5169b28f4ff4a10905c2ccec40f9a35);


            marker_7083c0f3c4c94f068080b33dc5547c85.bindTooltip(
                `<div>
                     Wujal Wujal Aboriginal Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3753d608a9e446e6b76dab218df5bb68 = L.marker(
                [-28.071359, 145.684665],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f55c8800a9b14296b94f63d5b5ecab7c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3753d608a9e446e6b76dab218df5bb68.setIcon(icon_f55c8800a9b14296b94f63d5b5ecab7c);


            marker_3753d608a9e446e6b76dab218df5bb68.bindTooltip(
                `<div>
                     Paroo Shire Park
                 </div>`,
                {"sticky": true}
            );


            var marker_d7e73579e6684c019057881a90ee2ac1 = L.marker(
                [-23.586628, 150.58101100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9e55048b1d544f6b81883f601d38dede = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7e73579e6684c019057881a90ee2ac1.setIcon(icon_9e55048b1d544f6b81883f601d38dede);


            marker_d7e73579e6684c019057881a90ee2ac1.bindTooltip(
                `<div>
                     Rockhampton Kart Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_b96790f8bd504eff9743122f556981e0 = L.marker(
                [-27.614490999999997, 151.955995],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ddd774cebfba4be781d525010375420e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b96790f8bd504eff9743122f556981e0.setIcon(icon_ddd774cebfba4be781d525010375420e);


            marker_b96790f8bd504eff9743122f556981e0.bindTooltip(
                `<div>
                     Toowoomba Motocross Club Ltd
                 </div>`,
                {"sticky": true}
            );


            var marker_b4444593f16c4f3692f6cd5b0b8e630e = L.marker(
                [-27.967415999999997, 153.399281],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9166f291de614b289aff17601d204904 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b4444593f16c4f3692f6cd5b0b8e630e.setIcon(icon_9166f291de614b289aff17601d204904);


            marker_b4444593f16c4f3692f6cd5b0b8e630e.bindTooltip(
                `<div>
                     Southport Pony & Hack Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_758f1df623284c0781391bc104f3b60a = L.marker(
                [-26.548029, 151.83358],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9b35b4f840d5458893be8cdcef6b26c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_758f1df623284c0781391bc104f3b60a.setIcon(icon_9b35b4f840d5458893be8cdcef6b26c3);


            marker_758f1df623284c0781391bc104f3b60a.bindTooltip(
                `<div>
                     Kingaroy Senior Soccer Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_4de8e5b656974b47996c7a097cbd789e = L.marker(
                [-27.129602000000002, 152.97151200000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_33b1e5875b4d4c6dabbc9f7ca73bb458 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4de8e5b656974b47996c7a097cbd789e.setIcon(icon_33b1e5875b4d4c6dabbc9f7ca73bb458);


            marker_4de8e5b656974b47996c7a097cbd789e.bindTooltip(
                `<div>
                     Moreton Bay Lions Australian Football Sports Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c6eb8843f08147cfa44795f9c9404f9f = L.marker(
                [-27.213263, 153.005464],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cfbb1d7b3e484d0b97267277395e375e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c6eb8843f08147cfa44795f9c9404f9f.setIcon(icon_cfbb1d7b3e484d0b97267277395e375e);


            marker_c6eb8843f08147cfa44795f9c9404f9f.bindTooltip(
                `<div>
                     North Lakes District Rugby League Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_e1fa5aaa95214c8987bda1e9349666a9 = L.marker(
                [-20.55583, 147.84791299999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_360a5562b58b4763b57e048e069d7de8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e1fa5aaa95214c8987bda1e9349666a9.setIcon(icon_360a5562b58b4763b57e048e069d7de8);


            marker_e1fa5aaa95214c8987bda1e9349666a9.bindTooltip(
                `<div>
                     Whitsunday Regional Park
                 </div>`,
                {"sticky": true}
            );


            var marker_281e296a7a6f4f119ae71b029f495807 = L.marker(
                [-18.296865, 143.543526],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ae320fef63734ef1bc081527450f7fc8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_281e296a7a6f4f119ae71b029f495807.setIcon(icon_ae320fef63734ef1bc081527450f7fc8);


            marker_281e296a7a6f4f119ae71b029f495807.bindTooltip(
                `<div>
                     Georgetown Horse And Pony Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_58978545d4e54381a5a93f112992e3f9 = L.marker(
                [-27.75768, 153.092878],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4662561b4e464d449fe6b612c861b69d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_58978545d4e54381a5a93f112992e3f9.setIcon(icon_4662561b4e464d449fe6b612c861b69d);


            marker_58978545d4e54381a5a93f112992e3f9.bindTooltip(
                `<div>
                     Mustangs Brothers Rugby League Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_8ba281f4bc2a4144a244554104c02b85 = L.marker(
                [-27.228758000000003, 153.094746],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a4eb0b10fecc4a29ab2e3526914ff68b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ba281f4bc2a4144a244554104c02b85.setIcon(icon_a4eb0b10fecc4a29ab2e3526914ff68b);


            marker_8ba281f4bc2a4144a244554104c02b85.bindTooltip(
                `<div>
                     Peninsula And Districts Football And Sporting Club Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_e6e69875e975442aa359c5ec1b74f47d = L.marker(
                [-17.268407, 145.482722],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_636eff80ce43434a89eefdccec2b0890 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e6e69875e975442aa359c5ec1b74f47d.setIcon(icon_636eff80ce43434a89eefdccec2b0890);


            marker_e6e69875e975442aa359c5ec1b74f47d.bindTooltip(
                `<div>
                     Atherton Rugby League Football Club Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_bfc40677190e40739ea4188bbb2c8ce9 = L.marker(
                [-28.200018, 152.033028],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_42d265288b124036ba6e88699b2f4605 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bfc40677190e40739ea4188bbb2c8ce9.setIcon(icon_42d265288b124036ba6e88699b2f4605);


            marker_bfc40677190e40739ea4188bbb2c8ce9.bindTooltip(
                `<div>
                     Warwick And District Netball Association Incorporated
                 </div>`,
                {"sticky": true}
            );


            var marker_72980ce5ef644bbca942347605175da3 = L.marker(
                [-10.587879, 142.21305900000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c96c54bdac3f494d8706e113f207c238 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72980ce5ef644bbca942347605175da3.setIcon(icon_c96c54bdac3f494d8706e113f207c238);


            marker_72980ce5ef644bbca942347605175da3.bindTooltip(
                `<div>
                     Thursday Island Bowls Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_c827fb07a03e433faba71ef28e84933d = L.marker(
                [-19.272929, 146.749068],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_484d988ebee3492e838ef17b770dfa13 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c827fb07a03e433faba71ef28e84933d.setIcon(icon_484d988ebee3492e838ef17b770dfa13);


            marker_c827fb07a03e433faba71ef28e84933d.bindTooltip(
                `<div>
                     Brothers Tsv Football Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0236481988164f0191fb2aa30071cc76 = L.marker(
                [-27.159938, 152.96547900000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a703cf958fa74199bb56a535948ca74a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0236481988164f0191fb2aa30071cc76.setIcon(icon_a703cf958fa74199bb56a535948ca74a);


            marker_0236481988164f0191fb2aa30071cc76.bindTooltip(
                `<div>
                     Burpengary Cricket Club Inc.
                 </div>`,
                {"sticky": true}
            );


            var marker_0dfc58d99e9243b8a3935a5fae109d15 = L.marker(
                [-16.927982999999998, 145.875529],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_593b84fca036487791d3b6f93d3dcc81 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0dfc58d99e9243b8a3935a5fae109d15.setIcon(icon_593b84fca036487791d3b6f93d3dcc81);


            marker_0dfc58d99e9243b8a3935a5fae109d15.bindTooltip(
                `<div>
                     Queensland Police-citizens Youth Welfare Association
                 </div>`,
                {"sticky": true}
            );


            var marker_be640fd249f5434a985c6724be690e75 = L.marker(
                [-16.431538, 145.392744],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_18d4f06e46ee4fd8b9d40c1715d645fc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_be640fd249f5434a985c6724be690e75.setIcon(icon_18d4f06e46ee4fd8b9d40c1715d645fc);


            marker_be640fd249f5434a985c6724be690e75.bindTooltip(
                `<div>
                     Port Douglas District Combined Clubs Inc
                 </div>`,
                {"sticky": true}
            );


            var marker_ac5ac8d88e3148dfbf1b7b54d2beef72 = L.marker(
                [-36.748562, 142.551592],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8fe52240503a49ba97b525c78e429f2d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ac5ac8d88e3148dfbf1b7b54d2beef72.setIcon(icon_8fe52240503a49ba97b525c78e429f2d);


            marker_ac5ac8d88e3148dfbf1b7b54d2beef72.bindTooltip(
                `<div>
                     Lubeck Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_a1508056dada40a28224c0b9b944155b = L.marker(
                [-36.627742, 142.635804],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7904c60a7c364d7d9f5f35acce8c6c30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a1508056dada40a28224c0b9b944155b.setIcon(icon_7904c60a7c364d7d9f5f35acce8c6c30);


            marker_a1508056dada40a28224c0b9b944155b.bindTooltip(
                `<div>
                     Rupanyup Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_1dd206cf5187425fb1e49fa0e79688d4 = L.marker(
                [-36.625959, 142.629512],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_248ecaf2b8f244f88080a539fac03883 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1dd206cf5187425fb1e49fa0e79688d4.setIcon(icon_248ecaf2b8f244f88080a539fac03883);


            marker_1dd206cf5187425fb1e49fa0e79688d4.bindTooltip(
                `<div>
                     Rupanyup Memorial Park
                 </div>`,
                {"sticky": true}
            );


            var marker_a47fede023af45b68590d4e734fce30a = L.marker(
                [-36.619284, 142.46556999999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d18832b3d9014b349ceecf1c83b8d1ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a47fede023af45b68590d4e734fce30a.setIcon(icon_d18832b3d9014b349ceecf1c83b8d1ae);


            marker_a47fede023af45b68590d4e734fce30a.bindTooltip(
                `<div>
                     Lake Marma Park- Lions
                 </div>`,
                {"sticky": true}
            );


            var marker_862eda355bee40648913de2fcf00a117 = L.marker(
                [-36.616572, 142.46598999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_966c4d69f59740a785d45e1d6e6d9786 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_862eda355bee40648913de2fcf00a117.setIcon(icon_966c4d69f59740a785d45e1d6e6d9786);


            marker_862eda355bee40648913de2fcf00a117.bindTooltip(
                `<div>
                     Rabl Park
                 </div>`,
                {"sticky": true}
            );


            var marker_bd0e2778057f4350897f1752d920666d = L.marker(
                [-36.61701, 142.46572700000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f897fb1e43c44424b97922985418a502 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd0e2778057f4350897f1752d920666d.setIcon(icon_f897fb1e43c44424b97922985418a502);


            marker_bd0e2778057f4350897f1752d920666d.bindTooltip(
                `<div>
                     Murtoa Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_8570e990a1004c6b9904cd69b1451f50 = L.marker(
                [-36.460516, 142.585597],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b8577ab114ec46328dbf72a38cf4b0d2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8570e990a1004c6b9904cd69b1451f50.setIcon(icon_b8577ab114ec46328dbf72a38cf4b0d2);


            marker_8570e990a1004c6b9904cd69b1451f50.bindTooltip(
                `<div>
                     Lions Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_272f2051aef6450e86a13d28699970ac = L.marker(
                [-36.456165000000006, 142.586365],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_af68e89ad617406bbfecb078534df7f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_272f2051aef6450e86a13d28699970ac.setIcon(icon_af68e89ad617406bbfecb078534df7f3);


            marker_272f2051aef6450e86a13d28699970ac.bindTooltip(
                `<div>
                     Minyip Wetlands
                 </div>`,
                {"sticky": true}
            );


            var marker_16cb003a90074d0ab43f62cfdda191b5 = L.marker(
                [-36.241264, 142.390299],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5bd22b4cfc794c979196cd3d8f126a08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_16cb003a90074d0ab43f62cfdda191b5.setIcon(icon_5bd22b4cfc794c979196cd3d8f126a08);


            marker_16cb003a90074d0ab43f62cfdda191b5.bindTooltip(
                `<div>
                     Warrackanbeal Boat Ramp
                 </div>`,
                {"sticky": true}
            );


            var marker_fed45dce90e04f179f51b4d977b8432f = L.marker(
                [-36.252656, 142.392893],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_25991c959ec640f894ebd5b1f8ee5bc2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fed45dce90e04f179f51b4d977b8432f.setIcon(icon_25991c959ec640f894ebd5b1f8ee5bc2);


            marker_fed45dce90e04f179f51b4d977b8432f.bindTooltip(
                `<div>
                     Warracknabeal Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_e44a7bae76f9422482e9231f308fc747 = L.marker(
                [-36.246795, 142.39338500000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fb484f7cbe2a43e7b5cc1b1c1cf8f3fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e44a7bae76f9422482e9231f308fc747.setIcon(icon_fb484f7cbe2a43e7b5cc1b1c1cf8f3fd);


            marker_e44a7bae76f9422482e9231f308fc747.bindTooltip(
                `<div>
                     Lions Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_102d9542963e4cba8465ea6a876d052f = L.marker(
                [-35.731823999999996, 142.3634],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f7b71f1e1e024495935a086b6fbc5a43 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_102d9542963e4cba8465ea6a876d052f.setIcon(icon_f7b71f1e1e024495935a086b6fbc5a43);


            marker_102d9542963e4cba8465ea6a876d052f.bindTooltip(
                `<div>
                     Hopetoun Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_e74b405805134e2ebd122b8575b90718 = L.marker(
                [-35.731014, 142.365016],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ed2ba076d717477eb89f9f798b543907 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e74b405805134e2ebd122b8575b90718.setIcon(icon_ed2ba076d717477eb89f9f798b543907);


            marker_e74b405805134e2ebd122b8575b90718.bindTooltip(
                `<div>
                     Hopetoun Skate Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5c23a9c402a14733bb130caaea45bbcf = L.marker(
                [-35.727123, 142.36688999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fd97083a63554e03a9e6a1a84d6a2e07 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5c23a9c402a14733bb130caaea45bbcf.setIcon(icon_fd97083a63554e03a9e6a1a84d6a2e07);


            marker_5c23a9c402a14733bb130caaea45bbcf.bindTooltip(
                `<div>
                     L. & J. Poulton Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_23b2577cb5354acaad47f5233b95cb44 = L.marker(
                [-35.72579, 142.366466],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d9ee1976a3114049842a6e665b2a5360 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23b2577cb5354acaad47f5233b95cb44.setIcon(icon_d9ee1976a3114049842a6e665b2a5360);


            marker_23b2577cb5354acaad47f5233b95cb44.bindTooltip(
                `<div>
                     Hopetoun Caravan Park &Tennis Court Play Ground
                 </div>`,
                {"sticky": true}
            );


            var marker_c7e450bddd9f4c86b70719db8e0e484d = L.marker(
                [-35.608129, 142.579819],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c1fadaee7485474cb0fe061cf7f60fca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c7e450bddd9f4c86b70719db8e0e484d.setIcon(icon_c1fadaee7485474cb0fe061cf7f60fca);


            marker_c7e450bddd9f4c86b70719db8e0e484d.bindTooltip(
                `<div>
                     Lascelles Caravan Park
                 </div>`,
                {"sticky": true}
            );


            var marker_44d05e48bf9b4a4b87272854f57fd78b = L.marker(
                [-35.381834999999995, 142.19169],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e95eb27754b942bba760d3e971d12888 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_44d05e48bf9b4a4b87272854f57fd78b.setIcon(icon_e95eb27754b942bba760d3e971d12888);


            marker_44d05e48bf9b4a4b87272854f57fd78b.bindTooltip(
                `<div>
                     Patchewollock Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_db3a38722f344480a7138fa669710800 = L.marker(
                [-36.258316, 142.395406],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_352fd7de10dc46289f7881be27cb6a56 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db3a38722f344480a7138fa669710800.setIcon(icon_352fd7de10dc46289f7881be27cb6a56);


            marker_db3a38722f344480a7138fa669710800.bindTooltip(
                `<div>
                     Anzac Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b5a084a7dd8e40e1a9ef96463a023531 = L.marker(
                [-35.941872, 142.417025],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c1dcf2653f1b41019ae03e6cbffd9447 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5a084a7dd8e40e1a9ef96463a023531.setIcon(icon_c1dcf2653f1b41019ae03e6cbffd9447);


            marker_b5a084a7dd8e40e1a9ef96463a023531.bindTooltip(
                `<div>
                     Beulah Lake Park
                 </div>`,
                {"sticky": true}
            );


            var marker_095ba395464748b0b8df994312134042 = L.marker(
                [-35.940058, 142.421213],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0e4d5a8e971b4072a207478d522af2e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_095ba395464748b0b8df994312134042.setIcon(icon_0e4d5a8e971b4072a207478d522af2e6);


            marker_095ba395464748b0b8df994312134042.bindTooltip(
                `<div>
                     Beulah Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_cd7a1bda0f2947e59ab41ffd075ac68e = L.marker(
                [-36.072959999999995, 142.416055],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f1e8e2241da0411cad186e082fe862ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cd7a1bda0f2947e59ab41ffd075ac68e.setIcon(icon_f1e8e2241da0411cad186e082fe862ef);


            marker_cd7a1bda0f2947e59ab41ffd075ac68e.bindTooltip(
                `<div>
                     Brim Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_f99923d1d63c44658a1d9150bc444bb0 = L.marker(
                [-35.767389, 142.049419],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_083970d4e4ef45838ea5b00aaf1af879 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f99923d1d63c44658a1d9150bc444bb0.setIcon(icon_083970d4e4ef45838ea5b00aaf1af879);


            marker_f99923d1d63c44658a1d9150bc444bb0.bindTooltip(
                `<div>
                     Yaapeet Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_53889614728b4d04af89640b47112649 = L.marker(
                [-35.681126, 142.662818],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d4c27c2a948144a7a089a82b0dbbc776 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53889614728b4d04af89640b47112649.setIcon(icon_d4c27c2a948144a7a089a82b0dbbc776);


            marker_53889614728b4d04af89640b47112649.bindTooltip(
                `<div>
                     High way Park Woomelang
                 </div>`,
                {"sticky": true}
            );


            var marker_0bd0533c0b6f474d9311ee9e25f62462 = L.marker(
                [-35.684446, 142.66751499999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_965b3d993f3b487bb118b894e7d8d48f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0bd0533c0b6f474d9311ee9e25f62462.setIcon(icon_965b3d993f3b487bb118b894e7d8d48f);


            marker_0bd0533c0b6f474d9311ee9e25f62462.bindTooltip(
                `<div>
                     Woomelang Rec Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_acc0eb3ecf18463faba8de4c6c52cedb = L.marker(
                [-27.586159999999996, 153.026354],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6583e89c389e4e8fb0b104bf37d5183c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_acc0eb3ecf18463faba8de4c6c52cedb.setIcon(icon_6583e89c389e4e8fb0b104bf37d5183c);


            marker_acc0eb3ecf18463faba8de4c6c52cedb.bindTooltip(
                `<div>
                     Acacia Ridge Leisure Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_80e750b5d6a6495999b6298783bea763 = L.marker(
                [-27.565465999999997, 152.891082],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_40bf73f006d94693b034983e90c74766 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_80e750b5d6a6495999b6298783bea763.setIcon(icon_40bf73f006d94693b034983e90c74766);


            marker_80e750b5d6a6495999b6298783bea763.bindTooltip(
                `<div>
                     Bellbowrie Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_11d84ba303f84584b5e9e50a5ccfbcad = L.marker(
                [-27.607439000000003, 152.931511],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_efe6c37933ba473cb6bdd40c2146d186 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_11d84ba303f84584b5e9e50a5ccfbcad.setIcon(icon_efe6c37933ba473cb6bdd40c2146d186);


            marker_11d84ba303f84584b5e9e50a5ccfbcad.bindTooltip(
                `<div>
                     Carole Park Swim Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_37798dc6bf174904a9864e05833c8e9a = L.marker(
                [-27.455369, 153.02506699999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_175650e3f40c45d186f7f64a2f84138b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_37798dc6bf174904a9864e05833c8e9a.setIcon(icon_175650e3f40c45d186f7f64a2f84138b);


            marker_37798dc6bf174904a9864e05833c8e9a.bindTooltip(
                `<div>
                     Centenary Pool (Spring Hill)
                 </div>`,
                {"sticky": true}
            );


            var marker_6a728a6b999c42a6b0e72a96afde71c7 = L.marker(
                [-27.385828999999998, 153.035109],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8a0c0e83bdd241419853cb04c8b03bf6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6a728a6b999c42a6b0e72a96afde71c7.setIcon(icon_8a0c0e83bdd241419853cb04c8b03bf6);


            marker_6a728a6b999c42a6b0e72a96afde71c7.bindTooltip(
                `<div>
                     Chermside Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_a00d6b2e314f4b4493be93a5adc8dc76 = L.marker(
                [-27.45516, 153.07886100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f04bfc654f8a4466b34d353a794bcceb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a00d6b2e314f4b4493be93a5adc8dc76.setIcon(icon_f04bfc654f8a4466b34d353a794bcceb);


            marker_a00d6b2e314f4b4493be93a5adc8dc76.bindTooltip(
                `<div>
                     Colmslie Pool (Morningside)
                 </div>`,
                {"sticky": true}
            );


            var marker_061f4b67d95e41c9aed66da3f9c28368 = L.marker(
                [-27.546519, 152.980628],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c06752707cc8408ba8c2e0d70f092ff9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_061f4b67d95e41c9aed66da3f9c28368.setIcon(icon_c06752707cc8408ba8c2e0d70f092ff9);


            marker_061f4b67d95e41c9aed66da3f9c28368.bindTooltip(
                `<div>
                     Dunlop Park Memorial Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_18d0642be83d4931bc1c9a08bb6e7419 = L.marker(
                [-27.331986999999998, 153.042374],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9934795153ef476abb6b3b131d5bcc21 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_18d0642be83d4931bc1c9a08bb6e7419.setIcon(icon_9934795153ef476abb6b3b131d5bcc21);


            marker_18d0642be83d4931bc1c9a08bb6e7419.bindTooltip(
                `<div>
                     The Emily Seebohm Aquatic Centre - Fitzgibbon
                 </div>`,
                {"sticky": true}
            );


            var marker_1868b0c8c3f548fb8a662b37a0da80a3 = L.marker(
                [-27.551826000000002, 153.07353999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_29ed555c37d54fec8624b38a481bd7f8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1868b0c8c3f548fb8a662b37a0da80a3.setIcon(icon_29ed555c37d54fec8624b38a481bd7f8);


            marker_1868b0c8c3f548fb8a662b37a0da80a3.bindTooltip(
                `<div>
                     Hibiscus Sports Complex (Upper Mt Gravatt)
                 </div>`,
                {"sticky": true}
            );


            var marker_2eeafb4ac966495e8c73bbe91f373c02 = L.marker(
                [-27.462262, 153.010347],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2cd0bf545d6a4d6484abb9a3f3c1cafe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2eeafb4ac966495e8c73bbe91f373c02.setIcon(icon_2cd0bf545d6a4d6484abb9a3f3c1cafe);


            marker_2eeafb4ac966495e8c73bbe91f373c02.bindTooltip(
                `<div>
                     Ithaca Pool (Paddington)
                 </div>`,
                {"sticky": true}
            );


            var marker_3f39a0d398fe4746a40965cb89c62886 = L.marker(
                [-27.532363, 152.942691],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d3a613d31e9547c784f09b4336ac35c2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3f39a0d398fe4746a40965cb89c62886.setIcon(icon_d3a613d31e9547c784f09b4336ac35c2);


            marker_3f39a0d398fe4746a40965cb89c62886.bindTooltip(
                `<div>
                     Jindalee Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_eb010825e53741b697e6120465aee225 = L.marker(
                [-27.497689, 153.04867],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_09b42b15a8874f58bdaeaaf578e3b697 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eb010825e53741b697e6120465aee225.setIcon(icon_09b42b15a8874f58bdaeaaf578e3b697);


            marker_eb010825e53741b697e6120465aee225.bindTooltip(
                `<div>
                     Langlands Park Memorial Pool (Stones Corner)
                 </div>`,
                {"sticky": true}
            );


            var marker_d4feae6d0a614117a38c258d6d6a438c = L.marker(
                [-27.452284999999996, 153.18743700000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_541506b784764d1e95371154c8e490d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4feae6d0a614117a38c258d6d6a438c.setIcon(icon_541506b784764d1e95371154c8e490d3);


            marker_d4feae6d0a614117a38c258d6d6a438c.bindTooltip(
                `<div>
                     Manly Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_28fe19562c164504bfac6685dcbf668f = L.marker(
                [-27.532134999999997, 153.094289],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a44738031b7e45cebd873552ee9ca57d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_28fe19562c164504bfac6685dcbf668f.setIcon(icon_a44738031b7e45cebd873552ee9ca57d);


            marker_28fe19562c164504bfac6685dcbf668f.bindTooltip(
                `<div>
                     Mt Gravatt East Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_4463b3e2072c4349894ac5548b3e9565 = L.marker(
                [-27.479777000000002, 153.016806],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d65790c7345a4382a085a915de7ba63b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4463b3e2072c4349894ac5548b3e9565.setIcon(icon_d65790c7345a4382a085a915de7ba63b);


            marker_4463b3e2072c4349894ac5548b3e9565.bindTooltip(
                `<div>
                     Musgrave Park Swimming  Centre(South Brisbane)
                 </div>`,
                {"sticky": true}
            );


            var marker_314ee4d93c7b43b98aa625775a5bee8e = L.marker(
                [-27.429679999999998, 153.006206],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8825673540304516ae2d9d3fb29281ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_314ee4d93c7b43b98aa625775a5bee8e.setIcon(icon_8825673540304516ae2d9d3fb29281ee);


            marker_314ee4d93c7b43b98aa625775a5bee8e.bindTooltip(
                `<div>
                     Newmarket Olympic Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_f0a522f05a66453bb0505f257c7efc68 = L.marker(
                [-27.639954, 153.038668],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f538511f71c848c783b4a291c7c2f2a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f0a522f05a66453bb0505f257c7efc68.setIcon(icon_f538511f71c848c783b4a291c7c2f2a4);


            marker_f0a522f05a66453bb0505f257c7efc68.bindTooltip(
                `<div>
                     Parkinson Aquatic Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_1679c0689f53404592813a3a6ef16174 = L.marker(
                [-27.591561, 153.076415],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3a0fa11fda104294b0714859765d9fe8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1679c0689f53404592813a3a6ef16174.setIcon(icon_3a0fa11fda104294b0714859765d9fe8);


            marker_1679c0689f53404592813a3a6ef16174.bindTooltip(
                `<div>
                     Runcorn Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_53e341350f7f4007aa15823e7202a1d0 = L.marker(
                [-27.311956, 153.069098],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_890c6e3e742c4e50b46e20037b4e2d29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53e341350f7f4007aa15823e7202a1d0.setIcon(icon_890c6e3e742c4e50b46e20037b4e2d29);


            marker_53e341350f7f4007aa15823e7202a1d0.bindTooltip(
                `<div>
                     Sandgate Aquatic Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_fe65d826ba8b423589b9a69bdb25cffa = L.marker(
                [-27.459596, 153.021548],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2fbeec1e6aae442b88091892367b109d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fe65d826ba8b423589b9a69bdb25cffa.setIcon(icon_2fbeec1e6aae442b88091892367b109d);


            marker_fe65d826ba8b423589b9a69bdb25cffa.bindTooltip(
                `<div>
                     Spring Hill Baths (Inner City)
                 </div>`,
                {"sticky": true}
            );


            var marker_6008dd82dacd4fa8816c30d663b13942 = L.marker(
                [-27.4539, 153.0368],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e48756308fb2477397b7587a755114c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6008dd82dacd4fa8816c30d663b13942.setIcon(icon_e48756308fb2477397b7587a755114c3);


            marker_6008dd82dacd4fa8816c30d663b13942.bindTooltip(
                `<div>
                     Valley Pool (Fortitude Valley)
                 </div>`,
                {"sticky": true}
            );


            var marker_da64a1eb51ad48dd8f7557c695373a85 = L.marker(
                [-27.520527, 153.018544],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0d729f6d6f0f4649a4d5115cd714ffec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_da64a1eb51ad48dd8f7557c695373a85.setIcon(icon_0d729f6d6f0f4649a4d5115cd714ffec);


            marker_da64a1eb51ad48dd8f7557c695373a85.bindTooltip(
                `<div>
                     Yeronga Park Memorial Swimming Pool
                 </div>`,
                {"sticky": true}
            );


            var marker_4e327b31acbd48038b3263d01a227f20 = L.marker(
                [-37.78685, 143.613069],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b8b9beb2e4984775bfe660c2e11bdb17 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4e327b31acbd48038b3263d01a227f20.setIcon(icon_b8b9beb2e4984775bfe660c2e11bdb17);


            marker_4e327b31acbd48038b3263d01a227f20.bindTooltip(
                `<div>
                     Cape Clear & District Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_3e94480a24ca4f1abd1efbfc8f7a0aec = L.marker(
                [-37.58807, 143.714742],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_11ac915b7dbe4187b4f2ba009a0a188c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3e94480a24ca4f1abd1efbfc8f7a0aec.setIcon(icon_11ac915b7dbe4187b4f2ba009a0a188c);


            marker_3e94480a24ca4f1abd1efbfc8f7a0aec.bindTooltip(
                `<div>
                     Haddon Lions Park
                 </div>`,
                {"sticky": true}
            );


            var marker_7f22a9268b934eadb1a44b66794c7844 = L.marker(
                [-37.58812, 143.72221299999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_abc768107a614adf8403efed6bb28735 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7f22a9268b934eadb1a44b66794c7844.setIcon(icon_abc768107a614adf8403efed6bb28735);


            marker_7f22a9268b934eadb1a44b66794c7844.bindTooltip(
                `<div>
                     Haddon Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_0d4ee5e28a3e4f428de9f1365f67b099 = L.marker(
                [-37.632090999999996, 143.758713],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b6ccd1c297924e4bb768bae6696562ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0d4ee5e28a3e4f428de9f1365f67b099.setIcon(icon_b6ccd1c297924e4bb768bae6696562ba);


            marker_0d4ee5e28a3e4f428de9f1365f67b099.bindTooltip(
                `<div>
                     Ross Creek Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_0f69b83b546949c088b26cdedd049ed6 = L.marker(
                [-37.724602000000004, 143.80101399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_448857e4423745a6affbd468fba7798b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0f69b83b546949c088b26cdedd049ed6.setIcon(icon_448857e4423745a6affbd468fba7798b);


            marker_0f69b83b546949c088b26cdedd049ed6.bindTooltip(
                `<div>
                     Enfield Harrison Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_3b4c12384f2f4deca8ea4a1f80bed943 = L.marker(
                [-37.680147, 143.82521599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a2bfd11bd5a5490b8211b23edcf0829b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3b4c12384f2f4deca8ea4a1f80bed943.setIcon(icon_a2bfd11bd5a5490b8211b23edcf0829b);


            marker_3b4c12384f2f4deca8ea4a1f80bed943.bindTooltip(
                `<div>
                     Napoleons Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_718c3b529b634613ae0212c5f0b31aed = L.marker(
                [-37.717755, 143.880762],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6374de7babaf4b5ebcb9a5638cb6dbe0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_718c3b529b634613ae0212c5f0b31aed.setIcon(icon_6374de7babaf4b5ebcb9a5638cb6dbe0);


            marker_718c3b529b634613ae0212c5f0b31aed.bindTooltip(
                `<div>
                     Garibaldi Public Hall Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_782789279bc142bcb77ed798e117de81 = L.marker(
                [-37.769056, 143.884521],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6f4acdcb9e1b41ee8f17b70e0808b7c1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_782789279bc142bcb77ed798e117de81.setIcon(icon_6f4acdcb9e1b41ee8f17b70e0808b7c1);


            marker_782789279bc142bcb77ed798e117de81.bindTooltip(
                `<div>
                     Grenville Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_47ae140528d54e78a8b0429318c0caeb = L.marker(
                [-37.638477, 143.68646],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dd5db62c2fc2403baf345825260a3c9c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_47ae140528d54e78a8b0429318c0caeb.setIcon(icon_dd5db62c2fc2403baf345825260a3c9c);


            marker_47ae140528d54e78a8b0429318c0caeb.bindTooltip(
                `<div>
                     Smythesdale Gardens Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_3ac7779545484d378a0a98e4988c48b2 = L.marker(
                [-37.64181, 143.683965],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6ca71f798c1b46ca9cd74c17e67d367f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ac7779545484d378a0a98e4988c48b2.setIcon(icon_6ca71f798c1b46ca9cd74c17e67d367f);


            marker_3ac7779545484d378a0a98e4988c48b2.bindTooltip(
                `<div>
                     Woady Yaloak Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_7ccdc55c1c4141dab60c384aa9592abb = L.marker(
                [-37.672406, 143.655099],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_428a95f355a04e1d8373f263d577ee0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ccdc55c1c4141dab60c384aa9592abb.setIcon(icon_428a95f355a04e1d8373f263d577ee0c);


            marker_7ccdc55c1c4141dab60c384aa9592abb.bindTooltip(
                `<div>
                     Scarsdale Community Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_f5fa3321868a48a38a1d4695fb391fd9 = L.marker(
                [-37.68347, 143.56812],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_928bab6e3c8445c4acadf3e6eca15ea0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f5fa3321868a48a38a1d4695fb391fd9.setIcon(icon_928bab6e3c8445c4acadf3e6eca15ea0);


            marker_f5fa3321868a48a38a1d4695fb391fd9.bindTooltip(
                `<div>
                     Linton Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_032ed16e82b548409d21f51c67265dad = L.marker(
                [-37.774046999999996, 143.697024],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_638a8fb5944143aa8aa0acfdd2ddde28 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_032ed16e82b548409d21f51c67265dad.setIcon(icon_638a8fb5944143aa8aa0acfdd2ddde28);


            marker_032ed16e82b548409d21f51c67265dad.bindTooltip(
                `<div>
                     Berringa Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_36fe5cc34eb14759a5468e167720b335 = L.marker(
                [-38.055146, 144.175162],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5a978edc98f44b9ba0c493426a2c4215 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_36fe5cc34eb14759a5468e167720b335.setIcon(icon_5a978edc98f44b9ba0c493426a2c4215);


            marker_36fe5cc34eb14759a5468e167720b335.bindTooltip(
                `<div>
                     Bannockburn Glenmore Estate Reserve Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9e8821027e0749739031836fb22d4724 = L.marker(
                [-38.045446999999996, 144.171519],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_19c9691fa2404c269f527e7330102477 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9e8821027e0749739031836fb22d4724.setIcon(icon_19c9691fa2404c269f527e7330102477);


            marker_9e8821027e0749739031836fb22d4724.bindTooltip(
                `<div>
                     Bannockburn Shire Hall Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5748ee3fbc7145c8a0c00c637ca13afc = L.marker(
                [-38.036428, 144.164469],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_92fcfbf5ccec47d1a4998292edb53ec2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5748ee3fbc7145c8a0c00c637ca13afc.setIcon(icon_92fcfbf5ccec47d1a4998292edb53ec2);


            marker_5748ee3fbc7145c8a0c00c637ca13afc.bindTooltip(
                `<div>
                     Bannockburn Recreation Precinct
                 </div>`,
                {"sticky": true}
            );


            var marker_9db683c08c08451387af3c393757fedd = L.marker(
                [-38.047903999999996, 144.17525],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cb4f10ea5b524118a84e5960a75a9898 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9db683c08c08451387af3c393757fedd.setIcon(icon_cb4f10ea5b524118a84e5960a75a9898);


            marker_9db683c08c08451387af3c393757fedd.bindTooltip(
                `<div>
                     Bannockburn Victoria Park Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_24a099906c3846889796038b3ce6c585 = L.marker(
                [-38.045111, 144.17516],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b830920147424fea8324070564f9ef20 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24a099906c3846889796038b3ce6c585.setIcon(icon_b830920147424fea8324070564f9ef20);


            marker_24a099906c3846889796038b3ce6c585.bindTooltip(
                `<div>
                     Bannockburn Lions Park Playground
                 </div>`,
                {"sticky": true}
            );


            var marker_443493a17ddb431baeb23351f144543b = L.marker(
                [-37.966592, 144.134531],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2e6266e92bde4a88bb19feac8ffbc063 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_443493a17ddb431baeb23351f144543b.setIcon(icon_2e6266e92bde4a88bb19feac8ffbc063);


            marker_443493a17ddb431baeb23351f144543b.bindTooltip(
                `<div>
                     Lethbridge Russell Street Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_1ae3d82e40874e559e32c7674d3a00a0 = L.marker(
                [-37.819505, 143.752532],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0cddfa4ecb83425eab4ae84d8e0ea4cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1ae3d82e40874e559e32c7674d3a00a0.setIcon(icon_0cddfa4ecb83425eab4ae84d8e0ea4cc);


            marker_1ae3d82e40874e559e32c7674d3a00a0.bindTooltip(
                `<div>
                     Dereel Hall & Recreation Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_e1cc8529eff645e897822aa6b4b148bd = L.marker(
                [-37.902426, 143.717106],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f95c49232278430b9966385a12549c0f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e1cc8529eff645e897822aa6b4b148bd.setIcon(icon_f95c49232278430b9966385a12549c0f);


            marker_e1cc8529eff645e897822aa6b4b148bd.bindTooltip(
                `<div>
                     Rokewood Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_c7b3314a79224b08b62aaa3c861cf2d8 = L.marker(
                [-37.873185, 143.740973],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e860b8147c5c4a56a1f41653a1d6f6a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c7b3314a79224b08b62aaa3c861cf2d8.setIcon(icon_e860b8147c5c4a56a1f41653a1d6f6a7);


            marker_c7b3314a79224b08b62aaa3c861cf2d8.bindTooltip(
                `<div>
                     Corindhap Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_cbfe77909748403a907edfcd6fdda788 = L.marker(
                [-38.012552, 143.976935],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b4db4bbdf7e04f819431ae777e5c3122 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cbfe77909748403a907edfcd6fdda788.setIcon(icon_b4db4bbdf7e04f819431ae777e5c3122);


            marker_cbfe77909748403a907edfcd6fdda788.bindTooltip(
                `<div>
                     Shelford Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_d256b9760d814971b94cf293737a8e70 = L.marker(
                [-38.023002000000005, 144.042493],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9586756520494a5e98badc64e3788ed8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d256b9760d814971b94cf293737a8e70.setIcon(icon_9586756520494a5e98badc64e3788ed8);


            marker_d256b9760d814971b94cf293737a8e70.bindTooltip(
                `<div>
                     Teesdale Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_939fd147e62241058268b1934d8ab0c5 = L.marker(
                [-38.026779, 144.04949399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5d9f2ac9de304a49afb84c874e86b63a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_939fd147e62241058268b1934d8ab0c5.setIcon(icon_5d9f2ac9de304a49afb84c874e86b63a);


            marker_939fd147e62241058268b1934d8ab0c5.bindTooltip(
                `<div>
                     Teesdale Turtle Bend Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9bb1a9184ff74707a090243e8b118b1f = L.marker(
                [-38.026779, 144.04949399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_efff5c80f0e6430e9f9d1966f21fbaaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9bb1a9184ff74707a090243e8b118b1f.setIcon(icon_efff5c80f0e6430e9f9d1966f21fbaaa);


            marker_9bb1a9184ff74707a090243e8b118b1f.bindTooltip(
                `<div>
                     Teesdale Turtle Bend Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_6f5089daa2754028b5e15e98b59e04ab = L.marker(
                [-38.100783, 144.053754],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_14e8cefb74bb418d91bc6ca0fb1e3479 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f5089daa2754028b5e15e98b59e04ab.setIcon(icon_14e8cefb74bb418d91bc6ca0fb1e3479);


            marker_6f5089daa2754028b5e15e98b59e04ab.bindTooltip(
                `<div>
                     Inverleigh Tennis Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_e6dbf9163bf9474d8ace04fe00f131a8 = L.marker(
                [-38.103387, 144.048977],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e0984542c40f47789cb6f0e22ea79a8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e6dbf9163bf9474d8ace04fe00f131a8.setIcon(icon_e0984542c40f47789cb6f0e22ea79a8e);


            marker_e6dbf9163bf9474d8ace04fe00f131a8.bindTooltip(
                `<div>
                     Inverleigh Sporting Complex
                 </div>`,
                {"sticky": true}
            );


            var marker_d684c421d00145e48e2bc6c5df0cc5e1 = L.marker(
                [-38.099467, 144.061449],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_840fcd26bcc44e6da14656129e051e62 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d684c421d00145e48e2bc6c5df0cc5e1.setIcon(icon_840fcd26bcc44e6da14656129e051e62);


            marker_d684c421d00145e48e2bc6c5df0cc5e1.bindTooltip(
                `<div>
                     Inverleigh Lawson Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_64abcf16e795409c9daedd852aa5114f = L.marker(
                [-38.105568, 144.141966],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e8102bfd1c6f4f50a23a119a0cba8459 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_64abcf16e795409c9daedd852aa5114f.setIcon(icon_e8102bfd1c6f4f50a23a119a0cba8459);


            marker_64abcf16e795409c9daedd852aa5114f.bindTooltip(
                `<div>
                     Murgheboluc Recreation & Public Hall Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_9c044936621143299c06a8f96ccfe206 = L.marker(
                [-37.847221000000005, 144.072728],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ba7f013360ce448c9eae87f3c4f4485d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9c044936621143299c06a8f96ccfe206.setIcon(icon_ba7f013360ce448c9eae87f3c4f4485d);


            marker_9c044936621143299c06a8f96ccfe206.bindTooltip(
                `<div>
                     Meredith Pioneer Park Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_ff5e93532dd34028af56909641d93b5e = L.marker(
                [-37.950019, 144.16823200000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_911f66e339c34fcb8f8563e66b4ac204 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ff5e93532dd34028af56909641d93b5e.setIcon(icon_911f66e339c34fcb8f8563e66b4ac204);


            marker_ff5e93532dd34028af56909641d93b5e.bindTooltip(
                `<div>
                     Maude Recreation Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_fbf31d0579684fbc9ede6b17befe70fd = L.marker(
                [-37.949409, 144.169117],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_683010f6cb6f478db92a1c6f051b34ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fbf31d0579684fbc9ede6b17befe70fd.setIcon(icon_683010f6cb6f478db92a1c6f051b34ba);


            marker_fbf31d0579684fbc9ede6b17befe70fd.bindTooltip(
                `<div>
                     Maude Tennis Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_15c962dd91eb4c8ab0a9095dcd31892e = L.marker(
                [-38.01553, 144.227951],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6bc328224023470383bdf434c92ae50f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15c962dd91eb4c8ab0a9095dcd31892e.setIcon(icon_6bc328224023470383bdf434c92ae50f);


            marker_15c962dd91eb4c8ab0a9095dcd31892e.bindTooltip(
                `<div>
                     Sutherlands Creek Tennis Reserve
                 </div>`,
                {"sticky": true}
            );


            var marker_655480e63b9b4e0daab547557dc7cc49 = L.marker(
                [-37.73994975, 142.022546],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_775419f565b8414cb605fbc959d8face = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_655480e63b9b4e0daab547557dc7cc49.setIcon(icon_775419f565b8414cb605fbc959d8face);


            marker_655480e63b9b4e0daab547557dc7cc49.bindTooltip(
                `<div>
                     melville oval playground
                 </div>`,
                {"sticky": true}
            );


            var marker_963e170d442e4962986470c036bc2825 = L.marker(
                [-37.7475818, 142.0240087],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_87de321e36dd4489b6755b97608a1f60 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_963e170d442e4962986470c036bc2825.setIcon(icon_87de321e36dd4489b6755b97608a1f60);


            marker_963e170d442e4962986470c036bc2825.bindTooltip(
                `<div>
                     botanic gardens playground
                 </div>`,
                {"sticky": true}
            );


            var marker_bc149be19de84ac68bfeb4b06a0ea360 = L.marker(
                [-37.75385163, 142.0319314],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8d954b4dfec046528f50f99d969907ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bc149be19de84ac68bfeb4b06a0ea360.setIcon(icon_8d954b4dfec046528f50f99d969907ed);


            marker_bc149be19de84ac68bfeb4b06a0ea360.bindTooltip(
                `<div>
                     mitchell park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_38a2696d528c4d03878075ef007b94a7 = L.marker(
                [-37.74775833, 142.03753590000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d399ee2e85b7435486c61f21e26db9b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38a2696d528c4d03878075ef007b94a7.setIcon(icon_d399ee2e85b7435486c61f21e26db9b7);


            marker_38a2696d528c4d03878075ef007b94a7.bindTooltip(
                `<div>
                     white ave playground
                 </div>`,
                {"sticky": true}
            );


            var marker_226040a9af344d71b07716e77e1492d2 = L.marker(
                [-37.74130653, 142.0355533],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b3c65e44e93b4259af3bf490e3029315 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_226040a9af344d71b07716e77e1492d2.setIcon(icon_b3c65e44e93b4259af3bf490e3029315);


            marker_226040a9af344d71b07716e77e1492d2.bindTooltip(
                `<div>
                     skate park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_908c394fa8314e3d9284daf343f08c0c = L.marker(
                [-37.74125159, 142.0442005],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b53c3b6b77924c1a8ce4884992e35bf7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_908c394fa8314e3d9284daf343f08c0c.setIcon(icon_b53c3b6b77924c1a8ce4884992e35bf7);


            marker_908c394fa8314e3d9284daf343f08c0c.bindTooltip(
                `<div>
                     kokoda ave playground
                 </div>`,
                {"sticky": true}
            );


            var marker_93b4287596124920a3aacccc38fcf0f7 = L.marker(
                [-37.73378715, 142.0384396],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d46ed2e47fe34540ac713888be743a07 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_93b4287596124920a3aacccc38fcf0f7.setIcon(icon_d46ed2e47fe34540ac713888be743a07);


            marker_93b4287596124920a3aacccc38fcf0f7.bindTooltip(
                `<div>
                     brumley park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_b5ac23df12b84abe8b59fb504e9927d0 = L.marker(
                [-37.737826399999996, 142.0428349],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_101af6be107f46dabbe7dcda3bea43fc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5ac23df12b84abe8b59fb504e9927d0.setIcon(icon_101af6be107f46dabbe7dcda3bea43fc);


            marker_b5ac23df12b84abe8b59fb504e9927d0.bindTooltip(
                `<div>
                     rasmussen ave playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9322bb92a35e4fbabb90cad10925870e = L.marker(
                [-37.73769051, 142.02940759999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a259a61c518a40999eec4beadc33a506 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9322bb92a35e4fbabb90cad10925870e.setIcon(icon_a259a61c518a40999eec4beadc33a506);


            marker_9322bb92a35e4fbabb90cad10925870e.bindTooltip(
                `<div>
                     bree park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_567d993593974331969c2f523f0facc8 = L.marker(
                [-37.73252665, 142.0258987],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f542ee14b8fd494f83b331b6b6e3c4a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_567d993593974331969c2f523f0facc8.setIcon(icon_f542ee14b8fd494f83b331b6b6e3c4a3);


            marker_567d993593974331969c2f523f0facc8.bindTooltip(
                `<div>
                     patterson park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9d5cad82071e4bbea532e6241dd4aece = L.marker(
                [-37.7255357, 142.02887009999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_80bd6d228ff14899a0d3ec0089b9fd88 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9d5cad82071e4bbea532e6241dd4aece.setIcon(icon_80bd6d228ff14899a0d3ec0089b9fd88);


            marker_9d5cad82071e4bbea532e6241dd4aece.bindTooltip(
                `<div>
                     pedrina park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_3147b6701bd14937a5a1a3bea74861b4 = L.marker(
                [-37.73516625, 142.0166135],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_35222662ef3146778e40b300834ce488 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3147b6701bd14937a5a1a3bea74861b4.setIcon(icon_35222662ef3146778e40b300834ce488);


            marker_3147b6701bd14937a5a1a3bea74861b4.bindTooltip(
                `<div>
                     victory park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d8bbfd4fff9c4892b147ee0b19eaaec6 = L.marker(
                [-37.74179546, 142.0164145],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c7877d3d1ea94fdab6e8a81807b86002 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d8bbfd4fff9c4892b147ee0b19eaaec6.setIcon(icon_c7877d3d1ea94fdab6e8a81807b86002);


            marker_d8bbfd4fff9c4892b147ee0b19eaaec6.bindTooltip(
                `<div>
                     hughan park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_11f6d114675048c89c0c2c4f2b202681 = L.marker(
                [-37.73043958, 142.0073333],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f7764951aa014c4cb616d0b1a4dac3c8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_11f6d114675048c89c0c2c4f2b202681.setIcon(icon_f7764951aa014c4cb616d0b1a4dac3c8);


            marker_11f6d114675048c89c0c2c4f2b202681.bindTooltip(
                `<div>
                     coleraine rd playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e829a9568497431087786743b6457f9f = L.marker(
                [-37.73427159, 142.0007392],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_27c47822f874401cb9bf5b399e5477ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e829a9568497431087786743b6457f9f.setIcon(icon_27c47822f874401cb9bf5b399e5477ab);


            marker_e829a9568497431087786743b6457f9f.bindTooltip(
                `<div>
                     quigley street playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7bf89c31ac1445d9b680a8d144089fa4 = L.marker(
                [-37.59709058, 141.694187],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c14156d7bf75451fb7a270a1a1049537 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7bf89c31ac1445d9b680a8d144089fa4.setIcon(icon_c14156d7bf75451fb7a270a1a1049537);


            marker_7bf89c31ac1445d9b680a8d144089fa4.bindTooltip(
                `<div>
                     turnbull street playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c46753d6a0654e9b9959c7f03c20b2c6 = L.marker(
                [-37.60149021, 141.69713240000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_99e411a8a4134d5892dac5a8ddcbe0a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c46753d6a0654e9b9959c7f03c20b2c6.setIcon(icon_99e411a8a4134d5892dac5a8ddcbe0a2);


            marker_c46753d6a0654e9b9959c7f03c20b2c6.bindTooltip(
                `<div>
                     coleraine vic playground
                 </div>`,
                {"sticky": true}
            );


            var marker_cad77ed6443440ceb8062362c17d1d4e = L.marker(
                [-37.87257274, 142.2908635],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_46a6e890fc6f4353924a6e785a331374 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cad77ed6443440ceb8062362c17d1d4e.setIcon(icon_46a6e890fc6f4353924a6e785a331374);


            marker_cad77ed6443440ceb8062362c17d1d4e.bindTooltip(
                `<div>
                     penshurst botanic gardens playground
                 </div>`,
                {"sticky": true}
            );


            var marker_32f92a9fd03e41748ab6795201cc1559 = L.marker(
                [-37.6363689, 142.5484944],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_62493a43c76243a3bbffbd0c8faba7f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_32f92a9fd03e41748ab6795201cc1559.setIcon(icon_62493a43c76243a3bbffbd0c8faba7f0);


            marker_32f92a9fd03e41748ab6795201cc1559.bindTooltip(
                `<div>
                     glenthompson lions park playground
                 </div>`,
                {"sticky": true}
            );


            var marker_9cb720a47ee4427cbb4196b4efc105e7 = L.marker(
                [-37.24717093, 141.8399898],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9e23bae47fbb4b5ca28d84193dc2f874 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9cb720a47ee4427cbb4196b4efc105e7.setIcon(icon_9e23bae47fbb4b5ca28d84193dc2f874);


            marker_9cb720a47ee4427cbb4196b4efc105e7.bindTooltip(
                `<div>
                     glendinning street playground
                 </div>`,
                {"sticky": true}
            );


            var marker_5d8f99e7caec4e57a2b93bbc598dfe12 = L.marker(
                [-37.52779537, 142.0403303],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_de79d19266394c2f94eaab9d389c9e77 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5d8f99e7caec4e57a2b93bbc598dfe12.setIcon(icon_de79d19266394c2f94eaab9d389c9e77);


            marker_5d8f99e7caec4e57a2b93bbc598dfe12.bindTooltip(
                `<div>
                     cavendish playground
                 </div>`,
                {"sticky": true}
            );


            var marker_c26791e33e6e40debde796516390db0b = L.marker(
                [-37.59453566, 141.69235759999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9fc4b436f87140529aa51ec2b027e75b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c26791e33e6e40debde796516390db0b.setIcon(icon_9fc4b436f87140529aa51ec2b027e75b);


            marker_c26791e33e6e40debde796516390db0b.bindTooltip(
                `<div>
                     silvester oval playground
                 </div>`,
                {"sticky": true}
            );


            var marker_679d307c27b9457b9851897664513076 = L.marker(
                [-37.73127928, 142.01639690000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5b0ba53f7ed34fd9a9f0dbbff6cb818b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_679d307c27b9457b9851897664513076.setIcon(icon_5b0ba53f7ed34fd9a9f0dbbff6cb818b);


            marker_679d307c27b9457b9851897664513076.bindTooltip(
                `<div>
                     hamilton rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_e3dcf473d6ca4af9ac3c2cb536c92906 = L.marker(
                [-37.85931998, 141.8034252],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_eb0776d7ad924feea34cdf43ada4fcee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e3dcf473d6ca4af9ac3c2cb536c92906.setIcon(icon_eb0776d7ad924feea34cdf43ada4fcee);


            marker_e3dcf473d6ca4af9ac3c2cb536c92906.bindTooltip(
                `<div>
                     branxholme rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_2b44c8edd4804c98ab90d88683d44d96 = L.marker(
                [-37.64080778, 142.54399899999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_90e99da54121411886d813f07e3c8d99 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2b44c8edd4804c98ab90d88683d44d96.setIcon(icon_90e99da54121411886d813f07e3c8d99);


            marker_2b44c8edd4804c98ab90d88683d44d96.bindTooltip(
                `<div>
                     glenthompson rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_842272440fbb421f81c1126355c187fd = L.marker(
                [-37.64977441, 142.3425948],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_57f1eb0ba8694d9c835f315b365a5add = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_842272440fbb421f81c1126355c187fd.setIcon(icon_57f1eb0ba8694d9c835f315b365a5add);


            marker_842272440fbb421f81c1126355c187fd.bindTooltip(
                `<div>
                     dunkeld memorial parkl playground
                 </div>`,
                {"sticky": true}
            );


            var marker_7b40eb2655cc480b8f98053c3d4322b1 = L.marker(
                [-37.76675088, 142.09809119999997],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e0c2c95c1abe4c539a9289b8408cb15f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7b40eb2655cc480b8f98053c3d4322b1.setIcon(icon_e0c2c95c1abe4c539a9289b8408cb15f);


            marker_7b40eb2655cc480b8f98053c3d4322b1.bindTooltip(
                `<div>
                     tarrington rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d144bd7716034fa39028527c79572c04 = L.marker(
                [-37.73329987, 142.0446242],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8fc4ef95f2a44d20a83d973a9f07b7c6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d144bd7716034fa39028527c79572c04.setIcon(icon_8fc4ef95f2a44d20a83d973a9f07b7c6);


            marker_d144bd7716034fa39028527c79572c04.bindTooltip(
                `<div>
                     l.e.a.p. playground
                 </div>`,
                {"sticky": true}
            );


            var marker_917073f0f92e4c60b344207eb157ccf2 = L.marker(
                [-37.73472702, 142.037353],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a4fe09ebb21345618ff44e1317f15ccf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_917073f0f92e4c60b344207eb157ccf2.setIcon(icon_a4fe09ebb21345618ff44e1317f15ccf);


            marker_917073f0f92e4c60b344207eb157ccf2.bindTooltip(
                `<div>
                     health station 7/8 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_6fc5fffb9d17412cb4ba9612665295c8 = L.marker(
                [-37.73131703, 142.042135],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8cc05e2c73b444c1b401857afcad581c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6fc5fffb9d17412cb4ba9612665295c8.setIcon(icon_8cc05e2c73b444c1b401857afcad581c);


            marker_6fc5fffb9d17412cb4ba9612665295c8.bindTooltip(
                `<div>
                     health station 11/12 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_d8f946e3395742299f9b287f65bad367 = L.marker(
                [-37.73310211, 142.0489844],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7adf417caaf54aa395687fe507a2c14e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d8f946e3395742299f9b287f65bad367.setIcon(icon_7adf417caaf54aa395687fe507a2c14e);


            marker_d8f946e3395742299f9b287f65bad367.bindTooltip(
                `<div>
                     health station 3/4 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_01383cc56bfb4d8d922eb90d80ef9557 = L.marker(
                [-37.73823296, 142.03966499999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_496a6291ef7c4c598cb7f9fd4b6aa0a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_01383cc56bfb4d8d922eb90d80ef9557.setIcon(icon_496a6291ef7c4c598cb7f9fd4b6aa0a2);


            marker_01383cc56bfb4d8d922eb90d80ef9557.bindTooltip(
                `<div>
                     health station 1/2 playground
                 </div>`,
                {"sticky": true}
            );


            var marker_a93c7978af6e4ef2be30b95d21bf37f9 = L.marker(
                [-37.73300878, 142.04525900000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_350d1036ec8f4c87b5dbccd5e5d4423a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a93c7978af6e4ef2be30b95d21bf37f9.setIcon(icon_350d1036ec8f4c87b5dbccd5e5d4423a);


            marker_a93c7978af6e4ef2be30b95d21bf37f9.bindTooltip(
                `<div>
                     lake hamilton - health station 3 way playground
                 </div>`,
                {"sticky": true}
            );


            var marker_8b00c8cba00f44a9b462fdd0077a93b2 = L.marker(
                [-37.87082739, 142.29935559999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2fe342339e3a45608dc6481f9cabdb50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8b00c8cba00f44a9b462fdd0077a93b2.setIcon(icon_2fe342339e3a45608dc6481f9cabdb50);


            marker_8b00c8cba00f44a9b462fdd0077a93b2.bindTooltip(
                `<div>
                     penshurst rec reserve playground
                 </div>`,
                {"sticky": true}
            );


            var marker_1f6106854dfa40788da030c2985d2bd9 = L.marker(
                [-36.718084000000005, 142.200904],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4105f4d8fad24c989cd87dbfa2e3f35b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f6106854dfa40788da030c2985d2bd9.setIcon(icon_4105f4d8fad24c989cd87dbfa2e3f35b);


            marker_1f6106854dfa40788da030c2985d2bd9.bindTooltip(
                `<div>
                     Horsham Aquatic Centre
                 </div>`,
                {"sticky": true}
            );


            var marker_193d5555800a45aca0b122f3148e5764 = L.marker(
                [-37.66667, 145.06667],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_89e1a38cbaf446faa5fdab3281810672 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_193d5555800a45aca0b122f3148e5764.setIcon(icon_89e1a38cbaf446faa5fdab3281810672);


            marker_193d5555800a45aca0b122f3148e5764.bindTooltip(
                `<div>
                     Mill park
                 </div>`,
                {"sticky": true}
            );


            var marker_de8efb79215e44f2af84040c35e53bf3 = L.marker(
                [-37.822959999999995, 144.979401],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d003193f4f2847c5901a34d0d05158c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de8efb79215e44f2af84040c35e53bf3.setIcon(icon_d003193f4f2847c5901a34d0d05158c7);


            marker_de8efb79215e44f2af84040c35e53bf3.bindTooltip(
                `<div>
                     Melbourne Park
                 </div>`,
                {"sticky": true}
            );


            var marker_eb9972d335ba4b988baf579cfa7cfb7f = L.marker(
                [-34.876269, 138.731425],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_49c613a2724648778235479294164d47 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eb9972d335ba4b988baf579cfa7cfb7f.setIcon(icon_49c613a2724648778235479294164d47);


            marker_eb9972d335ba4b988baf579cfa7cfb7f.bindTooltip(
                `<div>
                     Black hill
                 </div>`,
                {"sticky": true}
            );


            var marker_e465219151dc4fbbbafbc625da68ef10 = L.marker(
                [-34.964381, 138.695346],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3fa85695025848d2b127e34091477670 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e465219151dc4fbbbafbc625da68ef10.setIcon(icon_3fa85695025848d2b127e34091477670);


            marker_e465219151dc4fbbbafbc625da68ef10.bindTooltip(
                `<div>
                     Cleland Conservation Park
                 </div>`,
                {"sticky": true}
            );


            var marker_9dbef936e3584c47868f28127ff6fd07 = L.marker(
                [-34.987351000000004, 138.711514],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_133c78b950074bc296e5f09ccf3941cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9dbef936e3584c47868f28127ff6fd07.setIcon(icon_133c78b950074bc296e5f09ccf3941cf);


            marker_9dbef936e3584c47868f28127ff6fd07.bindTooltip(
                `<div>
                     Mount Lofty Botanic gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_578da9db1f6348439a4bba6c055bde1c = L.marker(
                [-34.9294, 138.67924],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d14ced3294bd453799da8cbd9619c1f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_578da9db1f6348439a4bba6c055bde1c.setIcon(icon_d14ced3294bd453799da8cbd9619c1f2);


            marker_578da9db1f6348439a4bba6c055bde1c.bindTooltip(
                `<div>
                     Wattle Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5494fe28233640508157ec0529a4a5b1 = L.marker(
                [-34.999739, 138.56748100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4dbe3e85145a4d0aa7c0909f0342e7e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5494fe28233640508157ec0529a4a5b1.setIcon(icon_4dbe3e85145a4d0aa7c0909f0342e7e9);


            marker_5494fe28233640508157ec0529a4a5b1.bindTooltip(
                `<div>
                     Clovelly Park
                 </div>`,
                {"sticky": true}
            );


            var marker_b109b1757b194666913f46c2c2838825 = L.marker(
                [-35.00705, 138.56610700000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8b74c318dbaa499cabc95fbc87700091 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b109b1757b194666913f46c2c2838825.setIcon(icon_8b74c318dbaa499cabc95fbc87700091);


            marker_b109b1757b194666913f46c2c2838825.bindTooltip(
                `<div>
                     Mitchell Park
                 </div>`,
                {"sticky": true}
            );


            var marker_321c50c87c6149239341b89baa2cc45f = L.marker(
                [-35.024765, 138.57126100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_62534aef4d2944ae9a2556e7e203103a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_321c50c87c6149239341b89baa2cc45f.setIcon(icon_62534aef4d2944ae9a2556e7e203103a);


            marker_321c50c87c6149239341b89baa2cc45f.bindTooltip(
                `<div>
                     Bedford Prark
                 </div>`,
                {"sticky": true}
            );


            var marker_053372a30ff345b79bb21b0aaedcb70b = L.marker(
                [-34.871677000000005, 138.508038],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bc21f9eb5a35439ca04316566f856379 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_053372a30ff345b79bb21b0aaedcb70b.setIcon(icon_bc21f9eb5a35439ca04316566f856379);


            marker_053372a30ff345b79bb21b0aaedcb70b.bindTooltip(
                `<div>
                     Royal Park
                 </div>`,
                {"sticky": true}
            );


            var marker_99bc1f3c62cb49f394ee0a0264046452 = L.marker(
                [-34.857592, 138.551047],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_96b8d04d6c6a4e0aa49088a35c2b01a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_99bc1f3c62cb49f394ee0a0264046452.setIcon(icon_96b8d04d6c6a4e0aa49088a35c2b01a7);


            marker_99bc1f3c62cb49f394ee0a0264046452.bindTooltip(
                `<div>
                     Mansfield Park
                 </div>`,
                {"sticky": true}
            );


            var marker_5d58e0b2cad84af69a599f1787a75d4c = L.marker(
                [-34.682739, 138.832333],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5f84ef0735b4410abc096b21da4073a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5d58e0b2cad84af69a599f1787a75d4c.setIcon(icon_5f84ef0735b4410abc096b21da4073a8);


            marker_5d58e0b2cad84af69a599f1787a75d4c.bindTooltip(
                `<div>
                     Para wirra conservation park
                 </div>`,
                {"sticky": true}
            );


            var marker_2d95a161200d49da9aec71967b75bc28 = L.marker(
                [-34.721408000000004, 138.90586399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_55f7f005d794405d99ed0bdd729bd28b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2d95a161200d49da9aec71967b75bc28.setIcon(icon_55f7f005d794405d99ed0bdd729bd28b);


            marker_2d95a161200d49da9aec71967b75bc28.bindTooltip(
                `<div>
                     Warren park
                 </div>`,
                {"sticky": true}
            );


            var marker_7b9a900b53344e5d9013ff74df234ef3 = L.marker(
                [-34.481188, 138.98973],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3f1dd844f0a8494f9fcf607c1aaaca73 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7b9a900b53344e5d9013ff74df234ef3.setIcon(icon_3f1dd844f0a8494f9fcf607c1aaaca73);


            marker_7b9a900b53344e5d9013ff74df234ef3.bindTooltip(
                `<div>
                     Beckwith park
                 </div>`,
                {"sticky": true}
            );


            var marker_7bdbd197338f43c68689e7ac7d1e1f1b = L.marker(
                [-34.611764, 138.859756],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f5a91217fab74ab7af0faaaad1502f47 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7bdbd197338f43c68689e7ac7d1e1f1b.setIcon(icon_f5a91217fab74ab7af0faaaad1502f47);


            marker_7bdbd197338f43c68689e7ac7d1e1f1b.bindTooltip(
                `<div>
                     Sandy creek park
                 </div>`,
                {"sticky": true}
            );


            var marker_71ebc24d180b44deab3def735d11d648 = L.marker(
                [-34.766090999999996, 138.810976],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c075bc63f15b4a3f95f2dfedd25c9393 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71ebc24d180b44deab3def735d11d648.setIcon(icon_c075bc63f15b4a3f95f2dfedd25c9393);


            marker_71ebc24d180b44deab3def735d11d648.bindTooltip(
                `<div>
                     Mount crawford park
                 </div>`,
                {"sticky": true}
            );


            var marker_41b0b1309d53497cb0d83d0f7de4dcc3 = L.marker(
                [-34.987590000000004, 138.77656100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_751dfa4de2044fc4a7fe9e25b5f89cd9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41b0b1309d53497cb0d83d0f7de4dcc3.setIcon(icon_751dfa4de2044fc4a7fe9e25b5f89cd9);


            marker_41b0b1309d53497cb0d83d0f7de4dcc3.bindTooltip(
                `<div>
                     Kenneth park
                 </div>`,
                {"sticky": true}
            );


            var marker_692eb6580efa49bfa7fc7afeed6e7400 = L.marker(
                [-35.034943, 138.70390700000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9f843f70aea34bbea05cd72da492c1d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_692eb6580efa49bfa7fc7afeed6e7400.setIcon(icon_9f843f70aea34bbea05cd72da492c1d1);


            marker_692eb6580efa49bfa7fc7afeed6e7400.bindTooltip(
                `<div>
                     Mark oliphant park
                 </div>`,
                {"sticky": true}
            );


            var marker_d7e08140646d45e7a5ca7c8d06ad00aa = L.marker(
                [-35.085837, 138.691599],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_05c295c5bed0492b9bc2e575797b3805 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7e08140646d45e7a5ca7c8d06ad00aa.setIcon(icon_05c295c5bed0492b9bc2e575797b3805);


            marker_d7e08140646d45e7a5ca7c8d06ad00aa.bindTooltip(
                `<div>
                     Scott creek park
                 </div>`,
                {"sticky": true}
            );


            var marker_8fc6dcc731e94e96b20a9b97407d973d = L.marker(
                [-35.085837, 138.691599],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fc67c0bd8af64d3cbd9e944f30199cc2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8fc6dcc731e94e96b20a9b97407d973d.setIcon(icon_fc67c0bd8af64d3cbd9e944f30199cc2);


            marker_8fc6dcc731e94e96b20a9b97407d973d.bindTooltip(
                `<div>
                     Onkaparinga river national park
                 </div>`,
                {"sticky": true}
            );


            var marker_db8152252e054214b1f1f924834aa701 = L.marker(
                [-35.264878, 138.67926599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d952fbd6fff44afc954d50b384f3ac6f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db8152252e054214b1f1f924834aa701.setIcon(icon_d952fbd6fff44afc954d50b384f3ac6f);


            marker_db8152252e054214b1f1f924834aa701.bindTooltip(
                `<div>
                     Kyeema park
                 </div>`,
                {"sticky": true}
            );


            var marker_3580b2ec90da478fad0d81c14bec8f91 = L.marker(
                [-35.936633, 139.504928],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_df60626d0c7742e49c30a256bec73fbb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3580b2ec90da478fad0d81c14bec8f91.setIcon(icon_df60626d0c7742e49c30a256bec73fbb);


            marker_3580b2ec90da478fad0d81c14bec8f91.bindTooltip(
                `<div>
                     Coorong national park
                 </div>`,
                {"sticky": true}
            );


            var marker_584da7ee5ea14e4e892f265b9babd8d7 = L.marker(
                [-35.797278999999996, 140.637187],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_94acfe07b6364658af24bed9e87da992 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_584da7ee5ea14e4e892f265b9babd8d7.setIcon(icon_94acfe07b6364658af24bed9e87da992);


            marker_584da7ee5ea14e4e892f265b9babd8d7.bindTooltip(
                `<div>
                     Nagarkat park
                 </div>`,
                {"sticky": true}
            );


            var marker_d7406ce97abc40888a6dac455dc27f7c = L.marker(
                [-35.623326, 141.142969],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3163def2d6044fa7a3ace2ee9bfd9d8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d7406ce97abc40888a6dac455dc27f7c.setIcon(icon_3163def2d6044fa7a3ace2ee9bfd9d8b);


            marker_d7406ce97abc40888a6dac455dc27f7c.bindTooltip(
                `<div>
                     Big desert wilderness park
                 </div>`,
                {"sticky": true}
            );


            var marker_a93b62d20eac427bb7efbebb9ec246dc = L.marker(
                [-35.600997, 141.79140800000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0029941d8f5a46fc9b7eca4ab76c547e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a93b62d20eac427bb7efbebb9ec246dc.setIcon(icon_0029941d8f5a46fc9b7eca4ab76c547e);


            marker_a93b62d20eac427bb7efbebb9ec246dc.bindTooltip(
                `<div>
                     Wyperfeld national park
                 </div>`,
                {"sticky": true}
            );


            var marker_8c00e5449c0b4bd887aea055535ddf0c = L.marker(
                [-36.555499, 141.46155],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_76afb363904d45ac8d08f29544877179 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8c00e5449c0b4bd887aea055535ddf0c.setIcon(icon_76afb363904d45ac8d08f29544877179);


            marker_8c00e5449c0b4bd887aea055535ddf0c.bindTooltip(
                `<div>
                     Little desert national park
                 </div>`,
                {"sticky": true}
            );


            var marker_db30773137a848caa43717690c3a9dc8 = L.marker(
                [-37.274266, 141.182779],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0bf5cad24d542509581734a0d0954ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db30773137a848caa43717690c3a9dc8.setIcon(icon_f0bf5cad24d542509581734a0d0954ab);


            marker_db30773137a848caa43717690c3a9dc8.bindTooltip(
                `<div>
                     Dergholm state park
                 </div>`,
                {"sticky": true}
            );


            var marker_45045f62ba9a44e6bebecf2abb63c069 = L.marker(
                [-38.027963, 141.110129],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b33d71e7bd8341928e2775b0c622447f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_45045f62ba9a44e6bebecf2abb63c069.setIcon(icon_b33d71e7bd8341928e2775b0c622447f);


            marker_45045f62ba9a44e6bebecf2abb63c069.bindTooltip(
                `<div>
                     Lower glenelg national park
                 </div>`,
                {"sticky": true}
            );


            var marker_b18f7eb7aae7461b8610ddccecca5a1f = L.marker(
                [-38.095001, 141.43448899999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ffa14ed3f78e4a23abe4ae74ceeefe51 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b18f7eb7aae7461b8610ddccecca5a1f.setIcon(icon_ffa14ed3f78e4a23abe4ae74ceeefe51);


            marker_b18f7eb7aae7461b8610ddccecca5a1f.bindTooltip(
                `<div>
                     Cobboboonee national park
                 </div>`,
                {"sticky": true}
            );


            var marker_2ad75ad336e34888a9b8a92f813f1ef1 = L.marker(
                [-38.087435, 141.893541],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1384e5929b914ce8ab705ee57fc0f14b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ad75ad336e34888a9b8a92f813f1ef1.setIcon(icon_1384e5929b914ce8ab705ee57fc0f14b);


            marker_2ad75ad336e34888a9b8a92f813f1ef1.bindTooltip(
                `<div>
                     Budj bim national park
                 </div>`,
                {"sticky": true}
            );


            var marker_ef8563b6364d41e58ee7cbc3053e382d = L.marker(
                [-38.226735, 141.320413],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_457ed2c5cc484168ac8b22242e6bf7e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ef8563b6364d41e58ee7cbc3053e382d.setIcon(icon_457ed2c5cc484168ac8b22242e6bf7e2);


            marker_ef8563b6364d41e58ee7cbc3053e382d.bindTooltip(
                `<div>
                     Discovery bay coastal park
                 </div>`,
                {"sticky": true}
            );


            var marker_0659ca2044dc4e36ad6d614361254c0f = L.marker(
                [-37.15965, 142.074963],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ff31141c885f4a8cadc42f8c1ec9ea0b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0659ca2044dc4e36ad6d614361254c0f.setIcon(icon_ff31141c885f4a8cadc42f8c1ec9ea0b);


            marker_0659ca2044dc4e36ad6d614361254c0f.bindTooltip(
                `<div>
                     Black range state park
                 </div>`,
                {"sticky": true}
            );


            var marker_abc208b2401c498fa988f4b4d4f3f25e = L.marker(
                [-37.364035, 142.298991],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1ab7b889004a4e478b6e9f6fdbac4577 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_abc208b2401c498fa988f4b4d4f3f25e.setIcon(icon_1ab7b889004a4e478b6e9f6fdbac4577);


            marker_abc208b2401c498fa988f4b4d4f3f25e.bindTooltip(
                `<div>
                     Grampiansnational park
                 </div>`,
                {"sticky": true}
            );


            var marker_f3ef24939f9b490e8dcc2296dac17a62 = L.marker(
                [-36.855878999999995, 143.277569],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e0e902c219c44d3e8be996fddfc9edcb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f3ef24939f9b490e8dcc2296dac17a62.setIcon(icon_e0e902c219c44d3e8be996fddfc9edcb);


            marker_f3ef24939f9b490e8dcc2296dac17a62.bindTooltip(
                `<div>
                     Kara kara national park
                 </div>`,
                {"sticky": true}
            );


            var marker_05896b7eb50e497a8a9f24d08f94bb8b = L.marker(
                [-36.597217, 143.710507],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dcc70a2c05094b7abb7708eec3e07c33 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_05896b7eb50e497a8a9f24d08f94bb8b.setIcon(icon_dcc70a2c05094b7abb7708eec3e07c33);


            marker_05896b7eb50e497a8a9f24d08f94bb8b.bindTooltip(
                `<div>
                     Kooyooro state park
                 </div>`,
                {"sticky": true}
            );


            var marker_cefe1406d2da4110b23e5a7d4c185e52 = L.marker(
                [-37.531071999999995, 143.855741],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_21f030fc8a0942d48a9f7eda54aa8cc0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cefe1406d2da4110b23e5a7d4c185e52.setIcon(icon_21f030fc8a0942d48a9f7eda54aa8cc0);


            marker_cefe1406d2da4110b23e5a7d4c185e52.bindTooltip(
                `<div>
                     Invermay park
                 </div>`,
                {"sticky": true}
            );


            var marker_6f7c3a9bddd64ad294a65ebb8da3c956 = L.marker(
                [-37.764307, 143.742947],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_050ddd3bed1a4f5cb819e92853af92e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f7c3a9bddd64ad294a65ebb8da3c956.setIcon(icon_050ddd3bed1a4f5cb819e92853af92e1);


            marker_6f7c3a9bddd64ad294a65ebb8da3c956.bindTooltip(
                `<div>
                     Enfield state park
                 </div>`,
                {"sticky": true}
            );


            var marker_7fdf27856e32481da5e89bd69299568d = L.marker(
                [-38.4368, 143.658916],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_05e8c170dcb34de18f6ee9fc51fe5f0b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fdf27856e32481da5e89bd69299568d.setIcon(icon_05e8c170dcb34de18f6ee9fc51fe5f0b);


            marker_7fdf27856e32481da5e89bd69299568d.bindTooltip(
                `<div>
                     Otway forest park
                 </div>`,
                {"sticky": true}
            );


            var marker_443fee5541ab497e9d743e6ae995d803 = L.marker(
                [-38.5969, 143.854082],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b810890842844154812fb1e9e7a87e30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_443fee5541ab497e9d743e6ae995d803.setIcon(icon_b810890842844154812fb1e9e7a87e30);


            marker_443fee5541ab497e9d743e6ae995d803.bindTooltip(
                `<div>
                     Great otway national park
                 </div>`,
                {"sticky": true}
            );


            var marker_6080916058a04638b515d217446be512 = L.marker(
                [-37.745955, 144.27203500000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d4b456e3db8e4d42b5ec8d5edc58c1e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6080916058a04638b515d217446be512.setIcon(icon_d4b456e3db8e4d42b5ec8d5edc58c1e8);


            marker_6080916058a04638b515d217446be512.bindTooltip(
                `<div>
                     Brisbane ranges national park
                 </div>`,
                {"sticky": true}
            );


            var marker_772f760eacee413c9fab6dc25cda13d0 = L.marker(
                [-37.547512, 144.404526],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8efa7521cf8c443c8b4156c67fe0ab12 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_772f760eacee413c9fab6dc25cda13d0.setIcon(icon_8efa7521cf8c443c8b4156c67fe0ab12);


            marker_772f760eacee413c9fab6dc25cda13d0.bindTooltip(
                `<div>
                     Lerderderg state park
                 </div>`,
                {"sticky": true}
            );


            var marker_3fb80331f6ad46c68e069055817ddb7d = L.marker(
                [-37.39618, 144.624915],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_55facfc74be7409290005ce38b16f262 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3fb80331f6ad46c68e069055817ddb7d.setIcon(icon_55facfc74be7409290005ce38b16f262);


            marker_3fb80331f6ad46c68e069055817ddb7d.bindTooltip(
                `<div>
                     Macedon regional park
                 </div>`,
                {"sticky": true}
            );


            var marker_8ec51b8d0b11419c9d650eb26d2f2468 = L.marker(
                [-37.677405, 144.765448],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1d58ca46afe349c490db174668a494a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ec51b8d0b11419c9d650eb26d2f2468.setIcon(icon_1d58ca46afe349c490db174668a494a3);


            marker_8ec51b8d0b11419c9d650eb26d2f2468.bindTooltip(
                `<div>
                     Clader park
                 </div>`,
                {"sticky": true}
            );


            var marker_edc45555eb294d0c846f602067ab4387 = L.marker(
                [-37.649956, 144.85169199999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_210c4836849449b4855c8a6d1778ce5a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_edc45555eb294d0c846f602067ab4387.setIcon(icon_210c4836849449b4855c8a6d1778ce5a);


            marker_edc45555eb294d0c846f602067ab4387.bindTooltip(
                `<div>
                     Woodlands historic park
                 </div>`,
                {"sticky": true}
            );


            var marker_19c4fb179b6445ddbe783021d9baec54 = L.marker(
                [-37.660775, 144.355534],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ed98be8794624545b9d612af2c714936 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_19c4fb179b6445ddbe783021d9baec54.setIcon(icon_ed98be8794624545b9d612af2c714936);


            marker_19c4fb179b6445ddbe783021d9baec54.bindTooltip(
                `<div>
                     Werribee gorge state park
                 </div>`,
                {"sticky": true}
            );


            var marker_5aee715174e54407b9eac5ae1ee044a4 = L.marker(
                [-37.893874, 144.79773],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_646cc35c801d4766b818b4446c08f319 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5aee715174e54407b9eac5ae1ee044a4.setIcon(icon_646cc35c801d4766b818b4446c08f319);


            marker_5aee715174e54407b9eac5ae1ee044a4.bindTooltip(
                `<div>
                     Point cook park
                 </div>`,
                {"sticky": true}
            );


            var marker_1a2773ec592942a2936c2e5cd1694e67 = L.marker(
                [-37.966172, 145.050004],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3ca5b6c124e84e3ea8b297399ca22906 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a2773ec592942a2936c2e5cd1694e67.setIcon(icon_3ca5b6c124e84e3ea8b297399ca22906);


            marker_1a2773ec592942a2936c2e5cd1694e67.bindTooltip(
                `<div>
                     Cheltenham park
                 </div>`,
                {"sticky": true}
            );


            var marker_697b6dddb17d4050a221086802d4372c = L.marker(
                [-37.95636, 145.130097],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f858d2341bb54f4d948708e2d162c787 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_697b6dddb17d4050a221086802d4372c.setIcon(icon_f858d2341bb54f4d948708e2d162c787);


            marker_697b6dddb17d4050a221086802d4372c.bindTooltip(
                `<div>
                     Heatherton park
                 </div>`,
                {"sticky": true}
            );


            var marker_ce84e65df30545c98aab3e4bed14fd3e = L.marker(
                [-37.935986, 145.124771],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8471aeac7f984ff7a0042769587b5ef1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ce84e65df30545c98aab3e4bed14fd3e.setIcon(icon_8471aeac7f984ff7a0042769587b5ef1);


            marker_ce84e65df30545c98aab3e4bed14fd3e.bindTooltip(
                `<div>
                     Keeley park
                 </div>`,
                {"sticky": true}
            );


            var marker_c57bd02a34e14090b3669f28b4429ad4 = L.marker(
                [-37.933008, 145.110515],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9912ac82b28f4abcb70eca578869d017 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c57bd02a34e14090b3669f28b4429ad4.setIcon(icon_9912ac82b28f4abcb70eca578869d017);


            marker_c57bd02a34e14090b3669f28b4429ad4.bindTooltip(
                `<div>
                     Namatjira park
                 </div>`,
                {"sticky": true}
            );


            var marker_f3f589b372d44b9395e8aebc5758ffa7 = L.marker(
                [-37.932373999999996, 145.104771],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_903b19dd6ab340328dd12c86a5cc3c38 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f3f589b372d44b9395e8aebc5758ffa7.setIcon(icon_903b19dd6ab340328dd12c86a5cc3c38);


            marker_f3f589b372d44b9395e8aebc5758ffa7.bindTooltip(
                `<div>
                     Bald hill park
                 </div>`,
                {"sticky": true}
            );


            var marker_da476a48b72b423e8f80877301d1a33b = L.marker(
                [-37.901072, 145.058458],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_10a6f4e47db44b009793f6a3dda9ea4f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_da476a48b72b423e8f80877301d1a33b.setIcon(icon_10a6f4e47db44b009793f6a3dda9ea4f);


            marker_da476a48b72b423e8f80877301d1a33b.bindTooltip(
                `<div>
                     Packer park
                 </div>`,
                {"sticky": true}
            );


            var marker_9b25da4de3d5428f9a4d3f0f045a6cd4 = L.marker(
                [-37.894942, 145.054372],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e89acf5ebf494725970a717a540ef6c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9b25da4de3d5428f9a4d3f0f045a6cd4.setIcon(icon_e89acf5ebf494725970a717a540ef6c4);


            marker_9b25da4de3d5428f9a4d3f0f045a6cd4.bindTooltip(
                `<div>
                     Koornang park
                 </div>`,
                {"sticky": true}
            );


            var marker_8b1d09c7dfb14ba9841a86a8b23c6a62 = L.marker(
                [-37.885822999999995, 145.039486],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_99a70e48cec147e7b1fcd97f21bcdd85 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8b1d09c7dfb14ba9841a86a8b23c6a62.setIcon(icon_99a70e48cec147e7b1fcd97f21bcdd85);


            marker_8b1d09c7dfb14ba9841a86a8b23c6a62.bindTooltip(
                `<div>
                     Glen huntly park
                 </div>`,
                {"sticky": true}
            );


            var marker_a23605dc5b034db6b06bd1159bb05cbf = L.marker(
                [-37.889713, 144.993659],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2f86f565178c4e2983d8f81e210e663a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a23605dc5b034db6b06bd1159bb05cbf.setIcon(icon_2f86f565178c4e2983d8f81e210e663a);


            marker_a23605dc5b034db6b06bd1159bb05cbf.bindTooltip(
                `<div>
                     Elsternwick park
                 </div>`,
                {"sticky": true}
            );


            var marker_f12563ff418546f08adfe661052359ca = L.marker(
                [-37.871896, 145.029302],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_663dd76dec2d4a299d44bae3dd88454c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f12563ff418546f08adfe661052359ca.setIcon(icon_663dd76dec2d4a299d44bae3dd88454c);


            marker_f12563ff418546f08adfe661052359ca.bindTooltip(
                `<div>
                     Caulfielf park
                 </div>`,
                {"sticky": true}
            );


            var marker_fe68baa01d60463d8fa40cfb52214ba0 = L.marker(
                [-37.81413, 145.078575],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ae11042c807f4cd19aed1581af11f3c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fe68baa01d60463d8fa40cfb52214ba0.setIcon(icon_ae11042c807f4cd19aed1581af11f3c3);


            marker_fe68baa01d60463d8fa40cfb52214ba0.bindTooltip(
                `<div>
                     Balwyn park
                 </div>`,
                {"sticky": true}
            );


            var marker_6f04c8d67cd8406783ddb58b6336aa56 = L.marker(
                [-37.810418, 145.092369],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_682495de7411493ea1f31e4af2d51646 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6f04c8d67cd8406783ddb58b6336aa56.setIcon(icon_682495de7411493ea1f31e4af2d51646);


            marker_6f04c8d67cd8406783ddb58b6336aa56.bindTooltip(
                `<div>
                     Beckett park
                 </div>`,
                {"sticky": true}
            );


            var marker_8914d70a796f4ffa89b783ccbdb8913c = L.marker(
                [-37.797996999999995, 145.094212],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9df19a59c50e44acb15f13dafc2240f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8914d70a796f4ffa89b783ccbdb8913c.setIcon(icon_9df19a59c50e44acb15f13dafc2240f2);


            marker_8914d70a796f4ffa89b783ccbdb8913c.bindTooltip(
                `<div>
                     Greythorn park
                 </div>`,
                {"sticky": true}
            );


            var marker_66e5bc4a94844f61ac6ee45288786a9b = L.marker(
                [-37.800540000000005, 145.07394],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9cd3f9c7c5944056b4eefcdf356c9973 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66e5bc4a94844f61ac6ee45288786a9b.setIcon(icon_9cd3f9c7c5944056b4eefcdf356c9973);


            marker_66e5bc4a94844f61ac6ee45288786a9b.bindTooltip(
                `<div>
                     Macleay park
                 </div>`,
                {"sticky": true}
            );


            var marker_ab46ef6aaba84346ad5e8b2a19d0c127 = L.marker(
                [-37.774934, 145.07407],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_0584db10bf0840438179cc665bfd936b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ab46ef6aaba84346ad5e8b2a19d0c127.setIcon(icon_0584db10bf0840438179cc665bfd936b);


            marker_ab46ef6aaba84346ad5e8b2a19d0c127.bindTooltip(
                `<div>
                     Bulleen park
                 </div>`,
                {"sticky": true}
            );


            var marker_8b032763a8f641e4a75b908f9eea98a9 = L.marker(
                [-37.757056, 145.080827],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c136a8133e3f4c05970c9dbdd884daae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8b032763a8f641e4a75b908f9eea98a9.setIcon(icon_c136a8133e3f4c05970c9dbdd884daae);


            marker_8b032763a8f641e4a75b908f9eea98a9.bindTooltip(
                `<div>
                     Banksia park
                 </div>`,
                {"sticky": true}
            );


            var marker_af6192d2a03a4636b336e89b535c8026 = L.marker(
                [-37.75278, 145.09702],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8d0f2c7b2645449295baa0c243f5b011 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_af6192d2a03a4636b336e89b535c8026.setIcon(icon_8d0f2c7b2645449295baa0c243f5b011);


            marker_af6192d2a03a4636b336e89b535c8026.bindTooltip(
                `<div>
                     Birrarrung park
                 </div>`,
                {"sticky": true}
            );


            var marker_03507cb476ae432f84ad47eda937383f = L.marker(
                [-37.745994, 145.128007],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d7919facb8b049539bc55704f1694d3c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_03507cb476ae432f84ad47eda937383f.setIcon(icon_d7919facb8b049539bc55704f1694d3c);


            marker_03507cb476ae432f84ad47eda937383f.bindTooltip(
                `<div>
                     Westerfolds park
                 </div>`,
                {"sticky": true}
            );


            var marker_9223b5271247448d87c523bad2a0c8b8 = L.marker(
                [-37.743449, 145.140549],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_11fa5669a48d418aa9b7cb8cfa77c48d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9223b5271247448d87c523bad2a0c8b8.setIcon(icon_11fa5669a48d418aa9b7cb8cfa77c48d);


            marker_9223b5271247448d87c523bad2a0c8b8.bindTooltip(
                `<div>
                     Candlebark park
                 </div>`,
                {"sticky": true}
            );


            var marker_7262c062b32649a89d72253c3f0b93bc = L.marker(
                [-37.735996, 145.20555],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_647cd7b577ae40fb85cb22c3fbef1086 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7262c062b32649a89d72253c3f0b93bc.setIcon(icon_647cd7b577ae40fb85cb22c3fbef1086);


            marker_7262c062b32649a89d72253c3f0b93bc.bindTooltip(
                `<div>
                     Warrandyte state park
                 </div>`,
                {"sticky": true}
            );


            var marker_f9528596cbfc4d17a6c15837e26a3bcc = L.marker(
                [-37.758596000000004, 145.185537],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5786a810da1f437294546a93c525581f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f9528596cbfc4d17a6c15837e26a3bcc.setIcon(icon_5786a810da1f437294546a93c525581f);


            marker_f9528596cbfc4d17a6c15837e26a3bcc.bindTooltip(
                `<div>
                     Currawong bush park
                 </div>`,
                {"sticky": true}
            );


            var marker_80d40896a25d4c0ba0333c2cb8728596 = L.marker(
                [-37.781853000000005, 145.195097],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_40a215bdaff04676a2420a9e457776c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_80d40896a25d4c0ba0333c2cb8728596.setIcon(icon_40a215bdaff04676a2420a9e457776c9);


            marker_80d40896a25d4c0ba0333c2cb8728596.bindTooltip(
                `<div>
                     Mullum creek linear park
                 </div>`,
                {"sticky": true}
            );


            var marker_38e9fb0b10df432c95cc5640edece7c8 = L.marker(
                [-37.852641, 145.210476],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_17f2685656d840c39c8401077c29a666 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38e9fb0b10df432c95cc5640edece7c8.setIcon(icon_17f2685656d840c39c8401077c29a666);


            marker_38e9fb0b10df432c95cc5640edece7c8.bindTooltip(
                `<div>
                     Koomba park
                 </div>`,
                {"sticky": true}
            );


            var marker_9ced697aa82045e0807842d17afb5f08 = L.marker(
                [-37.870869, 145.190847],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2111849943db40f699fa2eaadc9686b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ced697aa82045e0807842d17afb5f08.setIcon(icon_2111849943db40f699fa2eaadc9686b8);


            marker_9ced697aa82045e0807842d17afb5f08.bindTooltip(
                `<div>
                     Bushy park
                 </div>`,
                {"sticky": true}
            );


            var marker_8017988eae614778b56cc1c2ac2befe5 = L.marker(
                [-37.900946000000005, 145.200817],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cbf12577d8dd4a7a908d77187fde30d0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8017988eae614778b56cc1c2ac2befe5.setIcon(icon_cbf12577d8dd4a7a908d77187fde30d0);


            marker_8017988eae614778b56cc1c2ac2befe5.bindTooltip(
                `<div>
                     Jells park
                 </div>`,
                {"sticky": true}
            );


            var marker_e0c9c54aca294a2cba2562db1a795de0 = L.marker(
                [-37.915296000000005, 145.18621399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9478ee12ccea4c1aa70d53ab77c194e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e0c9c54aca294a2cba2562db1a795de0.setIcon(icon_9478ee12ccea4c1aa70d53ab77c194e2);


            marker_e0c9c54aca294a2cba2562db1a795de0.bindTooltip(
                `<div>
                     Colunbia park
                 </div>`,
                {"sticky": true}
            );


            var marker_58af251b4ce44413af2d609501eed90a = L.marker(
                [-38.06625, 145.191685],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_65dfd6a5bc954c9080ad75cee93847c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_58af251b4ce44413af2d609501eed90a.setIcon(icon_65dfd6a5bc954c9080ad75cee93847c7);


            marker_58af251b4ce44413af2d609501eed90a.bindTooltip(
                `<div>
                     Bunurong memorial park
                 </div>`,
                {"sticky": true}
            );


            var marker_1090039b89a747358fe379e9b9865800 = L.marker(
                [-38.173615000000005, 145.160347],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ec0cc48c4a234d84b46c8e66bad74e4e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1090039b89a747358fe379e9b9865800.setIcon(icon_ec0cc48c4a234d84b46c8e66bad74e4e);


            marker_1090039b89a747358fe379e9b9865800.bindTooltip(
                `<div>
                     Robinsons park
                 </div>`,
                {"sticky": true}
            );


            var marker_bf9885533d964bbe93467b8c9ac84fcf = L.marker(
                [-38.193753, 145.14252199999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6e61bdf8e67148309ecf87db7b946980 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bf9885533d964bbe93467b8c9ac84fcf.setIcon(icon_6e61bdf8e67148309ecf87db7b946980);


            marker_bf9885533d964bbe93467b8c9ac84fcf.bindTooltip(
                `<div>
                     Baxter park
                 </div>`,
                {"sticky": true}
            );


            var marker_c9aa2e3ea76746ae9ade08880d2f53e5 = L.marker(
                [-38.360597, 144.943411],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_204b52498ec54a938ae182db5f0ba72e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c9aa2e3ea76746ae9ade08880d2f53e5.setIcon(icon_204b52498ec54a938ae182db5f0ba72e);


            marker_c9aa2e3ea76746ae9ade08880d2f53e5.bindTooltip(
                `<div>
                     Arthurs seat state park
                 </div>`,
                {"sticky": true}
            );


            var marker_7e064c4f6b87472893f7f2bb0dd3c95d = L.marker(
                [-38.360597, 144.943411],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5855d4b5a12342d8b6fe0d46025eca76 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7e064c4f6b87472893f7f2bb0dd3c95d.setIcon(icon_5855d4b5a12342d8b6fe0d46025eca76);


            marker_7e064c4f6b87472893f7f2bb0dd3c95d.bindTooltip(
                `<div>
                     Mornington peninsula national park
                 </div>`,
                {"sticky": true}
            );


            var marker_901abb907dcb4e14ab59a47142c726c1 = L.marker(
                [-38.326487, 145.190989],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8eead567e8f64c54bbb2532b8d4afb41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_901abb907dcb4e14ab59a47142c726c1.setIcon(icon_8eead567e8f64c54bbb2532b8d4afb41);


            marker_901abb907dcb4e14ab59a47142c726c1.bindTooltip(
                `<div>
                     Warringine park
                 </div>`,
                {"sticky": true}
            );


            var marker_79aaeccbcd444209924f6ade9b1d30b6 = L.marker(
                [-38.134921000000006, 145.27343],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8f4461f5b0e843a384c46809ca6a65bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_79aaeccbcd444209924f6ade9b1d30b6.setIcon(icon_8f4461f5b0e843a384c46809ca6a65bc);


            marker_79aaeccbcd444209924f6ade9b1d30b6.bindTooltip(
                `<div>
                     Royal botanic gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_5d2cbe4738a049789676b8c02e01428d = L.marker(
                [-38.454045, 145.292472],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bd908fe27a8e448e87ce6b9f0add58b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5d2cbe4738a049789676b8c02e01428d.setIcon(icon_bd908fe27a8e448e87ce6b9f0add58b6);


            marker_5d2cbe4738a049789676b8c02e01428d.bindTooltip(
                `<div>
                     Phillip island nature park
                 </div>`,
                {"sticky": true}
            );


            var marker_073f042bfe8f43a082c26fe535fd194b = L.marker(
                [-38.338260999999996, 145.422472],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_940207ab4a2649af9f76c3a4e2351dfc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_073f042bfe8f43a082c26fe535fd194b.setIcon(icon_940207ab4a2649af9f76c3a4e2351dfc);


            marker_073f042bfe8f43a082c26fe535fd194b.bindTooltip(
                `<div>
                     French island national park
                 </div>`,
                {"sticky": true}
            );


            var marker_e6bebfccda0c403bbd791530848d2d51 = L.marker(
                [-37.975809000000005, 145.717905],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5b7c98ea41704d9caa0e0adaae9a0b71 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e6bebfccda0c403bbd791530848d2d51.setIcon(icon_5b7c98ea41704d9caa0e0adaae9a0b71);


            marker_e6bebfccda0c403bbd791530848d2d51.bindTooltip(
                `<div>
                     Bunyip state park
                 </div>`,
                {"sticky": true}
            );


            var marker_38544b17903d4c2aa150dbbed5ea45d9 = L.marker(
                [-37.609217, 145.58951299999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_118c1fb311824480a7d741c58b2eaa59 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_38544b17903d4c2aa150dbbed5ea45d9.setIcon(icon_118c1fb311824480a7d741c58b2eaa59);


            marker_38544b17903d4c2aa150dbbed5ea45d9.bindTooltip(
                `<div>
                     Yarra ranges national park
                 </div>`,
                {"sticky": true}
            );


            var marker_b764ed8948344c869a0a9276ab9c47b5 = L.marker(
                [-37.621183, 146.832359],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e7c162f258404583ab261711ed1d2f03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b764ed8948344c869a0a9276ab9c47b5.setIcon(icon_e7c162f258404583ab261711ed1d2f03);


            marker_b764ed8948344c869a0a9276ab9c47b5.bindTooltip(
                `<div>
                     Avon wilderness park
                 </div>`,
                {"sticky": true}
            );


            var marker_a68e406d4fbd443eb5f29418fd367609 = L.marker(
                [-37.032587, 147.081127],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_de25efce84de451d834ab6a9afee2476 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a68e406d4fbd443eb5f29418fd367609.setIcon(icon_de25efce84de451d834ab6a9afee2476);


            marker_a68e406d4fbd443eb5f29418fd367609.bindTooltip(
                `<div>
                     Alpine national park
                 </div>`,
                {"sticky": true}
            );


            var marker_2e779f9354f34d079d4477b613254e57 = L.marker(
                [-36.350190000000005, 147.72094099999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a9a3adda74994161a20bc41289ef6f36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e779f9354f34d079d4477b613254e57.setIcon(icon_a9a3adda74994161a20bc41289ef6f36);


            marker_2e779f9354f34d079d4477b613254e57.bindTooltip(
                `<div>
                     Wabba wilderness park
                 </div>`,
                {"sticky": true}
            );


            var marker_210d7afaae7948758dfff06427e2a251 = L.marker(
                [-37.301128999999996, 148.48691000000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_733747aa344e4584bd7a2d289d5461e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_210d7afaae7948758dfff06427e2a251.setIcon(icon_733747aa344e4584bd7a2d289d5461e7);


            marker_210d7afaae7948758dfff06427e2a251.bindTooltip(
                `<div>
                     Snowy river national park
                 </div>`,
                {"sticky": true}
            );


            var marker_d6989b00388946c18d3c7ed1c75b16d9 = L.marker(
                [-36.061069, 148.34897800000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7b468e0ff89c433e9abb1737023547e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d6989b00388946c18d3c7ed1c75b16d9.setIcon(icon_7b468e0ff89c433e9abb1737023547e3);


            marker_d6989b00388946c18d3c7ed1c75b16d9.bindTooltip(
                `<div>
                     Kpsciuszko national park
                 </div>`,
                {"sticky": true}
            );


            var marker_033a59287c8a4ac596b34b2c4f58d4c1 = L.marker(
                [-35.626919, 148.887667],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_71f4814450804b9b83735806fc4d2612 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_033a59287c8a4ac596b34b2c4f58d4c1.setIcon(icon_71f4814450804b9b83735806fc4d2612);


            marker_033a59287c8a4ac596b34b2c4f58d4c1.bindTooltip(
                `<div>
                     Namadgi national park
                 </div>`,
                {"sticky": true}
            );


            var marker_d53f13b6fcd046b6808e27a1f06d1fc0 = L.marker(
                [-35.274091, 148.80721],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e45923599c08449ca9a492e9dddb9eba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d53f13b6fcd046b6808e27a1f06d1fc0.setIcon(icon_e45923599c08449ca9a492e9dddb9eba);


            marker_d53f13b6fcd046b6808e27a1f06d1fc0.bindTooltip(
                `<div>
                     Brindabella national park
                 </div>`,
                {"sticky": true}
            );


            var marker_620a180a6be84402bb3ad3fb869e135e = L.marker(
                [-37.649246000000005, 147.343828],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_be0f27f5eb7244c1ab8ff0e300e97fb2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_620a180a6be84402bb3ad3fb869e135e.setIcon(icon_be0f27f5eb7244c1ab8ff0e300e97fb2);


            marker_620a180a6be84402bb3ad3fb869e135e.bindTooltip(
                `<div>
                     Mitchell river national park
                 </div>`,
                {"sticky": true}
            );


            var marker_baa6308bd0684e16847a62df00b25a2e = L.marker(
                [-37.356394, 149.348679],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_81db7c79e1644b81b3595ee0011124c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_baa6308bd0684e16847a62df00b25a2e.setIcon(icon_81db7c79e1644b81b3595ee0011124c9);


            marker_baa6308bd0684e16847a62df00b25a2e.bindTooltip(
                `<div>
                     Coopracambra national park
                 </div>`,
                {"sticky": true}
            );


            var marker_4a4855666d69411e9945ec7eefa2baf6 = L.marker(
                [-37.505794, 149.887447],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4565d31f86bf42bba1c4fabe75e66af3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a4855666d69411e9945ec7eefa2baf6.setIcon(icon_4565d31f86bf42bba1c4fabe75e66af3);


            marker_4a4855666d69411e9945ec7eefa2baf6.bindTooltip(
                `<div>
                     Croajingolong national park
                 </div>`,
                {"sticky": true}
            );


            var marker_28001d5ac45f46138cc6339c6d21bf28 = L.marker(
                [-37.183677, 149.984902],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_90fe4ee965dc46a4ad03714387c74b21 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_28001d5ac45f46138cc6339c6d21bf28.setIcon(icon_90fe4ee965dc46a4ad03714387c74b21);


            marker_28001d5ac45f46138cc6339c6d21bf28.bindTooltip(
                `<div>
                     Ben boyd national park
                 </div>`,
                {"sticky": true}
            );


            var marker_4312f3a15738490084a8baa626567bec = L.marker(
                [-37.413468, 145.202927],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_2d9453d378ce44aeb259bc6aa298caf9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4312f3a15738490084a8baa626567bec.setIcon(icon_2d9453d378ce44aeb259bc6aa298caf9);


            marker_4312f3a15738490084a8baa626567bec.bindTooltip(
                `<div>
                     Kinglake national park
                 </div>`,
                {"sticky": true}
            );


            var marker_95052ee8e0804d51bdf62039f51f3bdd = L.marker(
                [-37.310533, 145.980025],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1638f7a109144d0a9fb2d709f1753aaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_95052ee8e0804d51bdf62039f51f3bdd.setIcon(icon_1638f7a109144d0a9fb2d709f1753aaa);


            marker_95052ee8e0804d51bdf62039f51f3bdd.bindTooltip(
                `<div>
                     Lake eildon national park
                 </div>`,
                {"sticky": true}
            );


            var marker_e7fd66d655c9481eb687428af6354ed5 = L.marker(
                [-37.381283, 145.785296],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6d6bedb6726c4aa783efac7cf5dc1575 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7fd66d655c9481eb687428af6354ed5.setIcon(icon_6d6bedb6726c4aa783efac7cf5dc1575);


            marker_e7fd66d655c9481eb687428af6354ed5.bindTooltip(
                `<div>
                     Cathedral range state park
                 </div>`,
                {"sticky": true}
            );


            var marker_45fda6d9616e4baaac959a7b3115d331 = L.marker(
                [-36.698584000000004, 146.777036],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_53ab9b708c9940268ebc55813a8cafaf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_45fda6d9616e4baaac959a7b3115d331.setIcon(icon_53ab9b708c9940268ebc55813a8cafaf);


            marker_45fda6d9616e4baaac959a7b3115d331.bindTooltip(
                `<div>
                     Mount buffalo national park
                 </div>`,
                {"sticky": true}
            );


            var marker_a4efd7247b78467db999a5d0fab025cb = L.marker(
                [-36.255010999999996, 146.723884],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fcc6b57cc2f2470d987a8d33b649ceb9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a4efd7247b78467db999a5d0fab025cb.setIcon(icon_fcc6b57cc2f2470d987a8d33b649ceb9);


            marker_a4efd7247b78467db999a5d0fab025cb.bindTooltip(
                `<div>
                     Chiltern-mt pilot national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0cdfe1dcbb184554a59ef09e560f7264 = L.marker(
                [-35.886146999999994, 147.478306],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3166a5ca18e74a379d001d543cf84958 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0cdfe1dcbb184554a59ef09e560f7264.setIcon(icon_3166a5ca18e74a379d001d543cf84958);


            marker_0cdfe1dcbb184554a59ef09e560f7264.bindTooltip(
                `<div>
                     Woomargama national park
                 </div>`,
                {"sticky": true}
            );


            var marker_69dca273204343bda3a2961ccd449b8e = L.marker(
                [-36.053974, 147.44532],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_49e37e61e3d24ca6b9b6b175dc5d280b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69dca273204343bda3a2961ccd449b8e.setIcon(icon_49e37e61e3d24ca6b9b6b175dc5d280b);


            marker_69dca273204343bda3a2961ccd449b8e.bindTooltip(
                `<div>
                     Mount lawson state park
                 </div>`,
                {"sticky": true}
            );


            var marker_43fc846e24de412c86355ef4582651b0 = L.marker(
                [-36.093933, 147.732571],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cdc1df6ba0bd4e77b21eab8a104ba2f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_43fc846e24de412c86355ef4582651b0.setIcon(icon_cdc1df6ba0bd4e77b21eab8a104ba2f2);


            marker_43fc846e24de412c86355ef4582651b0.bindTooltip(
                `<div>
                     Burrowa pine mountain national park
                 </div>`,
                {"sticky": true}
            );


            var marker_5b158d393e0f46e18b4f938289e97cae = L.marker(
                [-38.280153000000006, 145.988813],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f6f11874296a44a6954da8717a1b54b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b158d393e0f46e18b4f938289e97cae.setIcon(icon_f6f11874296a44a6954da8717a1b54b4);


            marker_5b158d393e0f46e18b4f938289e97cae.bindTooltip(
                `<div>
                     Mount worth state park
                 </div>`,
                {"sticky": true}
            );


            var marker_91d4a149cbb44c21ada182e43523eeae = L.marker(
                [-38.025559, 145.33831899999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5e3d794acb974db1a1c2bd035d3c1ebb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_91d4a149cbb44c21ada182e43523eeae.setIcon(icon_5e3d794acb974db1a1c2bd035d3c1ebb);


            marker_91d4a149cbb44c21ada182e43523eeae.bindTooltip(
                `<div>
                     Wilson botanic park
                 </div>`,
                {"sticky": true}
            );


            var marker_9c0446a3e118430fbee7254c539e725d = L.marker(
                [-37.894048, 145.025949],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9219cb97f10046da94d9eb0fcccccfb0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9c0446a3e118430fbee7254c539e725d.setIcon(icon_9219cb97f10046da94d9eb0fcccccfb0);


            marker_9c0446a3e118430fbee7254c539e725d.bindTooltip(
                `<div>
                     Princes park
                 </div>`,
                {"sticky": true}
            );


            var marker_916121cb51814137b3d13259fa0569ba = L.marker(
                [-37.886478000000004, 145.010626],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bf736c2975214aaeb270e204a6f29ed4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_916121cb51814137b3d13259fa0569ba.setIcon(icon_bf736c2975214aaeb270e204a6f29ed4);


            marker_916121cb51814137b3d13259fa0569ba.bindTooltip(
                `<div>
                     Hopetoun gardens
                 </div>`,
                {"sticky": true}
            );


            var marker_0ba7f5d026ce49229344bd7804f7eef5 = L.marker(
                [-37.825267, 145.014547],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_7b1204a3e5d343dc821844e654f309bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0ba7f5d026ce49229344bd7804f7eef5.setIcon(icon_7b1204a3e5d343dc821844e654f309bf);


            marker_0ba7f5d026ce49229344bd7804f7eef5.bindTooltip(
                `<div>
                     Burnley park
                 </div>`,
                {"sticky": true}
            );


            var marker_9802c944b5cb46999eba482d09c1fc69 = L.marker(
                [-37.829746, 145.028229],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6968e3d747d949c49f0ecdbc546e1b16 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9802c944b5cb46999eba482d09c1fc69.setIcon(icon_6968e3d747d949c49f0ecdbc546e1b16);


            marker_9802c944b5cb46999eba482d09c1fc69.bindTooltip(
                `<div>
                     Fairview park
                 </div>`,
                {"sticky": true}
            );


            var marker_9eab415d7df544a48aa96bfd91de801a = L.marker(
                [-37.828907, 145.050434],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d8d7b71aaac040f5949bf6d9ecabc2b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9eab415d7df544a48aa96bfd91de801a.setIcon(icon_d8d7b71aaac040f5949bf6d9ecabc2b4);


            marker_9eab415d7df544a48aa96bfd91de801a.bindTooltip(
                `<div>
                     Fritsch holzer park
                 </div>`,
                {"sticky": true}
            );


            var marker_924058240fe5447898e161dee48d98f4 = L.marker(
                [-37.999896, 145.128533],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a5e59dd9d29b4c6fabea8a796df45ffa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_924058240fe5447898e161dee48d98f4.setIcon(icon_a5e59dd9d29b4c6fabea8a796df45ffa);


            marker_924058240fe5447898e161dee48d98f4.bindTooltip(
                `<div>
                     Braeside park
                 </div>`,
                {"sticky": true}
            );


            var marker_b6d0d95ee9ef49839029d96dc29b7b2e = L.marker(
                [-38.049889, 145.12858],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a948f86b80b7410780099f35e8a6c3c8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b6d0d95ee9ef49839029d96dc29b7b2e.setIcon(icon_a948f86b80b7410780099f35e8a6c3c8);


            marker_b6d0d95ee9ef49839029d96dc29b7b2e.bindTooltip(
                `<div>
                     Chelsea park
                 </div>`,
                {"sticky": true}
            );


            var marker_80510f601e3a476c9a7721a781982823 = L.marker(
                [-38.042913, 145.152598],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1a69b94d36ca4caeb5185a9a51440582 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_80510f601e3a476c9a7721a781982823.setIcon(icon_1a69b94d36ca4caeb5185a9a51440582);


            marker_80510f601e3a476c9a7721a781982823.bindTooltip(
                `<div>
                     Jolong park
                 </div>`,
                {"sticky": true}
            );


            var marker_b38c7b7f413c4e8cb1238d8ba836ce31 = L.marker(
                [-36.889721, 146.08349099999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c54b5ca3e72a4a31a86379167b5bdf3a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b38c7b7f413c4e8cb1238d8ba836ce31.setIcon(icon_c54b5ca3e72a4a31a86379167b5bdf3a);


            marker_b38c7b7f413c4e8cb1238d8ba836ce31.bindTooltip(
                `<div>
                     Mount samaia state park
                 </div>`,
                {"sticky": true}
            );


            var marker_940a5ffe9c1b4cba89e030be9d400414 = L.marker(
                [-38.087224, 147.48981899999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_681fe51564d64f779130faf8f68583eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_940a5ffe9c1b4cba89e030be9d400414.setIcon(icon_681fe51564d64f779130faf8f68583eb);


            marker_940a5ffe9c1b4cba89e030be9d400414.bindTooltip(
                `<div>
                     Gippsland lakes coastal park
                 </div>`,
                {"sticky": true}
            );


            var marker_9d5d6e1480fe449aa8a0f02569f76c01 = L.marker(
                [-37.579625, 148.244585],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f7dfeb1519fa4f538c19cb555d5afecd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9d5d6e1480fe449aa8a0f02569f76c01.setIcon(icon_f7dfeb1519fa4f538c19cb555d5afecd);


            marker_9d5d6e1480fe449aa8a0f02569f76c01.bindTooltip(
                `<div>
                     Tara range park
                 </div>`,
                {"sticky": true}
            );


            var marker_07d57faccd004dc9bbfc052c040ce6f8 = L.marker(
                [-37.009989000000004, 149.491531],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fd26c69dec814c18b31d5be063f317b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07d57faccd004dc9bbfc052c040ce6f8.setIcon(icon_fd26c69dec814c18b31d5be063f317b1);


            marker_07d57faccd004dc9bbfc052c040ce6f8.bindTooltip(
                `<div>
                     South east forest national park
                 </div>`,
                {"sticky": true}
            );


            var marker_4bb2bb2790cd42588f3c533fb560118c = L.marker(
                [-37.162172, 149.739106],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4bc44e920f9847e793f209117395f603 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4bb2bb2790cd42588f3c533fb560118c.setIcon(icon_4bc44e920f9847e793f209117395f603);


            marker_4bb2bb2790cd42588f3c533fb560118c.bindTooltip(
                `<div>
                     Mount imlay national park
                 </div>`,
                {"sticky": true}
            );


            var marker_b4f160f6c4b144a2b5452249d8ab0ca6 = L.marker(
                [-36.67073, 149.93560300000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6d66fcd25389437d9920f8d31b7f8374 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b4f160f6c4b144a2b5452249d8ab0ca6.setIcon(icon_6d66fcd25389437d9920f8d31b7f8374);


            marker_b4f160f6c4b144a2b5452249d8ab0ca6.bindTooltip(
                `<div>
                     Mimosa rocks national park
                 </div>`,
                {"sticky": true}
            );


            var marker_d3bdd11cdcf44ca981b886677d2cb1f7 = L.marker(
                [-36.348746999999996, 149.622898],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5a2eb043000f48fc8b243b35a2b00d5a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3bdd11cdcf44ca981b886677d2cb1f7.setIcon(icon_5a2eb043000f48fc8b243b35a2b00d5a);


            marker_d3bdd11cdcf44ca981b886677d2cb1f7.bindTooltip(
                `<div>
                     Wadbilliga national park
                 </div>`,
                {"sticky": true}
            );


            var marker_04f3a2bd5d834225ae5a4f1112daacb5 = L.marker(
                [-36.317001, 149.923013],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_28d11814a4174a7b92907e71829d3b4e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_04f3a2bd5d834225ae5a4f1112daacb5.setIcon(icon_28d11814a4174a7b92907e71829d3b4e);


            marker_04f3a2bd5d834225ae5a4f1112daacb5.bindTooltip(
                `<div>
                     Kooraban national park
                 </div>`,
                {"sticky": true}
            );


            var marker_421ffad4273e496fac54185d6d198761 = L.marker(
                [-36.314451, 150.02560400000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d0fc67efbc1e445b96562b33310aae9a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_421ffad4273e496fac54185d6d198761.setIcon(icon_d0fc67efbc1e445b96562b33310aae9a);


            marker_421ffad4273e496fac54185d6d198761.bindTooltip(
                `<div>
                     Gulaga national park
                 </div>`,
                {"sticky": true}
            );


            var marker_5e9dcce6238d4327b69b009e9ed3358e = L.marker(
                [-35.931751, 149.804325],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bffaa8632ee9458fa0a4b6aa1a8c9ed1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5e9dcce6238d4327b69b009e9ed3358e.setIcon(icon_bffaa8632ee9458fa0a4b6aa1a8c9ed1);


            marker_5e9dcce6238d4327b69b009e9ed3358e.bindTooltip(
                `<div>
                     Deua national park
                 </div>`,
                {"sticky": true}
            );


            var marker_c532adb22677490fa46ba1b2ca15810f = L.marker(
                [-35.920631, 149.528069],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_612a019333144d96ad28cdfe5c4dc607 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c532adb22677490fa46ba1b2ca15810f.setIcon(icon_612a019333144d96ad28cdfe5c4dc607);


            marker_c532adb22677490fa46ba1b2ca15810f.bindTooltip(
                `<div>
                     Gourock national park
                 </div>`,
                {"sticky": true}
            );


            var marker_464960826fef4fa7b4ba0c8c8dc5053e = L.marker(
                [-35.664427, 149.937507],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_acc5481035e74e13b459c47f95eeeab2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_464960826fef4fa7b4ba0c8c8dc5053e.setIcon(icon_acc5481035e74e13b459c47f95eeeab2);


            marker_464960826fef4fa7b4ba0c8c8dc5053e.bindTooltip(
                `<div>
                     Monga national park
                 </div>`,
                {"sticky": true}
            );


            var marker_07b6473740504744a14fab9bacaac37b = L.marker(
                [-35.437614, 150.050209],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ef1b3e01307a4164bae7496f4330c073 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07b6473740504744a14fab9bacaac37b.setIcon(icon_ef1b3e01307a4164bae7496f4330c073);


            marker_07b6473740504744a14fab9bacaac37b.bindTooltip(
                `<div>
                     Budawang national park
                 </div>`,
                {"sticky": true}
            );


            var marker_4779ef5f87b440769c6eff3555cd7277 = L.marker(
                [-35.584394, 150.303522],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a10b9af3571d49ccad7e044bf0847ea6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4779ef5f87b440769c6eff3555cd7277.setIcon(icon_a10b9af3571d49ccad7e044bf0847ea6);


            marker_4779ef5f87b440769c6eff3555cd7277.bindTooltip(
                `<div>
                     Murramarang national park
                 </div>`,
                {"sticky": true}
            );


            var marker_59da48028fb74cceb1d03b3d87311be4 = L.marker(
                [-35.470955, 150.371555],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_12275d8785a246208d320d57e9908cbc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_59da48028fb74cceb1d03b3d87311be4.setIcon(icon_12275d8785a246208d320d57e9908cbc);


            marker_59da48028fb74cceb1d03b3d87311be4.bindTooltip(
                `<div>
                     Meroo national park
                 </div>`,
                {"sticky": true}
            );


            var marker_3c3925197c2847e2b70b1130affb766d = L.marker(
                [-35.177395000000004, 150.491816],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d52c2466af044fc38d12ea7e56385d87 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c3925197c2847e2b70b1130affb766d.setIcon(icon_d52c2466af044fc38d12ea7e56385d87);


            marker_3c3925197c2847e2b70b1130affb766d.bindTooltip(
                `<div>
                     Conjola national park
                 </div>`,
                {"sticky": true}
            );


            var marker_d94c1a26a0da4fd6b465842157a8355a = L.marker(
                [-35.230354, 150.220586],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_81aa884564e248f49e9c95a3b8b9294f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d94c1a26a0da4fd6b465842157a8355a.setIcon(icon_81aa884564e248f49e9c95a3b8b9294f);


            marker_d94c1a26a0da4fd6b465842157a8355a.bindTooltip(
                `<div>
                     Morton national park
                 </div>`,
                {"sticky": true}
            );


            var marker_747444b150de45a484ebe82141fcb566 = L.marker(
                [-34.944145, 150.735582],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bbf5eeb8af8541c38446ded13ad8a2b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_747444b150de45a484ebe82141fcb566.setIcon(icon_bbf5eeb8af8541c38446ded13ad8a2b0);


            marker_747444b150de45a484ebe82141fcb566.bindTooltip(
                `<div>
                     Jervis bay national park
                 </div>`,
                {"sticky": true}
            );


            var marker_838da36fb7b242cfa1064db3042066bd = L.marker(
                [-35.508072999999996, 149.58393999999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c935931edc594004801b857321ccdf18 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_838da36fb7b242cfa1064db3042066bd.setIcon(icon_c935931edc594004801b857321ccdf18);


            marker_838da36fb7b242cfa1064db3042066bd.bindTooltip(
                `<div>
                     Tallaganda state park
                 </div>`,
                {"sticky": true}
            );


            var marker_8583ca58590c4171be84a1f8ddd4af49 = L.marker(
                [-34.240411, 150.403069],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a5596dd16dcc4804a40ed9d5e6d59f44 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8583ca58590c4171be84a1f8ddd4af49.setIcon(icon_a5596dd16dcc4804a40ed9d5e6d59f44);


            marker_8583ca58590c4171be84a1f8ddd4af49.bindTooltip(
                `<div>
                     Nattai national park
                 </div>`,
                {"sticky": true}
            );


            var marker_80976944cf1443e3bc34715dae143aef = L.marker(
                [-33.958614000000004, 150.135279],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_44c42cd81c1d4b14a88a5cd08e2b5372 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_80976944cf1443e3bc34715dae143aef.setIcon(icon_44c42cd81c1d4b14a88a5cd08e2b5372);


            marker_80976944cf1443e3bc34715dae143aef.bindTooltip(
                `<div>
                     Kanangra-boyd national park
                 </div>`,
                {"sticky": true}
            );


            var marker_82f3fd87a3e94375b01437407dffd25f = L.marker(
                [-34.108838, 149.698443],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1652c45bec284557aec009ad33592f06 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_82f3fd87a3e94375b01437407dffd25f.setIcon(icon_1652c45bec284557aec009ad33592f06);


            marker_82f3fd87a3e94375b01437407dffd25f.bindTooltip(
                `<div>
                     Abercrombie river national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0a2097bc14474d5ea754c5bf3c120fbf = L.marker(
                [-33.633809, 150.497385],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_74630c738ecc4dff9a173abeac08e46d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0a2097bc14474d5ea754c5bf3c120fbf.setIcon(icon_74630c738ecc4dff9a173abeac08e46d);


            marker_0a2097bc14474d5ea754c5bf3c120fbf.bindTooltip(
                `<div>
                     Blue mountains national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0f0a7148ff9d4af8bf90b596f28f8513 = L.marker(
                [-34.20237, 150.855069],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_591099628163449cbe6b00454badf903 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0f0a7148ff9d4af8bf90b596f28f8513.setIcon(icon_591099628163449cbe6b00454badf903);


            marker_0f0a7148ff9d4af8bf90b596f28f8513.bindTooltip(
                `<div>
                     Dharawal national park
                 </div>`,
                {"sticky": true}
            );


            var marker_807fc4338074491693b8e6d4f66d0d0d = L.marker(
                [-34.1338, 151.04928700000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d8bf69d8ecba487790210ef4e9b2ca92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_807fc4338074491693b8e6d4f66d0d0d.setIcon(icon_d8bf69d8ecba487790210ef4e9b2ca92);


            marker_807fc4338074491693b8e6d4f66d0d0d.bindTooltip(
                `<div>
                     Royal national park
                 </div>`,
                {"sticky": true}
            );


            var marker_89dd1f1da09e4294910ba1266c5a98b9 = L.marker(
                [-32.958878000000006, 150.41270600000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8ec022df5f12461d9f7b5211076adc6c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_89dd1f1da09e4294910ba1266c5a98b9.setIcon(icon_8ec022df5f12461d9f7b5211076adc6c);


            marker_89dd1f1da09e4294910ba1266c5a98b9.bindTooltip(
                `<div>
                     Wollemi national park
                 </div>`,
                {"sticky": true}
            );


            var marker_e96726202f02432ab7ea56ee3f52ddf1 = L.marker(
                [-33.09244, 150.851264],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_23872b205c794533849c1945308c0be7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e96726202f02432ab7ea56ee3f52ddf1.setIcon(icon_23872b205c794533849c1945308c0be7);


            marker_e96726202f02432ab7ea56ee3f52ddf1.bindTooltip(
                `<div>
                     Yengo national park
                 </div>`,
                {"sticky": true}
            );


            var marker_aa06ef0c02dd47a4a100089c415d3970 = L.marker(
                [-33.382943, 151.06298700000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cd813656a6ac47eda56a596668468f55 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa06ef0c02dd47a4a100089c415d3970.setIcon(icon_cd813656a6ac47eda56a596668468f55);


            marker_aa06ef0c02dd47a4a100089c415d3970.bindTooltip(
                `<div>
                     Dharug national park
                 </div>`,
                {"sticky": true}
            );


            var marker_3c568888c92147ef9cdf58785f54e66b = L.marker(
                [-33.494104, 151.117848],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e356b94d7463456baa98fa1ab232c154 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3c568888c92147ef9cdf58785f54e66b.setIcon(icon_e356b94d7463456baa98fa1ab232c154);


            marker_3c568888c92147ef9cdf58785f54e66b.bindTooltip(
                `<div>
                     Marramarra national park
                 </div>`,
                {"sticky": true}
            );


            var marker_811cefb63cf447db9ffa91efc26a3574 = L.marker(
                [-33.51815, 151.273156],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6be28bbe2f244c9d86ee2fdd53030e27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_811cefb63cf447db9ffa91efc26a3574.setIcon(icon_6be28bbe2f244c9d86ee2fdd53030e27);


            marker_811cefb63cf447db9ffa91efc26a3574.bindTooltip(
                `<div>
                     Brisbane water national park
                 </div>`,
                {"sticky": true}
            );


            var marker_613b1132b8a44b13abcc64a12121ab55 = L.marker(
                [-33.700549, 151.237174],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ec32dd7205c642fe9648c49375200bea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_613b1132b8a44b13abcc64a12121ab55.setIcon(icon_ec32dd7205c642fe9648c49375200bea);


            marker_613b1132b8a44b13abcc64a12121ab55.bindTooltip(
                `<div>
                     Garigal national park
                 </div>`,
                {"sticky": true}
            );


            var marker_4d3e217b5e314f81820d987eb4119800 = L.marker(
                [-33.629597, 151.231409],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ba989ec4a49042d186bc3877faf7885c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d3e217b5e314f81820d987eb4119800.setIcon(icon_ba989ec4a49042d186bc3877faf7885c);


            marker_4d3e217b5e314f81820d987eb4119800.bindTooltip(
                `<div>
                     Ku-ring-gai chase national park
                 </div>`,
                {"sticky": true}
            );


            var marker_85f786b64e1848229e338899f5be9892 = L.marker(
                [-33.008888, 151.377228],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c097b1d7402d4b64aca218c747c6634f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85f786b64e1848229e338899f5be9892.setIcon(icon_c097b1d7402d4b64aca218c747c6634f);


            marker_85f786b64e1848229e338899f5be9892.bindTooltip(
                `<div>
                     Watagans national park
                 </div>`,
                {"sticky": true}
            );


            var marker_e68a56c66b174dc28cb45a26dbe03783 = L.marker(
                [-32.876352000000004, 151.38330200000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b3c8f6a1fbf14ea1b1ad75bb7e85f721 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e68a56c66b174dc28cb45a26dbe03783.setIcon(icon_b3c8f6a1fbf14ea1b1ad75bb7e85f721);


            marker_e68a56c66b174dc28cb45a26dbe03783.bindTooltip(
                `<div>
                     Werakata national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0306bcbc41ff43d789356dc0524f0d7f = L.marker(
                [-32.589748, 151.945533],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_db16a63586104b768170bdba56f27df5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0306bcbc41ff43d789356dc0524f0d7f.setIcon(icon_db16a63586104b768170bdba56f27df5);


            marker_0306bcbc41ff43d789356dc0524f0d7f.bindTooltip(
                `<div>
                     Kuaruah national park
                 </div>`,
                {"sticky": true}
            );


            var marker_3ac9f3108bd14292876ba92adb2ebc54 = L.marker(
                [-32.079538, 151.456527],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8393f9610e0340de90634391c723033b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3ac9f3108bd14292876ba92adb2ebc54.setIcon(icon_8393f9610e0340de90634391c723033b);


            marker_3ac9f3108bd14292876ba92adb2ebc54.bindTooltip(
                `<div>
                     Barrington tops national park
                 </div>`,
                {"sticky": true}
            );


            var marker_4c1e4ad54c3944ae845d5754e8458bdf = L.marker(
                [-31.655834000000002, 151.61826100000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3031f24162aa4e5fa5348a1e10fdd5b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4c1e4ad54c3944ae845d5754e8458bdf.setIcon(icon_3031f24162aa4e5fa5348a1e10fdd5b5);


            marker_4c1e4ad54c3944ae845d5754e8458bdf.bindTooltip(
                `<div>
                     Curracabudi national park
                 </div>`,
                {"sticky": true}
            );


            var marker_70fa28435555457bb071ff981a503917 = L.marker(
                [-31.504443, 151.58049499999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_65da7e7f0a504f648fb31d89f84f2a6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_70fa28435555457bb071ff981a503917.setIcon(icon_65da7e7f0a504f648fb31d89f84f2a6a);


            marker_70fa28435555457bb071ff981a503917.bindTooltip(
                `<div>
                     Nowendoc national park
                 </div>`,
                {"sticky": true}
            );


            var marker_d3fc56915c0a42919a3373db638997bd = L.marker(
                [-31.632565000000003, 151.841633],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3c47adf9413f4961b06d8a0aee0ec9fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d3fc56915c0a42919a3373db638997bd.setIcon(icon_3c47adf9413f4961b06d8a0aee0ec9fd);


            marker_d3fc56915c0a42919a3373db638997bd.bindTooltip(
                `<div>
                     Barakee national park
                 </div>`,
                {"sticky": true}
            );


            var marker_de3ffec226b045929b448c42375af515 = L.marker(
                [-31.765992999999998, 151.784849],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_519a4d38274c44f99de4bc2d8fec0cad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_de3ffec226b045929b448c42375af515.setIcon(icon_519a4d38274c44f99de4bc2d8fec0cad);


            marker_de3ffec226b045929b448c42375af515.bindTooltip(
                `<div>
                     Woko national park
                 </div>`,
                {"sticky": true}
            );


            var marker_091adb9b9b16428c80206f4f5626e129 = L.marker(
                [-31.660039, 152.196055],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3eab7acd9ed24c488d159822c451e7f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_091adb9b9b16428c80206f4f5626e129.setIcon(icon_3eab7acd9ed24c488d159822c451e7f0);


            marker_091adb9b9b16428c80206f4f5626e129.bindTooltip(
                `<div>
                     Topin tops national park
                 </div>`,
                {"sticky": true}
            );


            var marker_12828674c8f1402c83e8ec3d7b11ceb1 = L.marker(
                [-31.345655999999998, 152.094448],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ae3e9640e7e94c1bb4d766c0199acc60 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_12828674c8f1402c83e8ec3d7b11ceb1.setIcon(icon_ae3e9640e7e94c1bb4d766c0199acc60);


            marker_12828674c8f1402c83e8ec3d7b11ceb1.bindTooltip(
                `<div>
                     Cottan-bimbang national park
                 </div>`,
                {"sticky": true}
            );


            var marker_54c19333d01d431389daf5cdcddaf382 = L.marker(
                [-31.113733, 152.456604],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e6feb19443124532b211617a3d16d5ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54c19333d01d431389daf5cdcddaf382.setIcon(icon_e6feb19443124532b211617a3d16d5ab);


            marker_54c19333d01d431389daf5cdcddaf382.bindTooltip(
                `<div>
                     Willi willi national park
                 </div>`,
                {"sticky": true}
            );


            var marker_9783078735ba4269a49988b7f4be5b8f = L.marker(
                [-31.150762, 152.608476],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_24a0df3fc04040efa03d98980cc2a8db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9783078735ba4269a49988b7f4be5b8f.setIcon(icon_24a0df3fc04040efa03d98980cc2a8db);


            marker_9783078735ba4269a49988b7f4be5b8f.bindTooltip(
                `<div>
                     Kumbatine national park
                 </div>`,
                {"sticky": true}
            );


            var marker_83f133b8ce904745979c8500b1f6deab = L.marker(
                [-31.333226, 152.912244],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8681e1b7202344e8bd12b8ae1ffd8905 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_83f133b8ce904745979c8500b1f6deab.setIcon(icon_8681e1b7202344e8bd12b8ae1ffd8905);


            marker_83f133b8ce904745979c8500b1f6deab.bindTooltip(
                `<div>
                     Limeburners creek national park
                 </div>`,
                {"sticky": true}
            );


            var marker_53946c15a6f640c594df18f9affc80bd = L.marker(
                [-31.212622999999997, 152.24572],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_af3142ab78e642f6b41a850aa44424ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_53946c15a6f640c594df18f9affc80bd.setIcon(icon_af3142ab78e642f6b41a850aa44424ce);


            marker_53946c15a6f640c594df18f9affc80bd.bindTooltip(
                `<div>
                     Werrikimbe national park
                 </div>`,
                {"sticky": true}
            );


            var marker_5139551163fa4072a697f2db5f6f4107 = L.marker(
                [-30.959228999999997, 152.162956],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f305cbe249fb40529b74dd941810014f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5139551163fa4072a697f2db5f6f4107.setIcon(icon_f305cbe249fb40529b74dd941810014f);


            marker_5139551163fa4072a697f2db5f6f4107.bindTooltip(
                `<div>
                     Oxley wild rivers national park
                 </div>`,
                {"sticky": true}
            );


            var marker_4f9981f3368d45b99effda5125917024 = L.marker(
                [-30.597009000000003, 152.464373],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_00a806b37fed4bbcb3f08daef075dc43 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4f9981f3368d45b99effda5125917024.setIcon(icon_00a806b37fed4bbcb3f08daef075dc43);


            marker_4f9981f3368d45b99effda5125917024.bindTooltip(
                `<div>
                     New england national park
                 </div>`,
                {"sticky": true}
            );


            var marker_83fe0247a34243108d407856a0bdc265 = L.marker(
                [-30.445584000000004, 152.205984],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_562b5cbecc9645bf8a59f8d5cabd5fdf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_83fe0247a34243108d407856a0bdc265.setIcon(icon_562b5cbecc9645bf8a59f8d5cabd5fdf);


            marker_83fe0247a34243108d407856a0bdc265.bindTooltip(
                `<div>
                     Cathedral rock national park
                 </div>`,
                {"sticky": true}
            );


            var marker_402d15e0a39e41e78ffa0b00f9291889 = L.marker(
                [-30.413382000000002, 152.701864],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_00f4c199f8414703a7da83cfab8d4757 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_402d15e0a39e41e78ffa0b00f9291889.setIcon(icon_00f4c199f8414703a7da83cfab8d4757);


            marker_402d15e0a39e41e78ffa0b00f9291889.bindTooltip(
                `<div>
                     Bellinger river national park
                 </div>`,
                {"sticky": true}
            );


            var marker_099e958f1148473c95d210380101536e = L.marker(
                [-30.352963, 152.821437],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a9e9085f6e6344b2b40e51a604abe3b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_099e958f1148473c95d210380101536e.setIcon(icon_a9e9085f6e6344b2b40e51a604abe3b7);


            marker_099e958f1148473c95d210380101536e.bindTooltip(
                `<div>
                     Dorrigo national park
                 </div>`,
                {"sticky": true}
            );


            var marker_e7721901c75b41c3a2bdbbd4ff0084d9 = L.marker(
                [-30.304364, 152.93139],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6ebed0d041dd4238b765ed4fd56063ac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e7721901c75b41c3a2bdbbd4ff0084d9.setIcon(icon_6ebed0d041dd4238b765ed4fd56063ac);


            marker_e7721901c75b41c3a2bdbbd4ff0084d9.bindTooltip(
                `<div>
                     Bindarri national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0d9c0e11d8d941a0a8c33e4f77d6f2ef = L.marker(
                [-30.260485, 152.811817],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bebe3a48c8a54f16b148fe4122c77b79 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0d9c0e11d8d941a0a8c33e4f77d6f2ef.setIcon(icon_bebe3a48c8a54f16b148fe4122c77b79);


            marker_0d9c0e11d8d941a0a8c33e4f77d6f2ef.bindTooltip(
                `<div>
                     Cascade national park
                 </div>`,
                {"sticky": true}
            );


            var marker_cade127f92eb4612af683fd00441528d = L.marker(
                [-30.412378000000004, 153.066537],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_22b5f98b11714e74bfacf017489ebc50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cade127f92eb4612af683fd00441528d.setIcon(icon_22b5f98b11714e74bfacf017489ebc50);


            marker_cade127f92eb4612af683fd00441528d.bindTooltip(
                `<div>
                     Bongil national park
                 </div>`,
                {"sticky": true}
            );


            var marker_db9d3a5857c44b60b2fc5d0d28ec1983 = L.marker(
                [-30.141796000000003, 152.702248],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4469e2fe79f947acaab76523cb529947 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db9d3a5857c44b60b2fc5d0d28ec1983.setIcon(icon_4469e2fe79f947acaab76523cb529947);


            marker_db9d3a5857c44b60b2fc5d0d28ec1983.bindTooltip(
                `<div>
                     Nymboi-binderay national park
                 </div>`,
                {"sticky": true}
            );


            var marker_2841e720bb9242758d98b813c30499d2 = L.marker(
                [-29.985141, 152.24203],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a0afe50cc22b4506bd131396c39f1fd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2841e720bb9242758d98b813c30499d2.setIcon(icon_a0afe50cc22b4506bd131396c39f1fd7);


            marker_2841e720bb9242758d98b813c30499d2.bindTooltip(
                `<div>
                     Guy fawkes rivers national park
                 </div>`,
                {"sticky": true}
            );


            var marker_3dac4c48bf164febae036223a7f52cd0 = L.marker(
                [-29.674202, 152.22141399999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_697886daf376427ebfb11763c9a4181b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3dac4c48bf164febae036223a7f52cd0.setIcon(icon_697886daf376427ebfb11763c9a4181b);


            marker_3dac4c48bf164febae036223a7f52cd0.bindTooltip(
                `<div>
                     Barool national park
                 </div>`,
                {"sticky": true}
            );


            var marker_2ffc248034cd4535a9ca87823d966f0f = L.marker(
                [-29.659882, 152.441216],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4f4187bf39834301ba92531ed43a470a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2ffc248034cd4535a9ca87823d966f0f.setIcon(icon_4f4187bf39834301ba92531ed43a470a);


            marker_2ffc248034cd4535a9ca87823d966f0f.bindTooltip(
                `<div>
                     Nymboida national park
                 </div>`,
                {"sticky": true}
            );


            var marker_1d59bff9c12d4faaac99560ff1a08ab2 = L.marker(
                [-29.529721999999996, 152.360126],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3892e2b26f5f42f1ae046a5ae2221098 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1d59bff9c12d4faaac99560ff1a08ab2.setIcon(icon_3892e2b26f5f42f1ae046a5ae2221098);


            marker_1d59bff9c12d4faaac99560ff1a08ab2.bindTooltip(
                `<div>
                     Gibraltar range national park
                 </div>`,
                {"sticky": true}
            );


            var marker_6fffb0947e70453fb565be146d9693ad = L.marker(
                [-29.358707, 152.345007],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5ba5bf274f994800b4622c0c6e79383b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6fffb0947e70453fb565be146d9693ad.setIcon(icon_5ba5bf274f994800b4622c0c6e79383b);


            marker_6fffb0947e70453fb565be146d9693ad.bindTooltip(
                `<div>
                     Washpool national park
                 </div>`,
                {"sticky": true}
            );


            var marker_5b9f63c2f4f747109a402f88a544986e = L.marker(
                [-29.824198, 153.222592],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a798d89be296448ba8612467a009ce55 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b9f63c2f4f747109a402f88a544986e.setIcon(icon_a798d89be296448ba8612467a009ce55);


            marker_5b9f63c2f4f747109a402f88a544986e.bindTooltip(
                `<div>
                     Yuraygir national park
                 </div>`,
                {"sticky": true}
            );


            var marker_d58e2aa994d1434eaaccc44eaa19d130 = L.marker(
                [-29.504990000000003, 152.931974],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f96a2fa4c9784b1b9c2599c7b777ef23 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d58e2aa994d1434eaaccc44eaa19d130.setIcon(icon_f96a2fa4c9784b1b9c2599c7b777ef23);


            marker_d58e2aa994d1434eaaccc44eaa19d130.bindTooltip(
                `<div>
                     Fortis creek national park
                 </div>`,
                {"sticky": true}
            );


            var marker_20da4204500b46b9b1927d37e872d9f5 = L.marker(
                [-28.641419, 152.491888],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c552e2994e1e4b9fb57eedd221e95b21 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_20da4204500b46b9b1927d37e872d9f5.setIcon(icon_c552e2994e1e4b9fb57eedd221e95b21);


            marker_20da4204500b46b9b1927d37e872d9f5.bindTooltip(
                `<div>
                     Yabbra national park
                 </div>`,
                {"sticky": true}
            );


            var marker_516aa4db70ab41e99f8147f5a359add2 = L.marker(
                [-28.596815999999997, 152.711723],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9a9030d8c8e547fb9f52368dd3e5d857 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_516aa4db70ab41e99f8147f5a359add2.setIcon(icon_9a9030d8c8e547fb9f52368dd3e5d857);


            marker_516aa4db70ab41e99f8147f5a359add2.bindTooltip(
                `<div>
                     Richmond range national park
                 </div>`,
                {"sticky": true}
            );


            var marker_ddc4f330195e4379aa677f588dfd84c3 = L.marker(
                [-28.494878999999997, 152.738524],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3b3f26e5532441a8819fd4645615ec45 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ddc4f330195e4379aa677f588dfd84c3.setIcon(icon_3b3f26e5532441a8819fd4645615ec45);


            marker_ddc4f330195e4379aa677f588dfd84c3.bindTooltip(
                `<div>
                     Toonumbar national park
                 </div>`,
                {"sticky": true}
            );


            var marker_302d6c435e5245f89fac490344ba57f5 = L.marker(
                [-28.290343, 152.68098799999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_a95efecccceb48bdbdc3776f8bde1c55 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_302d6c435e5245f89fac490344ba57f5.setIcon(icon_a95efecccceb48bdbdc3776f8bde1c55);


            marker_302d6c435e5245f89fac490344ba57f5.bindTooltip(
                `<div>
                     Mount barney national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0978c3a7c8354b35b8df10b4f4ad3481 = L.marker(
                [-28.417239000000002, 153.064447],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_23725ade2da44e098efe3588782fac2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0978c3a7c8354b35b8df10b4f4ad3481.setIcon(icon_23725ade2da44e098efe3588782fac2a);


            marker_0978c3a7c8354b35b8df10b4f4ad3481.bindTooltip(
                `<div>
                     Border ranges national park
                 </div>`,
                {"sticky": true}
            );


            var marker_f37b643970cc443980953d82f5e7cf93 = L.marker(
                [-28.56124, 153.31860700000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_c59c6eb316cb4e7983d2528641546308 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f37b643970cc443980953d82f5e7cf93.setIcon(icon_c59c6eb316cb4e7983d2528641546308);


            marker_f37b643970cc443980953d82f5e7cf93.bindTooltip(
                `<div>
                     Nightcap national park
                 </div>`,
                {"sticky": true}
            );


            var marker_3a37ee38250f4bd88b4ebe5cdfb1c371 = L.marker(
                [-28.454439, 153.164508],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e33fa803577f40df99c8e6e7ca1a0f73 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3a37ee38250f4bd88b4ebe5cdfb1c371.setIcon(icon_e33fa803577f40df99c8e6e7ca1a0f73);


            marker_3a37ee38250f4bd88b4ebe5cdfb1c371.bindTooltip(
                `<div>
                     Mebbin national park
                 </div>`,
                {"sticky": true}
            );


            var marker_b745414f587244b4813a2ffd3eb6ee07 = L.marker(
                [-28.391215999999996, 153.25764099999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d7ecf48ce9d44dee99dbb357c790957c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b745414f587244b4813a2ffd3eb6ee07.setIcon(icon_d7ecf48ce9d44dee99dbb357c790957c);


            marker_b745414f587244b4813a2ffd3eb6ee07.bindTooltip(
                `<div>
                     Wollumbin national park
                 </div>`,
                {"sticky": true}
            );


            var marker_ca9487c26a3d4b2ea5ef8735c7edd185 = L.marker(
                [-28.245590999999997, 153.162029],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_032381da5ec0465486bfcde4b3edc48c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ca9487c26a3d4b2ea5ef8735c7edd185.setIcon(icon_032381da5ec0465486bfcde4b3edc48c);


            marker_ca9487c26a3d4b2ea5ef8735c7edd185.bindTooltip(
                `<div>
                     Lamington national park
                 </div>`,
                {"sticky": true}
            );


            var marker_908731d257894bbfb93b10e933a1421b = L.marker(
                [-28.240752, 153.342077],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_be6cc019c51d427288a6cb4a3cffd499 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_908731d257894bbfb93b10e933a1421b.setIcon(icon_be6cc019c51d427288a6cb4a3cffd499);


            marker_908731d257894bbfb93b10e933a1421b.bindTooltip(
                `<div>
                     Springbrook national park
                 </div>`,
                {"sticky": true}
            );


            var marker_72ba75267a4b45bf86d8c8c8d19b3cd5 = L.marker(
                [-27.873434999999997, 153.18891499999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_838f1a8cbd6244bd8e5ff7cbb8b2cbb9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_72ba75267a4b45bf86d8c8c8d19b3cd5.setIcon(icon_838f1a8cbd6244bd8e5ff7cbb8b2cbb9);


            marker_72ba75267a4b45bf86d8c8c8d19b3cd5.bindTooltip(
                `<div>
                     Tamborine national park
                 </div>`,
                {"sticky": true}
            );


            var marker_7953f75b6f0544fea033ece34e0433d8 = L.marker(
                [-31.870673999999998, 116.090773],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e8635ea5493d4a1c841a7edb44e05c9f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7953f75b6f0544fea033ece34e0433d8.setIcon(icon_e8635ea5493d4a1c841a7edb44e05c9f);


            marker_7953f75b6f0544fea033ece34e0433d8.bindTooltip(
                `<div>
                     John forrest national park
                 </div>`,
                {"sticky": true}
            );


            var marker_09193db7ed2141179768c5bc926ade3e = L.marker(
                [-32.003240000000005, 115.957295],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_56047493991f4237ac5a2d1f64d3d2f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_09193db7ed2141179768c5bc926ade3e.setIcon(icon_56047493991f4237ac5a2d1f64d3d2f4);


            marker_09193db7ed2141179768c5bc926ade3e.bindTooltip(
                `<div>
                     Queens park
                 </div>`,
                {"sticky": true}
            );


            var marker_0155f12f67b74a9db8e1e292ded1911e = L.marker(
                [-32.107325, 115.90978999999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e88d54c291ef4906822213a623fde184 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0155f12f67b74a9db8e1e292ded1911e.setIcon(icon_e88d54c291ef4906822213a623fde184);


            marker_0155f12f67b74a9db8e1e292ded1911e.bindTooltip(
                `<div>
                     Jandakot regional park
                 </div>`,
                {"sticky": true}
            );


            var marker_44ad28aa85144cab80a1b3378d260333 = L.marker(
                [-32.148697, 115.82911399999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_82a2f37af5dc4d649b77c0ea242835c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_44ad28aa85144cab80a1b3378d260333.setIcon(icon_82a2f37af5dc4d649b77c0ea242835c4);


            marker_44ad28aa85144cab80a1b3378d260333.bindTooltip(
                `<div>
                     Beeliar regional park
                 </div>`,
                {"sticky": true}
            );


            var marker_a15507dd23a4495e8de29a8cd09f4fa1 = L.marker(
                [-31.99969, 116.000603],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_1be9611061a1469ca5c4679b3a502bdc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a15507dd23a4495e8de29a8cd09f4fa1.setIcon(icon_1be9611061a1469ca5c4679b3a502bdc);


            marker_a15507dd23a4495e8de29a8cd09f4fa1.bindTooltip(
                `<div>
                     Hartfield park
                 </div>`,
                {"sticky": true}
            );


            var marker_eed3e7c9a45b4df2942ac66573d52d22 = L.marker(
                [-31.986296000000003, 116.03496299999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e518ec3f617a4a28803ed89d3865dc12 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eed3e7c9a45b4df2942ac66573d52d22.setIcon(icon_e518ec3f617a4a28803ed89d3865dc12);


            marker_eed3e7c9a45b4df2942ac66573d52d22.bindTooltip(
                `<div>
                     Mundy regional park
                 </div>`,
                {"sticky": true}
            );


            var marker_615393eb237c4ddab4ce27ed22ea7212 = L.marker(
                [-32.059647999999996, 116.07928799999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9c1c5cf717964a6b996bb9800ec291a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_615393eb237c4ddab4ce27ed22ea7212.setIcon(icon_9c1c5cf717964a6b996bb9800ec291a0);


            marker_615393eb237c4ddab4ce27ed22ea7212.bindTooltip(
                `<div>
                     Korung national park
                 </div>`,
                {"sticky": true}
            );


            var marker_41832d8c8530483fb9764cbcfa1f8e78 = L.marker(
                [-32.388773, 116.05723200000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5c66180b740a4776a114f1bff0ef8355 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41832d8c8530483fb9764cbcfa1f8e78.setIcon(icon_5c66180b740a4776a114f1bff0ef8355);


            marker_41832d8c8530483fb9764cbcfa1f8e78.bindTooltip(
                `<div>
                     Serpentine national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0de439476c464f139d0ff2c0f77c22da = L.marker(
                [-31.898342, 115.86426100000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f949313279a044aaaf0c4f6c2423d4ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0de439476c464f139d0ff2c0f77c22da.setIcon(icon_f949313279a044aaaf0c4f6c2423d4ab);


            marker_0de439476c464f139d0ff2c0f77c22da.bindTooltip(
                `<div>
                     Breckler park
                 </div>`,
                {"sticky": true}
            );


            var marker_55a290f2f921473f935d4263834bafdc = L.marker(
                [-31.853115999999996, 115.826654],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_9c8da7ef61334f758f06473ca3cbd110 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_55a290f2f921473f935d4263834bafdc.setIcon(icon_9c8da7ef61334f758f06473ca3cbd110);


            marker_55a290f2f921473f935d4263834bafdc.bindTooltip(
                `<div>
                     Celebration park
                 </div>`,
                {"sticky": true}
            );


            var marker_2e4158a6f9f54a9db99ea086b78a9524 = L.marker(
                [-31.747832, 115.785877],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_8d2bad8afcf3442eb5e182dc7d1bf619 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e4158a6f9f54a9db99ea086b78a9524.setIcon(icon_8d2bad8afcf3442eb5e182dc7d1bf619);


            marker_2e4158a6f9f54a9db99ea086b78a9524.bindTooltip(
                `<div>
                     Yellagonga regional park
                 </div>`,
                {"sticky": true}
            );


            var marker_0609daf1599942eba669a794855f4517 = L.marker(
                [-31.707971, 115.75101599999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_75481a399568434da9ee1ea31f3843c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0609daf1599942eba669a794855f4517.setIcon(icon_75481a399568434da9ee1ea31f3843c3);


            marker_0609daf1599942eba669a794855f4517.bindTooltip(
                `<div>
                     Neerabup national park
                 </div>`,
                {"sticky": true}
            );


            var marker_e3f820192b6b45d79d134fb74200b2a7 = L.marker(
                [-31.521597999999997, 115.669882],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_4f9068a4023241508434f97a25b09a37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e3f820192b6b45d79d134fb74200b2a7.setIcon(icon_4f9068a4023241508434f97a25b09a37);


            marker_e3f820192b6b45d79d134fb74200b2a7.bindTooltip(
                `<div>
                     Yanchep national park
                 </div>`,
                {"sticky": true}
            );


            var marker_b184a0ba5b3a4d7490717bcf036e8a1b = L.marker(
                [-31.942459999999997, 116.142698],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_3ae4168ff4224b649bb5dbe1fe7da24c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b184a0ba5b3a4d7490717bcf036e8a1b.setIcon(icon_3ae4168ff4224b649bb5dbe1fe7da24c);


            marker_b184a0ba5b3a4d7490717bcf036e8a1b.bindTooltip(
                `<div>
                     Beelu national park
                 </div>`,
                {"sticky": true}
            );


            var marker_0a09690ecbf84ccab4a0328022648fcb = L.marker(
                [-31.971259000000003, 116.26322900000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bc852591359a489cba5d10016603d348 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0a09690ecbf84ccab4a0328022648fcb.setIcon(icon_bc852591359a489cba5d10016603d348);


            marker_0a09690ecbf84ccab4a0328022648fcb.bindTooltip(
                `<div>
                     Helena national park
                 </div>`,
                {"sticky": true}
            );


            var marker_fb05f980e5a44c8a870258f005c45829 = L.marker(
                [-32.094664, 116.554604],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_b6982d95ec454335968cd0aeeb640c6e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fb05f980e5a44c8a870258f005c45829.setIcon(icon_b6982d95ec454335968cd0aeeb640c6e);


            marker_fb05f980e5a44c8a870258f005c45829.bindTooltip(
                `<div>
                     Wandoo national park
                 </div>`,
                {"sticky": true}
            );


            var marker_8410ad38c66240d1a8897a4554f3a449 = L.marker(
                [-32.470025, 116.657316],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_05c92dea02c04db1b60c0fdd5ae6d41d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8410ad38c66240d1a8897a4554f3a449.setIcon(icon_05c92dea02c04db1b60c0fdd5ae6d41d);


            marker_8410ad38c66240d1a8897a4554f3a449.bindTooltip(
                `<div>
                     Lupton conservation park
                 </div>`,
                {"sticky": true}
            );


            var marker_f644798d0bf14d739e9439d17c277d24 = L.marker(
                [-32.763139, 116.011095],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bdf4225e2ed34649a792bcfa53fc25a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f644798d0bf14d739e9439d17c277d24.setIcon(icon_bdf4225e2ed34649a792bcfa53fc25a2);


            marker_f644798d0bf14d739e9439d17c277d24.bindTooltip(
                `<div>
                     Lane poole reserve park
                 </div>`,
                {"sticky": true}
            );


            var marker_13a539a76f8b47ba9fbb04f1ec8c213f = L.marker(
                [-33.365168, 115.957632],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_fbd2b41348b04f11a36930737ddce5ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_13a539a76f8b47ba9fbb04f1ec8c213f.setIcon(icon_fbd2b41348b04f11a36930737ddce5ba);


            marker_13a539a76f8b47ba9fbb04f1ec8c213f.bindTooltip(
                `<div>
                     Wellington national park
                 </div>`,
                {"sticky": true}
            );


            var marker_aa19422275bf49189d95721e11c43575 = L.marker(
                [-33.544082, 115.517448],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ff9dd875c88a486dac9d8ecac875f119 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa19422275bf49189d95721e11c43575.setIcon(icon_ff9dd875c88a486dac9d8ecac875f119);


            marker_aa19422275bf49189d95721e11c43575.bindTooltip(
                `<div>
                     Tuart forest national park
                 </div>`,
                {"sticky": true}
            );


            var marker_bf3cf48a8a8540e5ab0fe6d54b5b3c40 = L.marker(
                [-33.786789, 115.486269],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_653ba490c6374960a80ef97ab1da3ed2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bf3cf48a8a8540e5ab0fe6d54b5b3c40.setIcon(icon_653ba490c6374960a80ef97ab1da3ed2);


            marker_bf3cf48a8a8540e5ab0fe6d54b5b3c40.bindTooltip(
                `<div>
                     Whicher national park
                 </div>`,
                {"sticky": true}
            );


            var marker_73e947aef95b4449aab4f54d9a9c3e3d = L.marker(
                [-33.898742999999996, 115.29569199999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f7da93bd48614706b05f2f4bb23297b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_73e947aef95b4449aab4f54d9a9c3e3d.setIcon(icon_f7da93bd48614706b05f2f4bb23297b9);


            marker_73e947aef95b4449aab4f54d9a9c3e3d.bindTooltip(
                `<div>
                     Rapids conservation park
                 </div>`,
                {"sticky": true}
            );


            var marker_5bd40ab3195e4d3e8a6ff74ec4c62dce = L.marker(
                [-34.370866, 115.865197],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_532c18141f904240a6b6d5e6ab7154f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bd40ab3195e4d3e8a6ff74ec4c62dce.setIcon(icon_532c18141f904240a6b6d5e6ab7154f2);


            marker_5bd40ab3195e4d3e8a6ff74ec4c62dce.bindTooltip(
                `<div>
                     Greater beedelup national park
                 </div>`,
                {"sticky": true}
            );


            var marker_df4da339f0d0456fba788208d00a3ee1 = L.marker(
                [-34.178169, 116.38678300000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_242f824a518340d9b1366241ca20d50b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_df4da339f0d0456fba788208d00a3ee1.setIcon(icon_242f824a518340d9b1366241ca20d50b);


            marker_df4da339f0d0456fba788208d00a3ee1.bindTooltip(
                `<div>
                     Greater kingston national park
                 </div>`,
                {"sticky": true}
            );


            var marker_db08ff8ad01c435e954ad3a32cd0de4c = L.marker(
                [-34.54886, 116.430728],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ee5a8481bd924e7d9bd512cca68cfeb2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_db08ff8ad01c435e954ad3a32cd0de4c.setIcon(icon_ee5a8481bd924e7d9bd512cca68cfeb2);


            marker_db08ff8ad01c435e954ad3a32cd0de4c.bindTooltip(
                `<div>
                     Shannon national park
                 </div>`,
                {"sticky": true}
            );


            var marker_bd4f84e2da99450dbc2518329f2b5337 = L.marker(
                [-34.604265000000005, 116.22868999999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_cd4883a179374c07905d4fb631570022 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd4f84e2da99450dbc2518329f2b5337.setIcon(icon_cd4883a179374c07905d4fb631570022);


            marker_bd4f84e2da99450dbc2518329f2b5337.bindTooltip(
                `<div>
                     Jane national park
                 </div>`,
                {"sticky": true}
            );


            var marker_2cb23c2e4916453f84ba28af0a9cc605 = L.marker(
                [-34.85595, 116.61215],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_d7907323a6d74ad083aae552974329f7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2cb23c2e4916453f84ba28af0a9cc605.setIcon(icon_d7907323a6d74ad083aae552974329f7);


            marker_2cb23c2e4916453f84ba28af0a9cc605.bindTooltip(
                `<div>
                     Mount frankland south national park
                 </div>`,
                {"sticky": true}
            );


            var marker_d1c05711f0d14d4182f991390b0575df = L.marker(
                [-34.753337, 116.66560600000001],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_effe5b306ee341c89f7c1b0e6c50679d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d1c05711f0d14d4182f991390b0575df.setIcon(icon_effe5b306ee341c89f7c1b0e6c50679d);


            marker_d1c05711f0d14d4182f991390b0575df.bindTooltip(
                `<div>
                     Mount frankland national park
                 </div>`,
                {"sticky": true}
            );


            var marker_fb0aea69f9964725bc824a64d5b39bb7 = L.marker(
                [-34.674316999999995, 116.68206],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_91c96b07dc0546539139b8e849c63b37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fb0aea69f9964725bc824a64d5b39bb7.setIcon(icon_91c96b07dc0546539139b8e849c63b37);


            marker_fb0aea69f9964725bc824a64d5b39bb7.bindTooltip(
                `<div>
                     Mount frankland north national park
                 </div>`,
                {"sticky": true}
            );


            var marker_1f05299ecf164d6187f268413f52ac77 = L.marker(
                [-34.563563, 116.72329199999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_bdc3a89162c94ce68be327bd050667aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1f05299ecf164d6187f268413f52ac77.setIcon(icon_bdc3a89162c94ce68be327bd050667aa);


            marker_1f05299ecf164d6187f268413f52ac77.bindTooltip(
                `<div>
                     Lake muir national park
                 </div>`,
                {"sticky": true}
            );


            var marker_49a3328ac6f7403298e7678bfa1e490e = L.marker(
                [-34.713149, 117.010631],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_dc675fdfa17e4b0e842d30f384d8a3f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49a3328ac6f7403298e7678bfa1e490e.setIcon(icon_dc675fdfa17e4b0e842d30f384d8a3f4);


            marker_49a3328ac6f7403298e7678bfa1e490e.bindTooltip(
                `<div>
                     Mount roe national park
                 </div>`,
                {"sticky": true}
            );


            var marker_7fcb2017d3d64d92b67509c047e7449e = L.marker(
                [-34.834976, 117.34323799999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_ce441831850849b3813443cd410bc5d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fcb2017d3d64d92b67509c047e7449e.setIcon(icon_ce441831850849b3813443cd410bc5d8);


            marker_7fcb2017d3d64d92b67509c047e7449e.bindTooltip(
                `<div>
                     Mount lindesoy national park
                 </div>`,
                {"sticky": true}
            );


            var marker_927c7dcd400d4186b05a996857fbd91d = L.marker(
                [-34.405529, 117.90674399999999],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_e26b7e4112c84b19920435108e1e772d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_927c7dcd400d4186b05a996857fbd91d.setIcon(icon_e26b7e4112c84b19920435108e1e772d);


            marker_927c7dcd400d4186b05a996857fbd91d.bindTooltip(
                `<div>
                     Stirling range national park
                 </div>`,
                {"sticky": true}
            );


            var marker_f20565cfe7724044bbd81adf0176b355 = L.marker(
                [-38.9517, 146.343009],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6cb243bc5e2b4af4844130d2e34f0685 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f20565cfe7724044bbd81adf0176b355.setIcon(icon_6cb243bc5e2b4af4844130d2e34f0685);


            marker_f20565cfe7724044bbd81adf0176b355.bindTooltip(
                `<div>
                     Wilsons promontory national park
                 </div>`,
                {"sticky": true}
            );


            var marker_c2811024f3504bcf972e1db3ac4ba656 = L.marker(
                [-41.042276, 148.15424],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6d3d422b93314b88a448962d40027e24 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c2811024f3504bcf972e1db3ac4ba656.setIcon(icon_6d3d422b93314b88a448962d40027e24);


            marker_c2811024f3504bcf972e1db3ac4ba656.bindTooltip(
                `<div>
                     Mount william national park
                 </div>`,
                {"sticky": true}
            );


            var marker_3e3a4c4bf36f457180bd4551a9c6cb50 = L.marker(
                [-41.568598, 147.66086299999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_f0d9c310e6ce4bed9eb2d85959b1747d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3e3a4c4bf36f457180bd4551a9c6cb50.setIcon(icon_f0d9c310e6ce4bed9eb2d85959b1747d);


            marker_3e3a4c4bf36f457180bd4551a9c6cb50.bindTooltip(
                `<div>
                     Ben lomond national park
                 </div>`,
                {"sticky": true}
            );


            var marker_19e6e89023904466aa28c5050be9a4ca = L.marker(
                [-42.64921, 148.098865],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_10e40ef4900a49d585341f0ac07560bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_19e6e89023904466aa28c5050be9a4ca.setIcon(icon_10e40ef4900a49d585341f0ac07560bc);


            marker_19e6e89023904466aa28c5050be9a4ca.bindTooltip(
                `<div>
                     Maria island national park
                 </div>`,
                {"sticky": true}
            );


            var marker_1aec4d3a3c404598b3f7f7171a100cae = L.marker(
                [-41.778881, 148.193511],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_82092c69750c4cd2802c856e65363a80 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1aec4d3a3c404598b3f7f7171a100cae.setIcon(icon_82092c69750c4cd2802c856e65363a80);


            marker_1aec4d3a3c404598b3f7f7171a100cae.bindTooltip(
                `<div>
                     Douglas-apsley national park
                 </div>`,
                {"sticky": true}
            );


            var marker_a7ebb900dd9144cfb9b4abcc4a7ddac7 = L.marker(
                [-41.11257, 146.65588200000002],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_082eb80258e045abbb08a0824d8d2b92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7ebb900dd9144cfb9b4abcc4a7ddac7.setIcon(icon_082eb80258e045abbb08a0824d8d2b92);


            marker_a7ebb900dd9144cfb9b4abcc4a7ddac7.bindTooltip(
                `<div>
                     Narawntapu national park
                 </div>`,
                {"sticky": true}
            );


            var marker_050a5bedf9e040e7bbd7bebb18274aab = L.marker(
                [-41.87036, 145.935981],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_6be6368ceb3741d29c087f49cd80a2db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_050a5bedf9e040e7bbd7bebb18274aab.setIcon(icon_6be6368ceb3741d29c087f49cd80a2db);


            marker_050a5bedf9e040e7bbd7bebb18274aab.bindTooltip(
                `<div>
                     Cradle mountain lake st clair national park
                 </div>`,
                {"sticky": true}
            );


            var marker_42bda3c5c1824b509baf884f4c84e120 = L.marker(
                [-41.905120000000004, 146.231495],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_79113f6a347d427cb79b37ed8c153fc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_42bda3c5c1824b509baf884f4c84e120.setIcon(icon_79113f6a347d427cb79b37ed8c153fc5);


            marker_42bda3c5c1824b509baf884f4c84e120.bindTooltip(
                `<div>
                     Walls of jerusalem national park
                 </div>`,
                {"sticky": true}
            );


            var marker_46c5bf9870c74dd2b20547b3f77e15e2 = L.marker(
                [-42.454653, 145.95111599999998],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_22f7b10c58be44cda20e17ffebc1bd69 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_46c5bf9870c74dd2b20547b3f77e15e2.setIcon(icon_22f7b10c58be44cda20e17ffebc1bd69);


            marker_46c5bf9870c74dd2b20547b3f77e15e2.bindTooltip(
                `<div>
                     Franklin gordon wild rivers national park
                 </div>`,
                {"sticky": true}
            );


            var marker_85a5e938595945908ad440e7d60c2b40 = L.marker(
                [-43.19055, 146.195102],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_42a0854312e942519bd548014d24b901 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85a5e938595945908ad440e7d60c2b40.setIcon(icon_42a0854312e942519bd548014d24b901);


            marker_85a5e938595945908ad440e7d60c2b40.bindTooltip(
                `<div>
                     Southwest national park
                 </div>`,
                {"sticky": true}
            );


            var marker_5b9c80f8a93445cf823f884db26e17cc = L.marker(
                [-42.650515999999996, 146.590352],
                {}
            ).addTo(feature_group_b9db9e28c9f14ed5ac3baec9cd52e7db);


            var icon_5859759aa1244303b10f485f00c0e15a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5b9c80f8a93445cf823f884db26e17cc.setIcon(icon_5859759aa1244303b10f485f00c0e15a);


            marker_5b9c80f8a93445cf823f884db26e17cc.bindTooltip(
                `<div>
                     Mount field national park
                 </div>`,
                {"sticky": true}
            );

</script>
