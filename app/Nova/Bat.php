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

    public static $with = ['player', 'opponent'];

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
            ID::make(__('ID'), 'id')->hide(),
            BelongsTo::make('Player'),
            BelongsTo::make('Opponent'),
            Number::make('Plate Appearances', 'pa'),
            Number::make('At Bats', 'ab'),
            Number::make('Hits', 'h'),
            Number::make('Singles', '1b'),
            Number::make('Doubles', '2b')->hideFromIndex(),
            Number::make('Tripels', '3b')->hideFromIndex(),
            Number::make('Home Runs', 'hr')->hideFromIndex(),
            Number::make('Runs Batted In', 'rbi')->hideFromIndex(),
            Number::make('Runs Scored', 'r')->hideFromIndex(),
            Number::make('Hit by Pitch', 'hbp')->hideFromIndex(),
            Number::make('Reached on Error', 'roe')->hideFromIndex(),
            Number::make('Hit into Fielder\'s Choice', 'fc')->hideFromIndex(),
            Number::make('Batter Advances on Catcher\'s Interference', 'ci')->hideFromIndex(),
            Number::make('Base on Balls (Walk)', 'bb')->hideFromIndex(),
            Number::make('Strikeouts', 'so')->hideFromIndex(),
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
