<?php
include __DIR__ . "/constant.php";
$mec_systems = ["MEC System 1", "MEC System 2", "MEC System 3", "MEC System 4", "MEC System 5"];
$priority = ["Low", "Medium", "High", "Critical"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Ticket</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <img class="mec-background" src="<?php echo $ASSETS_PATH; ?>/mec1.jpg" alt="Logo" />
    <div class="main-background"></div>
    <div class="login-page">
        <div class="form">
            <form class="form-wrap" method="POST" action="">
                <div class="leftside-form">
                    <img class="logo" src="<?php echo $ASSETS_PATH; ?>/mec_logo.png" alt="Logo" />
                    <button class="btn btn-warning">Create Ticket</button>
                    <button class="ticketList">Ticket List</button>
                </div>

                <div class="rightside-form">
                    <p>Create Ticket</p>
                    <label for="issue">Issue Encounter:</label>
                    <input class="form-control" type="text" id="issue" name="issue" placeholder="Enter your issue">

                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Describe your issue..."></textarea>

                    <label for="mecSystem">MEC System:</label>
                    <select class="form-control" name="mecSystem" id="mecSystem">
                        <option disabled selected hidden>sample MEC system</option>
                        <?php for ($i = 0; $i < count($mec_systems); $i++) { ?>
                            <option value="<?= $mec_systems[$i] ?>"><?= $mec_systems[$i] ?></option>
                        <?php } ?>
                    </select>

                    <label for="priority">Priority Level:</label>
                    <select class="form-control" name="priority" id="priority">
                        <option disabled selected hidden>Priority Level</option>
                        <?php for ($i = 0; $i < count($priority); $i++) { ?>
                            <option value="<?= $priority[$i] ?>"><?= $priority[$i] ?></option>
                        <?php } ?>
                    </select>

                    <label for="email">Email Account:</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email">

                    <label for="otp">Verification Code:</label>
                    <input class="form-control" type="text" id="otp" name="otp" placeholder="Enter your OTP">

                    <label for="attachment">Attachment:</label>
                    <input class="form-control" type="file" id="attachment" name="attachment">

                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>