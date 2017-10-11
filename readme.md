# FEDEX API & SDKs

## project description
The goal of this project is to provide a documentented starting point for interacting with the FEDEX SOAP APIs. Starting with PHP SDKs can be built and stored in the project to reference the WSDL files needed to interact with a specific version of the FEDEX API.

## FED EX API
version: v22 (standard and advanced api wsdls)

* [FedEx Developer Center](https://www.fedex.com/us/developer/web-services/process.html?tab=tab1#tab1)
  * WSDLs can be download from the "downloads" section at the URL linked above.

## SDKs

#### PHP (7.1)
The PHP sdk has been started using a PHP Package Generator called [WsdlToPhp](https://github.com/WsdlToPhp/PackageGenerator). There is a command line utility included in this repo for generating PHP objects (`sdks/php/wsdtophp-php7.phar`)

Instructions can be found at the project github page but the following command is an example of how to run it 

    php wsdltophp-php7.phar generate:package \
      --urlorpath="https://raw.githubusercontent.com/roundhouse/fedex-wsdl/master/wsdls/RateService/RateService_v22.wsdl" \
      --destination="./" \
      --composer-name="fedex-php/php-sdk" \
      --force

FAQs for the wsdltophp library can be found on [github](https://github.com/WsdlToPhp/PackageGenerator/wiki/FAQ)
