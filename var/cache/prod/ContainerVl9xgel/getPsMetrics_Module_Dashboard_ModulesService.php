<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.module.dashboard.modules' shared service.

return $this->services['ps_metrics.module.dashboard.modules'] = new \PrestaShop\Module\Ps_metrics\Module\DashboardModules(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->load('getPsMetrics_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->load('getPsMetrics_Repository_ConfigurationService.php')) && false ?: '_'});
