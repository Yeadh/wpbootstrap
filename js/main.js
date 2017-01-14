console.log('JavaScript works');

var portfolioPostsBtn = document.getElementById('portfolio-post-btn');
var portfolioPostsContainer = document.getElementById('portfolio-posts-container');


if(portfolioPostsBtn){

    portfolioPostsBtn.addEventListener("click", function(){

        var ourRequest = new XMLHttpRequest();

        ourRequest.open('GET', 'http://localhost:8888/wpDevTest/wp-json/wp/v2/posts?categories=8');
        ourRequest.onload = function() {
            if (ourRequest.status >= 200 && ourRequest.status < 400) {
                var data = JSON.parse(ourRequest.responseText);
                console.log(data);
                createHTML(data);
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