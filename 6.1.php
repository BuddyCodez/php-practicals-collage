<?php
echo "<h1>Udit Vegad(216090307001)</h1>";
function count_notes($amount)
{
    $notes = array(100, 50, 20, 10, 5, 2, 1); // array of available notes
    $note_count = array(0, 0, 0, 0, 0, 0, 0); // array to store the count of each note
    $remaining_amount = $amount; // variable to keep track of the remaining amount

    // loop through the notes and calculate the count of each note required to make up the amount
    foreach ($notes as $key => $note) {
        if ($remaining_amount >= $note) {
            $note_count[$key] = floor($remaining_amount / $note);
            $remaining_amount -= $note_count[$key] * $note;
        }
    }

    // print the count of each note required to make up the amount
    echo "Amount: " . $amount . "<br>";
    echo "Number of notes:<br>";
    foreach ($notes as $key => $note) {
        if ($note_count[$key] > 0) {
            echo $note_count[$key] . " notes of Rs. " . $note . "<br>";
        }
    }
}
count_notes(868);
?>