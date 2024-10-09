 <?php
    // Bonus 1:
    // Modificare la classe Movie in modo che accetti piú di un genere.
    // Bonus 2:
    // Creare un layout completo per stampare a schermo una lista di movies.
    // Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
    // Possiamo ad esempio organizzare il codice
    // creando un file dedicato ai dati (tipo gli array di oggetti) che potremmo chiamare db.php
    // mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
    // organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
    // ! definisco la classe book
    class Book
    {
        // dichiaro delle variabili d'istanza
        public $title;
        public $author;
        public $yearOfPublication;

        // definisco un costruttore
        public function __construct($_title, $_author, $_yearOfPublication)
        {
            $this->title = $_title;
            $this->author = $_author;
            $this->yearOfPublication = $_yearOfPublication;
        }
        // definisco un metodo
        public function getDescription()
        {
            return 'Il libro ' . $this->title . ' è stato scritto da ' . $this->author . ' nel ' . $this->yearOfPublication;
        }
    }
    ?>