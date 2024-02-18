<?php

namespace ArvanVOD\ArvanVod\Api\V2_0;

use ArvanVOD\ArvanVod\Config\Routes;

final class UserDomain extends BaseClass
{
    public function createDomain(array $subdomain)
    {
        $result = $this->createPostRequest(Routes::CREATE_USER_DOMAIN, $subdomain);

        return $result;
    }

    public function getDomain(array $options = null)
    {
        $result = $this->createGetRequest(Routes::GET_USER_DOMAIN, $options);

        return $result;
    }
}
