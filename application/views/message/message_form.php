<div class="content-wrapper">
    <div class="row">
        <div class="signup-form">
            <form action="<?php echo base_url('message/send_message'); ?>" method="post">
                <div class="p-2">
                    <h2>Send Bulk Messages</h2>
                </div>


                <div class="form-group">

                    <textarea class="form-control input-lg" name="mobile_number"
                        placeholder="Enter your mobile numbers with comma separated" required="required"
                        rows="6"></textarea>
                </div>

                <div class="form-group">
                    <textarea class="form-control input-lg" name="message" placeholder="Enter your message"
                        required="required" rows="4"></textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>