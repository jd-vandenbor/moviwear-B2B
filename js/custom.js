$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '5718126223',
        limit: 3,
        resolution: 'standard_resolution',
        accessToken: '5718126223.1677ed0.430bd7562372408cb2d3612957a81843',
        sortBy: 'most-recent',
        template: '<div class="col-lg-4 instaimg" style=""><a href="{{image}}" title="{{caption}}" target="_blank"><img style="border-radius:20px;width:400px;height:380px;border:3px solid black;" src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
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