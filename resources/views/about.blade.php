@extends('layout.monster')
@section('content')

<div class="slideshow w3-animate-top">
  <h2 style="text-align:center">Slideshow images</h2>
</div>

<div class="vmo-container w3-animate-opacity">
  <h2 style="text-align:center">ABOUT</h2>
  <p style="text-align: justify">
    The University of the Cordilleras Knowledge and Technology Office (UC KTTO) was established under the Intellectual Property Management Program for Academic Institutions Commercializing Technologies (IMPACT) Program of the Department of Science and Technology (DOST) in November of 2020. Out of the forty (40) universities in the Country that signified their interest in the said program, only twenty (20) were screened to undergo a twenty six-month training under the United States Agency International Development- Science, Technology, Research and Innovation for Development (USAID- STRIDE) Program. The USAID STRIDE capacity in science, technology, and program's goal is to strengthen the science, technology, research, and innovation capacity in Philippine higher education with a focus on disciplines that contribute to high-growth economic sectors. Two essential objectives that must be met to successfully achieve the goal are improving research innovation fields and strengthening partnerships between industry and academy for applied research.
  </p>

  <p style="text-align: justify">
    With this, the grant amounting to Php 2.4 Million has been conferred to the University of the Cordilleras, one of the top 10 qualifiers for the IMPACT Program, through the initiative of Dr. Thelma D. Palaoag and Jeffrey Ingosan.
  </p>

  <p style="text-align: justify">
    Among the top 10 institutions who qualified for the grant were Batangas State University, University of Science and Technology of Southern Philippines, Mindanao State University-Iligan Institute Technology, University of the Philippines-Mindanao, Technological University of the Philippines- Visayas, Adamson University, Bulacan State University, Saint Louis University, and the DOST Philippine Nuclear Research Institute (PNRI).
  </p>

  <p style="text-align: justify;">
    The UC-KTTO, under the Vice President for Academics and Research, is responsible for the implementation of the IP and the Tech Transfer Policies of the University. Its functions also constitute assisting the employees, students, and partners in IP protection, publications, and technology transfer. In doing so, the KTTO strives to contribute to the public good, further economic development in the region, and enhance the University's research and development reputation.
  </p>

  <h2 style="text-align:center">VISION</h2>
  <p style="text-align: center">
    The UC-KTTO envisions being the leading advocate of knowledge and technology transfer services and IP management of research and project outputs that aim to solve social and community problems in the Country.
  </p>

  <h2 style="text-align:center">MISSION AND OBJECTIVES</h2>
  <p>The UC-KTTO aims to:</p>
  <ol type="a">
    <li>
      Discover new knowledge and encourage the discoveries and inventions made by employees, students and parents of the University.
    </li>
    <li>
      Evaluate potential technology for appropriate intellectual property protection of employees, students, and parents of the University.
    </li>
    <li>
      Assist in the licensing and protecting inventions and technology through Intellectual Property Rights.
    </li>
    <li>
      Create commercialization strategies that will facilitate and encourage the transfer of technology.
    </li>
    <li>
      Commercialize University reaserch discoveries and inventions through tech transfer of creation of spin-off companies/ start-up businesses.
    </li>
  </ol>

</div>
<div class="os-container">
  <h2 style="text-align: center">ORGANIZATION STRUCTURE</h2>
  
</div>
<script type="text/javascript">
  var slideIndex = 0;
  carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
@stop