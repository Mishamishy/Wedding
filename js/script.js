$(document).ready(function() {
  
    $('.guest-list>article').not(':first-of-type').hide();
    
     
     $('.guest-list>h1').click(function() {
       
       var findArticle = $(this).next();
       var findGuest = $(this).closest('.guest-list');
       
       if (findArticle.is(':visible')) {
         findArticle.slideUp('fast');
       }
       else {
         findGuest.find('>article').slideUp('fast');
         findArticle.slideDown('fast');
       }
     });
     
   });