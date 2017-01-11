/*
* Smooth Scrolling
* Source: https://css-tricks.com/snippets/jquery/smooth-scrolling/
* Description: Performs a smooth page scroll to an anchor on the same page.
*/

(function(){
  //smooth Scrolling
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
        scrollTop: target.offset().top
        }, 500);

        return false;
      }
    }
  });
}());


/* Close Draft note */

(function(){

  var closeDraft = document.getElementById('closeDraft');
  var draft = document.getElementById('draft');
  
  if(closeDraft){

    closeDraft.addEventListener("click", function(event){
      event.preventDefault();
      draft.classList.add('draft--off');
    });

  }

}());