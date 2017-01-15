console.log('JavaScript works');

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
                    document.querySelector('.admin-quick-add [name="title"]').value = '';
                    document.querySelector('.admin-quick-add [name="content"]').value = '';
                    alert('Post published - refresh your page.');       
                } else {
                    alert('ERROR - try again.');
                }
            }
        }

    });
}