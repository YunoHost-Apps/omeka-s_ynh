<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# Omeka S YunoHost-erako

[![Integrazio maila](https://apps.yunohost.org/badge/integration/omeka-s)](https://ci-apps.yunohost.org/ci/apps/omeka-s/)
![Funtzionamendu egoera](https://apps.yunohost.org/badge/state/omeka-s)
![Mantentze egoera](https://apps.yunohost.org/badge/maintained/omeka-s)

[![Instalatu Omeka S YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=omeka-s)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek Omeka S YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

Omeka S is a web publication system for universities, galleries, libraries, archives, and museums. It consists of a local network of independently curated exhibits sharing a collaboratively built pool of items, media, and their metadata.

### Features

- Connect to the semantic Web
- Share with DPLA

**Paketatutako bertsioa:** 4.1.1~ynh2

**Demoa:** <https://omeka.org/s/download/#sandbox>

## Pantaila-argazkiak

![Omeka S(r)en pantaila-argazkia](./doc/screenshots/omeka-s.png)

## Dokumentazioa eta baliabideak

- Aplikazioaren webgune ofiziala: <https://omeka.org/s/>
- Erabiltzaileen dokumentazio ofiziala: <https://omeka.org/s/docs/user-manual/>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/omeka/omeka-s>
- YunoHost Denda: <https://apps.yunohost.org/app/omeka-s>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/omeka-s_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
edo
sudo yunohost app upgrade omeka-s -u https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
