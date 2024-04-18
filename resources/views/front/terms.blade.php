@extends('front.layout.app')

@section('main_content')

<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Terms and Conditions</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Welcome to our hotel booking website. By using our website, you agree to comply with and be bound by the following terms and conditions. Please read these terms carefully before using our website.</p>
    
                <h5>1. Booking Process</h5>
                <p>When booking a hotel through our website, you agree to provide accurate and complete information. Any false or misleading information may result in cancellation of your booking.</p>
    
                <h5>2. Payment</h5>
                <p>All payments are processed securely through our payment gateway. By making a booking, you agree to pay the full amount as stated in your reservation.</p>
    
                <h5>3. Cancellation and Refunds</h5>
                <p>Cancellation policies vary depending on the hotel and room type. Please refer to the specific cancellation policy provided during the booking process. Refunds, if applicable, will be processed according to the cancellation policy.</p>
    
                <h5>4. Guest Responsibility</h5>
                <p>As a guest, you are responsible for your own actions and behavior during your stay at the hotel. Any damages caused to the hotel property will be charged to your account.</p>
    
                <h5>5. Privacy Policy</h5>
                <p>We respect your privacy and are committed to protecting your personal information. Please refer to our <a href="{{route('privacy_policy')}}">Privacy Policy</a> for more details.</p>
    
                <h5>6. Limitation of Liability</h5>
                <p>We are not liable for any loss or damage arising from your use of our website or your stay at the hotel. This includes, but is not limited to, loss of profits, data, or reputation.</p>
    
                <h5>7. Changes to Terms</h5>
                <p>We reserve the right to update or modify these terms and conditions at any time without prior notice. Continued use of our website after any changes indicates your acceptance of the revised terms.</p>
    
                <h5>8. Contact Us</h5>
                <p>If you have any questions or concerns about these terms and conditions, please <a href="/contact.html">contact us</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection