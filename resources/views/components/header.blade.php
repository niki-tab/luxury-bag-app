<div class="bg-sky-700 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class=""><img src="{{ asset("images/logo/logo_02.png") }}" alt="logo" width="250" height="78"></img></a>
        
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:underline">{{ trans('components/header.menu-option-1') }}</a></li>
                <li><a href="/shop" class="hover:underline">{{ trans('components/header.menu-option-2') }}</a></li>
                <li><a href="/cart" class="hover:underline">{{ trans('components/header.menu-option-3') }}</a></li>
                <li><a href="/contact" class="hover:underline">{{ trans('components/header.menu-option-4') }}</a></li>
                
            </ul>
        </nav>
    </div>
</div>
