<?php

namespace App\Filament\Resources\Customers;

use App\Filament\Resources\Customers\Pages\CreateCustomer;
use App\Filament\Resources\Customers\Pages\EditCustomer;
use App\Filament\Resources\Customers\Pages\ListCustomers;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Customer;
use Filament\Resources\Resource;
use BackedEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use UnitEnum;
use Filament\Forms\Components\TextInput;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Kelola Customer';
    protected static UnitEnum|string|null $navigationGroup = 'Kelola';
    protected static ?string $label = 'kelola customer';



    protected static ?string $recordTitleAttribute = 'Customer';

    public static function form(schema $schema): Schema
    {
        return $schema
        ->schema([
            TextInput::make('nama_customer')
                ->label('Nama')
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

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('nama_customer')
                ->searchable()
                ->sortable()
                ->label('Nama'),
                TextColumn::make('kode_customer')
                ->copyable()
                ->copyMessage('Kode Berhasil Disalin')
                ->searchable()
                ->sortable()
                ->label('Kode'),
                TextColumn::make('email_customer')
                ->searchable()
                ->sortable()
                ->label('Email'),
                TextColumn::make('alamat_customer')
                ->searchable()
                ->sortable()
                ->label('Alamat'),
                TextColumn::make('telepon_customer')
                ->searchable()
                ->sortable()
                ->label('Telepon'),
            ])
            ->filters([
                //
            ])
            ->actions([
        
                ])
            ->bulkActions([
            ]);
                
        
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomers::route('/'),
            'create' => CreateCustomer::route('/create'),
            'edit' => EditCustomer::route('/{record}/edit'),
        ];
    }
}
