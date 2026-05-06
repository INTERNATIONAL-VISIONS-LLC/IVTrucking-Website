<div class="map-wrap panel animated" id="nationwide">
  <div class="map-canvas">
    <img class="map-object" src="assets/us.svg" alt="United States freight service map">
    <svg class="routes-svg" viewBox="0 0 959 593" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
      <defs><filter id="routeGlow"><feGaussianBlur stdDeviation="3" result="blur"/><feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
      <!-- Coordinates aligned to the supplied us.svg viewBox: Baltimore/MD base, Denver CO, Chicago IL, Atlanta GA, Dallas TX, Los Angeles CA, Seattle WA, New York/Northeast. -->
      <path class="route blue" filter="url(#routeGlow)" d="M805 273 C735 260 670 250 610 236 C525 218 444 245 374 292"/>
      <path class="route gold" filter="url(#routeGlow)" d="M374 292 C470 322 610 332 720 305 C760 295 790 283 805 273"/>
      <path class="route dim" filter="url(#routeGlow)" d="M805 273 C710 248 650 225 603 217 C520 202 445 213 360 242 C260 276 185 315 121 350"/>
      <path class="route blue" filter="url(#routeGlow)" d="M805 273 C770 332 735 374 690 399 C610 446 540 448 469 421 C385 389 260 386 121 350"/>
      <path class="route gold" filter="url(#routeGlow)" d="M805 273 C780 230 735 204 668 192 C595 180 520 175 450 165 C330 148 210 98 99 62"/>
      <path class="route blue route-loop" filter="url(#routeGlow)" d="M805 273 C836 240 874 230 910 248 C940 264 943 303 918 326 C875 365 822 332 805 273"/>
      <path class="route gold route-loop" filter="url(#routeGlow)" d="M374 292 C350 310 318 308 296 289 C274 270 280 240 304 225 C338 204 376 239 374 292"/>
      <circle class="map-node base" cx="805" cy="273" r="7"/><circle class="map-node denver" cx="374" cy="292" r="7"/>
      <circle class="map-node" cx="603" cy="217" r="5"/><circle class="map-node" cx="690" cy="399" r="5"/><circle class="map-node" cx="469" cy="421" r="5"/><circle class="map-node" cx="121" cy="350" r="5"/><circle class="map-node" cx="99" cy="62" r="5"/><circle class="map-node" cx="884" cy="206" r="5"/>
    </svg>
    <span class="map-label map-label-point label-md">Maryland / Baltimore</span><span class="map-label map-label-point label-denver">Denver</span><span class="map-label map-label-point label-chicago">Chicago</span><span class="map-label map-label-point label-atlanta">Atlanta</span><span class="map-label map-label-point label-dallas">Dallas</span><span class="map-label map-label-point label-la">Los Angeles</span><span class="map-label map-label-point label-seattle">Seattle</span><span class="map-label map-label-point label-ny">Northeast</span>
  </div>
</div>
