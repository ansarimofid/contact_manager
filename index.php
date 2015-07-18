<!doctype html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="/contact_manager/assets/css/style.css">
</head>

<body>
    <h1>Add Contact</h1>
    <form id="contact_data_submit" method="post">
        <div>
            <label for="fname">First Name:</label>
            <input type="text" name="fname">
        </div>
        <div>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname">
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select type=radio name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>
        <div>
            <label for="bday">Date of Birth:</label>
            <input type="date" name="bday">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="tel">Telephone No.:</label>
            <input type="tel" name="tel">
        </div>
        <div>
            <label for="mob">Mobile No.:</label>
            <input type="tel" name="mob">
        </div>
        <div>
            <label for="photo">Profile Photo.:</label>
            <input type="file" name="photo">
        </div>
        <div>
            <button type="submit">Add Contact</button>
        </div>

    </form>
    <div id="output">
        <H2>Output area</H2>
        <div></div>
    </div>

    <script src="/contact_manager/assets/js/jquery.min.js"></script>
    <script src="/contact_manager/assets/js/main.js"></script>
</body>

</html>
