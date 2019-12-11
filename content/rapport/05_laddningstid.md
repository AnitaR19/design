---
---
Rapport kmom05
=========================

Syfte
-----------------------

Tre olika webbplatser undersöktes för hur snabbt de laddades, 
och om innehållet kunde förbättras för att optimera laddningstid och användbarhet.



Urval
-----------------------
Jag valde att undersöka tre skånska städers, Malmös, Landskronas och Simrishamns, officiella webbplatser.

För varje stad testades tre sidor

- bilbliotek

- grundskola

- bygga och bo/flytta hit



### https://malmo.se/
[FIGURE src="image/kmom05/malmo-stad.png"]
[https://malmo.se/Uppleva-och-gora/Biblioteken.html](https://malmo.se/Uppleva-och-gora/Biblioteken.html)

[https://malmo.se/Service/Utbildning-och-forskola/Grundskola.html](https://malmo.se/Service/Utbildning-och-forskola/Grundskola.html)

[https://malmo.se/Service/Bygga-och-bo](https://malmo.se/Service/Bygga-och-bo)



### https://landskrona.se/
[FIGURE src="image/kmom05/landskrona.png"]

[https://www.landskrona.se/se-gora/kultur-noje/bibliotek/](https://www.landskrona.se/se-gora/kultur-noje/bibliotek/)

[https://www.landskrona.se/invanare/forskola-utbildning/grundskola/](https://www.landskrona.se/invanare/forskola-utbildning/grundskola/)

[https://www.landskrona.se/invanare/bygga--flytta-hit/](https://www.landskrona.se/invanare/bygga--flytta-hit/)

### https://simrishamn.se/
[FIGURE src="image/kmom05/simrishamn.png"]

[(https://www.simrishamn.se/kultur-och-fritid/bibliotek)](https://www.simrishamn.se/kultur-och-fritid/bibliotek)

[https://www.simrishamn.se/barn-och-utbildning/grundskola](https://www.simrishamn.se/barn-och-utbildning/grundskola)

[https://www.simrishamn.se/bo-och-bygga](https://www.simrishamn.se/bo-och-bygga)



Metod
-----------------------

Google PageSpeed Insights användes för att analysera och betygsätta webbplatserna. Analysen ger en prestanda-poäng mellan 1 och 100 där
0-49 = långsam, 50-89 = medelprestanda och 90-100 = snabb.
Laddningstid och storlek testades med Google devtools.



Resultat
-----------------------

All mätdata finns här:

[https://docs.google.com/spreadsheets/d/1nbcfLjUs11vikSIJtv8QRhbwAdU-ztYJ6jDS7I1l_1g/edit?usp=sharing](https://docs.google.com/spreadsheets/d/1nbcfLjUs11vikSIJtv8QRhbwAdU-ztYJ6jDS7I1l_1g/edit?usp=sharing)


##### PageSpeeds poäng för dator
- Malmö: 91
- Landskrona: 76
- Simrishamn: 76

##### PageSpeed poäng för mobil
- Malmö: 47
- Landskrona: 35
- Simrishamn: 31


##### Laddningstider (sekunder)
- Malmö: 1.25
- Landskrona: 4.57
- Simrishamn: 3.20



Analys
-----------------------

Webbplatsernas rangordning baserat på mätvärden

1. Malmö stad
2. Simrishamn
3. Landskrona

De vanligaste förbättringsåtgärderna för webbplatserna är


- Ta bort resurser som blockerar renderingen

- Minska svarstiderna från servern

- Ta bort oanvänd CSS

- Skjut upp inläsningen av bilder som inte visas på skärmen


Värt att notera är att Malmö stad som var den snabbaste av de tre webbplatserna inte hade
"minska svarstiderna från servern" på sin lista över förbättringsåtgärder.

Webbplasernas rangordning bestämdes dels efter poäng, men Landskrona hamnades sist på grund av längsta laddningstiden.
Den absoluta laddningstiden bör nog vara under 2 sekunder och den enda webbplatsen som klarade den gränsen var Malmö stad.
Jag har inte testat att ladda sidorna på mobil, men på dator så upplevde jag Simrishamns och framför allt Landskronas
webbplats som väldigt sega att ladda. 



Övrigt
-----------------------

Rapporten gjordes av Anita Ramelius
