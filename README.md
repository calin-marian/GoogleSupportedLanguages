# GoogleSupportedLanguages

## Languages supported by Google APIs.

Google APIs support a [limited list of languages](https://developers.google.com/maps/faq#languagesupport). This library provides a way to validate the language parameter in your own Google API library.

Example code:
```php
  $googleLibrary = new MyAwesomeGoogleApiLibrary($key);

  $languageCode = 'en';
  $language = \GoogleSupportedLanguages\LanguageFactory($language_code);
  
  $googleLibrary->setLanguage($language);
```

If the provided language code is not part of the supported list, an InvalidArgumentException is thrown.

## Installing the library.
```shell
  composer require calin-marian/GoogleSupportedLanguages
```
