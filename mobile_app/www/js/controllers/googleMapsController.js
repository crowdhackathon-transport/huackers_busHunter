// TODO: Insert an text field to take user's address if position not found (function error(err))
// TODO: Calculate visible distance based on http://www.widecodes.com/0zSgUXgkqj/calculate-visible-distance-with-zoom-in-google-maps-api.html

app.controller('GoogleMapsCtrl', function($scope, $window, Stops, Routes) {

    console.log( 'Google Maps Ctrl init')

    // This is for device usage
    //document.addEventListener("deviceready", init, false);

    var map;
    // tha same infowindow in order to have only one opened
    var infowindow = new google.maps.InfoWindow();
    // try to get position
    var options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };
    var mapOptions = {
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    function  markerMoved(lat,lon){

        console.log(lat+"-"+lon);
    }


    // this function insert markers to map with appropriate info Window
    function addMarkerToMap(lat, long, htmlMarkupForInfoWindow, stop_id, markerCount){

        var myLatLng = new google.maps.LatLng(lat, long);
        // Market With Label puts label next to marker
        var marker = new MarkerWithLabel({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
            labelContent:htmlMarkupForInfoWindow,
            icon:'img/bus-stop_2.png'
        });
        var windowinfo="";
        var windowinfo="";
        var div_style="";

        // get All bus Lines for a specific station
        Stops.getLinesFromStop({stop:stop_id})
             .then(function (response) {

                for (var i =0; i < response.lines.length;i++) {

                    if (window.localStorage['lang'] == 'en')
                        var name = response.lines[i].line_name_en;
                    else
                        var name = response.lines[i].line_name_el;

                    //reverse the name of bus line
                    if (response.lines[i].direction_flag == 2)
                    {
                       name =  Routes.reverseLineName(name);
                    }

                    //define color if line is tracked
                    if(response.lines[i].tracked)
                        div_style = "green";
                    else
                        div_style = "red";

                    // insert into window info all the lines
                    windowinfo +='<a href="#/app/route/'+response.lines[i].line_id+'/'+response.lines[i].direction_flag+'" style="color:'+div_style+' ">'+name+'</a> </div> <br>';
                }

            }, function (error) {
                debugger;
             });


        //Creates the event listener for clicking the marker
        //and places the marker on the map
        google.maps.event.addListener(marker, 'click', (function(marker, markerCount) {
            return function() {
                infowindow.setContent(windowinfo);
                infowindow.open(map, marker);
            }
        })(marker, markerCount));

        //Pans map to the new location of the marker
        //map.panTo(myLatLng)
        marker.setMap(map);
    }

    // get near stops
    function getNearStops(lat, lon) {

        Stops.getNearStops({lat:lat,lon:lon})
            .then(function (response)
            {
                // create a marker for each near stop
                for (var i =0; i < response.stops.length;i++)
                {
                    // if lang is eng
                    if (window.localStorage['lang'] == 'en')
                        var name = response.stops[i].name_en;
                    else
                        var name = response.stops[i].name_el;
                    // call function for marker add
                    addMarkerToMap(response.stops[i].lat, response.stops[i].lon, name,response.stops[i].s_id);
                }

            }, function (error) {
                console.log('error in get routes')
            });
    }

    function initializeMap(lat, lon) {

        // initialize map
        console.log('initializeMap', lat, lon);

        var myLatlng = new google.maps.LatLng(lat, lon);
        mapOptions.center  = myLatlng;

        // set map to map element and create a merker with user's location
        map = new google.maps.Map(document.getElementById("google-map"), mapOptions);


        var myLocation = new MarkerWithLabel({
            position: myLatlng,
            map: map,
            draggable:true,
            labelContent: "My Location",
            icon:'img/woody_1.png'
        });

        google.maps.event.addListener(myLocation, 'dragend',
            function()
            { initializeMap(this.getPosition().lat(),this.getPosition().lng());
            });


        // getNearStops by Location
        getNearStops(lat, lon);


        //Creating the check in Button
        var centerControlDiv = document.createElement('div');

        var checkinImg = document.createElement('img');
        checkinImg.setAttribute("src", "img/checkinBtn.png");
        checkinImg.setAttribute("height", "48px");
        checkinImg.setAttribute("padding", "3px 11px");

        // Set CSS for the control border
        var controlUI = document.createElement('div');
        controlUI.style.height = '55px';
        controlUI.style.width  = '55px';
        controlUI.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '25px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.appendChild(checkinImg);
        centerControlDiv.appendChild(controlUI);

        google.maps.event.addDomListener(controlUI, 'click', function() {
            $window.location.href = '#/app/selectlinetocheckin';
        });
        map.controls[google.maps.ControlPosition.BOTTOM_RIGHT].push(centerControlDiv);
    }

    function geoLocationSuccess(pos) {
        console.log( 'geoLocationSuccess', pos )
        initializeMap(pos.coords.latitude,pos.coords.longitude);
    }

    function geoLocationError(err) {
        console.warn('ERROR(' + err.code + '): ' + err.message);
    };

    // Init function when device is ready
    function init () {
        console.log( 'init' )
        navigator.geolocation.getCurrentPosition(geoLocationSuccess, geoLocationError, options);
    }

    init();
});