console.log("working");
const currentTime = new Date();
let hour = currentTime.getHours();
let modifideHour = hour % 12 || 12;
let timeString = "it's " + modifideHour + "o'clock now.";



function greetingsGen(hour) {
  if (hour >= 1 && hour < 6) {
    return "Late Night.";
  } else if (hour < 12) {
    return "Good Morning.";
  } else if (hour < 18) {
    return "Good Afternoon!";
  } else if (hour < 22) {
    return "Good Evening!";
  } else {
    return "Good Night!";
  }
}

const typingText = ['Hello, Admin.', `${greetingsGen(hour)}`, timeString, 'This is your Deshboard.', 'You can controll everything form there.'];
const typing = new AutoTyping('.assistant', typingText, {
  typeSpeed: 50,
  deleteSpeed: 50,
  waitBeforeDelete: 2000,
  waitBetweenWords: 500,
});
typing.start();


function confirmAlert() {
  if (confirm("Do you want to delete this item?")) {
    return true;
  } else {
    return false;
  }
}