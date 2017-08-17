<?php

  class BaseController{

    public static function get_user_logged_in(){
      // Toteuta kirjautuneen käyttäjän haku tähän

      if(isset($_SESSION['apteekki'])){
        $apteekki_id = $_SESSION['apteekki'];
        $apteekki = Apteekki::find($apteekki_id);

        return $apteekki;
      }
      
      return null;
    }

    public static function check_logged_in(){
      // Toteuta kirjautumisen tarkistus tähän.
      // Jos käyttäjä ei ole kirjautunut sisään, ohjaa hänet toiselle sivulle (esim. kirjautumissivulle).
    }

  }
