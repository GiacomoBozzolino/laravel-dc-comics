@extends('layouts.app')

@section('content')

<main>
    <div >
        <img id="jumbo"  class="flex" src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" >
    </div>
    <div class="blue">
        <div class="container  ">
            <div class="row height  pb-3"> 
                <div class="position-relative">
                    <div class="thumbnail">
                        <img id="thumb" src="{{ $comics ->thumb}}" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    {{-- SEZIONE DESCRIZIONE FUMETTO --}}
    <div class="container pb-5">
        <div class="row">
            <div class="col-8">
                <h1>
                    {{$comics->title}}
                </h1>
                <div class="d-flex justify-content-between bg-success  border-bottom border-dark text-white">
                    <div class="d-flex justify-content-between w-75 py-3">
                        <div class="ps-1">
                            U.S Price: {{$comics->price}}
                        </div>
                        <div>
                            AVAILABLE
                        </div>
                    </div>
                    <div class=" p-3  border-start border-dark">
                        Check Aviability
                    </div>
                </div>
                
                <div>
                    {{$comics->description}}
                </div>
            </div>
            <div class="col-4">
                <div class="text-end">
                    <div >
                        ADVERTISEMENT
                    </div>
                    <div>
                        <img id="thumb" src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>  
    </div>    
    <div class="table-bg">
        {{-- SEZIONE TABELLE --}}
        <div class="container pb-3">
            <div class="row">
                <div class="col-6">
                    <table >
                        <thead>
                            <tr >
                                <th class="fs-5 py-3">Talent</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=" fs-6">Art by:</th>
                                <td class="fw-semibold">
                                    {{$comics->artists}}
                                </td>
                            </tr>
                            <tr>
                                <th class="fs-6">
                                    Art by:
                                </th>
                                <td
                                    class=" fw-semibold"> {{$comics->writers}} 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <table class=" w-100">
                        <thead>
                            <tr>
                                <th class="fs-5 py-3">Specs</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=" fs-6">Series:</th>
                                <td >
                                    {{$comics->series}}
                                </td>
                            </tr>
                            <tr>
                                <th class="fs-6">
                                U.S. Price: 
                                </th>
                                <td>
                                {{$comics->price}}
                                </td>
                            </tr>
                            <tr>
                                <th class="fs-6">
                                On Sale Date:
                                </th>
                                <td>
                                {{$comics->sale_date}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>
    </div> 
    <div class="table-bg">
        <div class="container">
            <div class="row py-0 ">
                <div class="col-12">
                    <ul class="d-flex text-secondary bottom-menu justify-content-center m-0 ">
                        <li >
                            <a class="d-flex align-items-center text-secondary p-2 border-end border-start" href="#">
                                <div class="px-2"> DIGITAL COMICS</div>
                                <img  class="px-2 " src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                            </a>
                        </li>   
                        <li >
                            <a class="d-flex align-items-center text-secondary p-2 border-end" href="#">
                                <div class="px-2"> SHOP DC</div>
                                <img  class="px-2" src="{{ Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
                            </a>
                        </li>   
                        <li >
                            <a class="d-flex align-items-center text-secondary p-2 border-end" href="#">
                                <div class="px-2"> COMIC SHOP LOCATOR</div>
                                <img  class="px-2" src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
                            </a>
                        </li>   
                        <li >
                            <a class="d-flex align-items-center text-secondary p-2 border-end" href="#">
                                <div class="px-2">SUBSCRIPTIONS</div>
                                <img  class="px-2" src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
                            </a>
                        </li>   
                        
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</main>


  


@endsection