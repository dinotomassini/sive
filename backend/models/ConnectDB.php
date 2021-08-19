<?php 
  /**
   * Clase para realizar la conexion con la base de datos
   */
  class ConnectionDB {
    
    private static $conn;

    private const DB_HOST="localhost";
    private const DB_USER = "appDB";
    private const DB_PASS = "blablabla";
    private const DB_PORT = "3306";
    private const DB_NAME = "";
  
    private function __construct(){}

    /**
     * Realiza la conexion con la base de datos
     * Retorna la conexion o null en caso de fallo
     */
    public function connectDB(){
      if(is_null(self::$conn)){
        // try{
          self::$conn = mysqli_connect(
            self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME, self::DB_PORT
          );
        // } catch (mysqli_sql_exception $e) {}
        
        if(!self::$conn || is_null(self::$conn)){
          echo "ERROR: ".mysqli_connect_error();
          echo "<br />";
          return null;
        }
      }
      return self::$conn;
    }

    /**
     * Termina la conexion con la base de datos
     */
    public function disconnectDB(){
      self::$conn = null;
      return null;
    }

  }
?>