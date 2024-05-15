<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 Omeka S

[![集成程度](https://dash.yunohost.org/integration/omeka-s.svg)](https://dash.yunohost.org/appci/app/omeka-s) ![工作状态](https://ci-apps.yunohost.org/ci/badges/omeka-s.status.svg) ![维护状态](https://ci-apps.yunohost.org/ci/badges/omeka-s.maintain.svg)

[![使用 YunoHost 安装 Omeka S](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=omeka-s)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 Omeka S。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

Omeka S is a web publication system for universities, galleries, libraries, archives, and museums. It consists of a local network of independently curated exhibits sharing a collaboratively built pool of items, media, and their metadata.

### Features

- Connect to the semantic Web
- Share with DPLA

**分发版本：** 4.1.0~ynh2

**演示：** <https://omeka.org/s/download/#sandbox>

## 截图

![Omeka S 的截图](./doc/screenshots/omeka-s.png)

## 文档与资源

- 官方应用网站： <https://omeka.org/s/>
- 官方用户文档： <https://omeka.org/s/docs/user-manual/>
- 上游应用代码库： <https://github.com/omeka/omeka-s>
- YunoHost 商店： <https://apps.yunohost.org/app/omeka-s>
- 报告 bug： <https://github.com/YunoHost-Apps/omeka-s_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
或
sudo yunohost app upgrade omeka-s -u https://github.com/YunoHost-Apps/omeka-s_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
