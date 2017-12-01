<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/header.php"); ?>
</head>
<body>
<!-- start header -->
    <?php include("includes/head.inc.php"); ?>
<!-- end header -->
    <!-- start page -->
    <div id="page">
        <!-- start content -->
        <div id="content">
            <div class="post">
                <h1 class="title">About Us <a href="http://www.itph-academy.nl/"> ITPH Academy </a></h1>
                <div class="entry" style="height:auto">
                    <br/>
                    <p>DÉ IT-OPLEIDER MET TRACK RECORD!<br>
                        Wij bieden opleidingen, om- en bijscholingstrajecten in IT-specialisaties waar vraag naar is 
                        vanuit regionale en landelijke organisaties en bedrijfsleven. We leiden studenten en professionals 
                        dus op tot specialisten die ook écht in de praktijk nodig zijn. En wanneer je afstudeert kun je 
                        via onze intermediairs direct aan de slag!  
                    </p>
                    <figure>
                    <img src="images/docent.jpg" alt="docent"  width="450" height="345" style="margin: auto; display: block">
                    <figcaption>felix, super docent PHP</figcaption>
                    </figure>
                    <p>Bewezen lesmethoden<br>
                        In de loop der jaren hebben wij unieke lesmethodieken ontwikkeld die hun waarde in de praktijk 
                        ruimschoots hebben bewezen. De effectiviteit van onze opleidingen, die het resultaat is van onze 
                        kennis, ervaring en best practises levert in de praktijk een slagingspercentage op van bijna 100%. 
                        Succes verzekerd!    
                    </p>
                    <figure>
                    <img src="images/ITPH01.png" alt="student">
                    <figcaption>sammen werken</figcaption>
                    </figure>
                    <p>Werken met lokale intermediairs<br>
                        Een betere aansluiting van het IT-onderwijs op de markt bereik je vooral door vraag en aanbod in de 
                        regio bij elkaar te brengen. Wij zijn dan ook geen ‘onbereikbare’ landelijke organisatie, maar 
                        werken juist aan een sterke afstemming op regionaal niveau. Met intermediairs die de plaatselijke 
                        markt kennen. We analyseren de lokale vraag naar IT-talent, zodat we voor het juiste aanbod kunnen 
                        zorgen.   
                    </p>
                    <figure>
                    <img src="images/student.jpg" alt="gebouw" width="640" height="330" style="margin: auto; display: block">
                    <figcaption>Eerste traineeship PHP Developer van ITPH </figcaption>
                    </figure>
                    <p>Initiatief van IT PerformanceHouse<br>
                        ITPH Academy is opgericht door Stichting IT PerformanceHouse; de kennisorganisatie die de IT-branche 
                        stimuleert met innovatie, het monitoren van trends en het aanjagen van ontwikkelingen. Eén van de 
                        speerpunten in het beleid is het overbruggen van de ‘skills gap’ tussen vraag en aanbod in de IT.    
                    </p>
                    <figure>
                    <img src="images/michel.jpg" alt="director" width="300" height="200" style="margin: auto; display: block">
                    <figcaption>Michiel Hametee directeur ITPH Academy</figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <!-- end content -->
<!-- start sidebar -->
    <?php
        include("includes/search.inc.php");
    ?>
<!-- end sidebar -->
    <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
    <?php
        include("includes/footer.inc.php");
    ?>
<!-- end footer -->
</body>
</html>
