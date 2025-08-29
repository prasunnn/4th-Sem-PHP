<?php
$info = [
    'name' => 'Ram Bahadur', 
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <style>
    table{
        border-collapse: collapse;
        width: 40%;
        margin: 20px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px 12px;
    }

    th {
        text-align: left;
    }
 </style>
 <body>
    <table>
        <?php
        foreach ($info as $key => $value){
            echo "<tr><th>$key</th><td>$value</td></tr>";
        }
        ?>
    </table>
 </body>
 </html>