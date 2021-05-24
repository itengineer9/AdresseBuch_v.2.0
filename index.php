 
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
<form class="form" action="<?php echo htmlspecialchars($_SESSION['PHP_SELF']) ?>" method="POST">

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
         <td ><?php echo $row['vorname'].' '. $row['nachname'];?></td>
         <td><?php echo $row['email'];?></td>
         <td><?php echo $row['phone'];?></td>
         <td><?php echo $row['strasse'];?></td>
         <td><?php echo $row['hausnummer'];?></td>
         <td><?php echo $row['ort'];?></td>
         <td><?php echo $row['plz'];?></td>

         <td><a href="aendern.php?id=<?php echo $row['id'];?>" 
                data-placement = "bottom" title="Ändern" data-toggle="tooltip">
                 <i class="fa fa-edit" aria-hidden="true"></i></a>
         </td>                              


          <td><a href="loeschen.php?id=<?php echo $row['id'];?>" 
                data-placement = "bottom" title="Löschen" data-toggle="tooltip">
                 <i class="fa fa-trash trash" ></i></a>
          </td>
         
       </tr>
        
           
       <?php  
         }
        $db->close();
        ?>
       
     </table>
</form>

 <?php
 
 require 'footer.php';
        
