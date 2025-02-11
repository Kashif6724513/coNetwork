<?php

namespace App\Providers;

use App\Repository\interfaces\StudentRepositoryInterface;
use App\Repository\interfaces\StudentsRepositoryInterfaces;
use App\Repository\StudentRepository;
use App\Repository\StudentsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(StudentsRepositoryInterfaces::class, StudentsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
