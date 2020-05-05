<?php

namespace FondOfSpryker\Zed\SearchElasticsearch;

use Spryker\Zed\SearchElasticsearch\SearchElasticsearchConfig as BaseSearchElasticsearchConfig;

class SearchElasticsearchConfig extends BaseSearchElasticsearchConfig
{
    /**
     * @api
     *
     * @return array
     */
    public function getJsonSchemaDefinitionDirectories(): array
    {
        $directories = parent::getJsonSchemaDefinitionDirectories();

        $directory = sprintf('%s/vendor/fond-of-spryker/*/src/*/Shared/*/Schema/', APPLICATION_ROOT_DIR);
        if (glob($directory, GLOB_NOSORT | GLOB_ONLYDIR)) {
            $pyzDirectory = array_pop($directories);
            $directories[] = $directory;
            $directories[] = $pyzDirectory;
        }

        return $directories;
    }
}
