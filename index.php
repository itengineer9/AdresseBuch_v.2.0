 
<?php 
    require 'header.php';
    include 'classes/Database.php';
    $db = new Database();        
?>

<h1>AdresseBuch PHP Aufgabe</h1>

<div class="container1">

    <div class="operation">
       <button><a href="einfuegen.php">Neu Kontakt</a></button>
    </div>
    
    <form class="form" action="#" method="POST">
        <div class="operation">
            <h4>Sorting nach:</h4>
            <select name="sort" id="sort">
                <option value="vorname">vorname</option>
                <option value="nachname">nachname</option>
                <option value="email">email</option>
                <option value="strasse">strasse</option>
                <option value="ort">ort</option>
            </select>
            <button onclick="$db->sorting()" name="sort1">Sort</button>
        </div>
    </form>
    
 </div>

<!-- Disply Kontakte in einer Tabelle -->
<form class="form" action="#" method="POST">

<table class="tbl" border="1">
    
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Staße</th>
        <th>Hausnummer</th>
        <th>Ort</th>
        <th>PLZ</th>
        <th>Ändern</th>
        <th>Löschen</th>
    </tr>


    <?php
        try {
            $query = $db->sorting();
            $result = $db->execQuery($query);       

        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
        while ($row = mysqli_fetch_assoc($result)) {
            $idw = $row ['id'];
   
    ?>
     <tr>   
         <td ><?= $row['vorname'].' '. $row['nachname'];?></td>
         <td><?= $row['email'];?></td>
         <td><?= $row['phone'];?></td>
         <td><?= $row['strasse'];?></td>
         <td><?= $row['hausnummer'];?></td>
         <td><?= $row['ort'];?></td>
         <td><?= $row['plz'];?></td>

         <td><a href="aendern.php?id=<?= $row['id'];?>" 
                data-placement = "bottom" title="Ändern" data-toggle="tooltip">
                 <i class="fa fa-edit" aria-hidden="true"></i></a>
         </td>                              
                             
          
         <td><button  name="submit" class="delet"
                 data-id="<?= $row['id'];?>"
                 >DEL</button>
          </td>
         
       </tr>
        
           
       <?php  
         }
        $db->close();
        ?>
       
     </table>
</form>



 <?php
    include 'modal.php';
    require 'footer.php';
 ?>

<script>
    $('.delet').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        $('#idd').val(id);  
        $('#deleteModal').modal('show');
    });
</script>