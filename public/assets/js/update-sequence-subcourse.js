// Function to get span value by row id
function getSpanValueByRowId(rowId) {
  // Get the row element by its id
  var rowElement = document.getElementById(rowId);

  // Get the span element within the row
  var spanElement = rowElement ? rowElement.querySelector("#sequence") : null;

  // If the span element exists, return its text content
  if (spanElement) {
    return { id: rowId, sequence: spanElement.textContent };
  }
  // Return null if the span element does not exist
  return null;
}

// Function to get all span values
function getAllSpanValues() {
  // Initialize an array to store the result
  var result = [];

  // Get all row elements in the table
  var rows = document.querySelectorAll("#sortable tr");

  // Iterate over the rows
  rows.forEach(function (rowElement) {
    var rowId = rowElement.id;
    var value = getSpanValueByRowId(rowId);
    if (value) {
      result.push(value);
    }
  });

  return result;
}

// Function to handle button click
function handleButtonClick() {
  // Get the span values
  var output = getAllSpanValues();

  // Convert the output to JSON string
  var jsonOutput = JSON.stringify(output);

  // Set the JSON string as the value of the hidden input field
  document.getElementById("resultInput").value = jsonOutput;

  // Submit the form
  document.getElementById("updateSubcourseSequenceForm").submit();
}

// Attach click event listener to the button
document
  .getElementById("saveSubcourseSequence")
  .addEventListener("click", handleButtonClick);
