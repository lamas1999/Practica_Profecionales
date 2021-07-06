<?php
namespace clases\oferta;  
  class Oferta
  {
      private $id;
      private $id_empresa;
      private $id_pais;
      private $titulo;
      private $puesto;
      private $descripcion;
      private $requisitos;
      private $id_salario;
      private $fecha_publicado;
      private $estado;

      private $cnx;


      function inicializar($id,$id_empresa,$id_pais,$titulo,$puesto,$descripcion,$requisitos,$id_salario,$fecha_publicado,$estado)
      {
          $this->id = $id;
          $this->id_empresa = $id_empresa;
          $this->id_pais = $id_pais;
          $this->titulo = $titulo;
          $this->puesto= $puesto;
          $this->descripcion = $descripcion;
          $this->requisitos = $requisitos;
          $this->id_salario =$id_salario;
          $this->fecha_publicado =$fecha_publicado;
          $this->estado =$estado;
          
      }
      function __construct($cnx)
      {
            $this->id = 0;
            $this->id_empresa = 0;
            $this->id_pais = "";
            $this->titulo = "";
            $this->puesto="";
            $this->descripcion = "";
            $this->requisitos = "";
            $this-> id_salario=0;
            $this-> fecha_publicado=0;
            $this->estado="";
            $this->cnx = $cnx;
      }

/*********************************************** */
      function set_id($id)
      {
          $this->id = $id;
      }
      function get_id()
      {
          return $this->id;
      }
      /***********************************/
      function set_id_empresa($id_empresa)
      {
          $this->id_empresa = $id_empresa;
      }
      function get_id_empresa()
      {
          return $this->id_empresa;
      }
       /***********************************/
       function set_id_pais($id_pais)
       {
           $this->id_pais = $id_pais;
       }
       function get_id_pais()
       {
           return $this->id_pais;
       }
       /*******************************/
      function set_titulo($titulo)
      {
          $this->titulo = $titulo;
      }
      function get_titulo()
      {
          return $this->titulo;
      }
       /***********************************/
       function set_puesto($puesto)
      {
          $this->puesto = $puesto;
      }
      function get_puesto()
      {
          return $this->puesto;
      }
       /***********************************/
       function set_descripcion($descripcion)
       {
           $this->login = $descripcion;
       }
       function get_descripcion()
       {
           return $this->descripcion;
       }
        /***********************************/

      function set_requisitos($requisitos)
      {
          $this->requisitos = $requisitos;
      }
      function get_requisitos()
      {
          return $this->requisitos;
      }
       
        /***********************************/
        function set_id_salario($id_salario)
        {
            $this->id_salario = $id_salario;
        }
        function get_id_salario()
        {
            return $this->id_salario;
        }
         /***********************************/
         function set_fecha_publicado($fecha_publicado)
         {
             $this->fecha_publicado = $fecha_publicado;
         }
         function get_fecha_publicado()
         {
             return $this->fecha_publicado;
         }
          /***********************************/
          function set_estado($estado)
          {
              $this->estado = $estado;
          }
          function get_estado()
          {
              return $this->estado;
          }
           /***********************************/

    

    }
?>