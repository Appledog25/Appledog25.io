
(function (window) {


    var helloSpeaker = {
        name: ["Yaakov", "Paula", "Larry", "Laura", "Paul", "Frank"]
    };

    helloSpeaker.speak = function speak(name) {
        console.log(speakWord + " " + name);
    }

    window.helloSpeaker = helloSpeaker;
    var speakWord = "Hello";


})(window);








