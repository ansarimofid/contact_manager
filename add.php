<?php include_once "header.php";?>

<html>
<!--Form Modal-->
<div class="contact-form modal fade" id="add-contact" role="dialog">
    <div class="modal-dialog">
        <!--Modal Content-->
        <div class="container-fluid form-container modal-content">
            <!--            Modal Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Add New Contact</h1>
            </div>
            <!--          Modal Body And  Main Form Container-->
            <form method="post" class="modal-body" id="contact_data_submit">

                <!-- Name-->
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>First Name
                        </label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Last Name
                        </label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                    </div>
                </div>

                <!--Gender-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Gender
                        </label>
                        <select name="gender" class="form-control">
                            <option disabled selected>Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>

                <!--Title-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Title
                        </label>
                        <input type="text" class="form-control" name="title" placeholder="Job Title">
                    </div>
                </div>

                <!--Email-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>E-mail
                            <i class="fa fa-at"></i>
                        </label>
                        <input type="email" class="form-control" name="email" placeholder="Enter E-mail">
                    </div>
                </div>

                <!-- Phones-->
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Tel No.
                        </label>
                        <input type="text" class="form-control" name="tel" placeholder="Enter Telephone No.">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Mobile
                        </label>
                        <input type="text" class="form-control" name="mob" placeholder="Enter Mobile No.">
                    </div>
                </div>
                <!--                Website-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Website
                        </label>
                        <input type="text" class="form-control" name="website" placeholder="Enter Website Name">
                    </div>
                </div>
                <!--Photo-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Photo
                        </label>
                        <input type="file" class="form-control" name="photo" placeholder="Your Website">
                    </div>
                </div>
                <!--                Advance options-->
                <div id="advance">
                    <!--                Nick Name-->
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Nick Name
                            </label>
                            <input type="text" class="form-control" name="nname" placeholder="Enter Nick Name">
                        </div>
                    </div>

                    <!--                   Birthday-->
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>BirthDay
                            </label>
                            <input type="date" class="form-control" name="bday" placeholder="Your Website">
                        </div>
                    </div>
                    <!--                    Organisation-->
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Organisation
                            </label>
                            <input type="text" class="form-control" name="org" placeholder="Organisaion Name">
                        </div>
                    </div>
                    <!--                    Note-->
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Note
                            </label>
                            <textarea type="text" class="form-control" name="note" placeholder="Enter Note..." rows="10"></textarea>
                        </div>
                    </div>
                    <!--                    Address-->
                    <div class="Address">
                        <h4>Address</h4>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label>PoBox
                                </label>
                                <input type="text" class="form-control" name="pobox" placeholder="Post Box Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>&nbsp;
                                </label>
                                <input type="text" class="form-control" name="ext" placeholder="Extended">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Street
                                </label>
                                <input type="text" class="form-control" name="street" placeholder="Street Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label>Zipcode
                                </label>
                                <input type="text" class="form-control" name="zipcode" placeholder="Area Code">
                            </div>
                            <div class="form-group col-sm-3">
                                <label>City
                                </label>
                                <input type="text" class="form-control" name="city" placeholder="City">
                            </div>
                            <div class="form-group col-sm-3">
                                <label>State
                                </label>
                                <input type="text" class="form-control" name="state" placeholder="State">
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Country
                                </label>
                                <input type="text" class="form-control" name="country" placeholder="Country">
                            </div>
                        </div>
                    </div>
                </div>

                <!--Buttons-->
                <div class="form-group">
                    <button id="advance-button" class="btn btn-default">
                        <span class="adv-inner-text-before">More
                       <i class="fa fa-chevron-down"></i></span>
                        <span class="adv-inner-text-after">Less
                       <i class="fa fa-chevron-up"></i></span>
                    </button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

</html>

<?php include_once "footer.php";?>