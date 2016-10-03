/*  Google Maps API
 ************************* */
var canvas = document.getElementById( 'map-canvas' ) ;
var latlng = new google.maps.LatLng(  35.681382 ,  139.766084 ); //適当に東京駅の緯度経度にしました
var mapOptions = {
    zoom: 14,// ズーム値
    center: latlng, // 中心座標 [latlng]
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false
};
var map = new google.maps.Map( canvas , mapOptions ) ;
