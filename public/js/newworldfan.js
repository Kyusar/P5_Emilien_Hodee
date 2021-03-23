/* var articles = document.getElementById("article");
ajaxGet("https://newworldfans.com/api/v1/dev_tracker", function (reponse) {
  //Transform into array
  var articles = JSON.parse(reponse);

  articles.forEach(function (article) {
    var titleElement = document.createElement("h2");
    titleElement.textContent = article.title;
    var contentElement = document.createElement("p");
    contentElement.textContent = artcile.content;

    articles.append(titleElement);
    articles.append(contentElement);
  });
}); */

// Création d'une requête HTTP
var req = new XMLHttpRequest();
// Requête HTTP GET synchrone vers le fichier langages.txt publié localement
req.open("GET", "https://newworldfans.com/api/v1/dev_tracker", false);
// Envoi de la requête
req.send(null);
