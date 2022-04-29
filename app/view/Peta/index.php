
<!DOCTYPE html>

<html>

<head>
    <title>Sistem Monitoring Sensor Gempa Bumi BMKG Mataram</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
        
        #map {
            height: 90vh;
            width: 100%;
        }
        
        header {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 500;
            background: #fffb;
            padding: 10px 20px;
        }
        
        header h1 {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>

    </table>

    <div id="map"></div>
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script type="text/javascript">
    let map = L.map('map').setView([-8.579782480849136, 116.09596880340064], 9);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> '
    }).addTo(map);

    
    var greenIcon = L.icon({
    iconUrl: 'img/Square_8.png',
    iconSize:     [30, 50], // size of the icon
});
    L.marker([-7.0412, 113.916], {icon: greenIcon}).bindPopup("<b>Detail</b><a href='https://geof.bmkg.go.id/slmon/IA_KMMI.html'</a>KMMI, <a href='https://t.me/rohulim17'</a>Telegram"). addTo(map);
    L.marker([-8.2732, 113.444], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_GMJI.html'</a>GMJI"). addTo(map);
    L.marker([-8.4703, 114.152], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_JAGI.html'</a>JAGI"). addTo(map);
    L.marker([-8.2140, 114.356], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_BYJI.html'</a>BYJI"). addTo(map);
    L.marker([-8.4597, 114.942], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_RTBI.html'</a>RTBI"). addTo(map);
    L.marker([-8.0848, 115.213], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_SRBI.html'</a>SRBI"). addTo(map);
    L.marker([-8.8180, 115.146], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_IGBI.html'</a>IGBI"). addTo(map);
    L.marker([-8.67740, 115.210], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_DNP.html'</a>DNP"). addTo(map);
    L.marker([-8.36404, 115.610], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_KHK.html'</a>KHK"). addTo(map);
    L.marker([-8.7413, 115.546], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_KMMI.html'</a>NKBI"). addTo(map);
    L.marker([-8.79622,115.934],{icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_KMMI.html'</a>SLBFM"). addTo(map);
    L.marker([-8.62063,116.089], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_KMMI.html'</a>KMNI"). addTo(map);
    L.marker([-8.42188,116.095], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_KMMI.html'</a>KLNI"). addTo(map);
    L.marker([-8.82180, 116.278], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_KMMI.html'</a>PBCI"). addTo(map);
    L.marker([-8.76705, 116.485], {icon: greenIcon}).bindPopup("<b></b><a href='https://geof.bmkg.go.id/slmon/IA_KMMI.html'</a>LTNI"). addTo(map);
    L.marker([-8.51818, 116.541], {icon: greenIcon}).bindPopup("WLFTM"). addTo(map);
    L.marker([-8.22730, 116.420], {icon: greenIcon}).bindPopup("BYLI"). addTo(map);
    L.marker([-8.87166, 116.816], {icon: greenIcon}).bindPopup("JSBFM"). addTo(map);
    L.marker([-8.73810, 116.882], {icon: greenIcon}).bindPopup("TWSI"). addTo(map);
    L.marker([-8.41198, 117.141], {icon: greenIcon}).bindPopup("USFM"). addTo(map);
    L.marker([-8.96664, 117.218], {icon: greenIcon}).bindPopup("LSNI"). addTo(map);
    L.marker([-8.88594, 117.483], {icon: greenIcon}).bindPopup("RSNI"). addTo(map);
    L.marker([-8.82745, 117.776], {icon: greenIcon}).bindPopup("PLAI"). addTo(map);
    L.marker([-8.78753, 117.966], {icon: greenIcon}).bindPopup("ESNI"). addTo(map);
    L.marker([-8.71511, 118.250], {icon: greenIcon}).bindPopup("TSNI"). addTo(map);
    L.marker([-8.50188, 118.312], {icon: greenIcon}).bindPopup("DBNI"). addTo(map);
    
    L.marker([-8.10370, 117.873], {icon: greenIcon}).bindPopup("PDLI"). addTo(map);
    L.marker([-8.42188, 118.595], {icon: greenIcon}).bindPopup("KLNI"). addTo(map);
    L.marker([-8.42188, 118.569], {icon: greenIcon}).bindPopup("KLNI"). addTo(map);
    L.marker([-8.42188, 118.914], {icon: greenIcon}).bindPopup("KLNI"). addTo(map);
    L.marker([-8.42188, 119.095], {icon: greenIcon}).bindPopup("KLNI"). addTo(map);
    L.marker([-8.42188, 116.095], {icon: greenIcon}).bindPopup("KLNI"). addTo(map);

    
</script>

<div class="content">
    <div class="center">
	<div class="col-md-4">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h4 class="box-title"><b>Telegram Message <i class="fa fa-send"></i></b></h4>
                  </div>

            <div class="box-body">
        	<form method="post" action="sendMessage.php">
                  <div class="form-group row">
                            <label class="col-md-4 col-form-label">Telegram ID</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="telegram_id" placeholder="Telegram ID">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-md-4 col-form-label">Messages</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="message_text" placeholder="Custom Text Message">
                            </div>
                            </div>
                  <button type="submit" class="btn btn-primary pull-right">Send <i class="fa fa-send"></i></button>
            </form>
        </div>
    </div>
</div>
</div>
</tr>
</table>
</html>