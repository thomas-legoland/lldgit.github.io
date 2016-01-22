        <?php
$conf=array(
"education"=>array(
  "config" =>array(
    "headline" => "Anmeldung Schulen und Kindergärten",
            "showinoverview" => array("besuchsdatum","bildungseinrichtung_anmelder","ort"),
    "workflow" => array(
    "1" => array("auto","Warten auf Verarbeitung"),
    "2" => array("sendmail","Versandt an Bucher","formfield","email_adresse"),
    "3" => array("sendmaildefined","Versandt an MECC","gruppen@legoland.de"),
    "4" => array("sendmaildefined","Versandt an Admission","gruppenformulare@legoland.de"),
    "5" => array("waitforentry","Warte auf Verarbeitung MECC",
        array("easyinput",array("Buchungsnummer","Kommentar"))
        
        ),
    "6" => array("entrysucces","Warten auf Bestätigungsversand an Bucher"),
    "7" => array("sendmail","Bestätigung versandt an Bucher","formfield","email_adresse"),
    "99999" => array("end","Prozess abgeschlossen"),
    )
  ),
  "steps"=> array(
  
    "1"=> array(
      "headline" => "Bildungseinrichtung",
      "fields" => array(
        "1" => array(
          "mode" => "dropdown",
          "name" => "bildungseinrichtung",
          "headline" => "Bildungseinrichtung",
          "p" => "Bitte wählen Sie Ihre Bildungseinrichtung, damit wir die folgenden Schritte genau auf Ihre Bedürfnisse anpassen können.",
          "values" => array("Schule","Kindergarten"),
          "rules" => "required"
          ),
                  "2" => array(
          "mode" => "info",
          "value" => "<strong>Preise und Anmeldung</strong><br /><br /> 
                   Ab 10 Kindern nur 8 &euro;; ab 45 Kindern nur 5 &euro;<br>
                   Freie Begleiter: Pro 10 zahlende Kinder 2 Begleitpersonen (Kindergarten) oder 1 Begleitperson (Schule)<br>
                   Weitere Begleiter: Nur 14 &euro; (Kindergarten) und 21 &euro; (Schule)<br>
                   Workshops und Wissenswelten: Kostenlos
          "),
                  "3" => array(
          "mode" => "info",
          "value" => "Kindergarten-und Schulgruppen-Tickets sind nicht gültig an Wochenenden, Feiertagen und während der Schulferien des (Bundes-) Landes der Kindergarten- oder Schulgruppe.
          <br /><br />Angabe der Personenzahl nicht verbindlich! Die finale Teilnehmerzahl kann am Tag des Besuchs an der Gruppenkasse angegeben werden. Die Tickets werden vor Ort gedruckt und abgerechnet.  <br />   <br />
          Der Gesamtbetrag ist an der Gruppenkasse vom Busfahrer/Reiseleiter für die gesamte Gruppe in bar, per EC-Karte oder mit Kreditkarte zu bezahlen. <br>   <br />
          Keine Stornogebühr bei Kartenreservierungen!
          "),
                  
                  
                          
        )
      ),

      
    "2"=> array(
    
      "headline" => "Tickets wählen",
      "fields" => array(
        "1" => array(
          "mode" => "date",
          "name" => "besuchsdatum",
          "headline" => "Gewünschtes Besuchsdatum",
          "rules" => "required|date"
          ),
        "2" => array(
          "mode" => "element_withdiscount",
          "name" => "tickets_normal",
          "need" => array("bildungseinrichtung","Kindergarten"),
          "headline" => "Anzahl Kindertickets",
          "price" => "8",
          "discount" => array("0.625","45"),
          "rules" => "required|min_numeric,1"
          ),
          "3" => array(
          "mode" => "element_withdiscount",
          "name" => "tickets_normal",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Anzahl Kindertickets",
          "price" => "8", 
          "discount" => array("0.625","45"),                  
          "rules" => "required|min_numeric,1"
          ),
        "4" => array(
          "mode" => "begleiter",
          "need" => array("bildungseinrichtung","Schule"),
          "name" => "tickets_begleiter",
          "begleiter" => array(1,10),
          "headline" => "Anzahl zusätzliche Begleitertickets",
          "p" =>"Pro 10 zahlende Kinder wir eine Begleitperson automatisch kostenfrei gebucht.<br /> <strong style='color:red;'>Bitte hier nur zusätzliche Begleitpersonen eintragen</strong>",
          "price" => "21"
          ),
        "5" => array(
          "mode" => "begleiter",
          "need" => array("bildungseinrichtung","Kindergarten"),
          "name" => "tickets_begleiter",
          "begleiter" => array(2,10),
          "p" =>"Pro 10 zahlende Kinder werden zwei Begleitpersonen automatisch kostenfrei gebucht.<br /> <strong style='color:red;'>Bitte hier nur zusätzliche Begleitpersonen eintragen</strong>",
          "headline" => "Anzahl zusätzliche Begleitertickets",
          "price" => "14"
          ),
        "6" => array(
          "mode" => "element_withoutdiscount",
          "name" => "tickets_busfahrer",
          "headline" => "Anzahl Busfahrer/Reiseleitertickets",
          "p" => "Busfahrer sind frei und erhalten einen Verzehrgutschein im Wert von 8 Euro sowie einen Kaffeegutschein.",
          "price" => "0"
          ),                      
        )
      ),      


      
    "3"=> array(
      "headline" => "Verpflegung",
      "topbox" => array(
        "p" => "Buchen Sie die Verpflegung am besten für nur 6,50 Euro gleich dazu. ",
        "maxtime" => array("besuchsdatum",7,"Leider können wir gerne Buchung mehr für das Kombiangebot entgegen nehmen, da wir dazu eine Vorlaufzeit von mindestens 7 Tagen benötigen.")
      ),
      "fields" => array(
        "1" => array(
          "mode" => "element_withoutdiscount",
          "name" => "kombi_essen",
          "headline" => "Anzahl Kinder",
          "p" => "Nicht buchbar im August 2015. Plätze nach Verfügbarkeit. ",
          "price" => "6.50"
          ),
          
        "2" => array(
          "mode" => "element_withoutdiscount",
          "name" => "kombination_essen_begleiter",
          "headline" => "Anzahl Begleiter",
          "p" => "Nicht buchbar im August 2015. Plätze nach Verfügbarkeit. ",
          "price" => "8.50"
          ), 
        "3" => array(
          "mode" => "selection",
          "name" => "kombi_essen_auswahl",
          "headline" => "Menüauswahl",
          "values" => array("Putenschnitzel m. Pommes und 0.3L Softdrink","Pasta mit Tomatensoße und 0.3L Softrink"),
          "float" => "49"  
          ),
        "4" => array(
          "mode" => "selection",
          "name" => "essenszeit",
          "headline" => "Essenszeit",
          "values" => array("11:30 Uhr","13:30 Uhr") ,
          "float" => "40"  
          ), 
          "5" => array(
          "mode" => "info",
          "value" => "Auf diese Pakete können keine Ermäßigungen gewährt werden. Platzreservierung nach Verfügbarkeit. Kostenlose Teil- und Komplettstornierungen von gebuchten Paketen müssen bis 4 Werktage vor Anreise schriftlich bei unserer Gruppenabteilung eingehen. Spätere Stornierungen oder Nichterscheinen der Gruppe werden pro Person mit 30 % des Paketpreises in Rechnung gestellt. Das Kombiangebot und das Begleitermenü sind für August 2015 nicht buchbar."
          ),         
        )
      ),
      
    "4"=> array(
      "headline" => "Workshops",
            "topbox" => array(
        "p" => "Lernen mit Spaß. LEGOLAND Deutschland hat für junge Forscher spezielle Workshops entwickelt.<br> <strong>Wir empfehlen maximal zwei Workshops/Wissenswelten auszuwählen.</strong><br>Bitte beachten: Pro Workshop können max. 30 Schüler teilnehmen.     <br>
Im nächsten Schritt unter -Was Sie uns noch mitteilen möchten …- bitte vermerken, wie viele der Schüler am Workshop teilnehmen möchten. 
",
        "maxtime" => array("besuchsdatum",3,"Leider können wir gerne Buchung mehr für die Workshops entgegen nehmen, da wir dazu eine Vorlaufzeit von mindestens 3 Tagen benötigen.")
      ),
      "fields" => array(
        "1" => array(
          "mode" => "checkbox",
          "name" => "betreute_workshops",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Betreute Workshops",
          "values" => array("Mars Mission", "Modellbauer","Bissige Zahnräder","Auto & Umwelt"),
          "p" => "Die betreuten Workshops finden im LEGO Mindstorms Center statt. Plätze und Uhrzeit nach Verfügbarkeit."
          ),
         "2" => array(
          "mode" => "checkbox",
          "name" => "betreute_workshops",
          "need" => array("bildungseinrichtung","Kindergarten"),
          "headline" => "Betreute Workshops",
          "values" => array("Modellbauer","Bissige Zahnräder"),
          "p" => "Die betreuten Workshops finden im LEGO Mindstorms Center statt. Plätze und Uhrzeit nach Verfügbarkeit."
          ),         
        "3" => array(
          "mode" => "checkbox",
          "name" => "wissenswelten",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Wissenswelten",
          "values" => array("Botanik", "Unterwasserwelt","Erdkunde/Geschichte","Deutsch, Mathe & Englisch"),
          "p" => "Start und Ziel der LEGOLAND Wissenswelten ist das LEGO Mindstorms Center. "
          ),
                    "4" => array(
          "mode" => "element_withoutdiscount",
          "name" => "freund_im_verkehr_12uhr",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Freund im Verkehr",
          "float" => "48",
          "p" =>  "Sonderpreis um 12 Uhr",
          "price" => "2",
          "rules" => "min_numeric,1"
          ),
                    "5" => array(
          "mode" => "element_withoutdiscount",
          "name" => "freund_im_verkehr_sonstige",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Freund im Verkehr",
          "float" => "48",
          "p" =>  "11 Uhr und von 13-16 Uhr",
          "price" => "3",
          "rules" => "min_numeric,1"
          ),  
                    "6" => array(
          "mode" => "info",
          "value" => "Auf diese Pakete können keine Ermäßigungen gewährt werden. Platzreservierung nach Verfügbarkeit. Kostenlose Teil- und Komplettstornierungen von gebuchten Paketen müssen bis 4 Werktage vor Anreise schriftlich bei unserer Gruppenabteilung eingehen. Spätere Stornierungen oder Nichterscheinen der Gruppe werden pro Person mit 30 % des Paketpreises in Rechnung gestellt."
          ),          
        )
      ),
    
    "5"=> array(
      "headline" => "Persönliche Informationen",
            "fields" => array(
                "1" => array(
          "mode" => "text",
          "name" => "bildungseinrichtung_anmelder",
          "headline" => "Bildungseinrichtung",
          "rules" => "required",
          ),

        "4" => array(
          "mode" => "text",
          "name" => "strasse_hausnummer",
          "headline" => "Straße, Hausnummer",
          "rules" => "required"          
          ),    
        "5" => array(
          "mode" => "text",
          "name" => "postleitzahl",
          "headline" => "Postleitzahl",
          "rules" => "required",
          "float" => "28"          
          ),    
        "6" => array(
          "mode" => "text",
          "name" => "ort",
          "headline" => "Ort",
          "rules" => "required",
          "float" => "68"          
          ),
                  "7" => array(
          "mode" => "text",
          "name" => "vorname",
          "headline" => "Vorname",
          "rules" => "required",
          "float" => "48"
          ),
        "8" => array(
          "mode" => "text",
          "name" => "nachname",
          "headline" => "Nachname",
          "rules" => "required",
          "float" => "48"          
          ),
        "9" => array(
          "mode" => "text",
          "name" => "email_adresse",
          "headline" => "E-Mail-Adresse",
          "rules" => "required|valid_email",
          "float" => "48"          
          ),  
        "10" => array(
          "mode" => "text",
          "name" => "telefonnummer",
          "headline" => "Telefonnummer",
          "rules" => "required",
          "float" => "48"          
          ),
        "11" => array(
          "mode" => "text",
          "name" => "legoland_kundennummer",
          "headline" => "LEGOLAND Kundennummer",
          "float" => "48"          
          ),  
        "12" => array(
          "mode" => "text",
          "name" => "handynummer_begleitperson",
          "headline" => "Handynummer Begleitperson",
          "float" => "48"          
          ),  
                  "13" => array(
          "mode" => "text",
          "name" => "kommentar",
          "headline" => "Was Sie uns noch mitteilen möchten..",          
          ),                                                                                                    
        )
      ),
      
      "6"=> array(
      "headline" => "confirmation",
      "fields" => array(
        "1" => array(
          "mode" => "confirmation",
          "name" => "confirmation",
          "headline" => "Bestätigung der Eingaben",
          "p" => "Bitte bestätigen Sie die Eingaben, damit die Buchung gleich durchgeführt werden kann.",
          "rules" => "required"
          )
        )
      ),
    )
  ),
  
  
  
  
  
  
"press_en"=>array(
  "config" =>array(
    "lang" => "en",
    "headline" => "Press visit",
    "showinoverview" => array("First_name","Surname","Name_editor"),
    "workflow" => array(
    "1" => array("auto","Warten auf Verarbeitung"),
    

    "2" => array("sendmail","Versandt an Journalist","formfield","Email_adress"),
        "3" => array("sendmaildefined","Versandt an Presse","press@legoland.de"),
    "4" => array("waitforentry","Warte auf Freigabe Presse",
        array("easyinput",array("Kommentar"))
        
        ),
    "5" => array("entrysucces","Warten auf Bestätigungsversand an Journalist"),
    "6" => array("sendmail","Bestätigung versandt Journalist","formfield","Email_adress"),
        "99999" => array("end","Prozess abgeschlossen"),
    )
  ),
  
  "steps"=> array(
  
    "1"=> array(
      "headline" => "Date",
      "fields" => array(
        "1" => array(
          "mode" => "date_en",
          "name" => "Date_of_visit",
          "headline" => "Date of visit",
          "rules" => "required|date"
          ),
                  "6" => array(

          "mode" => "dropdown",
          "name" => "Persons",
          "headline" => "Number of visitors",
          "values" => array("I will be coming alone for my reasearch."," I will be bringing someone with me (we can provide you with max. 2 free tickets)."),
          "rules" => "required"
          ),
          "10" => array(

          "mode" => "textfield",
          "name" => "Focus_of_report",
          "headline" => "Focus of the report, request for authorization to film, etc.",
          "rules" => "required|min_len,2"
          ),
          "7" => array(

          "mode" => "checkbox",
          "name" => "Mailing list",
          "headline" => "Mailing list",
          "values" => array("Please add me to the LEGOLAND mailing list and inform me free of charge
about news and events."),
          ),
        )
      ),
    "2"=> array(
      "headline" => "Contact information",
      "fields" => array(
                  "6000" => array(

          "mode" => "dropdown",
          "name" => "Form_of_adress",
          "headline" => " Form of adress ",
          "values" => array("Mrs","Mr"),
          "rules" => "required"
          ),
                  "1" => array(
          "mode" => "text",
          "name" => "First_name",
          "float" => "48",
          "headline" => "First name",
          "rules" => "required"          
          ),    
                            "2" => array(
          "mode" => "text",
          "name" => "Surname",
          "float" => "48",
          "headline" => "Surname",
          "rules" => "required"          
          ), 
                                      "3" => array(
          "mode" => "text",
          "name" => "Name_editor",
          "headline" => "Name of media/editor",
          "rules" => "required"          
          ), 
                            "11" => array(
          "mode" => "text",
          "name" => "Street",
          "headline" => "Street",
          "rules" => "required"          
          ),
                            "113" => array(
          "mode" => "text",
          "name" => "Post_code",
                    "float" => "30",
          "headline" => "Post code",
          "rules" => "required"          
          ),
                            "114" => array(
          "mode" => "text",
          "name" => "City",
          "headline" => "City",
                    "float" => "67",
          "rules" => "required"          
          ),   
        "7" => array(

          "mode" => "text",
          "name" => "Country",
          "headline" => "Country",
              "rules" => "required"
          ),

    
                  "21" => array(
          "mode" => "text",
          "name" => "Phone_number",
          "float" => "48",
          "headline" => "Phone number",
          "rules" => "required"          
          ),  
                            "22" => array(
          "mode" => "text",
          "name" => "Email_adress",
          "float" => "48",
          "headline" => "E-mail adress",
          "rules" => "required"          
          ),    
                
        )
      ),
    "3"=> array(
      "headline" => "Press ID",
      "fields" => array(
        "1" => array(
          "mode" => "upload",
          "name" => "Press_ID",
          "headline" => "Press ID",
          "p" => "Please upload your current press ID.",
          "values" => array("Schule","Kindergarten"), 
          "rules" => "required"
          )
        )
      ),
      "4"=> array(
      "headline" => "confirmation",
      "fields" => array(
        "1" => array(
          "mode" => "confirmation",
          "name" => "Confirmation",
          "headline" => "Confirmation ",
          "rules" => "required"
          )
        )
      ),            
     ),
    ),  

  
  
  
  
  
  
  
  
  
  
"educationangebot"=>array(
  "config" =>array(
    "headline" => "Angebot Schulen und Kindergärten",
    "workflow" => array(
    "1" => array("auto","Warten auf Verarbeitung"),
    "2" => array("sendmail","Versandt an Bucher","formfield","email_adresse"),
    "3" => array("sendmaildefined","Versandt an MECC","gruppen@legoland.de"),
    "4" => array("sendmaildefined","Versandt an Admission","gruppenformulare@legoland.de"),
    "5" => array("waitforentry","Warte auf Verarbeitung MECC",
        array("easyinput",array("Buchungsnummer","Kommentar"))
        
        ),
    "6" => array("entrysucces","Warten auf Bestätigungsversand an Bucher"),
    "7" => array("sendmail","Bestätigung versandt an Bucher","formfield","email_adresse"),
    "99999" => array("end","Prozess abgeschlossen"),
    )
  ),
  "steps"=> array(
  


      
    "1"=> array(
    
      "headline" => "Tickets wählen",
      "fields" => array(
        "1" => array(
          "mode" => "date",
          "name" => "besuchsdatum",
          "headline" => "Gewünschtes Besuchsdatum",
          "rules" => "required|date"
          ),
          "3" => array(
          "mode" => "element_withoutdiscount",
          "name" => "tickets_normal",
          "headline" => "Anzahl Kindertickets",
          "price" => "5",                
          "rules" => "required|min_numeric,1"
          ),
        "5" => array(
          "mode" => "begleiter",
          "name" => "tickets_begleiter",
          "begleiter" => array(1,10),
          "p" =>"Pro 10 zahlende Kinder ist ein Begleiter frei.",
          "headline" => "Anzahl zusätzliche Begleitertickets",
          "price" => "21"
          ),
        "6" => array(
          "mode" => "element_withoutdiscount",
          "name" => "tickets_busfahrer",
          "headline" => "Anzahl Busfahrer/Reiseleitertickets",
          "p" => "Busfahrer sind frei und erhalten einen Verzehrgutschein im Wert von 8 Euro sowie einen Kaffeegutschein.",
          "price" => "0"
          ),                      
        )
      ),      


      
    "2"=> array(
      "headline" => "Verpflegung",
      "topbox" => array(
        "p" => "Buchen Sie die Verpflegung am besten für nur 6,50 Euro gleich dazu. ",
        "maxtime" => array("besuchsdatum",7,"Leider können wir gerne Buchung mehr für das Kombiangebot entgegen nehmen, da wir dazu eine Vorlaufzeit von mindestens 7 Tagen benötigen.")
      ),
      "fields" => array(
        "1" => array(
          "mode" => "element_withoutdiscount",
          "name" => "kombi_essen",
          "headline" => "Anzahl Kinder",
          "p" => "Nicht buchbar im August 2015. Plätze nach Verfügbarkeit. ",
          "price" => "6.50"
          ),
          
        "2" => array(
          "mode" => "element_withoutdiscount",
          "name" => "kombination_essen_begleiter",
          "headline" => "Anzahl Begleiter",
          "p" => "Nicht buchbar im August 2015. Plätze nach Verfügbarkeit. ",
          "price" => "8.50"
          ), 
        "3" => array(
          "mode" => "selection",
          "name" => "kombi_essen_auswahl",
          "headline" => "Menüauswahl",
          "values" => array("Putenschnitzel m. Pommes und 0.3L Softdrink","Pasta mit Tomatensoße und 0.3L Softrink"),
          "float" => "49"  
          ),
        "4" => array(
          "mode" => "selection",
          "name" => "essenszeit",
          "headline" => "Essenszeit",
          "values" => array("11:30 Uhr","13:30 Uhr") ,
          "float" => "40"  
          ), 
          "5" => array(
          "mode" => "info",
          "value" => "Auf diese Pakete können keine Ermäßigungen gewährt werden. Platzreservierung nach Verfügbarkeit. Kostenlose Teil- und Komplettstornierungen von gebuchten Paketen müssen bis 4 Werktage vor Anreise schriftlich bei unserer Gruppenabteilung eingehen. Spätere Stornierungen oder Nichterscheinen der Gruppe werden pro Person mit 30 % des Paketpreises in Rechnung gestellt. Das Kombiangebot und das Begleitermenü sind für August 2015 nicht buchbar."
          ),         
        )
      ),
      
    "3"=> array(
      "headline" => "Workshops",
            "topbox" => array(
        "p" => "Lernen mit Spaß. LEGOLAND Deutschland hat für junge Forscher spezielle Workshops entwickelt.<br> <strong>Wir empfehlen maximal zwei Workshops/Wissenswelten auszuwählen.</strong>",
        "maxtime" => array("besuchsdatum",3,"Leider können wir gerne Buchung mehr für die Workshops entgegen nehmen, da wir dazu eine Vorlaufzeit von mindestens 3 Tagen benötigen.")
      ),
      "fields" => array(
        "1" => array(
          "mode" => "checkbox",
          "name" => "betreute_workshops",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Betreute Workshops",
          "values" => array("Mars Mission", "Modellbauer","Bissige Zahnräder","Auto & Umwelt"),
          "p" => "Die betreuten Workshops finden im LEGO Mindstorms Center statt. Plätze und Uhrzeit nach Verfügbarkeit."
          ),
         "2" => array(
          "mode" => "checkbox",
          "name" => "betreute_workshops",
          "need" => array("bildungseinrichtung","Kindergarten"),
          "headline" => "Betreute Workshops",
          "values" => array("Modellbauer","Bissige Zahnräder"),
          "p" => "Die betreuten Workshops finden im LEGO Mindstorms Center statt. Plätze und Uhrzeit nach Verfügbarkeit."
          ),         
        "3" => array(
          "mode" => "checkbox",
          "name" => "wissenswelten",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Wissenswelten",
          "values" => array("Botanik", "Unterwasserwelt","Erdkunde/Geschichte","Deutsch, Mathe & Englisch"),
          "p" => "Start und Ziel der LEGOLAND Wissenswelten ist das LEGO Mindstorms Center. "
          ),
                    "4" => array(
          "mode" => "element_withoutdiscount",
          "name" => "freund_im_verkehr_12uhr",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Freund im Verkehr",
          "float" => "48",
          "p" =>  "Sonderpreis um 12 Uhr",
          "price" => "2",
          "rules" => "min_numeric,1"
          ),
                    "5" => array(
          "mode" => "element_withoutdiscount",
          "name" => "freund_im_verkehr_sonstige",
          "need" => array("bildungseinrichtung","Schule"),
          "headline" => "Freund im Verkehr",
          "float" => "48",
          "p" =>  "11 Uhr und von 13-16 Uhr",
          "price" => "3",
          "rules" => "min_numeric,1"
          ),  
                    "6" => array(
          "mode" => "info",
          "value" => "Auf diese Pakete können keine Ermäßigungen gewährt werden. Platzreservierung nach Verfügbarkeit. Kostenlose Teil- und Komplettstornierungen von gebuchten Paketen müssen bis 4 Werktage vor Anreise schriftlich bei unserer Gruppenabteilung eingehen. Spätere Stornierungen oder Nichterscheinen der Gruppe werden pro Person mit 30 % des Paketpreises in Rechnung gestellt."
          ),          
        )
      ),
    
    "4"=> array(
      "headline" => "Persönliche Informationen",
            "fields" => array(
                "1" => array(
          "mode" => "text",
          "name" => "bildungseinrichtung_anmelder",
          "headline" => "Bildungseinrichtung",
          "rules" => "required",
          ),

        "4" => array(
          "mode" => "text",
          "name" => "strasse_hausnummer",
          "headline" => "Straße, Hausnummer",
          "rules" => "required"          
          ),    
        "5" => array(
          "mode" => "text",
          "name" => "postleitzahl",
          "headline" => "Postleitzahl",
          "rules" => "required",
          "float" => "28"          
          ),    
        "6" => array(
          "mode" => "text",
          "name" => "ort",
          "headline" => "Ort",
          "rules" => "required",
          "float" => "68"          
          ),
                  "7" => array(
          "mode" => "text",
          "name" => "vorname",
          "headline" => "Vorname",
          "rules" => "required",
          "float" => "48"
          ),
        "8" => array(
          "mode" => "text",
          "name" => "nachname",
          "headline" => "Nachname",
          "rules" => "required",
          "float" => "48"          
          ),
        "9" => array(
          "mode" => "text",
          "name" => "email_adresse",
          "headline" => "E-Mail-Adresse",
          "rules" => "required|valid_email",
          "float" => "48"          
          ),  
        "10" => array(
          "mode" => "text",
          "name" => "telefonnummer",
          "headline" => "Telefonnummer",
          "rules" => "required",
          "float" => "48"          
          ),
        "11" => array(
          "mode" => "text",
          "name" => "legoland_kundennummer",
          "headline" => "LEGOLAND Kundennummer",
          "float" => "48"          
          ),  
        "12" => array(
          "mode" => "text",
          "name" => "handynummer_begleitperson",
          "headline" => "Handynummer Begleitperson",
          "float" => "48"          
          ),  
                  "13" => array(
          "mode" => "text",
          "name" => "kommentar",
          "headline" => "Was Sie uns noch mitteilen möchten..",          
          ),                                                                                                    
        )
      ),
      
      "5"=> array(
      "headline" => "confirmation",
      "fields" => array(
        "1" => array(
          "mode" => "confirmation",
          "name" => "confirmation",
          "headline" => "Bestätigung der Eingaben",
          "p" => "Bitte bestätigen Sie die Eingaben, damit die Buchung gleich durchgeführt werden kann.",
          "rules" => "required"
          )
        )
      ),
    )
  ),  
"press"=>array(
  "config" =>array(
    "headline" => "Presseakkreditierung",
        "showinoverview" => array("vorname","nachname","medium_redaktion"),
    "workflow" => array(
    "1" => array("auto","Warten auf Verarbeitung"),
    

    "2" => array("sendmail","Versandt an Journalist","formfield","email_adresse"),
        "3" => array("sendmaildefined","Versandt an Presse","press@legoland.de"),
    "4" => array("waitforentry","Warte auf Freigabe Presse",
        array("easyinput",array("Kommentar"))
        
        ),
    "5" => array("entrysucces","Warten auf Bestätigungsversand an Journalist"),
    "6" => array("sendmail","Bestätigung versandt Journalist","formfield","email_adresse"),
        "99999" => array("end","Prozess abgeschlossen"),
    )
  ),
  
  "steps"=> array(
  
    "1"=> array(
      "headline" => "Datum",
      "fields" => array(
        "1" => array(
          "mode" => "date_season",
          "name" => "besuchsdatum",
          "headline" => "Gewünschtes Besuchsdatum",
          "rules" => "required|date"
          ),
                  "6" => array(

          "mode" => "dropdown",
          "name" => "personen",
          "headline" => "Anzahl der Besucher",
          "values" => array("Für meine Recherche komme ich alleine.","Ich bringe eine Begleitperson mit (max. 2 Freikarten)."),
          "rules" => "required"
          ),
          "10" => array(

          "mode" => "textfield",
          "name" => "themenschwerpunkte",
          "headline" => "Themenschwerpunkte des Berichtes, Antrag auf Drehgenehmigung etc.",
          "rules" => "required|min_len,5"
          ),
          "7" => array(

          "mode" => "checkbox",
          "name" => "verteiler",
          "headline" => "Presseverteiler",
          "values" => array("Bitte nehmen Sie mich in den LEGOLAND Presseverteiler auf."),
          ),
        )
      ),
    "2"=> array(
      "headline" => "Kontaktdaten",
      "fields" => array(
                  "6000" => array(

          "mode" => "dropdown",
          "name" => "anrede",
          "headline" => "Anrede",
          "values" => array("Frau","Herr"),
          "rules" => "required"
          ),
                  "1" => array(
          "mode" => "text",
          "name" => "vorname",
          "float" => "48",
          "headline" => "Vorname",
          "rules" => "required"          
          ),    
                            "2" => array(
          "mode" => "text",
          "name" => "nachname",
          "float" => "48",
          "headline" => "Nachname",
          "rules" => "required"          
          ), 
                                      "3" => array(
          "mode" => "text",
          "name" => "medium_redaktion",
          "headline" => "Name Medium/Redaktion",
          "rules" => "required"          
          ), 
                            "11" => array(
          "mode" => "text",
          "name" => "strasse_hausnummer",
          "headline" => "Straße, Hausnummer",
          "rules" => "required"          
          ),
                            "113" => array(
          "mode" => "text",
          "name" => "postleitzahl",
                    "float" => "30",
          "headline" => "Postleitzahl",
          "rules" => "required"          
          ),
                            "114" => array(
          "mode" => "text",
          "name" => "ort",
          "headline" => "Ort",
                    "float" => "67",
          "rules" => "required"          
          ),   
        "7" => array(

          "mode" => "dropdown",
          "name" => "land",
          "headline" => "Land",
          "values" => array("Deutschland","Andorra","Vereinigte Arabische Emirate","Afghanistan","Antigua und Barbuda","Anguilla","Albanien","Armenien","Niederländische Antillen","Angola","Antarktis","Argentinien","Amerikanisch-Samoa","Österreich (Austria)","Australien","Aruba","Azerbaijan","Bosnien-Herzegovina","Barbados","Bangladesh","Belgien","Burkina Faso","Bulgarien","Bahrain","Burundi","Benin","Bermudas","Brunei Darussalam","Bolivien","Brasilien","Bahamas","Bhutan","Bouvet Island","Botswana","Weißrußland (Belarus)","Belize","Canada","Cocos (Keeling) Islands","Demokratische Republik Kongo","Zentralafrikanische Republik","Kongo","Schweiz","Elfenbeinküste (Cote D'Ivoire)","Cook Islands","Chile","Kamerun","China","Kolumbien","Costa Rica","Tschechoslowakei (ehemalige)","Kuba","Kap Verde","Christmas Island","Zypern","Tschechische Republik","Djibouti","Dänemark","Dominica","Dominikanische Republik","Algerien","Ecuador","Estland","Ägypten","Westsahara","Eritrea","Spanien","Äthiopien","Finnland","Fiji","Falkland-Inseln (Malvinas)","Micronesien","Faröer-Inseln","Frankreich","France, Metropolitan","Gabon","Grenada","Georgien","Französisch Guiana","Ghana","Gibraltar","Grönland","Gambia","Guinea","Guadeloupe","Äquatorialguinea","Griechenland","Südgeorgien und Südliche Sandwich-Inseln","Guatemala","Guam","Guinea-Bissau","Guyana","Kong Hong","Heard und Mc Donald Islands","Honduras","Haiti","Ungarn","Indonesien","Irland","Israel","Indien","British Indian Ocean Territory","Irak","Iran (Islamische Republik)","Island","Italien","Jamaica","Jordanien","Japan","Kenya","Kirgisien","Königreich Kambodscha","Kiribati","Komoren","Saint Kitts und Nevis","Korea, Volksrepublik","Korea","Kuwait","Kayman Islands","Kasachstan","Laos","Libanon","Saint Lucia","Liechtenstein","Sri Lanka","Liberia","Lesotho","Littauen","Luxemburg","Lettland","Libyen","Marokko","Monaco","Moldavien","Madagaskar","Marshall-Inseln","Mazedonien, ehem. Jugoslawische Republik","Mali","Myanmar","Mongolei","Macao","Nördliche Marianneninseln","Martinique","Mauretanien","Montserrat","Malta","Mauritius","Malediven","Malawi","Mexico","Malaysien","Mozambique","Namibia","Neu Kaledonien","Niger","Norfolk Island","Nigeria","Nicaragua","Niederlande","Norwegen","Nepal","Nauru","Niue","Neuseeland","Oman","Panama","Peru","Französisch Polynesien","Papua Neuguinea","Philippinen","Pakistan","Polen","St. Pierre und Miquelon","Pitcairn","Puerto Rico","Portugal","Palau","Paraguay","Katar","Reunion","Rumänien","Russische Föderation","Ruanda","Saudi Arabien","Salomonen","Seychellen","Sudan","Schweden","Singapur","St. Helena","Slovenien","Svalbard und Jan Mayen Islands","Slowakei","Sierra Leone","San Marino","Senegal","Somalia","Surinam","Sao Tome und Principe","El Salvador","Syrien, Arabische Republik","Swaziland","Turk und Caicos-Inseln","Tschad","Französisches Südl.Territorium","Togo","Thailand","Tadschikistan","Tokelau","Turkmenistan","Tunesien","Tonga","Ost-Timor","Türkei","Trinidad und Tobago","Tuvalu","Taiwan","Tansania, United Republic of","Ukraine","Uganda","Großbritannien","Vereinigte Staaten","Vereinigte Staaten, Minor Outlying Islands","Uruguay","Usbekistan","Vatikanstaat","Saint Vincent und Grenadines","Venezuela","Virgin Islands (Britisch)","Virgin Islands (U.S.)","Vietnam","Vanuatu","Wallis und Futuna Islands","Samoa","Jemen","Mayotte","Jugoslawien","Südafrika","Sambia","Zimbabwe",),
          "rules" => "required"
          ),

    
                  "21" => array(
          "mode" => "text",
          "name" => "telefonnummer",
          "float" => "48",
          "headline" => "Telefonnummer",
          "rules" => "required"          
          ),  
                            "22" => array(
          "mode" => "text",
          "name" => "email_adresse",
          "float" => "48",
          "headline" => "E-Mail-Adresse",
          "rules" => "required"          
          ),    
                
        )
      ),
    "3"=> array(
      "headline" => "Presseausweis",
      "fields" => array(
        "1" => array(
          "mode" => "upload",
          "name" => "presseausweis",
          "headline" => "Presseausweis",
          "p" => "Bitte laden Sie die Vorder- und Rückseite Ihres gültigen Presseausweises hoch!",
          "values" => array("Schule","Kindergarten"),
          "rules" => "required"
          )
        )
      ),
      "4"=> array(
      "headline" => "confirmation",
      "fields" => array(
        "1" => array(
          "mode" => "confirmation",
          "name" => "confirmation",
          "headline" => "Bestätigung der Eingaben",
          "rules" => "required"
          )
        )
      ),            
     ),
    ),  





"vipde"=>array(
  "config" =>array(
    "headline" => "Anfrage VIP-Tour ",
    "showinoverview" => array("besuchsdatum"),
    "workflow" => array(
    "1" => array("auto","Warten auf Verarbeitung"),
    

    "2" => array("sendmail","Versandt an Bucher","formfield","email_adresse"),
        "3" => array("sendmaildefined","Versandt an Admission","vip@legoland.de"),
    "4" => array("waitforentry","Warte auf Bearbeitung Admission",
        array("easyinput",array("Buchungsnummer","Kommentar"),"Bei Buchung: Bitte alle Angaben machen; ohne Buchung alle Felder leer lassen und Schritt bestätigen!")
        
        ),
    "5" => array("entrysucces","Warten auf Speicherung"),
        "99999" => array("end","Prozess abgeschlossen"),
    )
  ),
  
  "steps"=> array(
  
    "1"=> array(
      "headline" => "Tour",
      "fields" => array(
        "1" => array(
          "mode" => "date_season",
          "name" => "besuchsdatum",
          "headline" => "Gewünschtes Besuchsdatum",
          "rules" => "required|date"
          ),
        "2" => array(
          "mode" => "element_withoutdiscount",
          "name" => "tickets_kinder",
          "headline" => "Anzahl Kinder",
          "price" => "299",
          "rules" => "required|min_numeric,1"
          ),
        "3" => array(
          "mode" => "element_withoutdiscount",
          "name" => "tickets_erwachsene",
          "headline" => "Anzahl Erwachsene",
          "price" => "329",
          "rules" => "required|min_numeric,1"
          ),
                  "7" => array(

          "mode" => "dropdown",
          "name" => "sprache",
          "headline" => "Sprache der Tour",
          "float" => "65",
          "values" => array("deutsch","englisch"),
          "rules" => "required"
          ),          
        )
      ),
    "2"=> array(
      "headline" => "Kontaktdaten",
      "fields" => array(
                  "6000" => array(

          "mode" => "dropdown",
          "name" => "anrede",
          "headline" => "Anrede",
          "values" => array("Frau","Herr"),
          "rules" => "required"
          ),
                  "1" => array(
          "mode" => "text",
          "name" => "vorname",
          "float" => "48",
          "headline" => "Vorname",
          "rules" => "required"          
          ),    
                            "2" => array(
          "mode" => "text",
          "name" => "nachname",
          "float" => "48",
          "headline" => "Nachname",
          "rules" => "required"          
          ), 
                            
        "7" => array(

          "mode" => "dropdown",
          "name" => "land",
          "headline" => "Land",
          "values" => array("Deutschland","Andorra","Vereinigte Arabische Emirate","Afghanistan","Antigua und Barbuda","Anguilla","Albanien","Armenien","Niederländische Antillen","Angola","Antarktis","Argentinien","Amerikanisch-Samoa","Österreich (Austria)","Australien","Aruba","Azerbaijan","Bosnien-Herzegovina","Barbados","Bangladesh","Belgien","Burkina Faso","Bulgarien","Bahrain","Burundi","Benin","Bermudas","Brunei Darussalam","Bolivien","Brasilien","Bahamas","Bhutan","Bouvet Island","Botswana","Weißrußland (Belarus)","Belize","Canada","Cocos (Keeling) Islands","Demokratische Republik Kongo","Zentralafrikanische Republik","Kongo","Schweiz","Elfenbeinküste (Cote D'Ivoire)","Cook Islands","Chile","Kamerun","China","Kolumbien","Costa Rica","Tschechoslowakei (ehemalige)","Kuba","Kap Verde","Christmas Island","Zypern","Tschechische Republik","Djibouti","Dänemark","Dominica","Dominikanische Republik","Algerien","Ecuador","Estland","Ägypten","Westsahara","Eritrea","Spanien","Äthiopien","Finnland","Fiji","Falkland-Inseln (Malvinas)","Micronesien","Faröer-Inseln","Frankreich","France, Metropolitan","Gabon","Grenada","Georgien","Französisch Guiana","Ghana","Gibraltar","Grönland","Gambia","Guinea","Guadeloupe","Äquatorialguinea","Griechenland","Südgeorgien und Südliche Sandwich-Inseln","Guatemala","Guam","Guinea-Bissau","Guyana","Kong Hong","Heard und Mc Donald Islands","Honduras","Haiti","Ungarn","Indonesien","Irland","Israel","Indien","British Indian Ocean Territory","Irak","Iran (Islamische Republik)","Island","Italien","Jamaica","Jordanien","Japan","Kenya","Kirgisien","Königreich Kambodscha","Kiribati","Komoren","Saint Kitts und Nevis","Korea, Volksrepublik","Korea","Kuwait","Kayman Islands","Kasachstan","Laos","Libanon","Saint Lucia","Liechtenstein","Sri Lanka","Liberia","Lesotho","Littauen","Luxemburg","Lettland","Libyen","Marokko","Monaco","Moldavien","Madagaskar","Marshall-Inseln","Mazedonien, ehem. Jugoslawische Republik","Mali","Myanmar","Mongolei","Macao","Nördliche Marianneninseln","Martinique","Mauretanien","Montserrat","Malta","Mauritius","Malediven","Malawi","Mexico","Malaysien","Mozambique","Namibia","Neu Kaledonien","Niger","Norfolk Island","Nigeria","Nicaragua","Niederlande","Norwegen","Nepal","Nauru","Niue","Neuseeland","Oman","Panama","Peru","Französisch Polynesien","Papua Neuguinea","Philippinen","Pakistan","Polen","St. Pierre und Miquelon","Pitcairn","Puerto Rico","Portugal","Palau","Paraguay","Katar","Reunion","Rumänien","Russische Föderation","Ruanda","Saudi Arabien","Salomonen","Seychellen","Sudan","Schweden","Singapur","St. Helena","Slovenien","Svalbard und Jan Mayen Islands","Slowakei","Sierra Leone","San Marino","Senegal","Somalia","Surinam","Sao Tome und Principe","El Salvador","Syrien, Arabische Republik","Swaziland","Turk und Caicos-Inseln","Tschad","Französisches Südl.Territorium","Togo","Thailand","Tadschikistan","Tokelau","Turkmenistan","Tunesien","Tonga","Ost-Timor","Türkei","Trinidad und Tobago","Tuvalu","Taiwan","Tansania, United Republic of","Ukraine","Uganda","Großbritannien","Vereinigte Staaten","Vereinigte Staaten, Minor Outlying Islands","Uruguay","Usbekistan","Vatikanstaat","Saint Vincent und Grenadines","Venezuela","Virgin Islands (Britisch)","Virgin Islands (U.S.)","Vietnam","Vanuatu","Wallis und Futuna Islands","Samoa","Jemen","Mayotte","Jugoslawien","Südafrika","Sambia","Zimbabwe",),
          "rules" => "required"
          ),

    
                  "21" => array(
          "mode" => "text",
          "name" => "telefonnummer",
          "float" => "48",
          "headline" => "Telefonnummer",
          "rules" => "required"          
          ),  
                            "22" => array(
          "mode" => "text",
          "name" => "email_adresse",
          "float" => "48",
          "headline" => "E-Mail-Adresse",
          "rules" => "required"          
          ),    
                
        )
      ),
    "3"=> array(
      "headline" => "Fragen",
      "fields" => array(
          "10" => array(

          "mode" => "textfield",
          "name" => "fragen",
          "headline" => "Habt ihr noch Fragen oder Wünsche? Lasst es uns hier gerne wissen:"
          ),
        )
      ),
      "4"=> array(
      "headline" => "confirmation",
      "fields" => array(
        "1" => array(
          "mode" => "confirmation",
          "name" => "confirmation",
          "headline" => "Bestätigung der Eingaben",
          "rules" => "required"
          )
        )
      ),            
     ),
    ),




         
);
function utf8_converter($array)
{
    array_walk_recursive($array, function(&$item, $key){
        if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
        }
    });
 
    return $array;
}
$conf=utf8_converter($conf);
?>