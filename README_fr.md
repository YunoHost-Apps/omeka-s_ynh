# Omeka S pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/omeka-s.svg)](https://dash.yunohost.org/appci/app/omeka-s) ![](https://ci-apps.yunohost.org/ci/badges/omeka-s.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/omeka-s.maintain.svg)  
[![Installer Omeka S avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=omeka-s)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer Omeka S rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Système de publication Web pour les universités, les galeries, les bibliothèques, les archives et les musées

**Version incluse :** 3.0.2~ynh1

**Démo :** https://omeka.org/s/download/#sandbox

## Captures d'écran

![](./doc/screenshots/omeka-s.png)

## Documentations et ressources

* Site officiel de l'app : https://omeka.org/s/
* Documentation officielle utilisateur : https://yunohost.org/apps
* Documentation officielle de l'admin : https://omeka.org/s/docs/user-manual/
* Dépôt de code officiel de l'app : https://github.com/omeka/omeka-s
* Documentation YunoHost pour cette app : https://yunohost.org/app_omeka-s
* Signaler un bug : https://github.com/YunoHost-Apps/omeka-s_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
ou
sudo yunohost app upgrade omeka-s -u https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps