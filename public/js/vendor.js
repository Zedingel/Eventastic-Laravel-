('DOMContentLoaded', function () {
    let synth;

    // Function to speak the text
    function speak(text) {
        if (synth && synth.speaking) {
            console.log('Currently speaking...');
            return;
        }

        if (text !== '') {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.onend = () => {
                console.log('Finished speaking...');
            };
            utterance.onerror = () => {
                console.error('Error occurred while speaking!');
            };
            synth.speak(utterance);
        }
    }

    setTimeout(function () {
        // Check if the Web Speech API is supported
        if ('speechSynthesis' in window) {
            synth = window.speechSynthesis;

            // Get all elements with the 'speakText' class
            const speakTextElements = document.querySelectorAll('.speakText');

            // Add event listener to each element
            speakTextElements.forEach((element) => {
                element.addEventListener('click', () => {
                    speak(element.textContent);
                });
            });

            // Add event listener to the body to allow speech activation on touch/click
            document.body.addEventListener('click', () => {
                speak('');
            });
        } else {
            console.error('Web Speech API is not supported in this browser.');
        }
    }, 500); // Wait 500 milliseconds (0.5 seconds) before executing the code
});       