<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.theme_page_layouts' shared service.

return $this->services['prestashop.core.form.choice_provider.theme_page_layouts'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ThemePageLayoutsChoiceProvider(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->theme);
