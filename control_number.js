
    // Generate the control number
    var controlNumber = generateRandomNumber(100000, 999999);

    // Display control number
    document.getElementById("controlNumber").innerText = "T" + controlNumber;


function generateRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}



var sourceDiv = document.querySelector(".gencontrol").innerHTML;
var targetInput = document.getElementById("get_value");

 targetInput.value = sourceDiv;


  