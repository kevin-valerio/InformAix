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
  <link href="http://fonts.googleapis.com/css?family=Cabin:400,500,600,bold" rel="stylesheet" type="text/css">
<script>
    var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
    if(isMobile == true){

        windows.location.replace("planning.php?a=1");
    }
    </script>
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css">

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
  <?php include("header.php")  ?>


</header>

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
          <select name="classe" onChange="location.href='https://calendar.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src='+this.options[this.selectedIndex].value+'&ctz=Europe/Paris';" multiple='multiple'>
            <optgroup label='1re année'>
              <option value="lvui9kr3qvd3sqb4fasj55q4v6kvqb0k@import.calendar.google.com">G1A</option>
              <option value="ut1ej8tp2m18udd645s2u9dsfimm59s1@import.calendar.google.com">G1B</option>
              <option value="4vs8guf3p18snr1jest5d8dgjsi0v2lt@import.calendar.google.com">G2A</option>
              <option value="4bn0v5v6uj48ehvu2rosfckib21ajm1l@import.calendar.google.com">G2B</option>
              <option value="4robudobvctmcggtf7cl5epashl16m6e@import.calendar.google.com">G3A</option>
              <option value="fd20va0dfqot2r1004cabdlgtg5ig7po@import.calendar.google.com">G3B</option>
              <option value="8c2hr8fpl5t6onas285ddqrjmivtgcp5@import.calendar.google.com">G4A</option>
              <option value="cbrfud86u2jq2mdhp7a53nhj0splo67h@import.calendar.google.com">G4B</option>
            </optgroup>
            <optgroup label='2eme année'>
              <option value="lh2gs6cmvj4fb6q06705m8ii18tj8i2e@import.calendar.google.com">G1A</option>
              <option value="j0ujuv260trpn127b33347jpmre41uhd@import.calendar.google.com">G1B</option>
              <option value="79kr6fko8305etufa3k6s716t5in3v05@import.calendar.google.com">G2A</option>
              <option value="5rtq3gjbl772cgfvhc0skqi7848ec1tg@import.calendar.google.com">G2B</option>
              <option value="gpdrjj77bjfv2vjbhfhdvf9p6c6vqfmm@import.calendar.google.com">G3A</option>
              <option value="k3010ngvj46qq6bn1tn8dmgfd30olips@import.calendar.google.com">G3B</option>
              <option value="8pirg1gimpnlf4bddeomv6ti7pl7fsog@import.calendar.google.com">G4A</option>
              <option value="1qssts8ot00uq8rkfh86ufnf1hde52rt@import.calendar.google.com">G4B</option>

              <optgroup label='Licence pro'>
                <option value="t1tlel69s74apj297pu4rrn2cjdqbkfa@import.calendar.google.com">LP</option>

                <optgroup label='Enseignants'>
                  <option value="7f8nj38sbgv51m2ektr2bd8hg9qkspog@import.calendar.google.com">BERTHET Anne-Charlotte</option>
                  <option value="2ql7eaenraavual1on2s2iio1f1usihp@import.calendar.google.com">BOITARD Didier</option>
                  <option value="hkhqlg0lo8euh827iebuap2a1osmbv9c@import.calendar.google.com">BONHOMME Christian</option>
                  <option value="5i0kfbd8ca5s0tniiujcvnrbopd9nvi0@import.calendar.google.com">BROCHE Martine</option>
                  <option value="nbrs729om64g2hqq4737t0u0nv8d0g9v@import.calendar.google.com">CACCHIA Marie Claude</option>
                  <option value="9316nanse7qbggerm4ps7ulqpsb32i81@import.calendar.google.com">CASALI Alain</option>
                  <option value="9dcf61mei7cn4jrobarpg97ng9cr04mn@import.calendar.google.com">CICCHETTI Rosine</option>
                  <option value="s4c194c7g0plu1gqlgn98g5nc0akc9j2@import.calendar.google.com">GAITAN Patricia</option>
                  <option value="089cv5h6d0np97qtdikg5tiv6eovfgfs@import.calendar.google.com">HURST Kristen</option>
                  <option value="73hkamk87dnbkebp5fit4eg61m9pclae@import.calendar.google.com">KIAN Yavar</option>
                  <option value="jfapqn2l3534skag182g09v6plfgm201@import.calendar.google.com">LAKHAL Lotfi</option>
                  <option value="h9egqso46hr01jhsu5ruqho00oqq4bmb@import.calendar.google.com">LAPORTE Marc</option>
                  <option value="j78psgbrbipqigubuebkuuqr9kodb3mh@import.calendar.google.com">MAKSSOUD Christine</option>
                  <option value="ct7uq4fnvql4fc0n80mvsbsemfc4hj2r@import.calendar.google.com">MARTIN-NEVOT Mickael</option>
                  <option value="khlok0v3i1rcr6bhm809pl58b9nv0gl7@import.calendar.google.com">MONNET Marlène</option>
                  <option value="lvfcsvtsi1deq2vnofplnbatcqh3en2e@import.calendar.google.com">NEDJAR Sébastien</option>
                  <option value="f75stg9iana0m3nq0dh98luhbtpaugbm@import.calendar.google.com">PAIN BARRE Cyril</option>
                  <option value="h7f3cf1t4s6c5732q0cj059gmkg524j0@import.calendar.google.com">PALERMO David</option>
                  <option value="62kt6qs3hu9smc516u2mgiiba77s8km9@import.calendar.google.com">PONS Olivier</option>
                  <option value="v6fjk895lsfeknf424ebno8ubmsmaejf@import.calendar.google.com">RISCH Vincent</option>
                  <option value="qlsb9poltgp5enfj7i2a5qkdcnknie4n@import.calendar.google.com">SLEZAK Eileen</option>
                  <option value="6ne7t5d5mgnshndhrv191vhla36an30r@import.calendar.google.com">VAQUIERI Josee</option>
                  <option value="giiv8h60gf2g2gefglcajpd8svlleqod@import.calendar.google.com">YAHI Safa</option>
                </optgroup>
          </select>
        </fieldset>


    </div>
  </section>
<script>

    function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}



function deleteAllCookie(name) {
    createCookie(name,"",-1);

}
    </script>



  <?php
        if(isset($_GET['a']) && $_GET['a']=='1'){
    
    
    
  ?>
    <div id="boutton-cookie-phone">

      <a class="button-cookie">
        <span onclick="deleteAllCookie('annee'); deleteAllCookie('groupe'); alert('Vous pouvez retourner à l\'accueil !')">Supprimer son groupe et son année par défaut</span>
      </a>

    </div>

    <?php
} else{
?>


   <div id="boutton-cookie">

      <a class="button-cookie">
        <span onclick="deleteAllCookie('annee'); deleteAllCookie('groupe'); alert('Vous pouvez retourner à l\'accueil !')">Supprimer son groupe et son année par défaut</span>
      </a>

    </div>



<?php 
}

?>

</body>

</html>