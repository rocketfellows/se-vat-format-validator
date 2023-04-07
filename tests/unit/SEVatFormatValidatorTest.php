<?php

namespace rocketfellows\SEVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\SEVatFormatValidator\SEVatFormatValidator;

class SEVatFormatValidatorTest extends TestCase
{
    /**
     * @var SEVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new SEVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'SE123456789012',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SE000000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SE111111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SE999999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789012',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SE12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'SE1234567890123',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Se123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'sE123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'se123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890123',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
