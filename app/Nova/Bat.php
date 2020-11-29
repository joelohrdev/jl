<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasOneThrough;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;

class Bat extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Bat::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $group = 'Softball';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            BelongsTo::make('Player'),
            BelongsTo::make('Opponent'),
            Number::make('Plate Appearances', 'pa'),
            Number::make('At Bats', 'ab'),
            Number::make('Hits', 'h'),
            Number::make('Singles', '1b'),
            Number::make('Doubles', '2b'),
            Number::make('Tripels', '3b'),
            Number::make('Home Runs', 'hr'),
            Number::make('Runs Batted In', 'rbi'),
            Number::make('Runs Scored', 'r'),
            Number::make('Hit by Pitch', 'hbp'),
            Number::make('Reached on Error', 'roe'),
            Number::make('Hit into Fielder\'s Choice', 'fc'),
            Number::make('Batter Advances on Catcher\'s Interference', 'ci'),
            Number::make('Base on Balls (Walk)', 'bb'),
            Number::make('Strikeouts', 'so'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
