@include('template_blog.head')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        <!-- FORM -->
                        <form action="{{ url('kontak') }}" method="POST">
                            @csrf
                            <h3 class="text-center">Hubungi Kami</h3>
                            <div class="form-group">
                                <label name="nama">Full Name :</label>
                                <input class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label name="email">Email address :</label>
                                <input class="form-control" id="email" name="email" type="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Subject :</label>
                                <input class="form-control" id="subject" name="subject" minlength="3" required>
                            </div>
                            <div class="form-group">
                                <label>Message :</label>
                                <textarea class="form-control" name="message" id="message" minlength="10" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                        <!-- End Form -->
                    </div>

                    <div class="row" style="padding-top:50px;">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer-widget">
                                        <h4>Alamat</h4>
                                        <ul class="contact-social">
                                            <li><i class="fa fa-home"></i> Jln. Babakan Randu RT 05 RW 02 Desa Lemahsugih Kec. Lemahsugih Kab.Majalengka</li>
                                        </ul><br>
                                        <h4>Email</h4>
                                        <ul class="contact-social">
                                            <li><i class="fa fa-envelope"></i>  gmail@gmail.com</li>
                                        </ul><br>
                                        <h4>Telepon</h4>
                                        <ul class="contact-social">
                                            <li><i class="fa fa-phone"></i> 022-222-222</li>
                                        </ul><br>
                                        <h4>Social Media</h4>
                                        <ul class="contact-social">
                                            <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                                            <!-- <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li> -->
                                            <li><a href="https://www.instagram.com/smkatm/" target="_blank" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                                        </ul><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.919631077656!2d108.17144751499862!3d-7.018733070705714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f36ee1732fca7%3A0x20e26a3c2b0230b1!2sSMK%20Auliya%20Teladan%20Mandiri%20(ATM)!5e0!3m2!1sid!2sid!4v1594185422885!5m2!1sid!2sid" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- FOOTER -->
<footer id="footer"  style="background-color: #153663 ;">
		<!-- container -->
		<div class="container" >
			<!-- row -->
				<div class="col-md-12 col-md-12">
					<div class="footer-copyright text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('/landing/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/landing/js/bootstrap.min.js ') }}"></script>
	<script src="{{ asset('/landing/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('/landing/js/main.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- OWL -->
	<script src="{{ asset('/owl/docs/assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('/owl/dist/owl.carousel.js') }}"></script>
	<script>
		var owl = $('.owl-carousel');
			// owl.owlCarousel({
			// 	items:4,
			// 	loop:true,
			// 	margin:10,
			// 	autoplay:true,
			// 	autoplayTimeout:5000,
			// 	autoplayHoverPause:true
			// });
			$('.owl-carousel').owlCarousel({
				margin:10,
				loop:true,
				autoplay:true,
				autoWidth:true,
				items:3,
				center:true
			})
	</script>
</body>

</html>