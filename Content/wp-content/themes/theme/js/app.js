

jQuery(document).ready(function () {


    jQuery('.search-btn-wrap').on('click', function(){

        if( jQuery(this).hasClass('active') ){
            jQuery('#search-wrap').slideUp();
            jQuery(this).removeClass('active');

        }else{
            jQuery('#search-wrap').slideDown();
            jQuery(this).addClass('active');
        }

        
    });

    //Click event to scroll to top
    jQuery('.scrollToTop').click(function(){
        jQuery('html, body').animate({scrollTop : 0}, 800 );
        return false;
    });

    jQuery(window).scroll(function() {
        if ( jQuery(this).scrollTop() > 150 ){
            var menuNav = jQuery('#terms-nav');
            if( menuNav.length > 0 && Modernizr.mq('(min-width: 768px)') ){
                jQuery('#terms-nav').addClass("sticky");
            }else{
                jQuery('#header').addClass("sticky");
            }
        }
        else{
            
            jQuery('#header').removeClass("sticky");
            jQuery('#terms-nav').removeClass("sticky");
        }


        if ( jQuery(this).scrollTop() > 100 ) {
            jQuery('.scrollToTop').fadeIn();
        } else {
            jQuery('.scrollToTop').fadeOut();
        }

    });

    jQuery('.icheck').iCheck({
        checkboxClass: 'icheckbox_square-red',
        radioClass: 'iradio_square-red',
        //increaseArea: '20%' // optional
    });

    
    var mobilemenu = jQuery('#slidebars-menu').slideMenu({
        position: 'left',
        showBackLink: true,
        submenuLinkAfter: ' <span><i class="fa fa-angle-right"></i></span>',
        backLinkAfter: ' <span><i class="fa fa-angle-left"></i></span>',
    });

    // Show News popup detail
    jQuery(document).on('click', '.open-popup', function(e){
        e.preventDefault();
        var pid = jQuery(this).attr('href');
        var title = jQuery(this).closest('.post-item').attr('data-title');
        jQuery.ajax({
            url: ajax_object.ajax_url,
            data: {
                'action': 'get_post_detail',
                'post_id': pid
            },
            type: 'GET',
            success: function( response ){
                var modal = jQuery('#app-modal');
                modal.find('.modal-title').html(title);
                modal.find('.modal-body').html(response);
                jQuery(modal).modal();
            }

        })
    });


    // Show Menu Info

    jQuery('.p-item a').on('click', function(e){
      e.preventDefault();
      var pid = jQuery(this).data('id');
      var that = this;
      jQuery.ajax({
        url: ajax_object.ajax_url,
        data: {
            'action': 'get_post_info',
            'pid':   pid
        },
        type: 'GET',
        success: function( response ){
            if( Modernizr.mq('(min-width: 768px)') ){
                var parent = jQuery(that).closest('.p-row');
                jQuery('.p-row-info').remove();
                jQuery(parent).after(response);
                jQuery(parent).next().hide().slideDown();
                jQuery('html, body').animate({
                    scrollTop: jQuery(parent).next().offset().top - 220
                }, 500);

            }else{
                var modal = jQuery('#app-modal');
                modal.find('.modal-body').html(response);
                jQuery(modal).modal();
                jQuery(".table-responsive").mCustomScrollbar({
                            axis:"x", // horizontal scrollbar
                            theme:'dark-3',
                            autoHideScrollbar: false,
                            alwaysShowScrollbar: 2
                });
            
            }

        }

      })
    });


    // Load news by post
    jQuery('.load-post').on('click', function(e){
          e.preventDefault();
          var target = jQuery(this).data('target');
          var loaded = jQuery(this).attr('data-loaded');
          var cid = jQuery(this).data('cat');
          var page = jQuery(this).data('page');

          if( loaded == 0 ){
            loadPostByCat( target, cid, page );
            jQuery('.news-body').hide();
            jQuery(this).attr('data-loaded',1);
            jQuery(target).fadeIn();
          }else{
            jQuery('.news-body').hide();
            jQuery(target).fadeIn();
          }
          
        });

    // Load more news
    jQuery('.load-more-news').on('click', function(e){
          e.preventDefault();
          var target = jQuery(this).data('target');
          var cid = jQuery(this).data('cat');
          var page = jQuery(this).attr('data-page');
          loadPostByCat( target, cid, page );
            
    });


    jQuery('#select-city').on('change', function(e){
        e.preventDefault();
        var cityID = jQuery(this).val();
        jQuery.ajax({
            url: ajax_object.ajax_url,
            data: {
                'action': 'get_store_by_city',
                'cityID':  cityID
            },
            type: 'GET',
            success: function( response ){
                jQuery('#select-store').html(response);
            }

        })
    });


    jQuery('.scroll-to-top').on('click', function (e) {
        e.preventDefault();
        var target = jQuery(this).attr('href');
        var menuNav = jQuery('#terms-nav');
        //var headerNav = jQuery('#header');

        if( menuNav.length > 0 && Modernizr.mq('(min-width: 768px)') ){
            if( jQuery('#terms-nav').hasClass('sticky') ){
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top - 60
                }, 500);
            }else{
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top - 225
                }, 500);
            }
            
        }else{
            if( jQuery('#header').hasClass('sticky') ){
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top - 65
                }, 500);
            }else{
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top - 160
                }, 500);
            }
        }


    });

}); // End document ready



// Funtional 
function loadPostByCat( target, catID, page ){
    jQuery.ajax({
        url: ajax_object.ajax_url,
        data: {
            'action': 'get_news_cat',
            'cid': catID,
            'paged' : page
        },
        type: 'GET',
        success: function( response ){
            
            jQuery(target).find('.news-body-data').append(response);
            jQuery(target).find('.load-more-news').attr('data-page', parseInt(page) + 1);
            
        }

    })
}


