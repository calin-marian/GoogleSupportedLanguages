<?php

use GoogleSupportedLanguages\LanguageFactory;
use GoogleSupportedLanguages\Languages\LanguageInterface;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \GoogleSupportedLanguages\LanguageFactory
 */
class LanguageFactoryTest extends TestCase {

  /**
   * The mocked language factory.
   *
   * @var LanguageFactory
   */
  private $languageFactory;

  /**
   * @inheritDoc
   */
  protected function setUp() {
    parent::setUp();
    
    $this->languageFactory = $this->getMockBuilder(LanguageFactory::class)
      ->setMethods(['getMappings'])
      ->getMock();

    $this->languageFactory->expects($this->any())
      ->method('getMappings')
      ->will($this->returnValue(['test' => 'TestLanguage']));
  }

  /**
   * @covers ::create
   */
  public function testCreateValid() {
    $language = $this->languageFactory->create('test');
    $this->assertInstanceOf(LanguageInterface::class, $language);
  }

  /**
   * @covers ::create
   */
  public function testCreateException() {
    $this->expectException(InvalidArgumentException::class);
    $this->languageFactory->create('non-existing');
  }
}


class TestLanguage extends \GoogleSupportedLanguages\Languages\LanguageBase {

  /**
   * Test constructor.
   */
  public function __construct() {
    $this->code = 'test';
    $this->name = 'Test Language';
  }
}
