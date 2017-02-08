<div class="panel-heading">Guest</div>
                <div class="panel-body">
                  @if(! empty($guests))

                    @foreach ($guests as $guest)

                      {{ $guest->name }}

                      @foreach ($guests->coms as $com)

                        {{$com->description}}

                      @endforeach

                      <br>

                    @endforeach

                  @elseif(! empty($guest))

                    {{ $guest->name }}

                    @foreach ($guest->coms as $com)

                      {{ $com->description}}

                    @endforeach

                  @else

                    Aucun guest affiché

                  @endif
                </div>
            </div>
