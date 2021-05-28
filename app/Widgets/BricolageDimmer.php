<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;

class BricolageDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Voyager::model('User')->count();
        $string = 'Bricolage(s) à domicile';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-hammer',
            // 'title'  => "{$count} {$string}",
            'title' =>$string,
            // 'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'text'   =>'Retrouvez ici vos demandes de réservations bricolage',
            'button' => [
                'text' =>'Voir les demandes de service bricolage',
                'link' => route('voyager.bricolages.index'),
            ],
            'image' =>asset('images/bricolages_background.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}