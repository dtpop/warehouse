# warehouse
Warehouse: REDAXO Shop AddOn

Das Warehouse stellt Basisfunktionalitäten für einen Webshop in REDAXO zur Verfügung:

* ein flexible Produktdatenbank auf yform Basis für Kategorien, beliebig viele Unterkategorien, Artikel, Varianten und Attribute
* einen Warenkorb
* einen Bestellprozess inkl. PayPal SDK

Die Ausgabe basiert auf Fragmenten, sodass der Shop sich in jede Umgebung einfügen lässt.
Über das AddOn ycom ist eine Benutzerverwaltung möglich.

Aktuell handelt es sich noch um einen Prototyp.

Eine Livevorschau kann man hier anschauen: https://warehouse.ferien-am-tressower-see.de/ - diese ist allerdings nicht zwingend auf dem neuesten Stand.

Von diesem Liveshop sind Demodaten im AddOn enthalten. Sowohl Files als auch Datenbank können aus dem Verzeichnis install/demo in REDAXO importiert werden. Achtung! Vorhandene Inhalte, Templates und Module werden dabei gelöscht.

## Installation der Demo

### Benötigte AddOns

- yform
- yrewrite
- sprog

### Zusätzlich sinnvolle AddOns

- Blöcks
- Quicknavigation
- TinyMCE
- Developer
- Theme

#### Schritt 1
REDAXO Basis Installation auf neuer Domain/Subdomain oder lokaler Entwicklungsumgebung

#### Schritt 2
Über den Installer die oben benötigten AddOns herunterladen und installieren.

#### Schritt 3
Über Github das AddOn [Url](https://github.com/tbaddade/redaxo_url) mindestens Version 2.0.0-beta3 herunterladen und installieren.
Über Github das AddOn warehouse herunterladen und installieren.

#### Schritt 4
Minimal Beispielimport Datenbank und Dateien installieren. Die Beispieldateien liegen dem AddOn im Verzeichnis `install/demo` bei.

#### Schritt 5
PHP Mailer konfigurieren.
Für Paypal Bestellungen in Warehouse Paypal Parameter ergänzen.

#### Bekannte Fehler
In der obigen Konfiguration kann die Bestelltabelle nicht aufgerufen werden. Hierfür muss zusätzlich die ycom installiert werden und in der ycom Usertabelle das Feld company angelegt werden.
Die Bilder in der Demo sind absichtlich verkleinert.

Use at your own risk. Issues gerne auf Github https://github.com/dtpop/warehouse packen.
