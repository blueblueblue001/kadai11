<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sample.css">
    <title>Planet Earth & Divers</title>
    <style>
      #map {
        height: 400px;
        width: 100%;
      }
    </style>
  </head>
  <body>

  <header>
    <nav class="navigation">
    <div class="earth">
        <a class ="Link" href="index.php"></a>
      </div>
      <div class="h1-wapper">
        <h1>PLANET EARTH & DIVERS</h1>
      </div>
			<ul class="nav-list">
        <li class="nav-item"><a class="a" href="index.php">About</a></li>
			   <li class="nav-item"><a class="a" href="divelog.php">Dive Log</a></li>
			   <li class="nav-item"><a class="a" href="#">Project</a></li>
         <li class="nav-item"><a class="a" href="menu.php">Menu</a></li>
			</ul>
		 </nav>
	</div>
</header>

<main>
    <h2 id="divelog"> Dive Log</h2>
    <div class="map__wrapper">
      <div id="map" class="map"></div>

    <div>

      <form id="logForm" method="POST" action="insert.php" enctype="multipart/form-data">
          <input type="number" id="divingNumber" name="divingNumber" class="feedback-input" placeholder="Dive No." />
          <input type="date" id="date" name="date" class="feedback-input" placeholder="Date" />
          <input type="text" id="location" name="location" class="feedback-input" placeholder="Location" />
          <input type="text" id="diveSite" name="diveSite" class="feedback-input" placeholder="Dive Site" />
          <select id="rating" name="rating" class="feedback-input" placeholder="Rating" />
            <option value="⭐️">⭐️</option>
            <option value="⭐️⭐️">⭐️⭐️</option>
            <option value="⭐️⭐️⭐️">⭐️⭐️⭐️</option>
            <option value="⭐️⭐️⭐️⭐️">⭐️⭐️⭐️⭐️</option>
            <option value="⭐️⭐️⭐️⭐️⭐️">⭐️⭐️⭐️⭐️⭐️</option> 
          </select><br> 
          <textarea id="comment" name="comment" class="feedback-input" placeholder="Comment" /></textarea><br> 
          <input type="file" name="photo" id="photo" accept="image/*" required class="feedback-input" placeholder="Photo" />
          <input type="hidden" name="latitude" id="latitude" />
          <input type="hidden" name="longitude" id="longitude" />
        
          <div class="btn__wrapper">
            <input type="submit" value="Add a Log">
          </div>
      </form>
    </div>

    <script>

      // // Google Mapsの初期化
      // function initMap() {
      //   const map = new google.maps.Map(document.getElementById("map"), {
      //     center: { lat: 0, lng: 0 },
      //     zoom: 2,
      //   });
      
      //   // マップをクリックしたときのイベントリスナーを追加
      //   map.addListener("click", (event) => {
      //     // クリックした位置の緯度経度を取得
      //     const latitude = event.latLng.lat();
      //     const longitude = event.latLng.lng();
      
      //     // 緯度経度を隠しフィールドに設定
      //     document.getElementById("latitude").value = latitude;
      //     document.getElementById("longitude").value = longitude;
      //     console.log(latitude, longitude);


      //   });
      // }


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEa1T_F6ngy7gP9_nrXXTSZmVfqsYon3M&callback=initMap&language=en" async defer></script>
    <script src="js/script.js"></script>
  </body>
  <div class="footer__wrapper">
    <footer class="footer">©︎Chika Iwanaga</footer>
  </div>
</html>
