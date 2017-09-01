@extends('layout.index')

@section('content')

	@include('sublayout.pictureHeader')

	<section id="serviceOne">
		<div class="container serviceWrap">
			<h2>Transportation</h2>
			<div class="row">
				<div class="col-md-6" data-aos="flip-left">
					<div class="innerServiceImage">
						<img src="images/transportation1.jpg" alt="Transportation" class="img3">
					</div>
				</div>
				<div class="col-md-6" data-aos="flip-right">
					<p>Transportation Services is dedicated to providing safe and
						reliable transportation for minerals (feldspar, soil, clay)</p>
				</div>
			</div>
		</div>
	</section>

	<section id="serviceTwo">
		<div class="container serviceWrap">
			<h2>Industrial Park</h2>
			<div class="row">
				<!--<div class="col-md-6 serviceWrap hidden-md">
                    <div class="innerServiceImage">
                        <img src="images/about2.png" alt="" class="img3">
                    </div>
                </div>-->
				<div class="col-md-6" data-aos="fade-right">
					<p>Land is allocated at Mkuranga district of the Pwani Region of Tanzania.
						The area is of 1200 acres of land Where 60 acres are sold to Goodwill Company in Tanzania.</p>
				</div>
				<div class="col-md-6" data-aos="fade-left">
					<div class="innerServiceImage">
						<img src="images/industrialpark2.jpg" alt="" class="img3">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="serviceThree">
		<div class="container serviceWrap">
			<h2>Minerals</h2>
			<div class="row">
				<div class="col-md-6" data-aos="zoom-in-right">
					<div class="innerServiceImage">
						<img src="images/s3.jpg" alt="" class="img3">
					</div>
				</div>
				<div class="col-md-6" data-aos="zoom-in-left">
					<p>We provide clay, feldspar and sand (building) soil. We are the large provider for clay and feldspar
						for Goodwill Company which is among the top ten companies that will increase the economy of Tanzania in the coming years.
					</p>
				</div>
			</div>
		</div>
	</section>

	@endsection

