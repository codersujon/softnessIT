<?php 
  $pageTitle = "Dashboard";
?>
@extends('backend.master.mastering')

@section("content")
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <!-- PAGE TITLE -->
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4><?= $pageTitle; ?></h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div>

    <div class="br-pagebody">
    
    <h1 class="display-1">Content Area</h1>

    </div><!-- br-pagebody -->
    @include("backend.includes.footer")
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection