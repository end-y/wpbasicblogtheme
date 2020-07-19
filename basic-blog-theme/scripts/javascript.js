 
var slideIndex = 0;
showDivs(slideIndex);
carousel();
function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.querySelector(".post").children;
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
    TweenLite.fromTo(x, 1, {
        scale: 0.9,
        opacity:0
    },{
        scale: 1,
        opacity:1
    });
}

function carousel() {
    var i;
    var x = document.querySelector(".post").children;
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    TweenLite.fromTo(x, 1, {
        scale: 0.9,
        opacity:0
    },{
        scale: 1,
        opacity:1
    });
    interval = setTimeout(carousel, 20000); 
}



jQuery(document).ready(function (){
    
    var card = $("#profile");
    var cardBtn = $("#profile-tab");
    
    
    
    cardBtn.click(function(){
        TweenLite.fromTo(card, 1, {
            x: 100,
            opacity:0
        },{
            x:40,
            opacity:1
        });
    }); 
    
    var kucukYazi = $(".kucukyazi");
    var yazi = $(".buyukyazi");

    TweenLite.fromTo(kucukYazi, 1, {
        x:-200,
        opacity:0
    }, {
        x: 0,
        opacity:1,
        delay: 0.5
    });
        
    TweenLite.fromTo(yazi, 1, {
        y:-50,
        opacity:0
    }, {
        y: 0,
        opacity:1
        
    });
})(jQuery);

function ikiLink() {
   document.location.href = "localhost/wordpress";
   
   };
   




