<!-- Modal Register -->
    <div id="myReg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel panel-info">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Register</h3>
                </div>
                <!---------Form Reg-------------->
                <div class="panel-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process.php?action=1">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="username">Username</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="formreg" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="password">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="formreg" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="firstname">FirstName</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="formreg" placeholder="FirstName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="lastname">LastName</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="formreg" placeholder="LastName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="address">Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="formreg" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="phone">Phone</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="formreg" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email">Email</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="formreg" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="UploadPict">Upload Profile Picture</label>
                            <div class="col-sm-6">
                                <input name="upload_picture" class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-6">
                                <div class="checkbox">
                                    <input type="checkbox" id="flat-checkbox-1">
                                    <label for="flat-checkbox-1">I agree <a id="linktext" href="#TOS">terms and condition</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-6">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </div>

                        <!--                    <div class="control-group">
                                                <div class="controls">
                                                <input name="username" placeholder="username" id="formreg" type="text">
                                                <input name="password" placeholder="password" id="formreg" type="password">
                                                <input name="firstname" placeholder="firstname" id="formreg" type="text">
                                                <input name="lastname" placeholder="lastname" id="formreg" type="text">
                                                <input name="address" placeholder="address" id="formreg" type="text">
                                                <input name="phone" placeholder="phone" id="formreg" type="text">
                                                <input name="email" placeholder="email" id="formreg" type="text">
                                                <input name="upload_picture" type="file">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="checkbox">
                                                    <input type="checkbox">I agree <a id="linktext" href="#TOS">terms and condition</a>
                                                </label>
                                                <button style="border-radius:0" class="btn btn-primary" type="submit">Register</button>
                                            </div>-->
                    </form>
                </div>
                <hr style="margin: 0; padding: 0;">
                <!---------/Form Reg-------------->
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Register -->