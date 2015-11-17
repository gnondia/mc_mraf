@extends('layouts.layout')

@section('content')
<div class="about-content">
<img class="img-about" src="{{URL::to('asset')}}/images/about.png" alt="About Us " >
<div class="about-intro">
<h4>{{Lang::get('about.abtus')}}</h4>
<section>
<p>
	{{Lang::get('about.us')}}, 
	 <b>GericomGroup</b> is a web and mobile agricultural platform where users(farmers, customers, companies, etc) can post products for sale and/or buy the posted agricultural products. eFarm.cm is uniquely for agricultural products in Cameroon, Africa and the rest of World. 
</p>
<p>
	The SOLE reason eFarm.cm was created is to help the farmers in the communities of Cameroon market their farm products online, to be able to reach customers and consumers around Cameroon, Africa and the rest of the World. Agriculture remain a backbone of Cameroon’s economy, employing 70 percent of its workforce, while providing 42 percent of its GDP and 30 percent of its export revenue (https://en.wikipedia.org/wiki/Agriculture_in_Cameroon).<br /> These numbers are still increasing with the need to MARKET these agricultural products such as  cocoa, coffee, cotton, bananas, rubber, palm oil and kernels, peanuts, plantains, cassava, corn, etc.
</p>
<p>
	eFarm.cm ensures reliability, loyalty, trust worthiness, efficiency and time saved for either parties(sellers and buyers) involve in every business transaction at eFarm.cm. eFarm.cm oversees its transactions from start to finish. Also its wide range of payment makes transactions easier from its National payment method like the online MTN and Orange Mobile Money to international payment methods like Paypal, debit and credit cards, etc. Efarm.cm is secure for online purchases. You register, identify and participate before you make either sales or purchases. Efarm.cm creates and encourages repeat purchase through constant bridge between sellers and customers. The team of eFarm.cm visit some registered farmers.
</p>
<p>
	eFarm.cm has been describe as ”eBay for agricultural products” by the Founder of eFarm.cm – Gerald NONDIA. 
</p>
</section>
<img src="{{URL::to('asset')}}/images/abouttext.png" alt="About Us ">
</div>
</div>
@stop