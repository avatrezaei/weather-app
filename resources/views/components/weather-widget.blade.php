<div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden">
    <div class="current-weather relative">
        <div class="flex items-center justify-between px-4 py-1">
            <div class="flex items-center">
                <div>
                    <div class="text-5xl font-semibold">{{ $current['main']['temp'] }}&#176;C</div>
                    <div class="text-gray-400">Feels like&#176;{{ $current['main']['feels_like'] }}</div>
                </div>
                <div class="ml-5">
                    <div class="font-semibold">{{ ucfirst($current['weather'][0]['description']) }}</div>
                    <div class="text-gray-400">
                        {{ $location }}
                    </div>
                </div>
                <div>
                    <img src="https://openweathermap.org/img/wn/{{ $current['weather'][0]['icon'] }}@4x.png"
                        alt="icon">
                </div>
            </div>
        </div>
        <button class="absolute right-0 bottom-0 mb-2 mr-2 text-xs">Toggle</button>
    </div>

    <ul class="feature-weather bg-gray-800 px-4 py-6 space-y-8">
        @foreach ($feature['list'] as $item)
            <li class="grid grid-cols-weather items-center">
                <div class="text-gray-400">
                    {{ \Carbon\Carbon::parse($item['dt'])->format('D') }}
                </div>
                <div class="flex items-center">
                    <div>
                        <img src="https://openweathermap.org/img/wn/{{ $item['weather'][0]['icon'] }}.png"
                            alt="icon">
                    </div>
                    <div>
                        <div class="font-semibold">{{ ucfirst($item['weather'][0]['description']) }}</div>
                    </div>
                </div>
                <div class="text-right text-xs">
                    <div>{{ $item['main']['temp_min'] }}&#176;C</div>
                    <div>{{ $item['main']['temp_max'] }}&#176;C</div>
                </div>
            </li>
        @endforeach

    </ul>
</div>
