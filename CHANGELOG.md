# Warehouse - Changelog


## Version 1.1.1
- Multidomainfähigkeit

## Version 1.1
- Staffelpreise hinzugefügt
- Staffelpreise für Varianten hinzugefügt
- edittable für Staffelpreiseingabe im Backend hinzugefügt
- edittable sortierbar hinzugefügt
- Versandkosten nach Gewicht hinzugefügt
- Tabellenfeld company wird in ycom automatisch hinzugefügt

## Version 1.0
- yform 4 Kompatibilität
- php8 Kompatibilität
- Attributverwaltung komplett entfernt
- Artikel Feld Versandartikel hinzugefügt
- Customer E-Mail Templates können mit Länderkürzel angelegt werden, z.B. tpl_customer_en. Das Template wird dann automatisch erkannt und verwendet.

Update Hinweis!
In dieser Version wurden die Attribute aus Kompatibilitätsgründen mit yform 4 entfernt.
Bitte prüfen Sie vor einem Update, ob in Ihrem Shop Attribute verwendet werden. Wenn Attribute verwendet werden, können Sie nicht direkt updaten.
Auch wenn Sie keine Attribute verwenden, müssen ggf. Fragmente angepasst werden.

## Version 0.3
- Varianten können den Preis des Basisartikels übernehmen.
- get_variants liefert die Varianten als yorm Objekt
- im Warenkorb kann die Anzahl per Input-Felder geändert werden.