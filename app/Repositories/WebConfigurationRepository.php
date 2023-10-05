<?php

namespace App\Repositories;

use App\Interfaces\WebConfigurationRepositoryInterface as InterfacesWebConfigurationRepositoryInterface;
use App\Models\WebConfiguration;

class WebConfigurationRepository implements InterfacesWebConfigurationRepositoryInterface
{
    public function getWebConfiguration()
    {
        return WebConfiguration::first();
    }

    public function updateWebConfiguration(array $data)
    {
        $webConfiguration = WebConfiguration::first();

        if (isset($data['logo'])) {
            $logo = $data['logo']->store('web-configurations', 'public');
            $data['logo'] = $logo;
        }

        return $webConfiguration->update($data);
    }
}
