<?php

namespace App\Console\Commands\Tenant;

use App\Tenant\ManagerTenant;
use Illuminate\Console\Command;

class TenantMigrations extends Command
{

    private $tenant;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenants:migrations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa as Migrations dos domínios';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ManagerTenant $tenant)
    {
        parent::__construct();

        $this->tenant = $tenant;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
