   <?php 
        require 'header.php'; 
        include 'classes/Database.php';
        $db = new Database();
        
        $vornameErr = $emailErr = $strasseErr = $hausnummerErr = "";
        $nachnameErr = $phoneErr = $plzErr = $ortErr = "";
        
        include 'validation.php';
    ?>

    <h2>Einfügen Datensatz </h2>

    <div class="container">
    <form action="#" method="POST" >
        <p><span class="error">* Erforderliche Felder</span></p>
        <div class="form-group">
            <label for="vorname" >Vorname * <span class="error"> <?php echo $vornameErr;?></span></label>
           <input  type="text" class="form-control" name="vorname"autocomplete="vorname" autofocus >
      </div>
        
        <div class="form-group">
            <label for="nachname">Nachname *<span class="error"> <?php echo $nachnameErr;?></span></label>
           <input type="text" class="form-control" name="nachname" autocomplete="nachname"  >
        </div>
        
        <div class="form-group">
            <label for="email">E-mail *<span class="error"> <?php echo $emailErr;?></span></label>
            <input  type="email" class="form-control" name="email"  autocomplete="email" >
        </div>
        
        <div class="form-group">
            <label for="phone">Phone *<span class="error"> <?php echo $phoneErr;?></span></label>
            <input  type="text" class="form-control" name="phone"  autocomplete="phone" >
        </div>
               
        <div class="form-group">
            <label for="strasse">Strasse *<span class="error"> <?php echo $strasseErr;?></span></label>
            <input type="text" class="form-control" name="strasse"  autocomplete="strasse" >
        </div>
               
        <div class="form-group">
            <label for="hausnummer">Hausnummer *<span class="error"> <?php echo $hausnummerErr;?></span></label>
            <input  type="text" class="form-control" name="hausnummer"  autocomplete="hausnummer" >
        </div>
               
        <div class="form-group">
            <label for="ort">Ort *<span class="error"> <?php echo $ortErr;?></span></label>
            <input  type="text" class="form-control" name="ort"  autocomplete="ort" >          
        </div>
        
        <div class="form-group">
            <label for="plz">PLZ *<span class="error"> <?php echo $plzErr;?></span></label>
            <input type="text" class="form-control" name="plz"  autocomplete="plz" >
        </div>
        
        <div class="form-group">
        <button name="sender">Einfügen</button>
        <button><a href="index.php">Home</a></button>

        </div>
    </form>
  </div>

    <?php
        if(isset($_POST["sender"])){
            if($keinFehlr){
                $db->einfugen($arry);
            }else{
                echo '<div class="alert alert-danger">
                    Keine Datensätze eingefügt wurden  
                </div>';
            }            
        }
         require 'footer.php';

