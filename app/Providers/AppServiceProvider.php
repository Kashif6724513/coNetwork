<?php

namespace App\Providers;

use App\Repository\CustomerRepository;
use App\Repository\importExcelRepository;
use App\Repository\interfaces\CustomerRepositoryInterface;
use App\Repository\interfaces\importExcelInterface;
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
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(importExcelInterface::class, importExcelRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
