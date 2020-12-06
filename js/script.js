jQuery(document).ready(function() {     
    jQuery('#blog__article-1').hover(function(){     
        jQuery('#pulse_1').addClass('pulse');    
    },     
    function(){    
        jQuery('#pulse_1').removeClass('pulse');     
    });

    jQuery('#blog__article-2').hover(function(){     
        jQuery('#pulse_2').addClass('pulse');    
    },     
    function(){    
        jQuery('#pulse_2').removeClass('pulse');     
    });

    jQuery('#blog__article-1').hover(function(){     
        jQuery('#blog__article-1--image').addClass('blog__article-1--image_hover');    
    },     
    function(){    
        jQuery('#blog__article-1--image').removeClass('blog__article-1--image_hover');     
    });


    jQuery('#blog__article-2').hover(function(){     
        jQuery('#blog__article-2--image').addClass('blog__article-2--image_hover');    
    },     
    function(){    
        jQuery('#blog__article-2--image').removeClass('blog__article-2--image_hover');     
    });
});  