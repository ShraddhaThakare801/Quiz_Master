<?php
session_start();
$count = 0;
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['q1']))
    {
        $selected_opt = $_POST['q1'];
        if($selected_opt === '1.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q2']))
    {
        $selected_opt = $_POST['q2'];
        if($selected_opt === '2.1')
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
        if($selected_opt === '4.2')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q5']))
    {
        $selected_opt = $_POST['q5'];
        if($selected_opt === '5.1')
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
        if($selected_opt === '8.1')
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
    <title>IoT Quiz</title>
    <link href="myStyle.css" rel="stylesheet">
</head>
<form method="post" action="result.php">
    
<body>
<div class="que">1. What is the full form of IoT?</div>
<div class="opt">
    <label>
        <input type="radio" name="q1" value="1.1" required> a) Internet of Technology<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.2"> b) Incorporate of Things<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.3"> c) Internet of Things<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.4">d) Incorporate of Technology<br>
    </label>

View Answer
</div>

<div class="que">2. What is IoT?</div>
<div class="opt">

    <label>
        <input type="radio" name="q2" value="2.1" required>a) network of physical objects embedded with sensors<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.2">b) network of virtual objects<br>
    </label>

    <label>
        <input type="radio" name="q3" value="2.3">c) network of objects in the ring structure<br>
    </label>

    <label>
        <input type="radio" name="q4" value="2.4">d) network of sensors<br>
    </label>

View Answer
</div>

<div class="que">3. Who coined the term “Internet of Things”?</div>
<div class="opt">

    <label>
        <input type="radio" name="q3" value="3.1" required> a) Kevin Aston<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.2"> b) John Wright<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.3">c) Edward Jameson<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.4"> d) George Garton<br>
    </label>

View Answer
</div>

<div class="que">4. When was the actual term “Internet of Things” coined?</div>
<div class="opt">

    <label>
        <input type="radio" name="q4" value="4.1" required> a) 1998<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.2"> b) 1999<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.3"> c) 2000<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.4"> d) 2002<br>
    </label>

View Answer
</div>

<div class="que">5. Which of the following is not an IoT device?</div>
<div class="opt">

    <label>
        <input type="radio" name="q5" value="5.1" required> a) Table<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.2"> b) Laptop<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.3"> c) Arduino<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.4"> d) Tablet<br>
    </label>

View Answer
</div>

<div class="que">6. Which of the following is false about IoT devices?</div>
<div class="opt">

    <label>
        <input type="radio" name="q6" value="6.1" required> a) IoT devices use the internet for collecting and sharing data<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.2"> b) IoT devices need microcontrollers<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.3">c) IoT devices use wireless technology<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.4"> d) IoT devices are completely safe<br>
    </label>

View Answer
</div>

<div class="que">7. Which of the following is not an IoT platform?</div>
<div class="opt">

    <label>
        <input type="radio" name="q7" value="7.1" required> a) Amazon Web Services<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.2"> b) Microsoft Azure<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.3"> c) Salesforce<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.4">d) Flipkart<br>
    </label>

View Answer
</div>

<div class="que">8. Which of the following is not an application of IoT?</div>
<div class="opt">

    <label>
        <input type="radio" name="q8" value="8.1" required> a) BMP280<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.2"> b) Smart home<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.3">c) Smart city<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.4">d) Self-driven cars<br>
    </label> 

View Answer
</div>

<div class="que">9. Which of the following is not a fundamental component of an IoT system?</div>
<div class="opt">

    <label>
        <input type="radio" name="q9" value="9.1" required> a) Sensors<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.2"> b) Connectivity and data processing<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.3"> c) User interface<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.4"> d) Transformer<br>
    </label> 

View Answer
</div>

<div class="que">10. What is the full form of IIOT?</div>
<div class="opt">

    <label>
        <input type="radio" name="q10" value="10.1" required> a) Index Internet of Things<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.2">b) Incorporate Internet of Things<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.3"> c) Industrial Internet of Things<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.4"> d) Intense Internet of Things<br>
    </label> 

View Answer
</div>

<section>
    <input type="submit" value="submit" id="btn">
</section>

</body>
</form>
</html>