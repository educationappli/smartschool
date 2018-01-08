<?php
namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::macro('selectWeekDay', function () {
            $days = [
                'monday'    => 'Monday',
                'tuesday'   => 'Tuesday',
                'wednesday' => 'Wednesday',
                'thursday'  => 'Thursday',
                'friday'    => 'Friday',
                'saturday'  => 'Saturday',
                'sunday'    => 'Sunday',
            ];
            return Form::select('day', $days, null, ['class' => 'form-control']);
        });

	Form::macro('gender', function ($selectedValue = NULL) {
	    $genderList = [
		1 => 'Male',
		2 => 'Female'
	    ];
	    $ret = '';
	    foreach ($genderList as $k => $v) {
		$ret .= '<input id="gender-' . $k . '"';
		if ($k == $selectedValue) {
			$ret .= ' checked="checked"'; 
		}
		$ret .= ' name="gender" type="radio" value="' . $k . '">';
		$ret .= '<label for="gender-' . $k . '">' . $v . '</label>';
	    }	
	    return $ret;
	});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
