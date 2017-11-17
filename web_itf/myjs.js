$(document).ready(function() {
    $('.autoplay_pic').slick({
        autoplay: true,
        autoplaySpeed: 2000
    });
});

(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));