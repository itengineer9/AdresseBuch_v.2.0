<?php  
   include 'classes/Database.php';
   $db = new Database();
   
  $id = isset($_GET["id"])?$_GET["id"]:0;
 
  //$db->loeschen($id);

  if($db->loeschen($id)== 'success'){
      echo '<script> alert( "Datensatz wurde gelöscht"); '
             . 'window.location = "index.php"</script>';
  }  else{
           echo '<script> alert( "Datensatz wurde NICHT gelöscht!")'
                . 'window.location = "index.php"</script>'; 
  }
