<?php
/**
 * Created by PhpStorm.
 * User: isaias
 * Date: 22/11/19
 * Time: 21:23
 */

namespace App\Tenant;

use App\Models\Company;
use Illuminate\Support\Facades\DB;

class ManagerTenant
{

    /**
     * Seta a conexão dinamicamente. Com base no domínio
     *
     * @param Company $company
     */
    public  function setConnection(Company $company)
    {
        /**
         * Limpa os dados de alguma conexão existente.
         */
        DB::purge('domain_database');

        /**
         * Seta os novos dados da conexão
         */
        config()->set('database.connections.domain_database.host', $company->hostname);
        config()->set('database.connections.domain_database.database', $company->database);
        config()->set('database.connections.domain_database.username', $company->username);
        config()->set('database.connections.domain_database.password', $company->password);

        /**
         * Reconecta ao banco com os novos dados de conexão
         */
        DB::reconnect('domain_database');
    }

}
