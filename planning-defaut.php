<!DOCTYPE html>
<html lang="fr">

<head>
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-94130208-1', 'auto');
    ga('send', 'pageview');
  </script>

  <style type="text/css">
    <style type="text/css"/>a:link {
      text-decoration: none
    }
  </style>
  <link id="Projet" rel="stylesheet" href="css/stylesheet.css" />
  <meta name="robots" content="index , follow" />
  <title>Inform'Aix</title>
  <meta name="description" content="Inform'Aix" />
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <script src="../include/jquery.js"></script>
  <meta charset="utf-8">
  <meta name="keywords" content="">
</head>

<header id="header">
  <?php
include ("header.php") ?>


</header>
<?php 
if(!(isset($_COOKIE['annee'])) || !(isset($_COOKIE['groupe']))){
?>
 <script> 
    alert('Veuillez visiter index.php (la page d\'accueil) avant de visiter cette page');

    window.location.replace('index.php');

 </script>
<?php 
 
} 
?>

<body id="corps">
  <div class="accueil-pics">

  </div>
  <section>
    <div class="planning">


      <?php

/*   if(isset($_SESSION['id']))
{
echo '<fieldset><legend align="center">Mon planning</legend>';

if ($_SESSION['annee']==1)
{
switch ($_SESSION['groupe'])
{
case 1:
echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=r88re5h92eakv0rh3b7ktdnibc%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=Europe%2FParis" style="border-width:0" frameborder="0" scrolling="no"></iframe>';
break;
case 2 : echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=293htg1qjps2h31bu6qjo3de6o%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Europe%2FParis" style="border-width:0" frameborder="0" scrolling="no"></iframe>';  break ;
case 3 : echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=4858np5ugcshvkqe0kr4hbvrmk%40group.calendar.google.com&amp;color=%2323164E&amp;ctz=Europe%2FParis" style="border-width:0" frameborder="0" scrolling="no"></iframe>'; break ;
case 4 : echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=nrmgaun8pvqdc3pemp2vct4f88%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Europe%2FParis" style="border-width:0"  frameborder="0" scrolling="no"></iframe>'; break ;
default:
# code...
break;
}
}
  else
{
switch ($_SESSION['groupe'])
{
case 1:echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=usfic6mar2ko1rp7q0v8mv09mc%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FParis" style="border-width:0"  frameborder="0" scrolling="no"></iframe>';

break;
case 2 :echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=krn9fhembqojr9tolvofqi57cc%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FParis" style="border-width:0"  frameborder="0" scrolling="no"></iframe>';  break ;
case 3 : echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=h8j48c9fad9o9l6lbjlv6cm8dg%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FParis" style="border-width:0"  frameborder="0" scrolling="no"></iframe>'; break ;
case 4 : echo '<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=sevu1at0jl9auvoki167c675m8%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=Europe%2FParis" style="border-width:0" frameborder="0" scrolling="no"></iframe>'; break ;
default:

break;
}
}

echo '</fieldset>';
}
  else
{
echo "<p>Connectez-vous pour voir directement votre planning !</p>";
}

*/
?>
        <fieldset>
          <legend align="center">Plannings par groupe</legend>

          <?php

function redirectToGroup($group)
	{
	header('Location: https://calendar.google.com/calendar/embed?mode=WEEK&height=600&wkst=1&bgcolor=%23FFFFFF&src=' . $group . '@import.calendar.google.com&ctz=Europe/Paris');
	}



function isPremiereAnnee()
	{
	if($_COOKIE['annee']=='1'){
        return true;
    }
        else{
            return false;
        }
    }
	
    

    if(isPremiereAnnee()){
        switch ($_COOKIE['groupe'])
            {
                    case '1A':
                        redirectToGroup("lvui9kr3qvd3sqb4fasj55q4v6kvqb0k");
                        break;

                    case '1B':
                        redirectToGroup("ut1ej8tp2m18udd645s2u9dsfimm59s1");
                        break;
                        
                    case '2A':
                        redirectToGroup("4vs8guf3p18snr1jest5d8dgjsi0v2lt");
                        break;

                    case '2B':
                        redirectToGroup("4bn0v5v6uj48ehvu2rosfckib21ajm1l");
                        break;

                    case '3A':
                        redirectToGroup("4robudobvctmcggtf7cl5epashl16m6e");
                        break;

                    case '3B':
                        redirectToGroup("fd20va0dfqot2r1004cabdlgtg5ig7po");
                        break;

                    case '4A':
                        redirectToGroup("8c2hr8fpl5t6onas285ddqrjmivtgcp5");
                        break;

                    case '4B':
                        redirectToGroup("cbrfud86u2jq2mdhp7a53nhj0splo67h");
                        break;

        default:
        ?>
                    <script>
                    alert('Une erreure est survenue. Bizarre, pourtant j\'pensais avoir tout bien codÃ©... Ou alors c\'est toi qui a bidouillÃ©, hein chenapant !');
                    </script>
                    <?php
            break;
            }
    }
    else{
         switch ($_COOKIE['groupe'])
            {
                    case '1A':
                        redirectToGroup("lh2gs6cmvj4fb6q06705m8ii18tj8i2e");
                        break;

                    case '1B':
                        redirectToGroup("j0ujuv260trpn127b33347jpmre41uhd");
                        break;
                        
                    case '2A':
                        redirectToGroup("79kr6fko8305etufa3k6s716t5in3v05");
                        break;

                    case '2B':
                        redirectToGroup("5rtq3gjbl772cgfvhc0skqi7848ec1tg");
                        break;

                    case '3A':
                        redirectToGroup("gpdrjj77bjfv2vjbhfhdvf9p6c6vqfmm");
                        break;

                    case '3B':
                        redirectToGroup("k3010ngvj46qq6bn1tn8dmgfd30olips");
                        break;

                    case '4A':
                        redirectToGroup("8pirg1gimpnlf4bddeomv6ti7pl7fsog");
                        break;

                    case '4B':
                        redirectToGroup("1qssts8ot00uq8rkfh86ufnf1hde52rt");
                        break;

        default:
        ?>
                    <script>
                    alert('Une erreure est survenue. Bizarre, pourtant j\'pensais avoir tout bien codÃ©... Ou alors c\'est toi qui a bidouillÃ©, hein chenapant !');
                    </script>
                    <?php
            break;
            }
    }
?>


        </fieldset>
    </div>
  </section>

</body>

</html>