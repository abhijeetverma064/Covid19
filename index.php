<!DOCTYPE html>
<html>
<head>
	<title>website against Corona</title>
	<?php  include 'link.php' ?>
	<?php  include 'style.php' ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid">Preventions</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="corona_live.php">Indiacoronalive</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactid">Contacts</a>
      </li>
      
    </ul>
   
  </div>
</nav>
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/images.jfif">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_anim"> <img src="images/corona3.png" width="100"></span>na Virus</h1>
			</div>
		</div>
	</div>
</div>
<!--********************* corona latest updates *************************-->
<!-- <section class="corona_update">
  <div class="mb-3"> margin-buttom
    <h3 class=" text-uppercase text-center">covid-19 updates</h3>
  </div>
  <div class="d-flex justify-content-around align-items-center">
    <div><h1 class="count">1,524,266</h1>
      <p>Passenger screened at airport</p></div>
          <div><h1 class="count">512</h1>
      <p>Active COVID-19 cases</p></div>
          <div><h1 class="count">40</h1>
      <p>Cured/discharged</p></div>
          <div><h1 class="count">9</h1>
      <p>Death cases</p></div>
  </div>
</section>  -->
<section class="corona_update container-fluid">
  <div class="mb-3"> 
    <h3 class=" text-uppercase text-center">covid-19 updates</h3>
  </div>
<div class="table-responsive">
  <table class="table-bordered table-striped text-center" id="tbval">
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
      <th>TotalDeaths</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
    </tr>
  </table>
</div>

</section>


<!--*********************** about section *******************-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid" >
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>  
  </div>
<div class="row pt-5">
  <div class="col-lg-5 col-md-6 col-12 ml-5">
    <img src="images/corona4.jpg" class="img-fluid" width="1000">
  </div>
   <div class="col-lg-6 col-md-6 col-12">
    <h2>What is COVID-19(Corona-Virus)</h2>
    <P>The name "coronavirus" is derived from Latin corona, meaning "crown" or "wreath", itself a borrowing from Greek κορώνη korṓnē, "garland, wreath".[10][11] The name was coined by June Almeida and David Tyrrell who first observed and studied human coronaviruses.[12] The word was first used in print in 1968 by an informal group of virologists in the journal Nature to designate the new family of viruses.[9] </P>
    <p>Coronaviruses are large, roughly spherical, particles with bulbous surface projections.[41] The average diameter of the virus particles is around 125 nm (.125 μm). The diameter of the envelope is 85 nm and the spikes are 20 nm long. The envelope of the virus in electron micrographs appears as a distinct pair of electron-dense shells (shells that are relatively opaque to the electron beam used to scan the virus particle).
</p>
  </div>
</div>
</div>
<!-- ****************corona symptoms *****************-->
<div class="container-fluid  pt-5 pb-5" id="sympid" >
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus symptoms</h1>  
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/cough.png" class="img-fluid" width="120" height="120">
      <figcaption>Cough</figcaption>
       </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/running.png" class="img-fluid" width="120" height="120">
      <figcaption>runny nose</figcaption>
       </figure>
      </div>
     <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/fever.png" class="img-fluid" width="120" height="120">
      <figcaption>Fever</figcaption>
       </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/running2.jpg" class="img-fluid" width="120" height="120">
      <figcaption>cold</figcaption>
       </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/tired.jpg" class="img-fluid" width="120" height="120">
      <figcaption>Tiredness</figcaption>
       </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/breathing2.png" class="img-fluid" width="120" height="120">
      <figcaption>difficulty breathing(sever cases)</figcaption>
       </figure>
      </div>
    </div>
  </div>
</div>

<!--******************* Prevention against Coronavirus ****************-->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid" >
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 steps Prevention Against Coronavirus</h1>  
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
        <img src="images/hand.jpg" class="img-fluid" width="90" height="90">
      
       </figure>
        </div>
   <div class="col-lg-8 col-md-8 col-12">
    <p>wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub</p>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
        <img src="images/mask.jpg" class="img-fluid" width="90" height="90">
      
       </figure>
        </div>
   <div class="col-lg-8 col-md-8 col-12">
    <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
        </div>

      </div>
    </div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
        <img src="images/social.jpg" class="img-fluid" width="90" height="90">
      
       </figure>
        </div>
   <div class="col-lg-8 col-md-8 col-12">
    <p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
        <img src="images/home.jpg" class="img-fluid" width="90" height="90">
      
       </figure>
        </div>
   <div class="col-lg-8 col-md-8 col-12">
    <p>Stay home and self-isolate from others in the household if you feel unwell.</p>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
        <img src="images/news.jpg" class="img-fluid" width="90" height="90">
      
       </figure>
        </div>
   <div class="col-lg-8 col-md-8 col-12">
    <p>Stay informed by watching news and follow the recommended proctices.</p>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
        <img src="images/fever.png" class="img-fluid" width="90" height="90">
      
       </figure>
        </div>
   <div class="col-lg-8 col-md-8 col-12">
    <p>If you have fever,cough and diffiulty breathing seek medical care early.</p>
        </div>

      </div>
    </div>

  </div>
</div>
</div>

<!-- ****************corona symptoms *****************-->
<div class="container-fluid  pt-5 pb-5" id="contactid" >
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 steps Prevention Against Coronavirus</h1>  
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12">
      <form>
  <div class="form-group">
    <label >username</label>
    <input type="text" class="form-control" placeholder="name" name="username" required>
  </div>
    <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control"  placeholder="name@example.com" name="email" required>
  </div>
      <div class="form-group">
    <label >Mobile </label>
    <input type="number" class="form-control"  placeholder="mobile" name="mobile" required>
  </div>
  <div class="form-group">
    <label >Select symptoms </label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" name="coronasym[]" value="cold" class="custom-control-input" id="customcheckbox1">
      <label class="custom-control-label" for="customcheckbox1">Cold</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" name="coronasym[]" value="fever" class="custom-control-input" id="customcheckbox2">
      <label class="custom-control-label" for="customcheckbox2">Fever</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" name="coronasym[]" value="breath" class="custom-control-input" id="customcheckbox3">
      <label class="custom-control-label" for="customcheckbox3">difficulty in Breath</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" name="coronasym[]" value="tired" class="custom-control-input" id="customcheckbox4">
      <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
    </div>

  </div>



  <div class="form-group">
    <label >Example textarea</label>
    <textarea class="form-control" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>


</div>
</div>
<!--*********************top cursor****************** -->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>
</div>

<!-- ************************** footer ****************-->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>copyright by abhijeetverma</p>
  </div>
</footer>


<script type="text/javascript">
  // for animate the number count.
  $('.count').counterUp({
    delay: 10,
    time: 3000
});

  mybutton=document.getElementById('myBtn');
  //when the user scrolls down 100px form the top of the document, show the button
  window.onscroll=function(){ scrollFunction()};
  function scrollFunction(){
   if(document.documentElement.scrollTop > 100){
    mybutton.style.display="block";
   } 
  else{mybutton.style.display="none";}
  }
//when the user clicks on the button,scroll to top of the document
function topfunction()
{
  document.documentElement.scrollTop=0;
}
function fetch()
{
  $.get("https://api.covid19api.com/summary",
   
   function(data){
    var tbval=document.getElementById('tbval');
    for(var i=1;i<(data['Countries'].length);i++)
    {
      var x=tbval.insertRow();
      x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
      tbval.rows[i].cells[0].style.background='#7a4a91';
      tbval.rows[i].cells[0].style.color='#fff';

      x.insertCell(1);
      tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
      tbval.rows[i].cells[1].style.background='#4bb7d8';
     

      x.insertCell(2);
      tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
      tbval.rows[i].cells[2].style.background='#4bb7d8';
      

            x.insertCell(3);
      tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
      tbval.rows[i].cells[3].style.background='#f36e23';
      

      //       x.insertCell(4);
      // tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
      // tbval.rows[i].cells[4].style.background='#4bb7d8';
      

            x.insertCell(4);
      tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewRecovered'];
      tbval.rows[i].cells[4].style.background='#9cc850';
     

                  x.insertCell(5);
      tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewDeaths'];
      tbval.rows[i].cells[5].style.background='#f36e23';
     
    }
   }



    );
}

</script>
</body>
</html>


















