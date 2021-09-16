<!-- Contact -->
<div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Let us know about your project</h2>
                    <p class="p-heading">Of will at sell well at as. Too want but tall nay like old removing yourself today</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;AEY, Nairobi, KENYA</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:+254 725 807 288">+254 725 807 288</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:gitonga@aey-group.com">gitonga@aey-group.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <!-- Contact Form -->
                    <?php echo form_open('home/sendcontactmail')?>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile" class="form-control-input" placeholder="Mobile No" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    <?php echo form_close(); ?>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->