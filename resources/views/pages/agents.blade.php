@extends('layouts.app')
@section('content')
    <section class="section-agents">
        <div class="agents">
            <h2>Agents</h2>
            <div class="agents-wrapper">
     
                    @if ($agents)
                        @foreach ( $agents as $agent )
                            <div class="agent">
                                <figure>
                                    <img src="/storage/cover_images/{{$agent->cover_image}}">
                                </figure>
                                <h5>{{ $agent->name  }}&nbsp;{{ $agent->lastname  }}</h5>
                                <p class="text-sm">Nottingham</p>
                                <div class="agent-socials-icons">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 546.773 546.773" style="enable-background:new 0 0 546.773 546.773;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M382.1,0h-56.953c-43.574,0-74.872,10.343-93.893,31.022c-19.027,20.686-28.532,51.151-28.532,91.408v38.373    c0,10.141-8.219,18.36-18.36,18.36H164.68c-10.141,0-18.36,8.219-18.36,18.36v57.503c0,10.141,8.219,18.36,18.36,18.36h19.682    c10.141,0,18.36,8.219,18.36,18.36v236.666c0,10.141,8.219,18.36,18.36,18.36h76.414c10.141,0,18.36-8.22,18.36-18.36V291.747    c0-10.142,8.22-18.36,18.36-18.36h38.592c10.142,0,19.224-8.176,20.289-18.256l6.095-57.712    c1.065-10.085-6.291-18.256-16.433-18.256h-48.549c-10.141,0-18.36-8.219-18.36-18.36v-28.752c0-7.075,0.331-12.552,0.997-16.426    c0.661-3.868,2.154-7.681,4.48-11.445c2.319-3.757,6.083-6.358,11.279-7.797c5.195-1.438,12.111-2.16,20.734-2.16h28.752    c10.141,0,18.359-8.219,18.359-18.36V18.36C400.459,8.219,392.24,0,382.1,0z" fill="#808080"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 543.684 543.684" style="enable-background:new 0 0 543.684 543.684;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M527.657,106.697c-2.681,0.783-5.361,1.512-8.041,2.191c-16.384,4.137-17.89-1.322-6.028-13.366    c5.312-5.397,10.006-11.267,14.082-17.607c9.137-14.217,1.212-20.417-14.333-13.776c-5.545,2.369-11.182,4.517-16.897,6.432    c-16.017,5.379-38.746-2.735-53.018-11.787c-18.018-11.426-38.495-17.136-61.438-17.136c-32.137,0-59.529,11.334-82.192,33.984    c-22.656,22.662-33.99,50.062-33.99,82.191c0,4.394,0.251,8.855,0.747,13.378c0.814,7.362-11.585,12.699-28.317,10.336    c-36.194-5.11-70.582-16.077-103.171-32.889c-32.32-16.671-60.845-37.65-85.57-62.938C37.672,73.624,21.687,74.665,17.274,90.98    c-2.644,9.78-3.959,19.951-3.959,30.515c0,19.908,4.675,38.372,14.027,55.392c4.651,8.47,10.098,16.138,16.353,22.999    c10.521,11.549,8.911,18.25-5.734,14.144c-14.639-4.106-25.367-10.202-25.367-9.804s0,0.722,0,0.722    c0,28.048,8.807,52.693,26.432,73.911c10.857,13.072,23.47,23.17,37.834,30.282c15.147,7.503,22.203,11.688,13.733,12.784    c-5.11,0.661-10.251,0.991-15.422,0.991c-3.5,0-7.172-0.159-11.003-0.483c-6.059-0.514-7.148,12.111,2.038,26.298    c7.301,11.273,16.646,21.193,28.03,29.762c11.579,8.721,24.058,14.981,37.417,18.794c16.255,4.633,19.517,13.073,5.024,21.763    c-35.863,21.519-75.551,32.277-119.058,32.277c-4.902,0-9.578-0.11-14.045-0.324c-7.754-0.373-2.552,6.456,12.417,14.296    c46.775,24.499,97.43,36.738,151.972,36.738c41.237,0,79.964-6.529,116.176-19.596c36.199-13.066,67.136-30.576,92.791-52.516    c25.655-21.94,47.779-47.173,66.365-75.711c18.581-28.537,32.424-58.33,41.543-89.376c9.106-31.053,13.666-62.167,13.666-93.342    c0-2.809-0.024-5.331-0.067-7.552c-0.086-4.174,10.955-15.472,23.28-27.032c5.563-5.22,10.869-10.698,15.937-16.444    C548.833,107.78,543.882,101.966,527.657,106.697z" fill="#808080"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z    M5.477,420.56h92.184v-277.32H5.477V420.56z" fill="#808080"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
               
            </div>  
        </div>
    </section>
@endsection