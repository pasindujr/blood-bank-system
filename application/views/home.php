<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/styles.css'); ?>">
    <title>Kegalle Blood Bank</title>
</head>
<body>
<?php include_once 'navbars/navbar1.php' ?>

<!--Banner section-->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-header">Central Blood Bank</p>
                <p>The blood you donate gives someone another chance of life.</p>
                <a href="#"><img src="<?php echo base_url('assests/img/play.png'); ?>" class="play-btn">Watch Video</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo base_url('assests/img/banner.jpg'); ?>" class="img-fluid">
            </div>
        </div>
    </div>
    <img src="<?php echo base_url('assests/img/wave1.png'); ?>" class="bottom-img">
</section>

<!--Why give blood-->
<section id="facts">
    <div class="container text-center">
        <h1 class="title">WHY GIVE BLOOD?</h1>
        <div class="row text-center">
            <div class="col-md-3 facts">
                <img src="<?php echo base_url('assests/img/fact1.png'); ?>" class="facts-img">
                <h4>100</h4>
                <p>100% of Sri Lankan blood donors are voluntary non remunerated donors.</p>
            </div>
            <div class="col-md-3 facts">
                <img src="<?php echo base_url('assests/img/fact2.png'); ?>" class="facts-img">
                <h4>3</h4>
                <p>Your precious donation of blood can save as many as 3 lives.</p>
            </div>
            <div class="col-md-3 facts">
                <img src="<?php echo base_url('assests/img/fact3.png'); ?>" class="facts-img">
                <h4>4</h4>
                <p>You can donate blood in every 4 months time.</p>
            </div>
            <div class="col-md-3 facts">
                <img src="<?php echo base_url('assests/img/fact4.png'); ?>" class="facts-img">
                <h4>14th JUNE</h4>
                <p>World Blood Donor Day.</p>
            </div>
        </div>
    </div>
</section>

<!--Who can give blood-->
<section id="who-can-give-blood">
    <div class="container">
        <h1 class="title text-center">WHO CAN GIVE BLOOD?</h1>
        <div class="row">
            <div class="col-md-6 who-can-give-blood">
                <p class="give-blood-title">Who can donate blood?</p>
                <ul>
                    <li>The person must fulfill several criteria to be accepted as a blood donor. These criteria are set
                        forth to ensure the safety of the donor as well as the quality of donated blood.
                    </li>
                </ul>
            </div>
            <div class="col-md-6 who-can-give-blood">
                <p class="give-blood-title">Donor Selection Criteria</p>
                <ul>
                    <li>Age above 18 years and below 60 years.</li>
                    <li>If previously donated, at least 4 months should be elapsed since the date of previous
                        donation.
                    </li>
                    <li>Hemoglobin level should be more than 12g/dL. (this blood test is done prior to each blood
                        donation)
                    </li>
                    <li>Free from any serious disease condition or pregnancy.</li>
                    <li>Should have a valid identity card or any other document to prove the identity.</li>
                    <li>Free from "Risk Behaviours".</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 who-can-give-blood">
                <p class="give-blood-title">Risk Behaviours</p>
                <ul>
                    <li>Homosexuals.</li>
                    <li>Sex workers and their clients.</li>
                    <li>Drug addicts.</li>
                    <li>Engaging in sex with any of the above.</li>
                    <li>Having more than one sexual partner</li>
                </ul>
            </div>
            <div class="col-md-6 who-can-give-blood">
                <p class="give-blood-title">Type of Donors</p>
                <ul>
                    <li>Voluntory non remunerated donors. (donate for the sake of others and do not expect any benefit.
                        their blood is considered safe and healthy)
                    </li>
                    <li>Replacement donors. (donate to replace the units used for their friends or family members)</li>
                    <li>Paid donors. (receive payment for donation</li>
                    <li>Directed donors. (donate only for a specific patient's requirement)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--The donation process-->

<section id="donation-process">
    <div class="container">
        <h1 class="title text-center">THE DONATION PROCESS</h1>
        <div class="row offset-1">
            <div class="col-md-11 donation-process">
                <p class="donation-process-title">The donation process</p>
                <ul>
                    <li>Giving blood is simple and it saves lives. When you give blood, it is collected so it can be
                        used to treat someone else
                    </li>
                </ul>
            </div>
        </div>

        <div class="row offset-1">
            <div class="col-md-11 donation-process">
                <p class="donation-process-title">Before you give blood</p>
                <ol>
                    <li>Check you are able to give blood.</li>
                    <li>Register your interest in being a donor.</li>
                    <li>Follow the preparing to give blood recommendations.</li>
                    <li>If you are unable to keep your donation appointment please try and give us at least 3 days'
                        notice.
                    </li>
                </ol>
            </div>
        </div>

        <div class="row offset-1">
            <div class="col-md-11 donation-process">
                <p class=donation-process-title>Welcome and preparation.</p>
                <ul>
                    <li>Remember to bring your completed donation safety check form with you, if you received one from
                        us in the post. We will ask you to agree to our donor consent form which explains the importance
                        of blood safety. It’s important to read that whenever you attend because advice does change. We
                        will give you 500ml of fluid just before you give blood. Drinking this over about 5 minutes will
                        help with your well-being during and after donation.
                    </li>
                </ul>
            </div>
        </div>

        <div class="row offset-1">
            <div class="col-md-11 donation-process">
                <p class=donation-process-title>Health screening</p>
                <ul>
                    <li>We make sure it is safe for you to donate, and that your blood donation is safe for a patient to
                        receive.
                        <ol>
                            <li>
                                We confirm your identity and ask you about the information on your donor health check
                                form; a registered nurse may follow up if necessary.
                            </li>
                            <li>
                                We test a drop of blood from your finger to check the iron levels (haemoglobin) in your
                                blood.
                            </li>
                        </ol>
                    </li>
                    <li>If you are not able to donate we will explain why, and may ask you to make another
                        appointment.
                    </li>
                    <li>If you are able to donate you will be asked to sit in a waiting area until you are called to a
                        donation chair.
                    </li>
                </ul>
            </div>
        </div>

        <div class="row offset-1">
            <div class="col-md-11 donation-process">
                <p class=donation-process-title>Your blood donation</p>
                <ul>
                    <li>When you are comfortable on the chair we will ask you to confirm your name, address and date of
                        birth.
                    </li>
                    <li>We examine your arm and place a cuff on your arm to maintain a small amount of pressure during
                        donation (this does not measure blood pressure).
                    </li>
                    <li>We then examine your arm to find a suitable vein and clean it with an antiseptic sponge.
                        <ol>
                            <li>We will insert a needle in your arm which will collect your blood into a blood bag with
                                your unique donor number.
                            </li>
                            <li>You should not feel any discomfort or pain. If you do, tell a member of staff.</li>
                            <li>A scale weighs the blood and stops when you have donated 470ml (or just under a pint).
                                This usually takes between 5-10 minutes.
                            </li>
                            <li>The needle will be removed and a sterile dressing applied to your arm.</li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>

    </div>


</section>

<?php include_once 'footer/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

