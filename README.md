# User Guide

### Aanpasingen

#### Carousel afbeeldingen veranderen
Om de carousel afbeeldingen te veranderen navigeer je naar <i>index.php</i>. Vervolgens scroll je naar `<!-- Carousel -->`. Hier staat de code voor de header carousel. Om de plaatjes te veranderen hoef je simpelweg alleen de `src=""` te veranderen van de `img` tags. Bijvoorbeeld `<img class="..." src="./images/h-2.jpg" alt="...">` naar `<img class="..." src="./images/voorbeeld.jpg" alt="...">`. De afbeelding zal zich automatisch schalen naar de webpagina. Als de afbeelding niet goed past is het het beste om de afbeelding handmatig bij te snijden. Om de titel en ondertitel aan te passen van de afbeelding kun je de `h5` en de `p` tags aanpassen die onder de `img` staan in de code. Dit spreekt voor zich.

#### Voorbeeldtekst veranderen
Om de voorbeeldtekst te veranderen van de hoofdpagina navigeer je naar <i>index.php</i>. Vervolgens kun je met een text-editor gemakkelijk zoeken in de code naar de tekst die je wilt aanpassen. Om de inhoud aan te passen moet je alleen de tekst tussen de `>...<` aanpassen zodat de stijl niet verloren gaat. Bijvoorbeeld: `<h2 class="...">WIE ZIJN WIJ</h2>` naar `<h2 class="...">WIE BEN IK</h2>`. Hierdoor zal de stijl hetzelfde blijven en alleen de inhoud gewijzigt worden.

#### Navigatie item toevoegen
Om een navigatie item toe te voegen navigeer je naar <i>inc/nav.php</i>. Hier kun je de de \<!-- ... \--> haakjes weghalen zodat de code de er in staat gebruikt wordt. De `href=""` geeft aan waar de pagina naartoe moet leiden. Dit kan bijvoorbeeld naar een nieuwe pagina zijn: `href="nieuw.php"`. Deze pagina moet wel bestaan in de hoofdmap. Vervolgens kun je de tekst "New page name" veranderen naar de naam van de pagina. De link is meteen klikbaar. Nog een pagina toevoegen? Kopieer dan de het complete blok wat je zojuist hebt aangepast nog een keer. Vergeet niet om dan ook weer de `href=""` aan te passen naar de nieuwe pagina.

#### Footer aanpassen
Om de footer aan te passen navigeer je naar <i>inc/footer.php</i>. Hier spreekt die indeling voor zich en kun je de \<!--- ... \--> haakjes weghalen om de `img` tag. Vervolgens kun je de `src="./images/..."` vervangen met het gewenste logo van het bedrijf. Bijvoorbeeld: `src="./images/logo.png"`. Zorg wel dat de afbeelding staat in het mapje images. <br /> Vergeet niet de regel met de `h1` tag weg te halen met "LOGO" erin. Om de andere velden aan te passen van de footer kun je in de `section` tags de text aanpassen naar wens.
