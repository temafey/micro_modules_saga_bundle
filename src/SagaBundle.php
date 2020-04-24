<?php

declare(strict_types=1);

namespace MicroModule\SagaBundle;

use MicroModule\SagaBundle\DependencyInjection\SagaBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SagaBundle.
 *
 * @category MicroModule\SagaBundle
 */
class SagaBundle extends Bundle
{
    /**
     * @return SagaBundleExtension
     */
    public function getContainerExtension(): SagaBundleExtension
    {
        return new SagaBundleExtension();
    }
}
