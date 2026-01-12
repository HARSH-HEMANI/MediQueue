<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Dashboard | MediQueue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/utils.css">

    <style>

    </style>
</head>

<body>
    <div class="right">
        <div class="badge">
            <button type="button" class="btn btn-primary position-relative" onclick="window.location.href = 'notification_doctor,php';">Notification
                <span class="visually_hidden">New Alerts</span>
            </button>
        </div>
        <hr>
        <div class="alert alert_success" role="alert">
            <h4 class="alert-heading">Welcome <?php echo $name; ?>!
            </h4>
            <p>Thank you for joining with us. We are always trying to get you a complete service.
                <br>
                You can view your daily schedule.
            </p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php">by Clicking Here!</a>
            </p>
        </div>
        <!-- Upcoming Appointment -->
        <div class="row">
            <h3>Upcoming Appointments</h3>
            <div class="container">
                <div class="table_responsive">
                    <table id="myTable" class="table_display_nowrap" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            <br>
                            <!-- Table Data from DataBase -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="">
    </script>
</body>

</html>