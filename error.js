window.onload = function() {
    // Display the loader container
    document.querySelector('.loader-container');
    
    // Hide the loader after a delay (3 seconds in this example)
    setTimeout(function() {
        document.querySelector('.loader-container').style.display = 'none';
    }, 1000);
};