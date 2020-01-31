<html>
<head>
<title>LBW 2020</title>
<meta charset="UTF-8"/>
<link rel="shortcut icon" type='image/x-icon' href="favicon.ico">
<link href="design.css" rel="stylesheet">
</head>
<?php
// Get query string
$ndx = $_SERVER['QUERY_STRING'];
if (! is_numeric($ndx)) {
    $ndx = 0;
}
// Construct body style parameter
$pic = sprintf("background-color: #888888;
    background: url(pix/pic%db.jpg);
    background-image: -webkit-image-set( pix/pic%da.jpg 1x, pix/pic%db.jpg 2x, pix/pic%dc.jpg 3x );
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    color: white; }", $ndx, $ndx, $ndx, $ndx);
// Construct body header
$linkColor = array(array("#f8f8f8", "#c8c8c8"), array("#fafafa", "#202020"));
$linkColorNdx = array(0, 0, 0, 1, 1, 1);
$link = sprintf('link="%s" vlink="%s"', $linkColor[$linkColorNdx[$ndx]][0], $linkColor[$linkColorNdx[$ndx]][1]); 
$body = sprintf('<body %s style="font-family: Times New Roman, Times, serif; font-size:  large; %s">', $link, $pic);
echo($body);
?>    
<center><h2>The Linux Bier Wanderung (LBW,
engl.: Linux Beer Hike) 2020<br>August 30th - September 5th 2020</h2></center>
<p>
This is a rough-and-ready proposal for next year's LBW. As this is a
minimax project (minimal effort for maximum results), you may encounter
kinks and other oddities (for example, this website has not yet been
tested with Safari running on an OSX emulator on a s390x). If do you
encounter such flaws, don't hesitate to get in touch by sending a mail
to monochromec &lt;at&gt; gmail &lt;dot&gt; com.</p>
<div class="center" id="header">
  <ul>
    <li><a href="page.php?0">Home</a></li>
    <li><a href="page.php?1">Accommodation</a></li>
    <li><a href="page.php?2">How to get there</a></li>
    <li><a href="page.php?3">What to do</a></li>
    <li><a href="page.php?4">The Hall</a></li>
    <li><a href="page.php?5">An attempt at an FAQ</a></li>
  </ul>
</div>
<?php
      $text = array("<p>This proposal is for <a href=https://www.openstreetmap.org/#map=14/50.1847/8.5027>Kronberg</a>, a small town bordering on the
outskirts of Frankfurt, one of Germany's major metro areas. Despite
being close to such a metropolitan area, Kronberg is still quite
rural with one of Germany's medium-sized mountain ranges (the Taunus)
being right on its doorstep. 
</p>
<p>If you found us via links or some mentioning on a podcast, etc. you 
may ask yourself <span style=font-weight:bold>&quot;What is an LBW?&quot;</span>
A <a style=color:white href=https://www.linuxbierwanderung.com target=_blank>Linux Bier Wanderung</a> (engl. Linux Beer Hike) is a week-long
event typically held in a small town in Europe where a group of like-minded open source enthusiasts gather 
to share knowledge, hike, enjoy various liquid refreshments (non-alcoholic and alcoholic) and first
and foremost have fun! Everybody is expected to look after their own travel logistics including accommodation but 
the website promoting the event (including this one) typically offers some guidance and provides information about 
where to look and what to expect. The event is generally free of charge (ie. no registration fee or similar) but
the costs of the Hall (rented by the organiser(s) of the event) is shared between the participants. The central
purpose of the Hall is to serve as a base camp for the various activities and as a gathering place for meeting, sharing ideas, 
talks, etc. You can find more details <a href=https://linuxbierwanderung.com/new.html taget=_blank>here</a>. There is also 
a <a href=https://groups.google.com/forum/#!forum/linuxbierwanderung target=_blank>mailing list</a> covering
various topics around the LBW and is used for communication between evetns (may require registration).
</p>
<p>But back to this year's LBW and its location. With miles of well-kept trails and numerous sites,
the Taunus is the ideal location for a week
of hiking and other fun activities. Frankfurt with its variety
of (craft) beer places is only half an hour away by public transport;
Germany's biggest airport is only an hour by train. In addition to these
amenities, Kronberg fulfils the following basic LBW rules:
<ol>
  <li>The hamlet must be able to be crossed within a short amount of
  time either on two or four legs.
  <li>One cannot get lost regardless of the state of intoxication.
  <li>The location must be remote enough to sever most ties with hipster urbanism.
  <li>It must have at least seven establishments which are serving as PotDs during the week.
  <li>A hall with decent internet connection and stable power supply is a prerequisite.
</ol>
</p>",
"<p>Kronberg and its surrounding towns offer a wide variety of accommodation, ranging from 
camping sites to small hostels to B&B right up to upscale hotels. And if you cannot find in
Kronberg what you are looking for, the outskirts of Frankfurt are just a short ride on 
public transport away. Both Niederursel and Hedderheim (the nearest suburbs of Frankfurt) 
offer a selection of accommodation; other towns such as Kronberg and Bad Homburg (both also just a short 
ride away) are even more geared towards tourism and thus places to stay.
</p>
<p>
The following contains a non-exhaustive list of pointers for housing in the area (<i>italics</i> indicate content available in German only):
</p>
<ul>
<li><i><a href=https://taunus.info/uebernachten/camping>Camping</a></i>
<li><a href=https://www.frankfurt.de/sixcms/detail.php?id=317591>Frankfurt</a>
<li><i><a href=https://www.kronberg.de/kronberg/de/Tourismus/Unterkunft/#/de/kronberg/default/search/Gastgeber/view:list/sort:changedrelevance>Kronberg</a></i>
<li><i><a href=https://www.bad-homburg.de/kur-und-tourismus/anreise/index.php>Bad Homburg<a></i>
<li><i><a href=https://www.city-camp-frankfurt.de/index.php?lang=de-DE>City-Camping in Heddernheim</a></i>
<li><a href=https://www.airbnb.com/s/kronberg/homes?refinement_paths%5B%5D=%2Fhomes&current_tab_id=home_tab&selected_tab_id=home_tab&screen_size=large&search_type=unknown&hide_dates_and_guests_filters=false&ne_lat=50.218263563357745&ne_lng=8.668149514160177&sw_lat=50.11159969448719&sw_lng=8.497861428222677&zoom=12&search_by_map=true>Airbnb accommodation</a>
</ul>
A general remark: As Kronberg is served by a commuter train as well as several bus lines, don't be afraid to look further afield for accommodation should none
of the options in Kronberg itself check out for you. For example, the hall location is only minutes away from the commuter rail station by foot (which is 
also served by quite a few bus lines); more details at the corresponding web page of the 
<a href=https://www.rmv.de/auskunft/bin/jp/stboard.exe/en?ld=14.55&protocol=https:&CMS_AppId=Linienfahrplan&>public transport provider</a>.
</p>
<p>The plan is to use public transport as much as possible so that we only need a few cars for any daytime activities like excursions, etc. at all,
making the whole event quite Greta-compatible (I already reached out to her exploring the possibility becoming our official 2020 mascott with 
a photo-shot of her hugging a penguin, but apparently she's busy annoying politicians :-).</p>",
"<p>
Kronberg is within commuting distance of Germany's largest airport, <a href=https://www.frankfurt-airport.com/en.html>Frankfurt</a>. 
As part of Hessia's Rhein-Main region, it is part of a dense network of public transport options ranging
from buses to subways, trains and trams (more information include full schedules and network maps
at <a href=https://www.rmv.de/c/en/homepage>the region's public transport network website</a>).
</p>
<p>
How to get to Kronberg:
<ul>
<li>By plane / from the aiport: Take any of the commuter trains (\"S-Bahn\") going from the airport to Frankfurt's main station and then
continue onwards towards Kronberg on the S4. The last two stops are within Kronberg's city limits. 
<li>By car: Kronberg is just off the A5, a major motorway connecting the northern and southern parts of Hassia. North of Frankfurt 
you will find the A5's junction with the A661 known as Bad Homburger Kreuz (Bad Homburg junction). Simply take the A661 going west.
After about 4 miles, the A661 will continue as a regional road named B455. Follow this road for approximately three miles before you get 
to Kronberg (which is signposted). 
<li>By space craft / from Sirius, Betelgeuze and beyond: point your transwarp navigator towards the star known as Sol
(universal galactic coordinates: 456778/AZ/33.200/GB-34412.65412.GH7787). The third planet from the central star is a small blue joint
known as Earth. One of the central landmasses known as Europe hosts a country known as Germany (pretty central bordering
on two seas in the north). At the center of this country is a state known as Hassia (in the local tongue known as German: \"Hessen\"). In the south of this 
state you'll see a large settlement called Frankfurt with a big public transport hub just left of the settlement known as an \"airport\" which is used for
local public and private transport on this planet. After leaving your spacecraft at this hub (plenty of parking space is provided - just 
don't forget to camouflage your vehicle as a plane (a craft used for local public transport at these airports) in order ot avoid
confusing the locals known as Earthlings) continue your route as described above.
</ol></p>",
"<p>Kronberg is on the eastern outskirts of one of Germany's central mountain ranges known as <a href=https://en.wikipedia.org/wiki/Taunus>
Taunus</a>. Covering more than 1,000 square miles, the Taunus ranges from Weilmünster in the north to Wiesbaden in the south and from the Rhine
in the west to Friedberg in the east. With its excellent network of well-kept hiking trails ranging easily managable tours through
the lower parts of the region right up more mountainous hikes covering the region's tallest peaks including the Feldberg and Altkönig. This
<a href=taunus_trails.pdf>brochure</a> includes suggestions for some scenic and beautiful tours; another 
<a href=https://www.outdooractive.com/en/hikes/taunus/hiking-in-taunus/1441506>website</a> contains further information.
</p>
<p>Due to its rich history, the surrounding region features numerous sights of interest. This goes right back to Roman times and beyond, where 
a stone wall known as the <a href=https://en.wikipedia.org/wiki/Limes>Limes</a> protected the civilized peoples of the north inckluding the Saxons 
and Germans from the more barbaric Romans which tried to invade the region numerous times from the south :-). There's a historic sight known
as the <a hef=https://en.wikipedia.org/wiki/Saalburg>Saalburg</a> that features a rebuilt Roman fort just on the Limes which details
the trails and tribulations but also daily life of Roman legions during these times. Other sites worth visiting include the <a
href=https://www.hessenpark.de/en>Hessenpark</a>, an outdoor museum featuring a rebuilt typical Hessian village
from a few centuries ago.
</p><p>
If nature or history is not your cup of tea, <a href=https://frankfurt.de/sixcms/detail.php?id=317578>Frankfurt</a> with its myriad of churches, museums
and other sights worth visiting is only a short train ride away. These include the <a href=https://en.wikipedia.org/wiki/St._Paul%27s_Church,_Frankfurt_am_Main>
Paulskirche</a>,
a church which was instrumental from a constitutional perspective during the founding of what is now known as modern Germany and Frankfurt's 
<a href=https://www.museumsufer.de/portal/en/News/Start/0/0/0/0/2360.aspx>Museumsufer<a>, a stretch of the river Main where there's a host of musuem located on the southern
banks of the river, ranging from one of Germany's most popular art musuems (the <a href=https://www.staedelmuseum.de/en>Staedel</a>) to 
the <a href=https://www.dff.film/en>Filmmuseum</a>, an exhibiton dedicated to the art of contemporary and historical movie-making. 
</p>
<p>And last but not least - this <i>is</i> an LBW - there's a fare of pubs offering traditional and modern products of malthouse and keg in Kronberg; ranging
from the down-to-earth Liebe Zeit and <a href=https://www.zum-weinberg-kronberg.de>Zum Weinberg</a> to the more upmarket <a href=http://www.zehntscheune-kronberg.de/?lang=en>
Zehntscheune</a>.
The closest microbrewery is in Oberursel, only a few miles down the road. It's called 
<a href=https://meinbier.de>Alt-Oberurseler Brauhaus</a> which offers seasonal specialities in addition
to its steady fare of brews. For cider connoisseurs, there is the <a href=https://www.kelterei-steden.de/alt-orschel>Alt-Orschel</a> which offers
its own type of local cider called &ldquo;Äppelwoi&ldquo; which is the local dialect for apple wine (some say this is an acquired taste - both the dialect
and the wine :-), also in Oberursel.
And then there is of course Frankfurt with its large selection of brew pubs, craft beer places and other fine inns offering beers brewed locally and from further
afield. This includes the following esablishments worth mentioning offering contemporary craft beers: <a href=https://www.wir-komplizen>Wir Komplizen</a>
in Bornheim is a small pub offering an ever-changing selection of national and international craft beers (both from established and gypsy brewers
alike), the bigger <a href=https://www.naiv-frankfurt.de>Na&iuml;v</a> located in the city center does things along similar lines. 
The tiny <a href=http://braustil.de>Braustil</a>
is one of Frankfurt's up-and-coming brew-pubs located just north of the city center, specializing on a staple selection of seasonal and non-seasonal brews.
In constrast to these somewhat recent additions to Frankfurt's craft-beer scene, <a href=http://www.12aposteln-frankfurt.de>Zu den 12. Aposteln</a> is probably
the oldest brew pub in Frankfurt. Provided there's enough interest, I am more than happy to organize a pub crawl including these and other places worth seeing
and sampling their wares.
</p>
<p>As this list is not meant to be complete when it comes to describing all the sights and and things worth checking out, I recommend the following 
websites for further information: <a href=https://taunus.info>taunus.info</a>features more information on the Taunus (unfortunately in German only),
<a hrref=https://frankfurt.de/sixcms/detail.php?id=stadtfrankfurt_eval01.c.317693.en&template=hp_flash>
Frankfurt's official site</a>has everything under the sun on the city (and not just tourist information!). 
And finally, <a href=https://www.kronberg.de/kronberg/de>Kronberg's
site</a> gives an overview of the town itself.
</p>",
"<p>The hall, which serves as the usual base camp for the week, is part of Kronberg's town hall complex in the <a href=https://www.openstreetmap.org/#map=19/50.17867/8.51090>
heart</a>
of Kronberg. Within walking distance from public transport, is easily reachable even if you're not staying in Kronberg. We aim to have a decent 
network connection in place by the time the LBW starts (this is work in progress to some extend), but it may be a good idea to bring your smartphone 
with a sufficient data plan just in case we need a backup. Stay tuned for further details.
</p>
<p>The following pictures give you some impression of what the town hall looks like:
</p>
<center><img src=pix/hall0.jpg class=border alt='One of the inside halls'>
<p>
<center><h3>One of the inside halls</h3></center>
<img src=pix/hall1.jpg class=border alt='The hall from the outside'>
<p>
<center><h3>The town hall from the outside</h3></center>
<img src=pix/hall2.jpg class=border alt='One of the larger meeting rooms'>
<p>
<center><h3>Another view of one of the halls inside</h3></center>
</center>",
"<p>The following is an attempt a list of frequently answered questions, aka an <a href=https://en.wikipedia.org/wiki/FAQ>FAQ</a>. If you think
there is an item missing, feeel free to get in touch with via mail and I'll be more than happy to expand the list accordingly. Needless to say,
answers accompanying questions are more than welcome, even you don't have an answer, mail me your question and I'll try to include the answer with the question. 
Answers mailed to me without correpsonding questons should be marked as such and I'll include them at my discretion :-).
</p>
<ul>
<li><i>Why do we need an FAQ?</i> The answer is somewhat metapyhsical: As you're reading this, there's clearly a need for an FAQ (even if it's your 
curiosity which is driving this :-). Plus nowadays all the web sites of the cool hippster places featuring members Generation Z enjoying their vegansojadecaflattesteakflavouredmintbased cappucinos and hamering away on their Dell XPS (the new MacBook of that generation running equally hip open source operating systems) 
have FAQ pages. Move on! :-)
<li><i>I am from a small star system on the other side of the galaxy, how do I get to Kronberg?</i> First ensure that your wrap drive is in order. Next, locate 
the system called \"Sol\" using your favourite mapping application. A small blue planet called \"Earth\" is fourth from that star. Please refer 
to the <a href=page.php?2>How to get there page</a> for further directions once you get there. <b>Please note</b>: Travelers with inverted quantum
field drives <b>must</b> align their current Cochrane-warp indexes based on the Tesla-matrix of their system of origin; otherwise you <b>will</b> end up
on the other side of a black whole where Europe has not only threatened to leave Great Britian but asctually has done so; leaving the country 
in disarray with yet another lunatic featuring a blode wig in charge
of the country. And this will <b>not</b> be pleasant.
<li><i>Although I read the instructions about aligning the Cochrane-warp indexes above, I was stupid enough to completely ignore them and now am 
stranded on the other side of that black whole where Europe has left Great Britian. What do I do now?</i>All hope is lost. You may as well move to the US (country
on the southern rim of northern part of the landmas left of Europe); also run by an idiot with a blonde wig. 
<li><i>What about mobile options in Germany?</i> After much debate whether this Internet thing is there to stay, mobile operator in Germany are slowly waking up to
the fact that not only kitten videos require a decent bandwidth. So even prepaid options now have an LTE option. If you are looking for a decent data plan 
during your stay in Germany, many of the operators such as <a href=https://www.congstar.de/prepaid/prepaid-tarife-vergleich>Congstar (a subsidiary of German 
Telekom</a>, <a href=https://www.o2online.de/tarife/prepaid-tarife>O<sub>2</sub></a> or any of their resellers such as 
<a href=https://www.alditalk.de/basis-prepaid-tarif-sim-karte>Aldi Talk</a> or <a href=https://www.lidl.de/de/tarifvergleich/s7373637>Lidl</a> offer prepaid 
plans which are valid for a couple of weeks. Websites such as <a href=https://www.mygermanphone.de/best-german-internet-data-plans>My German Phone</> or
<a href=https://liveworkgermany.com/choosing-a-german-mobile-phone-package-tips-and-recommendations>LiveWorkGermany</a> offer overviews and comparisons.
<li><i>What's the weather like in central Germany in late August?</i> As global warming didn't stop in front of Germany's ddorstep, the last few years
carried record temperatures of up to 40 degres centigrade during that time. While you might be better off predicting next week's lotto numbers than
the weather a few months in advance, I suppose those were the exception rather than the rule and late August would mean anything between 20 and 30 degrees Celsius
in the Rhein-Main region. <a href=https://www.wetter.com/deutschland/kronberg-im-taunus/DE0005786.html>wetter.com</a> and its English cousin <a href=http://www.weather24.com>
weather24.com</a> are normally fairly accurate (at least for short-term predictions) but also carry long-term forcasts.
<li><i>I heard that at a recent mini-LBW parts of the community were excluded, effectively turning that mini-LBW into a private, by-invitation only event. Will Kronberg 
be a similar, by-invitation only event?</i> While the organisers of
this year's LBW do not have control over other LBWs (including mini-LBWs)
organised by different people, the LBW in Kronberg will a Linux Bier
Wanderung in the original sense, open too <i>all</i> members of the
community regardless of cultural and ethnic background, sexual
or religious orientation, origin, age or disabilities. 
<li><i>Is this FAQ complete?</i>Although it may look complete, there tiny amounts of information missing. The idea is complement this list of FAQs on a weekly 
basis until the LBW takes place in August thus arriving at a complete guide to life, the universe, the surprising fact that actually 42 <b>is</b> a prime number despite
its eveness and checking Cochrane-warp indexes before undertaking any inter-stellar travel is <b>always</b> a good idea. Requests are taken - stay tuned!
</p>");
echo($text[$ndx]);
?>
<span style=font-size:small>All imaging &copy; and courtesy of <a href=https://www.wikimedia.org target=_blank>Wikimedia</a> All other website content &copy; LBW, licensed
       <a href=https://creativecommons.org/licenses/by/4.0 target=_blank>CC-BY 4.0</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imprint: LinuxBierWanderung.com</span>
</body>
