function search() {
    var input, filter;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();

    // Send AJAX request to search.php with the search query
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var results = JSON.parse(this.responseText);
            updateTable(results);
        }
    };
    xhr.open("GET", "search.php?query=" + filter, true);
    xhr.send();
}

function updateTable(results) {
    var tableBody = document.getElementById("content-table").getElementsByTagName("tbody")[0];
    tableBody.innerHTML = ""; // Clear existing table rows
    
    // Add new rows for each result
    results.forEach(function(rowData) {
        var row = tableBody.insertRow();
        Object.values(rowData).forEach(function(value) {
            var cell = row.insertCell();
            cell.textContent = value;
        });
    });
}
