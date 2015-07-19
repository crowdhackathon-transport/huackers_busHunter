app.controller('CheckinCtrl', function($scope) {

    console.log('Check in Controller initialized');

    $scope.stations = [
        {id: 1, short_name: '040', long_name: 'Aigaleo - Peiraias'},
        {id: 2, short_name: '040', long_name: 'Aigaleo - Peiraias'},
        {id: 3, short_name: '040',long_name: 'Aigaleo - Peiraias'},
        {id: 4, short_name: '040',long_name: 'Aigaleo - Peiraias'},
        {id: 5, short_name: '040',long_name: 'Aigaleo - Peiraias'},
        {id: 6, short_name: '040',long_name: 'Aigaleo - Peiraias'},
        {id: 7, short_name: '040',long_name: 'Aigaleo - Peiraias'},
        {id: 8, short_name: '040',long_name: 'Aigaleo - Peiraia9s'},
        {id: 9, short_name: '040',long_name: 'Aigaleo - Peiraias'},
    ]


    $scope.loadMore = function () {

        var id = $scope.stations.length + 1;
        console.log( 'Loading items', id )
        $scope.stations.push(
            {id: id, short_name: '040',long_name: 'TEST ' + id}
        )
        $scope.$broadcast('scroll.infiniteScrollComplete');
    }
});


