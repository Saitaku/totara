<?php
/*

Totara LMS Changelog

Release 2.4.0 (30 April 2013):
==================================================

Initial release of Totara 2.4

2.4 introduces the following new features:

* Open badges support
  * Create and issue verifiable digital achievements
  * Define criteria to automatically issue badges
  * Link to an external "backpack" to import and export badges
  * Badges compliant with Mozilla Open Badges standard

* Major improvements to Face-to-face including:
  * Ability to create and assign rooms to sessions
  * Room, trainer and user conflict management
  * Activity and session wide notifications
  * Notification templates

* Support for user-supplied evidence in Learning plans and Record of Learning
  * Create evidence of learning outside the LMS
  * Link evidence to items within a learning plan
  * Admin can create evidence types to support categorisation of evidence

* Learning plan improvements
  * Ability to allow users to select from multiple learning plan templates
  * Ability to bulk create learning plans for all users within an audience

* External database plugin for Totara Sync
  * Ability to connect to a separate database to sync users, positions and organisations

* Performance settings for Report Builder:
  * Option to cache reports
  * Option to generate reports from a separate reporting database
  * Option to prevent loading of report until filters are applied

This release updates Totara to be based on Moodle 2.4, which includes the following improvements:

* Improvements to file picker (including usability improvements, drag and drop in supported browsers, file aliases)
* Improvements to course editing (including drag and drop to add content in supported browsers, new activity picker, moving blocks, sections and resourses by dragging)
* Repository improvements (including EQUELLA repository support, aliases within repositories, access to server files for more activities)
* A new assignment module
* Improvements to the quiz, SCORM and workshop modules
* Performance improvements (including new 'Moodle Universal Cache')
* Course format plugins
* Improved icon support
* Improved TinyMCE editor integration (including customising the toolbar icons via settings)
* Integration of external calendars (allows streaming of external calendar events into Totara via iCal)
* Full support for unicode filenames in zip archives

For more details on the Moodle changes see:

http://docs.moodle.org/dev/Moodle_2.3_release_notes
http://docs.moodle.org/dev/Moodle_2.4_release_notes

See INSTALL.txt for the new system requirements for 2.4.

API Changes:

* Moodle API changes as detailed in the Moodle release notes
* Report builder activity groups are deprecated. The menu item has been removed from 2.4
  and code will be removed in a subsequent release.

*/
?>