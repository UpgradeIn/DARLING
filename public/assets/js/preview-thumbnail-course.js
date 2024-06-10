function previewImageCourse(event) {
  var input = event.target;
  var reader = new FileReader();
  reader.onload = function () {
    var output = document.getElementById("thumbnail_preview_course");
    output.src = reader.result;
    output.style.display = "block";

    // Hide the SVG and the text
    var svgElement = document.getElementById("svg_thumbnail_course");
    var textElement = document.getElementById("teks_thumbnail_course");
    svgElement.style.display = "none";
    textElement.style.display = "none";
  };
  reader.readAsDataURL(input.files[0]);
}

function previewImageLearningPath(event) {
  var input = event.target;
  var reader = new FileReader();
  reader.onload = function () {
    var output = document.getElementById("thumbnail_preview_lp");
    output.src = reader.result;
    output.style.display = "block";

    // Hide the SVG and the text
    var svgElement = document.getElementById("svg_thumbnail_lp");
    var textElement = document.getElementById("teks_thumbnail_lp");
    svgElement.style.display = "none";
    textElement.style.display = "none";
  };
  reader.readAsDataURL(input.files[0]);
}
