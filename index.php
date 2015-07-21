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
            <label for="f_name">First Name:</label>
            <input type="text" name="f_name">
        </div>
        <div>
            <label for="l_name">Last Name:</label>
            <input type="text" name="l_name">
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select name="gender">
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
        <div  id="advance_b"><span><h2>Advance</h2></span></div>
        <div id="advance" style="display:none">
            <div>
                <label for="n_name">NickName:</label>
                <input type="text" name="n_name">
            </div>
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="org">Organization:</label>
                <input type="text" name="org">
            </div>
            <div>
                <label for="website">Website:</label>
                <input type="text" name="website">
            </div>
            <div>
                <label for="note">Note:</label>
                <textarea name="note" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
               <label><h3>Address:</h3></label>
               <label for="po_box"></label>
               <input type="text" name="po_box" placeholder="Post Box">

               <label for="ext">  </label>
               <input type="text" name="ext">

               <label for="street"></label>
               <input type="text" name="street" placeholder="Street">

               <label for="zipcode"> &nbsp;</label>
               <input type="text" name="zipcode" placeholder="Zip Code">

               <label for="city"></label>
               <input type="text" name="city" placeholder="City">

               <label for="state"> &nbsp;</label>
               <input type="text" name="state" placeholder="State">

               <label for="country"></label>
               <input type="text" name="country" placeholder="Country">

            </div>

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
