<div class="property">
    <a class="property-link" href="/posts/{{ $post->id }}">
        <div class="content-wrapper">
            <figure class="slider-img-wrapper"><img src="{{ asset('img/property-2.jpg') }}" alt="{{ $post->title }}"></figure> 
            <div class="property-bedroom-bathroom">
            </div>
            <div class="slider-description">
                <div class="text-wrapper">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 430.114 430.114" style="enable-background:new 0 0 430.114 430.114;" xml:space="preserve">
                            <g>
                                <path id="Facebook_Places" d="M356.208,107.051c-1.531-5.738-4.64-11.852-6.94-17.205C321.746,23.704,261.611,0,213.055,0   C148.054,0,76.463,43.586,66.905,133.427v18.355c0,0.766,0.264,7.647,0.639,11.089c5.358,42.816,39.143,88.32,64.375,131.136   c27.146,45.873,55.314,90.999,83.221,136.106c17.208-29.436,34.354-59.259,51.17-87.933c4.583-8.415,9.903-16.825,14.491-24.857   c3.058-5.348,8.9-10.696,11.569-15.672c27.145-49.699,70.838-99.782,70.838-149.104v-20.262   C363.209,126.938,356.581,108.204,356.208,107.051z M214.245,199.193c-19.107,0-40.021-9.554-50.344-35.939   c-1.538-4.2-1.414-12.617-1.414-13.388v-11.852c0-33.636,28.56-48.932,53.406-48.932c30.588,0,54.245,24.472,54.245,55.06   C270.138,174.729,244.833,199.193,214.245,199.193z" fill="#808080"/>
                            </g>
                        </svg>
                    {{ $post->postcode }}
                    </p> 
                    <p class="price">&#163;{{ $post->price }}</p>
                </div> 
                <div class="icon">
                    <div class="bedrooms">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.7 490.7" style="enable-background:new 0 0 490.7 490.7;" xml:space="preserve" width="15px" height="15px">
                            <g>
                                <g>
                                    <path d="M436.2,154.6H182.4c-12.4,0-33.1,4.7-33.1,36.6V240h320v-48.8C469.3,159.4,448.6,154.6,436.2,154.6z" fill="#00b5e4"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <polygon points="80.3,250.6 32,250.6 32,80 0,80 0,410.7 32,410.7 32,325.3 458.7,325.3 458.7,410.6 490.7,410.6 490.7,250.6       " fill="#00b5e4"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="85.3" cy="197.3" r="44.7" fill="#00b5e4"/>
                                </g>
                            </g>
                        </svg>
                        <p>{{ $post->bedrooms }}</p>
                    </div>
                    <div class="bathrooms">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 583.312 583.312" style="enable-background:new 0 0 583.312 583.312;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M125.25,545.507c25.694-5.097,43.28-28.305,53.292-52.259h-13.588c-5.795,0-11.532-0.115-17.203-0.373    c-5.89,12.049-14.831,22.472-28.181,24.557c-4.121-3.566-9.419-5.795-15.3-5.795c-12.977,0-23.495,10.519-23.495,23.495    s10.519,23.495,23.495,23.495C113.507,558.627,121.415,553.253,125.25,545.507z" fill="#00b5e4"/>
                                    <path d="M491.685,558.627c12.977,0,23.495-10.519,23.495-23.495s-10.519-23.495-23.495-23.495c-5.183,0-9.936,1.73-13.817,4.58    c-11.398-3.796-19.584-13.808-25.274-24.958c-8.701,1.511-16.438,1.989-22.242,1.989h-1.539h-0.89h-7.793    c8.204,22.52,23.39,44.389,49.982,51.159C473.707,552.765,482.008,558.627,491.685,558.627z" fill="#00b5e4"/>
                                    <path d="M453.215,110.146l-48.023-48.032c-8.816,2.247-35.85,19.68-43.93,28.114l63.906,63.906    C433.545,146.12,450.795,119.354,453.215,110.146z" fill="#00b5e4"/>
                                    <path d="M361.979,128.133c1.225,0,2.448-0.469,3.386-1.396l6.761-6.761c0.43-0.43,0.727-0.927,0.956-1.444    c0.784-1.759,0.478-3.873-0.956-5.316c-1.435-1.444-3.558-1.741-5.317-0.957c-0.516,0.229-1.014,0.536-1.443,0.957l-6.771,6.751    c-1.864,1.865-1.864,4.896,0,6.761C359.531,127.664,360.755,128.133,361.979,128.133z" fill="#00b5e4"/>
                                    <path d="M341.688,148.415c1.224,0,2.447-0.468,3.385-1.396l6.761-6.761c1.864-1.865,1.864-4.896,0-6.761s-4.896-1.865-6.761,0    l-6.761,6.761c-1.864,1.865-1.864,4.896,0,6.761C339.249,147.956,340.463,148.415,341.688,148.415z" fill="#00b5e4"/>
                                    <path d="M321.405,168.707c1.224,0,2.448-0.469,3.385-1.396l6.761-6.76c1.865-1.865,1.865-4.896,0-6.761    c-1.864-1.865-4.896-1.865-6.761,0l-6.761,6.761c-1.864,1.864-1.864,4.896,0,6.76    C318.957,168.238,320.182,168.707,321.405,168.707z" fill="#00b5e4"/>
                                    <path d="M386.593,132.044c0.784-1.76,0.487-3.883-0.956-5.317c-1.444-1.444-3.558-1.741-5.317-0.957    c-0.516,0.229-1.013,0.536-1.443,0.957l-6.761,6.77c-1.865,1.865-1.865,4.896,0,6.761c0.938,0.938,2.161,1.396,3.385,1.396    c1.225,0,2.448-0.469,3.386-1.396l6.761-6.77C386.066,133.067,386.363,132.57,386.593,132.044z" fill="#00b5e4"/>
                                    <path d="M365.354,147.019c-1.864-1.865-4.896-1.865-6.761,0l-6.761,6.761c-1.864,1.865-1.864,4.896,0,6.761    c0.938,0.937,2.161,1.396,3.385,1.396c1.225,0,2.448-0.468,3.386-1.396l6.761-6.761    C367.219,151.915,367.219,148.883,365.354,147.019z" fill="#00b5e4"/>
                                    <path d="M345.072,167.301c-1.864-1.865-4.896-1.865-6.761,0l-6.761,6.77c-1.864,1.865-1.864,4.896,0,6.761    c0.938,0.937,2.161,1.396,3.386,1.396c1.224,0,2.447-0.468,3.385-1.396l6.761-6.77    C346.938,172.197,346.938,169.166,345.072,167.301z" fill="#00b5e4"/>
                                    <path d="M389.021,155.175c1.225,0,2.448-0.468,3.385-1.396l6.761-6.761c0.431-0.43,0.728-0.928,0.957-1.444    c0.784-1.759,0.478-3.873-0.957-5.317c-1.434-1.444-3.557-1.74-5.316-0.956c-0.517,0.229-1.023,0.535-1.444,0.956l-6.76,6.761    c-1.865,1.865-1.865,4.896,0,6.761C386.573,154.716,387.798,155.175,389.021,155.175z" fill="#00b5e4"/>
                                    <path d="M368.739,175.467c1.225,0,2.448-0.468,3.386-1.396l6.761-6.761c1.864-1.865,1.864-4.896,0-6.76    c-1.865-1.865-4.896-1.865-6.761,0l-6.761,6.76c-1.865,1.865-1.865,4.896,0,6.761    C366.292,174.999,367.516,175.467,368.739,175.467z" fill="#00b5e4"/>
                                    <path d="M348.448,195.749c1.224,0,2.447-0.468,3.385-1.396l6.761-6.761c1.864-1.865,1.864-4.896,0-6.761s-4.896-1.865-6.761,0    l-6.761,6.761c-1.864,1.865-1.864,4.896,0,6.761C346.01,195.281,347.233,195.749,348.448,195.749z" fill="#00b5e4"/>
                                    <path d="M564.188,254.186h-14.344H535.5V34.248c0-5.278-4.274-9.562-9.562-9.562h-41.539c-2.4,0-4.715,0.899-6.483,2.524    l-34.368,31.643c-7.812-1.979-16.725,0.688-22.224,2.926l32.838,32.847c2.372-6.12,4.571-14.478,2.706-22.032l31.27-28.783h28.238    v210.375H33.469H19.125C8.559,254.186,0,262.744,0,273.311v19.125c0,10.566,8.559,19.125,19.125,19.125h2.132h4.208h5.556    c1.454,7.401,3.328,15.912,5.7,25.723l13.387,64.146c18.733,69.328,56.667,80.583,101.621,82.037    c4.351,0.134,8.75,0.22,13.225,0.22h17.222l234.845,0.01c-0.01-0.048-0.019-0.086-0.038-0.134c0.01,0.038,0.02,0.086,0.038,0.124    h13.33c5.422,0,11.638-0.344,18.303-1.329l0,0c29.405-4.332,67.598-21.104,85.441-75.879l21.754-94.917h5.661h2.678    c0.517,0,0.994-0.115,1.501-0.153c9.85-0.774,17.624-8.922,17.624-18.972v-19.125    C583.312,262.744,574.754,254.186,564.188,254.186z M411.762,454.013L411.762,454.013c0,0.058,0.009,0.125,0.019,0.182    C411.771,454.138,411.762,454.07,411.762,454.013z" fill="#00b5e4"/>
                                </g>
                            </g>
                        </svg>
                         <p>{{ $post->bathrooms }}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>