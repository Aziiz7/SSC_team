@extends('layouts.appnew')

     @section('content')

     <div id="menu-1" class="homepage home-section container">
	 <div class="projects-header">
				<h1 class="animated fadeInRight"><span class="blue">Our Diagrams</span></h1>
				<p class="animated fadeInLeft">Before developing the website, we will definitely need to create Diagrams to give a predictive shape to the tools and features of the system, and here we will display all Diagrams.</p>
				<ul class="list-icons animated fadeInUp">
				    <li><i class="gg-website"></i></li>
					<li><i class="gg-template"></i></li>
					<li><i class="gg-pen"></i></li>
				</ul>
			</div>
			<div class="projects-holder">
				<div class="row">
					<div class="col-md-4 col-sm-6 p-1 animated umScaleIn">
						<div class="project-item">
						<img src="{{ asset('NewTemplate') }}/img/UseCase.jpg" alt="">
							<div class="overlay">
								<h4><a target="_blank" href="{{ asset('NewTemplate') }}/img/UseCase.jpg">Use Case Diagram</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 p-2 animated umScaleIn">
						<div class="project-item">
							<img src="{{ asset('NewTemplate') }}/img/E-R.png" alt="">
							<div class="overlay">
								<h4><a target="_blank" href="{{ asset('NewTemplate') }}/img/E-R.png">Entity Relationship Diagram</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 p-3 animated umScaleIn">
						<div class="project-item">
							<img src="{{ asset('NewTemplate') }}/img/DataFlow.jpg" alt="">
							<div class="overlay">
								<h4><a target="_blank" href="{{ asset('NewTemplate') }}/img/DataFlow.jpg">Data Flow Diagram</a></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 p-4 animated umScaleIn">
						<div class="project-item animated umScaleIn">
							<img src="{{ asset('NewTemplate') }}/img/GanttChart.jpg" alt="">
							<div class="overlay">
								<h4><a target="_blank" href="{{ asset('NewTemplate') }}/img/GanttChart.jpg">Gantt Chart Diagram</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="project-item p-5 animated umScaleIn">
							<img src="{{ asset('NewTemplate') }}/img/SwimLanes.jpg" alt="">
							<div class="overlay">
								<h4><a target="_blank" href="{{ asset('NewTemplate') }}/img/SwimLanes.jpg">SwimLanes Diagram</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="project-item p-6 animated umScaleIn">
							<img src="{{ asset('NewTemplate') }}/img/6.jpg" alt="">
							<div class="overlay">
								<h4><a href="#">Project Six</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="project-item p-7 animated umScaleIn">
							<img src="{{ asset('NewTemplate') }}/img/7.jpg" alt="">
							<div class="overlay">
								<h4><a href="#">Project Seven</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

     @endsection