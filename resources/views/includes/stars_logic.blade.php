@for ($i = 0; $i < floor($movie->vote / 2); $i++)
    {{-- Questo commentato è la logica senza mezze stelline --}}

    {{-- <i
                                        class="{{ floor($movie->vote / 2) > $i ? 'fa-solid fa-star' : 'fa-regular fa-star' }}">
                                    </i> --}}

    <i class="fa-solid fa-star"></i>
@endfor
@if ((!is_int($movie->vote / 2) && $movie->vote % 2 == 1) || ($movie->vote / 2 < 4.5 && $movie->vote / 2 > 4))
    <i class="fa-solid fa-star-half-stroke"></i>
@endif

@for ($i = 0; $i < floor(5 - $movie->vote / 2); $i++)
    <i class="fa-regular fa-star"></i>
@endfor
