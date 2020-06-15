<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoronaVIrus</title>
    <?php
    include  'Asserts-web/link/link.php'
    ?>
    <?php
    include  'Asserts-web/css/style.php'
    ?>
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
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Symptoms">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Prevention">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contact">Contact</a>
                </li>


            </ul>

        </div>
    </nav>

    <div class="main_header">
        <div class="container">
            <div class="row w-100 h-100">
                <div class="col-lg-5  col-md-5 col-12 mt-20 m-auto">
                    <div class="leftside  d-flex justify-content-center align-items-center">
                        <img src="Asserts-web/images/desk.png" alt="" width="300" height="300" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12  m-auto">
                    <div class="rigtside w-100 h-100 d-flex justify-content-center align-items-center">
                        <h1>let's Stay & Fight Together Against <br> C <span><img src="Asserts-web/images/logo2.png" alt="" class="img-fluid" width="70" height="70"></span> rona Virus</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="corona_update">
        <div class="mb-3">
            <h3 class="text-uppercase text-center">Latest Update</h3>
        </div>
        <div class="table_responsive">
            <table class=" table table-bordered table-striped text-center" id="tabval">
                <tr>
                    <td>Country</td>
                    <td>NewConfirmed</td>
                    <td>TotalConfirmed</td>
                    <td>NewDeaths</td>
                    <td>TotalDeaths</td>
                    <td>NewRecovered</td>
                    <td>TotalRecovered</td>
                </tr>
            </table>
        </div>
    </section>


    <div class="sub_section">
        <div class="container  pt-5 pb-5 " id="about">
            <div class="section_header text-center">
                <h1>About COVID-19</h1>
            </div>
            <div class="row pt-5">
                <div class="col-lg-5 col-md-5 col-sm-12 text-center">
                    <img src="Asserts-web/images/corona2020.png" alt="" width="650" height="300" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <h2>What is COVID-19 (Corona Virus)</h2>
                    <p>A pandemic is defined as “an epidemic occurring worldwide, or over a very wide area, crossing international boundaries and usually affecting a large number of people”. The classical definition includes nothing about population immunity,
                        virology or disease severity.</p>

                    <p>By this definition, pandemics can be said to occur annually in each of the temperate southern and northern hemispheres, given that seasonal epidemics cross international boundaries and affect a large number of people. However, seasonal epidemics are not considered pandemics.</p>
                    <p>A pandemic is defined as “an epidemic occurring worldwide, or over a very wide area, crossing international boundaries and usually affecting a large number of people”. The classical definition includes nothing about population immunity,
                        virology or disease severity.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  pt-5 pb-5 " id="Symptoms">
        <div class="section_header text-center">
            <h1>CoronaVIrus Symptoms</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 sm-12 mt-5  m-auto">
                <figure class="text-center">
                    <img src="Asserts-web/images/Tesse-secca.png" alt="" width="170" height="170" class="img-fluid">
                    <figcaption>Cough</figcaption>
                </figure>

            </div>
            <div class="col-md-4 col-lg-4 sm-12 mt-5  m-auto">
                <figure class="text-center">
                    <img src="Asserts-web/images/Starnuto.png" alt="" width="170" height="170" class="img-fluid">
                    <figcaption>Cough</figcaption>
                </figure>

            </div>
            <div class="col-md-4 col-lg-4 sm-12 mt-5  m-auto">
                <figure class="text-center">
                    <img src="Asserts-web/images/heart.png" alt="" width="170" height="170" class="img-fluid">
                    <figcaption>Cough</figcaption>
                </figure>

            </div>
            <div class="col-md-4 col-lg-4 sm-12 mt-5  m-auto">
                <figure class="text-center">
                    <img src="Asserts-web/images/w5.png" alt="" width="170" height="170" class="img-fluid">
                    <figcaption>Fever</figcaption>
                </figure>

            </div>
            <div class="col-md-4 col-lg-4 sm-12 mt-5  m-auto">
                <figure class="text-center">
                    <img src="Asserts-web/images/w4.png" alt="" width="170" height="170" class="img-fluid">
                    <figcaption>Light_Cough</figcaption>
                </figure>

            </div>
            <div class="col-md-4 col-lg-4 sm-12 mt-5  m-auto">
                <figure class="text-center">
                    <img src="Asserts-web/images/w3.png" alt="" width="170" height="170" class="img-fluid">
                    <figcaption>Tiredness</figcaption>
                </figure>

            </div>
        </div>
    </div>

    <div class="container-fluid sub_section pt-5 pb-5 " id="Prevention">
        <div class="section_header text-center">
            <h1>6 Steps Prevention</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-12 mt-5 ">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12 ">
                            <figure class="text-center">
                                <img src="Asserts-web/images/fam.png" alt="" width="100" height="100" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12 text-center">
                            <p> novel coronavirus (2019-nCoV) is a new coronavirus that has not been

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12 mt-5 ">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12 ">
                            <figure class="text-center">
                                <img src="Asserts-web/images/kha.png" alt="" width="100" height="100" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12 text-center">
                            <p> novel coronavirus (2019-nCoV) is a new coronavirus that has not been

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12 mt-5 ">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12 ">
                            <figure class="text-center">
                                <img src="Asserts-web/images/fru.png" alt="" width="100" height="100" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12  text-center">
                            <p> novel coronavirus (2019-nCoV) is a new coronavirus that has not been

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12 mt-5  ">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12 ">
                            <figure class="text-center">
                                <img src="Asserts-web/images/fru.png" alt="" width="100" height="100" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12  text-center">
                            <p> novel coronavirus (2019-nCoV) is a new coronavirus that has not been

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12 mt-5 ">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12 ">
                            <figure class="text-center">
                                <img src="Asserts-web/images/aero.png" alt="" width="100" height="100" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12  text-center">
                            <p> novel coronavirus (2019-nCoV) is a new coronavirus that has not been

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12 mt-5  ">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12 ">
                            <figure class="text-center">
                                <img src="Asserts-web/images/fam.png" alt="" width="100" height="100" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12  text-center">
                            <p> novel coronavirus (2019-nCoV) is a new coronavirus that has not been

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  pt-5 pb-5 " id="Contact">
        <div class="section_header text-center">
            <h1>Contact Us</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="username" placeholder="Name" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile_No</label>
                            <input type="number" class="form-control" name="mobileno" placeholder="Mobile" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label>Select Symptoms</label> <br>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                                <label class="custom-control-label " for="customcheckbox1">Cold</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="Fever">
                                <label class="custom-control-label " for="customcheckbox2">Fever</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                                <label class="custom-control-label " for="customcheckbox3">Difficulty in breath</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="Weakness">
                                <label class="custom-control-label " for="customcheckbox4">Weakness</label>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger mb-2" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container float-right pr-5 scrolltop">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div> -->

    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>copyright bu BureraBiya</p>
        </div>


    </footer>




</body>

<script type="text/javascript">
    $('.count').counterUp({
        delay: 10,
        time: 3000
    })


    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    function fetch() {
        $.get("https://api.covid19api.com/summary",function(data) {
            // console.log(data['Countries'].length);
        var tabval = document.getElementById('tabval');
        for(var i =1 ;i<(data['Countries'].length);i++)
        {
            var x = tabval.insertRow();
            x.insertCell(0);
            tabval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tabval.rows[i].cells[0].style.background = 'indianred';
            tabval.rows[i].cells[0].style.color = '#fff';

            x.insertCell(1);
            tabval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            tabval.rows[i].cells[1].style.background = '#4bb7b8';
            tabval.rows[i].cells[1].style.color = '#fff';


            x.insertCell(2);
            tabval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tabval.rows[i].cells[2].style.background = '#4bb7b8';
            tabval.rows[i].cells[2].style.color = '#fff';


            x.insertCell(3);
            tabval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['NewDeaths'];
            tabval.rows[i].cells[3].style.background = '#4bb7b8';
            tabval.rows[i].cells[3].style.color = '#fff';


            x.insertCell(4);
            tabval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tabval.rows[i].cells[4].style.background = '#4bb7b8';
            tabval.rows[i].cells[4].style.color = '#fff';


            x.insertCell(5);
            tabval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tabval.rows[i].cells[5].style.background = '#4bb7b8';
            tabval.rows[i].cells[5].style.color = '#fff';


            x.insertCell(6);
            tabval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tabval.rows[i].cells[6].style.background = '#4bb7b8';
            tabval.rows[i].cells[6].style.color = '#fff';

          
        }




        })
    }
</script>

</html>


<?php

include 'dbcorona.php';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $sympt = $_POST['coronasym'];
    $msg = $_POST['message'];

    $chk = "";

    foreach ($sympt as $chk1) {
        $chk .= $chk1 . ",";
    }


    $insertquery = "insert into coronacase(username,email,mobileno,sympt,message)  values('$username','$email','$mobileno','$chk' ,'$msg') ";

    $query = mysqli_query($con, $insertquery);

    if ($query) {
?>

        <script>
            alert("Connection Successfully")
        </script>
    <?php
    } else {
    ?>

        <script>
            alert("Connection Doexn't Successfully")
        </script>
<?php
    }
}
?>