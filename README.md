# wsdl2phpcli
CLI for  [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) help you generate classes from remote wsdl documents

Installation via Composer
```bash
composer require perf2k2/wsdl2phpcli
chmod +x ./wsdl2phpcli/generate
```

Usage:
```bash
./generate [options] url
```
For example:
```bash
./generate -c TextCampaignSettingsEnum,TextCampaignSearchStrategyTypeEnum -n "api\entities\campaigns\textcampaign" https://api.direct.yandex.com/v5/campaigns?wsdl
```
To see all options use 
```
./generate --help
```
