<?php include 'partials/Header.php'?>





<div class="col-md-12">

    <div class="modal-dialog" style="margin-bottom:0">
    <?php if($this->session->flashdata('msg')){
        echo "<h3>".$this->session->flashdata('msg')."</h3>";   
    }?>
    <?php echo validation_errors(); ?>
        <div class="modal-content" >
                    <div class="panel-heading" style="margin-top:40px ; margin-left:50px" >
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body" style="margin-left:50px; margin-right:50px; margin-top:30px">
                            <?php echo form_open('Register/RegisterUser'); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="confirmpassword" type="password" value="">
                                </div>
                                <div class="registerbtn" style="margin-bottom: 20px">
                                <button class="btn btn-sm btn-success">Register</button>
                                </div>
                             </fieldset>
                             <?php echo form_close(); ?>
                    </div>
                </div>
    </div>
</div>




<?php include 'partials/Footer.php'?>