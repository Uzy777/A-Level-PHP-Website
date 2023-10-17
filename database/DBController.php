<?php
// Connecting the database for the system using a class to be able to refer to the variable to perform all of the connections to the database rather than doing them individually
class DBController
{
    // Database Connection Properties
    // The server name for the database
    protected $host = 'localhost';
    // The user name for the database
    protected $user = 'root';
    // The password for the database left blank because there is no password set up
    protected $password = '';
    // The name of the database that is being connected and used for the system
    protected $database = "EpicSystems";

    // Connection property
    public $con = null;

    // Call constructor for it to connect to the database
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        // If an error was to occur then output some text "Fail" so the user knows what has happened
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    // Destructs the contents of the function and then closes the connection
    public function __destruct()
    {
        $this->closeConnection();
    }

    // For MySQLi closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
