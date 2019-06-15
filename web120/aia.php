<!DOCTYPE html>
<html>
<head>
<title>Vu T. Tieu's Portal Website</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/table.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Vu T. Tieu SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php" class="selected">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Vu</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Audience, Issues and Approaches</h2>

<!--START of Client info-->
<table class="client">
             <tr>
                 <th>Client's name and the final decision maker</th>
                 <td>Oblivion</td>
             </tr>
             <tr>
                 <th>Client's business name</th>
                 <td>Oblivion</td>
             </tr>
             <tr>
                 <th>Redesign or brand new website</th>
                 <td>Brand new</td>
             </tr>
             <tr>
                 <th>Type of website</th>
                 <td>Informational, Identity, Tutorial</td>
             </tr>
             <tr>
                 <th>Client's goals</th>
                 <td>&bull; Organize and make easy to access the resources/information needed to meet certain objectives in the game we play<br>
                 &bull; This could extend to other games that involves clans/guilds</td>
             </tr>
</table>
<!--END of Client info-->

<!--START of Issues and Approaches-->
<table class="aia">
             <tr>
                 <th>Audiences</th>
                 <th>Issues, Concerns, Needs</th>
                 <th>Approach</th>
             </tr>
             <tr>
                 <th>Guildmates</th>
                 <td>&bull; Having a large collection of screenshots and videos of gameplays without a way to organize it for the mass to access.</td>
                 <td>&bull; This could be solved by separating the content to different pages corresponding to different areas of the game <br>
                 &bull;The different areas of the game could all be in the navigation bar<br>
                 &bull;Each page will have links at the top to different sections of that page</td>
             </tr>
             <tr>
                <th>Guildmates</th>
                <td>&bull; This game has a wiki that no longer updates their information, 
                so it makes it hard for players to search up information about their characters</td>
                <td>&bull; Record and document useful information that may take time to get to for individual players.</td>
             </tr>
</table>
<!--END of Issues and Approaches-->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="#" target="_blank">Vu T. Tieu</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>
