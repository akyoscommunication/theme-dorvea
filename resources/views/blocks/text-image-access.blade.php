<section class="s-text-image {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $position }}">
    <div class="s-text-image-content {{ $images ? null : 's-text-image-content--full' }}">
      <x-title_text name="s-text-image" :title="$title" :description="$content"/>

      @if($button && $button['link'])
        <x-button
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif
    </div>
    @if($images)
      <div class="s-text-image-image">
        @if(count($images) > 1)
          <x-slider
            name="text-image"
            :per="1"
            :perMd="1"
            :perSm="1"
            :perXs="1"
            :modules="['navigation']"
            :extra="['spaceBetween' => 5]"
          >
            @foreach($images as $image)
              <div class="swiper-slide">
                <x-media :media="$image" animation-wipe animation-stagger/>
              </div>
            @endforeach
          </x-slider>
        @else
          @foreach($images as $image)
            <x-media :media="$image" animation-wipe animation-stagger/>
          @endforeach
        @endif
      </div>
    @endif
  </div>
</section>
