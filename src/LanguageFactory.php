<?php
namespace GoogleSupportedLanguages;

/**
 * @file
 * Contains GoogleSupportedLanguages\LanguageFactory.
 */

use GoogleSupportedLanguages\Languages\LanguageInterface;

class LanguageFactory {

  /**
   * Create a language object from the language code.
   *
   * @param string $languageCode
   * @return LanguageInterface
   */
  public function create($languageCode) {
    $mappings = $this->getMappings();

    if (!isset($mappings[$languageCode])) {
      throw new \InvalidArgumentException('The language code is not part of the supported list. Please see GoogleSupportedLanguages\LanguageFactory::getMappings() for reference.');
    }

    return new $mappings[$languageCode]();
  }

  /**
   * Get a mapping of supported languages classes to the language codes.
   *
   * @return string[]
   * 
   * @codeCoverageIgnore
   */
  protected function getMappings() {
    return [
      'ar' => '\GoogleSupportedLanguages\Languages\Arabic',
      'bg' => '\GoogleSupportedLanguages\Languages\Bulgarian',
      'bn' => '\GoogleSupportedLanguages\Languages\Bengali',
      'ca' => '\GoogleSupportedLanguages\Languages\Catalan',
      'cs' => '\GoogleSupportedLanguages\Languages\Czech',
      'da' => '\GoogleSupportedLanguages\Languages\Danish',
      'de' => '\GoogleSupportedLanguages\Languages\German',
      'el' => '\GoogleSupportedLanguages\Languages\Greek',
      'en' => '\GoogleSupportedLanguages\Languages\English',
      'en-AU' => '\GoogleSupportedLanguages\Languages\EnglishAustralian',
      'en-GB' => '\GoogleSupportedLanguages\Languages\EnglishGreatBritain',
      'es' => '\GoogleSupportedLanguages\Languages\Spanish',
      'eu' => '\GoogleSupportedLanguages\Languages\Basque',
      'eu' => '\GoogleSupportedLanguages\Languages\Basque',
      'fa' => '\GoogleSupportedLanguages\Languages\Farsi',
      'fi' => '\GoogleSupportedLanguages\Languages\Finnish',
      'fil' => '\GoogleSupportedLanguages\Languages\Filipino',
      'fr' => '\GoogleSupportedLanguages\Languages\French',
      'gl' => '\GoogleSupportedLanguages\Languages\Galician',
      'gu' => '\GoogleSupportedLanguages\Languages\Gujarati',
      'hi' => '\GoogleSupportedLanguages\Languages\Hindi',
      'hr' => '\GoogleSupportedLanguages\Languages\Croatian',
      'hu' => '\GoogleSupportedLanguages\Languages\Hungarian',
      'id' => '\GoogleSupportedLanguages\Languages\Indonesian',
      'it' => '\GoogleSupportedLanguages\Languages\Italian',
      'iw' => '\GoogleSupportedLanguages\Languages\Hebrew',
      'ja' => '\GoogleSupportedLanguages\Languages\Japanese',
      'kn' => '\GoogleSupportedLanguages\Languages\Kannada',
      'ko' => '\GoogleSupportedLanguages\Languages\Korean',
      'lt' => '\GoogleSupportedLanguages\Languages\Lithuanian',
      'lv' => '\GoogleSupportedLanguages\Languages\Latvian',
      'ml' => '\GoogleSupportedLanguages\Languages\Malayalam',
      'mr' => '\GoogleSupportedLanguages\Languages\Marathi',
      'nl' => '\GoogleSupportedLanguages\Languages\Dutch',
      'no' => '\GoogleSupportedLanguages\Languages\Norwegian',
      'pl' => '\GoogleSupportedLanguages\Languages\Polish',
      'pt' => '\GoogleSupportedLanguages\Languages\Portuguese',
      'pt-BR' => '\GoogleSupportedLanguages\Languages\PortugueseBrazil',
      'pt-PT' => '\GoogleSupportedLanguages\Languages\PortuguesePortugal',
      'ro' => '\GoogleSupportedLanguages\Languages\Romanian',
      'ru' => '\GoogleSupportedLanguages\Languages\Russian',
      'sk' => '\GoogleSupportedLanguages\Languages\Slovak',
      'sl' => '\GoogleSupportedLanguages\Languages\Slovenian',
      'sr' => '\GoogleSupportedLanguages\Languages\Serbian',
      'sv' => '\GoogleSupportedLanguages\Languages\Swedish',
      'ta' => '\GoogleSupportedLanguages\Languages\Tamil',
      'te' => '\GoogleSupportedLanguages\Languages\Telugu',
      'th' => '\GoogleSupportedLanguages\Languages\Thai',
      'tl' => '\GoogleSupportedLanguages\Languages\Tagalog',
      'tr' => '\GoogleSupportedLanguages\Languages\Turkish',
      'uk' => '\GoogleSupportedLanguages\Languages\Ukrainian',
      'vi' => '\GoogleSupportedLanguages\Languages\Vietnamese',
      'zh-CN' => '\GoogleSupportedLanguages\Languages\ChineseSimplified',
      'zh-TW' => '\GoogleSupportedLanguages\Languages\ChineseTraditional'
    ];
  }
}