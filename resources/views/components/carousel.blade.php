<div id="indicators-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden" id="wholeCarousel">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <div class="cItem">
                <h1>Architecture Design</h1>
                <h3>We design beautiful buildings that integrate and compliment their surroundings</h3>
                <a href="#" class="btn-purple">GET IN TOUCH</a>
            </div>
            <img src="{{ asset('assets/images/carousel1.png') }}" class="absolute block w-full carouselImgMobile" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="cItem">
                <h1>Architecture Design</h1>
                <h3>We design beautiful buildings that integrate and compliment their surroundings</h3>
                <a href="#" class="btn-purple">GET IN TOUCH</a>
            </div>
            <img src="{{ asset('assets/images/carousel1.png') }}"
                class="absolute block w-full carouselImgMobile" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="cItem">
                <h1>Architecture Design</h1>
                <h3>We design beautiful buildings that integrate and compliment their surroundings</h3>
                <a href="#" class="btn-purple">GET IN TOUCH</a>
            </div>
            <img src="{{ asset('assets/images/carousel1.png') }}"
                class="absolute block w-full carouselImgMobile" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="cItem">
                <h1>Architecture Design</h1>
                <h3>We design beautiful buildings that integrate and compliment their surroundings</h3>
                <a href="#" class="btn-purple">GET IN TOUCH</a>
            </div>
            <img src="{{ asset('assets/images/carousel1.png') }}"
                class="absolute block w-full carouselImgMobile" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 bottom-5 cInd">
        <button type="button" class="w-5 h-5 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-5 h-5 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-5 h-5 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-5 h-5 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center">
            <img src="{{asset('assets/images/icons/prev.png')}}" class="w-9 h-16" alt="">
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center">
            <img src="{{asset('assets/images/icons/next.png')}}" class="w-9 h-16" alt="">
            <span class="sr-only">Previous</span>
        </span>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
