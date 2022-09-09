<?php

class Movie
{
    public $title;
    public $overview;
    public $release;
    public $genre;

    function __construct($_title, $_overview, $_release, $_genre)
    {
        $this->title = $_title;
        $this->overview = $_overview;
        $this->release = $_release;
        $this->genre = $_genre;
    }

    public function getGenreString()
    {
        $genre_string = '';
        for($i = 0; $i < count($this->genre); $i++){
            if($i === count($this->genre) - 1){
                $genre_string .= "{$this->genre[$i]}";
                break;
            }
            $genre_string .= "{$this->genre[$i]}, ";
        }
        return $genre_string;
    }
}

$top_gun_maverick_overview = 'Dopo più di trent’anni di servizio nella Marina, il Tenente Pete “Maverick” Mitchell è proprio dove vorrebbe essere: un pilota coraggioso che può spingersi oltre ogni limite, cercando di schivare l’avanzamento di carriera che metterebbe un freno alla sua libertà. Quando viene ri-chiamato ad addestrare i migliori allievi Top Gun per una missione specializzata che nessuno al mondo ha mai portato a compimento, Maverick incontra il Tenente Bradley Bradshaw, nome in codice “Rooster”: è il figlio di Nick , il compianto “Goose.” Alle prese con un futuro incerto e con i fantasmi del passato, Maverick deve confrontarsi con le sue paure più profonde, fino ad una missione che richiederà il sacrificio ultimo di quelli che sceglieranno di parteciparvi.';
$luck_overview = 'Sam Greenfield è la persona più sfortunata del mondo! Ritrovandosi improvvisamente nella sconosciuta Terra della Fortuna, dovrà unirsi alle magiche creature di quel luogo per capovolgere la sua sfortuna.';

$top_gun_maverick = new Movie('Top Gun: Maverick', $top_gun_maverick_overview, '25/05/2022', ['Azione', 'Dramma']);
$luck = new Movie('Luck', $luck_overview, '05/08/2022', ['Animazione', 'Avventura', 'Commedia', 'Fantasy']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <header>
        <h1>Movies</h1>
    </header>
    <main>
        <article>
            <h2><?= $top_gun_maverick->title ?></h2>
            <div>
                <span><?= $top_gun_maverick->getGenreString() ?> | </span>
                <span><?= $top_gun_maverick->release ?></span>
            </div>
            <h3>Descrizione</h3>
            <p><?= $top_gun_maverick->overview ?></p>
        </article>
        <hr>
        <article>
            <h2><?= $luck->title ?></h2>
            <div>
                <span><?= $luck->getGenreString() ?> | </span>
                <span><?= $luck->release ?></span>
            </div>
            <h3>Descrizione</h3>
            <p><?= $luck->overview ?></p>
        </article>
    </main>
</body>
</html>