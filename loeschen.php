<?php  
   include 'classes/Database.php';
   $db = new Database();
   
   if(isset($_POST['deleteData'])){
       $id = $_POST['idd'];
   }
  
   if($db->loeschen($id)== 'success'){
      echo '<script> alert( "Datensatz wurde gelöscht"); '
             . 'window.location = "index.php"</script>';
    }  else{
        echo '<script> alert( "Datensatz wurde NICHT gelöscht!")'
          . 'window.location = "index.php"</script>'; 
    }
