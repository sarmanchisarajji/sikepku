<?php

namespace App\Providers;

use App\Models\Users;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function (Users $users) {
            return $users->user_type == 'admin';
        });
        Gate::define('mahasiswa', function (Users $users) {
            return $users->user_type == 'mahasiswa';
        });
        Gate::define('dosen', function (Users $users) {
            return $users->user_type == 'dosen';
        });
        Gate::define('mitra', function (Users $users) {
            return $users->user_type == 'mitra';
        });
        Gate::define('tenaga_kependidikan', function (Users $users) {
            return $users->user_type == 'tenaga_kependidikan';
        });
        Gate::define('alumni', function (Users $users) {
            return $users->user_type == 'alumni';
        });
        Gate::define('pengguna_lulusan', function (Users $users) {
            return $users->user_type == 'pengguna_lulusan';
        });
    }
}
