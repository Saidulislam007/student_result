?<?php
function calculateResult($marks){
 foreach($marks as $mark){
    if($mark < 0 || $mark > 100){
        return "Mark range is invalid.";
    }
 } 
if(min($marks) < 33){
    return "The student has failed. ";
}

$totalMarks = array_sum($marks);
$avgMarks = $totalMarks / count($marks);
$grade = '';
switch(true){
    case($avgMarks <= 100 && $avgMarks >= 80):
        $grade = 'A+';
        break;
        case($avgMarks < 80 && $avgMarks >= 70):
            $grade = 'A+';
            break;
            case($avgMarks < 70 && $avgMarks >= 60):
                $grade = 'A+';
                break;
                case($avgMarks < 60 && $avgMarks >= 50):
                    $grade = 'A+';
                    break;
                    case($avgMarks < 50 && $avgMarks >= 40):
                        $grade = 'A+';
                        break;
                        case($avgMarks < 40 && $avgMarks >= 33):
                            $grade = 'A+';
                            break;
                            default:
                            $grade = 'F';
}
return "Total Marks: $totalMarks, Average Marks: $avgMarks, Grade: $grade";


}
//example usage
$marks = [85, 70, 90, 99, 68];
echo calculateResult($marks);
?>