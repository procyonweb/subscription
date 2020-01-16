<?php declare(strict_types=1);

namespace Procyonweb\Subscription;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Procyonweb\Subscription\Subscription
 */
class SubscriptionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'subscription';
    }
}
