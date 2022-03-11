<?php

  
class Cliente {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $dni;   
  private $nombre;
  private $apellidos;
  private $fecha_nac;     // date DD-MM-YYYY
  private $telefono;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nDNI, $nNombre, $nApellidos, $nFecha, $nTelefono) {
  
    $this->dni = $nDNI;
    $this->nombre = $nNombre;
    $this->apellidos = $nApellidos;
    $this->fecha_nac = $nFecha;
    $this->telefono = $nTelefono;

  }

  
  //Getters

  function getDNI() {
    return $this->dni;
  }

  function getNombre() {
    return $this->nombre;
  }
  
  function getApellidos() {
    return $this->apellidos;
  }

  function getFecha_Nacimiento() {
    return $this->fecha_nac;
  }
  
  function getTelefono() {
    return $this->telefono;
  }

  function imprimeCliente() {
    return "<p>$this->dni,$this->nombre,$this->apellidos,$this->fecha_nac,$this->telefono</p>";
  }


  //sql para inserción del producto
  function getInsertSQL() {
    $sql = "INSERT INTO clientes (dni, nombre, apellidos, fecha_nac, telefono) VALUES ('$this->dni','$this->nombre','$this->apellidos',STR_TO_DATE('$this->fecha_nac', '%Y-%m-%d'),$this->telefono) ";

    return $sql;
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM clientes ORDER BY ";

    switch ($tipoOrdenacion) {
      case "nombreasc":
        $sql = $sql . "nombre ASC";
        break;
      case "preciodes":
        $sql = $sql . "nombre DESC";
        break;
      case "apellidosasc":
        $sql = $sql . "apellidos ASC";
        break;
      case "apellidosdesc":
          $sql = $sql . "apellidos DESC";
          break;
      default:
        $sql = $sql . "nombre ASC";
    }

    return $sql;
  }


}
?>