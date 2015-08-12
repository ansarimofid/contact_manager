<!--Form Modal-->
<div class="contact-form modal fade" id="register" role="dialog">
    <div class="modal-dialog">
        <!--Modal Content-->
        <div class="container-fluid form-container modal-content">
            <!--            Modal Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Register</h1>
            </div>
            <!--          Modal Body And  Main Form Container-->
            <form method="post" class="modal-body" id="register_data_submit">

                <!-- Name-->
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>First Name
                        </label>
                        <input type="text" class="form-control required" name="fname" placeholder="Your First Name">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Last Name
                        </label>
                        <input type="text" class="form-control required" name="lname" placeholder="Your Last Name">
                    </div>
                </div>

                <!--Gender-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Gender
                        </label>
                        <select name="gender" class="form-control">
                            <option disabled selected>Choose Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
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
                <!--Email-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>E-mail
                            <i class="fa fa-at"></i>
                        </label>
                        <input type="email" class="form-control required" name="email" placeholder="Your E-mail">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Username
                        </label>
                        <input type="text" class="form-control required" name="username" placeholder="Choose Your Username">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Password
                        </label>
                        <input type="password" class="form-control required" name="password" placeholder="Choose Your Password">
                    </div>
                </div>

                <!--Buttons-->
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
