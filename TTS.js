

let speech = new SpeechSynthesisUtterance();
let isSpeaking = false;


let voices = [];

let voiceSelect = document.querySelector("select");



window.speechSynthesis.onvoiceschanged = () => {
  voices = window.speechSynthesis.getVoices();
  speech.voice = voices[0];

  voices.forEach((voice, i) => (voiceSelect.options[i] = new Option(voice.name, i)));
};

voiceSelect.addEventListener("change", () => {
  speech.voice = voices[voiceSelect.value];
});


document.querySelector("button").addEventListener("click", () => {
  if (isSpeaking) {
    window.speechSynthesis.cancel(); // Stop speech if already speaking
    isSpeaking = false; // Update the status
  } else {
    let text = document.querySelector("p").textContent;
    let chunks = text.match(/.{1,606}/g) || []; // Split text into chunks of 336 characters

    let index = 0;

    function speakChunk() {
      if (index < chunks.length) {
        speech.text = chunks[index];
        window.speechSynthesis.speak(speech);
        isSpeaking = true; // Update the status


        
        speech.onend = () => {
          // Speak the next chunk after the delay
          setTimeout(() => {
            index++;
            speakChunk();
          }, 100); // Adjust the delay to 100 milliseconds
        };
      } else {
        isSpeaking = false; // Update the status when all chunks are spoken
      }
    }

    speakChunk(); // Start speaking the first chunk
  }

});

window.onbeforeunload = () => {
  if (isSpeaking) {
    window.speechSynthesis.cancel(); // Stop speech if already speaking
  }
};

speech.rate = 0.9;