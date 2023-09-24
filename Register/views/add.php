<html>
    <head>
        <title>codeigniter Tutorial</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="post" name="frmAdd" action="">
                        <h3>Add User</h3>

                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="txtFname">
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="txtLname">
                        </div>

                        <div class="form-group">
                            <label for="">Department</label>
                            <input type="text" class="form-control" name="txtDepartment">
                            <p>Department can not change by you again so fill it correct.</p>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="txtEmail">
                        </div>

                        <div class="form-group">
                            <label for="">joining date</label>
                            <input type="text" placeholder="DD/MM/YYYY" class="form-control" name="txtjoining_date">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add user now" name="btnadd" class="btn btn-primary btn-lg">
                        </div>

                    </form>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </body>
</html> 