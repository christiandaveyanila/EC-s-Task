<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text-to-Speech on Highlight</title>
</head>
<body>
  <h1>Highlight any text on this page to hear it spoken aloud</h1>
  <p>
    This is a sample paragraph. You can highlight any portion of this text to trigger the text-to-speech functionality.
  </p>

  <script>
    document.addEventListener('mouseup', function() {
      const selectedText = window.getSelection().toString().trim();
      if (selectedText !== '') {
        speakText(selectedText);
      }
    });

    function speakText(text) {
      if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        window.speechSynthesis.speak(utterance);
      } else {
        alert('Sorry, your browser does not support text-to-speech.');
      }
    }
  </script>
</body>
</html>
