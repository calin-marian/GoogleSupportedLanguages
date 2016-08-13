<?php

namespace GoogleSupportedLanguages\Languages;

/**
 * @file
 * Contains GoogleSupportedLanguages\Languages\LanguageBase.
 */

abstract class LanguageBase implements LanguageInterface {

  /**
   * The language code
   *
   * @var string
   */
  protected $code;

  /**
   * The language name
   *
   * @var string
   */
  protected $name;

  /**
   * @inheritDoc
   */
  public function getLanguageCode() {
    return $this->code;
  }

  /**
   * @inheritDoc
   */
  public function getLanguageName() {
    return $this->name;
  }

}