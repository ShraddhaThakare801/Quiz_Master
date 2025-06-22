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
        if($selected_opt === '4.3')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q5']))
    {
        $selected_opt = $_POST['q5'];
        if($selected_opt === '5.2')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q6']))
    {
        $selected_opt = $_POST['q6'];
        if($selected_opt === '6.1')
        {
            $count = $count + 10;
        }
        $_SESSION['score'] = $count;
        $sc = $_SESSION['score'];
    }

    if(isset($_POST['q7']))
    {
        $selected_opt = $_POST['q7'];
        if($selected_opt === '7.2')
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
        if($selected_opt === '9.2')
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
    <title>ML Quiz</title>
    <link href="myStyle.css" rel="stylesheet">
</head>
<form method="post" action="result.php">
<body>

<div class="que">1. What is Machine learning?</div>
<div class="opt">

    <label>
        <input type="radio" name="q1" value="1.1" required> a) The selective acquisition of knowledge through the use of computer programs<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.2">b) The selective acquisition of knowledge through the use of manual programs<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.3"> c) The autonomous acquisition of knowledge through the use of computer programs<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.4">d) The autonomous acquisition of knowledge through the use of manual programs<br>
    </label>

View Answer
</div>

<div class="que">2. K-Nearest Neighbors (KNN) is classified as what type of machine learning algorithm?</div>
<div class="opt">

    <label>
        <input type="radio" name="q2" value="2.1" required>a) Instance-based learning<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.2">b) Parametric learning<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.3">c) Non-parametric learning<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.4">d) Model-based learning<br>
    </label>

View Answer
</div>

<div class="que">3. Which of the following is not a supervised machine learning algorithm?</div>
<div class="opt">

    <label>
        <input type="radio" name="q3" value="3.1" required> a) K-means<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.2"> b) Naïve Bayes<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.3">c) SVM for classification problems<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.4"> d) Decision tree<br>
    </label>

View Answer
</div>

<div class="que">4. What’s the key benefit of using deep learning for tasks like recognizing images?</div>
<div class="opt">

    <label>
        <input type="radio" name="q4" value="4.1" required> a) They need less training data than other methods.<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.2"> b) They’re easier to explain and understand than other models.<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.3"> c) They can learn complex details from the data on their own.<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.4"> d) They work faster and are more efficient computationally.<br>
    </label>

View Answer
</div>

<div class="que">5. Which algorithm is best suited for a binary classification problem?</div>
<div class="opt">

    <label>
        <input type="radio" name="q5" value="5.1" required> a) K-nearest Neighbors<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.2">b) Decision Trees<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.3"> c) Random Forest<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.4"> d) Linear Regression<br>
    </label>

View Answer
</div>

<div class="que">6. What is the key difference between supervised and unsupervised learning?</div>
<div class="opt">

    <label>
        <input type="radio" name="q6" value="6.1" required>a) Supervised learning requires labeled data, while unsupervised learning does not.<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.2"> b) Supervised learning predicts labels, while unsupervised learning discovers patterns.<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.3">c) Supervised learning is used for classification, while unsupervised learning is used for regression.<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.4"> d) Supervised learning is always more accurate than unsupervised learning.<br>
    </label>

View Answer
</div>

<div class="que">7. Which type of machine learning algorithm falls under the category of “unsupervised learning”?</div>
<div class="opt">

    <label>
        <input type="radio" name="q7" value="7.1" required> a) Linear Regression<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.2"> b) K-means Clustering<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.3"> c) Decision Trees<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.4">d) Random Forest<br>
    </label>

View Answer
</div>

<div class="que">8. Which of the following statements is true about AdaBoost?</div>
<div class="opt">

    <label>
        <input type="radio" name="q8" value="8.1" required> a) It is particularly prone to overfitting on noisy datasets<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.2"> b) Complexity of the weak learner is important in AdaBoost<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.3">c) It is generally more prone to overfitting<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.4">d) It improves classification accuracy<br>
    </label> 

View Answer
</div>

<div class="que">9. Which one of the following models is a generative model used in machine learning?</div>
<div class="opt">

    <label>
        <input type="radio" name="q9" value="9.1" required> a) Support vector machines<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.2"> b) Naïve Bayes<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.3"> c) Logistic Regression<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.4"> d) Linear Regression<br>
    </label> 

View Answer
</div>

<div class="que">10. An artificially intelligent car decreases its speed based on its distance from the car in front of it. Which algorithm is used?</div>
<div class="opt">

    <label>
        <input type="radio" name="q10" value="10.1" required> a) Naïve-Bayes<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.2">b) Decision Tree<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.3">c) Linear Regression<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.4">d) Logistic Regression<br>
    </label> 

View Answer
</div>

<section>
    <input type="submit" value="submit" id="btn">
</section>

</body>
</form>
</html>