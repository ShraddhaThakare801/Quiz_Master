<?php
session_start();
$count = 0;
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['q1']))
    {
        $selected_opt = $_POST['q1'];
        if($selected_opt === '1.2')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q2']))
    {
        $selected_opt = $_POST['q2'];
        if($selected_opt === '2.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q3']))
    {
        $selected_opt = $_POST['q3'];
        if($selected_opt === '3.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q4']))
    {
        $selected_opt = $_POST['q4'];
        if($selected_opt === '4.1')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q5']))
    {
        $selected_opt = $_POST['q5'];
        if($selected_opt === '5.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q6']))
    {
        $selected_opt = $_POST['q6'];
        if($selected_opt === '6.2')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q7']))
    {
        $selected_opt = $_POST['q7'];
        if($selected_opt === '7.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q8']))
    {
        $selected_opt = $_POST['q8'];
        if($selected_opt === '8.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q9']))
    {
        $selected_opt = $_POST['q9'];
        if($selected_opt === '9.1')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q10']))
    {
        $selected_opt = $_POST['q10'];
        if($selected_opt === '10.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Quiz</title>
    <link href="myStyle.css" rel="stylesheet">
</head>
<body>
<form method="POST" action = "result.php">
<div class="que">1. What is the full form of “AI”?</div>
<div class="opt">
    <label>
        <input type="radio" name="q1" value="1.1" required> a) Artificially Intelligent<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.2"> b) Artificial Intelligence<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.3"> c) Artificially Intelligence<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.4"> d) Advanced Intelligence<br>
    </label>

</div>
View Answer

<div class="que">2. What is Artificial Intelligence?</div>
<div class="opt">
    <label>
        <input type="radio" name="q2" value="2.2" required> a) Artificial Intelligence is a field that aims to make humans more intelligent<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.2"> b) Artificial Intelligence is a field that aims to improve the security<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.3"> c) Artificial Intelligence is a field that aims to develop intelligent machines<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.4"> d) Artificial Intelligence is a field that aims to mine the data<br>
    </label>

</div>
View Answer

<div class="que">3. Who is the inventor of Artificial Intelligence?</div>
<div class="opt">
    <label>
        <input type="radio" name="q3" value="3.1" required> a) Geoffrey Hinton<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.2"> b) Andrew Ng<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.3">c) John McCarthy<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.4"> d) Jürgen Schmidhuber<br>
    </label>

</div>

<div class="que">4. Which of the following is the branch of Artificial Intelligence?</div>
<div class="opt">
    <label>
        <input type="radio" name="q4" value="4.1" required> a) Machine Learning<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.2"> b) Cyber forensics<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.3"> c) Full-Stack Developer<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.4"> d) Network Design<br>
    </label>

View Answer
</div>

<div class="que">5. What is the goal of Artificial Intelligence?</div>
<div class="opt">
    <label>
        <input type="radio" name="q5" value="5.1" required> a) To solve artificial problems<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.2"> b) To extract scientific causes<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.3"> c) To explain various sorts of intelligence<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.4"> d) To solve real-world problems<br>
    </label>

View Answer
</div>

<div class="que">6. Which of the following is an application of Artificial Intelligence?</div>
<div class="opt">
    <label>
        <input type="radio" name="q6" value="6.1" required> a) It helps to exploit vulnerabilities to secure the firm<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.2"> b) Language understanding and problem-solving (Text analytics and NLP)<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.3"> c) Easy to create a website<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.4"> d) It helps to deploy applications on the cloud<br>
    </label>

View Answer
</div>

<div class="que">7. In how many categories process of Artificial Intelligence is categorized?</div>
<div class="opt">

    <label>
        <input type="radio" name="q7" value="7.1" required> a) categorized into 5 categories<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.2"> b) processes are categorized based on the input provided<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.3"> c) categorized into 3 categories<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.4">d) process is not categorized<br>
    </label>

View Answer
</div>

<div class="que"></div>8. Based on which of the following parameter Artificial Intelligence is categorized?</div>
<div class="opt">
    <label>
        <input type="radio" name="q8" value="8.1" required> a) Based on functionally only<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.2"> b) Based on capabilities only<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.3">c) Based on capabilities and functionally<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.4"> d) It is not categorized<br>
    </label> 
View Answer
</div>

<div class="que">9. Which of the following is a component of Artificial Intelligence?</div>
<div class="opt">
    <label>
        <input type="radio" name="q9" value="9.1" required> a) Learning<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.2"> b) Training<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.3"> c) Designing<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.4"> d) Puzzling<br>
    </label> 

View Answer
</div>

<div class="que">10. What is the function of an Artificial Intelligence “Agent”?</div>
<div class="opt">

    <label>
        <input type="radio" name="q10" value="10.1" required> a) Mapping of goal sequence to an action<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.2"> b) Work without the direct interference of the people<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.3"> c) Mapping of precept sequence to an action<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.4"> d) Mapping of environment sequence to an action<br>
    </label> 

View Answer
</div>

<section>
    <input type="submit" value="submit" id="btn">
</section>
</form>
</body>
</html>