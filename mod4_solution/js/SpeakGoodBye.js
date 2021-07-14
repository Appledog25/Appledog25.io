(function (window) {


    var byeSpeaker = {
        name: ["John", "Jen", "Jason", "Jim"]
    };


    byeSpeaker.speak = function speak(name) {
        console.log(speakWord + " " + name);
    }

    window.byeSpeaker = byeSpeaker;
    var speakWord = "Good Bye";


})(window);
