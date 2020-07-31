<?php include 'partials/Header.php'?>

<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
    
        <?php if($this->session->flashdata('msg')){
            echo "<h6>".$this->session->flashdata('msg')."</h6>";   
        }?>

        <?php if($this->session->flashdata('errmsg')){
            echo "<h6>".$this->session->flashdata('errmsg')."</h6>";   
        }?>

        <?php echo validation_errors(); ?>
    
        <div class="modal-content" >
                    <div class="panel-heading" style="margin-top:40px ; margin-left:50px" >
                        <h3 class="panel-title">Log In</h3>
                    </div>
                    <div class="panel-body" style="margin-left:50px; margin-right:50px; margin-top:30px">
                            <?php echo form_open('Login/LoginUser'); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                   
                                </div>
                                <div class="registerbtn" style="margin-bottom: 20px">
                                <button class="btn btn-sm btn-success">Login</button>
                                </div>
                            </fieldset>
                            <?php echo form_close(); ?>
                    </div>
                </div>
    </div>
</div>

<?php include 'partials/Footer.php'?>