<?php

namespace App\Providers;
// use Illuminate\Support\Facades\Gate;

use App\Models\Formulir;
use App\Policies\FormulirPolicy;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Support\Facades\Gate;
 

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Formulir::class => FormulirPolicy::class,
    ];

    

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     $this->registerPolicies();

    //     Gate::define('user', function (User $user, Formulir $formulir) {
    //         return $user->id === $formulir->user_id;
    //     });
    // }
}
