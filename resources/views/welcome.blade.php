@extends('home.content')

@section('content')

  <!-- ---------------------- -->
  <!-- START FEATURE -->
      @include('home.sections.feature')
  <!-- END FEATURE -->
  <!-- ---------------------- -->
      
  <!-- ---------------------- -->
  <!-- START OFFER -->
      @include('home.sections.offer')
  <!-- END OFFER -->
  <!-- ---------------------- -->
      
  <!-- ---------------------- -->
  <!-- START GALLERY -->
      @include('home.sections.gallery')
  <!-- END GALLERY -->
  <!-- ---------------------- -->
      
  <!-- ---------------------- -->
  <!-- START PROCESS -->
      @include('home.sections.process')
  <!-- END PROCESS -->
  <!-- ---------------------- -->
      
  <!-- ---------------------- -->
  <!-- START ABOUT -->
      @include('home.sections.about')
  <!-- END ABOUT -->
  <!-- ---------------------- -->
      
  <!-- ---------------------- -->
  <!-- START NEWSLETTER -->
      @include('home.sections.newsletter')
  <!-- END NEWSLETTER -->
  <!-- ---------------------- -->

@endsection
