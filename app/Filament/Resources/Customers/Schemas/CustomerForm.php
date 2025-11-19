<?php

namespace App\Filament\Resources\Customers\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    TextInput::make('nama_customer')
                    ->label('Nama')
                    ->placeholder('Masukkan Nama Customer...')
                    ->required(),
            TextInput::make('kode_customer')
                ->label('Kode')
                ->numeric()
                ->required(),
            TextInput::make('email_customer')
                ->label('Email')
                ->required(),
            TextInput::make('alamat_customer')
                ->label('Alamat')
                ->required(),
            TextInput::make('telepon_customer')
                ->label('Telepon')
                ->numeric()
                ->required(),
            ]);
    }
}
