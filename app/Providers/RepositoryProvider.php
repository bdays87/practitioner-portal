<?php

namespace App\Providers;

use App\implementations\_accounttypeRepository;
use App\implementations\_applicationfeeRepository;
use App\implementations\_applicationtypeRepository;
use App\implementations\_bankRepository;
use App\implementations\_banktranactionRepository;
use App\implementations\_certificatetypeRepository;
use App\implementations\_cityRepository;
use App\implementations\_currencyRepository;
use App\implementations\_customercontactRepository;
use App\implementations\_customeremploymentRepository;
use App\implementations\_customerprofessionRepository;
use App\implementations\_customerRepository;
use App\implementations\_customertypeRepository;
use App\implementations\_discountRepository;
use App\implementations\_documentRepository;
use App\implementations\_employmentlocationRepository;
use App\implementations\_employmentstatusRepository;
use App\implementations\_exchangerateRepository;
use App\implementations\_generalutilsRepository;
use App\implementations\_invoiceRepository;
use App\implementations\_manualpaymentRepository;
use App\implementations\_mycdpRepository;
use App\implementations\_nationalityRepository;
use App\implementations\_otherserviceRepository;
use App\implementations\_paymentchannelRepository;
use App\implementations\_paynowRepository;
use App\implementations\_penaltiesRepository;
use App\implementations\_permissionRepository;
use App\implementations\_professionRepository;
use App\implementations\_provinceRepository;
use App\implementations\_qualificationcategoryRepository;
use App\implementations\_qualificationlevelRepository;
use App\implementations\_registertypeRepository;
use App\implementations\_registrationfeeRepository;
use App\implementations\_roleRepository;
use App\implementations\_settlementsplitRepository;
use App\implementations\_studentRepository;
use App\implementations\_submoduleRepository;
use App\implementations\_suspenseRepository;
use App\implementations\_systemmoduleRepository;
use App\implementations\_tireRepository;
use App\implementations\_userRepository;
use App\implementations\_applicationsessionRepository;
use App\interfaces\iaccounttypeInterface;
use App\Interfaces\iapplicationfeeInterface;
use App\Interfaces\iapplicationsessionInterface;
use App\Interfaces\iapplicationtypeInterface;
use App\Interfaces\ibankInterface;
use App\Interfaces\ibanktransactionInterface;
use App\Interfaces\icertificatetypeInterface;
use App\Interfaces\icityInterface;
use App\Interfaces\icurrencyInterface;
use App\Interfaces\icustomercontactInterface;
use App\Interfaces\icustomeremploymentInteface;
use App\Interfaces\icustomerInterface;
use App\Interfaces\icustomerprofessionInterface;
use App\Interfaces\icustomertypeInterface;
use App\Interfaces\idiscountInterface;
use App\Interfaces\idocumentInterface;
use App\Interfaces\iemploymentlocationInterface;
use App\Interfaces\iemploymentstatusInterface;
use App\Interfaces\iexchangerateInterface;
use App\Interfaces\igeneralutilsInterface;
use App\Interfaces\imanualpaymentInterface;
use App\Interfaces\imycdpInterface;
use App\Interfaces\inationalityInterface;
use App\Interfaces\invoiceInterface;
use App\Interfaces\iotherserviceInterface;
use App\Interfaces\ipaymentchannelInterface;
use App\Interfaces\ipaynowInterface;
use App\Interfaces\ipenaltiesInterface;
use App\Interfaces\ipermissionInterface;
use App\Interfaces\iprofessionInterface;
use App\Interfaces\iprovinceInterface;
use App\Interfaces\iqualificationcategoryInterface;
use App\Interfaces\iqualificationlevelInterface;
use App\Interfaces\iregistertypeInterface;
use App\Interfaces\iregistrationfeeInterface;
use App\Interfaces\iroleInterface;
use App\Interfaces\isettlementsplitInterface;
use App\Interfaces\istudentInterface;
use App\Interfaces\isubmoduleInterface;
use App\Interfaces\isuspenseInterface;
use App\Interfaces\isystemmoduleInterface;
use App\Interfaces\itireInterface;
use App\Interfaces\iuserInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(iaccounttypeInterface::class, _accounttypeRepository::class);
        $this->app->bind(iroleInterface::class, _roleRepository::class);
        $this->app->bind(iuserInterface::class, _userRepository::class);
        $this->app->bind(ipermissionInterface::class, _permissionRepository::class);
        $this->app->bind(isystemmoduleInterface::class, _systemmoduleRepository::class);
        $this->app->bind(isubmoduleInterface::class, _submoduleRepository::class);
        $this->app->bind(iregistertypeInterface::class, _registertypeRepository::class);
        $this->app->bind(iqualificationlevelInterface::class, _qualificationlevelRepository::class);
        $this->app->bind(iqualificationcategoryInterface::class, _qualificationcategoryRepository::class);
        $this->app->bind(inationalityInterface::class, _nationalityRepository::class);
        $this->app->bind(iprovinceInterface::class, _provinceRepository::class);
        $this->app->bind(icityInterface::class, _cityRepository::class);
        $this->app->bind(iemploymentstatusInterface::class, _employmentstatusRepository::class);
        $this->app->bind(iemploymentlocationInterface::class, _employmentlocationRepository::class);
        $this->app->bind(inationalityInterface::class, _nationalityRepository::class);
        $this->app->bind(icustomertypeInterface::class, _customertypeRepository::class);
        $this->app->bind(idocumentInterface::class, _documentRepository::class);
        $this->app->bind(itireInterface::class, _tireRepository::class);
        $this->app->bind(iprofessionInterface::class, _professionRepository::class);
        $this->app->bind(icurrencyInterface::class, _currencyRepository::class);
        $this->app->bind(iexchangerateInterface::class, _exchangerateRepository::class);
        $this->app->bind(isettlementsplitInterface::class, _settlementsplitRepository::class);
        $this->app->bind(ipaymentchannelInterface::class, _paymentchannelRepository::class);
        $this->app->bind(iregistrationfeeInterface::class, _registrationfeeRepository::class);
        $this->app->bind(iapplicationfeeInterface::class, _applicationfeeRepository::class);
        $this->app->bind(ipenaltiesInterface::class, _penaltiesRepository::class);
        $this->app->bind(idiscountInterface::class, _discountRepository::class);
        $this->app->bind(iotherserviceInterface::class,_otherserviceRepository::class);
        $this->app->bind(ibanktransactionInterface::class,_banktranactionRepository::class);
        $this->app->bind(ibankInterface::class,_bankRepository::class);
        $this->app->bind(icustomerInterface::class, _customerRepository::class);
        $this->app->bind(icustomercontactInterface::class, _customercontactRepository::class);
        $this->app->bind(icustomeremploymentInteface::class, _customeremploymentRepository::class);
        $this->app->bind(isuspenseInterface::class, _suspenseRepository::class);
        $this->app->bind(ipaynowInterface::class, _paynowRepository::class);
        $this->app->bind(igeneralutilsInterface::class, _generalutilsRepository::class);
        $this->app->bind(imanualpaymentInterface::class, _manualpaymentRepository::class);
        $this->app->bind(icustomerprofessionInterface::class, _customerprofessionRepository::class);
        $this->app->bind(invoiceInterface::class, _invoiceRepository::class);
        $this->app->bind(icertificatetypeInterface::class, _certificatetypeRepository::class);
        $this->app->bind(istudentInterface::class, _studentRepository::class);
        $this->app->bind(iapplicationtypeInterface::class, _applicationtypeRepository::class);
        $this->app->bind(imycdpInterface::class, _mycdpRepository::class);
        $this->app->bind(iapplicationsessionInterface::class, _applicationsessionRepository::class);
    
    }
}
