@extends('app')

@section('content')
 <div class="section section_features">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="section__title">
              General network lookup functions
            </h1>
            <p class="section__intro">
              Simple web interface to gather information about domains and servers
            </p>
            <div class="section__hr section__hr_center"></div>
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <!-- Features item #1 -->
            <div class="features__item">
              <!-- Icon -->
              <div class="features__icon wow flipInY">
                <i class="fa fa-globe"></i>
                <i class="fa fa-globe"></i> <!-- Required for animation -->
              </div>
              <!-- Title -->
              <h2 class="features__title">
                DNS tools
              </h2>
              <!-- Intro -->
              <p class="features__intro">
                Check if the dns records are set correctly and verify the reverse dns.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <!-- Features item #2 -->
            <div class="features__item">
              <!-- Icon -->
              <div class="features__icon wow flipInY" data-wow-delay=".2s">
                <i class="fa fa-envelope fa-4x"></i>
                <i class="fa fa-envelope fa-4x"></i> <!-- Required for animation -->
              </div>
              <!-- Title -->
              <h2 class="features__title">
                E-mail tools
              </h2>
              <!-- Intro -->
              <p class="features__intro">
               Check if the customer's ip address is blacklisted.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <!-- Features item #3 -->
            <div class="features__item">
              <!-- Icon -->
              <div class="features__icon wow flipInY" data-wow-delay=".2s">
                <i class="fa fa-eye fa-4x"></i>
                <i class="fa fa-eye fa-4x"></i> <!-- Required for animation -->
              </div>
              <!-- Title -->
              <h2 class="features__title">
                Network monitoring
              </h2>
              <!-- Intro -->
              <p class="features__intro">
                This app comes with a standard network tools
              </ul>    
               </p>
            </div>
          </div>
        </div> <!-- / .row -->
            <hr></hr>

                <div class="row">
          <div class="col-xs-12 col-sm-4">
            <!-- Features item #1 -->
            <div class="features__item">
              <!-- Icon -->
              <div class="features__icon wow flipInY">
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i> <!-- Required for animation -->
              </div>
              <!-- Title -->
              <h2 class="features__title">
                Dynamic IP2host
              </h2>
              <!-- Intro -->
              <p class="features__intro">
                Keep your dynamic host alive!
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <!-- Features item #2 -->
            <div class="features__item">
              <!-- Icon -->
              <div class="features__icon wow flipInY" data-wow-delay=".2s">
                <i class="fa fa-bell fa-4x"></i>
                <i class="fa fa-bell fa-4x"></i> <!-- Required for animation -->
              </div>
              <!-- Title -->
              <h2 class="features__title">
                Alert notifications
              </h2>
              <!-- Intro -->
              <p class="features__intro">
               Get notifited if your website or server goes down.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <!-- Features item #3 -->
            <div class="features__item">
              <!-- Icon -->
              <div class="features__icon wow flipInY" data-wow-delay=".2s">
                <i class="fa fa-server fa-4x"></i>
                <i class="fa fa-server fa-4x"></i> <!-- Required for animation -->
              </div>
              <!-- Title -->
              <h2 class="features__title">
                Network tools
              </h2>
              <!-- Intro -->
              <p class="features__intro">
                This app comes with a standard network tools
              </ul>    
               </p>
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </div> <!-- / .section -->

@endsection