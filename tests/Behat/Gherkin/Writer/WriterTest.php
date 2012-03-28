<?php

namespace Tests\Behat\Gherkin;

use Behat\Gherkin\Gherkin,
    Behat\Gherkin\Writer,
    Behat\Gherkin\Node\FeatureNode,
    Behat\Gherkin\Node\ScenarioNode,
    Behat\Gherkin\Keywords\ArrayKeywords;

class WriterTest extends \PHPUnit_Framework_TestCase
{

    private $keywords;

    public function setUp() {
        $this->keywords = new ArrayKeywords(array(
                    'en' => array(
                        'feature' => 'Feature',
                        'background' => 'Background',
                        'scenario' => 'Scenario',
                        'scenario_outline' => 'Scenario Outline|Scenario Template',
                        'examples' => 'Examples|Scenarios',
                        'given' => 'Given',
                        'when' => 'When',
                        'then' => 'Then',
                        'and' => 'And',
                        'but' => 'But'
                    )
                ));
    }

    /**
     * @group writer
     */
    public function testWriteTags() {
        $writer = new Writer($this->keywords);
        $this->assertEquals('abc', $writer->writeText('abc'));
    }

}
