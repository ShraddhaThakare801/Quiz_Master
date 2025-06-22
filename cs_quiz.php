<?php
session_start();
$count = 0;
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(isset($_POST['q1']))
    {
        $selected_opt = $_POST['q1'];
        if($selected_opt === '1.4')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q2']))
    {
        $selected_opt = $_POST['q2'];
        if($selected_opt === '2.2')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q3']))
    {
        $selected_opt = $_POST['q3'];
        if($selected_opt === '3.1')
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
        if($selected_opt === '5.4')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q6']))
    {
        $selected_opt = $_POST['q6'];
        if($selected_opt === '6.4')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q7']))
    {
        $selected_opt = $_POST['q7'];
        if($selected_opt === '7.4')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

     if(isset($_POST['q8']))
    {
        $selected_opt = $_POST['q8'];
        if($selected_opt === '8.4')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q9']))
    {
        $selected_opt = $_POST['q9'];
        if($selected_opt === '9.4')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q10']))
    {
        $selected_opt = $_POST['q10'];
        if($selected_opt === '10.4')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Security Quiz</title>
    <link href="myStyle.css" rel="stylesheet">
</head>
<body>
<form method="POST" action="result.php">
<div class="que"> 1.What is Cyber Security?</div>
<div class="opt">
    <label>
        <input type="radio" name="q1" value="1.1" required> a) Cyber Security provides security against malware<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.2"> b) Cyber Security provides security against cyber-terrorists<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.3"> c) Cyber Security protects a system from cyber attacks<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.4">d) All of the mentioned<br>
    </label>

View Answer
</div>

<div class="que">2. What does cyber security protect?</div>
<div class="opt">

    <label>
        <input type="radio" name="q2" value="2.1" required>a) Cyber security protects criminals<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.2">b) Cyber security protects internet-connected systems<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.3">c) Cyber security protects hackers<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.4">d) None of the mentioned<br>
    </label>

View Answer
</div>

<div class="que">3. Who is the father of computer security?</div>
<div class="opt">

    <label>
        <input type="radio" name="q3" value="3.1" required> a) August Kerckhoffs<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.2"> b) Bob Thomas<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.3">c) Robert<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.4"> d) Charles<br>
    </label>

</div>

<div class="que">4. Which of the following is defined as an attempt to steal, spy, damage or destroy computer systems, networks, or their associated information?</div>
<div class="opt">
    <label>
        <input type="radio" name="q4" value="4.1" required> a) Cyber attack<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.2"> b) Computer security<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.3"> c) Cryptography<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.4"> d) Digital hacking<br>
    </label>

View Answer
</div>

<div class="que">5. Which of the following is a type of cyber security?</div>
<div class="opt">

    <label>
        <input type="radio" name="q5" value="5.1" required> a) Cloud Security<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.2"> b) Network Security<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.3"> c) Application Security<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.4"> d) All of the above<br>
    </label>

</div>

<div class="que">6. What are the features of cyber security?</div>
<div class="opt">

    <label>
        <input type="radio" name="q6" value="6.1" required> a) Compliance<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.2"> b) Defense against internal threats<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.3">c) Threat Prevention<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.4"> d) All of the above<br>
    </label>

View Answer
</div>

<div class="que">7. Which of the following is an objective of network security?</div>
<div class="opt">

    <label>
        <input type="radio" name="q7" value="7.1" required> a) Confidentiality<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.2"> b) Integrity<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.3"> c) Availability<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.4">d) All of the above<br>
    </label>

View Answer
</div>

<div class="que">8. Which of the following is not a cybercrime?</div>
<div class="opt">

    <label>
        <input type="radio" name="q8" value="8.1" required> a) Denial of Service<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.2"> b) Man in the Middle<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.3">c) Malware<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.4"> d) AES<br>
    </label> 

</div>

<div class="que">9. Which of the following is a component of cyber security?</div>
<div class="opt">

    <label>
        <input type="radio" name="q9" value="9.1" required> a) Internet Of Things<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.2"> b) AI<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.3"> c) Database<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.4"> d) Attacks<br>
    </label> 

View Answer
</div>

<div class="que">10. Which of the following is a type of cyber attack?</div>
<div class="opt">

    <label>
        <input type="radio" name="q10" value="10.1" required> a) Phishing<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.2"> b) SQL Injections<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.3"> c) Password Attack<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.4"> d) All of the above<br>
    </label> 

View Answer
</div>

<section>
    <input type="submit" value="submit" id="btn">
</section>
</form>
</body>

</html>