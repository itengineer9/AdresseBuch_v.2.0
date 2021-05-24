<?php

/**
 * Description of Database
 *
 * @author Administrator
 */
class Database {
   
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect('localhost', 'root', '', 'adressebuch')
         or die ("Die Verbindung zur Datenbank war nicht erfolgreich !");
    }
    
    public function einfugen($arry) {
        
       try {
            $anweisung = "INSERT INTO `contacts` (`vorname`, `nachname`, `email`, `phone`, `strasse`, `hausnummer`, `ort`, `plz`) VALUES "
                . "( ?, ?, ?, ?, ?, ?, ?, ?)";

            $statment =mysqli_prepare($this->conn,$anweisung);

            mysqli_stmt_bind_param($statment, 'sssssssi', $arry[0], 
                    $arry[1], $arry[2], $arry[3], $arry[4], $arry[5], $arry[6], $arry[7]);

            if (mysqli_stmt_execute($statment)) {
              echo '<div class="alert alert-success">
                        Der Datensatz wurde erfolgreich eingefügt  
                    </div>';
            }else{
              echo '<div class="alert alert-danger">
                        Keine Datensätze eingefügt wurden  
                    </div>';
            }
            $this->close();

        } catch (Exception $exc) {
              echo $exc->getTraceAsString();
        }
        
    }
    /**
     * change one row of dat in save them in database
     * @param type $arry the values of user inputs
     * @param type $id change the data that have id =$id
     */
    public function aendern($arry, $id ) {
        
        try {
            
            $query =
                 "update `contacts` set
                    vorname = '$arry[0]',
                    nachname = '$arry[1]',
                    email = '$arry[2]',
                    phone = '$arry[3]',
                    strasse = '$arry[4]',
                    hausnummer = '$arry[5]',
                    ort = '$arry[6]',
                    plz = '$arry[7]'
                    where id = '$id' ";
         
                $this->execQuery($query);
                $anzahl = mysqli_affected_rows($this->conn);      

              if ($anzahl > 0) {
                    echo '<div class="alert alert-success">
                         Der Datensatz wurde erfolgreich geändert  
                        </div>';       
               } else{
                  echo '<div class="alert alert-danger">
                            Keine Datensätze geändert wurden  
                        </div>';
               }
              $this->close();
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        
    }
    /**
     * 
     * @param type $id
     * @return string
     */
    public function loeschen($id) {
        $query = "DELETE FROM contacts WHERE id =$id";  
        if($this->execQuery($query)){
            return "success"; 
        }else{
            return "fail";
        }        
        $this->close();
    }
    
    public function sorting() {
        $selected = 'vorname';
        if(isset($_POST['sort1'])){
            $selected = $_POST['sort'];
          }
       return "SELECT * FROM contacts ORDER BY " .$selected;
       }     
   
    public function execQuery($query) {
        return  $result= mysqli_query($this->conn, $query);           
    }
    
    public function close() {
        mysqli_close($this->conn);
    }

    
    public function validateInputs($input) {
        $input  = trim($input);
        $input  = stripcslashes($input);
        $input  = htmlspecialchars($input);
        $input  = strip_tags($input);
        $input  = mysqli_real_escape_string($this->conn, $input);
        
        return $input;
    }
    
}
