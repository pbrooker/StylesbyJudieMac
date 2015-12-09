<div class="wrap">
    <div class="content">	 	 
        <div class="mid-grid-alt">
            <hr>
            <h2 class="intro-text text-center">Contact <strong>form</strong>
            </h2>
            <hr>
            <h3>Send us a line.</h3>
            <?php
            //Check for validation errors
            if (!empty($data['contact'])) {
                //$data comes from slim framework
                //'contact' element comes from app render
                //array ('contact'=>$email_errors)
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">&times;</button>
                    <ul><?php
                        $errors = $data['contact'];
                        foreach ($errors as $error):
                            echo "<li>$error</li>";
                        endforeach;
                        ?>
                    </ul>
                </div>
            <?php } ?>
            <form class="contact-form" role="form" action="contact" method="post">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                               value="<?php if (isset($_POST['fullname'])) echo $_POST['fullname']; ?>">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Phone Number (optional)</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                               value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label>Message</label>
                        <textarea class="form-control" rows="6" id="message" name="message"><?php if (isset($_POST['message'])) echo $_POST['message']; ?></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="save" value="contact">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>   
        </div>
    </div>
</div>