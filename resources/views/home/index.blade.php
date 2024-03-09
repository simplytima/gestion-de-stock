@extends('layout')

@section('content')



<x-navbar />

<div class="containerContent">
    <div class="containerHome active">
        <div class="header">
            <p>المبيعات</p>
            <ion-icon onclick="toggleMenu()" name="menu-outline"></ion-icon>
        </div>
        <div class="search">
            <div class="date">
                <label for="">Année</label>
                <select name="" id="">
                    <option value="">Tous</option>
                    <option value="">2024</option>
                    <option value="">2023</option>
                    <option value="">2022</option>
                </select>
                <label for="">Mois</label>
                <select name="" id="">
                    <option value="">Tous</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                </select> 
                <label for="">Jour</label>
                <input type="text">
                                               
            </div>

            <div class="searchInput">
                <input type="text">
            </div>


            
        </div>
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <th>Nom de marchandise</th>
                        <th>Quantitée</th>
                        <th>Prix (DH)</th>
                        <th>Totale</th>
                        <th>Profit</th>
                        <th>Vendeur</th>
                        <th>L'acheteur</th>
                        <th>Date de vente</th>
                        <th>Facture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>la vache qui rit</td>
                        <td>2</td>
                        <td>9,00</td>
                        <td>18,00</td>
                        <td>4,00</td>
                        <th>Fatima</td>
                        <td>-</td>
                        <td>09-03-2024</td>
                        <td>
                            <ion-icon name="print-outline"></ion-icon>
                        </td>
                    </tr>
                </tbody>
            </table>   
        </div>


    </div>
    <x-side />
 
</div>




{{-- <a href="{{route('logOut')}}">Log Out</a>

@foreach ($emps as $emp)
    <p>{{$emp->firstName}}</p>
@endforeach --}}

    
@endsection