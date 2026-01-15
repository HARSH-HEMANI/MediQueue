<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Scheduler | MediQueue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/module-header.css">
    <link rel="stylesheet" href="css/module-rightpart-common.css">
    <link rel="stylesheet" href="css/add-update-doctor.css">
    <link rel="stylesheet" href="css/js-validation-erros.css">
</head>

<body>
    <main>
        <div class="right">
            <div class="heading">
                <h1>Request for leave</h1>
            </div>
            <div class="whole">
                <div class="form-outer">
                    <form onsubmit="return validateForm_book_appointment(event)"
                        action="leave_request.php" name="patient-book-app"
                        id="patient-book-app" method="post">
                        <div class="form">
                            <div class="formdesign" id="udoc_name">
                                <label for="name">Reason for leave</label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="formdesign" id="udoa">
                                <label for="date-of-appointment">Start date</label>
                                <input type="date" name="date-of-appointment-start" id="doa"
                                    min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="formdesign" id="udoa">
                                <label for="date-of-appointment">End date</label>
                                <input type="date" name="date-of-appointment-end" id="doa"
                                    min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="formdesign" id="ureason">
                                <label for="reason">Additional comments</label>
                                <textarea name="reason" id="reason" cols="30" rows="10"></textarea>
                            </div>
                            <div class="buttons">
                                <button type="submit">Send request</button>
                                <button type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script></script>
</body>

</html>