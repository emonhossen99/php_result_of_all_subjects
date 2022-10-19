<?php

$ban_1 = 70;
$ban_2 = 90;
$eng_1 = 75;
$eng_2 = 75;
$math = 80;
$hig_math = 60;
$bio = 57;
$phy = 80;
$chy = 85;
$ilm = 90;


// bangla first paper 
$bangla_1 = $ban_1;

if ($bangla_1 >= 80 && $bangla_1 <= 100) {
    echo ("Bangla 1st Paper : A+ </br>");
}
else if ($bangla_1 >= 70 && $bangla_1 <= 79) {
    echo ("Bangla 1st Paper : A </br>");
}
else if ($bangla_1 >= 60 && $bangla_1 <= 69) {
    echo ("Bangla 1st Paper : A- </br>");
}
else if ($bangla_1 >= 50 && $bangla_1 <= 59) {
    echo ("Bangla 1st Paper : B </br>");
}
else if ($bangla_1 >= 40 && $bangla_1 <= 49) {
    echo ("Bangla 1st Paper : C </br>");
}
else if ($bangla_1 >= 33 && $bangla_1 <= 39) {
    echo ("Bangla 1st Paper : D </br>");
}
else if ($bangla_1 >= 00 && $bangla_1 <= 32) {
    echo ("Bangla 1st Paper : F </br>");
}
else{
 echo('Invalid Number');
}


// bangla second paper 
$bangla_2 = $ban_2;

if ($bangla_2 >= 80 && $bangla_2 <= 100) {
    echo ("Bangla 2st Paper : A+ </br>");
}
else if ($bangla_2 >= 70 && $bangla_2 <= 79) {
    echo ("Bangla 2st Paper : A </br>");
}
else if ($bangla_2 >= 60 && $bangla_2 <= 69) {
    echo ("Bangla 2st Paper : A- </br>");
}
else if ($bangla_2 >= 50 && $bangla_2 <= 59) {
    echo ("Bangla 2st Paper : B </br>");
}
else if ($bangla_2 >= 40 && $bangla_2 <= 49) {
    echo ("Bangla 2st Paper : C </br>");
}
else if ($bangla_2 >= 33 && $bangla_2 <= 39) {
    echo ("Bangla 2st Paper : D </br>");
}
else if ($bangla_2 >= 00 && $bangla_2 <= 32) {
    echo ("Bangla 2st Paper : F </br>");
}
else{
 echo('Invalid Number');
}

//over all bangla
$over_bangla = $bangla_1 + $bangla_2;
$over_bangla_value;
if ($over_bangla >= 160 && $over_bangla <= 200) {
    echo ("Overall Bangla : A+ </br>");
    $over_bangla_value = 5;
}
else if ($over_bangla >= 140 && $over_bangla <= 159) {
    echo ("Overall Bangla : A </br>");
    $over_bangla_value = 4;
}
else if ($over_bangla >= 120 && $over_bangla <= 139) {
    echo ("Overall Bangla : A- </br>");
    $over_bangla_value = 3.5;
}
else if ($over_bangla >= 100 && $over_bangla <= 119) {
    echo ("Overall Bangla : B </br>");
    $over_bangla_value = 3;
}
else if ($over_bangla >= 80 && $over_bangla <= 99) {
    echo ("Overall Bangla : C </br>");
    $over_bangla_value = 2;
}
else if ($over_bangla >= 60 && $over_bangla <= 79) {
    echo ("Overall Bangla : D </br>");
    $over_bangla_value = 1;
}
else if ($over_bangla >= 40 && $over_bangla <= 59) {
    echo ("Overall Bangla : F </br>");
    $over_bangla_value = 0;
}
else{
 echo('Invalid Number');
 $over_bangla_value;
}

// english first paper 
$english_1 = $eng_1;

if ($english_1 >= 80 && $english_1 <= 80) {
    echo ("English 1st Paper : A+ </br>");
}
else if ($english_1 >= 70 && $english_1 <= 79) {
    echo ("English 1st Paper : A </br>");
}
else if ($english_1 >= 60 && $english_1 <= 69) {
    echo ("English 1st Paper : A- </br>");
}
else if ($english_1 >= 50 && $english_1 <= 59) {
    echo ("English 1st Paper : B </br>");
}
else if ($english_1 >= 40 && $english_1 <= 49) {
    echo ("English 1st Paper : C </br>");
}
else if ($english_1 >= 33 && $english_1 <= 39) {
    echo ("English 1st Paper : D </br>");
}
else if ($english_1 >= 00 && $english_1 <= 32) {
    echo ("English 1st Paper : F </br>");
}
else{
 echo('Invalid Number');
}


//english second paper 
$english_2 = $eng_2;

if ($english_2 >= 80 && $english_2 <= 100) {
    echo ("English 2st Paper : A+ </br>");
}
else if ($english_2 >= 70 && $english_2 <= 79) {
    echo ("English 2st Paper : A </br>");
}
else if ($english_2 >= 60 && $english_2 <= 69) {
    echo ("English 2st Paper : A- </br>");
}
else if ($english_2 >= 50 && $english_2 <= 59) {
    echo ("English 2st Paper : B </br>");
}
else if ($english_2 >= 40 && $english_2 <= 49) {
    echo ("English 2st Paper : C </br>");
}
else if ($english_2 >= 33 && $english_2 <= 39) {
    echo ("English 2st Paper : D </br>");
}
else if ($english_2 >= 00 && $english_2 <= 32) {
    echo ("English 2st Paper : F </br>");
}
else{
 echo('Invalid Number');
}

//over all english
$over_english = $english_1 + $english_2;
$over_english_value;
if ($over_english >= 160 && $over_english <= 200) {
    echo ("Overall Bangla : A+ </br>");
    $over_english_value = 5;
}
else if ($over_english >= 140 && $over_english <= 159) {
    echo ("Overall Bangla : A </br>");
    $over_english_value = 4;
}
else if ($over_english >= 120 && $over_english <= 139) {
    echo ("Overall Bangla : A- </br>");
    $over_english_value = 3.5;
}
else if ($over_english >= 100 && $over_english <= 119) {
    echo ("Overall Bangla : B </br>");
    $over_english_value = 3;
}
else if ($over_english >= 80 && $over_english <= 99) {
    echo ("Overall Bangla : C </br>");
    $over_english_value = 2;
}
else if ($over_english >= 60 && $over_english <= 79) {
    echo ("Overall Bangla : D </br>");
    $over_english_value = 1;
}
else if ($over_english >= 40 && $over_english <= 59) {
    echo ("Overall Bangla : F </br>");
    $over_english_value = 0;
}
else{
 echo('Invalid Number');
 $over_english_value;
}


// Mathematics
$Mathematics = $math;
$Mathematics_value;
if ($Mathematics >= 80 && $Mathematics <= 100) {
    echo ("Mathematics : A+ </br>");
    $Mathematics_value = 5;
}
else if ($Mathematics >= 70 && $Mathematics <= 79) {
    echo ("Mathematics : A </br>");
    $Mathematics_value = 4;
}
else if ($Mathematics >= 60 && $Mathematics <= 69) {
    echo ("Mathematics : A- </br>");
    $Mathematics_value = 3.5;
}
else if ($Mathematics >= 50 && $Mathematics <= 59) {
    echo ("Mathematics : B </br>");
    $Mathematics_value = 3;
}
else if ($Mathematics >= 40 && $Mathematics <= 49) {
    echo ("Mathematics : C </br>");
    $Mathematics_value = 2;
}
else if ($Mathematics >= 33 && $Mathematics <= 39) {
    echo ("Mathematics : D </br>");
    $Mathematics_value = 1;
}
else if ($Mathematics >= 00 && $Mathematics <= 32) {
    echo ("Mathematics : F </br>");
    $Mathematics_value = 0;
}
else{
 echo('Invalid Number');
 $Mathematics_value;
}


//Higher Math
$H_Math = $hig_math;
$Higher_Math_value;
if ($H_Math >= 80 && $H_Math <= 100) {
    echo ("Higher Math : A+ </br>");
    $Higher_Math_value = 5;
}
else if ($H_Math >= 70 && $H_Math <= 79) {
    echo ("Higher Math : A </br>");
    $Higher_Math_value = 4;
}
else if ($H_Math >= 60 && $H_Math <= 69) {
    echo ("Higher Math : A- </br>");
    $Higher_Math_value = 3.5;
}
else if ($H_Math >= 50 && $H_Math <= 59) {
    echo ("Higher Math : B </br>");
    $Higher_Math_value = 3;
}
else if ($H_Math >= 40 && $H_Math <= 49) {
    echo ("Higher Math : C </br>");
    $Higher_Math_value = 2;
}
else if ($H_Math >= 33 && $H_Math <= 39) {
    echo ("Higher Math : D </br>");
    $Higher_Math_value = 1;
}
else if ($H_Math >= 00 && $H_Math <= 32) {
    echo ("Higher Math : F </br>");
    $Higher_Math_value = 0;
}
else{
 echo('Invalid Number');
 $Higher_Math_value;
}

//biology
$biology = $bio;
$biology_value;
if ($biology >= 80 && $biology <= 100) {
    echo ("Biology : A+ </br>");
    $biology_value = 5;
}
else if ($biology >= 70 && $biology <= 79) {
    echo ("Biology : A </br>");
    $biology_value = 4;
}
else if ($biology >= 60 && $biology <= 69) {
    echo ("Biology : A- </br>");
    $biology_value = 3.5;
}
else if ($biology >= 50 && $biology <= 59) {
    echo ("Biology : B </br>");
    $biology_value = 3;
}
else if ($biology >= 40 && $biology <= 49) {
    echo ("Biology : C </br>");
    $biology_value = 2;
}
else if ($biology >= 33 && $biology <= 39) {
    echo ("Biology : D </br>");
    $biology_value = 1;
}
else if ($biology >= 00 && $biology <= 32) {
    echo ("Biology : F </br>");
    $biology_value = 0;
}
else{
 echo('Invalid Number');
 $biology_value;
}

//physic
$physic = $phy;
$physic_value;
if ($physic >= 80 && $physic <= 100) {
    echo ("Physic : A+ </br>");
    $physic_value = 5;
}
else if ($physic >= 70 && $physic <= 79) {
    echo ("Physic : A </br>");
    $physic_value = 4;
}
else if ($physic >= 60 && $physic <= 69) {
    echo ("Physic : A- </br>");
    $physic_value = 3.5;
}
else if ($physic >= 50 && $physic <= 59) {
    echo ("Physic : B </br>");
    $physic_value = 3;
}
else if ($physic >= 40 && $physic <= 49) {
    echo ("Physic : C </br>");
    $physic_value = 2;
}
else if ($physic >= 33 && $physic <= 39) {
    echo ("Physic : D </br>");
    $physic_value = 1;
}
else if ($physic >= 00 && $physic <= 32) {
    echo ("Physic : F </br>");
    $physic_value = 0;
}
else{
 echo('Invalid Number');
 $physic_value;
}

//Chemistry
$Chemistry = $chy;
$Chemistry_value;
if ($Chemistry >= 80 && $Chemistry <= 100) {
    echo ("Chemistry : A+ </br>");
    $Chemistry_value = 5;
}
else if ($Chemistry >= 70 && $Chemistry <= 79) {
    echo ("Chemistry : A </br>");
    $Chemistry_value = 4;
}
else if ($Chemistry >= 60 && $Chemistry <= 69) {
    echo ("Chemistry : A- </br>");
    $Chemistry_value = 3.5;
}
else if ($Chemistry >= 50 && $Chemistry <= 59) {
    echo ("Chemistry : B </br>");
    $Chemistry_value = 3;
}
else if ($Chemistry >= 40 && $Chemistry <= 49) {
    echo ("Chemistry : C </br>");
    $Chemistry_value = 2;
}
else if ($Chemistry >= 33 && $Chemistry <= 39) {
    echo ("Chemistry : D </br>");
    $Chemistry_value = 1;
}
else if ($Chemistry >= 00 && $Chemistry <= 32) {
    echo ("Chemistry : F </br>");
    $Chemistry_value = 0;
}
else{
 echo('Invalid Number');
 $Chemistry_value;
}
//Islam
$islam = $ilm;
$Islam_value;
if ($islam >= 80 && $islam <= 100) {
    echo ("Islam : A+ </br>");
    $Islam_value = 5;
}
else if ($islam >= 70 && $islam <= 79) {
    echo ("Islam : A </br>");
    $Islam_value = 4;
}
else if ($islam >= 60 && $islam <= 69) {
    echo ("Islam : A- </br>");
    $Islam_value = 3.5;
}
else if ($islam >= 50 && $islam <= 59) {
    echo ("Islam : B </br>");
    $Islam_value = 3;
}
else if ($islam >= 40 && $islam <= 49) {
    echo ("Islam : C </br>");
    $Islam_value = 2;
}
else if ($islam >= 33 && $islam <= 39) {
    echo ("Islam : D </br>");
    $Islam_value = 1;
}
else if ($islam >= 00 && $islam <= 32) {
    echo ("Islam : F </br>");
    $Islam_value = 0;
}
else{
 echo('Invalid Number');
 $Islam_value;
}

$total_value = $over_bangla_value + $over_english_value + $Mathematics_value + $Higher_Math_value + $biology_value + $physic_value + $Chemistry_value +$Islam_value;
$total_result_value = ($total_value / 8 );
echo("Overall Result : $total_result_value </br>");

if($total_result_value >= 4.5 && $total_result_value <= 5.0){
    echo("Your Grade is : A+ </br>");
}
else if($total_result_value >= 4.0 && $total_result_value >= 4.4){
    echo("Your Grade is : A </br>");
}
else if($total_result_value >= 3.5 && $total_result_value >= 3.9){
    echo("Your Grade is : A- </br>");
}
else if($total_result_value >= 3.0 && $total_result_value >= 3.4){
    echo("Your Grade is : B </br>");
}
else if($total_result_value >= 2.5 && $total_result_value >= 2.9){
    echo("Your Grade is : C </br>");
}
else if($total_result_value >= 2.0 && $total_result_value >= 2.4){
    echo("Your Grade is : D </br>");
}
else{
    echo("Sorry Bro Your Result is Not Found");
}

