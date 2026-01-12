<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/utils.css">
</head>

<body>
    <main>
        <div class="right">
            <div class="heading">
                <h1>Book Appointment</h1>
            </div>
            <div class="whole">
                <div class="form-outer">
                    <!-------- Appointment booking form ------>
                    <form action="patient_book_app.php" method="post">
                        <div class="form">
                            <div class="formdesign" id="select_speciality">
                                <label for="speciality">Speciality</label><br>
                                <select name="speciality" id="speciality">
                                    <option value="">Select</option>
                                    <option value="Neurologist">Neurologist</option>
                                    <option value="Psychiatrist">Psychiatrist</option>
                                    <option value="General Physician">General Physician</option>
                                    <option value="Surgeon">Surgeon</option>
                                    <option value="Oncologist">Oncologist</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                    <option value="Gynaecologist">Gynaecologist</option>
                                </select>
                            </div>
                            <div class="formdesign" id="udoc_name">
                                <label for="name">Doctor Name</label><br>
                                <input type="text" name="name" id="name" placeholder="Doctor's full name" value="docName">
                                <div class="doctorlist"></div>
                            </div>
                            <div class="formdesign" id="udoa">
                                <label for="date_of_appointment">Date of Appointment</label><br>
                                <input type="date" name="date_of_appointment" id="doa">
                                <!-- write validation here -->
                            </div>
                            <div class="formdesign" id="select_time">
                                <label for="toa">Time of Appointment</label><br>
                                <select name="toa" id="toa">
                                    <option value="">Select</option>
                                    <option value="9:30 AM">9:30 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="10:30 AM">10:30 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="11:30 AM">11:30 AM</option>
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="12:30 PM">12:30 PM</option>
                                    <option value="2:00 PM">2:00 PM</option>
                                    <option value="2:30 PM">2:30 PM</option>
                                    <option value="3:00 PM">3:00 PM</option>
                                    <option value="3:30 PM">3:30 PM</option>
                                    <option value="4:00 PM">4:00 PM</option>
                                    <option value="4:30 PM">4:30 PM</option>
                                    <option value="5:00 PM">5:00 PM</option>
                                    <option value="5:30 PM">5:30 PM</option>
                                </select>
                            </div>
                            <div class="formdesign" id="uatype">
                                <label for="appointment_type">Appointment Type</label><br>
                                <select name="appointment_type" id="appointment_type">
                                    <option value="">Select</option>
                                    <option value="New consultation">New consultation</option>
                                    <option value="Follow up">Follow up</option>
                                    <option value="Emergency">Emergency</option>
                                </select>
                            </div>
                            <div class="formdesign" id="ureason">
                                <label for="reason">Reason for Visit</label><br>
                                <input type="text" name="reason" id="reason" placeholder="Reason for Visit">
                            </div>
                            <div class="note">
                                Note: Payment is done offline!
                            </div>
                            <div class="buttons">
                                <button type="submit">Book</button>
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