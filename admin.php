<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard | MediQueue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/module-header.css">
    <style>
        .custom-card {
            border: 2px solid rgb(244, 216, 216);
            border-radius: 5px;
            padding: 1rem;
            margin-top: 1rem;
            text-align: center;
        }

        .row h3 {
            color: black;
            text-align: center;
            padding-top: 20px;
        }

        .badge {
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<body>
    <div class="right">
        <div class="badge">
            <button type="button" class="btn btn-primary position-relative">Notification <span class="visually_hidden">New Alerts</span></button>
        </div>
        <hr>
        <!-- php code -->
        <div class="row">
            <h3>Upcoming Appointment</h3>
            <div class="container">
                <div class="table_responsive">
                    <table id="myTable" class="table_display_nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Speciality</th>
                                <th scope="col">Doctor's Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            <br>
                            <!-- php code -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script></script>
</body>

</html>