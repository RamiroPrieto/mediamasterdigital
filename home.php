<!DOCTYPE html>
<html lang="ja">

<?php include_once('./includes/head.php') ?>
<?php include_once('./includes/header.php') ?>

<?php
                    $flag = true;
          
                    if (isset($_POST["password"])) {
                      $message = "
                      <html>
                      <head>
                          <title>Request</title>
                      </head>
                      <body>
                          <p>
                              User: ".$_POST["name"]."<br>
                              Email: ".$_POST["email"]."<br>
                              Phone: ".$_POST["phone"]."<br>
                              Message: ".$_POST["help"]."<br>
                          </p>
                          </body>
                      </html>
                      ";
                      $headers = "MIME-Version: 1.0\r\n";
                      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                      $headers .= "info@mediamasterdigital.com\r\n";
                      $rta = @mail($_POST["email"],'Request', $message, $headers);
                      $rta = true;
                      if ($rta) {
                          $flag_send = true;
                          $flag = false;
                  ?>
                          <!-- <script>
                                let user = {};
                                let data = document.querySelector('#user');
          
                                user[data.dataset.email] = data.dataset.psw;
                                localStorage.setItem("user", JSON.stringify(user));
                          </script> -->
                          <?php
                      }
                    }
                    
                    
                    if ($flag) { }?>


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
                <form class="row g-3" method="post">
                    <div class="col-12">
                        <!-- <label for="name" class="form-label">Address</label> -->
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="col-12">
                        <!-- <label for="inputAddress2" class="form-label">Address 2</label> -->
                        <input type="text" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="col-md-12">
                        <!-- <label for="inputCity" class="form-label">City</label> -->
                        <input type="text" class="form-control" id="phone" placeholder="Your Phone Number">
                    </div>
                    <div class="col-md-12">
                        <!-- <label for="inputZip" class="form-label">Zip</label> -->
                        <input type="text" class="form-control" id="help" placeholder="How Can We Help?">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
    
</body>

<?php include_once('./includes/footer.php') ?>

</html>