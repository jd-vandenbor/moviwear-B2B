$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '5718126223',
        limit: 1,
        resolution: 'standard_resolution',
        accessToken: '5718126223.1677ed0.430bd7562372408cb2d3612957a81843',
        sortBy: 'most-recent',
        template: '<div><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" style="width:100% "></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});