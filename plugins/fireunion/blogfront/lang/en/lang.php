<?php
return [
	'plugin' => [ //Plugin File
		'name' => 'Blog Front',
		'description' => 'Frontend form for RainLab Blog.',
		'user_btn' => 'Users',
		'tab' => 'BlogFront',
		'access_settings' => 'settings',
		'side_menu_author' => 'Delegated Authors',
	],
	'general' => [ // general terms

		'use_authors_title' => 'Use Preset Authors',
		'use_authors_description' => 'Use pre-configured delegated author settings from admin interface.( Ignore other settings )',
		'restrict_owner_title' => 'Restrict Posts to Author',
		'restrict_owner_description' => 'Only allow editing of posts front end user created.',
		'show_excerpt' => 'Show Excerpt',
		'show_excerpt_comment' => 'Show excerpt field for authors to add an exerpt to their posts.',
		'allow_pub_title' => 'Allow Publish',
		'allow_pub_description' => 'Allow users to publish their post. (No means an admin must do it.)',
		'back_user_title' => 'Backend Author',
		'back_user_description' => 'Proxy back end author for all posts.',
		'category_title' => 'Category',
		'category_description' => 'Category for all posts using this form.',
		'user_groups_title' => 'Sendable User Groups',
		'user_groups_description' => 'User groups that author can email notices to on saving of post.',
		'listpage_title' => 'List Page',
		'listpage_description' => 'Page containing Blog List component.',
		'formpage_title' => 'Form Page',
		'formpage_description' => 'Page containing Blog Form component.',
		'non_std_fields_title' => 'Non-standard Fields',
		'non_std_fields_description' => 'Comma seperated list of field names to save that do not come standard with Rainlab-Blog.',
		'opt_no' => 'No',
		'opt_yes' => 'Yes',
		'btn_add' => 'Add Post',
		'btn_edit' => 'Edit',
		'btn_delete' => 'Delete',
		'btn_save_publish' => 'Save and Publish',
		'btn_save_draft' => 'Save as Draft / Un-publish',
		'btn_preview' => 'Preview',
		'btn_cancel' => 'Cancel / Go Back to List',
		'saving' => 'Saving Post...',
		'delete_conf' => 'Do you really want to delete this post?',
		'every' => 'Every',
		'repeat' => 'Repeat',
		'btn_save' => 'Save',
		'categories' => 'Categories',
		'unauthorized' => 'You are not authorized to edit posts!',
		'notify_groups' => 'Select any user groups that you would like to notify about this new post:',
	],
	'ajax_comp' => [ // general terms
		'name' => 'Blog AJAX Form',
		'description' => 'Single page front end form to allow users to ad their own blog posts',
	],
	'list_comp' => [ // general terms
		'name' => 'Blog List',
		'description' => 'Front end list for picking which blog post to edit',
	],
	'form_comp' => [ // general terms
		'name' => 'Blog Form',
		'description' => 'Front end form to allow users to ad their own blog posts',
		'image_titles_desc' => 'Image Titles and Descriptions',
		'filename' => 'Filename',
		'title' => 'Title',
		'description' => 'Description',
		'basic_content' => 'Basic Content',
		'images' => 'Feature Images',
		'categories' => 'Categories',
		'notifications' => 'Notifications',
		'noimage_mess' => 'After uploading images refresh page to edit image titles and descriptions.',
	],
	'author' => [ // Author model
		'user_id' => 'Front End User',
		'user_id_comment' => 'User that authorship is delegated to.',
		'admin_id' => 'Admin User',
		'admin_id_comment' => 'Admin user that front end user will post as.  ( Blog posts are always tied to a backend user )',
		'categories' => 'Categories',
		'categories_comment' => 'Blog categories that this user can post to.',
		'can_publish' => 'Can Publish',
		'can_publish_comment' => 'User can write and publish imediately without admin intervention.',
		'allow_images' => 'Can Upload Images',
		'allow_images_comment' => 'User can upload feature images for posts.',
		'show_excerpt' => 'Show Excerpt',
		'show_excerpt_comment' => 'User can add a specific exerpt to their post.',

		'note' => 'Note',
		'note_comment' => 'Any notes concerning this delegation.',
	],
	'post' => [ // Post model
		'author' => 'Author',
	],

];
