<?php

/**
 * The main template file
 */
get_header();
?>


<!------------------------------------ Slider start --------------------------------------------->
<section class="owl-slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="slider-header">
					<div class="left-title">
						<h2><?php the_field('slider_section_title'); ?></h2>
					</div>
					<div class="owl-btn">
						<button class="see-more-btn">See More Websites</button>
					</div>
				</div>

				<div id="news-slider" class="owl-carousel">

					<?php if ( have_rows('slider_content') ) : ?>
						<?php while ( have_rows('slider_content') ) : the_row(); ?>

							<?php 
								$image = get_sub_field('slider_image');
								$title = get_sub_field('slider_title');
								$paragraph = get_sub_field('slider_paragraph');
							?>

							<div class="post-slide">
								<div class="post-img">
									<?php if ($image): ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
									<?php endif; ?>
								</div>

								<div class="post-content">
									<h3 class="post-title">
										<a href="#"><?php echo esc_html($title); ?></a>
									</h3>
									<p class="post-description"><?php echo esc_html($paragraph); ?></p>
								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>

			</div>
		</div>
	</div>
</section>

<!-- End -->

<!------------------------------------ GET YOUR WEBSITE SECTION CODE START ---------------------->
<div class="getYourWebsite">
	<div class="left">
		<img src="<?php echo get_template_directory_uri(); ?> /assets/images/mobile.png" alt="" />
	</div>
	<div class="right">
		<h2>
			Get your website in <br />
			<span style="color: #89d991"> three easy steps </span>
		</h2>
		<div class="text">
			<div>
				<svg width="38" height="44" viewBox="0 0 38 44" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M8.42867 4.39555C8.84535 4.3209 9.29597 4.37248 9.72895 4.58828L29.7965 14.5888C31.4307 15.4032 31.3112 17.7744 29.6038 18.4218L26.6069 19.5551C25.2971 20.0505 24.8342 21.6671 25.6812 22.7814L31.5501 30.4922C32.2505 31.4124 32.0727 32.7249 31.1524 33.4253L28.8301 35.1938C28.5586 35.4001 28.2519 35.5304 27.937 35.5874C27.1878 35.7245 26.3897 35.4436 25.8956 34.7961L20.0267 27.0854C19.5218 26.4217 18.7224 26.1597 17.984 26.2941C17.4804 26.385 17.0054 26.6592 16.6715 27.118L14.7794 29.7036C14.4374 30.1732 13.9691 30.4406 13.4778 30.5302C12.4259 30.7202 11.2735 30.0918 11.0347 28.8689L6.7402 6.8631C6.49996 5.6334 7.35233 4.591 8.42867 4.39555ZM7.1976 0.679288C5.12366 1.05526 3.25196 2.27139 2.06162 4.01551C0.863128 5.76913 0.428795 7.88921 0.83734 9.98487L5.13181 31.9906C5.95704 36.2186 10.0805 39.0309 14.3234 38.2613C15.7417 38.0034 17.0434 37.3696 18.1089 36.4317L21.0745 40.3257C22.8852 42.7064 25.84 43.8533 28.784 43.3186C30.0042 43.0973 31.1714 42.5829 32.1609 41.8296L34.4832 40.0624C36.1649 38.7825 37.2467 36.9244 37.5317 34.8301C37.8154 32.7358 37.267 30.6564 35.9871 28.9747L33.0201 25.0779C35.0967 23.7111 36.4431 21.4187 36.5707 18.8683C36.7295 15.7276 35.0126 12.7917 32.1989 11.3897L12.1314 1.38779C10.5881 0.61821 8.882 0.373898 7.1976 0.679288Z"
						fill="#240D4B" />
				</svg>
			</div>
			<div>
				<h3>Selected</h3>
				<p>From our library of professional-grade templates,</p>
			</div>
		</div>
		<div class="line"></div>
		<div class="text">
			<div>
				<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M46.1091 19.5986L40.1935 18.996C39.98 18.9742 39.8039 18.8291 39.734 18.6265C39.5045 17.9572 39.2299 17.3092 38.9203 16.6817C38.8247 16.4884 38.848 16.2609 38.9843 16.0936L42.7461 11.4792C43.3486 10.7403 43.294 9.66542 42.6199 8.99092L39.0088 5.38025C38.3347 4.70611 37.2598 4.65184 36.5209 5.25404L31.9065 9.0158C31.7393 9.15214 31.5117 9.17541 31.318 9.07977C30.6905 8.76981 30.0429 8.49566 29.3736 8.26615C29.171 8.1962 29.0259 8.0201 29.0041 7.80665L28.4016 1.89103C28.3051 0.942313 27.5068 0.221191 26.5532 0.221191H21.4468C20.4937 0.221191 19.6949 0.942313 19.5981 1.8906L18.9959 7.80665C18.9742 8.0201 18.8291 8.1962 18.6261 8.26615C17.9568 8.49566 17.3092 8.76981 16.6817 9.07977C16.4879 9.17541 16.2604 9.15214 16.0932 9.0158L11.4788 5.25404C10.7399 4.65184 9.665 4.70611 8.99086 5.38025L5.38019 8.99092C4.70606 9.66542 4.65178 10.7403 5.25398 11.4792L9.01575 16.0936C9.15202 16.2612 9.17536 16.4884 9.07971 16.6821C8.76975 17.3092 8.49597 17.9572 8.2661 18.6261C8.19651 18.8291 8.02004 18.9742 7.80659 18.996L1.89097 19.5981C0.942257 19.695 0.220703 20.4937 0.220703 21.4473V26.5533C0.220703 27.5068 0.942257 28.3055 1.89097 28.4021L7.80659 29.0042C8.02004 29.0259 8.19651 29.171 8.2661 29.374C8.49597 30.0429 8.76975 30.6909 9.07971 31.318C9.17536 31.5118 9.15202 31.7389 9.01575 31.9066L5.25398 36.521C4.65141 37.2598 4.70606 38.3348 5.38019 39.0089L8.99086 42.6199C9.665 43.2941 10.7399 43.3483 11.4788 42.7461L16.0935 38.9843C16.2608 38.848 16.4883 38.8248 16.6821 38.9204C17.3092 39.2304 17.9572 39.5041 18.6261 39.734C18.8291 39.8036 18.9742 39.9796 18.9959 40.1935L19.5981 46.1096C19.6949 47.0579 20.4937 47.779 21.4468 47.779H26.5532C27.5068 47.779 28.3051 47.0579 28.4016 46.1091L29.0041 40.1935C29.0259 39.9801 29.171 39.804 29.3736 39.734C30.0429 39.5041 30.6905 39.2304 31.318 38.9204C31.5117 38.8248 31.7393 38.848 31.9065 38.9843L36.5209 42.7461C37.2598 43.3483 38.3347 43.2941 39.0088 42.6199L42.6199 39.0093C43.294 38.3351 43.3486 37.2598 42.7461 36.521L38.9843 31.9066C38.848 31.7393 38.8247 31.5118 38.9203 31.3185C39.2299 30.6909 39.5045 30.0429 39.734 29.374C39.8039 29.171 39.98 29.0259 40.1935 29.0042L46.1087 28.4021C47.0574 28.3055 47.7789 27.5064 47.7789 26.5533V21.4469C47.7789 20.4937 47.0574 19.695 46.1091 19.5986ZM33.9482 29.0094L30.4666 25.5282C30.6406 24.9638 30.7311 24.3508 30.7311 23.7302C30.7311 22.0543 30.0795 20.4676 28.8892 19.2561C27.028 17.4149 24.1783 16.9121 21.8066 18.0031C21.6225 18.0875 21.4918 18.2563 21.4557 18.4557C21.4203 18.6535 21.4838 18.8577 21.6265 19.0004L24.0448 21.4195C24.3994 21.7677 24.5948 22.2332 24.5948 22.732C24.5948 23.2293 24.3994 23.6952 24.0408 24.0481C23.3229 24.7681 22.1423 24.7649 21.4062 24.0469L18.9951 21.6165C18.8524 21.473 18.6494 21.4139 18.4472 21.4436C18.247 21.4802 18.077 21.6129 17.9937 21.799C17.6195 22.6271 17.4306 23.5123 17.4306 24.428C17.4306 26.1091 18.1023 27.7339 19.2677 28.8784C20.8877 30.5173 23.3028 31.1207 25.5157 30.4698L28.999 33.9535C27.4939 34.7108 25.7999 35.1474 23.9998 35.1474C17.8434 35.1474 12.8523 30.1567 12.8523 24.0003C12.8523 17.8434 17.8434 12.8528 23.9998 12.8528C30.1562 12.8528 35.1474 17.8434 35.1474 24.0003C35.1474 25.804 34.7088 27.502 33.9482 29.0094Z"
						fill="#240D4B" />
				</svg>
			</div>
			<div>
				<h3>Customise</h3>
				<p>
					With brand-specific colors, fonts, and images to <br />
					make the site uniquely yours.
				</p>
			</div>
		</div>
		<div class="line"></div>
		<div class="text">
			<div>
				<svg width="52" height="48" viewBox="0 0 52 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M36.1839 32.0896C32.7181 34.7207 29.221 36.7632 26.0335 38.0128C25.689 38.1486 25.3485 38.2753 25.0181 38.3902V46.5001L36.5448 34.9733L36.1839 32.0896Z"
						fill="#240D4B" />
					<path
						d="M19.9127 15.82L17.0304 15.4592L5.50391 26.986H13.6127C13.7277 26.6552 13.8546 26.3138 13.9915 25.9669C15.2401 22.7819 17.2822 19.2852 19.9127 15.82Z"
						fill="#240D4B" />
					<path
						d="M35.829 29.2536C37.6152 27.8273 39.369 26.2572 41.0504 24.576C44.9923 20.634 47.9874 15.4053 49.9523 9.0348C50.159 8.36571 50.3521 7.68969 50.5265 7.0248C51.2978 4.09853 51.6638 1.63194 51.8307 0.173828C50.3729 0.340689 47.9067 0.706359 44.9813 1.47768C44.3143 1.65257 43.6382 1.84572 42.9703 2.05202C36.5996 4.01491 31.3703 7.00946 27.4272 10.9528C25.7456 12.6344 24.1752 14.3884 22.7487 16.1748C22.5955 16.3664 22.4427 16.5583 22.293 16.7507C20.2856 19.3281 18.6223 21.9207 17.3931 24.3741C16.9677 25.2234 16.5935 26.0562 16.2762 26.8655C16.2099 27.0337 16.1464 27.1994 16.0859 27.3627L24.6404 35.9171C24.8031 35.857 24.9681 35.7939 25.1348 35.728C25.9462 35.4098 26.7811 35.0346 27.6324 34.608C30.0856 33.3786 32.6769 31.7158 35.2532 29.7091C35.4456 29.5596 35.6373 29.4066 35.829 29.2536ZM36.9476 15.0564C35.054 13.1629 35.054 10.082 36.9476 8.18844C38.8409 6.29492 41.9222 6.29492 43.8155 8.18844C45.709 10.082 45.709 13.1629 43.8155 15.0564C41.922 16.9499 38.8411 16.9499 36.9476 15.0564Z"
						fill="#240D4B" />
					<path
						d="M42.0796 9.9243C41.1434 8.98812 39.6199 8.98812 38.6836 9.9243C37.7474 10.8605 37.7474 12.3839 38.6837 13.3201C39.6199 14.2563 41.1432 14.2563 42.0796 13.3201C43.0157 12.3839 43.0157 10.8605 42.0796 9.9243Z"
						fill="#240D4B" />
					<rect x="15.0044" y="37.2537" width="3.29567" height="6.13462" transform="rotate(-45 15.0044 37.2537)"
						fill="#240D4B" />
					<rect x="0.847412" y="39.823" width="14.005" height="2.4553" transform="rotate(-45 0.847412 39.823)"
						fill="#240D4B" />
					<rect x="0.313477" y="40.4751" width="28.3838" height="2.4553" transform="rotate(-45 0.313477 40.4751)"
						fill="#240D4B" />
					<rect x="5.1228" y="45.8965" width="18.3494" height="2.45517" transform="rotate(-45.003 5.1228 45.8965)"
						fill="#240D4B" />
				</svg>
			</div>
			<div>
				<h3>Launch</h3>
				<p>A website that's ready to go live and drive results.</p>
			</div>
		</div>
		<div class="textLast">
			<svg width="32" height="49" viewBox="0 0 32 49" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M31.9932 47.1226H9.51074H1.5V0.729004" stroke="#240D4B" stroke-width="2" stroke-linejoin="round" />
			</svg>
			<button>Talk To Us</button>
		</div>
		<img src="/assets/images/greenlight.png" class="greenLight" alt="">
	</div>
</div>
<!-- END -->

<!------------------------------------ WE ARE ALL ABOUT SIMPLICITY START ------------------------->
<div class="simplicity">
	<div></div>
	<div>
		<img src="<?php echo get_template_directory_uri(); ?> /assets/images/we're-about-img-01.png" />
	</div>
	<div class="inner">
		<h2>We're all about simplicity, speed and results</h2>
		<p>
			Our unique approach combines pre-designed templates with customisation
			options to match your brand's unique identity. This means you get a
			beautifully designed, fully responsive, and optimised website faster
			than ever, with the confidence that everything is crafted with
			intention and expertise. <br />
			<br />
			We're not just building websites; we're powering up your online
			presence
			<b>so you can focus on what you do best.</b>
		</p>
		<div class="buttonContainer">
			<button>Find Out more</button><button>Talk To Us</button>
		</div>
	</div>
</div>
<!-- END -->


<!------------------------------------ HERE'S WHAT TO EXPECT START ------------------------------->
<div class="expect">
	<div>
		<h3>
			HERE'S WHAT TO EXPECT:
		</h3>
		<ul>
			<li>
				<svg xmlns="http://www.w3.org/2000/svg" width="121" height="103" viewBox="0 0 121 103" fill="none">
					<path
						d="M95.3949 49.2188C95.3949 49.7211 95.1993 50.1958 94.8364 50.5587L71.1066 73.8697C70.7436 74.2327 70.2692 74.4283 69.7665 74.4283H69.7386C69.2359 74.4002 68.7336 74.2046 68.3988 73.8138L54.1888 58.7384C53.4628 57.9565 53.4909 56.7563 54.2726 56.0305L62.4242 48.3253C62.8151 47.9903 63.2619 47.7949 63.7922 47.8229C64.2945 47.8229 64.7972 48.0461 65.1322 48.409L70.1295 53.7134L84.2838 39.8383C85.0372 39.0845 86.2379 39.0845 86.9917 39.8383L94.8643 47.8508C95.2271 48.2134 95.4227 48.7161 95.3949 49.2188Z"
						fill="#AEE9B6" />
					<path
						d="M76.4424 23.1392V18.0788C76.4424 17.0238 75.587 16.1689 74.5327 16.1689C73.4782 16.1689 72.6228 17.0238 72.6228 18.0788V23.1392C72.6228 24.1942 73.4782 25.0492 74.5327 25.0492C75.587 25.0492 76.4424 24.1942 76.4424 23.1392Z"
						fill="#AEE9B6" />
					<path
						d="M72.6228 90.5552V95.6166C72.6228 96.6713 73.4782 97.5263 74.5325 97.5263C75.587 97.5263 76.4424 96.6713 76.4424 95.6166V90.5552C76.4424 89.5005 75.587 88.6455 74.5325 88.6455C73.4782 88.6455 72.6228 89.5005 72.6228 90.5552Z"
						fill="#AEE9B6" />
					<path
						d="M113.301 58.7571C114.356 58.7571 115.211 57.9024 115.211 56.8474C115.211 55.7921 114.356 54.9375 113.301 54.9375H108.241C107.187 54.9375 106.331 55.7921 106.331 56.8474C106.331 57.9024 107.187 58.7571 108.241 58.7571H113.301Z"
						fill="#AEE9B6" />
					<path
						d="M120.129 56.8401C120.129 81.9937 99.666 102.457 74.5404 102.457C60.4704 102.457 47.5442 96.1198 38.8343 85.1203H15.3278C14.2669 85.1203 13.4014 84.2827 13.4014 83.2218C13.4014 82.1611 14.2669 81.2958 15.3278 81.2958H43.5522C44.6132 81.2958 45.4783 82.1611 45.4783 83.2218C45.4783 84.1713 44.7246 84.9528 43.8037 85.0646C51.7039 93.7189 62.6756 98.6323 74.5404 98.6323C97.5723 98.6323 116.305 79.8719 116.305 56.8401C116.305 33.8082 97.5723 15.0759 74.5404 15.0759C62.7035 15.0759 51.7317 19.9614 43.8593 28.5598H55.5568C56.6174 28.5598 57.4829 29.4251 57.4829 30.4863C57.4829 31.5189 56.6174 32.3845 55.5568 32.3845H18.2309C17.1704 32.3845 16.3049 31.5189 16.3049 30.4863C16.3049 29.4251 17.1704 28.5598 18.2309 28.5598H38.8343C46.3998 18.984 57.2038 12.9541 69.1522 11.5582V3.8251H67.9519C66.891 3.8251 66.0538 2.95944 66.0538 1.92657C66.0538 0.865662 66.891 0 67.9519 0H81.129C82.1622 0 83.0275 0.865662 83.0275 1.92657C83.0275 2.95944 82.1622 3.8251 81.129 3.8251H79.9287V11.5862C84.4512 12.1445 88.7783 13.3167 92.7984 15.1037L95.9531 9.74345C97.4608 7.20291 100.755 6.33742 103.323 7.84492C104.97 8.79436 105.975 10.5809 105.975 12.4794C105.975 13.4285 105.724 14.3779 105.249 15.1873L102.067 20.6034C113.011 28.9228 120.129 42.0438 120.129 56.8401Z"
						fill="#AEE9B6" />
					<path
						d="M8.31816 49.967H38.2938C39.3484 49.967 40.2037 49.1124 40.2037 48.0573C40.2037 47.0021 39.3484 46.1475 38.2938 46.1475H8.31816C7.26382 46.1475 6.40845 47.0021 6.40845 48.0573C6.40845 49.1124 7.26382 49.967 8.31816 49.967Z"
						fill="#AEE9B6" />
					<path
						d="M2.77885 67.5471H33.6584C34.7127 67.5471 35.5681 66.6924 35.5681 65.6374C35.5681 64.5822 34.7127 63.7275 33.6584 63.7275H2.77885C1.72451 63.7275 0.869141 64.5822 0.869141 65.6374C0.869141 66.6924 1.72451 67.5471 2.77885 67.5471Z"
						fill="#AEE9B6" />
				</svg>
				<div>
					<h2>
						Fast Turnarounds
					</h2>
					<p>
						Get your website live in record time without compromising on quality.
					</p>
				</div>
			</li>
			<li>
				<svg xmlns="http://www.w3.org/2000/svg" width="89" height="86" viewBox="0 0 89 86" fill="none">
					<path
						d="M87.1745 47.4341H74.7798C62.2159 47.7259 62.2309 66.8162 74.78 67.1038H87.1745C88.0488 67.1012 88.7568 66.3931 88.7595 65.5188V49.0191C88.7609 48.5983 88.5944 48.1943 88.2969 47.8967C87.9993 47.5992 87.5953 47.4326 87.1745 47.4341ZM77.0939 58.846C76.2186 58.846 75.509 58.1364 75.509 57.261C75.509 56.3857 76.2186 55.676 77.094 55.676C77.9694 55.676 78.679 56.3857 78.679 57.2611C78.679 58.1365 77.9693 58.846 77.0939 58.846Z"
						fill="#AEE9B6" />
					<path
						d="M62.195 57.6892C61.9834 54.2139 63.2129 50.8048 65.5941 48.2646C67.9754 45.7244 71.298 44.2774 74.7798 44.2644H85.6686L85.6685 40.4445C85.655 33.8823 80.3433 28.5635 73.7811 28.5413H9.82694C8.07336 28.5205 6.39441 27.8285 5.13553 26.6076C3.25117 24.6948 2.69147 21.8414 3.71361 19.3585C4.73574 16.8756 7.14206 15.2433 9.82694 15.2115H26.184L32.3972 12.0415H9.82694C4.40164 12.0462 0.00472069 16.443 9.53674e-07 21.8683L0 74.0938C0.00858545 80.6642 5.33284 85.9884 11.9033 85.997H73.7813C80.3517 85.9885 85.676 80.6642 85.6846 74.0938V70.2739H74.7798C67.8318 70.2683 62.2008 64.6372 62.195 57.6892Z"
						fill="#AEE9B6" />
					<path
						d="M18.3977 25.3713L60.9755 4.63439C61.3826 4.42804 63.2128 2.9574 64.139 4.63439L74.2066 25.8626C76.8453 25.8741 75.3252 25.8694 77.5377 25.8626L64.7943 0.867298C64.3999 0.0888823 63.4496 -0.223145 62.6704 0.169903L40.0526 11.6928C32.5356 15.5179 20.8601 21.5026 13.2188 25.3712L18.3977 25.3713Z"
						fill="#AEE9B6" />
				</svg>
				<div>
					<h2>
						Affordable options
					</h2>
					<p>
						High-end designs at prices that won’t break the bank.
					</p>
				</div>
			</li>
			<li>
				<svg xmlns="http://www.w3.org/2000/svg" width="122" height="106" viewBox="0 0 122 106" fill="none">
					<path
						d="M120.84 71.1215C119.784 69.9432 95.4342 43.2429 64.1529 41.4067C61.9164 41.2754 59.7094 41.1738 57.4762 41.4067C26.195 43.2429 1.84531 69.9432 0.789668 71.1215C-0.263223 72.2931 -0.263223 74.0728 0.789668 75.2444C1.84531 76.4227 26.195 103.123 57.4762 104.959C59.7154 105.091 61.9165 105.192 64.153 104.959C95.4343 103.123 119.784 76.4226 120.84 75.2444C121.892 74.0728 121.892 72.2931 120.84 71.1215ZM86.5833 73.1829C86.5833 87.392 75.0236 98.9516 60.8146 98.9516C46.6056 98.9516 35.0459 87.392 35.0459 73.1829C35.0459 58.9739 46.6056 47.4143 60.8146 47.4143C75.0236 47.4143 86.5833 58.9739 86.5833 73.1829ZM35.8426 53.3028C31.4851 58.7648 28.8614 65.6685 28.8614 73.1829C28.8614 80.6974 31.4851 87.6011 35.8426 93.0631C22.1505 86.8326 11.617 77.3424 7.40294 73.1829C11.617 69.0235 22.1505 59.5333 35.8426 53.3028ZM85.7865 93.0631C90.1441 87.6011 92.7678 80.6974 92.7678 73.1829C92.7678 65.6685 90.1441 58.7648 85.7865 53.3028C99.4787 59.5333 110.012 69.0235 114.226 73.1829C110.012 77.3424 99.4787 86.8326 85.7865 93.0631Z"
						fill="#AEE9B6" />
					<path
						d="M58.0361 88.3985C62.3553 89.1551 67.3207 87.9099 70.7514 85.0284C74.2624 82.0811 76.2756 77.7608 76.2756 73.1829C76.2756 71.4757 74.8905 70.0906 73.1833 70.0906C68.0678 70.0906 63.9066 65.9274 63.9066 60.8139C63.9066 59.1068 62.5215 57.7217 60.8143 57.7217C56.2344 57.7217 51.9181 59.7348 48.9688 63.2458C46.0235 66.7528 44.7934 71.3871 45.5967 75.961C46.6919 82.1898 51.8074 87.3074 58.0361 88.3985Z"
						fill="#AEE9B6" />
					<path
						d="M60.8144 22.6764C62.5216 22.6764 63.9066 21.2914 63.9066 19.5842V3.09224C63.9066 1.38508 62.5216 0 60.8144 0C59.1072 0 57.7222 1.38508 57.7222 3.09224V19.5842C57.7222 21.2914 59.1072 22.6764 60.8144 22.6764Z"
						fill="#AEE9B6" />
					<path
						d="M32.8896 29.0181C33.4933 29.6218 34.2841 29.9238 35.075 29.924C37.7441 29.9248 39.1526 26.5359 37.2622 24.6455L25.5999 12.9811C24.3919 11.7732 22.4351 11.7732 21.2272 12.9811C20.0193 14.189 20.0193 16.1459 21.2272 17.3538L32.8896 29.0181Z"
						fill="#AEE9B6" />
					<path
						d="M86.5533 29.8906C87.3474 29.8928 88.1473 29.6101 88.7393 29.0181L100.402 17.3538C101.61 16.1459 101.61 14.189 100.402 12.9811C99.1938 11.7732 97.237 11.7732 96.029 12.9811C96.029 12.9811 84.4069 24.6052 84.3668 24.6454C82.4417 26.5708 83.8647 29.8831 86.5533 29.8906Z"
						fill="#AEE9B6" />
				</svg>
				<div>
					<h2>
						Clear and honest deliverables
					</h2>
					<p>
						No jargon, no surprises—just exactly what you need.
					</p>
				</div>
			</li>
	</div>
</div>

<!-- END -->

<!------------------------------------ GREENLIGHT WAS CREATED START ------------------------------>
<div class="expectContainer">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?> /assets/images/stock.png" alt="">
		<span>A message from our founder</span>
		<h2>
			Greenlight was created to fix the pitfalls I've seen over my 20 year
			career
		</h2>
		<div class="details">
			<p>
				When I started this journey, I had one goal in mind: to simplify the
				process of building high-quality websites for businesses like yours.
				I've seen too many people overwhelmed by complicated tech, overblown
				costs, and endless delays—and I knew there had to be a better way.
				<br /><br />
				At Green Light Digital, we believe every business deserves a
				professional online presence without the stress. That's why we focus
				on speed, affordability, and transparency, delivering websites that
				not only look amazing but are ready to drive results. <br /><br />
				<b>Thank you for trusting us with your vision. We're excited to help
					you bring it to life!
				</b>
			</p>
			<h3>
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/founder-sign.png" alt="" class="founder-sign-img">
			</h3>
			<div>
				<div>
					<p><b>Daniel Brown</b></p>
					<p>Founder & Director</p>
				</div>
				<button>
					Get Started
				</button>
			</div>
		</div>
	</div>
</div>

<!-- END -->


<!---------------------------------- GREENLIGH GIVING BACK START ---------------------------------->
<section class="giving-back-section">
	<div class="container">
		<div class="d-flex justify-content-between align-items-start flex-wrap">
			<div class="mb-3">
				<h2>Greenlight giving back</h2>
				<p class="mb-1">First and foremost, we are business, but we are also doing our bit to be the good guys!</p>
				<p>Here’s how we’re supporting the local community.</p>
			</div>
			<button class="find-out-btn mb-3">Find Out More</button>
		</div>

		<div class="row g-4">
			<div class="col-md-4">
				<div class="card-box">
					<img src="<?php echo get_template_directory_uri(); ?> /assets/images/giving-back-04.png" alt="Family Action Logo">
					<h3 class="card-title mt-3 fw-bold">Family In Action</h3>
					<p>We donate 1% of our profits to this vital charity, helping families in need.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card-box">
					<img src="<?php echo get_template_directory_uri(); ?> /assets/images/giving-back-02.png" alt="Learning Support">
					<h3 class="card-title mt-3 fw-bold">Learning Support</h3>
					<p>We train and employ young adults with disabilities to build confidence, develop web skills, and earn a
						meaningful income.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card-box">
					<img src="<?php echo get_template_directory_uri(); ?> /assets/images/giving-back-03.png" alt="Community Support">
					<h3 class="card-title mt-3 fw-bold">Community support</h3>
					<p>We create free websites for businesses in need, keeping them online and operational during challenging
						times.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End -->

<!--------------------------- What our clients say Slider start  ---------------------------------->
<section class="owl-slider owl-slider-dup" id="clients-testimonials">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="slider-header">
					<div class="left-title">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-btn">
						<button class="see-more-btn">Read More Reviews</button>
					</div>
				</div>

				<div id="news-slider-2" class="owl-carousel">

					<div class="post-slide"
						style="background-color: #240D4B; padding: 50px; border-radius: 20px; color: white;">

						<!-- Stars on Top -->
						<div class="stars" style="text-align: left; margin-bottom: 10px; color: #AEE9B6;">
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
						</div>


						<!-- First Paragraph (center aligned) -->

						<div class="fir-slider-content" style="text-align: left; margin-top: 10px;">
							<p class="post-description" style="margin: 10px 0; color: white;">Green Light Digital took my website to
								the next level in record time! The design options were fantastic, and the customization process was so
								smooth. Now, my site looks polished and professional, and I didn’t have to break the bank. Highly
								recommend!</p>
						</div>

						<!-- Second Paragraph (left aligned) -->
						<div style="text-align: left; margin-top: 10px;">
							<p>- Alex P, Small Business Owner</p>
						</div>

					</div>

					<div class="post-slide"
						style="background-color: #240D4B; padding: 50px; border-radius: 20px; color: white;">

						<!-- Stars on Top -->
						<div class="stars" style="text-align: left; margin-bottom: 10px; color: #AEE9B6;">
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
						</div>


						<!-- First Paragraph (center aligned) -->

						<div class="fir-slider-content" style="text-align: left; margin-top: 10px;">
							<p class="post-description" style="margin: 10px 0; color: white;">Green Light Digital took my website to
								the next level in record time! The design options were fantastic, and the customization process was so
								smooth. Now, my site looks polished and professional, and I didn’t have to break the bank. Highly
								recommend!</p>
						</div>

						<!-- Second Paragraph (left aligned) -->
						<div style="text-align: left; margin-top: 10px;">
							<p>- Alex P, Small Business Owner</p>
						</div>

					</div>

					<div class="post-slide"
						style="background-color: #240D4B; padding: 50px; border-radius: 20px; color: white;">

						<!-- Stars on Top -->
						<div class="stars" style="text-align: left; margin-bottom: 10px; color: #AEE9B6;">
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
						</div>


						<!-- First Paragraph (center aligned) -->

						<div class="fir-slider-content" style="text-align: left; margin-top: 10px;">
							<p class="post-description" style="margin: 10px 0; color: white;">Green Light Digital took my website to
								the next level in record time! The design options were fantastic, and the customization process was so
								smooth. Now, my site looks polished and professional, and I didn’t have to break the bank. Highly
								recommend!</p>
						</div>

						<!-- Second Paragraph (left aligned) -->
						<div style="text-align: left; margin-top: 10px;">
							<p>- Alex P, Small Business Owner</p>
						</div>

					</div>

					<div class="post-slide"
						style="background-color: #240D4B; padding: 50px; border-radius: 20px; color: white;">
						<!-- Stars on Top -->
						<div class="stars" style="text-align: left; margin-bottom: 10px; color: #AEE9B6;">
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
						</div>


						<!-- First Paragraph (center aligned) -->

						<div class="fir-slider-content" style="text-align: left; margin-top: 10px;">
							<p class="post-description" style="margin: 10px 0; color: white;">Green Light Digital took my website to
								the next level in record time! The design options were fantastic, and the customization process was so
								smooth. Now, my site looks polished and professional, and I didn’t have to break the bank. Highly
								recommend!</p>
						</div>

						<!-- Second Paragraph (left aligned) -->
						<div style="text-align: left; margin-top: 10px;">
							<p>- Alex P, Small Business Owner</p>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>

</section>
<!-- End -->


<!-------------------------- Follow us on social media section start ------------------------------->
<section class="social-media-section" id="social-media-section">
	<div class="container">
		<div class="social-header">
			<h2>Follow us on social media</h2>
			<div class="social-icons">

				<a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
				<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
				<a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>

			</div>

		</div>

		<div class="social-cards">
			<div class="social-card">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/follow-us-01.png" alt="Weekend" />
			</div>
			<div class="social-card">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/follow-us-02.png" alt="Greenlight" />
			</div>
			<div class="social-card">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/follow-us-03.png" alt="Greenlight Digital" />
			</div>
			<div class="social-card">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/follow-us-04.png" alt="Storefront" />
			</div>
		</div>
	</div>
</section>
<!-- End -->

<?php
get_footer();
?>