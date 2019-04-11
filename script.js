
function computeCost(){
  var apple = document.getElementById("apple").value;
  var banana = document.getElementById("banana").value;
  var orange = document.getElementById("orange").value;
  //Check if variables are valid or not
  var num = apple * 0.69 + banana * 0.39 + orange * 0.59;
  document.getElementById('cost').value = parseFloat(Math.round(num * 100) / 100).toFixed(2);;
}

function checkValid(val, id) {
  var pos  = val.search(/^\d+$/);
  if(pos != 0){
    alert("Your input [" + val + "] in " + id + " is not valid. Please change it to a valid quantity.");
    document.getElementById(id).value = 0;
    computeCost();
  }else{
    computeCost();
  }
}

function validateForm() {
  var x = document.forms["order"]["name"].value;
  var payment = document.forms["order"]["payment"].value;
  var apple = document.getElementById("apple").value;
  var banana = document.getElementById("banana").value;
  var orange = document.getElementById("orange").value;

  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (payment == "") {
    alert("Please choose a payment option");
    return false;
  }
  if(apple==0 && banana==0 && orange==0){
    alert("Please make a valid order");
    return false;
  }
}

/*
function howManyWordsInInput(id)
{
    var text = document.getElementById(id).value;
    text = text.split(" ");
    for(word in text){
      var pos = word.search(\w+);
      if(pos != 0){
        alert("Please put in a valid name");
        return -1;
      }
    }
    return text.length;
}

function checkName(id){
  if(howManyWordsInInput(id) < 2){
    alert("Please put in your whole name!"); //at least two words, can have more
  }
}
*/
