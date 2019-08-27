# Example to use phpcs for Magento2:

## Create a project with phpcs and Magento2 rules:
```bash
composer create-project magento/magento-coding-standard --stability=dev magento-coding-standard
```
More details [here](https://github.com/magento/magento-coding-standard)

## Run phpcs on your codebase:

```bash
vendor/bin/phpcs --standard=Magento2 ../path/to/your/magento/app/ --severity=10 --report=json > ../path/to/report/cs_report.json 
```

Put report result file to directory with report.php script

## View report at browser:

Run php standalone server at directory with report.php:

```bash
php -S localhost:7788
```

Go to [localhost:7788/report.php](localhost:7788/report.php)

Fix errors 👨‍🔧🐛 and enjoy 
