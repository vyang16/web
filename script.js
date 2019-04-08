
function computeCost(){
  var apple = document.getElementById("apple").value;
  var banana = document.getElementById("banana").value;
  var orange = document.getElementById("orange").value;
  //Check if variables are valid or not
    document.getElementById('cost').value = apple * 0.69 + banana * 0.39 + orange * 0.59 ;
}

function checkValid(val, id) {
  var pos  = val.search(/^\d+$/);
  if(pos != 0){
    alert("Your input [" + val + "] in " + id + " is not valid. Please change it to a valid quantity.");
  }

}
