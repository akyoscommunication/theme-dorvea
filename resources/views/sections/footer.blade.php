<footer>
  <div class="sub-footer">
    <div class="container--sm">
      @if($footer_secondary_text)
        <x-title tag="h2">{!! $footer_secondary_text !!}</x-title>
      @endif
      @if($footer_secondary_button && $footer_secondary_button['link'])
        <x-button
          href="{{ $footer_secondary_button['link']['url'] }}"
          target="{{ $footer_secondary_button['link']['target'] }}"
          appearance="light"
        >
          {!! $footer_secondary_button['link']['title'] !!}
        </x-button>
      @endif
    </div>
  </div>

  <div class="footer">
    <div class="container">
      <div class="footer-columns">
        <div class="footer-columns-item">
          <x-title tag="h3">{{ $footer_title_1 }}</x-title>
          @menu('footer_navigation')
        </div>
        <div class="footer-columns-item">
          <x-title tag="h3">{{ $footer_title_2 }}</x-title>

          <div class="footer-infos">
            <p>{!! $address !!}</p>
            <a href="tel:+33{{ $phone }}">{!! $phone !!}</a>
            <a href="mailto:{{ $email }}">{!! $email !!}</a>
          </div>
          <x-socials/>
        </div>
        <div class="footer-columns-item">
          <x-title tag="h3">{{ $footer_title_3 }}</x-title>
          <div class="footer-columns-item__text">
            {!! $footer_horaire !!}
          </div>
        </div>
        <div class="footer-columns-item">
          @if($footer_logo)
            <x-image variant="logo" :lg="$footer_logo"/>
          @endif
        </div>
      </div>
    </div>
    <div class="copy-footer">
      <div class="container">
        <p>{!! $footer_copyright !!}</p>
        @menu('legal_navigation')
        <a href="https://akyos.com" target="_blank">Création Akyos</a>
      </div>
    </div>
  </div>
</footer>
