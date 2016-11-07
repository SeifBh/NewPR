// notification body's can be any html string or just string
var notification_html = [];
	//Resend Email
	notification_html[1] = '<div class="activity-item"> <i class="fa fa-check text-succes"></i> <div class="activity">Verification email succefully sent</span> </div> </div>',
    //Registration complete
    notification_html[0] = '<div class="activity-item"> <i class="fa fa-check text-success"></i> <div class="activity"> Registration successfully completed </span> </div> </div>',
    //Email Veried
    notification_html[2] = '<div class="activity-item"> <i class="fa fa-check text-succes"></i> <div class="activity">Thankyou for confirming your account. <a href="/auth/login">Click here</a> to login</span> </div> </div>',
	//Verify Email 
    notification_html[3] = '<div class="activity-item"> <i class="fa fa-envelope-o text-warning"></i> <div class="activity"> You must verify your email before you can access the site. If you have not received the confirmation email check your spam folder.</span> </div> </div>',
    
    //You have arrived
    notification_html[4] = '<div class="activity-item"> <i class="fa fa-heart text-success"></i> <div class="activity"> You have arrived <br> WELCOME TO WORK WITH TAG</span> </div> </div>';

    //Profile Updated
    notification_html[5] = '<div class="activity-item"> <i class="fa fa-check text-success"></i> <div class="activity">successfully updated</div> </div>';

//Message sent
    notification_html[6] = '<div class="activity-item"> <i class="fa fa-check text-success"></i> <div class="activity">Message sent successfully</div> </div>';


