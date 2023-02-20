<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>
    <link rel="stylesheet" href="css/contactUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <?php 
    include "header.php";
    
?>

    <main>
    <div class="kufiza">
        
        <div class="center">
            <h1>Kontakti</h1>
            <form class="contact_form" action="new/kontakt.php" method="post" name="form" onsubmit="return validated()">
              <div class="txt_field">
                <input autocomplete="off" type="text" name="emri" id="emri" required>
                <span></span>
                <label for="emri">Emri</label>
              </div>
              <div class="txt_field">
                <input autocomplete="off" type="text" name="mbiemri" id="mbiemri" required>
                <span></span>
                <label for="mbiemri">Mbiemri</label>
              </div>
                    
              <textarea id="subject" name="subject" placeholder="Shkruani mesazhin.." rows="10" cols="70"></textarea>
              <input type="submit" name="submit-btn" value="SEND">
              </div>
            </form>
          </div>
          </div>
    </main>
   <?php 
    include "footer.php";  
?>
   <!-- <script src="/javascript/contactform.js"></script> -->
</body>
</html>