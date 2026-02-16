<!-- name gender (radio ), hobbies(5 checkbox) , city(dropdown , nadiad , anand , surat) , pincode , email and contact no -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling</title>
</head>
<body>
    <center>
        <form method="POST">
            <table border="1">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="txtName" required></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="radGender" value="Male" required> Male
                        <input type="radio" name="radGender" value="Female" required> Female
                    </td>
                </tr>
                <tr>
                    <td>Hobbies:</td>
                    <td>
                        <input type="checkbox" name="chkHobbies[]" value="Reading"> Reading
                        <input type="checkbox" name="chkHobbies[]" value="Sports"> Sports
                        <input type="checkbox" name="chkHobbies[]" value="Music"> Music
                        <input type="checkbox" name="chkHobbies[]" value="Traveling"> Traveling
                        <input type="checkbox" name="chkHobbies[]" value="Cooking"> Cooking
                    </td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td>
                        <select name="Selcity" required>
                            <option value="Nadiad">Nadiad</option>
                            <option value="Anand">Anand</option>
                            <option value="Surat">Surat</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pincode:</td>
                    <td><input type="text" name="txtPincode" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="txtEmail" required></td>
                </tr>
                <tr>
                    <td>Contact No:</td>
                    <td><input type="text" name="txtContact" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit" name="btnSubmit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['btnSubmit'])) {

    $name = $_POST['txtName'];
    $gender = $_POST['radGender'];
    $city = $_POST['Selcity'];
    $pincode = $_POST['txtPincode'];
    $email = $_POST['txtEmail'];
    $contact = $_POST['txtContact'];

    echo "<h2>Submitted Data:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Gender: " . $gender . "<br>";

    echo "Hobbies: ";
    if (!empty($_POST['chkHobbies'])) {
        foreach ($_POST['chkHobbies'] as $hobby) {
            echo $hobby . " ";
        }
    } else {
        echo "No hobbies selected";
    }
    echo "<br>";

    echo "City: " . $city . "<br>";
    echo "Pincode: " . $pincode . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Contact No: " . $contact . "<br>";
}
?>
