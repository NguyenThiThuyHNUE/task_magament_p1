<?php

namespace App\Providers;

use App\Repository\BillRerositoryInterface;
use App\Repository\FeedbackRepositoryInterface;
use App\Repository\CustomerRepositoryInterface;
use App\Repository\impl\BillRepository;
use App\Repository\impl\FeedbackRepository;
use App\Repository\impl\CustomerRepository;
use App\Repository\impl\ProductRepository;
use App\Repository\ProductRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use App\Repository\impl\UserRepository;
use App\Service\BillServiceInterface;
use App\Service\FeedbackServiceInterface;
use App\Service\CustomerServiceInterface;
use App\Service\impl\BillService;
use App\Service\impl\FeedbackService;
use App\Service\impl\CustomerService;
use App\Service\impl\ProductService;
use App\Service\ProductServiceInterface;
use App\Service\UserServiceInterface;
use App\Service\impl\UserService;
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
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(BillRerositoryInterface::class, BillRepository::class);
        $this->app->singleton(BillServiceInterface::class, BillService::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->singleton(CustomerServiceInterface::class,CustomerService::class);
        $this->app->singleton(FeedbackServiceInterface::class,FeedbackService::class);
        $this->app->singleton(FeedbackRepositoryInterface::class,FeedbackRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}
