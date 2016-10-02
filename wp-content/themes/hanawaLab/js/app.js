// /*  Google Maps API
//  ************************* */
// function initialize() {
//     var LatLng = new google.maps.LatLng(35.1815549, 136.9456537);
//     var MY_MAPTYPE_ID = '名古屋市立大学 北千種キャンパス';
//     var mapOptions = {
//         zoom: 15,
//         center: LatLng,
//         scrollwheel: false, // スクロールの制限
//         mapTypeId: MY_MAPTYPE_ID
//     };
//     var styledMapOptions = {
//         name: '名古屋市立大学 北千種キャンパス'
//     };
//     var featureOptions = [{
//         'stylers': [{
//             'hue': '#EFF2F5'
//         }],
//         'elementType': 'all',
//         'featureType': 'all'
//     }];
//     var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

//     var image = {
//         url: 'http://taku-ten.com/images/access/gm_icon.png',
//         scaledSize: new google.maps.Size(56, 64)
//     }
//     var marker = new google.maps.Marker({
//         icon: image,
//         position: LatLng,
//         map: map
//     });
//     var customMapType = new google.maps.StyledMapType(featureOptions, styledMapOptions);
//     map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
// }
// initialize();
