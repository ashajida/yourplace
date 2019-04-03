@extends('layouts.app')
@section('content')
    <main>
        <section class="section-recent-listings">
            <div class="property-listings-slider">
                <h2>Recent Listings</h2>
                <div class="property-listings-slider-items"> 
                    @if ($posts)
                        @foreach ( $posts as $post )
                            @include('partials.property')
                        @endforeach
                    @else
                        <p>No recent properties<p>   
                    @endif
                </div>
            </div>
        </section>
        <section class="section-services">
            <div class="services">
                <div class="services-wrapper">
                    <div class="service-img">
                        <figure>
                            <img src="{{ asset('img/property-3.jpg') }}" srcset="">
                        </figure>
                    </div>
                    <div class="serives-description">
                        <h2>Our Services</h2>
                        <div class="services-description-wrappper">
                            <div class="icon-descrption-wrapper">
                                <div class="service">
                                <div>
                                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="40px" height="40px">
                                    <g>
	                                    <g>
		                                    <path d="M334.974,0c-95.419,0-173.049,77.63-173.049,173.049c0,21.213,3.769,41.827,11.211,61.403L7.672,399.928    c-2.365,2.366-3.694,5.573-3.694,8.917v90.544c0,6.965,5.646,12.611,12.611,12.611h74.616c3.341,0,6.545-1.325,8.91-3.686    l25.145-25.107c2.37-2.366,3.701-5.577,3.701-8.925v-30.876h30.837c6.965,0,12.611-5.646,12.611-12.611v-12.36h12.361    c6.964,0,12.611-5.646,12.611-12.611v-27.136h27.136c3.344,0,6.551-1.329,8.917-3.694l40.121-40.121    c19.579,7.449,40.196,11.223,61.417,11.223c95.419,0,173.049-77.63,173.049-173.049C508.022,77.63,430.393,0,334.974,0z     M334.974,320.874c-20.642,0-40.606-4.169-59.339-12.393c-4.844-2.126-10.299-0.956-13.871,2.525    c-0.039,0.037-0.077,0.067-0.115,0.106l-42.354,42.354h-34.523c-6.965,0-12.611,5.646-12.611,12.611v27.136H159.8    c-6.964,0-12.611,5.646-12.611,12.611v12.36h-30.838c-6.964,0-12.611,5.646-12.611,12.611v38.257l-17.753,17.725H29.202v-17.821    l154.141-154.14c4.433-4.433,4.433-11.619,0-16.051s-11.617-4.434-16.053,0L29.202,436.854V414.07l167.696-167.708    c0.038-0.038,0.067-0.073,0.102-0.11c3.482-3.569,4.656-9.024,2.53-13.872c-8.216-18.732-12.38-38.695-12.38-59.33    c0-81.512,66.315-147.827,147.827-147.827S482.802,91.537,482.802,173.05C482.8,254.56,416.484,320.874,334.974,320.874z" fill="#74f4ae"/>
	                                    </g>
                                    </g>
                                    <g>
	                                    <g>
		                                    <path d="M387.638,73.144c-26.047,0-47.237,21.19-47.237,47.237s21.19,47.237,47.237,47.237s47.237-21.19,47.237-47.237    S413.686,73.144,387.638,73.144z M387.638,142.396c-12.139,0-22.015-9.876-22.015-22.015s9.876-22.015,22.015-22.015    s22.015,9.876,22.015,22.015S399.777,142.396,387.638,142.396z" fill="#74f4ae"/>
                                        </g>
                                    </g>
                                </svg>
                                </div>
                                <div class="service-description">
                                    <h3>Rent</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                                </div>
                                </div>
                                <div class="service">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 480.08177 480" width="40px"><path d="m479.199219 113.800781c-1.652344-6.144531-5.683594-11.382812-11.199219-14.558593-5.519531-3.191407-12.082031-4.054688-18.238281-2.402344-6.148438 1.65625-11.386719 5.683594-14.5625 11.199218l-4 6.960938c-3.800781-2.183594-8.65625-.898438-10.878907 2.882812l-20.320312 34.636719-6.960938-4c-1.84375-1.066406-4.039062-1.355469-6.09375-.800781-2.058593.558594-3.808593 1.910156-4.867187 3.761719-2.167969 3.824219-.847656 8.683593 2.960937 10.878906l6.960938 4-68 117.839844-16.800781 44.882812-8 14.957031c-4.683594 8.148438-4.183594 18.277344 1.28125 25.921876l-18 22.078124-5.039063-12.636718c-2.273437-5.632813-7.535156-9.492188-13.585937-9.964844-6.054688-.476562-11.855469 2.515625-14.976563 7.722656l-2.878906 4.878906-2.71875-32c-.625-7.570312-6.488281-13.65625-14.027344-14.570312-7.542968-.910156-14.683594 3.609375-17.09375 10.8125l-19.679687 59.039062c-1.375 4.175782.875 8.675782 5.039062 10.082032.78125.363281 1.621094.582031 2.480469.636718 3.4375.011719 6.5-2.179687 7.601562-5.4375l19.597657-59.039062 2.800781 32.476562c.578125 6.929688 5.558594 12.691407 12.332031 14.261719 6.773438 1.570313 13.78125-1.414062 17.347657-7.378906l2.960937-4.882813 4.960937 12.5625c2.105469 5.292969 6.867188 9.070313 12.503907 9.910157 5.636719.839843 11.292969-1.382813 14.855469-5.832031l18.640624-23.597657c2.0625.539063 4.1875.808594 6.320313.800781 8.574219.066407 16.535156-4.449218 20.878906-11.84375l8-13.359374 30.480469-37.039063 68.71875-119.28125 6.960938 4c1.855468 1.0625 3.207031 2.816406 3.757812 4.882813.554688 2.050781.265625 4.238281-.796875 6.078124l-32 55.441407c-1.207031 1.820312-1.617187 4.054687-1.132813 6.1875.484376 2.128906 1.816407 3.96875 3.691407 5.089843 1.84375 1.070313 4.039062 1.359376 6.09375.804688 2.058593-.558594 3.808593-1.910156 4.867187-3.761719l32-55.441406c3.191406-5.519531 4.054688-12.082031 2.398438-18.238281-1.65625-6.148438-5.683594-11.386719-11.199219-14.5625l-6.960937-4 20-34.640625c2.183593-3.800781.898437-8.652344-2.878907-10.878907l4-6.960937c3.277344-5.605469 4.144531-12.300781 2.398438-18.558594zm-30.160157 2.238281c1.058594-1.851562 2.816407-3.207031 4.882813-3.757812 2.054687-.507812 4.226563-.222656 6.078125.800781 1.855469 1.058594 3.207031 2.816407 3.761719 4.878907.507812 2.054687.222656 4.226562-.800781 6.078124l-4 6.960938-13.921876-8zm-109.039062 223.363282-4-2.320313-11.839844-6.882812 11.359375-30.398438 25.199219 14.558594zm-24 23.117187c-3.378906-2.355469-4.417969-6.886719-2.398438-10.480469l4-6.957031 13.917969 8-4 6.878907c-1.121093 1.945312-3.003906 3.328124-5.195312 3.816406-2.191407.484375-4.484375.03125-6.324219-1.257813zm53.839844-61.277343-27.679688-16 64-110.882813 27.679688 16zm72-124.722657-27.679688-16 16-27.679687 27.679688 16zm0 0" fill="#74f4ae"/><path d="m126.238281 358.519531-28.316406 28.242188-16.960937-16.960938c-3.121094-3.101562-8.160157-3.101562-11.28125 0-1.515626 1.503907-2.367188 3.546875-2.367188 5.679688 0 2.132812.851562 4.179687 2.367188 5.679687l16.960937 16.960938c3 2.976562 7.054687 4.644531 11.28125 4.640625 4.25.023437 8.339844-1.644531 11.359375-4.640625l28.238281-28.320313c2.71875-3.175781 2.535157-7.90625-.417969-10.859375-2.957031-2.957031-7.6875-3.140625-10.863281-.421875zm0 0" fill="#74f4ae"/><path d="m32 380.039062c0 37.558594 30.445312 68 68 68s68-30.441406 68-68c0-4.417968-3.582031-8-8-8s-8 3.582032-8 8c0 28.71875-23.28125 52-52 52s-52-23.28125-52-52 23.28125-52 52-52c11.257812-.03125 22.214844 3.621094 31.199219 10.402344 3.535156 2.652344 8.550781 1.933594 11.199219-1.601562 2.652343-3.535156 1.9375-8.546875-1.597657-11.199219-20.605469-15.453125-48.175781-17.9375-71.210937-6.421875-23.039063 11.519531-37.589844 35.066406-37.589844 60.820312zm0 0" fill="#74f4ae"/><path d="m288 64.039062c4.417969 0 8-3.578124 8-8 0-4.417968-3.582031-8-8-8h-208c-4.417969 0-8 3.582032-8 8v32c0 4.421876 3.582031 8 8 8h208c4.417969 0 8-3.578124 8-8 0-4.417968-3.582031-8-8-8h-200v-16zm0 0" fill="#74f4ae"/><path d="m104 112.039062c-4.417969 0-8 3.582032-8 8 0 4.421876 3.582031 8 8 8h160c4.417969 0 8-3.578124 8-8 0-4.417968-3.582031-8-8-8zm0 0" fill="#74f4ae"/><path d="m312 168.039062h-176c-4.417969 0-8 3.582032-8 8 0 4.421876 3.582031 8 8 8h176c4.417969 0 8-3.578124 8-8 0-4.417968-3.582031-8-8-8zm0 0" fill="#74f4ae"/><path d="m232 224.039062c0-4.417968-3.582031-8-8-8h-160c-4.417969 0-8 3.582032-8 8 0 4.421876 3.582031 8 8 8h160c4.417969 0 8-3.578124 8-8zm0 0" fill="#74f4ae"/><path d="m312 216.039062h-56c-4.417969 0-8 3.582032-8 8 0 4.421876 3.582031 8 8 8h56c4.417969 0 8-3.578124 8-8 0-4.417968-3.582031-8-8-8zm0 0" fill="#74f4ae"/><path d="m144 272.039062c4.417969 0 8-3.578124 8-8 0-4.417968-3.582031-8-8-8h-80c-4.417969 0-8 3.582032-8 8 0 4.421876 3.582031 8 8 8zm0 0" fill="#74f4ae"/><path d="m176 272.039062h56c4.417969 0 8-3.578124 8-8 0-4.417968-3.582031-8-8-8h-56c-4.417969 0-8 3.582032-8 8 0 4.421876 3.582031 8 8 8zm0 0" fill="#74f4ae"/><path d="m360 368.039062c-4.417969 0-8 3.582032-8 8v80c0 4.421876-3.582031 8-8 8h-320c-4.417969 0-8-3.578124-8-8v-432c0-4.417968 3.582031-8 8-8h320c4.417969 0 8 3.582032 8 8v150.242188c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-150.242188c0-13.253906-10.746094-23.9999995-24-23.9999995h-320c-13.253906 0-24 10.7460935-24 23.9999995v432c0 13.257813 10.746094 24 24 24h320c13.253906 0 24-10.742187 24-24v-80c0-4.417968-3.582031-8-8-8zm0 0" fill="#74f4ae"/></svg>
                                    </div>
                                    <div class="service-description">
                                    <h3>Lease</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                                    </div>
                                </div>
                                <div class="service">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 478.856 478.856" style="enable-background:new 0 0 478.856 478.856;" xml:space="preserve" width="40px" height="40px">
                                        <g>
                                            <g>
                                                <path d="M406.872,160.017c-0.005,0-0.011,0-0.016,0h-400c-3.782-0.004-6.852,3.058-6.856,6.84c0,0.005,0,0.011,0,0.016v192    c-0.004,3.782,3.058,6.852,6.84,6.856c0.005,0,0.011,0,0.016,0h272c3.786,0,6.856-3.07,6.856-6.856    c0-3.786-3.07-6.856-6.856-6.856H13.712V173.729H400v17.144c-0.004,3.782,3.058,6.852,6.84,6.856c0.005,0,0.011,0,0.016,0    c3.782,0.004,6.852-3.058,6.856-6.84c0-0.005,0-0.011,0-0.016v-24C413.716,163.091,410.654,160.022,406.872,160.017z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M360.36,128.185l-320-72c-1.776-0.397-3.637-0.075-5.176,0.896c-1.537,0.979-2.624,2.526-3.024,4.304l-16,72    c-0.822,3.698,1.51,7.362,5.208,8.184c3.698,0.822,7.362-1.51,8.184-5.208l14.504-65.288l313.296,70.488    c0.496,0.115,1.003,0.172,1.512,0.168c3.786-0.007,6.85-3.082,6.844-6.868C365.702,131.66,363.482,128.89,360.36,128.185z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M321.504,88.513l-192-80c-3.337-1.391-7.182,0.038-8.8,3.272l-16,32c-1.807,3.342-0.563,7.517,2.78,9.324    c3.342,1.807,7.517,0.563,9.324-2.78c0.071-0.131,0.138-0.265,0.2-0.401v0.016l13.128-26.272l186.072,77.528    c3.504,1.462,7.53-0.192,8.992-3.696C326.662,94.002,325.008,89.976,321.504,88.513z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M326.352,192.017h-63.496c-3.786,0-6.856,3.07-6.856,6.856c0,3.786,3.07,6.856,6.856,6.856h63.496    c3.786,0,6.856-3.07,6.856-6.856S330.138,192.017,326.352,192.017z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M198.856,192.473c-38.881,0-70.4,31.519-70.4,70.4c0.04,38.864,31.536,70.36,70.4,70.4c38.881,0,70.4-31.519,70.4-70.4    S237.737,192.473,198.856,192.473z M198.856,320.473c-31.812,0-57.6-25.788-57.6-57.6c0.035-31.797,25.803-57.565,57.6-57.6    c31.812,0,57.6,25.788,57.6,57.6C256.456,294.685,230.668,320.473,198.856,320.473z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M390.856,214.873c-42.4,0-88,10.016-88,32v192c0,21.984,45.6,32,88,32c42.4,0,88-10.016,88-32v-192    C478.856,224.889,433.256,214.873,390.856,214.873z M462.856,438.753c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16    v-12.576c17.024,8.576,45.144,12.576,72,12.576c26.856,0,54.984-4.04,72-12.584V438.753z M462.856,406.753    c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576c17.024,8.576,45.144,12.576,72,12.576    c26.856,0,54.984-4.04,72-12.584V406.753z M462.856,374.753c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576    c17.024,8.576,45.144,12.576,72,12.576c26.856,0,54.984-4.04,72-12.584V374.753z M462.856,342.753    c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576c17.024,8.576,45.144,12.576,72,12.576    c26.856,0,54.984-4.04,72-12.584V342.753z M462.856,310.753c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576    c17.024,8.536,45.144,12.576,72,12.576c26.856,0,54.984-4.04,72-12.584V310.753z M462.856,278.753    c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576c17.024,8.536,45.144,12.576,72,12.576    c26.856,0,54.984-4.04,72-12.584V278.753z M390.856,262.873c-46.728,0-70.712-11.648-72-15.856v-0.048    c1.288-4.456,25.272-16.096,72-16.096c46.4,0,70.4,11.472,72,16C461.256,251.401,437.256,262.873,390.856,262.873z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M134.856,320.009H74.384l-28.672-31.36v-52l31.664-30.92h57.48c3.786,0,6.856-3.07,6.856-6.856    c0-3.786-3.07-6.856-6.856-6.856H74.592c-1.792-0.004-3.515,0.694-4.8,1.944l-35.736,34.856c-1.335,1.56-2.067,3.547-2.064,5.6    v56.896c0,1.711,0.639,3.36,1.792,4.624l32.504,35.552c1.299,1.422,3.137,2.233,5.064,2.232h63.504    c3.786,0,6.856-3.07,6.856-6.856C141.712,323.079,138.643,320.009,134.856,320.009z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M202.856,254.873h-8c-2.488,0-4-1.392-4-2c0-0.608,1.512-2,4-2h20c4.418,0,8-3.582,8-8s-3.582-8-8-8h-8    c0-4.418-3.582-8-8-8s-8,3.582-8,8v0.36c-8.873,1.253-15.595,8.648-16,17.6c0.573,10.489,9.507,18.548,20,18.04h8    c2.488,0,4,1.392,4,2c0,0.608-1.512,2-4,2h-20c-4.418,0-8,3.582-8,8s3.582,8,8,8h8c0,4.418,3.582,8,8,8s8-3.582,8-8v-0.36    c8.873-1.253,15.595-8.648,16-17.6C222.283,262.424,213.349,254.365,202.856,254.873z" fill="#74f4ae"/>
                                            </g>
                                        </g>
                                        </svg>
                                    </div>
                                    <div class="service-description">
                                        <h3>Buy</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonials">
            <div class="testimonials">
                <h2>Testimonials</h2>
                <div class="testimonials-wrapper">
                    <div class="testimonial-card">
                        <div class="testimonial">
                            <figure>
                                <img src="{{ asset('img/testimony-1.jpg') }}" alt="">
                            </figure>
                            <div class="testimonial-description">
                                <p class="text">&#10077; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. &#10078;</p>
                                <p class="name">Chris Jones</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial">
                            <figure>
                                <img src="{{ asset('img/testimony-2.jpg') }}" alt="">
                            </figure>
                            <div class="testimonial-description">
                                <p class="text">&#10077; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. &#10078;</p>
                                <p class="name">Chris Jones</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial">
                            <figure>
                                <img src="{{ asset('img/testimony-3.jpg') }}" alt="">
                            </figure>
                            <div class="testimonial-description">
                                <p class="text">&#10077; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. &#10078;</p>
                                <p class="name">Chris Jones</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection