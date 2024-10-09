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
        public $genres = [];

        // definisco un costruttore
        public function __construct($_title, $_author, $_yearOfPublication, array $_genre)
        {
            $this->title = $_title;
            $this->author = $_author;
            $this->yearOfPublication = $_yearOfPublication;
            $this->genres = $_genre;
        }
        // definisco un metodo
        public function getDescription()
        {
            // inizializzo unfa stringa per i nomi dei generi
            $genresList = '';

            // ciclo per ogni genere nella lista dei generi
            foreach ($this->genres as $genre) {
                $genresList .= $genre->name . ', ';
            }

            // tolgo l ultima virgola e lo spazio con la funzione rtrim
            $genresList = rtrim($genresList, ', ');

            return 'Il libro ' . $this->title . ' è stato scritto da ' . $this->author . ' nel ' . $this->yearOfPublication . ' ed è di genere: ' . $genresList;
        }
    }
    ?>