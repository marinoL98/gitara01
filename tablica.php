<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=yocDhmeupz_JpQb8Q39sTgYlnJPIGzH3TAcr7mTRvrpWXgNqJ9PBm44yRKjuD7N88IY-HIX6hCw1Dh0nIEH4rNXzo65PBQ5120518Iu9j-LgnYg7UxqG0IylDWEPH3zrFcUO5F2ROApBn3myUMfVKgqhBItKjQZ2mVeyOzseFBuCBrwlR3zlfu4ZfWinnd1xbZJg_NeTcOeqBe1TH1cu7Z4LeKXyDkizDd7h4gbgCDuNsDvphh-JcsagMeKGsAki6e6Nr5WcuKhlwaAMgqQJptBQLpjPOnmxLvCEVyHIeWSriv6zoQS2auFNq6m9T5dh0fPXX3pv7ChiQeRQ-f-hb6CWZ05v9V3G1Iheeu4bg3lX7Si77e5ADRrKJw8lHU9BR6h4YF5-u7yCZm-PqSY5Y-By-AKLZrv-Leht3dauAylGm-qHg7xMprw9_jFMjyaJlej790rY1vAZkEmYvXA5-Il3Juv6IegZKPsKYpT2zr34rVXH_XDjXH3cVfNND67NvKuubZ93mH81omT7zqgcF4jYVDdkOQkGIcdoeRtBEf4sUwkaUZS-i-R1H2tvUgOjuMTMQnZHF7kfSw01cqzGd-5OK8Q1TQLQlfFpeeTTMNtAZ2ygpa87f1uoLgrkKN-iYG2yPaj_nFsNeOaOSeLIq-EMyyHgyTqmG6d_xtaemCJ2_dUwjPHFneOJU3RzAAARzyfpcBCnFsj43EsVkcptabO3UNnnIP4sH5JVAzG8oP27MS9LKjEjorV0hU8d0SOnWeGXEvprT_QRLE62IcKNNOk3l8_OktdvVRWJ7S26HsKJCLyQpGeJBERBUBghynGyQo2qFxt6XCZXi0Fypjtvg-_CwkYrE-XJad9g6kfXF6RIcWZtsNnCX1_a74P6mjApG28KrGQgzemhTaED3jdCwGUEu-b-rKOA83TfYR8VdH53AfwGHhseHYBK0c6KFk234EK64_6N_wePGOzuK0XnsQ8eLpW1ou3_A4_XP3NnCCK1vaVw3YarR0-IpDsq2ZprLLyRSDD6AywomZ-3dF-VumVXCEeiA-B7iktJWQxZmlJXPUCM4gVGn1cVjvp1U9ZrrKFuHvdArLM4-2hquaez4pKZ6BuJfQDzj1y0edSiIZMFrDiI9gk3gI8b8yl1XPpS6Wi3ocCweBzE4VCErbipX0wdgMk3tJe1mkPPCLS7xfYY_bFsHtDlfTK7z0g5pnjh0kzoqOV5YIoYA_6IMOZKkFbL9qH_2G0m6i5cU3iwUwg" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>


      

      body{
        overflow-x: hidden;
      }
    #inputi{
        align-content:center;
        width:70%;
        margin:0px auto;
        margin-top:7%;

    }
    #form1{
        
        float:left;
        margin-left:10px;
    }

    #headtable{
        background-color: black;
        color:white;
    }

    .table{
        width:80%;
        margin:0px auto;
        table-layout: fixed;
    }

    #dn{
      float: right;
      list-style: none;
      color:black;
    }
    button:active{
        
    }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top"id="navigacija">
            <div class="container">
              <ul class="navbar-nav mx-auto sm-12 md-4"id="mojUl"> <!--MX-AUTO CENTRIRA postoje jos 'ms' i sl.....-->
                  <h5><li class="nav-item active "id="mojLi"><a class="nav-link" href="#">Home</a></li></h5>
                  <h5><li class="nav-item active "id="mojLi"><a class="nav-link" href="#">Library</a></li></h5>
                  <h5><li class="nav-item active "id="mojLi"><a class="nav-link" href="#">Play</a></li></h5>
                  


              </ul>  
              <li class="nav-item active "id="dn"><a class="nav-link"><h3><i class="bi bi-brightness-high-fill"id="toggle"></i></h3></li>
              
            </div>
    </nav>

  <form action=""method="GET">
    <div class="row"id="inputi">
           <div class="col-3"> <input type="text" class="form-control" placeholder="Pjesma" id="form1"name="in1"></div>
            <div class="col-2"><input type="text" class="form-control" placeholder="Izvođač" id="form2"name="in2"></div>
            <div class="col-3"><input type="text" class="form-control" placeholder="Album" id="form3"name="in3"></div>
            <div class="col-1"><input type="number" class="form-control" placeholder="Godina" id="form4"name="in4"></div>
            <div class="col-3"><button type="button" class="btn btn-dark"id="add"name="bt"><b>+</b></button>
            <button type="button" class="btn btn-dark"id="ispis"name="ispis"><b><i class="bi bi-card-list"></i></b></button>
            <button type="submit" class="btn btn-dark"id="ispis"name="sv"><b><i class="bi bi-save2-fill"></i></b></button></div>        
          </div>
    </div>
  </form>
    <br><br><br><br>

    <div class="row"id="content">
        <table class="table">
            <thead class="thead-dark" id="headtable">
              <tr id="red">
                <th scope="col">Ime Pjesme</th>
                <th scope="col">Izvođač</th>
                <th scope="col">Album</th>
                <th scope="col">Godina</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>

   </div> 

  
<script>

       /*  document.querySelector('#sb').addEventListener('click',()=>
          {
            localStorage.setItem("saved",document.querySelector(".table").innerHTML);
            console.log('usa');
          })
        
    
        window.addEventListener('load', 
          function() { 
            document.querySelector(".table").innerHTML += localStorage.saved.toString();
        }, false); */
     
       
        
      



  $("#add").click(function(){
    var name = $("#form1").val();
    var artist = $("#form2").val();
    var album = $("#form3").val();
    var year = $("#form4").val();
    var br = $("tbody tr").length;
    console.log(br);
    

    if(name == "" || artist == "" || album == "" || year < 1000){
      alert("podatci su neispravni ili ih niste unijeli");
    }
    else{
        br++;
        $("tbody").append("<tr id=red"+br+">");
        $("#red"+br).append("<td>"+name+"</td>");
        $("#red"+br).append("<td>"+artist+"</td>");
        $("#red"+br).append("<td>"+album+"</td>");
        $("#red"+br).append("<td>"+year+"</td>");
        $("#red"+br).append("</tr>");
       
        
        
    }

   
  });

  $("#toggle").click(function(){
        
        
      var kl =$("#toggle").attr('class');
        if(kl == "bi bi-brightness-high-fill"){
          console.log("usa");
          $("#toggle").removeClass();
          $("#toggle").addClass("bi bi-brightness-high");
        }

        else{
          $("#toggle").removeClass();
          $("#toggle").addClass("bi bi-brightness-high-fill");
        }
        

    });
</script>
<?php

$ime = $_GET['in1'];
$izv = $_GET['in2'];
$album = $_GET['in3'];
$godina = $_GET['in4'];
$btn = isset($_GET['sv']);
$isp = isset($_GET['ispis']);


if(isset($btn)){
    
  $con = mysqli_connect("localhost", "root", "", "GitaraDB");
  $ubaci = "INSERT INTO pjesme(Naslov,Izvodac,Album,Godina) values ('$ime','$izv','$album','$godina')";
  $result = mysqli_query($con, $ubaci);
  
  
} 

if(isset($isp)){
  $con = mysqli_connect("localhost", "root", "", "GitaraDB");
  $dobavi = "SELECT * FROM pjesme";
  $res = mysqli_query($con,$dobavi);
 

}


?>
</body>
</html>