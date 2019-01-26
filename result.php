<html>
<body>
<?php
$username = "insomnia";
$password = "insomnia2019";
$database = "insomnia_btw";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM btw";


echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">Name</font> </td>
          <td> <font face="Arial">Occupation</font> </td>
          <td> <font face="Arial">Affiliation</font> </td>
          <td> <font face="Arial">Email</font> </td>
          <td> <font face="Arial">Phone Number</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["occupation"];
        $field3name = $row["affiliation"];
        $field4name = $row["email"];
        $field5name = $row["phno"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
              </tr>';
    }
    $result->free();
}
?>
</body>
</html>
