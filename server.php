<?php
//Read Variables
$name = $_POST['name'];
$payment = $_POST['payment'];
$apple = $_POST['apple'];
$orange = $_POST['orange'];
$banana = $_POST['banana'];


$totalCost = number_format((($apple * 0.69) + ($orange * 0.59) + ($banana * 0.39)), 2); //only show two decimals

//store order in order.txt
$file = 'order.txt';
// Creates file if it does not exist yet
if(!is_file($file)){
    $contents = "Total number of apples: 0\r\nTotal number of oranges: 0\r\nTotal number of bananas: 0\r\n";
    file_put_contents($file, $contents);
}
$order_file = fopen("order.txt", "r+") or die("Unable to create file!");
$data = fread($order_file, filesize($file));
// Uses regex to finds the counts of each fruits within the file
preg_match_all("/[0-9]+/", $data, $fruit_counts);
$old_apple_count = $fruit_counts[0][0];
$old_orange_count = $fruit_counts[0][1];
$old_banana_count = $fruit_counts[0][2];
$new_apple_count = $old_apple_count + $apple;
$new_orange_count = $old_orange_count + $orange;
$new_banana_count = $old_banana_count + $banana;
$new_contents = "Total number of apples: $new_apple_count\r\nTotal number of oranges: $new_orange_count\r\nTotal number of bananas: $new_banana_count\r\n";
file_put_contents($file, $new_contents);
//Closes file (good practice)
fclose($order_file);
?>

<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="image/fruit_bowl-512.png">
    <link rel="stylesheet" href="style.css">
    <title>Fruit Shop</title>


    <style type="text/css">
      body{
        font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
        padding-left: 50px;
      }


      table, th, td{
        border: solid 1px;
        text-align: left;
      }
      th{
        vertical-align: top;
      }

    </style>
  </head>


<body>
  <h1> Receipt </h1>

    <table name="receipttable">
      <tr>
        <th>Your Name:</th>
        <td><?php print $name; ?></td>
      </tr>
      <tr>
        <th>Pay with:</th>
        <td><?php print $payment;?></td>
      </tr>
      <tr>
        <th>Date:</th>
        <td><?php print(date("Y-m-d H:i:s"));?> </td>
      </tr>
      <tr>
        <th>Order: </th>
        <td>
          <?php
            if($apple!=0){
              print $apple;
              print(" <span>&#215;</span> apple <br>");
            }
            if($banana!=0){
              print $banana;
              print(" <span>&#215;</span> banana <br>");
            }
            if($orange!=0){
              print $orange;
              print(" <span>&#215;</span> orange <br>");
            }
         ?>
      </td>
      </tr>
      <tr>
        <th>Total Cost: </th>
        <td><?php print("$");print $totalCost;?></td>
      </tr>
    </table>

    <p align='center'>Thank you for ordering at The Fruit Shop. We hope to see you soon!</p>
</body>
</html>
