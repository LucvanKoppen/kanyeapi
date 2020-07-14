<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanye Quotes</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/database-solid.svg">

    <link rel="stylesheet" href="css/main.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="main.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
		<div class="container"> <a class="navbar-brand" href="#">GYLIANTO MONADJAT</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"> <a class="nav-link" href="https://gyliboomin.nl">Home
                          <span class="sr-only">(current)</span>
                        </a>
          </li>
</ul>
			</div>
		</div>
	</nav>

<div class="container-fluid py-5">
            <div class="row">
              <div class="col-md-6">
                <div>
                  <img alt="Web Studio" class="img-fluid" src="img/kanye.jpg" />
                </div>
              </div>
              <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
                <div>
                  <h2>Kanye West</h2>
                  <p class="margin-top-s w-100">"Kanye Omari West is een Amerikaans producer,
                    rapper, songwriter, ondernemer en mode-ontwerper.
                    West begon zijn carrière als producer bij Roc-A-Fella Records,
                    waar hij erkenning genoot door de producties op Jay-Z's The Blueprint
                    en hits van onder anderen Ludacris, Alicia Keys en Janet Jackson."
                  </p>
                </div>
              </div>
            </div>
          </div>

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.kanye.rest",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo("<div class='container-fluid py-5'>");
echo("<div class='card w-75 mx-auto py-5'>");
echo("<div class='card-body'>");
echo("<p class='text-center'>$response</p>");
echo("<br>");
echo("<p class='text-center'>By Kanye West</p>");
echo("</div>");
echo("<button type='button' class='btn btn-danger mx-auto' onclick='return RefreshWindow();'>New Quote</button>");
echo("</div>");
echo("</div>");
?>

<footer class="mt-5">
        <p class="text-center">Created by <a href="https://gyliboomin.nl" target="_blank">Gyliboomin</a></p>
</footer>
<script>
function RefreshWindow()
{
         window.location.reload(true);
}
</script>
</body>
</html>