<section class="s-numbers {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <x-title_text name="s-numbers" :title="$title" :description="$description"/>

    <div class="s-numbers-list">
      @foreach($numbers as $number)
        <div class="c-number">
          @if($number['image'])
            <x-media :media="$number['image']"/>
          @endif
          @if($number['number'])
            <div class="c-number__title" animation-number="{{ $number['number'] }}">{{ $number['number'] }}</div>
          @endif
          <div class="c-number__text">{!! $number['description'] !!}</div>
        </div>

        <div class="c-number__line"></div>
      @endforeach
    </div>

    @if($button && $button['link'])
      <x-button
        href="{{ $button['link']['url'] }}"
        target="{{ $button['link']['target'] }}"
        appearance="{!! $button['color'] !!}">
        {{ $button['link']['title'] }}
      </x-button>
    @endif
  </div>
</section>
