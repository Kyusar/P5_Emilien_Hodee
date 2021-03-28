/* var articles = document.getElementById("article");
ajaxGet(
  "http://localhost/p5_emilien_hodee/public/js/nw.json",
  function (reponse) {
    //Transform into array
    var article = JSON.parse(reponse);
    console.log(article);

    Array.from(article).forEach(function (articled) {
      var titleElement = document.createElement("h2");
      console.log(articled.title);
      titleElement.textContent = articled.dev_posts[0].title;
      var contentElement = document.createElement("p");
      contentElement.textContent = articled.dev_posts[0].content;

      articles.appendChild(titleElement);
      articles.appendChild(contentElement);
    });
  }
); */
function createArticle() {}
var articles = document.getElementById("article");
var request = new XMLHttpRequest();

request.onreadystatechange = function () {
  if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
    var response = JSON.parse(this.responseText);
    let i = 0;
    do {
      var category = response.dev_posts[i].category;
      console.log(category);
      if (category == "Actualité des développeurs" || category == "Général") {
        var rowElement = document.createElement("div");
        rowElement.className = "row justify-content-center";

        var colElement = document.createElement("div");
        colElement.className = "col-10 container-glow";

        var checkIfImg = response.dev_posts[i].image_url;
        if (checkIfImg === null) {
          null;
        } else {
          var imageElement = document.createElement("img");
          imageElement.className = "article-bg";
          imageElement.src = checkIfImg;
        }

        var titleElement = document.createElement("h4");
        titleElement.className = "main-color text-center article-title";
        titleElement.textContent = response.dev_posts[i].title;

        var contentElement = document.createElement("p");
        contentElement.className = "text-bio text-left";
        contentElement.textContent = response.dev_posts[i].content;

        var secondRowElement = document.createElement("div");
        secondRowElement.className = "row";

        var secondDivElement = document.createElement("div");
        secondDivElement.className = "col";

        var thirdDivElement = document.createElement("div");
        thirdDivElement.className = "col";

        var sourceElement = document.createElement("a");
        sourceElement.className = "simple-link";
        /* sourceElement.textContent = response.dev_posts[i].source; */
        sourceElement.href = response.dev_posts[i].source_url;
        sourceElement.target = "_blank";

        var buttonElement = document.createElement("button");
        buttonElement.className = "btn btn-color";
        buttonElement.type = "button";
        buttonElement.textContent = "Voir source";

        var dateElement = document.createElement("p");
        dateElement.className = "muted text-right";
        dateElement.textContent =
          "Le " +
          new Date(response.dev_posts[i].posted_at).getUTCDate() +
          " / " +
          (new Date(response.dev_posts[i].posted_at).getUTCMonth() + 1) +
          " / " +
          new Date(response.dev_posts[i].posted_at).getUTCFullYear();

        articles.appendChild(rowElement);
        rowElement.appendChild(colElement);
        colElement.appendChild(imageElement);
        colElement.appendChild(titleElement);
        colElement.appendChild(contentElement);
        colElement.appendChild(secondRowElement);
        secondRowElement.appendChild(secondDivElement);
        secondDivElement.appendChild(sourceElement);
        sourceElement.appendChild(buttonElement);
        secondRowElement.appendChild(thirdDivElement);
        thirdDivElement.appendChild(dateElement);

        i += 1;
      } else {
        i += 1;
      }
    } while (i < 20);
  }
};
request.open("GET", "http://localhost/p5_emilien_hodee/public/js/nw.json");
request.send();

// https://newworldfans.com/api/v1/dev_tracker?page=1&source=reddit   remote acces
// http://localhost/p5_emilien_hodee/public/js/nw.json local access
