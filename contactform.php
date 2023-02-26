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
    include "kontakt.php";
    $emptyErr=$emri=$mbiemri=$mesazhi=$emvalidateErr="";

    if (isset($_POST['submit-btn'])) {
        $kontakt = new Kontakti($_POST);
        $emri=$kontakt->getEmri();
        $mbiemri=$kontakt->getMbiemri();
        $mesazhi=$kontakt->getMesazhi();
        $emptyFields=$kontakt->emptyFields();
        $emValidate=$kontakt->validateEmriMbiemri();
        if($emptyFields){
            $emptyErr="Ju lutem plotesoni te gjitha fushat!";
        }else if(!$emValidate){
          $emvalidateErr="Emri dhe mbiemri jovalid!";
        }
        else{
        $kontakt->insertData();
        return header("Location:contactform.php");
        }
    }
    
?>

    <main>
    <div class="kufiza">
        
        <div class="center">
        <?php if (!empty($emptyErr) || !empty($emvalidateErr)): ?>
                <div class="errors">
                    <span><?php echo $emptyErr;?></span>
                    <span><?php echo $emvalidateErr;?></span>
                </div>
            <?php endif; ?>
            <h1>Kontakti</h1>
            <form class="contact_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form" onsubmit="return validated()">
              <div class="txt_field">
                <input autocomplete="off" type="text" name="emri" id="emri" required required value="<?php echo $emri;?>">
                <span></span>
                <label for="emri">Emri</label>
              </div>
              <div class="txt_field">
                <input autocomplete="off" type="text" name="mbiemri" id="mbiemri" required required value="<?php echo $mbiemri;?>">
                <span></span>
                <label for="mbiemri">Mbiemri</label>
              </div>
                    
              <textarea id="subject" name="subject" placeholder="Shkruani mesazhin..." rows="10" cols="70" required value="<?php echo $mesazhi;?>"></textarea>
              <input type="submit" name="submit-btn" value="SEND">
              </div>
            </form>
          </div>
          </div>
    </main>
   <?php 
    include "footer.php";  
?>
   <script src="/javascript/contactform.js"></script>
</body>
</html>