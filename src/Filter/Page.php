<?php
declare(strict_types=1);

namespace PayNL\Sdk\Filter;

/**
 * Class Page
 *
 * @package PayNL\Sdk\Filter
 */
class Page extends AbstractScalarFilter
{
    public function getName(): string
    {
        return 'page';
    }
}
