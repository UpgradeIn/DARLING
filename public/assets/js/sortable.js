//Sortable Sub Materi
const sortable = new Sortable(document.getElementById("sortable"), {
  animation: 150,
  ghostClass: "bg-blue-100",
  onEnd: (evt) => {
    // Update urutan sequence
    Array.from(evt.to.children).forEach((item, index) => {
      item.querySelector('span[id="sequence"]').textContent = index + 1;
    });
  },
});
