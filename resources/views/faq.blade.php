@extends('layout.monster')
@section('content')
<head>
	<title>UCKTTO | FAQ</title>
</head>

<section class="container">
  <div class="row">
    <div class="col xl12 l12 m12 s12">
      <center><img src="img/KTTO.png" width="30%" height="20%"></center>
    </div>
  </div>
</section>

<section class="container">
	<div class="card-panel horizontal"><h2>Frequently Asked Questions</h2></div>
	<div class="divider"></div>
	<div class="row">
		<div class="col s12">
      <table>
        <thead>
          <th>Question</th>
          <th>Answer</th>
        </thead>
        <tbody>
          <tr>
            <td>
              @foreach($faqs as $faq)
              {{ $faq->question }} <br>
              @endforeach
            </td>
            <td>
              @foreach($faqs as $faq)
              {{ $faq->answer }} <br>
              @endforeach
            </td>
          </tr>
        </tbody>
      </table>
		</div>
	</div>
</section>

@endsection