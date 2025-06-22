<?php
session_start();
$count = 0;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
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
        if($selected_opt === '2.4')
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
        if($selected_opt === '6.3')
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
        if($selected_opt === '10.4')
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
    <title>DSA Quiz</title>
    <link href="myStyle.css" rel="stylesheet">
</head>
<form method="POST" action = "result.php">
<body>
<div class="que">1. What is a data structure?</div>
<div class="opt">

    <label>
        <input type="radio" name="q1" value="1.1" required> a) A programming language<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.2"> b) A collection of algorithms<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.3"> c) A way to store and organize data<br>
    </label>

    <label>
        <input type="radio" name="q1" value="1.4">d) A type of computer hardware<br>
    </label>

View Answer
</div>

<div class="que">2. What are the disadvantages of arrays?</div>
<div class="opt">

    <label>
        <input type="radio" name="q2" value="2.1" required>a) Index value of an array can be negative<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.2">b) Elements are sequentially accessed<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.3">c) Data structure like queue or stack cannot be implemented<br>
    </label>

    <label>
        <input type="radio" name="q2" value="2.4">d) There are chances of wastage of memory space if elements inserted in an array are lesser than the allocated size<br>
    </label>

View Answer
</div>

<div class="que">3. Which data structure is used for implementing recursion?</div>
<div class="opt">

    <label>
        <input type="radio" name="q3" value="3.1" required> a) Stack<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.2"> b) Queue<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.3">c) List<br>
    </label>

    <label>
        <input type="radio" name="q3" value="3.4"> d) Array<br>
    </label>

View Answer
</div>

<div class="que">4. The data structure required to check whether an expression contains a balanced parenthesis is?</div>
<div class="opt">

    <label>
        <input type="radio" name="q4" value="4.1" required> a) Queue<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.2"> b) Stack<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.3"> c) Tree<br>
    </label>

    <label>
        <input type="radio" name="q4" value="4.4"> d) Array<br>
    </label>

View Answer
</div>

<div class="que">5. Which of the following is not the application of stack?</div>
<div class="opt">

    <label>
        <input type="radio" name="q5" value="5.1" required> a) Data Transfer between two asynchronous process<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.2"> b) Compiler Syntax Analyzer<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.3"> c) Tracking of local variables at run time<br>
    </label>

    <label>
        <input type="radio" name="q5" value="5.4"> d) A parentheses balancing program<br>
    </label>

View Answer
</div>

<div class="que">6. Which data structure is needed to convert infix notation to postfix notation?</div>
<div class="opt">

    <label>
        <input type="radio" name="q6" value="6.1" required> a) Tree<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.2"> b) Defense against internal threats<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.3">c) Stack<br>
    </label>

    <label>
        <input type="radio" name="q6" value="6.4"> d) Queue<br>
    </label>

View Answer
</div>

<div class="que">7. What is the value of the postfix expression 6 3 2 4 + – *?</div>
<div class="opt">

    <label>
        <input type="radio" name="q7" value="7.1" required> a) 74<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.2"> b) -18<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.3"> c) 22<br>
    </label>

    <label>
        <input type="radio" name="q7" value="7.4">d) 40<br>
    </label>

View Answer
</div>

<div class="que">8. What data structure would you mostly likely see in non recursive implementation of a recursive algorithm?</div>
<div class="opt">

    <label>
        <input type="radio" name="q8" value="8.1" required> a) Stack<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.2"> b) Linked List<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.3">c) Tree<br>
    </label> 

    <label>
        <input type="radio" name="q8" value="8.4">d) Queue<br>
    </label> 

View Answer
</div>

<div class="que">9. Which of the following statement(s) about stack data structure is/are NOT correct?</div>
<div class="opt">

    <label>
        <input type="radio" name="q9" value="9.1" required> a) Top of the Stack always contain the new node<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.2"> b) Stack is the FIFO data structure<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.3"> c) Null link is present in the last node at the bottom of the stack<br>
    </label> 

    <label>
        <input type="radio" name="q9" value="9.4"> d) Linked List are used for implementing Stacks<br>
    </label> 

View Answer
</div>

<div class="que">10. The data structure required for Breadth First Traversal on a graph is?</div>
<div class="opt">

    <label>
        <input type="radio" name="q10" value="10.1" required> a) Array<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.2">b) Stack<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.3"> c) Tree<br>
    </label> 

    <label>
        <input type="radio" name="q10" value="10.4"> d) Queue<br>
    </label> 

View Answer
</div>

<section>
    <input type="submit" value="submit" id="btn">
</section>

</body>
</form>
</html>