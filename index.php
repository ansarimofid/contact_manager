<!doctype html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="/contact_manager/assets/css/style.css">
</head>

<body>

    <form action="fetch.data.php" method="post">
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
            <input type="text" name="gender">
        </div>
        <div>
            <label for="bday">Date of Birth:</label>
            <input type="date" name="bday">
        </div>

        <div>
            <button type="submit">Add Contact</button>
        </div>

    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
