    <script src="{{ url('js/jquery.js') }}"></script>
	<script src="{{ url('js/popper.min.js') }}"></script>
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	<script src="{{ url('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ url('js/jquery.fancybox.js') }}"></script>
	<script src="{{ url('js/appear.js') }}"></script>
	<script src="{{ url('js/owl.js') }}"></script>
	<script src="{{ url('js/wow.js') }}"></script>
    <script src="{{ url('js/mixitup.js') }}"></script>
	<script src="{{ url('js/jquery-ui.js') }}"></script>
	<script src="{{ url('js/script.js') }}"></script>
	<!--slider-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>

		window.onload = function () {
			$('.slider').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 1500,
				arrows: true,
				dots: false,
				centerMode: true,
				centerPadding: '60px',
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		};


		//bottom left popup
		// Define the lists containing data
		const personNames = ['Aryan Shah', 'Nisha Patel', 'Rohit Gupta', 'Anjali Singh', 'Ajay Chakraborty', 'Kavya Menon', 'Abhishek Reddy', 'Shreya Banerjee', 'Saurabh Singhania', 'Ishaan Gupta', 'Riya Mehra', 'Arjun Rana', 'Swati Bhatnagar', 'Aditi Verma', 'Siddharth Iyer', 'Prachi Sharma', 'Siddharth Kumar', 'Amrita Das', 'Shivani Khanna', 'Vishal Rao', 'Diya Desai', 'Ankit Joshi', 'Neha Shetty', 'Kartik Kapoor', 'Smita Trivedi', 'Akash Patel', 'Vinita Nair', 'Rishi Gupta', 'Jhanvi Shah', 'Rohini Menon', 'Vikrant Singh', 'Asha Menon', 'Varun Sharma', 'Kavya Srinivasan', 'Jatin Desai', 'Sujit Chakraborty', 'Parthiban Iyer', 'Kirti Singh', 'Shalini Nair', 'Anjali Mehta', 'Prateek Patel', 'Madhuri Gupta', 'Amitabh Das', 'Aarushi Singh', 'Devanshi Jain', 'Anand Menon', 'Isha Sharma', 'Rajesh Tiwari', 'Ritika Sengupta', 'Deepak Kapoor'];
		const services = [
			{
				name: 'HTML Subscription',
				image: '/images/nem-image/html-website-design.jpg'
			},
			{
				name: 'WordPress Website Subscription',
				image: '/images/nem-image/html-website-design.jpg'
			},
			{
				name: 'Digital Marketing',
				image: '/images/nem-image/digital-marketing.jpg'
			},
			{
				name: 'Festival Post Design Service',
				image: '/images/nem-image/business-online-presence.jpg'
			},
			{
				name: 'Social Media Marketing',
				image: '/images/nem-image/wordepress-development.jpg'
			},
			{
				name: 'Business Online Presence',
				image: '/images/nem-image/business-online-presence.jpg'
			},
			{
				name: 'SEO',
				image: '/images/nem-image/seo.jpg'
			},
			{
				name: 'Content Writing Service',
				image: '/images/nem-image/content-writing.jpg'
			}
		];
		const images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg', 'image7.jpg', 'image8.jpg', 'image9.jpg'];

		// Get the HTML elements for the popup
		const popup = document.querySelector('.popup');
		const photo = popup.querySelector('.bought-service-photo');
		const text = popup.querySelector('.bought-service-text');

		// Define a function to update the popup with random data
		function updatePopup() {
			// Generate random data from the lists
			const randomIndex = Math.floor(Math.random() * personNames.length);
			const randomPerson = personNames[randomIndex];
			const randomService = services[Math.floor(Math.random() * services.length)];
			const randomImage = randomService.image;

			// Update the HTML elements with the random data
			photo.innerHTML = `<img src="${randomImage}" alt="${randomService.name} photo">`;
			text.textContent = `${randomPerson} purchased our ${randomService.name} service ${Math.floor(Math.random() * 23) + 1} hours ago.`;

			// Show the popup
			popup.classList.add('show');
		}

		// Call the updatePopup function every 5 seconds
		setInterval(() => {
			updatePopup();

			// Hide the popup after 5 seconds
			setTimeout(() => {
				popup.classList.remove('show');
			}, 10000);
		}, 40000); // Pause for 10 seconds between popups (5 seconds for display + 5 seconds for pause)




	</script>
@stack('script')

