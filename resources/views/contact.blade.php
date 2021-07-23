@extends('layout.monster')
@section('content')
<head>
	<title>UCKTTO | Contact</title>
</head>

<section>
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.293522103223!2d120.5894317148124!3d16.40991258867121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a1685e7b7073%3A0xe6bda988e8558d2!2sUniversity%20of%20Cordilleras%20Legarda!5e0!3m2!1sen!2sus!4v1625018555523!5m2!1sen!2sus" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<section class="container">
    <div class="row">
      <div class="col xl6 l6 m6 s12">
        <div class="card-panel green darken-3">
          <h3 style="color:white">CONTACT DETAILS</h3><br>
         <ul>
            <li><i class="tiny material-icons">add_location</i> University of the Cordilleras Legarda Campus, Legarda Road, <br>&nbsp&nbsp&nbsp Baguio City, Philippines 2600</li> <br>
            <li><i class="tiny material-icons">email</i> ucktto@uc-bcf.edu.ph <br>&nbsp&nbsp&nbsp ucktto2020@gmail.com</li> <br>
            <li><i class="tiny material-icons">phone</i> (074) 442-3361 local 361</li>
          </ul><br><br><br>
          </div>
      </div>  

    <div class="col xl6 l6 m6 s12">
         
      <div class="card-panel">
        <h3>Message us for more details.</h3>
        <form action="/contact" role="form" id="contact_form" class="contact-form" method="POST" >
          @csrf
          @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
          @endif
              <ul>
                <li>
                      <label>
                          <input type="text" name="name" id="names" placeholder="Name">
                      </label>
                  </li>
                  <li>
                    <label>
                      <input type="text"  name="email" id="email" placeholder="Email">
                    </label>
                  </li>
                  <li>
                      <label>
                          <input type="text" name="subject" id="subject" placeholder="Subject">
                      </label>
                  </li>
                  <li>
                      <label>
                          <textarea name="message" id="message" rows="10" placeholder="Message"></textarea>
                      </label>
                  </li>
                  <li>
                      <button type="submit"  value="submit" class="btn green darken-4" id="btn_submit" >Send Message</button>
                  </li>
              </ul>
          </form>
          </div>
      </div>
  </div>
</section>

@endsection