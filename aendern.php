  <?php 
    require 'header.php';  
    include 'classes/Database.php';
    $db = new Database();   
    $id =  $_GET["id"];
    $vornameErr = $emailErr = $strasseErr = $hausnummerErr = "";
    $nachnameErr = $phoneErr = $plzErr = $ortErr = "";
    
    $query = "SELECT * FROM contacts WHERE id = '$id'";
    $result = $db->execQuery($query);
    $data = mysqli_fetch_assoc($result);
   
    include 'validation.php';

   ?>

 <h2> Ändern einen Datensatz </h2>
<div class="container">
   
    <form action="#" method="post">
        
        <p><span class="error">* Erforderliche Felder</span></p>
        <div class="form-group">
            <label for="vorname" >Vorname * <span class="error"> <?php echo $vornameErr;?></span></label>
           <input  type="text" class="form-control" name="vorname" value='<?php echo $data["vorname"]; ?>' autofocus >
        </div>
        
        <div class="form-group">
            <label for="nachname">Nachname *<span class="error"> <?php echo $nachnameErr;?></span></label>
           <input type="text" class="form-control" name="nachname" value='<?php echo $data["nachname"]; ?>' >
        </div>
        
        <div class="form-group">
            <label for="email">E-mail *<span class="error"> <?php echo $emailErr;?></span></label>
            <input  type="email" class="form-control" name="email"  value='<?php echo $data["email"]; ?>' >
        </div>
        
        <div class="form-group">
            <label for="phone">Phone *<span class="error"> <?php echo $phoneErr;?></span></label>
            <input  type="text" class="form-control" name="phone"  value='<?php echo $data["phone"]; ?>'>
        </div>
               
        <div class="form-group">
            <label for="strasse">Strasse *<span class="error"> <?php echo $strasseErr;?></span></label>
            <input type="text" class="form-control" name="strasse"  value='<?php echo $data["strasse"]; ?>' >
        </div>
               
        <div class="form-group">
            <label for="hausnummer">Hausnummer *<span class="error"> <?php echo $hausnummerErr;?></span></label>
            <input  type="text" class="form-control" name="hausnummer"  value='<?php echo $data["hausnummer"]; ?>'>
        </div>
               
        <div class="form-group">
            <label for="ort">Ort *<span class="error"> <?php echo $ortErr;?></span></label>
            <input  type="text" class="form-control" name="ort"  value='<?php echo $data["ort"]; ?>' >          
        </div>
        
        <div class="form-group">
            <label for="plz">PLZ *<span class="error"> <?php echo $plzErr;?></span></label>
            <input type="text" class="form-control" name="plz"  value='<?php echo $data["plz"]; ?>' >
        </div>
        
        <div class="form-group">
            <button name='update' >Ändern </button>
            <button><a href="index.php">Home</a></button>

        </div>
    </form>
  </div>


<?php 
    
     if(isset($_POST["update"])){
            if($keinFehlr){
                $db->aendern($arry, $id );
            }else{
                echo '<div class="alert alert-danger">
                    Keine Datensätze geändert wurden  
                </div>';
            }            
        }
 
      require 'footer.php';
