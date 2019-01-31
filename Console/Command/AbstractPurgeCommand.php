<?php
/**
 * File: AbstractPurgeCommand.php
 *
 * @author Maciej Sławik <maciej.slawik@lizardmedia.pl>
 * @copyright Copyright (C) 2018 Lizard Media (http://lizardmedia.pl)
 */

namespace LizardMedia\VarnishWarmer\Console\Command;

use Symfony\Component\Console\Command\Command;
use LizardMedia\VarnishWarmer\Helper\CacheCleaner;
use Magento\Framework\App\State;

/**
 * Class AbstractPurgeCommand
 * @package LizardMedia\VarnishWarmer\Console\Command
 */
class AbstractPurgeCommand extends Command
{
    /**
     * @var string
     */
    const STORE_VIEW_ID = 'store';

    /**
     * @var CacheCleaner
     */
    protected $cacheCleaner;

    /**
     * PurgeAllCommand constructor.
     * @param State $state
     * @param CacheCleaner $cacheCleaner
     * @param null $name
     */
    public function __construct(
        State $state,
        CacheCleaner $cacheCleaner,
        $name = null
    ) {
        $this->cacheCleaner = $cacheCleaner;
        parent::__construct($name);
    }
}
