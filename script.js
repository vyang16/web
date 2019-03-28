function test(){
  var apple = document.getElementById('apple').value;
  var banana = document.getElementById("banana").value;
  var orange = document.getElementById("orange").value;
  //Check if variables are valid or not
  if(apple < 0){
    alert("Please input a valid quantity for Apples!");
  }else if(banana < 0){
    alert("Please input a valid quantity for Bananas!");
  }else if(orange < 0){
    alert("Please input a valid quantity for Oranges!");
  }else{
    document.getElementById('cost').value = apple * 0.69 + banana * 0.39 + orange * 0.59 ;
  }


}
