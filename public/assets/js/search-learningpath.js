function filterCards() {
  var input, filter, cardContainer, cards, title, i;
  input = document.getElementById("searchInput");
  filter = input.value.toLowerCase();
  cardContainer = document.getElementById("cardContainer");
  cards = cardContainer.getElementsByTagName("a");

  for (i = 0; i < cards.length; i++) {
    title = cards[i].getAttribute("data-title");
    if (title.toLowerCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}
