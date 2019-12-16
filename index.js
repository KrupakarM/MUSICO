var numberOfDrumButtons = document.querySelectorAll(".drum").length;

for (var i = 0; i < numberOfDrumButtons; i++) {

  document.querySelectorAll(".drum")[i].addEventListener("click", function() {

    var buttonInnerHTML = this.innerHTML;

    makeSound(buttonInnerHTML);

    buttonAnimation(buttonInnerHTML);

  });

}

document.addEventListener("keypress", function(event) {

  makeSound(event.key);

  buttonAnimation(event.key);

});


function makeSound(key) {

  switch (key) {
    case "w":
      var tom1 = new Audio("Drum/sounds/tom-1.mp3");
      tom1.play();
      document.body.style.background = " url('Drum/best-music-background_090305610.jpg') ";
      document.body.style.backgroundSize = "cover";
      break;

    case "a":
      var tom2 = new Audio("Drum/sounds/tom-2.mp3");
      document.body.style.background = "url('Drum/cello_090318324.jpg') ";
      document.body.style.backgroundSize = "cover";
      tom2.play();
      break;

    case "s":
      var tom3 = new Audio('Drum/sounds/tom-3.mp3');
      tom3.play();
      document.body.style.background = "url('Drum/best-music-wallpapers_090310129.jpg')";
      document.body.style.backgroundSize = "cover";
      break;

    case "d":
      var tom4 = new Audio('Drum/sounds/tom-4.mp3');
      tom4.play();
      document.body.style.background = "url('Drum/music-free-desktop-wallpaper_090731962.jpg')";
      document.body.style.backgroundSize = "cover";
      break;

    case "j":
      var snare = new Audio('Drum/sounds/snare.mp3');
      snare.play();
      document.body.style.background = "url('Drum/synthesizer-wallpaper_090900880.jpg')";
      document.body.style.backgroundSize = "cover";
      break;

    case "k":
      var crash = new Audio('Drum/sounds/crash.mp3');
      crash.play();
      document.body.style.background = "url('Drum/music-wallpaper_090825887.jpg')";
      document.body.style.backgroundSize = "cover";
      break;

    case "l":
      var kick = new Audio('Drum/sounds/kick-bass.mp3');
      kick.play();
      document.body.style.background = "url('Drum/music-black-and-white-wallpaper_090710494.jpg')";
      document.body.style.backgroundSize = "cover";
      break;


    default: console.log(key);

  }
}


function buttonAnimation(currentKey) {

  var activeButton = document.querySelector("." + currentKey);

  activeButton.classList.add("pressed");

  setTimeout(function() {
    activeButton.classList.remove("pressed");
  }, 100);

}
