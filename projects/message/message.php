<?php
  // Get the message from the POST request
  $message = $_POST['message']; 

  // Get the current date and time
  $timestamp = date("Y-m-d H:i:s"); 

  // Format the message with timestamp
  $formattedMessage = "[{$timestamp}] {$message}\n";

  $splitter = "-------------------------------------\n";

  // Specify the file path where you want to save the messages
  $filePath = 'messages.txt'; // You can change the filename if needed

  // Append the formatted message to the file
  if (file_put_contents($filePath, $formattedMessage, FILE_APPEND | LOCK_EX) !== false) {
    echo "Message received and saved!"; 
} else {
    // If there's an error saving, send an error response
    http_response_code(500); // Set a 500 Internal Server Error status
    echo "Error saving message: " . error_get_last()['message']; 
}
?>
