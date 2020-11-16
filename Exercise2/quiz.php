//<?php include 'quiz.php';?>//
//website on help with "form" commands
//https://www.w3schools.com/tags/tag_form.asp
//http://www.csun.edu/science/help/help_docs/html_tags.html

<?php


$grade=0;



$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

echo "<b> Question 1: Question 1: What is the tallest bear? </b>";
echo "<br> Your answer: " . $q1 . "<br>" . "Correct answer: Polar Bear, 10ft tall";

echo "<br><br><b> Question 2: Which is the smallest bird? </b>";
echo "<br> Your answer: " . $q2 . "<br>" . "Correct answer: Hummingbird, 2inches long";

echo "<br><br><b> Question 3: Which is the deepest ocean? </b>";
echo "<br> Your answer: " . $q3 . "<br>" . "Correct answer: Atlantic Ocean, 36,201ft deep";

echo "<br><br><b> Question 4:  What is the biggest planet? </b>";
echo "<br> Your answer: " . $q4 . "<br>" . "Correct answer: Jupiter, diameter of 458,730,000ft";

echo "<br><br><b> Question 5: Adult average screen time per day? </b>";
echo "<br> Your answer: " . $q5 . "<br>" . "Correct answer: 11hrs";


if($q1=="Polar"){
    $grade=$grade+1;
}

if($q2=="Hum"){
    $grade=$grade+1;
}

if($q3=="Atlantic"){
    $grade=$grade+1;
}

if($q4=="Jupiter"){
    $grade=$grade+1;
}

if($q5=="11"){
    $grade=$grade+1;
}

echo "<br><br><br><b>Correctly Picked Answers: " . $grade . "out of 5</b";
echo "<br><b>Grade: " . $grade/5*100 . "%</b>";



?>
