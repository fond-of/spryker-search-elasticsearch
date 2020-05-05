<?php

namespace FondOfSpryker\Zed\SearchElasticsearch;

use Codeception\Test\Unit;

class SearchElasticsearchConfigTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\SearchElasticsearch\SearchElasticsearchConfig
     */
    protected $searchElaticsearchConfig;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->searchElaticsearchConfig = $this->getMockBuilder(SearchElasticsearchConfig::class)
            ->onlyMethods(['get'])
            ->getMock();
    }

    /**
     * @return void
     */
    public function testGetJsonSchemaDefinitionDirectories(): void
    {
        $defaultPaths = $this->searchElaticsearchConfig->getJsonSchemaDefinitionDirectories();
        $this->assertNotContains('fond-of-spryker', $defaultPaths);
    }
}
