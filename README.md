[![deutsche Version](https://logos.oxidmodule.com/de2_xs.svg)](README.md)
[![english version](https://logos.oxidmodule.com/en2_xs.svg)](README.en.md)

# D³ PRG Weiterleitungen für OXID eShop

Bei via FORM-Methode abgesendete Formulare kann die Zurück-Funktion des Browsers nur nach dem erneuten Senden des Formulars verwendet werden. Je nach Browser werden Rückfragen gezeigt. Das zusätzliche Absenden kann ungewollte Aktionen auslösen.

Durch Anwenden eines zusätzlichen GET-Requests auf die Ursprungsadresse wird das zusätzliche Absenden beim ersten "Zurück" unterbunden. (siehe [Wikipedia](https://de.wikipedia.org/wiki/Post/Redirect/Get))

## Installation

Dieses Paket erfordert einen mit Composer installierten OXID eShop in einer in der [composer.json](composer.json) definierten Version.

Öffnen Sie eine Kommandozeile und navigieren Sie zum Stammverzeichnis des Shops (Elternverzeichnis von source und vendor). Führen Sie den folgenden Befehl aus. Passen Sie die Pfadangaben an Ihre Installationsumgebung an.


```bash
php composer require d3/prg-redirects:^1.0
``` 

Aktivieren Sie das Modul im Shopadmin unter "Erweiterungen -> Module".

## Verwendung

Aktivieren Sie im Tab "Einstell." alle Controller, die diese zusätzliche Umleitung nutzen sollen.

## Erweiterbarkeit

Grundsätzlich kann jeder Controller mit dieser Technik ausgerüstet werden. Fehlt ein Controller, kann dieser gern ergänzt werden. Beachten Sie die Behandlung von Sonderfällen, wenn z.B. das Absenden des Formulars nicht erfolgreich war und die Weiterleitung eine Fehlerbehandlung stören würde.

## Changelog

Siehe [CHANGELOG](CHANGELOG.md) für weitere Informationen.

## Beitragen

Wenn Sie eine Verbesserungsvorschlag haben, legen Sie einen Fork des Repositories an und erstellen Sie einen Pull Request. Alternativ können Sie einfach ein Issue erstellen. Fügen Sie das Projekt zu Ihren Favoriten hinzu. Vielen Dank.

- Erstellen Sie einen Fork des Projekts
- Erstellen Sie einen Feature Branch (git checkout -b feature/AmazingFeature)
- Fügen Sie Ihre Änderungen hinzu (git commit -m 'Add some AmazingFeature')
- Übertragen Sie den Branch (git push origin feature/AmazingFeature)
- Öffnen Sie einen Pull Request

## Lizenz
(Stand: 25.07.2022)

Vertrieben unter der GPLv3 Lizenz.

```
Copyright (c) D3 Data Development (Inh. Thomas Dartsch)

Diese Software wird unter der GNU GENERAL PUBLIC LICENSE Version 3 vertrieben.
```

Die vollständigen Copyright- und Lizenzinformationen entnehmen Sie bitte der [LICENSE](LICENSE.md)-Datei, die mit diesem Quellcode verteilt wurde.