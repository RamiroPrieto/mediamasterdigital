<!DOCTYPE html>
<html lang="ja">

<?php include_once('./includes/head.php') ?>
<?php include_once('./includes/header.php') ?>


<body>
    
    <div class="presentation">
        <div class="presentation__blur">

        </div>
        <div class="container row">
            <div class="presentation__title col-md-12">Media Master Digital</div>
            <a href="./brand" class="col-md-2 presentation__service">
            Brand consultation and Market analisys
                </a>
            <a href="./design" class="col-md-2 presentation__service">
            Creative design and Branding
                </a>
            <a href="./webdev" class="col-md-2 presentation__service">
            Custom web and APP development
                </a>
            <a href="./newtech" class="col-md-2 presentation__service">
            Immersive Reality and new technologies
                </a>
            <a href="./video" class="col-md-2 presentation__service">
            Video production and animation
                </a>
            <a href="./allservices" class="col-md-2 presentation__service">
            View all services
                </a>
        </div>
    </div>
    <div class="weare">
        <div class="container">
            <div class="weare__text">
                We are a full-service digital agency that achieves our client’s goals through the strategic application of design and technology.
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact row">
            <div class="col-md-12 contact__left">
                <h3 class="contact__title">Contact Us!</h3>
                <form class="row g-3" action="https://formsubmit.co/info@mediamasterdigital.com" method="POST">
                    <div class="col-12">
                        <!-- <label for="name" class="form-label">Address</label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="col-12">
                        <!-- <label for="inputAddress2" class="form-label">Address 2</label> -->
                        <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="col-md-12">
                        <!-- <label for="inputCity" class="form-label">City</label> -->
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number">
                    </div>
                    <div class="col-md-12">
                        <!-- <label for="inputZip" class="form-label">Zip</label> -->
                        <input type="text" class="form-control" id="help" name="help" placeholder="How Can We Help?">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- <input type="hidden" name="_next" value="http://localhost/mmd/send"> -->
                    <input type="hidden" name="_next" value="https://mediamasterdigital.com/send.php">

                    <input type="hidden" name="_captcha" value="false">
                    <!-- <input type="hidden" name="_template" value="table"> -->
                </form>
            </div>
        </div>
    </div>    
    
</body>

<?php include_once('./includes/footer.php') ?>

</html>