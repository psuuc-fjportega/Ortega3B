<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function compute($operation1, $val1, $val2, $operation2, $val3, $val4)
    {
        // Kinoconvert ang mga input na string patungo sa integer
        $val1 = intval($val1);
        $val2 = intval($val2);
        $val3 = intval($val3);
        $val4 = intval($val4);

        // Function para sa mathematical operation
        function calculate($operation, $v1, $v2) {
            if ($operation === "add") {
                return $v1 + $v2;
            } elseif ($operation === "subtract") {
                return $v1 - $v2;
            } elseif ($operation === "multiply") {
                return $v1 * $v2;
            } elseif ($operation === "divide") {
                if ($v2 == 0) {
                    return "ERROR: Division by zero!";
                }
                return $v1 / $v2;
            }
            return "Invalid Operation"; // Kapag mali ang operation name
        }

        // Ang nagkwekwenta ng resulta ng bawat operasyon
        $result1 = calculate($operation1, $val1, $val2);
        $result2 = calculate($operation2, $val3, $val4);

        // Function para sa kulay ng result box
        function getBoxColor($result) {
            return (is_numeric($result) && $result % 2 == 0) ? 'green' : 'blue';
        }

        // Function para sa kulay ng text ng input values
        function getTextColor($value) {
            return ($value % 2 == 0) ? 'orange' : 'blue';
        }

        // Output ng HTML
        return "
        
            <h2>Faithful John Ortega | 3B</h2>

            <p>Value 1: <span style='color: " . getTextColor($val1) . "'>$val1</span></p>
            <p>Value 2: <span style='color: " . getTextColor($val2) . "'>$val2</span></p>
            <p>Operator: $operation1</p>
            <div style='display: inline-block; padding: 5px 10px; margin: 5px; font-size: 20px; border-radius: 5px; background-color: " . getBoxColor($result1) . "; color: white;'>Result: $result1</div>

            <p>Value 1: <span style='color: " . getTextColor($val3) . "'>$val3</span></p>
            <p>Value 2: <span style='color: " . getTextColor($val4) . "'>$val4</span></p>
            <p>Operator: $operation2</p>
            <div style='display: inline-block; padding: 5px 10px; margin: 5px; font-size: 20px; border-radius: 5px; background-color: " . getBoxColor($result2) . "; color: white;'>Result: $result2</div>
        ";
    }
}
