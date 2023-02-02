<?php
require_once("db_connection.php");
if(count($_POST)>0) {
$roll_no=$_POST['stRollNo'];
$result = mysqli_query($conn,"SELECT * FROM students where rollno='$roll_no' ");
   

}
?>
<!DOCTYPE html>
<html>

<head>
<title>Successor Computer Academy - Best Computer Education in Sargodha</title>
    <meta name="description" content="Successor Computer Academy provides best computer education in Sargodha. Our expert team provides practical and industrial training in latest computer technologies.">
    <meta name="keywords" content="computer education, computer training, practical training, industrial training, latest computer technologies, computer academy, Sargodha">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Successor Computer Academy",
  "description": "Successor Computer Academy provides best computer education in Sargodha. Our expert team provides practical and industrial training in latest computer technologies.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Office no 14 Toheed Mall Queens Road sargodha",
    "addressLocality": "Sargodha",
    "addressRegion": "Punjab",
    "postalCode": "40100",
    "addressCountry": "Pakistan"
  },
  "telephone": "+91-1234567890",
  "email": "info@successorcomputeracademy.com",
  "url": "http://successorcomputeracademy.com"
}
</script>
    <style>
    /* Add CSS styling for the certificate design here */
    /* Example styles: */
    /* A4 size */
    @page {
        size: A4;
        orientation: vertical;
    }

    /* Style the body */
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }

    /* Style the certificate container */
    #certificate {
        width: 100%;
        height: 100%;
        margin: 0;
        background-color: #F1F6F5;
    }

    /* Style the header */
    #header {
        background-color: #2C74B3;
        color: white;
        padding: 10px;
    }

    /* Style the title */
    h1 {
        font-size: 28px;
        margin-bottom: 4px;
    }

    /* Style the recipient name */
    #recipient {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 4px;
    }

    /* Style the footer */
    #footer {
        background-color: #2C74B3;
        color: white;
        padding: 10px;
    }

    #footer p {
        margin: 0;
    }

    /* Style the seal */
    #seal {
        position: absolute;
        right: 20px;
        bottom: auto;
        width: 100px;
    }

    #logo {
        position: relative;
        top: 20px;
        width: 100px;
    }

    #heading {
        font-size: 60%;
        font-weight: normal;
    }

    /* Style the text */
    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .text-left {
        text-align: left;
    }

    /* Style the signature and seal container */
    .signature {
        margin-top: 50px;
    }

    /* Style the float container */
    .float-right {
        float: right;
        margin-right: 16px;
    }

    .float-left {
        float: left;
        margin-left: 16px;
    }

    /* Clear the float container */
    .clearfix {
        clear: both;
    }
    </style>
</head>

<body>

    <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
    <div id="certificate">

        <div class="container" id="header">
            <div class="col-6">
                <img id="logo" src="assets/img/logoNew.png" alt="Header Image 1">
            </div>
            <div class="col-6">
                <h1>Successor Computer Academy</h1>
                <h3>Certificate of Completion</h3>
            </div>
        </div>

        <div class="text-center">
            <p>This certificate is awarded to</p>
            <p id="recipient"><?php echo $row["stName"]; ?></p>
            <p>S/D/W of </p>
            <p id="recipient"><?php echo $row["stFname"]; ?></p>
            <p>Under the Roll Number</p>
            <p id="recipient"><?php echo $row["rollno"]; ?></p>
            <p>has successfully completing the course</p>
            <p id="recipient"><?php echo $row["stProgram"]; ?></p>
            <p>in</p>
            <p id="recipient"><?php echo $row["stDuration"]; ?></p>
            <p>He/She passed the examination has whole securing</p>
            <p id="recipient"><?php echo $row["stObMarks"]; ?></p>
            <p>Marks Out Of</p>
            <p id="recipient"><?php echo $row["stTotalMarks"]; ?></p>
            <p>This Cetitificate is Awarded on</p>
            <p id="recipient"><?php echo $row["dated"]; ?></p>
            <p>To student through internal assessment/ examination held by</p>
            <p id="recipient">Successor Computer Academy</p>
            <P>training center/Workshop of the skill education Organiztion</P>
        </div>
        <div class="text-left signature">
            <div class="float-left">
                <p>Instructor's Signature</p>
            </div>
            <div class="float-right">
                <p>Authorized Signature</p>

            </div>
            <div class="clearfix"></div>
        </div>
        <div id="footer" class="text-center">
            <p>Issued by Successor computer Academy</p>
        </div>
        <img id="seal" src="qr.png" alt="QR Image">
    </div>
    <?php
$i++;
}
?>

</body>

</html>