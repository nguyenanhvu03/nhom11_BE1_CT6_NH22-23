<!--Important link source from https://bootsnipp.com/snippets/PDbzb-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">
<style>
  .pb-100 {
  padding-bottom: 100px;
}
.pt-100 {
  padding-top: 100px;
}
.mb-100 {
  margin-bottom: 100px;
}
a {
  text-decoration: none;
  color: #333;
  -webkit-transition: .4s;
  transition: .4s;
}
.section-title {
  position: relative;
}
.section-title p {
  font-size: 16px;
  margin-bottom: 5px;
  font-weight: 400;
}
.section-title h4 {
  font-size: 40px;
  font-weight: 600;
  text-transform: capitalize;
  position: relative;
  padding-bottom: 20px;
  display: inline-block;
}
.section-title h4::before {
  position: absolute;
  content: "";
  width: 80px;
  height: 2px;
  background-color: #d8d8d8;
  bottom: 0;
  left: 50%;
  margin-left: -40px;
}
.section-title h4::after {
  position: absolute;
  content: "";
  width: 50px;
  height: 2px;
  background-color: #FF7200;
  left: 0;
  bottom: 0;
  left: 50%;
  margin-left: -25px;
}
.contact {
  background : #88CDF6;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  position: relative;
  z-index: 2;
  color: #fff;
}
.contact-form input,
textarea {
  width: 100%;
  border: 1px solid #555;
  padding: 5px 10px;
  text-transform: capitalize;
  margin-top: 15px;
  background-color: transparent;
  color: #fff;
}
.contact:before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color: #333;
  z-index: -1;
  opacity: .85;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=85)";
}
.single-contact {
  text-align: left;
  position: relative;
  padding-left: 70px;
}

</style>

<?php 



?>


<body>
    <section class="contact pt-100 pb-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <p>get in touch</p>
                     <h4>contact me</h4>
                  </div>
               </div>
            </div>
            <div class="row text-center">
                  <div class="col-md-8">
                     <form method="GET"  action="lh.php" class="contact-form">
                        <div class="row">
                           <div class="col-xl-6">
                              <input type="text" placeholder="name" name="name">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="email" name="email">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="subject">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="telephone" name="tel">
                           </div>
                           <div class="col-xl-12">
                              <textarea placeholder="message" cols="30" rows="10"></textarea>
                              <input type="submit" value="send message">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-4">
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>56 đường số 20 TP HCM</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>0344842232</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>donguyentoan2003@gmail.com</p>
                     </div>
                  </div>
            </div>
         </div>
      </section>
</body>