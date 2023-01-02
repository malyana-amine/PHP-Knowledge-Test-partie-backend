<?php
include './classes/qa.php' ;
// include './classes/DBc.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>phpQuiz</title>
</head>
<body>

<section class="pageInfo">
    <h1 class="textTitle">Bienvenue au quiz PHP</h1>
    <ul class="textInfo">
        <li>Dans ce quiz, vous obtiendrez votre résultat à la fin</li>
        <li>Vous ne pourrez pas ignorer la question ou revenir à la question à laquelle vous avez répondu</li>
        <li>vous pouvez terminer le test quand vous le souhaitez</li>
        <li>Si vous ne pouvez pas répondre avant 15 secondes, votre réponse est considérée comme fausse</li>
        <li>Les questions s'affichent dans un ordre aléatoire. Vous ferez de nouvelles découvertes à chaque fois!</li>
        <li>Si vous êtes prêt, cliquez sur start quiz</li>
    </ul>
    <button class="startBtn hover-1 textInfo button1" onclick="generateRandomNumber()">start quiz</button>
</section>

<section class="pageQue1 hidden">

    <div class="progress-bar">
        <div class="progress-bar-fill"></div>
      </div>
    
    <p class="ques textQue"></p>
    <div class="options">
    <button class="choice1 textQue choise_btn11 option hover" value="1"></button>
    <button class="choice2 textQue choise_btn21 option hover" value="2"></button>
    <button class="choice3 textQue choise_btn31 option hover" value="3"></button>
    <button class="choice4 textQue choise_btn41 option hover" value="4"></button>
    </div>
    <p class="quescoun textQue">question 2/10</p>
    <!-- <p class="textQue timer">time left 15</p> -->
    
    <div id="timer" class="textQue">time left 15</div>
    <div>
    
    <button class="exitBtn textInfo button2 hover-2">exit Quiz</button>
    <button class="nxtBtn textInfo hidden button3 hover-3">next question</button>
    <button class="resBtn textInfo hidden button3 hover-3">show your Result</button>
</div>
</section>

<section class="pageRes hidden">
    <p class="textInfo answercount">tu es terminé le quiz avec une note de 0/10(0%)</p>
</section>


<script src="./Scripts/questions.js"></script>
    <script src="./Scripts/script.js"></script>
</body>
</html>
