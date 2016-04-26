<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Conekta;
use Conekta_Charge;

class ConektaServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    public static function sandbox()
    {

        $api = config('services.conekta.sandbox_api');

        Conekta::setApiKey($api);
        Conekta::setLocale('es');

        return Conekta::class;
    }

    public static function sandboxCargoConekta($cargo)
    {

        $response = [
            'status'      => false,
            'transaction' => false
        ];

        if(is_array($cargo))
        {
            self::sandbox();
            $cargo    = Conekta_Charge::create($cargo);
            $response = [
                'status'      => $cargo->status,
                'transaction' => $cargo
            ];
        }

        return $response;

    }

    public static function sandboxCargo()
    {
        $random  = rand(1,5000);

        $cargo = [
            'description'=> 'Stogies',
            'reference_id'=> '9839-wolf_pack_____',
            'amount'=> $random,
            'currency'=>'MXN',
            'card'=> 'tok_test_visa_4242',
            'details'=> [
                'name'=> 'Arnulfo Quimare',
                'phone'=> '403-342-0642',
                'email'=> 'logan@x-men.org',
                'customer'=> [
                    'logged_in'=> true,
                    'successful_purchases'=> 14,
                    'created_at'=> 1379784950,
                    'updated_at'=> 1379784950,
                    'offline_payments'=> 4,
                    'score'=> 9
                ],
                'line_items'=> [
                    [
                        'name'=> 'Box of Cohiba S1s',
                        'description'=> 'Imported From Mex.',
                        'unit_price'=> 20000,
                        'quantity'=> 1,
                        'sku'=> 'cohb_s1',
                        'category'=> 'food'
                    ]
                ],
                'billing_address'=> [
                    'street1'=>'77 Mystery Lane',
                    'street2'=> 'Suite 124',
                    'street3'=> null,
                    'city'=> 'Darlington',
                    'state'=>'NJ',
                    'zip'=> '10192',
                    'country'=> 'Mexico',
                    'tax_id'=> 'xmn671212drx',
                    'company_name'=>'X-Men Inc.',
                    'phone'=> '77-777-7777',
                    'email'=> 'purshasing@x-men.org'
                ]
            ]
        ];

        return self::sandboxCargoConekta($cargo);

    }

}
