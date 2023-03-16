<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "doctors note";

$mysqli = new PDO('mysql:host='.$servername.';dbname='.$db, $username, $password);

$doctors = "SELECT * FROM `doctors`";
$doctorsList = $mysqli->query($doctors);

$sql = "SELECT doctors_note.scan_doctor_note, doctors_note.patient_name, doctors.doctor_name, doctors_note.diagnosis, doctors_note.days FROM `doctors_note` JOIN `doctors` ON doctors_note.doctor = doctors.id";

if(!key_exists('clearFilter', $_GET))
{
    if(count($_GET) > 0)
    {
        $sql .= " WHERE";
        
        if($_GET['doctors'])
        {   
            $patient_name = $_GET["doctors"];
            $sql .= " doctors.id = $patient_name AND ";
        }

        if($_GET['diagnosis'])
        {   
            $diagnosis = $_GET["diagnosis"];
            $sql .= " doctors_note.diagnosis LIKE '%$diagnosis%' AND ";
        }

        if($_GET['name'])
        {   
            $name = $_GET["name"];           
            $sql .= " doctors_note.patient_name LIKE '%$name%' AND ";
        }

        if($_GET['daysFrom'])
        {   
            $daysFrom = $_GET["daysFrom"]; 
            $sql .= " doctors_note.days >= $daysFrom AND ";
        }

        if($_GET['daystTo'])
        {   
            $daystTo = $_GET["daystTo"];   
            $sql .= " doctors_note.days <= $daystTo AND ";
        }
        $sql = mb_substr($sql, 0, -4);
    }
}

if(key_exists('clearFilter', $_GET))
{
    $uri = preg_replace( '#(\?.*)?#', '', $_SERVER['REQUEST_URI']);
    header("Location: $uri");
}

$stmt = $mysqli->prepare($sql);
$fullList = $stmt->execute();
$fullList = $mysqli->query($sql);

?>
