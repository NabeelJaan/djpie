<footer id="footer" class="site-footer bg-white pt-[90px] pb-10 px-4 xl:px-0" role="contentinfo">
	<div class="max-w-[1280px] mx-auto">
		<div class="md:flex gap-8">
			<div class="md:w-4/12">
				<div class="md:max-w-[320px]">

					<a href="<?php echo site_url(); ?>" class="inline-block pb-5">
						<img class="max-w-[200px]" src="<?php echo get_theme_mod('footer1_logo_setting'); ?>" alt="site logo">
					</a>

					<p class="text-[var(--content-color2)] text-base font-poppins">
						<?php echo get_theme_mod('footer1_about_text_setting');?>
					</p>

					<div class="s_icons flex items-center gap-5 mt-5">

						<?php
							$facebook_link = get_theme_mod('footer1_facebook_text_setting');
							$twitter_link = get_theme_mod('footer1_twitter_text_setting');
							$linkedin_link = get_theme_mod('footer1_linkedin_text_setting');
							$instagram_link = get_theme_mod('footer1_instagram_text_setting');
						?>

						<?php if($facebook_link): ?>
						<a href="<?php echo $facebook_link; ?>" aria-label="facebook" target="_blank" class="border border-[var(--primary-color)] w-[40px] h-[40px] flex items-center justify-center rounded-full transition ease-in-out duration-300 hover:scale-110">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
								<path fill="var(--primary-color)" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
							</svg>
						</a>
						<?php endif; ?>

						<?php if($twitter_link): ?>
						<a href="<?php echo $twitter_link; ?>" aria-label="twitter" target="_blank" class="border border-[var(--primary-color)] w-[40px] h-[40px] flex items-center justify-center rounded-full transition ease-in-out duration-300 hover:scale-110">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
								<path fill="var(--primary-color)" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
							</svg>
						</a>
						<?php endif; ?>
						
						<?php if($linkedin_link): ?>
						<a href="<?php echo $linkedin_link; ?>" aria-label="linkedin" target="_blank" class="border border-[var(--primary-color)] w-[40px] h-[40px] flex items-center justify-center rounded-full transition ease-in-out duration-300 hover:scale-110">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
								<path fill="var(--primary-color)" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
							</svg>
						</a>
						<?php endif; ?>

						<?php if($instagram_link): ?>
						<a href="<?php echo $instagram_link; ?>" aria-label="instagram" target="_blank" class="border border-[var(--primary-color)] w-[40px] h-[40px] flex items-center justify-center rounded-full transition ease-in-out duration-300 hover:scale-110">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
								<path fill="var(--primary-color)" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
							</svg>
						</a>
						<?php endif; ?>

					</div>
				</div>
			</div>

			<!-- 2nd Column -->
			<div class="py-8 md:py-0 md:w-5/12">
				<h3 class="text-primary text-lg font-Oswald font-semibold uppercase mb-5">
					<?php echo get_theme_mod('footer1_recent_post_heading_setting'); ?>
				</h3>

				<?php
				// Query the latest post
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
				);

				$latest_post_query = new WP_Query($args);

				if ($latest_post_query->have_posts()) :
					while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
				?>

					<div class="my-2">
						<a href="<?php the_permalink(); ?>"><h4 class="font-poppins font-normal text-base text-[var(--content-color2)] hover:text-eerieBlack transition-all duration-300 ease-in-out"><?php the_title(); ?></h4></a>
					</div>

				<?php
					endwhile;
					wp_reset_postdata();
				else :
					echo 'No posts found.';
				endif;
				?>

			</div>

			<!-- 3rd column -->
			<div class="md:w-3/12">
				<h3 class="text-primary text-lg font-Oswald font-semibold uppercase mb-5">
					<?php echo get_theme_mod('footer1_menu_heading_setting'); ?>
				</h3>

				<div>
					<?php
						wp_nav_menu(
							array(
								'container_id'    => 'sb-menu',
								'container_class' => 'lg:mt-0 lg:p-0 bg-transparent',
								'menu_class'      => 'flex flex-col gap-2',
								'theme_location'  => 'footer',
								'li_class'        => 'text-[var(--content-color2)] font-poppins mt-2 md:mt-0 transition-all duration-300 ease-in-out',
								'fallback_cb'     => false,
							)
						);
					?>
				</div>

			</div>
		</div>
	</div>
	<!-- Copyright text -->
	<div class="text-[var(--content-color2)] font-poppins text-center pt-[50px] mt-[50px] border-t-charcoal border-t">
		<div class="px-4">
			&copy; <?php echo date_i18n( 'Y' );?> | <a class="hover:text-eerieBlack transition-all duration-300 ease-in-out">
			<?php echo get_theme_mod('footer1_copy_right_setting'); ?>
		</a>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

<script>

	document.addEventListener('DOMContentLoaded', function() {

		const copyLink = document.getElementById('copyLink');
		const copyMessage = document.getElementById('copyMessage');

		if(copyLink) {
			copyLink.addEventListener('click', function(event) {
				event.preventDefault();
				const linkUrl = copyLink.getAttribute('href');
				const tempInput = document.createElement('input');
				tempInput.setAttribute('value', linkUrl);
				document.body.appendChild(tempInput);
				tempInput.select();
				document.execCommand('copy');
				document.body.removeChild(tempInput);
				copyMessage.style.display = 'inline'; // Show message below link
				setTimeout(function() {
					copyMessage.style.display = 'none'; // Hide message below link after 2 seconds
				}, 4000);
			});
		}

		const toc = document.getElementById('rank-math-toc');
		const sidebar = document.querySelector('.toc_list');

		if (toc && sidebar) {
			sidebar.appendChild(toc);
		}

		// Underline the first TOC link by default
		const firstTocLink = document.querySelector('#rank-math-toc a');
		if (firstTocLink) {
			firstTocLink.classList.add('active');
		}

		// Observer to add 'active' class to the current TOC link
		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
					const id = entry.target.getAttribute('id');
					const tocLink = document.querySelector(`#rank-math-toc a[href="#${id}"]`);
					if (tocLink) {
						if (entry.isIntersecting) {
							tocLink.classList.add('active');
						} else {
							tocLink.classList.remove('active');
						}
					}
			});
		}, { threshold: 0.4 }); // Adjust threshold value as needed

		// Observe all sections with an 'id' to link them with TOC
		document.querySelectorAll('section[id]').forEach((section) => {
			observer.observe(section);
		});

		// Function to clear all 'active' classes
		function clearActiveLinks() {
			document.querySelectorAll('#rank-math-toc a').forEach(link => {
					link.classList.remove('active');
			});
		}

		// Add 'scroll' event listener
		window.addEventListener('scroll', () => {
			let fromTop = window.scrollY;
			let currentActiveId = '';

			document.querySelectorAll('#rank-math-toc a').forEach(link => {
					let section = document.querySelector(link.hash);

					if (section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
						currentActiveId = link.getAttribute('href');
					}
			});

			// Clear existing 'active' classes and add to the current active TOC link
			if (currentActiveId) {
					clearActiveLinks();
					document.querySelector(`#rank-math-toc a[href="${currentActiveId}"]`).classList.add('active');
			}
		});

		// Get references to the search icon and search form
		var searchIcon = document.getElementById("searchIcon");
		var searchForm = document.getElementById("searchForm");

		// Event listener to toggle the search form when the search icon is clicked
		searchIcon.addEventListener("click", function(event) {
			event.preventDefault(); // Prevent default click behavior
			searchForm.classList.toggle("active"); // Toggle the 'active' class on the search form
		});

		// Event listener to hide the search form when clicking anywhere else in the document
		document.addEventListener("click", function(event) {
			if (!searchForm.contains(event.target) && !searchIcon.contains(event.target) && searchForm.classList.contains("active")) {
					searchForm.classList.remove("active"); // Hide the search form
			}
		});

		// Prevents the document click listener from firing when the searchForm itself is clicked
		searchForm.addEventListener("click", function(event) {
			event.stopPropagation();
		});

		const select = document.getElementById('mySelect');

		select.addEventListener('change', function() {
			this.style.width = this.selectedOptions[0].text.length + 'ch';
		});
    });
</script>


</body>
</html>