@extends('layout.layout')

@section('title', 'Careers')

@section('page', 'Careers')

@section('content')
<section id="partner">
			<h2 class="hide">What we look for in company partners</h2>
			<div class="content">

				<div id="partnerMain">
					<p class="title">Partner with Reactr on digital Media Projects</p>
				</div>

				<div id="partnerList">
					<p class="subTitle">What we look for in company partners:</p>

					<ul>
						<li> <strong>Start-ups to medium-sized companies</strong>, looking to establish their media presence, or to solve technical/digital issues through applied research in developing a digital media tool. </li>
						<li>Companies looking for <strong>digital media consultation and conceptualization </strong> of a specialized digital media project.</li>
						<li> <strong>Non-profit companies </strong>looking to establish or rebuild their digital media presence. </li>
					</ul>

				</div>
            </div>
				

		</section>


    <section id="offer">
	<h2 class="hide">What We Offer</h2>


	<div class="mainOffer">
		<p class="subTitle">WHAT WE OFFER</p>
		<p class="copy">Each Reactr project is developed by a team of students dedicated to that project, </br> supervised and supported by Fanshawe faculty and staff.</p>
		<p class="copy">The work that we undertake falls into these main categories:</p>
		<div id="offerButton" class="hireUs button hvr-grow-shadow"><a href="#contactUs">WORK WITH US</a></div>
	</div>

	<div class="content">

		<div id="design" class="offer">
			<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54.5">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    /*stroke: #f85177;*/
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2 {
				    /*fill: #f85177;*/
				    fill: #fff;
				  }
				</style>
				</defs>
				<title>icon_design</title>
				<rect class="cls-1" x="1" y="1" width="59" height="40.5" rx="5.94" ry="5.94"/>
				<line class="cls-1" x1="1" y1="31" x2="60" y2="31"/>
				<circle class="cls-2" cx="30.5" cy="36.5" r="1.5"/>
				<line class="cls-1" x1="24" y1="49.5" x2="26.5" y2="41.5"/>
				<line class="cls-1" x1="34.5" y1="41.5" x2="37" y2="49.5"/>
				<rect class="cls-1" x="16" y="49.5" width="29" height="4"/>
				<g id="design">
				<rect class="cls-1" x="20.5" y="9" width="12" height="11"/>
				<circle class="cls-1" cx="34.5" cy="19" r="6"/>
				</g>
			</svg>
			<!-- <img src="images/icon_design.svg" alt="web design icon" width="60"> -->
			<p class="smallTitle">WEB DESIGN and development</p>
			<p class="copy">Creation of a customized informational Web site for a company, with content management features.</p>
		</div>

		<div id="development" class="offer">
			<!-- <img src="images/icon_development.svg" alt="web development icon" width="60"> -->
			<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54.5">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2, .cls-3 {
				    fill: #fff;
				  }

				  .cls-3 {
				    font-size: 16.85px;
				    font-family: Ubuntu-Bold, Ubuntu;
				    font-weight: 700;
				  }
				</style>
				</defs>
				<title>icon_development</title>
				<rect class="cls-1" x="1" y="1" width="59" height="40.5" rx="5.94" ry="5.94"/>
				<line class="cls-1" x1="1" y1="31" x2="60" y2="31"/>
				<circle class="cls-2" cx="30.5" cy="36.5" r="1.5"/>
				<line class="cls-1" x1="24" y1="49.5" x2="26.5" y2="41.5"/>
				<line class="cls-1" x1="34.5" y1="41.5" x2="37" y2="49.5"/>
				<rect class="cls-1" x="16" y="49.5" width="29" height="4"/>
				<text class="cls-3" transform="translate(17.25 21.35)">&lt;/&gt;</text>
			</svg>
			<p class="smallTitle">large scale web application development</p>
			<p class="copy">Planning and building of a complex, Web-based application to address more specific company needs.</p>
		</div>

		<div id="branding" class="offer">
			<!-- <img src="images/icon_branding.svg" alt="branding icon" width="73"> -->
			<svg id="Layer_4" data-name="Layer 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.25 55.25">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2 {
				    fill: #fff;
				  }
				</style>
				</defs>
				<title>icon_branding</title>
				<polyline class="cls-1" points="43 49 43 54.25 1 54.25 1 1 43 1 43 28"/>
				<rect class="cls-1" x="30" y="27.63" width="42.25" height="21.63"/>
				<rect class="cls-1" x="47.88" y="1.88" width="24.38" height="14.75"/>
				<circle class="cls-2" cx="10.53" cy="12.03" r="2.78"/>
				<line class="cls-1" x1="17.69" y1="12.03" x2="33.25" y2="12.03"/>
				<circle class="cls-2" cx="38.45" cy="36.58" r="2.78"/>
				<line class="cls-1" x1="45.6" y1="36.58" x2="61.17" y2="36.58"/>
				<circle class="cls-2" cx="60" cy="9.25" r="2.78"/>
			</svg>

			<p class="smallTitle">Graphic design and BRANDING</p>
			<p class="copy">The Reactr team works with a company to create a design and branding document for Web and print use.</p>
		</div>

		<div id="software" class="offer">
			<!-- <img src="images/icon_software.svg" alt="software icon" width="60"> -->
			<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54.5">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2 {
				    fill: #fff;
				  }
				</style>
				</defs>
				<title>icon_software</title>
				<rect class="cls-1" x="1" y="1" width="59" height="40.5" rx="5.94" ry="5.94"/>
				<line class="cls-1" x1="1" y1="31" x2="60" y2="31"/>
				<circle class="cls-2" cx="30.5" cy="36.5" r="1.5"/>
				<line class="cls-1" x1="24" y1="49.5" x2="26.5" y2="41.5"/>
				<line class="cls-1" x1="34.5" y1="41.5" x2="37" y2="49.5"/>
				<rect class="cls-1" x="16" y="49.5" width="29" height="4"/>
				<circle class="cls-1" cx="30.5" cy="16.5" r="10"/>
				<path class="cls-1" d="M372.73,666v-8.62a1.38,1.38,0,0,0-1.38-1.38h-2.12" transform="translate(-344.5 -639.5)"/>
				<path class="cls-1" d="M375.88,666V652.9a1.48,1.48,0,0,0-1.38-1.57h-2.12" transform="translate(-344.5 -639.5)"/>
				<path class="cls-1" d="M378.31,665.25V657.6c0-1.11.62-2,1.38-2h.54" transform="translate(-344.5 -639.5)"/>
				<circle class="cls-1" cx="24.16" cy="16.5" r="1.5"/>
				<circle class="cls-1" cx="36.93" cy="16.1" r="1.5"/>
				<circle class="cls-1" cx="27.16" cy="11.83" r="1.5"/>
			</svg>
			<p class="smallTitle">digital media consultation and planning</p>
			<p class="copy">Planning meetings with a company to define a longer-term digital strategy and development  timelines.</p>
		</div>
	</div>
</section>

<section id="serviceScales">
     <div id="scaleTitle">
        <p class="subTitle">PROJECT DETAILS</p>
		<p class="copy"></p>
     </div>   

     
        <div class="scaleSection" id="smallScale">
            <p class="smallTitle" id="scaleType">Small-scale</p>
        <div class="scaleRowDiv">
    
            <div class="scaleIncludes">
                <p class="smallTitle">Service:</p>
                <p class="copy">
                    Includes the design and development of an informational website</p>
            </div>
            <div class="scaleProjects">
                <p class="smallTitle">Included:</p>
                <p class="copy">
                    <ul>
                        <li>Website with 1 contact form and 1 database</li>
                        <li>Creation of digital media content</li>
                        <li>Social media prescence and branging</li>
                    </ul></p>
            </div>
            <div class="scaleLength">
                <p class="smallTitle">Length:</p>
                <p class="copy">12 weeks starting in September or January</p>
            </div>
        </div>
        <div class="scaleTimeline">
            <p class="smallTitle">Timeline:</p>
        </div>
     </div>

     <div class="scaleSection" id="largeScale">
         <p class="smallTitle" id="scaleType">Large-scale</p>
     <div class="scaleRowDiv">
        <div class="scaleIncludes">
            <p class="smallTitle">Service:</p>
            <p class="copy">
                    A project requiring design, web development, and database architecture</p>
        </div>
        <div class="scaleProjects">
            <p class="smallTitle">Included:</p>
            <p class="copy">
                    <ul>
                        <li>Web portals/tools</li>
                        <li>Custom frameworks</li>
                        <li>Toolkits</li>
                    </ul></p>
        </div>
        <div class="scaleLength">
            <p class="smallTitle">Length:</p>
            <p class="copy">24 weeks, divided into 2 - 12 weeks blocks</p>
        </div>
    </div>
        <div class="scaleTimeline">
            <p class="smallTitle">Timeline:</p>
        </div>
     </div>

     <div class="scaleSection" id="consultScale">
        <p class="smallTitle" id="scaleType">Media consultation</p>
     <div class="scaleRowDiv">
        <div class="scaleIncludes">
            <p class="smallTitle">Service:</p>
            <p class="copy"> Offered to start-ups and medium-sized companies, with a digital media/technology project that is still in the ideation / planning stages.</p>
        </div>
        <div class="scaleProjects">
            <p class="smallTitle">Included:</p>
            <p class="copy">
                    <ul>
                        <li>Assessment reports</li>
                        <li>Recommendations</li>
                        <li>Could potentially lead to a small or large scale project with Reactr</li>
                    </ul></p>
        </div>
        <div class="scaleLength">
            <p class="smallTitle">Length:</p>
            <p class="copy"> 2-3 meetings (can be remote)</p>
        </div>
     </div>
        <div class="scaleTimeline">
            <p class="smallTitle">Timeline:</p>
        </div>
     </div>

</section>
		





@endsection

@section('pagescript')

@endsection