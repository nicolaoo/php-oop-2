<?php

trait Validator {
  /**
   * Funzione che controlla la lunghezza di una stringa.
   * Se il controllo fallisce, ritorna FALSE, se tutto va bene ritorna TRUE
   *
   * @param [type] $strToTest
   * @param [type] $minLength
   * @param [type] $maxLength
   * @return void
   */
  public function testString($strToTest, $minLength, $maxLength) {

    /* if (strlen($strToTest) < $minLength || strlen($strToTest) > $maxLength) {
      throw new Exception("Il testo inserito non rispetta la lunghezza necessaria");
    } */

    if (strlen($strToTest) < $minLength) {
      throw new Exception("Il testo inserito deve essere più lungo di $minLength caratteri.");
    }

    if (strlen($strToTest) > $maxLength) {
      throw new Exception("Il testo inserito deve essere più corto di $maxLength caratteri.");
    }

    return true;
  }
}
