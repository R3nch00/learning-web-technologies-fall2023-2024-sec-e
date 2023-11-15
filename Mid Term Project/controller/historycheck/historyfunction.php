<?php  
require_once("../../model/historydb.php");
function display_history($row) {
    echo "<div style='flex: 1 0 25%; max-width: 23%; margin: 10px;'>";
    echo "<fieldset>";
    echo "<legend> <h3>Show booking Info</h3></legend>";
    echo "House Number: ".$row['housenumber']."<br>";
    echo "Number of Rooms: ".$row['number_of_room']."<br>";
    echo "Rent: ".$row['rent']."<br>";
    echo "House Address: ".$row['address']."<br>";
    echo "Owner: ".$row['name']."<br>";
    echo "email: ".$row['email']."<br>";
    echo "Phone: ".$row['phone']."<br>";
    echo "Date of checkin: ".$row['checkin_date']."<br>";
    echo "Date of chekout: ".$row['checkout_date']."<br>";
    if($row['guest_review']==""){
        echo "<a href='../../view/guest/guestreview.php?history_id=" . $row['ID'] . "'> Review now</a><br>";
    
         }
         if($row['host_review']!=""){
            echo "Review by Host: ".$row['host_review']."<br>";
         }
         if($row['guest_review']!=""){
            echo "Review by You : ".$row['guest_review']."<br>";
            echo "<a href='../../view/guest/guestreview.php?history_id=" . $row['ID'] . "'> Edit review</a><br>";
         }
    echo "</fieldset>";
    echo "</div>";
}

function display_history_for_review($row) {
    echo "<div style='flex: 1 0 25%; max-width: 23%; margin: 10px;'>";
    echo "<fieldset>";
    echo "<legend> <h3>Show booking Info</h3></legend>";
    echo "House Number: ".$row['housenumber']."<br>";
    echo "Number of Rooms: ".$row['number_of_room']."<br>";
    echo "Rent: ".$row['rent']."<br>";
    echo "House Address: ".$row['address']."<br>";
    echo "Owner: ".$row['name']."<br>";
    echo "email: ".$row['email']."<br>";
    echo "Phone: ".$row['phone']."<br>";
    echo "Date of checkin: ".$row['checkin_date']."<br>";
    echo "Date of chekout: ".$row['checkout_date']."<br>";
    if($row['guest_review']==""){
      echo "
      <form action='../../controller/historycheck/guestreviewcheck.php' method='post'>
      <input type='hidden' name='history_id' value='".$row['ID']."'>
         <b>Review:</b>
        <input type='text' name='guest_review' placeholder='write your review'>
        <input type='submit' name='submit' value='submit'>
        </form>";
       
    
         }
    echo "</fieldset>";
    echo "</div>";
}

function showinformation_history_review_guest($ID){
    $data=showhistory_guest_historyid($ID);
    if($data == false ){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";
        while ($row = mysqli_fetch_assoc($data)) {
           
            display_history_for_review($row);
            
        }
        echo "</div>";
    }

}

function showinformation_history($username){
    $data=showhistory_guest($username);
    if($data == false ){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";
        while ($row = mysqli_fetch_assoc($data)) {
           
            display_history($row);
            
        }
        echo "</div>";
    }

}







function showinformation__review_host($ID){
    $data=showhistory_host_id($ID);
    if($data == false ){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";
        while ($row = mysqli_fetch_assoc($data)) {
           
            display_review_host($row);
            
        }
        echo "</div>";
    }

}





function display_history_host($row) {
    echo "<div style='flex: 1 0 25%; max-width: 23%; margin: 10px;'>";
    echo "<fieldset>";
    echo "<legend> <h3>Show booking Info</h3></legend>";
    echo "House Number: ".$row['housenumber']."<br>";
    echo "Number of Rooms: ".$row['number_of_room']."<br>";
    echo "Rent: ".$row['rent']."<br>";
    echo "House Address: ".$row['address']."<br>";
    echo "Guset Name : ".$row['name']."<br>";
    echo "email: ".$row['email']."<br>";
    echo "Phone: ".$row['phone']."<br>";
    echo "Date of checkin: ".$row['checkin_date']."<br>";
    echo "Date of chekout: ".$row['checkout_date']."<br>";
    if($row['host_review']==""){
        echo "<a href='../../view/host/hostreview.php?history_id=" . $row['ID'] . "'> Review now</a><br>";
    
         }

         if($row['guest_review']!=""){
            echo "Review by Guest: ".$row['guest_review']."<br>";
         }
         if($row['host_review']!="" ){
            echo "Review by You : ".$row['host_review']."<br>";
            
            echo "<a href='../../view/host/hostreview.php?history_id=" . $row['ID'] . "'> Edit review</a><br>";
         }
    echo "</fieldset>";
    echo "</div>";
}

function display_review_host($row) {
    echo "<div style='flex: 1 0 25%; max-width: 23%; margin: 10px;'>";
    echo "<fieldset>";
    echo "<legend> <h3>Show booking Info</h3></legend>";
    echo "House Number: ".$row['housenumber']."<br>";
    echo "Number of Rooms: ".$row['number_of_room']."<br>";
    echo "Rent: ".$row['rent']."<br>";
    echo "House Address: ".$row['address']."<br>";
    echo "Guset Name : ".$row['name']."<br>";
    echo "email: ".$row['email']."<br>";
    echo "Phone: ".$row['phone']."<br>";
    echo "Date of checkin: ".$row['checkin_date']."<br>";
    echo "Date of chekout: ".$row['checkout_date']."<br>";
    if($row['host_review']==""){
        echo "
        <form action='../../controller/historycheck/hostreviewcheck.php' method='post'>
        <input type='hidden' name='history_id' value='".$row['ID']."'>
           <b>Review:</b>
          <input type='text' name='host_review' placeholder='write your review'>
          <input type='submit' name='submit' value='submit'>
          </form>";
         
      
           }
    echo "</fieldset>";
    echo "</div>";
}




function showinformation_history_review_host($username){
    $data=showhistory_host_historyid($username);
    if($data == false ){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";
        while ($row = mysqli_fetch_assoc($data)) {
           
            display_history_host($row);
            
        }
        echo "</div>";
    }

}





?>