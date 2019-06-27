<?php
namespace Application\Theme\Dreamrs;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme implements ThemeProviderInterface
{
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Dreamrs');
    }

    public function getThemeDescription()
    {
        return t('PortlandLabs Dreamrs Theme, based on ColorLib Dreamrs');
    }

    /**
     * @return array
     */
    public function getThemeAreaLayoutPresets()
    {
        return [];
    }
}
