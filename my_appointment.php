<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Appointment | MediQueue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/module-header.css">
    <link rel="stylesheet" href="css/module-rightpart-common.css">
    <link rel="stylesheet" href="css/view-patient-doctor.css">
</head>

<body>
    <?php include 'partials/_doctor-header.php'; ?>
    <main>
        <div class="right">
            <div class="heading">
                <h1>My Appointments</h1>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <table id="myTable" class="table display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Type</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script></script>
</body>

</html>