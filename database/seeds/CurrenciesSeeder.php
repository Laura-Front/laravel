<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            ['Australia Dollar', 'AUD', 2.099, 2.010],
            ['Bahrain Dinars', 'BHD', 0.587, 0.552],
            ['Barbados Dollar', 'BBD', 3.158, 2.883],
            ['Brazil Reals', 'BRL', 6.080, 5.274],
            ['Bulgaria Lev', 'BGN', 2.829, 2.609],
            ['Canada Dollar', 'CAD', 2.049, 1.977],
            ['Chile Pesos', 'CLP', 1139.048, 980.111],
            ['China Yuan Renminbi', 'CNY', 10.050, 9.267],
            ['Croatia Kuna', 'HRK', 11.205, 10.089],
            ['Czech Koruna', 'CZK', 39.182, 35.958],
            ['Denmark Kroner', 'DKK', 10.617, 10.089],
            ['Dominican Republic Pesos', 'DOP', 73.668, 63.389],
            ['East Caribbean Dollar', 'XCD', 4.264, 3.876],
            ['Egypt Pound', 'EGP', 11.873, 11.838],
            ['Euro', 'EUR', 1.399, 1.365],
            ['Hong Kong Dollar', 'HKD', 12.062, 11.319],
            ['Hungarian Forint', 'HUF', 453.446, 413.960],
            ['Iceland Kronur', 'ISK', 202.615, 185.975],
            ['India Rupees', 'INR', 110.784, 89.030],
            ['Indonesia Rupiahs', 'IDR', 22579.609, 19020.980],
            ['Israel New Shekel', 'ILS', 5.971, 5.503],
            ['Jamaica Dollar', 'JMD', 189.360, 168.719],
            ['Japan Yen', 'JPY', 189.303, 182.326],
            ['Jordan Dinar', 'JOD', 1.109, 1.030],
            ['Kenya Shillings', 'KES', 165.692, 144.113],
            ['Malaysia Ringgit', 'MYR', 6.616, 6.101],
            ['Mauritius Rupees', 'MUR', 57.965, 50.327],
            ['Mexico Pesos', 'MXN', 26.421, 23.628],
            ['New Zealand Dollar','NZD', 2.296, 2.182],
            ['Norway Kroner', 'NOK', 13.175, 12.500],
            ['Oman Rial', 'OMR', 0.602, 0.560],
            ['Philippines Pesos', 'PHP', 76.365, 64.999],
            ['Poland Zloty', 'PLN', 6.221, 5.736],
            ['Qatar Riyal', 'QAR', 5.680, 5.317],
            ['Romanian Leu', 'RON', 6.637, 5.762],
            ['Saudi Arabia Riyal', 'SAR', 5.840, 5.472],
            ['Singapore Dollar', 'SGD', 2.176, 2.047],
            ['South Africa Rand', 'ZAR', 22.360, 21.036],
            ['South Korea Won', 'KRW', 1838.719, 1661.006],
            ['Sweden Kroner','SEK', 13.146, 12.537],
            ['Switzerland Franc','CHF', 1.536, 1.474],
            ['T & T Dollar', 'TTD', 10.157, 8.997],
            ['Taiwan New Dollars', 'TWD', 52.892, 45.922],
            ['Thailand Baht', 'THB', 56.293, 51.908],
            ['Turkey Lira', 'TRY', 4.482, 4.199],
            ['UAE Dirhams', 'AED', 5.689, 5.406],
            ['United States Dollar', 'USD', 1.529, 1.485],
            ['Vietnam Dong', 'VND', 37180.068, 30558.960],
            ['Russia Rubles', 'RUB', 79.068, 70.960],
        ];

        DB::table('currencies')->truncate();

        foreach ($currencies as $value) {
            DB::table('currencies')->insert([
                'title' => $value[0],
                'code' => $value[1],
                'rate_buy' => $value[2],
                'rate_sell' => $value[3],
            ]);
        }
    }
}
