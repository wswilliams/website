  <?php
  class Conectar{
      private $server;
    private $username;
    private $password;
    private $db;
    private $link;
    private static $instance;

    //medodo contrutor
    public function __construct() {

        try {

            // $server = "localhost";
            // $username = "root";
            // $password = "";
            // $db = "sim";
            
              $server ="dbmy0026.whservidor.com";
              $username="geracaopar1";
              $password="homega36@";
              $db="geracaopar1";
             

            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->db = $db;
            $this->connect();
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    //fim do metodo construtor
    //projeto singto
    public static function getInstance() {

        try {
            if (!self:: $instance) {
                self:: $instance = new Conectar();
            }
            return self:: $instance;
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    //fim do metodo singto

    public function getServer() {
        return $this->server;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDb() {
        return $this->db;
    }
    public function getLink() {
        return $this->link;
    }
          //metodo connect, conecta a base de dado
      private function connect(){

         $this->link= mysqli_connect($this->server, $this->username, $this->password,$this->db);
         mysqli_select_db($this->link,$this->db);
         /* check connection */
          if (mysqli_connect_errno()) {
              echo "Connect failed: ". mysqli_connect_error();
              exit();
          }

      }
      //fim do metodo conexao
    //metodo freebanco, que limpa da memoria "fexa a conexao"
    public function freebanco(){
      mysqli_close($this->link);
     }
     //fim
};

?>
