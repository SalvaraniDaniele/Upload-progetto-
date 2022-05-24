# Upload progetto - Gioele Caiti 
L'unica persona che ha lavorato al progetto è Gioele Caiti (https://github.com/GioeleCaiti)

## Descrizione
Programma scritto tramite Notepad++. Si tratta di un semplicissimo form di registrazione, creato in HTML. non è presente un file CSS esterno al file .html, perchè si trova direttamente all'interno di esso, tramite l'utilizzo dello <style>. 

E' presente una pagina PHP di risposta, perchè una volta che l'utente inserirà i propri dati, sarà "costretto" a premere sul tasto INVIA DATI, per la "conferma" dell'inserimento dei propri dati. 
  ```bash
<input type="submit" value="INVIA DATI">
```
Se vuole eliminare tutti i dati presenti per qualsiasi motivo, premerà invece sul bottone ANNULLA. 
 ```bash
<input type="reset" value="ANNULLA">
```
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
  
