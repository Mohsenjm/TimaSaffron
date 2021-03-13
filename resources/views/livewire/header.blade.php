<header class="bg-white  shadow-2xl  container mx-auto z-10 md:pr-4">
    <div class="container mx-auto flex justify-between">

        {{--        log--}}
        <div class="w-max pt-2">
            <img class="w-16 h-16" src="/img/icon3.png" alt="logo">
        </div>

        {{--        top menu--}}
        <div id="topMenu"
             class="container pt-2 mt-2 items-center mx-auto w-full flex flex-wrap mb-4 justify-between lg:flex xl:flex hidden">

            {{--            social menu--}}
            <div class="w-max mb-4">
                <a href="#"
                   class=" fa fa-send-o fa-2x pl-4 px-4 py-1 hover:bg-gray-600 rounded hover:text-white"></a>
                <a href="#"
                   class=" fa fa-instagram fa-2x pl-4 px-4 py-1 hover:bg-gray-600 rounded hover:text-white"></a>
                <a href="#"
                   class=" fa fa-whatsapp fa-2x pl-4 px-4 py-1 hover:bg-gray-600 rounded hover:text-white"></a>
            </div>

            {{--    search form--}}
            <div class="w-max mb-4">
                <form action="#" class="relative w-max">
                    <input type="text" class="w-96 h-10 pr-4  bg-gray-300 rounded "
                           placeholder="جستجو در تیما زعفران ...">
                    <i class="fa fa-search text-gray-500 absolute top-3 left-2"></i>
                </form>
            </div>

            {{--    contact us--}}
            <div class="w-max mb-4">
                <ul class="flex pt-2">
                    <li class="px-4 ml-4 hover:bg-gray-600 rounded hover:text-white">
                        <i class="fa fa-phone"></i>
                        <a href="#">تماس&nbsp;با&nbsp;ما</a>
                    </li>
                    <li class="px-4 hover:bg-gray-600 rounded hover:text-white">
                        <i class="fa fa-align-left"></i>
                        <a href="#">سوالات&nbsp;متداول</a>
                    </li>
                </ul>
            </div>
        </div>

        {{--        hambarger button--}}
        <div class="flex px-4 py-4 ">
            <button type="button"  id="open" onclick="openFunction()"
                    class="block lg:hidden w-9 h-9  hover:bg-gray-600 rounded ">
                <i class="fa fa-navicon fa-2x"></i>
            </button>
            <button type="button" id="close" onclick="closeFunction()"
                    class="block w-9 h-9  hover:bg-gray-600 rounded hidden">
                <i class="fa fa-close fa-2x"></i>
            </button>
        </div>
    </div>


    {{--        bottom menu--}}
    <div id="bottomMenu" class="container  mx-auto flex flex-wrap mb-4 justify-between lg:flex xl:flex hidden ">

        {{--            right menu--}}
        <div class="flex w-max mb-4 lg:mb-0 xl:mb-0 ">
            <ul class="flex flex-wrap">
                <li class="py-4"><a href="#" class="px-2 py-2  hover:bg-gray-600 rounded hover:text-white">صفحه&nbsp;اصلی</a>
                </li>
                <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">زعفران</a>
                </li>
                <li class="pr-6 px-4 py-4"><a href="#"
                                              class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">زرشک</a></li>
                <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2  hover:bg-gray-600 rounded hover:text-white">زرشک</a>
                </li>
                <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">سایر&nbsp;محصولات</a>
                </li>
                <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2  hover:bg-gray-600 rounded hover:text-white">مجوزها&nbsp;و&nbsp;تقدیرنامه</a>
                </li>
                <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">درباره&nbsp;ما</a>
                </li>
            </ul>
        </div>

        {{--            left menu--}}

        <div class="flex ml-4">
            {{--                       shopping cart --}}
            <button class="ml-14">
                <a href="#" class="fa fa-shopping-cart fa-2x px-2 py-2 hover:bg-gray-600 rounded hover:text-white"></a>
            </button>

{{--            register form--}}
            <button type="button" class="h-10 flex bg-blue-500 lg:mt-2 ml-4 hover:bg-gray-600 rounded ">
                <a href="#"
                   class="fa fa-arrow-circle-left fa-2x w-9 pt-1 bg-blue-400 hover:bg-gray-600 hover:text-white "></a>
                <span class="mt-0 mx-4 pt-2 font-bold text-white">ورود / ثبت نام</span>
            </button>
        </div>
    </div>
</header>
