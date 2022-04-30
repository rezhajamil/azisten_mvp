<div class="fixed inset-0 z-20 flex items-center justify-center w-screen h-screen bg-black/40" x-show="college" x-transition>
    <div class="relative flex flex-col w-1/4 pt-3 overflow-y-auto h-1/2 bg-slate-50" x-show="college" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0 transform -translate-x-full" x-transition:enter-end="opacity-100 transform -translate-x-0" >
        <div class="flex items-center justify-center px-3">
            <span class="inline-block w-full text-2xl font-bold text-center">Kampus</span>
            <button class="ml-auto bg-transparent" x-on:click="college=false">
                <span class="text-xl font-bold">X</span>
            </button>
        </div>
        <hr class="mt-2">
        <div class="w-full max-w-lg py-2 mx-auto college-filter" x-data="{selected:null}">
            @foreach ($colleges as $college)
                <div class="w-full border-b-2 shadow-md bg-slate-50">
                    <div
                        x-on:click="selected != {{ $college->id }} ? selected = {{ $college->id }} : selected =null"
                        class="flex items-center justify-between px-3 bg-green-600 shadow-sm"
                    >
                        <h1 class="py-2 font-semibold text-white">{{ $college->name }}</h1>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            x-bind:class="selected == {{ $college->id }}? 'transform rotate-180':''"
                            class="w-5 h-5 text-white transition-all duration-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </div>
                    <div
                        class="overflow-hidden transition-all duration-300 max-h-0"
                        x-ref="tab{{ $college->id }}"
                        :style="selected == {{ $college->id }} ? 'max-height: '+ $refs.tab{{ $college->id }}.scrollHeight+ 'px;':''">
                        @foreach ($campuses as $campus)
                                @if ($campus->college_id==$college->id)
                                    <p class="p-2 px-3 text-justify">
                                        <a href="/search/{{ $campus->slug }}" type="button">
                                            <span class="w-full text-sm text-center" x-on:click="college=false">{{ $campus->name }}</span>
                                        </a>
                                    </p>
                                @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>