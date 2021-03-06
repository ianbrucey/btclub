<div>
    {{-- Stop trying to control. --}}

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @forelse($games as $game)
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3" id="game-{{$game->id}}">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">


                        <header class="flex items-center justify-center leading-tight p-2 md:p-4 bg-blue-500 ">
                            <h4 class="items-center text-center">
                                <p class="no-underline text-white" >
                                    Product Name: {{ $game->product_name }}
                                </p>
                            </h4>

                        </header>

                        <footer class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <a class="flex no-underline  text-black" >
                                <p class="ml-2 text-sm">
                                    Win Ratio: <br>{{ $game->buy_in }}/{{ $game->prize }}
                                </p>
                            </a>
                            <a class="flex no-underline  text-black" >
                                <p class="ml-2 text-sm">
                                    Status: <br><span class="{{ \App\Models\Game::STATUS_DISPLAY_COLOR[$game->status] }}">{{ \App\Models\Game::STATUS_DISPLAY_MSG[$game->status] }}</span>
                                </p>
                            </a>
                        </footer>
                        <footer class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <a class="flex no-underline  text-black" >
                                <p class="ml-2 text-sm">
                                    Check-ins: <br>{{ $game->check_ins }}
                                </p>
                            </a>
                            <a class="flex no-underline  text-black" >
                                <p class="ml-2 text-sm">
                                    Winner: <br><b>{{ $game->getGameWinner() ?: "TDB" }}</b>
                                </p>
                            </a>

                        </footer>
                        @if($game->status != \App\Models\Game::STATUS_COMPLETED)
                            <footer class="text-center justify-center leading-tight p-2 md:p-4 border">
                                <a>Provide the link below to your players.</a>
                                <p><input readonly class="border-none font-bold text-center" style="background: transparent; font-size: 16px; width: 100%" type="text" id="copy" value="{{ sprintf('https://bingotime.club/slot/%s', $game->id)}}" ></p>
                                <a class="text-blue-400 underline text-sm" onclick="copyText()">copy the link</a>

                            </footer>
                            <footer class="flex items-center justify-center leading-tight p-2 md:p-4 border">
                                <a class="btn rounded p-2 bg-blue-500 text-white" href="/game/lobby/{{$game->id}}">Go to Game Lobby</a>
                            </footer>
                        @endif


                    </article>
                    <!-- END Article -->

                </div>
            @empty
                <div class="text-center">
                    No active games yet. Create one above
                </div>
            @endforelse
            <!-- Column -->

            <!-- END Column -->
            <!-- END Column -->

        </div>
    </div>
</div>
