// Google Mapsの初期化
// function initMap() {
//     const map = new google.maps.Map(document.getElementById("map"), {
//       center: { lat: 0, lng: 0 },
//       zoom: 2,
//     });

    function initMap() {
            const center = { lat: -20.501636505127, lng: 445.87890625 };
        const map = new google.maps.Map(document.getElementById("map"), {
        center: center,
        zoom: 2,
        });


  
    // マーカーを表示するための配列
    const markers = [];
  
    // ダイブログの要素を取得
    const diveLogs = document.querySelectorAll(".dive-log");
  
    // ダイブログごとに処理
    diveLogs.forEach((diveLog) => {
// ダイブログの位置情報を取得
        const latitude = parseFloat(diveLog.dataset.lat);
        const longitude = parseFloat(diveLog.dataset.lng);

        console.log(latitude, longitude);
  
      // マーカーを作成
      const marker = new google.maps.Marker({
        position: { lat: latitude, lng: longitude },
        map: map,
      });
  
      // マーカーを配列に追加
      markers.push(marker);
  
      // マーカーをクリックしたときのイベントリスナーを追加
      marker.addListener("click", () => {
        // ダイブログの表示・非表示を切り替え
        diveLog.classList.toggle("show");
      });
    });
  
    // マップの範囲を調整
    if (markers.length > 0) {
      const bounds = new google.maps.LatLngBounds();
      markers.forEach((marker) => {
        bounds.extend(marker.getPosition());
      });
      map.fitBounds(bounds);
    }
  }
  