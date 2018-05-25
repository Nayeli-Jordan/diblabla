<?php

return array(
    'tooltips' => array(
        // Area
        'grid-type' => __('There are 4 gallery types', 'sgg') . ':</br>' . __('Fixed, Horizontal, Vertical, Fixed Columns', 'sgg') . '</br><img src=@url/Grid.jpg />',
        'columns' => __('Number of columns with images on gallery page', 'sgg'),
        'responsive-columns' => __('The number of columns for a given width of the screen. We specify the standard 1200px for medium-sized screens, 768px for the tablets, 320 for mobile. You can change this sizes if you want.', 'sgg'),
        'distance' => '</br><img src=@url/distance_between_photos.jpg />',
        'area-height' => __('Height', 'sgg'),
        'area-width' => '</br><img src=@url/gallery-width.jpg />',
		'full-screen-width' => __('Enable fullwidth mode for your gallery', 'sgg'),
		'area-padding' => __('Set padding in pixels from both sides of gallery', 'sgg'),
        'photo-width' => '</br><img src=@url/width_bet_photos.jpg>',
        'photo-height' => '</br><img src=@url/height_bet_photos.jpg>',
        'browserUrlTooltipHideFree' => __('If this option is enabled, the links on the images will not be displayed in the browser. Also, it will be impossible to open gallery in popup. In the case you are not sure, please do not enable the option.', 'sgg'),
        'default-settings' =>__('If you enable this feature - all new galleries will be created with the same settings (even gallery type).', 'sgg') . '<br/>' .__('Important! Enable this feature only in one gallery.', 'sgg'),
	    // Border
        'border-type' => '<p><img src=@url/solid_border.jpg><img src=@url/Dashed_border.jpg></p><p><img src=@url/dotted_border.jpg><img src=@url/double_border.jpg></p>',
        /*'border-color' => 'Select color',*/
        'border-width' =>__('This option will work if selected Border type', 'sgg'),
        'border-radius' => '</br><img src=@url/image-radius.jpg>',
		'cropQuality' =>__('Specify quality for image thumbnails', 'sgg'),
        'display-first-photo' => __('When this option is enabled, only first picture from this gallery will be seen on the website. The other pictures will be seen in the popup window after clicking on the first picture.', 'sgg'),
        'open-by-link' =>__('If this option is enabled, then when one clicks on the link, which you can find below, the photos of gallery will be opened directly in popup. Note that the shortcode of this gallery should be added to the page, where you will use gallery link of this option.', 'sgg'),
		'social-buttons-project' =>__('Select Social Share Buttons project', 'sgg'),
		'gallery-social-sharing' =>__('Enable social share buttons on gallery page', 'sgg'),
		'image-social-sharing' =>__('Enable social share buttons on images', 'sgg'),
		'popup-social-sharing' =>__('Enable  social share buttons in popup images', 'sgg'),
		'popup-image-text' =>__('Select what text to show in popup (caption, title, alt text or description)', 'sgg'),
        // Shadow
        /*'shadow-color' => 'Select color',*/
        'shadow-blur' =>__('Blur in percents', 'sgg'),
		'when-mouse-is-over' =>__('Choose shadow effect by mouse hover', 'sgg'),
        'shadow-x' =>__('Offset by X', 'sgg'),
        'shadow-y' =>__('Offset by Y', 'sgg'),
        'slideshow' =>__('Start slideshow when open big image in popup', 'sgg'),
	    'box-disableHistory' =>__('If this option is checked - browser back button will close popup. If it is unchecked - images will be saved in browser history and will be opened on back or forward button click.', 'sgg'),
        'mobile' =>__('Check if you want to disable popups on mobile devices', 'sgg'),
        'captions' =>__('Check if you want to hide pagination and image caption on popup window', 'sgg'),
		'hide-long-tooltip-titles' => __( "To see the whole text of caption in popup window - you can hover on it and a new semi transparent box with the whole text will appear. If you don't use long text in captions, just tick this checkbox and extra tooltip in popup will be disabled.", 'sgg'),
        'overlay-personal' => __( "If option enabled you can choose personal caption effect per image in images list. If option disabled chosen effect will be used for all images", 'sgg'),
		'overlay-type' =>__('Enable overlay with shadow for all images in the gallery', 'sgg'),
		'overlay-effect-image-on-hover-enable' => __( "'Image on hover' - If this effect is enabled, the other image will be shown on the place of the current one, when hovering on it. The other image could be selected in the option below ('Select Image on hover') and will be shown for all images in this gallery. In case you want to show different pictures, upload them for each image separately on Images List section ('Hover Caption Image' tab). Please note, that 'Personal Captions' option should be enabled.", 'sgg'),
		'overlay-effect-image-on-hover' => __( "'Select Image on Hover' - Upload an image, that will be shown as hover effect for each picture in your gallery.", 'sgg'),
        'tooltip' =>__('If selected Yes tooltip on hovering image will not appear', 'sgg'),
        'ismobile' =>__('In order to show always captions on mobile devices - select Yes', 'sgg'),
        'isDisableMobileCaption' =>__('Check if you want to disable captions on mobile devices', 'sgg'),
        // Uncomment to enable overlay tooltips
        /*'overlay-effect' => 'Overlay effect',
        'overlay-background' => 'Overlay background color',
        'overlay-foreground' => 'Overlay text color',
        'overlay-transparency' => 'Overlay transparency',*/
		'preload' =>__('Turn on animated preloader only while gallery is loading', 'sgg'),
        //photoIcons
        'photo-icon' =>__('Select Show icons', 'sgg') . '</br><img src=@url/icons.jpg />',
        //Categories
        'categories-show' =>__('Select Show categories', 'sgg') . '</br><img src=@url/show_categories.jpg />',
        'animation-duration' =>__('Transition/animation speed in milliseconds', 'sgg'),
        'enable-shuffling-animation' =>__('Animated sorting and laying out a group of images', 'sgg'),
        //Pagination
        'pages-show' =>__('Enable pagination', 'sgg') . '</br><img src=@url/enable_pagination.jpg />',
        //Mosaic
        'mosaic-images-count' =>__('Show first images', 'sgg'),
		'mosaic-show-hidden-images' =>__('If this option is enabled -  after clicking on the Image with Count all hidden images will be displayed below.', 'sgg'),
		'hscroll-mouse-wheel' =>__('Scroll amount applied to each mouse wheel step', 'sgg'),
		'hscroll-touch-gest' =>__('Scroll amount applied when user is using gestures', 'sgg'),
    ),
    'tooltips_icon' => array(
        'icon' => 'question'
    ),
);