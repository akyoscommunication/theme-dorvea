<section class="s-gallery {{ $classes }}" style="{{ $styles }}">
    <x-title_text name="s-gallery" :title="$title" :description="$description"/>

    <x-slider
            name="team"
            :per="1.5"
            :perMd="1.5"
            :perSm="1"
            :perXs="1"
            :modules="['navigation', 'pagination','coverflow']"
            :extra="['spaceBetween' => 250, 'initialSlide' => 1, 'centeredSlides' => true]"
    >
        @foreach($gallery as $item)
            <div class="swiper-slide">
                @include('akyos-access::partials.gallery-media', ['media' => $item])
            </div>
        @endforeach
  </x-slider>
</section>
