$(document).ready(function() {
    $('#type').on('change', function() {
          if ( this.value == '0') {
              $(".starrater").css('display', 'none');
              $(".catagolizer").css('display', 'none');
              $(".slider").css('display', 'block');
          } else if(this.value == '1') {
              $(".slider").css('display', 'none');
              $(".catagolizer").css('display', 'none');
              $(".starrater").css('display', 'block');
          } else if(this.value == '2') {
              $(".slider").css('display', 'none');
              $(".starrater").css('display', 'none');
              $(".catagolizer").css('display', 'block');
          }
    });
    
    // Add image from the gallery to post
    $(".gallery-item").click(function(){
            $(".post-image").attr('src', $(this).attr('src'));
            $(".featured_image").val($(this).attr('src'));
            $('.modal').modal('hide');
             if($(".featured_image").val() !== '') {
                $(".add-image-button").html("Change Image");
            }
    })
    
    // Add image from the gallery to widget
    $('.add-image-button').click(function () {
        
        let number = $(this).data("number");
        let type = '';
        
        if ($(".widget.slider").is(":visible") === true) {
            type = 'slider';
        } else if ($(".widget.starrater").is(":visible") === true) {
            type = 'starrater';
        } else if ($(".widget.catagolizer").is(":visible") === true) {
            type = 'catagolizer';
        }
        
        if(this.id == 'add-image-button-' + number) {
            removeClasses();
            $(".gallery-item-widget").addClass("gallery-item-" + number);
      
        $(".gallery-item-" + number).unbind('click').click(function() {
            $("." + type + "_image_" + number).val($(this).attr('src'));
            $(".widget-image-" + number).attr('src', $(this).attr('src'));
            $('.modal').modal('hide');
                if($("." + type + "_image_" + number).val() !== '') {
                    $("#add-image-button-" + number).html("Change Image");
                }
        })
    }
   
       function removeClasses() {
            $(".gallery-item-widget").removeClass("gallery-item-" + number);  
       }
   
    })
    
    var description1 = $(".starrater_description_1");
    var description2 = $(".starrater_description_2");
    var description3 = $(".starrater_description_3");
    
    // Star rater widget
       $(".widget-starrater-1").click(function(){
            $(".widget-starrater-1").removeClass("checked-1");
            $(this).addClass("checked-1");
            $(this).prevAll().addClass("checked-1");
            description1.val($('.checked-1').length);
        }) 
        
        $(".widget-starrater-2").click(function(){
            $(".widget-starrater-2").removeClass("checked-2");
            $(this).addClass("checked-2");
            $(this).prevAll().addClass("checked-2");
            description2.val($('.checked-2').length);
        }) 
        
        $(".widget-starrater-3").click(function(){
            $(".widget-starrater-3").removeClass("checked-3");
            $(this).addClass("checked-3");
            $(this).prevAll().addClass("checked-3");
            description3.val($('.checked-3').length);
        }) 
        
        for(var i = 1; i < 6; i++) {
            if(description1.val() == i) {
                console.log(description1.val());
                $(".widget-starrater-1").slice(0,description1.val()).addClass("checked-1");
            }
            if(description2.val() == i) {
                console.log(description2.val());
                $(".widget-starrater-2").slice(0,description2.val()).addClass("checked-2");
            }
            if(description3.val() == i) {
                console.log(description3.val());
                $(".widget-starrater-3").slice(0,description3.val()).addClass("checked-3");
            }
        }
    
    
    // MDB Lightbox Init
    //$(function () {
    //    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    //});
});