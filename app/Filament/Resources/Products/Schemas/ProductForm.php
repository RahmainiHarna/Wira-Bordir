<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_produk')
                    ->required(),
                TextInput::make('id_produk')
                    ->required(),
                TextInput::make('harga_produk')
                    ->required()
                    ->numeric(),
            ]);
    }
}
