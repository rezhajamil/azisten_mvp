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
            <div class="w-full border-b-2 shadow-md bg-slate-50">
                <div
                    x-on:click="selected != 1 ? selected = 1 : selected =null"
                    class="flex items-center justify-between px-3 bg-green-600 shadow-sm"
                >
                    <h1 class="py-2 font-semibold text-white">USU</h1>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x-bind:class="selected == 1? 'transform rotate-180':''"
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
                    x-ref="tab1"
                    :style="selected == 1 ? 'max-height: '+ $refs.tab1.scrollHeight+ 'px;':''">
                    <p class="p-2 px-3 text-justify">
                        <a href="#" type="button">
                            <span class="w-full text-sm text-center" x-on:click="college=false">Kampus USU</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="w-full border-b-2 shadow-md bg-slate-50">
                <div
                    x-on:click="selected != 2 ? selected = 2 : selected =null"
                    class="flex items-center justify-between px-3 bg-green-600 shadow-sm"
                >
                    <h1 class="py-2 font-semibold text-white">POLMED</h1>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x-bind:class="selected == 2? 'transform rotate-180':''"
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
                    x-ref="tab2"
                    :style="selected == 2 ? 'max-height: '+ $refs.tab2.scrollHeight+ 'px;':''">
                    <p class="p-2 px-3 text-justify">
                        <a href="#" type="button">
                            <span class="w-full text-sm text-center" x-on:click="college=false">Kampus POLMED</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="w-full border-b-2 shadow-md bg-slate-50">
                <div
                    x-on:click="selected != 3 ? selected = 3 : selected =null"
                    class="flex items-center justify-between px-3 bg-green-600 shadow-sm"
                >
                    <h1 class="py-2 font-semibold text-white">UINSU</h1>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x-bind:class="selected == 3? 'transform rotate-180':''"
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
                    x-ref="tab3"
                    :style="selected == 3 ? 'max-height: '+ $refs.tab3.scrollHeight+ 'px;':''">
                    <p class="p-2 px-3 text-justify border-b">
                        <a href="#" type="button">
                            <span class="w-full text-sm text-center" x-on:click="college=false">Kampus UINSU 1</span>
                        </a>
                    </p>
                    <p class="p-2 px-3 text-justify">
                        <a href="#" type="button">
                            <span class="w-full text-sm text-center" x-on:click="college=false">Kampus UINSU 2</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="w-full border-b-2 shadow-md bg-slate-50">
                <div
                    x-on:click="selected != 4 ? selected = 4 : selected =null"
                    class="flex items-center justify-between px-3 bg-green-600 shadow-sm"
                >
                    <h1 class="py-2 font-semibold text-white">UNIMED</h1>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x-bind:class="selected == 4? 'transform rotate-180':''"
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
                    x-ref="tab4"
                    :style="selected == 4 ? 'max-height: '+ $refs.tab4.scrollHeight+ 'px;':''">
                    <p class="p-2 px-3 text-justify border-b">
                        <a href="#" type="button">
                            <span class="w-full text-sm text-center" x-on:click="college=false">Kampus UNIMED</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>