@include("backend.includes.header")
@include("backend.includes.css")
@include("backend.includes.sitebar")
@include("backend.includes.headpanel")
@include("backend.includes.rightpanel")


<!-- ########## START: MAIN PANEL ########## -->
@yield("content")
<!-- ########## END: MAIN PANEL ########## -->

@include("backend.includes.scripts")