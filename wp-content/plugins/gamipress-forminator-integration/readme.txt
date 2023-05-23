=== GamiPress - Forminator integration ===
Contributors: gamipress, tsunoa, rubengc, eneribs
Tags: form, quiz, gamipress, gamification, points, achievements, badges, awards, rewards, credits, engagement, contact, forms, forminator, submit, submission, poll
Requires at least: 4.4
Tested up to: 6.2
Stable tag: 1.0.9
License: GNU AGPLv3
License URI:  http://www.gnu.org/licenses/agpl-3.0.html

Connect GamiPress with Forminator

== Description ==

Gamify your [Forminator](http://wordpress.org/plugins/forminator/ "Forminator") submissions thanks to the powerful gamification plugin, [GamiPress](https://wordpress.org/plugins/gamipress/ "GamiPress")!

This plugin automatically connects GamiPress with Forminator adding new activity events.

= New Events =

= Forms =

* New form submission: When an user submits a form.
* Specific form submission: When an user submits a specific form.
* Submit a specific field value on any form: When an user submits a specific field value on a form.
* Submit a specific field value on a specific form: When an user submits a specific field value on a specific form.

= Quizzes =

* New quiz submission: When an user submits a quiz.
* Specific quiz submission: When an user submits a specific quiz.
* Pass a quiz: When an user passes a quiz.
* Pass a specific quiz: When an user passes a specific quiz.
* Fail a quiz: When an user fails a quiz.
* Fail a specific quiz: When an user fails a specific quiz.
* Submit a specific field value on any quiz: When an user submits a specific field value on a quiz.
* Submit a specific field value on a specific quiz: When an user submits a specific field value on a specific quiz.

= Polls =

* New poll vote: When an user votes on a poll.
* Specific poll vote: When an user votes on a specific poll.
* Submit a specific field value on any poll: When an user submits a specific field value on a poll.
* Submit a specific field value on a specific poll: When an user submits a specific field value on a specific poll.

== Installation ==

= From WordPress backend =

1. Navigate to Plugins -> Add new.
2. Click the button "Upload Plugin" next to "Add plugins" title.
3. Upload the downloaded zip file and activate it.

= Direct upload =

1. Upload the downloaded zip file into your `wp-content/plugins/` folder.
2. Unzip the uploaded zip file.
3. Navigate to Plugins menu on your WordPress admin area.
4. Activate this plugin.

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 1.0.9 =

* **Improvements**
* Prevent form submission event get triggered twice.

= 1.0.8 =

* **Improvements**
* Update the submit poll listener to match with the latest version of Forminator.

= 1.0.7 =

* **Improvements**
* Correctly detect the number of times the user submits a specific field value for fields with multiples options.

= 1.0.6 =

* **Improvements**
* Update the submit form listener to match with the latest version of Forminator.

= 1.0.5 =

* **Bug Fixes**
* Fixed typo on fail quiz events labels.

= 1.0.4 =

* **New Features**
* Added support for checking array field values.
* Added extra information of field name and value attached to the event log.
* Added filters to exclude fields from trigger the events.

= 1.0.3 =

* **New Features**
* New event: Submit a specific field value on any form.
* New event: Submit a specific field value on a specific form.
* New event: Submit a specific field value on any quiz.
* New event: Submit a specific field value on a specific quiz.
* New event: Submit a specific field value on any poll.
* New event: Submit a specific field value on a specific poll.

= 1.0.2 =

* **New Features**
* Added 4 new events related to quiz submission.


= 1.0.1 =

* **Bug Fixes**
* Fixed small typo on quiz submissions listener.

= 1.0.0 =

* Initial release.
