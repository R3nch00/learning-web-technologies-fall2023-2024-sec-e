<?php

require_once("../../model/bookingfunctiondb.php");
function displayAllPost($row) {
    echo "<div style='flex: 1 0 25%; max-width: 300px; margin: 10px;'>";
    echo "<fieldset>";
    echo "<legend> <h1>Post</h1></legend>";
    echo "House Number: ".$row['House_Number']."<br>";
    echo "Number of Rooms: ".$row['Number_of_Rooms']."<br>";
    echo  "Preferable gender: ".$row['Prafareble_Gender']."<br>";
    echo "Rent: ".$row['Rent']."<br>";
    echo "Address: ".$row['Address']."<br>";
    echo "Booking Status: ".$row['Booking_Status']."<br>";
    echo "Date of post: ".$row['Date_of_Post']."<br>";
    echo "Owner: ".$row['name']."<br>";
    echo "</fieldset>";
    echo "</div>";
}

function displayUserpost($row){
    echo "<div style='flex: 1 0 25%; max-width: 300px; margin: 10px;'>";
    echo "<fieldset>";
    echo "<legend> <h1>My Post</h1></legend>";
    echo "House Number: ".$row['House_Number']."<br>";
    echo "Number of Rooms: ".$row['Number_of_Rooms']."<br>";
    echo  "Preferable gender: ".$row['Prafareble_Gender']."<br>";
    echo "Rent: ".$row['Rent']."<br>";
    echo "Address: ".$row['Address']."<br>";
    echo "Booking Status: ".$row['Booking_Status']."<br>";
    echo "Date of post: ".$row['Date_of_Post']."<br>";
    displayEditDeleteLinks($row);
    echo "</fieldset>";
    echo "</div>";

}
function displayEditDeleteLinks($row) {
    if($row['Booking_Status'] == "empty" && $row['username'] == $_SESSION['afterlogin']['username']) {
        echo "<br>";
        echo "<a href='../../view/host/editpost.php?post_id=".$row['post_id']."'>Edit Post</a>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='../../controller/postcheck/deletepost.php?post_id=".$row['post_id']."'>Delete Post</a> <br>";
    }
    else{
        echo "<br>";
        echo "<br>";
    }
}
function information_of_booking($row){
    if($row['Booking_Status'] != "empty" && $row['username'] == $_SESSION['afterlogin']['username']) {
    $result=bookinginformation_bypostid($row['post_id']);
    if($result!=false){
        while ($row2 = mysqli_fetch_assoc($result)) {
            echo "Booked by: ".$row2['name']."<br>";
            echo "Phone: ".$row2['phone']."<br>";
            echo "Email: ".$row2["email"]."<br>";
            echo "Booking Status: ".$row2['booking_approval']."<br>";
            echo "Date of booking: ".$row2['date_of_booking']."<br>";
        }
    }
}
}
function details_of_booked_house($row){
    if($row['Booking_Status'] != "empty" && $row['username'] == $_SESSION['afterlogin']['username']) {
    echo "<div style='flex: 1 0 25%; max-width: 300px; margin: 10px;'>";
    echo "<fieldset>";
    echo "<legend> <h2>Detail Of Booked House</h2></legend>";
    echo "House Number: ".$row['House_Number']."<br>";
    echo "Number of Rooms: ".$row['Number_of_Rooms']."<br>";
    echo  "Preferable gender: ".$row['Prafareble_Gender']."<br>";
    echo "Rent: ".$row['Rent']."<br>";
    echo "Address: ".$row['Address']."<br>";
    echo "Booking Status: ".$row['Booking_Status']."<br>";
    echo "Date of post: ".$row['Date_of_Post']."<br>";
        $result=bookinginformation_bypostid($row['post_id']);
        if($result!=false){
            while ($row2 = mysqli_fetch_assoc($result)) {
                echo "Booking Status: ".$row2['booking_approval']."<br>";
                echo "Date of booking: ".$row2['date_of_booking']."<br>";
            }
        }
    echo "</fieldset>";
    echo "</div>";
    }
}
function display_details_of_booked_housed($data) {
    if($data == false){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";

        while ($row = mysqli_fetch_assoc($data)) {
            details_of_booked_house($row);
          
        }

        echo "</div>";
    }
}
function displayAllPosts($data) {
    if($data == false){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";

        while ($row = mysqli_fetch_assoc($data)) {
            displayAllPost($row);
          
        }

        echo "</div>";
    }
}

function displayUserposts($data) {
    if($data == false){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";

        while ($row = mysqli_fetch_assoc($data)) {
            displayUserpost($row);
          
        }

        echo "</div>";
    }
}
function booking_detail_forGuest($row){
    if($row['Booking_Status'] != "empty" && $row['username'] == $_SESSION['afterlogin']['username'] &&  $row['booking_approval']=="approved") {
        echo "<div style='flex: 1 0 25%; max-width: 300px; margin: 10px;'>";
        echo "<fieldset>";
        echo "<legend> <h2>Detail Of Booked House</h2></legend>";
        echo "House Number: ".$row['House_Number']."<br>";
        echo "Number of Rooms: ".$row['Number_of_Rooms']."<br>";
        echo  "Preferable gender: ".$row['Prafareble_Gender']."<br>";
        echo "Rent: ".$row['Rent']."<br>";
        echo "Address: ".$row['Address']."<br>";
        echo "Booking Status: ".$row['Booking_Status']."<br>";
        echo "Date of post: ".$row['Date_of_Post']."<br>";
        $result=bookinginformation_bypostid($row['post_id']);
          if($result!=false){
        while ($row2 = mysqli_fetch_assoc($result)) {
            echo "Booked by: ".$row2['name']."<br>";
            echo "Booking: "."<b>".$row2['booking_approval']."</b>"."<br>";
            echo "Date of booking: ".$row2['date_of_booking']."<br>";
        }
    }

        displaychekinlink($row);
    
        echo "</fieldset>";
        echo "</div>";
        }
        

}
function displaychekinlink($row){
    $result=bookinginformation_bypostid($row['post_id']);
    if($result!=false){
        while ($row2 = mysqli_fetch_assoc($result)) {
            if($row2['booking_approval']=="approved"){
                echo "<a href='../../view/guest/bookingcheckin.php?booking_id=".$row['booking_id']."'>Check In</a>";
            }
        }
    }

}
function displaybookingPostsForGuest($data) {
    if($data == false){
        echo "<h1>No post found</h1>";
    }
     else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";

        while ($row = mysqli_fetch_assoc($data)) {
         if( $row['booking_approval']=="approved"){
            
            booking_detail_forGuest($row);
            
         }
         else{
                     echo "<h1>No bookin avaiable </h1>";
                     break;
                 }
      
          
          
        }

        echo "</div>";
    }
}


function booking_detail_foradmin($row){
    if($row['Booking_Status'] != "empty") {
        echo "<div style='flex: 1 0 25%; max-width: 300px; margin: 10px;'>";
        echo "<fieldset>";
        echo "<legend> <h2>Detail Of Booked House</h2></legend>";
        echo "House Number: ".$row['House_Number']."<br>";
        echo "Number of Rooms: ".$row['Number_of_Rooms']."<br>";
        echo  "Preferable gender: ".$row['Prafareble_Gender']."<br>";
        echo "Rent: ".$row['Rent']."<br>";
        echo "Address: ".$row['Address']."<br>";
        echo "Booking Status: ".$row['Booking_Status']."<br>";
        echo "Date of post: ".$row['Date_of_Post']."<br>";
       
            echo "Booked by: ".$row['name']."<br>";
            echo "Phone: ".$row['phone']."<br>";
            echo "Email: ".$row["email"]."<br>";
            echo "username: ".$row["username"]."<br>";
            echo "Booking Status: ".$row['booking_approval']."<br>";
            echo "Date of booking: ".$row['date_of_booking']."<br>";
     
    if($row['booking_approval']=="requested"){
        echo "<a href='../../controller/bookinigcheck/bookingapprovalcheck.php?post_id=".$row['post_id']."'>Approve</a>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='../../controller/bookinigcheck/bookingreject.php?post_id=".$row['post_id']."'>Reject</a> <br>";
    }
        echo "</fieldset>";
        echo "</div>";
        }

}
function displaybookingPostsForadmin($data) {
    if($data == false){
        echo "<h1>No post found</h1>";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap;'>";

        while ($row = mysqli_fetch_assoc($data)) {
            booking_detail_foradmin($row);
          
        }

        echo "</div>";
    }
}




?>