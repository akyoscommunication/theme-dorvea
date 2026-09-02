<section class="s-hero {{ $classes }}" style="{{ $styles }}">
  <x-media :media="$image_background" cover/>

  <div class="s-hero-overlay">
    <div class="s-hero-overlay-content">
      <x-title_text name="s-hero-overlay-content" :title="$title" :description="$description"/>

      @if($button && $button['link'])
        <x-button href="{{ $button['link']['url'] }}"
                  target="{{ $button['link']['target'] }}"
                  appearance="{!! $button['color'] !!}">
          {!! $button['link']['title'] !!}
        </x-button>
      @endif

      <div class="s-hero-overlay-content__scroll" animation-scrolldown>
        @icon('scrollDown')
      </div>
    </div>
  </div>
</section>
