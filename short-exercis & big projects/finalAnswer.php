<?php


//		This is a template that you can use to submit your PHP
//		5-minute exercises. Work on your code in a different document
//		and once you get it working, just paste the code into the blank spaces 
//		below each echo statement.
//
//		It's useful to me if you add an echo statement that tells me
//		which exercise you're working on. Example:
//
//		echo "I'm working on Strings #2.\n";
//


/*

/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 1 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 1: ROT 13 ----------------------------\n\n";

function encrypt($str)
{
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $asci = ord($str[$i]);
        if ($asci >= 65 && $asci <= 90) {
            if ($asci + 13 <= 90)
                $asci = $asci + 13;
            else
                $asci = 64 + (13 - (90 - $asci));
        }
        if ($asci >= 97 && $asci <= 122) {
            if ($asci + 13 <= 122)
                $asci = $asci + 13;
            else
                $asci = 96 + (13 - (122 - $asci));
        }

        $result = $result . chr($asci);
    }
    return $result;

}


echo "Enter your message and press enter: ";
$str = trim( fgets( STDIN ), "\n" );
$str = trim(preg_replace('/\s\s+/', ' ', $str));
$encrypt = encrypt($str);
echo "The encrypted text is: " . $encrypt . "\n";
echo "The decrypted text is: " . encrypt($encrypt) . "\n";


/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 2 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 2: N! ----------------------------\n\n";
echo "Enter N: ";
$n = trim( fgets( STDIN ), "\n" );
$n = trim(preg_replace('/\s\s+/', ' ', $n));
if (is_numeric($n) && $n>=0){
    if ($n==0) {
        echo "N! equals: " . 1;
        return;
    }
    $result = 1;
    for ($i=1;$i<=$n;$i++){
        $result = $result * $i;
    }
    echo "N! equals: " . $result;
}


/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 3 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 3: Fibonacci Sequence  ----------------------------\n\n";

function sequence($num){
    echo '0'. '  ';
    $second = 1;
    $sum = 0;
    for ($i=1;$i<=$num;$i++) {
        if ($i > 1) {

            echo $sum . '  ';
        }
        $first = $second;
        $second = $sum;
        $sum = $second + $first;

    }
}
echo "Enter N: ";
$n = trim( fgets( STDIN ), "\n" );
$n = trim(preg_replace('/\s\s+/', ' ', $n));
sequence($n);





/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 4 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 4: SHORTEST & LONGEST STRINGS IN AN ARRAY ----------------------------\n\n";
$strings = array(
    'Now is the winter of our discontent',
    'The love of money is the root of all evil',
    'Absence makes the heart grow fonder',
    'The readiness is all',
    'Wherever you go, there you are'
);
$max = 0;
$min = "undefined";

for ($i=0;$i<count($strings);$i++) {
    if (strlen($strings[$i]) > $max) {
        $max = strlen($strings[$i]);
        $maxIndex = $i;
    }
    if (strlen($strings[$i]) < $min || $min == 'undefined') {
        $min = strlen($strings[$i]);
        $minIndex = $i;
    }

}
echo 'The Longest String was--> ' . $strings[$maxIndex] . ' ( ' . $max . " )\n";
echo 'The Shortest String was--> ' . $strings[$minIndex] . ' ( ' . $min . " )\n";




/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 5 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 5: DOZENS OF DONUTS ----------------------------\n\n";
echo "Enter the number of your donuts: ";
$n = trim( fgets( STDIN ), "\n" );
$n = trim(preg_replace('/\s\s+/', ' ', $n));
$number_of_dozens = 0;
while ($n > 12){
    $number_of_dozens++;
    $n = $n-12;
}
echo 'You have '. $number_of_dozens . ' dozens and ' . $n . " donuts \n";



*/

/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 6 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 6: SUM OF DIGITS ----------------------------\n\n";
echo "Enter a number: ";
$n = trim( fgets( STDIN ), "\n" );
$n = trim(preg_replace('/\s\s+/', ' ', $n));
if (!is_numeric($n) ){
    echo 'It was not a number';
}

$sum = 0;
$size = strlen($n);
for ($i=1;$i<=$size;$i++){
    $digit = $n % 10;
    if ($n>10)
        $n =(int)($n / 10);
    else {
        $sum = $sum + $n;
        break;
    }
    $sum = $sum + $digit;
}
echo 'The sum of digits in your number was: '. $sum . "\n";




/*
/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 7 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 7 ----------------------------\n\n";







/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 8 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 8 ----------------------------\n\n";







/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 9 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 9 ----------------------------\n\n";







/////////////////////////////////////////////////////////////////////////////////
//		Code for Exercise 10 follows
/////////////////////////////////////////////////////////////////////////////////
echo "\n\n-------------------  Exercise 10 ----------------------------\n\n";






*/
?>