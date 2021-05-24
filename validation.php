<?php

        $vorname = $email = $strasse = $hausnummer='';
        $nachname = $phone = $plz = $ort = '';
        $keinFehlr = true;
        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

         if (empty($_POST["vorname"])) {
            $vornameErr = "Vorname Feld ist erforderlich";
            $keinFehlr = false;
          } else {
            $vorname= $db->validateInputs($_POST["vorname"]);
            
            if(!preg_match("/^[A-ZÖÄÜa-zäöüß]*$/i",$vorname)){
               $vornameErr = "Nur Buchstaben und Leerzeichen erlaubt!";
               $keinFehlr = false;
            }
          }
          
        if (empty($_POST["nachname"])) {
            $nachnameErr = "Nachname Feld ist erforderlich";
            $keinFehlr = false;
          } else {
            $nachname= $db->validateInputs($_POST["nachname"]);
            
            if(!preg_match("/^[A-ZÖÄÜa-zäöüß]*$/i",$nachname)){
               $vornameErr = "Nur Buchstaben und Leerzeichen erlaubt!";
               $keinFehlr = false;
            }
          }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email Fel ist erforderlich";
            $keinFehlr = false;
          } else {
            $email= $db->validateInputs($_POST["email"]);
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
               $emailErr = "Nicht richtige Email-Adresse!"; 
               $keinFehlr = false;
            }            
          }
          
        if (empty($_POST["phone"])) {
            $phoneErr = "Phone Feld ist erforderlich";
            $keinFehlr = false;
          } else {
            $phone= $db->validateInputs($_POST["phone"]);            
            if(!preg_match("/^(\d|\+|\-|\.|\,|\/|\(|\))*$/",$phone)){
               $phoneErr = "Nur Zifern erlaubt!";
               $keinFehlr = false;
            }
          }
          
        if (empty($_POST["hausnummer"])) {
            $hausnummerErr = "Hausnummer Feld ist erforderlich";
            $keinFehlr = false;
          } else {
            $hausnummer= $db->validateInputs($_POST["hausnummer"]);

            if(!preg_match("/^\d{1,}+[a-zA-Z]?$/",$hausnummer)){
               $hausnummerErr = "Nur Nummer und Buchstaben erlaubt!";
               $keinFehlr = false;
            }
          }
          
        if (empty($_POST["strasse"])) {
            $strasseErr = "Strasse Feld ist erforderlich";
            $keinFehlr = false;
          } else {
            $strasse= $db->validateInputs($_POST["strasse"]);

            if(!preg_match("/(([a-zäöüßA-zÄÖÜ]+)[\w\.\- ])(\s+)*$/i",$strasse)){
               $strasseErr = "Nur Buchstaben und Leerzeichen erlaubt!";
               $keinFehlr = false;
               
            }
          }
          
        if (empty($_POST["ort"])) {
            $ortErr = "Ort Feld ist erforderlich";
            $keinFehlr = false;
          } else {
            $ort= $db->validateInputs($_POST["ort"]);

            if(!preg_match("/(([a-zäöüßA-zÄÖÜ]+)[\w\.\- ])(\s+)*$/i",$ort)){
               $ortErr = "Nur Buchstaben und Leerzeichen erlaubt!";
               $keinFehlr = false;
            }
          }
          
         if (empty($_POST["plz"])) {
            $plzErr = "plz Feld ist erforderlich";
            $keinFehlr = false;
          } else {
            $plz= $db->validateInputs($_POST["plz"]);

            if(!preg_match("/^\d{5}$/",$plz)){
               $plzErr = "Nur 5-Ziffern ohne Leerzeichen erlaubt!";
               $keinFehlr = false;
            }
          }
         
        $arry = [$vorname, $nachname, $email, $phone, $strasse, $hausnummer, $ort, $plz];
                    
 }
 
