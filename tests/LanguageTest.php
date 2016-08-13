<?php

use GoogleSupportedLanguages\Languages\LanguageInterface;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \GoogleSupportedLanguages\Language\Languages\LanguageBase
 */
class LanguageTest extends TestCase {

  /**
   * @var LanguageInterface
   */
  private $testLanguage;


  /**
   * @inheritDoc
   */
  protected function setUp() {
    parent::setUp();

    $this->testLanguage = $this->getMockForAbstractClass(\GoogleSupportedLanguages\Languages\LanguageBase::class);
    $this->setProtectedProperty($this->testLanguage, 'code', 'test');
    $this->setProtectedProperty($this->testLanguage, 'name', 'Test Language');

  }

  /**
   * Sets a protected property on a given object via reflection
   *
   * @param $object - instance in which protected value is being modified
   * @param $property - property on instance being modified
   * @param $value - new value of the property being modified
   */
  private function setProtectedProperty($object, $property, $value) {
    $reflection = new ReflectionClass($object);
    $reflection_property = $reflection->getProperty($property);
    $reflection_property->setAccessible(true);
    $reflection_property->setValue($object, $value);
  }

  /**
   * @covers ::getLanguageCode
   */
  public function testCreateValid() {
    $this->assertEquals('test', $this->testLanguage->getLanguageCode());
  }

  /**
   * @covers ::create
   */
  public function testCreateException() {
    $this->assertEquals('Test Language', $this->testLanguage->getLanguageName());
  }

}