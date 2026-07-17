<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="email"],
        input[type="tel"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .buttons {
            text-align: center;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>

    <form action="#" method="post" enctype="multipart/form-data">

        <table>

            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>

            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" min="1" max="120" required>
                </td>
            </tr>

            <tr>
                <td>Date of Birth</td>
                <td>
                    <input type="date" name="dob" required>
                </td>
            </tr>

            <tr>
                <td>Address</td>
                <td>
                    <select name="" id="">
                        <option value="">Kathmandu</option>
                        <option value="">Lalitpur</option>
                        <option value="">Bhaktapur</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Phone</td>
                <td>
                    <input type="tel" name="phone" placeholder="98XXXXXXXX" required>
                </td>
            </tr>

            <tr>
                <td>Hobbies</td>
                <td>
                    <input type="checkbox" name="hobbies" value="Reading"> Reading
                    <input type="checkbox" name="hobbies" value="Sports"> Sports
                    <input type="checkbox" name="hobbies" value="Music"> Music
                    <input type="checkbox" name="hobbies" value="Travel"> Travel
                </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" required>
                </td>
            </tr>

            <tr>
                <td>Upload CV</td>
                <td>
                    <input type="file" name="cv" accept=".pdf,.doc,.docx">
                </td>
            </tr>

            <tr>
                <td>Upload Image</td>
                <td>
                    <input type="file" name="image" accept="image/*">
                </td>
            </tr>

            <tr>
                <td colspan="2" class="buttons">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>

        </table>

    </form>
</div>

</body>
</html>