<?php // $Id$

// This file defines settingpages and externalpages under the "hierarchies" category


    // Positions
    $ADMIN->add('hierarchies', new admin_category('positions', get_string('positions','position')));
    $ADMIN->add('positions', new admin_externalpage('positionframeworkmanage', get_string('positionframeworkmanage', 'position'), "$CFG->wwwroot/hierarchy/framework/index.php?type=position",
            array('moodle/local:viewposition')));

    $ADMIN->add('positions', new admin_externalpage('positionmanage', get_string('positionmanage', 'position'), $CFG->wwwroot . '/hierarchy/index.php?type=position',
            array('moodle/local:updateposition')));

    // Organisations
    $ADMIN->add('hierarchies', new admin_category('organisations', get_string('organisations', 'organisation')));
    $ADMIN->add('organisations', new admin_externalpage('organisationframeworkmanage', get_string('organisationframeworkmanage', 'organisation'), "$CFG->wwwroot/hierarchy/framework/index.php?type=organisation",
            array('moodle/local:vieworganisation')));

    $ADMIN->add('organisations', new admin_externalpage('organisationmanage', get_string('organisationmanage', 'organisation'), $CFG->wwwroot . '/hierarchy/index.php?type=organisation',
            array('moodle/local:updateorganisation')));

    // Competencies
    $ADMIN->add('hierarchies', new admin_category('competencies', get_string('competencies', 'competency')));
    $ADMIN->add('competencies', new admin_externalpage('competencyframeworkmanage', get_string('competencyframeworkmanage', 'competency'), "$CFG->wwwroot/hierarchy/framework/index.php?type=competency",
            array('moodle/local:viewcompetency')));

    $ADMIN->add('competencies', new admin_externalpage('competencymanage', get_string('competencymanage', 'competency'), "$CFG->wwwroot/hierarchy/index.php?type=competency",
            array('moodle/local:viewcompetency')));

    // Backup
    $ADMIN->add('hierarchies', new admin_externalpage('backup', get_string('backup'), "$CFG->wwwroot/$CFG->admin/hierarchybackup.php"));

    // Restore
    $ADMIN->add('hierarchies', new admin_externalpage('restore', get_string('restore'), "$CFG->wwwroot/$CFG->admin/hierarchyrestore.php"));

?>