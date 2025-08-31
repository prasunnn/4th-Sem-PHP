<?php
$students = [
    ["SN"=>1,"Name"=>"Rajesh","Roll"=>25,"WebTech"=>56,"DBMS"=>89,"Economics"=>57,"DSA"=>64,"Account"=>98],
    ["SN"=>2,"Name"=>"hari","Roll"=>5,"WebTech"=>56,"DBMS"=>89,"Economics"=>57,"DSA"=>64,"Account"=>98],
    ["SN"=>3,"Name"=>"Shyam","Roll"=>6,"WebTech"=>54,"DBMS"=>79,"Economics"=>57,"DSA"=>69,"Account"=>98],
    ["SN"=>4,"Name"=>"Rita","Roll"=>10,"WebTech"=>16,"DBMS"=>89,"Economics"=>56,"DSA"=>64,"Account"=>98],
    ["SN"=>5,"Name"=>"Gita","Roll"=>4,"WebTech"=>56,"DBMS"=>89,"Economics"=>57,"DSA"=>69,"Account"=>98],
    ["SN"=>6,"Name"=>"Sita","Roll"=>24,"WebTech"=>56,"DBMS"=>99,"Economics"=>57,"DSA"=>24,"Account"=>98],
    ["SN"=>7,"Name"=>"Sita","Roll"=>24,"WebTech"=>56,"DBMS"=>99,"Economics"=>57,"DSA"=>24,"Account"=>98],
    ["SN"=>8,"Name"=>"Sita","Roll"=>24,"WebTech"=>56,"DBMS"=>99,"Economics"=>57,"DSA"=>24,"Account"=>98],
];

echo "<h2>Mark Ledger</h2>";
echo "<table border='1' cellpadding='6' style='width:100%; text-align: center;' cellspacing='0'>";
echo "<tr>
        <th>SN</th><th>Name</th><th>Roll</th>
        <th>Web Tech II</th><th>DBMS</th><th>Economics</th>
        <th>DSA</th><th>Account</th><th>Total</th><th>Result</th>
      </tr>";

foreach ($students as $stu) {
    $total = $stu['WebTech'] + $stu['DBMS'] + $stu['Economics'] + $stu['DSA'] + $stu['Account'];
    $result = ($total >= 350) ? "pass" : "fail";
    
    $color = ($result == "pass") ? "lightgreen" : "red";
    
    echo "<tr style='background:$color'>";
    echo "<td>{$stu['SN']}</td><td>{$stu['Name']}</td><td>{$stu['Roll']}</td>";
    echo "<td>{$stu['WebTech']}</td><td>{$stu['DBMS']}</td><td>{$stu['Economics']}</td>";
    echo "<td>{$stu['DSA']}</td><td>{$stu['Account']}</td>";
    echo "<td>$total</td><td>$result</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h2>Alternate Color Table</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='width:100%; text-align:center;'>";
echo "<tr style='background:#ddd'>
        <th>SN</th><th>Name</th><th>Roll</th>
        <th>Web Tech II</th><th>DBMS</th><th>Economics</th>
        <th>DSA</th><th>Account</th><th>Total</th><th>Result</th>
      </tr>";

$i = 0;
foreach ($students as $stu) {
    $total = $stu['WebTech'] + $stu['DBMS'] + $stu['Economics'] + $stu['DSA'] + $stu['Account'];
    $result = ($total >= 350) ? "pass" : "fail";
    
    $rowColor = ($i % 2 == 0) ? "#f2f2f2" : "#333";
    $textColor = ($i % 2 == 0) ? "black" : "white";
    
    $resultBg = ($result == "pass") ? "lightgreen" : "red";
    $resultText = "black";
    
    echo "<tr style='background:$rowColor; color:$textColor'>";
    echo "<td>{$stu['SN']}</td><td>{$stu['Name']}</td><td>{$stu['Roll']}</td>";
    echo "<td>{$stu['WebTech']}</td><td>{$stu['DBMS']}</td><td>{$stu['Economics']}</td>";
    echo "<td>{$stu['DSA']}</td><td>{$stu['Account']}</td>";
    echo "<td><b>$total</b></td>";
    echo "<td style='background:$resultBg; color:$resultText;'><b>$result</b></td>";
    echo "</tr>";
    $i++;
}
echo "</table>";
?>
