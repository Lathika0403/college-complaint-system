<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anonymous Student Complaint and Suggestion System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Anonymous Student Complaint and Suggestion System</h1>

    <!-- IMPORTANT: action + method -->
    <form action="submit.php" method="post">

        <!-- College Selection -->
        <label>Select Your College</label>
        <select name="college" required>
            <option value="">-- Select College --</option>
            <option>Thiruthangal Nadar College</option>
            <option>Women’s Christian College (WCC)</option>
            <option>Loyola College</option>
            <option>Madras Christian College (MCC)</option>
            <option>Presidency College</option>
            <option>Ethiraj College for Women</option>
            <option>Queen Mary’s College</option>
            <option>Guru Nanak College</option>
            <option>Stella Maris College</option>
            <option>SRM Arts and Science College</option>
            <option>MOP Vaishnav College for Women</option>
            <option>DG Vaishnav College</option>
            <option>RKM Vivekananda College</option>
            <option>Tagore College of Arts and Science</option>
            <option>New College</option>
            <option>Government Arts College</option>
        </select>

        <!-- Other College -->
        <label>If your college is not listed (Any college in the world)</label>
        <input type="text" name="other_college"
               placeholder="Enter your college name here">

        <!-- Category -->
        <label>Select Category</label>
        <select name="category" required>
            <option value="">-- Select Category --</option>
            <option>Campus Cleanliness</option>
            <option>Classroom Cleanliness</option>
            <option>Teaching Quality</option>
            <option>Laboratory Facilities</option>
            <option>Canteen Facilities</option>
            <option>Parking Facilities</option>
            <option>Water Facility</option>
            <option>General Suggestions</option>
        </select>

        <!-- Complaint -->
        <label>Complaint / Suggestion</label>
        <!-- name attribute VERY IMPORTANT -->
        <textarea name="message" required
                  placeholder="Enter your complaint or suggestion here"></textarea>

        <button type="submit">Submit</button>

    </form>

    <p class="note">
        This system does not collect any personal information.
        All submissions are completely anonymous.
    </p>

</div>

</body>
</html>