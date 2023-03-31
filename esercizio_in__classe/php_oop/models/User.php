<?php
require_once __DIR__ . "/Address.php";

class User {
  /*
  prima del nome dell'attributo vado ad indicare 
  la tipologia che il valore dovrà avere.

  Alcuni tipi possibili:
  - string
  - int - numero intero, senza decimali
  - float - numero con decimali
  - bool / boolean
  */
  public string $firstName;
  public string $lastName;
  public int $birthYear;
  public int $attack;
  public $address;
  public $role;

  // lista di tutti i ruoli che un utente può avere.
  public static $validRoles = ["admin", "user"];

  /**
   * Nel momento in cui viene creata un istanza di questa classe,
   * richiedo obbligatoriamente che vengano comunicati
   * tramite argomenti, il nome ed il cognome dell'utente.
   */
  function __construct($_firstName, $_lastName, Address $_address) {
    // $this rappresenta l'istanza della classe appena creata

    // salvo i dati ricevuti come argomenti del costruttore,
    // all'interno degli attributi $firstName e $lastName 
    // presenti nell'istanza
    $this->firstName = $_firstName;
    $this->lastName = $_lastName;
    $this->address = $_address;
  }

  /**
   * Funzione che ritorna l'età dell'utente in base al suo anno di nascita
   */
  function getAge() {
    // controllo se ho l'anno di nascita dell'utente
    // se non ho l'anno di nascita, è inutile che vado avanti.
    if(!isset($this->birthYear)){
      return "Anno di nascita mancante";
    }

    // recupero l'anno attuale e sottraggo l'anno di nascita per recuperare l'età
    $annoAttuale = date("Y");

    return $annoAttuale - $this->birthYear;
  }

  function getFullName() {
    return $this->firstName . " " . $this->lastName;
  }
}
