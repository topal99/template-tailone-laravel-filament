<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;
    //redirect to index page after create
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
        }
}
