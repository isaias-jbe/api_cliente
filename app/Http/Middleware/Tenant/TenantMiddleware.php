<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Models\Company;
use App\Tenant\ManagerTenant;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $company = $this->getCompany($request->getHost());

        if(! $company)
            abort(404, 'URL Não encontrada');

        app(ManagerTenant::class)->setConnection($company);

        return $next($request);
    }


    /**
     * Busca os dados da Empresa baseado na no domínio
     *
     * @param string $host
     * @return mixed
     */
    public function getCompany(string $host)
    {
        return Company::where('domain', $host)->first();
    }
}
