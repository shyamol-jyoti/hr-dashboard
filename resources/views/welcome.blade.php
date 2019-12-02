<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css')}}">

    </head>
    <body>
        <div id="app">
            <div class="mx-auto">
                <header class="py-6 bg-orange-100 px-16 shadow">
                    <h1 class="text-2xl text-orange-700 font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather inline mr-2 feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>SJD Bar</h1>
                </header>
                <main class="flex my-8 px-16">
                    <aside class="w-1/6">
                        <section>
                            <h1 class="uppercase text-base text-orange-500 font-bold mb-3">The Brand</h1>
                            <ul class="text-gray-700 ml-4">
                                <li class="mb-2"><router-link to="/regular-whiskey" exact>Regular Whisky</router-link></li>
                                <li class="mb-2"><router-link to="/premium-whiskey">Premium Whisky</router-link></li>                            
                                <li class="mb-2"><router-link to="/rum">Rum</router-link></li>
                                <li class="mb-2"><router-link to="/beer">Beer</router-link></li>
                                <li class="mb-2"><router-link to="/vodka">Vodka</router-link></li>
                                <li class="mb-2"><router-link to="/wine">Wine</router-link></li>                                
                            </ul>
                        </section>
                        <section class="mt-8">
                            <h1 class="uppercase text-base text-orange-500 font-bold mb-2">Cocktails</h1>
                            <ul class="text-gray-700 ml-4">
                                <li class="mb-2"><router-link to="/irish-cocktails">Irish Cocktails</router-link></li>
                                <li class="mb-2"><router-link to="/shooters">Shooters</router-link></li>
                                <li class="mb-2"><router-link to="/house">House Speciality</router-link></li>
                                <li class="mb-2"><router-link to="/local">Local Bottled Beer</router-link></li>
                            </ul>
                        </section>
                        <section class="mt-8">
                            <h1 class="uppercase text-base text-orange-500 font-bold mb-2">Snacks</h1>
                            <ul class="text-gray-700 ml-4">
                                <li class="mb-2"><router-link to="/chicken">Chicken Items</router-link></li>
                                <li class="mb-2"><router-link to="/pork">Pork Items</router-link></li>
                                <li class="mb-2"><router-link to="/veg">Veg Items</router-link></li>
                                <li class="mb-2"><router-link to="/complementary">Complementary Items</router-link></li>
                            </ul>
                        </section>
                        
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
