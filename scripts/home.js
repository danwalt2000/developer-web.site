

 var postCircleAnimation = false;
 var postDesignDevAnimation = false;
 
 
 $.fn.inView = function(){
    //Window Object
    var win = $(window);
    //Object to Check
    obj = $(this);
    //the top Scroll Position in the page
    var scrollPosition = win.scrollTop();
    //the end of the visible area in the page, starting from the scroll position
    var visibleArea = win.scrollTop() + win.height();
    //the end of the object to check
    if (obj.length) {
    var objEndPos = (obj.offset().top + obj.outerHeight());
     return(visibleArea >= objEndPos && scrollPosition <= objEndPos ? true : false)
    }
};

// Check if it's time to start the animation.
function checkAnimation() {
    for (var i=1; i<=5; i++){
        var $elem = $('.hrHomePage' + i);
    // If the animation has already been started
    if ($elem !== null){
         if ($elem.hasClass('hrAnimation')) continue;
            if ($($elem).inView()) {
        // Start the animation
        $elem.addClass('hrAnimation'); 
        $elem.width('100%');
    }
    } else {
        break;
    }
    }
    }
    
    // Check if it's time to start the animation.
function checkCircleAnimation() {
        var $elem = $('.skillSpan');
        if($elem !== null){
             // If the animation has already been started
        if ($($elem).inView() && !postCircleAnimation) {
        // Start the animation
        AnimateCircles();
        postCircleAnimation = true;
        }
        }
   
    }
    
    function checkDesignDevAnimations(){
            var $elem = $('.servicesParagraph');
            if($elem !== null){
            if ($($elem).inView() && !postDesignDevAnimation) {
            $('#development1').attr('class', 'development1');
            $('#development2').attr('class', 'development2');
            $('#development3').attr('class', 'development3');
            $('#development4').attr('class', 'development4');
            $('#design1').attr('class', 'des1');
            postDesignDevAnimation = true;
        }
    }
          
    }
    
    function checkPreFooterIsInView(){
        var $element = $('.big');
        var $element2 = $('#footerBlock1');
        var $element3 = $('#footerBlock2');
        var $element4 = $('#footerBlock3');
        var $element5 = $('.socialShareBlock');
        var $element6 = $('.sone');
        var $element7 = $('.stwo');
        var $element8 = $('.sthree');
        var $element9 = $('.sfour');
        

        if ($($element).inView()){
            window.setTimeout(function(){$element.addClass('fade-in-active');}, 300);
            
        }
        
        if ($($element2).inView()){
            window.setTimeout(function(){$element2.addClass('fade-in-active');}, 300);
            
        }
        
        if ($($element3).inView()){
            window.setTimeout(function(){$element3.addClass('fade-in-active');}, 300);
            
        }
        
        if ($($element4).inView()){
            window.setTimeout(function(){$element4.addClass('fade-in-active');}, 300);
            
        }
        
        if ($($element5).inView()){
            window.setTimeout(function(){$element5.addClass('fade-in-active');}, 300);
            
        }
        
        if ($($element6).inView()){
            window.setTimeout(function(){$element6.addClass('fade-in-active');}, 1000);
            
        }
        
        if ($($element7).inView()){
            window.setTimeout(function(){$element7.addClass('fade-in-active');}, 1000);
            
        }
        
        if ($($element8).inView()){
            window.setTimeout(function(){$element8.addClass('fade-in-active');}, 1000);
            
        }
        
        if ($($element9).inView()){
            window.setTimeout(function(){$element9.addClass('fade-in-active');}, 1000);
            
        }
   
    }
    
       function AnimateCircles(){
               $('#circle1').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 900,
            "stroke-opacity": 0.5
        },{
              duration: 2000,
              progress: function (animate, progress) {
                  $('#text1').text(Math.round(progress * 100));
              }});
          
        $('#circle2').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 900

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text2').text(Math.round(progress * 100));
            }});
        $('#circle3').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 760

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text3').text(Math.round(progress * 75));
            }
        });
        
         $('#circle4').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 810

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text4').text(Math.round(progress * 90));
            }
        });
        
         $('#circle5').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 790

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text5').text(Math.round(progress * 80));
            }
        });
        
         $('#circle6').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 790

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text5').text(Math.round(progress * 80));
            }
        });
        
        
         $('#circle7').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 690

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text7').text(Math.round(progress * 60));
            }
        });
        
         $('#circle8').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 790

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text8').text(Math.round(progress * 80));
            }
        });
        
        
         $('#circle9').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 820

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text9').text(Math.round(progress * 90));
            }
        });
        
        
         $('#circle10').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 820

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text10').text(Math.round(progress * 90));
            }
        });
        
        
         $('#circle11').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 950

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text11').text(Math.round(progress * 100));
            }
        });
        
          $('#circle12').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 760

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text12').text(Math.round(progress * 70));
            }
        });
        
        
        // Smaller circles
        
        $('#circle13').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 795

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text13').text(Math.round(progress * 100));
            }});
        
        $('#circle14').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 795

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text14').text(Math.round(progress * 100));
            }});
        $('#circle15').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 720

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text15').text(Math.round(progress * 75));
            }
        });
        
         $('#circle16').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 760

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text16').text(Math.round(progress * 90));
            }
        });
        
         $('#circle17').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 735

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text17').text(Math.round(progress * 80));
            }
        });
        
         $('#circle18').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 735

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text18').text(Math.round(progress * 80));
            }
        });
        
        
         $('#circle19').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 690

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text19').text(Math.round(progress * 60));
            }
        });
        
         $('#circle20').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 735

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text20').text(Math.round(progress * 80));
            }
        });
        
        
         $('#circle21').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 760

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text21').text(Math.round(progress * 90));
            }
        });
        
        
         $('#circle22').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 760

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text22').text(Math.round(progress * 90));
            }
        });
        
        
         $('#circle23').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 850

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text23').text(Math.round(progress * 100));
            }
        });
        
          $('#circle24').animate({
            fill: "#223fa3",
            stroke: "#000",
            "stroke-dasharray": 720

        },{
            duration: 2000,
            progress: function (animate, progress) {
                $('#text24').text(Math.round(progress * 70));
            }
        });
        
        



        
        
      
        
            }

// Capture scroll events
$(window).scroll(function(){
    checkAnimation();
    checkDesignDevAnimations();
    checkCircleAnimation();
    checkPreFooterIsInView();
});
