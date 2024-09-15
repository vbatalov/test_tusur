<div>
    <h1 class="text-xl font-bold my-2">
        Решение квадратного уравнения
    </h1>


    <div class="w-full">
        <div class="relative">
            <label class="block mb-2 text-sm text-slate-600">
                <input wire:model="a"
                       class=" ps-8 w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                       placeholder="Введите значение"/>
                <div
                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                    A
                </div>
            </label>
        </div>

        <div class="text-sm text-red-400 mb-2">@error('a') {{ $message }} @enderror</div>

        <div class="relative">
            <label class="block mb-2 text-sm text-slate-600">
                <input wire:model="b"
                       class=" ps-8 w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                       placeholder="Введите значение"/>
                <div
                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                    B
                </div>
            </label>
        </div>

        <div class="text-sm text-red-400 mb-2">@error('b') {{ $message }} @enderror</div>

        <div class="relative">
            <label class="block mb-2 text-sm text-slate-600">
                <input wire:model="c"
                       class=" ps-8 w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                       placeholder="Введите значение"/>
                <div
                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                    C
                </div>
            </label>
        </div>

        <div class="text-sm text-red-400 mb-2">@error('c') {{ $message }} @enderror</div>

        <div class="my-2 flex gap-2  items-center">
            <button wire:click="solve"
                    class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                Решить
            </button>
            <a href="{{route("quadratic-equation-log")}}" target="_blank"
               class="shrink-0 rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                Посмотреть историю
            </a>
        </div>

    </div>

    <div class="my-4">
        @if(session("error"))
            {{session("error")}}
        @endif
        @if(session("success"))
            @foreach($result as $key => $value)
                <div><span class="diagonal-fractions">{{$key}}</span> : {{$value}}</div>
            @endforeach
        @endif
    </div>

</div>
