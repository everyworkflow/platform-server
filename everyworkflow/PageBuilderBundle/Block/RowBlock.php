<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

declare(strict_types=1);

namespace EveryWorkflow\PageBuilderBundle\Block;

use EveryWorkflow\PageBuilderBundle\Block\Trait\ParentWithChildBlockTrait;

class RowBlock extends AbstractBlock implements RowBlockInterface
{
    use ParentWithChildBlockTrait;

    protected string $blockType = 'row_block';

    public function toArray(): array
    {
        $data = parent::toArray();

        $blockData = [];
        foreach ($this->getBlocks() as $block) {
            if ($block instanceof AbstractBlockInterface) {
                $blockData[] = $block->toArray();
            }
        }
        if (count($blockData)) {
            $data[self::KEY_BLOCK_DATA] = $blockData;
        }

        return $data;
    }
}
