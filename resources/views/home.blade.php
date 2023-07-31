@extends('layouts.app')


@section('content')
    


    {{-- MAIN --}}
    <main >
        <div >
            <img id="jumbo"  class="flex" src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" >
        </div>
        {{-- SEZIONE FUMETTI --}}
        <div class="black">
            <div class="container ">
                <div class="row pb-3"> 
                    <div class="position-relative">
                        <div id="series">CURRENT SERIES</div>
                    </div>
                    @include('comics.index')
                    <div class="col-12 d-flex justify-content-center">
                        <button >LOAD MORE</button>
                    </div>
                </div>   
            </div>
        </div>
        {{-- FINE SEZIONE FUMETTI --}}
        <div class="blue">
            <div class="container blue-content ">
                <ul class="d-flex">
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                            <div> DIGITAL COMICS</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
                            <div> DIGITAL MERCHANDISE</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
                            <div> SUBSCRIPTION</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
                            <div>COMIC SHOP LOCATOR</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">
                            <div>DC POWER VISA</div>
                        </a>
                    </li>   
                </ul>
            </div>
         </div>  
    </main>

   

@endsection

