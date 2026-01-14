<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback | MediQueue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/module-header.css">
    <link rel="stylesheet" href="css/module-rightpart-common.css">
    <link rel="stylesheet" href="css/add-update-doctor.css">
    <link rel="stylesheet" href="css/js-validation-erros.css">
    <style>
        .custom-card {
            border: 2px solid rgb(224, 216, 216);
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

        .alert-custom {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            text-align: center;
        }

        .alert {
            margin-top: 20px;
            margin-right: 20px;
        }

        .badge {
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<body>
    <div class="right">
        <div class="heading">
            <h1>Feedback</h1>
        </div>
        <div class="whole">
            <div class="from-outer">
                <form action="" name="registration" method="post">
                    <div class="form">
                        <div class="formdesign" id="udoc_name">
                            <label for="name">Doctor Name</label>
                            <input type="text" name="name" id="name" placeholder="Doctor's full name">
                            <div id="doctorlist"></div>
                        </div>
                        <div class="formdesign" id="select">
                            <label for="dropdown_menu">
                                <select name="speciality" id="dropdown_menu">
                                    <option value="#" name="speciality">Select</option>
                                    <option value="Neurologist" name="speciality">Neurologist</option>
                                    value="Psychiatrist">Psychiatrist</option>
                                    <option name="speciality" value="General Physician">General Physician</option>
                                    <option name="speciality" value="Surgeon">Surgeon</option>
                                    <option name="speciality" value="Oncologist">Oncologist</option>
                                    <option name="speciality" value="Dermatologist">Dermatologist</option>
                                    <option name="speciality" value="Cardiologist">Cardiologist</option>
                                    <option name="speciality" value="Gynaecologist">Gynaecologist</option>
                                </select>
                            </label>
                            <div class="formdesign" id="uname">
                                <label for="name">Feedback</label>
                                <textarea rows="6" cols="30" name="feedback" id="feedback"
                                    placeholder="Feedback"></textarea>
                            </div>
                            <div class="buttons">
                                <button type="submit" class="btn btn-sm btn-primary mt-3"
                                    style="height: 35px; width: 80px; margin: 5px;">Submit</button>
                                <button type="reset" class="btn btn-sm btn-primary mt-3 m-3"
                                    style="height: 35px; width: 80px; margin: 5px;">Cancel</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>