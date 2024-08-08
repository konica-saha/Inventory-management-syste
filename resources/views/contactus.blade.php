@extends('layouts.app')
@section('content')

<div class="page-notification">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
<li class="breadcrumb-item"><a href="#">Contact</a></li>
</ol>
</nav>
</div>
</div>
</div>
</div>
<section class="contact-section bottom-padding">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="section-tittle section-tittle3 mb-30 text-center">
<h2>Contact Us</h2>
</div>
</div>
</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3663.2644993588833!2d90.167687!3d23.3424301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375577414d18e7b9%3A0xa80a91917ffaac41!2z4Ket4KenIOCmmuCmpOCnjeCmrOCmsA!5e0!3m2!1sen!2sbd!4v1722963003479!5m2!1sen!2sbd" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<div class="row">
<div class="col-12">
<h2 class="contact-title">Get in Touch</h2>
</div>
<div class="col-lg-8">
<form class="form-contact contact_form" action="https://preview.colorlib.com/theme/megasis/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Buttonwood, California.</h3>
<p>Rosemead, CA 91770</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>+1 253 565 2365</h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="63101613130c111723000c0f0c110f0a014d000c0e">[email&#160;protected]</a></h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div>
</div>
</div>
</section>

 @endsection