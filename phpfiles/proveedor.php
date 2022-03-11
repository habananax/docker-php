<?php

  
class Proveedor {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $dni;   
  private $nombre;
  private $direccion;
  private $email;
  private $telefono;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nDNI, $nNombre, $nDireccion, $nEmail, $nTelefono) {
  
    $this->dni = $nDNI;
    $this->nombre = $nNombre;
    $this->direccion = $nDireccion;
    $this->email = $nEmail;
    $this->telefono = $nTelefono;

  }

  //Getters

  function getDNI() {
    return $this->dni;
  }

  function getNombre() {
    return $this->nombre;
  }
  
  function getDireccion() {
    return $this->direccion;
  }

  function getEmail() {
    return $this->email;
  }
  
  function getTelefono() {
    return $this->telefono;
  }


  function imprimeProveedor() {
    return "<p>$this->dni,$this->nombre,$this->direccion,$this->email,$this->telefono</p>";
  }


  //sql para inserción del producto
  function getInsertSQL() {
    $sql = "INSERT INTO proveedores (dni, nombre, direccion, email, telefono) VALUES ('$this->dni','$this->nombre','$this->direccion','$this->email','$this->telefono') ";

    return $sql;
  }



}
?>