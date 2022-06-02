Il file PHP non contiene la connessione al database, ma si potrebbe implementare, con il seguente codice: 
  ```python
  $host = "localhost";
	$username = "root";
	$passwo = "";
	$dbname = "nome_database";
	$conn = new mysqli($host,$username,$passwo,$nome_database);
	
	if($conn->connect_errno)
		echo "connessione non riuscita".$conn->connect_error."<br>";
	else
		echo "connessione riuscita<br>";
  $conn->close();
  ```
