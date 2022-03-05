<?php
$quizName = "quiz1"; // THE NAME OF THE QUIZ Q&A TEXT FILE ie: 'quiz1' must be saved as 'quiz1.txt' in dir 'quizzes'


function printQuizQuestion($num, $questionType, $questionAnswer, $questionText){
    $answersHTML = "";
    if($questionType == "t/f"){
        $answers = array("True", "False");
        $answer = $answers[0];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[1];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
    } else if($questionType == "m/c-3"){
        $answers = array("Answer a", "Answer b", "Answer c");
        $answer = $answers[0];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[1];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[2];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
    } else if($questionType == "m/c-4"){
        $answers = array("Answer a", "Answer b", "Answer c", "Answer d");
        $answer = $answers[0];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[1];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[2];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[3];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
    } else if($questionType == "m/c-5"){
        $answers = array("Answer a", "Answer b", "Answer c", "Answer d", "Answer e");
        $answer = $answers[0];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[1];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[2];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[3];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
        $answer = $answers[4];
        $answerRadioHTML = "<div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'><label class='form-check-label' for='flexRadioDefault1'>" . $answer . "</label></div>";
        $answersHTML = $answersHTML . $answerRadioHTML;
    } else if($questionType == "s/a"){
        $answerBoxHTML = "<input type='text' class='form-control' style='width: 10rem'>";
        $answersHTML = $answersHTML . $answerBoxHTML;
    }
    $cardHTML = "<div class='card text-dark bg-light mb-3' style='max-width: 90rem;'><div class='card-header'><div class='form-check form-switch'><input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault'></div></div><div class='card-body'><h5 class='card-title'>Question " . $num . "</h5><p class='card-text'>" . $questionText . "</p><form>" . $answersHTML . "</form></div></div>";
    echo $cardHTML;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php echo "<title>" . $quizName . "</title>"; ?>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="icon" href="resources/icon.svg" type="image/x-icon">
</head>
<body>
<div class="p-5" style="width: 90rem">
    <?php
    printQuizQuestion("1", "t/f", "t", "Some quick example text to BUILD on the card title and make up the bulk of the card's content.");
    printQuizQuestion("2", "m/c-3", "t", "Some quick example text to BUILD on the card title and make up the bulk of the card's content.");
    printQuizQuestion("3", "m/c-4", "t", "Some quick example text to BUILD on the card title and make up the bulk of the card's content.");
    printQuizQuestion("4", "m/c-5", "t", "Some quick example text to BUILD on the card title and make up the bulk of the card's content.");
    printQuizQuestion("5", "s/a", "t", "Some quick example text to BUILD on the card title and make up the bulk of the card's content.");
    ?>
    <form action="grades/" method="POST">
        <button type="submit" class="btn btn-secondary float-end">Submit</button>
    </form>
</div>
<script src="bootstrap/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap/popper.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>