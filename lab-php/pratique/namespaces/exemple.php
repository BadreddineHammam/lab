<?php

declare(strict_types=1);

namespace LabPhp\Catalog {
    final class Item
    {
        public function __construct(private readonly string $name)
        {
        }

        public function label(): string
        {
            return 'Élément du catalogue : ' . $this->name;
        }
    }
}

namespace LabPhp\Inventory {
    final class Item
    {
        public function __construct(private readonly string $name)
        {
        }

        public function label(): string
        {
            return 'Élément du stock : ' . $this->name;
        }
    }
}

namespace {
    use LabPhp\Catalog\Item as CatalogItem;
    use LabPhp\Inventory\Item as InventoryItem;

    echo (new CatalogItem('Carnet de croquis'))->label(), PHP_EOL;
    echo (new InventoryItem('Toile'))->label(), PHP_EOL;
}
