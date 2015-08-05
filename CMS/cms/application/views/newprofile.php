<?php
$clubid="";
if(isset($_GET['clubid'])){
$clubid=$_GET['clubid'];}
if($clubid<=1)$previousId=1; else $previousId=$clubid-1;
if($clubid>=7)$nextId=7; else $nextId=$clubid+1;
$logo="ex-logo.jpg";

//member author data
$man="";
$mah="";
$mas="";
$map="";
$mazip="";
$macity="";
$macountry="";
$mafon="";
$mahandy="";
$mamail="";
//member data
$mn="";
$mw="";
$mahn="";
$msn="";
$mcity="";
$mcountry="";
$mzip="";
$md="";
if($clubid==1)
{
$logo="fc_logo.jpg";
//member author data
$man="Friess";
$mah=12;
$mas="Berliner Promenade";
$map="1. Vorsitzender";
$mazip=66111;
$macity="Saarbrücken";
$macountry="Deutschland";
$mafon="0681 97144 0";
$mahandy="";
$mamail="presse@saarbruecken.de";
//member data
$mn="1. FC Saarbrücken";
$mw="www.fc-saarbruecken.de";
$mahn=12;
$msn="Berliner Promenade";
$mcity="Saarbrücken";
$mcountry="Deutschland";
$mzip=66111;
$md="E.V.
1. Fußball-Club Saarbrücken e.V. 
gegründet: 18. April 1903 
Mitglieder: 2.300
Offizielle Fanclubs: 78 
Vereinsfarben: Blau-Schwarz

Sportliche Erfolge 
Deutscher Vizemeister 
1943, 1952 
Bundesliga 
1963/64, 1976-78, 1985/86, 1992/93 
Meister Regionalliga West/Südwest 
1999/2000 
Meister Regionalliga West 
2009/2010 
Saarlandpokal-Sieger 
1997, 1998, 1999, 2000, 2002, 2004, 2011, 2012, 2013

Sportarten 
Fußball, Handball

Eintrag ins Vereinsregister 
VR 2176, Amtsgericht Saarbrücken
";	
}
if($clubid==2)
{
$logo="bcb_logo.jpg";
//member author data
$man="Liedke";
$mah="";
$mas="Herrmann-Neuberger-Sportschule";
$map="1. Vorsitzender";
$mazip=66123;
$macity="Saarbrücken";
$macountry="Deutschland";
$mafon="0681 3879 452";
$mahandy="";
$mamail="info@bc-bischmisheim.de";
//member data
$mn="1. BC Saarbrücken-Bischmisheim";
$mw="www.bc-bischmisheim.de";
$mahn="12";
$msn="Herrmann-Neuberger-Sportschule";
$mcity="Saarbrücken";
$mcountry="Deutschland";
$mzip=66123;
$md="Seit mehr als einem Jahrzehnt widmet sich der 1. Badminton Club Saarbrücken dem Leistungssport in der Landeshauptstadt Saarbrücken, sowohl im Aktiven- als auch im Jugendbereich.

Unzählige Titel und Meisterschaften hat der Club auf regionaler, nationaler und internationaler Ebene bisher gewonnen -weitere Titelsiege werden angestrebt. Mit der Ausrichtung des Welt Gold Grand Prix Turnier den Bitburger Open in der Saarlandhalle Saarbrücken hat der Verein nach mehr als zwei Jahrzehnten intensiver Aufbauarbeit ein bedeutsames Turnier in der Saar Lor Lux Region geschaffen und in der Weltspitze etabliert. 

Dabei machen die drei Standsäulen Breitensport, Jugendförderung/ - Entwicklung und Leistungssport die pulsierenden Hauptschlagadern des Clubs aus. Mit seinen unterschiedlichen Angeboten, zielorientierten Projekten und Kooperationen mit Schulen versucht der Verein auf den unterschiedlichsten Stufen neue Mitglieder zu werben. Unser Anspruch ist es über alle Altersgrenzen Badminton als faszinierende lebensbejahende Sportart vermitteln, die man besonders gut in einem so erfolgreichen Verein wie dem 1. BCB erlernen kann. 

Auch ungewöhnliche Herausforderungen nimmt der Club an, wie das Projekt  - Kinder von der Straße - hier versucht der Verein über kultureller Grenzen hinweg Jugendliche durch Integration unter dem Dach des Sports zu vereinen. Die positive Resonanz und die erfolgreiche Durchführung dieses Projektes gibt der innovativen Haltung des Vereins recht und regt alle Mitglieder zu weiteren neuen Ideen an. Dabei gehören Verständnis schaffen, fair Play, soziale Bindungen herstellen und die Vorbildfunktion zu unsern wichtigsten internen Aufgaben. 

Die Vereinsarbeit ist für uns alle eine Herzenssache. Dabei ist von besonderer Wichtigkeit für uns das sorgfältig ausgewählte Trainerteam des BCB. Der Versuch, in welcher Altersgruppe auch immer, die best mögliche Bewegungsfreude mit dem schnellen Naturfederball zuerteilen ist die Aufgabe dieses Teams. Diese qualifizierten Trainer arbeiten in unterschiedlichen Trainingsgruppen mit den Schülern und Jugendlichen, ob im Breitensport oder Leistungsbereich spielt keine Rolle, bei uns wird jede/r Spieler/in nach seinen Möglichkeiten und Interessen gefördert, so dass der Spaß am Sport nie verloren geht. 

Der BCB will weiterhin im Saarsport ein Leuchtturm mit leuchtender Vorbildfunktion und einer besonderen Wahrnehmung bleiben. Die Topatlehten, Nationalspieler sowie Olympiateilnehmer sind die Vorbilder von heute und gleichzeitig die Werbeträger der Generation von morgen. Dieses Bild möchte der Club an die nachfolgenden Spieler vermitteln. Der Focus richtet sich zusätzlich auch auf die Talentfindung oder - Entwicklung. Nicht jeder unserer jungen Mitglieder wird das Ziel olympische Spiele erreichen, aber seine Leistungsfähigkeit ausbauen und den Spaß an Bewegung und Sport weiter ausbauen. 

Lassen sie sich begeistern von der Sportart Badminton im BCB, werden sie mit ihrer Mitgliedschaft ein Teil des Ganzen. Der Gemeinschaftsinn steht im Vordergrund; gemeinsam gesteckte Ziele erreichen macht jedem Mitglied Spaß. 

Bewegung im Verein macht Spaß, dass soll unser Slogan der Zukunft sein.
";	
}
if($clubid==3)
{
$logo="golf_logo.gif";
//member author data
$man="Schmidt";
$mah="";
$mas="Oberlimberger Weg";
$map="Clubmanager";
$mazip="66798";
$macity="Wallerfangen";
$macountry="Deutschland";
$mafon="06837 444800";
$mahandy="";
$mamail="info@golfclub-saarbruecken.de";
//member data
$mn="Golfclub Saarbrücken e.V.";
$mw="www.golfclub-saarbrücken.de";
$mahn="";
$msn="Oberlimberger Weg";
$mcity="Wallerfangen";
$mcountry="Deutschland";
$mzip=66798;
$md="Das Land an der Saar zwischen Deutschland und Frankreich stand in den letzten Jahrhunderten immer wieder im Brennpunkt der verschiedenen politischen Entscheidungen. Seit 1957 ist das Saarland offiziell Bundesland der Bundesrepublik Deutschland. 1961 wurde der Golf­Club Saarbrücken e.V. gegründet. Es vergingen 2 Jahre, bis man auf ein herrlich gelegenes Grundstück in Gisingen aufmerksam wurde. Nach eingehenden Verhandlungen wurde der Kauf des Geländes perfekt gemacht. 
In Gisingen, einem kleinen Dorf im Saargau, hatte der Club endgültig seine Heimat gefunden. Bis aber der erste Ball vom Abschlag zum Grün geschlagen werden konnte, musste noch viel getan werden. Für die Planung und den eigentlichen Bau wurde der Golfarchitekt Donald Haradine beauftragt.

 1965 konnten 6 Löcher provisorisch bespielt werden. Anfang 1966 wurden dann 3 weitere Löcher freigegeben. Das Golfspiel konnte nun beginnen. Der Wunsch nach einem Clubhaus kam von allen Seiten, Zug um Zug wurde das Clubhaus in Gisingen geplant und erbaut. Die Erweiterung des Platzes auf die internationale Größe von 18 Löchern wurde 1971 gesichert. Donald Haradine übernahm erneut die Planung des Erweiterungsbaus. 1975 war der Erweiterungsbau der Clubanlage fertiggestellt.

 In der Folgezeit war und ist der Platz Austragungsort großer Meisterschaften:

◾1981 Deutsche Amateurmeisterschaften 


◾1982 Südwestmeisterschaften 


◾1983 PGA - Deutsche Professionalmeisterschaften 


◾1992 DGV - Jugendländerpokal 


◾1994 DGV - Länderpokal 


◾1995 DGV­ - Jugendranglistenturnier 


◾2003 DGV - Senioren-Länderpokal 


◾2009 DGV - Nationale Ausscheidung Herren - AK 18 


◾2011 DGV - Nationale Ausscheidung Damen und Herren - AK offen 


◾2011 LGV Rlp/S - Einzelmeisterschaften Jungseniorinnen und -senioren


◾2013 LGV Rlp/S - Einzelmeisterschaften der Damen und Herren 

Der Club unterhält sportliche Kontakte zu vielen deutschen Clubs, pflegt aber auch insbesondere gut nachbarliche Beziehungen zu französischen, belgischen und luxemburgischen Clubs. Dies macht sich nicht zuletzt auch im gastronomischen Angebot der Clubökonomie angenehm bemerkbar.

 Die 18-Loch Meisterschaftsanlage liegt auf einem Hochplateau mit herrlichem Panoramablick auf das Saartal, den Hunsrück und das lothringische Hügelland. Auf dem ca. 50 ha großen, hügeligen Gelände mit Spielbahnen und Grüns findet der Golfer mittelschwere Spielbedingungen vor. Die große Anzahl Bunker leisten ihren positiven Beitrag, den Platz interessant und schwierig zu gestalten.

 Durch seine raffiniert geschnittenen Fairways erfordert der Platz ein kontrolliertes, präzises Spiel. Abwechslungsreicher Baumbestand, künstliche Teiche sowie Biotope machen das Gelände zu einem absoluten Meisterschaftsplatz. 
";	
}

if($clubid==4)
{
$logo="lag_logo1.png";
//member author data
$man="Geisinger";
$mah="5";
$mas="Nikolausstr";
$map="Vorsitzender";
$mazip="66399";
$macity="Ormesheim";
$macountry="Deutschland";
$mafon="06893 5251";
$mahandy="";
$mamail="bodo.geisinger@lag-saarbruecken.de";
//member data
$mn="Laufgemeinschaft Saarbrücken e.V.";
$mw="www.lag-saarbruecken.de";
$mahn="5";
$msn="Nikolausstr.";
$mcity="Ormesheim";
$mcountry="Deutschland";
$mzip="66399";
$md="Herzlich willkommen
 die Laufgemeinschaft Saarbrücken e.V. (LAG Saarbrücken) wurde 1980 von begeisterten und engagierten Läufern gegründet. Der Verein betreibt und fördert den Laufsport als sportliche Freizeitgestaltung (Hobbysportler) und auch als Leistungssport.
 Das Spektrum unserer Laufangebote reicht von der Walkinggruppe und Lauf-Einsteigern bis zum Bahn- und Intervalltraining für die Leistungssportler. Bei uns kann jeder ein Trainingsangebot finden, das zu seinen Bedürfnissen und Wünschen passt. Als Einstieg bietet sich unser Samstagslauftreff an (Einzelheiten siehe unter Laufangebote), bei dem alle Leistungs-Niveaus vertreten sind und zeitgleich  angeboten werden.

Vom Jugendlichen bis zum Senior sind alle Altersklassen vertreten. Derzeit haben wir mehr als 284 Mitglieder (Stand November 2013), etwa gleich viele weibliche wie männliche. Andererseits finden viele erst dann zum Ausdauersport, wenn sie nicht mehr Fußball, Handball, Volleyball usw. spielen (können), bzw. der Arzt ihnen Sport verordnet.

Neben den regelmäßigen Lauftreffs bieten wir über das Jahr verteilt verschiedene Aufbaukurse an „von 0 auf 5“, „von 5 auf 10“, „von 10 auf 21“, „von 21 auf 42“, mit denen wir Läufer (gerne auch Noch-Nicht-Mitglieder) an die Volkslaufdistanzen heranführen. In diesen mehrwöchigen Kursen werden die Laufdistanzen allmählich gesteigert, bis die Zieldistanz von den Teilnehmern mühelos bewältigt werden kann.

Apropos Volksläufe: Die LAG Saarbrücken ist bei vielen Läufen in der Region präsent und schon oft waren wir teilnehmerstärkster Verein. Die LAG Saarbrücken ist selbst auch Ausrichter eines Volkslaufs über 10 km, des sog. Sparkassen-Westspangenlaufs, der jeweils Anfang Oktober ausgetragen wird und zwischen 400 und 700 Läufer und Walker anlockt.

Im Leistungssportbereich haben wir 50 bis 60 Sportler, die mit ihren Laufresultaten Eingang in die saarländische Bestenliste finden. Die LAG Saarbrücken hat Saarland-, Deutschland-, Europa- und sogar Weltmeister in ihren Reihen. Beispielhaft seien hier genannt Melitta Czerwenka-Nagel und Hans Knauf. Unsere Athleten nehmen teil an Marathon-Veranstaltungen in Deutschland, Europa und darüber hinaus. Wir haben Spezialisten für die Flach-Strecken und für die Hochgebirgs-Strecken in unseren Reihen, viele erfahrene Läufer, die mit ihrer Erfahrung gerne auch anderen zur Seite stehen.

Natürlich ist Sport nicht alles; auch das gesellschaftliche Miteinander wird in unserem Verein sehr gepflegt: Sommerfest, Vereinsfahrt, Jahresabschlussfeier und weitere Veranstaltungen sind bei unseren Mitgliedern sehr beliebt.

Übrigens: Es gibt kaum eine andere Sportart, die so kommunikativ ist wie das Laufen in der Gruppe. Im „gesunden“ Ausdauerbereich ist es ja das Ziel, das Tempo so zu wählen, dass man nicht hinter den Atem kommt, sondern sich locker unterhalten kann. Davon machen unsere Mitglieder reichlich Gebrauch. Darüber hinaus ist das Laufen in einer Gruppe sicherer.

Bei uns sind „Mitläufer“ etwas Positives: wir freuen uns über jeden Interessenten.
";	
}
if($clubid==5)
{
$logo="x300_y168_2024d1_12.jpg";
//member author data
$man="Link-Dorner";
$mah="";
$mas="";
$map="1.Vorsitzende";
$mazip="";
$macity="";
$macountry="";
$mafon="06893 8010246";
$mahandy="0160 3686227";
$mamail="r.lindor@web.de";
//member data
$mn="Verein zur Förderung der Mensch-Tier-Beziehung e.V.";
$mw="www.hunkapi.net/";
$mahn="";
$msn="";
$mcity="";
$mcountry="";
$mzip="";
$md="HUNKAPI  kommt aus dem Indianischen ( original: Hoon-Kah-Peh ) und bedeutet:  Allem was lebt, bin ich verwandt.

Dieser als Vereinsname gewählte Begriff soll verdeutlichen, wie wichtig der Kontakt zur belebten Natur für die Entwicklung und Gesunderhaltung von Körper, Geist, Seele und sozialen Kontakten für den Menschen ist.

Die zugrunde liegende Idee ist, daß fast alle Kinder vom angeleiteten Umgang mit Tieren profitieren können. 





Kinder mit Förderbedarf können erwiesenerweise in besonderem Maße von tiergestützten Interventionen profitieren. Und hierzu braucht es keine Delphine !!! *  Für manches Kind, das auf konventionelle therapeutische Maßnahmen nicht oder nicht mehr anspricht, das also therapiemüde oder therapieresistent geworden ist, besteht in unserem Ansatz eine neue Chance.

Daher bieten wir tierunterstützte Förder und Freizeitprogramme für Kinder unter Einsatz von heimischen Haus- und Nutztieren an.

Die Würde und die Stärke von Mensch und Tier stehen bei unseren Angeboten im Mittelpunkt: Wir konzentrieren uns auf die erkennbaren Potentiale des jungen Menschens und nicht auf dessen Defizite.

Gleichzeitig haben wir einen Weg gesucht und gefunden, bei dem die Nutzung von Tieren nicht zu deren Lasten geht. Im Gegenteil: wir bieten ein Beispiel für eine Win-Win-Situation für Mensch und Tier !";	
}

if($clubid==6)
{
$logo="shin_logo.gif";
//member author data
$man="Jenner"; 
$mah="15";
$mas="Schwarzwaldstr.";
$map="1. Vorsitzender";
$mazip="66271";
$macity="Kleinblittersdorf";
$macountry="Deutschland";
$mafon="06805 2070309";
$mahandy="0176 35731790";
$mamail="info@shinzenbi.de
";
//member data
$mn="ShinZenBi Kampfkunst und Bewegungsformen e.V.";
$mw="www.shinzenbi.de/";
$mahn="15";
$msn="Schwarzwaldstr.";
$mcity="Kleinblittersdorf";
$mcountry="Deutschland";
$mzip="66271";
$md="";	
}

if($clubid==7)
{
$logo="x300_y169_d77c53_10.jpg";
//member author data
$man="Günther"; 
$mah="";
$mas="Im Wiesental";
$map="";
$mazip="66133";
$macity="Saarbrücken/Scheidt";
$macountry="Deutschland";
$mafon="0681 815800";
$mahandy="0152 22169227";
$mamail="sascha.guenther@tv-scheidt.de";
//member data
$mn="TV Scheidt 1886 e.V.";
$mw="www.tvscheidt.de";
$mahn="";
$msn="Im Wiesental";
$mcity="Saarbrücken/Scheidt";
$mcountry="Deutschland";
$mzip="66133";
$md="Wir sind ein traditionsreicher Verein in der Stadt Saarbrücken. Gegründet wurden wir im Jahre 1886, belegt durch ein Gauturnprotokoll des Saar-Mosel-Gaues vom 18. März 1888.
Um den Anforderungen der Zeit gerecht zu werden, hat sich das Sportangebot des TV Scheidt an die bestehenden Bedürfnisse angepasst und wurde entsprechend erweitert.

Nach dem klassischen Leistungsturnen folgte schon vor vielen Jahren das allgemeine Frauenturnen in Form rhythmischer Bewegungen und Übungen für aller Altersklassen. Dazu gesellte sich das Kinder- und Jugendturnen und Mutter-mit-Kind-Turnen. 

Neben den schon erwähnten Sportarten Faustball, Badminton, Tennis und Ski, werden zusätzlich Boule (1993 ), Volleyball (2005), Beachvolleyball (2007) Nordic-Walking (2007) und Taekwondo (2009) angeboten.";	
}


 ?>

<!DOCTYPE html>
<!-- saved from url=(0096)http://www.saarbruecken.de/leben_in_saarbruecken/sport_und_vereine/sportvereine_und_vereinssuche -->
<html lang="de" class=" js geolocation backgroundsize borderradius" data-rsevent-id="rs_256655"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" src="menu171.js"></script>
    <meta charset="utf-8">
    <title>Sportvereine und Vereinssuche |&nbsp;Landeshauptstadt Saarbrücken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sportvereine und Vereinssuche">
    <meta name="keywords" content="Sport, Vereine">
    <meta name="author" content="">
	<link rel="shortcut icon" href="http://www.saarbruecken.de/media/images/client/saarbruecken/favicon.ico" type="image/x-icon">
	<script>(function(w) { var dpr=((w.devicePixelRatio===undefined)?1:w.devicePixelRatio);if(!!w.navigator.standalone){ var r=new XMLHttpRequest();r.open('GET', '/media/set_dpr/'+dpr,false);r.send() } else { document.cookie='devicePixelRatio='+dpr+'; path=/' } } )(window)</script>
	<link href="css/css" rel="stylesheet" type="text/css">
	<link type="text/css" href="css/526866391722908163e3c95247d06606.css" rel="stylesheet" media="screen">
<link type="text/css" href="css/0ec275bcf55acd90cdc59cfd5fb32187.css" rel="stylesheet" media="print"> 

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

	<link type="text/css" href="/cache/media/css/374aa9b351b9c630b47b8b4ef4f13735.css" rel="stylesheet" media="screen" />

	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<style type="text/css">
			ul.weather li p {
				margin-right: 50px;
			}
			ul.weather li span.situation {
				white-space: nowrap;
			}
		</style>
    <![endif]-->
    <script type="text/javascript">
        var base_url = '/';
    </script>

	
	<script type="text/javascript" src="js/iam.js"> </script>
	

    <script src="js/ReadSpeaker.js" type="text/javascript"></script>
    <link id="rsmod_Styles" type="text/css" rel="stylesheet" href="css/ReadSpeaker.Styles.css">
     <link id="rsmod_Styles" type="text/css" rel="stylesheet" href="css/font-awesome.css">
       
	<script id="req_Core" type="text/javascript" src="js/ReadSpeaker.Core.js" async></script>
	<script id="req_pub_Config" type="text/javascript" src="js/ReadSpeaker.pub.Config.js" async>    </script>
<script id="rsmod_lib_RSLib" type="text/javascript" src="js/ReadSpeaker.lib.RSLib.js"></script>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="css/translateelement.css">
<script id="rsmod_Common_Settings" type="text/javascript" src="js/ReadSpeaker.Common.Settings.js" async></script>
<script id="rsmod_PlayerAPI" type="text/javascript" src="js/ReadSpeaker.PlayerAPI.js" async></script><script id="rsmod_HL" type="text/javascript" src="js/ReadSpeaker.HL.js" async></script>
<script id="rsmod_ui" type="text/javascript" src="js/ReadSpeaker.ui.js" async></script>
<script type="text/javascript" src="swfobject.js"></script>
<style type="text/css" media="screen">
#adn_8237fe6822b487ca2253b9cc6f0579aa {visibility:hidden}
#adn_77a1e2ff490e0e98973ac3c615cb91b9 {visibility:hidden}

</style>
<link rel="stylesheet" type="text/css" href="css/widget010.old.css" media="all">
<script type="text/javascript" src="cnt_js.php"></script>
<style type="text/css" id="readspeaker_inline_styles"></style>
</head>

<body class="has-background" data-rsevent-id="rs_208437">
    <?php include("include/logo.php"); ?>
    <?php include("include/header.php"); ?>

<div id="goog-gt-tt" class="skiptranslate" dir="ltr">
<div style="padding: 8px;">
<div><div class="logo">
<img src="img/translate-32.png" width="20" height="20">
</div></div>
</div>
<div class="top" style="padding: 8px; float: left; width: 100%;">
<h1 class="title gray">Original text</h1>
</div>
<div class="middle" style="padding: 8px;">
<div class="original-text"></div>
</div>
<div class="bottom" style="padding: 8px;">
<div class="activity-links">
<span class="activity-link">Contribute a better translation</span>
<span class="activity-link"></span>
</div>
<div class="started-activity-container">
<hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
<div class="activity-root"></div>
</div>
</div>
<div class="status-message" style="display: none;"></div>
</div>
	<div class="affix-spacer affix" data-spy="affix" data-offset-top="150"></div>

<div class="container l-content">

	
	<div class="row component component-headline">
		<div class="col-xs-8 col-lg-10">
			<h1>
				
				<span class="name"><a href="http://<?php echo $mw; ?>"><?php echo $mn; ?></a></span>
			</h1>
		</div>
		<div class="col-xs-4 col-lg-2">
			<div class="btn-group pull-right">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="row">

		
		<form action="profile.php" method="post">
		                      
		                     
            
            <div class="panel-body" style="margin-left:-15px;">
             
                 <div class=" col-md-8 col-lg-8" style="margin-left:-15px;">
               
                  
                <div class=" col-md-6 col-lg-6" > 
                <div style="width:250px;height:255px;margin-top:40px; margin-left:15px;padding-top:40px;" class="text-center">
     <img src="img/<?php echo $logo; ?>" width="120" height="120"></div>
     <div class="field control-group formo-input" id="field-container-8a8f6652bc42b9bd42c4594bf7ebb4ad">
                        <div class="form-group"> <label class="control-label" for="inputName">Vereinsname
</label>
            <div class="controls" >
              <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $mn; ?>" required>
            </div>
            </div>
             <div class="form-group">
            <label class="control-label" for="inputName">Website
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $mw; ?>" required>
    </div>
    </div>
     <div class="form-group">
            <label class="control-label" for="inputName">Straße
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $msn; ?>" required>
    </div>
    </div>
          
           <div class="form-group">  <label class="control-label" for="inputName">Hausnummer
</label>
    <div class="controls" >
      <input type="text"  id="inputName"  class="form-control" name="name"  value="<?php echo $mahn; ?>" required>
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">PLZ
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $mzip; ?>" required>
    </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputName">Land
</label>
    <div class="controls" >
      <input type="text"  id="inputName"  class="form-control" name="name"  value="<?php echo $mcountry; ?>" required>
    </div>
    </div>
                  
    </div> </div>
     
              <div class="col-md-6 col-lg-6" style="margin-left:-15px;">
                  
			<div class="field control-group formo-input" id="field-container-8a8f6652bc42b9bd42c4594bf7ebb4ad">
     <div class="form-group">	   
    <label class="control-label" for="inputName">Ansprechpartner Name
</label>
            <div class="controls" >
              <input type="text"  id="inputName" class="form-control" name="name" value="<?php echo $man; ?>" required>
            </div></div>
             <div class="form-group">
            <label class="control-label" for="inputName">Straße
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name" value="<?php echo $mas; ?>" required>
    </div>
    </div>
     <div class="form-group">
               <label class="control-label" for="inputName">Hausnummer
</label>
            <div class="controls" >
              <input type="text"  id="inputName" class="form-control" name="name" value="<?php echo $mah; ?>" required>
            </div></div>
             <div class="form-group">
            <label class="control-label" for="inputName">PLZ
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name" value="<?php echo $mazip; ?>" required>
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Ort
</label>
    <div class="controls" >
      <input type="text"  id="inputName"  class="form-control" name="name"  value="<?php echo $macity; ?>" required>
    </div></div>
     <div class="form-group">
     <label class="control-label" for="inputName">Position
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $map; ?>" required>
    </div></div>
                
                 <div class="form-group">         <label class="control-label" for="inputName">Land
</label>
            <div class="controls" >
              <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $macountry; ?>" required>
            </div></div>
             <div class="form-group">
            <label class="control-label" for="inputName">Telefon
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $mafon; ?>" required>
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Handy
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $mahandy; ?>" required>
    </div></div>
    
     <div class="form-group">
            <label class="control-label" for="inputName">Email
</label>
    <div class="controls" >
      <input type="text"  id="inputName" class="form-control" name="name"  value="<?php echo $mamail; ?>" required>
    </div></div>
	</div>
                 
                </div>
              <div class="form-group" style="margin-left:15px;">
        <label class="control-label" for="inputName">Beschreibung
</label>
    <div class="controls" >
      <textarea class="form-control"  class="form-control" cols="12" rows="5" style="max-width:50px; max-width:575px;"><?php echo $md; ?> </textarea>
    </div> </div>   
         <div class="btn-group pull-right" style="margin-top:13px;margin-right:24px;">
                   <a href="compare_profile.php?clubid=<?php echo $clubid; ?>" class="btn13">
                   <img src="img/orange_icons/edit_32.png">
                  <a href="" class="btn13"><img src="img/orange_icons/upload_32.png"></a></div>      
            </div>
          </form>

		
		<?php include("include/sidebar.php"); ?>

	</div>
</div>


<div class="background-main-image subpage" style="background-image: url(&#39;/cache/media/attachments/2013/11/x800_y533_c5f809_11.png&#39;); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=&#39;/cache/media/attachments/2013/11/x800_y533_c5f809_11.png&#39;, sizingMethod=&#39;scale&#39;); -ms-filter: " progid:dximagetransform.microsoft.alphaimageloader(src="/cache/media/attachments/2013/11/x800_y533_c5f809_11.png" ,="" sizingmethod="scale" )";"="">
	<div class="logo-background"></div>
</div>

<?php include("include/footer.php"); ?>


<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;">
<iframe id="_atssh501" title="AddThis utility frame" src="sh186.html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe>
</div>
<script type="text/javascript" src="js/core181.js"></script>

<?php include("include/footer-main.php"); ?>



<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/5e2362db58fb1d8efae7905507cefe36.js"></script>


<script type="text/javascript">
	var gmaps_api_url = "//maps.googleapis.com/maps/api/js?v=3&callback=gmaps_api_loaded&client=gme-saarbruecken";
var gmaps_plugin_url = "/media/js/jquery-ui-map-3.0rc1.js";

var gmaps_js_api_loaded = false;

jQuery.cachedScript = function( url, options ) {

    // Allow user to set any option except for dataType, cache, and url
    options = $.extend( options || {}, {
        dataType: "script",
        cache: true,
        url: url
    });

    // Use $.ajax() since it is more flexible than $.getScript
    // Return the jqXHR object so we can chain callbacks
    return jQuery.ajax( options );
};

function gmaps_api_loaded()
{
    gmaps_js_api_loaded = true;
}

function check_if_api_is_loaded(callback, identifier) {
    if (gmaps_js_api_loaded == true) {
        window[callback](identifier);
    } else {
        $.when( $.cachedScript(gmaps_api_url) ).done(function(){
            $.when( $.cachedScript(gmaps_plugin_url) ).done(function(){
                window[callback](identifier);
            });
        });
    }
}

function show_map(identifier) {
    $('#map_' + identifier).css('background', 'none');
    $('#map_' + identifier).addClass('show');
    $('.map-options-_' + identifier).removeClass('hide');

    $('#map_' + identifier).unbind('click');

    window['gmaps_' + identifier]();
}

function gmaps_802554d31d68c7113() {
    $('#map_802554d31d68c7113').gmap({ 'center': '49.211973,7.042984','scrollwheel':false, 'navigationControl':false, 'streetViewControl':false});
    $('#map_802554d31d68c7113').gmap('option', 'mapTypeId', google.maps.MapTypeId.ROADMAP);
    $('#map_802554d31d68c7113').gmap('addMarker', { 'position': '49.211973,7.042984'});
    $('#map_802554d31d68c7113').gmap('option', 'zoom', 15);
}

$('#map_802554d31d68c7113').on('click', function() {
    check_if_api_is_loaded("show_map", "802554d31d68c7113");
});


</script>

<!-- SZM VERSION="2.0" -->
<script type="text/javascript">
	var iam_data = {
		"mg":"yes", // Migrationsmodus AKTIVIERT
		"st":"saaronl", // site/domain
		"cp":"sb_1_saarb", // code
		"oc":"sb_1_saarb", // code SZM-System 1.5
		"sv":"in" // FRABO-Tag aktiviert
	}
	iom.c(iam_data);
function showlist()
{
$.ajax({ type:"POST",
url: "list.php",
data:{list:"1"},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
});		
} 
function showgrid()
{
$.ajax({ type:"POST",
url: "grid.php",
data:{list:"1"},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
});		
}
</script>
<script src="saved_resource(3)"></script>
<script src="tx.io"></script>
<!-- SZM VERSION="2.0" -->
<!-- Copyright (c) 2000-2008 etracker GmbH. All rights reserved. -->
<!-- This material may not be reproduced, displayed, modified or distributed -->
<!-- without the express prior written permission of the copyright holder. -->

<!-- etracker TAG 3.0 -->
<script type="text/javascript" src="js/t.js"></script>
<!-- etracker PARAMETER 3.0 -->
<script type="text/javascript">
	var et_areas = "Landeshauptstadt Saarbrücken";
	var et_pagename = "Landeshauptstadt Saarbrücken » Leben in Saarbrücken » Sport und Vereine » Sportvereine und Vereinssuche";
</script>
<!-- etracker PARAMETER END -->
<script type="text/javascript">_etc();</script>
<p id="et_image" style="display:none;"></p>
<!-- etracker CODE END -->



<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
<div id="cboxWrapper">
<div>
<div id="cboxTopLeft" style="float: left;"></div>
<div id="cboxTopCenter" style="float: left;"></div>
<div id="cboxTopRight" style="float: left;"></div>
</div>
<div style="clear: left;">
<div id="cboxMiddleLeft" style="float: left;"></div>
<div id="cboxContent" style="float: left;">
<div id="cboxTitle" style="float: left;"></div>
<div id="cboxCurrent" style="float: left;"></div>
<button type="button" id="cboxPrevious"></button>
<button type="button" id="cboxNext"></button>
<button id="cboxSlideshow"></button>
<div id="cboxLoadingOverlay" style="float: left;"></div>
<div id="cboxLoadingGraphic" style="float: left;"></div>
<button type="button" id="cboxClose"></button>
</div>
<div id="cboxMiddleRight" style="float: left;"></div>
</div>
<div style="clear: left;">
<div id="cboxBottomLeft" style="float: left;"></div>
<div id="cboxBottomCenter" style="float: left;"></div>
<div id="cboxBottomRight" style="float: left;"></div>
</div>
</div>
<div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
</body>
</html>