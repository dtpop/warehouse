# Setup

Das Warehouse verfügt über ein rudimentäres Setup, mit dem die Grundinstallation erleichtert wird. Zusätzlich sind einige manuelle Schritte zu erledigen. Daher gibt es hier eine Art Schritt-für-Schritt-Anleitung.

### Benötigte AddOns (Schritt 1)

Das Warehouse baut grundsätzlich auf folgenden AddOns auf, die zuvor installiert werden müssen:

- yform
- yrewrite
- url (bitte die Version 2 verwenden aus dem Git Repo)

Zusätzlich sind folgende AddOns hilfreich:

- developer
- theme
- adminer
- Quick Navigation

Das Warehouse kann zusätzlich mit der Community ycom verbunden werden, sodass man eine Kundenverwaltung aufbauen kann, die Kunden sich registrieren können und Basisdaten (z.B. Adresse) in eine Bestellung übernommen werden kann.

Also ... Schritt 1 besteht draus, die AddOns zu installieren und z.B. yrewrite nach dem Rezept von yrewrite zu konfigurieren.

### Schritt 2 - Module und E-Mail Templates anlegen

Für folgende Module bringt das Warehouse *Muster* mit. Ganz dezidiert werden diese Module als Muster gekennzeichnet. Die Anforderungen an jeden Shop sind doch sehr unterschiedlich. Daher sind dies lediglich Beispiele für eine funktionierende Konfiguration. Wer kein Feld "Firma" beim Kunden braucht, der wirft das natürlich raus. Wer eigene Felder braucht, der macht diese Felder natürlich rein.

Dieses Setup wird als Administrator unter dem Menüpunkt "Warehouse" bei "Setup" ausgeführt. Anschließend stehen die Module und E-Mail Templates zur Verfügung. Alles muss natürlich individuell angepasst werden. Schließlich kann ich nicht wissen wie euer Shopname ist und wer bei euch die E-Mails für die Bestellungen bekommt.

### Schritt 3 - Die Struktur in REDAXO anlegen

Grundsätzlich findet die Präsentation der Kategorien und Produkte aus dem Warehouse in einem einzigen REDAXO-Artikel statt. Das ist wichtig. Fangt also nicht an eine eigene Kategoriestruktur für die Produktpräsentation im REDAXO anzulegen. Dafür sind die Kategorien im Warehouse zuständig.

Dafür gibt es für jeden einzelnen Schritt im Bestellvorgang eine eigene Seite in REDAXO. Diese könnt ihr als Artikel oder Kategorie anlegen. Da diese Seiten nicht in einem Menü angezeigt werden müssen, können diese beispielsweise in einer Kategorie "Shop" als Artikel angelegt werden. Folgende Artikel werden benötigt:

- Warenkorb (Anzeige des Warenkorbs)
- Adresseingabe (Eingabe der Adresse und Bestelldaten)
- Paypal Start (falls Paypal verwendet werden soll)
- Paypal Erfolg (dto.)
- Paypal Fehler (dto.)
- Danke

Die Seiten "Danke" und "Paypal Fehler" sind rein redaktionelle Seiten. Die können mit eigenen redaktionellen Inhalten gefüllt werden.

Für alle anderen Seiten gibt es die vorbereiteten Module. Diese also einfach auf die Seiten platzieren.

### Schritt 4 - das Warehouse konfigurieren

Das Warehouse hat eine Konfigurationsseite. Die einzelnen Felder sind selbsterklärend. Es muss nicht zwingend alles ausgefüllt werden.

### Schritt 5 - weitere Konfigurationen

Der PHP Mailer muss noch konfiguriert werden. Bitte führt den Test aus, damit auch sicher gestellt ist, dass die Mails auch wirklich ankommen.

Url muss konfiguriert werden. Im ersten Schritt ist wichtig, dass die Warehouse Produktseite mit dem Parameter `category_id` aus der Warehouse Tabelle `rex_wh_categories` verknüpft wird.

## Templates

Es genügt ein einziges Template, welches den Artikel mit `REX_ARTICLE[]` ausgibt. Weitere Beschreibung folgt.

## Fragmente