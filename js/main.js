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
        console.log('ho fatto');

        return false;
      }
    }
  });

}());

/** 
 * WordpressAPI for quick post and portfolio
 */

(function(){

    var portfolioPostsBtn = document.getElementById('portfolio-post-btn');
    var portfolioPostsContainer = document.getElementById('portfolio-posts-container');


    if(portfolioPostsBtn){

        portfolioPostsBtn.addEventListener("click", function(){

            var ourRequest = new XMLHttpRequest();

            ourRequest.open('GET', quickPostData.siteURL + "/wp-json/wp/v2/posts?categories=8");
            ourRequest.onload = function() {
                if (ourRequest.status >= 200 && ourRequest.status < 400) {
                    var data = JSON.parse(ourRequest.responseText);
                    console.log(data);
                    createHTML(data);
                    portfolioPostsBtn.remove();
                } else {
                    console.log("We connected to the server, but it returned an error.");
                }
            };

            ourRequest.onerror = function() {
                console.log("Connection error");
            };

            ourRequest.send();

        });

    }

    function createHTML(postData){
        var ourHTMLString = '';
        for(i=0; i < postData.length; i++) {
            ourHTMLString += '<h2>' + postData[i].title.rendered + '</h2>';
            ourHTMLString += '<p>' + postData[i].content.rendered + '</p>';
        }
        portfolioPostsContainer.innerHTML = ourHTMLString;
    }

    // Quick Add Post AJAX

    var quickAddButton = document.querySelector("#quick-add-button");
    var statusMessage = document.querySelector("#status-message");

    if (quickAddButton) {
        quickAddButton.addEventListener('click', function(){
            var ourPostData = {
                "title": document.querySelector('.admin-quick-add [name="title"]').value,
                "content": document.querySelector('.admin-quick-add [name="content"]').value,
                "status": "publish"
            }
            var createPost = new XMLHttpRequest();

            createPost.open("POST", quickPostData.siteURL + "/wp-json/wp/v2/posts");
            createPost.setRequestHeader("X-WP-Nonce", quickPostData.nonce);
            createPost.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
            createPost.send(JSON.stringify(ourPostData));
            createPost.onreadystatechange = function() {
                if(createPost.readyState == 4){
                    if(createPost.status == 201){
                        statusMessage.innerHTML = '';
                        document.querySelector('.admin-quick-add [name="title"]').value = '';
                        document.querySelector('.admin-quick-add [name="content"]').value = '';
                        statusMessage.innerHTML = '<p class="bg-success text-success">Post created successfully. <i class="fa fa-window-close fa-window-close--right" id="message-close"></i></p>';
                        closeMessage();
                    } else {
                        statusMessage.innerHTML = '';
                        statusMessage.innerHTML = '<p class="bg-danger alert alert-danger">Oh snap! You got an error! <i class="fa fa-window-close fa-window-close--right" id="message-close"></i></p>';
                        closeMessage();
                    }
                }
            }

        });
    }


    function closeMessage(){
        var closeMessage = document.querySelector("#message-close");
        statusMessage.classList.remove("hide");//for previous errors
        closeMessage.addEventListener("click", function(){
            console.log("clicked");
            statusMessage.classList.add("hide");
        });
    }

}());
