<?php
include_once('database.inc.php');
$query="select * from maildata";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentbox</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container contact">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                <h2>SentBox</h2>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <div>
                <a href="index.php" >
                    <button class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        <div class="col-md-9">
            <table align="center" >
                <tr>
                <th> Receiver Email </th>
                <th> Subject</th>
                <th> Message </th></tr>

                <?php while($rows=mysqli_fetch_assoc($result)) 
                {
                    ?>
                    <tr>
                    <td style="padding:0 35px 0 15px;"><?php echo $rows['receiver_email'] ;?></td>
                    <td style="padding:0 35px 0 15px;"><?php echo $rows['subject'] ;?></td>
                    <td style="padding:0 35px 0 15px;"><?php echo $rows['message'] ;?></td>
                    </tr>
                    <?php
                }
                ?>

            </table>
        </div>
    </div>
</div>
</body>
</html>