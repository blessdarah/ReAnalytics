<div class="course__sidebar pl-70 p-relative">
    <div class="course__sidebar-widget-2 white-bg mb-20">
        <div class="course__video">
            <div class="course__video-content mb-35">
                <h3>Extra info</h3>
                <ul>
                    <li class="d-flex align-items-center">
                        <div class="course__video-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"></path>
                                <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "></polyline>
                            </svg>
                        </div>
                        <div class="course__video-info">
                            <h5><span>Start date :</span> {{$project->formatDate($project->start_date)}}</h5>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="course__video-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">

                                <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"></path>
                                <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"></path>
                            </svg>
                        </div>
                        <div class="course__video-info">
                            <h5><span>End date :</span>{{$project->formatDate($project->end_date)}}</h5>
                        </div>
                    </li>
            </div>
        </div>
    </div>
