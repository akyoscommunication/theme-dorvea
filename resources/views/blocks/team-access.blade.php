<section class="s-team bg-color-primary" style="{{ $styles }}">
  <div class="container">
    <div class="s-team-grid">
      <div class="s-team-text">
        <x-title_text name="s-team" :title="$title" :description="$description"/>
      </div>
      <div class="s-team-list">
        @if(count($teams) <= 3)
          <div class="s-team-list-wrapper">
            @foreach($teams as $team)
              <x-card
                :title="[
                  'tag' => 'h3',
                  'value' => $team['name']
                  ]"
                :content="$team['job']"
                :image="$team['image']"
              />
            @endforeach
          </div>
        @else
          <x-slider
            name="team"
            :per="3"
            :perMd="2"
            :perSm="2"
            :perXs="1"
            :modules="['navigation']"
            :extra="['spaceBetween' => 20]"
          >
            @foreach($teams as $team)
              <div class="swiper-slide">
                <x-card
                  :title="[
                  'tag' => 'h3',
                  'value' => $team['name']
                  ]"
                  :content="$team['job']"
                  :image="$team['image']"
                />
              </div>
            @endforeach
          </x-slider>
        @endif
      </div>
    </div>
  </div>
</section>
