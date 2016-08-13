# GoogleSupportedLanguages

## Languages supported by Google APIs.

Google APIs support a [limited list of languages](https://developers.google.com/maps/faq#languagesupport). This library provides a way to validate the language parameter in your own Google API library.

Example code:
```php
  $googleLibrary = new MyAwesomeGoogleApiLibrary($key);

  $languageCode = 'en';
  $language = \GoogleSupportedLanguages\LanguageFactory($languageCode);
  
  $googleLibrary->setLanguage($language);
```

If the provided language code is not part of the supported list, an InvalidArgumentException is thrown.

Also you can then typehint the parameter to the interface \GoogleSupportedLanguages\Language\LanguageInterface:
```php
  class MyAwesomeGoogleApiLibrary implements MyAwesomeGoogleApiLibraryInterface;
    ....
    public function setLanguage(\GoogleSupportedLanguages\Language\LanguageInterface $language){
      $this->language = $language;
    }
    ....
    public function execute() {
      ...
      $parameters['language'] = $this->language->getCode();
      ....
    }
    ....
  }
```

## Installing the library.
```shell
  composer require calin-marian/GoogleSupportedLanguages
```
