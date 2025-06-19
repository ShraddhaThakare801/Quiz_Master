<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['quiz'])) {

        $selected_quiz = $_POST['quiz'];

        switch($selected_quiz) {
            case 'AI':
                header("Location: ai_quiz.php");
                break;
            case 'IoT':
                header("Location: iot_quiz.php");
                break;
            case 'DSA':
                header("Location: dsa_quiz.php");
                break;
            case 'ML':
                header("Location: ml_quiz.php");
                break;
            case 'Cybersecurity':
                header("Location: cs_quiz.php");
                break;
            default:
                echo "Invalid Selection!";
        }
    } 
    else 
    {
        echo "Please select the quiz!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criteria</title>
    <link rel="stylesheet" href="quizCriteria.css">
</head>

<body>
<form method="POST">
    <div class="container">
        <div class="head">
            <h1>Quiz Criteria</h1>
        </div>

        <div class="criteria">
        
         <label>
         <input type="radio" name="quiz" value="AI"> AI Quiz
         </label>
         <br/>

         <label>
         <input type="radio" name="quiz" value="IoT">IoT Quiz
         </label>
         <br/>

         <label>
         <input type="radio" name="quiz" value="DSA"> DSA Quiz
         </label>
         <br/>

         <label>
         <input type="radio" name="quiz" value="ML"> Machine Learning Quiz
         </label>
         <br/>

         <label>
         <input type="radio" name="quiz" value="Cybersecurity">Cybersecurity Quiz
         </label>
         <br/>
      </div>

    <section>
        <button type="submit" value="Start Quiz" id="btn">Start Quiz</button>
    </section>

 </div>
 </form>
</body>
</html>