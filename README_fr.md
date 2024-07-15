<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# Omeka S pour YunoHost

[![Niveau d’intégration](https://dash.yunohost.org/integration/omeka-s.svg)](https://ci-apps.yunohost.org/ci/apps/omeka-s/) ![Statut du fonctionnement](https://ci-apps.yunohost.org/ci/badges/omeka-s.status.svg) ![Statut de maintenance](https://ci-apps.yunohost.org/ci/badges/omeka-s.maintain.svg)

[![Installer Omeka S avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=omeka-s)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer Omeka S rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

Omeka S est un système de publication Web pour les universités, les galeries, les bibliothèques, les archives et les musées. Il consiste en un réseau local d'expositions organisées de manière indépendante partageant un pool d'éléments, de médias et de leurs métadonnées construit en collaboration.

### Caractéristiques

- Se connecter au Web sémantique
- Partager avec DPLA

**Version incluse :** 4.1.1~ynh1

**Démo :** <https://omeka.org/s/download/#sandbox>

## Captures d’écran

![Capture d’écran de Omeka S](./doc/screenshots/omeka-s.png)

## Documentations et ressources

- Site officiel de l’app : <https://omeka.org/s/>
- Documentation officielle utilisateur : <https://omeka.org/s/docs/user-manual/>
- Dépôt de code officiel de l’app : <https://github.com/omeka/omeka-s>
- YunoHost Store : <https://apps.yunohost.org/app/omeka-s>
- Signaler un bug : <https://github.com/YunoHost-Apps/omeka-s_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
ou
sudo yunohost app upgrade omeka-s -u https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
