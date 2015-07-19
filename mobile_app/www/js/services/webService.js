app.factory('Web', function( transformRequestAsFormPost ) {

    var webServicesUrl = '';

    return{

        getUrl : function() {return webServicesUrl;},
        getLoginUrl : function() {return webServicesUrl+'users/userlogin/' },
        getRegisterUrl : function() {return webServicesUrl+'users/userregister/' },
        getAllRoutesUrl: function() {return webServicesUrl+'routes/routes'},
        getStopsByRouteUrl: function(routeData) {return webServicesUrl+'routes/routestops?'+transformRequestAsFormPost.transform(routeData)},
        getNearStopsUrl: function(Data) {return webServicesUrl+'routes/nearstops?'+transformRequestAsFormPost.transform(Data)},
        getLinesFromStopUrl: function(Data) {return webServicesUrl+'routes/linesfromstop?'+transformRequestAsFormPost.transform(Data)},
        postCurrentLocation: function() {return webServicesUrl+'users/userlocation'},
        getWayPointsUrl: function(Data){ return webServicesUrl+'routes/waypoints?'+transformRequestAsFormPost.transform(Data)},
        getNearLinesUrl: function(Data){ return webServicesUrl+'routes/nearlines?'+transformRequestAsFormPost.transform(Data)},
        getBusLocationUrl: function(Data){ return webServicesUrl+'routes/buslocation?'+transformRequestAsFormPost.transform(Data)},
        getCultureDataUrl: function(Data){ return webServicesUrl+'crawl_apis/data?'+transformRequestAsFormPost.transform(Data)},
        getCompanyTicketsPerMonthUrl : function(businessData) {return webServicesUrl+'business_api/companyticketsnumpermonth?'+transformRequestAsFormPost.transform(businessData) }


    }

});
