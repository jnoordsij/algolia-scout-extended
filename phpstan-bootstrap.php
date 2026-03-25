<?php

declare(strict_types=1);

use Laravel\Scout\Scout;

if (! class_exists('Algolia\ScoutExtended\Engines\BaseAlgoliaEngine')) {
    if (version_compare(Scout::VERSION, '10.11.6', '>=')) {
        class_alias(\Laravel\Scout\Engines\Algolia4Engine::class, 'Algolia\ScoutExtended\Engines\BaseAlgoliaEngine');
    } else {
        class_alias(\Laravel\Scout\Engines\AlgoliaEngine::class, 'Algolia\ScoutExtended\Engines\BaseAlgoliaEngine');
    }
}
