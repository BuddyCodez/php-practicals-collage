<?php
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
// employee details 
$employeeName = "Udit Vegad";
$employeeId = "emp001";
$salary = 70000;
$deductions = 5000;
$netSalary = $salary - $deductions;
$html = '
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Employee Salary Slip</h1>
    <table>
        <tr>
            <th>Employee Name:</th>
            <td>' . $employeeName . '</td>
        </tr>
        <tr>
            <th>Employee ID:</th>
            <td>' . $employeeId . '</td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Salary:</th>
            <td>$' . $salary . '</td>
        </tr>
        <tr>
            <th>Deductions:</th>
            <td>$' . $deductions . '</td>
        </tr>
        <tr>
            <th>Net Salary:</th>
            <td>$' . $netSalary . '</td>
        </tr>
    </table>
</body>
</html>
';

// Create a new Dompdf instance
$dompdf = new Dompdf();

// Load HTML content
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML to PDF
$dompdf->render();

// Output the PDF
$dompdf->stream("salary_slip.pdf", array("Attachment" => false));
