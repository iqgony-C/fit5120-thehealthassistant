<?php
/*
Template Name: Map Test Template
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
                #map_0dc0591f7da5419ca2f8bbbd04337ef9 {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>

    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.7/dist/leaflet-search.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.7/dist/leaflet-search.min.css"/>
</head>
<body>

            <div class="folium-map" id="map_0dc0591f7da5419ca2f8bbbd04337ef9" ></div>

</body>
<script>

            var map_0dc0591f7da5419ca2f8bbbd04337ef9 = L.map(
                "map_0dc0591f7da5419ca2f8bbbd04337ef9",
                {
                    center: [-38.043995, 145.264296],
                    crs: L.CRS.EPSG3857,
                    zoom: 6,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );
            L.control.scale().addTo(map_0dc0591f7da5419ca2f8bbbd04337ef9);





            var tile_layer_32011e4a67704fc99166ca38c6c12f77 = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {"attribution": "Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_0dc0591f7da5419ca2f8bbbd04337ef9);


            var feature_group_26b2e0d157ad46869ba4c0a86468f87a = L.featureGroup(
                {}
            ).addTo(map_0dc0591f7da5419ca2f8bbbd04337ef9);


            var marker_30fc70233ad64bfeab4e74740d4bc502 = L.marker(
                [-35.3114, 149.028152],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_1b850e66b0564604a2375b6c25e5bcfe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_30fc70233ad64bfeab4e74740d4bc502.setIcon(icon_1b850e66b0564604a2375b6c25e5bcfe);


        var popup_ecd05612dfa84884bb15d5c828f7dcf3 = L.popup({"maxWidth": "100%"});


            var html_130344540d5a4c83af2cce66154207e7 = $(`<div id="html_130344540d5a4c83af2cce66154207e7" style="width: 100.0%; height: 100.0%;">Porter Street Neighbourhood Park</div>`)[0];
            popup_ecd05612dfa84884bb15d5c828f7dcf3.setContent(html_130344540d5a4c83af2cce66154207e7);


        marker_30fc70233ad64bfeab4e74740d4bc502.bindPopup(popup_ecd05612dfa84884bb15d5c828f7dcf3)
        ;




            var marker_4157cfe6f535449686c6cd6cb79e55b7 = L.marker(
                [-35.268338, 149.141855],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_9dc32ce794b34a689fef501e38672276 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4157cfe6f535449686c6cd6cb79e55b7.setIcon(icon_9dc32ce794b34a689fef501e38672276);


        var popup_93eb0337878a4f51b6c685c5b3847044 = L.popup({"maxWidth": "100%"});


            var html_73134e90e6324c2bb4f1fb7071cd2127 = $(`<div id="html_73134e90e6324c2bb4f1fb7071cd2127" style="width: 100.0%; height: 100.0%;">Corroboree Park</div>`)[0];
            popup_93eb0337878a4f51b6c685c5b3847044.setContent(html_73134e90e6324c2bb4f1fb7071cd2127);


        marker_4157cfe6f535449686c6cd6cb79e55b7.bindPopup(popup_93eb0337878a4f51b6c685c5b3847044)
        ;




            var marker_019a7d816ac24a76a5c5dcc76738da62 = L.marker(
                [-35.319146999999994, 149.100659],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_46c9335afedf40369becb8530e895308 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_019a7d816ac24a76a5c5dcc76738da62.setIcon(icon_46c9335afedf40369becb8530e895308);


        var popup_85ff94bb683148139ecc014c481c5551 = L.popup({"maxWidth": "100%"});


            var html_5da1528db5d44c779521b61fbea1a064 = $(`<div id="html_5da1528db5d44c779521b61fbea1a064" style="width: 100.0%; height: 100.0%;">Lawley Street - Neighbourhood Park</div>`)[0];
            popup_85ff94bb683148139ecc014c481c5551.setContent(html_5da1528db5d44c779521b61fbea1a064);


        marker_019a7d816ac24a76a5c5dcc76738da62.bindPopup(popup_85ff94bb683148139ecc014c481c5551)
        ;




            var marker_2feffd0f7e024e40a9cad0af5e37ca65 = L.marker(
                [-35.206624, 149.038999],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_417d837184574214893829a44d737672 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2feffd0f7e024e40a9cad0af5e37ca65.setIcon(icon_417d837184574214893829a44d737672);


        var popup_19314f610c9d420bb0a61dcebb71586f = L.popup({"maxWidth": "100%"});


            var html_681460e97f6f487bbfc7af6199faee5c = $(`<div id="html_681460e97f6f487bbfc7af6199faee5c" style="width: 100.0%; height: 100.0%;">Blackwell Circuit Neighbourhood Park</div>`)[0];
            popup_19314f610c9d420bb0a61dcebb71586f.setContent(html_681460e97f6f487bbfc7af6199faee5c);


        marker_2feffd0f7e024e40a9cad0af5e37ca65.bindPopup(popup_19314f610c9d420bb0a61dcebb71586f)
        ;




            var marker_7d8800d3735d4a538c799e9b1b643159 = L.marker(
                [-35.193455, 149.106676],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_2e8e29109e3f4017aaae27190b6796a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7d8800d3735d4a538c799e9b1b643159.setIcon(icon_2e8e29109e3f4017aaae27190b6796a7);


        var popup_fe0ad7ff4fbb490e8c840cd8aa514afb = L.popup({"maxWidth": "100%"});


            var html_279bafc22b59494c9345caf107073a95 = $(`<div id="html_279bafc22b59494c9345caf107073a95" style="width: 100.0%; height: 100.0%;">Lyrebird Place Pedestrian Parkland</div>`)[0];
            popup_fe0ad7ff4fbb490e8c840cd8aa514afb.setContent(html_279bafc22b59494c9345caf107073a95);


        marker_7d8800d3735d4a538c799e9b1b643159.bindPopup(popup_fe0ad7ff4fbb490e8c840cd8aa514afb)
        ;




            var marker_f2eaf623e0564722905849a3cca7ec29 = L.marker(
                [-35.336639, 149.073916],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_af8e282b708d46bea6a976dcde0046e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f2eaf623e0564722905849a3cca7ec29.setIcon(icon_af8e282b708d46bea6a976dcde0046e6);


        var popup_6e5f148335804353a32b4ea4fecd3856 = L.popup({"maxWidth": "100%"});


            var html_fb79f0c338af450da7b33bbb5576ced9 = $(`<div id="html_fb79f0c338af450da7b33bbb5576ced9" style="width: 100.0%; height: 100.0%;">Devonport Street - Neighbourhood Park</div>`)[0];
            popup_6e5f148335804353a32b4ea4fecd3856.setContent(html_fb79f0c338af450da7b33bbb5576ced9);


        marker_f2eaf623e0564722905849a3cca7ec29.bindPopup(popup_6e5f148335804353a32b4ea4fecd3856)
        ;




            var marker_4076d2f5cf7e4991ada83d2579a350dd = L.marker(
                [-35.421279999999996, 149.122054],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7e5859584b224e5dad3e985ff265e46c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4076d2f5cf7e4991ada83d2579a350dd.setIcon(icon_7e5859584b224e5dad3e985ff265e46c);


        var popup_36c782966e3d436881514c0fc33af421 = L.popup({"maxWidth": "100%"});


            var html_299b7becb52a4a229b66fa1192d11400 = $(`<div id="html_299b7becb52a4a229b66fa1192d11400" style="width: 100.0%; height: 100.0%;">Alston Street Neighbourhood Park</div>`)[0];
            popup_36c782966e3d436881514c0fc33af421.setContent(html_299b7becb52a4a229b66fa1192d11400);


        marker_4076d2f5cf7e4991ada83d2579a350dd.bindPopup(popup_36c782966e3d436881514c0fc33af421)
        ;




            var marker_11410ac0cf5c45089ccce985e092e680 = L.marker(
                [-35.408122999999996, 149.129002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_18b94945fdc4471fa40073c58a02c9a9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_11410ac0cf5c45089ccce985e092e680.setIcon(icon_18b94945fdc4471fa40073c58a02c9a9);


        var popup_7a2c716dee8f493e99c64298257f4c75 = L.popup({"maxWidth": "100%"});


            var html_7044daa24a81400797e6f2c6978d0b44 = $(`<div id="html_7044daa24a81400797e6f2c6978d0b44" style="width: 100.0%; height: 100.0%;">Hawkesworth Place - Neighbourhood Park</div>`)[0];
            popup_7a2c716dee8f493e99c64298257f4c75.setContent(html_7044daa24a81400797e6f2c6978d0b44);


        marker_11410ac0cf5c45089ccce985e092e680.bindPopup(popup_7a2c716dee8f493e99c64298257f4c75)
        ;




            var marker_c78dbb84d6f3422cb91657392af7e6f3 = L.marker(
                [-35.402904, 149.071724],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_18663a97173a4ba9a858957765b27b56 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c78dbb84d6f3422cb91657392af7e6f3.setIcon(icon_18663a97173a4ba9a858957765b27b56);


        var popup_46d5e5d7319d4ad99eabe7f8de2e10a0 = L.popup({"maxWidth": "100%"});


            var html_3009653c525f41f4a812f8298e17efd4 = $(`<div id="html_3009653c525f41f4a812f8298e17efd4" style="width: 100.0%; height: 100.0%;">Lake Tuggeranong District Park</div>`)[0];
            popup_46d5e5d7319d4ad99eabe7f8de2e10a0.setContent(html_3009653c525f41f4a812f8298e17efd4);


        marker_c78dbb84d6f3422cb91657392af7e6f3.bindPopup(popup_46d5e5d7319d4ad99eabe7f8de2e10a0)
        ;




            var marker_1285de3f98614cc88ed9f87c852c2a21 = L.marker(
                [-35.372251, 149.062246],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_f8928636c1e742b9bc5ac1cd1108ce54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1285de3f98614cc88ed9f87c852c2a21.setIcon(icon_f8928636c1e742b9bc5ac1cd1108ce54);


        var popup_51cbeebf63e147348daef189733f88a4 = L.popup({"maxWidth": "100%"});


            var html_2f2892fad0d94384aaaa32e19fe182b5 = $(`<div id="html_2f2892fad0d94384aaaa32e19fe182b5" style="width: 100.0%; height: 100.0%;">Rundle Place - Neighbourhood Park</div>`)[0];
            popup_51cbeebf63e147348daef189733f88a4.setContent(html_2f2892fad0d94384aaaa32e19fe182b5);


        marker_1285de3f98614cc88ed9f87c852c2a21.bindPopup(popup_51cbeebf63e147348daef189733f88a4)
        ;




            var marker_47511c305ffc42a2b15c3620c2e68313 = L.marker(
                [-35.341884, 149.227383],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_192aedf3e6504956bd29a205330a3743 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_47511c305ffc42a2b15c3620c2e68313.setIcon(icon_192aedf3e6504956bd29a205330a3743);


        var popup_f11df47d5d9d4a3f985834357f0a8506 = L.popup({"maxWidth": "100%"});


            var html_c3774d30aac74edcb5be4995f33c9637 = $(`<div id="html_c3774d30aac74edcb5be4995f33c9637" style="width: 100.0%; height: 100.0%;">River Street Neighbourhood Park</div>`)[0];
            popup_f11df47d5d9d4a3f985834357f0a8506.setContent(html_c3774d30aac74edcb5be4995f33c9637);


        marker_47511c305ffc42a2b15c3620c2e68313.bindPopup(popup_f11df47d5d9d4a3f985834357f0a8506)
        ;




            var marker_db1eda05dafc459f8bef4d6eea3a1596 = L.marker(
                [-35.237826, 149.074645],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a211ecc4fbb647e5974228c2bb77cd26 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_db1eda05dafc459f8bef4d6eea3a1596.setIcon(icon_a211ecc4fbb647e5974228c2bb77cd26);


        var popup_7857e3f06b804dc89bbce770d5874fdd = L.popup({"maxWidth": "100%"});


            var html_7315a6073a8e4c5b9b2855f240629310 = $(`<div id="html_7315a6073a8e4c5b9b2855f240629310" style="width: 100.0%; height: 100.0%;">John Knight Memorial Park</div>`)[0];
            popup_7857e3f06b804dc89bbce770d5874fdd.setContent(html_7315a6073a8e4c5b9b2855f240629310);


        marker_db1eda05dafc459f8bef4d6eea3a1596.bindPopup(popup_7857e3f06b804dc89bbce770d5874fdd)
        ;




            var marker_efd92525876e4d52b024c320fcef96f3 = L.marker(
                [-35.314768, 149.10578999999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b6b60fbdc20248dbae7b6dd60a99661c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_efd92525876e4d52b024c320fcef96f3.setIcon(icon_b6b60fbdc20248dbae7b6dd60a99661c);


        var popup_5c5391f89c784e838e22c379cc73b26e = L.popup({"maxWidth": "100%"});


            var html_ee0c570b707f45d692e8899102aa213b = $(`<div id="html_ee0c570b707f45d692e8899102aa213b" style="width: 100.0%; height: 100.0%;">Hannah Place - Pedestrian Parkland</div>`)[0];
            popup_5c5391f89c784e838e22c379cc73b26e.setContent(html_ee0c570b707f45d692e8899102aa213b);


        marker_efd92525876e4d52b024c320fcef96f3.bindPopup(popup_5c5391f89c784e838e22c379cc73b26e)
        ;




            var marker_d9113c5b527949c3822e413feb343694 = L.marker(
                [-35.264871, 149.113599],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b8821ce61cfc48fdb51188a94ff99b1a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d9113c5b527949c3822e413feb343694.setIcon(icon_b8821ce61cfc48fdb51188a94ff99b1a);


        var popup_0bed8d40fa87422ca2a98c362b5d787a = L.popup({"maxWidth": "100%"});


            var html_df9bc2952a7d463f8fe3bb5e2bca6c6e = $(`<div id="html_df9bc2952a7d463f8fe3bb5e2bca6c6e" style="width: 100.0%; height: 100.0%;">Cockle Street  Pedestrian Parkland</div>`)[0];
            popup_0bed8d40fa87422ca2a98c362b5d787a.setContent(html_df9bc2952a7d463f8fe3bb5e2bca6c6e);


        marker_d9113c5b527949c3822e413feb343694.bindPopup(popup_0bed8d40fa87422ca2a98c362b5d787a)
        ;




            var marker_5525bb453de34e9eb1383de5297e567e = L.marker(
                [-35.201965, 149.038737],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_37322d7a03bd49908e6b3c19ab9730e4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5525bb453de34e9eb1383de5297e567e.setIcon(icon_37322d7a03bd49908e6b3c19ab9730e4);


        var popup_15353543762e4c18897d65d62b639af4 = L.popup({"maxWidth": "100%"});


            var html_768a0f8802c94eacaf6c74285b711c06 = $(`<div id="html_768a0f8802c94eacaf6c74285b711c06" style="width: 100.0%; height: 100.0%;">Packham Place Neighbourhood Park</div>`)[0];
            popup_15353543762e4c18897d65d62b639af4.setContent(html_768a0f8802c94eacaf6c74285b711c06);


        marker_5525bb453de34e9eb1383de5297e567e.bindPopup(popup_15353543762e4c18897d65d62b639af4)
        ;




            var marker_de4ffa15b87349cdba6b54a2814a8211 = L.marker(
                [-35.389103000000006, 149.05193500000001],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_dab53e723e13407082bc4a07d0021246 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_de4ffa15b87349cdba6b54a2814a8211.setIcon(icon_dab53e723e13407082bc4a07d0021246);


        var popup_b957a71d3e15420ab5868764e7fd112b = L.popup({"maxWidth": "100%"});


            var html_623d9e20656b4deaa7a8f81a41631319 = $(`<div id="html_623d9e20656b4deaa7a8f81a41631319" style="width: 100.0%; height: 100.0%;">Boddington Crescent - Neighbourhood Park</div>`)[0];
            popup_b957a71d3e15420ab5868764e7fd112b.setContent(html_623d9e20656b4deaa7a8f81a41631319);


        marker_de4ffa15b87349cdba6b54a2814a8211.bindPopup(popup_b957a71d3e15420ab5868764e7fd112b)
        ;




            var marker_35ea364738034267a5052554d7a6c4b6 = L.marker(
                [-35.357267, 149.063593],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a33b08e285394009ae5b4c66f41ac7a6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_35ea364738034267a5052554d7a6c4b6.setIcon(icon_a33b08e285394009ae5b4c66f41ac7a6);


        var popup_d0b15338a0a54bd293dc0d622cedae27 = L.popup({"maxWidth": "100%"});


            var html_833b70eac65e45929904581821821efe = $(`<div id="html_833b70eac65e45929904581821821efe" style="width: 100.0%; height: 100.0%;">Nemarang Crescent Neighbourhood Park</div>`)[0];
            popup_d0b15338a0a54bd293dc0d622cedae27.setContent(html_833b70eac65e45929904581821821efe);


        marker_35ea364738034267a5052554d7a6c4b6.bindPopup(popup_d0b15338a0a54bd293dc0d622cedae27)
        ;




            var marker_62a2aa450af140839e3c113ed0170b03 = L.marker(
                [-35.209532, 149.077357],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7c537fe4952b401497935dbc7aff2d07 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_62a2aa450af140839e3c113ed0170b03.setIcon(icon_7c537fe4952b401497935dbc7aff2d07);


        var popup_132827f8f9ca40b0aa80fb8a7da5cc97 = L.popup({"maxWidth": "100%"});


            var html_2ba4fa30d5364283adccf2a6ddd766ce = $(`<div id="html_2ba4fa30d5364283adccf2a6ddd766ce" style="width: 100.0%; height: 100.0%;">Kingston Street Pedestrian Parkland</div>`)[0];
            popup_132827f8f9ca40b0aa80fb8a7da5cc97.setContent(html_2ba4fa30d5364283adccf2a6ddd766ce);


        marker_62a2aa450af140839e3c113ed0170b03.bindPopup(popup_132827f8f9ca40b0aa80fb8a7da5cc97)
        ;




            var marker_761e64cf686c40d496984868a14b810d = L.marker(
                [-35.456377, 149.084235],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_6c1d875f022f4fe8be13603b469f8d75 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_761e64cf686c40d496984868a14b810d.setIcon(icon_6c1d875f022f4fe8be13603b469f8d75);


        var popup_608c85a0d4b94b45a43c70f41fdba396 = L.popup({"maxWidth": "100%"});


            var html_8aef04f7e08b432ebaa9f286380f9e85 = $(`<div id="html_8aef04f7e08b432ebaa9f286380f9e85" style="width: 100.0%; height: 100.0%;">Point Hut District Park</div>`)[0];
            popup_608c85a0d4b94b45a43c70f41fdba396.setContent(html_8aef04f7e08b432ebaa9f286380f9e85);


        marker_761e64cf686c40d496984868a14b810d.bindPopup(popup_608c85a0d4b94b45a43c70f41fdba396)
        ;




            var marker_049049201fd2426e880af76d71fd0e98 = L.marker(
                [-35.323883, 148.941168],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_015f621ff20440b88fbf97ea36fa88db = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_049049201fd2426e880af76d71fd0e98.setIcon(icon_015f621ff20440b88fbf97ea36fa88db);


        var popup_a5b809abf23e4f9aa9cfb88a0e315449 = L.popup({"maxWidth": "100%"});


            var html_a75bb8a12abc4b88b094107fd389d4e1 = $(`<div id="html_a75bb8a12abc4b88b094107fd389d4e1" style="width: 100.0%; height: 100.0%;">Coree - Cotter Road</div>`)[0];
            popup_a5b809abf23e4f9aa9cfb88a0e315449.setContent(html_a75bb8a12abc4b88b094107fd389d4e1);


        marker_049049201fd2426e880af76d71fd0e98.bindPopup(popup_a5b809abf23e4f9aa9cfb88a0e315449)
        ;




            var marker_b8558ac8efff4a3793d31a0591eca4f8 = L.marker(
                [-35.426712, 149.07164],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_6e14460582664a19a5fbe7ee02aaa1d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b8558ac8efff4a3793d31a0591eca4f8.setIcon(icon_6e14460582664a19a5fbe7ee02aaa1d4);


        var popup_e452c13d0d3240a89c1ea8c07481b55a = L.popup({"maxWidth": "100%"});


            var html_c67bb77219e54a12af450692eb17917c = $(`<div id="html_c67bb77219e54a12af450692eb17917c" style="width: 100.0%; height: 100.0%;">Burgoyne Street Neighbourhood Park</div>`)[0];
            popup_e452c13d0d3240a89c1ea8c07481b55a.setContent(html_c67bb77219e54a12af450692eb17917c);


        marker_b8558ac8efff4a3793d31a0591eca4f8.bindPopup(popup_e452c13d0d3240a89c1ea8c07481b55a)
        ;




            var marker_919094190b27489a8ec8f99a014aa707 = L.marker(
                [-35.350207, 149.061227],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_206f8c0b2bce45ca8c8163fec5d304d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_919094190b27489a8ec8f99a014aa707.setIcon(icon_206f8c0b2bce45ca8c8163fec5d304d9);


        var popup_4f4e617b466042d2848e5e7709e16da7 = L.popup({"maxWidth": "100%"});


            var html_c74564f76eb741fc967de1907a3d1899 = $(`<div id="html_c74564f76eb741fc967de1907a3d1899" style="width: 100.0%; height: 100.0%;">Malara Street Neighbourhood Park</div>`)[0];
            popup_4f4e617b466042d2848e5e7709e16da7.setContent(html_c74564f76eb741fc967de1907a3d1899);


        marker_919094190b27489a8ec8f99a014aa707.bindPopup(popup_4f4e617b466042d2848e5e7709e16da7)
        ;




            var marker_f0e5f12845c64086ab7e5c11989e8918 = L.marker(
                [-35.337649, 149.053683],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_312c6c06db0b4f3a8785dfcde683f27c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f0e5f12845c64086ab7e5c11989e8918.setIcon(icon_312c6c06db0b4f3a8785dfcde683f27c);


        var popup_278f6e6fe3f248d78d1b94ed2301175e = L.popup({"maxWidth": "100%"});


            var html_846ff4af8f114ea7a5ae07f6af85e911 = $(`<div id="html_846ff4af8f114ea7a5ae07f6af85e911" style="width: 100.0%; height: 100.0%;">Dillon Close - Pedestrian Parkland</div>`)[0];
            popup_278f6e6fe3f248d78d1b94ed2301175e.setContent(html_846ff4af8f114ea7a5ae07f6af85e911);


        marker_f0e5f12845c64086ab7e5c11989e8918.bindPopup(popup_278f6e6fe3f248d78d1b94ed2301175e)
        ;




            var marker_299a7c5dc7d14f199b21a44c3ca5e578 = L.marker(
                [-35.20798, 149.16024199999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_60dbbd7794dd45fe8cade49201e01142 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_299a7c5dc7d14f199b21a44c3ca5e578.setIcon(icon_60dbbd7794dd45fe8cade49201e01142);


        var popup_33633597afd34a8681d3427ea4335ece = L.popup({"maxWidth": "100%"});


            var html_9d68acbc62984434b54fd28f90b97b3b = $(`<div id="html_9d68acbc62984434b54fd28f90b97b3b" style="width: 100.0%; height: 100.0%;">Helby Street Neighbourhood Park</div>`)[0];
            popup_33633597afd34a8681d3427ea4335ece.setContent(html_9d68acbc62984434b54fd28f90b97b3b);


        marker_299a7c5dc7d14f199b21a44c3ca5e578.bindPopup(popup_33633597afd34a8681d3427ea4335ece)
        ;




            var marker_3a44ee2401024fa8a5020cf95c0c3928 = L.marker(
                [-35.31666, 149.152879],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7e5de976f2f9491f98a0e978268f891c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3a44ee2401024fa8a5020cf95c0c3928.setIcon(icon_7e5de976f2f9491f98a0e978268f891c);


        var popup_6fd0ac9f7e274e13a0ae7a0f84a72310 = L.popup({"maxWidth": "100%"});


            var html_ad7c32dfb8d74510a8dcfdf8e0d4dbc6 = $(`<div id="html_ad7c32dfb8d74510a8dcfdf8e0d4dbc6" style="width: 100.0%; height: 100.0%;">Sandalwood Street - Neighbourhood Park</div>`)[0];
            popup_6fd0ac9f7e274e13a0ae7a0f84a72310.setContent(html_ad7c32dfb8d74510a8dcfdf8e0d4dbc6);


        marker_3a44ee2401024fa8a5020cf95c0c3928.bindPopup(popup_6fd0ac9f7e274e13a0ae7a0f84a72310)
        ;




            var marker_da941366ac15400eb50af47319e2a5af = L.marker(
                [-35.330284999999996, 149.151911],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_c58a82e401714a55b0464542eaced52c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_da941366ac15400eb50af47319e2a5af.setIcon(icon_c58a82e401714a55b0464542eaced52c);


        var popup_f2f6b825d27a4f55a76a7adfb2953dc5 = L.popup({"maxWidth": "100%"});


            var html_fa4a6fbb968d4548b60b186b17ca1c63 = $(`<div id="html_fa4a6fbb968d4548b60b186b17ca1c63" style="width: 100.0%; height: 100.0%;">Kootara Crescent</div>`)[0];
            popup_f2f6b825d27a4f55a76a7adfb2953dc5.setContent(html_fa4a6fbb968d4548b60b186b17ca1c63);


        marker_da941366ac15400eb50af47319e2a5af.bindPopup(popup_f2f6b825d27a4f55a76a7adfb2953dc5)
        ;




            var marker_84575ca6f3d44ac7b163547c818cc149 = L.marker(
                [-35.157396000000006, 149.150881],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_22b782536bd34b148965c8cc945b6435 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_84575ca6f3d44ac7b163547c818cc149.setIcon(icon_22b782536bd34b148965c8cc945b6435);


        var popup_ac60b138b3484740b33ca8d707ea7570 = L.popup({"maxWidth": "100%"});


            var html_aa54f98ffeae46acafc9114579fe7ff2 = $(`<div id="html_aa54f98ffeae46acafc9114579fe7ff2" style="width: 100.0%; height: 100.0%;">Mulligans Flat Road Pedestrian Parkland</div>`)[0];
            popup_ac60b138b3484740b33ca8d707ea7570.setContent(html_aa54f98ffeae46acafc9114579fe7ff2);


        marker_84575ca6f3d44ac7b163547c818cc149.bindPopup(popup_ac60b138b3484740b33ca8d707ea7570)
        ;




            var marker_1bb30aaae7664eb183b6cae749a8172d = L.marker(
                [-35.334126, 149.030598],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_0f251d95192a4e64be9ecc9577eb97d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1bb30aaae7664eb183b6cae749a8172d.setIcon(icon_0f251d95192a4e64be9ecc9577eb97d1);


        var popup_37bab820699740acbaca562bc3dbaeeb = L.popup({"maxWidth": "100%"});


            var html_df349c063e334ccd9ab5d653cee7f48d = $(`<div id="html_df349c063e334ccd9ab5d653cee7f48d" style="width: 100.0%; height: 100.0%;">Cargelligo Street Pedestrian Parkland</div>`)[0];
            popup_37bab820699740acbaca562bc3dbaeeb.setContent(html_df349c063e334ccd9ab5d653cee7f48d);


        marker_1bb30aaae7664eb183b6cae749a8172d.bindPopup(popup_37bab820699740acbaca562bc3dbaeeb)
        ;




            var marker_fea61c5021024b32ba6caae893422e19 = L.marker(
                [-35.392426, 149.062122],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_18eabeb2688a459495e82cb84b4aac12 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fea61c5021024b32ba6caae893422e19.setIcon(icon_18eabeb2688a459495e82cb84b4aac12);


        var popup_cc0c90ca74e2454e807b3c9fcdf303f3 = L.popup({"maxWidth": "100%"});


            var html_c15c9d619ebc49a2869bdbf9fd3f39e3 = $(`<div id="html_c15c9d619ebc49a2869bdbf9fd3f39e3" style="width: 100.0%; height: 100.0%;">Kambah District Park</div>`)[0];
            popup_cc0c90ca74e2454e807b3c9fcdf303f3.setContent(html_c15c9d619ebc49a2869bdbf9fd3f39e3);


        marker_fea61c5021024b32ba6caae893422e19.bindPopup(popup_cc0c90ca74e2454e807b3c9fcdf303f3)
        ;




            var marker_0f2dd68899454dfab1daceea52e7bcac = L.marker(
                [-35.352159, 149.07701200000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b229097cc160457d8964c29a709d0d0b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0f2dd68899454dfab1daceea52e7bcac.setIcon(icon_b229097cc160457d8964c29a709d0d0b);


        var popup_a77d3687d7c04afe9206474cb95c13a9 = L.popup({"maxWidth": "100%"});


            var html_c67ae320863345678eb674a7fd7f78d5 = $(`<div id="html_c67ae320863345678eb674a7fd7f78d5" style="width: 100.0%; height: 100.0%;">Shann Place  Neighbourhood Park</div>`)[0];
            popup_a77d3687d7c04afe9206474cb95c13a9.setContent(html_c67ae320863345678eb674a7fd7f78d5);


        marker_0f2dd68899454dfab1daceea52e7bcac.bindPopup(popup_a77d3687d7c04afe9206474cb95c13a9)
        ;




            var marker_ba52270bca2146b6979ad1f44150905a = L.marker(
                [-35.392427000000005, 149.062302],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e7f71d0e26204cfe8f20e39eb9fef0ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ba52270bca2146b6979ad1f44150905a.setIcon(icon_e7f71d0e26204cfe8f20e39eb9fef0ea);


        var popup_57a6e843ad834eb6b7833d979687b1c2 = L.popup({"maxWidth": "100%"});


            var html_e914d09aba624e27bc473e249dc754ec = $(`<div id="html_e914d09aba624e27bc473e249dc754ec" style="width: 100.0%; height: 100.0%;">Kambah District Park</div>`)[0];
            popup_57a6e843ad834eb6b7833d979687b1c2.setContent(html_e914d09aba624e27bc473e249dc754ec);


        marker_ba52270bca2146b6979ad1f44150905a.bindPopup(popup_57a6e843ad834eb6b7833d979687b1c2)
        ;




            var marker_a6cbb7f4b94d439391b91db52a1b5d39 = L.marker(
                [-35.383505, 149.052571],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_9f1810876c8d4191a0ac62369aa7330d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a6cbb7f4b94d439391b91db52a1b5d39.setIcon(icon_9f1810876c8d4191a0ac62369aa7330d);


        var popup_0f47baecc98f4936bc730cca7742ccb8 = L.popup({"maxWidth": "100%"});


            var html_c8681c8d57814bea9eea6d01c7b52bc8 = $(`<div id="html_c8681c8d57814bea9eea6d01c7b52bc8" style="width: 100.0%; height: 100.0%;">Boddington Crescent Neighbourhood Park</div>`)[0];
            popup_0f47baecc98f4936bc730cca7742ccb8.setContent(html_c8681c8d57814bea9eea6d01c7b52bc8);


        marker_a6cbb7f4b94d439391b91db52a1b5d39.bindPopup(popup_0f47baecc98f4936bc730cca7742ccb8)
        ;




            var marker_439af3787f154fd59e841c3ec156d0b9 = L.marker(
                [-35.253398, 149.165685],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_0e86753f2b7946d59ba2bef4cba688c1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_439af3787f154fd59e841c3ec156d0b9.setIcon(icon_0e86753f2b7946d59ba2bef4cba688c1);


        var popup_76edb2fe6aa144f28654328543abbb26 = L.popup({"maxWidth": "100%"});


            var html_23ed78002d1345638118463d8d63a491 = $(`<div id="html_23ed78002d1345638118463d8d63a491" style="width: 100.0%; height: 100.0%;">Brennan Street  Neighbourhood Park</div>`)[0];
            popup_76edb2fe6aa144f28654328543abbb26.setContent(html_23ed78002d1345638118463d8d63a491);


        marker_439af3787f154fd59e841c3ec156d0b9.bindPopup(popup_76edb2fe6aa144f28654328543abbb26)
        ;




            var marker_59a52eb43a5d43ae8ce9b76082bc2525 = L.marker(
                [-35.404784, 149.103042],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_58a5aa40303244fa91526cc731e467ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_59a52eb43a5d43ae8ce9b76082bc2525.setIcon(icon_58a5aa40303244fa91526cc731e467ae);


        var popup_f3d56d0b63e1445cb4e6a15509a14e91 = L.popup({"maxWidth": "100%"});


            var html_35ea84d22865418d93652ef331978f8b = $(`<div id="html_35ea84d22865418d93652ef331978f8b" style="width: 100.0%; height: 100.0%;">Lansell Circuit Pedestrian Parkland</div>`)[0];
            popup_f3d56d0b63e1445cb4e6a15509a14e91.setContent(html_35ea84d22865418d93652ef331978f8b);


        marker_59a52eb43a5d43ae8ce9b76082bc2525.bindPopup(popup_f3d56d0b63e1445cb4e6a15509a14e91)
        ;




            var marker_072e021893a74fe49a8e543c7b7efadb = L.marker(
                [-35.16785, 149.143869],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_27f172c4762944cda7e9614897cc8841 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_072e021893a74fe49a8e543c7b7efadb.setIcon(icon_27f172c4762944cda7e9614897cc8841);


        var popup_88c7025567874901b0185de09d111f68 = L.popup({"maxWidth": "100%"});


            var html_16d5b42f33864dd4b352bcd9a9823f43 = $(`<div id="html_16d5b42f33864dd4b352bcd9a9823f43" style="width: 100.0%; height: 100.0%;">Amy Ackman Street Neighbourhood Park</div>`)[0];
            popup_88c7025567874901b0185de09d111f68.setContent(html_16d5b42f33864dd4b352bcd9a9823f43);


        marker_072e021893a74fe49a8e543c7b7efadb.bindPopup(popup_88c7025567874901b0185de09d111f68)
        ;




            var marker_c23dc25dcd5a4eaab692e4d270242598 = L.marker(
                [-35.188035, 149.16236899999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b66bf2521d5c49bb9a23e753b5175664 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c23dc25dcd5a4eaab692e4d270242598.setIcon(icon_b66bf2521d5c49bb9a23e753b5175664);


        var popup_34f0eae76e934835865028ac40edfd7b = L.popup({"maxWidth": "100%"});


            var html_538e74b083b8477ebf77c4b5acb96ed9 = $(`<div id="html_538e74b083b8477ebf77c4b5acb96ed9" style="width: 100.0%; height: 100.0%;">Bettong Avenue Neighbourhood Park</div>`)[0];
            popup_34f0eae76e934835865028ac40edfd7b.setContent(html_538e74b083b8477ebf77c4b5acb96ed9);


        marker_c23dc25dcd5a4eaab692e4d270242598.bindPopup(popup_34f0eae76e934835865028ac40edfd7b)
        ;




            var marker_256a5a0398a648b590868f7a68539fdd = L.marker(
                [-35.418688, 149.083038],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_f5689b23eac34a5abd80d6e3373a9d8a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_256a5a0398a648b590868f7a68539fdd.setIcon(icon_f5689b23eac34a5abd80d6e3373a9d8a);


        var popup_85198255c6654321866ce98c07b274fc = L.popup({"maxWidth": "100%"});


            var html_d75aef246f5c4e9dad5ae9cfdcac87a0 = $(`<div id="html_d75aef246f5c4e9dad5ae9cfdcac87a0" style="width: 100.0%; height: 100.0%;">Griffin Place Pedestrian Parkland</div>`)[0];
            popup_85198255c6654321866ce98c07b274fc.setContent(html_d75aef246f5c4e9dad5ae9cfdcac87a0);


        marker_256a5a0398a648b590868f7a68539fdd.bindPopup(popup_85198255c6654321866ce98c07b274fc)
        ;




            var marker_ba93c7c86f33434ebfbdcec84c05138f = L.marker(
                [-35.208529999999996, 149.001871],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_495f246390454c02aa0cb0e516b50a8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ba93c7c86f33434ebfbdcec84c05138f.setIcon(icon_495f246390454c02aa0cb0e516b50a8b);


        var popup_7d4e6dc4d78e4715946db7b7898b2a2a = L.popup({"maxWidth": "100%"});


            var html_d07a23cad85f4ceabae752c7b5b430d4 = $(`<div id="html_d07a23cad85f4ceabae752c7b5b430d4" style="width: 100.0%; height: 100.0%;">Clyde Finlay Street Neighbourhood Park</div>`)[0];
            popup_7d4e6dc4d78e4715946db7b7898b2a2a.setContent(html_d07a23cad85f4ceabae752c7b5b430d4);


        marker_ba93c7c86f33434ebfbdcec84c05138f.bindPopup(popup_7d4e6dc4d78e4715946db7b7898b2a2a)
        ;




            var marker_2641746915f646a5ace446e184abd7ff = L.marker(
                [-35.247334, 149.12096699999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4e12e7e5066e45a7a3f60df30b13c6e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2641746915f646a5ace446e184abd7ff.setIcon(icon_4e12e7e5066e45a7a3f60df30b13c6e9);


        var popup_28b7e1f3486c4758be9d521057ab8dc7 = L.popup({"maxWidth": "100%"});


            var html_839fc05676ef46ba92e99e7610c2e980 = $(`<div id="html_839fc05676ef46ba92e99e7610c2e980" style="width: 100.0%; height: 100.0%;">Lambert Place - Road Verge</div>`)[0];
            popup_28b7e1f3486c4758be9d521057ab8dc7.setContent(html_839fc05676ef46ba92e99e7610c2e980);


        marker_2641746915f646a5ace446e184abd7ff.bindPopup(popup_28b7e1f3486c4758be9d521057ab8dc7)
        ;




            var marker_102a8513cf1a46a0b5f7839a5d90e192 = L.marker(
                [-35.188399, 149.017748],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d0f1d41c741246d6aa3b54914d73489a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_102a8513cf1a46a0b5f7839a5d90e192.setIcon(icon_d0f1d41c741246d6aa3b54914d73489a);


        var popup_a4d5461812de4501af6169edef801c54 = L.popup({"maxWidth": "100%"});


            var html_75693f08ee544324828abe417446a458 = $(`<div id="html_75693f08ee544324828abe417446a458" style="width: 100.0%; height: 100.0%;">Percy Pegg Circuit Neighbourhood Park</div>`)[0];
            popup_a4d5461812de4501af6169edef801c54.setContent(html_75693f08ee544324828abe417446a458);


        marker_102a8513cf1a46a0b5f7839a5d90e192.bindPopup(popup_a4d5461812de4501af6169edef801c54)
        ;




            var marker_8c516049d28f4209861bf34c31574f87 = L.marker(
                [-35.180051, 149.119613],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_2cea01f8b046417da5a0b490b38bff1c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8c516049d28f4209861bf34c31574f87.setIcon(icon_2cea01f8b046417da5a0b490b38bff1c);


        var popup_cf176cce4e4548578daaacd150f174f3 = L.popup({"maxWidth": "100%"});


            var html_38736512058b4197aa8384275aeca1a4 = $(`<div id="html_38736512058b4197aa8384275aeca1a4" style="width: 100.0%; height: 100.0%;">Gadali Crescent Pedestrian Parkland</div>`)[0];
            popup_cf176cce4e4548578daaacd150f174f3.setContent(html_38736512058b4197aa8384275aeca1a4);


        marker_8c516049d28f4209861bf34c31574f87.bindPopup(popup_cf176cce4e4548578daaacd150f174f3)
        ;




            var marker_504b58343dd54521ae9688e89b92db75 = L.marker(
                [-35.339862, 149.09164199999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_fb532ed56af04bdbb02fa65984cb6b5c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_504b58343dd54521ae9688e89b92db75.setIcon(icon_fb532ed56af04bdbb02fa65984cb6b5c);


        var popup_a08846ccf2b3482ab5b2b281c9dd0b18 = L.popup({"maxWidth": "100%"});


            var html_23e0eb2ecdb240569f086f016722107e = $(`<div id="html_23e0eb2ecdb240569f086f016722107e" style="width: 100.0%; height: 100.0%;">Edison District Park</div>`)[0];
            popup_a08846ccf2b3482ab5b2b281c9dd0b18.setContent(html_23e0eb2ecdb240569f086f016722107e);


        marker_504b58343dd54521ae9688e89b92db75.bindPopup(popup_a08846ccf2b3482ab5b2b281c9dd0b18)
        ;




            var marker_c4a6228f3124400284ba98e34bf3449f = L.marker(
                [-35.377732, 149.053236],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5c0031028b23406a8568b30ffb7042d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c4a6228f3124400284ba98e34bf3449f.setIcon(icon_5c0031028b23406a8568b30ffb7042d9);


        var popup_edfa1fcaeae84f15aa976d8ca7c4e04a = L.popup({"maxWidth": "100%"});


            var html_2824d565db7c4472be21038820de53dc = $(`<div id="html_2824d565db7c4472be21038820de53dc" style="width: 100.0%; height: 100.0%;">Attiwell Circuit - Neighbourhood Park</div>`)[0];
            popup_edfa1fcaeae84f15aa976d8ca7c4e04a.setContent(html_2824d565db7c4472be21038820de53dc);


        marker_c4a6228f3124400284ba98e34bf3449f.bindPopup(popup_edfa1fcaeae84f15aa976d8ca7c4e04a)
        ;




            var marker_6ed66852a6ea4f56882cba9b39db50fe = L.marker(
                [-35.277923, 149.134538],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e4e9f8090a344c5dbef466dd10b51b9d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6ed66852a6ea4f56882cba9b39db50fe.setIcon(icon_e4e9f8090a344c5dbef466dd10b51b9d);


        var popup_5ca7239df7fd435e99245cea2175bfe7 = L.popup({"maxWidth": "100%"});


            var html_20fefea05a66479893cad99ca9ce1139 = $(`<div id="html_20fefea05a66479893cad99ca9ce1139" style="width: 100.0%; height: 100.0%;">City Youth Centre Basket Ball Court</div>`)[0];
            popup_5ca7239df7fd435e99245cea2175bfe7.setContent(html_20fefea05a66479893cad99ca9ce1139);


        marker_6ed66852a6ea4f56882cba9b39db50fe.bindPopup(popup_5ca7239df7fd435e99245cea2175bfe7)
        ;




            var marker_ff8566a7217b463facde45397d93e0f2 = L.marker(
                [-35.179882, 149.12991599999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_6aa5566d068e40c281ed9a0390b7a4b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ff8566a7217b463facde45397d93e0f2.setIcon(icon_6aa5566d068e40c281ed9a0390b7a4b9);


        var popup_2e9678e849224224ac9d20827cc4255d = L.popup({"maxWidth": "100%"});


            var html_3408fdba1cb146ddabd1afc33710fde2 = $(`<div id="html_3408fdba1cb146ddabd1afc33710fde2" style="width: 100.0%; height: 100.0%;">Yerrabi District Park</div>`)[0];
            popup_2e9678e849224224ac9d20827cc4255d.setContent(html_3408fdba1cb146ddabd1afc33710fde2);


        marker_ff8566a7217b463facde45397d93e0f2.bindPopup(popup_2e9678e849224224ac9d20827cc4255d)
        ;




            var marker_c0402e271fe4438e924dffff1be4d0c4 = L.marker(
                [-37.55223341, 143.8065678],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a0dc979818a046a1aa263f361b24319f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c0402e271fe4438e924dffff1be4d0c4.setIcon(icon_a0dc979818a046a1aa263f361b24319f);


        var popup_1f48d98816c74e54838750d40850cb17 = L.popup({"maxWidth": "100%"});


            var html_6fd87db11e774321898377d097211583 = $(`<div id="html_6fd87db11e774321898377d097211583" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_1f48d98816c74e54838750d40850cb17.setContent(html_6fd87db11e774321898377d097211583);


        marker_c0402e271fe4438e924dffff1be4d0c4.bindPopup(popup_1f48d98816c74e54838750d40850cb17)
        ;




            var marker_c376cb982f57492c9b6004f9d250ef07 = L.marker(
                [-37.54830503, 143.8697381],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_1ce5579b077249c5a4c4cefde32213a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c376cb982f57492c9b6004f9d250ef07.setIcon(icon_1ce5579b077249c5a4c4cefde32213a5);


        var popup_d003bb800143442fb58bd38e59f5872a = L.popup({"maxWidth": "100%"});


            var html_6e526ea77eb545cd97ac72dfc75bedfe = $(`<div id="html_6e526ea77eb545cd97ac72dfc75bedfe" style="width: 100.0%; height: 100.0%;">Black Hill</div>`)[0];
            popup_d003bb800143442fb58bd38e59f5872a.setContent(html_6e526ea77eb545cd97ac72dfc75bedfe);


        marker_c376cb982f57492c9b6004f9d250ef07.bindPopup(popup_d003bb800143442fb58bd38e59f5872a)
        ;




            var marker_52651eda9952465db199442c681b9c6c = L.marker(
                [-37.55154926, 143.8951763],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a58f657cece24224b1dca7edbd8701bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_52651eda9952465db199442c681b9c6c.setIcon(icon_a58f657cece24224b1dca7edbd8701bf);


        var popup_1a2a4133d5d2481ea21313cfe4eccaea = L.popup({"maxWidth": "100%"});


            var html_ed6b0ac095a646f29cf9f1ec93e30f3b = $(`<div id="html_ed6b0ac095a646f29cf9f1ec93e30f3b" style="width: 100.0%; height: 100.0%;">Brown Hill</div>`)[0];
            popup_1a2a4133d5d2481ea21313cfe4eccaea.setContent(html_ed6b0ac095a646f29cf9f1ec93e30f3b);


        marker_52651eda9952465db199442c681b9c6c.bindPopup(popup_1a2a4133d5d2481ea21313cfe4eccaea)
        ;




            var marker_408b4498e94b485b96923ef16b6a0635 = L.marker(
                [-37.65042933, 143.8878956],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e2a1fce9007249f9b4e26263907fab8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_408b4498e94b485b96923ef16b6a0635.setIcon(icon_e2a1fce9007249f9b4e26263907fab8b);


        var popup_e62b7c261aa34b12aefe616e2dca8298 = L.popup({"maxWidth": "100%"});


            var html_2d66d1beb5534ec1b5e7dd0d0621bc9f = $(`<div id="html_2d66d1beb5534ec1b5e7dd0d0621bc9f" style="width: 100.0%; height: 100.0%;">Buninyong</div>`)[0];
            popup_e62b7c261aa34b12aefe616e2dca8298.setContent(html_2d66d1beb5534ec1b5e7dd0d0621bc9f);


        marker_408b4498e94b485b96923ef16b6a0635.bindPopup(popup_e62b7c261aa34b12aefe616e2dca8298)
        ;




            var marker_a939b4cfe68c44e3a5dbf2f23189993d = L.marker(
                [-37.58012558, 143.8187479],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_523fa064c1444d16bfc535eaa632bbdf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a939b4cfe68c44e3a5dbf2f23189993d.setIcon(icon_523fa064c1444d16bfc535eaa632bbdf);


        var popup_e2cd6593d1b942edb028501bf8b21acb = L.popup({"maxWidth": "100%"});


            var html_67b54e4d04774759b6b1aa6c9139ecd8 = $(`<div id="html_67b54e4d04774759b6b1aa6c9139ecd8" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_e2cd6593d1b942edb028501bf8b21acb.setContent(html_67b54e4d04774759b6b1aa6c9139ecd8);


        marker_a939b4cfe68c44e3a5dbf2f23189993d.bindPopup(popup_e2cd6593d1b942edb028501bf8b21acb)
        ;




            var marker_49932cc5158546d6a88bcc1c8fc270e8 = L.marker(
                [-37.56525496, 143.8630079],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7ab51ee31b38455281606dc370610187 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_49932cc5158546d6a88bcc1c8fc270e8.setIcon(icon_7ab51ee31b38455281606dc370610187);


        var popup_adbe7e0df7f34b17ab29ffbdba5e0f81 = L.popup({"maxWidth": "100%"});


            var html_10c0f0300e3b47dda5ac36d76d8345f6 = $(`<div id="html_10c0f0300e3b47dda5ac36d76d8345f6" style="width: 100.0%; height: 100.0%;">Ballarat Central</div>`)[0];
            popup_adbe7e0df7f34b17ab29ffbdba5e0f81.setContent(html_10c0f0300e3b47dda5ac36d76d8345f6);


        marker_49932cc5158546d6a88bcc1c8fc270e8.bindPopup(popup_adbe7e0df7f34b17ab29ffbdba5e0f81)
        ;




            var marker_a6bb71e7454d4e47a34e311ca4883c58 = L.marker(
                [-37.57534311, 143.8346314],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_fba990e76d424d5ba5603a47e8ee6e1c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a6bb71e7454d4e47a34e311ca4883c58.setIcon(icon_fba990e76d424d5ba5603a47e8ee6e1c);


        var popup_3a20a95bbdc1489cba20f2d37f5e58bd = L.popup({"maxWidth": "100%"});


            var html_21c837fa6a6747cb9c1c94265a75cf78 = $(`<div id="html_21c837fa6a6747cb9c1c94265a75cf78" style="width: 100.0%; height: 100.0%;">Redan</div>`)[0];
            popup_3a20a95bbdc1489cba20f2d37f5e58bd.setContent(html_21c837fa6a6747cb9c1c94265a75cf78);


        marker_a6bb71e7454d4e47a34e311ca4883c58.bindPopup(popup_3a20a95bbdc1489cba20f2d37f5e58bd)
        ;




            var marker_10013381f8ef4ba796d24123f6c30731 = L.marker(
                [-37.53737218, 143.8368403],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_89d1f0f5e928469d9bf342e12a269336 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_10013381f8ef4ba796d24123f6c30731.setIcon(icon_89d1f0f5e928469d9bf342e12a269336);


        var popup_13a1014581544cbe9bf5069e3932277a = L.popup({"maxWidth": "100%"});


            var html_8bf16df14d004b6eb2941b538fd40126 = $(`<div id="html_8bf16df14d004b6eb2941b538fd40126" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_13a1014581544cbe9bf5069e3932277a.setContent(html_8bf16df14d004b6eb2941b538fd40126);


        marker_10013381f8ef4ba796d24123f6c30731.bindPopup(popup_13a1014581544cbe9bf5069e3932277a)
        ;




            var marker_33e2ab171bdf4eed96dcd6a176dc7f32 = L.marker(
                [-37.60729103, 143.86863469999997],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5118755e711745d6b625250702868085 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_33e2ab171bdf4eed96dcd6a176dc7f32.setIcon(icon_5118755e711745d6b625250702868085);


        var popup_271dcdcd3deb49f28642275ce649fcd2 = L.popup({"maxWidth": "100%"});


            var html_86cc65c4d7e047b89e161d1e1164fa6b = $(`<div id="html_86cc65c4d7e047b89e161d1e1164fa6b" style="width: 100.0%; height: 100.0%;">Mount Clear</div>`)[0];
            popup_271dcdcd3deb49f28642275ce649fcd2.setContent(html_86cc65c4d7e047b89e161d1e1164fa6b);


        marker_33e2ab171bdf4eed96dcd6a176dc7f32.bindPopup(popup_271dcdcd3deb49f28642275ce649fcd2)
        ;




            var marker_446a022202ec467c91d0aef6dc682662 = L.marker(
                [-37.62593629, 143.87788799999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_00fba006a19c48a194524e4ad59b8535 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_446a022202ec467c91d0aef6dc682662.setIcon(icon_00fba006a19c48a194524e4ad59b8535);


        var popup_ec644cbb200349cdba22bd70753ad805 = L.popup({"maxWidth": "100%"});


            var html_8bd890c800dc43d09d3fc91bfbb31ded = $(`<div id="html_8bd890c800dc43d09d3fc91bfbb31ded" style="width: 100.0%; height: 100.0%;">Mount Helen</div>`)[0];
            popup_ec644cbb200349cdba22bd70753ad805.setContent(html_8bd890c800dc43d09d3fc91bfbb31ded);


        marker_446a022202ec467c91d0aef6dc682662.bindPopup(popup_ec644cbb200349cdba22bd70753ad805)
        ;




            var marker_51f4bf9fea3a412fb1d7c52399631e97 = L.marker(
                [-37.57787579, 143.8540298],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e1381680d5cc46db9f784f4ab2fac524 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_51f4bf9fea3a412fb1d7c52399631e97.setIcon(icon_e1381680d5cc46db9f784f4ab2fac524);


        var popup_4fbd2d4cd8214294bcae3a3d9e8a7ced = L.popup({"maxWidth": "100%"});


            var html_73327baa1989414b88887246d2f113f2 = $(`<div id="html_73327baa1989414b88887246d2f113f2" style="width: 100.0%; height: 100.0%;">Mount Pleasant</div>`)[0];
            popup_4fbd2d4cd8214294bcae3a3d9e8a7ced.setContent(html_73327baa1989414b88887246d2f113f2);


        marker_51f4bf9fea3a412fb1d7c52399631e97.bindPopup(popup_4fbd2d4cd8214294bcae3a3d9e8a7ced)
        ;




            var marker_71c3df5c7a5342ae85c15d9b5aa3800f = L.marker(
                [-37.52186263, 143.8354857],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_40373bdad4604fd0953543dcd463c3b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_71c3df5c7a5342ae85c15d9b5aa3800f.setIcon(icon_40373bdad4604fd0953543dcd463c3b2);


        var popup_e3635fba3d2549b49c9d73e0d5c22d9f = L.popup({"maxWidth": "100%"});


            var html_462ef76bc5444153b5fc5cb5d3056043 = $(`<div id="html_462ef76bc5444153b5fc5cb5d3056043" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_e3635fba3d2549b49c9d73e0d5c22d9f.setContent(html_462ef76bc5444153b5fc5cb5d3056043);


        marker_71c3df5c7a5342ae85c15d9b5aa3800f.bindPopup(popup_e3635fba3d2549b49c9d73e0d5c22d9f)
        ;




            var marker_8be70e706ba741d184917864e8e69d89 = L.marker(
                [-37.60242554, 143.8392869],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_db652bcd2932471f8a2ad8ec1b76b159 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8be70e706ba741d184917864e8e69d89.setIcon(icon_db652bcd2932471f8a2ad8ec1b76b159);


        var popup_c07d0b5cc2544840979a20d0da3e5ac1 = L.popup({"maxWidth": "100%"});


            var html_e2504983af4146f8821c6c3b2ffe1263 = $(`<div id="html_e2504983af4146f8821c6c3b2ffe1263" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_c07d0b5cc2544840979a20d0da3e5ac1.setContent(html_e2504983af4146f8821c6c3b2ffe1263);


        marker_8be70e706ba741d184917864e8e69d89.bindPopup(popup_c07d0b5cc2544840979a20d0da3e5ac1)
        ;




            var marker_4ca92cf5d63c4eab8fb246db26adcff6 = L.marker(
                [-37.5314097, 143.82427030000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_efede60377904008a7859344142edf53 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4ca92cf5d63c4eab8fb246db26adcff6.setIcon(icon_efede60377904008a7859344142edf53);


        var popup_245355a466d145c28bbfbbb675cb5dae = L.popup({"maxWidth": "100%"});


            var html_d91a0ca6afcf423c99e271b18401beff = $(`<div id="html_d91a0ca6afcf423c99e271b18401beff" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_245355a466d145c28bbfbbb675cb5dae.setContent(html_d91a0ca6afcf423c99e271b18401beff);


        marker_4ca92cf5d63c4eab8fb246db26adcff6.bindPopup(popup_245355a466d145c28bbfbbb675cb5dae)
        ;




            var marker_162f15779fb74cb792eda9ec10328528 = L.marker(
                [-37.54043536, 143.8600685],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4594d62afed54378a0c26397f0c0b81c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_162f15779fb74cb792eda9ec10328528.setIcon(icon_4594d62afed54378a0c26397f0c0b81c);


        var popup_257ffe96dcec4b55aae4227485f485c9 = L.popup({"maxWidth": "100%"});


            var html_f82a0c3eb96d47e8bfed730a592b605e = $(`<div id="html_f82a0c3eb96d47e8bfed730a592b605e" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_257ffe96dcec4b55aae4227485f485c9.setContent(html_f82a0c3eb96d47e8bfed730a592b605e);


        marker_162f15779fb74cb792eda9ec10328528.bindPopup(popup_257ffe96dcec4b55aae4227485f485c9)
        ;




            var marker_853e91746612464f8cd811af11963a20 = L.marker(
                [-37.53958301, 143.8602221],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_c065dae7b31f40a0850e80a433ef76af = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_853e91746612464f8cd811af11963a20.setIcon(icon_c065dae7b31f40a0850e80a433ef76af);


        var popup_78e4020da71c4d6d9915bdcf7c885fdf = L.popup({"maxWidth": "100%"});


            var html_a230ef81184948c791ab7713af4bba88 = $(`<div id="html_a230ef81184948c791ab7713af4bba88" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_78e4020da71c4d6d9915bdcf7c885fdf.setContent(html_a230ef81184948c791ab7713af4bba88);


        marker_853e91746612464f8cd811af11963a20.bindPopup(popup_78e4020da71c4d6d9915bdcf7c885fdf)
        ;




            var marker_7adc2072bddd42539188af6b42255e77 = L.marker(
                [-37.56553665, 143.8401465],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7cb7f8a7fab14cd1acdc0e3cf96d582c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7adc2072bddd42539188af6b42255e77.setIcon(icon_7cb7f8a7fab14cd1acdc0e3cf96d582c);


        var popup_9926e528190c43299f94553f67101ad5 = L.popup({"maxWidth": "100%"});


            var html_36bfddecd21c4b15bea4d4ab10f18602 = $(`<div id="html_36bfddecd21c4b15bea4d4ab10f18602" style="width: 100.0%; height: 100.0%;">Ballarat Central</div>`)[0];
            popup_9926e528190c43299f94553f67101ad5.setContent(html_36bfddecd21c4b15bea4d4ab10f18602);


        marker_7adc2072bddd42539188af6b42255e77.bindPopup(popup_9926e528190c43299f94553f67101ad5)
        ;




            var marker_4052ec6be9bb4ab88cfb7ec7a1a98b2d = L.marker(
                [-37.59226876, 143.83877230000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_557e8e3e9b2849c1ad1c7bacc21da42a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4052ec6be9bb4ab88cfb7ec7a1a98b2d.setIcon(icon_557e8e3e9b2849c1ad1c7bacc21da42a);


        var popup_542277c56aec4ded903d6ca97af9c2ab = L.popup({"maxWidth": "100%"});


            var html_785ddec151184f2ca0b3f76c719726c6 = $(`<div id="html_785ddec151184f2ca0b3f76c719726c6" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_542277c56aec4ded903d6ca97af9c2ab.setContent(html_785ddec151184f2ca0b3f76c719726c6);


        marker_4052ec6be9bb4ab88cfb7ec7a1a98b2d.bindPopup(popup_542277c56aec4ded903d6ca97af9c2ab)
        ;




            var marker_b0ab4a222c7b4337a43f498dcf0d3c41 = L.marker(
                [-37.51578917, 143.7818993],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_6971951c84644007b1b54054464f43dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b0ab4a222c7b4337a43f498dcf0d3c41.setIcon(icon_6971951c84644007b1b54054464f43dd);


        var popup_50c758508da045609ece97cf45423b43 = L.popup({"maxWidth": "100%"});


            var html_80972f8413f64f7b8da2ec5ea5418a70 = $(`<div id="html_80972f8413f64f7b8da2ec5ea5418a70" style="width: 100.0%; height: 100.0%;">Mitchell Park</div>`)[0];
            popup_50c758508da045609ece97cf45423b43.setContent(html_80972f8413f64f7b8da2ec5ea5418a70);


        marker_b0ab4a222c7b4337a43f498dcf0d3c41.bindPopup(popup_50c758508da045609ece97cf45423b43)
        ;




            var marker_c8a4217dc1ff4b98b8a2093dbe3e1152 = L.marker(
                [-37.59745682, 143.8416798],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d2e9feeb0a7b4641ac5e351c791aed3a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c8a4217dc1ff4b98b8a2093dbe3e1152.setIcon(icon_d2e9feeb0a7b4641ac5e351c791aed3a);


        var popup_ca579a8e93cb48c28c4aaa74d6b6807e = L.popup({"maxWidth": "100%"});


            var html_c30680d9caa5446d99fb3563cd0c3fee = $(`<div id="html_c30680d9caa5446d99fb3563cd0c3fee" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_ca579a8e93cb48c28c4aaa74d6b6807e.setContent(html_c30680d9caa5446d99fb3563cd0c3fee);


        marker_c8a4217dc1ff4b98b8a2093dbe3e1152.bindPopup(popup_ca579a8e93cb48c28c4aaa74d6b6807e)
        ;




            var marker_3855c78a90fc4c6292a695c10c7a35c2 = L.marker(
                [-37.60160223, 143.8324374],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_c735faefe6c342f5b0c57ab6915402a9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3855c78a90fc4c6292a695c10c7a35c2.setIcon(icon_c735faefe6c342f5b0c57ab6915402a9);


        var popup_8e082905b6da4ff2b46ce903a1764f91 = L.popup({"maxWidth": "100%"});


            var html_8263993394e148e0b3a7dc03ff0f9e31 = $(`<div id="html_8263993394e148e0b3a7dc03ff0f9e31" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_8e082905b6da4ff2b46ce903a1764f91.setContent(html_8263993394e148e0b3a7dc03ff0f9e31);


        marker_3855c78a90fc4c6292a695c10c7a35c2.bindPopup(popup_8e082905b6da4ff2b46ce903a1764f91)
        ;




            var marker_ccb883fc76fa41449c915cec02826e89 = L.marker(
                [-37.57912321, 143.8770403],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7d6a6c351ba04e22a6f66c98783e220b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ccb883fc76fa41449c915cec02826e89.setIcon(icon_7d6a6c351ba04e22a6f66c98783e220b);


        var popup_31a99dc9da41497ab343e31a15af5d60 = L.popup({"maxWidth": "100%"});


            var html_c7cc28c2f35e41cc9a2c18a874290ea7 = $(`<div id="html_c7cc28c2f35e41cc9a2c18a874290ea7" style="width: 100.0%; height: 100.0%;">Canadian</div>`)[0];
            popup_31a99dc9da41497ab343e31a15af5d60.setContent(html_c7cc28c2f35e41cc9a2c18a874290ea7);


        marker_ccb883fc76fa41449c915cec02826e89.bindPopup(popup_31a99dc9da41497ab343e31a15af5d60)
        ;




            var marker_f573c8fc775f4acf803ecec8f0112d76 = L.marker(
                [-37.42201264, 143.7107983],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_1fe73025b3d9412e9d92aefaa07580ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f573c8fc775f4acf803ecec8f0112d76.setIcon(icon_1fe73025b3d9412e9d92aefaa07580ae);


        var popup_3da3f6b059954065ac6e928ec48ae268 = L.popup({"maxWidth": "100%"});


            var html_a7552e2fd9d94513b35a219d2f5e9fa1 = $(`<div id="html_a7552e2fd9d94513b35a219d2f5e9fa1" style="width: 100.0%; height: 100.0%;">Learmonth</div>`)[0];
            popup_3da3f6b059954065ac6e928ec48ae268.setContent(html_a7552e2fd9d94513b35a219d2f5e9fa1);


        marker_f573c8fc775f4acf803ecec8f0112d76.bindPopup(popup_3da3f6b059954065ac6e928ec48ae268)
        ;




            var marker_a59744c2f08d4174ba4542dbc671157a = L.marker(
                [-37.55444734, 143.80017880000003],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d000a9e65eac445290639cb6d105ac65 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a59744c2f08d4174ba4542dbc671157a.setIcon(icon_d000a9e65eac445290639cb6d105ac65);


        var popup_9a326b330d2245358a487db7f5eb8ff6 = L.popup({"maxWidth": "100%"});


            var html_245dcf08b80940c99a83bef37bfe900f = $(`<div id="html_245dcf08b80940c99a83bef37bfe900f" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_9a326b330d2245358a487db7f5eb8ff6.setContent(html_245dcf08b80940c99a83bef37bfe900f);


        marker_a59744c2f08d4174ba4542dbc671157a.bindPopup(popup_9a326b330d2245358a487db7f5eb8ff6)
        ;




            var marker_e2cda68c3a4340d7aeb85a6f3a88a7e0 = L.marker(
                [-37.55188874, 143.8065302],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_236733363de04e998b768febff6eac37 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e2cda68c3a4340d7aeb85a6f3a88a7e0.setIcon(icon_236733363de04e998b768febff6eac37);


        var popup_188bb0584ad344f6b9c3935c6dad920e = L.popup({"maxWidth": "100%"});


            var html_68e46ff063264af1b4258098707d7889 = $(`<div id="html_68e46ff063264af1b4258098707d7889" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_188bb0584ad344f6b9c3935c6dad920e.setContent(html_68e46ff063264af1b4258098707d7889);


        marker_e2cda68c3a4340d7aeb85a6f3a88a7e0.bindPopup(popup_188bb0584ad344f6b9c3935c6dad920e)
        ;




            var marker_62ad6a23ea4f4f55acdf30f4bd3bd6f7 = L.marker(
                [-37.55575737, 143.7882916],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_557b2e9a0ce24e1d9b7580a3c6d7e002 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_62ad6a23ea4f4f55acdf30f4bd3bd6f7.setIcon(icon_557b2e9a0ce24e1d9b7580a3c6d7e002);


        var popup_a24884a3d8ca408a8501cacb68295576 = L.popup({"maxWidth": "100%"});


            var html_125c0a710b074117875e5177d45d3f91 = $(`<div id="html_125c0a710b074117875e5177d45d3f91" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_a24884a3d8ca408a8501cacb68295576.setContent(html_125c0a710b074117875e5177d45d3f91);


        marker_62ad6a23ea4f4f55acdf30f4bd3bd6f7.bindPopup(popup_a24884a3d8ca408a8501cacb68295576)
        ;




            var marker_a9847f413b3b46648897e8e62c4c6136 = L.marker(
                [-37.57061213, 143.8715201],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_126b0836f0bc4868bbf3e0a97455f643 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a9847f413b3b46648897e8e62c4c6136.setIcon(icon_126b0836f0bc4868bbf3e0a97455f643);


        var popup_153c1fc9249e4f8fb7e0167ffef9a08b = L.popup({"maxWidth": "100%"});


            var html_2fc7e415b55a46a7a438b008f4e9f97a = $(`<div id="html_2fc7e415b55a46a7a438b008f4e9f97a" style="width: 100.0%; height: 100.0%;">Golden Point</div>`)[0];
            popup_153c1fc9249e4f8fb7e0167ffef9a08b.setContent(html_2fc7e415b55a46a7a438b008f4e9f97a);


        marker_a9847f413b3b46648897e8e62c4c6136.bindPopup(popup_153c1fc9249e4f8fb7e0167ffef9a08b)
        ;




            var marker_33b1d8f6d5c545b7af15f7900df33e55 = L.marker(
                [-37.39626674, 143.7990146],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a149ac366c364732bb4da78fccf5c6cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_33b1d8f6d5c545b7af15f7900df33e55.setIcon(icon_a149ac366c364732bb4da78fccf5c6cf);


        var popup_624c935bb49347e486ae0b82807984b2 = L.popup({"maxWidth": "100%"});


            var html_59ff046db2f4449b9ea8b6c20d6fa6d1 = $(`<div id="html_59ff046db2f4449b9ea8b6c20d6fa6d1" style="width: 100.0%; height: 100.0%;">Ascot</div>`)[0];
            popup_624c935bb49347e486ae0b82807984b2.setContent(html_59ff046db2f4449b9ea8b6c20d6fa6d1);


        marker_33b1d8f6d5c545b7af15f7900df33e55.bindPopup(popup_624c935bb49347e486ae0b82807984b2)
        ;




            var marker_8231da7cff0f4209a21cc77776cf2e7e = L.marker(
                [-37.56480883, 143.7965289],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7980c2dc1d9845a5a013cb91cd960e0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8231da7cff0f4209a21cc77776cf2e7e.setIcon(icon_7980c2dc1d9845a5a013cb91cd960e0c);


        var popup_4ac6f1429bf14162b844cc5cd325f6b8 = L.popup({"maxWidth": "100%"});


            var html_b21760639b2d45feb4fd147dbf8d8911 = $(`<div id="html_b21760639b2d45feb4fd147dbf8d8911" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_4ac6f1429bf14162b844cc5cd325f6b8.setContent(html_b21760639b2d45feb4fd147dbf8d8911);


        marker_8231da7cff0f4209a21cc77776cf2e7e.bindPopup(popup_4ac6f1429bf14162b844cc5cd325f6b8)
        ;




            var marker_7d078fef2848487bbe8bbce7a8320feb = L.marker(
                [-37.59177357, 143.818295],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_0dd7f37ed247458cbba89410a9248e87 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7d078fef2848487bbe8bbce7a8320feb.setIcon(icon_0dd7f37ed247458cbba89410a9248e87);


        var popup_b7bc032346f4498091793e78e8f0d3d2 = L.popup({"maxWidth": "100%"});


            var html_273bed91f3484532acacf5d3ae65b6ae = $(`<div id="html_273bed91f3484532acacf5d3ae65b6ae" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_b7bc032346f4498091793e78e8f0d3d2.setContent(html_273bed91f3484532acacf5d3ae65b6ae);


        marker_7d078fef2848487bbe8bbce7a8320feb.bindPopup(popup_b7bc032346f4498091793e78e8f0d3d2)
        ;




            var marker_f9e3135d6396426496fa1cae97ab22f6 = L.marker(
                [-37.60212087, 143.83418569999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_ff9933a85fe64c21a7db4f493d0cd499 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f9e3135d6396426496fa1cae97ab22f6.setIcon(icon_ff9933a85fe64c21a7db4f493d0cd499);


        var popup_bacd850b98da4adbb128a2d86d8e97c7 = L.popup({"maxWidth": "100%"});


            var html_0b7ee951443d474fa2fd0c83ddf2cbbb = $(`<div id="html_0b7ee951443d474fa2fd0c83ddf2cbbb" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_bacd850b98da4adbb128a2d86d8e97c7.setContent(html_0b7ee951443d474fa2fd0c83ddf2cbbb);


        marker_f9e3135d6396426496fa1cae97ab22f6.bindPopup(popup_bacd850b98da4adbb128a2d86d8e97c7)
        ;




            var marker_be8ee8a5a49740f693dfc404387d2b22 = L.marker(
                [-37.531637700000005, 143.8377677],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a4c4436c24c747b8b02492612b363e18 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_be8ee8a5a49740f693dfc404387d2b22.setIcon(icon_a4c4436c24c747b8b02492612b363e18);


        var popup_9a1146b28d15478787711bcf9d76d4f9 = L.popup({"maxWidth": "100%"});


            var html_976a0a87cc9f41cabd581fae48c93eb0 = $(`<div id="html_976a0a87cc9f41cabd581fae48c93eb0" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_9a1146b28d15478787711bcf9d76d4f9.setContent(html_976a0a87cc9f41cabd581fae48c93eb0);


        marker_be8ee8a5a49740f693dfc404387d2b22.bindPopup(popup_9a1146b28d15478787711bcf9d76d4f9)
        ;




            var marker_55503e908cea43309d296c97698e8d47 = L.marker(
                [-37.55236443, 143.8984577],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_f291b69e810044a89fb965253d411e31 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_55503e908cea43309d296c97698e8d47.setIcon(icon_f291b69e810044a89fb965253d411e31);


        var popup_2a167b205c0d481a8fb77b5dcf2bbdf9 = L.popup({"maxWidth": "100%"});


            var html_dec23f23e78343759a08d1b7fa53d61b = $(`<div id="html_dec23f23e78343759a08d1b7fa53d61b" style="width: 100.0%; height: 100.0%;">Brown Hill</div>`)[0];
            popup_2a167b205c0d481a8fb77b5dcf2bbdf9.setContent(html_dec23f23e78343759a08d1b7fa53d61b);


        marker_55503e908cea43309d296c97698e8d47.bindPopup(popup_2a167b205c0d481a8fb77b5dcf2bbdf9)
        ;




            var marker_3b8cf7a23a634683bbbbf728f5f1a3ba = L.marker(
                [-37.53935581, 143.87150880000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5558664b95f74d30bf19c2483b7527cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3b8cf7a23a634683bbbbf728f5f1a3ba.setIcon(icon_5558664b95f74d30bf19c2483b7527cb);


        var popup_2e536d2d14d643b8bee0359fc448def7 = L.popup({"maxWidth": "100%"});


            var html_1a87ff13f5f04eb393b511229c293fe1 = $(`<div id="html_1a87ff13f5f04eb393b511229c293fe1" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_2e536d2d14d643b8bee0359fc448def7.setContent(html_1a87ff13f5f04eb393b511229c293fe1);


        marker_3b8cf7a23a634683bbbbf728f5f1a3ba.bindPopup(popup_2e536d2d14d643b8bee0359fc448def7)
        ;




            var marker_941f9fc8d20944f29d7c7cf049dbe17b = L.marker(
                [-37.652807700000004, 143.888122],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_1350a87687cf458ea33421e1953e501b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_941f9fc8d20944f29d7c7cf049dbe17b.setIcon(icon_1350a87687cf458ea33421e1953e501b);


        var popup_ffcfd13ffaf94fc3840f17159c6c7ba6 = L.popup({"maxWidth": "100%"});


            var html_84e8e91e7c2e4e81a0f0bf38e46de175 = $(`<div id="html_84e8e91e7c2e4e81a0f0bf38e46de175" style="width: 100.0%; height: 100.0%;">Buninyong</div>`)[0];
            popup_ffcfd13ffaf94fc3840f17159c6c7ba6.setContent(html_84e8e91e7c2e4e81a0f0bf38e46de175);


        marker_941f9fc8d20944f29d7c7cf049dbe17b.bindPopup(popup_ffcfd13ffaf94fc3840f17159c6c7ba6)
        ;




            var marker_304bc714e1c241259c850310d30f985f = L.marker(
                [-37.64939325, 143.8872799],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_45f1aff4e7214277933f780e066c78bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_304bc714e1c241259c850310d30f985f.setIcon(icon_45f1aff4e7214277933f780e066c78bb);


        var popup_790a0b17018143e0bc22cf218dafe0cc = L.popup({"maxWidth": "100%"});


            var html_c019030e3a5844c0928b987e37d84d29 = $(`<div id="html_c019030e3a5844c0928b987e37d84d29" style="width: 100.0%; height: 100.0%;">Buninyong</div>`)[0];
            popup_790a0b17018143e0bc22cf218dafe0cc.setContent(html_c019030e3a5844c0928b987e37d84d29);


        marker_304bc714e1c241259c850310d30f985f.bindPopup(popup_790a0b17018143e0bc22cf218dafe0cc)
        ;




            var marker_fbcdce5c86a448df84b44c131769678d = L.marker(
                [-37.64986628, 143.8910267],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_206631549a53411892022939bfae408c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fbcdce5c86a448df84b44c131769678d.setIcon(icon_206631549a53411892022939bfae408c);


        var popup_cac51c8a9e8948c6a2e81e0cd1efa163 = L.popup({"maxWidth": "100%"});


            var html_671052a2ef6f43609cac8765a2b1b20c = $(`<div id="html_671052a2ef6f43609cac8765a2b1b20c" style="width: 100.0%; height: 100.0%;">Buninyong</div>`)[0];
            popup_cac51c8a9e8948c6a2e81e0cd1efa163.setContent(html_671052a2ef6f43609cac8765a2b1b20c);


        marker_fbcdce5c86a448df84b44c131769678d.bindPopup(popup_cac51c8a9e8948c6a2e81e0cd1efa163)
        ;




            var marker_31c720ecb8734061a0839005aa9c66d5 = L.marker(
                [-37.51419645, 143.8022486],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_734f378590d0460689967e0fbca01182 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_31c720ecb8734061a0839005aa9c66d5.setIcon(icon_734f378590d0460689967e0fbca01182);


        var popup_1c5a5e87a5d745599e5f6dfa0d8be7c3 = L.popup({"maxWidth": "100%"});


            var html_16edfc4f3d114709bcee69133a61ad9e = $(`<div id="html_16edfc4f3d114709bcee69133a61ad9e" style="width: 100.0%; height: 100.0%;">Mitchell Park</div>`)[0];
            popup_1c5a5e87a5d745599e5f6dfa0d8be7c3.setContent(html_16edfc4f3d114709bcee69133a61ad9e);


        marker_31c720ecb8734061a0839005aa9c66d5.bindPopup(popup_1c5a5e87a5d745599e5f6dfa0d8be7c3)
        ;




            var marker_4aa4bb7040504dc2812bbd1a0165c1eb = L.marker(
                [-37.58523147, 143.8690186],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_660a6e2800154cf19a78c00929722e84 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4aa4bb7040504dc2812bbd1a0165c1eb.setIcon(icon_660a6e2800154cf19a78c00929722e84);


        var popup_e861c3a40cc1458e97008fcc86010a50 = L.popup({"maxWidth": "100%"});


            var html_229ee34ce8f24a759dbe3282ed3c95f9 = $(`<div id="html_229ee34ce8f24a759dbe3282ed3c95f9" style="width: 100.0%; height: 100.0%;">Canadian</div>`)[0];
            popup_e861c3a40cc1458e97008fcc86010a50.setContent(html_229ee34ce8f24a759dbe3282ed3c95f9);


        marker_4aa4bb7040504dc2812bbd1a0165c1eb.bindPopup(popup_e861c3a40cc1458e97008fcc86010a50)
        ;




            var marker_28f8a528c2bb4541b07ad84345fbf98f = L.marker(
                [-37.59279444, 143.870159],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_027408ad70284ed4bdf3e7db8a3002bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_28f8a528c2bb4541b07ad84345fbf98f.setIcon(icon_027408ad70284ed4bdf3e7db8a3002bf);


        var popup_a76785774a334592b73f0eea8e082a2f = L.popup({"maxWidth": "100%"});


            var html_5ec8e35cd15d40d5aa4d56ac2e177522 = $(`<div id="html_5ec8e35cd15d40d5aa4d56ac2e177522" style="width: 100.0%; height: 100.0%;">Mount Clear</div>`)[0];
            popup_a76785774a334592b73f0eea8e082a2f.setContent(html_5ec8e35cd15d40d5aa4d56ac2e177522);


        marker_28f8a528c2bb4541b07ad84345fbf98f.bindPopup(popup_a76785774a334592b73f0eea8e082a2f)
        ;




            var marker_9c44a2f5d64245db8420cf0b4451ba3a = L.marker(
                [-37.60494765, 143.87034880000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a297135a578c41498392d3b581e99675 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9c44a2f5d64245db8420cf0b4451ba3a.setIcon(icon_a297135a578c41498392d3b581e99675);


        var popup_27072ec418964bd78e12dd241969fb2c = L.popup({"maxWidth": "100%"});


            var html_2bf0f3cb796941849816f35a166bf3b2 = $(`<div id="html_2bf0f3cb796941849816f35a166bf3b2" style="width: 100.0%; height: 100.0%;">Mount Clear</div>`)[0];
            popup_27072ec418964bd78e12dd241969fb2c.setContent(html_2bf0f3cb796941849816f35a166bf3b2);


        marker_9c44a2f5d64245db8420cf0b4451ba3a.bindPopup(popup_27072ec418964bd78e12dd241969fb2c)
        ;




            var marker_68cc9a08cd45416a850b5991840c765c = L.marker(
                [-37.5881856, 143.8676811],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5748867cfea746859bebe6a96227069a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_68cc9a08cd45416a850b5991840c765c.setIcon(icon_5748867cfea746859bebe6a96227069a);


        var popup_8a8f41a494f54a48853338274ae83bb0 = L.popup({"maxWidth": "100%"});


            var html_d7f95e810c0f4e47ae7480f1dacaba50 = $(`<div id="html_d7f95e810c0f4e47ae7480f1dacaba50" style="width: 100.0%; height: 100.0%;">Canadian</div>`)[0];
            popup_8a8f41a494f54a48853338274ae83bb0.setContent(html_d7f95e810c0f4e47ae7480f1dacaba50);


        marker_68cc9a08cd45416a850b5991840c765c.bindPopup(popup_8a8f41a494f54a48853338274ae83bb0)
        ;




            var marker_bb6bcd2054f9421fa69294427c7fef3b = L.marker(
                [-37.51424258, 143.70899690000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5c64b561d41c4feb8c93e33b3a641ca7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bb6bcd2054f9421fa69294427c7fef3b.setIcon(icon_5c64b561d41c4feb8c93e33b3a641ca7);


        var popup_e528f3304f0545679abaacf14de76fdd = L.popup({"maxWidth": "100%"});


            var html_14138aecdee44dee9f4f22a2a0242b84 = $(`<div id="html_14138aecdee44dee9f4f22a2a0242b84" style="width: 100.0%; height: 100.0%;">Cardigan Village</div>`)[0];
            popup_e528f3304f0545679abaacf14de76fdd.setContent(html_14138aecdee44dee9f4f22a2a0242b84);


        marker_bb6bcd2054f9421fa69294427c7fef3b.bindPopup(popup_e528f3304f0545679abaacf14de76fdd)
        ;




            var marker_9d8bd640438d45509bfc2f3b4a3ff3a6 = L.marker(
                [-37.52322431, 143.8332246],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_dc8f4eae7b0b4f31a0f92392170f197a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9d8bd640438d45509bfc2f3b4a3ff3a6.setIcon(icon_dc8f4eae7b0b4f31a0f92392170f197a);


        var popup_0bc2b74008054634a1035fcac931b733 = L.popup({"maxWidth": "100%"});


            var html_bdd1e53e4a8140c7a0fb35fdc185d26b = $(`<div id="html_bdd1e53e4a8140c7a0fb35fdc185d26b" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_0bc2b74008054634a1035fcac931b733.setContent(html_bdd1e53e4a8140c7a0fb35fdc185d26b);


        marker_9d8bd640438d45509bfc2f3b4a3ff3a6.bindPopup(popup_0bc2b74008054634a1035fcac931b733)
        ;




            var marker_97fa17de823a44caab9a884cc950cc05 = L.marker(
                [-37.53805568, 143.8440296],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_adb0073f6f8b44439b74145a498487df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_97fa17de823a44caab9a884cc950cc05.setIcon(icon_adb0073f6f8b44439b74145a498487df);


        var popup_271bdde3086d4f6f8a1fa7839f36afbc = L.popup({"maxWidth": "100%"});


            var html_32849991e0c24c15ad2efc32b33cb974 = $(`<div id="html_32849991e0c24c15ad2efc32b33cb974" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_271bdde3086d4f6f8a1fa7839f36afbc.setContent(html_32849991e0c24c15ad2efc32b33cb974);


        marker_97fa17de823a44caab9a884cc950cc05.bindPopup(popup_271bdde3086d4f6f8a1fa7839f36afbc)
        ;




            var marker_7afadcfb52a64120ac55967c8c4983e3 = L.marker(
                [-37.53716369, 143.8410304],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b8b6ce36f0784991a89b354fba9116c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7afadcfb52a64120ac55967c8c4983e3.setIcon(icon_b8b6ce36f0784991a89b354fba9116c5);


        var popup_511621539dd745a284b18b126db8e664 = L.popup({"maxWidth": "100%"});


            var html_8b13326fb7614835afcc55e60a7878a8 = $(`<div id="html_8b13326fb7614835afcc55e60a7878a8" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_511621539dd745a284b18b126db8e664.setContent(html_8b13326fb7614835afcc55e60a7878a8);


        marker_7afadcfb52a64120ac55967c8c4983e3.bindPopup(popup_511621539dd745a284b18b126db8e664)
        ;




            var marker_6269ffb4c48a4a19b95061efab8e85db = L.marker(
                [-37.42958452, 143.7866969],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_f7bc470678114314857dca5ab14ebcc8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6269ffb4c48a4a19b95061efab8e85db.setIcon(icon_f7bc470678114314857dca5ab14ebcc8);


        var popup_5474091f4c564c028664d5d850c15584 = L.popup({"maxWidth": "100%"});


            var html_436469d551964f2ea7dc2b4400df928b = $(`<div id="html_436469d551964f2ea7dc2b4400df928b" style="width: 100.0%; height: 100.0%;">Blowhard</div>`)[0];
            popup_5474091f4c564c028664d5d850c15584.setContent(html_436469d551964f2ea7dc2b4400df928b);


        marker_6269ffb4c48a4a19b95061efab8e85db.bindPopup(popup_5474091f4c564c028664d5d850c15584)
        ;




            var marker_5ad1757cc0a042b8aa6c49f47ca4a01c = L.marker(
                [-37.54505633, 143.8181728],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a7dbe3a08c404b5eb56ef58c72af85ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5ad1757cc0a042b8aa6c49f47ca4a01c.setIcon(icon_a7dbe3a08c404b5eb56ef58c72af85ec);


        var popup_e2a002f53237437da5bec3ff94e0b902 = L.popup({"maxWidth": "100%"});


            var html_ed604fba0fd14234b0c765bd7b0676f3 = $(`<div id="html_ed604fba0fd14234b0c765bd7b0676f3" style="width: 100.0%; height: 100.0%;">Lake Gardens</div>`)[0];
            popup_e2a002f53237437da5bec3ff94e0b902.setContent(html_ed604fba0fd14234b0c765bd7b0676f3);


        marker_5ad1757cc0a042b8aa6c49f47ca4a01c.bindPopup(popup_e2a002f53237437da5bec3ff94e0b902)
        ;




            var marker_9b816a19c5e94a4880512a5c3301c4a5 = L.marker(
                [-37.53087426, 143.81654630000003],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_327d58eb643d44618e025116db7f1350 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9b816a19c5e94a4880512a5c3301c4a5.setIcon(icon_327d58eb643d44618e025116db7f1350);


        var popup_1845e847d4b24b39834ec50eeb0b9e65 = L.popup({"maxWidth": "100%"});


            var html_3acaec194fd241a3918861fb196035c6 = $(`<div id="html_3acaec194fd241a3918861fb196035c6" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_1845e847d4b24b39834ec50eeb0b9e65.setContent(html_3acaec194fd241a3918861fb196035c6);


        marker_9b816a19c5e94a4880512a5c3301c4a5.bindPopup(popup_1845e847d4b24b39834ec50eeb0b9e65)
        ;




            var marker_4b14c973c95b47d6b7de36d8c1f56a23 = L.marker(
                [-37.53753427, 143.8370132],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_acfb7a93591c4fc48c914bf4bf358f32 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4b14c973c95b47d6b7de36d8c1f56a23.setIcon(icon_acfb7a93591c4fc48c914bf4bf358f32);


        var popup_d2d5554b32214701a4681ecca0760569 = L.popup({"maxWidth": "100%"});


            var html_a509ef5680404d869b29e4007570a0d3 = $(`<div id="html_a509ef5680404d869b29e4007570a0d3" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_d2d5554b32214701a4681ecca0760569.setContent(html_a509ef5680404d869b29e4007570a0d3);


        marker_4b14c973c95b47d6b7de36d8c1f56a23.bindPopup(popup_d2d5554b32214701a4681ecca0760569)
        ;




            var marker_3d9670f1db23482b9f9f5f411138dab4 = L.marker(
                [-37.53398005, 143.9217247],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_0b45985400d34fa3a94c006083b1fe69 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3d9670f1db23482b9f9f5f411138dab4.setIcon(icon_0b45985400d34fa3a94c006083b1fe69);


        var popup_19072f07024f4b49ba23c1ac268f200f = L.popup({"maxWidth": "100%"});


            var html_4cc18729b1674d4da6d8271dd5ac2f9f = $(`<div id="html_4cc18729b1674d4da6d8271dd5ac2f9f" style="width: 100.0%; height: 100.0%;">Brown Hill</div>`)[0];
            popup_19072f07024f4b49ba23c1ac268f200f.setContent(html_4cc18729b1674d4da6d8271dd5ac2f9f);


        marker_3d9670f1db23482b9f9f5f411138dab4.bindPopup(popup_19072f07024f4b49ba23c1ac268f200f)
        ;




            var marker_95a0548ea1134b32bf4a91d816676fc3 = L.marker(
                [-37.49152389, 143.804017],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4a36f71379e84380ad32ae866e6684a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_95a0548ea1134b32bf4a91d816676fc3.setIcon(icon_4a36f71379e84380ad32ae866e6684a3);


        var popup_69a2099277064fdcb9663cd4f7d13e99 = L.popup({"maxWidth": "100%"});


            var html_c709686dca9144908c9f65b6ae5c2c79 = $(`<div id="html_c709686dca9144908c9f65b6ae5c2c79" style="width: 100.0%; height: 100.0%;">Miners Rest</div>`)[0];
            popup_69a2099277064fdcb9663cd4f7d13e99.setContent(html_c709686dca9144908c9f65b6ae5c2c79);


        marker_95a0548ea1134b32bf4a91d816676fc3.bindPopup(popup_69a2099277064fdcb9663cd4f7d13e99)
        ;




            var marker_d3ea0e140e6a4bbeb3627fab6fb3f396 = L.marker(
                [-37.55045264, 143.7912021],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_03904dd516614a779f7e731590e38cb7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d3ea0e140e6a4bbeb3627fab6fb3f396.setIcon(icon_03904dd516614a779f7e731590e38cb7);


        var popup_75ca1deab0484740aa2b0e0e32266ffb = L.popup({"maxWidth": "100%"});


            var html_dc14aa7ad1f6425f9a49a3611e8a2b6d = $(`<div id="html_dc14aa7ad1f6425f9a49a3611e8a2b6d" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_75ca1deab0484740aa2b0e0e32266ffb.setContent(html_dc14aa7ad1f6425f9a49a3611e8a2b6d);


        marker_d3ea0e140e6a4bbeb3627fab6fb3f396.bindPopup(popup_75ca1deab0484740aa2b0e0e32266ffb)
        ;




            var marker_af27f88c9f0442f982003809e123fcf8 = L.marker(
                [-37.60352301, 143.8221559],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_adf2bf728628433589839f05700659e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_af27f88c9f0442f982003809e123fcf8.setIcon(icon_adf2bf728628433589839f05700659e1);


        var popup_70cc85307e794c8e8711209561bf6672 = L.popup({"maxWidth": "100%"});


            var html_4062e0ba210841bfb0b4ced99e9b6f98 = $(`<div id="html_4062e0ba210841bfb0b4ced99e9b6f98" style="width: 100.0%; height: 100.0%;">Bonshaw</div>`)[0];
            popup_70cc85307e794c8e8711209561bf6672.setContent(html_4062e0ba210841bfb0b4ced99e9b6f98);


        marker_af27f88c9f0442f982003809e123fcf8.bindPopup(popup_70cc85307e794c8e8711209561bf6672)
        ;




            var marker_7d64931f922048deb6be2737ae18f32b = L.marker(
                [-37.64888695, 143.88380149999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_69dc26e62a99447280fe23cdda665895 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7d64931f922048deb6be2737ae18f32b.setIcon(icon_69dc26e62a99447280fe23cdda665895);


        var popup_d326fe3e9899492c9315dc14eccfbf61 = L.popup({"maxWidth": "100%"});


            var html_acf1d537a2324bf7a183ece444cd1110 = $(`<div id="html_acf1d537a2324bf7a183ece444cd1110" style="width: 100.0%; height: 100.0%;">Buninyong</div>`)[0];
            popup_d326fe3e9899492c9315dc14eccfbf61.setContent(html_acf1d537a2324bf7a183ece444cd1110);


        marker_7d64931f922048deb6be2737ae18f32b.bindPopup(popup_d326fe3e9899492c9315dc14eccfbf61)
        ;




            var marker_0af5b466ad0942c49b2f0e3aff3a6cff = L.marker(
                [-37.58363223, 143.815834],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_674416f8d9e84b64beef9084c0cc98a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0af5b466ad0942c49b2f0e3aff3a6cff.setIcon(icon_674416f8d9e84b64beef9084c0cc98a4);


        var popup_3ad5964981c841ec85999f72478c2157 = L.popup({"maxWidth": "100%"});


            var html_5e274f5f08f14a56ba29f476531dae9c = $(`<div id="html_5e274f5f08f14a56ba29f476531dae9c" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_3ad5964981c841ec85999f72478c2157.setContent(html_5e274f5f08f14a56ba29f476531dae9c);


        marker_0af5b466ad0942c49b2f0e3aff3a6cff.bindPopup(popup_3ad5964981c841ec85999f72478c2157)
        ;




            var marker_bb202a201ac040b1b54d1bef93b54e09 = L.marker(
                [-37.55295284, 143.84860030000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7bbd5d969f7541358b617d0f90fc4f16 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bb202a201ac040b1b54d1bef93b54e09.setIcon(icon_7bbd5d969f7541358b617d0f90fc4f16);


        var popup_ea6f686a646e4dd18a69cda58209f56c = L.popup({"maxWidth": "100%"});


            var html_1c2bddb90edb40d09979d83c3b43fcf7 = $(`<div id="html_1c2bddb90edb40d09979d83c3b43fcf7" style="width: 100.0%; height: 100.0%;">Lake Wendouree</div>`)[0];
            popup_ea6f686a646e4dd18a69cda58209f56c.setContent(html_1c2bddb90edb40d09979d83c3b43fcf7);


        marker_bb202a201ac040b1b54d1bef93b54e09.bindPopup(popup_ea6f686a646e4dd18a69cda58209f56c)
        ;




            var marker_28127f37321746b5a9ef06c78bb54148 = L.marker(
                [-37.5493588, 143.7954237],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_178cf7d57dbe4952b688b1f3602e3d27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_28127f37321746b5a9ef06c78bb54148.setIcon(icon_178cf7d57dbe4952b688b1f3602e3d27);


        var popup_4adacdc85baf4ed0ba48f2c8dafb706b = L.popup({"maxWidth": "100%"});


            var html_5f21aa5a82db422a946866c259d6036a = $(`<div id="html_5f21aa5a82db422a946866c259d6036a" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_4adacdc85baf4ed0ba48f2c8dafb706b.setContent(html_5f21aa5a82db422a946866c259d6036a);


        marker_28127f37321746b5a9ef06c78bb54148.bindPopup(popup_4adacdc85baf4ed0ba48f2c8dafb706b)
        ;




            var marker_e0f955490ace421892b480433a6354b2 = L.marker(
                [-37.56487058, 143.88469609999999],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_72428d4c6a5a484a9c38a7f47c4bcbf2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e0f955490ace421892b480433a6354b2.setIcon(icon_72428d4c6a5a484a9c38a7f47c4bcbf2);


        var popup_b7dd0ea86e894917b3a1cf618c05c5ec = L.popup({"maxWidth": "100%"});


            var html_29eda90397314b5296a6370fd92bd020 = $(`<div id="html_29eda90397314b5296a6370fd92bd020" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_b7dd0ea86e894917b3a1cf618c05c5ec.setContent(html_29eda90397314b5296a6370fd92bd020);


        marker_e0f955490ace421892b480433a6354b2.bindPopup(popup_b7dd0ea86e894917b3a1cf618c05c5ec)
        ;




            var marker_112a9da729b2469fa105006068eda4f4 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_6ffb1a51a065433abcd1894a4c15c91a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_112a9da729b2469fa105006068eda4f4.setIcon(icon_6ffb1a51a065433abcd1894a4c15c91a);


        var popup_14fde844797f4ba5b6c07df858223906 = L.popup({"maxWidth": "100%"});


            var html_ba1481f88dbe4c8b8300afc7425e04e3 = $(`<div id="html_ba1481f88dbe4c8b8300afc7425e04e3" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_14fde844797f4ba5b6c07df858223906.setContent(html_ba1481f88dbe4c8b8300afc7425e04e3);


        marker_112a9da729b2469fa105006068eda4f4.bindPopup(popup_14fde844797f4ba5b6c07df858223906)
        ;




            var marker_5a5682078dab41949c8079a8c72aa0a5 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_969b3c89c5ed429bb866500c1e86b433 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5a5682078dab41949c8079a8c72aa0a5.setIcon(icon_969b3c89c5ed429bb866500c1e86b433);


        var popup_58292117dbed4951a620003ec9b8e045 = L.popup({"maxWidth": "100%"});


            var html_4b442ce9109b4fe2bc3262921bce0200 = $(`<div id="html_4b442ce9109b4fe2bc3262921bce0200" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_58292117dbed4951a620003ec9b8e045.setContent(html_4b442ce9109b4fe2bc3262921bce0200);


        marker_5a5682078dab41949c8079a8c72aa0a5.bindPopup(popup_58292117dbed4951a620003ec9b8e045)
        ;




            var marker_0d404c5b715c43f99d4a80b16b574323 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_238f95c0f1d84e498314542d0c603855 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0d404c5b715c43f99d4a80b16b574323.setIcon(icon_238f95c0f1d84e498314542d0c603855);


        var popup_0ca1995bf4c74c17a660f5e4347c072e = L.popup({"maxWidth": "100%"});


            var html_e4d2871427574d7aaefcc76f83541dfa = $(`<div id="html_e4d2871427574d7aaefcc76f83541dfa" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_0ca1995bf4c74c17a660f5e4347c072e.setContent(html_e4d2871427574d7aaefcc76f83541dfa);


        marker_0d404c5b715c43f99d4a80b16b574323.bindPopup(popup_0ca1995bf4c74c17a660f5e4347c072e)
        ;




            var marker_4c4649a8bed44ce9b5c88957c9047586 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_ebfcf37b04f94868b4e0b05dddc89075 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4c4649a8bed44ce9b5c88957c9047586.setIcon(icon_ebfcf37b04f94868b4e0b05dddc89075);


        var popup_424f41763ae24d3abc1774acbc6ccf0d = L.popup({"maxWidth": "100%"});


            var html_b2c0032e92534618b5323073b5bc8b57 = $(`<div id="html_b2c0032e92534618b5323073b5bc8b57" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_424f41763ae24d3abc1774acbc6ccf0d.setContent(html_b2c0032e92534618b5323073b5bc8b57);


        marker_4c4649a8bed44ce9b5c88957c9047586.bindPopup(popup_424f41763ae24d3abc1774acbc6ccf0d)
        ;




            var marker_afeaef15cd5540fb9a0749884551d31d = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_24aec925ecae4559953a7df84d366e91 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_afeaef15cd5540fb9a0749884551d31d.setIcon(icon_24aec925ecae4559953a7df84d366e91);


        var popup_f767059dacd44b23b9c64d685fbc1995 = L.popup({"maxWidth": "100%"});


            var html_3b802309c54042afa19420cab8804c5b = $(`<div id="html_3b802309c54042afa19420cab8804c5b" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_f767059dacd44b23b9c64d685fbc1995.setContent(html_3b802309c54042afa19420cab8804c5b);


        marker_afeaef15cd5540fb9a0749884551d31d.bindPopup(popup_f767059dacd44b23b9c64d685fbc1995)
        ;




            var marker_a18990e483de43bcbc30adc034a91c4e = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_9829918493ec42dea6040bc26734e288 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a18990e483de43bcbc30adc034a91c4e.setIcon(icon_9829918493ec42dea6040bc26734e288);


        var popup_485da5ef947249369c9faa5ab962ef8c = L.popup({"maxWidth": "100%"});


            var html_08a32090bfdb4667a5540682395081f2 = $(`<div id="html_08a32090bfdb4667a5540682395081f2" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_485da5ef947249369c9faa5ab962ef8c.setContent(html_08a32090bfdb4667a5540682395081f2);


        marker_a18990e483de43bcbc30adc034a91c4e.bindPopup(popup_485da5ef947249369c9faa5ab962ef8c)
        ;




            var marker_3ef97e7585c342938f904f0a33c6b994 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b630037bdfa04928a854b7b5bdd954c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3ef97e7585c342938f904f0a33c6b994.setIcon(icon_b630037bdfa04928a854b7b5bdd954c9);


        var popup_fc85742562ac4fa3ad015ef5f235031c = L.popup({"maxWidth": "100%"});


            var html_1c2905bcb6d54a61a7888e9a3395c774 = $(`<div id="html_1c2905bcb6d54a61a7888e9a3395c774" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_fc85742562ac4fa3ad015ef5f235031c.setContent(html_1c2905bcb6d54a61a7888e9a3395c774);


        marker_3ef97e7585c342938f904f0a33c6b994.bindPopup(popup_fc85742562ac4fa3ad015ef5f235031c)
        ;




            var marker_ff4fb44f8fb845d2adf1aa4bae0264c1 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_01ccde412961454590ecb975160ce720 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ff4fb44f8fb845d2adf1aa4bae0264c1.setIcon(icon_01ccde412961454590ecb975160ce720);


        var popup_63845a071c824bc2afe8cfbd529230b0 = L.popup({"maxWidth": "100%"});


            var html_1b0edeb38eae4b31bd7fa13916aa964b = $(`<div id="html_1b0edeb38eae4b31bd7fa13916aa964b" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_63845a071c824bc2afe8cfbd529230b0.setContent(html_1b0edeb38eae4b31bd7fa13916aa964b);


        marker_ff4fb44f8fb845d2adf1aa4bae0264c1.bindPopup(popup_63845a071c824bc2afe8cfbd529230b0)
        ;




            var marker_47d47c14c37740ae9cf899ad8cdcf3c2 = L.marker(
                [-37.56442298, 143.88513600000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_56737acc9c3b4ac6ae54afac659742fc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_47d47c14c37740ae9cf899ad8cdcf3c2.setIcon(icon_56737acc9c3b4ac6ae54afac659742fc);


        var popup_26e6252d3077435689c894ad7bf5fe1c = L.popup({"maxWidth": "100%"});


            var html_1028e3ae6c004730b649fc956ab24680 = $(`<div id="html_1028e3ae6c004730b649fc956ab24680" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_26e6252d3077435689c894ad7bf5fe1c.setContent(html_1028e3ae6c004730b649fc956ab24680);


        marker_47d47c14c37740ae9cf899ad8cdcf3c2.bindPopup(popup_26e6252d3077435689c894ad7bf5fe1c)
        ;




            var marker_6d8c01023d8e45a39871f8490ba324b9 = L.marker(
                [-37.56430895, 143.885753],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_1170c10bc1df4b4eab4a71e48f945643 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6d8c01023d8e45a39871f8490ba324b9.setIcon(icon_1170c10bc1df4b4eab4a71e48f945643);


        var popup_63910fdb6b60437bbc6e48d5fdddf10d = L.popup({"maxWidth": "100%"});


            var html_e41a19bf49e34cb09499988f2e48f659 = $(`<div id="html_e41a19bf49e34cb09499988f2e48f659" style="width: 100.0%; height: 100.0%;">Eureka</div>`)[0];
            popup_63910fdb6b60437bbc6e48d5fdddf10d.setContent(html_e41a19bf49e34cb09499988f2e48f659);


        marker_6d8c01023d8e45a39871f8490ba324b9.bindPopup(popup_63910fdb6b60437bbc6e48d5fdddf10d)
        ;




            var marker_3f58fde1e9ad4de0ada4de6fbd9051a7 = L.marker(
                [-37.5966404, 143.8665747],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_c294b669bdcf4bb3ac21912ad4bb490e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3f58fde1e9ad4de0ada4de6fbd9051a7.setIcon(icon_c294b669bdcf4bb3ac21912ad4bb490e);


        var popup_cefafc1df1b842cb8e9a75b348b605b2 = L.popup({"maxWidth": "100%"});


            var html_3e4963c7e8cb40d0a273ff4883e4db2f = $(`<div id="html_3e4963c7e8cb40d0a273ff4883e4db2f" style="width: 100.0%; height: 100.0%;">Mount Clear</div>`)[0];
            popup_cefafc1df1b842cb8e9a75b348b605b2.setContent(html_3e4963c7e8cb40d0a273ff4883e4db2f);


        marker_3f58fde1e9ad4de0ada4de6fbd9051a7.bindPopup(popup_cefafc1df1b842cb8e9a75b348b605b2)
        ;




            var marker_9f30d9a709554551aaf063e53af3b884 = L.marker(
                [-37.61905514, 143.8857721],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_ae299ab29267406ea60a2345c8a68781 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9f30d9a709554551aaf063e53af3b884.setIcon(icon_ae299ab29267406ea60a2345c8a68781);


        var popup_55335f03b8244a4e9a698c98281c339d = L.popup({"maxWidth": "100%"});


            var html_63ef15d00dea4d9abf1b8288c753be40 = $(`<div id="html_63ef15d00dea4d9abf1b8288c753be40" style="width: 100.0%; height: 100.0%;">Mount Helen</div>`)[0];
            popup_55335f03b8244a4e9a698c98281c339d.setContent(html_63ef15d00dea4d9abf1b8288c753be40);


        marker_9f30d9a709554551aaf063e53af3b884.bindPopup(popup_55335f03b8244a4e9a698c98281c339d)
        ;




            var marker_8a59252587c04ac3a93247d3862a2624 = L.marker(
                [-37.54485765, 143.8563515],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_08ce2dc00f91480db3fca1ba93987c0f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8a59252587c04ac3a93247d3862a2624.setIcon(icon_08ce2dc00f91480db3fca1ba93987c0f);


        var popup_2bac440d021e4ded84b1be7ba751b5de = L.popup({"maxWidth": "100%"});


            var html_1e212093f0f3444584fe1a32c9b1da11 = $(`<div id="html_1e212093f0f3444584fe1a32c9b1da11" style="width: 100.0%; height: 100.0%;">Soldiers Hill</div>`)[0];
            popup_2bac440d021e4ded84b1be7ba751b5de.setContent(html_1e212093f0f3444584fe1a32c9b1da11);


        marker_8a59252587c04ac3a93247d3862a2624.bindPopup(popup_2bac440d021e4ded84b1be7ba751b5de)
        ;




            var marker_009ce923fbc64c48a3e35e4aea8fbac0 = L.marker(
                [-37.54735539, 143.9088138],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_cf1e7a6c5f564e0d9bfc62775a0f3f46 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_009ce923fbc64c48a3e35e4aea8fbac0.setIcon(icon_cf1e7a6c5f564e0d9bfc62775a0f3f46);


        var popup_b36b6bfac9554ff1afa61fee190b6e0d = L.popup({"maxWidth": "100%"});


            var html_1bee4387de7a4ea28b9fc85275412863 = $(`<div id="html_1bee4387de7a4ea28b9fc85275412863" style="width: 100.0%; height: 100.0%;">Brown Hill</div>`)[0];
            popup_b36b6bfac9554ff1afa61fee190b6e0d.setContent(html_1bee4387de7a4ea28b9fc85275412863);


        marker_009ce923fbc64c48a3e35e4aea8fbac0.bindPopup(popup_b36b6bfac9554ff1afa61fee190b6e0d)
        ;




            var marker_5868cd3f45a2494cb700b6059c5ba15b = L.marker(
                [-37.52636399, 143.8418301],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_57c1cde02c7c478ba2cba14d17bf8c40 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5868cd3f45a2494cb700b6059c5ba15b.setIcon(icon_57c1cde02c7c478ba2cba14d17bf8c40);


        var popup_34ed02ef5b044ff59a771337e4bee5bb = L.popup({"maxWidth": "100%"});


            var html_a7e7bd6faba64c21adf0c5767340e4ee = $(`<div id="html_a7e7bd6faba64c21adf0c5767340e4ee" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_34ed02ef5b044ff59a771337e4bee5bb.setContent(html_a7e7bd6faba64c21adf0c5767340e4ee);


        marker_5868cd3f45a2494cb700b6059c5ba15b.bindPopup(popup_34ed02ef5b044ff59a771337e4bee5bb)
        ;




            var marker_84b989b33c23459ebef1ef9faa9af7c1 = L.marker(
                [-37.59370898, 143.876507],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_2b72a902dbb7411eb65f022d87f7a055 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_84b989b33c23459ebef1ef9faa9af7c1.setIcon(icon_2b72a902dbb7411eb65f022d87f7a055);


        var popup_c2e630d676974e62bbe51c60e343d194 = L.popup({"maxWidth": "100%"});


            var html_22c869c58d79494380fd35a9bea916b1 = $(`<div id="html_22c869c58d79494380fd35a9bea916b1" style="width: 100.0%; height: 100.0%;">Mount Clear</div>`)[0];
            popup_c2e630d676974e62bbe51c60e343d194.setContent(html_22c869c58d79494380fd35a9bea916b1);


        marker_84b989b33c23459ebef1ef9faa9af7c1.bindPopup(popup_c2e630d676974e62bbe51c60e343d194)
        ;




            var marker_11b7880bda0043f3a5cc10fc4af2e944 = L.marker(
                [-37.55131963, 143.7969563],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_990b1787c3994b23a07f397fcddf00e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_11b7880bda0043f3a5cc10fc4af2e944.setIcon(icon_990b1787c3994b23a07f397fcddf00e9);


        var popup_a3867f66a833423aadeea35fe2d5e346 = L.popup({"maxWidth": "100%"});


            var html_fecc215474724e11b5649c798c2ae947 = $(`<div id="html_fecc215474724e11b5649c798c2ae947" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_a3867f66a833423aadeea35fe2d5e346.setContent(html_fecc215474724e11b5649c798c2ae947);


        marker_11b7880bda0043f3a5cc10fc4af2e944.bindPopup(popup_a3867f66a833423aadeea35fe2d5e346)
        ;




            var marker_b683900c41194add8532734c1dbded23 = L.marker(
                [-37.54225466, 143.8732918],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_58486fff83db4deb9b513d2e6b03b470 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b683900c41194add8532734c1dbded23.setIcon(icon_58486fff83db4deb9b513d2e6b03b470);


        var popup_af02a42706bd42b29effc28e89e7b146 = L.popup({"maxWidth": "100%"});


            var html_38b66f98fa514790aec65c38c4e66530 = $(`<div id="html_38b66f98fa514790aec65c38c4e66530" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_af02a42706bd42b29effc28e89e7b146.setContent(html_38b66f98fa514790aec65c38c4e66530);


        marker_b683900c41194add8532734c1dbded23.bindPopup(popup_af02a42706bd42b29effc28e89e7b146)
        ;




            var marker_1455e9d6d7be433ab421b0e0de96f9b6 = L.marker(
                [-37.52227503, 143.87390580000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_26e72f623c3a42bbac5d00875c648372 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1455e9d6d7be433ab421b0e0de96f9b6.setIcon(icon_26e72f623c3a42bbac5d00875c648372);


        var popup_1c90b76d5a9e48a6b7e5332aa3a8f3eb = L.popup({"maxWidth": "100%"});


            var html_101f3510848344e385c890c328d27bb0 = $(`<div id="html_101f3510848344e385c890c328d27bb0" style="width: 100.0%; height: 100.0%;">Invermay</div>`)[0];
            popup_1c90b76d5a9e48a6b7e5332aa3a8f3eb.setContent(html_101f3510848344e385c890c328d27bb0);


        marker_1455e9d6d7be433ab421b0e0de96f9b6.bindPopup(popup_1c90b76d5a9e48a6b7e5332aa3a8f3eb)
        ;




            var marker_ab0b476ba868419e8a63ac0cbb6941a7 = L.marker(
                [-37.52983349, 143.8587436],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_3a4dd83a2a5f49be8cc1d2bf69751372 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ab0b476ba868419e8a63ac0cbb6941a7.setIcon(icon_3a4dd83a2a5f49be8cc1d2bf69751372);


        var popup_3c5f5011df434a078f0d04bc165ea411 = L.popup({"maxWidth": "100%"});


            var html_427b544c215b4299b800a95f24a2ef33 = $(`<div id="html_427b544c215b4299b800a95f24a2ef33" style="width: 100.0%; height: 100.0%;">Invermay Park</div>`)[0];
            popup_3c5f5011df434a078f0d04bc165ea411.setContent(html_427b544c215b4299b800a95f24a2ef33);


        marker_ab0b476ba868419e8a63ac0cbb6941a7.bindPopup(popup_3c5f5011df434a078f0d04bc165ea411)
        ;




            var marker_e218e65011244f4bbfac397a0fa789b4 = L.marker(
                [-37.52476588, 143.8386273],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d13f84724dfc4c3d9b23f1e0a0966e88 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e218e65011244f4bbfac397a0fa789b4.setIcon(icon_d13f84724dfc4c3d9b23f1e0a0966e88);


        var popup_0e0ca7ddbe4a4aef8f2769e52f08f6f7 = L.popup({"maxWidth": "100%"});


            var html_eec10b4106d344b8a98a2c9548c8f906 = $(`<div id="html_eec10b4106d344b8a98a2c9548c8f906" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_0e0ca7ddbe4a4aef8f2769e52f08f6f7.setContent(html_eec10b4106d344b8a98a2c9548c8f906);


        marker_e218e65011244f4bbfac397a0fa789b4.bindPopup(popup_0e0ca7ddbe4a4aef8f2769e52f08f6f7)
        ;




            var marker_c681d9ba124643b98a42d344c9af54dd = L.marker(
                [-37.59351002, 143.83007990000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_20a57a2f1cb44dfd92e1269adec8c19a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c681d9ba124643b98a42d344c9af54dd.setIcon(icon_20a57a2f1cb44dfd92e1269adec8c19a);


        var popup_ec8005118a9748e2b82ecccfd5331ce1 = L.popup({"maxWidth": "100%"});


            var html_daacd4b37e764837a47f34a457ad4bae = $(`<div id="html_daacd4b37e764837a47f34a457ad4bae" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_ec8005118a9748e2b82ecccfd5331ce1.setContent(html_daacd4b37e764837a47f34a457ad4bae);


        marker_c681d9ba124643b98a42d344c9af54dd.bindPopup(popup_ec8005118a9748e2b82ecccfd5331ce1)
        ;




            var marker_d26ca6bed70d4828b58323f7b9b5415c = L.marker(
                [-37.58282287, 143.8528993],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4c8fd4cf9eb14e6c84e94d21de95263f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d26ca6bed70d4828b58323f7b9b5415c.setIcon(icon_4c8fd4cf9eb14e6c84e94d21de95263f);


        var popup_7e63a4c1db6d46f6bb0060ed79ce3391 = L.popup({"maxWidth": "100%"});


            var html_429625409f564e138d37b7392e8fb05c = $(`<div id="html_429625409f564e138d37b7392e8fb05c" style="width: 100.0%; height: 100.0%;">Mount Pleasant</div>`)[0];
            popup_7e63a4c1db6d46f6bb0060ed79ce3391.setContent(html_429625409f564e138d37b7392e8fb05c);


        marker_d26ca6bed70d4828b58323f7b9b5415c.bindPopup(popup_7e63a4c1db6d46f6bb0060ed79ce3391)
        ;




            var marker_f72cfe1753b846e0a2b743dc6af20d8a = L.marker(
                [-37.5724222, 143.8401603],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_08af1e9feb6e429bbfa87f4ed602f792 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f72cfe1753b846e0a2b743dc6af20d8a.setIcon(icon_08af1e9feb6e429bbfa87f4ed602f792);


        var popup_ec0242d39e6e4f6a9fee27331913c744 = L.popup({"maxWidth": "100%"});


            var html_880860a183214152adaf854aa648eac5 = $(`<div id="html_880860a183214152adaf854aa648eac5" style="width: 100.0%; height: 100.0%;">Redan</div>`)[0];
            popup_ec0242d39e6e4f6a9fee27331913c744.setContent(html_880860a183214152adaf854aa648eac5);


        marker_f72cfe1753b846e0a2b743dc6af20d8a.bindPopup(popup_ec0242d39e6e4f6a9fee27331913c744)
        ;




            var marker_7c6e28e290d3467194616a2058a81746 = L.marker(
                [-37.57529948, 143.8747779],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a65c3bcd35a14cf4a65cb70d4be5418d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7c6e28e290d3467194616a2058a81746.setIcon(icon_a65c3bcd35a14cf4a65cb70d4be5418d);


        var popup_9141bfb2f06746f2b13a8b86809b0350 = L.popup({"maxWidth": "100%"});


            var html_6f17ac6f7d5c4a21a9f2aca3e120c350 = $(`<div id="html_6f17ac6f7d5c4a21a9f2aca3e120c350" style="width: 100.0%; height: 100.0%;">Canadian</div>`)[0];
            popup_9141bfb2f06746f2b13a8b86809b0350.setContent(html_6f17ac6f7d5c4a21a9f2aca3e120c350);


        marker_7c6e28e290d3467194616a2058a81746.bindPopup(popup_9141bfb2f06746f2b13a8b86809b0350)
        ;




            var marker_497577fd22b44b5ab76066917825b327 = L.marker(
                [-37.43480484, 143.7249584],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_201ed117aac74145983685745b27f8df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_497577fd22b44b5ab76066917825b327.setIcon(icon_201ed117aac74145983685745b27f8df);


        var popup_f767b05fb0fc40c2a54742e6bcd31654 = L.popup({"maxWidth": "100%"});


            var html_2ebcf8f39979406f8cee49827eab4538 = $(`<div id="html_2ebcf8f39979406f8cee49827eab4538" style="width: 100.0%; height: 100.0%;">Learmonth</div>`)[0];
            popup_f767b05fb0fc40c2a54742e6bcd31654.setContent(html_2ebcf8f39979406f8cee49827eab4538);


        marker_497577fd22b44b5ab76066917825b327.bindPopup(popup_f767b05fb0fc40c2a54742e6bcd31654)
        ;




            var marker_55a63b91fa084497b9c47390ce805965 = L.marker(
                [-37.55024748, 143.8225395],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d231f180f66a4eb6a6f70c7cedf5a7b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_55a63b91fa084497b9c47390ce805965.setIcon(icon_d231f180f66a4eb6a6f70c7cedf5a7b1);


        var popup_5bdecc15c4f24aab955995cf35df5453 = L.popup({"maxWidth": "100%"});


            var html_0d198f63af834686aa63cc5b93806d93 = $(`<div id="html_0d198f63af834686aa63cc5b93806d93" style="width: 100.0%; height: 100.0%;">Lake Wendouree</div>`)[0];
            popup_5bdecc15c4f24aab955995cf35df5453.setContent(html_0d198f63af834686aa63cc5b93806d93);


        marker_55a63b91fa084497b9c47390ce805965.bindPopup(popup_5bdecc15c4f24aab955995cf35df5453)
        ;




            var marker_11660e6997e84f8f8a1d7292a6a44fb2 = L.marker(
                [-37.55228448, 143.8229301],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_6ea81ae8373147beb2ed206d113ee811 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_11660e6997e84f8f8a1d7292a6a44fb2.setIcon(icon_6ea81ae8373147beb2ed206d113ee811);


        var popup_71d6c0411ee943e69b4576089cf0d74e = L.popup({"maxWidth": "100%"});


            var html_f2c3036db5bc4a15a84eede7c3f8bc3c = $(`<div id="html_f2c3036db5bc4a15a84eede7c3f8bc3c" style="width: 100.0%; height: 100.0%;">Lake Wendouree</div>`)[0];
            popup_71d6c0411ee943e69b4576089cf0d74e.setContent(html_f2c3036db5bc4a15a84eede7c3f8bc3c);


        marker_11660e6997e84f8f8a1d7292a6a44fb2.bindPopup(popup_71d6c0411ee943e69b4576089cf0d74e)
        ;




            var marker_af5394c4268e453497c5886ede1ed131 = L.marker(
                [-37.55567607, 143.83205719999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_061a891a4e16454982517789680e24c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_af5394c4268e453497c5886ede1ed131.setIcon(icon_061a891a4e16454982517789680e24c7);


        var popup_c8cc9e82b6554e00ac0b1c963660d7ec = L.popup({"maxWidth": "100%"});


            var html_9baa9acd87414d31b14dfbc45c34e66a = $(`<div id="html_9baa9acd87414d31b14dfbc45c34e66a" style="width: 100.0%; height: 100.0%;">Lake Wendouree</div>`)[0];
            popup_c8cc9e82b6554e00ac0b1c963660d7ec.setContent(html_9baa9acd87414d31b14dfbc45c34e66a);


        marker_af5394c4268e453497c5886ede1ed131.bindPopup(popup_c8cc9e82b6554e00ac0b1c963660d7ec)
        ;




            var marker_a99d335d7a104e12aded34f30feed3e9 = L.marker(
                [-37.54458055, 143.8346263],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5d629d94ca1c457981df384bed376860 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a99d335d7a104e12aded34f30feed3e9.setIcon(icon_5d629d94ca1c457981df384bed376860);


        var popup_432fc6fb1ada4308869a77655a93f863 = L.popup({"maxWidth": "100%"});


            var html_3cff482f3bd644e38213c9a7f1b63e0c = $(`<div id="html_3cff482f3bd644e38213c9a7f1b63e0c" style="width: 100.0%; height: 100.0%;">Lake Wendouree</div>`)[0];
            popup_432fc6fb1ada4308869a77655a93f863.setContent(html_3cff482f3bd644e38213c9a7f1b63e0c);


        marker_a99d335d7a104e12aded34f30feed3e9.bindPopup(popup_432fc6fb1ada4308869a77655a93f863)
        ;




            var marker_b8817d72ea264c408bcb35c2591ffe75 = L.marker(
                [-37.55545096, 143.84204],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d2961c16f486461fb4322d6dabef6dd4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b8817d72ea264c408bcb35c2591ffe75.setIcon(icon_d2961c16f486461fb4322d6dabef6dd4);


        var popup_50dc09ed70554632b7ae2ac22cad17bf = L.popup({"maxWidth": "100%"});


            var html_afe8a81a929e47b4a62df23fe2248137 = $(`<div id="html_afe8a81a929e47b4a62df23fe2248137" style="width: 100.0%; height: 100.0%;">Lake Wendouree</div>`)[0];
            popup_50dc09ed70554632b7ae2ac22cad17bf.setContent(html_afe8a81a929e47b4a62df23fe2248137);


        marker_b8817d72ea264c408bcb35c2591ffe75.bindPopup(popup_50dc09ed70554632b7ae2ac22cad17bf)
        ;




            var marker_8b365802f69345fa9adf42f554a12ebd = L.marker(
                [-37.55764436, 143.8046099],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_6a6cc49f50fd4a7284105cd83ec6f88b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8b365802f69345fa9adf42f554a12ebd.setIcon(icon_6a6cc49f50fd4a7284105cd83ec6f88b);


        var popup_ec3b3170b4014e0a97ac5f391b09b094 = L.popup({"maxWidth": "100%"});


            var html_b4e3b14d887a40ef95f8b208297dff19 = $(`<div id="html_b4e3b14d887a40ef95f8b208297dff19" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_ec3b3170b4014e0a97ac5f391b09b094.setContent(html_b4e3b14d887a40ef95f8b208297dff19);


        marker_8b365802f69345fa9adf42f554a12ebd.bindPopup(popup_ec3b3170b4014e0a97ac5f391b09b094)
        ;




            var marker_7ac4653ae1b84c0495ea8a7b8067449a = L.marker(
                [-37.58413965, 143.8230174],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b6fc88a894f54d239eac544a08c4e3ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7ac4653ae1b84c0495ea8a7b8067449a.setIcon(icon_b6fc88a894f54d239eac544a08c4e3ec);


        var popup_8298e9e45a0c4de69b00ffa70bad232b = L.popup({"maxWidth": "100%"});


            var html_6ee013605f564018921ff26e220c963a = $(`<div id="html_6ee013605f564018921ff26e220c963a" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_8298e9e45a0c4de69b00ffa70bad232b.setContent(html_6ee013605f564018921ff26e220c963a);


        marker_7ac4653ae1b84c0495ea8a7b8067449a.bindPopup(popup_8298e9e45a0c4de69b00ffa70bad232b)
        ;




            var marker_c0da2789f2c6487893de5f0eed6e6ef0 = L.marker(
                [-37.58440312, 143.822886],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_bab38eeccd274ceeae4857b3343104b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c0da2789f2c6487893de5f0eed6e6ef0.setIcon(icon_bab38eeccd274ceeae4857b3343104b8);


        var popup_58b5689e4eca4296b19e6ac412c2866b = L.popup({"maxWidth": "100%"});


            var html_b741e1694325454f9792f53d93e439d9 = $(`<div id="html_b741e1694325454f9792f53d93e439d9" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_58b5689e4eca4296b19e6ac412c2866b.setContent(html_b741e1694325454f9792f53d93e439d9);


        marker_c0da2789f2c6487893de5f0eed6e6ef0.bindPopup(popup_58b5689e4eca4296b19e6ac412c2866b)
        ;




            var marker_13f3f7ccc0fe405a9b670ef24845ebf3 = L.marker(
                [-37.56577574, 143.8674611],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_0fbc92bf702a467c899c6165c01d92be = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_13f3f7ccc0fe405a9b670ef24845ebf3.setIcon(icon_0fbc92bf702a467c899c6165c01d92be);


        var popup_b85894651fa3453fa6c784f2e443ed79 = L.popup({"maxWidth": "100%"});


            var html_25f6abab0df843759b50227eb14db27f = $(`<div id="html_25f6abab0df843759b50227eb14db27f" style="width: 100.0%; height: 100.0%;">Bakery Hill</div>`)[0];
            popup_b85894651fa3453fa6c784f2e443ed79.setContent(html_25f6abab0df843759b50227eb14db27f);


        marker_13f3f7ccc0fe405a9b670ef24845ebf3.bindPopup(popup_b85894651fa3453fa6c784f2e443ed79)
        ;




            var marker_ba9d3f0f91b14617ac3b231ffe940179 = L.marker(
                [-37.56577574, 143.8674611],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_f0eddb604d384be89bf6c8e3c82d2666 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ba9d3f0f91b14617ac3b231ffe940179.setIcon(icon_f0eddb604d384be89bf6c8e3c82d2666);


        var popup_4c82be8b432a4902847a5221dd23cef7 = L.popup({"maxWidth": "100%"});


            var html_05c0ed285425431b92b3dbdee8f6c948 = $(`<div id="html_05c0ed285425431b92b3dbdee8f6c948" style="width: 100.0%; height: 100.0%;">Bakery Hill</div>`)[0];
            popup_4c82be8b432a4902847a5221dd23cef7.setContent(html_05c0ed285425431b92b3dbdee8f6c948);


        marker_ba9d3f0f91b14617ac3b231ffe940179.bindPopup(popup_4c82be8b432a4902847a5221dd23cef7)
        ;




            var marker_0536daac9eab438f8270e9da2840db36 = L.marker(
                [-37.55010601, 143.781139],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_8634ed9b3aa443a0b4941a17f71a10b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0536daac9eab438f8270e9da2840db36.setIcon(icon_8634ed9b3aa443a0b4941a17f71a10b3);


        var popup_845e088a48864908a181d37575012392 = L.popup({"maxWidth": "100%"});


            var html_dcbbfda82e544c5c853042c7b1f503f3 = $(`<div id="html_dcbbfda82e544c5c853042c7b1f503f3" style="width: 100.0%; height: 100.0%;">Lucas</div>`)[0];
            popup_845e088a48864908a181d37575012392.setContent(html_dcbbfda82e544c5c853042c7b1f503f3);


        marker_0536daac9eab438f8270e9da2840db36.bindPopup(popup_845e088a48864908a181d37575012392)
        ;




            var marker_ec7be12f69fa463888bc6e8b6f3ec239 = L.marker(
                [-37.50075327, 143.810416],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_42597507523d4651ab365fb67b2634ad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ec7be12f69fa463888bc6e8b6f3ec239.setIcon(icon_42597507523d4651ab365fb67b2634ad);


        var popup_1c6c3bf754054f769803e0f1f6d36f31 = L.popup({"maxWidth": "100%"});


            var html_f98cf31b37434fe4ad0a4c5bd22ba016 = $(`<div id="html_f98cf31b37434fe4ad0a4c5bd22ba016" style="width: 100.0%; height: 100.0%;">Miners Rest</div>`)[0];
            popup_1c6c3bf754054f769803e0f1f6d36f31.setContent(html_f98cf31b37434fe4ad0a4c5bd22ba016);


        marker_ec7be12f69fa463888bc6e8b6f3ec239.bindPopup(popup_1c6c3bf754054f769803e0f1f6d36f31)
        ;




            var marker_5e57dd17e9cb465fafc6f7579bfc6407 = L.marker(
                [-37.55085223, 143.8550656],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_0c688488b4ae46418aa18c0e88125ce7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5e57dd17e9cb465fafc6f7579bfc6407.setIcon(icon_0c688488b4ae46418aa18c0e88125ce7);


        var popup_0c5c6fe517cb4d5297e89e0b15450b53 = L.popup({"maxWidth": "100%"});


            var html_bb2a7ddff3cf42f397b538c2f320c69c = $(`<div id="html_bb2a7ddff3cf42f397b538c2f320c69c" style="width: 100.0%; height: 100.0%;">Soldiers Hill</div>`)[0];
            popup_0c5c6fe517cb4d5297e89e0b15450b53.setContent(html_bb2a7ddff3cf42f397b538c2f320c69c);


        marker_5e57dd17e9cb465fafc6f7579bfc6407.bindPopup(popup_0c5c6fe517cb4d5297e89e0b15450b53)
        ;




            var marker_7c203f94cefa42fa8feb4e50fc016a33 = L.marker(
                [-37.52938081, 143.82262580000003],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_ac023ae69b0a4fa0bde71e153b2fc108 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7c203f94cefa42fa8feb4e50fc016a33.setIcon(icon_ac023ae69b0a4fa0bde71e153b2fc108);


        var popup_a454d264b64946eab2c3ce08ee1e54bb = L.popup({"maxWidth": "100%"});


            var html_a36d6f1ebf744b8fbc9173a83f28ec56 = $(`<div id="html_a36d6f1ebf744b8fbc9173a83f28ec56" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_a454d264b64946eab2c3ce08ee1e54bb.setContent(html_a36d6f1ebf744b8fbc9173a83f28ec56);


        marker_7c203f94cefa42fa8feb4e50fc016a33.bindPopup(popup_a454d264b64946eab2c3ce08ee1e54bb)
        ;




            var marker_a4706df800484cfc9bb5da9360cd4303 = L.marker(
                [-37.60788664, 143.86495390000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4f5f3f28bb1a44958dc25f072ae0cd5b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a4706df800484cfc9bb5da9360cd4303.setIcon(icon_4f5f3f28bb1a44958dc25f072ae0cd5b);


        var popup_81ace9273d6f421dacef62c0e95422bd = L.popup({"maxWidth": "100%"});


            var html_097c82c286344195b339ba53900221ac = $(`<div id="html_097c82c286344195b339ba53900221ac" style="width: 100.0%; height: 100.0%;">Mount Clear</div>`)[0];
            popup_81ace9273d6f421dacef62c0e95422bd.setContent(html_097c82c286344195b339ba53900221ac);


        marker_a4706df800484cfc9bb5da9360cd4303.bindPopup(popup_81ace9273d6f421dacef62c0e95422bd)
        ;




            var marker_a5ef2c9f82594943bfc6ed9454b8529a = L.marker(
                [-37.54288954, 143.8629542],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_873ff106cf3548b69a4961460309c9e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a5ef2c9f82594943bfc6ed9454b8529a.setIcon(icon_873ff106cf3548b69a4961460309c9e0);


        var popup_419ec876cff8467c8cc4a1b8968543d4 = L.popup({"maxWidth": "100%"});


            var html_d3e72df2b7054011875d0597d2cd0532 = $(`<div id="html_d3e72df2b7054011875d0597d2cd0532" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_419ec876cff8467c8cc4a1b8968543d4.setContent(html_d3e72df2b7054011875d0597d2cd0532);


        marker_a5ef2c9f82594943bfc6ed9454b8529a.bindPopup(popup_419ec876cff8467c8cc4a1b8968543d4)
        ;




            var marker_5e237a9fed0a45cda4f8468f2f96a3d1 = L.marker(
                [-37.60308371, 143.8448448],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_46c59594c5594964878846e49c3b2d94 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5e237a9fed0a45cda4f8468f2f96a3d1.setIcon(icon_46c59594c5594964878846e49c3b2d94);


        var popup_2a71cb5bbd4142e4a035c2192ab2ae03 = L.popup({"maxWidth": "100%"});


            var html_b359c6c4e72d4007830217073827ac96 = $(`<div id="html_b359c6c4e72d4007830217073827ac96" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_2a71cb5bbd4142e4a035c2192ab2ae03.setContent(html_b359c6c4e72d4007830217073827ac96);


        marker_5e237a9fed0a45cda4f8468f2f96a3d1.bindPopup(popup_2a71cb5bbd4142e4a035c2192ab2ae03)
        ;




            var marker_7998a1f45d6642a680db208b90d24591 = L.marker(
                [-37.58509009, 143.8585873],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_17dcc50710d64dc7baacfc7f3e5987e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7998a1f45d6642a680db208b90d24591.setIcon(icon_17dcc50710d64dc7baacfc7f3e5987e2);


        var popup_d3aae369b6bd42c4bb113bbb0e23a824 = L.popup({"maxWidth": "100%"});


            var html_f74701c182714284980e340459d5c0a0 = $(`<div id="html_f74701c182714284980e340459d5c0a0" style="width: 100.0%; height: 100.0%;">Mount Pleasant</div>`)[0];
            popup_d3aae369b6bd42c4bb113bbb0e23a824.setContent(html_f74701c182714284980e340459d5c0a0);


        marker_7998a1f45d6642a680db208b90d24591.bindPopup(popup_d3aae369b6bd42c4bb113bbb0e23a824)
        ;




            var marker_3aa78129a73d43b9acb14ba35682cf5a = L.marker(
                [-37.526644299999994, 143.8128036],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_fd78b884696e4c58ab6728976c40e6f8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3aa78129a73d43b9acb14ba35682cf5a.setIcon(icon_fd78b884696e4c58ab6728976c40e6f8);


        var popup_2bbfc943a42a4ba381d98168aa293398 = L.popup({"maxWidth": "100%"});


            var html_da16985d51e046479dc859ded524c40d = $(`<div id="html_da16985d51e046479dc859ded524c40d" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_2bbfc943a42a4ba381d98168aa293398.setContent(html_da16985d51e046479dc859ded524c40d);


        marker_3aa78129a73d43b9acb14ba35682cf5a.bindPopup(popup_2bbfc943a42a4ba381d98168aa293398)
        ;




            var marker_1a9b26d597144874b549c3e413771113 = L.marker(
                [-37.59165721, 143.8212242],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_461c9771a8c54dabb39a58f339ae8be1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1a9b26d597144874b549c3e413771113.setIcon(icon_461c9771a8c54dabb39a58f339ae8be1);


        var popup_d7e4bbaefe7d4de68b2d0da703c18c40 = L.popup({"maxWidth": "100%"});


            var html_81e9b5e306d14f2c880c9092991396be = $(`<div id="html_81e9b5e306d14f2c880c9092991396be" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_d7e4bbaefe7d4de68b2d0da703c18c40.setContent(html_81e9b5e306d14f2c880c9092991396be);


        marker_1a9b26d597144874b549c3e413771113.bindPopup(popup_d7e4bbaefe7d4de68b2d0da703c18c40)
        ;




            var marker_454977810c5840e9ad96352b7b7798d9 = L.marker(
                [-37.54030618, 143.8595315],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_8c2980d247f640a686b9c6eebd72b5e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_454977810c5840e9ad96352b7b7798d9.setIcon(icon_8c2980d247f640a686b9c6eebd72b5e3);


        var popup_24b7e8d53fc64e63b75358d7306ed424 = L.popup({"maxWidth": "100%"});


            var html_a677988bd62643f5a4f9676a16d57af6 = $(`<div id="html_a677988bd62643f5a4f9676a16d57af6" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_24b7e8d53fc64e63b75358d7306ed424.setContent(html_a677988bd62643f5a4f9676a16d57af6);


        marker_454977810c5840e9ad96352b7b7798d9.bindPopup(popup_24b7e8d53fc64e63b75358d7306ed424)
        ;




            var marker_54ed0bf72e0a42d3997162571e71319f = L.marker(
                [-37.53947901, 143.860245],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_ff61648fc7d84068aa4d1f374081bb52 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_54ed0bf72e0a42d3997162571e71319f.setIcon(icon_ff61648fc7d84068aa4d1f374081bb52);


        var popup_21f5a977a1d649b7ae1fa20c4a7d7a02 = L.popup({"maxWidth": "100%"});


            var html_d9098e6c46e547f69042c88b5ee4ef4d = $(`<div id="html_d9098e6c46e547f69042c88b5ee4ef4d" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_21f5a977a1d649b7ae1fa20c4a7d7a02.setContent(html_d9098e6c46e547f69042c88b5ee4ef4d);


        marker_54ed0bf72e0a42d3997162571e71319f.bindPopup(popup_21f5a977a1d649b7ae1fa20c4a7d7a02)
        ;




            var marker_08b0bcc037864259b07968caaf53215b = L.marker(
                [-37.48050982, 143.7977043],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_3d8eaa78def84008bcc58eadd36c5cfa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_08b0bcc037864259b07968caaf53215b.setIcon(icon_3d8eaa78def84008bcc58eadd36c5cfa);


        var popup_e169834a5e9449aa9454fd4ce1fbf4cb = L.popup({"maxWidth": "100%"});


            var html_9b23910c829841c3864700500c934792 = $(`<div id="html_9b23910c829841c3864700500c934792" style="width: 100.0%; height: 100.0%;">Miners Rest</div>`)[0];
            popup_e169834a5e9449aa9454fd4ce1fbf4cb.setContent(html_9b23910c829841c3864700500c934792);


        marker_08b0bcc037864259b07968caaf53215b.bindPopup(popup_e169834a5e9449aa9454fd4ce1fbf4cb)
        ;




            var marker_998d442a4bd641a4b6eb0b3d7bf450fe = L.marker(
                [-37.52561691, 143.83052990000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d1d63c6ac19b4607a556a3ad089aae27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_998d442a4bd641a4b6eb0b3d7bf450fe.setIcon(icon_d1d63c6ac19b4607a556a3ad089aae27);


        var popup_f87e71fc355d44d5b0d11548ee3c26b6 = L.popup({"maxWidth": "100%"});


            var html_3b6f8da4de9f4b619d75f022858bd509 = $(`<div id="html_3b6f8da4de9f4b619d75f022858bd509" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_f87e71fc355d44d5b0d11548ee3c26b6.setContent(html_3b6f8da4de9f4b619d75f022858bd509);


        marker_998d442a4bd641a4b6eb0b3d7bf450fe.bindPopup(popup_f87e71fc355d44d5b0d11548ee3c26b6)
        ;




            var marker_7bdd87cd126c4fa6b703f53a5fe8417b = L.marker(
                [-37.58068689, 143.8335146],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e9101a9dcf9e41f9874d08826da4037d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7bdd87cd126c4fa6b703f53a5fe8417b.setIcon(icon_e9101a9dcf9e41f9874d08826da4037d);


        var popup_19bfe1017f514cddad74b3579db5b3d8 = L.popup({"maxWidth": "100%"});


            var html_d375dc8fe69240fca998bfd97932ee35 = $(`<div id="html_d375dc8fe69240fca998bfd97932ee35" style="width: 100.0%; height: 100.0%;">Redan</div>`)[0];
            popup_19bfe1017f514cddad74b3579db5b3d8.setContent(html_d375dc8fe69240fca998bfd97932ee35);


        marker_7bdd87cd126c4fa6b703f53a5fe8417b.bindPopup(popup_19bfe1017f514cddad74b3579db5b3d8)
        ;




            var marker_0860683983574432bc41324f0886b16e = L.marker(
                [-37.60064498, 143.83094609999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_aa14a665947a46f5a68a351719b3d069 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0860683983574432bc41324f0886b16e.setIcon(icon_aa14a665947a46f5a68a351719b3d069);


        var popup_cca1f1d2b0554e9ba2b06be4e923e850 = L.popup({"maxWidth": "100%"});


            var html_85cba6665afb4812938f1f16a6b5225f = $(`<div id="html_85cba6665afb4812938f1f16a6b5225f" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_cca1f1d2b0554e9ba2b06be4e923e850.setContent(html_85cba6665afb4812938f1f16a6b5225f);


        marker_0860683983574432bc41324f0886b16e.bindPopup(popup_cca1f1d2b0554e9ba2b06be4e923e850)
        ;




            var marker_f5c135bd79f44e138e226e7ab52f80dc = L.marker(
                [-37.57072302, 143.7827489],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_9a6635a1f40542c98e9baeddbc1d5694 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f5c135bd79f44e138e226e7ab52f80dc.setIcon(icon_9a6635a1f40542c98e9baeddbc1d5694);


        var popup_1b7044e63ff54d1e9794210076a90f96 = L.popup({"maxWidth": "100%"});


            var html_9aeae5f6d3024f36b58ef034be8ef98d = $(`<div id="html_9aeae5f6d3024f36b58ef034be8ef98d" style="width: 100.0%; height: 100.0%;">Cardigan</div>`)[0];
            popup_1b7044e63ff54d1e9794210076a90f96.setContent(html_9aeae5f6d3024f36b58ef034be8ef98d);


        marker_f5c135bd79f44e138e226e7ab52f80dc.bindPopup(popup_1b7044e63ff54d1e9794210076a90f96)
        ;




            var marker_24a1dd11039c4e7c95a76b544cbb7ec8 = L.marker(
                [-37.57789261, 143.85179230000003],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_ef0af18a10304c97995ef89b06f7f86e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_24a1dd11039c4e7c95a76b544cbb7ec8.setIcon(icon_ef0af18a10304c97995ef89b06f7f86e);


        var popup_8d9db005aded41cba29f2e99446683a2 = L.popup({"maxWidth": "100%"});


            var html_85890551ff9749c58cb5e337afa9d234 = $(`<div id="html_85890551ff9749c58cb5e337afa9d234" style="width: 100.0%; height: 100.0%;">Mount Pleasant</div>`)[0];
            popup_8d9db005aded41cba29f2e99446683a2.setContent(html_85890551ff9749c58cb5e337afa9d234);


        marker_24a1dd11039c4e7c95a76b544cbb7ec8.bindPopup(popup_8d9db005aded41cba29f2e99446683a2)
        ;




            var marker_88de5b0f4be54238a08570534da962c3 = L.marker(
                [-37.57757004, 143.8515421],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5810224bd1874500aff5ba050eb161ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_88de5b0f4be54238a08570534da962c3.setIcon(icon_5810224bd1874500aff5ba050eb161ff);


        var popup_584cf7fe19ac4de2bd494d3a1ac8ee4f = L.popup({"maxWidth": "100%"});


            var html_ef99ae85130c44f3b83c5d462d063cd4 = $(`<div id="html_ef99ae85130c44f3b83c5d462d063cd4" style="width: 100.0%; height: 100.0%;">Mount Pleasant</div>`)[0];
            popup_584cf7fe19ac4de2bd494d3a1ac8ee4f.setContent(html_ef99ae85130c44f3b83c5d462d063cd4);


        marker_88de5b0f4be54238a08570534da962c3.bindPopup(popup_584cf7fe19ac4de2bd494d3a1ac8ee4f)
        ;




            var marker_77952b2778664fc796da713307c25fea = L.marker(
                [-37.5975068, 143.841464],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_96dad97aaf12475bb14b8fcf17dc9169 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_77952b2778664fc796da713307c25fea.setIcon(icon_96dad97aaf12475bb14b8fcf17dc9169);


        var popup_622ec111ccca409a8b781fc341044d38 = L.popup({"maxWidth": "100%"});


            var html_a263ab1ff73943a38097dbd8c6960842 = $(`<div id="html_a263ab1ff73943a38097dbd8c6960842" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_622ec111ccca409a8b781fc341044d38.setContent(html_a263ab1ff73943a38097dbd8c6960842);


        marker_77952b2778664fc796da713307c25fea.bindPopup(popup_622ec111ccca409a8b781fc341044d38)
        ;




            var marker_6b610b2730b741a5854894557af05a61 = L.marker(
                [-37.57405919, 143.8587427],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_da57ee6cdf554058b279833c0a1448c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6b610b2730b741a5854894557af05a61.setIcon(icon_da57ee6cdf554058b279833c0a1448c9);


        var popup_8ffba550d0d84699982e10c7ee684708 = L.popup({"maxWidth": "100%"});


            var html_00c7c5fb8096418cb480daec0e1c26ef = $(`<div id="html_00c7c5fb8096418cb480daec0e1c26ef" style="width: 100.0%; height: 100.0%;">Golden Point</div>`)[0];
            popup_8ffba550d0d84699982e10c7ee684708.setContent(html_00c7c5fb8096418cb480daec0e1c26ef);


        marker_6b610b2730b741a5854894557af05a61.bindPopup(popup_8ffba550d0d84699982e10c7ee684708)
        ;




            var marker_aa6b7ea7014546ab8ed0fc7254e7a030 = L.marker(
                [-37.5494499, 143.8672449],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_945113bbd044401ea16c22340e88131a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_aa6b7ea7014546ab8ed0fc7254e7a030.setIcon(icon_945113bbd044401ea16c22340e88131a);


        var popup_b386525167f044869181074243d1ae21 = L.popup({"maxWidth": "100%"});


            var html_c5e4c8a9f64147f5a72faf427091b0d2 = $(`<div id="html_c5e4c8a9f64147f5a72faf427091b0d2" style="width: 100.0%; height: 100.0%;">Black Hill</div>`)[0];
            popup_b386525167f044869181074243d1ae21.setContent(html_c5e4c8a9f64147f5a72faf427091b0d2);


        marker_aa6b7ea7014546ab8ed0fc7254e7a030.bindPopup(popup_b386525167f044869181074243d1ae21)
        ;




            var marker_f733430d835e4824af8e7f1026cdd449 = L.marker(
                [-37.57037261, 143.875678],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_54133ba3e4a645e88ff959d236343852 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f733430d835e4824af8e7f1026cdd449.setIcon(icon_54133ba3e4a645e88ff959d236343852);


        var popup_a6e02fa958874a369f87f6ff8bbaeef8 = L.popup({"maxWidth": "100%"});


            var html_b4af85f6b73447e4ac499038722013d0 = $(`<div id="html_b4af85f6b73447e4ac499038722013d0" style="width: 100.0%; height: 100.0%;">Ballarat East</div>`)[0];
            popup_a6e02fa958874a369f87f6ff8bbaeef8.setContent(html_b4af85f6b73447e4ac499038722013d0);


        marker_f733430d835e4824af8e7f1026cdd449.bindPopup(popup_a6e02fa958874a369f87f6ff8bbaeef8)
        ;




            var marker_32143d78c23f458a98f8dcdf3da17c2b = L.marker(
                [-37.53425381, 143.87085249999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4856992cdb474c1c8d326a41b7564ba4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_32143d78c23f458a98f8dcdf3da17c2b.setIcon(icon_4856992cdb474c1c8d326a41b7564ba4);


        var popup_badac23f70ce4345adb994c00257b862 = L.popup({"maxWidth": "100%"});


            var html_a9ffe5f7b4c84cd8808728c211101fca = $(`<div id="html_a9ffe5f7b4c84cd8808728c211101fca" style="width: 100.0%; height: 100.0%;">Ballarat North</div>`)[0];
            popup_badac23f70ce4345adb994c00257b862.setContent(html_a9ffe5f7b4c84cd8808728c211101fca);


        marker_32143d78c23f458a98f8dcdf3da17c2b.bindPopup(popup_badac23f70ce4345adb994c00257b862)
        ;




            var marker_7be921012b42462a94075d7f99403a26 = L.marker(
                [-37.57181197, 143.8350634],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_795cb563dc694890aefbf7e1ce8a38b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7be921012b42462a94075d7f99403a26.setIcon(icon_795cb563dc694890aefbf7e1ce8a38b9);


        var popup_0dd737ee950e4ca29c4e2a604ad2df9f = L.popup({"maxWidth": "100%"});


            var html_d4d56e1597a644c4a8c73d6bd831104d = $(`<div id="html_d4d56e1597a644c4a8c73d6bd831104d" style="width: 100.0%; height: 100.0%;">Redan</div>`)[0];
            popup_0dd737ee950e4ca29c4e2a604ad2df9f.setContent(html_d4d56e1597a644c4a8c73d6bd831104d);


        marker_7be921012b42462a94075d7f99403a26.bindPopup(popup_0dd737ee950e4ca29c4e2a604ad2df9f)
        ;




            var marker_fc0555d512564f698aaac29c0d5c7057 = L.marker(
                [-37.52426447, 143.8580534],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_c2430778c1344d899b1456fda79692b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fc0555d512564f698aaac29c0d5c7057.setIcon(icon_c2430778c1344d899b1456fda79692b6);


        var popup_61df8c44e8a34bb1838ae39e9c3e4a49 = L.popup({"maxWidth": "100%"});


            var html_7f4c856caa3a4844ab1ec6b7eb9fa55e = $(`<div id="html_7f4c856caa3a4844ab1ec6b7eb9fa55e" style="width: 100.0%; height: 100.0%;">Invermay Park</div>`)[0];
            popup_61df8c44e8a34bb1838ae39e9c3e4a49.setContent(html_7f4c856caa3a4844ab1ec6b7eb9fa55e);


        marker_fc0555d512564f698aaac29c0d5c7057.bindPopup(popup_61df8c44e8a34bb1838ae39e9c3e4a49)
        ;




            var marker_07238fbe11e241f9822bb63868a23c11 = L.marker(
                [-37.53045394, 143.8263398],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b18284e4cf844d4397923b687c616d7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_07238fbe11e241f9822bb63868a23c11.setIcon(icon_b18284e4cf844d4397923b687c616d7d);


        var popup_7c06fed374e94f6dac81839c6c1cc195 = L.popup({"maxWidth": "100%"});


            var html_d4f180b22c424e7eaa9a841f7203d35f = $(`<div id="html_d4f180b22c424e7eaa9a841f7203d35f" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_7c06fed374e94f6dac81839c6c1cc195.setContent(html_d4f180b22c424e7eaa9a841f7203d35f);


        marker_07238fbe11e241f9822bb63868a23c11.bindPopup(popup_7c06fed374e94f6dac81839c6c1cc195)
        ;




            var marker_dbde46b0357c4c349f1ead7241cef767 = L.marker(
                [-37.55580559, 143.8851841],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_57b9ed38ecb54dc8ab04f2ebc8d2ad8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dbde46b0357c4c349f1ead7241cef767.setIcon(icon_57b9ed38ecb54dc8ab04f2ebc8d2ad8f);


        var popup_0f2ba84b1ad84785948acf99e245e5ef = L.popup({"maxWidth": "100%"});


            var html_7fc3fc00fbd1400185afdc67a99e7657 = $(`<div id="html_7fc3fc00fbd1400185afdc67a99e7657" style="width: 100.0%; height: 100.0%;">Brown Hill</div>`)[0];
            popup_0f2ba84b1ad84785948acf99e245e5ef.setContent(html_7fc3fc00fbd1400185afdc67a99e7657);


        marker_dbde46b0357c4c349f1ead7241cef767.bindPopup(popup_0f2ba84b1ad84785948acf99e245e5ef)
        ;




            var marker_b9d020930b684615be823cbd9fc13cd0 = L.marker(
                [-37.62972904, 143.87507309999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_bce15ba9408a443da9b6bef39e447158 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b9d020930b684615be823cbd9fc13cd0.setIcon(icon_bce15ba9408a443da9b6bef39e447158);


        var popup_7985546231224f93897774c84a127464 = L.popup({"maxWidth": "100%"});


            var html_0e6a76f9276c42d0b2c60b193e849f45 = $(`<div id="html_0e6a76f9276c42d0b2c60b193e849f45" style="width: 100.0%; height: 100.0%;">Mount Helen</div>`)[0];
            popup_7985546231224f93897774c84a127464.setContent(html_0e6a76f9276c42d0b2c60b193e849f45);


        marker_b9d020930b684615be823cbd9fc13cd0.bindPopup(popup_7985546231224f93897774c84a127464)
        ;




            var marker_2198d1790a8240fdafdf883511d636c6 = L.marker(
                [-37.59540367, 143.8688509],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_478c92b739334cb29606152c7bd0c683 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2198d1790a8240fdafdf883511d636c6.setIcon(icon_478c92b739334cb29606152c7bd0c683);


        var popup_c56c3e45a0144f4d9ae46bb472da76a6 = L.popup({"maxWidth": "100%"});


            var html_3eebd36cbc6d48e9a7546819b34f5ee3 = $(`<div id="html_3eebd36cbc6d48e9a7546819b34f5ee3" style="width: 100.0%; height: 100.0%;">Mount Clear</div>`)[0];
            popup_c56c3e45a0144f4d9ae46bb472da76a6.setContent(html_3eebd36cbc6d48e9a7546819b34f5ee3);


        marker_2198d1790a8240fdafdf883511d636c6.bindPopup(popup_c56c3e45a0144f4d9ae46bb472da76a6)
        ;




            var marker_b1a1a687870a4fed8be2d5937ab86f05 = L.marker(
                [-37.53580263, 143.8282657],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d84a04bcca434d309b695a81cca8c3fc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b1a1a687870a4fed8be2d5937ab86f05.setIcon(icon_d84a04bcca434d309b695a81cca8c3fc);


        var popup_04560d1cc77847f2b644016bfe8e8178 = L.popup({"maxWidth": "100%"});


            var html_ecc077a9f3264ce6be007f20d709c7d2 = $(`<div id="html_ecc077a9f3264ce6be007f20d709c7d2" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_04560d1cc77847f2b644016bfe8e8178.setContent(html_ecc077a9f3264ce6be007f20d709c7d2);


        marker_b1a1a687870a4fed8be2d5937ab86f05.bindPopup(popup_04560d1cc77847f2b644016bfe8e8178)
        ;




            var marker_d6c666e9fb7444948e1b6854dfdc8d72 = L.marker(
                [-37.58810401, 143.86468330000002],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d2f208d5f8544f5588f16a55217f90b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d6c666e9fb7444948e1b6854dfdc8d72.setIcon(icon_d2f208d5f8544f5588f16a55217f90b5);


        var popup_7a91f4aef2004455a77b49ca80507c5e = L.popup({"maxWidth": "100%"});


            var html_b0f4c3167adb405c80eb2544c24a8439 = $(`<div id="html_b0f4c3167adb405c80eb2544c24a8439" style="width: 100.0%; height: 100.0%;">Canadian</div>`)[0];
            popup_7a91f4aef2004455a77b49ca80507c5e.setContent(html_b0f4c3167adb405c80eb2544c24a8439);


        marker_d6c666e9fb7444948e1b6854dfdc8d72.bindPopup(popup_7a91f4aef2004455a77b49ca80507c5e)
        ;




            var marker_88e92c207b0246c590d865a4b5d15c5f = L.marker(
                [-37.56078938, 143.8093102],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d33e4d0b014d4a22bb4870b1b67c4030 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_88e92c207b0246c590d865a4b5d15c5f.setIcon(icon_d33e4d0b014d4a22bb4870b1b67c4030);


        var popup_fe8ff83a8a224bc19117f9f328357185 = L.popup({"maxWidth": "100%"});


            var html_c85bd060c94b450b9f32f20ef1d73525 = $(`<div id="html_c85bd060c94b450b9f32f20ef1d73525" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_fe8ff83a8a224bc19117f9f328357185.setContent(html_c85bd060c94b450b9f32f20ef1d73525);


        marker_88e92c207b0246c590d865a4b5d15c5f.bindPopup(popup_fe8ff83a8a224bc19117f9f328357185)
        ;




            var marker_c2a39236d10a4ae4ab52155812fd180f = L.marker(
                [-37.52892427, 143.8302762],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_91f07cbd37e34aee9d24773cd776b6a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c2a39236d10a4ae4ab52155812fd180f.setIcon(icon_91f07cbd37e34aee9d24773cd776b6a8);


        var popup_7cc54a4102d740b1b98b01c8e604e282 = L.popup({"maxWidth": "100%"});


            var html_e787058db2ca49f68121f918aca71c19 = $(`<div id="html_e787058db2ca49f68121f918aca71c19" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_7cc54a4102d740b1b98b01c8e604e282.setContent(html_e787058db2ca49f68121f918aca71c19);


        marker_c2a39236d10a4ae4ab52155812fd180f.bindPopup(popup_7cc54a4102d740b1b98b01c8e604e282)
        ;




            var marker_29cd3b2acbda4f07997ef4ca14065dcf = L.marker(
                [-37.49895706, 143.8035874],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_d7175db6f8864d8bab2e5f0a594383a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_29cd3b2acbda4f07997ef4ca14065dcf.setIcon(icon_d7175db6f8864d8bab2e5f0a594383a7);


        var popup_09e630d14c3d4df79b4afd963e037161 = L.popup({"maxWidth": "100%"});


            var html_a18843c5360a4dc29169285b0c33e275 = $(`<div id="html_a18843c5360a4dc29169285b0c33e275" style="width: 100.0%; height: 100.0%;">Miners Rest</div>`)[0];
            popup_09e630d14c3d4df79b4afd963e037161.setContent(html_a18843c5360a4dc29169285b0c33e275);


        marker_29cd3b2acbda4f07997ef4ca14065dcf.bindPopup(popup_09e630d14c3d4df79b4afd963e037161)
        ;




            var marker_e28d8625266c4b2289a8948b448f40b0 = L.marker(
                [-37.57936785, 143.8058994],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_afe555ca100c4ecf882ca93c27c32412 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e28d8625266c4b2289a8948b448f40b0.setIcon(icon_afe555ca100c4ecf882ca93c27c32412);


        var popup_3839bf52b7c34179a8747d4ae316b2de = L.popup({"maxWidth": "100%"});


            var html_4b4eae16fc8142938cd54d15374ef88f = $(`<div id="html_4b4eae16fc8142938cd54d15374ef88f" style="width: 100.0%; height: 100.0%;">Winter Valley</div>`)[0];
            popup_3839bf52b7c34179a8747d4ae316b2de.setContent(html_4b4eae16fc8142938cd54d15374ef88f);


        marker_e28d8625266c4b2289a8948b448f40b0.bindPopup(popup_3839bf52b7c34179a8747d4ae316b2de)
        ;




            var marker_eca86d152f6a4a8cbd46973b660a852d = L.marker(
                [-37.57148262, 143.8371104],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_29097c4b6f6f4f8fa55327d87d81f24c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_eca86d152f6a4a8cbd46973b660a852d.setIcon(icon_29097c4b6f6f4f8fa55327d87d81f24c);


        var popup_a420c80935e2430d962c7c0fd86246ab = L.popup({"maxWidth": "100%"});


            var html_cd7e8a460c304b368730ecb83ed86267 = $(`<div id="html_cd7e8a460c304b368730ecb83ed86267" style="width: 100.0%; height: 100.0%;">Redan</div>`)[0];
            popup_a420c80935e2430d962c7c0fd86246ab.setContent(html_cd7e8a460c304b368730ecb83ed86267);


        marker_eca86d152f6a4a8cbd46973b660a852d.bindPopup(popup_a420c80935e2430d962c7c0fd86246ab)
        ;




            var marker_9823d3b589474ce48dff664baf865e38 = L.marker(
                [-37.58345442, 143.8291758],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_2155e8276b7f4dbcb6bb09212ab5ff9b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9823d3b589474ce48dff664baf865e38.setIcon(icon_2155e8276b7f4dbcb6bb09212ab5ff9b);


        var popup_ac1c39d5948848dd9a8bb6755812d634 = L.popup({"maxWidth": "100%"});


            var html_1fabba641b39470cb341e9367d08e9bd = $(`<div id="html_1fabba641b39470cb341e9367d08e9bd" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_ac1c39d5948848dd9a8bb6755812d634.setContent(html_1fabba641b39470cb341e9367d08e9bd);


        marker_9823d3b589474ce48dff664baf865e38.bindPopup(popup_ac1c39d5948848dd9a8bb6755812d634)
        ;




            var marker_44aee3803dab41f2beb95825e1d91bb3 = L.marker(
                [-37.55765408, 143.81564509999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_0693f781ceef46b08eab9fc75f5fab47 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_44aee3803dab41f2beb95825e1d91bb3.setIcon(icon_0693f781ceef46b08eab9fc75f5fab47);


        var popup_e9ec59d5dfe744deaf167505fd3467dd = L.popup({"maxWidth": "100%"});


            var html_f06ba7c6eba549ab96dbc7c851b2951b = $(`<div id="html_f06ba7c6eba549ab96dbc7c851b2951b" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_e9ec59d5dfe744deaf167505fd3467dd.setContent(html_f06ba7c6eba549ab96dbc7c851b2951b);


        marker_44aee3803dab41f2beb95825e1d91bb3.bindPopup(popup_e9ec59d5dfe744deaf167505fd3467dd)
        ;




            var marker_34a409dd7eed4dee8333f8ef1b97146f = L.marker(
                [-37.59333345, 143.8261556],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_b93700ce64334b82882aa30ead1203a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_34a409dd7eed4dee8333f8ef1b97146f.setIcon(icon_b93700ce64334b82882aa30ead1203a4);


        var popup_9784e0fad7044f22840945574ac9eb18 = L.popup({"maxWidth": "100%"});


            var html_0443d49cb9144a8d823ec161cc71b145 = $(`<div id="html_0443d49cb9144a8d823ec161cc71b145" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_9784e0fad7044f22840945574ac9eb18.setContent(html_0443d49cb9144a8d823ec161cc71b145);


        marker_34a409dd7eed4dee8333f8ef1b97146f.bindPopup(popup_9784e0fad7044f22840945574ac9eb18)
        ;




            var marker_32c3b43cc16f49ccb51716e1cd3b3bae = L.marker(
                [-37.56156389, 143.8271647],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_510d5a91b55b4d5a888d07934fb5bc14 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_32c3b43cc16f49ccb51716e1cd3b3bae.setIcon(icon_510d5a91b55b4d5a888d07934fb5bc14);


        var popup_345d08fbf01645818eeaf193eac2db52 = L.popup({"maxWidth": "100%"});


            var html_2050cd2553054814b6b2585c81def059 = $(`<div id="html_2050cd2553054814b6b2585c81def059" style="width: 100.0%; height: 100.0%;">Newington</div>`)[0];
            popup_345d08fbf01645818eeaf193eac2db52.setContent(html_2050cd2553054814b6b2585c81def059);


        marker_32c3b43cc16f49ccb51716e1cd3b3bae.bindPopup(popup_345d08fbf01645818eeaf193eac2db52)
        ;




            var marker_b4dc7e809d3e419f81fe8f07c40d7771 = L.marker(
                [-37.558349, 143.82349399999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_13c16f81934d4fe3b7ea56162f6fe867 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b4dc7e809d3e419f81fe8f07c40d7771.setIcon(icon_13c16f81934d4fe3b7ea56162f6fe867);


        var popup_acada3ccd80240c285a7cceb567951ba = L.popup({"maxWidth": "100%"});


            var html_db14603da2e14dbebfc86ac8b98b920d = $(`<div id="html_db14603da2e14dbebfc86ac8b98b920d" style="width: 100.0%; height: 100.0%;">Newington</div>`)[0];
            popup_acada3ccd80240c285a7cceb567951ba.setContent(html_db14603da2e14dbebfc86ac8b98b920d);


        marker_b4dc7e809d3e419f81fe8f07c40d7771.bindPopup(popup_acada3ccd80240c285a7cceb567951ba)
        ;




            var marker_55f34f53ac73455a8b0e8186181fbca7 = L.marker(
                [-37.55809903, 143.822685],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_9206b37a110a44cc9d3f1b71e2628f68 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_55f34f53ac73455a8b0e8186181fbca7.setIcon(icon_9206b37a110a44cc9d3f1b71e2628f68);


        var popup_f90b9155316d4f829727f53e9c0c3a97 = L.popup({"maxWidth": "100%"});


            var html_1bb89a37b4e443c4aeabc367aa4c7550 = $(`<div id="html_1bb89a37b4e443c4aeabc367aa4c7550" style="width: 100.0%; height: 100.0%;">Newington</div>`)[0];
            popup_f90b9155316d4f829727f53e9c0c3a97.setContent(html_1bb89a37b4e443c4aeabc367aa4c7550);


        marker_55f34f53ac73455a8b0e8186181fbca7.bindPopup(popup_f90b9155316d4f829727f53e9c0c3a97)
        ;




            var marker_6adfea8fccaf497ca709f44583de299c = L.marker(
                [-37.59885425, 143.8337424],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_08d7a014ae0741e0aef34fe7f1afc8ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6adfea8fccaf497ca709f44583de299c.setIcon(icon_08d7a014ae0741e0aef34fe7f1afc8ba);


        var popup_57bcaba3106146d08b6220cc3157c440 = L.popup({"maxWidth": "100%"});


            var html_b1faa0f756604917abd3d40f305b32da = $(`<div id="html_b1faa0f756604917abd3d40f305b32da" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_57bcaba3106146d08b6220cc3157c440.setContent(html_b1faa0f756604917abd3d40f305b32da);


        marker_6adfea8fccaf497ca709f44583de299c.bindPopup(popup_57bcaba3106146d08b6220cc3157c440)
        ;




            var marker_a58e54de5d234d999df03b6c7cb79dd2 = L.marker(
                [-37.55292088, 143.8088645],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_a5fcdc8e8caa4741be7401ce5d290876 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a58e54de5d234d999df03b6c7cb79dd2.setIcon(icon_a5fcdc8e8caa4741be7401ce5d290876);


        var popup_2fd8a946d84a4f0aae175305db4407d1 = L.popup({"maxWidth": "100%"});


            var html_9622fd8df5aa42b69c6958948f11f17e = $(`<div id="html_9622fd8df5aa42b69c6958948f11f17e" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_2fd8a946d84a4f0aae175305db4407d1.setContent(html_9622fd8df5aa42b69c6958948f11f17e);


        marker_a58e54de5d234d999df03b6c7cb79dd2.bindPopup(popup_2fd8a946d84a4f0aae175305db4407d1)
        ;




            var marker_bbd89fa259fb4061925fefffb0034994 = L.marker(
                [-37.59295922, 143.8388033],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_dec3274b54314c9a9fc05fe65095fc15 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bbd89fa259fb4061925fefffb0034994.setIcon(icon_dec3274b54314c9a9fc05fe65095fc15);


        var popup_ee95254f986c447d979db548da4e7cf6 = L.popup({"maxWidth": "100%"});


            var html_a99c934b0b1f4d649d4e4ad6dfa27f2a = $(`<div id="html_a99c934b0b1f4d649d4e4ad6dfa27f2a" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_ee95254f986c447d979db548da4e7cf6.setContent(html_a99c934b0b1f4d649d4e4ad6dfa27f2a);


        marker_bbd89fa259fb4061925fefffb0034994.bindPopup(popup_ee95254f986c447d979db548da4e7cf6)
        ;




            var marker_3b96afdd42a744bba5ceb781a1f941bc = L.marker(
                [-37.59298284, 143.838256],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_65ed7040921243baa8346201fda55b29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3b96afdd42a744bba5ceb781a1f941bc.setIcon(icon_65ed7040921243baa8346201fda55b29);


        var popup_e3c797e5339b416d90c7d190932ed496 = L.popup({"maxWidth": "100%"});


            var html_7a56cf587db540da8583c77f648b2763 = $(`<div id="html_7a56cf587db540da8583c77f648b2763" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_e3c797e5339b416d90c7d190932ed496.setContent(html_7a56cf587db540da8583c77f648b2763);


        marker_3b96afdd42a744bba5ceb781a1f941bc.bindPopup(popup_e3c797e5339b416d90c7d190932ed496)
        ;




            var marker_914b6f72e85d4a2993051f7cbb4ca2ff = L.marker(
                [-37.59313413, 143.8388067],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e3fe5b6f917547dc874c90d7893ae663 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_914b6f72e85d4a2993051f7cbb4ca2ff.setIcon(icon_e3fe5b6f917547dc874c90d7893ae663);


        var popup_77f241e8af564bd1b520116501df4c4c = L.popup({"maxWidth": "100%"});


            var html_d3a96460b2e244d4aa07b60ca0284b3c = $(`<div id="html_d3a96460b2e244d4aa07b60ca0284b3c" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_77f241e8af564bd1b520116501df4c4c.setContent(html_d3a96460b2e244d4aa07b60ca0284b3c);


        marker_914b6f72e85d4a2993051f7cbb4ca2ff.bindPopup(popup_77f241e8af564bd1b520116501df4c4c)
        ;




            var marker_f3191931c856467d8ee0be038ecd2831 = L.marker(
                [-37.59291141, 143.8384048],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_7af3918130914a9bbc6dd8219f0efcac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f3191931c856467d8ee0be038ecd2831.setIcon(icon_7af3918130914a9bbc6dd8219f0efcac);


        var popup_f4008b30eb90455cb91da5a631319516 = L.popup({"maxWidth": "100%"});


            var html_e7a885d620ea4ef6b52d1b7fa0eab323 = $(`<div id="html_e7a885d620ea4ef6b52d1b7fa0eab323" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_f4008b30eb90455cb91da5a631319516.setContent(html_e7a885d620ea4ef6b52d1b7fa0eab323);


        marker_f3191931c856467d8ee0be038ecd2831.bindPopup(popup_f4008b30eb90455cb91da5a631319516)
        ;




            var marker_8de28d16408f43cc914e23bdb3b9dfe7 = L.marker(
                [-37.61085085, 143.8375056],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_465dcd7402754e5e9d0fdd48683d2514 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8de28d16408f43cc914e23bdb3b9dfe7.setIcon(icon_465dcd7402754e5e9d0fdd48683d2514);


        var popup_083bfadd829a4f369dd70a3a34a47914 = L.popup({"maxWidth": "100%"});


            var html_a6bb0efc41b9497f84019ca7b18be5fd = $(`<div id="html_a6bb0efc41b9497f84019ca7b18be5fd" style="width: 100.0%; height: 100.0%;">Sebastopol</div>`)[0];
            popup_083bfadd829a4f369dd70a3a34a47914.setContent(html_a6bb0efc41b9497f84019ca7b18be5fd);


        marker_8de28d16408f43cc914e23bdb3b9dfe7.bindPopup(popup_083bfadd829a4f369dd70a3a34a47914)
        ;




            var marker_45bd9039480c409ebe2be615e959998e = L.marker(
                [-37.55195912, 143.8644584],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_91621e6622eb41af8a0032c050121535 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_45bd9039480c409ebe2be615e959998e.setIcon(icon_91621e6622eb41af8a0032c050121535);


        var popup_fb21809881c940a0bde2e446b8b54c09 = L.popup({"maxWidth": "100%"});


            var html_f583b6c029114a88903b723c5f964128 = $(`<div id="html_f583b6c029114a88903b723c5f964128" style="width: 100.0%; height: 100.0%;">Black Hill</div>`)[0];
            popup_fb21809881c940a0bde2e446b8b54c09.setContent(html_f583b6c029114a88903b723c5f964128);


        marker_45bd9039480c409ebe2be615e959998e.bindPopup(popup_fb21809881c940a0bde2e446b8b54c09)
        ;




            var marker_df205facccc74d769d4f1d9d7031c51c = L.marker(
                [-37.51978147, 143.8073362],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_8ff82be49b7642d2a4ee435fb3e4488c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_df205facccc74d769d4f1d9d7031c51c.setIcon(icon_8ff82be49b7642d2a4ee435fb3e4488c);


        var popup_283143c256dd482ca37102e63b077967 = L.popup({"maxWidth": "100%"});


            var html_d731d5c3122f4795aefdd20c1fe59158 = $(`<div id="html_d731d5c3122f4795aefdd20c1fe59158" style="width: 100.0%; height: 100.0%;">Mitchell Park</div>`)[0];
            popup_283143c256dd482ca37102e63b077967.setContent(html_d731d5c3122f4795aefdd20c1fe59158);


        marker_df205facccc74d769d4f1d9d7031c51c.bindPopup(popup_283143c256dd482ca37102e63b077967)
        ;




            var marker_29717bd1b2784b879917fd6f89ef0584 = L.marker(
                [-37.52910783, 143.8416138],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_93a4aa9aa15141ecb4dbe9af7dfb73ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_29717bd1b2784b879917fd6f89ef0584.setIcon(icon_93a4aa9aa15141ecb4dbe9af7dfb73ed);


        var popup_1dc8f1b607c04b26abb6d6e6eb72535e = L.popup({"maxWidth": "100%"});


            var html_10a15a5159ec47a7bd38783ef4e86ea9 = $(`<div id="html_10a15a5159ec47a7bd38783ef4e86ea9" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_1dc8f1b607c04b26abb6d6e6eb72535e.setContent(html_10a15a5159ec47a7bd38783ef4e86ea9);


        marker_29717bd1b2784b879917fd6f89ef0584.bindPopup(popup_1dc8f1b607c04b26abb6d6e6eb72535e)
        ;




            var marker_b57da152432c4c86ad78a1f29ad3f92e = L.marker(
                [-37.55068677, 143.8022813],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e460dccd72884d8c9b7c62015c104af1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b57da152432c4c86ad78a1f29ad3f92e.setIcon(icon_e460dccd72884d8c9b7c62015c104af1);


        var popup_0bc8b66dbc7e45cc9a6cb864d9521f52 = L.popup({"maxWidth": "100%"});


            var html_e1e1cb24583a4736a0546018796d73f6 = $(`<div id="html_e1e1cb24583a4736a0546018796d73f6" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_0bc8b66dbc7e45cc9a6cb864d9521f52.setContent(html_e1e1cb24583a4736a0546018796d73f6);


        marker_b57da152432c4c86ad78a1f29ad3f92e.bindPopup(popup_0bc8b66dbc7e45cc9a6cb864d9521f52)
        ;




            var marker_aef3a9407f5247188928d915a82d18e0 = L.marker(
                [-37.55647929999999, 143.87088310000001],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_844ac65b16484d7984b6fcce6d87a326 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_aef3a9407f5247188928d915a82d18e0.setIcon(icon_844ac65b16484d7984b6fcce6d87a326);


        var popup_8ef99d46a15045f2893e31830fcd811f = L.popup({"maxWidth": "100%"});


            var html_4d53b0335db64af9b76f09a51201de7d = $(`<div id="html_4d53b0335db64af9b76f09a51201de7d" style="width: 100.0%; height: 100.0%;">Ballarat East</div>`)[0];
            popup_8ef99d46a15045f2893e31830fcd811f.setContent(html_4d53b0335db64af9b76f09a51201de7d);


        marker_aef3a9407f5247188928d915a82d18e0.bindPopup(popup_8ef99d46a15045f2893e31830fcd811f)
        ;




            var marker_9711d05cf04246d699c92b0b725451c5 = L.marker(
                [-37.53136888, 143.8228092],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4a31cf2d80f14ac0ba0100d0c4029ecd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9711d05cf04246d699c92b0b725451c5.setIcon(icon_4a31cf2d80f14ac0ba0100d0c4029ecd);


        var popup_9c130cea1d014bbc8aeb5b2b0f89fb69 = L.popup({"maxWidth": "100%"});


            var html_d648c8a6af8b4b0c9247ff039f757b92 = $(`<div id="html_d648c8a6af8b4b0c9247ff039f757b92" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_9c130cea1d014bbc8aeb5b2b0f89fb69.setContent(html_d648c8a6af8b4b0c9247ff039f757b92);


        marker_9711d05cf04246d699c92b0b725451c5.bindPopup(popup_9c130cea1d014bbc8aeb5b2b0f89fb69)
        ;




            var marker_48b4c84331484285ba7cc2b216b8ac66 = L.marker(
                [-37.52563889, 143.81954299999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_f2985eb53d994ef2b6e68dd214439e32 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_48b4c84331484285ba7cc2b216b8ac66.setIcon(icon_f2985eb53d994ef2b6e68dd214439e32);


        var popup_609ed66a15f54acabdacbe13b8357ada = L.popup({"maxWidth": "100%"});


            var html_ef303f52bb404df6935f101a3358ee62 = $(`<div id="html_ef303f52bb404df6935f101a3358ee62" style="width: 100.0%; height: 100.0%;">Wendouree</div>`)[0];
            popup_609ed66a15f54acabdacbe13b8357ada.setContent(html_ef303f52bb404df6935f101a3358ee62);


        marker_48b4c84331484285ba7cc2b216b8ac66.bindPopup(popup_609ed66a15f54acabdacbe13b8357ada)
        ;




            var marker_9273c83818c64df893efeb25e6e04366 = L.marker(
                [-37.56591729, 143.838382],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_2502323fe6254b7cbe9d81c48ae04432 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9273c83818c64df893efeb25e6e04366.setIcon(icon_2502323fe6254b7cbe9d81c48ae04432);


        var popup_6398441497df4c10b16cc2e913397df7 = L.popup({"maxWidth": "100%"});


            var html_19c721fbddc24ebfb52635da9c2162dd = $(`<div id="html_19c721fbddc24ebfb52635da9c2162dd" style="width: 100.0%; height: 100.0%;">Ballarat Central</div>`)[0];
            popup_6398441497df4c10b16cc2e913397df7.setContent(html_19c721fbddc24ebfb52635da9c2162dd);


        marker_9273c83818c64df893efeb25e6e04366.bindPopup(popup_6398441497df4c10b16cc2e913397df7)
        ;




            var marker_85844ae8bc714dfda4d85b8c88eb413b = L.marker(
                [-37.58735159, 143.817426],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4f9f322734314c9f8e6ad83a39aa2709 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_85844ae8bc714dfda4d85b8c88eb413b.setIcon(icon_4f9f322734314c9f8e6ad83a39aa2709);


        var popup_8a9ca170e2114095abb228ae5e99cf52 = L.popup({"maxWidth": "100%"});


            var html_4bc506b4112d45d7935d96e024b62638 = $(`<div id="html_4bc506b4112d45d7935d96e024b62638" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_8a9ca170e2114095abb228ae5e99cf52.setContent(html_4bc506b4112d45d7935d96e024b62638);


        marker_85844ae8bc714dfda4d85b8c88eb413b.bindPopup(popup_8a9ca170e2114095abb228ae5e99cf52)
        ;




            var marker_0e51da460ead4f3e85e56d13f8fdb16e = L.marker(
                [-37.62425006, 143.8750111],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_68b43213e57e430eabf93375cc6e5c3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0e51da460ead4f3e85e56d13f8fdb16e.setIcon(icon_68b43213e57e430eabf93375cc6e5c3b);


        var popup_26eee629685f4cc2962b8468b13968af = L.popup({"maxWidth": "100%"});


            var html_bb15daeb214149d09f570790c2f73db2 = $(`<div id="html_bb15daeb214149d09f570790c2f73db2" style="width: 100.0%; height: 100.0%;">Mount Helen</div>`)[0];
            popup_26eee629685f4cc2962b8468b13968af.setContent(html_bb15daeb214149d09f570790c2f73db2);


        marker_0e51da460ead4f3e85e56d13f8fdb16e.bindPopup(popup_26eee629685f4cc2962b8468b13968af)
        ;




            var marker_9fbb1f86bace45a295d57dec2c4c13e9 = L.marker(
                [-37.54179715, 143.8836348],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_09a5947f45174adc82d83af3b79e1281 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9fbb1f86bace45a295d57dec2c4c13e9.setIcon(icon_09a5947f45174adc82d83af3b79e1281);


        var popup_0eda8cf6b2114d529ba7a39f7df5272d = L.popup({"maxWidth": "100%"});


            var html_776d23ecc41144b9b35c1e71b95407c3 = $(`<div id="html_776d23ecc41144b9b35c1e71b95407c3" style="width: 100.0%; height: 100.0%;">Nerrina</div>`)[0];
            popup_0eda8cf6b2114d529ba7a39f7df5272d.setContent(html_776d23ecc41144b9b35c1e71b95407c3);


        marker_9fbb1f86bace45a295d57dec2c4c13e9.bindPopup(popup_0eda8cf6b2114d529ba7a39f7df5272d)
        ;




            var marker_a3040e1cede242faa9fb42e1419c6f7f = L.marker(
                [-37.54677157, 143.9166397],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_e469ef7bc33d4bed8ed61249f452f54a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a3040e1cede242faa9fb42e1419c6f7f.setIcon(icon_e469ef7bc33d4bed8ed61249f452f54a);


        var popup_3c3f4883ae98478180be3c1adcf32333 = L.popup({"maxWidth": "100%"});


            var html_bbfbe95b64dd4575830fd89237afcea2 = $(`<div id="html_bbfbe95b64dd4575830fd89237afcea2" style="width: 100.0%; height: 100.0%;">Brown Hill</div>`)[0];
            popup_3c3f4883ae98478180be3c1adcf32333.setContent(html_bbfbe95b64dd4575830fd89237afcea2);


        marker_a3040e1cede242faa9fb42e1419c6f7f.bindPopup(popup_3c3f4883ae98478180be3c1adcf32333)
        ;




            var marker_563d73cccf57426c994737d797ec9db2 = L.marker(
                [-37.57941904, 143.798408],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_8a5a9178ce92495aa39df3b813d6a5f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_563d73cccf57426c994737d797ec9db2.setIcon(icon_8a5a9178ce92495aa39df3b813d6a5f2);


        var popup_96e5eeab3aac4b248026d4adcdd181a3 = L.popup({"maxWidth": "100%"});


            var html_9b5441bcf72046d8b748174fb8fbc85b = $(`<div id="html_9b5441bcf72046d8b748174fb8fbc85b" style="width: 100.0%; height: 100.0%;">Winter Valley</div>`)[0];
            popup_96e5eeab3aac4b248026d4adcdd181a3.setContent(html_9b5441bcf72046d8b748174fb8fbc85b);


        marker_563d73cccf57426c994737d797ec9db2.bindPopup(popup_96e5eeab3aac4b248026d4adcdd181a3)
        ;




            var marker_53d02a95e67b43e288bf7aadd118c9bd = L.marker(
                [-37.556695, 143.79242299999999],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_925a5127c3c54534a7e173c0329e1ca8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_53d02a95e67b43e288bf7aadd118c9bd.setIcon(icon_925a5127c3c54534a7e173c0329e1ca8);


        var popup_0137c180e52440a49a8b4806285075e0 = L.popup({"maxWidth": "100%"});


            var html_a63cbdeeecb54bdf82b5b0f3a1fff928 = $(`<div id="html_a63cbdeeecb54bdf82b5b0f3a1fff928" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_0137c180e52440a49a8b4806285075e0.setContent(html_a63cbdeeecb54bdf82b5b0f3a1fff928);


        marker_53d02a95e67b43e288bf7aadd118c9bd.bindPopup(popup_0137c180e52440a49a8b4806285075e0)
        ;




            var marker_e67fcc4acdb54f88bd32a1643318bd5a = L.marker(
                [-37.546657, 143.9165829],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_4de46daa27a645d688056f5138e5690e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e67fcc4acdb54f88bd32a1643318bd5a.setIcon(icon_4de46daa27a645d688056f5138e5690e);


        var popup_c5930b7bcba3427c9a2b60a2badd4896 = L.popup({"maxWidth": "100%"});


            var html_67d21be9a7724b2a810f8925073d24e2 = $(`<div id="html_67d21be9a7724b2a810f8925073d24e2" style="width: 100.0%; height: 100.0%;">Brown Hill</div>`)[0];
            popup_c5930b7bcba3427c9a2b60a2badd4896.setContent(html_67d21be9a7724b2a810f8925073d24e2);


        marker_e67fcc4acdb54f88bd32a1643318bd5a.bindPopup(popup_c5930b7bcba3427c9a2b60a2badd4896)
        ;




            var marker_6387e511c7734980aa3ed1a249dfe731 = L.marker(
                [-37.56244356, 143.862324],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_11bc68ef88904b1bbc3e5247a72bd5a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6387e511c7734980aa3ed1a249dfe731.setIcon(icon_11bc68ef88904b1bbc3e5247a72bd5a2);


        var popup_7c80f2d8c0c7448dbe7584cb41c0add0 = L.popup({"maxWidth": "100%"});


            var html_b4e401ed3df54f45876d0d8a91b99655 = $(`<div id="html_b4e401ed3df54f45876d0d8a91b99655" style="width: 100.0%; height: 100.0%;">Ballarat Central</div>`)[0];
            popup_7c80f2d8c0c7448dbe7584cb41c0add0.setContent(html_b4e401ed3df54f45876d0d8a91b99655);


        marker_6387e511c7734980aa3ed1a249dfe731.bindPopup(popup_7c80f2d8c0c7448dbe7584cb41c0add0)
        ;




            var marker_35842c2a3ee54ac4bb0823cadb07f9e5 = L.marker(
                [-37.592338, 143.812376],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_ad81a7e4d3ab4182a1f1f3bc39e54c0f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_35842c2a3ee54ac4bb0823cadb07f9e5.setIcon(icon_ad81a7e4d3ab4182a1f1f3bc39e54c0f);


        var popup_7ce9825d104c4c0f831baf102587600d = L.popup({"maxWidth": "100%"});


            var html_10d1d6886d5640abb74581415f2744eb = $(`<div id="html_10d1d6886d5640abb74581415f2744eb" style="width: 100.0%; height: 100.0%;">Delacombe</div>`)[0];
            popup_7ce9825d104c4c0f831baf102587600d.setContent(html_10d1d6886d5640abb74581415f2744eb);


        marker_35842c2a3ee54ac4bb0823cadb07f9e5.bindPopup(popup_7ce9825d104c4c0f831baf102587600d)
        ;




            var marker_b21fef092b7748ad8a5e039236f04185 = L.marker(
                [-37.548656, 143.809496],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_5a1b85dea70649e49820fffb1e1ac183 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b21fef092b7748ad8a5e039236f04185.setIcon(icon_5a1b85dea70649e49820fffb1e1ac183);


        var popup_0d6f4ceee6bd4760ae4d86684d921e5c = L.popup({"maxWidth": "100%"});


            var html_e6ccdaca8d5e4ee2a14d2ae5e89e178a = $(`<div id="html_e6ccdaca8d5e4ee2a14d2ae5e89e178a" style="width: 100.0%; height: 100.0%;">Alfredton</div>`)[0];
            popup_0d6f4ceee6bd4760ae4d86684d921e5c.setContent(html_e6ccdaca8d5e4ee2a14d2ae5e89e178a);


        marker_b21fef092b7748ad8a5e039236f04185.bindPopup(popup_0d6f4ceee6bd4760ae4d86684d921e5c)
        ;




            var marker_9d31e132ca4d40b39d0d8a1ec7213dc1 = L.marker(
                [-37.56557712, 143.86282849999998],
                {}
            ).addTo(feature_group_26b2e0d157ad46869ba4c0a86468f87a);


            var icon_84378ee986ef4d20a82fa710ecc8b947 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9d31e132ca4d40b39d0d8a1ec7213dc1.setIcon(icon_84378ee986ef4d20a82fa710ecc8b947);


        var popup_7823d68fa72d40dbbb99c6e4b05feae1 = L.popup({"maxWidth": "100%"});


            var html_de2a60cf35dc4656a6cb1fabec4fcc0b = $(`<div id="html_de2a60cf35dc4656a6cb1fabec4fcc0b" style="width: 100.0%; height: 100.0%;">Magpie</div>`)[0];
            popup_7823d68fa72d40dbbb99c6e4b05feae1.setContent(html_de2a60cf35dc4656a6cb1fabec4fcc0b);


        marker_9d31e132ca4d40b39d0d8a1ec7213dc1.bindPopup(popup_7823d68fa72d40dbbb99c6e4b05feae1)
        ;




            var feature_group_26b2e0d157ad46869ba4c0a86468f87asearchControl = new L.Control.Search({
                layer: feature_group_26b2e0d157ad46869ba4c0a86468f87a,

                collapsed: false,
                textPlaceholder: 'Search',
                position:'topleft',

                initial: false,

                hideMarkerOnCollapse: true

                });
                feature_group_26b2e0d157ad46869ba4c0a86468f87asearchControl.on('search:locationfound', function(e) {
                    feature_group_26b2e0d157ad46869ba4c0a86468f87a.setStyle(function(feature){
                        return feature.properties.style
                    })

                    if(e.layer._popup)
                        e.layer.openPopup();
                })
                feature_group_26b2e0d157ad46869ba4c0a86468f87asearchControl.on('search:collapsed', function(e) {
                        feature_group_26b2e0d157ad46869ba4c0a86468f87a.setStyle(function(feature){
                            return feature.properties.style
                    });
                });
            map_0dc0591f7da5419ca2f8bbbd04337ef9.addControl( feature_group_26b2e0d157ad46869ba4c0a86468f87asearchControl );


</script>
