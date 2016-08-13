<?php

namespace GoogleSupportedLanguages\Languages;

/**
 * @file
 * Contains GoogleSupportedLanguages\Languages\LanguageInterface.
 */

interface LanguageInterface {

  /**
   * Get the language code.
   *
   * @return string
   */
  public function getLanguageCode();

  /**
   * Get the language name.
   *
   * @return string
   */
  public function getLanguageName();

}